<?php
// PixiFoto Oxford
$fb_page_id = "1560762397530522";
 
$json_album_link = "http://graph.facebook.com/{$fb_page_id}/albums?fields=id,name,description,link,cover_photo,count";
$json_album_contents = file_get_contents($json_album_link);
 
$album_obj = json_decode($json_album_contents, true);
 
$album_count = count($album_obj['data']);

for ($i = 0; $i < $album_count; $i += 1) {

    $album_id = $album_obj['data'][$i]['id'];
    $name = $album_obj['data'][$i]['name'];
    $description = isset($album_obj['data'][$i]['description']) ? $album_obj['data'][$i]['description'] : null;
    $link = $album_obj['data'][$i]['link'];
    $cover_photo = $album_obj['data'][$i]['cover_photo'];
    $img_count = $album_obj['data'][$i]['count'];
 
    // Include or exclude albums
    if ($name === 'piximagic') {
 
        $json_photo_link = "http://graph.facebook.com/{$album_id}/photos?fields=id,source,created_time";
        $json_photo_contents = file_get_contents($json_photo_link);
         
        $photo_obj = json_decode($json_photo_contents, true);

        $photo_obj['data'] = array_reverse($photo_obj['data']);

        $desiredSize = 500;

        $imagePackage = array();
        
        for ($y = 0; $y < 12; $y += 1) {

            $source = $photo_obj['data'][$y]['source'];
            $photo_id = $photo_obj['data'][$y]['id'];
            $created_time = $photo_obj['data'][$y]['created_time'];

            $cropped_image = "http://graph.facebook.com/{$photo_id}/picture?width={$desiredSize}&height={$desiredSize}";

            $imagePackage[$y]['cropped_image'] = urldecode($cropped_image);
            $imagePackage[$y]['created_time'] = $created_time;
        }

        function compare($a, $b)
        {
            if ($a === $b) {
                return 0;
            }
            return ($a < $b) ? -1 : 1;
        }

        echo json_encode($imagePackage);
        exit;
    }
}

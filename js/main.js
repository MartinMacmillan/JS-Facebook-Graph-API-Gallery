(function (window, document, $) {
    'use strict';
    var gallery = $(document.getElementById('gallery')).find('ul'),
    	footer = document.getElementById('footer'),
    	galleryImages,
        galleryImageCount,
        i,
        interval,
        loading = document.getElementById('loading'),
        imagesLoaded = false,
        lastImg;

    function adjustStyles() {
	    gallery.find('.fb-thumbnail-container').css({
			'height': gallery.find('li').width(),
            'width': '100%'
		});
        $(galleryImages).css({
            'height': gallery.find('li').width(),
            'width':'100%'
        });
    }

    function preloadImage(url) {
        var img = new Image();
        img.src = url;
    }

    function showGallery() {
    	if (!gallery.hasClass('loaded')) {
    		$(loading).css({
    			'display': 'none'
    		});
    		gallery.find('.fb-thumbnail-container').fadeIn(500, adjustStyles);
    		$(footer).fadeIn(500);
    		gallery.addClass('loaded');
    	}
    }

    function renderGallery(imagePackage) {  	
    	$(imagePackage).each(function (index, value) {
            preloadImage(value.cropped_image);
            if (index === imagePackage.length - 1) {
                lastImg = value.cropped_image;
            }
    		$('<li><div class="fb-thumbnail-container"><i class="fb-thumbnail" data-media-url="' + value.cropped_image + '"></i></div></li>').appendTo(gallery);
    	});

        $('<img />').attr('src', lastImg).on('load', function () {
            imagesLoaded = true;
        });
    	
    	galleryImages = document.getElementsByClassName('fb-thumbnail');
    	galleryImageCount = galleryImages.length;

    	if (galleryImages.length) {
	        for (i = 0; i < galleryImageCount; i += 1) {
	            galleryImages[i].style.backgroundImage = 'url(' + galleryImages[i].getAttribute('data-media-url') + ')';
	        }        
	    }

        interval = window.setInterval(function () {
            if (imagesLoaded) {
                window.clearInterval(interval);
                showGallery();
            }
        }, 50);
    }

    $(loading).css({
    	'display': 'block'
    });

    $.ajax({
    	url: 'php/fb-gallery.php',
    	method: 'GET',
    	contentType: 'application/x-www-form-urlencoded',
    	dataType: 'json',
    	success: function (data) {
    		renderGallery(data);
    	}
    });

    $(window).on('resize', adjustStyles);

}(window, window.document, jQuery));
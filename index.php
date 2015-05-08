<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Facebook Graph API Gallery Test</title>
        <meta name="description" content="Facebook Graph API Gallery Test" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="noindex" />
        <link rel="apple-touch-icon" href="apple-touch-icon.png" />
        <link rel="dns-prefetch" href="https://ajax.googleapis.com" />
        <link rel="stylesheet" href="css/foundation.custom.min.css" />
        <link rel="stylesheet" href="css/normalize.min.css" />
        <link rel="stylesheet" href="css/main.css" />

        <script defer src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <header>
            <div class="row">
                <div class="large-12 columns">
                    <h1>Facebook Managed Website Gallery - Facebook Graph API</h1>
                </div>
            </div>
        </header>

        <main>
            <div class="row">
                <div class="large-12 medium-12 columns">
                    <p class="lead">The following demo uses the <strong>Facebook Graph API</strong> to show a chosen gallery on another website. This means a client or brand can manage their photo gallery easily with the Facebook interface, and the changes will be reflected on their marketing website.</p>
                    <p>Due to the limitations of the Facebook API, this demo uses a combination of PHP, JavaScript and CSS to achieve the effect below.</p>
                    <div id="gallery">
                        <h2>Beautiful Hawaii</h2>
                        <p>Showing the latest photos from <a href="https://www.facebook.com/pages/I-Love-Nature/147418591939240" target="_blank">I Love Nature's</a> "Beautiful Hawaii" album. *</p>
                        <div id="loading"></div>
                        <ul class="large-block-grid-4 medium-block-grid-4 small-block-grid-2"></ul>
                    </div>
                </div>
            </div>
        </main>

        <footer id="footer">
            <div class="row">
                <div class="large-12 columns">
                    <div class="inner-footer">
                        <p>
                            <small>
                                * I am in no way endorsing "I Love Nature", but hope they don't mind having their lovely photos displayed here, with attribution, for the purposes of a simple open source coding example.
                                <br />Facebook Gallery - FB Graph API Test, 2015.
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/foundation.custom.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
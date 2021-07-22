<?php
require 'admin/include/dbconfig.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="Cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <link rel="canonical" href="https://www.calcuttamedicalstore.in/">
    <link rel="alternate" href="https://www.calcuttamedicalstore.in/" hreflang="en-IN">
    <link rel="alternate" href="https://www.calcuttamedicalstore.in/" hreflang="x-default">

    <link rel="apple-touch-icon" href="admin/<?php echo $fset['favicon']; ?>" type="image/png">
    <link rel="shortcut icon" href="admin/<?php echo $fset['favicon']; ?>" type="image/png">
    <link rel="shortcut icon" href="admin/<?php echo $fset['favicon']; ?>" type="image/png" id="favicon">

    <title>Privacy Policy</title>

    <meta name="application-name" content="<?php echo $fset['title']; ?>">
    <meta name="apple-mobile-web-app-title" content="<?php echo $fset['title']; ?>">
    <meta name="description" content="<?php echo $fset['title']; ?> is Kolkata's best online pharmacy that allows you to conveniently order online, refill, or consult with an online pharmacist and offers free shipping and low prices.">
    <meta name="format-detection" content="telephone=no">

    <!-- General tags for content sharing -->
    <meta itemprop="name" content="<?php echo $fset['title']; ?>">
    <meta itemprop="description" content="<?php echo $fset['title']; ?> is Kolkata's best online pharmacy that allows you to conveniently order online, refill, or consult with an online pharmacist and offers free shipping and low prices.">
    <meta itemprop="image" content="admin/<?php echo $fset['favicon']; ?>">

    <!-- OG Tags: Social Media Tags -->
    <meta property="og:locale" content="en_IN">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.calcuttamedicalstore.in">
    <meta property="og:site_name" content="<?php echo $fset['title']; ?>">
    <meta property="og:image" content="https://www.calcuttamedicalstore.in/admin/<?php echo $fset['favicon']; ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/png">
    <meta property="og:description" content="<?php echo $fset['title']; ?> is Kolkata's best online pharmacy that allows you to conveniently order online, refill, or consult with an online pharmacist and offers free shipping and low prices.">

    <!-- Twitter Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $fset['title']; ?> - Kolkata's Best Online Pharmacy">
    <meta name="twitter:site" content="@calcuttamedicalstores">
    <meta name="twitter:image" content="https://www.calcuttamedicalstore.in/admin/<?php echo $fset['favicon']; ?>">
    <meta name="twitter:creator" content="@calcuttamedicalstores">
    <meta name="twitter:description" content="<?php echo $fset['title']; ?> is Kolkata's best online pharmacy that allows you to conveniently order online, refill, or consult with an online pharmacist and offers free shipping and low prices.">

    <!-- Apple icons -->
    <link rel="apple-touch-icon" href="/admin/<?php echo $fset['favicon']; ?>">

    <!-- Android icons -->
    <link rel="icon" type="image/png" href="/admin/<?php echo $fset['favicon']; ?>">

    <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://www.privacypolicygenerator.info/assets/css/live.min.css" rel="stylesheet" />

    <meta name="robots" content="noindex" />

    <!-- ms application meta tags -->
    <meta name="msapplication-TileColor" content="#4a44a0">
    <meta name="msapplication-TileImage" content="admin/<?php echo $fset['favicon']; ?>">
    <meta name="theme-color" content="#4a44a0">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "http://www.calcuttamedicalstore.in",
            "name": "<?php echo $fset['title']; ?>",
            "logo": "https://www.calcuttamedicalstore.in/admin/<?php echo $fset['favicon']; ?>",
            "sameAs": [
                "https://www.facebook.com/calcuttamedicalstores",
                "https://twitter.com/calcuttamedicalstores",
                "https://www.instagram.com/calcuttamedicalstores/",
                "https://www.linkedin.com/company/calcuttamedicalstores/"
            ]
        }
    </script>

</head>

<body style="margin: 0; background-image: url('admin/website/bg.jpg'); background-size: contain;">
    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "100149615672610");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v11.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="wrapper">
        <div class="page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo $fset['privacy_policy']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
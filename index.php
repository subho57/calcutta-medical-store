<?php require_once 'admin/include/dbconfig.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1">

    <meta http-equiv="Cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <link rel="canonical" href="https://www.calcuttamedicalstore.in/">
    <link rel="alternate" href="https://www.calcuttamedicalstore.in/" hreflang="en-IN">
    <link rel="alternate" href="https://www.calcuttamedicalstore.in/" hreflang="x-default">

    <link rel="apple-touch-icon" href="admin/<?php echo $fset['favicon']; ?>" type="image/png">
    <link rel="shortcut icon" href="admin/<?php echo $fset['favicon']; ?>" type="image/png">
    <link rel="shortcut icon" href="admin/<?php echo $fset['favicon']; ?>" type="image/png" id="favicon">

    <title>Online Pharmacy Kolkata: Prescription Delivery in Kolkata | <?php echo $fset['title']; ?></title>

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
    <meta name="twitter:site" content="@calcuttamedical">
    <meta name="twitter:image" content="https://www.calcuttamedicalstore.in/admin/<?php echo $fset['favicon']; ?>">
    <meta name="twitter:creator" content="@calcuttamedical">
    <meta name="twitter:description" content="<?php echo $fset['title']; ?> is Kolkata's best online pharmacy that allows you to conveniently order online, refill, or consult with an online pharmacist and offers free shipping and low prices.">

    <!-- Apple icons -->
    <link rel="apple-touch-icon" href="/admin/<?php echo $fset['favicon']; ?>">

    <!-- Android icons -->
    <link rel="icon" type="image/png" href="/admin/<?php echo $fset['favicon']; ?>">

    <!-- Manifest links -->
    <link rel="manifest" href="/admin/manifest.webmanifest">

    <!-- <script>
        // load service worker
        "serviceWorker" in navigator && window.addEventListener("load", () => {
            navigator.serviceWorker.register("admin/serviceWorker.js").then(e => console.log("Success: ", e.scope)).catch(e => console.log("Failure: ", e))
        });
    </script> -->

    <!-- ms application meta tags -->
    <meta name="msapplication-TileColor" content="#4a44a0">
    <meta name="msapplication-TileImage" content="admin/<?php echo $fset['favicon']; ?>">
    <meta name="theme-color" content="#4a44a0">

    <link rel="preconnect" href="https://static.pocketpills.com">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "http://www.calcuttamedicalstore.in",
            "name": "<?php echo $fset['title']; ?>",
            "logo": "https://www.calcuttamedicalstore.in/admin/<?php echo $fset['favicon']; ?>",
            "sameAs": [
                "https://www.facebook.com/Calcutta-Medical-Store-100149615672610",
                "https://twitter.com/calcuttamedical",
                "https://www.instagram.com/calcuttamedicalstore",
                "https://www.linkedin.com/company/calcuttamedicalstores/"
            ]
        }
    </script>

    <!-- Fonts Link -->
    <style type="text/css">
        @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/materialicons/v92/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.woff2) format('woff2');
        }

        @font-face {
            font-family: 'Material Icons Outlined';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/materialiconsoutlined/v66/gok-H7zzDkdnRel8-DQ6KAXJ69wP1tGnf4ZGhUcel5euIg.woff2) format('woff2');
        }

        .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }

        .material-icons-outlined {
            font-family: 'Material Icons Outlined';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }
    </style>

    <style type="text/css">
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459WRhyyTh89ZNpQ.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459W1hyyTh89ZNpQ.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459WZhyyTh89ZNpQ.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459WdhyyTh89ZNpQ.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm459WlhyyTh89Y.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_bZF3gTD_vx3rCubqg.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_bZF3g3D_vx3rCubqg.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_bZF3gbD_vx3rCubqg.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_bZF3gfD_vx3rCubqg.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_bZF3gnD_vx3rCs.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_c5H3gTD_vx3rCubqg.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_c5H3g3D_vx3rCubqg.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_c5H3gbD_vx3rCubqg.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_c5H3gfD_vx3rCubqg.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_c5H3gnD_vx3rCs.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOkCnqEu92Fr1MmgVxFIzIXKMnyrYk.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOkCnqEu92Fr1MmgVxMIzIXKMnyrYk.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOkCnqEu92Fr1MmgVxEIzIXKMnyrYk.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOkCnqEu92Fr1MmgVxLIzIXKMnyrYk.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOkCnqEu92Fr1MmgVxHIzIXKMnyrYk.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOkCnqEu92Fr1MmgVxGIzIXKMnyrYk.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOkCnqEu92Fr1MmgVxIIzIXKMny.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu5mxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu7mxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu4WxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu7WxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu7GxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fCRc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fABc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fCBc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fBxc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fCxc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fChc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fBBc4AMP6lQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmWUlfCRc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmWUlfABc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmWUlfCBc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmWUlfBxc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmWUlfCxc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmWUlfChc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmWUlfBBc4AMP6lQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>

    <!-- Anti-flicker snippet (recommended) -->
    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>

    <link rel="stylesheet" href="/styles.6080527114df2c046790.css">
    <style ng-transition="serverApp">
        @keyframes pulse {
            0% {
                transform: scaleX(1)
            }

            50% {
                transform: scale3d(1.05, 1.05, 1.05)
            }

            to {
                transform: scaleX(1)
            }
        }

        .pulse {
            animation-name: pulse
        }
    </style>
    <style ng-transition="serverApp">
        .chat-window[_ngcontent-sc50] {
            font-family: Helvetica, Arial, sans-serif;
            line-height: 1.5;
            position: fixed;
            bottom: 0;
            right: 16px;
            display: flex;
            box-shadow: 0 -3px 24px rgba(0, 0, 0, .2);
            flex-direction: column;
            width: 320px;
            border-radius: 8px 8px 0 0;
            overflow: hidden;
            font-size: 10px;
            z-index: 9999
        }

        .chat-window[_ngcontent-sc50],
        .chat-window[_ngcontent-sc50] *[_ngcontent-sc50] {
            box-sizing: border-box
        }

        .chat-header[_ngcontent-sc50] {
            box-shadow: 0 0 12px rgba(0, 0, 0, .2);
            position: relative;
            z-index: 2
        }

        .chat-header-primary[_ngcontent-sc50] {
            background-color: #593ecc;
            display: flex;
            justify-content: space-between;
            padding: .8em 1.2em;
            align-items: center
        }

        .chat-header-secondary[_ngcontent-sc50] {
            background-color: #f7f7f7
        }

        .chat-name[_ngcontent-sc50] {
            display: inline-block;
            color: #fff;
            font-size: 1.2em;
            font-weight: 700;
            text-transform: capitalize;
            margin: 0 16px 0 0;
            max-width: 20ch;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            vertical-align: middle
        }

        a[class=chat-name][_ngcontent-sc50] {
            text-decoration: underline;
            cursor: pointer
        }

        .chat-profile-select[_ngcontent-sc50] {
            line-height: 1.5;
            padding: 6px 10px 6px 3px
        }

        .chat-profile-select[_ngcontent-sc50],
        .chat-transfer-select[_ngcontent-sc50] {
            font-size: 1.2em;
            font-color: #424242;
            outline: 0;
            border: 1px solid hsla(0, 0%, 100%, .2);
            border-radius: 2px;
            cursor: pointer
        }

        .chat-transfer-select[_ngcontent-sc50] {
            background-color: #f7f7f7;
            width: 99%;
            padding: .8em .6em
        }

        .chat-header-btn[_ngcontent-sc50] {
            font-family: Material Icons;
            background-color: hsla(0, 0%, 100%, .2);
            border-radius: 4px;
            color: #fff;
            padding: .3em .5em;
            font-size: 1em;
            outline: 0;
            border: 0;
            cursor: pointer
        }

        .chat-header-btn[_ngcontent-sc50] .material-icons[_ngcontent-sc50] {
            font-size: 1.8em
        }

        .chat-header-btn[_ngcontent-sc50]+.chat-header-btn[_ngcontent-sc50] {
            margin-left: .3em
        }

        .chat-content[_ngcontent-sc50] {
            background-color: #fff;
            display: flex;
            flex-direction: column
        }

        .chat-message-container[_ngcontent-sc50] {
            padding: 1.6em 1.2em;
            min-height: 360px;
            max-height: 360px;
            overflow: auto;
            scroll-behavior: smooth
        }

        .chat-bubble[_ngcontent-sc50] {
            border-radius: 4px;
            overflow: hidden;
            padding: .1em
        }

        .chat-bubble[_ngcontent-sc50]:after {
            content: "";
            display: table;
            clear: both
        }

        .chat-bubble-name[_ngcontent-sc50] {
            font-size: 1em;
            color: #666;
            font-weight: 600;
            margin: 0 0 .3em;
            text-transform: capitalize
        }

        .chat-bubble-container[_ngcontent-sc50] {
            box-shadow: 0 0 2px rgba(0, 0, 0, .2);
            padding: .8em 1em .6em;
            border-radius: 4px;
            vertical-align: top
        }

        .chat-bubble-message[_ngcontent-sc50] {
            font-family: Helvetica, Arial, sans-serif;
            margin: 0;
            font-size: 1.3em;
            color: #424242;
            max-width: 100%;
            white-space: pre-wrap
        }

        .chat-bubble-status[_ngcontent-sc50] {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #999;
            margin-top: .5em
        }

        .chat-bubble-icon[_ngcontent-sc50] {
            font-size: 1.4em;
            line-height: 1
        }

        .chat-bubble--left[_ngcontent-sc50] .chat-bubble-container[_ngcontent-sc50] {
            float: left
        }

        .chat-bubble--right[_ngcontent-sc50] .chat-bubble-wrapper[_ngcontent-sc50] {
            max-width: 90%;
            float: right
        }

        .chat-bubble--left[_ngcontent-sc50] .chat-bubble-container[_ngcontent-sc50] {
            background-color: #f7f7f7
        }

        .chat-bubble--left[_ngcontent-sc50] .chat-bubble-icon[_ngcontent-sc50] {
            visibility: hidden
        }

        .chat-bubble[_ngcontent-sc50]+.chat-bubble[_ngcontent-sc50] {
            margin-top: 1.8em
        }

        .chat-event[_ngcontent-sc50] {
            text-align: center;
            margin: 0;
            padding: 3em 0 2.4em;
            font-size: 1.2em;
            line-height: 1.5;
            color: #666;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .chat-event[_ngcontent-sc50]:after,
        .chat-event[_ngcontent-sc50]:before {
            content: "";
            display: block;
            height: 1px;
            background-color: #e0e0e0;
            width: 20px;
            margin: 0 .3em
        }

        .chat-event[_ngcontent-sc50]+.chat-event[_ngcontent-sc50] {
            padding-top: 0
        }

        .chat-event-message[_ngcontent-sc50] {
            margin: 0
        }

        .chat-send-container[_ngcontent-sc50] {
            background-color: #f7f7f7;
            box-shadow: 0 0 12px rgba(0, 0, 0, .2);
            position: relative;
            z-index: 1
        }

        .chat-send-primary[_ngcontent-sc50],
        .chat-send-secondary[_ngcontent-sc50] {
            display: flex;
            justify-content: space-between
        }

        .chat-send-primary[_ngcontent-sc50] {
            padding: .8em .6em
        }

        .chat-message-input[_ngcontent-sc50] {
            width: 100%;
            margin-right: .6rem;
            position: relative
        }

        .chat-message-input[_ngcontent-sc50] textarea[_ngcontent-sc50] {
            width: 100%;
            border: 1px solid #593ecc;
            border-radius: 4px;
            font-size: 1.3em;
            line-height: 1.5;
            padding: .5em 2.4em .5em .5em;
            vertical-align: top;
            outline: 0
        }

        .chat-message-input[_ngcontent-sc50] textarea[_ngcontent-sc50]::placeholder {
            font-size: inherit
        }

        .chat-attach-input[_ngcontent-sc50] {
            position: absolute;
            right: 2px;
            bottom: 2px;
            border-radius: 4px;
            overflow: hidden;
            cursor: pointer
        }

        .chat-attach-input[_ngcontent-sc50] input[_ngcontent-sc50] {
            opacity: 0;
            position: absolute;
            width: 100%;
            height: 100%;
            cursor: pointer;
            display: block;
            z-index: 2;
            top: 0;
            left: 0
        }

        .chat-attach-input[_ngcontent-sc50] .material-icons[_ngcontent-sc50] {
            color: #007bff;
            background-color: #fff;
            font-size: 2.4em;
            display: block;
            padding: .2em
        }

        .chat-send-attachment[_ngcontent-sc50] {
            display: flex;
            align-items: flex-start;
            padding-right: 1.2em
        }

        .chat-send-attachment-img[_ngcontent-sc50] {
            height: 100%;
            max-height: 60px;
            max-width: 60px;
            width: auto;
            border: 2px solid #e0e0e0;
            margin: 0 1em 0 0
        }

        .chat-send-attachment-file[_ngcontent-sc50] {
            font-size: 1em;
            margin: 0;
            color: #666;
            font-weight: 600
        }

        .chat-send-attachment-delete[_ngcontent-sc50] {
            border: 0;
            background-color: initial;
            font-size: 1em;
            color: #0277bd;
            text-transform: uppercase;
            display: flex;
            align-tems: center;
            font-weight: 600;
            width: 100%;
            padding: .7em 0;
            line-height: 1.5
        }

        .chat-send-attachment-delete[_ngcontent-sc50] .material-icons[_ngcontent-sc50] {
            font-size: 1.5em;
            margin-right: .2rem;
            font-weight: 600
        }

        .chat-send-attachment[_ngcontent-sc50]+.chat-message-input[_ngcontent-sc50] {
            display: none
        }

        .chat-message-action[_ngcontent-sc50] {
            border: 0;
            background-color: #593ecc;
            color: #fff;
            text-transform: uppercase;
            border-radius: 4px;
            font-size: 1em;
            padding: .6em 0;
            text-align: center;
            min-width: 6em
        }

        .chat-message-action[_ngcontent-sc50] .material-icons[_ngcontent-sc50] {
            font-size: 2.4em;
            display: block
        }

        .chat-message-action[_ngcontent-sc50] span[_ngcontent-sc50] {
            font-size: 1.2em
        }

        .chat-window--minimize[_ngcontent-sc50] .chat-content[_ngcontent-sc50] {
            height: 0;
            overflow: hidden
        }

        .chat-window--minimize[_ngcontent-sc50] .chat-header-secondary[_ngcontent-sc50] {
            display: none
        }

        .chat-window[_ngcontent-sc50]:nth-child(2) {
            transform: translateX(calc(-100% - 16px))
        }

        .chat-window[_ngcontent-sc50]:nth-child(3) {
            transform: translateX(calc(-200% - 20px))
        }

        .chat-typing[_ngcontent-sc50] {
            padding: 1.2em 1.6em 1.6em
        }

        .chat-typing--show[_ngcontent-sc50] {
            display: block
        }

        .chat-typing--hide[_ngcontent-sc50] {
            display: none
        }

        .chat-preloader[_ngcontent-sc50] {
            text-align: center;
            font-size: 1.3em;
            color: #666;
            padding: 3.6em 0
        }

        .chat-preloader[_ngcontent-sc50] p[_ngcontent-sc50] {
            margin: .4em 0
        }

        .chat-media-message[_ngcontent-sc50] {
            max-height: 100px;
            overflow: hidden
        }

        .chat-form[_ngcontent-sc50] {
            padding: 1.2em 1.2em 2.4em;
            min-height: 400px
        }

        .chat-paragraph[_ngcontent-sc50] {
            font-size: 1.4em;
            color: #424242
        }

        .chat-form-group[_ngcontent-sc50] {
            margin-top: 2.4em
        }

        .chat-form-label[_ngcontent-sc50] {
            display: block;
            width: 100%;
            font-size: 1.2em;
            color: #424242;
            margin-bottom: .2em;
            font-weight: 600
        }

        .chat-form-input[_ngcontent-sc50] {
            font-size: 1.8em;
            font-weight: 700;
            padding: .6em
        }

        .chat-form-btn[_ngcontent-sc50],
        .chat-form-input[_ngcontent-sc50] {
            width: 100%;
            border: 1px solid #593ecc;
            border-radius: 4px
        }

        .chat-form-btn[_ngcontent-sc50] {
            font-size: 1.4em;
            text-transform: uppercase;
            color: #fff;
            background-color: #593ecc;
            padding: .6em 1.2em
        }

        .chat-unavailable[_ngcontent-sc50] {
            padding: .8em 1.2em;
            background-color: #593ecc
        }

        .chat-unavailable[_ngcontent-sc50] .chat-paragraph[_ngcontent-sc50] {
            color: #fff
        }

        .chat-unavailable[_ngcontent-sc50] a[_ngcontent-sc50] {
            color: #fff;
            text-decoration: underline;
            font-weight: 700
        }

        @media only screen and (max-width:640px) {
            .chat-window[_ngcontent-sc50] {
                top: 0;
                right: 0;
                width: 100%;
                z-index: 999
            }

            .chat-content[_ngcontent-sc50] {
                height: 100%
            }

            .chat-message-container[_ngcontent-sc50] {
                flex: 1 0 0%;
                max-height: none;
                padding-bottom: 14em
            }

            .chat-window.chat-window--minimize[_ngcontent-sc50] {
                top: auto;
                width: 200px;
                right: 16px
            }

            .chat-send-container[_ngcontent-sc50] {
                position: absolute;
                bottom: 0;
                width: 100%
            }

            .chat-send-primary[_ngcontent-sc50] {
                padding: .8em .8em 1.5em
            }
        }

        @media only screen and (min-width:640px) {
            .chat-window--center[_ngcontent-sc50] {
                right: 50%;
                transform: translateX(50%)
            }
        }
    </style>
    <style ng-transition="serverApp">
        .btn-icon[_ngcontent-sc69]>.btn-icon__desc[_ngcontent-sc69] {
            margin-right: .8rem
        }

        .section-promotion[_ngcontent-sc69] {
            background-color: #fff;
            padding: 1.2rem 0
        }

        .card-promotion[_ngcontent-sc69] {
            height: 100%;
            cursor: pointer;
            transition: all .25s ease-in
        }

        .card-promotion[_ngcontent-sc69]:hover {
            box-shadow: 0 0 24px rgba(0, 0, 0, .2)
        }

        .heading-promotion[_ngcontent-sc69] {
            font-size: 2.2rem
        }

        .card-promotion__content[_ngcontent-sc69] {
            padding: 2.4rem
        }

        .news__headline[_ngcontent-sc69] {
            padding: 0 12px
        }

        .news__source[_ngcontent-sc69] {
            color: #b99255
        }

        .news-actions[_ngcontent-sc69] {
            margin-top: 3.6rem
        }

        .news-actions[_ngcontent-sc69] button[_ngcontent-sc69] {
            padding-left: 0;
            padding-right: 0
        }

        .news-actions[_ngcontent-sc69] .column[_ngcontent-sc69] {
            border-top: 3px solid rgba(0, 0, 0, .1)
        }

        .news-actions[_ngcontent-sc69] .column[_ngcontent-sc69]:first-child button[_ngcontent-sc69] {
            transform: translateX(-.6rem)
        }

        .news-actions[_ngcontent-sc69] .column[_ngcontent-sc69]:last-child button[_ngcontent-sc69] {
            transform: translateX(.6rem)
        }

        .news__thumb[_ngcontent-sc69] {
            max-width: 15rem;
            filter: grayscale(100%);
            opacity: .5
        }

        .active[_ngcontent-sc69] .news__thumb[_ngcontent-sc69] {
            filter: grayscale(0);
            opacity: 1
        }

        .active[_ngcontent-sc69] button[_ngcontent-sc69] {
            border-top: 3px solid #000;
            border-radius: 0;
            margin-top: -3px
        }

        @media only screen and (min-device-width:640px) and (min-width:640px) {
            .news-actions[_ngcontent-sc69] button[_ngcontent-sc69] {
                padding-left: 1.2rem;
                padding-right: 1.2rem
            }
        }

        .blog[_ngcontent-sc69] {
            display: flex;
            -webkit-overflow-scrolling: touch;
            overflow-x: scroll;
            scroll-snap-type: x mandatory;
            padding: 0 12px 0 6px
        }

        .blog__posts[_ngcontent-sc69] {
            flex: 0 0 95%;
            max-width: 95%;
            padding: 0 6px;
            display: block;
            scroll-snap-align: center
        }

        .blog__posts[_ngcontent-sc69] .card[_ngcontent-sc69] {
            height: 100%;
            box-shadow: 0 0 12px transparent;
            transition: all .2s ease
        }

        .blog__posts[_ngcontent-sc69]:hover .card[_ngcontent-sc69] {
            box-shadow: 0 0 12px rgba(0, 0, 0, .1)
        }

        @media only screen and (min-device-width:640px) and (min-width:640px) {
            .blog__posts[_ngcontent-sc69] {
                flex: 0 0 33.3333333333%;
                max-width: 33.3333333333%;
                padding: 12px;
                scroll-snap-align: start
            }
        }

        .dummy-search[_ngcontent-sc69] {
            max-width: 640px;
            margin: 0 auto;
            display: flex
        }

        .dummy-search__input[_ngcontent-sc69] {
            flex: 1 0 0%;
            flex-basis: 0
        }

        .dummy-search__input[_ngcontent-sc69] input[_ngcontent-sc69] {
            padding-left: 1.2rem !important;
            height: 50px;
            max-height: 50px;
            width: 100%;
            border: 2px solid #593ecc;
            border-radius: 4px 0 0 4px
        }

        .dummy-search__action[_ngcontent-sc69] button[_ngcontent-sc69] {
            padding: 0 1rem;
            height: 50px;
            max-height: 50px;
            border-radius: 0 4px 4px 0;
            border: 2px solid #593ecc;
            margin-left: -1px
        }

        .dummy-search__action[_ngcontent-sc69] .material-icons[_ngcontent-sc69] {
            vertical-align: middle
        }

        @media only screen and (min-device-width:768px) and (min-width:768px) {

            .dummy-search__action[_ngcontent-sc69] button[_ngcontent-sc69],
            .dummy-search__input[_ngcontent-sc69] input[_ngcontent-sc69] {
                height: 56px;
                max-height: 56px
            }
        }

        .drug-tag[_ngcontent-sc69] {
            text-align: center;
            padding: 0
        }

        .drug-tag[_ngcontent-sc69] li[_ngcontent-sc69] {
            background-color: #f7f7f7;
            display: inline-block;
            padding: .6rem 2rem;
            border-radius: 7.5rem;
            text-align: center;
            margin-left: .6rem;
            margin-top: .8rem;
            cursor: pointer
        }

        .modal-search[_ngcontent-sc69] {
            position: fixed;
            background-color: #fff;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            z-index: 999;
            transform: translateY(110%);
            opacity: 0;
            transition: all .01s ease
        }

        .modal-search__header[_ngcontent-sc69] {
            box-shadow: 0 1px 5px rgba(0, 0, 0, .3)
        }

        .modal-search__form[_ngcontent-sc69] {
            border-radius: 4px;
            position: relative;
            z-index: 99
        }

        @media only screen and (min-device-width:768px) and (min-width:768px) {
            .modal-search__form[_ngcontent-sc69] {
                max-width: 96rem;
                margin: 0 auto
            }
        }

        .modal-search__content[_ngcontent-sc69] {
            flex: 1 0 0%;
            flex-basis: 0;
            overflow: auto;
            padding-bottom: 3.6rem
        }

        @media only screen and (min-device-width:768px) and (min-width:768px) {
            .modal-search__content[_ngcontent-sc69] {
                max-width: 96rem;
                margin: 0 auto;
                width: 100%;
                box-shadow: 0 0 5px rgba(0, 0, 0, .1)
            }
        }

        .modal-search__input[_ngcontent-sc69] {
            flex: 1 0 0%;
            flex-basis: 0;
            padding: 1rem 1rem 1rem 0;
            outline: 0
        }

        .modal-search__back[_ngcontent-sc69] {
            padding: 0 1.2rem
        }

        .modal-search__back[_ngcontent-sc69],
        .modal-search__input[_ngcontent-sc69] {
            border: 0;
            line-height: 1;
            height: 46px
        }

        .modal-search__back[_ngcontent-sc69] .material-icons[_ngcontent-sc69] {
            vertical-align: middle
        }

        .search-list[_ngcontent-sc69] {
            padding: 0;
            margin: 0;
            list-style-type: none;
            position: absolute;
            top: 100%;
            width: 100%;
            left: 0;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, .3);
            background-color: #f7f7f7;
            border-radius: 0 0 4px 4px;
            overflow: hidden
        }

        .search-list[_ngcontent-sc69] li[_ngcontent-sc69] {
            cursor: pointer;
            font-size: 1.2rem;
            font-weight: 600;
            color: #424242;
            background-color: #f7f7f7;
            padding: 1.2rem;
            border-bottom: 1px solid #e0e0e0;
            transition: all .25s ease
        }

        .search-list[_ngcontent-sc69] li[_ngcontent-sc69]:hover {
            background-color: #fff
        }

        .modal-search.show[_ngcontent-sc69] {
            transform: translateY(0);
            opacity: 1;
            transition: all .1s ease
        }

        .med-details[_ngcontent-sc69] {
            padding: 1rem 1.2rem;
            border-bottom: 1px solid #e0e0e0
        }

        .med-form-item[_ngcontent-sc69] {
            padding: .8rem 1.2rem
        }

        .med-form-divider[_ngcontent-sc69] {
            border-top: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0
        }

        .med-form-input[_ngcontent-sc69] {
            width: 80px;
            max-width: 80px;
            font-size: 1.6rem;
            font-weight: 800;
            padding: .6rem 1rem
        }

        select.med-form-input[_ngcontent-sc69] {
            padding: .6rem 0 .6rem .6rem
        }

        .dispensing-input[_ngcontent-sc69] {
            width: 20px;
            height: 20px;
            border: 1px solid #999;
            border-radius: 4px;
            margin-left: 1.2rem
        }

        .dispensing-label[_ngcontent-sc69] {
            display: block;
            padding: 1.2rem 0 1.2rem .3rem;
            width: 100%
        }

        .med-cta[_ngcontent-sc69] {
            border-radius: 4px;
            padding: 1rem;
            cursor: pointer
        }

        .med-cta[_ngcontent-sc69]+.med-cta[_ngcontent-sc69] {
            margin-top: 1.2rem
        }

        .med-cta__heading[_ngcontent-sc69] {
            font-size: 1.1rem;
            line-height: 1.5
        }

        .med-breakup[_ngcontent-sc69] {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height .1s ease .1s, opacity .2s ease
        }

        .med-breakup.show[_ngcontent-sc69] {
            max-height: 300px;
            opacity: 1;
            margin-top: 1.2rem;
            transition: max-height .2s ease, opacity .1s ease .1s
        }

        .modal-search__empty[_ngcontent-sc69] {
            padding: 6.2rem 16px
        }

        .telemed__img[_ngcontent-sc69] {
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid hsla(0, 0%, 100%, .5);
            width: 108px;
            height: 108px;
            margin: 0 auto
        }

        .telemed__tag[_ngcontent-sc69] {
            background-color: rgba(0, 0, 0, .11);
            font-weight: 400;
            padding: 1rem 1.2rem;
            color: #e0e0e0;
            cursor: pointer
        }

        .footer-icons[_ngcontent-sc69] {
            background-image: url(https://static.pocketpills.com/webapp/img/new-ui/onboarding/footer-social.svg);
            background-repeat: no-repeat;
            background-position: 0 0;
            background-size: 100% auto;
            width: 6rem;
            height: 6rem
        }

        .footer-icons[_ngcontent-sc69] img[_ngcontent-sc69] {
            display: none
        }

        .footer-icons[href*=twitter][_ngcontent-sc69] {
            background-position: left -6rem
        }

        .footer-icons[href*=instagram][_ngcontent-sc69] {
            background-position: left -12rem
        }

        .footer-icons[href*=linkedin][_ngcontent-sc69] {
            background-position: left -18rem
        }

        @media only screen and (max-width:360px) {
            .hero__heading[_ngcontent-sc69] {
                font-size: 2.3rem
            }

            .logo[_ngcontent-sc69] {
                width: 15rem
            }

            .star-rating[_ngcontent-sc69] {
                font-size: 4.2rem
            }

            .home-input-label[_ngcontent-sc69] {
                font-size: 1.2rem !important
            }
        }

        .hidden-desktop[_ngcontent-sc69] {
            display: block
        }

        .hidden-mobile[_ngcontent-sc69] {
            display: none
        }

        @media only screen and (min-width:640px) {
            .hidden-desktop[_ngcontent-sc69] {
                display: none
            }

            .hidden-mobile[_ngcontent-sc69] {
                display: block
            }
        }
    </style>
    <style ng-transition="serverApp">
        #sticky-form-google.sticky-signup.show[_ngcontent-sc54] {
            transform: translate(-50%)
        }
    </style>
    <style ng-transition="serverApp"></style>
    <style ng-transition="serverApp">
        .alt-signup-btn[_ngcontent-sc53] {
            margin-left: auto;
            margin-right: auto;
            background-color: #4285f4;
            padding: .2rem;
            box-shadow: 0 0 5px #4285f4
        }

        .alt-signup-btn[_ngcontent-sc53]:active,
        .alt-signup-btn[_ngcontent-sc53]:focus,
        .alt-signup-btn[_ngcontent-sc53]:hover {
            background-color: #4285f4 !important;
            box-shadow: 0 -2px 12px #4285f4
        }

        .alt-signup-btn[_ngcontent-sc53] .row--start[_ngcontent-sc53] .column[_ngcontent-sc53]:first-child {
            background-color: #fff;
            border-radius: 2px
        }

        @media only screen and (min-width:640px) {
            .alt-signup-btn[_ngcontent-sc53] {
                background-color: #4285f4
            }
        }
    </style>
    <style ng-transition="serverApp">
        .process-loader[_ngcontent-sc60] {
            position: absolute
        }
    </style>
    <style ng-transition="serverApp">
        .home-wrapper[_ngcontent-sc64] {
            max-width: 96rem;
            margin: 0 auto;
            padding: 0 16px
        }

        .footer-icons[_ngcontent-sc64] {
            background-image: url(https://static.pocketpills.com/webapp/img/new-ui/onboarding/footer-social.svg);
            background-repeat: no-repeat;
            background-position: 0 0;
            background-size: 100% auto;
            width: 3rem;
            height: 3rem
        }

        .footer-icons[_ngcontent-sc64] img[_ngcontent-sc64] {
            display: none
        }

        .footer-icons[href*=twitter][_ngcontent-sc64] {
            background-position: left -3rem
        }

        .footer-icons[href*=instagram][_ngcontent-sc64] {
            background-position: left -6rem
        }

        .footer-icons[href*=linkedin][_ngcontent-sc64] {
            background-position: left -9rem
        }

        .mega-footer[_ngcontent-sc64] nav[_ngcontent-sc64] a[_ngcontent-sc64] {
            font-size: 1.2rem;
            color: #424242;
            display: block;
            line-height: 4;
            border-bottom: 1px solid #eee;
            color: #2a387c;
            padding: 0 16px;
            margin: 0 -16px;
            position: relative;
            z-index: 1
        }

        .mega-footer[_ngcontent-sc64] nav[_ngcontent-sc64] ul[_ngcontent-sc64] {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .mega-footer[_ngcontent-sc64] nav[_ngcontent-sc64] li[_ngcontent-sc64] {
            position: relative;
            padding-top: 0
        }

        .mega-footer[_ngcontent-sc64] nav[_ngcontent-sc64] li[_ngcontent-sc64]:after {
            content: "";
            width: 16px;
            height: 16px;
            border: 1px solid #fff;
            background: url(https://static.pocketpills.com/webapp/img/new-ui/onboarding/home-btn-icons.svg) no-repeat;
            opacity: .4;
            background-size: 100% auto;
            background-position: 0 -70px;
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%)
        }

        .mega-footer[_ngcontent-sc64] nav[_ngcontent-sc64] a[_ngcontent-sc64]:active,
        .mega-footer[_ngcontent-sc64] nav[_ngcontent-sc64] a[_ngcontent-sc64]:focus,
        .mega-footer[_ngcontent-sc64] nav[_ngcontent-sc64] a[_ngcontent-sc64]:hover {
            color: #593ecc
        }

        .mega-footer[_ngcontent-sc64] address[_ngcontent-sc64] {
            padding-right: 1rem
        }

        .mega-footer__address-desc[_ngcontent-sc64] {
            line-height: 2
        }

        .mega-footer__primary[_ngcontent-sc64] {
            padding: 0 0 1.4rem
        }

        .mega-footer__secondary[_ngcontent-sc64] {
            padding: .6rem 0 1.4rem
        }

        .mega-footer__tertiary[_ngcontent-sc64] {
            padding: 0 0 .6rem
        }

        .mega-footer__quaternary[_ngcontent-sc64] {
            padding: 1rem 0 .6rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column
        }

        .mega-footer[_ngcontent-sc64] p[_ngcontent-sc64]+p[_ngcontent-sc64] {
            margin-top: .6rem
        }

        .mega-footer__social[_ngcontent-sc64] {
            display: flex;
            align-items: center;
            flex-direction: column;
            margin-top: 1.2rem
        }

        @media only screen and (min-device-width:640px) and (min-width:640px) {
            .mega-footer__primary[_ngcontent-sc64] {
                padding: 1.8rem 0 1.4rem
            }

            .mega-footer__quaternary[_ngcontent-sc64] {
                flex-direction: row;
                justify-content: space-between
            }

            .mega-footer__social[_ngcontent-sc64] {
                flex-direction: row;
                margin-top: 0
            }

            .mega-footer[_ngcontent-sc64] nav[_ngcontent-sc64] a[_ngcontent-sc64] {
                line-height: 3;
                border-bottom: 0
            }

            .mega-footer[_ngcontent-sc64] nav[_ngcontent-sc64] li[_ngcontent-sc64]:after {
                content: "";
                display: none
            }
        }

        .font-bold[_ngcontent-sc64] {
            font-weight: 800 !important
        }

        .font-semibold[_ngcontent-sc64] {
            font-weight: 600 !important
        }

        .font-regular[_ngcontent-sc64] {
            font-weight: 400 !important
        }
    </style>
    <style ng-transition="serverApp">
        .telemed__tag[_ngcontent-sc68] {
            background-color: rgba(0, 0, 0, .11);
            font-weight: 400;
            padding: 1rem 1.2rem;
            color: #e0e0e0;
            cursor: pointer
        }
    </style>
    <style ng-transition="serverApp">
        .section-divider--employer[_ngcontent-sc67]:after {
            content: "OR";
            background-color: #f1f1f1
        }
    </style>
    <style ng-transition="serverApp">
        .home-input[_ngcontent-sc58] {
            border: 2px solid #2a387c;
            border-radius: 4px;
            padding: 1.1rem 1.2rem;
            width: 100%;
            font-weight: 600 !important;
            padding-left: 4.8rem !important;
            font-family: Montserrat, Roboto, Arial, Helvetica, sans-serif
        }

        .home-input-proceed-cta[_ngcontent-sc58] {
            border-color: #593ecc;
            border-right: 0;
            border-radius: .4rem 0 0 .4rem
        }

        @media only screen and (min-device-width:768px) {
            .home-input[_ngcontent-sc58] {
                margin-right: .6rem;
                margin-top: 0;
                margin-bottom: 0;
                width: auto
            }
        }

        .phone-prefix[_ngcontent-sc58] {
            position: relative
        }

        .phone-prefix__wrapper[_ngcontent-sc58] {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%)
        }

        .phone-prefix__code[_ngcontent-sc58] {
            font-size: 1.6rem;
            font-weight: 600;
            color: #424242;
            padding: 0 1.2rem;
            position: relative
        }

        .phone-prefix__code[_ngcontent-sc58]:after {
            content: "";
            position: absolute;
            width: 2px;
            display: block;
            height: 75%;
            right: 0;
            transform: translateY(-50%);
            top: 50%;
            background-color: #c3c3c3
        }

        .phone-signup[_ngcontent-sc58] {
            border: 1px solid #e0e0e0 !important
        }

        .home-input-btn[_ngcontent-sc58] {
            border-radius: 0 .4rem .4rem 0
        }
    </style>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        window.OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "<?php echo $fset['one_key']; ?>",
            });
        });
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
    <div class="browser-warning" style="padding: 8px 12px; color: #fff; font-weight: 400;text-align: center; font-size:16px;background-color:#f77000; line-height:1.5; position: fixed; top:0; left:0; width: 100%; z-index: 9999; display: none;">
        For the best experience, please switch your browser to Chrome, Safari, Firefox or Edge.
    </div>
    <app-root ng-version="11.0.1">
        <main>
            <router-outlet></router-outlet>
            <landing _nghost-sc69="">
                <div _ngcontent-sc69="" class="landing-page">
                    <div _ngcontent-sc69="">
                        <!---->
                        <header _ngcontent-sc69="" class="landing-header show">
                            <div _ngcontent-sc69="" class="wrapper full-height">
                                <div _ngcontent-sc69="" class="row row--gutter row--middle full-height xsmall-3">
                                    <div _ngcontent-sc69="" class="column">
                                        <div _ngcontent-sc69="" class="row row--middle row--gutter">
                                            <div _ngcontent-sc69="" class="column">
                                                <div _ngcontent-sc69="" class="hamburger"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div _ngcontent-sc69="" class="column">
                                        <div _ngcontent-sc69="" class="landing-header__logo"><a _ngcontent-sc69="" routerlink="index.php" href="index.php"><img _ngcontent-sc69="" alt="<?php echo $fset['title']; ?>" height="40" data-src="admin/website/logo.png" class="lazyload"></a></div>
                                        <!---->
                                        <!---->
                                    </div>
                                    <div _ngcontent-sc69="" class="column">
                                        <div _ngcontent-sc69="" class="row row--middle row--gutter row--right btn-right">
                                            <div _ngcontent-sc69="" class="column"><a href="https://admin.calcuttamedicalstore.in/"><button _ngcontent-sc69="" translate="" keyname="landing.navbar.login" class="card__header xsmall divider divider--t divider--r divider--b divider--l color-dark">LOG
                                                        IN</button></a></div>

                                            <!---->
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!---->
                        <div _ngcontent-sc69="" class="hero--section padding-reset-b" style="background-image:url(https://static.pocketpills.com/landingpage/img/hero-banner.jpg);">
                            <div _ngcontent-sc69="" class="txt-c">
                                <div _ngcontent-sc69="" class="wrapper">
                                    <div _ngcontent-sc69="" class="txt-c">
                                        <div _ngcontent-sc69="" class="hero__content">
                                            <!---->
                                            <!---->
                                            <h1 _ngcontent-sc69="" translate="" keyname="landing.banner.bestpharmacy" class="hero__heading">Best online pharmacy in Kolkata</h1>
                                            <div _ngcontent-sc69="" class="flag-secondary">
                                                <div _ngcontent-sc69="" class="flag-secondary__icon"><svg _ngcontent-sc69="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 157 171">
                                                        <title _ngcontent-sc69="">Free Rx Delivery in Kolkata</title>
                                                    </svg></div>
                                                <p _ngcontent-sc69="" translate="" keyname="landing.banner.freedelivery" class="flag-secondary__msg">Free next day delivery <sup _ngcontent-sc127="">*</sup></p>
                                            </div>
                                            <!---->
                                            <!---->
                                            <p _ngcontent-sc69="" translate="" keyname="landing.banner.description" class="hero__details">Refill medications, manage &amp; order your
                                                prescriptions wherever you are</p>
                                        </div>
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <signup _ngcontent-sc69="" _nghost-sc67="">
                                            <div _ngcontent-sc67="" class="hero__form-wrapper form-component margin-t-xl">
                                                <p _ngcontent-sc67="" translate="" class="hero__input-label txt-c h5 font-semibold">Get started to save
                                                    your time &amp; money</p>
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                            </div>
                                        </signup>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div _ngcontent-sc69="" class="star-rating margin-t-xxl"><span _ngcontent-sc69="" class="star-rating__icons"><img _ngcontent-sc69="" lazyload="https://static.pocketpills.com/landingpage/img/appstore-stars.svg" alt="" height="14" width="80" class="h-auto lazyload" data-src="https://static.pocketpills.com/landingpage/img/appstore-stars.svg"></span><b _ngcontent-sc69="" translate="" keyname="landing.banner.rating" class="star-rating__desc xsmall clr-dark font-semibold">4.9 Stars on Google &amp;
                                    Facebook</b></div>
                        </div>
                        <!---->
                        <div _ngcontent-sc69="" class="usps">
                            <div _ngcontent-sc69="" class="wrapper">
                                <div _ngcontent-sc69="" class="usps__row">
                                    <div _ngcontent-sc69="" class="column">
                                        <div _ngcontent-sc69="" class="usps__content">
                                            <div _ngcontent-sc69="" class="row row--middle">
                                                <div _ngcontent-sc69="" class="column">
                                                    <div _ngcontent-sc69="" class="usps__icon"></div>
                                                </div>
                                                <div _ngcontent-sc69="" class="column">
                                                    <h2 _ngcontent-sc69="" translate="" class="usps__heading clr-primary font-semibold">Discreet
                                                        packaging</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div _ngcontent-sc69="" class="column">
                                        <div _ngcontent-sc69="" class="usps__content">
                                            <div _ngcontent-sc69="" class="row row--middle">
                                                <div _ngcontent-sc69="" class="column">
                                                    <div _ngcontent-sc69="" class="usps__icon usps__icon--dosage"></div>
                                                </div>
                                                <div _ngcontent-sc69="" class="column">
                                                    <h2 _ngcontent-sc69="" translate="" class="usps__heading clr-primary font-semibold">Meds sorted by
                                                        dose &amp; time</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div _ngcontent-sc69="" class="column">
                                        <div _ngcontent-sc69="" class="usps__content">
                                            <div _ngcontent-sc69="" class="row row--middle">
                                                <div _ngcontent-sc69="" class="column">
                                                    <div _ngcontent-sc69="" class="usps__icon usps__icon--refill"></div>
                                                </div>
                                                <div _ngcontent-sc69="" class="column">
                                                    <h2 _ngcontent-sc69="" translate="" class="usps__heading clr-primary font-semibold">Automatic
                                                        refills &amp; renewals</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div _ngcontent-sc69="" class="column">
                                        <div _ngcontent-sc69="" class="usps__content">
                                            <div _ngcontent-sc69="" class="row row--middle">
                                                <div _ngcontent-sc69="" class="column">
                                                    <div _ngcontent-sc69="" class="usps__icon usps__icon--caregiver usp-4-icon-bco"></div>
                                                </div>
                                                <div _ngcontent-sc69="" class="column">
                                                    <h2 _ngcontent-sc69="" translate="" class="usps__heading clr-primary font-semibold">Manage loved
                                                        ones' medications</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---->
                                </div>
                            </div>
                        </div>
                        <section _ngcontent-sc69="" class="section-landing txt-c">
                            <div _ngcontent-sc69="" class="landing-wrapper">
                                <h2 _ngcontent-sc69="" translate="" keyname="landing.search.title" class="heading-tertiary font-bold color-dark txt-c">Transparent prices. Amazingly
                                    inexpensive.</h2>
                                <p _ngcontent-sc69="" translate="" keyname="landing.search.description" class="h4 margin-t-s txt-c medication-list-section-para">Get super savings on
                                    your prescription medications in Kolkata</p>
                                <!---->
                                <p _ngcontent-sc69="" translate="" keyname="landing.search.note" class="margin-t-m" style="font-size: 0.75rem; font-weight: 600; color: #999;">Cost may be subsidized by
                                    your provincial or private Health Plan.</p>
                            </div>
                        </section>
                        <!---->
                        <div _ngcontent-sc69="" class="section-landing bg-f txt-c">
                            <div _ngcontent-sc69="">
                                <p _ngcontent-sc69="" translate="" class="news__headline h1 color-black margin-t-xl"><img src="https://razorpay.com/assets/payments/cp_modes_wallets.png" />
                                    <br/>
                                    "Reinvent the pharmacy Experience"</p>
                                <p _ngcontent-sc69="" class="news__source font-semibold small">- Vancouver Sun</p>
                            </div>
                        </div>
                        <landing-care-section _ngcontent-sc69="" _nghost-sc62="">
                            <section _ngcontent-sc62="" class="section-landing">
                                <div _ngcontent-sc62="" class="landing-wrapper">
                                    <h2 _ngcontent-sc62="" translate="" class="heading-primary color-dark font-bold txt-c">How <?php echo $fset['title']; ?>
                                        work</h2>
                                </div>
                                <div _ngcontent-sc62="" class="landing-wrapper">
                                    <div _ngcontent-sc62="" class="row row--full-gutter row--wrap xsmall-1 medium-3">
                                        <div _ngcontent-sc62="" class="column">
                                            <div _ngcontent-sc62="" class="card card--no-shadow txt-c margin-t-xxl">
                                                <div _ngcontent-sc62="" class="card__content"><img _ngcontent-sc62="" alt="" width="200" height="140" class="lazyload" data-src="//static.pocketpills.com/webapp/img/homepage-corona/hiw1.svg">
                                                    <h3 _ngcontent-sc62="" translate="" class="h3 font-semibold color-dark margin-t-xl">Create your
                                                        profile</h3>
                                                    <p _ngcontent-sc62="" translate="" class="h4 color-base margin-t-s">
                                                        Takes less than 3 minutes and we will take care of the rest</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div _ngcontent-sc62="" class="column">
                                            <div _ngcontent-sc62="" class="card card--no-shadow txt-c margin-t-xxl">
                                                <div _ngcontent-sc62="" class="card__content"><img _ngcontent-sc62="" alt="" width="200" height="140" class="lazyload" data-src="//static.pocketpills.com/webapp/img/homepage-corona/hiw2.svg">
                                                    <h3 _ngcontent-sc62="" translate="" class="h3 font-semibold color-dark margin-t-xl">Enter pharmacy
                                                        details</h3>
                                                    <p _ngcontent-sc62="" translate="" class="h4 color-base margin-t-s">
                                                        We will transfer your refills or reach out to your doctor</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div _ngcontent-sc62="" class="column">
                                            <div _ngcontent-sc62="" class="card card--no-shadow txt-c margin-t-xxl">
                                                <div _ngcontent-sc62="" class="card__content"><img _ngcontent-sc62="" alt="" width="200" height="140" class="lazyload" data-src="//static.pocketpills.com/webapp/img/homepage-corona/hiw3.svg">
                                                    <h3 _ngcontent-sc62="" translate="" class="h3 font-semibold color-dark margin-t-xl">Free delivery
                                                    </h3>
                                                    <p _ngcontent-sc62="" translate="" class="h4 color-base margin-t-s">
                                                        Get your meds delivered to you with no added cost.
                                                        <!--ng-container-->
                                                        <!--bindings={
    "ng-reflect-ng-if": "true"
  }-->
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                    </div>
                                    <div _ngcontent-sc69="" class="row row--center row--full-gutter row--wrap xsmall-1 medium-3 margin-t-xl">
                                        <div _ngcontent-sc69="" class="column">
                                            <!---->
                                        </div>
                                    </div>
                                    <!---->
                                    <!---->
                                </div>
                            </section>
                            <!---->
                        </landing-care-section>
                        <section _ngcontent-sc69="" class="section-landing bg-e">
                            <div _ngcontent-sc69="" class="landing-wrapper">
                                <h2 _ngcontent-sc69="" translate="" keyname="landing.no1.title" class="column heading-primary color-dark font-bold txt-c">Kolkata’s # 1 online
                                    pharmacy</h2>
                            </div>
                            <div _ngcontent-sc69="" class="landing-wrapper margin-t-xl">
                                <div _ngcontent-sc69="" class="row row--center row--wrap xsmall-1 medium-2 row--full-gutter">
                                    <div _ngcontent-sc69="" class="column">
                                        <div _ngcontent-sc69="" class="card__content-long">
                                            <h3 _ngcontent-sc69="" translate="" keyname="landing.no1.orders" class="font-bold txt-c lineheight-reset" style="font-size: 6rem; color: #000;">100K+</h3>
                                            <p _ngcontent-sc69="" translate="" keyname="landing.no1.order-text" class="h1 font-semibold color-base txt-c">Satisfied customers</p>
                                        </div>
                                    </div>
                                    <div _ngcontent-sc69="" class="column">
                                        <div _ngcontent-sc69="" class="card__content-long">
                                            <h3 _ngcontent-sc69="" translate="" keyname="landing.no1.downloads" class="font-bold txt-c lineheight-reset" style="font-size: 6rem; color: #000;">200K+</h3>
                                            <p _ngcontent-sc69="" translate="" keyname="landing.no1.downloads-text" class="h1 font-semibold color-base txt-c">Orders delivered</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!---->
                        <landing-fax-section _ngcontent-sc69="" _nghost-sc68="">
                            <section _ngcontent-sc68="" class="section-landing bg-b txt-c" style="padding: 2.4rem 0;">
                                <div _ngcontent-sc68="" class="landing-wrapper">
                                    <p _ngcontent-sc68="" translate="" keyname="landing.ask.title" class="heading-secondary color-white font-regular">Visiting your doctor soon?
                                    </p>
                                    <h2 _ngcontent-sc68="" translate="" keyname="landing.ask.content" class="heading-tertiary color-white font-semibold margin-t-m">Download our
                                        Android App</h2>
                                </div>
                                <div _ngcontent-sc68="" class="landing-wrapper margin-t-m"><a _ngcontent-sc68="" href="javascript:void(0);">
                                        <p _ngcontent-sc68="" class="tag telemed__tag color-white h1 font-bold"><a href="https://play.google.com/store/apps/details?id=in.calcuttamedicalstore" target="_blank">
                                                <img src="https://static.pocketpills.com/webapp/img/new-ui/employer-landing/play-store-download@2x.png"></a>
                                        </p>
                                    </a></div>
                            </section>
                        </landing-fax-section>
                        <!---->
                        <landing-care-section _ngcontent-sc69="" _nghost-sc62="">
                            <section _ngcontent-sc62="" class="section-landing">
                                <div _ngcontent-sc62="" class="landing-wrapper">
                                    <h2 _ngcontent-sc62="" translate="" class="heading-primary color-dark font-bold txt-c">Give yourself access to the
                                        best care</h2>
                                </div>
                                <div _ngcontent-sc62="" class="landing-wrapper">
                                    <div _ngcontent-sc62="" class="row row--full-gutter row--wrap xsmall-1 medium-3">
                                        <div _ngcontent-sc62="" class="column">
                                            <div _ngcontent-sc62="" class="card card--no-shadow txt-c margin-t-xxl">
                                                <div _ngcontent-sc62="" class="card__content"><img _ngcontent-sc62="" alt="" width="200" height="140" class="lazyload" data-src="https://static.pocketpills.com/landingpage/img/bt-1.svg">
                                                    <h3 _ngcontent-sc62="" translate="" class="h3 font-semibold color-dark margin-t-xl">Exceptional care
                                                    </h3>
                                                    <p _ngcontent-sc62="" translate="" class="h4 color-base margin-t-s">
                                                        Our team works tirelessly to ensure accuracy of your medications
                                                        &amp; pharmacy supplies</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div _ngcontent-sc62="" class="column">
                                            <div _ngcontent-sc62="" class="card card--no-shadow txt-c margin-t-xxl">
                                                <div _ngcontent-sc62="" class="card__content"><img _ngcontent-sc62="" alt="" width="200" height="140" class="lazyload" data-src="https://static.pocketpills.com/landingpage/img/bt-2.svg">
                                                    <h3 _ngcontent-sc62="" translate="" class="h3 font-semibold color-dark margin-t-xl">Never miss your
                                                        dosage</h3>
                                                    <p _ngcontent-sc62="" translate="" class="h4 color-base margin-t-s">
                                                        Your medications sorted by dose &amp; time in safe and easy to
                                                        open PocketPacks</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div _ngcontent-sc62="" class="column">
                                            <div _ngcontent-sc62="" class="card card--no-shadow txt-c margin-t-xxl">
                                                <div _ngcontent-sc62="" class="card__content"><img _ngcontent-sc62="" alt="" width="200" height="140" class="lazyload" data-src="https://static.pocketpills.com/landingpage/img/bt-3.svg">
                                                    <h3 _ngcontent-sc62="" translate="" class="h3 font-semibold color-dark margin-t-xl">Talk to our
                                                        pharmacist</h3>
                                                    <p _ngcontent-sc62="" translate="" class="h4 color-base margin-t-s">
                                                        Ask any questions about meds, ailments, side-effects via sms,
                                                        chat, call &amp; email, 7 days a week</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                    </div>
                                    <!---->
                                    <!---->
                                </div>
                            </section>
                            <!---->
                        </landing-care-section>
                        <!---->
                        <div _ngcontent-sc69="" class="section-landing section-pharmacy txt-c bg-brand-primary">
                            <div _ngcontent-sc69="" class="landing-wrapper">
                                <h2 _ngcontent-sc69="" translate="" keyname="landing.switch.title" class="heading-primary color-white font-bold">Switch to <?php echo $fset['title']; ?>
                                    today</h2>
                                <div _ngcontent-sc69="" class="margin-t-xl"><a href="https://play.google.com/store/apps/details?id=in.calcuttamedicalstore" target="_blank"><button _ngcontent-sc69="" translate="" keyname="landing.cta.getstarted" class="btn btn--wide color-dark bg-white h3">Get started</button></a></div>
                                <!---->
                                <!---->
                                <div _ngcontent-sc69="" class="margin-t-xxl">
                                    <h4 _ngcontent-sc69="" translate="" keyname="landing.cta.subtitle" class="h4 font-bold color-white">Prefer to talk over the phone?</h4>
                                    <p _ngcontent-sc69="" translate="" keyname="landing.cta.subtext" class="h5 color-white">Speak to our care team today</p>
                                </div><a _ngcontent-sc69="" class="btn btn--wide btn--border bg-transparent color-white margin-t-xl" href="tel:<?php echo $fset['callsupport']; ?>"> <?php echo $fset['callsupport']; ?> </a>
                            </div>
                        </div>
                        <landing-faqsection _ngcontent-sc69="" _nghost-sc63="">
                            <div _ngcontent-sc63="" class="section-landing bg-e">
                                <div _ngcontent-sc63="" class="landing-wrapper">
                                    <h2 _ngcontent-sc63="" translate="" class="heading-primary txt-c font-bold color-dark">You may be wondering</h2>
                                    <div _ngcontent-sc63="" class="row row--center row--wrap xsmall-1 small-3 margin-t-xl qlist">
                                        <div _ngcontent-sc63="" class="column">
                                            <div _ngcontent-sc63="" class="card card--no-shadow bg-transparent full-height">
                                                <div _ngcontent-sc63="" class="card__content-long">
                                                    <h3 _ngcontent-sc63="" translate="" class="h3 font-semibold color-dark">How much does it cost to use
                                                        <?php echo $fset['title']; ?>?</h3>
                                                    <p _ngcontent-sc63="" translate="" class="h4 color-base margin-t-m">
                                                        Signing up, using our services &amp; deliveries are free</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div _ngcontent-sc63="" class="column">
                                            <div _ngcontent-sc63="" class="card card--no-shadow bg-transparent full-height">
                                                <div _ngcontent-sc63="" class="card__content-long">
                                                    <h3 _ngcontent-sc63="" translate="" class="h3 font-semibold color-dark">What insurance plan do you
                                                        accept?</h3>
                                                    <p _ngcontent-sc63="" translate="" class="h4 color-base margin-t-m">
                                                        We accept all insurances and direct bill ODB, OHIP+ &amp;
                                                        PharmaCare</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div _ngcontent-sc63="" class="column">
                                            <div _ngcontent-sc63="" class="card card--no-shadow bg-transparent full-height">
                                                <div _ngcontent-sc63="" class="card__content-long">
                                                    <h3 _ngcontent-sc63="" translate="" class="h3 font-semibold color-dark">Will my cost be lower?</h3>
                                                    <p _ngcontent-sc63="" translate="" class="h4 color-base margin-t-m">
                                                        Yes, because of the technology that we use, we are able to lower
                                                        costs &amp; pass those savings to you</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <!---->
                        </landing-faqsection>
                        <div _ngcontent-sc69="" class="">
                            <landing-www-footer _ngcontent-sc69="" _nghost-sc64="">
                                <div _ngcontent-sc64="" class="mega-footer">
                                    <div _ngcontent-sc64="" class="home-wrapper">
                                        <header _ngcontent-sc64="">
                                            <div _ngcontent-sc64="" class="mega-footer__primary divider divider--b">
                                                <div _ngcontent-sc64="" class="row row--space-between row--wrap row--full-gutter xsmall-1 medium-2">
                                                    <div _ngcontent-sc64="" class="column">
                                                        <h4 _ngcontent-sc64="" translate="" keyname="landing.footer.operating-hours" class="h5 color-dark font-semibold">Address
                                                        </h4>
                                                        <p _ngcontent-sc64="" translate="" keyname="landing.footer.operating-time" class="h5 color-base margin-t-m">Calcutta Medical Stores,<br />90B SHYAMA PROSAD MUKHERJEE ROAD,<br />KOLKATA - 700026,<br />West Bengal<br />
                                                        </p>
                                                        <div _ngcontent-sc57="" class="column">
                                                            <ul _ngcontent-sc57="" class="list list--reset">
                                                                <li _ngcontent-sc57=""><a _ngcontent-sc57="" translate=""><br /></a></li>
                                                                <li _ngcontent-sc57=""><a _ngcontent-sc57="" translate="" href="privacy-policy.php">Privacy Policy</a></li>
                                                                <li _ngcontent-sc57=""><a _ngcontent-sc57="" translate="" href="terms-conditions.php">Terms &#38; Conditions</a></li>
                                                                <!---->
                                                            </ul>
                                                        </div>

                                                    </div>

                                                    <div _ngcontent-sc64="" class="column">
                                                        <h4 _ngcontent-sc64="" translate="" keyname="landing.footer.operating-hours" class="h5 color-dark font-semibold">Pharmacy Operating Hours
                                                        </h4>
                                                        <p _ngcontent-sc64="" translate="" keyname="landing.footer.operating-time" class="h5 color-base margin-t-m">Mon - Sun | 9:00 AM - 9:00
                                                            PM, IST</p>
                                                        <h4 _ngcontent-sc64="" translate="" keyname="landing.footer.contact-us" class="h5 color-dark font-semibold margin-t-xl">Contact Us
                                                        </h4>
                                                        <p _ngcontent-sc64="" class="h5 color-base margin-t-m"><span _ngcontent-sc64="" translate="" keyname="landing.footer.email">Email</span>: <a _ngcontent-sc64="" class="clr-primary" href="mailto:calcuttamedicals@gmail.com">calcuttamedicals@gmail.com</a>
                                                        </p>
                                                        <p _ngcontent-sc64="" class="h5 color-base"><span _ngcontent-sc64="" translate="" keyname="landing.footer.call">Call</span>: <a _ngcontent-sc64="" class="clr-primary" href="tel:<?php echo $fset['callsupport']; ?>"><?php echo $fset['callsupport']; ?></a></p>
                                                        <div _ngcontent-sc64="" class="margin-t-xl">
                                                            <div _ngcontent-sc64="" class="row row--middle row--gutter">
                                                                <div _ngcontent-sc64="" class="column"><a _ngcontent-sc64="" href="https://play.google.com/store/apps/details?id=in.calcuttamedicalstore" target="_blank" rel="noreferrer"><img _ngcontent-sc64="" height="40" width="134" alt="" class="lazyload" data-src="https://static.pocketpills.com/webapp/img/new-ui/employer-landing/play-store-download@2x.png"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </header>
                                        <div _ngcontent-sc64="" class="mega-footer__quaternary divider divider--t">
                                            <p _ngcontent-sc64="" translate="" class="xsmall mega-footer__copyright">©
                                                <?php echo $fset['title']; ?> Pharmacy</p>
                                            <!---->
                                            <div _ngcontent-sc64="" class="mega-footer__social">
                                                <p _ngcontent-sc64="" translate="" class="small font-regular txt-c">
                                                    Follow us:</p>
                                                <div _ngcontent-sc64="" class="row row--middle">
                                                    <div _ngcontent-sc64="" class="column"><a _ngcontent-sc64="" href="https://www.facebook.com/Calcutta-Medical-Store-100149615672610" target="_blank" rel="noreferrer" class="btn btn-icon footer-icons"></a>
                                                    </div>
                                                    <div _ngcontent-sc64="" class="column"><a _ngcontent-sc64="" href="https://twitter.com/calcuttamedical" target="_blank" rel="noreferrer" class="btn btn-icon footer-icons"></a>
                                                    </div>
                                                    <div _ngcontent-sc64="" class="column"><a _ngcontent-sc64="" href="https://www.instagram.com/calcuttamedicalstore" target="_blank" rel="noreferrer" class="btn btn-icon footer-icons"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---->
                            </landing-www-footer>
                        </div>
                    </div>
                    <!---->
                </div>
            </landing>
            <!---->
            <div class="process-loader" style="background-color:rgba(255,255,255,0.76);position:fixed;width:100%;height:100%;top:0;visibility:hidden;opacity:0;z-index:-1;transition:all 0.25s ease 0.1s;">
                <div class="loader">
                    <div class="loader__figure"></div>
                    <p translate="" keyname="common.loading.pleasewait" class="loader__label txt-uppercase">Please wait
                    </p>
                </div>
            </div>
        </main>
    </app-root>
    <!-- Scripts will be injected by webpack here -->
    <script async="" crossorigin="anonymous" type="text/javascript" src="https://polyfill.io/v3/polyfill.min.js?features=Object.values,Object.isFrozen,Element.prototype.matches,Array.prototype.includes,String.prototype.includes"></script>
    <script async="" type="text/javascript" src="https://static.pocketpills.com/js/analytics-prod.js"></script>
    <script src="/runtime.c6c9a0217082edb51c34.js" defer=""></script>
    <script src="/polyfills.b2c03547272e62feaca5.js" defer=""></script>
    <script src="/vendor.46a521cb85c78f44d792.js" defer=""></script>
    <script src="/main.8935c3103978be4334eb.js" defer=""></script>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-analytics.js"></script>

    <script>
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        var firebaseConfig = {
            apiKey: "AIzaSyByCEqmH-KpyRFYtJrw2WODpI2sES3ySZ0",
            authDomain: "calcutta-medical-stores.firebaseapp.com",
            projectId: "calcutta-medical-stores",
            storageBucket: "calcutta-medical-stores.appspot.com",
            messagingSenderId: "343671113761",
            appId: "1:343671113761:web:82f28ae60e11734874bb60",
            measurementId: "G-K04J06VF4V"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
    </script>
</body>

</html>
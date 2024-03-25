<?php

function indexPage()
{

  echo "<!doctype html>";
  echo "<html class='no-js' lang='en'>";
  echo "<head>";
  echo "<meta charset='utf-8'>";
  echo "<title>Welcome to My Website</title>";

  echo "</head>";
  echo "<body>";
  echo "<h1>Welcome to My Website</h1>";
  echo "<p>This is the index page of my website.</p>";

  echo "</body>";
  echo "</html>";
}

function feedback404()
{

  header("HTTP/1.0 404 Not Found");
  echo "<!doctype html>";
  echo "<html class='no-js' lang='en'>";
  echo "<head>";
  echo "<meta charset='utf-8'>";
  echo "<title>404 Not Found</title>";
  echo "</head>";
  echo "<body>";
  echo "<h1><strong>Not Found</strong></h1>";
  echo "<p>The requested URL was not found on this server.</p>";
  echo "</body>";
  echo "</html>";
  exit();
}

if (isset($_GET['site'])) {
    $filename = "list.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['site']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        indexPage();
        exit();
    }
} else {
    indexPage();
    exit();
}

?>

<!doctype html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="id-ID" data-authenticated-account>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- This is Squarespace. -->
    <!-- e-class.fio.unesa.ac.id -->
    <base href="">
    <meta charset="utf-8" />
    <meta name="google-site-verification" content="YD8Ciskb9Kc8RFVVU14DP0NNo_01sSmg9ob4fNz1gO4" />
    <title><?php echo $BRANDS ?>※ - Slot Gacor Hari Ini Terbaik Mudah Maxwin Terpercaya 2024</title>
    <meta http-equiv="Accept-CH" content="Sec-CH-UA-Platform-Version, Sec-CH-UA-Model" />
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/23LNnjV/slot-gacor-hari-ini.webp" />
    <link rel="canonical" href="https://e-class.fio.unesa.ac.id/%20%20assets/" />
    <meta property="og:site_name" content="Slot Gacor" />
    <meta property="og:title" content="<?php echo $BRANDS ?>※ Slot Gacor Hari Ini Terbaik Mudah Maxwin Terpercaya 2024" />
    <meta property="og:url" content="https://e-class.fio.unesa.ac.id/%20%20assets/" />
    <meta property="og:type" content="product" />
    <meta property="og:description" content="<?php echo $BRANDS ?> membagikan daftar situs slot online paling gacor hari ini dengan sederetan link slot terbaik gampang menang maxwin terpercaya di tahun 2024." />
    <meta property="og:image" content="https://miro.medium.com/v2/resize:fit:1100/format:webp/1*lyzyQ-NxoNZIgASdW6IEfQ.png" />
    <meta property="og:image:width" content="512" />
    <meta property="og:image:height" content="512" />
    <meta property="product:price:amount" content="10000.00" />
    <meta property="product:price:currency" content="IDR" />
    <meta property="product:availability" content="instock" />
    <meta property="product:original_price:amount" content="12000.00" />
    <meta property="product:original_price:currency" content="IDR" />
    <meta property="product:sale_price:amount" content="10000.00" />
    <meta property="product:sale_price:currency" content="IDR" />
    <meta itemprop="name" content="<?php echo $BRANDS ?>※ Slot Gacor Hari Ini Terbaik Mudah Maxwin Terpercaya 2024" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="language" content="ID">
    <meta name="copyright" content="Slot Gacor Hari Ini">
    <meta name="author" content="<?php echo $BRANDS ?>">
    <meta name="keywords" content="<?php echo $BRANDS ?>">
    <meta name="distribution" content="<?php echo $BRANDS ?>">
    <meta name="publisher" content="<?php echo $BRANDS ?>">
    <meta name="geo.placename" content="DKI Jakarta">
    <meta name="geo.country" content="ID">
    <meta name="geo.region" content="ID" />
    <meta name="tgn.nation" content="Indonesia">
    <meta property="og:locale" content="id_ID" />
    <link rel="amphtml" href="https://www.asia-sigma.org/amp/5/">
    <meta itemprop="url" content="https://e-class.fio.unesa.ac.id/%20%20assets/" />
    <meta itemprop="description" content="<?php echo $BRANDS ?> membagikan daftar situs slot online paling gacor hari ini dengan sederetan link slot terbaik gampang menang maxwin terpercaya di tahun 2024." />
    <meta itemprop="thumbnailUrl" content="https://miro.medium.com/v2/resize:fit:1100/format:webp/1*lyzyQ-NxoNZIgASdW6IEfQ.png" />
    <link rel="image_src" href="https://miro.medium.com/v2/resize:fit:1100/format:webp/1*lyzyQ-NxoNZIgASdW6IEfQ.png" />
    <meta itemprop="image" content="https://miro.medium.com/v2/resize:fit:1100/format:webp/1*lyzyQ-NxoNZIgASdW6IEfQ.png" />
    <meta name="twitter:title" content="<?php echo $BRANDS ?>※ Slot Gacor Hari Ini Terbaik Mudah Maxwin Terpercaya 2024" />
    <meta name="twitter:image" content="https://miro.medium.com/v2/resize:fit:1100/format:webp/1*lyzyQ-NxoNZIgASdW6IEfQ.png" />
    <meta name="twitter:url" content="https://e-class.fio.unesa.ac.id/%20%20assets/" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $BRANDS ?> membagikan daftar situs slot online paling gacor hari ini dengan sederetan link slot terbaik gampang menang maxwin terpercaya di tahun 2024." />
    <meta name="description" content="<?php echo $BRANDS ?> membagikan daftar situs slot online paling gacor hari ini 
dengan sederetan link slot terbaik gampang menang maxwin terpercaya di 
tahun 2024." />
    <link rel="preconnect" href="https://images.squarespace-cdn.com">
    <script type="text/javascript" src="//use.typekit.net/ik/as74HSOYFcYS2byfx4qLL2Rv1k_IwLRtQkLZyd8Flb3fecvJXnX1IyvhF2jtFRZLFRmcZQjujAsR5ebtwAw3wR8KjQy85Q4Ke6MK2hyydY8yScblZe8DSeUypPGHf5A5MyMMeMw6MKGHf5h5MyMMeMS6MKGHf5-5MyMMeMX6MKGHf5E5MyMMegI6MTMgnCzon3j.js"></script>
    <script type="text/javascript">
      try {
        Typekit.load();
      } catch (e) {}
    </script>
    <script type="text/javascript" crossorigin="anonymous" defer="defer" nomodule="nomodule" src="//assets.squarespace.com/@sqs/polyfiller/1.6/legacy.js"></script>
    <script type="text/javascript" crossorigin="anonymous" defer="defer" src="//assets.squarespace.com/@sqs/polyfiller/1.6/modern.js"></script>
    <script type="text/javascript">
      SQUARESPACE_ROLLUPS = {};
    </script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-49b239c5cd6faa9f4e10-min.id-ID.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_runtime');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-49b239c5cd6faa9f4e10-min.id-ID.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-6f117db4eb7fd4392375-min.id-ID.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_moment_js_vendor');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-6f117db4eb7fd4392375-min.id-ID.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-1edcdb1d4b6b94ec8c7e-min.id-ID.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-cldr_resource_pack');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-1edcdb1d4b6b94ec8c7e-min.id-ID.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-3598b219a3c023c1915a-min.id-ID.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors_stable');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-3598b219a3c023c1915a-min.id-ID.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-c75db8dd532e85f576c5-min.id-ID.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-c75db8dd532e85f576c5-min.id-ID.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-090f9eb2063f9c96e42f-min.id-ID.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-common');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-090f9eb2063f9c96e42f-min.id-ID.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/commerce-cd38a41ade0f126d8c63-min.id-ID.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-commerce');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/commerce-cd38a41ade0f126d8c63-min.id-ID.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].css = ["//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.id-ID.css"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-commerce');
    </script>
    <link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.id-ID.css">
    <script data-name="static-context">
      Static = window.Static || {};
      Static.SQUARESPACE_CONTEXT = {
        "facebookAppId": "314192535267336",
        "facebookApiVersion": "v6.0",
        "rollups": {
          "squarespace-announcement-bar": {
            "js": "//assets.squarespace.com/universal/scripts-compressed/announcement-bar-caf833212000c8729b78-min.id-ID.js"
          },
          "squarespace-audio-player": {
            "css": "//assets.squarespace.com/universal/styles-compressed/audio-player-9fb16b1675c0ff315dae-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/audio-player-97687ced731c280b0230-min.id-ID.js"
          },
          "squarespace-blog-collection-list": {
            "css": "//assets.squarespace.com/universal/styles-compressed/blog-collection-list-0106e2d3707028a62a85-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/blog-collection-list-1e390bbcde22c7bbc97f-min.id-ID.js"
          },
          "squarespace-calendar-block-renderer": {
            "css": "//assets.squarespace.com/universal/styles-compressed/calendar-block-renderer-0e361398b7723c9dc63e-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/calendar-block-renderer-93ec854a2a24319a1aae-min.id-ID.js"
          },
          "squarespace-chartjs-helpers": {
            "css": "//assets.squarespace.com/universal/styles-compressed/chartjs-helpers-e1c09c17d776634c0edc-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/chartjs-helpers-5e6f6a011eebab55b6ae-min.id-ID.js"
          },
          "squarespace-comments": {
            "css": "//assets.squarespace.com/universal/styles-compressed/comments-24b74a0326eae0cd5049-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/comments-089bbc5cd9046a4136a6-min.id-ID.js"
          },
          "squarespace-custom-css-popup": {
            "css": "//assets.squarespace.com/universal/styles-compressed/custom-css-popup-e202a6f639d17ee90b44-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/custom-css-popup-bedb81f851155d4f3660-min.id-ID.js"
          },
          "squarespace-dialog": {
            "css": "//assets.squarespace.com/universal/styles-compressed/dialog-081be79078914b908a1a-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/dialog-1945a4b81f494b740d40-min.id-ID.js"
          },
          "squarespace-events-collection": {
            "css": "//assets.squarespace.com/universal/styles-compressed/events-collection-0e361398b7723c9dc63e-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/events-collection-b199671fdb555047d1fe-min.id-ID.js"
          },
          "squarespace-form-rendering-utils": {
            "js": "//assets.squarespace.com/universal/scripts-compressed/form-rendering-utils-c3cc6374b40bd52f5fd0-min.id-ID.js"
          },
          "squarespace-forms": {
            "css": "//assets.squarespace.com/universal/styles-compressed/forms-8d93ba2c12ff0765b64c-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/forms-6ff543a505e6ab1d99b5-min.id-ID.js"
          },
          "squarespace-gallery-collection-list": {
            "css": "//assets.squarespace.com/universal/styles-compressed/gallery-collection-list-0106e2d3707028a62a85-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/gallery-collection-list-5f8358cf7b510b32fc49-min.id-ID.js"
          },
          "squarespace-image-zoom": {
            "css": "//assets.squarespace.com/universal/styles-compressed/image-zoom-0106e2d3707028a62a85-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/image-zoom-d0c90be829ba36cb62cc-min.id-ID.js"
          },
          "squarespace-pinterest": {
            "css": "//assets.squarespace.com/universal/styles-compressed/pinterest-0106e2d3707028a62a85-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/pinterest-92983d5eb8a053d3c9c3-min.id-ID.js"
          },
          "squarespace-popup-overlay": {
            "css": "//assets.squarespace.com/universal/styles-compressed/popup-overlay-b2bf7df4402e207cd72c-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/popup-overlay-f3eed430200f3bc64480-min.id-ID.js"
          },
          "squarespace-product-quick-view": {
            "css": "//assets.squarespace.com/universal/styles-compressed/product-quick-view-4aec27f1bd826750e9db-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/product-quick-view-2896bca818154481c9b8-min.id-ID.js"
          },
          "squarespace-products-collection-item-v2": {
            "css": "//assets.squarespace.com/universal/styles-compressed/products-collection-item-v2-0106e2d3707028a62a85-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/products-collection-item-v2-a96b3f54dd47a01900f6-min.id-ID.js"
          },
          "squarespace-products-collection-list-v2": {
            "css": "//assets.squarespace.com/universal/styles-compressed/products-collection-list-v2-0106e2d3707028a62a85-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/products-collection-list-v2-0c340509add53a698500-min.id-ID.js"
          },
          "squarespace-search-page": {
            "css": "//assets.squarespace.com/universal/styles-compressed/search-page-dcc0462e30efbd6dc562-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/search-page-7f25c2caeb4133fbb771-min.id-ID.js"
          },
          "squarespace-search-preview": {
            "js": "//assets.squarespace.com/universal/scripts-compressed/search-preview-8cdc8ae67aced2d4c068-min.id-ID.js"
          },
          "squarespace-simple-liking": {
            "css": "//assets.squarespace.com/universal/styles-compressed/simple-liking-a9eb87c1b73b199ce387-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/simple-liking-6a6862d5ff0df1b9784e-min.id-ID.js"
          },
          "squarespace-social-buttons": {
            "css": "//assets.squarespace.com/universal/styles-compressed/social-buttons-98ee3a678d356d849b76-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/social-buttons-7722aa7e3758682cd488-min.id-ID.js"
          },
          "squarespace-tourdates": {
            "css": "//assets.squarespace.com/universal/styles-compressed/tourdates-0106e2d3707028a62a85-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/tourdates-0895ea59cff93264c8ff-min.id-ID.js"
          },
          "squarespace-website-overlays-manager": {
            "css": "//assets.squarespace.com/universal/styles-compressed/website-overlays-manager-6dfb472f441e39d78b13-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/website-overlays-manager-5b64d9262ff9d2962cd9-min.id-ID.js"
          }
        },
        "pageType": 50,
        "website": {
          "id": "65fe65adc8d81c029ba8e92b",
          "identifier": "e-class.fio.unesa.ac.id",
          "websiteType": 1,
          "contentModifiedOn": 1711341736765,
          "cloneable": false,
          "hasBeenCloneable": false,
          "siteStatus": {
            "value": 3,
            "expiration": 1712380589485
          },
          "language": "id-ID",
          "timeZone": "Asia/Jakarta",
          "machineTimeZoneOffset": 25200000,
          "timeZoneOffset": 25200000,
          "timeZoneAbbr": "WIB",
          "siteTitle": "Slot Gacor",
          "fullSiteTitle": "<?php echo $BRANDS ?>\u203B Slot Gacor Hari Ini Terbaik Mudah Maxwin Terpercaya 2024",
          "siteDescription": {
            "html": "",
            "raw": false
          },
          "shareButtonOptions": {
            "2": true,
            "4": true,
            "6": true,
            "3": true,
            "1": true,
            "8": true,
            "7": true
          },
          "authenticUrl": "https://e-class.fio.unesa.ac.id/%20%20assets/",
          "internalUrl": "https://e-class.fio.unesa.ac.id/%20%20assets/",
          "baseUrl": "https://e-class.fio.unesa.ac.id/%20%20assets/",
          "sslSetting": 3,
          "isHstsEnabled": true,
          "socialAccounts": [{
            "serviceId": 64,
            "addedOn": 1711170989703,
            "profileUrl": "https://instagram.com/squarespace",
            "id": "65fe65adc8d81c029ba8e941",
            "websiteId": "65fe65adc8d81c029ba8e92b",
            "pullEnabled": false,
            "pushEnabled": true,
            "autoPushEnabled": false,
            "iconEnabled": true,
            "defaultPushMessage": "%t %u",
            "accountState": 1,
            "pushAvailable": true,
            "serviceName": "instagram-unauth"
          }],
          "createdOn": 1711170989485,
          "templateId": "5c5a519771c10ba3470d8101",
          "installationId": "65fe65adc8d81c029ba8e933",
          "templateWebsiteId": "6564e646bc5d225098295018",
          "hasPassword": false,
          "typekitId": "",
          "statsMigrated": false,
          "imageMetadataProcessingEnabled": false,
          "revalidateBefore": 1711341367185,
          "captchaSettings": {
            "enabledForDonations": false
          },
          "showOwnerLogin": true
        },
        "websiteSettings": {
          "id": "65fe65adc8d81c029ba8e92e",
          "websiteId": "65fe65adc8d81c029ba8e92b",
          "subjects": [],
          "country": "ID",
          "state": "JK",
          "simpleLikingEnabled": true,
          "mobileInfoBarSettings": {
            "isContactEmailEnabled": false,
            "isContactPhoneNumberEnabled": false,
            "isLocationEnabled": false,
            "isBusinessHoursEnabled": false
          },
          "commentLikesAllowed": true,
          "commentAnonAllowed": true,
          "commentThreaded": true,
          "commentApprovalRequired": false,
          "commentAvatarsOn": true,
          "commentSortType": 2,
          "commentFlagThreshold": 0,
          "commentFlagsAllowed": true,
          "commentEnableByDefault": true,
          "commentDisableAfterDaysDefault": 0,
          "disqusShortname": "",
          "commentsEnabled": false,
          "storeSettings": {
            "returnPolicy": {
              "raw": false
            },
            "termsOfService": {
              "raw": false
            },
            "privacyPolicy": {
              "raw": false
            },
            "storeMailingList": {
              "connected": false,
              "list": "",
              "useSingleOptIn": false
            },
            "expressCheckout": false,
            "continueShoppingLinkUrl": "https://e-class.fio.unesa.ac.id/%20%20assets",
            "testModeOn": true,
            "useLightCart": false,
            "showNoteField": false,
            "shippingCountryDefaultValue": "US",
            "billToShippingDefaultValue": false,
            "showShippingPhoneNumber": true,
            "isShippingPhoneRequired": false,
            "showBillingPhoneNumber": true,
            "isBillingPhoneRequired": false,
            "currenciesSupported": ["USD", "CAD", "GBP", "AUD", "EUR", "CHF", "NOK", "SEK", "DKK", "NZD", "SGD", "MXN", "HKD", "CZK", "ILS", "MYR", "RUB", "PHP", "PLN", "THB", "BRL", "ARS", "COP", "IDR", "INR", "JPY", "ZAR"],
            "defaultCurrency": "USD",
            "selectedCurrency": "IDR",
            "measurementStandard": 1,
            "showCustomCheckoutForm": false,
            "checkoutPageMarketingOptInEnabled": true,
            "enableMailingListOptInByDefault": false,
            "isApplePayEnabled": false,
            "isPaymentRequestEnabled": true,
            "sameAsRetailLocation": false,
            "merchandisingSettings": {
              "scarcityEnabledOnProductItems": false,
              "scarcityEnabledOnProductBlocks": false,
              "scarcityMessageType": "DEFAULT_SCARCITY_MESSAGE",
              "scarcityThreshold": 10,
              "merchantLowStockAlertThreshold": 5,
              "multipleQuantityAllowedForServices": true,
              "restockNotificationsEnabled": false,
              "restockNotificationsMailingListSignUpEnabled": false,
              "relatedProductsEnabled": false,
              "relatedProductsOrdering": "random",
              "soldOutVariantsDropdownDisabled": false,
              "productComposerOptedIn": false,
              "productComposerABTestOptedOut": false,
              "productReviewsEnabled": false
            },
            "minimumOrderSubtotalEnabled": false,
            "minimumOrderSubtotal": {
              "currency": "IDR",
              "value": "0.00"
            },
            "instagramShoppingLinkDestination": 1,
            "storeMigratedToProductCollections2_0": false,
            "isLive": false,
            "multipleQuantityAllowedForServices": true
          },
          "useEscapeKeyToLogin": false,
          "ssBadgeType": 1,
          "ssBadgePosition": 4,
          "ssBadgeVisibility": 1,
          "ssBadgeDevices": 1,
          "pinterestOverlayOptions": {
            "mode": "disabled"
          },
          "ampEnabled": false,
          "userAccountsSettings": {
            "loginAllowed": false,
            "signupAllowed": false
          }
        },
        "cookieSettings": {
          "isCookieBannerEnabled": false,
          "isRestrictiveCookiePolicyEnabled": false,
          "isRestrictiveCookiePolicyAbsolute": false,
          "cookieBannerText": "",
          "cookieBannerTheme": "",
          "cookieBannerVariant": "",
          "cookieBannerPosition": "",
          "cookieBannerCtaVariant": "",
          "cookieBannerCtaText": "",
          "cookieBannerAcceptType": "OPT_IN",
          "cookieBannerOptOutCtaText": "",
          "cookieBannerHasOptOut": false,
          "cookieBannerHasManageCookies": true,
          "cookieBannerManageCookiesLabel": ""
        },
        "websiteCloneable": false,
        "collection": {
          "title": "Slot Gacor Hari Ini",
          "id": "65fe67b0a11599710360225d",
          "fullUrl": "https://e-class.fio.unesa.ac.id/%20%20assets/",
          "type": 13,
          "permissionType": 1
        },
        "item": {
          "title": "<?php echo $BRANDS ?>\u203B Slot Gacor Hari Ini Terbaik Mudah Maxwin Terpercaya 2024",
          "id": "6600ffc4a1b5bd408d089641",
          "fullUrl": "https://e-class.fio.unesa.ac.id/%20%20assets/",
          "publicCommentCount": 0,
          "commentState": 1,
          "recordType": 11
        },
        "subscribed": false,
        "appDomain": "squarespace.com",
        "templateTweakable": true,
        "tweakJSON": {
          "form-use-theme-colors": "true",
          "header-logo-height": "80px",
          "header-mobile-logo-max-height": "30px",
          "header-vert-padding": "1.1vw",
          "header-width": "Full",
          "maxPageWidth": "1400px",
          "pagePadding": "2vw",
          "tweak-blog-alternating-side-by-side-image-aspect-ratio": "1:1 Square",
          "tweak-blog-alternating-side-by-side-image-spacing": "6%",
          "tweak-blog-alternating-side-by-side-meta-spacing": "20px",
          "tweak-blog-alternating-side-by-side-primary-meta": "Categories",
          "tweak-blog-alternating-side-by-side-read-more-spacing": "20px",
          "tweak-blog-alternating-side-by-side-secondary-meta": "Date",
          "tweak-blog-basic-grid-columns": "2",
          "tweak-blog-basic-grid-image-aspect-ratio": "3:2 Standard",
          "tweak-blog-basic-grid-image-spacing": "30px",
          "tweak-blog-basic-grid-meta-spacing": "17px",
          "tweak-blog-basic-grid-primary-meta": "Categories",
          "tweak-blog-basic-grid-read-more-spacing": "16px",
          "tweak-blog-basic-grid-secondary-meta": "Date",
          "tweak-blog-item-custom-width": "75",
          "tweak-blog-item-show-author-profile": "false",
          "tweak-blog-item-width": "Narrow",
          "tweak-blog-masonry-columns": "2",
          "tweak-blog-masonry-horizontal-spacing": "64px",
          "tweak-blog-masonry-image-spacing": "20px",
          "tweak-blog-masonry-meta-spacing": "10px",
          "tweak-blog-masonry-primary-meta": "Categories",
          "tweak-blog-masonry-read-more-spacing": "22px",
          "tweak-blog-masonry-secondary-meta": "Date",
          "tweak-blog-masonry-vertical-spacing": "231px",
          "tweak-blog-side-by-side-image-aspect-ratio": "1:1 Square",
          "tweak-blog-side-by-side-image-spacing": "6%",
          "tweak-blog-side-by-side-meta-spacing": "20px",
          "tweak-blog-side-by-side-primary-meta": "Categories",
          "tweak-blog-side-by-side-read-more-spacing": "20px",
          "tweak-blog-side-by-side-secondary-meta": "Date",
          "tweak-blog-single-column-image-spacing": "50px",
          "tweak-blog-single-column-meta-spacing": "30px",
          "tweak-blog-single-column-primary-meta": "Categories",
          "tweak-blog-single-column-read-more-spacing": "30px",
          "tweak-blog-single-column-secondary-meta": "Date",
          "tweak-events-stacked-show-thumbnails": "true",
          "tweak-events-stacked-thumbnail-size": "3:2 Standard",
          "tweak-fixed-header": "false",
          "tweak-fixed-header-style": "Basic",
          "tweak-global-animations-animation-curve": "ease",
          "tweak-global-animations-animation-delay": "0.6s",
          "tweak-global-animations-animation-duration": "1.20s",
          "tweak-global-animations-animation-style": "fade",
          "tweak-global-animations-animation-type": "none",
          "tweak-global-animations-complexity-level": "detailed",
          "tweak-global-animations-enabled": "false",
          "tweak-portfolio-grid-basic-custom-height": "50",
          "tweak-portfolio-grid-overlay-custom-height": "50",
          "tweak-portfolio-hover-follow-acceleration": "10%",
          "tweak-portfolio-hover-follow-animation-duration": "Fast",
          "tweak-portfolio-hover-follow-animation-type": "Fade",
          "tweak-portfolio-hover-follow-delimiter": "Bullet",
          "tweak-portfolio-hover-follow-front": "false",
          "tweak-portfolio-hover-follow-layout": "Inline",
          "tweak-portfolio-hover-follow-size": "50",
          "tweak-portfolio-hover-follow-text-spacing-x": "1.5",
          "tweak-portfolio-hover-follow-text-spacing-y": "1.5",
          "tweak-portfolio-hover-static-animation-duration": "Fast",
          "tweak-portfolio-hover-static-animation-type": "Fade",
          "tweak-portfolio-hover-static-delimiter": "Hyphen",
          "tweak-portfolio-hover-static-front": "true",
          "tweak-portfolio-hover-static-layout": "Inline",
          "tweak-portfolio-hover-static-size": "50",
          "tweak-portfolio-hover-static-text-spacing-x": "1.5",
          "tweak-portfolio-hover-static-text-spacing-y": "1.5",
          "tweak-portfolio-index-background-animation-duration": "Medium",
          "tweak-portfolio-index-background-animation-type": "Fade",
          "tweak-portfolio-index-background-custom-height": "50",
          "tweak-portfolio-index-background-delimiter": "None",
          "tweak-portfolio-index-background-height": "Large",
          "tweak-portfolio-index-background-horizontal-alignment": "Center",
          "tweak-portfolio-index-background-link-format": "Stacked",
          "tweak-portfolio-index-background-persist": "false",
          "tweak-portfolio-index-background-vertical-alignment": "Middle",
          "tweak-portfolio-index-background-width": "Full",
          "tweak-product-basic-item-click-action": "None",
          "tweak-product-basic-item-gallery-aspect-ratio": "3:2 Standard",
          "tweak-product-basic-item-gallery-design": "Carousel",
          "tweak-product-basic-item-gallery-width": "30%",
          "tweak-product-basic-item-hover-action": "Zoom",
          "tweak-product-basic-item-image-spacing": "10vw",
          "tweak-product-basic-item-image-zoom-factor": "1.5",
          "tweak-product-basic-item-product-variant-display": "Dropdown",
          "tweak-product-basic-item-thumbnail-placement": "Side",
          "tweak-product-basic-item-variant-picker-layout": "Dropdowns",
          "tweak-products-add-to-cart-button": "false",
          "tweak-products-columns": "2",
          "tweak-products-gutter-column": "2vw",
          "tweak-products-gutter-row": "4vw",
          "tweak-products-header-text-alignment": "Middle",
          "tweak-products-image-aspect-ratio": "1:1 Square",
          "tweak-products-image-text-spacing": "2vw",
          "tweak-products-mobile-columns": "1",
          "tweak-products-text-alignment": "Middle",
          "tweak-products-width": "Full",
          "tweak-transparent-header": "true"
        },
        "templateId": "5c5a519771c10ba3470d8101",
        "templateVersion": "7.1",
        "pageFeatures": [1, 2, 4],
        "gmRenderKey": "QUl6YVN5Q0JUUk9xNkx1dkZfSUUxcjQ2LVQ0QWVUU1YtMGQ3bXk4",
        "templateScriptsRootUrl": "https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/",
        "betaFeatureFlags": ["commerce_clearpay", "container_styles_improvements", "show_mobile_column_in_plp_editor", "nested_categories", "nested_categories_migration_enabled", "fluid_engine", "override_block_styles", "marketing_landing_page", "commerce_etsy_product_import", "rte_text_highlights", "unify_edit_mode_p2", "proposals_beta_in_circle_labs", "website_form_effects", "hideable_header_footer_for_courses", "commerce_restock_notifications", "campaigns_discount_section_in_blasts", "commerce_subscription_renewal_notifications", "google_consent_v2", "content_ai_brand_identity", "invoicing-on-personal-plans", "campaigns_import_discounts", "link_editor_redesign", "visitor_react_forms", "fluid_engine_default_mobile_order", "commerce_site_visitor_metrics", "commsplat_forms_visitor_profile", "send_local_pickup_ready_email", "commerce_checkout_website_updates_enabled", "supports_versioned_template_assets", "website_fonts", "is_feature_gate_refresh_enabled", "themes", "campaigns_global_uc_ab", "customer_accounts_email_verification", "website_form_improvements", "hideable_header_footer", "template_translation_english_fallbacks", "header_usability_improvements", "collection_typename_switching", "unify_edit_mode_p1_70", "seven_one_migration_updated_kb_links", "enable_css_variable_tweaks", "customer_account_creation_recaptcha", "viewer-role-contributor-invites", "fluid_engine_clean_up_grid_contextual_change", "summary_block_video_collections", "commerce_order_status_access", "accounting_orders_sync", "campaigns_discount_section_in_automations", "fluid_engine_new_multiselect_actions", "unify_edit_mode_p1", "blog_monetization", "background_art_onboarding", "commerce_etsy_shipping_import", "member_areas_feature", "sticky_scroll", "hideable_header_footer_for_videos", "toggle_preview_new_shortcut", "commerce_paywall_renewal_notifications", "react_pages_panel", "rte_text_justify_align", "campaigns_new_image_layout_picker", "pdp_product_add_ons_visitor_site", "scripts_defer", "shape_block", "new_stacked_index", "campaigns_thumbnail_layout"],
        "videoAssetsFeatureFlags": ["mux-data-video-collection", "mux-data-course-collection"],
        "authenticatedAccount": {
          "id": "65ed372db95f4f40a5cb33ce",
          "tutorialsCompleted": {
            "CAMPAIGNS_BLOG_TO_EMAIL_MODAL": true,
            "has-seen-fluid-engine-mobile-changes-notification": true
          },
          "notificationsRead": {},
          "lastLoginOn": 1710752301606,
          "displayName": "MONGKEY BUSSINESS",
          "firstName": "MONGKEY",
          "lastName": "BUSSINESS",
          "eligibleForMarketingDiscount": false,
          "avatarUrl": "https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/65ed372db95f4f40a5cb33ce/aedbd020-8a71-4233-9cde-9bd6fcaf8d3c/thirdPartyMemberAvatar-65ed372db95f4f40a5cb33ce-bb007302-ea6d-467a-bf30-e2dcd86df55d?format=300w",
          "bio": "",
          "roles": {},
          "email": "mongkeybussiness@gmail.com",
          "createdOn": 1710044973301,
          "marketingId": "ee9445c8-7413-4395-b092-89396b61c433",
          "avatarAssetUrl": "https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/65ed372db95f4f40a5cb33ce/aedbd020-8a71-4233-9cde-9bd6fcaf8d3c/thirdPartyMemberAvatar-65ed372db95f4f40a5cb33ce-bb007302-ea6d-467a-bf30-e2dcd86df55d?format=300w",
          "pseudonymAccount": false,
          "preferredLocale": "id-ID"
        },
        "authenticatedAccountWebsiteSettings": {
          "id": "65fe65b0d24190568a8f4a76"
        },
        "permissions": {
          "permissions": {
            "1": true
          }
        },
        "websiteRoles": {
          "1": true
        },
        "accessPermissions": [1214, 1417, 1418, 1229, 1612, 1932, 1228, 1931, 1223, 1516, 1701, 2066, 1421, 12, 1210, 1921, 1110, 1218, 1412, 1413, 1310, 1422, 1512, 1930, 1700, 1514, 11, 1515, 15, 1226, 1212, 1220, 1419, 1610, 0, 1111, 1311, 1233, 1, 1217, 1211, 1912, 1112, 1221, 13, 1513, 14, 1234, 1423, 1215, 1416, 1415, 1216, 1510, 1411, 1219, 1611, 1920, 18, 1910, 1911, 1517, 1230, 1810, 1410, 1420, 1213, 1224, 1511, 1414, 1225],
        "memberAccountNames": {
          "65ed372db95f4f40a5cb33ce": {
            "avatarUrl": "https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/65ed372db95f4f40a5cb33ce/aedbd020-8a71-4233-9cde-9bd6fcaf8d3c/thirdPartyMemberAvatar-65ed372db95f4f40a5cb33ce-bb007302-ea6d-467a-bf30-e2dcd86df55d?format=300w",
            "bio": "",
            "displayName": "MONGKEY BUSSINESS"
          }
        },
        "impersonatedSession": false,
        "demoCollections": [{
          "collectionId": "6564ed405646b229f453661b",
          "deleted": true
        }, {
          "collectionId": "6564f245f443470609472494",
          "deleted": true
        }, {
          "collectionId": "656659c4906443354900a86b",
          "deleted": true
        }, {
          "collectionId": "6567a07968d1bf1aa525eadb",
          "deleted": true
        }, {
          "collectionId": "6567ad2808ee812a4735882b",
          "deleted": true
        }, {
          "collectionId": "6567ad2903d294768578d7cc",
          "deleted": true
        }, {
          "collectionId": "6567ad2bd92d9e7e7e386109",
          "deleted": true
        }],
        "connectedAccounts": [{
          "serviceId": 64,
          "addedOn": 1711170989703,
          "profileUrl": "https://instagram.com/squarespace",
          "id": "65fe65adc8d81c029ba8e941",
          "websiteId": "65fe65adc8d81c029ba8e92b",
          "pullEnabled": false,
          "pushEnabled": true,
          "autoPushEnabled": false,
          "iconEnabled": true,
          "defaultPushMessage": "%t %u",
          "accountState": 1,
          "pushAvailable": true,
          "serviceName": "instagram-unauth"
        }],
        "tzData": {
          "zones": [
            [420, null, "WIB", null]
          ],
          "rules": {}
        },
        "product": {
          "variantAttributeNames": [],
          "variants": [{
            "id": "39d2ee7e-dd93-48fc-bb40-145153c5bf54",
            "sku": "JMSLOTGACOR01",
            "price": {
              "currencyCode": "IDR",
              "value": 1200000,
              "decimalValue": "12000.00",
              "fractionalDigits": 2
            },
            "salePrice": {
              "currencyCode": "IDR",
              "value": 1000000,
              "decimalValue": "10000.00",
              "fractionalDigits": 2
            },
            "onSale": true,
            "stock": {
              "unlimited": true
            },
            "attributes": {},
            "shippingWeight": {
              "value": 0.0,
              "unit": "POUND"
            },
            "shippingSize": {
              "unit": "INCH",
              "width": 0.0,
              "height": 0.0,
              "len": 0.0
            }
          }],
          "subscribable": false,
          "fulfilledExternally": false,
          "productType": 1
        },
        "showAnnouncementBar": false,
        "recaptchaEnterpriseContext": {
          "recaptchaEnterpriseSiteKey": "6LdDFQwjAAAAAPigEvvPgEVbb7QBm-TkVJdDTlAv"
        },
        "i18nContext": {
          "timeZoneData": {
            "id": "Asia/Jakarta",
            "name": "Western Indonesia Time"
          }
        }
      };
    </script>
    <script type="application/ld+json">
      {
        "url": "https://www.entrepreneur.co.id/wp-education/",
        "name": "<?php echo $BRANDS ?>",
        "description": "",
        "@context": "http://schema.org",
        "@type": "WebSite"
      }
    </script>
    <script type="application/ld+json">
      {
        "name": "<?php echo $BRANDS ?>\u203B Slot Gacor Hari Ini Terbaik Mudah Maxwin Terpercaya 2024",
        "image": "https://miro.medium.com/v2/resize:fit:1100/format:webp/1*lyzyQ-NxoNZIgASdW6IEfQ.png",
        "description": "<?php echo $BRANDS ?> membagikan daftar situs slot online paling gacor hari ini dengan sederetan link slot terbaik gampang menang maxwin terpercaya di tahun 2024.",
        "brand": "<?php echo $BRANDS ?>",
        "offers": {
          "price": 20000.00,
          "priceCurrency": "IDR",
          "url": "https://e-class.fio.unesa.ac.id/%20%20assets/",
          "availability": "InStock",
          "sku": "<?php echo $BRANDS ?>",
          "@context": "http://schema.org",
          "@type": "Offer"
        },
        "@context": "http://schema.org",
        "@type": "Product"
      }
    </script>
    <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/versioned-site-css/65fe65adc8d81c029ba8e92b/22/5c5a519771c10ba3470d8101/65fe65adc8d81c029ba8e933/1507/site.css" />
    <script>
      Static.COOKIE_BANNER_CAPABLE = true;
    </script>
    <!-- End of Squarespace Headers -->
    <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/versioned-assets/1711043046520-YWRD968DS53U5ZK5HM7B/static.css">
  </head>
  <body id="item-6600ffc4a1b5bd408d089641" class="
      primary-button-style-solid primary-button-shape-pill secondary-button-style-outline secondary-button-shape-pill tertiary-button-style-outline tertiary-button-shape-pill form-use-theme-colors form-field-style-outline form-field-shape-pill form-field-border-all form-field-checkbox-type-icon form-field-checkbox-fill-outline form-field-checkbox-color-normal form-field-checkbox-shape-pill form-field-checkbox-layout-stack form-field-radio-type-icon form-field-radio-fill-outline form-field-radio-color-normal form-field-radio-shape-pill form-field-radio-layout-stack form-field-survey-fill-outline form-field-survey-color-normal form-field-survey-shape-pill form-field-hover-focus-outline form-submit-button-style-label header-overlay-alignment-left header-width-full tweak-transparent-header  tweak-fixed-header-style-basic tweak-blog-alternating-side-by-side-width-full tweak-blog-alternating-side-by-side-image-aspect-ratio-11-square tweak-blog-alternating-side-by-side-text-alignment-left tweak-blog-alternating-side-by-side-read-more-style-hide tweak-blog-alternating-side-by-side-image-text-alignment-middle tweak-blog-alternating-side-by-side-delimiter-bullet tweak-blog-alternating-side-by-side-meta-position-top tweak-blog-alternating-side-by-side-primary-meta-categories tweak-blog-alternating-side-by-side-secondary-meta-date tweak-blog-alternating-side-by-side-excerpt-show tweak-blog-basic-grid-width-full tweak-blog-basic-grid-image-aspect-ratio-32-standard tweak-blog-basic-grid-text-alignment-left tweak-blog-basic-grid-delimiter-bullet tweak-blog-basic-grid-image-placement-above tweak-blog-basic-grid-read-more-style-show tweak-blog-basic-grid-primary-meta-categories tweak-blog-basic-grid-secondary-meta-date tweak-blog-basic-grid-excerpt-show tweak-blog-item-width-narrow tweak-blog-item-text-alignment-left tweak-blog-item-meta-position-above-title  tweak-blog-item-show-date   tweak-blog-item-delimiter-bullet tweak-blog-masonry-width-inset tweak-blog-masonry-text-alignment-center tweak-blog-masonry-primary-meta-categories tweak-blog-masonry-secondary-meta-date tweak-blog-masonry-meta-position-top tweak-blog-masonry-read-more-style-hide tweak-blog-masonry-delimiter-space tweak-blog-masonry-image-placement-above tweak-blog-masonry-excerpt-show tweak-blog-side-by-side-width-inset tweak-blog-side-by-side-image-placement-left tweak-blog-side-by-side-image-aspect-ratio-11-square tweak-blog-side-by-side-primary-meta-categories tweak-blog-side-by-side-secondary-meta-date tweak-blog-side-by-side-meta-position-top tweak-blog-side-by-side-text-alignment-left tweak-blog-side-by-side-image-text-alignment-middle tweak-blog-side-by-side-read-more-style-show tweak-blog-side-by-side-delimiter-bullet tweak-blog-side-by-side-excerpt-show tweak-blog-single-column-width-inset tweak-blog-single-column-text-alignment-center tweak-blog-single-column-image-placement-above tweak-blog-single-column-delimiter-bullet tweak-blog-single-column-read-more-style-show tweak-blog-single-column-primary-meta-categories tweak-blog-single-column-secondary-meta-date tweak-blog-single-column-meta-position-top tweak-blog-single-column-content-full-post tweak-events-stacked-width-full tweak-events-stacked-height-large  tweak-events-stacked-show-thumbnails tweak-events-stacked-thumbnail-size-32-standard tweak-events-stacked-date-style-with-text tweak-events-stacked-show-time tweak-events-stacked-show-location  tweak-events-stacked-show-excerpt   tweak-global-animations-complexity-level-detailed tweak-global-animations-animation-style-fade tweak-global-animations-animation-type-none tweak-global-animations-animation-curve-ease tweak-portfolio-grid-basic-width-full tweak-portfolio-grid-basic-height-small tweak-portfolio-grid-basic-image-aspect-ratio-11-square tweak-portfolio-grid-basic-text-alignment-left tweak-portfolio-grid-basic-hover-effect-fade tweak-portfolio-grid-overlay-width-full tweak-portfolio-grid-overlay-height-large tweak-portfolio-grid-overlay-image-aspect-ratio-11-square tweak-portfolio-grid-overlay-text-placement-center tweak-portfolio-grid-overlay-show-text-after-hover tweak-portfolio-index-background-link-format-stacked tweak-portfolio-index-background-width-full tweak-portfolio-index-background-height-large  tweak-portfolio-index-background-vertical-alignment-middle tweak-portfolio-index-background-horizontal-alignment-center tweak-portfolio-index-background-delimiter-none tweak-portfolio-index-background-animation-type-fade tweak-portfolio-index-background-animation-duration-medium tweak-portfolio-hover-follow-layout-inline  tweak-portfolio-hover-follow-delimiter-bullet tweak-portfolio-hover-follow-animation-type-fade tweak-portfolio-hover-follow-animation-duration-fast tweak-portfolio-hover-static-layout-inline tweak-portfolio-hover-static-front tweak-portfolio-hover-static-delimiter-hyphen tweak-portfolio-hover-static-animation-type-fade tweak-portfolio-hover-static-animation-duration-fast tweak-product-basic-item-product-variant-display-dropdown tweak-product-basic-item-width-inset tweak-product-basic-item-gallery-aspect-ratio-32-standard tweak-product-basic-item-text-alignment-left tweak-product-basic-item-navigation-none tweak-product-basic-item-content-alignment-top tweak-product-basic-item-gallery-design-carousel tweak-product-basic-item-gallery-placement-right tweak-product-basic-item-thumbnail-placement-side tweak-product-basic-item-click-action-none tweak-product-basic-item-hover-action-zoom tweak-product-basic-item-variant-picker-layout-dropdowns tweak-products-width-full tweak-products-image-aspect-ratio-11-square tweak-products-text-alignment-middle  tweak-products-price-show tweak-products-nested-category-type-top  tweak-products-header-text-alignment-middle tweak-products-breadcrumbs image-block-poster-text-alignment-center image-block-card-content-position-center image-block-card-text-alignment-left image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-content-position-center image-block-collage-text-alignment-center image-block-stack-text-alignment-left hide-opentable-icons opentable-style-dark tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-center tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-idr view-item collection-layout-default collection-65fe67b0a11599710360225d collection-type-products mobile-style-available sqs-seven-one
      
        show-pdp-product-add-ons
      
      
        
          
          
        
      
    " data-description="plp-mobile-editor-column" tabindex="-1">
    <div id="siteWrapper" class="clearfix site-wrapper">
      <div id="floatingCart" class="floating-cart hidden">
        <a href="/cart" class="icon icon--stroke icon--fill icon--cart sqs-custom-cart">
          <span class="Cart-inner">
            <svg class="icon icon--cart" viewBox="0 0 31 24">
              <g class="svg-icon cart-icon--odd">
                <circle fill="none" stroke-miterlimit="10" cx="22.5" cy="21.5" r="1" />
                <circle fill="none" stroke-miterlimit="10" cx="9.5" cy="21.5" r="1" />
                <path fill="none" stroke-miterlimit="10" d="M0,1.5h5c0.6,0,1.1,0.4,1.1,1l1.7,13
      c0.1,0.5,0.6,1,1.1,1h15c0.5,0,1.2-0.4,1.4-0.9l3.3-8.1c0.2-0.5-0.1-0.9-0.6-0.9H12" />
              </g>
            </svg>
            <div class="legacy-cart icon-cart-quantity">
              <span class="sqs-cart-quantity">0</span>
            </div>
          </span>
        </a>
      </div>
      <header data-test="header" id="header" class="
      
        
          bright
        
      
      header theme-col--primary
    " data-section-theme="bright" data-controller="Header" data-current-styles="{
&quot;layout&quot;: &quot;navRight&quot;,
&quot;action&quot;: {
&quot;buttonText&quot;: &quot;Get Started&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: false,
&quot;socialOptions&quot;: {
&quot;socialBorderShape&quot;: &quot;none&quot;,
&quot;socialBorderStyle&quot;: &quot;outline&quot;,
&quot;socialBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;sectionTheme&quot;: &quot;&quot;,
&quot;menuOverlayTheme&quot;: &quot;light&quot;,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;text&quot;,
&quot;cartText&quot;: &quot;Cart&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;stroke-1&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: false,
&quot;showCart&quot;: false,
&quot;showAccountLogin&quot;: false,
&quot;headerStyle&quot;: &quot;dynamic&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoLeftNavRight&quot;,
&quot;menuIcon&quot;: &quot;halfLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;doubleLineHamburger&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 2.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
}
},
&quot;dropShadowOptions&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;borderOptions&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;showPromotedElement&quot;: false,
&quot;buttonVariant&quot;: &quot;primary&quot;,
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
}
}" data-section-id="header" data-header-theme="" data-menu-overlay-theme="light" data-header-style="dynamic" data-language-picker="{
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
}" data-first-focusable-element tabindex="-1" style="
      
        
        
      
      
      
      
      
    ">
        <div class="sqs-announcement-bar-dropzone"></div>
        <div class="header-announcement-bar-wrapper">
          <a href="#page" class="header-skip-link sqs-button-element--primary"> Skip to Content </a>
          <style>
            @supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
              .header-blur-background {}
            }
          </style>
          <div class="header-border" data-header-style="dynamic" data-header-usability-enabled="true" data-header-border="false" data-test="header-border" style="






  
    border-width: 0px !important;
  



  



"></div>
          <div class="header-dropshadow" data-header-style="dynamic" data-header-usability-enabled="true" data-header-dropshadow="false" data-test="header-dropshadow" style="


  
"></div>
          <div class='header-inner container--fluid
        
        
        
         header-mobile-layout-logo-left-nav-right
        
        
        
        
        
        
         header-layout-nav-right
        
        
        
        
        
        
        
        
        ' style="






  
    padding: 0;
  



" data-test="header-inner">
            <!-- Background -->
            <div class="header-background theme-bg--primary"></div>
            <div class="header-display-desktop" data-content-field="site-title">
              <!-- Social -->
              <!-- Title and nav wrapper -->
              <div class="header-title-nav-wrapper">
                <!-- Title -->
                <div class="
                      header-title
                      
                    " data-animation-role="header-element">
                  <div class="header-title-text">
                    <a id="site-title" href="https://e-class.fio.unesa.ac.id/%20%20assets" data-animation-role="header-element">Slot Gacor</a>
                  </div>
                </div>
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list"></nav>
                  </div>
                </div>
              </div>
              <!-- Actions -->
              <div class="header-actions header-actions--right">
                <div class="showOnMobile"></div>
                <div class="showOnDesktop"></div>
              </div>
              <style>
                .top-bun,
                .patty,
                .bottom-bun {
                  height: 2px;
                }
              </style>
              <!-- Burger -->
              <div class="header-burger

  menu-overlay-does-not-have-visible-non-navigation-items


  
  no-actions
  
" data-animation-role="header-element">
                <button class="header-burger-btn burger" data-test="header-burger">
                  <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
                  <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
                  <div class="burger-box">
                    <div class="burger-inner header-menu-icon-doubleLineHamburger">
                      <div class="top-bun"></div>
                      <div class="patty"></div>
                      <div class="bottom-bun"></div>
                    </div>
                  </div>
                </button>
              </div>
            </div>
            <div class="header-display-mobile" data-content-field="site-title">
              <!-- Social -->
              <!-- Title and nav wrapper -->
              <div class="header-title-nav-wrapper">
                <!-- Title -->
                <div class="
                      header-title
                      
                    " data-animation-role="header-element">
                  <div class="header-title-text">
                    <a id="site-title" href="https://e-class.fio.unesa.ac.id/%20%20assets" data-animation-role="header-element">Slot Gacor</a>
                  </div>
                </div>
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list"></nav>
                  </div>
                </div>
              </div>
              <!-- Actions -->
              <div class="header-actions header-actions--right">
                <div class="showOnMobile"></div>
                <div class="showOnDesktop"></div>
              </div>
              <style>
                .top-bun,
                .patty,
                .bottom-bun {
                  height: 2px;
                }
              </style>
              <!-- Burger -->
              <div class="header-burger

  menu-overlay-does-not-have-visible-non-navigation-items


  
  no-actions
  
" data-animation-role="header-element">
                <button class="header-burger-btn burger" data-test="header-burger">
                  <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
                  <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
                  <div class="burger-box">
                    <div class="burger-inner header-menu-icon-doubleLineHamburger">
                      <div class="top-bun"></div>
                      <div class="patty"></div>
                      <div class="bottom-bun"></div>
                    </div>
                  </div>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- (Mobile) Menu Navigation -->
        <div class="header-menu header-menu--folder-list
      light
      
      
      
      
      " data-section-theme="light" data-current-styles="{
&quot;layout&quot;: &quot;navRight&quot;,
&quot;action&quot;: {
&quot;buttonText&quot;: &quot;Get Started&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: false,
&quot;socialOptions&quot;: {
&quot;socialBorderShape&quot;: &quot;none&quot;,
&quot;socialBorderStyle&quot;: &quot;outline&quot;,
&quot;socialBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;sectionTheme&quot;: &quot;&quot;,
&quot;menuOverlayTheme&quot;: &quot;light&quot;,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;text&quot;,
&quot;cartText&quot;: &quot;Cart&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;stroke-1&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: false,
&quot;showCart&quot;: false,
&quot;showAccountLogin&quot;: false,
&quot;headerStyle&quot;: &quot;dynamic&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoLeftNavRight&quot;,
&quot;menuIcon&quot;: &quot;halfLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;doubleLineHamburger&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 2.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
}
},
&quot;dropShadowOptions&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;borderOptions&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
}
},
&quot;showPromotedElement&quot;: false,
&quot;buttonVariant&quot;: &quot;primary&quot;,
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
}
}" data-section-id="overlay-nav" data-show-account-login="false" data-test="header-menu">
          <div class="header-menu-bg theme-bg--primary"></div>
          <div class="header-menu-nav">
            <nav class="header-menu-nav-list">
              <div data-folder="root" class="header-menu-nav-folder">
                <div class="header-menu-nav-folder-content">
                  <!-- Menu Navigation -->
                  <div class="header-menu-nav-wrapper"></div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </header>
      <main id="page" class="container" role="main">
        <article class="sections" id="sections" data-page-sections="65fe67b0a115997103602290">
          <section data-test="page-section" data-section-theme="bright" class='page-section 
    
      content-collection
      full-bleed-section
      collection-type-products
    
    background-width--full-bleed
    
      section-height--medium
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    bright' data-section-id="65fe67b0a115997103602298" data-controller="SectionWrapperController" data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--medium&quot;,
&quot;customSectionHeight&quot;: 10,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;customContentWidth&quot;: 50,
&quot;sectionTheme&quot;: &quot;bright&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;
}" data-current-context="{
&quot;video&quot;: {
&quot;playbackSpeed&quot;: 0.5,
&quot;filter&quot;: 1,
&quot;filterStrength&quot;: 0,
&quot;zoom&quot;: 0,
&quot;videoSourceProvider&quot;: &quot;none&quot;
},
&quot;backgroundImageId&quot;: null,
&quot;backgroundMediaEffect&quot;: null,
&quot;divider&quot;: null,
&quot;typeName&quot;: &quot;products&quot;
}" data-animation="none">
            <div class="section-border">
              <div class="section-background"></div>
            </div>
            <div class='content-wrapper' style='
      
      
    '>
              <div class="content">
                <section id="pdp" class="
    products
    collection-content-wrapper
    product-layout-side-by-side
  ">
                  <article class="ProductItem hentry author-mongkey-bussiness post-type-store-item on-sale" data-item-id="6600ffc4a1b5bd408d089641">
                    <nav class="ProductItem-nav">
                      <div class="ProductItem-nav-breadcrumb" data-animation-role="content">
                        <a href="https://e-class.fio.unesa.ac.id/%20%20assets/" class="ProductItem-nav-breadcrumb-link">Slot Gacor Hari Ini</a>
                        <span class="ProductItem-nav-breadcrumb-separator"></span>
                        <a href="https://e-class.fio.unesa.ac.id/%20%20assets/" class="ProductItem-nav-breadcrumb-link"><?php echo $BRANDS ?>※ Slot Gacor Hari Ini Terbaik Mudah Maxwin Terpercaya 2024</a>
                      </div>
                    </nav>
                    <section class="ProductItem-summary" data-controller="ProductGallery">
                      <section aria-label="Gallery" class="ProductItem-gallery" data-product-gallery="container">
                        <div class="ProductItem-gallery-slides" data-animation-role="image" data-product-gallery="slides">
                          <div class="ProductItem-gallery-slides-item" data-slide-index="1" data-image-id=66010034f4a2b3020a0d6baa data-controller="ImageZoom" data-slide-url="d024mvr1mi8hz3hpseh2b5tkrx9pmn" data-product-gallery="slides-item" data-test="pdp-gallery-slide">
                            <img aria-describedby="ProductItem-gallery-slides-item-1-index-66010034f4a2b3020a0d6baa" class="ProductItem-gallery-slides-item-image" data-load="false" data-src="https://images.squarespace-cdn.com/content/v1/65fe65adc8d81c029ba8e92b/1711341621320-SR7P4A2MZ7QFR1X0HXUL/slot-gacor-hari-ini.png" data-image="https://images.squarespace-cdn.com/content/v1/65fe65adc8d81c029ba8e92b/1711341621320-SR7P4A2MZ7QFR1X0HXUL/slot-gacor-hari-ini.png" data-image-dimensions="512x512" data-image-focal-point="0.5,0.5" alt="slot-gacor-hari-ini.png" elementtiming="nbf-products-gallery" />
                            <span id="ProductItem-gallery-slides-item-1-index-66010034f4a2b3020a0d6baa" style="display: none;"> Image 1 of </span>
                            <div class="product-image-zoom-duplicate" aria-hidden="true">
                              <img data-load="false" data-src="https://images.squarespace-cdn.com/content/v1/65fe65adc8d81c029ba8e92b/1711341621320-SR7P4A2MZ7QFR1X0HXUL/slot-gacor-hari-ini.png" data-image="https://images.squarespace-cdn.com/content/v1/65fe65adc8d81c029ba8e92b/1711341621320-SR7P4A2MZ7QFR1X0HXUL/slot-gacor-hari-ini.png" data-image-dimensions="512x512" data-image-focal-point="0.5,0.5" alt="slot-gacor-hari-ini.png" elementtiming="nbf-products-gallery-zoom" />
                            </div>
                          </div>
                          <div class="gallery-lightbox-outer-wrapper" data-use-image-loader="true" data-controller="Lightbox">
                            <div class="gallery-lightbox " data-section-theme="">
                              <div class="gallery-lightbox-background"></div>
                              <div class="gallery-lightbox-header">
                                <button class="gallery-lightbox-close-btn" aria-label="Close" data-close data-test="gallery-lightbox-close">
                                  <div class="gallery-lightbox-close-btn-icon">
                                    <svg viewBox="0 0 40 40">
                                      <path d="M4.3,35.7L35.7,4.3" />
                                      <path d="M4.3,4.3l31.4,31.4" />
                                    </svg>
                                  </div>
                                </button>
                              </div>
                              <div class="gallery-lightbox-wrapper">
                                <div class="gallery-lightbox-list">
                                  <figure class="gallery-lightbox-item" data-slide-url="d024mvr1mi8hz3hpseh2b5tkrx9pmn">
                                    <div class="gallery-lightbox-item-wrapper">
                                      <div class="gallery-lightbox-item-src">
                                        <div class="gallery-lightbox-item-img content-fit">
                                          <img data-src="https://images.squarespace-cdn.com/content/v1/65fe65adc8d81c029ba8e92b/1711341621320-SR7P4A2MZ7QFR1X0HXUL/slot-gacor-hari-ini.png" data-image="https://images.squarespace-cdn.com/content/v1/65fe65adc8d81c029ba8e92b/1711341621320-SR7P4A2MZ7QFR1X0HXUL/slot-gacor-hari-ini.png" data-image-dimensions="512x512" data-image-focal-point="0.5,0.5" alt="slot-gacor-hari-ini.png" data-load="false" elementtiming="nbf-product-lightbox" />
                                        </div>
                                      </div>
                                    </div>
                                  </figure>
                                </div>
                                <div class="gallery-lightbox-controls" data-test="gallery-lightbox-controls">
                                  <div class="gallery-lightbox-control" data-previous data-test="gallery-lightbox-control-previous">
                                    <button class="gallery-lightbox-control-btn" aria-label="Previous Slide">
                                      <div class="gallery-lightbox-control-btn-icon">
                                        <svg class="caret-left-icon--small" viewBox="0 0 9 16">
                                          <polyline fill="none" stroke-miterlimit="10" points="7.3,14.7 2.5,8 7.3,1.2 " />
                                        </svg>
                                      </div>
                                    </button>
                                  </div>
                                  <div class="gallery-lightbox-control" data-next data-test="gallery-lightbox-control-next">
                                    <button class="gallery-lightbox-control-btn" aria-label="Next Slide">
                                      <div class="gallery-lightbox-control-btn-icon">
                                        <svg class="caret-right-icon--small" viewBox="0 0 9 16">
                                          <polyline fill="none" stroke-miterlimit="10" points="1.6,1.2 6.5,7.9 1.6,14.7 " />
                                        </svg>
                                      </div>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="
    product-details
    ProductItem-details
  " data-test="pdp-details">
                        <h1 class="ProductItem-details-title" data-content-field="title" data-test="pdp-title"> <?php echo $BRANDS ?>※ Slot Gacor Hari Ini Terbaik Mudah Maxwin Terpercaya 2024 </h1>
                        <div data-controller="ProductItemVariants,ProductCartButton" class="ProductItem-details-checkout">
                          <div class="ProductItem-product-price" data-animation-role="content">
                            <div class="product-price">
                              <span class="visually-hidden v6-visually-hidden">Sale Price:</span>IDR 10,000.00 <span class="visually-hidden v6-visually-hidden">Original Price:</span>
                              <span class="original-price">IDR 12,000.00</span>
                            </div>
                            <div data-afterpay="true" data-current-context="{
&quot;6600ffc4a1b5bd408d089641&quot;: {
&quot;scarcityEnabled&quot;: false,
&quot;scarcityShownByDefault&quot;: false,
&quot;afterPayAvailable&quot;: false,
&quot;klarnaAvailable&quot;: false,
&quot;shopperLanguage&quot;: &quot;en&quot;,
&quot;afterPayMin&quot;: 0,
&quot;afterPayMax&quot;: 0,
&quot;klarnaMin&quot;: 0,
&quot;klarnaMax&quot;: 0,
&quot;mailingListSignUpEnabled&quot;: false,
&quot;mailingListOptInByDefault&quot;: false
}
}"></div>
                            <div class="pdp-overlay"></div>
                            <div class="product-mark sale">sale</div>
                          </div>
                          <div class="ProductItem-details-excerpt" data-content-field="excerpt">
                            <p class="" style="white-space:pre-wrap;">
                              <a href="#"><?php echo $BRANDS ?></a> membagikan daftar situs slot online paling gacor hari ini dengan sederetan link slot terbaik gampang menang maxwin terpercaya di tahun 2024.
                            </p>
                            <h3 style="white-space:pre-wrap;">Menangkan Maxwin di <?php echo $BRANDS ?>: Situs Slot Gacor Hari Ini Terpercaya 2024!</h3>
                            <p class="" style="white-space:pre-wrap;">Daftar situs <a href="#">slot gacor hari ini</a> dengan RTP tinggi dan peluang maxwin terbesar di tahun 2024. Temukan link slot terbaik dan gampang menang dari berbagai provider terpercaya, seperti Pragmatic Play, PG Soft, Habanero, dan lainnya. </p>
                          </div>
                          <div class="product-quantity-input" data-item-id="6600ffc4a1b5bd408d089641" data-animation-role="content">
                            <div class="quantity-label">Quantity:</div>
                            <input aria-label="Quantity" size="4" max="9999" min="1" value="1" type="number" step="1"></input>
                          </div>
                          <div class="sqs-add-to-cart-button-wrapper" data-animation-role="button">
                            <div class="sqs-add-to-cart-button sqs-suppress-edit-mode sqs-editable-button sqs-button-element--primary " role="button" tabindex="0" data-dynamic-strings data-collection-id="65fe67b0a11599710360225d" data-item-id="6600ffc4a1b5bd408d089641" data-product-type="1" data-use-custom-label="true" data-original-label="DAFTAR SLOT GACOR HARI INI">
                              <div class="sqs-add-to-cart-button-inner"><a href="https://www.asia-sigma.org/amp/5/">DAFTAR SLOT GACOR HARI INI</a></div>
                            </div>
                          </div>
                        </div>
                      </section>
                    </section>
                  </article>
                </section>
              </div>
            </div>
          </section>
        </article>
      </main>
      <script type="text/javascript">
        const firstSection = document.querySelector('.page-section');
        const header = document.querySelector('.header');
        const mobileOverlayNav = document.querySelector('.header-menu');
        const sectionBackground = firstSection ? firstSection.querySelector('.section-background') : null;
        const headerHeight = header ? header.getBoundingClientRect().height : 0;
        const firstSectionHasBackground = firstSection ? firstSection.className.indexOf('has-background') >= 0 : false;
        const isFirstSectionInset = firstSection ? firstSection.className.indexOf('background-width--inset') >= 0 : false;
        const isLayoutEngineSection = firstSection ? firstSection.className.indexOf('layout-engine-section') >= 0 : false;
        if (firstSection) {
          firstSection.style.paddingTop = headerHeight + 'px';
        }
        if (sectionBackground && isLayoutEngineSection) {
          if (isFirstSectionInset) {
            sectionBackground.style.top = headerHeight + 'px';
          } else {
            sectionBackground.style.top = '';
          }
        }
        //# sourceURL=headerPositioning.js
      </script>
      <footer class="sections" id="footer-sections" data-footer-sections>
        <section data-test="page-section" data-section-theme="bright" class='page-section 
    
      full-bleed-section
      layout-engine-section
    
    background-width--full-bleed
    
      
        section-height--custom
      
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    bright' data-section-id="65fe6618b5afc86e84ebffce" data-controller="SectionWrapperController" data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--custom&quot;,
&quot;customSectionHeight&quot;: 10,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;customContentWidth&quot;: 50,
&quot;sectionTheme&quot;: &quot;bright&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;
}" data-current-context="{
&quot;video&quot;: {
&quot;playbackSpeed&quot;: 0.5,
&quot;filter&quot;: 1,
&quot;filterStrength&quot;: 0,
&quot;zoom&quot;: 0,
&quot;videoSourceProvider&quot;: &quot;none&quot;
},
&quot;backgroundImageId&quot;: null,
&quot;backgroundMediaEffect&quot;: {
&quot;type&quot;: &quot;none&quot;
},
&quot;divider&quot;: {
&quot;enabled&quot;: false
},
&quot;typeName&quot;: &quot;products&quot;
}" data-animation="none" data-fluid-engine-section style="min-height: 10vh;">
          <div class="section-border">
            <div class="section-background"></div>
          </div>
          <div class='content-wrapper' style='
      
        
          
          
          padding-top: calc(10vmax / 10); padding-bottom: calc(10vmax / 10);
        
      
    '>
            <div class="content">
              <div data-fluid-engine="true">
                <style>
                  .fe-65fe6618b5afc86e84ebffcd {
                    --grid-gutter: calc(var(--sqs-mobile-site-gutter, 6vw) - 11.0px);
                    --cell-max-width: calc((var(--sqs-site-max-width, 1500px) - (11.0px * (8 - 1))) / 8);
                    display: grid;
                    position: relative;
                    grid-area: 1/1/-1/-1;
                    grid-template-rows: repeat(6, minmax(24px, auto));
                    grid-template-columns:
                      minmax(var(--grid-gutter), 1fr) repeat(8, minmax(0, var(--cell-max-width))) minmax(var(--grid-gutter), 1fr);
                    row-gap: 11.0px;
                    column-gap: 11.0px;
                  }

                  @media (min-width: 768px) {
                    .background-width--inset .fe-65fe6618b5afc86e84ebffcd {
                      --inset-padding: calc(var(--sqs-site-gutter) * 2);
                    }

                    .fe-65fe6618b5afc86e84ebffcd {
                      --grid-gutter: calc(var(--sqs-site-gutter, 4vw) - 11.0px);
                      --cell-max-width: calc((var(--sqs-site-max-width, 1500px) - (11.0px * (24 - 1))) / 24);
                      --inset-padding: 0vw;
                      --row-height-scaling-factor: 0.0215;
                      --container-width: min(var(--sqs-site-max-width, 1500px), calc(100vw - var(--sqs-site-gutter, 4vw) * 2 - var(--inset-padding)));
                      grid-template-rows: repeat(1, minmax(calc(var(--container-width) * var(--row-height-scaling-factor)), auto));
                      grid-template-columns:
                        minmax(var(--grid-gutter), 1fr) repeat(24, minmax(0, var(--cell-max-width))) minmax(var(--grid-gutter), 1fr);
                    }
                  }

                  .fe-block-35766e0235856cfb33d1 {
                    grid-area: 2/2/4/10;
                    z-index: 0;

                    @media (max-width: 767px) {}
                  }

                  .fe-block-35766e0235856cfb33d1 .sqs-block {
                    justify-content: center;
                  }

                  .fe-block-35766e0235856cfb33d1 .sqs-block-alignment-wrapper {
                    align-items: center;
                  }

                  @media (min-width: 768px) {
                    .fe-block-35766e0235856cfb33d1 {
                      grid-area: 1/2/2/18;
                      z-index: 0;
                    }

                    .fe-block-35766e0235856cfb33d1 .sqs-block {
                      justify-content: center;
                    }

                    .fe-block-35766e0235856cfb33d1 .sqs-block-alignment-wrapper {
                      align-items: center;
                    }
                  }

                  .fe-block-d291240cc7992bb4afa0 {
                    grid-area: 4/2/6/10;
                    z-index: 1;

                    @media (max-width: 767px) {}
                  }

                  .fe-block-d291240cc7992bb4afa0 .sqs-block {
                    justify-content: flex-start;
                  }

                  .fe-block-d291240cc7992bb4afa0 .sqs-block-alignment-wrapper {
                    align-items: flex-start;
                  }

                  @media (min-width: 768px) {
                    .fe-block-d291240cc7992bb4afa0 {
                      grid-area: 1/19/2/26;
                      z-index: 1;
                    }

                    .fe-block-d291240cc7992bb4afa0 .sqs-block {
                      justify-content: flex-start;
                    }

                    .fe-block-d291240cc7992bb4afa0 .sqs-block-alignment-wrapper {
                      align-items: flex-start;
                    }
                  }
                </style>
                <div class="fluid-engine fe-65fe6618b5afc86e84ebffcd">
                  <div class="fe-block fe-block-35766e0235856cfb33d1">
                    <div class="sqs-block html-block sqs-block-html" data-blend-mode="NORMAL" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-35766e0235856cfb33d1">
                      <div class="sqs-block-content">
                        <div class="sqs-html-content">
                          <h4 style="white-space:pre-wrap;">
                            <a href="#" target="_blank">Slot Gacor Hari Ini</a>
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fe-block fe-block-d291240cc7992bb4afa0">
                    <div class="sqs-block html-block sqs-block-html" data-blend-mode="NORMAL" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-d291240cc7992bb4afa0">
                      <div class="sqs-block-content">
                        <div class="sqs-html-content">
                          <h4 style="white-space:pre-wrap;">Oleh <a href="https://jendralsmaya.org/" target="_blank">Jendralmaya</a>
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </footer>
    </div>
    <script defer="defer" src="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/site-bundle.be9ca9a740ff301375d62cddf8dad16e.js" type="text/javascript"></script>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none" data-usage="social-icons-svg">
      <symbol id="instagram-unauth-icon" viewBox="0 0 64 64">
        <path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z" />
      </symbol>
      <symbol id="instagram-unauth-mask" viewBox="0 0 64 64">
        <path d="M43.693,23.153c-0.272-0.7-0.597-1.2-1.122-1.725c-0.525-0.525-1.025-0.85-1.725-1.122c-0.529-0.205-1.323-0.45-2.785-0.517c-1.582-0.072-2.056-0.087-6.061-0.087s-4.48,0.015-6.061,0.087c-1.462,0.067-2.257,0.311-2.785,0.517c-0.7,0.272-1.2,0.597-1.725,1.122c-0.525,0.525-0.85,1.025-1.122,1.725c-0.205,0.529-0.45,1.323-0.516,2.785c-0.072,1.582-0.087,2.056-0.087,6.061s0.015,4.48,0.087,6.061c0.067,1.462,0.311,2.257,0.516,2.785c0.272,0.7,0.597,1.2,1.122,1.725s1.025,0.85,1.725,1.122c0.529,0.205,1.323,0.45,2.785,0.516c1.581,0.072,2.056,0.087,6.061,0.087s4.48-0.015,6.061-0.087c1.462-0.067,2.257-0.311,2.785-0.516c0.7-0.272,1.2-0.597,1.725-1.122s0.85-1.025,1.122-1.725c0.205-0.529,0.45-1.323,0.516-2.785c0.072-1.582,0.087-2.056,0.087-6.061s-0.015-4.48-0.087-6.061C44.143,24.476,43.899,23.682,43.693,23.153z M32,39.703c-4.254,0-7.703-3.449-7.703-7.703s3.449-7.703,7.703-7.703s7.703,3.449,7.703,7.703S36.254,39.703,32,39.703z M40.007,25.793c-0.994,0-1.8-0.806-1.8-1.8c0-0.994,0.806-1.8,1.8-1.8c0.994,0,1.8,0.806,1.8,1.8C41.807,24.987,41.001,25.793,40.007,25.793z M0,0v64h64V0H0z M46.91,38.184c-0.073,1.597-0.326,2.687-0.697,3.641c-0.383,0.986-0.896,1.823-1.73,2.657c-0.834,0.834-1.67,1.347-2.657,1.73c-0.954,0.371-2.044,0.624-3.641,0.697C36.585,46.983,36.074,47,32,47s-4.585-0.017-6.184-0.09c-1.597-0.073-2.687-0.326-3.641-0.697c-0.986-0.383-1.823-0.896-2.657-1.73c-0.834-0.834-1.347-1.67-1.73-2.657c-0.371-0.954-0.624-2.044-0.697-3.641C17.017,36.585,17,36.074,17,32c0-4.074,0.017-4.585,0.09-6.185c0.073-1.597,0.326-2.687,0.697-3.641c0.383-0.986,0.896-1.823,1.73-2.657c0.834-0.834,1.67-1.347,2.657-1.73c0.954-0.371,2.045-0.624,3.641-0.697C27.415,17.017,27.926,17,32,17s4.585,0.017,6.184,0.09c1.597,0.073,2.687,0.326,3.641,0.697c0.986,0.383,1.823,0.896,2.657,1.73c0.834,0.834,1.347,1.67,1.73,2.657c0.371,0.954,0.624,2.044,0.697,3.641C46.983,27.415,47,27.926,47,32C47,36.074,46.983,36.585,46.91,38.184z M32,27c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S34.761,27,32,27z" />
      </symbol>
    </svg>
  </body>
</html>

<?php
/**
 * <head> — Jon's Shafts & Stuff, LLC
 * Page One Insights — Phase 2
 *
 * Required page variables (set before including):
 *   $pageTitle       — full <title> tag content
 *   $pageDescription — meta description (140-160 chars)
 *   $canonicalUrl    — canonical URL with trailing slash
 *   $currentPage     — active nav identifier (home, services, about, contact, legal, etc.)
 *   $heroImagePreload — (optional) URL to preload hero image
 *   $noindex          — (optional) true to add noindex
 *   $useSwiper        — (optional) true to load Swiper CSS
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

// Defaults
$pageTitle       = $pageTitle       ?? $siteName . ' | ' . ucwords($primaryKeyword);
$pageDescription = $pageDescription ?? $siteName . ' provides expert auto repair services in ' . $address['city'] . ', ' . $address['state'] . '. Engine repair, transmission service, brakes, oil changes, and more. Call today for a free estimate.';
$canonicalUrl    = $canonicalUrl    ?? $siteUrl . '/';
$cssVersion      = $cssVersion      ?? '1';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary SEO -->
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <?php if (!empty($noindex)): ?>
  <meta name="robots" content="noindex,nofollow">
  <?php endif; ?>

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($logoUrl); ?>">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($siteName); ?>">
  <meta property="og:locale" content="en_US">

  <!-- Favicon -->
  <link rel="icon" href="/assets/images/favicon.svg" type="image/svg+xml">
  <link rel="icon" href="/assets/images/favicon.png" type="image/png" sizes="32x32">

  <!-- Preconnect: Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- DNS Prefetch -->
  <link rel="dns-prefetch" href="https://db.pageone.cloud">

  <!-- Google Fonts: Bitter (heading 700-900) + Source Sans 3 (body 400-700) + Caveat (accent 400-700) -->
  <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,400;0,600;0,700;0,800;0,900;1,700;1,800&family=Source+Sans+3:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Preload heading font -->
  <link rel="preload" href="https://fonts.gstatic.com/s/bitter/v36/raxhHiqOu8IVPmnRc6SY1KXhnF_Y8fbfCL_EXFh2reU.woff2" as="font" type="font/woff2" crossorigin>

  <?php if (!empty($heroImagePreload)): ?>
  <!-- Preload hero image -->
  <link rel="preload" href="<?php echo htmlspecialchars($heroImagePreload); ?>" as="image" fetchpriority="high">
  <?php endif; ?>

  <?php if (!empty($useSwiper)): ?>
  <!-- Swiper CSS (conditional) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <?php endif; ?>

  <!-- Framework CSS -->
  <link rel="stylesheet" href="/assets/css/framework.css?v=<?php echo $cssVersion; ?>">

  <!-- Google Analytics (placeholder) -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($googleAnalyticsId); ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo htmlspecialchars($googleAnalyticsId); ?>');
  </script> -->

  <!-- JSON-LD: LocalBusiness Schema -->
  <?php if (empty($currentPage) || $currentPage === 'home'): ?>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "AutoRepair",
    "@id": "<?php echo $siteUrl; ?>/#organization",
    "name": "<?php echo htmlspecialchars($siteName); ?>",
    "url": "<?php echo $siteUrl; ?>/",
    "telephone": "<?php echo htmlspecialchars($phone); ?>",
    "email": "<?php echo htmlspecialchars($email); ?>",
    "description": "<?php echo htmlspecialchars($siteName); ?> is a trusted auto repair shop in <?php echo $address['city']; ?>, <?php echo $address['state']; ?> with <?php echo $yearsInBusiness; ?> years of experience. We specialize in engine repair, transmission service, driveshaft repair, brakes, oil changes, and more.",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?php echo htmlspecialchars($address['street']); ?>",
      "addressLocality": "<?php echo htmlspecialchars($address['city']); ?>",
      "addressRegion": "<?php echo htmlspecialchars($address['state']); ?>",
      "postalCode": "<?php echo htmlspecialchars($address['zip']); ?>",
      "addressCountry": "US"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 42.9849,
      "longitude": -71.4441
    },
    "image": "<?php echo htmlspecialchars($logoUrl); ?>",
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
        "opens": "08:00",
        "closes": "17:00"
      }
    ],
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.8",
      "reviewCount": "120",
      "bestRating": "5"
    },
    "areaServed": [
      {
        "@type": "City",
        "name": "Manchester",
        "containedInPlace": {
          "@type": "State",
          "name": "New Hampshire"
        }
      }
    ],
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Auto Repair Services",
      "itemListElement": [
        <?php
        $schemaServices = [];
        foreach ($services as $s) {
            $schemaServices[] = '{
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "' . htmlspecialchars($s['name']) . '",
            "description": "' . htmlspecialchars($s['description']) . '"
          }
        }';
        }
        echo implode(",\n        ", $schemaServices);
        ?>
      ]
    },
    "sameAs": [<?php
      $sameAs = [];
      foreach ($socialLinks as $platform => $url) {
          $sameAs[] = '"' . htmlspecialchars($url) . '"';
      }
      echo implode(', ', $sameAs);
    ?>]
  }
  </script>
  <?php endif; ?>
</head>
<body>

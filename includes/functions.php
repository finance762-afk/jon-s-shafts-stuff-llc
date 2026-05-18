<?php
/**
 * Helper Functions — Jon's Shafts & Stuff, LLC
 * Page One Insights — Phase 2
 */

/**
 * Check if a page is the current active page.
 */
function isActivePage($page) {
    global $currentPage;
    return ($currentPage ?? '') === $page;
}

/**
 * Format a phone number for display or tel: link.
 *
 * @param string $phone  Raw phone number
 * @param string $format 'display' (default) or 'tel'
 * @return string
 */
function formatPhone($phone, $format = 'display') {
    $digits = preg_replace('/\D/', '', $phone);

    if ($format === 'tel') {
        return '+1' . $digits;
    }

    if (strlen($digits) === 10) {
        return '(' . substr($digits, 0, 3) . ') ' . substr($digits, 3, 3) . '-' . substr($digits, 6);
    }
    if (strlen($digits) === 11 && $digits[0] === '1') {
        return '(' . substr($digits, 1, 3) . ') ' . substr($digits, 4, 3) . '-' . substr($digits, 7);
    }

    return $phone;
}

/**
 * Generate a URL-friendly slug from a service name.
 */
function getServiceSlug($name) {
    $slug = strtolower(trim($name));
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
    $slug = preg_replace('/[\s-]+/', '-', $slug);
    return trim($slug, '-');
}

/**
 * Generate a URL-friendly slug from a city name.
 */
function getAreaSlug($city) {
    return getServiceSlug($city);
}

/**
 * Generate JSON-LD Service schema for a service page.
 *
 * @param array $service  Service data from config.php $services array
 * @return string         JSON-LD script tag
 */
function generateServiceSchema($service) {
    global $siteUrl, $siteName, $address, $phone;

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => $service['name'],
        'description' => $service['description'],
        'provider' => [
            '@type' => 'AutoRepair',
            '@id' => $siteUrl . '/#organization',
            'name' => $siteName,
        ],
        'areaServed' => [
            '@type' => 'City',
            'name' => $address['city'],
            'containedInPlace' => [
                '@type' => 'State',
                'name' => $address['state'],
            ],
        ],
    ];

    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
}

/**
 * Generate JSON-LD FAQPage schema from an array of FAQ items.
 *
 * @param array $faqs  Array of ['question' => '...', 'answer' => '...']
 * @return string      JSON-LD script tag
 */
function generateFAQSchema($faqs) {
    $items = [];
    foreach ($faqs as $faq) {
        $items[] = [
            '@type' => 'Question',
            'name' => $faq['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['answer'],
            ],
        ];
    }

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $items,
    ];

    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
}

/**
 * Generate BreadcrumbList JSON-LD schema.
 *
 * @param array $items  Array of ['name' => '...', 'url' => '...']
 * @return string       JSON-LD script tag
 */
function generateBreadcrumbSchema($items) {
    global $siteUrl;

    $listItems = [];
    $position = 1;

    // Always start with Home
    $listItems[] = [
        '@type' => 'ListItem',
        'position' => $position++,
        'name' => 'Home',
        'item' => $siteUrl . '/',
    ];

    foreach ($items as $item) {
        $entry = [
            '@type' => 'ListItem',
            'position' => $position++,
            'name' => $item['name'],
        ];
        if (!empty($item['url'])) {
            $entry['item'] = $item['url'];
        }
        $listItems[] = $entry;
    }

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $listItems,
    ];

    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
}

/**
 * Generate meta tags for a page.
 *
 * @param string $title       Page title
 * @param string $description Meta description
 * @param string $canonical   Canonical URL
 * @return string             HTML meta tags
 */
function generateMetaTags($title, $description, $canonical) {
    global $siteUrl, $siteName, $logoUrl;

    $html = '';
    $html .= '<title>' . htmlspecialchars($title) . '</title>' . "\n";
    $html .= '<meta name="description" content="' . htmlspecialchars($description) . '">' . "\n";
    $html .= '<link rel="canonical" href="' . htmlspecialchars($canonical) . '">' . "\n";
    $html .= '<meta property="og:type" content="website">' . "\n";
    $html .= '<meta property="og:title" content="' . htmlspecialchars($title) . '">' . "\n";
    $html .= '<meta property="og:description" content="' . htmlspecialchars($description) . '">' . "\n";
    $html .= '<meta property="og:url" content="' . htmlspecialchars($canonical) . '">' . "\n";
    $html .= '<meta property="og:image" content="' . htmlspecialchars($logoUrl) . '">' . "\n";
    $html .= '<meta property="og:site_name" content="' . htmlspecialchars($siteName) . '">' . "\n";

    return $html;
}

/**
 * Find a service by name from the global $services array.
 *
 * @param string $name  Service name to find
 * @return array|null   Service data or null if not found
 */
function findService($name) {
    global $services;
    foreach ($services as $s) {
        if ($s['name'] === $name) return $s;
    }
    return null;
}

/**
 * Get services belonging to a specific group page slug.
 *
 * @param string $slug  The service page slug
 * @return array        Array of service data
 */
function getServicesByPage($slug) {
    global $services;
    $result = [];
    foreach ($services as $s) {
        if ($s['slug'] === $slug) {
            $result[] = $s;
        }
    }
    return $result;
}

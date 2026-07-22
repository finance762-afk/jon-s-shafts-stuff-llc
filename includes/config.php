<?php
/**
 * Site Configuration — Jon's Shafts & Stuff, LLC
 * Auto-generated from build-plan.json — Phase 1 Scaffold
 */

// ─── Identity ────────────────────────────────────────────────
$slug           = 'jon-s-shafts-stuff-llc';
$siteName       = "Jon's Shafts & Stuff, LLC";
$tagline        = 'Spin Stronger. Run Longer.';
$industry       = 'auto_repair';
$yearEstablished = 1993;
$yearsInBusiness = 33;

// ─── Contact ─────────────────────────────────────────────────
$phone          = '';
$phoneSecondary = '';
$email          = '';

// ─── Address ─────────────────────────────────────────────────
$address = [
    'street' => '518 Silver St',
    'city'   => 'Manchester',
    'state'  => 'NH',
    'zip'    => '03103',
];

// ─── Legal / Entity ─────────────────────────────────────────
$entityType       = 'Limited Liability Company';
$stateOfFormation = 'New Hampshire';
$contactEmail     = $email ?: 'info@jon-s-shafts-stuff-llc.pageone.cloud';
$contactPhone     = $phone;
$businessAddress  = $address['street'] . ', ' . $address['city'] . ', ' . $address['state'] . ' ' . $address['zip'];

// ─── Domain & URLs ───────────────────────────────────────────
$domain  = 'jon-s-shafts-stuff-llc.pageone.cloud';
$siteUrl = 'https://' . $domain;

// ─── SEO ─────────────────────────────────────────────────────
$primaryKeyword    = 'auto repair manchester nh';
$secondaryKeywords = [
    'transmission repair manchester nh',
    'engine repair manchester nh',
    'car brake repair manchester nh',
    'oil change manchester nh',
    'auto mechanic manchester nh',
    'ac repair manchester nh',
    'suspension repair manchester nh',
    'driveshaft repair manchester nh',
    'battery replacement manchester nh',
    'transmission leak inspection manchester nh',
    'exhaust repair manchester nh',
    'routine car maintenance manchester nh',
];

// ─── Colors (from build plan) ────────────────────────────────
$colors = [
    'primary'   => '#4A6A8C',
    'secondary' => '#6B8BAB',
    'accent'    => '#D49B2A',
];

// ─── Services ────────────────────────────────────────────────
$services = [
    [
        'name'        => 'Engine Repair',
        'slug'        => 'auto-repair-services',
        'group'       => 'Auto Repair Services',
        'description' => 'Professional engine repair services for all vehicle makes and models in Manchester, NH. We diagnose and fix engine problems from minor issues to complete overhauls.',
        'keywords'    => ['engine repair Manchester NH', 'auto engine repair', 'car engine service Manchester', 'engine diagnostics'],
    ],
    [
        'name'        => 'Transmission Repair',
        'slug'        => 'auto-repair-services',
        'group'       => 'Auto Repair Services',
        'description' => 'Expert transmission repair and maintenance for automatic and manual transmissions in Manchester. Our technicians handle everything from fluid changes to complete transmission rebuilds.',
        'keywords'    => ['transmission repair Manchester NH', 'auto transmission service', 'transmission rebuild Manchester', 'transmission specialist'],
    ],
    [
        'name'        => 'Routine Automotive Maintenance',
        'slug'        => 'auto-repair-services',
        'group'       => 'Auto Repair Services',
        'description' => 'Keep your vehicle running smoothly with our comprehensive maintenance services in Manchester, NH. We offer regular inspections, fluid checks, and preventative care.',
        'keywords'    => ['car maintenance Manchester NH', 'automotive maintenance services', 'vehicle maintenance Manchester', 'preventative maintenance'],
    ],
    [
        'name'        => 'Transmission Leak Inspection',
        'slug'        => 'transmission-leak-inspection',
        'group'       => null,
        'description' => 'Expert transmission leak diagnosis and repair in Manchester, NH. We quickly identify the source of leaks and provide reliable solutions to prevent costly damage.',
        'keywords'    => ['transmission leak inspection Manchester', 'transmission leak repair', 'fluid leak detection', 'Manchester transmission service'],
    ],
    [
        'name'        => 'Brake Repair & Service',
        'slug'        => 'seasonal-services',
        'group'       => 'Seasonal Services',
        'description' => 'Quality brake repair and replacement services in Manchester, NH. From brake pad replacements to complete system repairs, we ensure your safety on the road.',
        'keywords'    => ['brake repair Manchester NH', 'brake service Manchester', 'brake replacement', 'brake pad service'],
    ],
    [
        'name'        => 'Oil Change Service',
        'slug'        => 'seasonal-services',
        'group'       => 'Seasonal Services',
        'description' => 'Professional oil change service in Manchester, NH to keep your engine running efficiently. We use quality oils and filters for all vehicle types.',
        'keywords'    => ['oil change Manchester NH', 'oil change service', 'synthetic oil change', 'quick oil change Manchester'],
    ],
    [
        'name'        => 'Suspension Repair',
        'slug'        => 'suspension-repair',
        'group'       => null,
        'description' => 'Complete suspension repair services for smoother rides and better handling in Manchester, NH. We repair shocks, struts, springs, and alignment issues.',
        'keywords'    => ['suspension repair Manchester NH', 'suspension service Manchester', 'shock and strut replacement', 'wheel alignment'],
    ],
    [
        'name'        => 'AC Repair & Service',
        'slug'        => 'seasonal-services',
        'group'       => 'Seasonal Services',
        'description' => 'Professional air conditioning repair and service in Manchester, NH. We diagnose and fix AC problems to keep you cool during summer driving.',
        'keywords'    => ['AC repair Manchester NH', 'car air conditioning service', 'AC recharge Manchester', 'auto AC repair'],
    ],
    [
        'name'        => 'Battery Replacement',
        'slug'        => 'battery-replacement',
        'group'       => null,
        'description' => 'Fast battery replacement and testing services in Manchester, NH. We carry quality batteries and offer professional installation for all vehicle types.',
        'keywords'    => ['battery replacement Manchester NH', 'car battery service', 'battery testing Manchester', 'auto battery replacement'],
    ],
    [
        'name'        => 'Exhaust System Repair',
        'slug'        => 'exhaust-system-repair',
        'group'       => null,
        'description' => 'Quality exhaust system repair and replacement in Manchester, NH. We service mufflers, catalytic converters, and complete exhaust systems.',
        'keywords'    => ['exhaust repair Manchester NH', 'muffler repair Manchester', 'exhaust system service', 'catalytic converter repair'],
    ],
    [
        'name'        => 'Driveshaft Repair & Replacement',
        'slug'        => 'driveshaft-repair-replacement',
        'group'       => null,
        'description' => 'Expert driveshaft repair and replacement services in Manchester, NH. We diagnose vibrations and drivetrain issues with precision.',
        'keywords'    => ['driveshaft repair Manchester NH', 'driveshaft replacement', 'drivetrain service Manchester', 'driveshaft specialist'],
    ],
];

// ─── Service Page Structure (grouped + solo) ─────────────────
$servicePages = [
    [
        'slug'     => 'auto-repair-services',
        'title'    => 'Auto Repair Services in Manchester, NH',
        'type'     => 'service_group',
        'services' => ['Engine Repair', 'Transmission Repair', 'Routine Automotive Maintenance'],
    ],
    [
        'slug'     => 'seasonal-services',
        'title'    => 'Seasonal Services in Manchester, NH',
        'type'     => 'service_group',
        'services' => ['Brake Repair & Service', 'Oil Change Service', 'AC Repair & Service'],
    ],
    [
        'slug'     => 'transmission-leak-inspection',
        'title'    => 'Transmission Leak Inspection in Manchester, NH',
        'type'     => 'service',
        'services' => ['Transmission Leak Inspection'],
    ],
    [
        'slug'     => 'suspension-repair',
        'title'    => 'Suspension Repair in Manchester, NH',
        'type'     => 'service',
        'services' => ['Suspension Repair'],
    ],
    [
        'slug'     => 'battery-replacement',
        'title'    => 'Battery Replacement in Manchester, NH',
        'type'     => 'service',
        'services' => ['Battery Replacement'],
    ],
    [
        'slug'     => 'exhaust-system-repair',
        'title'    => 'Exhaust System Repair in Manchester, NH',
        'type'     => 'service',
        'services' => ['Exhaust System Repair'],
    ],
    [
        'slug'     => 'driveshaft-repair-replacement',
        'title'    => 'Driveshaft Repair & Replacement in Manchester, NH',
        'type'     => 'service',
        'services' => ['Driveshaft Repair & Replacement'],
    ],
];

// ─── Service Areas ───────────────────────────────────────────
$serviceAreas = [
    [
        'city'    => 'Manchester',
        'state'   => 'NH',
        'zip'     => '03103',
        'primary' => true,
    ],
];

// ─── Social Links ────────────────────────────────────────────
$socialLinks = [];

// ─── Form ────────────────────────────────────────────────────
$formAction = 'https://design.pageone.cloud/api/leads/jon-s-shafts-stuff-llc';

// ─── Analytics ───────────────────────────────────────────────
$googleAnalyticsId = 'G-XXXXXXXXXX';

// ─── Assets ──────────────────────────────────────────────────
$logoUrl = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/jon-s-shafts-stuff-llc/logo/1779135437767-kxlo46-Logo.png';

// ─── CSS Version (increment on every styles.css change) ──────
$cssVersion = '1';
$leadsFormSecret = 'bac7714a8f41505ab12d75311ccbb11a6374e38b1a010d69111c84a652cfa0f3'; // spam-shield HMAC (matches leads fn LEADS_FORM_SECRET)

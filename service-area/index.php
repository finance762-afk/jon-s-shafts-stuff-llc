<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ────────────────────────────────────────────────
$pageTitle       = "Auto Repair in Manchester, NH & Surrounding Communities | $siteName";
$pageDescription = "$siteName serves Manchester, NH and nearby communities including Bedford, Hooksett, Goffstown, Londonderry, and Merrimack. $yearsInBusiness years of engine, transmission, driveshaft, and brake repair from 518 Silver St.";
$canonicalUrl    = $siteUrl . '/service-area/';
$currentPage     = 'service-area';
$heroImagePreload = 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=1920&q=80';
$cssVersion      = '2';

// ─── Schema ────────────────────────────────────────────────────
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Service Area', 'url' => ''],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $breadcrumbSchema; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══════════════════════════════════════════════════════════
     SERVICE AREA — Jon's Shafts & Stuff, LLC
     Phase 6 | Standard Tier | Page One Insights
     ═══════════════════════════════════════════════════════════ -->

<style>
/* ═══ Service Area Page — Specific Styles ═══ */

/* Hero */
.hero--area {
  min-height: 55vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background-image: url('https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=1920&q=80');
  background-size: cover;
  background-position: center 40%;
  position: relative;
  overflow: hidden;
  padding: calc(var(--nav-height) + var(--space-12)) var(--space-4) var(--space-12);
}
.hero--area::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(160deg, rgba(74,106,140,0.93) 0%, rgba(54,81,107,0.87) 55%, rgba(212,155,42,0.35) 100%);
  z-index: 1;
}
.hero--area::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.4;
  pointer-events: none;
  z-index: 1;
}
.hero--area .container {
  position: relative;
  z-index: 2;
}
.hero--area h1 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.hero--area p {
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-lg);
  max-width: 640px;
  margin: 0 auto;
  line-height: 1.7;
}
.hero-breadcrumb--area {
  display: flex;
  justify-content: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.6);
  margin-bottom: var(--space-6);
}
.hero-breadcrumb--area a {
  color: rgba(255,255,255,0.7);
  transition: color var(--transition-fast);
}
.hero-breadcrumb--area a:hover { color: var(--color-accent); }

/* Answer block intro */
.area-intro {
  background: var(--color-white);
}
.area-intro-grid {
  display: grid;
  grid-template-columns: 1.2fr 0.8fr;
  gap: var(--space-12);
  align-items: center;
}
.area-intro-text h2 {
  margin-bottom: var(--space-6);
  text-wrap: balance;
}
.area-intro-text p {
  color: var(--color-gray);
  line-height: 1.75;
  margin-bottom: var(--space-4);
}
.area-intro-text p:last-child { margin-bottom: 0; }
.area-intro-image {
  position: relative;
}
.area-intro-image img {
  width: 100%;
  height: 420px;
  object-fit: cover;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
}
.area-intro-image .accent-corner {
  position: absolute;
  bottom: -12px;
  right: -12px;
  width: 100px;
  height: 100px;
  border: 4px solid var(--color-accent);
  border-radius: var(--radius-lg);
  z-index: -1;
}

/* Community cards */
.communities-section {
  background: var(--color-light);
  position: relative;
}
.communities-section::before {
  content: '';
  position: absolute;
  top: -1px;
  left: 0;
  right: 0;
  height: 60px;
  background: var(--color-white);
  clip-path: polygon(0 0, 100% 0, 50% 100%);
  z-index: 1;
}
.communities-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  position: relative;
  z-index: 2;
}
.community-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
  overflow: hidden;
}
.community-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.community-card::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 3px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-primary));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform var(--transition-base);
}
.community-card:hover::after {
  transform: scaleX(1);
}
.community-icon {
  width: 52px;
  height: 52px;
  border-radius: var(--radius-full);
  background: rgba(212,155,42,0.12);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-5);
}
.community-icon i,
.community-icon svg {
  width: 24px;
  height: 24px;
  color: var(--color-accent);
}
.community-card h3 {
  font-size: var(--fs-h4);
  margin-bottom: var(--space-3);
  color: var(--color-primary);
}
.community-card p {
  color: var(--color-gray);
  font-size: var(--font-size-sm);
  line-height: 1.65;
  margin: 0;
}
.community-distance {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.08em;
  color: var(--color-accent);
  background: rgba(212,155,42,0.1);
  padding: var(--space-1) var(--space-3);
  border-radius: var(--radius-full);
  margin-bottom: var(--space-3);
}

/* Map placeholder */
.map-section {
  background: var(--color-white);
}
.map-wrapper {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  aspect-ratio: 16 / 7;
  background: var(--color-light);
  position: relative;
}
.map-wrapper iframe {
  width: 100%;
  height: 100%;
  border: 0;
  display: block;
}
.map-overlay-text {
  position: absolute;
  bottom: var(--space-6);
  left: var(--space-6);
  background: rgba(74,106,140,0.92);
  backdrop-filter: blur(8px);
  color: var(--color-white);
  padding: var(--space-4) var(--space-6);
  border-radius: var(--radius-lg);
  font-size: var(--font-size-sm);
  max-width: 340px;
  line-height: 1.55;
}
.map-overlay-text strong {
  display: block;
  margin-bottom: var(--space-2);
  font-size: var(--font-size-base);
}

/* Stats strip */
.stats-strip {
  background: var(--color-primary);
  color: var(--color-white);
  padding: var(--space-10) 0;
}
.stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  text-align: center;
}
.stat-item {
  padding: var(--space-4);
}
.stat-number {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-accent);
  display: block;
  line-height: 1.1;
  margin-bottom: var(--space-2);
}
.stat-label {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.75);
  letter-spacing: 0.03em;
}

/* Why choose section */
.why-area {
  background: var(--color-light);
  position: relative;
}
.why-area::before {
  content: '';
  position: absolute;
  top: -1px;
  left: 0;
  right: 0;
  height: 70px;
  background: var(--color-white);
  clip-path: ellipse(55% 100% at 50% 0%);
  z-index: 1;
}
.why-grid {
  display: grid;
  grid-template-columns: 0.85fr 1.15fr;
  gap: var(--space-12);
  align-items: center;
  position: relative;
  z-index: 2;
}
.why-image img {
  width: 100%;
  height: 400px;
  object-fit: cover;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
}
.why-text h2 {
  margin-bottom: var(--space-6);
  text-wrap: balance;
}
.why-list {
  list-style: none;
  padding: 0;
}
.why-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  padding: var(--space-3) 0;
  color: var(--color-gray-dark);
  font-size: var(--font-size-base);
  line-height: 1.6;
}
.why-list li i,
.why-list li svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 3px;
}

/* CTA section */
.area-cta {
  background: var(--color-primary);
  text-align: center;
  color: var(--color-white);
  position: relative;
  overflow: hidden;
}
.area-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at 20% 50%, rgba(212,155,42,0.15) 0%, transparent 60%);
  pointer-events: none;
}
.area-cta .container {
  position: relative;
  z-index: 2;
}
.area-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.area-cta p {
  color: rgba(255,255,255,0.8);
  max-width: 580px;
  margin: 0 auto var(--space-8);
  font-size: var(--font-size-lg);
  line-height: 1.7;
}
.cta-buttons {
  display: flex;
  justify-content: center;
  gap: var(--space-4);
  flex-wrap: wrap;
}

/* Responsive */
@media (max-width: 1024px) {
  .communities-grid { grid-template-columns: repeat(2, 1fr); }
  .stats-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .area-intro-grid { grid-template-columns: 1fr; }
  .area-intro-image img { height: 300px; }
  .area-intro-image .accent-corner { display: none; }
  .communities-grid { grid-template-columns: 1fr; }
  .why-grid { grid-template-columns: 1fr; }
  .why-image img { height: 300px; }
  .stats-grid { grid-template-columns: repeat(2, 1fr); gap: var(--space-4); }
  .map-overlay-text { position: static; border-radius: 0; max-width: 100%; }
  .map-wrapper { aspect-ratio: 16 / 10; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="hero hero--area" aria-label="Service area page hero">
  <div class="container">
    <nav class="hero-breadcrumb--area" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span>/</span>
      <span>Service Area</span>
    </nav>
    <h1>Auto Repair in <span class="text-accent">Manchester, NH</span> &amp; Surrounding Communities</h1>
    <p><?php echo htmlspecialchars($siteName); ?> is a licensed New Hampshire auto repair shop at 518 Silver St in Manchester — providing engine repair, transmission service, driveshaft work, and routine maintenance to drivers across Southern New Hampshire since <?php echo $yearEstablished; ?>.</p>
  </div>
</section>

<!-- ═══ SVG Divider ═══ -->
<svg viewBox="0 0 1440 60" preserveAspectRatio="none" style="display:block;width:100%;height:60px;margin-top:-1px;" aria-hidden="true">
  <path d="M0,0 C360,70 1080,70 1440,0 L1440,60 L0,60 Z" fill="var(--color-white)"></path>
</svg>

<!-- ═══ INTRO / ANSWER BLOCK ═══ -->
<section class="section area-intro" aria-label="Service area introduction">
  <div class="container">
    <div class="area-intro-grid">
      <div class="area-intro-text reveal-left">
        <span class="eyebrow-label">Where We Serve</span>
        <h2>Where Can You Find <span class="text-accent">Auto Repair Near Me</span> in Manchester, NH?</h2>
        <div class="answer-block">
          <p><?php echo htmlspecialchars($siteName); ?> operates from 518 Silver St in Manchester, NH 03103 and serves drivers within a <?php echo $siteUrl ? '25' : '25'; ?>-mile radius. That covers Manchester proper plus Bedford, Hooksett, Goffstown, Londonderry, Merrimack, Derry, Nashua, and Concord. We handle everything from oil changes and brake repairs to full engine overhauls and our specialty driveshaft work — all from one location with <?php echo $yearsInBusiness; ?> years of experience behind every repair.</p>
        </div>
        <p>Manchester's winters take a toll on drivetrains, suspensions, and exhaust systems. New Hampshire's frost-heave roads and road salt create conditions that accelerate wear on CV joints, ball joints, and brake rotors faster than drivers in milder climates typically experience. Having a repair shop that understands these regional conditions means fewer repeat visits and longer-lasting fixes.</p>
        <p>Whether you commute on I-93, run errands on Second Street, or haul equipment through the industrial side of South Willow, we know how Manchester driving wears on vehicles — and we fix accordingly.</p>
      </div>
      <div class="area-intro-image reveal-right">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85f82e?w=800&q=80" alt="Mechanic performing auto repair in Manchester, NH at <?php echo htmlspecialchars($siteName); ?>" width="600" height="420" loading="lazy">
        <div class="accent-corner"></div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ STATS STRIP ═══ -->
<div class="stats-strip" aria-label="Service area statistics">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item reveal-up reveal-delay-1">
        <span class="stat-number" data-counter="25" data-suffix="-mile">0</span>
        <span class="stat-label">Service Radius</span>
      </div>
      <div class="stat-item reveal-up reveal-delay-2">
        <span class="stat-number" data-counter="<?php echo $yearsInBusiness; ?>" data-suffix="+">0</span>
        <span class="stat-label">Years Serving Manchester</span>
      </div>
      <div class="stat-item reveal-up reveal-delay-3">
        <span class="stat-number" data-counter="11">0</span>
        <span class="stat-label">Services Offered</span>
      </div>
      <div class="stat-item reveal-up reveal-delay-4">
        <span class="stat-number" data-counter="8">0</span>
        <span class="stat-label">Communities Served</span>
      </div>
    </div>
  </div>
</div>

<!-- ═══ COMMUNITIES ═══ -->
<section class="section communities-section" aria-label="Communities we serve">
  <div class="container">
    <div class="section-title reveal-up" style="position:relative;z-index:2;">
      <span class="eyebrow-label">Communities We Serve</span>
      <h2>Auto Repair for <span class="text-accent">Southern New Hampshire</span></h2>
      <p class="prose" style="margin-top:var(--space-4);"><?php echo htmlspecialchars($siteName); ?> is centrally located on Silver Street with easy access from I-93, Route 101, and I-293. Drivers from these communities trust us for reliable auto repair close to home.</p>
    </div>

    <div class="communities-grid">

      <!-- Manchester (Primary) -->
      <div class="community-card card-tint-1 reveal-up reveal-delay-1">
        <div class="community-icon"><i data-lucide="map-pin"></i></div>
        <span class="community-distance">Home Base</span>
        <h3>Manchester, NH</h3>
        <p>Our shop sits at 518 Silver St in the heart of Manchester — New Hampshire's largest city. From the West Side to the Queen City Bridge, Elm Street corridor to the Millyard, Manchester drivers have relied on us for <?php echo $yearsInBusiness; ?> years. Quick access from I-293 Exit 5 and Route 28. Free estimates, no appointment needed for diagnostics.</p>
      </div>

      <!-- Bedford -->
      <div class="community-card card-tint-2 reveal-up reveal-delay-2">
        <div class="community-icon"><i data-lucide="navigation"></i></div>
        <span class="community-distance">~6 miles</span>
        <h3>Bedford, NH</h3>
        <p>Bedford residents drive Route 101 East straight to our door — about 12 minutes. We service many Bedford commuters who need their vehicles ready for the I-293 corridor. From Riddle Brook Elementary to the Route 101/114 interchange, Bedford families count on us for brake work, oil changes, and drivetrain repairs.</p>
      </div>

      <!-- Hooksett -->
      <div class="community-card card-tint-3 reveal-up reveal-delay-3">
        <div class="community-icon"><i data-lucide="navigation"></i></div>
        <span class="community-distance">~8 miles</span>
        <h3>Hooksett, NH</h3>
        <p>Hooksett sits just north on I-93 — a straight shot down Exit 10 or 11 to Silver Street. Hooksett's mix of commuter traffic and commercial fleets means plenty of transmission wear, suspension issues from Granite Hill Road, and winter-beaten exhaust systems. We've been the driveshaft destination for Hooksett fleet operators since the mid-90s.</p>
      </div>

      <!-- Goffstown -->
      <div class="community-card card-tint-1 reveal-up reveal-delay-1">
        <div class="community-icon"><i data-lucide="navigation"></i></div>
        <span class="community-distance">~7 miles</span>
        <h3>Goffstown, NH</h3>
        <p>Take Mast Road or Route 114 from Goffstown center and you're at our shop in under 15 minutes. Goffstown's hilly roads through Pinardville and along the Piscataquog River put extra strain on transmissions and brakes — especially during mud season. We see a lot of Goffstown vehicles for suspension and alignment work each spring.</p>
      </div>

      <!-- Londonderry -->
      <div class="community-card card-tint-2 reveal-up reveal-delay-2">
        <div class="community-icon"><i data-lucide="navigation"></i></div>
        <span class="community-distance">~10 miles</span>
        <h3>Londonderry, NH</h3>
        <p>Londonderry drivers hop on I-93 North or Route 102 West and reach us in about 18 minutes. With the airport and industrial parks nearby, Londonderry sees heavy commuter mileage — which means accelerated wear on brakes, belts, and CV joints. Regular maintenance at our shop keeps Londonderry commuters on the road longer.</p>
      </div>

      <!-- Merrimack -->
      <div class="community-card card-tint-3 reveal-up reveal-delay-3">
        <div class="community-icon"><i data-lucide="navigation"></i></div>
        <span class="community-distance">~15 miles</span>
        <h3>Merrimack, NH</h3>
        <p>Merrimack residents use the Everett Turnpike or Route 3 to reach Manchester in about 20 minutes. The commute from Merrimack's residential areas south of the Souhegan River to Manchester or Nashua puts high mileage on vehicles quickly. We handle engine diagnostics, exhaust repairs, and battery replacements for many Merrimack families.</p>
      </div>

      <!-- Derry -->
      <div class="community-card card-tint-1 reveal-up reveal-delay-1">
        <div class="community-icon"><i data-lucide="navigation"></i></div>
        <span class="community-distance">~12 miles</span>
        <h3>Derry, NH</h3>
        <p>Derry connects to Manchester via Route 28 or I-93 — roughly 20 minutes depending on traffic at the Exit 4 merge. Derry's older vehicle inventory means we frequently see cars and trucks needing timing belts, catalytic converter repairs, and transmission leak inspections that other shops don't want to tackle.</p>
      </div>

      <!-- Concord -->
      <div class="community-card card-tint-2 reveal-up reveal-delay-2">
        <div class="community-icon"><i data-lucide="navigation"></i></div>
        <span class="community-distance">~18 miles</span>
        <h3>Concord, NH</h3>
        <p>New Hampshire's capital is a straight I-93 South drive — about 25 minutes to Silver Street. Concord state employees and Bow commuters who pass through Manchester often schedule repairs during their workday. Our driveshaft specialty draws Concord customers who can't find the service closer to home.</p>
      </div>

    </div>
  </div>
</section>

<!-- ═══ SVG Divider ═══ -->
<svg viewBox="0 0 1440 80" preserveAspectRatio="none" style="display:block;width:100%;height:80px;margin-top:-1px;" aria-hidden="true">
  <path d="M0,0 L720,80 L1440,0 L1440,80 L0,80 Z" fill="var(--color-white)"></path>
</svg>

<!-- ═══ MAP SECTION ═══ -->
<section class="section map-section" aria-label="Service area map">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Find Us</span>
      <h2>Located at <span class="text-accent">518 Silver St</span>, Manchester, NH</h2>
    </div>
    <div class="map-wrapper reveal-scale">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46447.94!2d-71.49!3d42.98!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e24f860c61c4c9%3A0x79f33b2b91f84da7!2sManchester%2C%20NH!5e0!3m2!1sen!2sus!4v1700000000000"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="<?php echo htmlspecialchars($siteName); ?> service area map — Manchester, NH and surrounding communities">
      </iframe>
      <div class="map-overlay-text">
        <strong><i data-lucide="map-pin" style="width:16px;height:16px;display:inline;vertical-align:-2px;margin-right:4px;"></i> <?php echo htmlspecialchars($siteName); ?></strong>
        518 Silver St, Manchester, NH 03103<br>
        Mon–Fri: 8:00 AM – 5:00 PM<br>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" style="color:var(--color-accent);"><?php echo htmlspecialchars(formatPhone($phone)); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══ WHY CHOOSE US (for area customers) ═══ -->
<section class="section why-area" aria-label="Why Manchester drivers choose us">
  <div class="container">
    <div class="why-grid">
      <div class="why-image reveal-left">
        <img src="https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?w=800&q=80" alt="Engine diagnostic equipment at <?php echo htmlspecialchars($siteName); ?> in Manchester, NH" width="600" height="400" loading="lazy">
      </div>
      <div class="why-text reveal-right">
        <span class="eyebrow-label">Why Local Drivers Choose Us</span>
        <h2>What Makes <?php echo htmlspecialchars($siteName); ?> <span class="text-accent">Different</span>?</h2>
        <ul class="why-list">
          <li><i data-lucide="check-circle"></i> <?php echo $yearsInBusiness; ?> years at the same Silver Street location — we aren't going anywhere</li>
          <li><i data-lucide="check-circle"></i> One of the only specialty driveshaft repair shops in Southern NH</li>
          <li><i data-lucide="check-circle"></i> Written estimates before any work begins — no surprise invoices</li>
          <li><i data-lucide="check-circle"></i> All makes and models: domestic, import, cars, trucks, SUVs</li>
          <li><i data-lucide="check-circle"></i> 11 service categories from oil changes to full engine rebuilds</li>
          <li><i data-lucide="check-circle"></i> Central Manchester location with easy I-93, I-293, and Route 101 access</li>
          <li><i data-lucide="check-circle"></i> Free diagnostics and estimates — no obligation, no pressure</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA ═══ -->
<section class="section area-cta" aria-label="Schedule your repair">
  <div class="container">
    <h2 class="reveal-up">Serving Manchester &amp; <span class="text-accent">Beyond</span> Since <?php echo $yearEstablished; ?></h2>
    <p class="reveal-up">Whether you're around the corner on Silver Street or driving in from Concord, Merrimack, or Derry — <?php echo htmlspecialchars($siteName); ?> is open Monday through Friday, 8 AM to 5 PM. Bring your vehicle in for a free estimate on any repair.</p>
    <div class="cta-buttons reveal-up">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px;"></i> Call Now
      </a>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

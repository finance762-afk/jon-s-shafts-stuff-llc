<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ────────────────────────────────────────────────
$pageTitle       = "Auto Repair Services Manchester NH | $siteName";
$pageDescription = "$siteName offers 11 auto repair services in Manchester, NH — engine repair, transmission rebuilds, driveshaft work, brakes, oil changes, exhaust, suspension, AC, and battery replacement. 33 years of experience at 518 Silver St.";
$canonicalUrl    = $siteUrl . '/services/';
$ogImage         = $logoUrl;
$currentPage     = 'services';
$heroImagePreload = 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?w=1920&q=80';
$cssVersion      = '2';

// ─── Schema ────────────────────────────────────────────────────
$schemaMarkup = generateBreadcrumbSchema([
    ['name' => 'Services', 'url' => ''],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══════════════════════════════════════════════════════════
     SERVICES LISTING — Jon's Shafts & Stuff, LLC
     Phase 4 | Standard Tier | Page One Insights
     ═══════════════════════════════════════════════════════════ -->

<style>
/* ═══ Services Listing — Page-Specific Styles ═══ */

/* Hero — Services Listing */
.hero--services {
  min-height: 50vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background-image: url('https://images.unsplash.com/photo-1487754180451-c456f719a1fc?w=1920&q=80');
  background-size: cover;
  background-position: center;
  position: relative;
  overflow: hidden;
  padding: calc(var(--nav-height) + var(--space-12)) var(--space-4) var(--space-12);
}
.hero--services::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(74,106,140,0.93) 0%, rgba(54,81,107,0.88) 60%, rgba(107,139,171,0.82) 100%);
  z-index: 1;
}
.hero--services::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.35;
  pointer-events: none;
  z-index: 1;
}
.hero--services .container {
  position: relative;
  z-index: 2;
}
.hero--services h1 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.hero--services .hero-answer {
  color: rgba(255,255,255,0.85);
  max-width: 680px;
  margin: 0 auto var(--space-6);
  font-size: var(--fs-body);
  line-height: 1.75;
}
.hero--services .breadcrumb {
  display: flex;
  justify-content: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.6);
  margin-bottom: var(--space-6);
}
.hero--services .breadcrumb a {
  color: var(--color-accent);
}
.hero--services .breadcrumb-sep {
  color: rgba(255,255,255,0.4);
}

/* SVG Section Divider */
.divider-wave {
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 100%;
  z-index: 3;
  line-height: 0;
}
.divider-wave svg {
  display: block;
  width: 100%;
  height: 60px;
}

/* Services Grid Overview */
.services-overview {
  background: var(--color-bg);
}
.services-overview .section-title {
  margin-bottom: var(--space-8);
}

/* Service Group Cards */
.service-group-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-6);
  margin-bottom: var(--space-12);
}
@media (max-width: 768px) {
  .service-group-grid {
    grid-template-columns: 1fr;
  }
}
.service-group-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  display: flex;
  flex-direction: column;
}
.service-group-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.service-group-card__header {
  padding: var(--space-6);
  position: relative;
}
.service-group-card__header h3 {
  color: var(--color-primary);
  margin-bottom: var(--space-2);
}
.service-group-card__header h3 a {
  transition: color var(--transition-fast);
}
.service-group-card__header h3 a:hover {
  color: var(--color-accent);
}
.service-group-card__body {
  padding: 0 var(--space-6) var(--space-6);
  flex: 1;
  display: flex;
  flex-direction: column;
}
.service-group-card__body ul {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  margin-bottom: var(--space-4);
  flex: 1;
}
.service-group-card__body ul li {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: var(--color-gray-dark);
}
.service-group-card__body ul li i,
.service-group-card__body ul li svg {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
  flex-shrink: 0;
}

/* All Services Full Grid */
.all-services-section {
  background: var(--color-bg-alt);
}

/* Floating accent decoration */
.floating-wrench {
  position: absolute;
  top: 15%;
  right: 5%;
  width: 120px;
  height: 120px;
  opacity: 0.04;
  pointer-events: none;
  z-index: 0;
}

/* CTA Banner */
.cta-services {
  background: var(--color-primary);
  position: relative;
  overflow: hidden;
}
.cta-services::before {
  content: '';
  position: absolute;
  top: -50%;
  right: -15%;
  width: 400px;
  height: 400px;
  border-radius: 50%;
  background: rgba(212,155,42,0.08);
  pointer-events: none;
}
.cta-services .container {
  position: relative;
  z-index: 1;
  text-align: center;
}
.cta-services h2 {
  color: var(--color-white);
  margin-bottom: var(--space-3);
}
.cta-services .answer-block {
  color: rgba(255,255,255,0.8);
  max-width: 600px;
  margin: 0 auto var(--space-6);
}
.cta-services .btn-group {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* Stats Strip */
.stats-strip {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  text-align: center;
  padding: var(--space-8) 0;
  border-top: 1px solid var(--color-border);
  border-bottom: 1px solid var(--color-border);
  margin: var(--space-8) 0;
}
@media (max-width: 600px) {
  .stats-strip {
    grid-template-columns: repeat(2, 1fr);
  }
}
.stat-item .stat-number {
  font-family: var(--font-heading);
  font-size: var(--font-size-4xl);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
}
.stat-item .stat-label {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-top: var(--space-2);
}

/* Numbered watermark */
.services-overview {
  position: relative;
}
.services-overview .stat-watermark {
  position: absolute;
  top: var(--space-8);
  right: var(--space-4);
  font-family: var(--font-heading);
  font-size: clamp(5rem, 10vw, 9rem);
  font-weight: 900;
  color: rgba(var(--color-primary-rgb), 0.03);
  line-height: 1;
  pointer-events: none;
  z-index: 0;
}
</style>

<!-- Hero -->
<section class="hero hero--services">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <span>Services</span>
    </nav>
    <h1>What <span class="text-accent">Auto Repair Services</span> Does <?php echo htmlspecialchars($siteName); ?> Offer in Manchester, NH?</h1>
    <p class="hero-answer"><?php echo htmlspecialchars($siteName); ?> is a licensed New Hampshire auto repair shop at 518 Silver St in Manchester, serving the greater Manchester area since <?php echo $yearEstablished; ?>. We handle everything from engine diagnostics and transmission rebuilds to driveshaft repair, brakes, exhaust systems, and routine maintenance for all makes and models.</p>
  </div>
  <div class="divider-wave">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,40 C360,80 720,0 1440,40 L1440,60 L0,60 Z"/>
    </svg>
  </div>
</section>

<!-- Services Overview -->
<section class="services-overview" aria-label="Auto repair services overview">
  <span class="stat-watermark" aria-hidden="true">11</span>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>What <span class="text-accent">services</span> can you get at our Manchester shop?</h2>
      <p class="answer-block">We perform 11 distinct auto repair and maintenance services at our 518 Silver St location in Manchester, NH. From major drivetrain work like transmission rebuilds and driveshaft replacements to everyday maintenance like oil changes and brake service, every job gets the same attention to detail we've delivered for <?php echo $yearsInBusiness; ?> years.</p>
    </div>

    <!-- Stats Strip -->
    <div class="stats-strip reveal-up">
      <div class="stat-item">
        <div class="stat-number" data-counter="33" data-suffix="+">0+</div>
        <div class="stat-label">Years Experience</div>
      </div>
      <div class="stat-item">
        <div class="stat-number" data-counter="11">0</div>
        <div class="stat-label">Services Offered</div>
      </div>
      <div class="stat-item">
        <div class="stat-number" data-counter="120" data-suffix="+">0+</div>
        <div class="stat-label">5-Star Reviews</div>
      </div>
      <div class="stat-item">
        <div class="stat-number" data-counter="1993">0</div>
        <div class="stat-label">Established</div>
      </div>
    </div>

    <!-- Service Group Cards -->
    <div class="service-group-grid">
      <?php
      $tints = ['card-tint-1', 'card-tint-2', 'card-tint-3', 'card-tint-1'];
      $icons = [
        'auto-repair-services' => ['wrench', 'cog', 'gauge'],
        'seasonal-services'    => ['disc', 'droplets', 'snowflake'],
      ];
      $tintIdx = 0;
      foreach ($servicePages as $sp):
        if ($sp['type'] === 'service_group'):
          $tint = $tints[$tintIdx % count($tints)];
          $tintIdx++;
      ?>
      <article class="service-group-card <?php echo $tint; ?> reveal-up reveal-delay-<?php echo $tintIdx; ?>">
        <div class="service-group-card__header">
          <span class="eyebrow-label"><?php echo count($sp['services']); ?> Services</span>
          <h3><a href="/services/<?php echo htmlspecialchars($sp['slug']); ?>/"><?php echo htmlspecialchars($sp['title']); ?></a></h3>
        </div>
        <div class="service-group-card__body">
          <ul>
            <?php foreach ($sp['services'] as $svcName): ?>
            <li><i data-lucide="check-circle"></i> <?php echo htmlspecialchars($svcName); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/services/<?php echo htmlspecialchars($sp['slug']); ?>/" class="btn btn-secondary btn-sm">View Details &rarr;</a>
        </div>
      </article>
      <?php
        endif;
      endforeach;
      ?>
    </div>
  </div>
</section>

<!-- All Services Grid -->
<section class="all-services-section" aria-label="All auto repair services">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Full Service Menu</span>
      <h2>Which <span class="text-accent">individual services</span> are available at our shop?</h2>
      <p class="answer-block">Each of our 11 services covers a specific vehicle system — from engine internals and transmission components to suspension, exhaust, electrical, and climate control. Click any service below for detailed pricing guidance, process breakdown, and FAQs specific to that repair.</p>
    </div>

    <div class="services-grid">
      <?php
      $serviceImages = [
        'Engine Repair'                  => 'https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?w=600&q=75',
        'Transmission Repair'            => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?w=600&q=75',
        'Routine Automotive Maintenance' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?w=600&q=75',
        'Transmission Leak Inspection'   => 'https://images.unsplash.com/photo-1558618666-fcd25c85f82e?w=600&q=75',
        'Brake Repair & Service'         => 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=600&q=75',
        'Oil Change Service'             => 'https://images.unsplash.com/photo-1635784065975-0b57b9bc1773?w=600&q=75',
        'Suspension Repair'              => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=600&q=75',
        'AC Repair & Service'            => 'https://images.unsplash.com/photo-1517524008697-84bbe3c3fd98?w=600&q=75',
        'Battery Replacement'            => 'https://images.unsplash.com/photo-1620230874645-0d85afd9b96a?w=600&q=75',
        'Exhaust System Repair'          => 'https://images.unsplash.com/photo-1615906655593-ad0386982a0f?w=600&q=75',
        'Driveshaft Repair & Replacement'=> 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&q=75',
      ];
      $lucideIcons = [
        'Engine Repair'                  => 'cog',
        'Transmission Repair'            => 'settings',
        'Routine Automotive Maintenance' => 'wrench',
        'Transmission Leak Inspection'   => 'search',
        'Brake Repair & Service'         => 'disc',
        'Oil Change Service'             => 'droplets',
        'Suspension Repair'              => 'move-vertical',
        'AC Repair & Service'            => 'snowflake',
        'Battery Replacement'            => 'zap',
        'Exhaust System Repair'          => 'wind',
        'Driveshaft Repair & Replacement'=> 'rotate-cw',
      ];
      $cardTints = ['card-tint-1','card-tint-2','card-tint-3'];
      $delayClasses = ['reveal-delay-1','reveal-delay-2','reveal-delay-3','reveal-delay-4'];

      foreach ($services as $idx => $s):
        $tint = $cardTints[$idx % 3];
        $delay = $delayClasses[$idx % 4];
        $icon = $lucideIcons[$s['name']] ?? 'wrench';
        $img = $serviceImages[$s['name']] ?? '';
        $keywords = array_slice($s['keywords'], 0, 3);
      ?>
      <article class="service-card-with-image <?php echo $tint; ?> reveal-up <?php echo $delay; ?>">
        <div class="service-card__image">
          <img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($s['name']); ?> in Manchester NH" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="<?php echo $icon; ?>"></i></div>
          <h3><?php echo htmlspecialchars($s['name']); ?></h3>
          <p class="service-card__desc"><?php echo htmlspecialchars(substr($s['description'], 0, strrpos(substr($s['description'], 0, 100), ' '))); ?>.</p>
          <ul>
            <?php foreach ($keywords as $kw): ?>
            <li><?php echo htmlspecialchars($kw); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/services/<?php echo htmlspecialchars($s['slug']); ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-services" aria-label="Request a free estimate">
  <div class="container">
    <h2>Ready to <span class="text-accent">schedule your repair</span> in Manchester?</h2>
    <p class="answer-block">Walk-ins welcome Monday through Friday, 8 AM to 5 PM at 518 Silver St. Or request a free estimate online — we respond within one business day with a detailed breakdown for your specific vehicle and repair needs.</p>
    <div class="btn-group">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" class="btn btn-accent btn-lg"><i data-lucide="phone" style="width:18px;height:18px;"></i> Call Now</a>
      <?php endif; ?>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Get Free Estimate</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

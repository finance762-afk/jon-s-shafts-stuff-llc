<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

// ─── Page Setup ────────────────────────────────────────────────
$pageTitle       = "Battery Replacement Manchester NH | Testing & Installation | Jon's Shafts & Stuff, LLC";
$pageDescription = "Battery replacement and load testing in Manchester, NH. Standard, AGM, and deep-cycle batteries installed at 518 Silver St. 33 years keeping vehicles starting through NH winters.";
$canonicalUrl    = $siteUrl . '/services/battery-replacement/';
$currentPage     = 'services';
$heroImagePreload = 'https://images.unsplash.com/photo-1620230874645-0d85afd9b96a?w=1920&q=80';
$cssVersion      = '2';

// ─── Schema ────────────────────────────────────────────────────
$batteryService = findService('Battery Replacement');

$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Services', 'url' => $siteUrl . '/services/'],
    ['name' => 'Battery Replacement', 'url' => ''],
]);

$serviceSchema = generateServiceSchema($batteryService);

$faqs = [
    [
        'question' => 'How long do car batteries last in Manchester, NH winters?',
        'answer'   => 'Most car batteries last 3-5 years in Manchester, but NH winters shorten that lifespan significantly. Sub-zero temperatures in January and February force your battery to work harder during cold starts. We recommend testing your battery every fall before temperatures drop below freezing — a free service at our 518 Silver St shop.',
    ],
    [
        'question' => 'What is the difference between AGM and standard car batteries?',
        'answer'   => 'AGM (Absorbed Glass Mat) batteries hold their charge longer, resist vibration damage, and perform better in extreme cold — a real advantage for Manchester drivers. Standard flooded batteries cost less upfront but drain faster in sub-zero temperatures. We help you choose based on your vehicle, driving habits, and budget.',
    ],
    [
        'question' => 'Does battery replacement include a warranty?',
        'answer'   => 'Yes. Every battery we install at our Manchester shop comes with the manufacturer warranty — typically 2-3 years for standard batteries and 3-5 years for AGM units. We keep your warranty records on file and handle any pro-rated claims directly so you never deal with paperwork.',
    ],
    [
        'question' => 'How do I know if the problem is my battery or my alternator?',
        'answer'   => 'A failing battery usually causes slow cranking that gets worse in cold Manchester mornings, while an alternator problem shows up as dimming headlights while driving or a battery that dies repeatedly after being replaced. We test both components during every battery service to give you an accurate diagnosis before replacing anything.',
    ],
    [
        'question' => 'Can I recycle my old car battery in Manchester?',
        'answer'   => 'Yes — and New Hampshire law requires it. Car batteries contain lead and sulfuric acid that cannot go in regular waste. We handle proper disposal and recycling of your old battery at no extra charge when you get a replacement at our 518 Silver St location. The core is sent to a licensed recycling facility.',
    ],
    [
        'question' => 'Should I replace my battery before winter in New Hampshire?',
        'answer'   => 'If your battery is over 3 years old, absolutely. A battery that cranks fine in September may fail on the first sub-zero morning in December. Manchester sees temperatures well below zero in January, and a weak battery loses up to 60% of its cranking power at 0°F. A fall load test at our shop takes 10 minutes and is free.',
    ],
];

$faqSchema = generateFAQSchema($faqs);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $breadcrumbSchema; ?>
<?php echo $serviceSchema; ?>
<?php echo $faqSchema; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══════════════════════════════════════════════════════════
     BATTERY REPLACEMENT — Jon's Shafts & Stuff, LLC
     Solo Service Page | Standard Tier | Page One Insights
     ═══════════════════════════════════════════════════════════ -->

<style>
/* ═══ Battery Replacement — Page-Specific Styles ═══ */

/* ── TECHNIQUE 1: Layered Hero with gradient overlay + noise texture ── */
.hero--battery {
  min-height: 55vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background-image: url('https://images.unsplash.com/photo-1620230874645-0d85afd9b96a?w=1920&q=80');
  background-size: cover;
  background-position: center 40%;
  position: relative;
  overflow: hidden;
  padding: calc(var(--nav-height) + var(--space-12)) var(--space-4) var(--space-12);
}
.hero--battery::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    170deg,
    rgba(74, 106, 140, 0.93) 0%,
    rgba(54, 81, 107, 0.88) 50%,
    rgba(212, 155, 42, 0.22) 100%
  );
  z-index: 1;
}
.hero--battery::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.35;
  pointer-events: none;
  z-index: 1;
}
.hero--battery .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.hero--battery h1 {
  color: var(--color-white);
  font-size: var(--fs-h1);
  font-family: var(--font-heading);
  font-weight: 900;
  line-height: 1.1;
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.hero--battery .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  max-width: 700px;
  margin: 0 auto var(--space-6);
  font-size: var(--fs-body);
  line-height: 1.75;
}
.hero--battery .breadcrumb {
  display: flex;
  justify-content: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: rgba(255, 255, 255, 0.6);
  margin-bottom: var(--space-6);
}
.hero--battery .breadcrumb a {
  color: var(--color-accent);
  transition: color var(--transition-fast);
}
.hero--battery .breadcrumb a:hover {
  color: var(--color-white);
}
.hero--battery .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.4);
}
.hero--battery .hero-cta-group {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
  margin-top: var(--space-6);
}

/* ── TECHNIQUE 2: SVG Section Divider — Zigzag/Chevron ── */
.divider-zigzag {
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 100%;
  z-index: 3;
  line-height: 0;
}
.divider-zigzag svg {
  display: block;
  width: 100%;
  height: 60px;
}
.divider-chevron {
  line-height: 0;
  position: relative;
  z-index: 2;
  margin-top: -1px;
}
.divider-chevron svg {
  display: block;
  width: 100%;
  height: 50px;
}
.divider-slant {
  line-height: 0;
  position: relative;
  z-index: 2;
  margin-top: -1px;
}
.divider-slant svg {
  display: block;
  width: 100%;
  height: 55px;
}

/* ── TECHNIQUE 3: Tinted symptom cards with watermark numbers ── */
.warning-signs {
  background: var(--color-bg);
  padding: var(--space-16) 0;
  position: relative;
}
.warning-signs .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.warning-signs .section-title h2 {
  text-wrap: balance;
}
.symptom-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
}
@media (max-width: 1024px) {
  .symptom-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  .symptom-grid {
    grid-template-columns: 1fr;
  }
}
.symptom-card {
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  text-align: center;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
  overflow: hidden;
}
.symptom-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
}
.symptom-card__icon {
  width: 64px;
  height: 64px;
  border-radius: 50%;
  background: var(--color-white);
  box-shadow: var(--shadow-md);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-4);
  color: var(--color-accent);
}
.symptom-card__icon i,
.symptom-card__icon svg {
  width: 28px;
  height: 28px;
}
.symptom-card h3 {
  font-family: var(--font-heading);
  font-size: var(--fs-h4);
  color: var(--color-primary);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.symptom-card p {
  font-size: var(--fs-sm);
  line-height: 1.65;
  color: var(--color-gray-dark);
}
/* Watermark numbers on symptom cards */
.symptom-card::before {
  content: attr(data-number);
  position: absolute;
  top: var(--space-3);
  right: var(--space-4);
  font-family: var(--font-heading);
  font-size: clamp(3rem, 5vw, 4.5rem);
  font-weight: 900;
  color: rgba(var(--color-primary-rgb), 0.04);
  line-height: 1;
  pointer-events: none;
}

/* ── Service Detail Split Section ── */
.service-detail {
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.service-detail .container {
  position: relative;
  z-index: 1;
}
.service-detail .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.service-detail .section-title h2 {
  text-wrap: balance;
}
.detail-split {
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: var(--space-10);
  align-items: start;
  max-width: var(--max-width);
  margin: 0 auto;
}
@media (max-width: 900px) {
  .detail-split {
    grid-template-columns: 1fr;
  }
}
.detail-text p {
  margin-bottom: var(--space-6);
  line-height: 1.75;
  color: var(--color-gray-dark);
}
.detail-text strong {
  color: var(--color-primary);
}
.detail-image {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.detail-image img {
  width: 100%;
  height: auto;
  display: block;
  object-fit: cover;
  aspect-ratio: 4 / 3;
}
.detail-image::after {
  content: '';
  position: absolute;
  inset: 0;
  border: 3px solid rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-lg);
  pointer-events: none;
}
/* Floating accent shape */
.floating-bolt {
  position: absolute;
  top: 8%;
  right: 4%;
  width: 130px;
  height: 130px;
  border: 3px solid rgba(var(--color-accent-rgb), 0.06);
  border-radius: 50%;
  pointer-events: none;
  z-index: 0;
}
.floating-bolt::after {
  content: '';
  position: absolute;
  top: 18px;
  left: 18px;
  right: 18px;
  bottom: 18px;
  border: 2px dashed rgba(var(--color-accent-rgb), 0.04);
  border-radius: 50%;
}

/* ── TECHNIQUE 4: Process cards with numbered steps + connecting line ── */
.process-section {
  background: var(--color-bg);
  padding: var(--space-16) 0;
  position: relative;
}
.process-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.process-section .section-title h2 {
  text-wrap: balance;
}
.process-timeline {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  position: relative;
}
@media (max-width: 1024px) {
  .process-timeline {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  .process-timeline {
    grid-template-columns: 1fr;
  }
}
/* Connecting line behind steps */
.process-timeline::before {
  content: '';
  position: absolute;
  top: 40px;
  left: 10%;
  right: 10%;
  height: 2px;
  background: linear-gradient(90deg, var(--color-accent), rgba(var(--color-accent-rgb), 0.2));
  z-index: 0;
}
@media (max-width: 1024px) {
  .process-timeline::before {
    display: none;
  }
}
.process-step {
  text-align: center;
  position: relative;
  z-index: 1;
}
.process-step__number {
  width: 72px;
  height: 72px;
  border-radius: 50%;
  background: var(--color-primary);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: var(--font-size-2xl);
  font-weight: 900;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-4);
  box-shadow: var(--shadow-md);
  transition: transform var(--transition-base), background var(--transition-base);
}
.process-step:hover .process-step__number {
  transform: scale(1.08);
  background: var(--color-accent);
}
.process-step h3 {
  font-family: var(--font-heading);
  font-size: var(--fs-h4);
  color: var(--color-primary);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.process-step p {
  font-size: var(--fs-sm);
  color: var(--color-gray-dark);
  line-height: 1.65;
  max-width: 280px;
  margin: 0 auto;
}

/* ── Cost Section ── */
.cost-section {
  background: var(--color-primary);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.cost-section::before {
  content: '';
  position: absolute;
  bottom: -40%;
  left: -10%;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.07);
  pointer-events: none;
}
.cost-section .container {
  position: relative;
  z-index: 1;
}
.cost-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.cost-section .section-title h2 {
  color: var(--color-white);
  text-wrap: balance;
}
.cost-section .answer-block {
  color: rgba(255, 255, 255, 0.85);
  max-width: 680px;
  margin: 0 auto var(--space-8);
  text-align: center;
  line-height: 1.75;
}
.pricing-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  max-width: 900px;
  margin: 0 auto;
}
@media (max-width: 768px) {
  .pricing-grid {
    grid-template-columns: 1fr;
  }
}
.pricing-card {
  background: rgba(255, 255, 255, 0.08);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  text-align: center;
  transition: transform var(--transition-base), background var(--transition-base);
}
.pricing-card:hover {
  transform: translateY(-4px);
  background: rgba(255, 255, 255, 0.12);
}
.pricing-card__range {
  font-family: var(--font-heading);
  font-size: var(--font-size-3xl);
  font-weight: 900;
  color: var(--color-accent);
  margin-bottom: var(--space-2);
}
.pricing-card__label {
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 700;
  margin-bottom: var(--space-3);
}
.pricing-card__desc {
  font-size: var(--fs-sm);
  color: rgba(255, 255, 255, 0.7);
  line-height: 1.6;
}
.cost-note {
  text-align: center;
  color: rgba(255, 255, 255, 0.6);
  font-size: var(--fs-sm);
  margin-top: var(--space-8);
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
}

/* ── FAQ Section ── */
.faq-section {
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
}
.faq-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.faq-section .section-title h2 {
  text-wrap: balance;
}
.faq-list {
  max-width: 780px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.faq-item {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-sm);
  overflow: hidden;
  transition: box-shadow var(--transition-base);
}
.faq-item:hover {
  box-shadow: var(--shadow-md);
}
.faq-item summary {
  padding: var(--space-6);
  cursor: pointer;
  font-family: var(--font-heading);
  font-size: var(--fs-body);
  font-weight: 700;
  color: var(--color-primary);
  list-style: none;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-4);
  line-height: 1.4;
}
.faq-item summary::-webkit-details-marker {
  display: none;
}
.faq-item summary::after {
  content: '+';
  font-family: var(--font-heading);
  font-size: var(--font-size-2xl);
  font-weight: 300;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.faq-item[open] summary::after {
  content: '\2212';
  transform: rotate(180deg);
}
.faq-item .faq-answer {
  padding: 0 var(--space-6) var(--space-6);
  color: var(--color-gray-dark);
  line-height: 1.75;
  font-size: var(--fs-body);
}

/* ── Related Services ── */
.related-services {
  background: var(--color-bg);
  padding: var(--space-16) 0;
}
.related-services .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.related-services .section-title h2 {
  text-wrap: balance;
}

/* ── CTA Banner ── */
.cta-battery {
  background: var(--color-primary);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.cta-battery::before {
  content: '';
  position: absolute;
  top: -30%;
  right: -10%;
  width: 450px;
  height: 450px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.08);
  pointer-events: none;
}
.cta-battery .container {
  position: relative;
  z-index: 1;
  text-align: center;
}
.cta-battery h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.cta-battery .answer-block {
  color: rgba(255, 255, 255, 0.85);
  max-width: 640px;
  margin: 0 auto var(--space-6);
  line-height: 1.75;
}
.cta-battery .btn-group {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── Answer block global ── */
.answer-block {
  line-height: 1.75;
  color: var(--color-gray-dark);
}
.section-title .answer-block {
  max-width: 680px;
  margin-left: auto;
  margin-right: auto;
}

/* ── Last updated stamp ── */
.last-updated {
  text-align: center;
  font-size: var(--fs-sm);
  color: var(--color-gray);
  padding: var(--space-6) 0;
  background: var(--color-bg);
}
</style>

<!-- Hero -->
<section class="hero hero--battery">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Battery Replacement</span>
    </nav>
    <h1><span class="text-accent">Battery Replacement</span> in Manchester, NH</h1>
    <p class="hero-answer"><?php echo htmlspecialchars($siteName); ?> provides battery testing and replacement at 518 Silver St in Manchester, NH. We carry standard, AGM, and deep-cycle batteries for every make and model — and we load-test your existing battery before recommending a replacement so you never pay for a battery you do not need.</p>
    <div class="hero-cta-group">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" class="btn btn-accent btn-lg"><i data-lucide="phone" style="width:18px;height:18px;"></i> Call Now</a>
      <?php endif; ?>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Get Free Estimate</a>
    </div>
  </div>
  <div class="divider-zigzag">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,60 L120,20 L240,60 L360,20 L480,60 L600,20 L720,60 L840,20 L960,60 L1080,20 L1200,60 L1320,20 L1440,60 L1440,60 L0,60 Z"/>
    </svg>
  </div>
</section>

<!-- Warning Signs -->
<section class="warning-signs" aria-label="Battery warning signs">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Warning Signs</span>
      <h2>When does your vehicle need a <span class="text-accent">new battery</span> in Manchester?</h2>
      <p class="answer-block">Manchester drivers face some of the harshest cold-start conditions in New England. Sub-zero temperatures in January sap battery power by up to 60%, turning a marginal battery into a no-start situation. If your vehicle shows any of these four symptoms, bring it to our 518 Silver St shop for a free load test before you end up stranded on I-93.</p>
    </div>

    <div class="symptom-grid">
      <article class="symptom-card card-tint-1 reveal-up reveal-delay-1" data-number="01">
        <div class="symptom-card__icon"><i data-lucide="gauge"></i></div>
        <h3>Slow Engine Cranking</h3>
        <p>Your engine turns over sluggishly when you turn the key, especially on cold Manchester mornings. The starter motor drags because the battery cannot deliver enough cranking amps at low temperatures.</p>
      </article>
      <article class="symptom-card card-tint-2 reveal-left reveal-delay-2" data-number="02">
        <div class="symptom-card__icon"><i data-lucide="lightbulb"></i></div>
        <h3>Dim Headlights at Idle</h3>
        <p>Your headlights noticeably dim when idling at red lights on Elm Street or sitting in traffic on I-293. A healthy battery maintains voltage — dimming signals the battery can no longer hold a full charge.</p>
      </article>
      <article class="symptom-card card-tint-3 reveal-right reveal-delay-3" data-number="03">
        <div class="symptom-card__icon"><i data-lucide="mouse-pointer-click"></i></div>
        <h3>Clicking When Starting</h3>
        <p>You hear rapid clicking but the engine will not turn over. This means the battery has enough power to engage the starter solenoid but not enough to spin the motor — a common failure pattern after NH freeze-thaw cycles.</p>
      </article>
      <article class="symptom-card card-tint-1 reveal-up reveal-delay-4" data-number="04">
        <div class="symptom-card__icon"><i data-lucide="alert-triangle"></i></div>
        <h3>Dashboard Battery Warning</h3>
        <p>The battery or charging system light illuminates on your dash while driving. This can indicate a failing battery, a weak alternator, or a corroded terminal connection — all of which we diagnose at our Manchester shop.</p>
      </article>
    </div>
  </div>
</section>

<!-- SVG Divider -->
<div class="divider-chevron">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" fill="var(--color-bg-alt)">
    <path d="M0,0 L720,50 L1440,0 L1440,50 L0,50 Z"/>
  </svg>
</div>

<!-- Service Detail -->
<section class="service-detail" aria-label="Battery replacement service details">
  <div class="floating-bolt" aria-hidden="true"></div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What's Included</span>
      <h2>What does <span class="text-accent">battery replacement</span> include at our Manchester shop?</h2>
      <p class="answer-block">Our battery replacement service goes beyond swapping the battery. We load-test your current battery, check the alternator output, clean or replace corroded terminals, and verify the charging system is working correctly — all at our 518 Silver St location in Manchester, NH, backed by <?php echo $yearsInBusiness; ?> years of auto repair experience.</p>
    </div>

    <div class="detail-split">
      <div class="detail-text reveal-left">
        <p><?php echo htmlspecialchars($siteName); ?> is a licensed New Hampshire auto repair shop that has been keeping Manchester vehicles running since <?php echo $yearEstablished; ?>. Battery replacement near me in Manchester starts with accurate diagnosis — we never sell a battery to a driver who does not need one. Every service begins with a conductance load test that measures your battery's cold cranking amps against the manufacturer specification for your vehicle.</p>

        <p>If the test confirms the battery has failed or is marginal, we help you choose the right replacement. We stock <strong>standard flooded batteries</strong> for daily drivers, <strong>AGM batteries</strong> for vehicles with start-stop systems or heavy electrical loads, and <strong>deep-cycle batteries</strong> for trucks with aftermarket accessories. Every battery we install matches or exceeds the OEM specification for your make and model.</p>

        <p>Installation includes removing the old battery, cleaning the battery tray of corrosion, applying anti-corrosion compound to the terminal posts, torquing the hold-down clamp, and verifying the charging system voltage with the engine running. We also check the <strong>alternator output</strong> — because a failing alternator will kill a brand-new battery within weeks, and we see this misdiagnosis from other shops in Manchester regularly.</p>

        <p>Your old battery gets recycled through a licensed facility in compliance with New Hampshire environmental regulations. We handle the disposal at no extra charge. The entire battery replacement process takes 30-45 minutes for most vehicles at our 518 Silver St shop — no appointment necessary.</p>
      </div>
      <div class="detail-image reveal-right">
        <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=800&q=80" alt="Car battery being tested and replaced at auto repair shop in Manchester NH" width="800" height="600" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- SVG Divider -->
<div class="divider-chevron">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" fill="var(--color-bg)">
    <path d="M0,50 L720,0 L1440,50 L1440,50 L0,50 Z"/>
  </svg>
</div>

<!-- Process -->
<section class="process-section" aria-label="Battery replacement process">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Our Process</span>
      <h2>How does <?php echo htmlspecialchars($siteName); ?> handle <span class="text-accent">battery replacement</span> in Manchester?</h2>
      <p class="answer-block">We follow a four-step process at our 518 Silver St shop to make sure you get the right battery installed correctly. From initial testing through final verification, every step is designed to protect your wallet and keep your vehicle starting reliably through Manchester winters.</p>
    </div>

    <div class="process-timeline">
      <div class="process-step reveal-up reveal-delay-1">
        <div class="process-step__number">1</div>
        <h3>Test</h3>
        <p>Conductance load test measures your battery's actual cold cranking amps. We compare the reading against your vehicle's OEM spec to determine whether replacement is truly needed.</p>
      </div>
      <div class="process-step reveal-up reveal-delay-2">
        <div class="process-step__number">2</div>
        <h3>Diagnose</h3>
        <p>We check the alternator output, inspect terminal connections for corrosion, and test parasitic draw. A new battery solves nothing if the charging system is the real problem.</p>
      </div>
      <div class="process-step reveal-up reveal-delay-3">
        <div class="process-step__number">3</div>
        <h3>Replace</h3>
        <p>Old battery removed, tray cleaned, anti-corrosion compound applied to posts, new battery installed and torqued. We match or exceed OEM specs for your specific vehicle.</p>
      </div>
      <div class="process-step reveal-up reveal-delay-4">
        <div class="process-step__number">4</div>
        <h3>Verify</h3>
        <p>Engine started, charging voltage confirmed at 13.5-14.5V, all electrical systems checked. We reset the battery management system if your vehicle requires it.</p>
      </div>
    </div>
  </div>
</section>

<!-- Cost Section -->
<div class="divider-slant">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" fill="var(--color-primary)">
    <path d="M0,55 L1440,0 L1440,55 L0,55 Z"/>
  </svg>
</div>
<section class="cost-section" aria-label="Battery replacement cost">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label" style="color:var(--color-accent);">Pricing</span>
      <h2>How much does <span class="text-accent">battery replacement</span> cost in Manchester, NH?</h2>
      <p class="answer-block">Battery replacement in Manchester typically costs between $100 and $350 depending on the battery type your vehicle requires. Standard flooded batteries sit at the lower end, while AGM and deep-cycle batteries cost more due to superior cold-weather performance — an important factor for NH winters. We always provide the price before starting work.</p>
    </div>

    <div class="pricing-grid">
      <div class="pricing-card reveal-up reveal-delay-1">
        <div class="pricing-card__range">$100–$180</div>
        <div class="pricing-card__label">Standard Flooded Battery</div>
        <p class="pricing-card__desc">Includes battery, installation, terminal cleaning, and old battery disposal. Fits most daily drivers in Manchester with standard electrical loads.</p>
      </div>
      <div class="pricing-card reveal-up reveal-delay-2">
        <div class="pricing-card__range">$180–$280</div>
        <div class="pricing-card__label">AGM Battery</div>
        <p class="pricing-card__desc">Required for start-stop vehicles and recommended for Manchester's sub-zero winters. Better cold cranking amps and longer lifespan than standard batteries.</p>
      </div>
      <div class="pricing-card reveal-up reveal-delay-3">
        <div class="pricing-card__range">$250–$350</div>
        <div class="pricing-card__label">Deep-Cycle / Heavy-Duty</div>
        <p class="pricing-card__desc">For trucks with winches, aftermarket audio, or dual-battery setups. Handles sustained electrical draw without voltage drop on long NH highway runs.</p>
      </div>
    </div>

    <p class="cost-note reveal-up">Prices are typical ranges for Manchester, NH as of <?php echo date('Y'); ?>. Your exact cost depends on vehicle make, model, and battery group size. Load testing is free — we only charge if you need a replacement.</p>
  </div>
</section>

<!-- FAQ Section -->
<section class="faq-section" aria-label="Battery replacement FAQs">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">FAQs</span>
      <h2>What do Manchester drivers ask about <span class="text-accent">battery replacement</span>?</h2>
      <p class="answer-block">These are the questions we hear most from customers at our 518 Silver St shop in Manchester. If your question is not answered here, call us or request an estimate online — we respond within one business day.</p>
    </div>

    <div class="faq-list">
      <?php foreach ($faqs as $idx => $faq): ?>
      <details class="faq-item reveal-up<?php echo $idx < 4 ? ' reveal-delay-' . ($idx + 1) : ''; ?>">
        <summary><?php echo htmlspecialchars($faq['question']); ?></summary>
        <div class="faq-answer"><?php echo htmlspecialchars($faq['answer']); ?></div>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Related Services -->
<section class="related-services" aria-label="Related auto repair services">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Related Services</span>
      <h2>What other services might your <span class="text-accent">vehicle need</span>?</h2>
      <p class="answer-block">Battery problems often signal related electrical or maintenance issues. These three services frequently pair with battery replacement at our Manchester shop.</p>
    </div>

    <div class="services-grid" style="grid-template-columns: repeat(3, 1fr);">
      <?php
      $relatedNames = ['Engine Repair', 'Routine Automotive Maintenance', 'AC Repair & Service'];
      $relatedImages = [
          'Engine Repair'                   => 'https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?w=600&q=75',
          'Routine Automotive Maintenance'  => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?w=600&q=75',
          'AC Repair & Service'             => 'https://images.unsplash.com/photo-1517524008697-84bbe3c3fd98?w=600&q=75',
      ];
      $relatedIcons = [
          'Engine Repair'                   => 'cog',
          'Routine Automotive Maintenance'  => 'wrench',
          'AC Repair & Service'             => 'snowflake',
      ];
      $cardTints = ['card-tint-1', 'card-tint-2', 'card-tint-3'];

      foreach ($relatedNames as $idx => $rName):
        $rService = findService($rName);
        if (!$rService) continue;
        $tint = $cardTints[$idx % 3];
        $icon = $relatedIcons[$rName] ?? 'wrench';
        $img  = $relatedImages[$rName] ?? '';
        $keywords = array_slice($rService['keywords'], 0, 3);
      ?>
      <article class="service-card-with-image <?php echo $tint; ?> reveal-up reveal-delay-<?php echo $idx + 1; ?>">
        <div class="service-card__image">
          <img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($rName); ?> in Manchester NH" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="<?php echo $icon; ?>"></i></div>
          <h3><?php echo htmlspecialchars($rService['name']); ?></h3>
          <p class="service-card__desc"><?php echo htmlspecialchars(substr($rService['description'], 0, strrpos(substr($rService['description'], 0, 100), ' '))); ?>.</p>
          <ul>
            <?php foreach ($keywords as $kw): ?>
            <li><?php echo htmlspecialchars($kw); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/services/<?php echo htmlspecialchars($rService['slug']); ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-battery" aria-label="Schedule battery replacement">
  <div class="container">
    <h2>Is your battery ready for <span class="text-accent">Manchester's next cold snap</span>?</h2>
    <p class="answer-block">Walk-ins welcome Monday through Friday, 8 AM to 5 PM at 518 Silver St in Manchester, NH. Free load testing takes 10 minutes — no appointment needed. If you do need a replacement, most installations are done within 30-45 minutes so you are back on the road the same visit.</p>
    <div class="btn-group">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" class="btn btn-accent btn-lg"><i data-lucide="phone" style="width:18px;height:18px;"></i> Call Now</a>
      <?php endif; ?>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Get Free Estimate</a>
    </div>
  </div>
</section>

<!-- Last Updated -->
<div class="last-updated">
  <p>Last Updated: <?php echo date('F Y'); ?></p>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ────────────────────────────────────────────────
$pageTitle       = "Transmission Leak Inspection Manchester NH | Jon's Shafts & Stuff, LLC";
$pageDescription = "Expert transmission leak inspection in Manchester, NH. Jon's Shafts & Stuff diagnoses fluid leaks fast at 518 Silver St — 33 years keeping Manchester vehicles on the road safely.";
$canonicalUrl    = $siteUrl . '/services/transmission-leak-inspection/';
$currentPage     = 'services';
$heroImagePreload = 'https://images.unsplash.com/photo-1558618666-fcd25c85f82e?w=1920&q=80';
$cssVersion      = '2';

// ─── Service Data ──────────────────────────────────────────────
$thisService = findService('Transmission Leak Inspection');

// ─── FAQ Data ──────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'What does a transmission leak inspection cost in Manchester, NH?',
        'answer'   => 'A transmission leak inspection at our 518 Silver St shop typically runs between $75 and $150 depending on the vehicle. This covers a full visual and dye-test diagnosis to pinpoint the exact leak source. Complex cases involving internal seals may require additional diagnostic time.',
    ],
    [
        'question' => 'How long does a transmission leak inspection take?',
        'answer'   => 'Most inspections take 30 to 60 minutes. If we use UV dye tracing to locate a hard-to-find leak, the vehicle may need to be driven briefly and re-examined, which can extend the process to about 90 minutes. We keep you informed throughout.',
    ],
    [
        'question' => 'What color is transmission fluid when it leaks?',
        'answer'   => 'Fresh transmission fluid is bright red or pink. As it ages and degrades, it turns darker — brownish-red to dark brown. If you see a reddish or brown puddle beneath the center of your vehicle, that typically indicates a transmission leak rather than an engine oil or coolant issue.',
    ],
    [
        'question' => 'Can I drive with a transmission leak?',
        'answer'   => 'Short distances at low speeds may be possible if the leak is minor and fluid levels remain adequate. However, driving with low transmission fluid causes overheating, accelerated wear, and potential complete transmission failure. Manchester drivers on I-93 especially risk rapid fluid loss at highway speeds.',
    ],
    [
        'question' => 'What causes transmission fluid leaks?',
        'answer'   => 'Common causes include degraded pan gaskets, worn axle seals, cracked fluid lines, and damaged torque converter seals. New Hampshire road salt accelerates corrosion on fluid lines and fittings. Extreme temperature swings between Manchester winters and summers also stress rubber seals and O-rings over time.',
    ],
    [
        'question' => 'Does Jon\'s Shafts & Stuff repair the leak after inspection?',
        'answer'   => 'Yes. Once we identify the source, we provide a detailed repair estimate before any work begins. Common fixes like pan gasket replacement or fluid line repair can often be completed the same day. More involved repairs like torque converter seal replacement are typically finished within 24 to 48 hours.',
    ],
];

// ─── Schema ────────────────────────────────────────────────────
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Services', 'url' => $siteUrl . '/services/'],
    ['name' => 'Transmission Leak Inspection', 'url' => ''],
]);

$serviceSchema = generateServiceSchema($thisService);
$faqSchema     = generateFAQSchema($faqs);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $breadcrumbSchema; ?>
<?php echo $serviceSchema; ?>
<?php echo $faqSchema; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══════════════════════════════════════════════════════════
     TRANSMISSION LEAK INSPECTION — Jon's Shafts & Stuff, LLC
     Solo Service Page | Standard Tier | Page One Insights
     ═══════════════════════════════════════════════════════════ -->

<style>
/* ═══ Transmission Leak Inspection — Page-Specific Styles ═══ */

/* ─── Hero ─── */
.hero--leak-inspection {
  min-height: 55vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background-image: url('https://images.unsplash.com/photo-1558618666-fcd25c85f82e?w=1920&q=80');
  background-size: cover;
  background-position: center;
  position: relative;
  overflow: hidden;
  padding: calc(var(--nav-height) + var(--space-12)) var(--space-4) var(--space-12);
}
.hero--leak-inspection::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    170deg,
    rgba(74, 106, 140, 0.94) 0%,
    rgba(54, 81, 107, 0.90) 50%,
    rgba(212, 155, 42, 0.18) 100%
  );
  z-index: 1;
}
.hero--leak-inspection::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.3;
  pointer-events: none;
  z-index: 1;
}
.hero--leak-inspection .container {
  position: relative;
  z-index: 2;
}
.hero--leak-inspection h1 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.hero--leak-inspection .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  max-width: 700px;
  margin: 0 auto var(--space-6);
  font-size: var(--fs-body);
  line-height: 1.75;
}
.hero--leak-inspection .breadcrumb {
  display: flex;
  justify-content: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: rgba(255, 255, 255, 0.6);
  margin-bottom: var(--space-6);
}
.hero--leak-inspection .breadcrumb a {
  color: var(--color-accent);
  transition: opacity var(--transition-fast);
}
.hero--leak-inspection .breadcrumb a:hover {
  opacity: 0.8;
}
.hero--leak-inspection .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.4);
}
.hero--leak-inspection .hero-cta-group {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
  margin-top: var(--space-6);
}

/* ─── SVG Peak Divider ─── */
.divider-peak {
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 100%;
  z-index: 3;
  line-height: 0;
}
.divider-peak svg {
  display: block;
  width: 100%;
  height: 70px;
}
.divider-peak--inverse {
  position: relative;
  margin-top: -1px;
  z-index: 3;
  line-height: 0;
}
.divider-peak--inverse svg {
  display: block;
  width: 100%;
  height: 50px;
}

/* ─── Problem Statement / Bento Cards ─── */
.section--signs {
  background: var(--color-bg);
  position: relative;
  overflow: hidden;
  padding: var(--space-16) 0 var(--space-12);
}
.section--signs .stat-watermark {
  position: absolute;
  top: var(--space-4);
  right: var(--space-4);
  font-family: var(--font-heading);
  font-size: clamp(6rem, 12vw, 10rem);
  font-weight: 900;
  color: rgba(var(--color-primary-rgb), 0.03);
  line-height: 1;
  pointer-events: none;
  z-index: 0;
}
.bento-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-5);
  margin-top: var(--space-8);
}
@media (max-width: 768px) {
  .bento-grid {
    grid-template-columns: 1fr;
  }
}
.bento-card {
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  position: relative;
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.bento-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-lg);
}
.bento-card__icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb, 6, 182, 212), 0.12);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-4);
  color: var(--color-accent);
}
.bento-card__icon i,
.bento-card__icon svg {
  width: 24px;
  height: 24px;
}
.bento-card h3 {
  font-family: var(--font-heading);
  color: var(--color-primary);
  font-size: 1.15rem;
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.bento-card p {
  color: var(--color-text);
  font-size: 0.95rem;
  line-height: 1.65;
}

/* ─── Service Detail Split ─── */
.section--detail {
  background: var(--color-bg-alt);
  position: relative;
  overflow: hidden;
}
.detail-grid {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: var(--space-8);
  align-items: start;
}
@media (max-width: 900px) {
  .detail-grid {
    grid-template-columns: 1fr;
  }
}
.detail-content h2 {
  text-wrap: balance;
}
.detail-content .prose {
  max-width: 65ch;
}
.detail-content .prose p {
  margin-bottom: var(--space-4);
  line-height: 1.75;
}
.detail-image-stack {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  position: relative;
}
.detail-image-stack img {
  border-radius: var(--radius-lg);
  width: 100%;
  height: auto;
  object-fit: cover;
}
.detail-image-stack .img-primary {
  aspect-ratio: 4 / 3;
}
.detail-image-stack .img-secondary {
  aspect-ratio: 16 / 9;
  opacity: 0.92;
}
.detail-image-stack .floating-accent {
  position: absolute;
  bottom: -20px;
  left: -20px;
  width: 140px;
  height: 140px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb, 6, 182, 212), 0.06);
  pointer-events: none;
  z-index: 0;
}

/* ─── Process Timeline ─── */
.section--process {
  background: var(--color-bg);
  position: relative;
  overflow: hidden;
}
.process-timeline {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-8);
  position: relative;
}
.process-timeline::before {
  content: '';
  position: absolute;
  top: 36px;
  left: calc(12.5% + var(--space-2));
  right: calc(12.5% + var(--space-2));
  height: 3px;
  background: linear-gradient(90deg, var(--color-accent), rgba(var(--color-primary-rgb), 0.2));
  z-index: 0;
}
@media (max-width: 900px) {
  .process-timeline {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .process-timeline::before {
    top: 0;
    bottom: 0;
    left: 35px;
    right: auto;
    width: 3px;
    height: auto;
    background: linear-gradient(180deg, var(--color-accent), rgba(var(--color-primary-rgb), 0.2));
  }
}
.process-step {
  text-align: center;
  position: relative;
  z-index: 1;
}
@media (max-width: 900px) {
  .process-step {
    text-align: left;
    padding-left: calc(70px + var(--space-4));
  }
}
.process-step__number {
  width: 72px;
  height: 72px;
  border-radius: 50%;
  background: var(--color-primary);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: 1.6rem;
  font-weight: 800;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-4);
  box-shadow: var(--shadow-md);
  border: 4px solid var(--color-bg);
  position: relative;
  z-index: 2;
  transition: background var(--transition-base), transform var(--transition-base);
}
@media (max-width: 900px) {
  .process-step__number {
    position: absolute;
    left: 0;
    top: 0;
    margin: 0;
  }
}
.process-step:hover .process-step__number {
  background: var(--color-accent);
  transform: scale(1.08);
}
.process-step h3 {
  font-family: var(--font-heading);
  color: var(--color-primary);
  font-size: 1.1rem;
  margin-bottom: var(--space-2);
}
.process-step p {
  font-size: 0.92rem;
  color: var(--color-text);
  line-height: 1.6;
  max-width: 240px;
  margin: 0 auto;
}
@media (max-width: 900px) {
  .process-step p {
    max-width: none;
    margin: 0;
  }
}

/* ─── Why Act Fast ─── */
.section--urgency {
  background: var(--color-primary);
  color: var(--color-white);
  position: relative;
  overflow: hidden;
}
.section--urgency::before {
  content: '';
  position: absolute;
  top: -40%;
  right: -10%;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: rgba(212, 155, 42, 0.07);
  pointer-events: none;
}
.section--urgency .container {
  position: relative;
  z-index: 1;
}
.section--urgency h2 {
  color: var(--color-white);
  text-wrap: balance;
}
.section--urgency .answer-block {
  color: rgba(255, 255, 255, 0.85);
  max-width: 700px;
}
.risk-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  margin-top: var(--space-8);
}
@media (max-width: 768px) {
  .risk-grid {
    grid-template-columns: 1fr;
  }
}
.risk-card {
  background: rgba(255, 255, 255, 0.06);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  border: 1px solid rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(4px);
  text-align: center;
  transition: transform var(--transition-base), background var(--transition-base);
}
.risk-card:hover {
  transform: translateY(-3px);
  background: rgba(255, 255, 255, 0.1);
}
.risk-card__icon {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  background: rgba(212, 155, 42, 0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-4);
  color: var(--color-accent);
}
.risk-card__icon i,
.risk-card__icon svg {
  width: 26px;
  height: 26px;
}
.risk-card h3 {
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: 1.1rem;
  margin-bottom: var(--space-2);
}
.risk-card p {
  color: rgba(255, 255, 255, 0.78);
  font-size: 0.92rem;
  line-height: 1.6;
}

/* ─── FAQ Section ─── */
.section--faq {
  background: var(--color-bg-alt);
  position: relative;
}
.faq-list {
  max-width: 760px;
  margin: var(--space-8) auto 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.faq-item {
  border-radius: var(--radius-md);
  overflow: hidden;
  border: 1px solid var(--color-border);
  transition: box-shadow var(--transition-base);
}
.faq-item:hover {
  box-shadow: var(--shadow-sm);
}
.faq-item[open] {
  box-shadow: var(--shadow-md);
}
.faq-item summary {
  padding: var(--space-4) var(--space-5);
  font-family: var(--font-heading);
  font-weight: 700;
  color: var(--color-primary);
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
  list-style: none;
  background: var(--color-bg);
  transition: background var(--transition-fast);
}
.faq-item summary::-webkit-details-marker { display: none; }
.faq-item summary::after {
  content: '+';
  font-size: 1.4rem;
  color: var(--color-accent);
  font-weight: 800;
  flex-shrink: 0;
  margin-left: var(--space-3);
  transition: transform var(--transition-base);
}
.faq-item[open] summary::after {
  content: '\2212';
  transform: rotate(180deg);
}
.faq-item[open] summary {
  background: rgba(var(--color-accent-rgb, 6, 182, 212), 0.05);
  border-bottom: 1px solid var(--color-border);
}
.faq-answer {
  padding: var(--space-4) var(--space-5);
  font-size: 0.95rem;
  line-height: 1.7;
  color: var(--color-text);
  background: var(--color-bg);
}

/* ─── Related Services ─── */
.section--related {
  background: var(--color-bg);
}

/* ─── CTA Banner ─── */
.cta--leak {
  background: linear-gradient(135deg, var(--color-primary) 0%, rgba(var(--color-primary-rgb), 0.92) 100%);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.cta--leak::before {
  content: '';
  position: absolute;
  bottom: -30%;
  left: -10%;
  width: 450px;
  height: 450px;
  border-radius: 50%;
  background: rgba(212, 155, 42, 0.08);
  pointer-events: none;
}
.cta--leak .container {
  position: relative;
  z-index: 1;
}
.cta--leak h2 {
  color: var(--color-white);
  text-wrap: balance;
}
.cta--leak .answer-block {
  color: rgba(255, 255, 255, 0.85);
  max-width: 640px;
  margin: 0 auto var(--space-6);
}
.cta--leak .btn-group {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* ─── Last Updated ─── */
.last-updated {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  text-align: center;
  padding: var(--space-4) 0;
}
</style>

<!-- ═══ Hero ═══ -->
<section class="hero hero--leak-inspection">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Transmission Leak Inspection</span>
    </nav>
    <h1><span class="text-accent">Transmission Leak Inspection</span> in Manchester, NH</h1>
    <p class="hero-answer"><?php echo htmlspecialchars($siteName); ?> is a licensed New Hampshire auto repair shop at 518 Silver St in Manchester with 33 years of drivetrain experience. We pinpoint transmission fluid leaks using visual inspection, pressure testing, and UV dye tracing to stop damage before it spreads to internal components.</p>
    <div class="hero-cta-group">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" class="btn btn-accent btn-lg"><i data-lucide="phone" style="width:18px;height:18px;"></i> Call Now</a>
      <?php endif; ?>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Schedule Inspection</a>
    </div>
  </div>
  <div class="divider-peak">
    <svg viewBox="0 0 1440 70" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,70 L0,70 L720,0 L1440,70 Z"/>
    </svg>
  </div>
</section>

<!-- ═══ Problem Statement — Signs of a Leak ═══ -->
<section class="section section--signs" aria-label="Signs of transmission leak">
  <span class="stat-watermark" aria-hidden="true">LEAK</span>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Warning Signs</span>
      <h2>What Are the <span class="text-accent">Telltale Signs</span> of a Transmission Fluid Leak?</h2>
      <p class="answer-block">Red or brown fluid pooling beneath your vehicle, delayed gear engagement, a burning smell near the engine bay, or the transmission temperature warning light are the four most common indicators Manchester drivers notice. If you spot any of these after your commute along I-93 or Route 101, bring the vehicle in before minor seepage becomes a major rebuild.</p>
    </div>

    <div class="bento-grid">
      <article class="bento-card card-tint-1 reveal-up reveal-delay-1">
        <div class="bento-card__icon"><i data-lucide="droplets"></i></div>
        <h3>Fluid Puddles Under the Vehicle</h3>
        <p>Reddish-pink or dark brown spots in your driveway or parking spot at work signal active transmission fluid loss. Fresh transmission fluid is bright red — darker color means the fluid has degraded and the leak may have persisted for weeks.</p>
      </article>
      <article class="bento-card card-tint-2 reveal-up reveal-delay-2">
        <div class="bento-card__icon"><i data-lucide="gauge"></i></div>
        <h3>Delayed or Rough Shifting</h3>
        <p>Low fluid causes sluggish gear changes, RPM flares between shifts, or momentary hesitation when pulling onto Elm Street from a side road. These symptoms worsen in Manchester's cold winter mornings when fluid viscosity is already higher.</p>
      </article>
      <article class="bento-card card-tint-3 reveal-up reveal-delay-3">
        <div class="bento-card__icon"><i data-lucide="flame"></i></div>
        <h3>Burning Smell Near the Engine</h3>
        <p>Transmission fluid dripping onto hot exhaust components produces a sharp, sweet-burning odor. This is especially noticeable after highway driving on I-93 or I-293 when exhaust temperatures peak. Do not ignore this — it means fluid is actively escaping.</p>
      </article>
      <article class="bento-card card-tint-1 reveal-left reveal-delay-4">
        <div class="bento-card__icon"><i data-lucide="alert-triangle"></i></div>
        <h3>Warning Light or Overheating</h3>
        <p>The transmission temperature light or check-engine code indicates critically low fluid or overheating internals. Manchester's stop-and-go traffic on South Willow Street generates extra heat that accelerates damage when fluid levels drop.</p>
      </article>
    </div>
  </div>
</section>

<!-- SVG Peak Divider (inverted) -->
<div class="divider-peak--inverse">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" fill="var(--color-bg)">
    <path d="M0,0 L720,50 L1440,0 L1440,0 L0,0 Z"/>
  </svg>
</div>

<!-- ═══ Service Detail ═══ -->
<section class="section section--detail" aria-label="What inspection includes">
  <div class="container">
    <div class="detail-grid">
      <div class="detail-content reveal-up">
        <span class="eyebrow-label">Our Process</span>
        <h2>What Does a Transmission Leak Inspection <span class="text-accent">Include</span>?</h2>
        <p class="answer-block">Our transmission leak inspection covers a full underbody visual examination, fluid level and condition analysis, pressure testing of cooler lines and connections, and UV dye tracing when the leak source is not immediately visible. The goal is to give you a precise diagnosis — not a guess — so repairs target the actual problem.</p>

        <div class="prose">
          <p>Every inspection at our 518 Silver St shop in Manchester begins with checking your transmission fluid level and condition on the dipstick or through the fill port. Fluid that is dark, gritty, or smells burnt tells us the leak has been active long enough to compromise lubrication. We document fluid color and consistency as part of your service record.</p>

          <p>Next, we lift the vehicle and perform a systematic visual inspection of every transmission leak point: the pan gasket, axle shaft seals, output shaft seal, cooler lines, and the torque converter area. New Hampshire road salt is particularly aggressive on aluminum transmission pans and steel cooler lines — corrosion-related failures are something we see regularly from vehicles driven through Manchester winters on treated roads along Route 101 and I-93.</p>

          <p>For leaks that are not visually obvious, we use UV fluorescent dye injected into the transmission fluid. After a short test drive through Manchester, we re-inspect under ultraviolet light. The dye traces the exact path of the leak and fluoresces brightly at the source, eliminating guesswork on hard-to-reach seals behind the torque converter or deep within the bell housing.</p>

          <p>Once identified, you receive a written diagnosis with the leak source, recommended repair, parts needed, and an upfront cost estimate. We explain what we found, show you the evidence, and let you decide how to proceed. If you are searching for a transmission leak inspection near me in Manchester, our shop on Silver Street has been doing this work since <?php echo $yearEstablished; ?>.</p>
        </div>
      </div>

      <div class="detail-image-stack reveal-right">
        <img class="img-primary" src="https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?w=700&q=75" alt="Mechanic inspecting transmission components underneath a vehicle in Manchester NH" loading="lazy" width="700" height="525">
        <img class="img-secondary" src="https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?w=700&q=75" alt="Close-up of transmission fluid being checked during leak inspection" loading="lazy" width="700" height="394">
        <div class="floating-accent" aria-hidden="true"></div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ Process Timeline ═══ -->
<section class="section section--process" aria-label="Inspection process steps">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Step by Step</span>
      <h2>How Does a Transmission Leak Inspection <span class="text-accent">Work</span> at Our Manchester Shop?</h2>
      <p class="answer-block">Our four-step inspection process moves from fluid analysis to underbody examination, dye tracing if needed, and a detailed written diagnosis. Most inspections take 30 to 60 minutes, and you receive a clear repair estimate before we turn a single wrench.</p>
    </div>

    <div class="process-timeline">
      <div class="process-step reveal-up reveal-delay-1">
        <div class="process-step__number">1</div>
        <h3>Fluid Check</h3>
        <p>We check transmission fluid level, color, and smell. Dark or burnt fluid suggests the leak has been ongoing and internal wear may have started.</p>
      </div>
      <div class="process-step reveal-up reveal-delay-2">
        <div class="process-step__number">2</div>
        <h3>Visual Inspection</h3>
        <p>We lift the vehicle and examine every seal, gasket, cooler line, and connection point. Salt corrosion from Manchester roads is a common culprit we check first.</p>
      </div>
      <div class="process-step reveal-up reveal-delay-3">
        <div class="process-step__number">3</div>
        <h3>UV Dye Trace</h3>
        <p>For hidden leaks, fluorescent dye is added to the fluid. After a short drive, UV light reveals the exact leak path and source with precision.</p>
      </div>
      <div class="process-step reveal-up reveal-delay-4">
        <div class="process-step__number">4</div>
        <h3>Written Diagnosis</h3>
        <p>You get a detailed report: leak source, photos, recommended repair, parts list, and upfront pricing. No surprises, no pressure — just clear information.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ Why Act Fast ═══ -->
<section class="section section--urgency" aria-label="Why address leaks quickly">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label" style="color:var(--color-accent);">Act Now</span>
      <h2>Why Does a Transmission Leak Need <span class="text-accent">Immediate Attention</span>?</h2>
      <p class="answer-block">A $100-$200 leak inspection and $150-$400 gasket or seal repair today prevents a $2,500-$5,000 transmission rebuild down the road. Every mile driven with low fluid accelerates wear on clutch packs, bands, and planetary gears. Manchester's temperature extremes make this worse — NH winters contract seals and summers overheat low fluid.</p>
    </div>

    <div class="risk-grid">
      <article class="risk-card reveal-up reveal-delay-1">
        <div class="risk-card__icon"><i data-lucide="thermometer"></i></div>
        <h3>Overheating Damage</h3>
        <p>Low fluid means less cooling. Transmission temperatures climb above 250&deg;F and fluid breaks down exponentially — every 20&deg;F above normal cuts fluid life in half. Manchester summer heat compounds the problem.</p>
      </article>
      <article class="risk-card reveal-up reveal-delay-2">
        <div class="risk-card__icon"><i data-lucide="dollar-sign"></i></div>
        <h3>Repair Cost Escalation</h3>
        <p>A pan gasket replacement runs $150-$400. A full transmission rebuild starts at $2,500 and can exceed $5,000 with torque converter replacement. Catching the leak early at our Manchester shop is the most cost-effective move.</p>
      </article>
      <article class="risk-card reveal-scale reveal-delay-3">
        <div class="risk-card__icon"><i data-lucide="alert-octagon"></i></div>
        <h3>Roadside Breakdown Risk</h3>
        <p>Complete fluid loss causes sudden transmission failure — no gears, no movement, often on I-93 during rush hour or Route 101 in the middle of nowhere. A tow plus emergency repair always costs more than a planned inspection.</p>
      </article>
    </div>
  </div>
</section>

<!-- ═══ FAQ ═══ -->
<section class="section section--faq" aria-label="Frequently asked questions about transmission leak inspection">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Common Questions</span>
      <h2>What Do Manchester Drivers <span class="text-accent">Ask</span> About Transmission Leaks?</h2>
      <p class="answer-block">We have answered thousands of transmission leak questions over <?php echo $yearsInBusiness; ?> years at our 518 Silver St location in Manchester. These are the six questions we hear most often from customers bringing in vehicles with suspected leaks.</p>
    </div>

    <div class="faq-list">
      <?php foreach ($faqs as $faq): ?>
      <details class="faq-item reveal-up">
        <summary><?php echo htmlspecialchars($faq['question']); ?></summary>
        <div class="faq-answer"><?php echo htmlspecialchars($faq['answer']); ?></div>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ Related Services ═══ -->
<section class="section section--related" aria-label="Other services you may need">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>What Other <span class="text-accent">Services</span> May You Need?</h2>
      <p class="answer-block">Transmission leaks often relate to broader drivetrain or maintenance needs. These three services from our Manchester shop complement a leak inspection and help keep your vehicle running reliably through every New Hampshire season.</p>
    </div>

    <div class="services-grid" style="grid-template-columns:repeat(3,1fr);">
      <?php
      $relatedNames = ['Transmission Repair', 'Driveshaft Repair & Replacement', 'Routine Automotive Maintenance'];
      $relatedIcons = ['settings', 'rotate-cw', 'wrench'];
      $relatedImages = [
          'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?w=600&q=75',
          'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&q=75',
          'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?w=600&q=75',
      ];
      $relatedBullets = [
          ['Automatic & manual rebuilds', 'Clutch pack replacement', 'Fluid flush & refill'],
          ['Vibration diagnostics', 'U-joint & CV joint repair', 'Balanced shaft replacement'],
          ['Scheduled fluid checks', 'Filter replacements', 'Multi-point inspections'],
      ];
      $tints = ['card-tint-1', 'card-tint-2', 'card-tint-3'];
      $delays = ['reveal-delay-1', 'reveal-delay-2', 'reveal-delay-3'];

      foreach ($relatedNames as $idx => $name):
        $svc = findService($name);
        if (!$svc) continue;
      ?>
      <article class="service-card-with-image <?php echo $tints[$idx]; ?> reveal-up <?php echo $delays[$idx]; ?>">
        <div class="service-card__image">
          <img src="<?php echo htmlspecialchars($relatedImages[$idx]); ?>" alt="<?php echo htmlspecialchars($svc['name']); ?> in Manchester NH" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="<?php echo $relatedIcons[$idx]; ?>"></i></div>
          <h3><?php echo htmlspecialchars($svc['name']); ?></h3>
          <p class="service-card__desc"><?php echo htmlspecialchars(substr($svc['description'], 0, strrpos(substr($svc['description'], 0, 100), ' '))); ?>.</p>
          <ul>
            <?php foreach ($relatedBullets[$idx] as $bullet): ?>
            <li><?php echo htmlspecialchars($bullet); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ CTA ═══ -->
<section class="section cta--leak" aria-label="Schedule your transmission leak inspection">
  <div class="container reveal-up">
    <h2>Ready to Get Your <span class="text-accent">Transmission Leak Diagnosed</span> in Manchester?</h2>
    <p class="answer-block">Walk into our 518 Silver St shop Monday through Friday, 8 AM to 5 PM, or request an appointment online. Most leak inspections are completed the same day, and we provide a written estimate before any repair work begins. <?php echo htmlspecialchars($siteName); ?> has served Manchester drivers since <?php echo $yearEstablished; ?>.</p>
    <div class="btn-group">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" class="btn btn-accent btn-lg"><i data-lucide="phone" style="width:18px;height:18px;"></i> Call Now</a>
      <?php endif; ?>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Get Free Estimate</a>
    </div>
  </div>
</section>

<!-- Last Updated -->
<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

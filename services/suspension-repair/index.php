<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

// ─── Page Setup ────────────────────────────────────────────────
$pageTitle       = "Suspension Repair Manchester NH | Shocks, Struts & Alignment | Jon's Shafts & Stuff, LLC";
$pageDescription = "Suspension repair in Manchester, NH — shocks, struts, springs, ball joints, control arms, and wheel alignment. 33 years serving Queen City drivers at 518 Silver St.";
$canonicalUrl    = $siteUrl . '/services/suspension-repair/';
$currentPage     = 'services';
$heroImagePreload = 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=1920&q=80';
$cssVersion      = '2';

// ─── Schema ────────────────────────────────────────────────────
$suspensionService = findService('Suspension Repair');

$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Services', 'url' => $siteUrl . '/services/'],
    ['name' => 'Suspension Repair', 'url' => ''],
]);

$serviceSchema = generateServiceSchema($suspensionService);

$faqs = [
    [
        'question' => 'How do I know if my car needs suspension repair?',
        'answer'   => 'Common signs include a rough or bouncy ride, the vehicle pulling to one side, uneven tire wear, nose-diving when braking, and clunking or squeaking noises over bumps. If you notice any of these while driving around Manchester, bring your vehicle to 518 Silver St for a free inspection.',
    ],
    [
        'question' => 'How much does suspension repair cost in Manchester, NH?',
        'answer'   => 'Suspension repair costs depend on the component and vehicle. Shock or strut replacement typically runs $200-$600 per pair. Ball joints cost $150-$350 per side. A full suspension overhaul with multiple components can reach $1,000-$1,500. We provide a written estimate before starting any work.',
    ],
    [
        'question' => 'How long does suspension repair take?',
        'answer'   => 'Most single-component repairs like shock or strut replacement take 2-4 hours. Ball joint or control arm replacement takes 3-5 hours. A comprehensive suspension rebuild may require a full day. We aim for same-day completion on most standard repairs.',
    ],
    [
        'question' => 'Can I drive with worn shocks or struts?',
        'answer'   => 'Technically yes, but it is unsafe and gets worse over time. Worn shocks increase braking distances by up to 20%, reduce tire contact with the road, and accelerate tire wear. Manchester roads — especially after frost heave season — punish worn suspension components hard.',
    ],
    [
        'question' => 'Do you perform wheel alignment with suspension repair?',
        'answer'   => 'Yes. Any time we replace steering or suspension components like tie rods, control arms, or struts, we include a wheel alignment check. Proper alignment protects your new parts and prevents premature tire wear on Manchester streets.',
    ],
    [
        'question' => 'What brands of suspension parts do you install?',
        'answer'   => 'We install Monroe, KYB, Moog, and other OEM-equivalent brands depending on your vehicle make and model. We stock common sizes for popular vehicles and can source specialty parts within 1-2 business days for most applications.',
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
     SUSPENSION REPAIR — Jon's Shafts & Stuff, LLC
     Solo Service Page | Standard Tier | Page One Insights
     ═══════════════════════════════════════════════════════════ -->

<style>
/* ═══ Suspension Repair — Page-Specific Styles ═══ */

/* ── TECHNIQUE 1: Layered Hero with gradient overlay + noise texture ── */
.hero--suspension {
  min-height: 55vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background-image: url('https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=1920&q=80');
  background-size: cover;
  background-position: center 40%;
  position: relative;
  overflow: hidden;
  padding: calc(var(--nav-height) + var(--space-12)) var(--space-4) var(--space-12);
}
.hero--suspension::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    175deg,
    rgba(26, 43, 60, 0.94) 0%,
    rgba(15, 26, 39, 0.90) 50%,
    rgba(6, 182, 212, 0.25) 100%
  );
  z-index: 1;
}
.hero--suspension::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.35;
  pointer-events: none;
  z-index: 1;
}
.hero--suspension .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.hero--suspension h1 {
  color: var(--color-white);
  font-size: var(--fs-h1);
  font-family: var(--font-heading);
  font-weight: 900;
  line-height: 1.1;
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.hero--suspension .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  max-width: 700px;
  margin: 0 auto var(--space-6);
  font-size: var(--fs-body);
  line-height: 1.75;
}
.hero--suspension .breadcrumb {
  display: flex;
  justify-content: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: rgba(255, 255, 255, 0.6);
  margin-bottom: var(--space-6);
}
.hero--suspension .breadcrumb a {
  color: var(--color-accent);
  transition: color var(--transition-fast);
}
.hero--suspension .breadcrumb a:hover {
  color: var(--color-white);
}
.hero--suspension .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.4);
}
.hero--suspension .hero-cta-group {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
  margin-top: var(--space-6);
}

/* ── TECHNIQUE 2: SVG Section Divider — Arc/Curved ── */
.divider-arc {
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 100%;
  z-index: 3;
  line-height: 0;
}
.divider-arc svg {
  display: block;
  width: 100%;
  height: 70px;
}
.divider-arc--inverted {
  position: relative;
  margin-top: -1px;
  line-height: 0;
  z-index: 2;
}
.divider-arc--inverted svg {
  display: block;
  width: 100%;
  height: 50px;
}

/* ── TECHNIQUE 3: Tinted icon cards with hover lift ── */
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
.signs-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
}
@media (max-width: 1024px) {
  .signs-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  .signs-grid {
    grid-template-columns: 1fr;
  }
}
.sign-card {
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  text-align: center;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
  overflow: hidden;
}
.sign-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
}
.sign-card__icon {
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
.sign-card__icon i,
.sign-card__icon svg {
  width: 28px;
  height: 28px;
}
.sign-card h3 {
  font-family: var(--font-heading);
  font-size: var(--fs-h4);
  color: var(--color-primary);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.sign-card p {
  font-size: var(--fs-sm);
  line-height: 1.65;
  color: var(--color-gray-dark);
}

/* Watermark numbers on sign cards */
.sign-card::before {
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
.detail-content {
  max-width: var(--content-width);
  margin: 0 auto;
}
.detail-content p {
  margin-bottom: var(--space-6);
  line-height: 1.75;
  color: var(--color-gray-dark);
}
.detail-content strong {
  color: var(--color-primary);
}
.component-list {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-3) var(--space-8);
  list-style: none;
  margin: var(--space-6) 0 var(--space-8);
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
}
@media (max-width: 600px) {
  .component-list {
    grid-template-columns: 1fr;
  }
}
.component-list li {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  font-size: var(--fs-body);
  color: var(--color-gray-dark);
}
.component-list li i,
.component-list li svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
}

/* Floating accent shape */
.floating-spring {
  position: absolute;
  top: 10%;
  right: 3%;
  width: 140px;
  height: 140px;
  border: 3px solid rgba(var(--color-accent-rgb), 0.06);
  border-radius: 50%;
  pointer-events: none;
  z-index: 0;
}
.floating-spring::after {
  content: '';
  position: absolute;
  top: 20px;
  left: 20px;
  right: 20px;
  bottom: 20px;
  border: 2px dashed rgba(var(--color-accent-rgb), 0.04);
  border-radius: 50%;
}

/* ── TECHNIQUE 4: Process timeline with numbered steps ── */
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
.cta-suspension {
  background: var(--color-primary);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.cta-suspension::before {
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
.cta-suspension .container {
  position: relative;
  z-index: 1;
  text-align: center;
}
.cta-suspension h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.cta-suspension .answer-block {
  color: rgba(255, 255, 255, 0.85);
  max-width: 640px;
  margin: 0 auto var(--space-6);
  line-height: 1.75;
}
.cta-suspension .btn-group {
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

/* ── SVG divider — Slant for cost section ── */
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
</style>

<!-- Hero -->
<section class="hero hero--suspension">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Suspension Repair</span>
    </nav>
    <h1><span class="text-accent">Suspension Repair</span> in Manchester, NH</h1>
    <p class="hero-answer"><?php echo htmlspecialchars($siteName); ?> is a licensed New Hampshire auto repair shop at 518 Silver St in Manchester, providing complete suspension repair since <?php echo $yearEstablished; ?>. We diagnose and fix shocks, struts, springs, ball joints, control arms, and tie rods for every make and model driving Queen City roads.</p>
    <div class="hero-cta-group">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" class="btn btn-accent btn-lg"><i data-lucide="phone" style="width:18px;height:18px;"></i> Call Now</a>
      <?php endif; ?>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Get Free Estimate</a>
    </div>
  </div>
  <div class="divider-arc">
    <svg viewBox="0 0 1440 70" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,70 C480,0 960,0 1440,70 L1440,70 L0,70 Z"/>
    </svg>
  </div>
</section>

<!-- Warning Signs -->
<section class="warning-signs" aria-label="Suspension warning signs">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Warning Signs</span>
      <h2>What are the <span class="text-accent">warning signs</span> your suspension needs repair in Manchester?</h2>
      <p class="answer-block">Manchester drivers deal with frost heaves on I-293, pothole-riddled stretches along Elm Street, and harsh winter road conditions that punish suspension components year-round. If your vehicle shows any of these four signs, your shocks, struts, or other suspension parts likely need professional attention at our 518 Silver St shop.</p>
    </div>

    <div class="signs-grid">
      <article class="sign-card card-tint-1 reveal-up reveal-delay-1" data-number="01">
        <div class="sign-card__icon"><i data-lucide="alert-triangle"></i></div>
        <h3>Rough or Bouncy Ride</h3>
        <p>Your vehicle bounces excessively after hitting bumps or dips. Worn shocks and struts lose their damping ability, especially after repeated impacts from Manchester's frost-damaged pavement.</p>
      </article>
      <article class="sign-card card-tint-2 reveal-left reveal-delay-2" data-number="02">
        <div class="sign-card__icon"><i data-lucide="compass"></i></div>
        <h3>Vehicle Pulls or Drifts</h3>
        <p>Your car drifts to one side during turns or on straightaways. Worn tie rods, ball joints, or misaligned wheels cause this — common after hitting deep potholes on Queen City roads.</p>
      </article>
      <article class="sign-card card-tint-3 reveal-right reveal-delay-3" data-number="03">
        <div class="sign-card__icon"><i data-lucide="circle-dot"></i></div>
        <h3>Uneven Tire Wear</h3>
        <p>One or more tires wear faster on the inside or outside edge. Failed suspension components throw your wheel alignment off, costing you tire life and reducing traction on wet NH roads.</p>
      </article>
      <article class="sign-card card-tint-1 reveal-up reveal-delay-4" data-number="04">
        <div class="sign-card__icon"><i data-lucide="volume-2"></i></div>
        <h3>Clunking Over Bumps</h3>
        <p>Metallic clunking or squeaking when you drive over bumps, railroad crossings, or uneven surfaces. Worn bushings, ball joints, or sway bar links create these noises as parts lose their cushioning.</p>
      </article>
    </div>
  </div>
</section>

<!-- SVG Divider -->
<div class="divider-slant">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" fill="var(--color-bg-alt)">
    <path d="M0,0 L1440,55 L1440,55 L0,55 Z"/>
  </svg>
</div>

<!-- Service Detail -->
<section class="service-detail" aria-label="Suspension repair service details">
  <div class="floating-spring" aria-hidden="true"></div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What We Fix</span>
      <h2>What does <span class="text-accent">suspension repair</span> include at our Manchester shop?</h2>
      <p class="answer-block">Our suspension repair service at 518 Silver St covers every component between your tires and your vehicle frame. We inspect, diagnose, and replace worn parts using OEM-equivalent components from Monroe, KYB, and Moog — backed by <?php echo $yearsInBusiness; ?> years of drivetrain and suspension experience in Manchester, NH.</p>
    </div>

    <div class="detail-content reveal-up">
      <p>Your suspension system absorbs the impact of every pothole, frost heave, and road imperfection between your tires and the cabin. In Manchester, where I-293 ramp transitions and Elm Street's surface patches create constant jolts, suspension components wear faster than the national average. <?php echo htmlspecialchars($siteName); ?> handles the full spectrum of suspension repair near me in Manchester — from straightforward shock absorber swaps to complex multi-component rebuilds.</p>

      <p>We service all major suspension components across domestic, import, and light truck platforms:</p>

      <ul class="component-list">
        <li><i data-lucide="check-circle"></i> Shock absorbers</li>
        <li><i data-lucide="check-circle"></i> Strut assemblies</li>
        <li><i data-lucide="check-circle"></i> Coil springs</li>
        <li><i data-lucide="check-circle"></i> Ball joints (upper & lower)</li>
        <li><i data-lucide="check-circle"></i> Control arms & bushings</li>
        <li><i data-lucide="check-circle"></i> Tie rod ends (inner & outer)</li>
        <li><i data-lucide="check-circle"></i> Sway bar links & bushings</li>
        <li><i data-lucide="check-circle"></i> Wheel alignment</li>
      </ul>

      <p>Every suspension repair starts with a hands-on inspection — not just a visual check. We load-test components, measure ride height, and check alignment angles to identify the root cause before replacing parts. This approach prevents the common mistake of swapping shocks when the real problem is a collapsed spring or worn control arm bushing, saving Manchester drivers money and return trips.</p>

      <p><strong>Alignment included:</strong> Any time we replace a steering-linked or geometry-altering component — tie rods, control arms, struts — we perform a wheel alignment check as part of the repair. Proper alignment protects your new parts and your tires from premature wear on Manchester's demanding road surfaces.</p>
    </div>
  </div>
</section>

<!-- SVG Divider -->
<div class="divider-arc--inverted">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" fill="var(--color-bg-alt)">
    <path d="M0,0 C480,50 960,50 1440,0 L1440,50 L0,50 Z"/>
  </svg>
</div>

<!-- Process -->
<section class="process-section" aria-label="Suspension repair process">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Our Process</span>
      <h2>How does <?php echo htmlspecialchars($siteName); ?> handle <span class="text-accent">suspension repair</span> in Manchester?</h2>
      <p class="answer-block">We follow a four-step process on every suspension job at our 518 Silver St shop. From initial inspection through final road test, every step is designed to identify the actual problem, fix it with the right parts, and verify the repair holds up on real Manchester roads.</p>
    </div>

    <div class="process-timeline">
      <div class="process-step reveal-up reveal-delay-1">
        <div class="process-step__number">1</div>
        <h3>Inspect & Diagnose</h3>
        <p>Hands-on inspection of shocks, struts, springs, ball joints, bushings, and tie rods. We load-test components and measure ride height to isolate the failure point.</p>
      </div>
      <div class="process-step reveal-up reveal-delay-2">
        <div class="process-step__number">2</div>
        <h3>Estimate & Approve</h3>
        <p>You receive a written estimate with part numbers, labor time, and total cost. No work starts until you approve. We explain what failed and why it matters for your daily Manchester commute.</p>
      </div>
      <div class="process-step reveal-up reveal-delay-3">
        <div class="process-step__number">3</div>
        <h3>Repair & Replace</h3>
        <p>We install OEM-equivalent components from Monroe, KYB, or Moog. Torque specs followed precisely. Alignment adjusted on any geometry-altering repair.</p>
      </div>
      <div class="process-step reveal-up reveal-delay-4">
        <div class="process-step__number">4</div>
        <h3>Road Test & Verify</h3>
        <p>Every suspension repair gets a road test on local Manchester streets — including speed bumps and turns — to confirm ride quality, alignment, and noise elimination before you pick up.</p>
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
<section class="cost-section" aria-label="Suspension repair cost">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label" style="color:var(--color-accent);">Pricing</span>
      <h2>How much does <span class="text-accent">suspension repair</span> cost in Manchester, NH?</h2>
      <p class="answer-block">Suspension repair costs range from $200 for a basic shock replacement to $1,500 for a comprehensive multi-component rebuild. The final price depends on which parts have failed, your vehicle type, and whether related components like alignment need correction. We always provide a written estimate before starting work at our 518 Silver St location.</p>
    </div>

    <div class="pricing-grid">
      <div class="pricing-card reveal-up reveal-delay-1">
        <div class="pricing-card__range">$200–$600</div>
        <div class="pricing-card__label">Shocks & Struts</div>
        <p class="pricing-card__desc">Per axle (pair). Includes labor, new mounts, and alignment check. Most common repair for Manchester vehicles with 60K+ miles.</p>
      </div>
      <div class="pricing-card reveal-up reveal-delay-2">
        <div class="pricing-card__range">$150–$450</div>
        <div class="pricing-card__label">Ball Joints & Tie Rods</div>
        <p class="pricing-card__desc">Per side. Includes alignment. Essential for vehicles showing pulling, wandering, or inner-edge tire wear from NH road damage.</p>
      </div>
      <div class="pricing-card reveal-up reveal-delay-3">
        <div class="pricing-card__range">$800–$1,500</div>
        <div class="pricing-card__label">Full Suspension Rebuild</div>
        <p class="pricing-card__desc">Multiple components replaced in one service. Includes struts, control arms, bushings, alignment. Best value for high-mileage vehicles in Manchester.</p>
      </div>
    </div>

    <p class="cost-note reveal-up">Prices are typical ranges for Manchester, NH as of <?php echo date('Y'); ?>. Your exact cost depends on vehicle make, model, and specific failed components. We provide a free written estimate before any work begins.</p>
  </div>
</section>

<!-- FAQ Section -->
<section class="faq-section" aria-label="Suspension repair FAQs">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">FAQs</span>
      <h2>What do Manchester drivers ask about <span class="text-accent">suspension repair</span>?</h2>
      <p class="answer-block">These are the questions we hear most often from customers at our 518 Silver St shop. If your question is not answered here, call us or request an estimate online — we respond within one business day.</p>
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
      <p class="answer-block">Suspension problems often overlap with brake wear, alignment issues, and drivetrain stress. These three services frequently pair with suspension repair at our Manchester shop.</p>
    </div>

    <div class="services-grid" style="grid-template-columns: repeat(3, 1fr);">
      <?php
      $relatedNames = ['Brake Repair & Service', 'Driveshaft Repair & Replacement', 'Exhaust System Repair'];
      $relatedImages = [
          'Brake Repair & Service'          => 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=600&q=75',
          'Driveshaft Repair & Replacement'  => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&q=75',
          'Exhaust System Repair'            => 'https://images.unsplash.com/photo-1615906655593-ad0386982a0f?w=600&q=75',
      ];
      $relatedIcons = [
          'Brake Repair & Service'          => 'disc',
          'Driveshaft Repair & Replacement'  => 'rotate-cw',
          'Exhaust System Repair'            => 'wind',
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
<section class="cta-suspension" aria-label="Schedule suspension repair">
  <div class="container">
    <h2>Ready to fix your <span class="text-accent">suspension</span> in Manchester?</h2>
    <p class="answer-block">Walk-ins welcome Monday through Friday, 8 AM to 5 PM at 518 Silver St in Manchester, NH. Or request a free estimate online — we respond within one business day with parts, labor, and total cost for your specific vehicle and suspension issue.</p>
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

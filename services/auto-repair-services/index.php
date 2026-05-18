<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ────────────────────────────────────────────────
$pageTitle       = "Auto Repair Services Manchester NH | Engine, Transmission & Maintenance | Jon's Shafts & Stuff, LLC";
$pageDescription = "Jon's Shafts & Stuff offers engine repair, transmission rebuilds, and routine maintenance in Manchester, NH. 33 years at 518 Silver St serving Bedford, Hooksett, and beyond.";
$canonicalUrl    = $siteUrl . '/services/auto-repair-services/';
$currentPage     = 'services';
$heroImagePreload = 'https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?w=1920&q=80';
$cssVersion      = '2';

// ─── FAQ Data ──────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much does engine repair cost in Manchester, NH?',
        'answer'   => 'Engine repair costs in Manchester range from $300 for minor fixes like sensor replacements to $3,500 or more for major work such as head gasket repair or timing chain replacement. At Jon\'s Shafts & Stuff, we provide a detailed written estimate before any work begins so you know exactly what to expect.',
    ],
    [
        'question' => 'What are the signs my transmission needs repair?',
        'answer'   => 'Common transmission warning signs include delayed or rough shifting, slipping between gears, a burning smell from under the hood, unusual grinding or whining noises, and transmission fluid leaks (usually a red or brown puddle under your vehicle). If you notice any of these in the Manchester area, bring your vehicle to 518 Silver St for a diagnostic check.',
    ],
    [
        'question' => 'How often should I get routine maintenance on my car in New Hampshire?',
        'answer'   => 'In New Hampshire, we recommend oil changes every 5,000 miles for conventional oil or 7,500 miles for synthetic. Full inspections should happen every 12 months or 12,000 miles. Winter driving conditions around Manchester, Bedford, and Hooksett accelerate wear on brakes, tires, and suspension, so seasonal check-ups before and after winter are especially important.',
    ],
    [
        'question' => 'Do you work on all vehicle makes and models at your Manchester shop?',
        'answer'   => 'Yes. Jon\'s Shafts & Stuff services all domestic and foreign makes and models at our 518 Silver St location in Manchester. From compact sedans to full-size trucks, our technicians have 33 years of hands-on experience diagnosing and repairing engines, transmissions, and drivetrain components across every major manufacturer.',
    ],
    [
        'question' => 'How long does a transmission rebuild take in Manchester?',
        'answer'   => 'A complete transmission rebuild at our Manchester shop typically takes 3 to 5 business days, depending on parts availability and the extent of internal damage. We source OEM and high-quality aftermarket parts quickly through our regional supplier network. Rush turnaround is sometimes available for customers commuting from Bedford, Goffstown, or Londonderry.',
    ],
    [
        'question' => 'What does routine automotive maintenance include?',
        'answer'   => 'Our routine maintenance service in Manchester covers oil and filter changes, tire rotation and pressure checks, brake inspection, fluid level top-offs (coolant, brake, power steering, transmission), air filter replacement, battery testing, belt and hose inspection, and a multi-point safety check. This comprehensive approach helps prevent costly breakdowns on New Hampshire roads.',
    ],
];

// ─── Schema Markup ─────────────────────────────────────────────
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Services', 'url' => $siteUrl . '/services/'],
    ['name' => 'Auto Repair Services', 'url' => ''],
]);

$serviceSchemas = '';
$groupServices = ['Engine Repair', 'Transmission Repair', 'Routine Automotive Maintenance'];
foreach ($groupServices as $sName) {
    $sData = findService($sName);
    if ($sData) {
        $serviceSchemas .= generateServiceSchema($sData) . "\n";
    }
}

$faqSchema = generateFAQSchema($faqs);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $breadcrumbSchema; ?>
<?php echo $serviceSchemas; ?>
<?php echo $faqSchema; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══════════════════════════════════════════════════════════
     AUTO REPAIR SERVICES — Jon's Shafts & Stuff, LLC
     Phase 3A | Standard Tier | Page One Insights
     ═══════════════════════════════════════════════════════════ -->

<style>
/* ═══ Auto Repair Services — Page-Specific Styles ═══ */

/* ── Hero ── */
.hero--auto-repair {
  min-height: 48vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background-image: url('https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?w=1920&q=80');
  background-size: cover;
  background-position: center 40%;
  position: relative;
  overflow: hidden;
  padding: calc(var(--nav-height) + var(--space-12)) var(--space-4) var(--space-10);
}
.hero--auto-repair::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    175deg,
    rgba(var(--color-primary-rgb), 0.94) 0%,
    rgba(15, 26, 39, 0.89) 55%,
    rgba(var(--color-secondary-rgb), 0.83) 100%
  );
  z-index: 1;
}
.hero--auto-repair::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.35;
  pointer-events: none;
  z-index: 1;
}
.hero--auto-repair .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.hero--auto-repair h1 {
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: var(--fs-h1);
  line-height: 1.15;
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.hero--auto-repair .hero-answer {
  color: rgba(255,255,255,0.88);
  max-width: 680px;
  margin: 0 auto var(--space-6);
  font-size: var(--fs-body);
  line-height: 1.75;
}
.hero--auto-repair .breadcrumb {
  display: flex;
  justify-content: center;
  gap: var(--space-2);
  margin-bottom: var(--space-6);
  font-size: var(--fs-sm);
}
.hero--auto-repair .breadcrumb a {
  color: rgba(255,255,255,0.7);
  transition: color var(--transition-fast);
}
.hero--auto-repair .breadcrumb a:hover {
  color: var(--color-accent);
}
.hero--auto-repair .breadcrumb-sep {
  color: rgba(255,255,255,0.4);
}
.hero--auto-repair .breadcrumb-current {
  color: var(--color-accent);
  font-weight: 600;
}

/* ── SVG Section Divider — Wave ── */
.divider-wave {
  display: block;
  width: 100%;
  height: auto;
  line-height: 0;
  margin-top: -1px;
}
.divider-wave svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── SVG Section Divider — Angle ── */
.divider-angle {
  display: block;
  width: 100%;
  height: auto;
  line-height: 0;
  margin-top: -1px;
}
.divider-angle svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── Intro Section ── */
.section--intro {
  padding: var(--space-4xl) var(--space-4) var(--space-3xl);
  background: var(--color-bg);
  position: relative;
}
.section--intro .section-title h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.section--intro .answer-block {
  max-width: var(--content-width);
  margin: 0 auto var(--space-6);
  color: var(--color-gray-dark);
  font-size: var(--fs-body);
  line-height: 1.75;
  border-left: 4px solid var(--color-accent);
  padding-left: var(--space-4);
  background: rgba(var(--color-accent-rgb), 0.04);
  padding: var(--space-4) var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
}
.section--intro .prose {
  max-width: var(--content-width);
  margin: 0 auto;
  color: var(--color-gray-dark);
  line-height: 1.8;
}

/* ── Floating Accents ── */
.floating-accent {
  position: absolute;
  border-radius: var(--radius-full);
  pointer-events: none;
  z-index: 0;
}
.floating-accent--1 {
  width: 280px;
  height: 280px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.07), transparent 70%);
  top: -80px;
  right: -60px;
}
.floating-accent--2 {
  width: 200px;
  height: 200px;
  background: radial-gradient(circle, rgba(var(--color-primary-rgb), 0.06), transparent 70%);
  bottom: -40px;
  left: -40px;
}
.float-animate {
  animation: floatBob 6s ease-in-out infinite;
}
.float-animate-slow {
  animation: floatBob 10s ease-in-out infinite;
}
@keyframes floatBob {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-15px); }
}

/* ── Service Cards Section ── */
.section--service-cards {
  padding: var(--space-3xl) var(--space-4) var(--space-4xl);
  background: var(--color-bg-alt);
  position: relative;
  overflow: hidden;
}
.section--service-cards .section-title {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.section--service-cards .section-title h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.section--service-cards .eyebrow-label {
  display: inline-block;
  font-size: var(--fs-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
.section--service-cards .services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-lg);
  max-width: var(--max-width);
  margin: 0 auto;
}
@media (max-width: 900px) {
  .section--service-cards .services-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  .section--service-cards .services-grid {
    grid-template-columns: 1fr;
  }
}

/* ── Detail Sections ── */
.section--detail {
  padding: var(--space-4xl) var(--space-4);
  position: relative;
  overflow: hidden;
}
.section--detail:nth-of-type(even) {
  background: var(--color-bg-alt);
}
.section--detail:nth-of-type(odd) {
  background: var(--color-bg);
}
.section--detail .container {
  max-width: var(--max-width);
  position: relative;
  z-index: 1;
}
.section--detail h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.section--detail .answer-block {
  max-width: var(--content-width);
  color: var(--color-gray-dark);
  font-size: var(--fs-body);
  line-height: 1.75;
  border-left: 4px solid var(--color-accent);
  padding: var(--space-4) var(--space-6);
  background: rgba(var(--color-accent-rgb), 0.04);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin-bottom: var(--space-6);
}
.section--detail .prose {
  max-width: var(--content-width);
  color: var(--color-gray-dark);
  line-height: 1.8;
}
.section--detail .prose p {
  margin-bottom: var(--space-4);
}
.section--detail .prose p:last-child {
  margin-bottom: 0;
}

/* ── Split Layout for Details ── */
.detail-split {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: start;
}
.detail-split--reverse {
  direction: rtl;
}
.detail-split--reverse > * {
  direction: ltr;
}
.detail-image {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  position: relative;
}
.detail-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  aspect-ratio: 4 / 3;
  transition: transform var(--transition-slow);
}
.detail-image:hover img {
  transform: scale(1.04);
}
.detail-image::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius-lg);
  box-shadow: inset 0 0 0 1px rgba(var(--color-primary-rgb), 0.08);
  pointer-events: none;
}
@media (max-width: 768px) {
  .detail-split,
  .detail-split--reverse {
    grid-template-columns: 1fr;
    direction: ltr;
    gap: var(--space-xl);
  }
}

/* ── Why Choose Us ── */
.section--why {
  padding: var(--space-4xl) var(--space-4);
  background: var(--color-primary);
  color: var(--color-white);
  position: relative;
  overflow: hidden;
}
.section--why::before {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.25;
  pointer-events: none;
}
.section--why .container {
  position: relative;
  z-index: 1;
  max-width: var(--max-width);
}
.section--why h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.section--why .answer-block {
  max-width: var(--content-width);
  color: rgba(255,255,255,0.88);
  font-size: var(--fs-body);
  line-height: 1.75;
  border-left: 4px solid var(--color-accent);
  padding: var(--space-4) var(--space-6);
  background: rgba(255,255,255,0.06);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin-bottom: var(--space-8);
}
.why-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-lg);
  max-width: var(--max-width);
}
.why-card {
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.1);
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  display: flex;
  align-items: flex-start;
  gap: var(--space-4);
  transition: background var(--transition-base), transform var(--transition-base);
}
.why-card:hover {
  background: rgba(255,255,255,0.1);
  transform: translateY(-3px);
}
.why-card__icon {
  flex-shrink: 0;
  width: 48px;
  height: 48px;
  background: rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.why-card__icon svg,
.why-card__icon i {
  width: 24px;
  height: 24px;
}
.why-card h3 {
  font-family: var(--font-heading);
  font-size: var(--fs-h4);
  color: var(--color-white);
  margin-bottom: var(--space-2);
}
.why-card p {
  color: rgba(255,255,255,0.78);
  line-height: 1.65;
  font-size: var(--fs-sm);
}
@media (max-width: 768px) {
  .why-grid {
    grid-template-columns: 1fr;
  }
}

/* ── FAQ Section ── */
.section--faq {
  padding: var(--space-4xl) var(--space-4);
  background: var(--color-bg);
  position: relative;
}
.section--faq .container {
  max-width: 800px;
}
.section--faq h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  color: var(--color-primary);
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.section--faq .answer-block {
  max-width: var(--content-width);
  margin: 0 auto var(--space-8);
  color: var(--color-gray-dark);
  font-size: var(--fs-body);
  line-height: 1.75;
  border-left: 4px solid var(--color-accent);
  padding: var(--space-4) var(--space-6);
  background: rgba(var(--color-accent-rgb), 0.04);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  text-align: left;
}
.faq-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.faq-item {
  background: var(--color-bg-alt);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-md);
  overflow: hidden;
  transition: box-shadow var(--transition-base);
}
.faq-item[open] {
  box-shadow: var(--shadow-md);
}
.faq-item summary {
  cursor: pointer;
  padding: var(--space-5) var(--space-6);
  font-family: var(--font-heading);
  font-size: var(--fs-body);
  font-weight: 600;
  color: var(--color-primary);
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-4);
  list-style: none;
  user-select: none;
  transition: color var(--transition-fast);
}
.faq-item summary::-webkit-details-marker { display: none; }
.faq-item summary::after {
  content: '+';
  font-size: 1.5rem;
  font-weight: 300;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.faq-item[open] summary::after {
  transform: rotate(45deg);
}
.faq-item summary:hover {
  color: var(--color-accent);
}
.faq-answer {
  padding: 0 var(--space-6) var(--space-5);
  color: var(--color-gray-dark);
  line-height: 1.75;
  font-size: var(--fs-body);
}

/* ── CTA Section ── */
.section--cta {
  padding: var(--space-4xl) var(--space-4);
  background: linear-gradient(
    170deg,
    rgba(var(--color-primary-rgb), 0.96) 0%,
    rgba(var(--color-secondary-rgb), 0.92) 100%
  );
  text-align: center;
  position: relative;
  overflow: hidden;
}
.section--cta::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.3;
  pointer-events: none;
}
.section--cta .container {
  position: relative;
  z-index: 1;
  max-width: 700px;
}
.section--cta h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.section--cta .answer-block {
  max-width: var(--content-width);
  margin: 0 auto var(--space-8);
  color: rgba(255,255,255,0.88);
  font-size: var(--fs-body);
  line-height: 1.75;
  border-left: 4px solid var(--color-accent);
  padding: var(--space-4) var(--space-6);
  background: rgba(255,255,255,0.06);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  text-align: left;
}
.cta-buttons {
  display: flex;
  justify-content: center;
  gap: var(--space-4);
  flex-wrap: wrap;
}

/* ── Last Updated ── */
.last-updated {
  text-align: center;
  font-size: var(--fs-xs);
  color: var(--color-gray);
  padding: var(--space-4) var(--space-4) 0;
}

/* ── Reveal Animations ── */
.reveal-up,
.reveal-down,
.reveal-left,
.reveal-right,
.reveal-scale {
  opacity: 0;
  transition: opacity var(--transition-slow), transform var(--transition-slow);
}
.reveal-up { transform: translateY(30px); }
.reveal-down { transform: translateY(-30px); }
.reveal-left { transform: translateX(-30px); }
.reveal-right { transform: translateX(30px); }
.reveal-scale { transform: scale(0.92); }

.reveal-up.animated,
.reveal-down.animated,
.reveal-left.animated,
.reveal-right.animated,
.reveal-scale.animated {
  opacity: 1;
  transform: none;
}
.reveal-delay-1 { transition-delay: 0.1s; }
.reveal-delay-2 { transition-delay: 0.2s; }
.reveal-delay-3 { transition-delay: 0.3s; }
.reveal-delay-4 { transition-delay: 0.4s; }

/* ── Stat Watermark ── */
.stat-watermark {
  position: absolute;
  font-family: var(--font-heading);
  font-size: 12rem;
  font-weight: 900;
  color: rgba(var(--color-accent-rgb), 0.04);
  pointer-events: none;
  z-index: 0;
  line-height: 1;
  user-select: none;
}
.stat-watermark--right {
  right: -2rem;
  bottom: -2rem;
}
.stat-watermark--left {
  left: -2rem;
  top: -2rem;
}

/* ── Text Accent ── */
.text-accent {
  color: var(--color-accent);
  font-weight: 700;
}

/* ── Eyebrow ── */
.eyebrow-label {
  display: inline-block;
  font-size: var(--fs-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
</style>


<!-- ═══ HERO ═══ -->
<section class="hero--auto-repair" aria-label="Auto Repair Services in Manchester NH">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <span class="breadcrumb-current">Auto Repair Services</span>
    </nav>

    <h1>Auto Repair Services in <span class="text-accent">Manchester, NH</span></h1>

    <p class="hero-answer">Jon's Shafts & Stuff has provided engine repair, transmission rebuilds, and routine automotive maintenance from 518 Silver St in Manchester for 33 years. Our technicians handle everything from check-engine diagnostics to complete drivetrain overhauls for drivers across southern New Hampshire.</p>
  </div>
</section>


<!-- ═══ Wave Divider: Hero → Intro ═══ -->
<div class="divider-wave" aria-hidden="true">
  <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,40 C360,80 720,0 1080,40 C1260,60 1380,20 1440,40 L1440,80 L0,80 Z" fill="var(--color-bg, #ffffff)"/>
  </svg>
</div>


<!-- ═══ INTRO SECTION ═══ -->
<section class="section section--intro" aria-label="Auto repair overview">
  <div class="floating-accent floating-accent--1 float-animate" aria-hidden="true"></div>
  <div class="floating-accent floating-accent--2 float-animate-slow" aria-hidden="true"></div>

  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>What <span class="text-accent">auto repair services</span> does Jon's Shafts & Stuff offer in Manchester?</h2>
    </div>

    <p class="answer-block reveal-up">Jon's Shafts & Stuff provides three core auto repair services at our Manchester, NH shop: engine repair for all makes and models, transmission repair including full rebuilds, and routine automotive maintenance that keeps your vehicle running safely through New Hampshire's demanding seasons.</p>

    <div class="prose reveal-up">
      <p>Whether you are dealing with a rough-running engine, slipping transmission, or simply need an oil change before winter hits, our 518 Silver St shop has the diagnostic equipment and hands-on experience to handle the job. We serve drivers from Manchester, Bedford, Hooksett, Goffstown, and Londonderry with honest assessments and transparent pricing on every repair.</p>
    </div>
  </div>
</section>


<!-- ═══ Angle Divider: Intro → Cards ═══ -->
<div class="divider-angle" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,0 1440,60 0,60" fill="var(--color-bg-alt, #f8f9fa)"/>
  </svg>
</div>


<!-- ═══ SERVICE CARDS SECTION ═══ -->
<section class="section section--service-cards" aria-label="Auto repair service options">
  <div class="container">
    <div class="section-title reveal-down">
      <span class="eyebrow-label">What We Do</span>
      <h2>Which <span class="text-accent">engine, transmission, and maintenance</span> services are available?</h2>
    </div>

    <div class="services-grid">

      <!-- Card 1: Engine Repair -->
      <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1">
        <div class="service-card__image">
          <img src="https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?w=600&q=80" alt="Engine repair work at Jon's Shafts and Stuff in Manchester NH" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="cog"></i></div>
          <h3>Engine Repair</h3>
          <p class="service-card__desc">Full-spectrum engine diagnostics and repair for every make and model in Manchester.</p>
          <ul>
            <li>Check-engine light diagnostics</li>
            <li>Head gasket and timing chain repair</li>
            <li>Complete engine overhauls</li>
          </ul>
          <a href="/services/auto-repair-services/#engine-repair" class="service-card__cta">Learn more</a>
        </div>
      </article>

      <!-- Card 2: Transmission Repair -->
      <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
        <div class="service-card__image">
          <img src="https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?w=600&q=80" alt="Transmission rebuild and repair service in Manchester NH" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="settings"></i></div>
          <h3>Transmission Repair</h3>
          <p class="service-card__desc">Manual and automatic transmission service from fluid changes to full rebuilds.</p>
          <ul>
            <li>Automatic and manual rebuilds</li>
            <li>Fluid flush and filter replacement</li>
            <li>Torque converter diagnostics</li>
          </ul>
          <a href="/services/auto-repair-services/#transmission-repair" class="service-card__cta">Learn more</a>
        </div>
      </article>

      <!-- Card 3: Routine Automotive Maintenance -->
      <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
        <div class="service-card__image">
          <img src="https://images.unsplash.com/photo-1625047509248-ec889cbff17f?w=600&q=80" alt="Routine car maintenance oil change and inspection in Manchester NH" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="wrench"></i></div>
          <h3>Routine Automotive Maintenance</h3>
          <p class="service-card__desc">Scheduled maintenance that prevents breakdowns and extends vehicle life.</p>
          <ul>
            <li>Oil changes and fluid top-offs</li>
            <li>Brake and tire inspections</li>
            <li>Multi-point safety checks</li>
          </ul>
          <a href="/services/auto-repair-services/#routine-maintenance" class="service-card__cta">Learn more</a>
        </div>
      </article>

    </div>
  </div>
</section>


<!-- ═══ Wave Divider: Cards → Engine Detail ═══ -->
<div class="divider-wave" aria-hidden="true">
  <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,20 C240,70 480,0 720,40 C960,80 1200,10 1440,50 L1440,80 L0,80 Z" fill="var(--color-bg, #ffffff)"/>
  </svg>
</div>


<!-- ═══ ENGINE REPAIR DETAIL ═══ -->
<section class="section section--detail" id="engine-repair" aria-label="Engine repair details">
  <div class="container">
    <div class="detail-split">
      <div>
        <span class="eyebrow-label reveal-left">Engine Repair</span>
        <h2 class="reveal-left">What does <span class="text-accent">engine repair</span> involve at a Manchester, NH auto shop?</h2>

        <p class="answer-block reveal-left">Engine repair at Jon's Shafts & Stuff covers everything from sensor replacements and ignition system fixes to head gasket jobs and complete engine rebuilds. We use OBD-II and manufacturer-level scan tools to pinpoint the exact issue before turning a wrench, keeping your costs predictable and your downtime short.</p>

        <div class="prose reveal-up">
          <p>Manchester drivers deal with temperature swings from sub-zero January mornings to humid July afternoons. That range punishes cooling systems, gaskets, and engine seals. Our technicians at 518 Silver St see these failure patterns daily and know which components to inspect first based on your vehicle's mileage and local driving conditions.</p>

          <p>We handle domestic and import engines alike, including GM LS-series, Ford EcoBoost, Toyota 2GR, Honda K-series, and European turbo platforms. Whether your check-engine light just came on or your engine is misfiring under load, we run a full diagnostic before recommending repairs. Every estimate is written, itemized, and explained in plain language.</p>

          <p>If you are searching for auto repair near me in Manchester, our shop sits at the intersection of Silver Street and South Willow, accessible from Bedford, Hooksett, and I-293. We stock common gaskets, sensors, and filters in-house, which means many engine repairs are completed same-day. Major work like timing chain replacement or head machining typically takes two to three business days.</p>

          <p>Engine repair costs at our Manchester shop range from $150 for a simple sensor swap to $3,500 or more for a full rebuild. We provide a written estimate before work begins and never add charges without your approval.</p>
        </div>
      </div>
      <div class="detail-image reveal-right">
        <img src="https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?w=800&q=80" alt="Technician performing engine diagnostics at Jon's Shafts and Stuff in Manchester" width="800" height="600" loading="lazy">
      </div>
    </div>
    <span class="stat-watermark stat-watermark--right" aria-hidden="true">33</span>
  </div>
</section>


<!-- ═══ TRANSMISSION REPAIR DETAIL ═══ -->
<section class="section section--detail" id="transmission-repair" aria-label="Transmission repair details">
  <div class="container">
    <div class="detail-split detail-split--reverse">
      <div>
        <span class="eyebrow-label reveal-right">Transmission Repair</span>
        <h2 class="reveal-right">How does Jon's Shafts & Stuff handle <span class="text-accent">transmission repair</span> in Manchester?</h2>

        <p class="answer-block reveal-right">Our Manchester transmission shop diagnoses shifting problems, fluid leaks, and internal wear using electronic pressure testing and fluid analysis. We perform fluid services, solenoid replacements, valve body rebuilds, and complete transmission overhauls for automatic and manual transmissions on all vehicle makes.</p>

        <div class="prose reveal-up">
          <p>Transmission failures rarely happen without warning. Delayed engagement, harsh shifts, a shudder at highway speed, or a puddle of red fluid under your vehicle are signs that something needs attention. At our 518 Silver St location, we start every transmission diagnosis with a road test and electronic scan to identify the root cause before disassembly.</p>

          <p>For drivers in the Manchester area, stop-and-go traffic on South Willow Street and frequent cold starts during New Hampshire winters accelerate transmission fluid breakdown. We recommend a transmission fluid service every 40,000 miles for most vehicles, and more frequently for trucks that tow. Regular fluid changes cost a fraction of a rebuild and extend transmission life by years.</p>

          <p>When a rebuild is necessary, our technicians replace worn clutch packs, bands, seals, and bearings with OEM-specification parts. We test every rebuilt unit on a bench before reinstallation and back the work with a written warranty. Customers from Goffstown, Londonderry, and Bedford regularly bring their vehicles to us specifically for transmission work because we specialize in drivetrain repair.</p>

          <p>Transmission rebuild pricing at our Manchester shop starts around $1,800 for common four-speed automatics and can reach $4,000 or more for modern CVTs or European dual-clutch units. We provide a complete breakdown before any teardown begins.</p>
        </div>
      </div>
      <div class="detail-image reveal-left">
        <img src="https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?w=800&q=80" alt="Transmission being rebuilt at Jon's Shafts and Stuff Manchester NH shop" width="800" height="600" loading="lazy">
      </div>
    </div>
    <span class="stat-watermark stat-watermark--left" aria-hidden="true">NH</span>
  </div>
</section>


<!-- ═══ Angle Divider: Transmission → Maintenance ═══ -->
<div class="divider-angle" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,60 1440,0 1440,60" fill="var(--color-bg, #ffffff)"/>
  </svg>
</div>


<!-- ═══ ROUTINE MAINTENANCE DETAIL ═══ -->
<section class="section section--detail" id="routine-maintenance" aria-label="Routine maintenance details">
  <div class="container">
    <div class="detail-split">
      <div>
        <span class="eyebrow-label reveal-left">Routine Maintenance</span>
        <h2 class="reveal-left">Why is <span class="text-accent">routine automotive maintenance</span> critical for Manchester drivers?</h2>

        <p class="answer-block reveal-left">Routine maintenance at Jon's Shafts & Stuff includes oil changes, brake inspections, tire rotations, fluid services, battery testing, and multi-point safety checks. Keeping up with scheduled service prevents expensive breakdowns and helps your vehicle handle New Hampshire's harsh winters and pothole-heavy spring roads.</p>

        <div class="prose reveal-up">
          <p>Manchester's climate is hard on vehicles. Road salt corrodes brake lines and undercarriage components. Freeze-thaw cycles create potholes that punish suspension and alignment. Extreme cold thickens old engine oil and strains batteries. Our routine maintenance program addresses every one of these seasonal threats with a checklist built for New Hampshire conditions, not a generic national template.</p>

          <p>We recommend oil changes every 5,000 miles for conventional oil or 7,500 miles for full synthetic. At each visit, our technicians also check tire pressure and tread depth, inspect brake pads and rotors, top off coolant and washer fluid, and test battery voltage. This 20-minute inspection catches small problems before they become roadside emergencies on I-93 or the Everett Turnpike.</p>

          <p>For high-mileage vehicles over 100,000 miles, we offer an extended maintenance inspection that includes transmission fluid analysis, serpentine belt tension check, coolant system pressure test, and power steering fluid condition assessment. Many Manchester, Bedford, and Hooksett drivers rely on this extended check to safely stretch vehicle life past 200,000 miles.</p>

          <p>Standard oil changes at our Manchester shop start at $45 for conventional oil and $75 for full synthetic. A comprehensive multi-point inspection is included at no extra charge with every maintenance visit at 518 Silver St.</p>
        </div>
      </div>
      <div class="detail-image reveal-right">
        <img src="https://images.unsplash.com/photo-1625047509248-ec889cbff17f?w=800&q=80" alt="Routine automotive maintenance and oil change service in Manchester NH" width="800" height="600" loading="lazy">
      </div>
    </div>
  </div>
</section>


<!-- ═══ Wave Divider: Maintenance → Why Choose Us ═══ -->
<div class="divider-wave" aria-hidden="true">
  <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,60 C360,20 720,80 1080,30 C1260,10 1380,50 1440,20 L1440,80 L0,80 Z" fill="var(--color-primary, #1a2b3c)"/>
  </svg>
</div>


<!-- ═══ WHY CHOOSE US ═══ -->
<section class="section section--why" aria-label="Why choose Jon's Shafts and Stuff">
  <div class="container">
    <h2 class="reveal-up">Why choose Jon's Shafts & Stuff for <span class="text-accent">auto repair in Manchester</span>?</h2>

    <p class="answer-block reveal-up">Jon's Shafts & Stuff combines 33 years of drivetrain specialization with full-service auto repair capabilities. Our technicians diagnose problems accurately the first time, use manufacturer-specification parts, and provide written estimates before every repair at our 518 Silver St shop in Manchester, NH.</p>

    <div class="why-grid">
      <div class="why-card reveal-left reveal-delay-1">
        <div class="why-card__icon"><i data-lucide="calendar-check"></i></div>
        <div>
          <h3>33 Years on Silver Street</h3>
          <p>Open since 1993, we have repaired engines, transmissions, and drivetrains for three decades in the same Manchester location. That longevity means parts supplier relationships, deep diagnostic experience, and a reputation you can verify with your neighbors.</p>
        </div>
      </div>
      <div class="why-card reveal-right reveal-delay-2">
        <div class="why-card__icon"><i data-lucide="scan-line"></i></div>
        <div>
          <h3>Diagnostics Before Disassembly</h3>
          <p>We use OBD-II, manufacturer scan tools, and electronic pressure testing to identify the problem before quoting a repair. No guesswork, no unnecessary parts replacements, and no surprises on your invoice.</p>
        </div>
      </div>
      <div class="why-card reveal-left reveal-delay-3">
        <div class="why-card__icon"><i data-lucide="file-text"></i></div>
        <div>
          <h3>Written Estimates, Every Time</h3>
          <p>Every repair begins with a detailed written estimate that itemizes parts, labor, and timeline. We never add charges without calling you first. Drivers from Bedford, Hooksett, and Londonderry trust us because we communicate clearly.</p>
        </div>
      </div>
      <div class="why-card reveal-right reveal-delay-4">
        <div class="why-card__icon"><i data-lucide="shield-check"></i></div>
        <div>
          <h3>Warranty-Backed Repairs</h3>
          <p>All major repairs, including engine rebuilds and transmission overhauls, come with a written parts and labor warranty. If something is not right after we fix it, bring it back and we make it right at no additional cost.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══ Angle Divider: Why → FAQ ═══ -->
<div class="divider-angle" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,0 1440,60 0,60" fill="var(--color-bg, #ffffff)"/>
  </svg>
</div>


<!-- ═══ FAQ SECTION ═══ -->
<section class="section section--faq" aria-label="Frequently asked questions about auto repair in Manchester NH">
  <div class="container">
    <h2 class="reveal-up">What do Manchester drivers ask about <span class="text-accent">auto repair</span>?</h2>

    <p class="answer-block reveal-up">Below are the questions we hear most often from customers at our 518 Silver St shop. If your question is not listed, call us or submit a free estimate request and we will get back to you the same business day.</p>

    <div class="faq-list">
      <?php foreach ($faqs as $i => $faq): ?>
      <details class="faq-item reveal-up reveal-delay-<?php echo ($i % 4) + 1; ?>">
        <summary><?php echo htmlspecialchars($faq['question']); ?></summary>
        <div class="faq-answer">
          <p><?php echo htmlspecialchars($faq['answer']); ?></p>
        </div>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══ CTA SECTION ═══ -->
<section class="section section--cta" aria-label="Get a free estimate for auto repair in Manchester">
  <div class="container">
    <h2 class="reveal-scale">Ready to schedule <span class="text-accent">engine, transmission, or maintenance</span> service in Manchester?</h2>

    <p class="answer-block reveal-up">Jon's Shafts & Stuff provides free written estimates for all auto repair services at our 518 Silver St location in Manchester, NH. Whether you need a same-day oil change or a complete transmission rebuild, our team will diagnose the issue, explain your options, and get you back on the road.</p>

    <div class="cta-buttons reveal-up">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px;"></i>
        Call <?php echo htmlspecialchars(formatPhone($phone)); ?>
      </a>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ═══ Last Updated ═══ -->
<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

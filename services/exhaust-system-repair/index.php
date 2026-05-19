<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

// ─── Page Setup ────────────────────────────────────────────────
$pageTitle       = "Exhaust System Repair Manchester NH | Muffler & Catalytic Converter | Jon's Shafts & Stuff, LLC";
$pageDescription = "Exhaust system repair in Manchester, NH — muffler, catalytic converter, exhaust manifold, and pipe replacement. 33 years fixing exhaust leaks at 518 Silver St.";
$canonicalUrl    = $siteUrl . '/services/exhaust-system-repair/';
$currentPage     = 'services';
$heroImagePreload = 'https://images.unsplash.com/photo-1615906655593-ad0386982a0f?w=1920&q=80';
$cssVersion      = '2';

// ─── Schema ────────────────────────────────────────────────────
$exhaustService = findService('Exhaust System Repair');

$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Services', 'url' => $siteUrl . '/services/'],
    ['name' => 'Exhaust System Repair', 'url' => ''],
]);

$serviceSchema = generateServiceSchema($exhaustService);

$faqs = [
    [
        'question' => 'How much does catalytic converter replacement cost in Manchester, NH?',
        'answer'   => 'Catalytic converter replacement in Manchester typically costs $800-$2,500 depending on your vehicle make and whether you choose OEM or aftermarket. Some vehicles require California-compliant converters even in NH, which raises the price. We provide a written estimate with exact pricing before starting any catalytic converter work at 518 Silver St.',
    ],
    [
        'question' => 'What is the difference between muffler repair and a full exhaust system replacement?',
        'answer'   => 'Muffler repair addresses the noise-dampening component near your tailpipe and usually costs $150-$400. A full exhaust system replacement covers everything from the exhaust manifold back — headers, catalytic converter, resonator, pipes, hangers, and muffler — and can run $1,000-$3,000. Most Manchester vehicles only need a partial repair, not a full system replacement.',
    ],
    [
        'question' => 'Is an exhaust leak dangerous to drive with?',
        'answer'   => 'Yes. An exhaust leak before the catalytic converter can push carbon monoxide into your cabin through the HVAC system or floor seams. CO is odorless and causes dizziness, nausea, and in confined spaces, death. If you smell exhaust inside your vehicle while driving around Manchester, get it inspected immediately — do not wait.',
    ],
    [
        'question' => 'Will a bad exhaust cause my vehicle to fail NH safety inspection?',
        'answer'   => 'Yes. New Hampshire safety inspection requires an intact exhaust system with no leaks, holes, or excessive corrosion. A missing or damaged catalytic converter, a rusted-through muffler, or visible exhaust leaks at pipe joints will all result in a rejection sticker. We can repair the issue and get you reinspected at 518 Silver St.',
    ],
    [
        'question' => 'How long does exhaust system repair take?',
        'answer'   => 'Most exhaust repairs take 1-4 hours at our Manchester shop. A straightforward muffler replacement finishes in about an hour. Catalytic converter replacement takes 2-3 hours. A full exhaust system replacement with manifold work may need a full day. We aim for same-day completion on most standard exhaust jobs.',
    ],
    [
        'question' => 'Why does my exhaust rust out so fast in Manchester?',
        'answer'   => 'New Hampshire road salt is the main culprit. Salt spray from I-293, Route 101, and Manchester city streets coats your exhaust components every winter. The salt accelerates corrosion, especially on steel pipes and mufflers. Vehicles driven primarily on short trips suffer worse because moisture never fully evaporates from the system.',
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
     EXHAUST SYSTEM REPAIR — Jon's Shafts & Stuff, LLC
     Solo Service Page | Standard Tier | Page One Insights
     ═══════════════════════════════════════════════════════════ -->

<style>
/* ═══ Exhaust System Repair — Page-Specific Styles ═══ */

/* ── TECHNIQUE 1: Layered Hero with gradient overlay + noise texture ── */
.hero--exhaust {
  min-height: 55vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background-image: url('https://images.unsplash.com/photo-1615906655593-ad0386982a0f?w=1920&q=80');
  background-size: cover;
  background-position: center 40%;
  position: relative;
  overflow: hidden;
  padding: calc(var(--nav-height) + var(--space-12)) var(--space-4) var(--space-12);
}
.hero--exhaust::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    160deg,
    rgba(74, 106, 140, 0.93) 0%,
    rgba(54, 81, 107, 0.88) 55%,
    rgba(212, 155, 42, 0.22) 100%
  );
  z-index: 1;
}
.hero--exhaust::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.35;
  pointer-events: none;
  z-index: 1;
}
.hero--exhaust .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.hero--exhaust h1 {
  color: var(--color-white);
  font-size: var(--fs-h1);
  font-family: var(--font-heading);
  font-weight: 900;
  line-height: 1.1;
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.hero--exhaust .hero-answer {
  color: rgba(255, 255, 255, 0.88);
  max-width: 700px;
  margin: 0 auto var(--space-6);
  font-size: var(--fs-body);
  line-height: 1.75;
}
.hero--exhaust .breadcrumb {
  display: flex;
  justify-content: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: rgba(255, 255, 255, 0.6);
  margin-bottom: var(--space-6);
}
.hero--exhaust .breadcrumb a {
  color: var(--color-accent);
  transition: color var(--transition-fast);
}
.hero--exhaust .breadcrumb a:hover {
  color: var(--color-white);
}
.hero--exhaust .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.4);
}
.hero--exhaust .hero-cta-group {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
  margin-top: var(--space-6);
}

/* ── TECHNIQUE 2: SVG Section Divider — Diagonal / Sloped Cut ── */
.divider-diagonal {
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 100%;
  z-index: 3;
  line-height: 0;
}
.divider-diagonal svg {
  display: block;
  width: 100%;
  height: 65px;
}
.divider-diagonal--top {
  position: relative;
  margin-top: -1px;
  line-height: 0;
  z-index: 2;
}
.divider-diagonal--top svg {
  display: block;
  width: 100%;
  height: 55px;
}

/* Second divider variant — wave for variety */
.divider-wave {
  line-height: 0;
  position: relative;
  z-index: 2;
  margin-top: -1px;
}
.divider-wave svg {
  display: block;
  width: 100%;
  height: 50px;
}

/* ── TECHNIQUE 3: Tinted symptom cards with hover lift ── */
.symptoms-section {
  background: var(--color-bg);
  padding: var(--space-16) 0;
  position: relative;
}
.symptoms-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.symptoms-section .section-title h2 {
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
.service-detail--exhaust {
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.service-detail--exhaust .container {
  position: relative;
  z-index: 1;
}
.service-detail--exhaust .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.service-detail--exhaust .section-title h2 {
  text-wrap: balance;
}
.exhaust-detail-grid {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: var(--space-10);
  align-items: start;
  max-width: var(--max-width);
  margin: 0 auto;
}
@media (max-width: 900px) {
  .exhaust-detail-grid {
    grid-template-columns: 1fr;
  }
}
.exhaust-detail-grid .detail-text p {
  margin-bottom: var(--space-6);
  line-height: 1.75;
  color: var(--color-gray-dark);
}
.exhaust-detail-grid .detail-text strong {
  color: var(--color-primary);
}
.component-list--exhaust {
  display: grid;
  grid-template-columns: 1fr;
  gap: var(--space-3);
  list-style: none;
  margin: 0;
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  position: sticky;
  top: calc(var(--nav-height) + var(--space-4));
}
.component-list--exhaust li {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  font-size: var(--fs-body);
  color: var(--color-gray-dark);
  padding: var(--space-3) 0;
  border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.06);
}
.component-list--exhaust li:last-child {
  border-bottom: none;
}
.component-list--exhaust li i,
.component-list--exhaust li svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
}
.component-list--exhaust li strong {
  color: var(--color-primary);
  font-weight: 600;
  min-width: 130px;
}

/* Floating accent shape */
.floating-pipe {
  position: absolute;
  top: 8%;
  right: 2%;
  width: 160px;
  height: 160px;
  border: 3px solid rgba(var(--color-accent-rgb), 0.06);
  border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
  pointer-events: none;
  z-index: 0;
}
.floating-pipe::after {
  content: '';
  position: absolute;
  top: 24px;
  left: 24px;
  right: 24px;
  bottom: 24px;
  border: 2px dashed rgba(var(--color-accent-rgb), 0.04);
  border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
}

/* ── NH Inspection Section ── */
.nh-inspection {
  background: var(--color-primary);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.nh-inspection::before {
  content: '';
  position: absolute;
  bottom: -35%;
  left: -8%;
  width: 480px;
  height: 480px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.07);
  pointer-events: none;
}
.nh-inspection .container {
  position: relative;
  z-index: 1;
}
.nh-inspection .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.nh-inspection .section-title h2 {
  color: var(--color-white);
  text-wrap: balance;
}
.nh-inspection .answer-block {
  color: rgba(255, 255, 255, 0.85);
  max-width: 680px;
  margin: 0 auto var(--space-8);
  text-align: center;
  line-height: 1.75;
}
.inspection-content {
  max-width: var(--content-width);
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-6);
}
@media (max-width: 768px) {
  .inspection-content {
    grid-template-columns: 1fr;
  }
}
.inspection-card {
  background: rgba(255, 255, 255, 0.08);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  transition: transform var(--transition-base), background var(--transition-base);
}
.inspection-card:hover {
  transform: translateY(-4px);
  background: rgba(255, 255, 255, 0.12);
}
.inspection-card__icon {
  width: 52px;
  height: 52px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-4);
  color: var(--color-accent);
}
.inspection-card__icon i,
.inspection-card__icon svg {
  width: 24px;
  height: 24px;
}
.inspection-card h3 {
  font-family: var(--font-heading);
  font-size: var(--fs-h4);
  color: var(--color-white);
  margin-bottom: var(--space-3);
}
.inspection-card p {
  font-size: var(--fs-sm);
  color: rgba(255, 255, 255, 0.75);
  line-height: 1.65;
}

/* ── TECHNIQUE 4: Process timeline with numbered steps ── */
.process-section--exhaust {
  background: var(--color-bg);
  padding: var(--space-16) 0;
  position: relative;
}
.process-section--exhaust .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.process-section--exhaust .section-title h2 {
  text-wrap: balance;
}
.exhaust-timeline {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  position: relative;
}
@media (max-width: 1024px) {
  .exhaust-timeline {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  .exhaust-timeline {
    grid-template-columns: 1fr;
  }
}
/* Connecting line behind steps */
.exhaust-timeline::before {
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
  .exhaust-timeline::before {
    display: none;
  }
}
.exhaust-step {
  text-align: center;
  position: relative;
  z-index: 1;
}
.exhaust-step__number {
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
.exhaust-step:hover .exhaust-step__number {
  transform: scale(1.08);
  background: var(--color-accent);
}
.exhaust-step h3 {
  font-family: var(--font-heading);
  font-size: var(--fs-h4);
  color: var(--color-primary);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.exhaust-step p {
  font-size: var(--fs-sm);
  color: var(--color-gray-dark);
  line-height: 1.65;
  max-width: 280px;
  margin: 0 auto;
}

/* ── FAQ Section ── */
.faq-section--exhaust {
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
}
.faq-section--exhaust .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.faq-section--exhaust .section-title h2 {
  text-wrap: balance;
}
.faq-list--exhaust {
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
.related-services--exhaust {
  background: var(--color-bg);
  padding: var(--space-16) 0;
}
.related-services--exhaust .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.related-services--exhaust .section-title h2 {
  text-wrap: balance;
}

/* ── CTA Banner ── */
.cta-exhaust {
  background: var(--color-primary);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.cta-exhaust::before {
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
.cta-exhaust .container {
  position: relative;
  z-index: 1;
  text-align: center;
}
.cta-exhaust h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.cta-exhaust .answer-block {
  color: rgba(255, 255, 255, 0.85);
  max-width: 640px;
  margin: 0 auto var(--space-6);
  line-height: 1.75;
}
.cta-exhaust .btn-group {
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
<section class="hero hero--exhaust">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Exhaust System Repair</span>
    </nav>
    <h1><span class="text-accent">Exhaust System Repair</span> in Manchester, NH</h1>
    <p class="hero-answer"><?php echo htmlspecialchars($siteName); ?> is a licensed New Hampshire auto repair shop at 518 Silver St in Manchester, providing complete exhaust system repair and replacement since <?php echo $yearEstablished; ?>. We diagnose and fix mufflers, catalytic converters, exhaust manifolds, resonators, pipes, and O2 sensors for every make and model in the Merrimack Valley.</p>
    <div class="hero-cta-group">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" class="btn btn-accent btn-lg"><i data-lucide="phone" style="width:18px;height:18px;"></i> Call Now</a>
      <?php endif; ?>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Get Free Estimate</a>
    </div>
  </div>
  <div class="divider-diagonal">
    <svg viewBox="0 0 1440 65" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,65 L0,30 Q360,0 720,20 Q1080,40 1440,0 L1440,65 Z"/>
    </svg>
  </div>
</section>

<!-- Symptoms Section -->
<section class="symptoms-section" aria-label="Exhaust system warning signs">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Warning Signs</span>
      <h2>What are the <span class="text-accent">signs</span> your exhaust system needs repair in Manchester?</h2>
      <p class="answer-block">Manchester drivers contend with aggressive road salt on I-293, Route 101, and city streets that corrodes exhaust components faster than the national average. If your vehicle shows any of these four symptoms, your muffler, catalytic converter, or exhaust pipes likely need professional attention at our 518 Silver St shop.</p>
    </div>

    <div class="symptom-grid">
      <article class="symptom-card card-tint-1 reveal-up reveal-delay-1" data-number="01">
        <div class="symptom-card__icon"><i data-lucide="volume-2"></i></div>
        <h3>Loud Rumbling or Roaring</h3>
        <p>A sudden increase in exhaust noise — especially a deep rumble on acceleration — signals a hole in your muffler or a cracked exhaust pipe. NH road salt eats through steel exhaust components, and the damage often starts underneath where you cannot see it.</p>
      </article>
      <article class="symptom-card card-tint-2 reveal-left reveal-delay-2" data-number="02">
        <div class="symptom-card__icon"><i data-lucide="wind"></i></div>
        <h3>Exhaust Smell in Cabin</h3>
        <p>Fumes entering your cabin through the HVAC system or floor seams indicate an exhaust leak upstream of the catalytic converter. This is a carbon monoxide hazard — do not ignore this symptom, especially during Manchester winters when windows stay closed.</p>
      </article>
      <article class="symptom-card card-tint-3 reveal-right reveal-delay-3" data-number="03">
        <div class="symptom-card__icon"><i data-lucide="fuel"></i></div>
        <h3>Reduced Fuel Economy</h3>
        <p>A failing catalytic converter or exhaust restriction forces your engine to work harder, burning more fuel on every trip across Manchester. A 10-15% drop in gas mileage often traces back to exhaust system problems that a diagnostic scan at 518 Silver St can identify.</p>
      </article>
      <article class="symptom-card card-tint-1 reveal-up reveal-delay-4" data-number="04">
        <div class="symptom-card__icon"><i data-lucide="search"></i></div>
        <h3>Visible Rust or Holes</h3>
        <p>Orange rust patches, flaking metal, or pinhole leaks on your exhaust pipes and muffler are early warnings of failure. Once corrosion breaks through, exhaust gases escape before reaching the tailpipe — creating noise, fumes, and an NH inspection failure.</p>
      </article>
    </div>
  </div>
</section>

<!-- SVG Divider — Diagonal Slope -->
<div class="divider-diagonal--top">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" fill="var(--color-bg-alt)">
    <path d="M0,0 L1440,55 L1440,55 L0,55 Z"/>
  </svg>
</div>

<!-- Service Detail -->
<section class="service-detail--exhaust" aria-label="Exhaust repair service details">
  <div class="floating-pipe" aria-hidden="true"></div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What We Fix</span>
      <h2>What does <span class="text-accent">exhaust system repair</span> cover at our Manchester shop?</h2>
      <p class="answer-block">Our exhaust repair service at 518 Silver St covers every component from the exhaust manifold to the tailpipe. We inspect, diagnose, and replace corroded or damaged parts using OEM-equivalent components — backed by <?php echo $yearsInBusiness; ?> years of drivetrain and exhaust experience in Manchester, NH.</p>
    </div>

    <div class="exhaust-detail-grid">
      <div class="detail-text reveal-up">
        <p>Your exhaust system routes toxic combustion gases away from the cabin, reduces engine noise, and controls emissions through the catalytic converter. In Manchester, where winter road salt accelerates corrosion on every metal surface beneath your vehicle, exhaust components fail sooner than factory service intervals predict. <?php echo htmlspecialchars($siteName); ?> handles the full spectrum of exhaust repair near me in Manchester — from a straightforward muffler weld to a complete system replacement.</p>

        <p>We start every exhaust job with a visual and pressure inspection. Lifting the vehicle on our rack, we check each joint, clamp, hanger, and seam for leaks, corrosion, and structural integrity. If your check engine light is on, we pull the code — P0420 and P0430 codes typically point to catalytic converter efficiency problems that we confirm with live O2 sensor data before recommending replacement.</p>

        <p><strong>Road salt reality:</strong> Vehicles driven daily on Manchester streets, especially through the Elm Street corridor and I-293 interchanges, absorb salt spray from November through April. That spray pools in exhaust joints and seams, corroding steel from the outside in. We see exhaust failures at 60,000 miles on Manchester vehicles that would last 100,000 miles in dry climates. Regular undercarriage washes help, but once corrosion starts, repair is the only fix.</p>

        <p><strong>Complete system capability:</strong> Whether you need a single pipe section welded, a catalytic converter replaced to pass NH inspection, or a full manifold-back exhaust system installed, our Manchester shop has the equipment, parts access, and experience to handle it. We work on domestic, import, and light truck exhaust systems.</p>
      </div>

      <ul class="component-list--exhaust reveal-right">
        <li><i data-lucide="check-circle"></i> <strong>Muffler</strong> Noise reduction, replacement or weld repair</li>
        <li><i data-lucide="check-circle"></i> <strong>Catalytic Converter</strong> Emissions control, P0420/P0430 diagnosis</li>
        <li><i data-lucide="check-circle"></i> <strong>Exhaust Manifold</strong> Gasket replacement, crack repair</li>
        <li><i data-lucide="check-circle"></i> <strong>Resonator</strong> Secondary noise dampening</li>
        <li><i data-lucide="check-circle"></i> <strong>Exhaust Pipes</strong> Mid-pipe, Y-pipe, tailpipe sections</li>
        <li><i data-lucide="check-circle"></i> <strong>Hangers & Clamps</strong> Mounting hardware replacement</li>
        <li><i data-lucide="check-circle"></i> <strong>Gaskets & Seals</strong> Joint leak elimination</li>
        <li><i data-lucide="check-circle"></i> <strong>O2 Sensors</strong> Upstream and downstream sensor testing</li>
      </ul>
    </div>
  </div>
</section>

<!-- SVG Divider — Wave for NH Inspection section -->
<div class="divider-wave">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" fill="var(--color-primary)">
    <path d="M0,50 C240,0 480,40 720,20 C960,0 1200,40 1440,10 L1440,50 Z"/>
  </svg>
</div>

<!-- NH Inspection Section -->
<section class="nh-inspection" aria-label="NH exhaust inspection requirements">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label" style="color:var(--color-accent);">NH Inspection</span>
      <h2>Will a <span class="text-accent">bad exhaust</span> fail New Hampshire safety inspection?</h2>
      <p class="answer-block">Yes. New Hampshire requires an annual safety inspection for all registered vehicles, and the exhaust system is a mandatory checkpoint. A damaged muffler, missing catalytic converter, or exhaust leak will result in a rejection sticker — and you have 60 days to repair and reinspect before facing registration suspension.</p>
    </div>

    <div class="inspection-content">
      <div class="inspection-card reveal-up reveal-delay-1">
        <div class="inspection-card__icon"><i data-lucide="shield-check"></i></div>
        <h3>Leak-Free Requirement</h3>
        <p>NH inspectors check for exhaust leaks at every joint, gasket, and pipe seam. Any audible or visible leak — even a small one at the manifold — results in a failure. Our Manchester shop pressure-tests your system to find leaks the inspector would catch.</p>
      </div>
      <div class="inspection-card reveal-up reveal-delay-2">
        <div class="inspection-card__icon"><i data-lucide="eye"></i></div>
        <h3>Visual Corrosion Check</h3>
        <p>Inspectors look for holes, excessive rust, and structural weakness in the exhaust. A rusted-through muffler or pipe with visible daylight is an automatic fail. Manchester road salt makes this the most common exhaust-related inspection failure we see.</p>
      </div>
      <div class="inspection-card reveal-up reveal-delay-3">
        <div class="inspection-card__icon"><i data-lucide="gauge"></i></div>
        <h3>Catalytic Converter Present</h3>
        <p>NH requires all vehicles to retain their factory catalytic converter. A missing, hollowed-out, or non-compliant converter fails inspection. We install EPA-compliant converters that meet both NH standards and federal emissions requirements.</p>
      </div>
      <div class="inspection-card reveal-up reveal-delay-4">
        <div class="inspection-card__icon"><i data-lucide="wrench"></i></div>
        <h3>Secure Mounting</h3>
        <p>Loose, hanging, or disconnected exhaust components fail immediately. Broken hangers and missing clamps let pipes sag, rattle, and eventually separate on Route 101 traffic or Merrimack Valley highway speeds. We replace all worn mounting hardware during repair.</p>
      </div>
    </div>
  </div>
</section>

<!-- SVG Divider -->
<div class="divider-diagonal--top">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" fill="var(--color-bg)">
    <path d="M0,55 L1440,0 L1440,55 L0,55 Z"/>
  </svg>
</div>

<!-- Process -->
<section class="process-section--exhaust" aria-label="Exhaust repair process">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Our Process</span>
      <h2>How does <?php echo htmlspecialchars($siteName); ?> handle <span class="text-accent">exhaust repair</span> in Manchester?</h2>
      <p class="answer-block">We follow a four-step process on every exhaust job at our 518 Silver St shop. From initial inspection through final emissions verification, every step is designed to find the real failure point, fix it correctly, and confirm the repair before you drive away on Manchester roads.</p>
    </div>

    <div class="exhaust-timeline">
      <div class="exhaust-step reveal-up reveal-delay-1">
        <div class="exhaust-step__number">1</div>
        <h3>Inspect & Diagnose</h3>
        <p>We lift your vehicle, visually inspect every exhaust component, pressure-test for leaks, and pull any check engine codes. We identify the exact failure point before recommending parts.</p>
      </div>
      <div class="exhaust-step reveal-up reveal-delay-2">
        <div class="exhaust-step__number">2</div>
        <h3>Quote & Approve</h3>
        <p>You receive a written estimate with part names, OEM or aftermarket options, labor time, and total cost. No work begins until you approve. We explain what failed and how it affects your Manchester commute.</p>
      </div>
      <div class="exhaust-step reveal-up reveal-delay-3">
        <div class="exhaust-step__number">3</div>
        <h3>Repair & Replace</h3>
        <p>We remove corroded components, clean connection points, and install new parts with fresh gaskets, clamps, and hangers. Every joint is sealed and torqued to spec to prevent future leaks.</p>
      </div>
      <div class="exhaust-step reveal-up reveal-delay-4">
        <div class="exhaust-step__number">4</div>
        <h3>Test & Verify</h3>
        <p>We start the engine, check for leaks at every joint under load, verify O2 sensor readings, and road-test on Manchester streets to confirm noise elimination and proper exhaust flow.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<div class="divider-wave">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" fill="var(--color-bg-alt)">
    <path d="M0,0 C360,50 720,0 1080,50 C1260,25 1440,0 1440,0 L1440,50 L0,50 Z"/>
  </svg>
</div>
<section class="faq-section--exhaust" aria-label="Exhaust repair FAQs">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">FAQs</span>
      <h2>What do Manchester drivers ask about <span class="text-accent">exhaust repair</span>?</h2>
      <p class="answer-block">These are the questions we hear most often from customers at our 518 Silver St shop. If your question is not answered here, call us or request an estimate online — we respond within one business day.</p>
    </div>

    <div class="faq-list--exhaust">
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
<section class="related-services--exhaust" aria-label="Related auto repair services">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Related Services</span>
      <h2>What other services might your <span class="text-accent">vehicle need</span>?</h2>
      <p class="answer-block">Exhaust problems often coincide with engine performance issues, suspension wear from the same road conditions, and drivetrain stress. These three services frequently pair with exhaust repair at our Manchester shop.</p>
    </div>

    <div class="services-grid" style="grid-template-columns: repeat(3, 1fr);">
      <?php
      $relatedNames = ['Suspension Repair', 'Engine Repair', 'Driveshaft Repair & Replacement'];
      $relatedImages = [
          'Suspension Repair'               => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=600&q=75',
          'Engine Repair'                    => 'https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?w=600&q=75',
          'Driveshaft Repair & Replacement'  => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&q=75',
      ];
      $relatedIcons = [
          'Suspension Repair'               => 'move-vertical',
          'Engine Repair'                    => 'cog',
          'Driveshaft Repair & Replacement'  => 'rotate-cw',
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
<section class="cta-exhaust" aria-label="Schedule exhaust repair">
  <div class="container">
    <h2>Ready to fix your <span class="text-accent">exhaust system</span> in Manchester?</h2>
    <p class="answer-block">Walk-ins welcome Monday through Friday, 8 AM to 5 PM at 518 Silver St in Manchester, NH. Or request a free estimate online — we respond within one business day with parts, labor, and total cost for your specific vehicle and exhaust issue.</p>
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

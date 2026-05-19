<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

// ─── Page Setup ────────────────────────────────────────────────
$pageTitle       = "Driveshaft Repair & Replacement Manchester NH | Jon's Shafts & Stuff, LLC";
$pageDescription = "Manchester NH's driveshaft specialists since 1993. U-joint replacement, center bearing repair, CV joints, driveshaft balancing, and full replacement for all makes and models at 518 Silver St.";
$canonicalUrl    = $siteUrl . '/services/driveshaft-repair-replacement/';
$currentPage     = 'services';
$heroImagePreload = 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=1920&q=80';
$cssVersion      = '2';

// ─── Schema ────────────────────────────────────────────────────
$driveshaftService = findService('Driveshaft Repair & Replacement');

$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Services', 'url' => $siteUrl . '/services/'],
    ['name' => 'Driveshaft Repair & Replacement', 'url' => ''],
]);

$serviceSchema = generateServiceSchema($driveshaftService);

$faqs = [
    [
        'question' => 'What causes driveshaft vibration while driving in Manchester?',
        'answer'   => 'Driveshaft vibration typically stems from worn U-joints, an out-of-balance driveshaft, or a failing center support bearing. Manchester roads — especially I-93 and I-293 with their frost heaves and expansion joints — accelerate wear on these components. We road test your vehicle at highway speed to pinpoint the vibration source before recommending repairs.',
    ],
    [
        'question' => 'How long do U-joints last before they need replacement?',
        'answer'   => 'U-joints typically last 100,000 to 150,000 miles under normal conditions, but Manchester driving shortens that lifespan. Frost heaves, pothole impacts on Route 101, and frequent stop-and-go driving on Elm Street put extra stress on U-joints. We recommend inspection every 50,000 miles or at the first sign of clunking during gear changes.',
    ],
    [
        'question' => 'Can you repair 4WD and AWD driveshafts?',
        'answer'   => 'Yes. Jon\'s Shafts & Stuff handles front driveshafts, rear driveshafts, and transfer case output shafts on all 4WD and AWD platforms. Many Manchester drivers run Subarus, Jeeps, and trucks that rely on multiple driveshafts. We stock common U-joints and CV joints for these vehicles and can source specialty parts within 1-2 business days.',
    ],
    [
        'question' => 'Should I rebuild my driveshaft or replace it entirely?',
        'answer'   => 'If the driveshaft tube is straight and undamaged, rebuilding with new U-joints, yokes, or center bearings is usually the better value — typically $200 to $600 versus $500 to $1,200 for a complete replacement. We measure runout on every shaft to determine if rebuilding is viable. A bent or cracked tube always requires full replacement.',
    ],
    [
        'question' => 'How long does driveshaft repair take at your Manchester shop?',
        'answer'   => 'Most single-component repairs like U-joint replacement take 1.5 to 3 hours. Center support bearing replacement runs 2 to 4 hours. A full driveshaft removal, rebuild, and balance can take 4 to 6 hours. We aim for same-day completion on all standard driveshaft repairs at our 518 Silver St location.',
    ],
    [
        'question' => 'What warranty do you offer on driveshaft repairs?',
        'answer'   => 'All driveshaft repairs at Jon\'s Shafts & Stuff include a 12-month / 12,000-mile parts and labor warranty. We use Spicer, Dana, and other OEM-equivalent driveline components. If a U-joint or bearing we installed fails within warranty, we replace it at no charge — parts and labor included.',
    ],
    [
        'question' => 'How do I know if the clunking noise is the driveshaft or the transmission?',
        'answer'   => 'Driveshaft clunking is most pronounced during gear transitions — shifting from park to drive, or accelerating from a stop. Transmission noise tends to be more constant and pitch-related. We perform a lift inspection at our Manchester shop to visually and physically check each driveline component, isolating the noise source before recommending any repair.',
    ],
    [
        'question' => 'Do you offer driveshaft balancing as a standalone service?',
        'answer'   => 'Yes. Driveshaft balancing is available as a standalone service for $100 to $200. An imbalanced driveshaft causes vibration that worsens at highway speed — something Manchester commuters on I-93 notice immediately. We balance shafts on-vehicle or on a dedicated fixture depending on the application.',
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
     DRIVESHAFT REPAIR & REPLACEMENT — Jon's Shafts & Stuff, LLC
     FLAGSHIP Solo Service Page | Page One Insights
     ═══════════════════════════════════════════════════════════ -->

<style>
/* ═══ Driveshaft Repair & Replacement — Flagship Page-Specific Styles ═══ */

/* ── TECHNIQUE 1: Layered Hero with gradient overlay + noise texture ── */
.hero--driveshaft {
  min-height: 62vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background-image: url('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=1920&q=80');
  background-size: cover;
  background-position: center 35%;
  position: relative;
  overflow: hidden;
  padding: calc(var(--nav-height) + var(--space-16)) var(--space-4) var(--space-16);
}
.hero--driveshaft::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    170deg,
    rgba(74, 106, 140, 0.95) 0%,
    rgba(54, 81, 107, 0.92) 45%,
    rgba(212, 155, 42, 0.3) 100%
  );
  z-index: 1;
}
.hero--driveshaft::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.35;
  pointer-events: none;
  z-index: 1;
}
.hero--driveshaft .container {
  position: relative;
  z-index: 2;
  max-width: var(--max-width);
}
.hero--driveshaft h1 {
  color: var(--color-white);
  font-size: var(--fs-h1);
  font-family: var(--font-heading);
  font-weight: 900;
  line-height: 1.08;
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.hero--driveshaft .hero-answer {
  color: rgba(255, 255, 255, 0.9);
  max-width: 720px;
  margin: 0 auto var(--space-6);
  font-size: var(--fs-body);
  line-height: 1.75;
}
.hero--driveshaft .breadcrumb {
  display: flex;
  justify-content: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: rgba(255, 255, 255, 0.6);
  margin-bottom: var(--space-6);
}
.hero--driveshaft .breadcrumb a {
  color: var(--color-accent);
  transition: color var(--transition-fast);
}
.hero--driveshaft .breadcrumb a:hover {
  color: var(--color-white);
}
.hero--driveshaft .breadcrumb-sep {
  color: rgba(255, 255, 255, 0.4);
}
.hero--driveshaft .hero-cta-group {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
  margin-top: var(--space-6);
}

/* ── Trust Badges Row (Flagship extra) ── */
.hero-trust-badges {
  display: flex;
  gap: var(--space-6);
  justify-content: center;
  flex-wrap: wrap;
  margin-top: var(--space-8);
}
.hero-trust-badge {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-sm);
  font-weight: 600;
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: var(--radius-full);
  padding: var(--space-2) var(--space-4);
  backdrop-filter: blur(6px);
}
.hero-trust-badge i,
.hero-trust-badge svg {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
}

/* ── TECHNIQUE 2: SVG Section Divider — Gear/Cog-Tooth Pattern ── */
.divider-gear {
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 100%;
  z-index: 3;
  line-height: 0;
}
.divider-gear svg {
  display: block;
  width: 100%;
  height: 60px;
}
.divider-wave {
  line-height: 0;
  position: relative;
  z-index: 2;
  margin-top: -1px;
}
.divider-wave svg {
  display: block;
  width: 100%;
  height: 55px;
}
.divider-slant-ds {
  line-height: 0;
  position: relative;
  z-index: 2;
  margin-top: -1px;
}
.divider-slant-ds svg {
  display: block;
  width: 100%;
  height: 55px;
}

/* ── Expert Positioning Section ── */
.expert-section {
  background: var(--color-bg);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.expert-section .container {
  position: relative;
  z-index: 1;
}
.expert-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.expert-section .section-title h2 {
  text-wrap: balance;
}
.expert-layout {
  display: grid;
  grid-template-columns: 280px 1fr;
  gap: var(--space-10);
  align-items: start;
  max-width: var(--max-width);
  margin: 0 auto;
}
@media (max-width: 768px) {
  .expert-layout {
    grid-template-columns: 1fr;
    text-align: center;
  }
}
.expert-stat {
  text-align: center;
  padding: var(--space-8);
  border-radius: var(--radius-lg);
  background: var(--color-card-tint-1);
  position: sticky;
  top: calc(var(--nav-height) + var(--space-4));
}
.expert-stat__number {
  font-family: var(--font-heading);
  font-size: clamp(3.5rem, 7vw, 5.5rem);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-2);
}
.expert-stat__label {
  font-family: var(--font-heading);
  font-size: var(--fs-h4);
  color: var(--color-primary);
  font-weight: 700;
}
.expert-stat__sublabel {
  font-size: var(--fs-sm);
  color: var(--color-gray);
  margin-top: var(--space-1);
}
.expert-content {
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}
.expert-content p {
  line-height: 1.75;
  color: var(--color-gray-dark);
}
.expert-content strong {
  color: var(--color-primary);
}

/* Floating gear accent */
.floating-gear {
  position: absolute;
  top: 8%;
  right: 2%;
  width: 160px;
  height: 160px;
  pointer-events: none;
  z-index: 0;
  opacity: 0.05;
  animation: gear-spin 30s linear infinite;
}
@keyframes gear-spin {
  to { transform: rotate(360deg); }
}
@media (prefers-reduced-motion: reduce) {
  .floating-gear { animation: none; }
}
.floating-gear-sm {
  position: absolute;
  bottom: 12%;
  left: 3%;
  width: 90px;
  height: 90px;
  pointer-events: none;
  z-index: 0;
  opacity: 0.04;
  animation: gear-spin-reverse 22s linear infinite;
}
@keyframes gear-spin-reverse {
  to { transform: rotate(-360deg); }
}
@media (prefers-reduced-motion: reduce) {
  .floating-gear-sm { animation: none; }
}

/* ── TECHNIQUE 3: Tinted symptom cards with hover lift ── */
.symptoms-section {
  background: var(--color-bg-alt);
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
.symptoms-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
}
@media (max-width: 1024px) {
  .symptoms-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  .symptoms-grid {
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

/* ── Service Breakdown Section ── */
.breakdown-section {
  background: var(--color-bg);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.breakdown-section .container {
  position: relative;
  z-index: 1;
}
.breakdown-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.breakdown-section .section-title h2 {
  text-wrap: balance;
}
.breakdown-content {
  max-width: var(--content-width);
  margin: 0 auto;
}
.breakdown-content p {
  margin-bottom: var(--space-6);
  line-height: 1.75;
  color: var(--color-gray-dark);
}
.breakdown-content strong {
  color: var(--color-primary);
}
.component-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-4);
  margin: var(--space-8) 0;
}
@media (max-width: 768px) {
  .component-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 480px) {
  .component-grid {
    grid-template-columns: 1fr;
  }
}
.component-chip {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  padding: var(--space-4) var(--space-5);
  border-radius: var(--radius-lg);
  background: var(--color-bg-alt);
  border: 1px solid var(--color-border);
  font-size: var(--fs-body);
  color: var(--color-gray-dark);
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
}
.component-chip:hover {
  border-color: var(--color-accent);
  box-shadow: var(--shadow-sm);
}
.component-chip i,
.component-chip svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
}

/* ── TECHNIQUE 4: Process timeline with numbered steps + connecting line ── */
.process-section-ds {
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  position: relative;
}
.process-section-ds .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.process-section-ds .section-title h2 {
  text-wrap: balance;
}
.process-timeline-ds {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  position: relative;
}
@media (max-width: 1024px) {
  .process-timeline-ds {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  .process-timeline-ds {
    grid-template-columns: 1fr;
  }
}
.process-timeline-ds::before {
  content: '';
  position: absolute;
  top: 40px;
  left: 10%;
  right: 10%;
  height: 3px;
  background: linear-gradient(90deg, var(--color-accent), rgba(var(--color-primary-rgb), 0.3), var(--color-accent));
  z-index: 0;
  border-radius: var(--radius-full);
}
@media (max-width: 1024px) {
  .process-timeline-ds::before {
    display: none;
  }
}
.process-step-ds {
  text-align: center;
  position: relative;
  z-index: 1;
}
.process-step-ds__number {
  width: 76px;
  height: 76px;
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
  border: 3px solid var(--color-bg-alt);
}
.process-step-ds:hover .process-step-ds__number {
  transform: scale(1.1);
  background: var(--color-accent);
}
.process-step-ds h3 {
  font-family: var(--font-heading);
  font-size: var(--fs-h4);
  color: var(--color-primary);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.process-step-ds p {
  font-size: var(--fs-sm);
  color: var(--color-gray-dark);
  line-height: 1.65;
  max-width: 280px;
  margin: 0 auto;
}

/* ── Cost Section (dark bg with glassmorphism cards) ── */
.cost-section-ds {
  background: var(--color-primary);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.cost-section-ds::before {
  content: '';
  position: absolute;
  bottom: -35%;
  left: -8%;
  width: 520px;
  height: 520px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.07);
  pointer-events: none;
}
.cost-section-ds::after {
  content: '';
  position: absolute;
  top: -25%;
  right: -5%;
  width: 380px;
  height: 380px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.05);
  pointer-events: none;
}
.cost-section-ds .container {
  position: relative;
  z-index: 1;
}
.cost-section-ds .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.cost-section-ds .section-title h2 {
  color: var(--color-white);
  text-wrap: balance;
}
.cost-section-ds .answer-block {
  color: rgba(255, 255, 255, 0.85);
  max-width: 700px;
  margin: 0 auto var(--space-8);
  text-align: center;
  line-height: 1.75;
}
.pricing-grid-ds {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  max-width: 960px;
  margin: 0 auto;
}
@media (max-width: 768px) {
  .pricing-grid-ds {
    grid-template-columns: 1fr;
  }
}
.pricing-card-ds {
  background: rgba(255, 255, 255, 0.08);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  text-align: center;
  transition: transform var(--transition-base), background var(--transition-base);
}
.pricing-card-ds:hover {
  transform: translateY(-5px);
  background: rgba(255, 255, 255, 0.14);
}
.pricing-card-ds--featured {
  border-color: var(--color-accent);
  background: rgba(212, 155, 42, 0.12);
  position: relative;
}
.pricing-card-ds--featured::before {
  content: 'Most Common';
  position: absolute;
  top: 0;
  left: 50%;
  transform: translate(-50%, -50%);
  background: var(--color-accent);
  color: var(--color-white);
  font-size: var(--fs-xs);
  font-weight: 700;
  padding: var(--space-1) var(--space-4);
  border-radius: var(--radius-full);
  text-transform: uppercase;
  letter-spacing: 0.05em;
}
.pricing-card-ds__range {
  font-family: var(--font-heading);
  font-size: var(--font-size-3xl);
  font-weight: 900;
  color: var(--color-accent);
  margin-bottom: var(--space-2);
}
.pricing-card-ds__label {
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 700;
  margin-bottom: var(--space-3);
}
.pricing-card-ds__desc {
  font-size: var(--fs-sm);
  color: rgba(255, 255, 255, 0.7);
  line-height: 1.6;
}
.cost-note-ds {
  text-align: center;
  color: rgba(255, 255, 255, 0.55);
  font-size: var(--fs-sm);
  margin-top: var(--space-8);
  max-width: 640px;
  margin-left: auto;
  margin-right: auto;
}

/* ── FAQ Section ── */
.faq-section-ds {
  background: var(--color-bg);
  padding: var(--space-16) 0;
}
.faq-section-ds .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.faq-section-ds .section-title h2 {
  text-wrap: balance;
}
.faq-list-ds {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.faq-item-ds {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-sm);
  overflow: hidden;
  transition: box-shadow var(--transition-base);
  border-left: 3px solid transparent;
}
.faq-item-ds:hover {
  box-shadow: var(--shadow-md);
}
.faq-item-ds[open] {
  border-left-color: var(--color-accent);
}
.faq-item-ds summary {
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
.faq-item-ds summary::-webkit-details-marker {
  display: none;
}
.faq-item-ds summary::after {
  content: '+';
  font-family: var(--font-heading);
  font-size: var(--font-size-2xl);
  font-weight: 300;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.faq-item-ds[open] summary::after {
  content: '\2212';
  transform: rotate(180deg);
}
.faq-item-ds .faq-answer {
  padding: 0 var(--space-6) var(--space-6);
  color: var(--color-gray-dark);
  line-height: 1.75;
  font-size: var(--fs-body);
}

/* ── Related Services ── */
.related-services-ds {
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
}
.related-services-ds .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.related-services-ds .section-title h2 {
  text-wrap: balance;
}

/* ── CTA Banner (Flagship — accented) ── */
.cta-driveshaft {
  background: var(--color-primary);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.cta-driveshaft::before {
  content: '';
  position: absolute;
  top: -25%;
  right: -8%;
  width: 480px;
  height: 480px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.09);
  pointer-events: none;
}
.cta-driveshaft::after {
  content: '';
  position: absolute;
  bottom: -20%;
  left: -5%;
  width: 320px;
  height: 320px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.05);
  pointer-events: none;
}
.cta-driveshaft .container {
  position: relative;
  z-index: 1;
  text-align: center;
}
.cta-driveshaft h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.cta-driveshaft .answer-block {
  color: rgba(255, 255, 255, 0.85);
  max-width: 660px;
  margin: 0 auto var(--space-6);
  line-height: 1.75;
}
.cta-driveshaft .btn-group {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── Answer block ── */
.answer-block {
  line-height: 1.75;
  color: var(--color-gray-dark);
}
.section-title .answer-block {
  max-width: 700px;
  margin-left: auto;
  margin-right: auto;
}

/* ── Last updated stamp ── */
.last-updated-ds {
  text-align: center;
  font-size: var(--fs-sm);
  color: var(--color-gray);
  padding: var(--space-6) 0;
  background: var(--color-bg-alt);
}
</style>

<!-- ══════════════════ HERO ══════════════════ -->
<section class="hero hero--driveshaft">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Driveshaft Repair &amp; Replacement</span>
    </nav>

    <h1>Manchester's <span class="text-accent">Driveshaft Specialists</span> Since 1993</h1>

    <p class="hero-answer">Driveshaft repair is the namesake service at <?php echo htmlspecialchars($siteName); ?>. Since <?php echo $yearEstablished; ?>, our 518 Silver St shop has diagnosed and repaired driveshaft vibrations, U-joint failures, center bearing wear, and CV joint damage for every make and model in Manchester, NH. This is what we do best — and what we have done longer than any independent shop in the region.</p>

    <div class="hero-cta-group">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" class="btn btn-accent btn-lg"><i data-lucide="phone" style="width:18px;height:18px;"></i> Call Now</a>
      <?php endif; ?>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Get Free Estimate</a>
    </div>

    <div class="hero-trust-badges">
      <span class="hero-trust-badge"><i data-lucide="clock"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      <span class="hero-trust-badge"><i data-lucide="rotate-cw"></i> Driveshaft Specialists</span>
      <span class="hero-trust-badge"><i data-lucide="car"></i> All Makes &amp; Models</span>
    </div>
  </div>

  <!-- Gear-tooth SVG divider -->
  <div class="divider-gear">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,60 L0,40 L60,40 L70,20 L80,40 L140,40 L150,20 L160,40 L220,40 L230,20 L240,40 L300,40 L310,20 L320,40 L380,40 L390,20 L400,40 L460,40 L470,20 L480,40 L540,40 L550,20 L560,40 L620,40 L630,20 L640,40 L700,40 L710,20 L720,40 L780,40 L790,20 L800,40 L860,40 L870,20 L880,40 L940,40 L950,20 L960,40 L1020,40 L1030,20 L1040,40 L1100,40 L1110,20 L1120,40 L1180,40 L1190,20 L1200,40 L1260,40 L1270,20 L1280,40 L1340,40 L1350,20 L1360,40 L1440,40 L1440,60 Z"/>
    </svg>
  </div>
</section>

<!-- ══════════════════ EXPERT POSITIONING ══════════════════ -->
<section class="expert-section" aria-label="Driveshaft expertise">
  <!-- Floating gear accents -->
  <svg class="floating-gear" viewBox="0 0 100 100" aria-hidden="true">
    <path d="M50 10 L54 2 L58 10 L66 6 L64 14 L72 14 L68 22 L76 26 L68 30 L72 38 L64 36 L66 44 L58 40 L54 48 L50 40 L46 48 L42 40 L34 44 L36 36 L28 38 L32 30 L24 26 L32 22 L28 14 L36 14 L34 6 L42 10 L46 2 Z" fill="currentColor" stroke="none"/>
    <circle cx="50" cy="25" r="10" fill="var(--color-bg)"/>
  </svg>
  <svg class="floating-gear-sm" viewBox="0 0 100 100" aria-hidden="true">
    <path d="M50 10 L54 2 L58 10 L66 6 L64 14 L72 14 L68 22 L76 26 L68 30 L72 38 L64 36 L66 44 L58 40 L54 48 L50 40 L46 48 L42 40 L34 44 L36 36 L28 38 L32 30 L24 26 L32 22 L28 14 L36 14 L34 6 L42 10 L46 2 Z" fill="currentColor" stroke="none"/>
    <circle cx="50" cy="25" r="10" fill="var(--color-bg)"/>
  </svg>

  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Our Specialty</span>
      <h2>Why is <?php echo htmlspecialchars($siteName); ?> Manchester's go-to <span class="text-accent">driveshaft repair</span> shop?</h2>
      <p class="answer-block">Jon's Shafts & Stuff built its reputation on driveshaft work — it is literally in the name. With <?php echo $yearsInBusiness; ?> years focused on drivetrain diagnostics and repair at 518 Silver St in Manchester, NH, we carry the parts, the tooling, and the hands-on experience that general repair shops simply do not have for driveline work.</p>
    </div>

    <div class="expert-layout">
      <div class="expert-stat reveal-left">
        <div class="expert-stat__number" data-counter="<?php echo $yearsInBusiness; ?>" data-suffix="+">0</div>
        <div class="expert-stat__label">Years</div>
        <div class="expert-stat__sublabel">Driveshaft specialists in Manchester</div>
      </div>

      <div class="expert-content reveal-right">
        <p><strong>Specialization matters.</strong> Driveshaft diagnosis is not guesswork — it requires road testing at speed, measuring runout with dial indicators, and understanding how vibration frequencies map to specific component failures. At <?php echo htmlspecialchars($siteName); ?>, driveshaft repair near me in Manchester is our primary discipline, not an afterthought on a menu of fifty services. That focus means faster, more accurate diagnosis and fewer unnecessary part replacements for every vehicle that rolls into our Manchester shop.</p>

        <p><strong>Parts in stock, not on order.</strong> We maintain an inventory of Spicer, Dana, and Neapco U-joints, center support bearings, and CV joints for the most common domestic and import applications. Most Manchester drivers who need a U-joint replacement or center bearing swap get same-day service because the part is already on the shelf at our 518 Silver St location — no waiting for next-day delivery while your vehicle sits on a lift.</p>

        <p><strong>Purpose-built diagnostics.</strong> Our shop runs driveshaft balancing equipment and precision measurement tools that most general repair facilities in Manchester do not invest in. We measure shaft runout to thousandths of an inch, balance assembled driveshafts on-vehicle, and verify repair quality at highway speed before returning your vehicle. Manchester commuters on I-93 and I-293 notice driveshaft vibration at 55-70 mph — we test at those speeds to confirm the problem is resolved.</p>
      </div>
    </div>
  </div>
</section>

<!-- SVG Divider — Wave -->
<div class="divider-wave">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" fill="var(--color-bg-alt)">
    <path d="M0,20 C240,55 480,0 720,30 C960,55 1200,5 1440,25 L1440,55 L0,55 Z"/>
  </svg>
</div>

<!-- ══════════════════ SYMPTOMS ══════════════════ -->
<section class="symptoms-section" aria-label="Driveshaft warning signs">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Warning Signs</span>
      <h2>What are the signs your <span class="text-accent">driveshaft needs repair</span> in Manchester?</h2>
      <p class="answer-block">Manchester drivers encounter road conditions — frost heaves on I-93, pothole clusters along Route 101, and rough railroad crossings near the Millyard — that accelerate driveshaft component wear. These four symptoms indicate your driveshaft, U-joints, or center bearing need professional inspection at our 518 Silver St shop.</p>
    </div>

    <div class="symptoms-grid">
      <article class="symptom-card card-tint-1 reveal-up reveal-delay-1" data-number="01">
        <div class="symptom-card__icon"><i data-lucide="activity"></i></div>
        <h3>Vibration at Highway Speed</h3>
        <p>A steady vibration felt through the floorboard or seat that intensifies between 55 and 70 mph. This typically points to an out-of-balance driveshaft or worn U-joints — especially noticeable on the I-93 stretch through Manchester heading toward Hooksett.</p>
      </article>
      <article class="symptom-card card-tint-2 reveal-left reveal-delay-2" data-number="02">
        <div class="symptom-card__icon"><i data-lucide="arrow-down-up"></i></div>
        <h3>Clunking During Gear Shifts</h3>
        <p>A metallic clunk when shifting from park to drive, or during acceleration from a stop. This usually signals worn U-joint caps or a failing slip yoke — components that absorb the torque spike during gear engagement on your Manchester commute.</p>
      </article>
      <article class="symptom-card card-tint-3 reveal-right reveal-delay-3" data-number="03">
        <div class="symptom-card__icon"><i data-lucide="volume-2"></i></div>
        <h3>Squeaking Under Acceleration</h3>
        <p>A rhythmic squeak that speeds up with vehicle speed, most audible at low speeds in parking lots or quiet Manchester neighborhoods off Elm Street. Dry or seized U-joint needle bearings produce this sound as the driveshaft rotates under load.</p>
      </article>
      <article class="symptom-card card-tint-1 reveal-up reveal-delay-4" data-number="04">
        <div class="symptom-card__icon"><i data-lucide="eye"></i></div>
        <h3>Visible U-Joint Wear</h3>
        <p>Rust-colored dust around the U-joint caps, visible play when you grab the driveshaft and twist, or grease leaking from the bearing cups. If you can see movement by hand at the U-joint, replacement is overdue and failure is imminent.</p>
      </article>
    </div>
  </div>
</section>

<!-- SVG Divider — Slant -->
<div class="divider-slant-ds">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" fill="var(--color-bg)">
    <path d="M0,0 L1440,55 L1440,55 L0,55 Z"/>
  </svg>
</div>

<!-- ══════════════════ SERVICE BREAKDOWN ══════════════════ -->
<section class="breakdown-section" aria-label="Driveshaft service details">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What We Repair</span>
      <h2>What does <span class="text-accent">driveshaft repair</span> include at our Manchester shop?</h2>
      <p class="answer-block">Driveshaft repair at <?php echo htmlspecialchars($siteName); ?> covers every rotating component between your transmission output and your differential input. We diagnose, repair, and replace individual parts or full assemblies — whichever approach saves you money without compromising reliability on Manchester roads.</p>
    </div>

    <div class="breakdown-content reveal-up">
      <div class="component-grid">
        <div class="component-chip"><i data-lucide="check-circle"></i> U-Joints (all sizes)</div>
        <div class="component-chip"><i data-lucide="check-circle"></i> Center Support Bearings</div>
        <div class="component-chip"><i data-lucide="check-circle"></i> CV Joints &amp; Boots</div>
        <div class="component-chip"><i data-lucide="check-circle"></i> Yokes &amp; Flanges</div>
        <div class="component-chip"><i data-lucide="check-circle"></i> Slip Joints</div>
        <div class="component-chip"><i data-lucide="check-circle"></i> Driveshaft Balancing</div>
      </div>

      <p><strong>U-joints</strong> are the most frequently replaced driveshaft component at our Manchester location. These cross-shaped bearings allow the driveshaft to flex as the suspension moves over Manchester's frost-heaved roads and uneven I-293 on-ramps. When a U-joint's needle bearings lose lubrication or wear past tolerance, the joint develops play that produces vibration and clunking. We stock Spicer and Dana U-joints for common applications and can press new joints same-day.</p>

      <p><strong>Center support bearings</strong> mount the two-piece driveshaft to the vehicle's undercarriage. The rubber isolator inside the bearing absorbs vibration and allows slight flex. Manchester's road salt and temperature swings — from sub-zero January nights to 90-degree July afternoons — deteriorate the rubber faster than the national average. A failing center bearing creates a low-frequency vibration that differs from U-joint vibration, and we use frequency analysis during road testing to distinguish between the two.</p>

      <p><strong>CV joints and boots</strong> appear on front-wheel-drive and all-wheel-drive vehicles common in Manchester — Subarus, Hondas, and Toyota RAVs dominate the local fleet. When a CV boot tears, road grit enters the joint and accelerates wear. We inspect CV joints during every driveshaft evaluation and replace boots or complete half-shafts depending on the damage level.</p>

      <p><strong>Driveshaft balancing</strong> is the final step after any component replacement. An imbalanced shaft vibrates at speed regardless of whether the individual parts are new. We balance on-vehicle or on a dedicated fixture, verifying elimination of vibration at Manchester highway speeds before returning your vehicle.</p>
    </div>
  </div>
</section>

<!-- SVG Divider — Wave (inverted) -->
<div class="divider-wave">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" fill="var(--color-bg-alt)">
    <path d="M0,35 C360,0 720,55 1080,15 C1260,0 1380,20 1440,30 L1440,55 L0,55 Z"/>
  </svg>
</div>

<!-- ══════════════════ PROCESS ══════════════════ -->
<section class="process-section-ds" aria-label="Driveshaft repair process">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Our Process</span>
      <h2>How does <?php echo htmlspecialchars($siteName); ?> diagnose and repair <span class="text-accent">driveshaft problems</span>?</h2>
      <p class="answer-block">Every driveshaft job at our 518 Silver St location follows a four-step process designed to identify the exact failure, repair it with the right parts, and verify the fix at highway speed. No guesswork, no unnecessary replacements — just targeted drivetrain repair backed by <?php echo $yearsInBusiness; ?> years of Manchester experience.</p>
    </div>

    <div class="process-timeline-ds">
      <div class="process-step-ds reveal-up reveal-delay-1">
        <div class="process-step-ds__number">1</div>
        <h3>Road Test Diagnosis</h3>
        <p>We drive your vehicle on local Manchester roads and I-93 at the speeds where you notice the problem. Vibration frequency, noise character, and speed range tell us which component is failing before we touch a wrench.</p>
      </div>
      <div class="process-step-ds reveal-up reveal-delay-2">
        <div class="process-step-ds__number">2</div>
        <h3>Lift Inspection</h3>
        <p>On the lift, we physically check every U-joint, the center bearing, CV joints, yokes, and the shaft itself. Dial indicator measurements confirm runout. You get a written estimate with the exact parts and labor cost.</p>
      </div>
      <div class="process-step-ds reveal-up reveal-delay-3">
        <div class="process-step-ds__number">3</div>
        <h3>Precision Repair</h3>
        <p>We press new U-joints, replace bearings, or install a complete driveshaft — whatever the diagnosis calls for. Spicer, Dana, and Neapco parts. Torque specs followed to the foot-pound on every fastener.</p>
      </div>
      <div class="process-step-ds reveal-up reveal-delay-4">
        <div class="process-step-ds__number">4</div>
        <h3>Balance &amp; Verify</h3>
        <p>After repair, we balance the driveshaft and road test at highway speed on Manchester roads. If vibration persists at any speed, we re-diagnose on the lift before returning your vehicle. No callbacks.</p>
      </div>
    </div>
  </div>
</section>

<!-- SVG Divider into Cost Section -->
<div class="divider-slant-ds">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" fill="var(--color-primary)">
    <path d="M0,55 L1440,0 L1440,55 L0,55 Z"/>
  </svg>
</div>

<!-- ══════════════════ COST ══════════════════ -->
<section class="cost-section-ds" aria-label="Driveshaft repair cost">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label" style="color:var(--color-accent);">Pricing</span>
      <h2>How much does <span class="text-accent">driveshaft repair</span> cost in Manchester, NH?</h2>
      <p class="answer-block">Driveshaft repair costs in Manchester range from $200 for a single U-joint replacement to $1,200 for a complete driveshaft assembly. The final price depends on which component has failed, your vehicle type, and whether the existing shaft can be rebuilt or needs full replacement. We provide a written estimate before starting any work at our 518 Silver St shop.</p>
    </div>

    <div class="pricing-grid-ds">
      <div class="pricing-card-ds pricing-card-ds--featured reveal-up reveal-delay-1">
        <div class="pricing-card-ds__range">$200&ndash;$450</div>
        <div class="pricing-card-ds__label">U-Joint Replacement</div>
        <p class="pricing-card-ds__desc">Single or double. Includes press-fit installation, phasing check, and road test. The most common driveshaft repair for Manchester vehicles with 80K+ miles.</p>
      </div>
      <div class="pricing-card-ds reveal-up reveal-delay-2">
        <div class="pricing-card-ds__range">$300&ndash;$600</div>
        <div class="pricing-card-ds__label">Center Support Bearing</div>
        <p class="pricing-card-ds__desc">Bearing and rubber isolator replaced as a unit. Includes shaft removal, installation, and driveshaft rebalance. Common on trucks and SUVs in the Manchester area.</p>
      </div>
      <div class="pricing-card-ds reveal-up reveal-delay-3">
        <div class="pricing-card-ds__range">$500&ndash;$1,200</div>
        <div class="pricing-card-ds__label">Full Driveshaft</div>
        <p class="pricing-card-ds__desc">Complete driveshaft replacement with new assembly. Includes U-joints, center bearing (if applicable), balancing, and road test verification at highway speed.</p>
      </div>
    </div>

    <p class="cost-note-ds reveal-up">Prices are typical ranges for Manchester, NH as of <?php echo date('Y'); ?>. Your exact cost depends on vehicle make, model, and specific failed components. We provide a free written estimate before any work begins.</p>
  </div>
</section>

<!-- ══════════════════ FAQ ══════════════════ -->
<section class="faq-section-ds" aria-label="Driveshaft repair FAQs">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">FAQs</span>
      <h2>What do Manchester drivers ask about <span class="text-accent">driveshaft repair</span>?</h2>
      <p class="answer-block">These are the questions we hear most from customers at our 518 Silver St shop in Manchester. If your question is not listed here, call us or request an estimate online — we respond within one business day with specific answers for your vehicle.</p>
    </div>

    <div class="faq-list-ds">
      <?php foreach ($faqs as $idx => $faq): ?>
      <details class="faq-item faq-item-ds reveal-up<?php echo $idx < 4 ? ' reveal-delay-' . ($idx + 1) : ''; ?>">
        <summary><?php echo htmlspecialchars($faq['question']); ?></summary>
        <div class="faq-answer"><?php echo htmlspecialchars($faq['answer']); ?></div>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- SVG Divider -->
<div class="divider-wave">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" fill="var(--color-bg-alt)">
    <path d="M0,25 C480,55 960,0 1440,35 L1440,55 L0,55 Z"/>
  </svg>
</div>

<!-- ══════════════════ RELATED SERVICES ══════════════════ -->
<section class="related-services-ds" aria-label="Related auto repair services">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Related Services</span>
      <h2>What other services might your <span class="text-accent">vehicle need</span>?</h2>
      <p class="answer-block">Driveshaft problems frequently overlap with transmission issues, suspension wear, and fluid leaks. These three services pair commonly with driveshaft repair at our Manchester shop.</p>
    </div>

    <div class="services-grid" style="grid-template-columns: repeat(3, 1fr);">
      <?php
      $relatedNames = ['Transmission Repair', 'Suspension Repair', 'Transmission Leak Inspection'];
      $relatedImages = [
          'Transmission Repair'          => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?w=600&q=75',
          'Suspension Repair'            => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=600&q=75',
          'Transmission Leak Inspection'  => 'https://images.unsplash.com/photo-1493238792000-8113da705763?w=600&q=75',
      ];
      $relatedIcons = [
          'Transmission Repair'          => 'settings',
          'Suspension Repair'            => 'move-vertical',
          'Transmission Leak Inspection'  => 'droplets',
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

<!-- ══════════════════ CTA ══════════════════ -->
<section class="cta-driveshaft" aria-label="Schedule driveshaft repair">
  <div class="container">
    <h2>Ready to fix your <span class="text-accent">driveshaft</span> in Manchester?</h2>
    <p class="answer-block"><?php echo htmlspecialchars($siteName); ?> is open Monday through Friday, 8 AM to 5 PM at 518 Silver St in Manchester, NH. Walk-ins welcome for driveshaft inspections. For a written estimate with exact parts and labor cost, request one online — we respond within one business day for every Manchester driveshaft inquiry.</p>
    <div class="btn-group">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" class="btn btn-accent btn-lg"><i data-lucide="phone" style="width:18px;height:18px;"></i> Call Now</a>
      <?php endif; ?>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Get Free Estimate</a>
    </div>
  </div>
</section>

<!-- Last Updated -->
<div class="last-updated-ds">
  <p>Last Updated: <?php echo date('F Y'); ?></p>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

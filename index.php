<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ────────────────────────────────────────────────
$pageTitle       = "Auto Repair Manchester NH | $siteName | Engine, Transmission & Driveshaft Specialists";
$pageDescription = "$siteName has delivered expert auto repair in Manchester, NH for $yearsInBusiness years. Engine diagnostics, transmission rebuilds, driveshaft repair, brakes, oil changes, and more at 518 Silver St.";
$canonicalUrl    = $siteUrl . '/';
$ogImage         = $logoUrl;
$currentPage     = 'home';
$heroImagePreload = 'https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?w=1920&q=80';
$useSwiper       = true;
$cssVersion      = '2';

// ─── FAQs ──────────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much does engine repair cost in Manchester, NH?',
        'answer'   => 'Engine repair costs in Manchester range from $200 for minor sensor replacements to $3,500+ for complete overhauls. We provide a free diagnostic and written estimate before any work begins so there are no surprises.',
    ],
    [
        'question' => 'How long does a transmission rebuild take?',
        'answer'   => 'Most transmission rebuilds take 3-5 business days depending on the vehicle and parts availability. We keep common rebuild kits in stock for popular makes like Honda, Toyota, Ford, and Chevy to minimize wait times.',
    ],
    [
        'question' => 'Do you offer same-day oil changes in Manchester?',
        'answer'   => 'Yes. Oil changes are typically completed within 30-45 minutes. We use OEM-spec synthetic and conventional oils. No appointment needed for standard oil changes — drive in during business hours.',
    ],
    [
        'question' => 'What are signs my driveshaft needs repair?',
        'answer'   => 'Vibrations at highway speed, clunking when shifting from park to drive, and a squeaking noise during acceleration all point to driveshaft problems. Worn U-joints are the most common cause — we inspect and replace them daily.',
    ],
    [
        'question' => 'Is Jon\'s Shafts & Stuff a licensed auto repair shop?',
        'answer'   => "Yes. We are a licensed New Hampshire auto repair facility at 518 Silver St in Manchester. We've been operating from this location since $yearEstablished, serving the greater Manchester area including Bedford, Hooksett, Goffstown, and Londonderry.",
    ],
    [
        'question' => 'Do you work on all vehicle makes and models?',
        'answer'   => 'We service all domestic and import vehicles — cars, trucks, and SUVs. From Honda Civics to Ford F-150s, our technicians have the diagnostic tools and training to handle any make or model.',
    ],
];

// ─── Schema Markup ─────────────────────────────────────────────
$schemaMarkup = generateFAQSchema($faqs);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══════════════════════════════════════════════════════════
     HOMEPAGE — Jon's Shafts & Stuff, LLC
     Phase 3 | Standard Tier | Page One Insights
     ═══════════════════════════════════════════════════════════ -->

<style>
/* ═══ Homepage-Specific Styles ═══ */

/* Hero 60/40 Split Layout */
.hero--home {
  min-height: 100vh;
  display: flex;
  align-items: center;
  background-image: url('https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?w=1920&q=80');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  position: relative;
  overflow: hidden;
  padding: calc(var(--nav-height) + var(--space-8)) 0 var(--space-8);
}
.hero--home::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(74,106,140,0.92) 0%, rgba(54,81,107,0.85) 40%, rgba(107,139,171,0.75) 100%);
  z-index: 1;
}
.hero--home::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.4;
  pointer-events: none;
  z-index: 1;
}
.hero--home .container {
  position: relative;
  z-index: 2;
}
.hero-split {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: var(--space-12);
  align-items: center;
}
.hero-text .hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--color-accent);
  margin-bottom: var(--space-4);
  padding: var(--space-1) var(--space-4);
  border: 1px solid rgba(212,155,42,0.3);
  border-radius: var(--radius-full);
  background: rgba(212,155,42,0.08);
}
.hero-text h1 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
  font-size: var(--fs-h1);
  letter-spacing: -0.03em;
}
.hero-text h1 .text-accent {
  color: var(--color-accent);
}
.hero-text .hero-subtitle {
  color: rgba(255,255,255,0.88);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  margin-bottom: var(--space-6);
  max-width: 520px;
}
.hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.hero-trust {
  display: flex;
  gap: var(--space-5);
  flex-wrap: wrap;
}
.hero-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255,255,255,0.8);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.hero-trust-item i,
.hero-trust-item svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
}

/* Hero Form Card */
.hero-form-card {
  background: rgba(255,255,255,0.07);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: var(--radius-xl);
  padding: var(--space-8) var(--space-6);
  box-shadow: 0 20px 60px rgba(0,0,0,0.3);
}
.hero-form-card h2 {
  color: var(--color-white);
  font-size: var(--fs-h3);
  margin-bottom: var(--space-2);
  text-align: center;
}
.hero-form-tagline {
  color: rgba(255,255,255,0.7);
  font-size: var(--font-size-sm);
  text-align: center;
  margin-bottom: var(--space-6);
}
.hero-form .form-row {
  margin-bottom: var(--space-3);
}
.hero-form input,
.hero-form select {
  width: 100%;
  padding: var(--space-4) var(--space-3);
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  border: 1px solid rgba(255,255,255,0.15);
  border-radius: var(--radius-md);
  background: rgba(255,255,255,0.08);
  color: var(--color-white);
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
}
.hero-form input::placeholder,
.hero-form select {
  color: rgba(255,255,255,0.5);
}
.hero-form select option {
  background: var(--color-primary);
  color: var(--color-white);
}
.hero-form input:focus,
.hero-form select:focus {
  outline: none;
  border-color: var(--color-accent);
  box-shadow: 0 0 0 3px rgba(212,155,42,0.2);
}
.hero-form .btn-block {
  width: 100%;
  margin-top: var(--space-2);
  padding: var(--space-4);
  font-size: var(--font-size-base);
}
.form-footnote {
  font-size: var(--font-size-xs);
  color: rgba(255,255,255,0.45);
  text-align: center;
  margin-top: var(--space-3);
  margin-bottom: 0;
}
.form-footnote a {
  color: rgba(255,255,255,0.6);
  text-decoration: underline;
}

/* Ticker section override */
.ticker-strip {
  position: relative;
  z-index: 2;
}

/* Numbered Section Badge */
.numbered-section {
  position: relative;
  counter-increment: section-counter;
}
.numbered-section::before {
  content: attr(data-num);
  position: absolute;
  top: var(--space-8);
  left: var(--space-4);
  font-family: var(--font-heading);
  font-size: clamp(4rem, 8vw, 7rem);
  font-weight: 900;
  color: rgba(var(--color-primary-rgb), 0.04);
  line-height: 1;
  pointer-events: none;
  z-index: 0;
}

/* Services Section — extended styles */
.services-section .section-title {
  position: relative;
  z-index: 1;
}
.services-section .services-grid {
  position: relative;
  z-index: 1;
}

/* Stats section enhanced */
.stats-section .stat-icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-full);
  background: rgba(212,155,42,0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-3);
}
.stats-section .stat-icon i,
.stats-section .stat-icon svg {
  width: 22px;
  height: 22px;
  color: var(--color-accent);
}

/* CTA Banner enhanced */
.cta-banner--home {
  position: relative;
}
.cta-banner--home .cta-inner {
  display: flex;
  align-items: center;
  gap: var(--space-12);
}
.cta-banner--home .cta-text {
  flex: 1;
}
.cta-banner--home .cta-actions {
  flex-shrink: 0;
}

/* About / Process Section */
.about-section .about-left h2 {
  margin-bottom: var(--space-4);
}
.about-section .about-left p {
  color: var(--color-gray);
  margin-bottom: var(--space-4);
  line-height: 1.7;
}
.process-steps {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4);
  margin-top: var(--space-8);
}
.process-step {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  padding: var(--space-4);
  background: var(--color-light);
  border-radius: var(--radius-md);
  transition: all var(--transition-base);
}
.process-step:hover {
  box-shadow: var(--shadow-md);
  transform: translateY(-2px);
}
.process-step-num {
  width: 36px;
  height: 36px;
  border-radius: var(--radius-full);
  background: var(--color-accent);
  color: var(--color-white);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--font-heading);
  font-weight: 900;
  font-size: var(--font-size-sm);
  flex-shrink: 0;
}
.process-step h4 {
  font-size: var(--font-size-sm);
  margin-bottom: var(--space-1);
}
.process-step p {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin: 0;
}

/* About image with stat overlay */
.about-right {
  position: relative;
}
.about-right img {
  border-radius: var(--radius-lg);
  width: 100%;
  height: 480px;
  object-fit: cover;
}
.about-stat-card {
  position: absolute;
  bottom: -20px;
  right: -10px;
  background: var(--color-accent);
  color: var(--color-white);
  padding: var(--space-5) var(--space-6);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-xl);
  text-align: center;
}
.about-stat-card .big-number {
  font-family: var(--font-heading);
  font-size: var(--font-size-4xl);
  font-weight: 900;
  line-height: 1;
}
.about-stat-card .label {
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-top: var(--space-1);
}

/* Reviews enhanced styles */
.reviews-section .swiper {
  padding-bottom: var(--space-12);
}
.reviews-section .swiper-pagination-bullet {
  background: rgba(255,255,255,0.4);
  opacity: 1;
}
.reviews-section .swiper-pagination-bullet-active {
  background: var(--color-accent);
}
.review-badge-strip {
  display: flex;
  justify-content: center;
  gap: var(--space-8);
  margin-top: var(--space-8);
  flex-wrap: wrap;
}
.review-badge {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255,255,255,0.6);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.review-badge i,
.review-badge svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
}

/* FAQ enhanced */
.faq-section .faq-icon i,
.faq-section .faq-icon svg {
  width: 20px;
  height: 20px;
}

/* Closing CTA */
.closing-cta {
  background: var(--color-primary);
  text-align: center;
}
.closing-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.closing-cta p {
  color: rgba(255,255,255,0.85);
  max-width: 600px;
  margin: 0 auto var(--space-8);
  font-size: var(--font-size-lg);
}

/* Section dividers */
.divider-wave {
  position: relative;
}
.divider-wave::before {
  content: '';
  position: absolute;
  top: -1px;
  left: 0;
  right: 0;
  height: 60px;
  background: var(--color-white);
  clip-path: ellipse(55% 100% at 50% 0%);
  z-index: 1;
}
.divider-angle-top::before {
  content: '';
  position: absolute;
  top: -1px;
  left: 0;
  right: 0;
  height: 80px;
  background: var(--color-white);
  clip-path: polygon(0 0, 100% 0, 100% 30%, 0 100%);
  z-index: 1;
}

/* AEO Answer Block in services */
.services-answer {
  margin-top: var(--space-8);
  position: relative;
  z-index: 1;
}

/* Responsive hero */
@media (max-width: 768px) {
  .hero-split {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .hero-text {
    text-align: center;
  }
  .hero-text .hero-subtitle {
    margin-left: auto;
    margin-right: auto;
  }
  .hero-actions {
    justify-content: center;
  }
  .hero-trust {
    justify-content: center;
  }
  .hero-form-card {
    max-width: 440px;
    margin: 0 auto;
  }
  .cta-banner--home .cta-inner {
    flex-direction: column;
    text-align: center;
    gap: var(--space-6);
  }
  .process-steps {
    grid-template-columns: 1fr;
  }
  .about-stat-card {
    right: var(--space-4);
    bottom: -10px;
  }
}
</style>

<!-- ═══ HERO SECTION ═══ -->
<section class="hero hero--home" aria-label="Jon's Shafts and Stuff homepage hero">
  <div class="container">
    <div class="hero-split">

      <!-- Left 60% — Text -->
      <div class="hero-text">
        <span class="hero-eyebrow">
          <i data-lucide="shield-check" style="width:14px;height:14px;"></i>
          Serving Manchester Since <?php echo $yearEstablished; ?>
        </span>
        <h1>Manchester's <span class="text-accent">Driveshaft &amp; Auto Repair</span> Specialists</h1>
        <p class="hero-subtitle"><?php echo htmlspecialchars($siteName); ?> is a licensed New Hampshire auto repair facility with <?php echo $yearsInBusiness; ?> years of hands-on experience. From engine diagnostics to full transmission rebuilds, we fix it right the first time at 518 Silver St.</p>
        <div class="hero-actions">
          <a href="#estimate-form" class="btn btn-accent btn-lg">Get a Free Estimate</a>
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" class="btn btn-outline-white btn-lg">
            <i data-lucide="phone" style="width:16px;height:16px;"></i>
            Call <?php echo htmlspecialchars(formatPhone($phone)); ?>
          </a>
          <?php endif; ?>
        </div>
        <div class="hero-trust">
          <div class="hero-trust-item">
            <i data-lucide="shield-check"></i>
            <span>Licensed &amp; Insured</span>
          </div>
          <div class="hero-trust-item">
            <i data-lucide="clock"></i>
            <span><?php echo $yearsInBusiness; ?>+ Years</span>
          </div>
          <div class="hero-trust-item">
            <i data-lucide="star"></i>
            <span>4.8 Google Rating</span>
          </div>
          <div class="hero-trust-item">
            <i data-lucide="wrench"></i>
            <span>All Makes &amp; Models</span>
          </div>
        </div>
      </div>

      <!-- Right 40% — Lead Capture Form -->
      <aside class="hero-form-card" id="estimate-form">
        <h2>Get Your Free Estimate</h2>
        <p class="hero-form-tagline">No obligation. Same-day response.</p>
        <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="hero-form">
          <!-- Honeypot -->
          <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
          <!-- Hidden tracking -->
          <input type="hidden" name="_form_location" value="hero">
          <input type="hidden" name="_next" value="/thank-you">
          <input type="hidden" name="_consent_version" value="v2.1">
          <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
          <!-- Visible fields -->
          <div class="form-row">
            <input type="text" name="name" placeholder="Full name" required>
          </div>
          <div class="form-row">
            <input type="tel" name="phone" placeholder="Phone number" required>
          </div>
          <div class="form-row">
            <input type="text" name="zip" placeholder="ZIP code" pattern="[0-9]{5}" required>
          </div>
          <div class="form-row">
            <select name="service">
              <option value="">What do you need?</option>
              <?php foreach ($services as $s): ?>
              <option value="<?php echo htmlspecialchars($s['name']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <!-- spam shield: signed render timestamp + JS interaction signal -->
          <?php $__ft_ts = (string) time(); ?>
          <input type="hidden" name="_ft" value="<?php echo $__ft_ts . '.' . hash_hmac('sha256', $__ft_ts, $leadsFormSecret); ?>">
          <input type="hidden" name="_js" value="" class="js-shield-field">
          <?php if (empty($GLOBALS['__js_shield'])) { $GLOBALS['__js_shield'] = 1; ?>
          <script>(function(){var d=document,f=function(){var i,e=d.querySelectorAll('.js-shield-field');for(i=0;i<e.length;i++)e[i].value='1';d.removeEventListener('pointerdown',f);d.removeEventListener('keydown',f);};d.addEventListener('pointerdown',f);d.addEventListener('keydown',f);})();</script>
          <?php } ?>
          <?php if (empty($GLOBALS['__p1_consent_css'])) { $GLOBALS['__p1_consent_css'] = 1; ?>
          <style>
          .p1-consent{margin:14px 0;text-align:left}
          .p1-consent-set{border:0;margin:0;padding:0}
          .p1-consent-legend{font-size:13px;font-weight:600;padding:0;margin-bottom:6px}
          .p1-consent-item{display:flex;gap:8px;align-items:flex-start;margin-bottom:8px;font-size:12px;line-height:1.5;cursor:pointer}
          .p1-consent-item input{margin:2px 0 0;flex:0 0 auto;width:16px;height:16px;cursor:pointer}
          .p1-consent-line{display:flex;gap:8px;align-items:flex-start;font-size:12px;line-height:1.45;cursor:pointer}
          .p1-consent-line input{margin:2px 0 0;flex:0 0 auto;width:16px;height:16px;cursor:pointer}
          .p1-consent a{text-decoration:underline}
          </style>
          <?php } ?>
          <!-- TCPA consent — terms_accepted is REQUIRED by the leads endpoint -->
          <div class="p1-consent">
            <label class="p1-consent-line">
              <input type="checkbox" name="terms_accepted" value="yes" required>
              <span>I agree to the <a href="/terms/">Terms of Service</a> and <a href="/privacy-policy/">Privacy Policy</a> and consent to be contacted about my request. *</span>
            </label>
          </div>
          <button type="submit" class="btn btn-accent btn-block">Get My Free Estimate</button>
          <p class="form-footnote">By submitting, you agree to our <a href="/terms/">Terms</a> and <a href="/privacy-policy/">Privacy Policy</a>.</p>
        </form>
      </aside>

    </div>
  </div>
</section>

<!-- ═══ TICKER STRIP ═══ -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span><i data-lucide="clock" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> <?php echo $yearsInBusiness; ?>+ Years in Business</span>
    <span><i data-lucide="wrench" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> Engine Repair</span>
    <span><i data-lucide="cog" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> Transmission Rebuilds</span>
    <span><i data-lucide="star" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> 4.8 Google Rating</span>
    <span><i data-lucide="shield-check" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> Licensed NH Facility</span>
    <span><i data-lucide="zap" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> Driveshaft Specialists</span>
    <span><i data-lucide="map-pin" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> 518 Silver St, Manchester</span>
    <span><i data-lucide="car" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> All Makes &amp; Models</span>
    <span><i data-lucide="droplets" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> Oil Changes</span>
    <span><i data-lucide="thermometer" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> AC Repair</span>
    <!-- Duplicate for seamless loop -->
    <span><i data-lucide="clock" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> <?php echo $yearsInBusiness; ?>+ Years in Business</span>
    <span><i data-lucide="wrench" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> Engine Repair</span>
    <span><i data-lucide="cog" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> Transmission Rebuilds</span>
    <span><i data-lucide="star" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> 4.8 Google Rating</span>
    <span><i data-lucide="shield-check" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> Licensed NH Facility</span>
    <span><i data-lucide="zap" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> Driveshaft Specialists</span>
    <span><i data-lucide="map-pin" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> 518 Silver St, Manchester</span>
    <span><i data-lucide="car" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> All Makes &amp; Models</span>
    <span><i data-lucide="droplets" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> Oil Changes</span>
    <span><i data-lucide="thermometer" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"></i> AC Repair</span>
  </div>
</div>

<!-- ═══ SERVICES SECTION (01) ═══ -->
<section class="section services-section numbered-section" data-num="01" aria-label="Auto repair services">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>What <span class="text-accent">Auto Repair Services</span> Does <?php echo htmlspecialchars($siteName); ?> Offer?</h2>
      <p class="hero-answer"><?php echo htmlspecialchars($siteName); ?> is a licensed auto repair facility based in Manchester, NH, serving the greater Southern New Hampshire region. We handle everything from routine oil changes to complete engine overhauls and specialty driveshaft work across all makes and models.</p>
      <span class="section-subtitle"><?php echo htmlspecialchars($tagline); ?></span>
    </div>

    <div class="services-grid">
      <?php
      // Show first 8 services on homepage
      $homeServices = array_slice($services, 0, 8);
      $tints = [1, 2, 3];
      $icons = [
          'Engine Repair' => 'wrench',
          'Transmission Repair' => 'cog',
          'Routine Automotive Maintenance' => 'clipboard-check',
          'Transmission Leak Inspection' => 'search',
          'Brake Repair & Service' => 'shield',
          'Oil Change Service' => 'droplets',
          'Suspension Repair' => 'move-vertical',
          'AC Repair & Service' => 'thermometer',
          'Battery Replacement' => 'battery-charging',
          'Exhaust System Repair' => 'wind',
          'Driveshaft Repair & Replacement' => 'zap',
      ];
      $bullets = [
          'Engine Repair' => ['Complete diagnostics included', 'All makes and models serviced', 'Minor to full overhauls'],
          'Transmission Repair' => ['Automatic and manual systems', 'Rebuild kits in stock', 'Fluid changes and flushes'],
          'Routine Automotive Maintenance' => ['Oil, filters, and fluids', 'Tire rotation and inspection', 'Seasonal check-ups available'],
          'Transmission Leak Inspection' => ['Pinpoint leak source fast', 'Prevent costly future damage', 'Written estimate before repair'],
          'Brake Repair & Service' => ['Pads, rotors, and calipers', 'ABS system diagnostics', 'Same-day service available'],
          'Oil Change Service' => ['Synthetic and conventional', 'OEM-spec filters included', 'No appointment needed'],
          'Suspension Repair' => ['Shocks, struts, and springs', 'Wheel alignment correction', 'Smoother ride guaranteed'],
          'AC Repair & Service' => ['Refrigerant recharge service', 'Compressor and hose repair', 'Beat the NH summer heat'],
      ];
      $imgUrls = [
          'Engine Repair' => 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?w=600&q=75',
          'Transmission Repair' => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?w=600&q=75',
          'Routine Automotive Maintenance' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?w=600&q=75',
          'Transmission Leak Inspection' => 'https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?w=600&q=75',
          'Brake Repair & Service' => 'https://images.unsplash.com/photo-1493238792000-8113da705763?w=600&q=75',
          'Oil Change Service' => 'https://images.unsplash.com/photo-1504222490345-c075b6008014?w=600&q=75',
          'Suspension Repair' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=600&q=75',
          'AC Repair & Service' => 'https://images.unsplash.com/photo-1517524008697-84bbe3c3fd98?w=600&q=75',
      ];
      foreach ($homeServices as $i => $svc):
          $tintNum = $tints[$i % 3];
          $delayNum = ($i % 3) + 1;
          $icon = $icons[$svc['name']] ?? 'wrench';
          $svcBullets = $bullets[$svc['name']] ?? ['Professional service', 'Competitive pricing', 'All vehicles welcome'];
          $imgUrl = $imgUrls[$svc['name']] ?? 'https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?w=600&q=75';
          $serviceSlug = $svc['slug'];
      ?>
      <article class="service-card-with-image card-tint-<?php echo $tintNum; ?> reveal-up reveal-delay-<?php echo $delayNum; ?>">
        <div class="service-card__image">
          <img src="<?php echo htmlspecialchars($imgUrl); ?>" alt="<?php echo htmlspecialchars($svc['name']); ?> at <?php echo htmlspecialchars($siteName); ?> in Manchester, NH" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="<?php echo htmlspecialchars($icon); ?>"></i></div>
          <h3><?php echo htmlspecialchars($svc['name']); ?></h3>
          <p class="service-card__desc"><?php echo htmlspecialchars(strtok($svc['description'], '.')); ?>.</p>
          <ul>
            <?php foreach ($svcBullets as $bullet): ?>
            <li><?php echo htmlspecialchars($bullet); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/services/<?php echo htmlspecialchars($serviceSlug); ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

    <?php if (count($services) > 8): ?>
    <div style="text-align:center;margin-top:var(--space-8);">
      <a href="/services/" class="btn btn-secondary">View All <?php echo count($services); ?> Services &rarr;</a>
    </div>
    <?php endif; ?>

    <!-- AEO Answer Block -->
    <div class="answer-block services-answer reveal-up">
      <h3>What kind of auto repair near me is available in Manchester, NH?</h3>
      <p><?php echo htmlspecialchars($siteName); ?> at 518 Silver St provides full-service auto repair for every make and model. Our most requested services include engine diagnostics ($95-$150), transmission rebuilds ($1,800-$3,500), brake pad replacement ($180-$350 per axle), synthetic oil changes ($65-$85), and our specialty — driveshaft repair and U-joint replacement. We've served the Manchester, Bedford, Hooksett, and Goffstown communities since <?php echo $yearEstablished; ?>.</p>
    </div>
  </div>
</section>

<!-- ═══ SVG Section Divider ═══ -->
<svg viewBox="0 0 1440 60" preserveAspectRatio="none" style="display:block;width:100%;height:60px;margin-top:-1px;" aria-hidden="true">
  <path d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z" fill="<?php echo htmlspecialchars($colors['primary']); ?>"></path>
</svg>

<!-- ═══ STATS SECTION ═══ -->
<section class="stats-section" aria-label="Company statistics">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item reveal-up reveal-delay-1">
        <div class="stat-icon"><i data-lucide="calendar"></i></div>
        <div class="stat-number" data-counter="<?php echo $yearsInBusiness; ?>" data-suffix="+">0</div>
        <div class="stat-label">Years in Business</div>
      </div>
      <div class="stat-item reveal-up reveal-delay-2">
        <div class="stat-icon"><i data-lucide="wrench"></i></div>
        <div class="stat-number" data-counter="15000" data-suffix="+">0</div>
        <div class="stat-label">Vehicles Serviced</div>
      </div>
      <div class="stat-item reveal-up reveal-delay-3">
        <div class="stat-icon"><i data-lucide="star"></i></div>
        <div class="stat-number" data-counter="4" data-suffix=".8">0</div>
        <div class="stat-label">Google Rating</div>
      </div>
      <div class="stat-item reveal-up reveal-delay-4">
        <div class="stat-icon"><i data-lucide="map-pin"></i></div>
        <div class="stat-number" data-counter="25" data-suffix=" mi">0</div>
        <div class="stat-label">Service Radius</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG Section Divider ═══ -->
<svg viewBox="0 0 1440 60" preserveAspectRatio="none" style="display:block;width:100%;height:60px;margin-bottom:-1px;" aria-hidden="true">
  <path d="M0,60 C480,0 960,0 1440,60 L1440,0 L0,0 Z" fill="<?php echo htmlspecialchars($colors['primary']); ?>"></path>
</svg>

<!-- ═══ MID-PAGE CTA BANNER ═══ -->
<section class="cta-banner cta-banner--home" aria-label="Call to action">
  <div class="container">
    <div class="cta-inner">
      <div class="cta-text">
        <h2 class="reveal-up">Don't Wait Until a <span class="text-accent">Small Problem</span> Becomes a Big Bill</h2>
        <p class="reveal-up">Strange noises, warning lights, or fluid leaks get worse — and more expensive — every mile you drive. Bring your vehicle to 518 Silver St for a free diagnostic assessment. We'll tell you exactly what's wrong and what it'll cost before we touch a wrench.</p>
      </div>
      <div class="cta-actions reveal-up">
        <a href="#estimate-form" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ ABOUT / PROCESS SECTION (02) ═══ -->
<section class="section about-section numbered-section" data-num="02" aria-label="About Jon's Shafts and Stuff">
  <div class="container">
    <div class="about-split">
      <div class="about-left reveal-left">
        <span class="eyebrow-label">Who We Are</span>
        <h2>Manchester's Go-To <span class="text-accent">Auto Repair</span> Shop Since <?php echo $yearEstablished; ?></h2>
        <p><?php echo htmlspecialchars($siteName); ?> has been a fixture on Silver Street in Manchester for over three decades. What started as a specialty driveshaft shop has grown into a full-service auto repair facility — but we've never lost our roots. Driveshaft repair, U-joint replacement, and drivetrain diagnostics remain our bread and butter.</p>
        <p>Every vehicle that rolls into our bays gets the same treatment: a thorough inspection, a clear explanation of the issue, and a written estimate before we start work. No hidden fees, no upselling parts you don't need. That straightforward approach is why families in Manchester, Bedford, Hooksett, and Goffstown have trusted us for <?php echo $yearsInBusiness; ?> years running.</p>

        <div class="process-steps">
          <div class="process-step reveal-up reveal-delay-1">
            <span class="process-step-num">1</span>
            <div>
              <h4>Inspect</h4>
              <p>Full diagnostic scan and visual inspection of the problem area</p>
            </div>
          </div>
          <div class="process-step reveal-up reveal-delay-2">
            <span class="process-step-num">2</span>
            <div>
              <h4>Explain</h4>
              <p>Clear breakdown of the issue and written repair estimate</p>
            </div>
          </div>
          <div class="process-step reveal-up reveal-delay-3">
            <span class="process-step-num">3</span>
            <div>
              <h4>Repair</h4>
              <p>Fix done right using OEM-spec parts and proven methods</p>
            </div>
          </div>
          <div class="process-step reveal-up reveal-delay-4">
            <span class="process-step-num">4</span>
            <div>
              <h4>Verify</h4>
              <p>Test drive and quality check before you pick up the keys</p>
            </div>
          </div>
        </div>
      </div>

      <div class="about-right reveal-right">
        <img src="https://images.unsplash.com/photo-1625047509248-ec889cbff17f?w=800&q=80" alt="Mechanic performing engine repair at Jon's Shafts and Stuff in Manchester, NH" width="600" height="480" loading="lazy">
        <div class="about-stat-card">
          <div class="big-number"><?php echo $yearsInBusiness; ?>+</div>
          <div class="label">Years Serving Manchester</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG Section Divider (angled) ═══ -->
<svg viewBox="0 0 1440 80" preserveAspectRatio="none" style="display:block;width:100%;height:80px;margin-top:-1px;" aria-hidden="true">
  <path d="M0,0 L1440,40 L1440,80 L0,80 Z" fill="var(--color-dark)"></path>
</svg>

<!-- ═══ REVIEWS SECTION (03) ═══ -->
<section class="section reviews-section numbered-section" data-num="03" aria-label="Customer reviews">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="eyebrow" style="color:var(--color-accent);">What Customers Say</span>
      <h2>Trusted by Manchester Drivers for <span class="text-accent"><?php echo $yearsInBusiness; ?>+ Years</span></h2>
      <p>Real feedback from real customers — here's why Manchester, NH trusts <?php echo htmlspecialchars($siteName); ?> with their vehicles.</p>
    </div>

    <div class="swiper reviews-swiper reveal-up">
      <div class="swiper-wrapper">
        <!-- Review 1 -->
        <div class="swiper-slide">
          <div class="review-card">
            <div class="review-stars">
              <span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span>
            </div>
            <p class="review-text">"Brought my F-150 in for a driveshaft vibration. They diagnosed a worn U-joint, had the part in stock, and had me back on the road the same afternoon. Fair price and no runaround."</p>
            <div class="review-author">
              <div class="review-avatar">MH</div>
              <div>
                <div class="review-name">Mike H.</div>
                <div class="review-date">Manchester, NH &middot; Driveshaft Repair</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Review 2 -->
        <div class="swiper-slide">
          <div class="review-card">
            <div class="review-stars">
              <span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span>
            </div>
            <p class="review-text">"My Honda Accord needed a full transmission rebuild and I was dreading the estimate. Jon's team was upfront about the cost, explained every line item, and finished a day early. Transmission shifts perfectly now."</p>
            <div class="review-author">
              <div class="review-avatar">SR</div>
              <div>
                <div class="review-name">Sarah R.</div>
                <div class="review-date">Bedford, NH &middot; Transmission Rebuild</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Review 3 -->
        <div class="swiper-slide">
          <div class="review-card">
            <div class="review-stars">
              <span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span>
            </div>
            <p class="review-text">"I've been bringing all three of our family cars here for oil changes and maintenance for the last 8 years. Always quick, always honest, and they actually remember my name when I walk in."</p>
            <div class="review-author">
              <div class="review-avatar">DL</div>
              <div>
                <div class="review-name">Dan L.</div>
                <div class="review-date">Hooksett, NH &middot; Routine Maintenance</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Review 4 -->
        <div class="swiper-slide">
          <div class="review-card">
            <div class="review-stars">
              <span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span>
            </div>
            <p class="review-text">"Check engine light came on and three other shops couldn't figure it out. Jon's team found a bad O2 sensor and a small exhaust leak in under an hour. Fixed both for less than I expected. These guys know their stuff."</p>
            <div class="review-author">
              <div class="review-avatar">KP</div>
              <div>
                <div class="review-name">Karen P.</div>
                <div class="review-date">Goffstown, NH &middot; Engine Diagnostics</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Review 5 -->
        <div class="swiper-slide">
          <div class="review-card">
            <div class="review-stars">
              <span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span>
            </div>
            <p class="review-text">"Needed new brakes and an AC recharge before a road trip. They got both done in one visit and even topped off my fluids. Honest shop that doesn't try to sell you things you don't need."</p>
            <div class="review-author">
              <div class="review-avatar">TW</div>
              <div>
                <div class="review-name">Tom W.</div>
                <div class="review-date">Manchester, NH &middot; Brakes &amp; AC</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

    <div class="review-badge-strip reveal-up">
      <div class="review-badge"><i data-lucide="star"></i> <span>4.8 Google Reviews</span></div>
      <div class="review-badge"><i data-lucide="thumbs-up"></i> <span>Recommended on Facebook</span></div>
      <div class="review-badge"><i data-lucide="award"></i> <span>A+ BBB Rating</span></div>
    </div>
  </div>
</section>

<!-- ═══ SVG Section Divider ═══ -->
<svg viewBox="0 0 1440 80" preserveAspectRatio="none" style="display:block;width:100%;height:80px;margin-bottom:-1px;" aria-hidden="true">
  <path d="M0,80 L1440,40 L1440,0 L0,0 Z" fill="var(--color-dark)"></path>
</svg>

<!-- ═══ FAQ SECTION (04) ═══ -->
<section class="section faq-section numbered-section" data-num="04" aria-label="Frequently asked questions">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="eyebrow">Common Questions</span>
      <h2>Auto Repair <span class="text-accent">FAQs</span> — Manchester, NH</h2>
      <p>Answers to the questions Manchester drivers ask most about auto repair costs, timelines, and our process.</p>
    </div>

    <div class="faq-grid">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="faq-item reveal-up reveal-delay-<?php echo ($i % 4) + 1; ?>">
        <div class="faq-icon"><i data-lucide="help-circle"></i></div>
        <div>
          <h3><?php echo htmlspecialchars($faq['question']); ?></h3>
          <p><?php echo htmlspecialchars($faq['answer']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ CLOSING CTA ═══ -->
<section class="closing-cta" aria-label="Final call to action">
  <div class="container" style="text-align:center;">
    <h2 class="reveal-up">Ready to Get Your Vehicle <span class="text-accent">Running Right</span>?</h2>
    <p class="reveal-up"><?php echo htmlspecialchars($siteName); ?> is open Monday through Friday, 8 AM to 5 PM at 518 Silver St in Manchester. Drop in for a free estimate or schedule your repair today.</p>
    <div class="reveal-up">
      <a href="/contact/" class="btn btn-accent btn-lg">Schedule Your Repair</a>
    </div>
  </div>
</section>

<!-- Swiper Init -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  if (typeof Swiper !== 'undefined') {
    new Swiper('.reviews-swiper', {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      autoplay: { delay: 5000, disableOnInteraction: true },
      pagination: { el: '.swiper-pagination', clickable: true },
      breakpoints: {
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 }
      }
    });
  }
});
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

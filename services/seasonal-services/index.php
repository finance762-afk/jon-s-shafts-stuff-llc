<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ────────────────────────────────────────────────
$pageTitle       = "Brake, Oil Change & AC Service Manchester NH | Jon's Shafts & Stuff, LLC";
$pageDescription = "Brake repair, oil change service, and AC repair in Manchester, NH from Jon's Shafts & Stuff, LLC. 33 years of seasonal auto maintenance at 518 Silver St. Free estimates.";
$canonicalUrl    = $siteUrl . '/services/seasonal-services/';
$currentPage     = 'services';
$heroImagePreload = 'https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?w=1920&q=80';
$cssVersion      = '2';

// ─── FAQs ─────────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How often should I get my brakes inspected in Manchester, NH?',
        'answer'   => 'We recommend a brake inspection every 12,000 miles or once a year, whichever comes first. Manchester roads see heavy salt use from November through April, which accelerates brake rotor corrosion and pad wear. Drivers who frequently travel I-293 or Elm Street stop-and-go traffic may need inspections sooner.',
    ],
    [
        'question' => 'What type of oil does my car need for New Hampshire winters?',
        'answer'   => 'Most vehicles in Manchester benefit from synthetic or synthetic-blend oil during winter months. Synthetic oil flows better at sub-zero temperatures common in southern New Hampshire from December through February. We check your owner\'s manual and recommend the correct viscosity — typically 0W-20 or 5W-30 for modern engines.',
    ],
    [
        'question' => 'How do I know if my car\'s AC needs repair or just a recharge?',
        'answer'   => 'If your AC blows warm air but the blower motor works, you likely need a refrigerant recharge. If you hear grinding, clicking, or smell musty odors from the vents, the compressor, condenser, or evaporator may need repair. We run a full diagnostic at our 518 Silver St shop before recommending any work.',
    ],
    [
        'question' => 'What are signs that my brake pads need replacing?',
        'answer'   => 'Squealing or grinding noises when braking, a vibrating brake pedal, the vehicle pulling to one side during stops, or a longer stopping distance all indicate worn brake pads. Manchester drivers dealing with hilly terrain near Goffstown and Bedford put extra strain on brakes and should watch for these signs closely.',
    ],
    [
        'question' => 'How long does an oil change take at your Manchester shop?',
        'answer'   => 'A standard oil change at our 518 Silver St location typically takes 30 to 45 minutes. We drain the old oil, replace the filter, add the correct grade and quantity, and perform a quick visual inspection of belts, hoses, and fluid levels. No appointment necessary for oil changes — walk-ins welcome.',
    ],
    [
        'question' => 'Can you service the AC on older vehicles in Manchester?',
        'answer'   => 'Yes. We service AC systems on vehicles of all ages, including older models that use R-134a and newer systems using R-1234yf refrigerant. For classic or pre-1994 vehicles originally built with R-12, we perform approved retrofit conversions. Our Manchester shop handles every AC system type.',
    ],
];

// ─── Schema ───────────────────────────────────────────────────
$schemaMarkup = generateBreadcrumbSchema([
    ['name' => 'Services', 'url' => $siteUrl . '/services/'],
    ['name' => 'Seasonal Services', 'url' => ''],
]);

$brakeService = findService('Brake Repair & Service');
$oilService   = findService('Oil Change Service');
$acService    = findService('AC Repair & Service');

$serviceSchemas = '';
if ($brakeService) $serviceSchemas .= generateServiceSchema($brakeService);
if ($oilService)   $serviceSchemas .= generateServiceSchema($oilService);
if ($acService)    $serviceSchemas .= generateServiceSchema($acService);

$faqSchema = generateFAQSchema($faqs);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>
<?php echo $serviceSchemas; ?>
<?php echo $faqSchema; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══════════════════════════════════════════════════════════
     SEASONAL SERVICES — Jon's Shafts & Stuff, LLC
     Phase 3A | Standard Tier | Page One Insights
     ═══════════════════════════════════════════════════════════ -->

<style>
/* ═══ Seasonal Services — Page-Specific Styles ═══ */

/* ── Hero ── */
.hero--seasonal {
  min-height: 55vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background-image: url('https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?w=1920&q=80');
  background-size: cover;
  background-position: center 40%;
  position: relative;
  overflow: hidden;
  padding: calc(var(--nav-height) + var(--space-16)) var(--space-4) var(--space-12);
}
.hero--seasonal::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    160deg,
    rgba(74,106,140,0.94) 0%,
    rgba(54,81,107,0.90) 45%,
    rgba(212,155,42,0.30) 100%
  );
  z-index: 1;
}
.hero--seasonal::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.3;
  pointer-events: none;
  z-index: 1;
}
.hero--seasonal .container {
  position: relative;
  z-index: 2;
}
.hero--seasonal h1 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
  text-wrap: balance;
  font-size: var(--fs-h1);
  font-family: var(--font-heading);
  font-weight: 900;
  line-height: 1.1;
}
.hero--seasonal .hero-answer {
  color: rgba(255,255,255,0.88);
  max-width: 700px;
  margin: 0 auto var(--space-6);
  font-size: var(--fs-body);
  line-height: 1.75;
}
.hero--seasonal .breadcrumb {
  display: flex;
  justify-content: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.6);
  margin-bottom: var(--space-6);
}
.hero--seasonal .breadcrumb a {
  color: var(--color-accent);
  transition: color var(--transition-fast);
}
.hero--seasonal .breadcrumb a:hover {
  color: var(--color-white);
}
.hero--seasonal .breadcrumb-sep {
  color: rgba(255,255,255,0.4);
}

/* Hero glow accent blob */
.hero--seasonal .hero-glow {
  position: absolute;
  bottom: -120px;
  left: 20%;
  width: 400px;
  height: 400px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(212,155,42,0.15) 0%, transparent 70%);
  pointer-events: none;
  z-index: 1;
}

/* ── SVG Section Divider — Angled Slant ── */
.divider-slant {
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 100%;
  z-index: 3;
  line-height: 0;
}
.divider-slant svg {
  display: block;
  width: 100%;
  height: 70px;
}
.divider-slant--reverse {
  position: absolute;
  top: -1px;
  left: 0;
  width: 100%;
  z-index: 3;
  line-height: 0;
  transform: rotate(180deg);
}
.divider-slant--reverse svg {
  display: block;
  width: 100%;
  height: 70px;
}

/* Angled divider variation (steeper) */
.divider-angle {
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 100%;
  z-index: 3;
  line-height: 0;
}
.divider-angle svg {
  display: block;
  width: 100%;
  height: 50px;
}

/* ── Intro Section ── */
.seasonal-intro {
  background: var(--color-bg);
  padding: var(--space-16) 0 var(--space-12);
  position: relative;
  overflow: hidden;
}
.seasonal-intro .section-title {
  margin-bottom: var(--space-8);
}
.seasonal-intro .section-title h2 {
  text-wrap: balance;
}
.seasonal-intro .answer-block {
  max-width: var(--content-width);
  margin: 0 auto var(--space-6);
  font-size: var(--fs-body);
  line-height: 1.75;
  color: var(--color-gray-dark);
}
.seasonal-intro .prose {
  max-width: var(--content-width);
  margin: 0 auto;
  line-height: 1.75;
  color: var(--color-gray-dark);
}

/* Floating gear decoration */
.floating-gear {
  position: absolute;
  top: 10%;
  right: 3%;
  width: 140px;
  height: 140px;
  opacity: 0.035;
  pointer-events: none;
  z-index: 0;
  animation: float-slow 8s ease-in-out infinite;
}
@keyframes float-slow {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-15px) rotate(8deg); }
}
@media (prefers-reduced-motion: reduce) {
  .floating-gear { animation: none; }
}

/* ── Service Cards Section ── */
.seasonal-cards {
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.seasonal-cards .section-title {
  margin-bottom: var(--space-10);
}
.seasonal-cards .services-grid {
  grid-template-columns: repeat(3, 1fr);
}
@media (max-width: 992px) {
  .seasonal-cards .services-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  .seasonal-cards .services-grid {
    grid-template-columns: 1fr;
  }
}

/* ── Detail Sections ── */
.service-detail {
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.service-detail--alt {
  background: var(--color-bg-alt);
}
.service-detail .split {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-10);
  align-items: center;
}
.service-detail .split--reverse {
  direction: rtl;
}
.service-detail .split--reverse > * {
  direction: ltr;
}
@media (max-width: 768px) {
  .service-detail .split,
  .service-detail .split--reverse {
    grid-template-columns: 1fr;
    gap: var(--space-8);
    direction: ltr;
  }
}
.service-detail h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.service-detail .answer-block {
  font-size: var(--fs-body);
  line-height: 1.75;
  color: var(--color-gray-dark);
  margin-bottom: var(--space-6);
  padding-left: var(--space-4);
  border-left: 3px solid var(--color-accent);
}
.service-detail .detail-prose {
  max-width: var(--content-width);
}
.service-detail .detail-prose p {
  margin-bottom: var(--space-4);
  line-height: 1.75;
  color: var(--color-gray-dark);
}
.service-detail .detail-prose p:last-child {
  margin-bottom: 0;
}
.service-detail .detail-image {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  position: relative;
}
.service-detail .detail-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  aspect-ratio: 4 / 3;
  transition: transform var(--transition-slow);
}
.service-detail .detail-image:hover img {
  transform: scale(1.04);
}
.service-detail .detail-image::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius-lg);
  box-shadow: inset 0 0 0 1px rgba(0,0,0,0.06);
  pointer-events: none;
}

/* Accent corner decoration */
.detail-accent-corner {
  position: absolute;
  width: 80px;
  height: 80px;
  border: 3px solid rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-sm);
  pointer-events: none;
  z-index: 0;
}
.detail-accent-corner--tl {
  top: -12px;
  left: -12px;
  border-right: none;
  border-bottom: none;
}
.detail-accent-corner--br {
  bottom: -12px;
  right: -12px;
  border-left: none;
  border-top: none;
}

/* ── Seasonal Tips Section ── */
.seasonal-tips {
  background: var(--color-primary);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.seasonal-tips::before {
  content: '';
  position: absolute;
  top: -80px;
  right: -80px;
  width: 350px;
  height: 350px;
  border-radius: 50%;
  background: rgba(212,155,42,0.07);
  pointer-events: none;
}
.seasonal-tips .section-title h2 {
  color: var(--color-white);
  text-wrap: balance;
}
.seasonal-tips .answer-block {
  color: rgba(255,255,255,0.8);
  max-width: 640px;
  margin: 0 auto var(--space-8);
}
.tips-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
}
@media (max-width: 992px) {
  .tips-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 600px) {
  .tips-grid { grid-template-columns: 1fr; }
}
.tip-card {
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  text-align: center;
  backdrop-filter: blur(6px);
  transition: transform var(--transition-base), background var(--transition-base);
}
.tip-card:hover {
  transform: translateY(-4px);
  background: rgba(255,255,255,0.10);
}
.tip-card__season {
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
.tip-card__icon {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  background: rgba(212,155,42,0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-3);
  color: var(--color-accent);
}
.tip-card__icon i,
.tip-card__icon svg {
  width: 22px;
  height: 22px;
}
.tip-card h3 {
  color: var(--color-white);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
}
.tip-card p {
  color: rgba(255,255,255,0.7);
  font-size: var(--font-size-sm);
  line-height: 1.6;
}

/* ── FAQ Section ── */
.seasonal-faq {
  background: var(--color-bg);
  padding: var(--space-16) 0;
  position: relative;
}
.seasonal-faq .section-title {
  margin-bottom: var(--space-10);
}
.seasonal-faq .faq-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-4);
  max-width: 960px;
  margin: 0 auto;
}
@media (max-width: 768px) {
  .seasonal-faq .faq-grid {
    grid-template-columns: 1fr;
  }
}
.faq-item {
  border: 1px solid var(--color-border);
  border-radius: var(--radius-md);
  overflow: hidden;
  transition: box-shadow var(--transition-base);
}
.faq-item:hover {
  box-shadow: var(--shadow-md);
}
.faq-item[open] {
  border-color: var(--color-accent);
}
.faq-item summary {
  padding: var(--space-4) var(--space-6);
  font-weight: 600;
  font-size: var(--font-size-base);
  color: var(--color-primary);
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: var(--space-3);
  list-style: none;
  transition: background var(--transition-fast);
}
.faq-item summary::-webkit-details-marker {
  display: none;
}
.faq-item summary::before {
  content: '+';
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: var(--font-size-xl);
  color: var(--color-accent);
  flex-shrink: 0;
  width: 24px;
  text-align: center;
  transition: transform var(--transition-fast);
}
.faq-item[open] summary::before {
  content: '\2212';
  transform: rotate(180deg);
}
.faq-item summary:hover {
  background: rgba(var(--color-accent-rgb), 0.04);
}
.faq-item .faq-answer {
  padding: 0 var(--space-6) var(--space-4) calc(var(--space-6) + 24px + var(--space-3));
  font-size: var(--font-size-sm);
  line-height: 1.7;
  color: var(--color-gray-dark);
}

/* ── CTA Section ── */
.seasonal-cta {
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.seasonal-cta::before {
  content: '';
  position: absolute;
  top: -60%;
  right: -10%;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: rgba(212,155,42,0.08);
  pointer-events: none;
}
.seasonal-cta::after {
  content: '';
  position: absolute;
  bottom: -40%;
  left: -8%;
  width: 350px;
  height: 350px;
  border-radius: 50%;
  background: rgba(212,155,42,0.05);
  pointer-events: none;
}
.seasonal-cta .container {
  position: relative;
  z-index: 1;
  text-align: center;
}
.seasonal-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.seasonal-cta .answer-block {
  color: rgba(255,255,255,0.82);
  max-width: 620px;
  margin: 0 auto var(--space-8);
  font-size: var(--fs-body);
  line-height: 1.75;
}
.seasonal-cta .btn-group {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── Updated stamp ── */
.page-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-4) 0;
  background: var(--color-bg);
}
</style>

<!-- Hero -->
<section class="hero hero--seasonal">
  <div class="hero-glow" aria-hidden="true"></div>
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Seasonal Services</span>
    </nav>
    <h1><span class="text-accent">Seasonal</span> Auto Maintenance in Manchester, NH</h1>
    <p class="hero-answer"><?php echo htmlspecialchars($siteName); ?> provides brake repair, oil change service, and AC repair at 518 Silver St in Manchester. These three seasonal services keep your vehicle safe and efficient through New Hampshire's extreme temperature swings, road salt exposure, and summer heat. We've delivered dependable maintenance since <?php echo $yearEstablished; ?>.</p>
  </div>
  <div class="divider-slant">
    <svg viewBox="0 0 1440 70" preserveAspectRatio="none" fill="var(--color-bg)">
      <polygon points="0,70 1440,20 1440,70"/>
    </svg>
  </div>
</section>

<!-- Intro Section -->
<section class="seasonal-intro" aria-label="Seasonal services overview">
  <svg class="floating-gear" aria-hidden="true" viewBox="0 0 100 100" fill="currentColor" style="color:var(--color-primary);">
    <circle cx="50" cy="50" r="20" stroke="currentColor" stroke-width="4" fill="none"/>
    <path d="M50 5 L55 20 L45 20Z M50 95 L55 80 L45 80Z M5 50 L20 45 L20 55Z M95 50 L80 45 L80 55Z M15 15 L28 25 L22 31Z M85 85 L72 75 L78 69Z M85 15 L72 25 L78 31Z M15 85 L28 75 L22 69Z"/>
  </svg>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Seasonal Maintenance</span>
      <h2>What <span class="text-accent">seasonal services</span> does <?php echo htmlspecialchars($siteName); ?> offer in Manchester?</h2>
      <p class="answer-block">We offer three seasonal maintenance services at our Manchester shop: brake repair and service, oil changes, and AC repair. Each addresses the specific wear patterns caused by New Hampshire's climate — from salt-corroded rotors in winter to overworked compressors in July. These services apply to all makes and models.</p>
    </div>
    <p class="prose reveal-up">Manchester drivers face conditions that accelerate routine wear. Potholes along South Willow Boulevard and I-293 stress brake components. Extreme cold from December through March demands the right oil viscosity to protect your engine at startup. And when summer hits, a functioning AC system is essential for safe, comfortable driving through the Merrimack Valley and beyond into Bedford, Hooksett, Goffstown, and Londonderry. At <?php echo htmlspecialchars($siteName); ?>, we've spent <?php echo $yearsInBusiness; ?> years helping Manchester-area vehicle owners stay ahead of seasonal wear — not react to it after something fails.</p>
  </div>
</section>

<!-- Service Cards Section -->
<section class="seasonal-cards" aria-label="Seasonal service offerings">
  <div class="divider-slant--reverse">
    <svg viewBox="0 0 1440 70" preserveAspectRatio="none" fill="var(--color-bg)">
      <polygon points="0,70 1440,20 1440,70"/>
    </svg>
  </div>
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>Which <span class="text-accent">brake, oil, and AC services</span> are available at our Manchester shop?</h2>
      <p class="answer-block">Each of these three services covers a specific vehicle system that sees seasonal stress in southern New Hampshire. Click any card below for a detailed breakdown of what the service includes, typical timelines, and when Manchester drivers should schedule it.</p>
    </div>

    <div class="services-grid">
      <!-- Brake Repair & Service -->
      <article class="service-card-with-image card-tint-1 reveal-left reveal-delay-1">
        <div class="service-card__image">
          <img src="https://images.unsplash.com/photo-1493238792000-8113da705763?w=600&q=75" alt="Brake repair and rotor service in Manchester NH" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="disc"></i></div>
          <h3>Brake Repair &amp; Service</h3>
          <p class="service-card__desc">Complete brake system diagnosis and repair for pads, rotors, calipers, and fluid.</p>
          <ul>
            <li>Pad and rotor replacement</li>
            <li>Caliper rebuild and brake fluid flush</li>
            <li>Free brake inspection included</li>
          </ul>
          <a href="#brake-detail" class="service-card__cta">Full details</a>
        </div>
      </article>

      <!-- Oil Change Service -->
      <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
        <div class="service-card__image">
          <img src="https://images.unsplash.com/photo-1504222490345-c075b6008014?w=600&q=75" alt="Oil change service in Manchester NH auto shop" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="droplets"></i></div>
          <h3>Oil Change Service</h3>
          <p class="service-card__desc">Conventional, synthetic blend, and full synthetic oil changes with filter replacement.</p>
          <ul>
            <li>Synthetic and conventional options</li>
            <li>Filter replacement every visit</li>
            <li>Multi-point fluid level check</li>
          </ul>
          <a href="#oil-detail" class="service-card__cta">Full details</a>
        </div>
      </article>

      <!-- AC Repair & Service -->
      <article class="service-card-with-image card-tint-3 reveal-right reveal-delay-3">
        <div class="service-card__image">
          <img src="https://images.unsplash.com/photo-1517524008697-84bbe3c3fd98?w=600&q=75" alt="Auto AC repair and recharge in Manchester NH" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="snowflake"></i></div>
          <h3>AC Repair &amp; Service</h3>
          <p class="service-card__desc">Full AC diagnostics including recharge, compressor repair, and leak detection.</p>
          <ul>
            <li>Refrigerant recharge and leak test</li>
            <li>Compressor and condenser repair</li>
            <li>Cabin filter replacement</li>
          </ul>
          <a href="#ac-detail" class="service-card__cta">Full details</a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- Brake Repair Detail -->
<section id="brake-detail" class="service-detail" aria-label="Brake repair details">
  <div class="container">
    <div class="split">
      <div class="detail-prose reveal-left">
        <span class="eyebrow-label">Brakes</span>
        <h2>How does <?php echo htmlspecialchars($siteName); ?> handle <span class="text-accent">brake repair</span> in Manchester?</h2>
        <p class="answer-block">We inspect the entire brake system — pads, rotors, calipers, lines, and fluid — before recommending any work. Most brake pad replacements at our 518 Silver St shop take 1 to 2 hours, and we resurface or replace rotors based on measured thickness, never guesswork.</p>
        <p>Manchester roads are tough on brakes. The freeze-thaw cycle from November through April causes potholes that jar brake components loose, while road salt accelerates rotor corrosion. Drivers commuting through the Hooksett tolls or navigating the hills near Goffstown put extra load on their braking system every single trip.</p>
        <p>Our brake repair near me in Manchester covers every component. We replace worn pads with OEM-equivalent or ceramic options depending on your driving pattern. If rotors are scored or warped beyond spec, we machine or replace them. Caliper rebuilds, brake line replacement, and full fluid flushes round out our capability — we handle the complete system, not just the obvious parts.</p>
        <p>We recommend a brake inspection at least annually or every 12,000 miles. If you hear squealing, feel pulsation in the pedal, or notice longer stopping distances, bring the vehicle in immediately. Early diagnosis at our Manchester shop prevents rotor damage that doubles the repair cost.</p>
      </div>
      <div class="reveal-right" style="position:relative;">
        <div class="detail-accent-corner detail-accent-corner--tl" aria-hidden="true"></div>
        <div class="detail-image">
          <img src="https://images.unsplash.com/photo-1493238792000-8113da705763?w=800&q=80" alt="Mechanic inspecting brake rotor at Jon's Shafts and Stuff in Manchester NH" width="800" height="600" loading="lazy">
        </div>
        <div class="detail-accent-corner detail-accent-corner--br" aria-hidden="true"></div>
      </div>
    </div>
  </div>
</section>

<!-- Oil Change Detail -->
<section id="oil-detail" class="service-detail service-detail--alt" aria-label="Oil change service details">
  <div class="container">
    <div class="split split--reverse">
      <div class="detail-prose reveal-right">
        <span class="eyebrow-label">Oil Changes</span>
        <h2>Why do Manchester drivers choose <?php echo htmlspecialchars($siteName); ?> for <span class="text-accent">oil changes</span>?</h2>
        <p class="answer-block">We offer conventional, synthetic blend, and full synthetic oil changes at our 518 Silver St location. Every oil change includes a new filter, a multi-point fluid check, and a visual inspection of belts and hoses — completed in 30 to 45 minutes with no appointment needed.</p>
        <p>Oil viscosity matters more in New Hampshire than in moderate climates. When temperatures drop below zero in Manchester — common from late December through February — conventional oil thickens and starves the engine during cold starts. Synthetic oil flows freely at -40 degrees Fahrenheit, protecting critical engine components from the moment you turn the key. We match the correct viscosity grade to your vehicle's specifications and the season.</p>
        <p>Regular oil changes every 3,000 to 7,500 miles (depending on oil type and manufacturer guidelines) prevent sludge buildup that leads to premature engine wear. For Manchester commuters logging daily miles on I-93, Route 101, or Elm Street, staying on schedule is the single most effective way to extend engine life.</p>
        <p>Walk-ins are welcome for oil changes. We stock the most common filter sizes and oil grades for popular makes — Honda, Toyota, Ford, Chevy, Subaru, and others common in the Manchester and Bedford area. If your vehicle requires a specialty filter or oil, we'll order it and have you in the bay the next business day.</p>
      </div>
      <div class="reveal-left" style="position:relative;">
        <div class="detail-accent-corner detail-accent-corner--tl" aria-hidden="true"></div>
        <div class="detail-image">
          <img src="https://images.unsplash.com/photo-1504222490345-c075b6008014?w=800&q=80" alt="Oil change service at auto shop in Manchester New Hampshire" width="800" height="600" loading="lazy">
        </div>
        <div class="detail-accent-corner detail-accent-corner--br" aria-hidden="true"></div>
      </div>
    </div>
  </div>
</section>

<!-- AC Repair Detail -->
<section id="ac-detail" class="service-detail" aria-label="AC repair service details">
  <div class="container">
    <div class="split">
      <div class="detail-prose reveal-left">
        <span class="eyebrow-label">AC Service</span>
        <h2>When should Manchester drivers schedule <span class="text-accent">AC repair</span> for their vehicle?</h2>
        <p class="answer-block">Schedule AC service before summer starts — ideally in April or May — so your system is ready for the heat. If your AC blows warm air, makes unusual noises, or produces a musty smell, bring it to our 518 Silver St shop immediately for a full diagnostic.</p>
        <p>New Hampshire summers are short but intense. Manchester regularly hits 90 degrees Fahrenheit from late June through August, and vehicles parked in direct sun along South Willow Boulevard or in downtown Manchester garages can reach interior temperatures above 140 degrees. A failing AC system is a safety and comfort problem, not a luxury issue.</p>
        <p>Our AC repair service in Manchester starts with a pressure test and leak detection. We check refrigerant levels, inspect the compressor clutch engagement, examine the condenser for debris or damage, and test the evaporator output temperature. If the system just needs a recharge, we top it off with the correct refrigerant type — R-134a for most vehicles built after 1994, R-1234yf for newer models.</p>
        <p>For more complex failures — compressor seizure, condenser leaks, expansion valve problems — we source OEM and aftermarket parts and handle the full repair in-house. Drivers in Londonderry, Hooksett, Bedford, and throughout the greater Manchester area rely on our AC diagnostics to get the fix right the first time, without guessing.</p>
      </div>
      <div class="reveal-right" style="position:relative;">
        <div class="detail-accent-corner detail-accent-corner--tl" aria-hidden="true"></div>
        <div class="detail-image">
          <img src="https://images.unsplash.com/photo-1517524008697-84bbe3c3fd98?w=800&q=80" alt="Auto AC diagnostic and repair at Jon's Shafts and Stuff Manchester NH" width="800" height="600" loading="lazy">
        </div>
        <div class="detail-accent-corner detail-accent-corner--br" aria-hidden="true"></div>
      </div>
    </div>
  </div>
</section>

<!-- Seasonal Tips Section -->
<section class="seasonal-tips" aria-label="Seasonal maintenance calendar">
  <div class="divider-slant--reverse">
    <svg viewBox="0 0 1440 70" preserveAspectRatio="none" fill="var(--color-bg)">
      <polygon points="0,70 1440,20 1440,70"/>
    </svg>
  </div>
  <div class="container">
    <div class="section-title reveal-up" style="text-align:center;">
      <span class="eyebrow-label" style="color:var(--color-accent);">Year-Round Care</span>
      <h2>What maintenance should Manchester drivers schedule <span class="text-accent">each season</span>?</h2>
      <p class="answer-block">New Hampshire's four distinct seasons each create specific wear patterns on brakes, oil, and AC systems. Following this seasonal schedule at our Manchester shop prevents breakdowns and keeps repair costs predictable throughout the year.</p>
    </div>

    <div class="tips-grid">
      <div class="tip-card reveal-up reveal-delay-1">
        <div class="tip-card__icon"><i data-lucide="snowflake"></i></div>
        <div class="tip-card__season">Winter</div>
        <h3>Dec - Feb</h3>
        <p>Switch to synthetic oil for cold-start protection. Inspect brake pads before road salt season peaks. Check antifreeze concentration for sub-zero nights in Manchester.</p>
      </div>
      <div class="tip-card reveal-up reveal-delay-2">
        <div class="tip-card__icon"><i data-lucide="flower-2"></i></div>
        <div class="tip-card__season">Spring</div>
        <h3>Mar - May</h3>
        <p>Post-winter brake inspection — salt corrodes rotors fast. Oil change to flush winter contaminants. Pre-summer AC test to catch refrigerant leaks early.</p>
      </div>
      <div class="tip-card reveal-up reveal-delay-3">
        <div class="tip-card__icon"><i data-lucide="sun"></i></div>
        <div class="tip-card__season">Summer</div>
        <h3>Jun - Aug</h3>
        <p>AC performance check before peak heat. Oil degrades faster in 90-degree Manchester temps — stay on your change interval. Brake fluid flush if it tests above 3% moisture.</p>
      </div>
      <div class="tip-card reveal-up reveal-delay-4">
        <div class="tip-card__icon"><i data-lucide="leaf"></i></div>
        <div class="tip-card__season">Fall</div>
        <h3>Sep - Nov</h3>
        <p>Oil change before freezing temps arrive. Brake inspection ahead of wet-leaf season on Manchester's tree-lined streets. Clear cabin air filter of pollen and debris from summer.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="seasonal-faq" aria-label="Frequently asked questions about seasonal services">
  <div class="container">
    <div class="section-title reveal-up" style="text-align:center;">
      <span class="eyebrow-label">FAQ</span>
      <h2>What do Manchester drivers ask about <span class="text-accent">brakes, oil, and AC</span>?</h2>
      <p class="answer-block">These are the six questions our team at 518 Silver St answers most often about seasonal auto maintenance. Each answer reflects real-world conditions in Manchester, NH and the surrounding communities of Bedford, Hooksett, Goffstown, and Londonderry.</p>
    </div>

    <div class="faq-grid">
      <?php foreach ($faqs as $idx => $faq): ?>
      <details class="faq-item reveal-up reveal-delay-<?php echo ($idx % 4) + 1; ?>">
        <summary><?php echo htmlspecialchars($faq['question']); ?></summary>
        <div class="faq-answer">
          <p><?php echo htmlspecialchars($faq['answer']); ?></p>
        </div>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="seasonal-cta" aria-label="Schedule seasonal maintenance">
  <div class="container">
    <div class="reveal-scale">
      <h2>Ready to schedule <span class="text-accent">seasonal maintenance</span> in Manchester?</h2>
      <p class="answer-block">Walk-ins welcome Monday through Friday, 8 AM to 5 PM at 518 Silver St in Manchester, NH. Or request a free estimate online — we respond within one business day with a detailed breakdown for your vehicle's brake, oil, or AC service needs.</p>
      <div class="btn-group">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" class="btn btn-accent btn-lg"><i data-lucide="phone" style="width:18px;height:18px;"></i> Call Now</a>
        <?php endif; ?>
        <a href="/contact/" class="btn btn-outline-white btn-lg">Get Free Estimate</a>
      </div>
    </div>
  </div>
</section>

<!-- Last Updated -->
<div class="page-updated">
  <p>Last Updated: <?php echo date('F Y'); ?></p>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

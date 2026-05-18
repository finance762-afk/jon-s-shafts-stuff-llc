<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ────────────────────────────────────────────────
$pageTitle       = "About $siteName | Auto Repair Since $yearEstablished | Manchester, NH";
$pageDescription = "$siteName has served Manchester, NH since $yearEstablished. From specialty driveshaft work to full-service auto repair at 518 Silver St — $yearsInBusiness years of honest diagnostics and proven results.";
$canonicalUrl    = $siteUrl . '/about/';
$ogImage         = $logoUrl;
$currentPage     = 'about';
$heroImagePreload = 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?w=1920&q=80';
$cssVersion      = '2';

// ─── Schema ────────────────────────────────────────────────────
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'About', 'url' => ''],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $breadcrumbSchema; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══════════════════════════════════════════════════════════
     ABOUT — Jon's Shafts & Stuff, LLC
     Phase 5 | Standard Tier | Page One Insights
     ═══════════════════════════════════════════════════════════ -->

<style>
/* ═══ About Page — Specific Styles ═══ */

/* Hero */
.hero--about {
  min-height: 55vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background-image: url('https://images.unsplash.com/photo-1625047509248-ec889cbff17f?w=1920&q=80');
  background-size: cover;
  background-position: center;
  position: relative;
  overflow: hidden;
  padding: calc(var(--nav-height) + var(--space-12)) var(--space-4) var(--space-12);
}
.hero--about::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(26,43,60,0.92) 0%, rgba(15,26,39,0.88) 50%, rgba(77,94,111,0.78) 100%);
  z-index: 1;
}
.hero--about::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.4;
  pointer-events: none;
  z-index: 1;
}
.hero--about .container {
  position: relative;
  z-index: 2;
}
.hero--about h1 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.hero--about p {
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-lg);
  max-width: 620px;
  margin: 0 auto;
}
.hero-breadcrumb {
  display: flex;
  justify-content: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.6);
  margin-bottom: var(--space-6);
}
.hero-breadcrumb a {
  color: rgba(255,255,255,0.7);
  transition: color var(--transition-fast);
}
.hero-breadcrumb a:hover { color: var(--color-accent); }

/* Story section */
.story-section {
  background: var(--color-white);
}
.story-grid {
  display: grid;
  grid-template-columns: 1.15fr 0.85fr;
  gap: var(--space-12);
  align-items: center;
}
.story-text .eyebrow-label { margin-bottom: var(--space-4); }
.story-text h2 { margin-bottom: var(--space-6); }
.story-text p {
  color: var(--color-gray);
  line-height: 1.75;
  margin-bottom: var(--space-4);
}
.story-text p:last-child { margin-bottom: 0; }
.story-image {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
}
.story-image img {
  width: 100%;
  height: 500px;
  object-fit: cover;
  border-radius: var(--radius-lg);
}
.story-image .accent-bar {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 6px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-primary));
}

/* Timeline / milestones section */
.milestones-section {
  background: var(--color-light);
  position: relative;
}
.milestones-section::before {
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
.milestone-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  position: relative;
  z-index: 2;
}
.milestone-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  text-align: center;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.milestone-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.milestone-year {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.1em;
  color: var(--color-accent);
  background: rgba(6,182,212,0.1);
  padding: var(--space-1) var(--space-3);
  border-radius: var(--radius-full);
  margin-bottom: var(--space-4);
}
.milestone-card h3 {
  font-size: var(--fs-h4);
  margin-bottom: var(--space-3);
}
.milestone-card p {
  color: var(--color-gray);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  margin: 0;
}

/* Values section */
.values-section {
  background: var(--color-white);
}
.values-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.value-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  text-align: center;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.value-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.value-icon {
  width: 64px;
  height: 64px;
  border-radius: var(--radius-full);
  background: rgba(6,182,212,0.12);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-5);
}
.value-icon i,
.value-icon svg {
  width: 28px;
  height: 28px;
  color: var(--color-accent);
}
.value-card h3 {
  font-size: var(--fs-h4);
  margin-bottom: var(--space-3);
}
.value-card p {
  color: var(--color-gray);
  font-size: var(--font-size-sm);
  line-height: 1.65;
  margin: 0;
}

/* Credentials section */
.credentials-section {
  background: var(--color-primary);
  color: var(--color-white);
  position: relative;
}
.credentials-grid {
  display: grid;
  grid-template-columns: 0.9fr 1.1fr;
  gap: var(--space-12);
  align-items: center;
}
.credentials-image {
  position: relative;
}
.credentials-image img {
  width: 100%;
  height: 440px;
  object-fit: cover;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-xl);
}
.credentials-text h2 {
  color: var(--color-white);
  margin-bottom: var(--space-6);
}
.credential-list {
  list-style: none;
  padding: 0;
}
.credential-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  padding: var(--space-4) 0;
  border-bottom: 1px solid rgba(255,255,255,0.1);
  font-size: var(--font-size-base);
  color: rgba(255,255,255,0.9);
}
.credential-list li:last-child { border-bottom: none; }
.credential-list li i,
.credential-list li svg {
  width: 22px;
  height: 22px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 2px;
}

/* About CTA */
.about-cta {
  background: var(--color-light);
  text-align: center;
  position: relative;
}
.about-cta::before {
  content: '';
  position: absolute;
  top: -1px;
  left: 0;
  right: 0;
  height: 80px;
  background: var(--color-primary);
  clip-path: polygon(0 0, 100% 0, 100% 30%, 0 100%);
  z-index: 1;
}
.about-cta .container {
  position: relative;
  z-index: 2;
}
.about-cta h2 { margin-bottom: var(--space-4); }
.about-cta p {
  color: var(--color-gray);
  max-width: 560px;
  margin: 0 auto var(--space-8);
  font-size: var(--font-size-lg);
}

/* Responsive */
@media (max-width: 1024px) {
  .milestone-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .story-grid { grid-template-columns: 1fr; }
  .story-image img { height: 360px; }
  .values-grid { grid-template-columns: 1fr; }
  .credentials-grid { grid-template-columns: 1fr; }
  .credentials-image img { height: 320px; }
  .milestone-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="hero hero--about" aria-label="About page hero">
  <div class="container">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span>/</span>
      <span>About</span>
    </nav>
    <h1>About <span class="text-accent"><?php echo htmlspecialchars($siteName); ?></span></h1>
    <p><?php echo htmlspecialchars($siteName); ?> is a licensed New Hampshire auto repair facility at 518 Silver St in Manchester — serving the community with honest diagnostics and dependable repairs since <?php echo $yearEstablished; ?>.</p>
  </div>
</section>

<!-- ═══ SVG Divider ═══ -->
<svg viewBox="0 0 1440 60" preserveAspectRatio="none" style="display:block;width:100%;height:60px;margin-top:-1px;" aria-hidden="true">
  <path d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z" fill="var(--color-white)"></path>
</svg>

<!-- ═══ OUR STORY ═══ -->
<section class="section story-section" aria-label="Our story">
  <div class="container">
    <div class="story-grid">
      <div class="story-text reveal-left">
        <span class="eyebrow-label">Our Story</span>
        <h2>From <span class="text-accent">Driveshaft Shop</span> to Full-Service Auto Repair</h2>
        <p><?php echo htmlspecialchars($siteName); ?> opened its doors at 518 Silver St in <?php echo $yearEstablished; ?> as a specialty driveshaft and drivetrain shop. Jon built the business one U-joint at a time — earning a reputation among Manchester mechanics and fleet operators as the place to send driveshaft problems nobody else wanted to touch.</p>
        <p>Over three decades, the shop expanded into a full-service auto repair facility without losing the specialty focus. Today we handle everything from routine oil changes and brake service to complete engine overhauls and transmission rebuilds. But when a customer from Bedford, Hooksett, or Goffstown has a vibration at highway speed or a clunk shifting out of park, they still bring it to us first.</p>
        <p>The approach hasn't changed since day one: inspect it thoroughly, explain what's wrong in plain language, write up an honest estimate, and fix it right the first time. That's how you stay in business for <?php echo $yearsInBusiness; ?> years in a town that doesn't tolerate shortcuts.</p>
      </div>
      <div class="story-image reveal-right">
        <img src="https://images.unsplash.com/photo-1625047509248-ec889cbff17f?w=800&q=80" alt="Mechanic inspecting engine bay at <?php echo htmlspecialchars($siteName); ?> in Manchester, NH" width="600" height="500" loading="lazy">
        <div class="accent-bar"></div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ MILESTONES ═══ -->
<section class="section milestones-section" aria-label="Company milestones">
  <div class="container">
    <div class="section-title reveal-up" style="position:relative;z-index:2;">
      <span class="eyebrow-label"><?php echo $yearsInBusiness; ?> Years &amp; Counting</span>
      <h2><span class="text-accent">Milestones</span> That Built Our Reputation</h2>
    </div>

    <div class="milestone-grid">
      <div class="milestone-card card-tint-1 reveal-up reveal-delay-1">
        <span class="milestone-year"><?php echo $yearEstablished; ?></span>
        <h3>Doors Open</h3>
        <p>Jon opens a specialty driveshaft repair shop at 518 Silver St in Manchester, NH — one of the only dedicated drivetrain facilities in Southern New Hampshire.</p>
      </div>
      <div class="milestone-card card-tint-2 reveal-up reveal-delay-2">
        <span class="milestone-year"><?php echo $yearEstablished + 8; ?></span>
        <h3>Full-Service Expansion</h3>
        <p>Added engine repair, transmission service, and brake work to meet growing demand from Manchester and surrounding communities.</p>
      </div>
      <div class="milestone-card card-tint-3 reveal-up reveal-delay-3">
        <span class="milestone-year"><?php echo $yearEstablished + 18; ?></span>
        <h3>10,000th Vehicle</h3>
        <p>Serviced our 10,000th vehicle — a transmission rebuild on a Ford F-250 from a loyal Hooksett fleet customer.</p>
      </div>
      <div class="milestone-card card-tint-1 reveal-up reveal-delay-4">
        <span class="milestone-year"><?php echo date('Y'); ?></span>
        <h3><?php echo $yearsInBusiness; ?> Years Strong</h3>
        <p>Still at 518 Silver St, still fixing what others can't. Now handling 11 service categories across all makes and models.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ VALUES ═══ -->
<section class="section values-section" aria-label="Our values">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">How We Work</span>
      <h2>What Sets <span class="text-accent"><?php echo htmlspecialchars($siteName); ?></span> Apart</h2>
    </div>

    <div class="values-grid">
      <div class="value-card card-tint-1 reveal-up reveal-delay-1">
        <div class="value-icon"><i data-lucide="search"></i></div>
        <h3>Honest Diagnostics</h3>
        <p>Every vehicle gets a thorough inspection and a clear explanation. We show you what's wrong, explain your options, and let you decide — no pressure, no upsells on parts you don't need.</p>
      </div>
      <div class="value-card card-tint-2 reveal-up reveal-delay-2">
        <div class="value-icon"><i data-lucide="file-text"></i></div>
        <h3>Written Estimates First</h3>
        <p>You see the price before we pick up a wrench. Our written estimates break down parts and labor so there are zero surprises when you pick up your keys.</p>
      </div>
      <div class="value-card card-tint-3 reveal-up reveal-delay-3">
        <div class="value-icon"><i data-lucide="shield-check"></i></div>
        <h3>Fix It Right the First Time</h3>
        <p>We use OEM-spec parts, proven repair methods, and a final test drive on every job. <?php echo $yearsInBusiness; ?> years in business means we've seen every failure mode — and know how to prevent comebacks.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SVG Divider ═══ -->
<svg viewBox="0 0 1440 80" preserveAspectRatio="none" style="display:block;width:100%;height:80px;margin-top:-1px;" aria-hidden="true">
  <path d="M0,0 L1440,40 L1440,80 L0,80 Z" fill="<?php echo htmlspecialchars($colors['primary']); ?>"></path>
</svg>

<!-- ═══ CREDENTIALS ═══ -->
<section class="section credentials-section" aria-label="Credentials and certifications">
  <div class="container">
    <div class="credentials-grid">
      <div class="credentials-image reveal-left">
        <img src="https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?w=800&q=80" alt="Auto repair technician working under vehicle at <?php echo htmlspecialchars($siteName); ?>" width="600" height="440" loading="lazy">
      </div>
      <div class="credentials-text reveal-right">
        <span class="eyebrow-label" style="color:var(--color-accent);">Credentials</span>
        <h2>Licensed, Experienced, <span class="text-accent">Built to Last</span></h2>
        <ul class="credential-list">
          <li><i data-lucide="badge-check"></i> Licensed New Hampshire auto repair facility</li>
          <li><i data-lucide="clock"></i> <?php echo $yearsInBusiness; ?>+ years continuous operation at 518 Silver St</li>
          <li><i data-lucide="wrench"></i> Full diagnostic tooling for all domestic and import vehicles</li>
          <li><i data-lucide="car"></i> All makes and models — cars, trucks, and SUVs</li>
          <li><i data-lucide="zap"></i> Specialty driveshaft and drivetrain repair capabilities</li>
          <li><i data-lucide="star"></i> 4.8-star Google rating across 120+ reviews</li>
          <li><i data-lucide="shield"></i> Free estimates on every repair — no obligation</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA ═══ -->
<section class="section about-cta" aria-label="Schedule your repair">
  <div class="container">
    <h2 class="reveal-up">Ready to See the <span class="text-accent">Difference</span>?</h2>
    <p class="reveal-up"><?php echo htmlspecialchars($siteName); ?> is open Monday through Friday, 8 AM to 5 PM at 518 Silver St in Manchester, NH. Bring your vehicle in for a free estimate — no appointment needed for diagnostics.</p>
    <div class="reveal-up">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

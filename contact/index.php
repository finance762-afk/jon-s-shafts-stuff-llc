<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ────────────────────────────────────────────────
$pageTitle       = "Contact $siteName | Free Estimates | Manchester, NH";
$pageDescription = "Contact $siteName at 518 Silver St in Manchester, NH. Call for a free auto repair estimate or submit our online form. Engine, transmission, brakes, driveshaft — $yearsInBusiness years of experience.";
$canonicalUrl    = $siteUrl . '/contact/';
$ogImage         = $logoUrl;
$currentPage     = 'contact';
$cssVersion      = '2';

// ─── Schema ────────────────────────────────────────────────────
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Contact', 'url' => ''],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $breadcrumbSchema; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══════════════════════════════════════════════════════════
     CONTACT — Jon's Shafts & Stuff, LLC
     Phase 5 | Standard Tier | Page One Insights
     ═══════════════════════════════════════════════════════════ -->

<style>
/* ═══ Contact Page — Specific Styles ═══ */

/* Hero */
.hero--contact {
  min-height: 45vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background: linear-gradient(135deg, rgba(74,106,140,0.95) 0%, rgba(54,81,107,0.92) 50%, rgba(107,139,171,0.85) 100%);
  position: relative;
  overflow: hidden;
  padding: calc(var(--nav-height) + var(--space-12)) var(--space-4) var(--space-12);
}
.hero--contact::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.4;
  pointer-events: none;
  z-index: 1;
}
.hero--contact .container {
  position: relative;
  z-index: 2;
}
.hero--contact h1 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.hero--contact p {
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-lg);
  max-width: 580px;
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

/* Contact Layout */
.contact-section {
  background: var(--color-white);
}
.contact-grid {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: var(--space-12);
  align-items: start;
}

/* Form Card */
.contact-form-card {
  background: var(--color-light);
  border-radius: var(--radius-xl);
  padding: var(--space-8);
  box-shadow: var(--shadow-card);
}
.contact-form-card h2 {
  margin-bottom: var(--space-2);
}
.contact-form-card .form-subtitle {
  color: var(--color-gray);
  margin-bottom: var(--space-6);
}
.contact-form .form-row {
  margin-bottom: var(--space-4);
}
.contact-form label {
  display: block;
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: var(--color-dark);
  margin-bottom: var(--space-1);
}
.contact-form input,
.contact-form select,
.contact-form textarea {
  width: 100%;
  padding: var(--space-3) var(--space-4);
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-md);
  background: var(--color-white);
  color: var(--color-dark);
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
}
.contact-form input:focus,
.contact-form select:focus,
.contact-form textarea:focus {
  outline: none;
  border-color: var(--color-accent);
  box-shadow: 0 0 0 3px rgba(212,155,42,0.15);
}
.contact-form textarea {
  resize: vertical;
  min-height: 120px;
}
.contact-form .btn-block {
  width: 100%;
  margin-top: var(--space-2);
  padding: var(--space-4);
  font-size: var(--font-size-base);
}

/* Consent fieldset overrides for this page */
.contact-form .form-consent-fieldset {
  border-color: var(--color-gray-light);
  background: var(--color-white);
}
.contact-form .form-consent-legend {
  color: var(--color-gray);
}
.contact-form .consent-label {
  color: var(--color-gray-dark);
}
.contact-form .consent-label a {
  color: var(--color-accent);
}

/* Info Sidebar */
.contact-info-sidebar h2 {
  margin-bottom: var(--space-6);
}
.info-card {
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  margin-bottom: var(--space-6);
}
.info-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  padding: var(--space-3) 0;
}
.info-item:first-child { padding-top: 0; }
.info-item i,
.info-item svg {
  width: 22px;
  height: 22px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 2px;
}
.info-item .info-label {
  font-weight: 600;
  color: var(--color-dark);
  display: block;
  margin-bottom: var(--space-1);
  font-size: var(--font-size-sm);
}
.info-item .info-value {
  color: var(--color-gray);
  font-size: var(--font-size-sm);
}
.info-item a {
  color: var(--color-accent);
  font-weight: 500;
  transition: color var(--transition-fast);
}
.info-item a:hover { color: var(--color-primary); }

/* Hours table */
.hours-table {
  width: 100%;
  font-size: var(--font-size-sm);
}
.hours-table tr {
  border-bottom: 1px solid rgba(0,0,0,0.06);
}
.hours-table td {
  padding: var(--space-2) 0;
}
.hours-table .day { font-weight: 600; color: var(--color-dark); }
.hours-table .time { text-align: right; color: var(--color-gray); }
.hours-table .closed { color: var(--color-danger); font-weight: 500; }

/* Map area */
.map-container {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-card);
  margin-top: var(--space-8);
  height: 320px;
  background: var(--color-light);
  display: flex;
  align-items: center;
  justify-content: center;
}
.map-container iframe {
  width: 100%;
  height: 100%;
  border: 0;
}
.map-placeholder {
  text-align: center;
  color: var(--color-gray);
  padding: var(--space-8);
}
.map-placeholder i,
.map-placeholder svg {
  width: 40px;
  height: 40px;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}

/* Contact CTA */
.contact-cta {
  background: var(--color-primary);
  text-align: center;
}
.contact-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.contact-cta p {
  color: rgba(255,255,255,0.85);
  max-width: 560px;
  margin: 0 auto var(--space-6);
  font-size: var(--font-size-lg);
}

/* Responsive */
@media (max-width: 768px) {
  .contact-grid { grid-template-columns: 1fr; }
  .contact-form-card { padding: var(--space-6); }
}
</style>

<!-- ═══ HERO ═══ -->
<section class="hero hero--contact" aria-label="Contact page hero">
  <div class="container">
    <nav class="hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span>/</span>
      <span>Contact</span>
    </nav>
    <h1>Get a <span class="text-accent">Free Estimate</span></h1>
    <p>Fill out the form below or call us directly. We respond to every inquiry within one business day — most same-day.</p>
  </div>
</section>

<!-- ═══ SVG Divider ═══ -->
<svg viewBox="0 0 1440 60" preserveAspectRatio="none" style="display:block;width:100%;height:60px;margin-top:-1px;" aria-hidden="true">
  <path d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z" fill="var(--color-white)"></path>
</svg>

<!-- ═══ CONTACT FORM + INFO ═══ -->
<section class="section contact-section" aria-label="Contact form and information">
  <div class="container">
    <div class="contact-grid">

      <!-- Form -->
      <div class="contact-form-card reveal-left">
        <h2>Send Us a <span class="text-accent">Message</span></h2>
        <p class="form-subtitle">Describe your vehicle issue and we'll get back to you with an estimate.</p>

        <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="contact-form">
          <!-- Honeypot -->
          <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
          <!-- Hidden fields -->
          <input type="hidden" name="_next" value="/thank-you">
          <input type="hidden" name="_consent_version" value="v2.1">
          <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

          <div class="form-row">
            <label for="contact-name">Full Name</label>
            <input type="text" id="contact-name" name="name" placeholder="Your full name" required>
          </div>
          <div class="form-row">
            <label for="contact-email">Email</label>
            <input type="email" id="contact-email" name="email" placeholder="your@email.com" required>
          </div>
          <div class="form-row">
            <label for="contact-phone">Phone</label>
            <input type="tel" id="contact-phone" name="phone" placeholder="(603) 555-1234" required>
          </div>
          <div class="form-row">
            <label for="contact-service">Service Needed</label>
            <select id="contact-service" name="service">
              <option value="">Select a service</option>
              <?php foreach ($services as $s): ?>
              <option value="<?php echo htmlspecialchars($s['name']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
              <?php endforeach; ?>
              <option value="Other">Other / Not Sure</option>
            </select>
          </div>
          <div class="form-row">
            <label for="contact-message">Message</label>
            <textarea id="contact-message" name="message" rows="4" placeholder="Tell us about your vehicle and the issue you're experiencing..."></textarea>
          </div>

          <!-- ═══ SEPARATE CONSENT CHECKBOXES (TCPA 2025/2026 + Texas TCPA) ═══ -->
          <fieldset class="form-consent-fieldset">
            <legend class="form-consent-legend">Communication Consent</legend>

            <label class="form-consent-item">
              <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
              <span class="consent-label">
                <strong>Email updates (optional):</strong> I agree to receive emails from
                <?php echo htmlspecialchars($siteName); ?> about my inquiry, services, promotions, and news. I understand I can unsubscribe anytime via the link in any email
                or by emailing <?php echo htmlspecialchars($contactEmail); ?>. Message frequency varies.
              </span>
            </label>

            <label class="form-consent-item">
              <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
              <span class="consent-label">
                <strong>SMS/Text messages (optional):</strong> I agree to receive text messages from
                <?php echo htmlspecialchars($siteName); ?> at the phone number I provided. Message types may include appointment reminders, service updates, and promotional
                offers. Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help.
                <strong>Consent is not a condition of purchase.</strong>
              </span>
            </label>

            <label class="form-consent-item form-consent-required">
              <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
              <span class="consent-label">
                I have read and agree to the
                <a href="/privacy-policy/">Privacy Policy</a>
                and
                <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span>
              </span>
            </label>
          </fieldset>

          <!-- spam shield: signed render timestamp + JS interaction signal -->
          <?php $__ft_ts = (string) time(); ?>
          <input type="hidden" name="_ft" value="<?php echo $__ft_ts . '.' . hash_hmac('sha256', $__ft_ts, $leadsFormSecret); ?>">
          <input type="hidden" name="_js" value="" class="js-shield-field">
          <?php if (empty($GLOBALS['__js_shield'])) { $GLOBALS['__js_shield'] = 1; ?>
          <script>(function(){var d=document,f=function(){var i,e=d.querySelectorAll('.js-shield-field');for(i=0;i<e.length;i++)e[i].value='1';d.removeEventListener('pointerdown',f);d.removeEventListener('keydown',f);};d.addEventListener('pointerdown',f);d.addEventListener('keydown',f);})();</script>
          <?php } ?>
          <button type="submit" class="btn btn-accent btn-block">Send Message</button>
        </form>
      </div>

      <!-- Info Sidebar -->
      <div class="contact-info-sidebar reveal-right">
        <h2>Contact <span class="text-accent">Info</span></h2>

        <div class="info-card card-tint-1">
          <div class="info-item">
            <i data-lucide="map-pin"></i>
            <div>
              <span class="info-label">Address</span>
              <span class="info-value"><?php echo htmlspecialchars($address['street']); ?>, <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?></span>
            </div>
          </div>
          <?php if (!empty($phone)): ?>
          <div class="info-item">
            <i data-lucide="phone"></i>
            <div>
              <span class="info-label">Phone</span>
              <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>"><?php echo htmlspecialchars(formatPhone($phone)); ?></a>
            </div>
          </div>
          <?php endif; ?>
          <?php if (!empty($email)): ?>
          <div class="info-item">
            <i data-lucide="mail"></i>
            <div>
              <span class="info-label">Email</span>
              <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
            </div>
          </div>
          <?php endif; ?>
        </div>

        <div class="info-card card-tint-2">
          <h3 style="margin-bottom:var(--space-4);font-size:var(--fs-h4);">Business Hours</h3>
          <table class="hours-table">
            <tr><td class="day">Monday</td><td class="time">8:00 AM – 5:00 PM</td></tr>
            <tr><td class="day">Tuesday</td><td class="time">8:00 AM – 5:00 PM</td></tr>
            <tr><td class="day">Wednesday</td><td class="time">8:00 AM – 5:00 PM</td></tr>
            <tr><td class="day">Thursday</td><td class="time">8:00 AM – 5:00 PM</td></tr>
            <tr><td class="day">Friday</td><td class="time">8:00 AM – 5:00 PM</td></tr>
            <tr><td class="day">Saturday</td><td class="time closed">Closed</td></tr>
            <tr><td class="day">Sunday</td><td class="time closed">Closed</td></tr>
          </table>
        </div>

        <!-- Map -->
        <div class="map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2922.3!2d-71.4441!3d42.9849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2z518+Silver+St%2C+Manchester%2C+NH+03103!5e0!3m2!1sen!2sus!4v1" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Map showing <?php echo htmlspecialchars($siteName); ?> location at 518 Silver St, Manchester, NH"></iframe>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══ CONTACT CTA ═══ -->
<section class="contact-cta" aria-label="Call now">
  <div class="container">
    <h2 class="reveal-up">Prefer to <span class="text-accent">Talk</span>?</h2>
    <p class="reveal-up">Call <?php echo htmlspecialchars($siteName); ?> during business hours for immediate assistance. We're at 518 Silver St in Manchester — walk-ins welcome for quick diagnostics.</p>
    <div class="reveal-up">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" class="btn btn-accent btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px;"></i>
        Call <?php echo htmlspecialchars(formatPhone($phone)); ?>
      </a>
      <?php else: ?>
      <a href="/about/" class="btn btn-accent btn-lg">Learn About Our Shop</a>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ────────────────────────────────────────────────
$pageTitle       = "Thank You | $siteName | Manchester, NH";
$pageDescription = "Thank you for contacting $siteName. We'll respond to your inquiry within one business day.";
$canonicalUrl    = $siteUrl . '/thank-you';
$currentPage     = '';
$noindex         = true;
$cssVersion      = '2';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<style>
/* ═══ Thank You Page Styles ═══ */
.thankyou-section {
  min-height: 70vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: calc(var(--nav-height) + var(--space-12)) var(--space-4) var(--space-12);
  background: var(--color-light);
}
.thankyou-icon {
  width: 80px;
  height: 80px;
  border-radius: var(--radius-full);
  background: rgba(212,155,42,0.12);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-6);
}
.thankyou-icon i,
.thankyou-icon svg {
  width: 40px;
  height: 40px;
  color: var(--color-accent);
}
.thankyou-section h1 {
  margin-bottom: var(--space-4);
}
.thankyou-section p {
  color: var(--color-gray);
  font-size: var(--font-size-lg);
  max-width: 540px;
  margin: 0 auto var(--space-4);
}
.next-steps {
  max-width: 480px;
  margin: var(--space-6) auto var(--space-8);
  text-align: left;
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  box-shadow: var(--shadow-card);
}
.next-steps h3 {
  font-size: var(--fs-h4);
  margin-bottom: var(--space-4);
  text-align: center;
}
.next-step {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  padding: var(--space-3) 0;
  border-bottom: 1px solid rgba(0,0,0,0.06);
}
.next-step:last-child { border-bottom: none; }
.step-num {
  width: 28px;
  height: 28px;
  border-radius: var(--radius-full);
  background: var(--color-accent);
  color: var(--color-white);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 800;
  flex-shrink: 0;
}
.next-step p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin: 0;
  line-height: 1.5;
}
.thankyou-actions {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-4);
}
</style>

<section class="thankyou-section" aria-label="Thank you">
  <div class="container">
    <div class="thankyou-icon"><i data-lucide="check-circle"></i></div>
    <h1>Thank You for <span class="text-accent">Reaching Out</span></h1>
    <p>We've received your message and will respond within one business day — most inquiries get a same-day reply.</p>

    <div class="next-steps">
      <h3>What Happens Next</h3>
      <div class="next-step">
        <span class="step-num">1</span>
        <p>Our team reviews your inquiry and prepares an initial response.</p>
      </div>
      <div class="next-step">
        <span class="step-num">2</span>
        <p>We'll reach out by phone or email to discuss your vehicle's needs and schedule a visit.</p>
      </div>
      <div class="next-step">
        <span class="step-num">3</span>
        <p>Bring your vehicle to 518 Silver St for a free diagnostic and written estimate.</p>
      </div>
    </div>

    <div class="thankyou-actions">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" class="btn btn-accent btn-lg">
        <i data-lucide="phone" style="width:16px;height:16px;"></i>
        Call <?php echo htmlspecialchars(formatPhone($phone)); ?>
      </a>
      <?php endif; ?>
      <a href="/" class="btn btn-secondary btn-lg">Back to Homepage</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ────────────────────────────────────────────────
$pageTitle       = "Page Not Found | $siteName | Manchester, NH";
$pageDescription = "The page you're looking for doesn't exist. Visit $siteName for auto repair services in Manchester, NH — engine, transmission, brakes, driveshaft, and more.";
$canonicalUrl    = $siteUrl . '/';
$currentPage     = '';
$noindex         = true;
$cssVersion      = '2';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<style>
/* ═══ 404 Page Styles ═══ */
.error-section {
  min-height: 70vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: calc(var(--nav-height) + var(--space-12)) var(--space-4) var(--space-12);
  background: var(--color-light);
}
.error-code {
  font-family: var(--font-heading);
  font-size: clamp(6rem, 15vw, 12rem);
  font-weight: 900;
  line-height: 1;
  color: var(--color-primary);
  opacity: 0.12;
  margin-bottom: var(--space-4);
}
.error-section h1 {
  margin-bottom: var(--space-4);
}
.error-section p {
  color: var(--color-gray);
  font-size: var(--font-size-lg);
  max-width: 520px;
  margin: 0 auto var(--space-8);
}
.error-links {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-4);
  margin-bottom: var(--space-8);
}
.error-link {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  padding: var(--space-3) var(--space-5);
  border-radius: var(--radius-md);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  color: var(--color-dark);
  font-weight: 500;
  font-size: var(--font-size-sm);
  transition: all var(--transition-base);
}
.error-link:hover {
  box-shadow: var(--shadow-md);
  transform: translateY(-2px);
  color: var(--color-accent);
}
.error-link i,
.error-link svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
}
</style>

<section class="error-section" aria-label="Page not found">
  <div class="container">
    <div class="error-code" aria-hidden="true">404</div>
    <h1>This Page <span class="text-accent">Doesn't Exist</span></h1>
    <p>The page you're looking for may have moved or no longer exists. Try one of these links instead — or head back to the homepage.</p>

    <div class="error-links">
      <a href="/" class="error-link"><i data-lucide="home"></i> Homepage</a>
      <a href="/services/" class="error-link"><i data-lucide="wrench"></i> Our Services</a>
      <a href="/about/" class="error-link"><i data-lucide="users"></i> About Us</a>
      <a href="/contact/" class="error-link"><i data-lucide="mail"></i> Contact</a>
    </div>

    <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Estimate</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<?php
/**
 * Header / Navigation — Jon's Shafts & Stuff, LLC
 * Page One Insights — Phase 2
 *
 * Expects $currentPage to be set before include.
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage = $currentPage ?? 'home';
?>

<!-- Skip to Content -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<header class="site-header" data-header>
  <nav class="navbar-inner container" aria-label="Main navigation">
    <!-- Logo -->
    <a href="/" class="navbar-logo" aria-label="<?php echo htmlspecialchars($siteName); ?> — Home">
      <img src="<?php echo htmlspecialchars($logoUrl); ?>" alt="<?php echo htmlspecialchars($siteName); ?> logo" width="188" height="74">
    </a>

    <!-- Desktop Nav Links -->
    <ul class="navbar-links" role="menubar">
      <li role="none">
        <a href="/" role="menuitem"<?php echo $currentPage === 'home' ? ' aria-current="page"' : ''; ?>>Home</a>
      </li>
      <li class="has-dropdown" role="none">
        <a href="/services/" role="menuitem" aria-haspopup="true"<?php echo $currentPage === 'services' ? ' aria-current="page"' : ''; ?>>Services</a>
        <ul class="dropdown" role="menu" style="display:none">
          <?php foreach ($servicePages as $sp): ?>
          <li role="none">
            <a href="/services/<?php echo htmlspecialchars($sp['slug']); ?>/" role="menuitem"><?php echo htmlspecialchars($sp['title']); ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </li>
      <li role="none">
        <a href="/service-area/" role="menuitem"<?php echo $currentPage === 'service-area' ? ' aria-current="page"' : ''; ?>>Service Area</a>
      </li>
      <li role="none">
        <a href="/about/" role="menuitem"<?php echo $currentPage === 'about' ? ' aria-current="page"' : ''; ?>>About</a>
      </li>
      <li role="none">
        <a href="/contact/" role="menuitem"<?php echo $currentPage === 'contact' ? ' aria-current="page"' : ''; ?>>Contact</a>
      </li>
    </ul>

    <!-- Desktop CTA -->
    <div class="navbar-cta">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" class="phone-link">
        <i data-lucide="phone" style="width:16px;height:16px;"></i>
        <?php echo htmlspecialchars(formatPhone($phone)); ?>
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn btn-accent btn-sm">Free Estimate</a>
    </div>

    <!-- Mobile Hamburger -->
    <button class="hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
    </button>
  </nav>
</header>

<!-- Mobile Full-Screen Menu -->
<nav class="mobile-menu" id="mobile-menu" aria-label="Mobile navigation">
  <a href="/"<?php echo $currentPage === 'home' ? ' aria-current="page"' : ''; ?>>Home</a>
  <a href="/services/"<?php echo $currentPage === 'services' ? ' aria-current="page"' : ''; ?>>Services</a>
  <div class="mobile-service-links">
    <?php foreach ($servicePages as $sp): ?>
    <a href="/services/<?php echo htmlspecialchars($sp['slug']); ?>/"><?php echo htmlspecialchars($sp['title']); ?></a>
    <?php endforeach; ?>
  </div>
  <a href="/service-area/"<?php echo $currentPage === 'service-area' ? ' aria-current="page"' : ''; ?>>Service Area</a>
  <a href="/about/"<?php echo $currentPage === 'about' ? ' aria-current="page"' : ''; ?>>About</a>
  <a href="/contact/"<?php echo $currentPage === 'contact' ? ' aria-current="page"' : ''; ?>>Contact</a>
  <div class="mobile-cta-group">
    <?php if (!empty($phone)): ?>
    <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" class="btn btn-outline-white btn-lg">
      <i data-lucide="phone" style="width:18px;height:18px;"></i>
      Call <?php echo htmlspecialchars(formatPhone($phone)); ?>
    </a>
    <?php endif; ?>
    <a href="/contact/" class="btn btn-accent btn-lg">Get Free Estimate</a>
  </div>
</nav>

<main id="main-content">

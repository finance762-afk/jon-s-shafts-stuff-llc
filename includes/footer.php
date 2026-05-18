<?php
/**
 * Footer — Jon's Shafts & Stuff, LLC
 * Page One Insights — Phase 2
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>

</main>

<footer class="site-footer">
  <div class="container">

    <!-- Footer Grid — 4 Columns -->
    <div class="footer-grid">

      <!-- Col 1: Company Info -->
      <div class="footer-col">
        <h4><?php echo htmlspecialchars($siteName); ?></h4>
        <p><?php echo htmlspecialchars($tagline); ?></p>
        <p>Manchester, NH's driveshaft and auto repair specialists since <?php echo $yearEstablished; ?>. Engine repair, transmissions, brakes, exhaust, and routine maintenance for every make and model.</p>
        <div class="footer-trust">
          <span class="trust-badge"><i data-lucide="shield-check" style="width:14px;height:14px;"></i> Licensed</span>
          <span class="trust-badge"><i data-lucide="clock" style="width:14px;height:14px;"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
          <span class="trust-badge"><i data-lucide="badge-check" style="width:14px;height:14px;"></i> Free Estimates</span>
        </div>
      </div>

      <!-- Col 2: Services -->
      <div class="footer-col">
        <h4>Services</h4>
        <ul>
          <?php
          $footerServices = array_slice($services, 0, 8);
          foreach ($footerServices as $s): ?>
          <li><a href="/services/<?php echo htmlspecialchars($s['slug']); ?>/"><?php echo htmlspecialchars($s['name']); ?></a></li>
          <?php endforeach; ?>
          <?php if (count($services) > 8): ?>
          <li><a href="/services/">View All Services &rarr;</a></li>
          <?php endif; ?>
        </ul>
      </div>

      <!-- Col 3: More Services + Service Areas -->
      <div class="footer-col">
        <h4>More Services</h4>
        <ul>
          <?php
          $moreServices = array_slice($services, 8);
          foreach ($moreServices as $s): ?>
          <li><a href="/services/<?php echo htmlspecialchars($s['slug']); ?>/"><?php echo htmlspecialchars($s['name']); ?></a></li>
          <?php endforeach; ?>
        </ul>

        <h4 style="margin-top:var(--space-6);">Service Areas</h4>
        <ul>
          <?php foreach ($serviceAreas as $area): ?>
          <li><a href="/service-area/"><?php echo htmlspecialchars($area['city'] ?: $address['city']); ?>, <?php echo htmlspecialchars($area['state']); ?></a></li>
          <?php endforeach; ?>
          <li><a href="/service-area/">View All Areas &rarr;</a></li>
        </ul>
      </div>

      <!-- Col 4: Contact Info -->
      <div class="footer-col">
        <h4>Contact Us</h4>
        <?php if (!empty($phone)): ?>
        <div class="contact-item">
          <i data-lucide="phone"></i>
          <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>"><?php echo htmlspecialchars(formatPhone($phone)); ?></a>
        </div>
        <?php endif; ?>
        <?php if (!empty($email)): ?>
        <div class="contact-item">
          <i data-lucide="mail"></i>
          <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
        </div>
        <?php endif; ?>
        <div class="contact-item">
          <i data-lucide="map-pin"></i>
          <span><?php echo htmlspecialchars($address['street']); ?>, <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?></span>
        </div>
        <div class="contact-item">
          <i data-lucide="clock"></i>
          <span>Mon-Fri: 8:00 AM - 5:00 PM</span>
        </div>
        <a href="/contact/" class="btn btn-accent btn-sm" style="margin-top:var(--space-4);">Get Free Estimate</a>
      </div>

    </div>

    <!-- AEO Entity Block -->
    <div class="footer-entity" itemscope itemtype="https://schema.org/AutoRepair">
      <meta itemprop="name" content="<?php echo htmlspecialchars($siteName); ?>">
      <meta itemprop="url" content="<?php echo $siteUrl; ?>/">
      <?php if (!empty($phone)): ?>
      <meta itemprop="telephone" content="<?php echo htmlspecialchars($phone); ?>">
      <?php endif; ?>
      <h4>About <?php echo htmlspecialchars($siteName); ?></h4>
      <p><?php echo htmlspecialchars($siteName); ?> is a licensed auto repair shop located at <?php echo htmlspecialchars($address['street']); ?> in <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?>. With <?php echo $yearsInBusiness; ?> years serving the Manchester area, we specialize in driveshaft repair, engine diagnostics, transmission rebuilds, brake service, oil changes, exhaust repair, suspension work, and battery replacement. Open Monday through Friday, 8 AM to 5 PM.<?php if (!empty($phone)): ?> Call <?php echo htmlspecialchars(formatPhone($phone)); ?> for a free estimate.<?php endif; ?></p>
    </div>

    <!-- Footer Legal Row -->
    <div class="footer-legal-row">
      <a href="/privacy-policy/">Privacy Policy</a>
      <span class="divider">|</span>
      <a href="/terms/">Terms of Service</a>
      <span class="divider">|</span>
      <a href="/cookie-policy/">Cookie Policy</a>
      <span class="divider">|</span>
      <a href="/accessibility/">Accessibility</a>
      <span class="divider">|</span>
      <a href="/privacy-policy/#ccpa-rights">Do Not Sell or Share My Personal Information</a>
      <span class="divider">|</span>
      <a href="/sitemap.xml">Sitemap</a>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($siteName); ?>. All rights reserved.</p>
      <p class="footer-credit"><a href="https://pageoneinsights.com" rel="dofollow" target="_blank">Web Design &amp; Hosting by Page One Insights, LLC</a></p>
    </div>

  </div>
</footer>

<!-- Back to Top -->
<button class="back-to-top" aria-label="Back to top">
  <i data-lucide="chevron-up"></i>
</button>

<!-- Mobile Floating CTA Bar -->
<div class="mobile-cta-bar" aria-label="Quick contact">
  <div class="cta-inner">
    <?php if (!empty($phone)): ?>
    <a href="tel:<?php echo htmlspecialchars(formatPhone($phone, 'tel')); ?>" class="btn btn-accent">
      <i data-lucide="phone" style="width:16px;height:16px;"></i> Call Now
    </a>
    <?php endif; ?>
    <a href="/contact/" class="btn btn-outline-white">Free Estimate</a>
  </div>
</div>

<!-- Cookie Banner -->
<div class="cookie-banner" id="cookie-banner" role="region" aria-label="Cookie notice">
  <p>We use cookies to improve your experience. By using our site, you consent to cookies. <a href="/cookie-policy/">Learn more</a>.</p>
  <button class="cookie-banner__dismiss" id="cookie-dismiss">Got it</button>
</div>

<!-- Scripts -->
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
<script>lucide.createIcons();</script>
<script src="/assets/js/main.js" defer></script>
<script src="/assets/js/animations.js" defer></script>
<script src="/assets/js/effects.js" defer></script>

<?php if (!empty($useSwiper)): ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<?php endif; ?>

<?php if (!empty($useTilt)): ?>
<script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1/dist/vanilla-tilt.min.js" defer></script>
<?php endif; ?>

<!-- Cookie Banner Dismissal + Back to Top + Mobile Menu -->
<script>
(function() {
  // Cookie banner
  var banner = document.getElementById('cookie-banner');
  var dismiss = document.getElementById('cookie-dismiss');
  if (banner && dismiss) {
    if (localStorage.getItem('cookie_consent') === 'dismissed') {
      banner.classList.add('dismissed');
    }
    dismiss.addEventListener('click', function() {
      banner.classList.add('dismissed');
      localStorage.setItem('cookie_consent', 'dismissed');
    });
  }

  // Back to top
  var backToTop = document.querySelector('.back-to-top');
  if (backToTop) {
    window.addEventListener('scroll', function() {
      backToTop.classList.toggle('visible', window.scrollY > 600);
    });
    backToTop.addEventListener('click', function() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // Mobile menu toggle
  var hamburger = document.querySelector('.hamburger');
  var mobileMenu = document.querySelector('.mobile-menu');
  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function() {
      var isOpen = mobileMenu.classList.toggle('active');
      hamburger.setAttribute('aria-expanded', isOpen.toString());
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });
    mobileMenu.querySelectorAll('a').forEach(function(link) {
      link.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      });
    });
  }

  // Sticky header scroll
  var header = document.querySelector('.site-header');
  if (header) {
    window.addEventListener('scroll', function() {
      header.classList.toggle('scrolled', window.scrollY > 60);
    });
  }

  // Reveal animations (IntersectionObserver)
  var revealEls = document.querySelectorAll('[data-animate], .reveal-up, .reveal-down, .reveal-left, .reveal-right, .reveal-scale');
  if (revealEls.length > 0 && 'IntersectionObserver' in window) {
    var revealObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('animated');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
    revealEls.forEach(function(el) { revealObserver.observe(el); });
  }

  // Counter animation
  var counters = document.querySelectorAll('[data-counter]');
  if (counters.length > 0 && 'IntersectionObserver' in window) {
    var counterObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var el = entry.target;
          var target = parseInt(el.getAttribute('data-counter'), 10);
          var suffix = el.getAttribute('data-suffix') || '';
          var prefix = el.getAttribute('data-prefix') || '';
          var duration = 2000;
          var startTime = null;
          function animate(timestamp) {
            if (!startTime) startTime = timestamp;
            var progress = Math.min((timestamp - startTime) / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3);
            var current = Math.floor(eased * target);
            el.textContent = prefix + current.toLocaleString() + suffix;
            if (progress < 1) requestAnimationFrame(animate);
            else el.textContent = prefix + target.toLocaleString() + suffix;
          }
          requestAnimationFrame(animate);
          counterObserver.unobserve(el);
        }
      });
    }, { threshold: 0.3 });
    counters.forEach(function(el) { counterObserver.observe(el); });
  }
})();
</script>
</body>
</html>

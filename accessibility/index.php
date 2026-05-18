<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$companyName       = $siteName;
$companyEntityType = $entityType;
$companyState      = $stateOfFormation;
$companyEmail      = $contactEmail;
$companyPhone      = $contactPhone;
$companyAddress    = $businessAddress;
$lastUpdated       = 'May 18, 2026';

$pageTitle       = 'Accessibility | ' . $siteName;
$pageDescription = 'Accessibility statement for ' . $siteName . ' — our commitment to WCAG 2.1 AA compliance and digital accessibility.';
$canonicalUrl    = $siteUrl . '/accessibility/';
$currentPage     = 'legal';
$cssVersion      = '2';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Accessibility Statement",
  "url": "<?php echo $siteUrl; ?>/accessibility/",
  "description": "<?php echo htmlspecialchars($pageDescription); ?>",
  "publisher": {
    "@type": "Organization",
    "name": "<?php echo htmlspecialchars($companyName); ?>"
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Home", "item": "<?php echo $siteUrl; ?>/" },
      { "@type": "ListItem", "position": 2, "name": "Accessibility", "item": "<?php echo $siteUrl; ?>/accessibility/" }
    ]
  }
}
</script>

<section class="legal-hero">
  <div class="container">
    <h1>Accessibility Statement</h1>
  </div>
</section>

<section class="legal-content">
  <div class="content-narrow">
    <p class="legal-updated"><strong>Last Updated:</strong> <?php echo $lastUpdated; ?></p>

    <h2>Our Commitment</h2>
    <p><?php echo htmlspecialchars($companyName); ?> is committed to ensuring digital accessibility for people with disabilities. We continually work to improve the user experience of our website and aim to conform to the Web Content Accessibility Guidelines (WCAG) 2.1 Level AA standards.</p>

    <h2>Accessibility Features</h2>
    <p>We have implemented the following accessibility features on our website:</p>
    <ul>
      <li><strong>Semantic HTML5 structure</strong> — proper use of headings, landmarks, lists, and structural elements for screen reader compatibility</li>
      <li><strong>Skip-to-content link</strong> — allows keyboard users to bypass navigation and jump directly to main content</li>
      <li><strong>ARIA labels and landmarks</strong> — descriptive labels on interactive elements and ARIA landmarks for navigation regions</li>
      <li><strong>Full keyboard navigation</strong> — all interactive elements are operable via keyboard</li>
      <li><strong>Visible focus indicators</strong> — clear visual focus outlines on all interactive elements when navigating with a keyboard</li>
      <li><strong>WCAG AA color contrast</strong> — minimum 4.5:1 contrast ratio for body text and 3:1 for large text</li>
      <li><strong>Descriptive alt text</strong> — all informational images include descriptive alternative text</li>
      <li><strong>Responsive zoom up to 200%</strong> — content remains usable and readable when zoomed to 200%</li>
      <li><strong><code>prefers-reduced-motion</code> media query</strong> — animations are disabled or reduced for users who prefer reduced motion</li>
      <li><strong>Form labels associated with inputs</strong> — all form fields have programmatically associated labels</li>
      <li><strong>Error messages programmatically linked to fields</strong> — form validation errors are announced to assistive technology</li>
    </ul>

    <h2>Known Limitations</h2>
    <p>Despite our best efforts, some areas of the website may not be fully accessible:</p>
    <ul>
      <li><strong>Third-party content:</strong> Embedded content such as Google Maps may not fully conform to WCAG 2.1 AA standards. We are working with third-party providers to address these limitations.</li>
    </ul>

    <h2>Feedback</h2>
    <p>We welcome your feedback on the accessibility of our website. If you encounter accessibility barriers or have suggestions for improvement, please contact us:</p>
    <ul>
      <li>Email: <a href="mailto:<?php echo htmlspecialchars($companyEmail); ?>"><?php echo htmlspecialchars($companyEmail); ?></a></li>
      <?php if (!empty($companyPhone)): ?>
      <li>Phone: <a href="tel:<?php echo htmlspecialchars($companyPhone); ?>"><?php echo htmlspecialchars($companyPhone); ?></a></li>
      <?php endif; ?>
    </ul>
    <p>We aim to respond to accessibility feedback within 5 business days.</p>

    <h2>Enforcement</h2>
    <p>We recognize your rights under the Americans with Disabilities Act (ADA), Section 508 of the Rehabilitation Act, and applicable state accessibility laws. If you believe that your rights have been violated, you may file a complaint with the appropriate enforcement agency or contact us directly so we can address your concerns.</p>

    <p style="margin-top:var(--space-8);font-size:var(--font-size-sm);color:var(--color-gray);font-style:italic;">This Accessibility Statement is provided as a general template. We recommend reviewing this document with a licensed <?php echo htmlspecialchars($companyState); ?> attorney before publication.</p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

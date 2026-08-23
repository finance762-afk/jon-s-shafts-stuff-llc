<?php
// Dynamic XML sitemap (served at /sitemap.xml via .htaccess rewrite).
// Added 2026-08-23: this site had NO sitemap while its GSC property had one
// submitted. Filesystem-driven: every directory holding an index.php is a
// page (matches the directory-per-slug URL standard); excludes partials,
// assets, thank-you (noindex) and 404.
if (empty($_SERVER['DOCUMENT_ROOT'])) { $_SERVER['DOCUMENT_ROOT'] = dirname(__FILE__); }
$root = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
require_once $root . '/includes/config.php';
if (empty($siteUrl)) { $siteUrl = 'https://' . ($domain ?? $_SERVER['HTTP_HOST']); }
header('Content-Type: application/xml; charset=utf-8');
$skip = ['includes','assets','references','thank-you','.git'];
$paths = ['/'];
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::SELF_FIRST);
foreach ($it as $f) {
    if (!$f->isDir()) continue;
    $rel = substr($f->getPathname(), strlen($root));
    $top = explode('/', ltrim($rel, '/'))[0];
    if (in_array($top, $skip, true)) continue;
    if (is_file($f->getPathname() . '/index.php')) { $paths[] = rtrim($rel, '/') . '/'; }
}
sort($paths);
$today = date('Y-m-d');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($paths as $p) {
    $pri = $p === '/' ? '1.0' : (preg_match('#^/(privacy|terms|cookie|accessibility)#', $p) ? '0.3' : '0.7');
    echo "  <url>\n    <loc>" . htmlspecialchars(rtrim($siteUrl, '/') . $p, ENT_XML1) . "</loc>\n    <lastmod>{$today}</lastmod>\n    <changefreq>monthly</changefreq>\n    <priority>{$pri}</priority>\n  </url>\n";
}
echo '</urlset>' . "\n";

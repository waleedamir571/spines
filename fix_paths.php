<?php
$base_path = '/company-projects/spines.comm';
$files = ['partials/header.php', 'partials/footer.php', 'partials/nav.php'];

foreach ($files as $file) {
    if (!file_exists($file)) continue;
    $content = file_get_contents($file);
    
    // Helper to replace paths
    // We want to replace "wp-content/" or "/wp-content/" with "/company-projects/spines.comm/wp-content/"
    // But we must avoid replacing if it already starts with the base path.
    
    $patterns = [
        'wp-content/',
        'wp-admin/',
        'wp-json/',
        'feed/'
    ];
    
    foreach ($patterns as $p) {
        // Regex to match prefix that is NOT the base_path
        // We match quotes, parens, or space, then optional slash, then the pattern
        // And we exclude if it is preceded by base_path (complex in regex, easier to just replace all and then fix duplicates?)
        // Let's use a simpler approach: replace all instances, then fix double base_paths.
        
        // 1. Replace /wp-content/ with BASE/wp-content/
        $content = str_replace('/' . $p, $base_path . '/' . $p, $content);
        
        // 2. Replace "wp-content/ (without slash) with BASE/wp-content/
        // But avoiding those we just replaced (which now start with BASE/)
        // Actually, if I replaced /wp-content/, I have BASE/wp-content/.
        // If I have wp-content/ (no slash), it might be inside url(wp-content/...)
        // I should be careful not to replace BASE/wp-content/ again.
        
        // Let's use regex for "wp-content/" preceded by " ' ( or space, and NOT /
        $pattern_regex = '#([\"\'\(\s])' . preg_quote($p, '#') . '#';
        $content = preg_replace($pattern_regex, '$1' . $base_path . '/' . $p, $content);
    }
    
    // Now fix any double occurrences of base_path if we messed up
    // e.g. /company-projects/spines.comm//company-projects/spines.comm/wp-content/
    $double_base = $base_path . $base_path;
    $content = str_replace($double_base, $base_path, $content);
    
    // Fix double slashes
    $content = str_replace($base_path . '//', $base_path . '/', $content);
    
    file_put_contents($file, $content);
    echo "Fixed $file\n";
}
?>
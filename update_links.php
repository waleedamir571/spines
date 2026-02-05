<?php
$files = ['partials/header.php', 'partials/footer.php'];
foreach ($files as $file) {
    if (!file_exists($file)) {
        continue;
    }
    $content = file_get_contents($file);
    
    // Assets (already done mostly, but good to ensure)
    $content = str_replace('https://spines.com/wp-content/', '/wp-content/', $content);
    $content = str_replace('https://cdn.spines.com/wp-content/', '/wp-content/', $content);
    
    // Admin and JSON API
    $content = str_replace('https://spines.com/wp-admin/', '/wp-admin/', $content);
    $content = str_replace('https://spines.com/wp-json/', '/wp-json/', $content);
    
    // Feeds and misc
    $content = str_replace('https://spines.com/feed/', '/feed/', $content);
    $content = str_replace('https://spines.com/comments/feed/', '/comments/feed/', $content);
    
    // Root URL in tags
    $content = str_replace('content="https://spines.com/"', 'content="/"', $content);
    $content = str_replace('href="https://spines.com/"', 'href="/"', $content);
    $content = str_replace("href='https://spines.com/'", "href='/'", $content);
    
    // JSON encoded or JS strings for root
    // Be careful not to break "https://spines.com/something" if it wasn't caught above
    // But we replaced wp-content, wp-admin, wp-json.
    // So "https://spines.com/" might be left.
    $content = str_replace('"https://spines.com/"', '"/"', $content);
    
    // Remove "https://spines.com" (no slash) if it's exact match?
    // In footer we used window.location.origin.
    
    file_put_contents($file, $content);
    echo "Updated $file\n";
}
?>
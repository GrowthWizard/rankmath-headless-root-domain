<?php
/**
 * Allow changing of the canonical URL in the RankMath Plugin
 * @param string $canonical The canonical URL.
 * Check Documentation for rank-math.php in https://rankmath.com/kb/filters-hooks-api-developer/
 * Check the GitHub Repo for more information: https://github.com/GrowthWizard/rankmath-headless-root-domain 
 */

add_filter( 'rank_math/frontend/canonical', function( $canonical ) {
    $current_domain = $_SERVER['SERVER_NAME'];
    $frontend_domain = 'www.example.com'
    $canonical = str_replace($current_domain, $frontend_domain, $canonical);
    return $canonical;
});
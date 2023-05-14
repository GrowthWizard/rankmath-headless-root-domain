# Description

A little code snippet to replace the domain of a headless-wordpress-backend (subdomain.example.de/subpage) in RankMath to the root domain, while keeping the uri (example.de/subpage).

# How-to-Use 

1. Upload the rank-math.php to your /wp-content/themes directory. For more information about rank-math.php, check the documentation: https://rankmath.com/kb/filters-hooks-api-developer/
2. Replace the String inside of the variable $frontend_domain in rank-math.php to the root domain of your frontend. 
3. Check the head of your website. All Canonicals (including on subpages) should now point to the frontend of your headless-website.




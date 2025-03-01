<?php
// Get the requested URL path
$requestUri = $_SERVER['REQUEST_URI'];
$request = trim(parse_url($requestUri, PHP_URL_PATH), '/');

// Debugging: Print the requested URL
echo "Requested URL: " . $request . "<br>";

$viewDir = __DIR__ . '/NewChanges/views/';

// Debugging: Print the resolved file path
echo "Resolved File Path: " . $viewDir . $request . ".php<br>";

// Define a mapping of URLs to PHP files
$routes = [
    '' => 'home.php',
    'home' => 'home.php',
    'contact' => 'contact.php',
    'about' => 'about.php',
    'shared-hosting' => 'shared-hosting.php',
    'affiliate' => 'affiliate.php',
    'black-friday' => 'black-friday.php',
    'blog' => 'blog.php',
    'blog-details' => 'blog-details.php',
    'blog-grid-2' => 'blog-grid-2.php',
    'blog-list' => 'blog-list.php',
    'business-email' => 'business-email.php',
    'business-mail' => 'business-mail.php',
    'cloud-hosting' => 'cloud-hosting.php',
    'data-center' => 'data-center.php',
    'dedicated-hosting' => 'dedicated-hosting.php',
    'domain-checker' => 'domain-checker.php',
    'domain-registration' => 'domain-registration.php',
    'domain-transfer' => 'domain-transfer.php',
    'faq' => 'faq.php',
    'hosting-offer-one' => 'hosting-offer-one.php',
    'knowledgebase' => 'knowledgebase.php',
    'mailer' => 'mailer.php',
    'maintenance' => 'maintenance.php',
    'partner' => 'partner.php',
    'payment-method' => 'payment-method.php',
    'pricing' => 'pricing.php',
    'reseller-hosting' => 'reseller-hosting.php',
    'ssl-certificate' => 'ssl-certificate.php',
    'support' => 'support.php',
    'technology' => 'technology.php',
    'vps-hosting' => 'vps-hosting.php',
    'whois' => 'whois.php',
    'wordpress-hosting' => 'wordpress-hosting.php',
];

// Check if the requested route exists
if (array_key_exists($request, $routes)) {
    $filePath = $viewDir . $routes[$request];
    if (file_exists($filePath)) {
        require $filePath;
    } else {
        // Debugging: Print an error if the file doesn't exist
        echo "File not found: " . $filePath . "<br>";
        http_response_code(404);
        require $viewDir . '404.php';
    }
} else {
    // Debugging: Print an error if the route doesn't exist
    echo "Route not found: " . $request . "<br>";
    http_response_code(404);
    require $viewDir . '404.php';
}

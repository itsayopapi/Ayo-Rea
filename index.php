<?php
$request = trim($_GET['url'] ?? '', '/'); // Get the clean URL
$viewDir = __DIR__ . '/NewChanges/views/';



switch ($request) {
    case '':
    case '/':
    case '/home':
        require  $viewDir . 'home.php';
        break;

    case '/contact':
        require  $viewDir . 'contact.php';
        break;

    case '/about':
        require  $viewDir . 'about.php';
        break;

    case '/affiliate':
        require $viewDir . 'affiliate.php';
        break;

    case '/black-friday':
        require  $viewDir . 'black-friday.php';
        break;

    case '/blog':
        require  $viewDir . ' blog.php';
        break;

    case '/blog-details':
        require  $viewDir . 'blog-details.php';
        break;

    case '/blog-grid-2':
        require  $viewDir . 'blog-grid-2.php';
        break;

    case '/blog-list':
        require $viewDir . 'blog-list.php';
        break;

    case '/business-email':
        require  $viewDir . 'business-email.php';
        break;

    case '/business-mail':
        require  $viewDir . 'business-mail.php';
        break;

    case '/cloud-hosting':
        require $viewDir . 'cloud-hosting.php';
        break;

    case '/contact':
        require  $viewDir . 'contact.php';
        break;

    case '/data-center':
        require  $viewDir . 'data-center.php';
        break;

    case '/dedicated-hosting':
        require  $viewDir . 'dedicated-hosting.php';
        break;

    case '/domain-checker':
        require  $viewDir . 'domain-checker.php';
        break;

    case '/domain-registration':
        require  $viewDir . 'domain-registration.php';
        break;

    case '/domain-transfer':
        require $viewDir . 'domain-transfer.php';
        break;

    case '/faq':
        require $viewDir . 'faq.php';
        break;

    case '/hosting-offer-one':
        require  $viewDir . 'hosting-offer-one.php';
        break;

    case '/knowledgebase':
        require  $viewDir . 'knowledgebase.php';
        break;

    case '/mailer':
        require  $viewDir . 'mailer.php';
        break;

    case '/maintenance':
        require  $viewDir . 'maintenance.php';
        break;

    case '/partner':
        require $viewDir . 'partner.php';
        break;

    case '/payment-method':
        require $viewDir . 'payment-method.php';
        break;

    case '/pricing':
        require  $viewDir . 'pricing.php';
        break;

    case '/reseller-hosting':
        require  $viewDir . 'reseller-hosting.php';
        break;

    case '/shared-hosting':
        require  $viewDir . 'shared-hosting.php';
        break;

    case '/sl-certificate':
        require  $viewDir . 'ssl-certificate.php';
        break;

    case '/support':
        require  $viewDir . 'support.php';
        break;

    case '/technology':
        require  $viewDir . 'technology.php';
        break;

    case '/vps-hosting':
        require   $viewDir . '.php';
        break;

    case '/whois':
        require  $viewDir . 'whois.php';
        break;

    case '/wordpress-hosting':
        require $viewDir . 'wordpress-hosting.php';
        break;

    default:
        http_response_code(404);
        require  $viewDir . '404.php';
}
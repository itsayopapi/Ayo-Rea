<?php

$request = $_SERVER['REQUEST_URI'];
$viewDir = '/NewChanges/views/';


switch ($request) {
    case '':
    case '/':
    case '/home':
        require __DIR__ . $viewDir . 'home.php';
        break;

    case '/contact':
        require __DIR__ . $viewDir . 'contact.php';
        break;

    case '/about':
        require __DIR__ . $viewDir . 'about.php';
        break;

    case '/affiliate':
        require __DIR__ . $viewDir . 'affiliate.php';
        break;

    case '/black-friday':
        require __DIR__ . $viewDir . 'black-friday.php';
        break;

    case '/blog':
        require __DIR__ . $viewDir . ' blog.php';
        break;

    case '/blog-details':
        require __DIR__ . $viewDir . 'blog-details.php';
        break;

    case '/blog-grid-2':
        require __DIR__ . $viewDir . 'blog-grid-2.php';
        break;

    case '/blog-list':
        require __DIR__ . $viewDir . 'blog-list.php';
        break;

    case '/business-email':
        require __DIR__ . $viewDir . 'business-email.php';
        break;

    case '/business-mail':
        require __DIR__ . $viewDir . 'business-mail.php';
        break;

    case '/cloud-hosting':
        require __DIR__ . $viewDir . 'cloud-hosting.php';
        break;

    case '/contact':
        require __DIR__ . $viewDir . 'contact.php';
        break;

    case '/data-center':
        require __DIR__ . $viewDir . 'data-center.php';
        break;

    case '/dedicated-hosting':
        require __DIR__ . $viewDir . 'dedicated-hosting.php';
        break;

    case '/domain-checker':
        require __DIR__ . $viewDir . 'domain-checker.php';
        break;

    case '/domain-registration':
        require __DIR__ . $viewDir . 'domain-registration.php';
        break;

    case '/domain-transfer':
        require __DIR__ . $viewDir . 'domain-transfer.php';
        break;

    case '/faq':
        require __DIR__ . $viewDir . 'faq.php';
        break;

    case '/hosting-offer-one':
        require __DIR__ . $viewDir . 'hosting-offer-one.php';
        break;

    case '/knowledgebase':
        require __DIR__ . $viewDir . 'knowledgebase.php';
        break;

    case '/mailer':
        require __DIR__ . $viewDir . 'mailer.php';
        break;

    case '/maintenance':
        require __DIR__ . $viewDir . 'maintenance.php';
        break;

    case '/partner':
        require __DIR__ . $viewDir . 'partner.php';
        break;

    case '/payment-method':
        require __DIR__ . $viewDir . 'payment-method.php';
        break;

    case '/pricing':
        require __DIR__ . $viewDir . 'pricing.php';
        break;

    case '/reseller-hosting':
        require __DIR__ . $viewDir . 'reseller-hosting.php';
        break;

    case '/shared-hosting':
        require __DIR__ . $viewDir . 'shared-hosting.php';
        break;

    case '/sl-certificate':
        require __DIR__ . $viewDir . 'ssl-certificate.php';
        break;

    case '/support':
        require __DIR__ . $viewDir . 'support.php';
        break;

    case '/technology':
        require __DIR__ . $viewDir . 'technology.php';
        break;

    case '/vps-hosting':
        require __DIR__ . $viewDir . '.php';
        break;

    case '/whois':
        require __DIR__ . $viewDir . 'whois.php';
        break;

    case '/wordpress-hosting':
        require __DIR__ . $viewDir . 'wordpress-hosting.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}

<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/home.php';
        break;
    case '' :
        require __DIR__ . '/home.php';
        break;
    case '/about/ssic' :
        require __DIR__ . '/about-us.php';
        break;
    case '/about/jaipur' :
        require __DIR__ . '/about-jaipur.php';
        break;
    case '/about/ssic2017' :
        require __DIR__ . '/ssic.php';
        break;
    case '/about/ssic2019' :
        require __DIR__ . '/ssic2019.php';
        break;  
    case '/callfor/papers' :
        require __DIR__ . '/papers.php';
        break;
    case '/callfor/workshop_and_tutorial' :
        require __DIR__ . '/workshopandtutorial.php';
        break;
    case '/callfor/special_session' :
        require __DIR__ . '/special_session.php';
        break;
    case '/callfor/host' :
        require __DIR__ . '/host.php';
        break;
    case '/committees/advisory' :
        require __DIR__ . '/advisory.php';
        break;
    case '/committees/organizers' :
        require __DIR__ . '/organizers.php';
        break;
    case '/committees/technical_program' :
        require __DIR__ . '/tpc.php';
        break;
    case '/info/e_visa' :
        require __DIR__ . '/evisa.php';
        break;
    case '/info/guidelines' :
        require __DIR__ . '/guidelines.php';
        break;
    case '/info/dates' :
        require __DIR__ . '/importantdates.php';
        break;
    case '/info/banking' :
        require __DIR__ . '/coming-soon.php';
        break;
    case '/info/travel_and_accomodation' :
        require __DIR__ . '/coming-soon.php';
        break;
    case '/info/registration' :
        require __DIR__ . '/coming-soon.php';
        break;
    case '/info/schedule' :
        require __DIR__ . '/coming-soon.php';
        break;
    case '/speakers' :
        require __DIR__ . '/speakers.php';
        break;  
    default:
        http_response_code(404);
        require __DIR__ . '/error-page.php';
        break;
}
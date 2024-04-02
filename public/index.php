<?php

if(isset($_GET['section'])){
    switch($_GET['section']){
        case 'homepage':
            include ('../templates/homepage.php');
            break;
        case 'programme':
            include ('../templates/programme.php');
            break;
        case 'studio-bronks':
            include ('../templates/studioBronks.php');
            break;
        case 'ecoles':
            include ('../templates/ecoles.php');
            break;
        case 'open-huis':
            include ('../templates/openHuis.php');
            break;
        case 'propos':
            include ('../templates/propos.php');
            break;
        case 'visite':
            include ('../templates/visite.php');
            break;
        default:
            $title = "Erreur 404";
            include('../templates/page-404.php');
    }
}else {
    include('../templates/homepage.php');
}
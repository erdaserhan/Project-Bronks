<?php

if(isset($_GET['section'])){
    switch($_GET['section']){
        case 'homepage':
            $title = "Homepage";
            include ('../templates/homepage.php');
            break;
        case 'programme':
            $title = "Programme";
            include ('../templates/programme.php');
            break;
        case 'studio-bronks':
            $title = "Studio Bronks";
            include ('../templates/studioBronks.php');
            break;
        case 'ecoles':
            $title = "Ecoles";
            include ('../templates/ecoles.php');
            break;
        case 'open-huis':
            $title = "Open Huis";
            include ('../templates/openHuis.php');
            break;
        case 'propos':
            $title = "Propos De Bronks";
            include ('../templates/propos.php');
            break;
        case 'visite':
            $title = "Votre Visite";
            include ('../templates/visite.php');
            break;
        case 'masque':
            $title = "Masque";
            include ('../templates/masque.php');
            break;
        case 'come-On-Feet':
            $title = "Come On Feet";
            include ('../templates/comeOnFeet.php');
            break;
        case 'inscription':
            $title = "Inscription";
            include ('../templates/inscription.php');
            break;
        default:
            $title = "Error 404";
            include('../templates/page-404.php');
    }
}else {
    include('../templates/homepage.php');
}
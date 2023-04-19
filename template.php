<?php
if (!isset($page)) {
    $page = "home";
};
include 'header.php';
switch ($page) {
    case 'home':
        include 'content/accueil.php';
        break;
    case 'amour':
        include 'content/amour.php';
        break;
    case 'anniversaire':
        include 'content/anniversaire.php';
        break;
    case 'mariage':
        include 'content/mariage.php';
        break;
    case 'naissances':
        include 'content/naissances.php';
        break;
    case 'remerciement':
        include 'content/remerciement.php';
        break;
    default:
        include 'content/404.html';
        die;
}
include 'footer.php';

<?php
require('models/Type.php');

function indexAction() {
    $typeObject = new Type();
    $types = $typeObject->getTypes();

    $pageTitle = 'Liste des chambres';
    require('views/chambre/index.php');
}

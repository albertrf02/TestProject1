<?php
function ctrlDades($request, $response, $container)
{

    $usersModel = $container->Users();
    $inscriptionsData = $usersModel->getInscripcionsData();

    $response->setTemplate("dades.php");
    return $response;

}


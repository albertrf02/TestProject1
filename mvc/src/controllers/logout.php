<?php
function ctrlLogout($request, $response, $container)
{
    $response->setTemplate("index.php");
    unset($_SESSION['identified']);
    return $response;
}


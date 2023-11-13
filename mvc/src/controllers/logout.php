<?php
function ctrlLogout($request, $response, $container)
{
    $response->setTemplate("index.php");
    session_destroy();
    return $response;
}


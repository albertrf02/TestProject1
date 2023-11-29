<?php

function ctrlDisplayInfo($request, $response, $container)
{
    $response->setTemplate("infoPage.php");

    // Assuming you have a method to retrieve user information by ID in your UploadUser model
    $RegisterModel = $container->UploadUser();

    // Get user ID from the URL parameter
    $userId = $_GET['id']; // Make sure to validate and sanitize user input

    // Retrieve user information
    $userInfo = $RegisterModel->getById($userId);

    // Pass user information to the template
    $response->setData('userInfo', $userInfo);

    return $response;
}

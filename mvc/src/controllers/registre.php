<?php

function ctrlRegistre($request, $response, $container)
{
    $response->setTemplate("registre.php");

    $RegisterModel = $container->UploadUser();

    if ((isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['birthdate']) && isset($_POST['address']) && isset($_POST['number']) && isset($_POST['city']) && isset($_POST['postalcode']))) {

        // Extract form data
        $nom = $_POST['name'];
        $cognoms = $_POST['surname'];
        $dataNaixement = $_POST['birthdate'];
        $carrer = $_POST['address'];
        $numero = $_POST['number'];
        $ciutat = $_POST['city'];
        $codiPostal = $_POST['postalcode'];

        // Proceed with registration
        $result = $RegisterModel->insertInscripcions($nom, $cognoms, $dataNaixement, $carrer, $numero, $ciutat, $codiPostal);


        if ($result) {
            // Registration successful
            echo "successful!";
        } else {
            // Registration failed
            echo "failed.";
        }
        return $response;
    }
}


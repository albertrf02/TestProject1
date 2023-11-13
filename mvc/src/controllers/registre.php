<?php

function ctrlRegistre($request, $response, $container)
{
    $response->setTemplate("registre.php");

    $RegisterModel = $container->UploadUser();

    if ((isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['birthdate']) && isset($_POST['address']) && isset($_POST['number']) && isset($_POST['city']) && isset($_POST['postalcode']) && isset($_POST['paymentReceipt']))) {

        // Extract form data
        $nom = $_POST['name'];
        $cognoms = $_POST['surname'];
        $dataNaixement = $_POST['birthdate'];
        $carrer = $_POST['address'];
        $numero = $_POST['number'];
        $ciutat = $_POST['city'];
        $codiPostal = $_POST['postalcode'];
        $resguardPath = "resguard/" . basename($_FILES["paymentReceipt"]["name"]);

        // Upload the resguard file to the specified folder
        $target_dir = "resguard/";
        $target_file = $target_dir . basename($_FILES["paymentReceipt"]["name"]);

        move_uploaded_file($_FILES["paymentReceipt"]["tmp_name"], $target_file);

        // Proceed with registration
        $result = $RegisterModel->insertInscripcion($nom, $cognoms, $dataNaixement, $carrer, $numero, $ciutat, $codiPostal, $resguardPath);


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


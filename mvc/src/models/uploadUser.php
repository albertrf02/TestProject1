<?php

namespace Daw;

class UploadUser
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function insertInscripcions($nom, $cognoms, $dataNaixement, $carrer, $numero, $ciutat, $codiPostal)
    {

        //TO DO

        // Check if a file was uploaded
        if (isset($_FILES['resguard']) && $_FILES['resguard']['error'] === 0) {
            $resguardPath = 'resguard/' . $_FILES['resguard']['name'];

            // Move the uploaded image to a designated folder
            if (move_uploaded_file($_FILES['resguard']['tmp_name'], $resguardPath)) {
                // Image uploaded successfully, proceed to insert apartment data
                $sql = "INSERT INTO Inscripcions (Nom, Cognoms, DataNaixement, Carrer, Numero, Ciutat, CodiPostal)
                        VALUES (:nom, :cognoms, :dataNaixement, :carrer, :numero, :ciutat, :codiPostal)";
                $stmt = $this->pdo->prepare($sql);

                // Bind the user input to the prepared statement
                $stmt->bindParam(':nom', $nom);
                $stmt->bindParam(':cognoms', $cognoms);
                $stmt->bindParam(':dataNaixement', $dataNaixement);
                $stmt->bindParam(':carrer', $carrer);
                $stmt->bindParam(':numero', $numero);
                $stmt->bindParam(':ciutat', $ciutat);
                $stmt->bindParam(':codiPostal', $codiPostal);

                // Execute the INSERT statement for apartment data
                if ($stmt->execute()) {
                    // Insert the image link into a separate table
                    $resguardsql = "INSERT INTO Resguard (path, idInscripcions) VALUES (:path, :idInscripcions)";
                    $resguardStmt = $this->pdo->prepare($resguardsql);
                    $resguardStmt->bindParam(':path', $_FILES['resguard']['name']);
                    $resguardStmt->bindParam(':idInscripcions', $this->pdo->lastInsertId()); // Get the ID of the last inserted apartment
                    $resguardStmt->execute();
                    return true;
                }
                // ...
            } else {
                echo 'File upload failed. Debugging information: ';
                print_r($_FILES);
            }



        }
    }
}

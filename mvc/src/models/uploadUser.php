<?php

namespace Daw;

class UploadUser
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function insertInscripcion($nom, $cognoms, $dataNaixement, $carrer, $numero, $ciutat, $codiPostal, $resguardPath)
    {
        $sql = "INSERT INTO inscripcions (Nom, Cognoms, DataNaixement, Carrer, Numero, Ciutat, CodiPostal, ResguardPath) 
                        VALUES (:name, :surname, :birthdate, :address, :number, :city, :postalcode, :paymentReceipt)";
        $stmt = $this->pdo->prepare($sql);

        // Bind the user input to the prepared statement
        $stmt->bindParam(':name', $nom);
        $stmt->bindParam(':surname', $cognoms);
        $stmt->bindParam(':birthdate', $dataNaixement);
        $stmt->bindParam(':address', $carrer);
        $stmt->bindParam(':number', $numero);
        $stmt->bindParam(':city', $ciutat);
        $stmt->bindParam(':postalcode', $codiPostal);
        $stmt->bindParam(':paymentReceipt', $resguardPath);

        // Execute the INSERT statement for inscripcions data
        $stmt->execute();
    }
}
return false;


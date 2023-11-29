<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Listing</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="../../JS/validarDades.js"></script>
</head>

<body>

    <?php
    // Check if the user is identified
    ?>
    <h2>Inscription Listing</h2>
    <table id="inscriptionTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Cognoms</th>
                <th>Data de Naixement</th>
                <th>Carrer</th>
                <th>Numero</th>
                <th>Ciutat</th>
                <th>Codi Postal</th>
                <th>Resguard Path</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inscriptionsData as $inscription): ?>
                <tr>
                    <td>
                        <?= $inscription['Id'] ?>
                    </td>
                    <td>
                        <?= $inscription['Nom'] ?>
                    </td>
                    <td>
                        <?= $inscription['Cognoms'] ?>
                    </td>
                    <td>
                        <?= $inscription['DataNaixement'] ?>
                    </td>
                    <td>
                        <?= $inscription['Carrer'] ?>
                    </td>
                    <td>
                        <?= $inscription['Numero'] ?>
                    </td>
                    <td>
                        <?= $inscription['Ciutat'] ?>
                    </td>
                    <td>
                        <?= $inscription['CodiPostal'] ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script>
        $(document).ready(function () {
            $('#inscriptionTable').DataTable({
                // DataTables configuration options
            });
        });
    </script>

    <?php
    // Form is visible if the user is not identified
    ?>
    <form id="accessCodeForm" method="POST">
        <label for="accessCode">Enter Access Code:</label>
        <input type="password" id="accessCode" name="accessCode" required>
        <button type="submit">Submit</button>
    </form>
    <?php
    ?>


</body>

</html>
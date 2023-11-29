<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>User Information</h1>

    <?php if ($userInfo): ?>
        <p>Name:
            <?php echo $userInfo['Nom']; ?>
        </p>
        <p>Surname:
            <?php echo $userInfo['Cognoms']; ?>
        </p>
        <p>Birthdate:
            <?php echo $userInfo['DataNaixement']; ?>
        </p>
        <!-- Add other fields as needed -->
    <?php endif; ?>
</body>

</html>
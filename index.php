<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "szkola2";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Błąd połączenia: " . mysqli_connect_error());
    }
    ?>

    
</body>
</html>
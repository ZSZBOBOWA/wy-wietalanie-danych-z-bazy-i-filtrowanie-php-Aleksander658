<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <form method="POST" action="index.php">
        Wpisz nazwisko: <input type="text" name="nazwisko">
        <input type="submit" value="Filtruj">
    </form>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "szkola2";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Błąd połączenia: " . mysqli_connect_error());
        }

        if(isset($_POST["nazwisko"])&&$_POST["nazwisko"]!="") 
        {
            $nazwisko = $_POST["nazwisko"];

            $nazwisko = mysqli_real_escape_string($conn, $nazwisko);

            $sql = "SELECT * FROM uczniowie WHERE Nazwisko='$nazwisko'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<table border='1'><tr><th>Imię</th><th>Nazwisko</th><th>Wiek</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["Imie"] . "</td><td>" . $row["Nazwisko"] . "</td><td>" . $row["Wiek"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "Brak wyników";
            }
        } 
            else {
                echo "Brak nazwiska";
            }

        mysqli_close($conn);
    ?>
</body>
</html>
<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'Komis';

function script1($server, $user, $password, $db)
{

    $conn = mysqli_connect($server, $user, $password, $db);

    $sql = 'SELECT id, marka, model FROM samochody;';
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row['id'];
        echo ' ';
        echo $row['marka'];
        echo ' ';
        echo $row['model'];
        echo '</li>';
    }
    mysqli_close($conn);
}
function script2($server, $user, $password, $db)
{

    $conn = mysqli_connect($server, $user, $password, $db);

    $sql = 'SELECT samochody_id, klient FROM zamowienia;';
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row['samochody_id'];
        echo ' ';
        echo $row['klient'];
        echo '</li>';
    }
    mysqli_close($conn);
}
function script3($server, $user, $password, $db)
{

    $conn = mysqli_connect($server, $user, $password, $db);

    $sql = 'SELECT * FROM samochody WHERE marka = "fiat";';
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['id'];
        echo ' / ';
        echo $row['marka'];
        echo ' / ';
        echo $row['model'];
        echo ' / ';
        echo $row['rocznik'];
        echo ' / ';
        echo $row['kolor'];
        echo ' / ';
        echo $row['stan'];
        echo '<br>';
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="auto.css">
    <title>Komis Samochodowy</title>
    <header>
        <h1>SAMOCHODY</h1>
    </header>
    <main>
        <section id="left">
            <h2>Wykaz samochodów</h2>
            <ul>
                <?php
                script1($server, $user, $password, $db);
                ?>
            </ul>
            <br>
            <h2>Zamówienia</h2>
            <ul>
                <?php
                script2($server, $user, $password, $db);
                ?>
            </ul>
        </section>
        <section id="right">
            <br>
            <h2>Pełne dane: Fiat</h2>
            <br>
            <?php
            script3($server, $user, $password, $db);
            ?>
        </section>
    </main>
    <footer>
        <table>
            <tr>
                <td><a href="kwerendy.txt">Kwerendy</a></td>
                <td>Autor: 00000000000</td>
                <td><img src="auto.png" alt="komis samochodowy"></td>
            </tr>
        </table>
    </footer>
</head>

<body>

</body>

</html>
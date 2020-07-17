<?php

$id = 0;
$firstname = '';
$lastname = '';
$email = '';
$wunschnote = 0.0;
$benötigtenote = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require './db_connect.php';

    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $wunschnote = isset($_POST['wunschnote']) ? $_POST['wunschnote'] : '';
    $benötigtenote = isset($_POST['benötigtenote']) ? $_POST['benötigtenote'] : '';

    if ($firstname && $lastname && $email && $wunschnote && $benötigtenote) {
        echo 'data is valid';
    } else {
        echo "ERROR WITH DATA";
    }

    var_dump($_POST);


    $sql = "INSERT INTO objekt
                (firstname, lastname, email, wunschnote, benötigtenote)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    if (false === $stmt) {
        echo mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param(
            $stmt,
            "sssdd",
            $firstname,
            $lastname,
            $email,
            $wunschnote,
            $benötigtenote
        );
        if (mysqli_stmt_execute($stmt)) {
            $id = mysqli_insert_id($conn);
            echo "Inserted record with id: $id";
            if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
                $protocol = 'https';
            } else {
                $protocol = 'http';
            }
            header("LOCATION: $protocol://" . $_SERVER['HTTP_HOST'] . "/www/");
            exit;
        } else {
            echo mysqli_stmt_error($stmt);
        }
        $conn->close();
    }
}

?>
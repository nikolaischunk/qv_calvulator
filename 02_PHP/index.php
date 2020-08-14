<?php

$id = 2;
$wunschnote = '';
$benötigtenote = 4;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require './db_connect.php';

// ======================================
    $wunschnote = isset($_POST['wunschnote']) ? $_POST['wunschnote'] : '';


    if ($wunschnote) {
        echo 'data is valid';
    } else {
        echo "ERROR WITH DATA";
    }

    //========================================
    var_dump($_POST);

    $sql = "UPDATE student SET wunschnote = ? WHERE student.student_id = '1'";
    $stmt = mysqli_prepare($conn, $sql);
    if (false === $stmt) {
        echo mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param(
            $stmt,
            "d",
            $wunschnote
        );
        if (mysqli_stmt_execute($stmt)) {
            $id = mysqli_insert_id($conn);
            echo "Inserted record with id: $id";
            if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
                $protocol = 'https';
            } else {
                $protocol = 'http';
            }
            header("LOCATION: $protocol://" . $_SERVER['HTTP_HOST'] . "/www/qv_calvulator/02_PHP/form.php");
            exit;
        } else {
            echo mysqli_stmt_error($stmt);
        }
        $conn->close();
    }

}
?>

<?php require './header.php'; ?>


<div class="d-flex justify-content-center align-items-center login-container">
    <form method="post" class="login-form text-center">
        <h1 class="mb-5 font-weight-light text-uppercase noselect">Wunschnote</h1>
        <div>
            <input placeholder="Wunschnote" type="number" id="wunschnote" name="wunschnote" required="required" min="1"
                   max="6" step="0.1" value="4.0"
                   value="<?= htmlspecialchars($wunschnote) ?>" class="form-control rounded-pill form-control-lg">
        </div>
        <button type="submit" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase">Absenden</button>

    </form>
</div>


</form>


<?php require './footer.php'; ?>

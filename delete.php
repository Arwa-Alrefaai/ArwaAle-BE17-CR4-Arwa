<?php
require_once "components/db_connect.php";
if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `the-library` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $type = $data['type'];
        $picture = $data['picture'];
    } else {
        header("location: error.php");
    }
} else {
    header("location: error.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <?php require_once "components/boot.php"; ?>
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 70%;
        }

        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend class='h2 mb-3'>Delete request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $name ?>"></legend>
        <h5>You have selected the data below:</h5>
        <table class="table w-75 mt-3">
            <tr>
                <td><?= $title ?></td>
            </tr>
        </table>

        <h3 class="mb-4">Do you really want to delete this product?</h3>
        <form action="action/a_delete.php" method="post">
            <input type="hidden" name="id" value="<?= $id ?>" />
            <input type="hidden" name="picture" value="<?= $picture ?>" />
            <button class="btn btn-danger" type="submit">Yes, delete it!</button>
            <a href="index-product.php"><button class="btn btn-warning" type="button">No, go back!</button></a>
        </form>
    </fieldset>

</body>

</html>
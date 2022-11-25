<?php
require_once "components/db_connect.php" ;
require_once "components/file_upload.php" ;

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `the-library` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $type = $data['type'];
        $picture = $data['picture'];
        $isbncode = $data['Isbncode'];
        $description = $data['description'];
        $autherfirstname = $data['author_ first_name'];
        $autherlastname = $data['author_last_name'];
        $status = $data['status'];
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
    <title>Editing</title>
    <?php require_once "components/boot.php"; ?>
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }

        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
        }
    </style>

</head>

<body>
    <fieldset>
        <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='./pictures/<?= $picture ?>' alt=""></legend>
        <form action="action/a_update.php" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <th> Name :</th>
                    <td><input class="form-control" type="text" name="title" placeholder="Book Name" value="<?= $title ?>" /></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td><input class="form-control" type="text" name="type"  placeholder="type" value="<?= $type ?>" /></td>
                </tr>
                <tr>
                    <th>Picture</th>
                    <td><input class="form-control" type="file" name="picture" /></td>
                </tr>
                <tr>
                    <th>ISBN Code</th>
                    <td><input class="form-control" type="text" name="isbncode" value="<?= $isbncode ?>" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class="form-control" type="text" name="description" value="<?= $description ?>" /></td>
                </tr>
                <tr>
                    <th>Authe First Nama</th>
                    <td><input class="form-control" type="text" name="autherfirstname" value="<?= $autherfirstname ?>" /></td>
                </tr>
                <tr>
                    <th>Authe Last Nama</th>
                    <td><input class="form-control" type="text" name="autherlastname" value="<?= $autherlastname ?>" /></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><input class="form-control" type="text" name="status" value="<?= $status ?>" /></td>
                </tr>
                <tr>
                    <input type="hidden" name="id" value="<?= $id ?>" />

                    <input type="hidden" name="picture" value="<?= $picture ?>" />
                    <td><button class="btn btn-success" type="submit">Save Changes</button></td>
                    <td><a href="index-product.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>
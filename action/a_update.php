<?php
require_once "../components/db_connect.php";
require_once "../components/file_upload.php";
if ($_POST) {
    $title = $_POST['title'];
    $type = $_POST['type'];
    $id = $_POST['id'];
    $isbncode = $_POST['isbncode'];
    $description = $_POST['description'];
    $picture = file_upload($_FILES['picture']);
    $uploadError = '';
    if ($picture->error === 0) {
        ($_POST['picture'] == "default.jpg" ?: unlink("../pictures/$_POST[picture]"));
        $sql = "UPDATE `the-library`  SET title='$title', type='$type', picture='$picture->fileName' WHERE id = $id";
    } else {
        $sql = "UPDATE `the-library` SET title='$title', type='$type' WHERE id = $id";
    }
    if (mysqli_query($conn, $sql)) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    }
} else {
    header("location: ../error.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "../components/boot.php"; ?>
    <title>Edit Book</title>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Update request response</h1>
        </div>
        <div class="alert alert-<?php echo $class; ?>" role="alert">
            <p><?php echo $message; ?></p>
            <p><?php echo $uploadError; ?></p>
            <a href='../update.php?id=<?= $id ?>'><button class="btn btn-warning" type='button'>Back</button></a>
            <a href='../index-product.php'><button class="btn btn-success" type='button'>Home</button></a>
        </div>
    </div>

</body>

</html>
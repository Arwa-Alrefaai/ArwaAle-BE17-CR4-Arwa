<?php
require_once "../components/db_connect.php";
require_once "../components/file_upload.php";

if ($_POST) {
    $title = $_POST['title'];
    $type = $_POST['type'];
    $isbncode = $_POST['isbncode'];
    $description = $_POST['description'];
    $authefirstname = $_POST['authefirstname']; //authorFirstName or author_first_name
    $authelastname = $_POST['authelastname'];
    $publishername = $_POST['publishername'];
    $publisheraddress = $_POST['publisheraddress'];
    $publisherdate = $_POST['publisherdate'];
    $status = $_POST['status'];
    $picture = file_upload($_FILES['picture']);
    $uploadError = '';

    echo $title;
    // $sql = "INSERT into `the-library`(title , type ,Isbncode , description , author_ first_name , author_last_name,publisher_name , publisher_address , publish_date ,picture) VALUES ('$title','$type' ,'$isbncode' , '$description' , '$authefirstname' , '$authelastname' , '$publishername' , '$publisheraddress' , '$publisherdate' ,'$picture->fileName')" ;
    $sql = "INSERT INTO `the-library`(`title`, `picture`, `Isbncode`, `description`, `type`, `author_ first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES ('$title','$picture->fileName','$isbncode','$description','$type','$authefirstname','$authelastname','$publishername','$publisheraddress','$publisherdate','$status')";
    $result = mysqli_query($conn, $sql);
    var_dump($result);
    if ($result) {
        $class = "success";
        $message = "The entry below was successfully created <br>
    <table class='table w-50'><tr>
    <td> $title </td>
    <td> $type </td>
    <td> $isbncode </td>
   
    </tr></table><hr>";
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $conn->error;
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
    <title>Add book</title>
    <?php require_once "../components/boot.php"; ?>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Create request response</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p><?= $message; ?></p>
            <p><?= $uploadError; ?></p>
            <a href='../index-product.php'><button class="btn btn-primary" type='button'>Home</button></a>
        </div>
    </div>

</body>

</html>
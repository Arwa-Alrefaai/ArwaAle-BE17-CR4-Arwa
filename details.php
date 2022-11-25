<?php
require_once "components/db_connect.php";
if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `the-library` WHERE id = {$id}";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $type = $data['type'];
        $picture = $data['picture'];
        $isbncode = $data['Isbncode'];
        $publisher_name = $data['publisher_name'];
        $id = $data['id'];
        $description = $data['description'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        details
    </title>
    <link rel="stylesheet" type='text/css' href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Great+Vibes&display=swap" rel="stylesheet">
    <?php require_once "components/boot.php" ?>
    <style>
        .hero1 {
            width: 100%;
            height: 100px;
            background-color: #3d200a;
            color: #f2dbbf;
            text-align: center;
            padding: 15px;
            margin-bottom: 35px;
        }

        .hero {
            width: 100%;
            height: 400px;
        }
    </style>
</head>

<body>
    <img class="hero" src="pictures/library-banner.jpg">
    <header>
        <h1 class="text-center">

        </h1>
    </header>
    <main class="p-5">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="./pictures/<?= $picture; ?>" class="img-fluid rounded-start" style="height:21rem;width:100%;object-fit:cover;">
                </div>
                <div class="col-md-8">
                    <h4 class='card-header text-center' name="title"><?= $title; ?></h4>
                    <div class='card-body p-2'>
                        <p class='card-text' name="title"><b> Title : </b><?= $title; ?></p>
                        <p class='card-text'><b> Type : </b> <?= $type; ?> </p>
                        <p class='card-text'><b> ISBN Code : </b> <?= $isbncode; ?> </p>
                        <p class='card-text'><b> publisher_name : </b> <?= $publisher_name; ?></p>
                        <p class='card-text'><b> About This Book : </b> <?= $description; ?> </p>
                        <p class='card-text'></p>
                    </div>
                    <div class='card-footer text-center'>
                        <a class='btn btn-primary' href='index-product.php?id=$id'>Go Back</a>

                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer class=" p-5 bg-dark">
        <p class="h6 text-center text-white">Made by <a href="#">&#x24B8 Arwa Alrefaai</a></p>
    </footer>
</body>

</html>
<?php
require_once "components/db_connect.php";
$sql = "SELECT * FROM `the-library` WHERE `publisher_name` = 'J.K. Rowling' ";
$result = mysqli_query($conn, $sql);
$tbody = " ";

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    $title = $data['title'];
    $type = $data['type'];
    $picture = $data['picture'];
    $status = $data['status'];
    $publisher_name = $data['publisher_name'];
} else {
    header("location: error.php");
}


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $tbody .= "
        <div class='card mb-3'>
            <div class='row g-0'>
                <div class='col-md-4'>
                    <img src='pictures/" . $row['picture'] . "' class='img-fluid rounded-start' style='height:21rem;width:100%;object-fit:cover;' alt=''>
                </div>
                <div class='col-md-8'>
                    <h4 class='card-header text-center'>" . $row['title'] . "</h4>
                    <div class='card-body p-2'>
                        <p class='card-text' ><b> Name : </b>" . $row['title'] . "</p>
                        <p class='card-text'><b> Type : </b> " . $row['type'] . " </p>
                        <p class='card-text'><b> Piblisher Name : </b> " . $row['publisher_name'] .  " </p>
                        <p class='card-text'><b> Availabel : </b> " . $row['status'] . "</p>
                        <p class='card-text'><b> Description : </b> <a class='btn btn-success' href='details.php?id=" . $row['id'] . "'>Show Detalis</a></p>

                        <p class='card-text'></p>
                    </div>
                    <div class='card-footer text-center'>
                        <a class='btn btn-primary' href='update.php?id=" . $row['id'] . "'>Edit</a>
                        <a class='btn btn-danger' href='delete.php?id= " . $row['id'] . " '>Delete</a>
                    </div>
                </div>
            </div>
        </div>";
    }
}
// else {
//     $tbody = "<tr><td colspan='4'> There is No Data Avaliable </tr></td>";
// }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "components/boot.php" ?>
    <title>Rowling</title>
    <style>
        .hero {
            width: 100%;
            height: 400px;

        }

        .hero1 {
            width: 100%;
            height: 100px;
            background-color: #3d200a;
            color: #f2dbbf;
            text-align: center;
            padding: 15px;
            margin-bottom: 35px;
        }

        .h1 {
            padding: 100px;
        }

        .card-header {
            background-color: #f5eedb;
        }

        .label {
            text-align: center;
        }

        .heronav {
            width: 100%;
            height: 50px;
            background-color: #f5eedb;
            color: #3d200a;
            padding: 10px;
            margin-bottom: 30px;


        }

        .name {
            margin-left: 30px;
        }

        a {
            font-style: normal;
            color: #3d200a;
            text-decoration: none;
        }

        /* .card {
            background-color: wheat !important;
        } */
    </style>

</head>

<body>
    <img src="pictures/library-banner.jpg" class="hero">
    <div class="hero1">
        <div>
            <h1> Welcome To Books World </h1>
        </div>
    </div>
    <div class="heronav">
        <span class="name"><a href="Rowling.php"> J.K. Rowling </span></a>
        <span class="name"><a href="Shakespeare.php"> William Shakespeare</span></a>
        <span class="name"><a href="thomashardy.php"> Thomas Hardy</span></a>
        <span class="name"><a href="Travers.php"> P.L. Travers</span></a>

    </div>
    <div class="label">
        <label style="margin-left: 100px; margin-bottom : 20px; margin-top:0px;text-align: center; ">
            <h4>You cann add a new book</h4>
            <a class='btn btn-primary' href='creat.php' style="margin-left:20px ; margin-bottom:20px;margin-top:15px">Add New Book</a>
        </label>
    </div>
    <div class="container">
        <div class='card mb-3'>
            <div class='row g-0'>
                <div class='col-md-4'>
                    <img src='pictures/<?php echo $picture ?>' class=' img-fluid rounded-start' style='height:21rem;width:100%;object-fit:cover;' alt=''>
                </div>
                <div class='col-md-8'>
                    <h4 class='card-header text-center'><?php echo $title ?></h4>
                    <div class='card-body p-2'>
                        <p class='card-text'><b> Name : </b><?php echo $title ?></p>
                        <p class='card-text'><b> Type : </b> <?php echo $type ?> </p>
                        <p class='card-text'><b> publisher Name : </b> <?php echo $publisher_name ?></p>
                        <p class='card-text'><b> Availabel : </b> <?php echo $status ?></p>
                        <p class='card-text'><b> Description : </b> <a class='btn btn-success' href='details.php?id=1'>Show Detalis</a></p>
                        <p class='card-text'></p>
                    </div>
                    <div class='card-footer text-center'>
                        <a class='btn btn-primary' href='update.php?id=1'>Edit</a>
                        <a class='btn btn-danger' href='action/a_delete.php?id=1'>Delete</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
    < <div class=" container">
        <?php echo $tbody; ?>
        </div>
        <footer class=" p-5 bg-dark">
            <p class="h6 text-center text-white">Made by <a href="#">&#x24B8 Arwa Alrefaai</a></p>
        </footer>
</body>

</html>
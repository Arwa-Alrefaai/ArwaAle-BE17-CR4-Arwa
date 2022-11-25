<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <?php require_once "components/boot.php" ?>
    <style>
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }
    </style>

</head>

<body>
    <fieldset>
        <legend class='h2'>Add New Book</legend>
        <form action="action/a_creat.php" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>Title</th>
                    <td><input class='form-control' type="text" name="title" placeholder="The Title" /></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td><input class='form-control' type="text" name="type" placeholder="The Type" /></td>
                </tr>
                <tr>
                    <th>Picture</th>
                    <td><input class='form-control' type="file" name="picture" /></td>
                </tr>
                <tr>
                    <th>ISBN code </th>
                    <td><input class='form-control' type="text" name="isbncode" placeholder="ISBN Code" /></td>
                </tr>
                <tr>
                    <th>Description </th>
                    <td><input class='form-control' type="text" name="description" placeholder="Description" /></td>
                </tr>
                <tr>
                    <th>Authe first name </th>
                    <td><input class='form-control' type="text" name="authefirstname" placeholder="Authe first name" /></td>
                </tr>
                <tr>
                    <th>Authe last name </th>
                    <td><input class='form-control' type="text" name="authelastname" placeholder="Authe last name" /></td>
                </tr>
                <tr>
                    <th>Publisher name </th>
                    <td><input class='form-control' type="text" name="publishername" placeholder="Publisher name" /></td>
                </tr>
                <tr>
                    <th>Publisher address </th>
                    <td><input class='form-control' type="text" name="publisheraddress" placeholder="Publisher address" /></td>
                </tr>
                <tr>
                    <th>Publisher date </th>
                    <td><input class='form-control' type="date" name="publisherdate" placeholder="Publisher date" /></td>
                </tr>
                <tr>
                    <th>Status </th>

                    <td><input class='form-control' type="text" name="status" placeholder="" /></td>



                </tr>
                <tr>
                    <td><button class='btn btn-success' type="submit">Insert Product</button></td>
                    <td><a href="index-product.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>

</body>

</html>
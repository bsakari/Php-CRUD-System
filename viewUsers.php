<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Page</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
</head>
<body>
<a href="saveUser.php" class="btn btn-dark fixed-bottom">Add Users</a>
    <table class="table table-hover table-dark">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php
        /**
         * Created by PhpStorm.
         * User: emoblis
         * Date: 6/11/19
         * Time: 6:42 PM
         */

        //Connect to the Db
        $conn = mysqli_connect("localhost","root","","evening_system");
        //Check if the connection was successful
        if (!$conn){
            echo "Connection failed";
        }else{
            //Proceed to fetch data from the Db
            //Start by creating the select query
            $selectQuery = "SELECT * FROM majina";
            //Check if the select query is correct
            if (!$selectQuery){
                echo "Error on the select query";
            }else{
                //Finally fetch data
                $fetch = mysqli_query($conn,$selectQuery);




                while ($x = mysqli_fetch_assoc($fetch)){
                    extract($x);
                    echo "
                            <tr>
                                <td>$jina</td>
                                <td>$arafa</td>
                                <td><a href='delete.php?id_yetu=$id' class='btn btn-danger'>Delete</a></td>
                                <td><a href='update.php?id_yetu=$id&jina_yetu=$jina&arafa_yetu=$arafa&siri_yetu=$siri' class='btn btn-primary'>Update</a></td>
                            
                            </tr>
                         ";
                }
            }
        }


        ?>
    </table>
</body>
</html>
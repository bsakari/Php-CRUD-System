<?php
/**
 * Created by PhpStorm.
 * User: emoblis
 * Date: 6/11/19
 * Time: 5:54 PM
 */

if (isset($_POST['btn_save'])){
    $inputedName = $_POST['x'];
    $inputedEmail = $_POST['y'];
    $inputedPassword = $_POST['z'];

    //Connect to the Db
    $conn = mysqli_connect("localhost","root","","evening_system");
    //Check if the connection was successful
    if (!$conn){
        echo "Connection failed";
    }else{
        //Proceed to save to the DB
        //Start by creating the insert query
        $insertQuery = "INSERT INTO `majina`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$inputedName','$inputedEmail','$inputedPassword')";
        //Check if the connect query is correct
        if (!$insertQuery){
            echo "Error on the insert query";
        }else{
            //Proceed to finally save the data
            $save = mysqli_query($conn,$insertQuery);
            //Check if data was saved successfully
            if (!$save){
                echo "Saving failed";
            }else{
                echo "Data saved successfully";
                //Go back to saveUser.php to save more data
                header('location:saveUser.php');
            }
        }
    }
}


?>
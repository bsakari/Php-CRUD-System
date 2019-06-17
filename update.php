<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Page</title>
    <link rel="stylesheet" href="bootstrap/css/custom.css">
</head>
<body>
    <div class="form_class">
        <form action="updateProcess.php" method="post">
            <?php
            /**
             * Created by PhpStorm.
             * User: emoblis
             * Date: 6/12/19
             * Time: 6:30 PM
             */

            if (isset($_GET['id_yetu'])){
                $received_id = $_GET['id_yetu'];
                $received_name = $_GET['jina_yetu'];
                $received_email = $_GET['arafa_yetu'];
                $received_pass = $_GET['siri_yetu'];
            }
            ?>
            <input type="text" name="w" value="<?php echo $received_id; ?>" hidden class="s_input"><br>
            <input type="text" name="x" value="<?php echo $received_name; ?>" required class="s_input"><br>
            <input type="email" name="y" value="<?php echo $received_email; ?>" required class="s_input"><br>
            <input type="text" name="z" value="<?php echo $received_pass; ?>" required class="s_input"><br>
            <input type="submit" name="btn_update" value="Update Now" class="input_btn">
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FORM ĐĂNG KÝ</title>


</head>
<body>
<?php

    if (isset($_POST["height"])&& isset($_POST["weight"])){
        $weight = (int) $_POST["weight"];
        $height = (int) $_POST["height"];

        $BMI = $weight/( $height*$height);

        echo "Chỉ số BMI là:";
    }

?>


    <h1>Cách tính chỉ số BMI</h1>

    <form name="BMI" method="post" action="">
        <div class="form-group">
            <label>Chiều cao ( m )</label>
            <input type="text" class="form-control" name="height" value="">
        </div>

        <div class="form-group">
            <label>Cân nặng ( kg )</label>
            <input type="text" class="form-control" name="weight">
        </div>

        <button type="submit" class="btn btn-primary" name="calc">Submit</button>
    </form>
</body>
</html>
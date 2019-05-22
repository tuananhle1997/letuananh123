<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FORM ĐĂNG KÝ</title>


</head>
<body>
<?php
    $height = $weight = '';
    if (isset($_POST["height"])&& isset($_POST["weight"])){
        $weight = (int) $_POST["weight"];
        $height = (int) $_POST["height"];

        $bmi = $weight/( $height*$height);

        echo "Chỉ số BMI là: " . $bmi;
    }

?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Tính chỉ số BMI</h1>

                <form name="bmi" action="" method="post">
                    <div class="form-group">
                        <label >Chiều cao ( cm )</label>
                        <input type="text" class="form-control" name="height" value="<?php echo $height?>">
                    </div>
                    <div class="form-group">
                        <label >Cân nặng ( kg ) </label>
                        <input type="text" class="form-control" name="weight" value="<?php echo $weight ?>">
                    </div>
                    <button type="submit" name="calc" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
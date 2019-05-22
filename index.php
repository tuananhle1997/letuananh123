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
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        $weight = $_POST["weight"];
        $height = $_POST["height"];

        $bmi = $weight/( $height*$height);

        echo "Chỉ số BMI là: " . $bmi;

        if ($bmi < 18.5){
            echo "Gầy";
        }elseif ((18.5 < $bmi) && ($bmi < 24.9)){
            echo "bình thường";
        }elseif ((25.0 < $bmi) && ($bmi < 29.9)){
            echo "Hơi béo";
        }elseif ((30.0 < $bmi) && ($bmi < 34.9)){
            echo "Béo phì cấp độ 1";
        }elseif ((35.0 < $bmi) && ($bmi < 39.9)){
            echo "Béo phì cấp độ 2";
        }elseif ($bmi > 40){
            echo "Béo phì cấp độ 3";
        }
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
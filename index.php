<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FORM ĐĂNG KÝ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>


    <h1>Tính chỉ số BMI</h1>

    <form name="BMI" method="post" action="">
        <div class="form-group">
            <label>Chiều cao ( cm )</label>
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
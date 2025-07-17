<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd Even Nunber</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <style>
    a {
        color: rgb(12, 35, 212);
        text-decoration:none;
    }
    a:hover {
        color: rgb(170, 29, 29);
        font-weight: 600;
    }
    </style>
</head>
<body>
    <div class="comtainer mt-5">
        <h1 class="text-center">Odd Even Nunber Checker</h1>
        <hr>
        <p class="text-center" >กรุณากรอกตัวเลขเพื่อทำการตรวจสอบเลขคู่หรือเลขคี่</p>


        <form action="" method="post" class="text-center">
            <div class="foem-group ">
                <input type="number" name="number" id="number" class="form-control w-50 mx-auto" placeholder="Enter a number">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Check</button>
        </form>


    </div>
    
<!-- แสดงผลลับพท์ -->
<!-- คำยวลหาเลขคู่เลขคี่ -->
<?php
    $get_number = $_POST['number'] ?? null;
    if ($get_number % 2 == 0) {
        echo "<h3 class='text-success text-center'> This number $get_number is an rvrn number </h3>";
    } else {
        echo "<h3 class='text-success text-center'> This number $get_number is an odd number </h3>";
    }
 ?>
<a href="index.php">Back to Home</a>
</body>
</html>
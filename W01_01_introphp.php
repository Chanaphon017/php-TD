<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            
        }
    </style>
</head>
<body>
    <h1>Wllocome to PHP Basic</h1>
    
    <?php
    echo"Hello World <br>";
    print"Chanaphon_Phetnoi";
    ?>
    <!--==========================================================-->
    <hr>

    <h1 style="color: red;" >Basic PHP Syntax</h1>
    <pre> &lt ?php 
    echo "Hello World";
    ? &gt</pre>

    <h3>Result</h3>
    <div style="color: blue;"><?php
    echo  "Hello World <br>";
    print "<span style='color : green;'>Chanaphon_Phetnoi </span>";
    ?></div>
    <!--==========================================================-->
    <hr>

    <h1 style="color: red;" >PHP Variablaes</h1>
    <pre> &lt ?php 
    $greeting = "Hello World";
    echo $greeting;
    ? &gt;
    </pre>
    <h3>Result</h3>
    <?php 
    $greeting = "Hello World";
    echo "<span style='color : blue;'>".$greeting."</span>";
    ?>
    <!--==========================================================-->
    <hr>

    <h1 style="color: red;" >lneger Variable Example</h1>
    <?php
    $agr = 20;
    echo "<span style='color : blue;'>I am".$agr."yeas old</span>";
    ?>
    <!--==========================================================-->
    <hr>

        <h1 style="color: red;" >Calculate with Variables</h1>
    <?php
    $a = 5;
    $b = 4;
    $o = $a+$b ;
    echo "<span style='color : blue;'>The sum of ".$a." and in $b in $o</span>";
    ?>
    <!--==========================================================-->
    <hr>

        <h1 style="color: red;" >คำนวลพื้นที่สามเหลี่ยม</h1>
    <?php
    $c = 10;
    $d = 5;
    $h = 0.5;
    $s =$c * $d * $h ;
    echo "<span style='color : blue;'>พื้นที่ของสามเหลี่ยมคือ ".$s." ตารางหน่วย</span>";
    ?>
    <!--==========================================================-->
    <hr>

        <h1 style="color: red;" >คำนวณอายุจากปีเกิด</h1>
    <?php
    $e =2004;
    $f =2023;
    $l = $f-$e ;
    echo "<span style='color : blue;'>อายุของคุณคือ ".$l." ปี</span>";
    ?>
    <!--==========================================================-->
    <hr>

    <h1 style="color: blue;" >IF-Else</h1>
    <!--เกณท์ผ่านการสอบ ต้องได้คะแนน 60 คะแนน-->
    <?php
        $score = 55;
        if($score> 60){
            echo "คะแนนของคุณคือ $score คะแนน <br>";
            echo "ผลลับคือคุณ สอบผ่าน";
         }else{
             echo "คะแนนของคุณคือ $score คะแนน <br>";
            echo "ผลลับคือคุณ สอบไม่ผ่าน";
        }
    ?>
    <!--==========================================================-->
    <hr>

    <h1 style="color: blue;" >Boolean Variable</h1>
    <!--ตรวจสอบว่าเป็นนักศีกษาหรือไม่-->
    <?php
        echo "<h3>คุณเป็นนักเรียนใช่หรือไม่</h3>";
        $is_student = true; // เปลี่ยนค่าเป็น fales-true เพื่อทดสอบ
        if(!$is_student){
            echo "ใช่";
        }else {
             echo "ไม่ใช่";
        }
    ?>
    <!--==========================================================-->
    <hr>

    <h1 style="color: blue;" >Loop</h1>
    <h2>=====Loop for=====</h2>
    <h3>แสดงตัวเลข 1 ถึง 10</h3>
    <?php
        $sum = 0;
        for ( $i=5 ;$i <= 9 ; $i++){
            $sum += $i;        
            if($i < 9) {
                echo "$i +";
            }else {
                echo"$i = $sum";
            }
        }
            echo "<br> ผลบวกของ 9 กับ 5 คือ $sum";      
    ?>
    <!--==========================================================-->
    <hr>

    <h2>=====สูตรคูณแม่ 2=====</h2>
    <?php
        $j = 1;//ค่าเริ่มต้น
        while ($j <= 12) {
            echo"2 X $j = " . (2 * $j) . "<br>";

        $j++;//เพิ่ม ลด ค่า
        }

    ?>
    <!--==========================================================-->
    <hr>

    <h2>=====สูตรคูณแม่ 2 ใส่ตารง=====</h2>

    <table class="table table-bordered table-striped w-auto mx-auto text-center"> 
        <thead class="table-success">
                <tr>
                    <th>ลำดับ</th>
                    <th>สูตรคูณ</th>
                    <th>ผลลัพธ์</th>
                </tr>
        </thead>
        <tbody>
            <?php
                for ($j = 1 ;$j <= 12 ;$j ++ ) {
                    echo "<tr>";
                    echo "<td>$j</td>";
                    echo "<td>2 x $j</td>";
                    echo "<td>".(2 * $j)."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <!--==========================================================-->
    <hr>


    <h2>สร้างตัวแปรอาเรย์ แบบที่ 1: Indexed Array</h2>
    <h5>PHP จะกำหนด index เป็นตัวเลขอัตโนมัติ โดยเริ่มจาก 0</h5>

    <!--สร้างอาเรย์-->
    <?php
        $fruits = ["Apple", "Banana", "Orange"];
    ?>

    <h3>แสดงรายการผลไม้ โดยใช้ index</h3>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php 
            echo $fruits[0] . "<br>"; //Apple
            echo $fruits[1] . "<br>"; //Banana
            echo $fruits[2] . "<br>"; //Orange
        ?> 
    </div>
    <br>
    <div style="color:red; background-color: lightgray; padding: 10px;">
        <?php  
            echo "ผลไม้ที่ 1 คือ: " . $fruits[0] . "<br>"; //Apple
            echo "ผลไม้ที่ 2 คือ: " . $fruits[1] . "<br>"; //Banana
            echo "ผลไม้ที่ 3 คือ: " . $fruits[2] . "<br>"; //Orange
        ?>
    </div>
     
     
    </div>
    <br>
    <!--==========================================================-->
    <hr>


    <h4>แสดงรายการผลไม้ โดยใช้ print readable</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            echo "รายการผลไม้: <br>";
            print_r($fruits); // แสดงผลอาเรย์ทั้งหมด  print readable
            echo "<br>";

        ?>
    </div>
    <!--==========================================================-->
    <hr>


        <h4>แสดงจำนวนสมาชิกในอาเรย์</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            echo "จำนวนผลไม้: " . count($fruits) . " ชนิด " . "<br>"; // แสดงจำนวนสมาชิกในอาเรย์
            echo "<br>";
        ?>
    </div>
    <!--==========================================================-->
    <hr>


        <h4>แสดงรายการผลไม้ โดยใช้ implode เพื่อแปลงอาเรย์เป็นสตริง</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            // แสดงรายการผลไม้และจำนวนสมาชิกในอาเรย์
            // ใช้ implode เพื่อแปลงอาเรย์เป็นสตริง และแสดงผลลัพธ์
            echo "รายการผลไม้: " . implode(", ", $fruits) . "<br>"; // ผลลัพธ์: Apple, Banana, Cherry
            echo "<br>";
        ?>
    </div>
    <!--==========================================================-->
    <hr>


    <h4>แสดงรายการผลไม้ ใช้คำสั่ง foreach เพื่อวนลูป</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            // ใช้คำสั่ง foreach เพื่อวนลูปค่าใน array ทีละตัว โดยในแต่ละรอบ ตัวแปร $fruit จะเก็บค่าผลไม้ 1 ชนิด
            foreach ($fruits as $fruit) {
                echo "ผลไม้: " . $fruit . "<br>";

            }
            echo "<br>";
        ?>
        
    </div>
        // ใช้คำสั่ง foreach เพื่อวนลูปค่าใน array ทีละตัว โดยในแต่ละรอบ ตัวแปร $fruit จะเก็บค่าผลไม้ 1 ชนิด
        <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            foreach ($fruits as $fruit) {                      
                if($fruit === end($fruits)) {
                    echo "$fruit. "; 
                    
                }else{
                    echo "$fruit, ";
                }

            }
            echo "<br>";
        ?>
    </div>
    <!--==========================================================-->
    <hr>


    <h4>แสดงรายการผลไม้ ใช้คำสั่ง key value</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            $prodocts = [
                ["name" => "Apple", "price" => 30],
                ["name" => "Banana", "price" => 20],
                ["name" => "Orange", "price" => 25]
            ];
            foreach ($prodocts as $prodoct) {
                echo "สินค้าที่: {$prodoct['name']} ราคา {$prodoct['price']} บาท <br>";
                $total_price = $prodoct['price'] ; 
            }
        ?>
    </div>
    <!--==========================================================-->
    <hr>

    <h4>แสดงรายการผลไม้ ใช้คำสั่ง foreach เพื่อวนลูป</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
        $products = [
            ["name" => "Apple", "price" => 30],
            ["name" => "Banana", "price" => 40],
            ["name" => "Orange", "price" => 50]
        ];

        $total = 0; 
        foreach ($products as $product){
            echo "สินค้า {$product['name']} ราคา {$product['price']} บาท<br>";
            $total += $product['price']; 
        }
        echo "<br><strong>ราคารวมทั้งหมด: {$total} บาท</strong><br>";
        ?>
    </div>

    
 <a href="index.php">Back to Home</a>
</body>
</html>

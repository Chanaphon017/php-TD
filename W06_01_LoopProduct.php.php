<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lop for show Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">
    <style>
        .container{
            max-width: 800px;
        }
    </style>
</head>
<body>
    <?php
        $products = [
                ['id' =>1001, 'name'=>'Apple', 'price'=>35, 'quantity'=>100], 
                ['id' =>1002, 'name'=>'Banana', 'price'=>20, 'quantity'=>150], 
                ['id' =>1003, 'name'=>'Orange', 'price'=>30, 'quantity'=>80], 
                ['id' =>1004, 'name'=>'Watermelon', 'price'=>50, 'quantity'=>40], 
                ['id' =>1005, 'name'=>'Guava', 'price'=>25, 'quantity'=>70], 
                ['id' =>1006, 'name'=>'Grapes', 'price'=>60, 'quantity'=>60], 
                ['id' =>1007, 'name'=>'Pineapple', 'price'=>45, 'quantity'=>55], 
                ['id' =>1008, 'name'=>'Custard apple', 'price'=>40, 'quantity'=>30], 
                ['id' =>1009, 'name'=>'Dragon fruit', 'price'=>65, 'quantity'=>35], 
                ['id' =>1010, 'name'=>'Mango', 'price'=>55, 'quantity'=>90], 
                ['id' =>1011, 'name'=>'Mangosteen', 'price'=>70, 'quantity'=>25], 
                ['id' =>1012, 'name'=>'Lychee', 'price'=>60, 'quantity'=>45], 
                ['id' =>1013, 'name'=>'Longan', 'price'=>50, 'quantity'=>65], 
                ['id' =>1014, 'name'=>'Strawberry', 'price'=>75, 'quantity'=>20], 
                ['id' =>1015, 'name'=>'Rose apple', 'price'=>30, 'quantity'=>85], 
            ];
    ?>

    <div class="container mt-5">
        <h1>product List</h1>
        <form action="" method="post" class="mb-3">
            <div>
                <input type="number" name="price" placeholder="Enter price" class="form-control mb-2">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>

        </form>





        <table id="productTable" class="table table-striped table-bordered" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>

            <?php

            //check if form is submitted
            if(isset($_POST['price']) && !empty($_POST['price'])){
                $filterPrice = $_POST['price'];
                $filteredProducts = array_filter($products, function($product) use ($filterPrice){
                    return $product['price'] == $filterPrice;
                });

            //คืนค่า array ใหม่ โคยรีเซ็ต index ให้เริ่มที่ 0
                $filteredProducts = array_values($filteredProducts);



            }else{
                $filteredProducts = $products;
            };


            foreach ($filteredProducts as $index => $product) {
                echo"<tr>";
                echo "<td>". ($index + 1) ."</td>";
                echo "<td>". $product['id']. "</td>";
                echo "<td>". $product['name']."</td>";
                echo "<td>". $product['price']."</td>";
                echo "<td>". $product['quantity']."</td>";
                echo"</tr>";
            }
            ?>
            </tbody>
        </table>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        let table = new DataTable('#productTable');
    </script>
</body>
</html>
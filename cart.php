<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Order Details</h3>
    <div class="table-responsive">

        <table class="table table-bordered">
            <tr>
                <th width="40%">Item Name</th>
                <th width="10%">Description</th>
                <th width="20%">Price</th>
                <th width="5%">Action</th>
            </tr>
            <?php
            $query = "SELECT * FROM tbl_product ORDER BY id ASC";
            $result = mysqli_query($connect, $query);
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result))
                {

            <tr>
                <td><?php echo $values["title"]; ?></td>
                <td><?php echo $values["description"]; ?></td>
                <td>$ <?php echo $values["price"]; ?></td>
                <td><a href="index.php?action=delete&id=<?php echo $values["id"]; ?>"><span class="text-danger">Remove</span></a></td>
            </tr>
            <?php
                    
                }
            ?>  
            <?php
            }
            ?>
                
        </table>
    </div>
</body>
</html>
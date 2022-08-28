
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= device width, initial-scale = 1.0">
    <title>Apple Store</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="applelogo.png">
 
</head>

<body>
    <div class="firstPart">
        <div class="container1">           
            <div class="myNavBar">  
                <nav>
                    <ul>
                        <li><a onclick="proceedOnShoppingCart(event)"><br><br><br><br>My Cart</a></li>
                    </ul>
                </nav>
                <a href="#start-cart" onclick="proceedOnShoppingCart(event)"><img class="my-cart2" src="assets/cart.png" width="30" height="30" alt="Cart Icon"></a>

            </div>
            <div class="row">
                <div class="topContent">
                    <h1>Top-Level Smartphones <br>with Premium Design <br> and Innovation</h1>
                    <p>Order Now.</p>
                    <a href="#categories" class="button1">Shop Now &#10095;</a>
                </div>
                <div class="topContent">
                    <img src="assets/shopping.png" alt="Top Image">
                </div>
            </div>
        </div>
    </div>

    <!----- Categories Part ----->
    <div class="categories" id="categories">
        <div class="container2">
            <div class="row">
                
                <div class="content1">
                <form action="./config/addItem.php" method="post">
                    <img src="assets/p30-pro-blue.png" alt="Category 1">
                    <h2 class="title">HUAWEI P50 Pro</h2>
                    <br/>
                    <h3 class="dis">
                        True-Form Dual-Matrix Camera 
                        6.6'' True-Chroma Display, 120 Hz
                        Dual HUAWEI SuperCharge, IP68 
                    </h3>
                    <input type="hidden" name="title" value="HUAWEI P50 Pro" />
                    <input type="hidden" name="price" value="$650" />
                    <input type="hidden" name="description" 
                    value="True-Form Dual-Matrix Camera 
                    6.6'' True-Chroma Display, 120 Hz
                    Dual HUAWEI SuperCharge, IP68" />
                    <input type="submit"  class="button1" value="Add to Cart &#10095;" />
                </form>
                </div>               
                
                <div class="content1">
                <form action="config/addItem.php" method="post">
                    <img src="assets/p40-pro-silver.png" alt="Category 2">
                    <h2 class="title">HUAWEI P40 Pro</h2>  
                    <br/>
                    <h3 class="dis">
                        Ultra Vision Leica Quad Camera, 1/1.28 inch Sensor     
                        Kirin 990 5G           
                        90 Hz Display, IP68
                    </h3> 
                    <input type="hidden" name="title" value="HUAWEI P40 Pro" />
                    <input type="hidden" name="price" value="$600" />
                    <input type="hidden" name="description" 
                    value="Ultra Vision Leica Quad Camera, 
                    1/1.28 inch Sensor Kirin 990 5G           
                    90 Hz Display, IP68" />            
                    <input type="submit"  class="button1" value="Add to Cart &#10095;" /> 
                </form>

                </div>    
            </div>
        </div>
    </div>   
</body>
</html>
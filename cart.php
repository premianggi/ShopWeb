<?php
 $active="Cart";
        include ("includes/header.php");
    ?>
    
    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Cart 
                    </li>
                </ul>
            
            </div>
            
            <div id="cart" class="col-md-9">
                <div class="box">
                    <form action="cart.php" method="post" enctype="multipart/form-data">
                       <h1>Shopping Cart</h1>
                        <p class="text-muted">You currently have 3 item(s) in your cart</p>
                        <div class="table-responsive">
                            <table class="table">

                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Size</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="2">Sub-Total</th>
                                    </tr>
                                </thead>                                
                                <tbody>
                                    <tr>
                                        
                                        <td>
                                            <img class="img-responsive" src="admin_area/product_images/product-15543621016477jpg.jpg" alt="Product 3a">
                                        </td>
                                        <td>
                                            <a href="#">Dev Coding Honai Polo Shirt Men</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            $50
                                        </td>
                                        <td>
                                            Large
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]"></input>
                                        </td>
                                        <td>
                                            $100
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        
                                        <td>
                                            <img class="img-responsive" src="admin_area/product_images/product-15543621016477jpg.jpg" alt="Product 3a">
                                        </td>
                                        <td>
                                            <a href="#">Dev Coding Honai Polo Shirt Men</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            $50
                                        </td>
                                        <td>
                                            Large
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]"></input>
                                        </td>
                                        <td>
                                            $100
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        
                                        <td>
                                            <img class="img-responsive" src="admin_area/product_images/product-15543621016477jpg.jpg" alt="Product 3a">
                                        </td>
                                        <td>
                                            <a href="#">Dev Coding Honai Polo Shirt Men</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            $50
                                        </td>
                                        <td>
                                            Large
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]"></input>
                                        </td>
                                        <td>
                                            $100
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th colspan="2">$100</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="index.php" class="btn btn-default">
                                    
                                    <i class="fa fa-chevron-left"></i> Continue Shopping
                                    
                                </a>
                            </div>
                            <div class="pull-right">
                                <button type="submit" name="update" value="Update Cart" class="btn btn-default">
                                    
                                    <i class="fa fa-refresh"></i> Update Cart
                                    
                                </button>
                                
                                <a href="checkout.php" class="btn btn-primary">
                                    Proceed Checkout <i class="fa fa-chevron-right"></i>
                                </a>
                                
                            </div>

                        </div> 
                    </form>
                </div>
                                 <div id="row same-heigh-row">
                     <div class="col-md-3 col-sm-6">
                         <div class="box same-height headline">
                             <h3 class="text-center">Products You Maybe Like</h3>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-3 center-responsive">
                         <div class="product same-height">
                             <a href="details.php">
                                 <img class="img-responsive" src="admin_area/product_images/product-15543621016477jpg.jpg" alt="">
                             </a>
                             <div class="text">
                                 <h3><a href="details.php">Men's Clothes I love papua</a></h3>
                                 <p class="price">$40</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-3 center-responsive">
                         <div class="product same-height">
                             <a href="details.php">
                                 <img class="img-responsive" src="admin_area/product_images/product-15543621016477jpg.jpg" alt="">
                             </a>
                             <div class="text">
                                 <h3><a href="details.php">Men's Clothes I love papua</a></h3>
                                 <p class="price">$40</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-3 center-responsive">
                         <div class="product same-height">
                             <a href="details.php">
                                 <img class="img-responsive" src="admin_area/product_images/product-15543621016477jpg.jpg" alt="">
                             </a>
                             <div class="text">
                                 <h3><a href="details.php">Men's Clothes I love papua</a></h3>
                                 <p class="price">$40</p>
                             </div>
                         </div>
                     </div>
                     </div>
            </div>
            <div class="col-md-3">
                <div id="order-summary" class="box">
                    <div class="box-header">
                        <h3>Order Summary</h3>
                    </div>
                    <p class="text-muted">
                        Shopping and additional costs are calculated based on value you have entered
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Order Sub-Total</td>
                                    <th>$200</th>
                                </tr>
                                <tr>
                                    <td>Shipping and Handling</td>
                                    <th>$0</th>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <th>$0</th>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <th>$200</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
    include ("includes/footer.php");
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>
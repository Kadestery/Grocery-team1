<?php include('./assets/php/header.php'); ?>

    <!--Refresh counter for apples-->
    <!--script type="text/javascript">
     document.getElementById("appleCounter").value = getSavedValue("appleCounter");
     function saveValue(e){
         var id = e.id;
         var val = e.value;
         localStorage.setItem(id, val);
     }
     function getSavedValue(v){
         if (!localStorage.getItem(v)){
             return "1";
         }
         return localStorage.getItem(v);
     }
 </script-->

    <main>


        <!------ cart items details --------->
        <div class="cart-container">
            <table>
                <tr class="cart-topbar">
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>

                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="./images/apple.jpg">
                            <div>
                                <p>Apple</p>
                                <small>Price: $<span id="unitPrice">1.05</span>/unit</small>
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <!--td><input type="number" id="appleCounter" onchange='saveValue(this);'></td-->
                    <td><input id="quantity" type="number" min="1" value="1" onchange="updateCartPrice()"></td>
                    <td>$<span id="product-price">1.05</span></td>
                </tr>

                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="./images/cucumber.jpg">
                            <div>
                                <p>English Cucumber</p>
                                <small>Price: $<span id="unitPrice2">5.00</span>/pack</small>
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input id="quantity2" type="number" min="1" value="1" onchange="updateCartPrice2()"></td>
                    <td>$<span id="product-price2">5.00</span></td>
                </tr>

                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="./images/banana.jpg">
                            <div>
                                <p>Bananas</p>
                                <small>Price: $<span id="unitPrice3">0.30</span>/unit</small>
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input id="quantity3" type="number" min="1" value="1" onchange="updateCartPrice3()"></td>
                    <td>$<span id="product-price3">0.30</span></td>
                </tr>
            </table>
            <br>
            <br>

            <div class="checkout">
                <div class="checkout-col2">
                    <a href="" class="checkout-btn">Check Out Now</a>
                </div>


                <div class="checkout-col2">
                    <table>
                        <tr>
                            <td>Number of Items</td>
                            <td><span class="nbItems">3</span> item(s)</td>
                        </tr>
                        <tr>
                            <td>Subtotal</td>
                            <td>$<span class="subTotal">6.35</span></td>
                        </tr>

                        <!-- fresh produce are tax free but we'll pretend 
    like they have tax for the sake of assignment -->

                        <tr>
                            <td>GST</td>
                            <td>$<span class="GST">0.32</span></td>
                        </tr>
                        <tr>
                            <td>QST</td>
                            <td>$<span class="QST">0.64</span></td>
                        </tr>
                        <br>
                        <tr>
                            <td>Total</td>
                            <td>$<span class="totalPrice">7.30</span></td>
                        </tr>
                    </table>

                </div>

            </div>



        </div>


    </main>

    <!---- Footer --->
    <div id="footer"></div>
    <!-End Of Footer->

        <script src="js/script.js"></script>
</body>

</html>
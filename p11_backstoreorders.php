<?php include('./assets/php/header.php'); ?>
    <div class="backstore-navigation-buttons">
        <a href="p7_backstore.php">
            <div class="btn">
                <label for="manageproducts">Manage products</label>
                <input type="button" id="manageproducts" name="manageproducts">
            </div>
        </a>

        <a href="p9_backstoreusers.php">
            <div class="btn">
                <label for="manageusers">Manage users</label>
                <input type="button" id="manageusers" name="manageusers">
            </div>
        </a>

        <a href="p11_backstoreorders.php">
            <div class="btn">
                <label for="manageorders">Manage orders</label>
                <input type="button" id="manageorders" name="manageorders">
            </div>
        </a>
    </div>

    <div>
        <h1 class="bs-header"></br>Order List

            <form action="" class="backstore-forms" id="productBox">
                <p>
                    <input class="bs-checkbox" type="checkbox" name="products[]" value="orde1" id="product" onclick="backstoreStyling()" />
                    <label class="bs-form-text"> Order No. 1 </label>
                </p>
            </form>

            <form action="" class="backstore-forms" id="productBox">
                <p>
                    <input class="bs-checkbox" type="checkbox" name="products[]" value="order2" id="product" onclick="backstoreStyling()" />
                    <label class="bs-form-text"> Order No. 2 </label>
                </p>
            </form>

            <form action="" class="backstore-forms" id="productBox">
                <p>
                    <input class="bs-checkbox" type="checkbox" name="products[]" value="order3" id="product" onclick="backstoreStyling()" />
                    <label class="bs-form-text"> Order No. 3</label>
                </p>
            </form>

        </h1>
    </div>

    <div class="backstore-editing-buttons">
        <a href="p12_addorder.php">
            <div class="btn">
                <label for="addorder">Add order</label>
                <input type="button" id="addorder" name="addorder">
            </div>
        </a>

        <div class="btn">
            <label for="deleteorder">Delete order</label>
            <input type="button" id="deleteorder" name="deleteorder">
        </div>

        <a href="p12_editorder.php">
            <div class="btn">
                <label for="editorder">Edit order</label>
                <input type="button" id="editorder" name="editorder">
            </div>
        </a>
    </div>

    <!---- Footer --->
    <div id="footer"></div>
    <!-End Of Footer->

        <script src="js/script.js"></script>
</body>

</html>
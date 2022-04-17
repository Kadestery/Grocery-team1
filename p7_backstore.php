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
        <h1 class="bs-header"></br>Product Inventory

            <form action="" class="backstore-forms" id="productBox">
                <p>
                    <input class="bs-checkbox" type="checkbox" name="products[]" value="apple" id="product" onclick="backstoreStyling()" />
                    <label class="bs-form-text"> Apple </label>
                </p>
            </form>

            <form action="" class="backstore-forms" id="productBox">
                <p>
                    <input class="bs-checkbox" type="checkbox" name="products[]" value="Banana" id="product" onclick="backstoreStyling()" />
                    <label class="bs-form-text"> Banana </label>
                </p>
            </form>

            <form action="" class="backstore-forms" id="productBox">
                <p>
                    <input class="bs-checkbox" type="checkbox" name="products[]" value="Cucumber" id="product" onclick="backstoreStyling()" />
                    <label class="bs-form-text"> Cucumber </label>
                </p>
            </form>

        </h1>
    </div>

    <div class="backstore-editing-buttons">
        <a href="p8_addproduct.php">
            <div class="btn">
                <label for="additm">Add product</label>
                <input type="button" id="additm" name="additm">
            </div>
        </a>

        <div class="btn">
            <label for="deleteitm">Delete product</label>
            <input type="button" id="deleteitm" name="deleteitm">
        </div>

        <a href="p8_editproduct.php">
            <div class="btn">

                <label for="edititm">Edit product</label>
                <input type="button" id="edititm" name="edititm">
            </div>
        </a>
    </div>

    <!---- Footer --->
    <div id="footer"></div>
    <!-End Of Footer->

        <script src="js/script.js"></script>
</body>

</html>
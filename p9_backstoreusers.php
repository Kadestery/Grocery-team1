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
        <h1 class="bs-header"></br>User List

            <form action="" class="backstore-forms" id="productBox">
                <p>
                    <input class="bs-checkbox" type="checkbox" name="products[]" value="user1" id="product" onclick="backstoreStyling()" />
                    <label class="bs-form-text"> John Doe </label>
                </p>
            </form>

            <form action="" class="backstore-forms" id="productBox">
                <p>
                    <input class="bs-checkbox" type="checkbox" name="products[]" value="user2" id="product" onclick="backstoreStyling()" />
                    <label class="bs-form-text"> Jane Doe </label>
                </p>
            </form>

            <form action="" class="backstore-forms" id="productBox">
                <p>
                    <input class="bs-checkbox" type="checkbox" name="products[]" value="user3" id="product" onclick="backstoreStyling()" />
                    <label class="bs-form-text"> Jack Jackson </label>
                </p>
            </form>

        </h1>
    </div>

    <div class="backstore-editing-buttons">
        <a href="p10_adduser.php">
            <div class="btn">
                <label for="adduser">Add user</label>
                <input type="button" id="adduser" name="adduser">
            </div>
        </a>

        <div class="btn">
            <label for="deleteuser">Delete user</label>
            <input type="button" id="deleteuser" name="deleteuser">
        </div>

        <a href="p10_edituser.php">
            <div class="btn">
                <label for="edituser">Edit user</label>
                <input type="button" id="edituser" name="edituser">
            </div>
        </a>
    </div>

    <!---- Footer --->
    <div id="footer"></div>
    <!-End Of Footer->

        <script src="js/script.js"></script>
</body>

</html>
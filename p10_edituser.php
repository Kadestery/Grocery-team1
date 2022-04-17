<?php include('./assets/php/header.php'); ?>
    </div>

    <div>
        <h1 class="bs-header"></br>Edit a user

            <form action="" class="bs-add">
                <p>
                    <label class="bs-add"> User Name: </label>
                    <input class="data-entering" type="text" name="itemdata[]" value="placeholder name" id="name" />
                </p>
            </form>

            <form action="" class="bs-add">
                <p>
                    <label class="bs-add"> User email: </label>
                    <input class="data-entering" type="text" name="itemdata[]" value="placeholder email" id="email" />
                </p>
            </form>

            <form action="" class="bs-add">
                <p>
                    <label class="bs-add"> Password: </label>
                    <input class="data-entering" type="text" name="itemdata[]" value="placeholder password" id="password" />
                </p>
            </form>

        </h1>
    </div>
    <!-- Temporary buttons just loop back to the previous page-->
    <div class="backstore-editing-buttons">
        <a href="p9_backstoreusers.php">
            <div class="btn">
                <label for="saveitm">Save</label>
                <input type="button" id="saveitm" name="saveitm">
            </div>
        </a>

        <a href="p9_backstoreusers.php">
            <div class="btn">
                <label for="cancel">Cancel</label>
                <input type="button" id="cancel" name="cancel">
            </div>
        </a>
    </div>

    <!---- Footer --->
    <div id="footer"></div>
    <!-End Of Footer->

        <script src="js/script.js"></script>
</body>

</html>
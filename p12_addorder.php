<?php include('./assets/php/header.php'); ?>
    </div>

    <div>
        <h1 class="bs-header"></br>Add an order

            <form action="" class="bs-add">
                <p>
                    <label class="bs-add"> Number Name: </label>
                    <input class="data-entering" type="text" name="itemdata[]" value="" id="ordernumber" />
                </p>
            </form>

            <form action="" class="bs-add">
                <p>
                    <label class="bs-add"> Client Name: </label>
                    <input class="data-entering" type="text" name="itemdata[]" value="" id="clientname" />
                </p>
            </form>

            <form action="" class="bs-add">
                <p>
                    <label class="bs-add"> Balance: </label>
                    <input class="data-entering" type="text" name="itemdata[]" value="" id="orderbalance" />
                </p>
            </form>

        </h1>
    </div>
    <!-- Temporary buttons just loop back to the previous page-->
    <div class="backstore-editing-buttons">
        <a href="p11_backstoreorders.php">
            <div class="btn">
                <label for="saveitm">Save</label>
                <input type="button" id="saveitm" name="saveitm">
            </div>
        </a>

        <a href="p11_backstoreorders.php">
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
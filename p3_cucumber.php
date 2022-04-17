<?php session_start(); ?>
<!DocTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cucumber page</title>

    <!-- boxicon link -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- import css -->
    <link rel="stylesheet" href="./css/styles.css">

    <!-- favicon (title of page image) -->
    <link rel="icon" href="/images/favicon.JPG" sizes="32x32" type="image/JPG">

    <script src="https://code.jquery.com/jquery-3.3.1.js" integity="sha256-2Kok7Mb0yxpgUVvAk/H32jig0SYS2auk4Pfzbm7uH60=" crossorigin "anonymous"></script>
    <script>
        $(function() {
            $('#footer').load("./assets/php/footer.php");
        });
        $(function() {
            $('#header').load("./assets/php/header.php");
        });
    </script>
</head>

<body>
    <!-- Header -->
    <div id="header"></div>
    <!--END OF HEADER-->


    <main>
        <!-- details of single product  -->

        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="./images/cucumber.jpg" width="100%" id="ProductImg">
                </div>


                <div class="col-2">
                    <h2><a href="./index.php">Home</a>/<a href="./p2_fruitaisle.php">Fruits</a>/Cucumber</h2>
                    <h1>Cucumber</h1>
                    <h4 style="display: none;" id="unitPrice">5.00</h4>
                    <h4 class="product-price">$5.00 /<span>pack</span>
                    </h4>
                    <br>
                    <input id="quantity" type="number" min="0" value="1" onchange="updatePrice();saveValue(this)">
                    <a href="" class="btn">Add To Cart</a>
                    <br>
                    <h2 class="proddetail">Product Details <i class="fa fa-indent"></i></h2>
                    <br>
                    <p class="prod-dsc">Local, ethically sourced and any other adjective the marketing team can think of
                        <span id="dots">...</span><span id="more">Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Neque sapiente alias maxime quasi dolorem iusto id magni, voluptatem, ab quibusdam
                            aperiam enim eligendi ad ipsum ipsa blanditiis. Repellat, aliquam nemo!</span>
                    </p>
                    <br>
                    <button onclick="myFunction()" id="myBtn">Read more</button>
                    <br>
                </div>
            </div>
        </div>


        <!-- product list -->
        <section>
            <h1 class="section-title"><span>Similar Offerings</span></h1>

            <!-- the files path will have to be changed -->
            <div class="row2">

                <div class="col-5">
                    <div class="product">
                        <a href="./p3_banana.php">
                            <img src="./images/banana.jpg" alt="Banana">
                            <h4 class="aisle-text">Bananas</h4>
                            <p class="aisle-text">$0.30/unit</p>
                        </a>
                    </div>
                </div>


                <div class="col-5">
                    <div class="product">
                        <a href="./p3_honeycrisp.php">
                            <img src="./images/apple.jpg" alt="Honeycrisp Apple">
                            <h4 class="aisle-text">Honeycrisp Apples</h4>
                            <p class="aisle-text">$1.05/unit</p>
                        </a>
                    </div>
                </div>



            </div>

        </section>


    </main>


    <!---- Footer --->
    <div id="footer"></div>
    <!-End Of Footer->

        <script src="js/script.js"></script>

        <script>
            function myFunction() {
                var dots = document.getElementById("dots");
                var moreText = document.getElementById("more");
                var btnText = document.getElementById("myBtn");

                if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "Read more";
                    moreText.style.display = "none";
                } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Read less";
                    moreText.style.display = "inline";
                }
            }
        </script>
        <script type="text/javascript">
            document.querySelector(".product-price").innerHTML = updatePrice2(getSavedValue("quantity")); // set the value to this input
            document.getElementById("quantity").value = getSavedValue("quantity");
            //Save the value function - save it to localStorage as (ID, VALUE)
            function saveValue(e) {
                var id = e.id; // get the sender's id to save it . 
                var val = e.value; // get the value. 
                localStorage.setItem(id, val); // Every time user writing something, the localStorage's value will override . 
                var unitPrice = parseFloat(document.querySelector(".product-price").innerHTML);
                localStorage.setItem('product-price', unitPrice);
            }

            //get the saved value function - return the value of "v" from localStorage. 
            function getSavedValue(v) {
                if (!localStorage.getItem(v)) {
                    return 0;
                }
                return localStorage.getItem(v);

            }
        </script>
</body>

</html>
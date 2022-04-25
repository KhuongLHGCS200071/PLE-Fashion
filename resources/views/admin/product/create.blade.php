<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/shortcode/default.css">
    <link rel="stylesheet" href="../../css/shortcode/shortcodes.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/index.css">
    <link href="../../images/logo/KOPLE.png" rel="icon">
    <title>PLE Fashion - Create Product</title>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../home"><img src="../../images/logo/PLE.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="product-grid">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-primary" aria-current="page" href="admin">Admin</a>
                    </li>
                </ul>
                <div id="account-info"> </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-3">
        <form id="frm-create-product">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" placeholder="Name" required>
                <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="description" placeholder="Description">
                <label for="description">Description</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="price" placeholder="Price" required>
                <label for="price">Price</label>
            </div>
            <div class="form-floating mb-3">
                <select id="category_id" class="form-select" required> </select>
                <label for="category_id">Category</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="image" placeholder="ImageLink">
                <label for="image">Image Link</label>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="admin" class="btn btn-danger">Back to Admin</a>
        </form>
    </div>
    <br><br>
    <footer id="htc__footer">
        <div class="footer__container bg__cat--1">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer">
                            <h2 class="title__line--2">ABOUT US</h2>
                            <div class="ft__details">
                                <p>Enfant de l'océan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 xmt-40">
                        <div class="footer">
                            <h2 class="title__line--2">information</h2>
                            <div class="ft__inner">
                                <ul class="ft__list">
                                    <li><a href="#" style="text-decoration: none">About us</a></li>
                                    <li><a href="#" style="text-decoration: none">Delivery Information</a></li>
                                    <li><a href="#" style="text-decoration: none">Privacy & Policy</a></li>
                                    <li><a href="#" style="text-decoration: none">Terms & Condition</a></li>
                                    <li><a href="#" style="text-decoration: none">Manufactures</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                        <div class="footer">
                            <h2 class="title__line--2">my account</h2>
                            <div class="ft__inner">
                                <ul class="ft__list">
                                    <li><a href="#" style="text-decoration: none">My Account</a></li>
                                    <li><a href="cart" style="text-decoration: none">My Cart</a></li>
                                    <li><a href="#" style="text-decoration: none">Login</a></li>
                                    <li><a href="#" style="text-decoration: none">Wishlist</a></li>
                                    <li><a href="#" style="text-decoration: none">Checkout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                        <div class="footer">
                            <h2 class="title__line--2">Product</h2>
                            <div class="ft__inner">
                                <ul class="ft__list">
                                    <li><a href="product-grid" style="text-decoration: none">All products</a></li>
                                    <li><a href="product-grid" style="text-decoration: none">Shirt</a></li>
                                    <li><a href="product-grid" style="text-decoration: none">Pants</a></li>
                                    <li><a href="product-grid" style="text-decoration: none">Socke</a></li>
                                    <li><a href="product-grid" style="text-decoration: none">Jacket</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 xmt-40 smt-40">
                        <div class="footer">
                            <h2 class="title__line--2">NEWSLETTER </h2>
                            <div class="ft__inner">
                                <div class="news__input">
                                    <input class="textwhite" type="text" placeholder="Your Mail">
                                    <div class="send__btn">
                                        <div class="btn btn-secondary" href="#">Send Mail</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="htc__copyright bg__cat--5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="copyright__inner">
                            <p>Copyright© <a href="#">PLE Fashion</a> 2022. All
                                right reserved.</p>
                            <a href="#"><img src="../../img/logo/paypol.png" alt="payment images"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="../../js/database.js"></script>
    <script>
        window.onload = get_category;
        function get_category() {
            db.transaction(function (tx) {
                var query = "SELECT * FROM category";
                tx.executeSql(query, [], function (tx, result) {
                    log(`INFO`, `Get a list of categories successfully.`);
                    add_category_option(result.rows);
                }, transaction_error);
            });
        }

        function add_category_option(categories) {
            var category_select = document.getElementById("category_id");
            category_select.innerHTML = `<option value="">Select Category</option>`
            for (var category of categories) {
                category_select.innerHTML += `<option value="${category.id}">${category.name}</option>`
            }
        }
        document.getElementById("frm-create-product").onsubmit = create_product;
        function create_product(e) {
            e.preventDefault();
            var name = document.getElementById("name").value;
            var description = document.getElementById("description").value;
            var price = document.getElementById("price").value;
            var category_id = document.getElementById("category_id").value;
            var image = document.getElementById("image").value;
            db.transaction(function (tx) {
                var query = `INSERT INTO product (name,description,price,category_id,img) VALUES(?,?,?,?,?)`;
                tx.executeSql(
                    query,
                    [name, description, price, category_id, image],
                    function (tx, result) {
                        document.getElementById("frm-create-product").reset();
                        document.getElementById("name").focus();
                        var message = `Insert "${name}" successfully.`;
                        log(`INFO`, message);
                        alert(message);
                    },
                    transaction_error
                );
            });
        }
    </script>
</body>

</html>
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
    <title>PLE Fashion - Admin</title>
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
        <a href="create" class="btn btn-outline-primary mb-3"> Create a Product</a>

        <table class="table table-striped text-center">
            <thead class="bg-primary text-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="product-list" class="border-primary">
            @foreach ($product as $item)
                <tr id = "product-list-item-{{$item->id}}">
                    <td>{{$item->id}}</td>
                    <td class = "text-start" id = "product-list-name-{{$item->id}}">{{$item->name}}</td>
                    <td>{{$item->category->name}}</td>
                    <td>
                        <a href="edit-{{$item->id}}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete-{{$item->id}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <footer id="htc__footer">
        <div class="footer__container bg__cat--1">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer">
                            <h2 class="title__line--2">ABOUT US</h2>
                            <div class="ft__details">
                                <p>Enfant de l'oc??an</p>
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
                            <p>Copyright?? <a href="#">PLE Fashion</a> 2022. All
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
</body>

</html>
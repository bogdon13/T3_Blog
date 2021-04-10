<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Graduate&family=Open+Sans&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a047e9d6ce.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/navFooter.css">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/mainPage.css">
    <title>Sports Blog</title>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
        <h1 class="navbar-brand">T3 Blogs</h1>

        <!-- TOGGLE BUTTON -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- NAVBAR ELEMENTS -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <div class="navbar-nav ml-auto">
                <a href="mainPage.php"><button class="btn btn-primary" type="button">Home</button></a>
                <a href="signup.php"><button class="btn btn-primary" type="button">Sign up</button></a>
                <a href="signin.php"><button class="btn btn-primary" type="button">Login</button></a>
                <a href="postPage.php"><button class="btn btn-primary" type="button">Post a Blog</button></a>
            </div>
        </div>
    </nav>


    <!-- FEATURED ARTICLE -->
    <div class="container-fluid" id="featured-article">
        <h1>Featured Article</h1>
        <div class="card">
            <img class="card-img-top" src="testImages/featured.jpeg" alt="Card image cap">
            <div class="card-body">
                <div class="container">
                    <h3 class="card-title">Article Title</h3>
                    <p>Posted: DATE</p>
                </div>
                <div class="container d-flex align-items-center">
                    <img src="testProfileIcon/lebron.png" class="rounded-circle" id="profile-icon"></img>
                    <p class="card-text">Poster Name</p>
                </div>
                <div class="container d-flex align-items-center" style="margin-top: 10px;">
                    <p><i class="fas fa-heart"></i> LIKE_COUNT</p>
                    <p>&nbsp&nbsp&nbsp</p>
                    <p><i class="fas fa-eye"></i> VIEW_COUNT</p>
                </div>
                <a href="#" class="btn btn-primary">View Article</a>
            </div>
        </div>
    </div>


    <!-- TOP ARTICLES -->
    <div class="container" style="margin-top: 2rem;">
        <h1>Top Articles</h1>

        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sort By
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Likes</a>
              <a class="dropdown-item" href="#">Views</a>
            </div>
          </div>

    </div>

    <div class="container" id="top-articles">
        <div class="row" id="top-articles-row">

            <div class="col-sm">
                <div class="card">
                    <img class="card-img-top" src="testImages/basketball1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <div class="container">
                            <h3 class="card-title">Article Title</h3>
                            <p>Posted: DATE</p>
                        </div>
                        <div class="container d-flex align-items-center">
                            <img src="testProfileIcon/lebron.png" class="rounded-circle" id="profile-icon"></img>
                            <p class="card-text">Poster Name</p>
                        </div>
                        <div class="container d-flex align-items-center" style="margin-top: 10px;">
                            <p><i class="fas fa-heart"></i> LIKE_COUNT</p>
                            <p>&nbsp&nbsp&nbsp</p>
                            <p><i class="fas fa-eye"></i> VIEW_COUNT</p>
                        </div>
                        <a href="#" class="btn btn-primary">View Article</a>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card">
                    <img class="card-img-top" src="testImages/football1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <div class="container">
                            <h3 class="card-title">Article Title</h3>
                            <p>Posted: DATE</p>
                        </div>
                        <div class="container d-flex align-items-center">
                            <img src="testProfileIcon/brady.png" class="rounded-circle" id="profile-icon"></img>
                            <p class="card-text">Poster Name</p>
                        </div>
                        <div class="container d-flex align-items-center" style="margin-top: 10px;">
                            <p><i class="fas fa-heart"></i> LIKE_COUNT</p>
                            <p>&nbsp&nbsp&nbsp</p>
                            <p><i class="fas fa-eye"></i> VIEW_COUNT</p>
                        </div>
                        <a href="#" class="btn btn-primary">View Article</a>
                    </div>
                </div>
            </div>
            
            <div class="col-sm">
                <div class="card">
                    <img class="card-img-top" src="testImages/featured.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <div class="container">
                            <h3 class="card-title">Article Title</h3>
                            <p>Posted: DATE</p>
                        </div>
                        <div class="container d-flex align-items-center">
                            <img src="testProfileIcon/lebron.png" class="rounded-circle" id="profile-icon"></img>
                            <p class="card-text">Poster Name</p>
                        </div>
                        <div class="container d-flex align-items-center" style="margin-top: 10px;">
                            <p><i class="fas fa-heart"></i> LIKE_COUNT</p>
                            <p>&nbsp&nbsp&nbsp</p>
                            <p><i class="fas fa-eye"></i> VIEW_COUNT</p>
                        </div>
                        <a href="#" class="btn btn-primary">View Article</a>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row" id="top-articles-row">

            <div class="col-sm">
                <div class="card">
                    <img class="card-img-top" src="testImages/featured.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <div class="container">
                            <h3 class="card-title">Article Title</h3>
                            <p>Posted: DATE</p>
                        </div>
                        <div class="container d-flex align-items-center">
                            <img src="testProfileIcon/lebron.png" class="rounded-circle" id="profile-icon"></img>
                            <p class="card-text">Poster Name</p>
                        </div>
                        <div class="container d-flex align-items-center" style="margin-top: 10px;">
                            <p><i class="fas fa-heart"></i> LIKE_COUNT</p>
                            <p>&nbsp&nbsp&nbsp</p>
                            <p><i class="fas fa-eye"></i> VIEW_COUNT</p>
                        </div>
                        <a href="#" class="btn btn-primary">View Article</a>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card">
                    <img class="card-img-top" src="testImages/basketball1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <div class="container">
                            <h3 class="card-title">Article Title</h3>
                            <p>Posted: DATE</p>
                        </div>
                        <div class="container d-flex align-items-center">
                            <img src="testProfileIcon/lebron.png" class="rounded-circle" id="profile-icon"></img>
                            <p class="card-text">Poster Name</p>
                        </div>
                        <div class="container d-flex align-items-center" style="margin-top: 10px;">
                            <p><i class="fas fa-heart"></i> LIKE_COUNT</p>
                            <p>&nbsp&nbsp&nbsp</p>
                            <p><i class="fas fa-eye"></i> VIEW_COUNT</p>
                        </div>
                        <a href="#" class="btn btn-primary">View Article</a>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card">
                    <img class="card-img-top" src="testImages/football1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <div class="container">
                            <h3 class="card-title">Article Title</h3>
                            <p>Posted: DATE</p>
                        </div>
                        <div class="container d-flex align-items-center">
                            <img src="testProfileIcon/lebron.png" class="rounded-circle" id="profile-icon"></img>
                            <p class="card-text">Poster Name</p>
                        </div>
                        <div class="container d-flex align-items-center" style="margin-top: 10px;">
                            <p><i class="fas fa-heart"></i> LIKE_COUNT</p>
                            <p>&nbsp&nbsp&nbsp</p>
                            <p><i class="fas fa-eye"></i> VIEW_COUNT</p>
                        </div>
                        <a href="#" class="btn btn-primary">View Article</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="container-fluid">
            <span href="#" class="brand">T3 Blogs</span>

            <span class="float-right" id="socialMedia">
                <a href="http://instagram.com"><i class="fab fa-instagram"></i></a>
                <a href="http://facebook.com"><i class="fab fa-facebook-square"></i></a>
                <a href="http://twitter.com"><i class="fab fa-twitter-square"></i></a>
            </div>
        </div>
    </footer>

</body>

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>
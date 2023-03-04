<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photo Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,500&display=swap" rel="stylesheet">

    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Photo Gallery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Catagories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#tech">Technology</a></li>
            <li><a class="dropdown-item" href="#prog">Programming</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#nature">Nature</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- //caroseol -->
<div id="carouselExampleCaptions" class="carousel slide img-fluid">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/internet-3.jpg" class="d-block w-100 img-fluid" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Internet</h3>
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/programming-2.avif" class="d-block w-100 img-fluid" alt="..." >
      <div class="carousel-caption d-none d-md-block">
      <h3>Programming</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/nature-3.jpeg" class="d-block w-100 img-fluid" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Nature</h3>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="my-4" id="prog">
    <div class="py-4">
    <h2 class="text-center">Programming</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
<img src="images/programming-5.jpg" class="img-fluid pb-3"> 
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/programming-6.png" class="img-fluid pb-3"> 
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/programming-3.jpg" class="img-fluid pb-3"> 
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/programming-4.png" class="img-fluid pb-3"> 
            </div>
            <div class="col-lg-4 col-md-4 col-12">
<img src="images/programming-1.jpg" class="img-fluid pb-3"> 
            </div>
        </div>

    </div>

</section>
<!--technology section-->
<section class="my-4" id="tech">
    <div class="py-4">
    <h2 class="text-center">Technology</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
<img src="images/internet-1.jpg" class="img-fluid pb-3"> 
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/internet-2.webp" class="img-fluid pb-3"> 
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/internet-3.jpg" class="img-fluid pb-3"> 
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/internet-4.jpeg" class="img-fluid pb-3"> 
            </div>
            <div class="col-lg-4 col-md-4 col-12">
<img src="images/internet-5.jpeg" class="img-fluid pb-3"> 
            </div>
        </div>

    </div>

</section>

<!-- Nature section-->
<section class="my-4" id="nature">
    <div class="py-4">
    <h2 class="text-center">Nature</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
<img src="images/nature-1.png" class="img-fluid pb-3"> 
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/nature-2.jpeg" class="img-fluid pb-3"> 
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/nature-3.jpeg" class="img-fluid pb-3"> 
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/nature-4.jpg" class="img-fluid pb-3"> 
            </div>
        </div>

    </div>

</section>

<!-- contact section -->
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="about.php" method="post">
        <div class="form-group">
            <label for="">Name:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Email:</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Number:</label>
            <input type="number" name="number" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</section>

<!-- for about -->
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">About</h2>
  </div>
    <div class="container-fluid">
      <h3 class="text-center">Md Abu Taher </h3> <br>
      <p class="text-center"><b>I am a student of Computer science</b></p> <br>
    </div>
</section>

<!-- this is footer section -->
        <section>
            <div class="footer" id="Footer">
                <div class="container">
                    <div class="row py-5 ">
                        <div class="col text-center text-white">
                            <h4>Work hard in silence,let ypur success be your noise.</h4>
                            <p>Frank Ocean</p>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col text-center">
                            <div class="circle">
                                <a href="https://www.facebook.com/profile.php?id=100020162853604"><i class="fa-brands fa-facebook"></i></a>
                            </div>
                            <div class="circle">
                                <a href="https://www.youtube.com/@curiosityofprograming.8094/featured"><i class="fa-brands fa-youtube"></i></a>
                                
                            </div>
                            <div class="circle">
                                <a href="https://github.com/AbuTaher06"> <i class="fa-brands fa-github"></i></a>
                               
                            </div>
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <p>&copy; All right Reserved to Md ABU TAHER</p> 
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
  </body>
</html>
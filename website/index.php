<!DOCTYPE html>
<html lang="en">
<head>
  <title>GCES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
  </head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GCES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact us</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/building.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
    <h3>GCES Building</h3>
    <p>Peaceful With Open Space!</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="images/farewell.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Farewell</h3>
    <p>We had such a great time!</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="images/sport.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Sports Meet</h3>
    <p>Brain With Muscles!</p>
    </div>
  </div>
</div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/gces_logo.png" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h3>From Principal</h3>
<p class="py-3">GCES is a tertiary education facility in the beautiful city Pokhara. It was founded in 1998 and officially inaugurated in 1999. The college runs under the non-profitable Public Education Trust and is affiliated to Pokhara University, located inside the premises of Gandaki Boarding School (GBS), Lamachaur, Pokhara. Currently, the college offers Bachelor’s Engineering program in Software Engineering (B.E. Software) and Bachelor’s of Engineering in Computer (B.E. Computer) in Bachelor’s Level, and Master of Science in Information System Engineering (M.Sc. ISE) degree in Masters of Science (Information System Engineering) program. The college is a non-profit institution owned by the Ministry of Education—Nepal and is managed by the GBS/GCES public education trust.</p>
<a href="about.php" class="btn btn-success">check more</a>
    </div>
  </div>
  </div>
</section>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact Us</h2>
  </div>

  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" class="form-control">
      </div>
      <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Mobile </label>
        <input type="text" name="mobile" class="form-control">
      </div>
      <div class="form-group">
        <label>Comment</label>
        <textarea name="comment" class="form-control">
          </textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
      
    </form>
  </div>
  </section>

  <footer>
    <p class="p-3 bg-dark text-white text-center">Gandaki College of Engineering and Science</p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>
</html>
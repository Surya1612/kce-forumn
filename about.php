<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <title>Kce Forumn</title>
    <link rel="stylesheet" href="style.css">
<style type="text/css">

.avatar {
  border: 0.3rem solid rgba(#fff, 0.3);
  margin-top: -6rem;
  margin-bottom: 1rem;
  max-width: 9rem;
}


</style>
  </head>
  <body>
       <?php include 'sqldb.php'; ?>
       <?php include 'nav.php';?>

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/21.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/22.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/23.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <div class="container text-center my-4 bg-light">
      <h2>SERVICES</h2>
    </div>
    
    <div class="container pt-2">
      <div class="row">
   <div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card mb-4">
    <div class="view overlay">
      <img class="card-img-top" src="images/place.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <div class="card-body">

      <h4 class="card-title">Placement</h4>
      <!--Text-->
      <p class="card-text">The placement cell takes immense effort in guiding the students for their successful career.The college has active MoUs & Centers of excellence with  various industries.</p>
      <a href="https://kce.ac.in/placement/overview/" target="_blank" class="btn btn-primary mt-2">Read More</a>
    </div>
  </div>
</div>

  <div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card mb-4">
    <div class="view overlay">
      <img class="card-img-top" src="images/kce.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <div class="card-body">
      <h4 class="card-title">Centers of Excellence</h4>
      <p class="card-text">Data Science & Analytics Centre is a Centre of excellence in Karpagam College of Engineering established with a motto to train future data scientists.</p>
    <a href="https://kce.ac.in/centers-of-excellence/" target="_blank" class="btn btn-primary mt-2 ">Read More</a>
    </div>
  </div>
</div>

   <div class="col-xs-12 col-sm-6 col-md-4">
  <div class="card mb-4">
    <div class="view overlay">
      <img class="card-img-top" src="images/course.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <div class="card-body">
      <h4 class="card-title">Courses Offered</h4>
      <p class="card-text">The Department of Technical Education, Government of Tamilnadu releases advertisement for admission through the  leading News Papers .</p>
    <a href="https://kce.ac.in/courses-offered/" target="_blank" class="btn btn-primary mt-2 ">Read More</a>
    </div>
  </div>
</div>

</div>
</div>

<div class="container text-center my-4 bg-light">
      <h2>GALLERY</h2>
    </div>
<!-- Gallery -->
<div class="container">
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="images/g1.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="images/g2.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="images/g3.png"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="images/g4.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="images/g5.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="images/g6.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>
</div>
</div>

<!-- Gallery -->

<div class="container text-center my-4 bg-light" >
      <h2>OUR TEAM</h2>
    </div>
     <div class="container d-flex justify-content-center"  >
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="card mb-4 mx-auto">
        <img class="card-img-top" src="images/back.jpg"  >
        <div class="card-body text-center">
          <img class="avatar rounded-circle" src="images/s.jpg">
          <h4 class="card-title">Surya</h4>
          <h6 class="card-subtitle mb-2 text-muted">Student</h6>
          <p class="card-text">Pre final year B.Tech Information Technology student at Kce,Coimbatore</p>
          <a href="https://www.facebook.com/surya.sparky.92" target="_blank" class="p-2"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/surya_1612__?r=nametag" target="_blank" class="p-2" ><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/in/vkas-surya-84856520b" target="_blank"  class="p-2"><i class="fab fa-linkedin-in"></i></a>
          <a href="https://github.com/Surya1612" target="_blank" class="p-2"><i class="fab fa-github"></i></a>
          <a href="https://twitter.com/Surya67431276?s=09" target="_blank" class="p-2"><i class="fab fa-twitter"></i></a>
        </div>
   </div>
 </div>
 </div>



    <?php include 'footer.php';?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Kce Forumn</title>
<style type="text/css">  

body{
  font-family: Merriweather;
}


  </style>
  </head>
  <body>
      <?php include 'sqldb.php';
  ?>

  <?php include 'nav.php';
  ?>

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/11.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/12.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/13.jpg" class="d-block w-100" alt="...">
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



<div class="container my-4 " id=ques>
  <h2 class="text-center">CATEGORIES</h2>
 <div class="row my-6">


<?php 

$sql="SELECT * FROM `categories`";
$result=mysqli_query($conn,$sql);
while($cat=mysqli_fetch_assoc($result)){

  $id=$cat['category_id'];
  $name=$cat['category_name'];
  $des=$cat['category_discription'];

  echo' <div class="col-xs-12 col-sm-6 col-md-4">  
  <div class="card mb-4" >
    <div class="view overlay">
      <img class="card-img-top" src="https://source.unsplash.com/300x200/?'. $name .',programming,coding" class="card-img-top" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <div class="card-body">
      <h4 class="card-title"><a style="text-decoration:none;" href="threadlist.php?catid=' . $id . '">' . $name. '</a></h4>
      <p class="card-text">' . substr($des, 0, 90). '... </p>
      <a href="threadlist.php?catid=' . $id . '" class="btn btn-primary">Start Discussion</a>
    </div>
  </div>
</div>';
}

?>

</div>
</div>

    <?php include 'footer.php';?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>


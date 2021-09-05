  <html>
    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <style type="text/css">
        @media screen and (min-width: 1024px) and (min-height: 1320px) {
    #m1{
      display: flex;

    }
    #m2{
          width: 100px;
    }
    #m3{
      font-size: 12px;
      text-align: center;
      margin-left: 5px;
      margin-right: 5px;
    }
 }

@media screen and (min-width: 1024px) and (max-height: 1310px) {
    #m1{
      display: flex;
    }
       #m2{
          width: 100px;
    }
    #m3{
        margin-left: 10px;
      margin-right: 10px;
    }
    }
  @media screen and (min-width: 320px) and (max-height: 568px) {
   #m2{
          width: 200px;
    }
      #m5{
      margin-top: 5px;
    }
     #m6{
      margin-top: 5px;
    }
  }
    @media screen and (min-width: 280px) and (max-height: 683px) {
   #m2{
          width: 180px;
    }
    #m4{
      margin-top: 5px;
    }
  

  }
@media only screen and (min-width: 768px) {
  #m5{
      margin-top: 5px;
    }
     #m6{
      margin-top: 5px;
    }

}
@media only screen and (max-width: 600px){
    #m5{
      margin-top: 5px;
    }
     #m6{
      margin-top: 5px;
    }

}
      </style>
    </head>

    <body>
      
    </body>
  </html>
<?php 
session_start();
echo 
'
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <a class="navbar-brand " href="index.php"><img  src="images/1.png"  width="250px"></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>

       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Top Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
           $sql = "SELECT category_name, category_id FROM `categories` LIMIT 3";
           $result = mysqli_query($conn, $sql); 
           while($row = mysqli_fetch_assoc($result)){
           echo '<a class="dropdown-item" href="threadlist.php?catid='. $row['category_id']. '">' . $row['category_name']. '</a>';
          }
         echo' </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>';
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  echo ' 
       <form id="m1" method="get" action="search.php"  >
       <input class=" col-xs-2" id="m2" class="rounded" name="search"  type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary btn-sm  me-2" type="submit">Search</button>
      <p class="text-light my-0 " id="m3">Welcome '. $_SESSION['useremail']. ' </p>
        <a href="logout.php" class="btn btn-primary btn-sm ">Logout</a>
      </form>';
}
    else{
          echo' 
       <form class="d-flex" method="get" action="search.php"  >
       <input class=" col-xs-2" id="m2" class="rounded" name="search"  type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary btn-sm  me-2" type="submit">Search</button>
      </form>
      
        <div class=" gap-2 d-md-block">
      <button id="m5" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#logModal" >Login</button>
      <button id="m6" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#signModal">Signup</button>
';
     }
       echo'
       </div>
    </div>
</nav>';



include 'logModal.php';
include 'signModal.php';

if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  Your account has been created successfully.<strong>You can Login now..</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
      }
 ?>

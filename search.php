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
#back{
    background-color:blue;
}

  </style>
  </head>
  <body>

      <?php include 'sqldb.php';?>

      <?php include 'nav.php';?>

     <div class="container my-3" style="background-color: lightgrey;">
        <h1 class="py-3">Search results for <em>"<?php echo $_GET['search']?>"</em></h1>

        <?php
       $noResult = true;
        $query =$_GET['search'];
        $sql="select * from threads where match (thread_title,thread_desc) against ('$query')";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
        $id = $row['thread_id'];
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $url="thread.php?threadid=".$id;
        $noResult = false;
            echo'   <div class="result">
                        <h3><a href="'. $url. '" class="text-dark">'. $title. '</a> </h3>
                        <p>'. $desc .'</p>
                </div>  ';
        } 
        if($noResult){
            echo '<div class="jumbotron jumbotron-fluid  >
                    <div class="container">
                        <p class="" style="font-size:32px;font-weight:600">No Results Found</p>
                        <p class="lead"> Suggestions:
                          <ul >
                            <li> Make sure that all words are spelled correctly.</li>
                             <li>Try different keywords.</li>
                            <li class="pb-2">Try more general keywords.</li>
                            </ul>
                            </p>
                    </div>
                 </div> ';
                 }

        ?>

</div>

    <?php include 'footer.php';?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>

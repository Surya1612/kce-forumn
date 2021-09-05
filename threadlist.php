<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
    <style>
    #ques {
        min-height: 433px;
    }
    body{
  font-family: Merriweather;
}
    </style>
    <title>Comments-Kce Forumn</title>
</head>

<body>
      <?php include 'sqldb.php';?>
      <?php include 'nav.php'; ?>
  

    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE category_id=$id"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $catname = $row['category_name'];
          $catdesc=$row['category_discription'];
    }
    
    ?>

    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
      $th_title=$_POST['title'];
        $th_desc=$_POST['desc'];

        $th_title = str_replace("<", "&lt;", $th_title);
        $th_title = str_replace(">", "&gt;", $th_title); 

        $th_desc = str_replace("<", "&lt;", $th_desc);
        $th_desc = str_replace(">", "&gt;", $th_desc);

        $sno = $_POST['sno']; 
        $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `time`) VALUES ( '$th_title', '$th_desc', '$id', '$sno', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success!</strong> Your thread has been added! Please wait for community to respond 
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>
                  ';
        } 
    }
    ?>


    <!-- Category container starts here -->
    <div class="container my-4"style="background-color: lightgrey;">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $catname;?> forums</h1>
            <p class="lead"> <?php echo $catdesc;?></p>
            <hr class="my-4">
            <p>This is a peer to peer forum. No Spam / Advertising / Self-promote in the forums is not allowed. Do not
                post copyright-infringing material. Do not post “offensive” posts, links or images. Do not cross post
                questions. Remain respectful of other members at all times.</p>
            <a class="btn btn-success btn-lg mb-2" href="#" role="button">Learn more</a>
        </div>
    </div>


<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
echo '
 <div class="container">
            <h1 class="py-2">Ask a Public Question</h1> 
            <form action="'. $_SERVER['REQUEST_URI'].'"method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1"><b>Title</b></label>
                    <br>
                     <small id="emailHelp" class="form-text text-muted">Be specific and imagine you’re asking a question to another person</small>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                   
                </div>
                <input type="hidden" name="sno" value="'. $_SESSION["sno"]. '">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"><b>Body</b></label>
                    <br>
                    <small id="emailHelp" class="form-text text-muted">Include all the information someone would need to answer your question</small>
                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success  mt-2">Submit</button>
            </form>
        </div>';
    }
    else{

        echo'  <div class="container">
        <h1 class="py-2">Start a Discussion</h1> 
           <p class="lead">You are not logged in. Please login to  start a Discussion.</p>
        </div>
        ';
    }
    
?>
    
    <div class="container mb-5" id="ques">
        <h1 class="py-2">Browse Questions</h1>
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id"; 
    $result = mysqli_query($conn, $sql);
    $noResult = true;
    while($row = mysqli_fetch_assoc($result)){
        $noResult = false;
        $id = $row['thread_id'];
        $title = $row['thread_title'];
        $desc = $row['thread_desc']; 
        $time=$row['time'];
        $thread_user_id=$row['thread_user_id'];

        $sql2 = "SELECT user_email FROM `users` WHERE sno='$thread_user_id'";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2);




        echo '<div class="media my-3">
            <img src="images/download.png" width="54px" class="mr-3" alt="...">
            <div class="media-body">
             <p class="font-weight-bold my-0">'.$row2['user_email'].' at '.$time.'</p>
            
             <h5 class="mt-0"> <a class="text-dark" href="thread.php?threadid=' . $id. '">'. $title . ' </a></h5>
                '. $desc . '
                </div>.
        </div>';

        }
        if($noResult){
            echo '<div class="jumbotron jumbotron-fluid" style="background-color:lightgrey;">
                    <div class="container">
                        <p class="" style="font-size:32px;font-weight:600">No Questions Found</p>
                        <p class="lead"> Be the first person to ask a question</p>
                    </div>
                 </div> 
                   </div>';
        }
    ?>
</div>
  

    <?php include 'footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
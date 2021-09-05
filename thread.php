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
        #ques{
            min-height: 433px;
        }
        body{
  font-family: Merriweather;
}
    </style>
    <title>Questions-kce forumn</title>
</head>

<body>
      <?php include 'sqldb.php';?>
    
  <?php include 'nav.php';?>

 <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `threads` WHERE thread_id=$id"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_user_id = $row['thread_user_id'];

        $sql2 = "SELECT user_email FROM `users` WHERE sno='$thread_user_id'";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2);
        $posted_by=$row2['user_email'];
    }
    ?>


      <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
        $comment = $_POST['comment']; 

        $comment = str_replace("<", "&lt;", $comment);
        $comment = str_replace(">", "&gt;", $comment); 
        $sno = $_POST['sno']; 
        $sql = "INSERT INTO `comments` ( `comment_content`, `thread_id`, `comment-by`, `comment_time`) VALUES ('$comment', '$id', '$sno', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success!</strong> Your comment has been added!
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
        } 
    }
    ?>



<div class="container my-4">
        <div class="jumbotron " style="background-color: lightgrey;">
            <h1 class="display-6" style="font-family:;"> <?php echo $title;?></h1>
            <p class="lead" style="margin-left: 10px"> <?php echo $desc;?></p>
            <hr class="my-6">
            <p style="margin-left: 10px">This is a peer to peer forum. No Spam / Advertising / Self-promote in the forums is not allowed. Do not
                post copyright-infringing material. Do not post “offensive” posts, links or images. Do not cross post
                questions. Remain respectful of other members at all times.</p>
          <p class="p-2">Posted by : <b><?php echo $posted_by?></b></p>
        </div>
    </div>

<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo '
    <div class="container" id="ques">
        <h1 class="py-2">Your Answer</h1>
        <form action="'. $_SERVER['REQUEST_URI'].'" method="post">
                        <div class="form-group">
                    <label for="exampleFormControlTextarea1">Know someone who can answer? Share a link to this question via <a href="https://www.google.com/gmail/about/"> email</a>, <a href="https://twitter.com/login?lang=en">Twitter</a>, or <a href="https://www.facebook.com/">Facebook.</a></label>
                    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                  <input type="hidden" name="sno" value="'. $_SESSION["sno"]. '">
                </div>
                <button type="submit" class="btn btn-success mt-2">Post Comment</button>
            </form>
        </div>';
    }  else{

        echo'  <div class="container"  >
        <h1 class="py-2">Post a Comment</h1> 
           <p class="lead">You are not logged in. Please login to  Post a comment.</p>
        </div>
        ';
    }
?>


   <div class="container mb-5" id="ques">
        <h1 class="py-2">Discussions</h1>
       <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `comments` WHERE thread_id=$id"; 
    $result = mysqli_query($conn, $sql);
    $noResult = true;
    while($row = mysqli_fetch_assoc($result)){
        $noResult = false;
        $id = $row['comment_id'];
        $content = $row['comment_content']; 
        $comment_time = $row['comment_time']; 
        $thread_user_id = $row['comment-by'];  

        $sql2 = "SELECT user_email FROM `users` WHERE sno='$thread_user_id'";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2);

        echo '<div class="media my-3">
            <img src="images/download.png" width="54px" class="mr-3" alt="...">
            <div class="media-body">
               <p class="font-weight-bold my-0"><strong>'. $row2['user_email'] .' </strong> at <strong>'. $comment_time. '</strong></p> '. $content . '
            </div>
        </div>';

        }
        if($noResult){
            echo '<div class="jumbotron jumbotron-fluid" style="background-color:lightgrey;">
                    <div class="container">
                        <p class=" " style="font-size:32px;font-weight:600">No Comments Found</p>
                        <p class="lead"> Be the first person to comment</p>
                    </div>
                 </div> ';
        }
    
    ?>
</div>



    <?php include 'footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
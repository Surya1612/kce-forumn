<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Kce Forumn</title>

  </head>
  <body>
         <?php include 'sqldb.php';
  ?>
  <?php include 'nav.php';?>
<div class="content bg-white text-dark" >
  <h1 class="text-center mt-4">Contact us</h1>
</div>
<section class="container mt-5">
  
   <div class="row">
   
      <div class="col-sm-12 mb-4 col-md-5">
        
         <div class="card border-primary rounded-0">
            <div class="card-header p-0">
               <div class="bg-primary text-white text-center py-2">
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                  <h3> Write to us:</h3>
               </div>
            </div>
            <div class="card-body p-3">
               <form action="handlecontact.php" method="post">
                  <div class="form-group mb-2">
                  <label> Your name </label>
                  <div class="input-group">
                     <input value="" type="text" name="name" id="name" class="form-control" id="inlineFormInputGroupUsername" placeholder="Your name">
                  </div>
        </div>
                  <div class="form-group mb-2">
                     <label>Your email</label>
                     <div class="input-group mb-2 mb-sm-0">
                        <input type="email" value="" id="email" name="email" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email">
                     </div>
                  </div>
                  <div class="form-group mb-2">
                     <label>Subject</label>
                     <div class="input-group mb-2 mb-sm-0">
                        <input type="text" name="subject" id="subject" class="form-control" id="inlineFormInputGroupUsername" placeholder="Subject">
                     </div>
                  </div>
                  <div class="form-group mb-2">
                     <label>Message</label>
                     <div class="input-group mb-2 mb-sm-0">
                        <input type="text" class="form-control"  id="msg" name="msg">
                     </div>
                  </div>
                  <div class="text-center py-2">
                     <input type="submit" name="submit" value="submit" class="btn btn-primary btn-block rounded-0 py-2">
                  </div>
             </form>
           </div>
          
            </div>
         </div>
  
      <div class="col-sm-12 col-md-7">
    
         <div class="mb-4">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.098582665731!2d77.02017971428772!3d10.88010616024771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba84ffc9b3ea755%3A0xda7508a90583d22f!2sKarpagam%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1628776125101!5m2!1sen!2sin" width="100%" height="440" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

         </div>
  
         <div class="row text-center">
            <div class="col-md-4">
               <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
               
            </div>
            <div class="col-md-4">
               <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
              
            </div>
            <div class="col-md-4">
               <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
               
            </div>
         </div>
      </div>

      </div>
</section>

    <?php include 'footer.php';?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
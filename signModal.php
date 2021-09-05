<html>
<head>
<style type="text/css">
body{
  font-family: Merriweather;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

 </style>  
</head>
<body>

<!-- Modal -->
<div class="modal fade" id="signModal" tabindex="-1" aria-labelledby="signModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signModalLabel">Login</h5>

      

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form  action="signuphandle.php" method="post">
      <div class="modal-body">
     <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
    
        <div class="mb-3">
         <label for="exampleInputEmail1" name="uname" class="form-label">Username</label>
         <input type="text" class="form-control" id="signupEmail" name ="signupEmail" aria-describedby="emailHelp">
       </div>
  <div class="mb-3">
        <label for="exampleInputPassword1" name="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="signupPassword" name="signupPassword">
  </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" name="confirmpassword" class="form-label">ConfirmPassword</label>
        <input type="password" class="form-control" id="signupcPassword" name="signupcPassword">
  </div>
 
  <button type="submit" class="btn btn-primary">Signup</button>

      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
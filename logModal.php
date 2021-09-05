<html>
<head>
<style type="text/css">
body{
  font-family: Merriweather;
}
 </style>  
</head>
<body>

<!-- Modal -->
<div class="modal fade" id="logModal" tabindex="-1" aria-labelledby="logModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logModalLabel">Login</h5>

      

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      

      <div class="modal-body">
        <form  action="handlelogin.php" method="post">
        <div class="mb-3">
         <label for="loginEmail" >Usename</label>
         <input type="text" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="emailHelp">
      
       </div>

  <div class="mb-3">
        <label for="loginPass">Password</label>
        <input type="password" id="loginPass" name="loginPass" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    


    </div>
  </div>
</div>
</body>
</html>
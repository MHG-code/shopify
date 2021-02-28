<!DOCTYPE html>
<html>
<head>
   <title>Login</title>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
   .login {
    font-family: "Lato", sans-serif;
    height: 100%;
}

.sidenav {
    height: 183%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}

.main{
   padding-top: 20%;
}

.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
</style>
</head>
<body>
<div class="row login">
   <div class="col-6 col-md-6 col-lg-4 col-xl-4">
      <div class="sidenav">
         <div class="login-main-text">
            <h2>Login<br> as admin</h2>
            <p>Login here to access your website.</p>
         </div>
      </div>
   </div>

   <div class="col-6 col-md-6 col-lg-8 col-xl-8">
      <div class="main">
         <div class="col-md-4 col-sm-12">
            <div class="login-form">
               <form action="<?= base_url()?>/admin/login" method="post">
                  <div class="form-group">
                     <label>Id</label>
                     <input type="text" class="form-control" name="id" placeholder="Enter your given Id">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
                  
               </form>
            </div>
         </div>
      </div>
   </div>
   
</div>
</body>
</html>
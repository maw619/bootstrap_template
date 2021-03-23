<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
   
    <link href="public\css\bootstrap.min.css" rel="stylesheet">
    <link href="public\css\my.css" rel="stylesheet">
    <link href="public\css\main.css" rel="stylesheet">
    <link href="public\css\animate.css" rel="stylesheet">
    


    <title>Document</title>
<style>

.mb-4{
    transition-duration: 5s;   
}    
.mb-4:hover{
    border: 1px solid yellow;
    transition-duration: 2s;  
}
</style>
</head>



<body>

<section class="slider" id="slider">
<div class="content text-center">

  <form class="form-signin">
    <img class="mb-4" src="public\images\holly.jpg" alt="" width="100" height="100"; style="border-radius:50%; opacity: 0.5;">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="user">
      <label for="floatingInput">User Name</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
  </form>

            </div>
            <div id="particles-js" class="particels"></div>
</section>
<!-- JavaScript Bundle with Popper -->
<script src="public\js\particles.min.js" ></script>
<script src="public\js\bootstrap.min.js" ></script>
<script src="public\js\main.js" ></script>
<script src="public\js\app.js" ></script>

</body>
</html>
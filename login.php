<?php
    //require_once "header.php";
    session_start()
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Poor Developed Fund Login</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="re_css/starlight.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">P D F <span class="tx-info tx-normal">Admin</span></div>
        <div class="tx-center mg-b-60">Poor Developed Fund Login</div> 

        <?php if(isset($_SESSION['reg_success'])): ?>
          <div class="alert alert-success ">
            <?= $_SESSION['reg_success'] ?>
          </div>
        <?php endif; ?>

        <?php if(isset($_SESSION['login_err'])): ?>
          <div class="alert alert-danger">
            <?= $_SESSION['login_err'] ?>
          </div>
        <?php endif; ?>

        <form action="login_post.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter your email" name="email" value="<?=isset($_SESSION['reg_email_address']) ? $_SESSION['reg_email_address']:'' ?>">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your password" name="password">
          <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block">Login</button>
          </form>
        <div class="mg-t-60 tx-center">Register? <a href="register.php" class="tx-info">Click Here</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>

  </body>
</html>

<!-- Added work -->
<?php if(isset($_SESSION['add_status'])): ?>
<script>
  Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})

</script>
  <?php endif; 
  unset($_SESSION['add_status']); ?>
<!-- Added work end-->

<?php
      session_unset()
 ?>
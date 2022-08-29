<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Admin Register</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="re_css/starlight.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v ">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white port_register">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Personal Website <br><span class="tx-info tx-normal">Admin</span></div>
        <div class="tx-center mg-b-60">Admin Register</div>

    <form action="register_post.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control <?=(isset($_SESSION['name_err'])) ? 'is-invalid':'' ?>" name="name" placeholder="Enter your name" value="<?= (isset($_SESSION['old_name'])) ? $_SESSION['old_name']:'' ?>" >     
          <?php if(isset($_SESSION['name_err'])) : ?>
                <small class="text-danger"><?=$_SESSION['name_err']?></small>
            <?php endif;?>

        </div><!-- form-group -->
        <div class="form-group">
        <input type="email" class="form-control <?=(isset($_SESSION['email_err'])) ? 'is-invalid':'' ?>" name="email" placeholder="Enter your email" value="<?= (isset($_SESSION['old_email'])) ? $_SESSION['old_email']:'' ?>">
            
            <?php if(isset($_SESSION['email_err'])) : ?>
                <small class="text-danger"><?=$_SESSION['email_err']?></small>
            <?php endif;?>

        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control <?=(isset($_SESSION['password_err'])) ? 'is-invalid':'' ?>" name="password" placeholder="Enter your password">
       
            <?php if(isset($_SESSION['password_err'])) : ?>
                <small class="text-danger"><?=$_SESSION['password_err']?></small>
            <?php endif;?>

        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control <?=(isset($_SESSION['confirm_password_err'])) ? 'is-invalid':'' ?>" name="confirm_password" placeholder="Enter your confirm password">
        
            <?php if(isset($_SESSION['confirm_password_err'])) : ?>
                <small class="text-danger"><?=$_SESSION['confirm_password_err']?></small>
            <?php endif;?>

            <?php if(isset($_SESSION['password_match_err'])) : ?>
                <small class="text-danger"><?=$_SESSION['password_match_err']?></small>
            <?php endif;?>

        </div><!-- form-group -->
        <div class="form-group">
          <label for="">Gender:</label>
          <label for="">
              <input type="radio" name="gender" value="male"<?= (isset($_SESSION['old_gender']) && $_SESSION['old_gender'] == 'male') ? 'checked' : '' ?>>
              <span>Male </span>
              <input type="radio" name="gender" value="female"<?= (isset($_SESSION['old_gender']) && $_SESSION['old_gender'] == 'female') ? 'checked' : '' ?>>
              <span>Female </span>
              <input type="radio" name="gender" value="others"<?= (isset($_SESSION['old_gender']) && $_SESSION['old_gender'] == 'others') ? 'checked' : '' ?>>
              <span>Others</span>
          </label>

            <?php if(isset($_SESSION['gender_err'])) : ?>
               <br/> <small class="text-danger"><?=$_SESSION['gender_err']?></small>
            <?php endif;?>

        </div><!-- form-group -->
        
        
        <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
        <button type="submit" class="btn btn-info btn-block">Sign Up</button>
    </form>
        <div class="mg-t-40 tx-center">Already have an account? <a href="login.php" class="tx-info">Sign In</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->
    
    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

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

  </body>
</html>
<?php session_unset(); ?>

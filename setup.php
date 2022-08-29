<?php
  session_start();
  require_once "database.php";
  $setup = true;
  require_once "header.php";
?>

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Portfolio Website</a>
        <a class="breadcrumb-item" href="index.html">Professional Experiance Section</a>
      </nav>

      <div class="sl-pagebody bg_color_menu">
        <div class="sl-page-title">
          <h5 class="font_color" style="color: #fff;">Professional Experiance Section</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40 bg_color color_text">
          <h6 class="card-body-title" style="color: #fff;">Add Professional Experiance Section</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
        
          <form action="setup_post.php" method="post" enctype="multipart/form-data">

          <div class="form-layout">
            <div class="row mg-b-25">

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Name : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="authors_name" value="<?=setup('setups','authors_name')?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="email" name="email" value="<?=setup('setups','email')?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Birth Day : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="birth_day" value="<?=setup('setups','birth_day')?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Age : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="age" value="<?=setup('setups','age')?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Degree : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="degree" value="<?=setup('setups','degree')?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Phone Number : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="phone_number" value="<?=setup('setups','phone_number')?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">city : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="city" value="<?=setup('setups','city')?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Website : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="website" value="<?=setup('setups','website')?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Freelance : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="freelanc" value="<?=setup('setups','freelanc')?>">
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
            <div class="form-layout-footer">
              <button type="submit" class="btn btn-info mg-r-5">Add setup</button>
            </div><!-- form-layout-footer -->
        </form>
    </div><!-- form-layout -->
         
</div><!-- card -->

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

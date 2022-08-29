
<?php
  session_start();
  require_once "database.php";
  $header_part = true;
  require_once "header.php";
  ?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Portfolio Website</a>
        <a class="breadcrumb-item" href="index.html">Hiro Section</a>
      </nav>

      <div class="sl-pagebody bg_color_menu">
        <div class="sl-page-title">
          <h5 class="font_color" style="color: #fff;">Hiro Section</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40 bg_color color_text">
          <h6 class="card-body-title" style="color: #fff;">Add Hiro Section</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
        
          <form action="header_part_post.php" method="post" enctype="multipart/form-data">

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Main Image: <span class="tx-danger">*</span></label>
                  <input class="form-control color_form" type="file" name="main_img">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Name : <span class="tx-danger">*</span></label>
                  <input class="form-control color_form" type="text" name="name" placeholder="Enter Your Name :">

                  <?php if(isset($_SESSION['name_err'])) :?>
                  <small class="text-danger"><?= $_SESSION['name_err'] ?></small>
                  <?php endif?>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Designation : <span class="tx-danger">*</span></label>
                  <input class="form-control color_form" type="text" name="about_me">

                  <?php if(isset($_SESSION['about_err'])) :?>
                  <small class="text-danger"><?= $_SESSION['about_err'] ?></small>
                  <?php endif?>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->

            <div class="form-layout-footer">
              <button type="submit" class="btn btn-info mg-r-5">Add Experiance</button>
            </div><!-- form-layout-footer -->
        </form>
            <hr>
              <h6>Hiro Section</h6>
              <table class="table">
                <thead>
                  <tr>
                    <th class="text-center">Main Image :</th>
                    <th class="text-center">Name :</th>
                    <th class="text-center">Designation :</th>
                    <th class="text-center">Edite/Delete</th>
                  </tr>
                </thead>
          <?php foreach(query_port("header_part") as $single_header) : ?>
                <tbody class="tr_color">
                  <tr class="tr_color">
                  <td class="text-center"><img src="assets/img/<?= $single_header['main_img'] ?>" alt="not found" width="100"></td>
                    <td class="tr_color td_text text-center"><?= $single_header['name'] ?></td>
                    <td class="td_text text-center"><?= $single_header['about_me'] ?></td>
                    <td class="tr_color td_text text-center">
                     <a id="header_delete.php?id=<?= $single_header['id'] ?>" class="btn btn-sm btn-danger delete_btn"><i class="far fa-edit"></i>Delete</a>
                    </td>
                  </tr>
                </tbody>
              <?php endforeach ?>
        </table>
    </div><!-- form-layout -->
         
</div><!-- card -->

<?php
    require_once "footer.php";
    unset($_SESSION["'about_err','name_err'"]);
?>
<!-- Deleted work -->
<?php if(isset($_SESSION['delete_status'])): ?>
  <script>
    Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been deleted',
  showConfirmButton: false,
  timer: 1500
})
  </script>
<?php endif;
      unset($_SESSION['delete_status']); ?>
<!-- Deleted work end -->

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

<!-- Confirmation delete work start -->
<script>
   $('.delete_btn').click(function(){
    var link = ($(this).attr('id'));
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = link;
  }
})
    });
</script>
<!--Confirmation Deleted work end -->


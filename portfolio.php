<?php
  session_start();
  require_once "database.php";
  $portfolio = true;
  require_once "header.php";
  ?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Portfolio Website</a>
        <a class="breadcrumb-item" href="index.html">Portfolio Section</a>
      </nav>

      <div class="sl-pagebody bg_color_menu">
        <div class="sl-page-title">
          <h5 class="font_color" style="color: #fff;">Portfolio Section</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40 bg_color color_text">
          <h6 class="card-body-title" style="color: #fff;">Add Portfolio Section</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
        
          <form action="portfolio_post.php" method="post" enctype="multipart/form-data">

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
                  <label class="form-control-label">Title : <span class="tx-danger">*</span></label>
                  <input class="form-control color_form" type="text" name="name" placeholder="Enter Your Name :">

                  <?php if(isset($_SESSION['name_err'])) :?>
                  <small class="text-danger"><?= $_SESSION['name_err'] ?></small>
                  <?php endif?>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->

            <div class="form-layout-footer">
              <button type="submit" class="btn btn-info mg-r-5">Add Portfolio</button>
            </div><!-- form-layout-footer -->
        </form>
            <hr>
              <h6>Portfolio Section</h6>
              <table class="table">
                <thead>
                  <tr>
                    <th class="tr_color td_text text-center">Main Image :</th>
                    <th class="tr_color td_text text-center">Title :</th>
                    <th class="tr_color td_text text-center">Edite/Delete</th>
                  </tr>
                </thead>
          <?php foreach(query_port("portfolio") as $single_portfolio) : ?>
                <tbody class="tr_color">
                  <tr class="tr_color">
                  <td class=" td_text text-center"><img src="assets/img/portfolio/<?= $single_portfolio['main_img'] ?>" alt="not found" width="100"></td>
                    <td class="tr_color td_text text-center"><?= $single_portfolio['name'] ?></td>
                    <td class="td_text text-center">
                     <a id="portfolio_delete.php?id=<?= $single_portfolio['id'] ?>" class="btn btn-sm btn-danger delete_btn"><i class="far fa-edit"></i>Delete</a>
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


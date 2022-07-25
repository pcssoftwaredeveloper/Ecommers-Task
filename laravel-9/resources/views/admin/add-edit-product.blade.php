<style type="text/css">
.file{
  *,
}
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.file {
  margin: 0;
  padding: 2rem 1.5rem;
  font: 1rem/1.5 "PT Sans", Arial, sans-serif;
  color: #5a5a5a;
}
}
</style>
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $heading; ?>  </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('#');?>');?>">Home</a></li>
              <li class="breadcrumb-item active"><?= $heading; ?></li>
              <li><?php $message = $this->session->flashdata('msg');
                if (isset($message)) { ?>
                 <div class="justify-content-center text-white bg-green p-2 rounded" id="msg">  <?= $this->session->flashdata('msg'); ?></div><?php
                    $this->session->unset_userdata('msg');
                } ?>
              </li>
          </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php 
      if($id!=="")
      {
        $name = $records->productname;
        $quantity = $records->quantity;
        $price = $records->price;
        $status = $records->status;
        $description = $records->description;
        $img = $records->pr_image;
      }else{
        $name = "";
        $quantity = "";
        $price = "";
        $status = "";
        $description = "";
        $img = "";
      }
     ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- You can create form here -->
        <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
      </div>
      <div class="card card-warning">
        <div class="card-header">
        <h3 class="card-title"><?= $heading; ?></h3>
        <?php echo $activePage = $this->uri->segment(3);?>
        <h3 class="card-title float-right"><a href="<?= base_url('admin/add_edit_product/view_product'); ?>">View Product</a></h3>
        </div>
        <div class="card-body">
          <form id="add-edit-product" method="post" action="<?= base_url('admin/add_edit_product/add_edit_save_product');?>" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $this->input->get('id'); ?>">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Product Name</label>
                  <input type="text" name="productname" id="productname" class="form-control" placeholder="Product Name" value="<?= $name; ?>">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Quantity</label>
                  <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Quantity" value="<?= $quantity; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Price</label>
                  <input type="text" name="price" id="price" class="form-control" placeholder="Quantity" value="<?= $price; ?>" >
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status" id="status">
                    <option value="1" <?php echo ($status == 1)?'selected':''; ?>>Published</option>
                    <option value="0" <?php echo ($status == 0)?'selected':''; ?>>Draft</option>                    
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description...."><?= $description; ?></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="formFileLg" class="form-label">Upload Product Image</label>
                  <input class="form-control form-control-lg" id="formFileLg" type="file" name="pr_image[]" />
                  <input type="hidden" name="old_img" value="<?php echo $img; ?>" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="card-footer">
                  <button type="submit" id="butsave" class="btn btn-default float-left">Cancel</button>
                  <input type="submit" class="btn btn-info float-right" value="<?php if($row!==""){ echo $heading; }else{ echo "Submit"; } ?>">
                </div>
              </div>
            </div>
          </form>      
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- jquery validation -->
<script src="<?= base_url('assets/admin/dist/js/jquery.min.js');?>"></script>

<script src="<?= base_url('assets/admin/dist/js/jquery.validate.js');?>"></script>
<script>
 
    // validate the comment form when it is submitted
   //$("#add-edit-product").validate();

    // validate signup form on keyup and submit
    $("#add-edit-product").validate({
      rules: {
        productname:{
          required: true,
        } ,
        quantity:{
          required: true,
        },
        price: {
          required: true,
          minlength: 2
        },
        status: {
          required: true,
          // minlength: 5
        },
        confirm_password: {
          required: true,
          minlength: 5,
          equalTo: "#password"
        },
        email: {
          required: true,
          email: true
        },
        description: {
          required: "#newsletter:checked",
          minlength: 2
        },
        agree: "required"
      },
      messages: {
        productname: "Please enter your product name!.",
        quantity: "Please enter quantity!.",
        price: "Please enter price!.",
          // minlength: "Your username must consist of at least 2 characters"
        },
        status: "Please select status!.",
        
        confirm_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long",
          equalTo: "Please enter the same password as above"
        },
        email: "Please enter a valid email address",
        agree: "Please accept our policy",
        description: "Please enter description!."
      })
    //});

    setTimeout(function(){
  if ($('#msg').length > 0) {
   // $('#msg').remove();
   $('#msg').fadeOut('slow');
  }
}, 5000)



//     $("form").on("change", ".file-upload-field", function(){ 
//     $(this).parent(".file-upload-wrapper").attr("data-text",         $(this).val().replace(/.*(\/|\\)/, '') );
// });
</script>
  <!-- Main Footer -->
  

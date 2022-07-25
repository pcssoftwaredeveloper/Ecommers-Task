<style type="text/css">
  .button7 {
  background-color:#3369ff; 
  border-radius: 8px;
  border: none;
  color: white;
  padding: 10px 28px;
  margin-right: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-family:'Roboto',sans-serif;
  box-shadow:inset 0 -0.6em 1em -0.35em rgba(0,0,0,0.17),inset 0 0.6em 2em -0.3em rgba(255,255,255,0.15),inset 0 0 0em 0.05em rgba(255,255,255,0.12);
}
 .button7:hover{
  color: white;
 }
@media all and (max-width:30em){
 .button7{
  display:block;
  margin:0.4em auto;
 }
}

#search_input{
  padding: 21px;
}
</style>   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $heading; ?></h1>
          </div><!-- /.col -->          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('#');?>');?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
              <li>
                <?php $message = $this->session->flashdata('msg');
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- You can create form here -->
      </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card"> 
              <div class="card-header">
              <h3 class="card-title">View Products</h3>
              <div class="float-right"><input type="text" name="search" id="search_input" placeholder="Search..." class="form-control" ></div>
              <div class="float-right"><a href="<?= base_url('admin/add_edit_product'); ?>" class="button7">Add Product</a></div>
              </div>
              <form>
                <div class="card-body">
                  <table class="table table-hover table-bordered text-center" >
                    <thead class="thead-dark">
                      <tr>                        
                        <th scope="col">Sr.no</th>
                        <th scope="col">Product name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Description</th>
                        <th scope="col" colspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody id="myTable">

                      <?php 
                      if($view_products){
                        $i = 1; foreach ($view_products as $value) { 
                        $id = $value['id'];
                         $name = $value['productname'];
                         $qty = $value['quantity'];
                         $price = $value['price'];
                         $status = $value['status'];
                         $desc = $value['description'];
                         $image = $value['pr_image'];
                        ?>
                      
                      <tr class="ser">
                        <td><?= $i++; ?></td>
                        <td><?= $name; ?></td>
                        <td><?= $qty; ?></td>
                        <td><?= $price; ?></td>
                        <td><img src="<?= base_url('uploads/'.$image);?>" width="100" height="100"></td>
                        <td <?php echo ($status == 1)? "style='color:green;'" : "style='color:red;'"; ?>><?php echo ($status == 1)? 'Published':'Draft'; ?></td>
                        <td><?= $desc; ?></td>
                        <td><a href="<?= base_url("admin/add_edit_product/index?id=".$id);?>"><i class="fa fa-edit" style="font-size:18px; color:green"></i></a>&nbsp;&nbsp; | &nbsp;&nbsp;<a href="#" data-id="<?= $value['id']; ?>" data-toggle="modal" data-target="#editModel" class="view_products"><i class="fa fa-eye" style="font-size:18px; color:#1a73e8;"></i></a>&nbsp;&nbsp; | &nbsp;&nbsp;<a href="<?= base_url('admin/add_edit_product/add_edit_save_product?del_id='.$id);?>" onclick="return confirm('Are sure delete product')"><i class="fa fa-trash" style="font-size:18px; color:red"></i></a> </td>
                      </tr>
                      <?php } 
                      }else{
                        echo "<tr><td colspan='7'>No data Fond</td></tr>";
                      }
                      ?>
                               
                    </tbody>
                    <tfoot class="thead-dark">
                      <tr>
                        <th scope="col">Sr.no</th>
                        <th scope="col">Product name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                         <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Description</th>
                        <th scope="col" colspan="2">Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div> 
                <div class="card-footer">
                  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div><!--/. container-fluid -->
  </section>
</div>
  <!-- View product popup -->

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
<!-- Modal -->
<div class="modal fade" id="editModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
    </div>
  </div>
</div>
<!-- End View product popup -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
   $(document).ready(function(){
  $("#search_input").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr:not('.no-records')").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
    var trSel =  $("#myTable tr:not('.no-records'):visible")
    // Check for number of rows & append no records found row
    if(trSel.length == 0){
        $("#myTable").html('<tr class="no-records"><td colspan="7">No record found.</td></tr>')
    }
    else{
        $('.no-records').remove()
    }

  });
});  

setTimeout(function(){
  if ($('#msg').length > 0) {
   // $('#msg').remove();
   $('#msg').fadeOut('slow');
  }
}, 5000)
      
$('.view_products').on('click',function () {
    var id = $(this).attr('data-id');
    var url = "<?= base_url('admin/add_edit_product/view_product_popup?p_view=')?>"+id;
    var modal = $("#editModel");
   
     modal.find('.modal-content').load(url);
  });
  </script>

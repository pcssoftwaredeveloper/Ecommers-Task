<section class="content">
      <div class="container-fluid">
        <!-- You can create form here -->
        <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
      </div>
      <div class="card card-warning">
        <div class="card-header">
        <h3 class="card-title"><?php echo $heading; ?></h3>
        <h3 class="card-title float-right"><a href="http://localhost/eshoper/admin/add_edit_product/view_product">View Product</a></h3>
        </div>
        <div class="card-body">
          <form id="add-edit-product" method="post" action="<?= base_url('admin/add_edit_product/add_edit_category');?>" enctype="multipart/form-data" novalidate="novalidate">
            <input type="hidden" name="id" value="">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Category Name</label>
                  <input type="text" name="productname" id="productname" class="form-control" placeholder="Product Name" value="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Sub category name</label>
                  <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Quantity" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status" id="status">
                    <option value="1">Published</option>
                    <option value="0" selected="">Draft</option>                    
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description...."></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="formFileLg" class="form-label">Upload Product Image</label>
                  <input class="form-control form-control-lg" id="formFileLg" type="file" name="pr_image">
                  <input type="hidden" name="old_img" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="card-footer">
                  <button type="submit" id="butsave" class="btn btn-default float-left">Cancel</button>
                  <input type="submit" class="btn btn-info float-right" value="Add Product">
                </div>
              </div>
            </div>
          </form>      
        </div>
      </div>
    </div></section>
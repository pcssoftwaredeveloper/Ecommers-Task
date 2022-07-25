
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ECommerce shopping</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ 'css/adminlte.min.css';  }}">
</head>
<body>
<div class="card container main">  
	<div class="content-header">
      <div class="container-fluid">
        <div class="row md-12">
          <div class="col-sm-12 card-header">
            <h1 class="m-0">Add Product  </h1>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
	<section class="content">
      <div class="container-fluid">
        <!-- You can create form here -->
        <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
      </div>
      <div class="card card-warning container">
        <div class="card-header">
        <h3 class="card-title">Add Product  </h3>
        <h3 class="card-title float-right"><a href="{{ url('product_list') }}">View Product</a></h3>
        </div>
        <div class="card-body">
          <form id="add-edit-product" method="POST" action="{{ url('/register_api/') }}" enctype="multipart/form-data" novalidate="novalidate">@csrf
            <input type="hidden" name="id" value="@if(isset($product->id)){{ $product->id }} @endif">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Product Name</label>
                  <input type="text" name="name" id="tname" class="form-control" placeholder="Product Name" value=" @if(isset($product->name)){{ $product->name }} @endif">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Quantity</label>
                  <input type="text" name="qty" id="qty" class="form-control" placeholder="Quantity" value=" @if(isset($product->quantity)) {{ $product->quantity }} @endif">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Price</label>
                  <input type="text" name="price" id="price" class="form-control" placeholder="Price" value="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status" id="status">
                    <option value="1"  @if(isset($product->status)) {{ $product->status==1?'selected':'' }} @endif >Published</option>
                    <option value="0" @if(isset($product->status))  {{  $product->status==0?'selected':'' }} @endif >Draft</option>                    
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description....">@if(isset($product->description)) {{ $product->description }} @endif</textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="formFileLg" class="form-label">Upload Product Image</label>
                  <input class="form-control form-control-lg" id="formFileLg" type="file" name="image">
                  <input type="hidden" name="old_img" value="@if(isset($product->image)) {{ $product->image }} @endif">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="card-footer">
                  <button type="submit" id="butsave" class="btn btn-default float-left cancel">Cancel</button>
                  <input type="submit" class="btn btn-info float-right save" value="Add Product">
                </div>
              </div>
            </div>
          </form>      
        </div>
      </div>
    </div></section>
  </div>
</body>
</html>

<style type="text/css">
  body {
    background-color: #f4f6f9;
}
	.content-header {
    padding: 15px 0.5rem;
}
.card {
    box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px -3px rgb(0 0 0 / 20%);
    margin-bottom: 1rem;
}
.card-warning:not(.card-outline)>.card-header, .card-warning:not(.card-outline)>.card-header a {
    color: #1f2d3d;
}
.card-warning:not(.card-outline)>.card-header {
    background-color: #ffc107;
}
.card-header {
    background-color: transparent;
    border-bottom: 1px solid rgba(0,0,0,.125);
    padding: 0.75rem 1.25rem;
    position: relative;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}
.card-title {
    float: left;
    font-size: 1.1rem;
    font-weight: 400;
    margin: 0;
}
.float-right {
    float: right!important;
}
.float-sm-right {
    float: right!important;
}
.form-group {
    margin-bottom: 1rem;
}
.card.container.main {
    margin-top: 3%;
}
.card-warning:not(.card-outline)>.card-header {
    background-color: #ffc107;
    margin: 0 -13px;
}
.card-footer {
    margin: 0 -29px;
    margin-top: 27px;
}
.card-footer , .cancel {
    margin-top: 10px;
    color: var(--bs-btn-hover-color);
    background-color: var(--bs-btn-hover-bg);
    border-color: var(--bs-btn-hover-border-color);
}
.card-footer , .save{
margin-top: 10px;
}

</style>
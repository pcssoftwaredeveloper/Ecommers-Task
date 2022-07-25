<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ 'css/adminlte.min.css'; }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="content-wrapperr" style="min-height: 233px;">
  <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Product</h1>
          </div><!-- /.col -->          
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content">
      <div class="container">
        <!-- You can create form here -->
      </div>
        <div class="row container">
          <div class="col-md-12">
            <div class="card"> 
              <div class="card-header">
              <h3 class="card-title">View Products</h3>
              <div class="float-right"><input type="text" name="search" id="search_input" placeholder="Search..." class="form-control"></div>
              <div class="float-right"><a href="{{ url('/') }}" class="button7">Add Product</a></div>
              </div>
              <form>
                <div class="card-body">
                  <table class="table table-hover table-bordered text-center">
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
                      <?php $sr =1; ?>
                       @foreach ($products as $product)
                       
                      <tr class="ser">
                        <td>{{ $sr++; }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>76</td>
                        <td><img src="{{ asset('storage/images/'.$product->image) }}" width="100" height="100"></td>
                        <td>{{ $product->status==1?'Published':'Draft' }}</td>
                        <td>{{ $product->description }}</td>
                        <td><a href="{{ 'update/'.$product->id }}"><i class="fa fa-edit" style="font-size:18px; color:green"></i></a></a>&nbsp;&nbsp; | &nbsp;&nbsp;<a href="{{ 'delete/'.$product->id }}" onclick="return confirm('Are sure delete product')"><i class="fa fa-trash" style="font-size:18px; color:red"></i></a> </td>
                      </tr>                 
                       @endforeach
                                                     
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
      </section>
    </div>
<style type="text/css">
  .content-header {
    padding: 15px 0.5rem;
}
.card {
    box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%);
    margin-bottom: 1rem;
}
.card {
    position: relative;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
}
.card-header {
    background-color: transparent;
    border-bottom: 1px solid rgba(0,0,0,.125);
    padding: 0.75rem 1.25rem;
    position: relative;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}
.card-body {
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
}
.card-title {
    float: left;
    font-size: 1.1rem;
    font-weight: 400;
    margin: 0;
}
#search_input {
    padding: 21px;
}
.button7 {
    background-color: #3369ff;
    border-radius: 8px;
    border: none;
    color: white;
    padding: 10px 28px;
    margin-right: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    font-family: 'Roboto',sans-serif;
    box-shadow: inset 0 -0.6em 1em -0.35em rgb(0 0 0 / 17%), inset 0 0.6em 2em -0.3em rgb(255 255 255 / 15%), inset 0 0 0em 0.05em rgb(255 255 255 / 12%);
}
.row.container {
    margin-left: 181px;
}
</style>
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
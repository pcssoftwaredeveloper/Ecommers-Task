<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style type="text/css">
  #inputPassword6{
    border:none;
  }
</style>

<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
 <?php 
    $name = $viewPopup->productname;
    $qty = $viewPopup->quantity;
    $price = $viewPopup->price;
    $status = $viewPopup->status;
    $desc = $viewPopup->description;
  ?>
  <div class="container">
  <div class=".col-xs-4 .col-md-offset-2">
    <div class="panel panel-default panel-info Profile">
      <div class="panel-heading"> My Profile </div>
      
      <div class="panel-body">
        <div class="form-horizontal">
                    <form>
                        <div class="form-group">
                            <label class="control-label">First Name</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" name="firstName"
                                    placeholder="First Name" ng-model="me.firstName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Last Name</label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" name="lastName"
                                    placeholder="Last Name" ng-model="me.lastName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" name="email"
                                    placeholder="Email" ng-model="me.email">
                            </div>
                        </div>
            <div class="form-group">
                            <label class="col-sm-2 control-label">Department</label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" name="department"
                                    placeholder="Department" ng-model="me.email">
                            </div>
                        </div>
            <div class="form-group">
                            <label class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" name="title"
                                    placeholder="Title" ng-model="me.email">
                            </div>
                        </div>
            <div class="form-group">
                            <label class="col-sm-2 control-label">Start Date</label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" name="startDate"
                                    placeholder="Start Date" ng-model="me.email">
                            </div>
                        </div>            
            <div class="form-group">
                            <label class="col-sm-2 control-label">Location</label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" name="location"
                                    placeholder="Location" ng-model="me.email">
                            </div>
                        </div>
            <div class="form-group">
                            <label class="col-sm-2 control-label">Phone</label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" name="phone"
                                    placeholder="xxx-xxx-xxxx" ng-model="me.email">
                            </div>
                        </div>          
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-primary" ng-click="updateMe()">Update</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end form-horizontal -->
      </div> <!-- end panel-body -->

    </div> <!-- end panel -->
    

  </div> <!-- end size -->
</div> <!-- end container-fluid -->

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save changes</button>
</div>
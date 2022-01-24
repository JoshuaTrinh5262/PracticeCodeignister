<div class="container-fluid">
  <!-- Page Heading -->
  <h3>STAFFS</h3>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header">
      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#add">Add</button>
    </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Gmail</th>
                <th>Password</th>
                <th>Options</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Gmail</th>
                <th>Password</th>
                <th>Options</th>
              </tr>
            </tfoot>
            <tbody>
              <?php foreach ($staffs as $staff) : ?>
                <tr>
                  <td><?php echo $staff['id'] ?></td>
                  <td><?php echo $staff['username'] ?></td>
                  <td><?php echo $staff['gmail'] ?></td>
                  <td><?php echo $staff['password'] ?></td>
                  <td>
                    <a type="button" href="<?php echo base_url(); ?>admin/staff/<?php echo $staff['id'] ?>" class="btn btn-primary btn-sm">Detail</a>
                    <button type="submit" class="btn btn-success btn-sm" data-toggle="modal" data-target="#update">Edit</button>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    <div class="card-footer"></div>
  </div>
</div>
<!-- Add Modal-->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <form id="staff_add" action="<?php echo base_url(); ?>admin/staff_add" method="post" enctype="multipart/form-data"> -->
      <form id="staff_add" action="" method="post" enctype="multipart/form-data">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Staff</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Staff Gmail</label>
            <input type="text" class="form-control" id="gmail" name="gmail" placeholder="gmail">
          </div>
          <div class="form-group">
            <label>Staff Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <label>Staff Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname">
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname">
          </div>
          
          <div class="form-group">
            <label>Role</label>
            <input type="text" class="form-control" id="role" name="role" placeholder="Role" value="1">
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Update Modal-->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Staff</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Staff Name</label>
            <input type="text" class="form-control" id="author" name="author" placeholder="Staff name">
          </div>
          <div class="form-group">
            <label>Staff Discription</label>
            <textarea type="text" class="form-control" id="description" name="description" placeholder="Staff Description"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="">Update</a>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  $(document).ready(function(){
      $('#staff_add').on('submit', function (e) {
        e.preventDefault();
        var gmail = $("#gmail").val();
        var password = $("#password").val();
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var role = $("#role").val();
        $.ajax({
            type: "POST",
            url: "staff/staff_add",
            data: {
              gmail : gmail,
              password : password,
              firstname : firstname,
              lastname : lastname, 
              role : role,
            },
            success: function(data) {
                console.log(data);
                $('#CompanyProfile').modal('hide');
                $('#dataTable').DataTable().ajax.reload();
            },
            error: function(error) {
              console.log(error);
            },
      });
    });
  });
</script>
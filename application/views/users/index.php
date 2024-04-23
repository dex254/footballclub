<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body"><!-- users list start -->
<section class="users-list-wrapper">
<div class="users-list-filter px-1">

</div>
<div class="users-list-table">
    <div class="card">
			<div class="card-head">
				<div class="card-header">
					<h4 class="card-title">All Users</h4>
					<div class="heading-elements mt-0">

							
					</div>
				</div>
			</div>

        <div class="card-content">
            <div class="card-body">
                <!-- datatable start -->
                <div class="table-responsive">
                    <table id="users-list-datatable" class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Phone Number</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $i=1; foreach ($users as $user): ?>
                            <tr>
                                <td><?php echo $i; $i++;?></td>
                                <td><?php echo $user['fname'].' '.$user['lname'];?></td>
                                <td><?php echo $user['username'];?></td>
                                <td><?php echo $user['phone'];?></td>
                                <td><span class="badge badge-success"><?php echo $user['status'];?></span></td>
                                <td>
                                  <a href="<?php echo base_url('index.php/users/view/'.$user['id']);?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</button></a>
                                  <a href="<?php echo base_url('index.php/users/destroy/'.$user['id']);?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button></a>
                                </td>
                            </tr>
                              <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <!-- datatable ends -->
            </div>
        </div>
    </div>
</div>
</section>
<!-- users list ends -->
    </div>
  </div>
</div>
<!-- END: Content-->

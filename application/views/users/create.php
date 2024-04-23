
<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">User Registration Form</h3>
      </div>
    </div>
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="basic-form-layouts">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title" id="basic-layout-colored-form-control">User form</h4>
            </div>
            <div class="card-content collapse show">
              <div class="card-body">

                <div class="card-text">
                  <p> Before you add the user please make sure he/she understands the workability of this system</p>
                </div>

                <?php echo form_open_multipart('users/store',$attributes); ?>
                <div class="form-body">
                  <h4 class="form-section"><i class="fa fa-eye"></i> About User</h4>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="userinput1">Fist Name</label>
                        <input type="text" id="fname" class="form-control border-primary" placeholder=" first Name" name="fname">
                      </div>
                      <span class="help-block"><?php echo form_error('fname'); ?></span>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="userinput2">Last Name</label>
                        <input type="text" id="lname" class="form-control border-primary" placeholder="Last Name" name="lname">
                      </div>
                      <span class="help-block"><?php echo form_error('lname'); ?></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="userinput3">Username</label>
                        <input type="text" id="username" class="form-control border-primary" placeholder="Username" name="username">
                      </div>
                      <span class="help-block"><?php echo form_error('username'); ?></span>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="userinput4">Password</label>
                        <input type="password" id="password" class="form-control border-primary" placeholder="password" name="password">
                      </div>
                      <span class="help-block"><?php echo form_error('password'); ?></span>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="userinput4">Confirm Password</label>
                        <input type="password" id="cpassword" class="form-control border-primary" placeholder="password" name="cpassword">
                      </div>
                      <span class="help-block"><?php echo form_error('cpassword'); ?></span>
                    </div>
                  </div>

                  <h4 class="form-section"><i class="fa fa-phone"></i> Contact Info</h4>
                  <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="userinput5">Email</label>
                    <input class="form-control border-primary" name="email" type="email" placeholder="Email" id="email">
                  </div>
                  <span class="help-block"><?php echo form_error('email'); ?></span>
                  </div>

                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Contact Number</label>
                    <input class="form-control border-primary" id="phone"   name="phone" type="text" placeholder="Contact Number">
                  </div>
                  <span class="help-block"><?php echo form_error('phone'); ?></span>
                </div>
                </div>

                </div>

                <div class="form-actions right">
                  <button type="reset" class="btn btn-danger mr-1">
                    <i class="fa fa-times"></i> Cancel
                  </button>
                  <button type="submit" class="btn btn-primary">
                    <i class="fa fa-check-square-o"></i> Save
                  </button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
</div>

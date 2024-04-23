<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">List of All players</h3>
      </div>
    </div>
    <div class="content-body"><!-- Multi-column ordering table -->
<section id="multi-column">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">palyers</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <a href="<?php echo base_url('index.php/bank/create/');?>">
                 						<button class="btn btn-primary btn-md">
                            <li><i class="fa fa-plus-circle"></i>Add players</li></button></a>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                        <table class="table table-striped table-bordered multi-ordering">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Player name</th>
                                    <th>Number</th>
                                    <th>Age</th>
                                    <th>contact</th>
                                    <th>Registerd</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $i=1; foreach ($banks as $contact): ?>
                             <tr>
                               <td><?php echo $i; $i++;?></td>
                               <td><?php echo $contact['name'];?></td>
                               <td><?php echo $contact['number'];?></td>
                               <td><?php echo $contact['age'];?></td>
                                <td><?php echo $contact['phone'];?></td>
                               <td><?php echo $contact['date'];?></td>
                               <td>
                                 <a href="<?php echo base_url('index.php/banks/view/'.$contact['id']);?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</button></a>
                               </td>
                             </tr>
                           <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Multi-column ordering table -->
</div>
</div>
</div>

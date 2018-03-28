<?php
include "../includes/dashboard/admin/header.admin.php";
 ?>

<div class="wrapper">

     <?php
     include "../includes/dashboard/admin/sidebar.admin.php";
      ?>
    <div class="main-panel">
         <?php
        include "../includes/dashboard/admin/navs.admin.php";
         ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">All Stdent(s)</h4>
                            </div>

                            <div class="content">
                                 <div class="row">
                                      <div class="col-md-12">

                                           <button type="button" class="btn btn-secondary btn-sm pull-right" data-toggle="modal" data-target="#uploadStdModal">
                                                  <i class="glyphicon glyphicon-plus"></i>
                                                Upload
                                             </button>

                                           <button type="button" id="btn_addNewStudent" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#newStdModal">
                                                  <i class="glyphicon glyphicon-plus"></i>
                                                New Student
                                             </button>

                                           <div class="table-responsive">
                                                <table class="table" id="std_Table">
                                                     <thead>
                                                          <tr>
                                                              <th>#</th>
                                                              <th>Name</th>
                                                              <th>Index No.</th>
                                                              <th>Class</th>
                                                              <th>Amount Paid</th>
                                                              <th>Lacost</th>
                                                              <th>Status</th>
                                                              <th>Date</th>
                                                              <th>Action</th>
                                                          </tr>
                                                     </thead>
                                                </table>
                                           </div>
                                      </div>
                                 </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <?php
       include "../includes/dashboard/admin/footer.admin.php";
       ?>

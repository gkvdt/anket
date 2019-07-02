<?php include 'header.php';?>



<div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Basic</strong> Examples </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu slideUp float-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <?php include_once '../utils/anketKullanici.php';?>
                                <tr>
                                    <th>Branch</th>
                                    <th>Full Name</th>
                                    <th>Country</th>
                                    <th>Phone</th>
                                    <th>E-mail</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                <?php
									renderUserData();
								?>
                                </tbody>
                            </table>
                            <a href="../utils/deleteAll.php?delete=all" class="btn btn-danger">Delete All!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include 'footer.php';?>


<?php include 'header.php';?>



<div class="body">
<div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu">
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
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <tr>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Description</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php include_once '../utils/anketSonucDetay.php';
									anketSonucListele($_GET['anket_id']);
								?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>  

</div>
<?php include 'footer.php';?>

<?php include 'header.php';?>



<div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Survey</strong> Result </h2>
               
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <?php include_once '../utils/anketSonuc.php';?>
                                <tr>
                                    <th>Branch</th>
                                    <th>Full Name</th>
                                  
                                <?php
									anketSonucListele();
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


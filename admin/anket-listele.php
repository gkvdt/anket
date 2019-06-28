<?php include 'header.php';?>

<div class="container">
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right ml-3" type="button">
                    Add Survey <i class="zmdi zmdi-plus"></i>
                </button>

    <div class="table-responsive">
        <table class="table td_2 table-striped table-hover js-basic-example dataTable vcenter">
            <thead>
            <tr >
                <th>anket baslik</th>
                <th>soru sayisi</th>
            </tr>
            </thead>
            <tbody>
            
                <?php
					include_once '../utils/anketListHandler.php';
					getAnkets();
				?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
</div>
</section>

</div>
<!-- Jquery Core Js -->
<script src="../light/assets/bundles/libscripts.bundle.js"></script>
<script src="../light/assets/bundles/vendorscripts.bundle.js"></script>

<script src="../light/assets/bundles/datatablescripts.bundle.js"></script>

<script src="../light/assets/bundles/mainscripts.bundle.js"></script>
<script src="../light/assets/js/pages/tables/jquery-datatable.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/realestate/html/light/agent.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jun 2019 14:52:00 GMT -->
</html>
<?php include 'header.php';
session_start();

include_once '../utils/employeeHelper.php';
listEmployees();

?>

<div class="container">

    <h3>Add Employee</h3>
<form action="../utils/anketCreator.php" method="get">
    <div class="row">
        <div class="col-md-7">
            <h6><label for="">Employee Name :</label></h6>
            <div class="input-group p-t-10">
                <input type="text" name="employee_name" class="form-control" placeholder="Enter title here...">
                 </div>
        </div>
   </div>
    <hr>
    <div class="text-center"><button class="btn btn-primary"  id="addsurvey" type="submit">Add Employee</button></div>
</form>
</div>


<?php include 'footer.php';?>


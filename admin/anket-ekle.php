
<?php include "header.php";
session_start();

?>

<div class="container">

    <h3>Add Survey</h3>

    <div class="row">
        <div class="col-md-7">
            <h6><label for="">Survey Title :</label></h6>
            <div class="input-group p-t-10">
                <input type="text" id="titletext" class="form-control" placeholder="Enter title here...">
                <span class="input-group-addon">
                    <button class="btn btn-primary btn-sm" type="submit" onclick="titlefunc()" id="addsurvey" value="1"><i class="zmdi zmdi-mail-send"></i></button>
                </span>
            </div>
        </div>

    </div>



    <div class="row clearfix" id="showQuest">
        <div class="col-md-4" id="option1">
            <label for="">Add Quest</label>
            <div class="input-group p-t-10">
                <input type="text" class="form-control" id="questtext" placeholder="Add Quest">
                <span class="input-group-addon">
                    <button class="btn btn-primary btn-sm   " type="submit" id="addquest"  onclick="questfunc()"
                     value="1"><i class="zmdi zmdi-mail-send"></i></button>
                </span>
            </div>
        </div>
        <!--
        <div class="col-md-4" id="option2">
            <label for="">Select Quest Type</label>
            <div class="input-group p-t-10">
                <select onchange="changefunc()" class="form-control show-tick" id="select">
                    <option value="">-- Please select --</option>
                    <option value="10">Yes-Or-No</option>
                    <option value="20">Stars</option>
                    <option id="multianswer" value="30">Multi Answer</option>

                </select>
            </div>
        </div>
        <div class="col-md-4" id="option3">
            <label for="">Add Answers Per Line</label>
            <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>

        </div>
    -->
    </div>
    <hr>
    <div class="text-center"><button class="btn btn-primary" onclick="submitfunc()" id="addsurvey" type="submit">Add Question</button></div>

</div>







<script type="text/javascript">
    
    function titlefunc() {
        var titleText = document.getElementById('titletext');
        if (titleText.value.length == 0){
            alert("Please fill in the blank fields!");
        }else {
            document.getElementById('option1').style.display = "block";
        }



    }

    function questfunc(){

        var questText = document.getElementById('questtext');

        if (questText.value.length == 0){
            alert("Please fill in the blank fields!");
        }else {
            document.getElementById('option2').style.display = "block";
        }


    }

    function changefunc() {
        var multiAnswer = document.getElementById('multianswer');
        if (multiAnswer.selected == true){
            document.getElementById('option3').style.display = "block";
        }

    }

    function submitfunc() {

        document.getElementById('option1').style.display = "none";
        document.getElementById('option2').style.display = "none";
        document.getElementById('option3').style.display = "none";

        alert("your Survey Added Succesfully!");

    }

</script>


<style>

    #option1{
        display:none;
    }
    
    #option2{
        display: none;
    }

    #option3{
        display:none
    }

</style>

<?php include "footer.php";?>



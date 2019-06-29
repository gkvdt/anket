
<?php include 'header.php';
session_start();

?>

<div class="container">

    <h3>Add Survey</h3>
<form action="../utils/anketCreator.php" method="get">
    <div class="row">
        <div class="col-md-7">
            <h6><label for="">Survey Title :</label></h6>
            <div class="input-group p-t-10">
                <input type="text" name="anket_title" class="form-control" placeholder="Enter title here...">
                 </div>
        </div>
   </div>
    <hr>
    <div class="text-center"><button class="btn btn-primary"  id="addsurvey" type="submit">Add Survey</button></div>
</form>
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

<?php include 'footer.php';?>



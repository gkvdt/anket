<?php include 'header.php';
	include_once '../utils/anketQuestList.php';
if (!$_GET['anket_id']) {
	echo '<script>window.location.href="anket-listele.php"</script>';
}
?>


<!-- anket başlıgı ekle-->

<div class="container">

<?php

	anketQuestList($_GET['anket_id']);
?>

</div>

<div class="container">

    <h3>Add Survey</h3>

<input type="hidden" value="<?php echo $_GET['anket_id']; ?>"  id="anket_id">

    <div class="row clearfix" id="showQuest">
        <div class="col-md-4" id="option1">
            <label for="">Add Quest</label>
            <div class="input-group p-t-10">
                <input type="text" class="form-control" id="questtext" placeholder="Add Quest">
                <span class="input-group-addon">
                    <button class="btn btn-primary btn-sm   " type="" id="addquest"  onclick="questfunc()"
                     value="1"><i class="zmdi zmdi-mail-send"></i></button>
                </span>
            </div>
        </div>
        
        <div class="col-md-4" id="option2">
            <label for="">Select Quest Type</label>
            <div class="input-group p-t-10">
                <select onchange="changefunc()" class="form-control show-tick" id="select">
                    <option value="4">-- Please select --</option>
                    <option value="2">Yes-Or-No</option>
                    <option value="3">Stars</option>
                    <option id="multianswer" value="1">Multi Answer</option>

                </select>
            </div>
        </div>
        <div class="col-md-4" id="option3">
            <label for="">Add Answers Per Line</label>
            <textarea rows="4" id="optionss"class="form-control no-resize" placeholder="Please type what you want..."></textarea>

        </div>
    
    </div>
    <hr>
    
    
    <div class="text-center"><button class="btn btn-primary" onclick="getquestfunc()" id="getquest" type="">Add Question</button></div>
    <div class="text-center"><button class="btn btn-primary" style="display: none;" onclick="submitfunc()" id="submitt" type="submit" >Unknown</button></div>
    
    
</div>
<script >
	
	function getquestfunc(){
		var soru = document.getElementById('option1');
		soru.style.display = "block";

		var bt = document.getElementById('getquest');
		bt.style.display = "none";
		var sb = document.getElementById('submitt');
		sb.style.display = "block";

		return false
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


        var opt1 = document.getElementById('option1')
        opt1.style.display = "none";
        var opt2 = document.getElementById('option2')
        opt2.style.display = "none";
        var opt3 = document.getElementById('option3')
        opt3.style.display = "none";
        var getquest = document.getElementById('getquest')
        getquest.style.display = "block";
        var subm = document.getElementById('submitt')
        subm.style.display = "none";
    }
</script>

<script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>

<script type="text/javascript">

	

$(document).ready(function(){
   $('#submitt').click(function(){
		 var text = $('#questtext').val()
        if(text.length>1){ 
            var typee = $('#select').val()
            if(typee !== 4){
                var anketID =  $('#anket_id').val()
                if (typee == 1) {
                    var options = $('#optionss').val()
                    dataa={
                        quest:text,
                        typee:typee,
                        choice:options,
                        anket_id:anketID
                    }
                }else{
                    dataa={
                        quest:text,
                        typee:typee,
                        anket_id:anketID
                    }  
                }
                console.log(dataa)
                $.get({
                    url:'../utils/anketCreator.php',
                    cache:false,
                    data:dataa,
                    success:function(res){
                        if(res == "ok"){
                            //succes
                        }else{
                            //error
                            console.log(res);
                        }
                    }
                })
            }
        }else{
            alert("err")
        }
    })
})
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


<?php include("header.html"); ?>

<?php 

$message="";
	
    if($_SERVER["REQUEST_METHOD"] == "POST") {
       
         $e1 = $_POST['e1'];
         $e2 = $_POST['e2']; 
         $e3 = $_POST['e3']; 
		 $e4 = $_POST['e4'];
		 $e5 = $_POST['e5'];
		 $e6 = $_POST['e6'];         

         $sql = "INSERT INTO `control` (`e1`, `e2`, `e3`, `e4`, `e5`, `e6`) VALUES ('$e1','$e2','$e3','$e4','$e5','$e6' )";
		 
         $result = mysqli_query($conn,$sql);
         $message = "values are saved  ";
			
			 
    }
	else{
		$message = "";
	}


 ?>



<div id="main">



<form action=""  method="post" >
	<div style="margin: 70px 400px;">
	<h4 id="demo" style="color: blue;" ><?php echo $message; ?> </h4>
		<div class="slidecontainer">
		  <p>محرك 1:  <span id="eng1"></span></p>
		  <input type="range" min="0" max="100" value="50" class="slider" id="myRange1" name="e1">
		  
		</div>
		<div class="slidecontainer">
		  <p>محرك 2:  <span id="eng2"></span></p>
		  <input type="range" min="0" max="100" value="50" class="slider" id="myRange2" name="e2">
		  
		</div>

		<div class="slidecontainer">
		  <p>محرك 3:  <span id="eng3"></span></p>
		  <input type="range" min="0" max="100" value="50" class="slider" id="myRange3" name="e3">
		  
		</div>

		<div class="slidecontainer">
		  <p>محرك 4:  <span id="eng4"></span></p>
		  <input type="range" min="0" max="100" value="50" class="slider" id="myRange4" name="e4">
		  
		</div>

		<div class="slidecontainer">
		  <p>محرك 5:  <span id="eng5"></span></p>
		  <input type="range" min="0" max="100" value="50" class="slider" id="myRange5" name="e5">
		  
		</div>

		<div class="slidecontainer">
		  <p>محرك 6:  <span id="eng6"></span></p>
		  <input type="range" min="0" max="100" value="50" class="slider" id="myRange6" name="e6">
		  
		</div>

	 <button type="submit" class="btn">حفظ</button>
	 
	 <button type="button" id="runbtn" class="btn" onclick="runB()">تشغيل</button>

	</div>
</form>



</div>
<script>
    var j=1;
	while(j!=7){
		var slider = document.getElementById("myRange"+j);
		var output = document.getElementById("eng"+j);
		output.innerHTML = slider.value;
		j++;
	}

	
	var slider1 = document.getElementById("myRange1");
	var output1 = document.getElementById("eng1");
	
	slider1.oninput = function() {
		output1.innerHTML = this.value;
	}

	var slider2 = document.getElementById("myRange2");
	var output2 = document.getElementById("eng2");
	
	slider2.oninput = function() {
		output2.innerHTML = this.value;
	}


	var slider3 = document.getElementById("myRange3");
	var output3 = document.getElementById("eng3");
	
	slider3.oninput = function() {
		output3.innerHTML = this.value;
	}
	
	var slider4 = document.getElementById("myRange4");
	var output4 = document.getElementById("eng4");
	
	slider4.oninput = function() {
		output4.innerHTML = this.value;
	}
	
	var slider5 = document.getElementById("myRange5");
	var output5 = document.getElementById("eng5");
	
	slider5.oninput = function() {
		output5.innerHTML = this.value;
	}
	var slider6 = document.getElementById("myRange6");
	var output6 = document.getElementById("eng6");
	
	slider6.oninput = function() {
		output6.innerHTML = this.value;
	}
	
	function runB(){
		alert('Robot is running ..');
	}
</script>
<?php include("footer.html"); ?>
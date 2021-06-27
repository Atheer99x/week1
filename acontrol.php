<?php include("header.html"); ?>

<?php 

$message="";
	
    if($_SERVER["REQUEST_METHOD"] == "POST") {
       
         $a1 = $_POST['a1'];
         $a2 = $_POST['a2']; 
         $a3 = $_POST['a3']; 
		 $a4 = $_POST['a4'];
		 $a5 = $_POST['a5'];        

         $sql = "INSERT INTO `angle` (`a1`, `a2`, `a3`, `a4`, `a5`) VALUES ('$a1','$a2','$a3','$a4','$a5' )";
		 
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
		  <p>Base:  <span id="angle1"></span></p>
		  <input type="range" min="0" max="180" value="90" class="slider" id="Range1" name="a1">
		  
		</div>
		<div class="slidecontainer">
		  <p>Shoulder:  <span id="angle2"></span></p>
		  <input type="range" min="0" max="180" value="90" class="slider" id="Range2" name="a2">
		  
		</div>

		<div class="slidecontainer">
		  <p>Elbow:  <span id="angle3"></span></p>
		  <input type="range" min="0" max="180" value="90" class="slider" id="Range3" name="a3">
		  
		</div>

		<div class="slidecontainer">
		  <p>Wrist:  <span id="angle4"></span></p>
		  <input type="range" min="0" max="180" value="90" class="slider" id="Range4" name="a4">
		  
		</div>

		<div class="slidecontainer">
		  <p>Gripper:  <span id="angle5"></span></p>
		  <input type="range" min="0" max="180" value="90" class="slider" id="Range5" name="a5">
		  
		</div>



	 <button type="submit" class="btn">حفظ</button>
	 
	</div>
</form>



</div>
<script>

    var a=1;
	while(a!=6){
		var slider = document.getElementById("Range"+a);
		var output = document.getElementById("angle"+a);
		output.innerHTML = slider.value;
	
		a++;
	}

	
	var slider1 = document.getElementById("Range1");
	var output1 = document.getElementById("angle1");
	
	slider1.oninput = function() {
		output1.innerHTML = this.value;
	}

	var slider2 = document.getElementById("Range2");
	var output2 = document.getElementById("angle2");
	
	slider2.oninput = function() {
		output2.innerHTML = this.value;
	}


	var slider3 = document.getElementById("Range3");
	var output3 = document.getElementById("angle3");
	
	slider3.oninput = function() {
		output3.innerHTML = this.value;
	}
	
	var slider4 = document.getElementById("Range4");
	var output4 = document.getElementById("angle4");
	
	slider4.oninput = function() {
		output4.innerHTML = this.value;
	}
	
	var slider5 = document.getElementById("Range5");
	var output5 = document.getElementById("angle5");
	
	slider5.oninput = function() {
    output5.innerHTML = this.value;
	}


</script>
<?php include("footer.html"); ?>
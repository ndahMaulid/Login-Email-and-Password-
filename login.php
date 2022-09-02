<html> 
<!opening tag for html >

<head>
	<title> Email and Password </title> 
	<!For title in tab>
	
	<style> 
	<! Tag for css >
	
		body 
		<! selector>
		{  
			font-family: "segoe ui"; 
			<! property: "...value.." >
		}
		
		h1 {
			font-size: 25px;
		}
		label {
			width: 120px;
			display: block;
			float: left;
		}
		
		.row { 
		<! declaration class in css>
		
			margin-bottom: 5px;
			clear: both;
		}
		
		input[type="submit"]
		<! selector input type submit including of submit button>		
		{ 
			padding: 7px 15px;
			margin-left: 120px;
			cursor: pointer;
		}
		
		}
	</style> 
	<! End tag for css (Cascading Style Sheets)>
	
</head>

<body>
 <! The location of all the views displayed on the web>
 
	<h1>Form Email and Password</h1>
	<!Form title> 
	
	<form action="" method="post"> 
	<!The attribute action is used to specify the destination URL where data from a form will be submitted and then processed when it is sent>
	<!Sending data directly>
	
		<div class="row"> 
		<!Class identification that has been described>
		
			<label>Email</label> 
			<! tags to identify the data to be entered into the form> 
			
			<input type="text" name="namaa" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
			<!Use the shorthand tag </? to print the output (replacing echo)>
			<! If the $_POST variable has an index name ( isset($_POST['nama']) ), then prints the value of the variable $_POST['nama'], 
			if not available prints the empty string ''. The $_POST variable will have an index namaa if the submit button is clicked.>
			
		</div>
		<div class="row">
			<label>Password</label>
			<! tags to identify the data to be entered into the form> 
			
			<input type="password" name="pasw" value="<?=isset($_POST['pass']) ? $_POST['pass'] : ''?>"/>
			<!Use the shorthand tag </? to print the output (replacing echo)>
			<! If the $_POST variable has an index name ( isset($_POST['pass']) ), then prints the value of the variable $_POST['pass'], 
			if not available prints the empty string ''. The $_POST variable will have an index pasw if the submit button is clicked.>
			
		</div>
		<div class="row">
			<input type="submit" name="submit" value="Save"/>
		</div>
	</form>
	<?php
	if (isset($_POST['submit'])) {
		//To check whether any data has been sent click the submit button>
		echo '<h1>Output</h1>';
		echo '<ul>';
		echo '<li>E-Mail: ' . $_POST['namaa'] . '</li>';
		//Displays the name attribute that has been processed>
		echo '<li>Password: ' . $_POST['pasw'] . '</li>';
		//Displays the name attribute that has been processed>
		echo '<ul>';
	}?>
</body>
</html> 
<!The end of all processing>
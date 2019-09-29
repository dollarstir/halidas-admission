<!--A Design by Dollar Stir
Author: Dollarstir
Author URL: http://purplesofts.com

-->

<?php include 'core.php'; 

session_start();

if (!isset($_SESSION['serial'])) {
	
	echo '<script> window.location="verify.php"</script>';
	# code...
}
?>
<!DOCTYPE HTML>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>ADMISSIONS-HALIDASGH</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="OP Registration Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tags -->
	<!-- Stylesheet -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<!--//fonts-->
</head>





	<!-- Global site tag (gtag.js) - Google Analytics -->

<body>
	<!--background-->
	<!---728x90--->

	
<form action="#" method="post" id="myform">
	<div class="avatar-upload">
        <div class="avatar-edit">
			
            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="image" required=""/>
            <label for="imageUpload"><i class="fas fa-camera" style="position:absolute;font-size:25px;color:white;margin-left:40px; z-index: 1;"></i><br><p style="color:white;margin-top:6px;position:center;margin-left:5px;">Browse Image</p></label>
        </div>
        <div class="avatar-preview">
		
            <div id="imagePreview" style="background-image: url(images/avat2.jpg);">
            </div>
        </div>
    </div>
	<!---728x90--->

	<div class="register-form-w3layouts">
		
		
			<h3 class="sub-heading-agileits">Personal Details</h3>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="fname" placeholder="First Name" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="lname" placeholder="Last Name" required="">
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="email" name="email" placeholder="Email" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="contact" placeholder="Phone Number" required="">
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input id="datepicker" name="dob" type="text" placeholder="DOB" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
					    required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<select class="form-control" name="gender" required="">
						<option value="">Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="town" placeholder="Home Town" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="nation" placeholder="Nationality" required="">
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<select class="form-control" name="sex" required="">
						<option value="">Marital Status</option>
						<option value="Single">Single</option>
						<option value="Married">Married</option>
						<option value="Divorced">Divorced</option>
					</select>
				</div>

				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="pob" placeholder="Place of birth" required="">
				</div>
			</div>


			<div class="main-flex-w3ls-sectns">
			<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="position" placeholder="Occupation" required="">
				</div>

				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="rel" placeholder="Religious Denomination" required="">
				</div>
			</div>
			<!-- <div class="field-agileinfo-spc form-w3-agile-text">
				<textarea name="Message" placeholder="Address..."></textarea>
			</div> -->
			<div class="clear"></div>
			<h2 class="sub-heading-agileits">Educational Background(optional)</h2>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="s1" placeholder="Previous School If any">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="c1" placeholder="Certificate(eg:WASSCE/BECE)" >
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="start" placeholder="From (eg:2013)">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="end" placeholder="TO (eg: 2016)">
				</div>
			</div>
			
			
			<div class="clear"></div>


			<h2 class="sub-heading-agileits">Select Programe To Study</h2><br>
			
			<div class="main-flex-w3ls-sectns">
				
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<select class="form-control" required="" name="programe">
						<option value="">Choose Programe</option>
						 <?php getcc();?>
					</select>
				</div>
				
			</div>
			
			<!-- <div class="field-agileinfo-spc form-w3-agile-text">
				<textarea name="Message" placeholder="If you are taking please list them here.."></textarea>
			</div> -->
			
			<div class="clear"></div>


			<h2 class="sub-heading-agileits">Particulars Of Parent/Guardian</h2>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="pn1" placeholder="First Name" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="pn2" placeholder="Last Name" required="">
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="native" placeholder="Relationship" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="pcontact" placeholder="Phone Number" required="">
				</div>
			</div>
			
				<input type="hidden" name="serial" placeholder="" value="<?php $_SESSION['serial']; ?>">
			
			<div class="field-agileinfo-spc form-w3-agile-text">
			<h6 style="font-size:17px;color:Red;">Declaration</h6>
				<textarea name="Message" placeholder="" readonly>I wish to offer myself for admission as a student of Hali-Das College Of Technology to undertake academic program’s that I have selected, and if admitted I will observe the rule and regulations in the school. NB fees once paid are not refundable.
 I therefore by signing this form agree to abide by the rules and regulations pertain to the school.</textarea>
			</div>

			<div class="radio-section">
				
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="selector1" checked>
						<label for="a-option">Yes</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="selector1">
						<label for="b-option">No</label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul>
				<div class="clear"></div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div id="mcon">
					<!-- <div id="mess">
						<p id="mm">Registration Successful</p>
					</div> -->

				</div>
			</div>
			<input type="submit" value="Apply" name="btnap">
			<input type="reset" value="Cancel">
			<div class="clear"></div>
</form>
		<!--// Form starts here -->
	</div>
	<!---728x90--->

	<!--copyright-->
	<div class="copyright">
		<p>&copy; <?php echo date("Y");?> Halidas Admission Form . All Rights Reserved | Design by
			<a href="http://purplesofts.com/" target="_blank">Dollarsoft Corporation</a>
		</p>
	</div>
	<!--//copyright-->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script src="ajax.js"></script>
	<!-- Calendar Js -->
	<script src="js/jquery-ui.js"></script>
	<script src="js/script.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar Js -->

</body>


</html>
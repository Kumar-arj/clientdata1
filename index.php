<!DOCTYPE html>
<html lang="en">
<head>
	<title>v7 quotation form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
  <style>
/* Popup container - can be anything you want */
.popup {
  position: absolute;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/scripts.js"></script> 
</head>
</head>
<body>
      <marquee>Fill in the form and get instant quotation for your website</marquee>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" id="quotation_form" action="insert.php" method ="post">
	
				<span class="contact100-form-title">
				<img src="images\logo2.jpg" alt="" align="center" width= "100px " height= "100px" />
           		</span>
				<span class="contact100-form-title">
					Send Us Your Information
				</span>
				
				<label class="label-input100" for="name">Tell us your name *</label>
				<span class="error_form" id="name_error_message">error</span>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input class="input100 name" type="text" name="name" placeholder="Enter your name" >
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="email">Enter your email</label>				
				<div class="wrap-input100 " >
					<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
					<span class="focus-input100"></span>
				</div>
				<label class="label-input100 " for="phone">Enter phone number*</label>
				<span class="error_form" id="phone_error_message">error</span>
				<div class="wrap-input100 validate-input" data-validate = "Valid Phone number required">
					<input id="phone" class="input100 phone" type="tel" name="phone" placeholder="00000 00000">
					<span class="focus-input100"></span>
				</div>
                <label class="label-input100 websitetype" for="Website Type">Website Type*</label>
                <div class="wrap-input100">
               <div class="wrap-contact3-form-radio"><br>
						<div class="contact3-form-radio m-r-42"><br>
							<input class="input-radio3" id="radio1" type="radio" name="Websitetype" value="Basic" checked="checked">
							<label class="label-radio3" for="radio1">
								Basic
							</label>
						</div>
						<div class="contact3-form-radio"><br>
							<input class="input-radio3" id="radio2" type="radio" name="Websitetype" value="Advanced">
							<label class="label-radio3" for="radio2">
								Advanced
							</label>
						</div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<div class="contact3-form-radio"><br>
							<input class="input-radio3" id="radio3" type="radio" name="Websitetype" value="E-Commerce">
							<label class="label-radio3" for="radio3">
								E-Commerce
							</label>
						</div>
						<span class="focus-input100"></span>
				</div>
			</div>
					<label class="label-input100" for="WebpageRequired">Webpages Required*</label>
				<div class="wrap-input100">
					<input id="WebpageRequired" class="input100"  type="number" name="WebpageRequired" id="WebpageRequired"
                min="1" max="120" step="1" value="1" >
					<span class="focus-input100"></span>
				</div>
                <label class="label-input100" for="Contentwriting">Content Writing*</label>
                 <div class="wrap-input100 input100-select">
					
					<div>
						<select class="selection-2 Contentwriting" name="Contentwriting">
							<option value = "required">Required</option>
							<option value = "not required">Not required</option>
							
							
						</select>
					</div>
                  <span class="focus-input100"></span>	
				</div>
				 <label class="label-input100" for="HostingServices">Hosting Services*</label>
                 <div class="wrap-input100 input100-select">
					
					<div>
						<select class="selection-2 HostingServices" name="HostingServices">
							<option value = "required">Required</option>
							<option value = "not required">Not required</option>
							
							
						</select>
					</div>
					<span class="focus-input100"></span>	
				</div>
					<label class="label-input100" for="LogoDesign">Logo Design*</label>
                 <div class="wrap-input100 input100-select">
					
					<div>
						<select class="selection-2 LogoDesign" name="LogoDesign">
							<option value = "required">Required</option>
							<option value = "not required">Not Required</option>
							
							
						</select>
					</div>
                  <span class="focus-input100"></span>	
				</div>
                 <label class="label-input100" for="WebsiteRequiredin">Website Required in*</label>
                 <div class="wrap-input100 input100-select">	
					<div>
						<select class="selection-2 WebsiteRequiredin" name="WebsiteRequiredin">
							<option value = "10-15days">10-15 Days</option>
							<option value = "16-20days">16-20 Days</option>
						</select>
					</div>
                  <span class="focus-input100"></span>	
				</div>
				
				<div class="container-contact100-form-btn">
					<div class="btn btn-success">
					  <input class="btn btn-success" id="submit" name="submit" type ="submit" value="submit">	
				    </div>	
				</div>
			
			</form>
			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>
					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>
						<span class="txt3">
							 Madurai , TN -IN
                                Anuppandi, Theppakulam Road
						</span>
					</div>
				</div>
				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>
					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>
						<span class="txt3">
							 0452 2312437 | +91-7339129812
                                Mon-Fri 9am-6pm
						</span>
					</div>
				</div>
				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>
					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>
						<span class="txt3">
							info@v7lancers.com
						</span>
						<span class="txt3">
							www.v7lanncers.com

						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-23581568-13');
	</script>

	<div id="main" >
		<div id="pop-up">
			<p>Your requirements has been analysed and the pricing for your website is 3999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
		</div>
		<div id="pop-up1">
			<p>Your requirements has been analysed and the pricing for your website is 4499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
		</div>
		<div id="pop-up2">
			<p>Your requirements has been analysed and the pricing for your website is 4999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
		</div>
		<div id="pop-up3">
			<p>Your requirements has been analysed and the pricing for your website is 5499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
		</div>
		<div id="pop-up4">
			<p>Your requirements has been analysed and the pricing for your website is 5999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
		</div>
		<div id="pop-up5">
			<p>Your requirements has been analysed and the pricing for your website is 4999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
		</div>
		<div id="pop-up6">
			<p>Your requirements has been analysed and the pricing for your website is 5999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
		</div>

		<div id="pop-up7">
			<p>Your requirements has been analysed and the pricing for your website is 6499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
		</div>
		<div id="pop-up8">
			<p>Your requirements has been analysed and the pricing for your website is 5299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
		</div>
		<div id="pop-up9">
			<p>Your requirements has been analysed and the pricing for your website is 6299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
		</div>
		<div id="pop-up10">
			<p>Your requirements has been analysed and the pricing for your website is 5799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
		</div>
		<div id="pop-up11">
			<p>Your requirements has been analysed and the pricing for your website is 5799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
		</div>
		<div id="pop-up12">
			<p>Your requirements has been analysed and the pricing for your website is 6299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
		</div>
        <div id="pop-up13">
        	<p>
			Your requirements has been analysed and the pricing for your website is 6799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com
			</p>
	
        </div>
        <div id="pop-up14">
             <p>Your requirements has been analysed and the pricing for your website is 7299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-p15">
        	<p>Your requirements has been analysed and the pricing for your website is 4799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up16">
        	<p>Your requirements has been analysed and the pricing for your website is 6799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up17">
        	<p>Your requirements has been analysed and the pricing for your website is 5299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up18"> 
        	<p>Your requirements has been analysed and the pricing for your website is 6299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up19">
        	<p>Your requirements has been analysed and the pricing for your website is 5299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up20">
        	<p>Your requirements has been analysed and the pricing for your website is 6299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up21">
        	<p>Your requirements has been analysed and the pricing for your website is 5799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up22">
        	<p>Your requirements has been analysed and the pricing for your website is 6799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up23">
        	<p>Your requirements has been analysed and the pricing for your website is 6299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up24">
        	<p>Your requirements has been analysed and the pricing for your website is 7299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up25">
        	<p>Your requirements has been analysed and the pricing for your website is 7999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up26">
        	<p>Your requirements has been analysed and the pricing for your website is 8499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>

        <div id="pop-up27">
        	<p>Your requirements has been analysed and the pricing for your website is 8999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up28">
        	<p>Your requirements has been analysed and the pricing for your website is 9499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up29">
        	<p>Your requirements has been analysed and the pricing for your website is 9999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up30">
        	<p>Your requirements has been analysed and the pricing for your website is 8499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up31">
        	<p>Your requirements has been analysed and the pricing for your website is 9999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up32">
        	<p>Your requirements has been analysed and the pricing for your website is 10,499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up33">
        	<p>Your requirements has been analysed and the pricing for your website is 9299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-34">
        	<p>Your requirements has been analysed and the pricing for your website is 10,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-35">
        	<p>Your requirements has been analysed and the pricing for your website is 9799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up36">
        	<p>Your requirements has been analysed and the pricing for your website is 9799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up37">
        	<p>Your requirements has been analysed and the pricing for your website is 10,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up38">
        	<p>Your requirements has been analysed and the pricing for your website is 10,799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com"</p>
        </div>
        <div id="pop-up39">
        	<p>Your requirements has been analysed and the pricing for your website is 11,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up40">
        	<p>Your requirements has been analysed and the pricing for your website is 8799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up41">
        	<p>Your requirements has been analysed and the pricing for your website is 9799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up42">
        	<p>Your requirements has been analysed and the pricing for your website is 9299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up43">
        	<p>Your requirements has been analysed and the pricing for your website is 10,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up44">
        	<p>Your requirements has been analysed and the pricing for your website is 9299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up45">
        	<p>Your requirements has been analysed and the pricing for your website is 10299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up46">
        	<p>Your requirements has been analysed and the pricing for your website is 9799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up47">
        	<p>Your requirements has been analysed and the pricing for your website is 10799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up48">
        	<p>Your requirements has been analysed and the pricing for your website is 10,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up49">
        	<p>Your requirements has been analysed and the pricing for your website is 11,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up50">
        	<p>Your requirements has been analysed and the pricing for your website is 14,999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up51">
        	<p>Your requirements has been analysed and the pricing for your website is 15,499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up52">
        	<p>Your requirements has been analysed and the pricing for your website is 15,999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up53">
        	<p>Your requirements has been analysed and the pricing for your website is 16,499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up54">
        	<p>Your requirements has been analysed and the pricing for your website is 16,999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up55">
        	<p>Your requirements has been analysed and the pricing for your website is 16,499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up56">
        	<p>Your requirements has been analysed and the pricing for your website is 16,999/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up57">
        	<p>Your requirements has been analysed and the pricing for your website is 17,499/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up58">
        	<p>Your requirements has been analysed and the pricing for your website is 16,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up59">
        	<p>Your requirements has been analysed and the pricing for your website is 17,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up60">
        	<p>Your requirements has been analysed and the pricing for your website is 16,799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up61">
        	<p>Your requirements has been analysed and the pricing for your website is 16,799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up62">
        	<p>Your requirements has been analysed and the pricing for your website is 17,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up63">
        	<p>Your requirements has been analysed and the pricing for your website is 17,799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up64">
        	<p>Your requirements has been analysed and the pricing for your website is 18,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up65">
        	<p>Your requirements has been analysed and the pricing for your website is 15,799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up66">
        	<p>Your requirements has been analysed and the pricing for your website is 16,799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up67">
        	<p>Your requirements has been analysed and the pricing for your website is 16,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up68">
        	<p>Your requirements has been analysed and the pricing for your website is 17,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up69">
        	<p>Your requirements has been analysed and the pricing for your website is 16,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up70">
        	<p>Your requirements has been analysed and the pricing for your website is 17,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up71">
        	<p>Your requirements has been analysed and the pricing for your website is 16,799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up72">
        	<p>Your requirements has been analysed and the pricing for your website is 17,799/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up73">
        	<p>Your requirements has been analysed and the pricing for your website is 17,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
        <div id="pop-up74">
        	<p>Your requirements has been analysed and the pricing for your website is 18,299/- Our experts will connect you soon.\nFor futher clarification and negotiation feel free to call us on +91-7339129812.Email-info@v7lancers.com</p>
        </div>
       
    </div>

</body>
</html>

   
   

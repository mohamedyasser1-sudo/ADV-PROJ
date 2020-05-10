<?php 
include 'connect/connect.php';
include 'form_handlers/host_regis.php';
include 'form_handlers/login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Modern Flip Sign In Form Flat Responsive Widget Template :: w3layouts</title>
<!-- Custom Theme files -->
<link href="assets/css/regis-login.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->

<!-- //web font -->
<!-- jS --> 
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/script.js"></script> 
<!--<script src="assets/js/loadingOverlayScript.js"></script>
    <script src="assets/js/loadingoverlay.min.js"></script>-->

<!-- //js -->


    <!-- Meta tags -->
    <!-- font-awesome icons -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!--stylesheets-->
  
    <!--//style sheet end here-->
	
	 <!-- Bootstrap core CSS -->
     <!--<link href="assets/css/bootstrap.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900&display=swap" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <script src="assets/js/modernizr.custom.js"></script>
    <link rel="stylesheet" href="theme/any-theme.css">
   
</head>
<body>

<!-- LOGO -->
    <img src="assets/images/logo.png" id='logoId'> 
	<!-- END LOGO -->
<!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="index.php#home">LINK</a></h1>
			<i class="fa fa-arrow-right menu-close"></i>
		    <a href="index.php">Home</a>
			<a href="index.php#howwork">How Work</a>
			<a href="index.php#about">About</a>
			<a href="index.php#contact">Contact</a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-dribbble"></i></a>
			<a href="#"><i class="fa fa-envelope"></i></a>
		</div>
		
		<!-- Menu button -->
		<div class="test"><i id="menuToggle" class="fa fa-bars"></i>
		<span>
            
            
            
            <?php if(isset($_SESSION['email'])): ?>
  <a href="./form_handlers/logout.php" class="stysignup">Logout</a>
<?php else: ?>
  <!--<a href="login.php" class="stysignup">Login</a>-->
<?php endif; ?> 
            
            
            </span>
		</div>
	</nav>
	


	<!-- main -->
	<div class="main-agile">
		
		<div id="w3ls_form" class="signin-form">
			<!-- Sign In Form -->
			<form id="signup" action="#" method="post">
				<h2>Sign In Form</h2>
				<p>User Name </p>
				<input type="email" name="email" placeholder="Email" required="" value="<?= (isset ($email)) ? $email :'' ?>"/>
				<p>Password</p>
				<input type="password" name="pass" placeholder="Password" required=""/>	 
				<input type="checkbox" id="brand" value="">
				<label for="brand"><span></span> Remember me ?</label> 
				 <button type="submit" name="login" class="button">Login </button> 
				<div class="signin-agileits-bottom"> 
          <p><a href="#">Forgot password ?</a></p>    
          <div id="clickhere">
            <h4>You don't have an account?
            <div><a href="#" id="flipToRecover" class="flipLink" title="Click Here to SignUp">Register Here</a></div>
            </h4>
          </div> 
				</div> 
				<!--
				<div class="social-icons">
					<ul>  
						<li><a href="#"><span class="icons"></span><span class="text">Sign in with Facebook</span></a></li> 
						<li class="twt"><a href="#"><span class="icons"></span><span class="text">Sign in with Twitter</span></a></li>  
					</ul> 
					<div class="clear"> </div>
				</div>	-->
			</form>

	
			<!-- //Sign In Form -->
			<!-- Sign up Form-->
			<form class="form-signin" method="post" id="signin">
				<h3>Register as a Host</h3>
				
				<input type="text" name="username" id="username"  placeholder="User Name" />
				
				<input type="password" name="pass" id="pass" placeholder="Password" />
				
				<input type="password" name="confirmpass" id="confirmpass" placeholder="Confirm Password" />	
				
					
				<input type="text" name="first_name" id="first_name" placeholder="First Name"  />
				
					
				<input type="text" name="second_name" id="second_name" placeholder="Second Name"  />
				
					
				<input type="email" name="email" id="email" placeholder="Email Address"  />
				
					
				 <select name="country" id="country">
                            <option value="" disabled selected>Select your Category</option>
                            <optgroup id="country-optgroup-Africa" label="Africa">
                            <option data-code="213" value="DZ" label="Algeria">Algeria</option>
                            <option data-code="244" value="AO" label="Angola">Angola</option>
                           <option data-code="299" value="BJ" label="Benin">Benin</option>
                            <option data-code="267" value="BW" label="Botswana">Botswana</option>
                            <option data-code="226" value="BF" label="Burkina Faso">Burkina Faso</option>
                            <option data-code="257" value="BI" label="Burundi">Burundi</option>
                            <option data-code="237" value="CM" label="Cameroon">Cameroon</option>
                            <option data-code="238" value="CV" label="Cape Verde">Cape Verde</option>
                            <option data-code="236" value="CF" label="Central African Republic">Central African Republic</option>
                            <option data-code="235" value="TD" label="Chad">Chad</option>
                            <option data-code="269" value="KM" label="Comoros">Comoros</option>
                            <option data-code="242" value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
                            <option data-code="243" value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
                            <option data-code="225" value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
                            <option data-code="253" value="DJ" label="Djibouti">Djibouti</option>
                            <option data-code="02" value="EG" label="Egypt">Egypt</option>
                            <option data-code="240" value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
                            <option data-code="291" value="ER" label="Eritrea">Eritrea</option>
                            <option data-code="251" value="ET" label="Ethiopia">Ethiopia</option>

<option data-code="+241" value="GA" label="Gabon">Gabon</option>
                            <option data-code="220" value="GM" label="Gambia">Gambia</option>
                            <option data-code="233" value="GH" label="Ghana">Ghana</option>
                            <option data-code="224" value="GN" label="Guinea">Guinea</option>
                            <option data-code="245" value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
                            <option data-code="254" value="KE" label="Kenya">Kenya</option>
                            <option data-code="266" value="LS" label="Lesotho">Lesotho</option>
                            <option data-code="231" value="LR" label="Liberia">Liberia</option>
                            <option data-code="218" value="LY" label="Libya">Libya</option>
                            <option data-code="261" value="MG" label="Madagascar">Madagascar</option>
                            <option data-code="265" value="MW" label="Malawi">Malawi</option>
                            <option data-code="223" value="ML" label="Mali">Mali</option>
                            <option data-code="222" value="MR" label="Mauritania">Mauritania</option>
                            <option data-code="230" value="MU" label="Mauritius">Mauritius</option>
                            <option data-code="262" value="YT" label="Mayotte">Mayotte</option>
                            <option data-code="212" value="MA" label="Morocco">Morocco</option>
                            <option data-code="258" value="MZ" label="Mozambique">Mozambique</option>
                            <option data-code="264" value="NA" label="Namibia">Namibia</option>
                            <option data-code="227" value="NE" label="Niger">Niger</option>
                            <option data-code="234" value="NG" label="Nigeria">Nigeria</option>
                            <option data-code="250" value="RW" label="Rwanda">Rwanda</option>
                            <option data-code="974" value="RE" label="Réunion">Réunion</option>
                            <option data-code="290" value="SH" label="Saint Helena">Saint Helena</option>
                            <option data-code="221" value="SN" label="Senegal">Senegal</option>
                            <option data-code="248" value="SC" label="Seychelles">Seychelles</option>
                            <option data-code="232" value="SL" label="Sierra Leone">Sierra Leone</option>
                            <option data-code="252" value="SO" label="Somalia">Somalia</option>
                            <option data-code="27" value="ZA" label="South Africa">South Africa</option>
                            <option data-code="249" value="SD" label="Sudan">Sudan</option>
                            <option data-code="268" value="SZ" label="Swaziland">Swaziland</option>
                            <option data-code="239" value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
                            <option data-code="255" value="TZ" label="Tanzania">Tanzania</option>
                            <option data-code="228" value="TG" label="Togo">Togo</option>
                            <option data-code="216" value="TN" label="Tunisia">Tunisia</option>
                            <option data-code="256" value="UG" label="Uganda">Uganda</option>
                            <option data-code="212" value="EH" label="Western Sahara">Western Sahara</option>
                            <option data-code="260" value="ZM" label="Zambia">Zambia</option>
                            <option data-code="263" value="ZW" label="Zimbabwe">Zimbabwe</option>
                            </optgroup>
                            <optgroup id="country-optgroup-Americas" label="Americas">
                            <option data-code="264" value="AI" label="Anguilla">Anguilla</option>
                            <option data-code="268" value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option data-code="54" value="AR" label="Argentina">Argentina</option>
                            <option data-code="297" value="AW" label="Aruba">Aruba</option>
                            <option data-code="242" value="BS" label="Bahamas">Bahamas</option>
                            <option data-code="246" value="BB" label="Barbados">Barbados</option>
                            <option data-code="501" value="BZ" label="Belize">Belize</option>
                            <option data-code="441" value="BM" label="Bermuda">Bermuda</option>
                            <option data-code="591" value="BO" label="Bolivia">Bolivia</option>
                            <option data-code="55" value="BR" label="Brazil">Brazil</option>
                            <option data-code="284" value="VG" label="British Virgin Islands">British Virgin Islands</option>
                            <option data-code="1" value="CA" label="Canada">Canada</option>
                            <option data-code="345" value="KY" label="Cayman Islands">Cayman Islands</option>
                            <option data-code="56" value="CL" label="Chile">Chile</option>
                            <option data-code="57" value="CO" label="Colombia">Colombia</option>
                            <option data-code="506" value="CR" label="Costa Rica">Costa Rica</option>
                            <option data-code="53" value="CU" label="Cuba">Cuba</option>
                            <option data-code="767" value="DM" label="Dominica">Dominica</option>
                            <option data-code="809" value="DO" label="Dominican Republic">Dominican Republic</option>
                            <option data-code="593" value="EC" label="Ecuador">Ecuador</option>
                            <option data-code="503" value="SV" label="El Salvador">El Salvador</option>
                            <option data-code="500" value="FK" label="Falkland Islands">Falkland Islands</option>
                            <option data-code="594" value="GF" label="French Guiana">French Guiana</option>
                            <option data-code="299"value="GL" label="Greenland">Greenland</option>
                            <option data-code="473" value="GD" label="Grenada">Grenada</option>
                            <option data-code="590" value="GP" label="Guadeloupe">Guadeloupe</option>
                            <option data-code="502"value="GT" label="Guatemala">Guatemala</option>
                            <option data-code="592"value="GY" label="Guyana">Guyana</option>
                            <option data-code="509"value="HT" label="Haiti">Haiti</option>
                            <option data-code="504"value="HN" label="Honduras">Honduras</option>
                            <option data-code="876"value="JM" label="Jamaica">Jamaica</option>
                            <option data-code="596"value="MQ" label="Martinique">Martinique</option>
                            <option data-code="52"value="MX" label="Mexico">Mexico</option>
                            <option data-code="596"value="MS" label="Montserrat">Montserrat</option>
                            <option data-code="599"value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
                            <option data-code="505"value="NI" label="Nicaragua">Nicaragua</option>
                            <option data-code="507"value="PA" label="Panama">Panama</option>
                            <option data-code="595"value="PY" label="Paraguay">Paraguay</option>
                            <option data-code="51"value="PE" label="Peru">Peru</option>
                            <option data-code="787"value="PR" label="Puerto Rico">Puerto Rico</option>
                            <option data-code="590"value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
                            <option data-code="869"value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option data-code="758"value="LC" label="Saint Lucia">Saint Lucia</option>
                            <option data-code="33"value="MF" label="Saint Martin">Saint Martin</option>
                            <option data-code="508"value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option data-code="784"value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                            <option data-code="597"value="SR" label="Suriname">Suriname</option>
                            <option data-code="868"value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option data-code="649"value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option data-code="340"value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
                            <option data-code=""value="US" label="United States">United States</option>
                            <option data-code="598"value="UY" label="Uruguay">Uruguay</option>
                            <option data-code="58" value="VE" label="Venezuela">Venezuela</option>
                            </optgroup>                            <optgroup id="country-optgroup-Asia" label="Asia">
                            <option data-code="93" value="AF" label="Afghanistan">Afghanistan</option>
                            <option data-code="374" value="AM" label="Armenia">Armenia</option>
                            <option data-code="944" value="AZ" label="Azerbaijan">Azerbaijan</option>
                            <option data-code="973" value="BH" label="Bahrain">Bahrain</option>
                            <option data-code="880" value="BD" label="Bangladesh">Bangladesh</option>
                            <option data-code="975" value="BT" label="Bhutan">Bhutan</option>
                            <option data-code="673" value="BN" label="Brunei">Brunei</option>
                            <option data-code="855" value="KH" label="Cambodia">Cambodia</option>
                            <option data-code="86" value="CN" label="China">China</option>
                            <option data-code="357" value="CY" label="Cyprus">Cyprus</option>
                            <option data-code="995" value="GE" label="Georgia">Georgia</option>
                            <option data-code="852" value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
                            <option data-code="91" value="IN" label="India">India</option>
                            <option data-code="62" value="ID" label="Indonesia">Indonesia</option>
                            <option data-code="98" value="IR" label="Iran">Iran</option>
                            <option data-code="964" value="IQ" label="Iraq">Iraq</option>
                            <option data-code="972" value="IL" label="Israel">Israel</option>
                            <option data-code="81" value="JP" label="Japan">Japan</option>
                            <option data-code="962" value="JO" label="Jordan">Jordan</option>
                            <option data-code="996" value="KZ" label="Kazakhstan">Kazakhstan</option>
                            <option data-code="965" value="KW" label="Kuwait">Kuwait</option>
                            <option data-code="966" value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
                            <option data-code="856" value="LA" label="Laos">Laos</option>
                            <option data-code="961" value="LB" label="Lebanon">Lebanon</option>
                            <option data-code="" value="MO" label="Macau SAR China">Macau SAR China</option>
                            <option data-code="60" value="MY" label="Malaysia">Malaysia</option>
                            <option data-code="960" value="MV" label="Maldives">Maldives</option>
                            <option data-code="976" value="MN" label="Mongolia">Mongolia</option>
                            <option data-code="95" value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
                            <option data-code="977" value="NP" label="Nepal">Nepal</option>
                            <option data-code="" value="NT" label="Neutral Zone">Neutral Zone</option>
                            <option data-code="850" value="KP" label="North Korea">North Korea</option>
                            <option data-code="968" value="OM" label="Oman">Oman</option>
                            <option data-code="92" value="PK" label="Pakistan">Pakistan</option>
                            <option data-code="970" value="PS" label="Palestinian Territories">Palestinian Territories</option>
                            <option data-code="" value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
                            <option data-code="63" value="PH" label="Philippines">Philippines</option>
                            <option data-code="974" value="QA" label="Qatar">Qatar</option>
                            <option data-code="966" value="SA" label="Saudi Arabia">Saudi Arabia</option>
                            <option data-code="65" value="SG" label="Singapore">Singapore</option>
                            <option data-code="82" value="KR" label="South Korea">South Korea</option>
                            <option data-code="94" value="LK" label="Sri Lanka">Sri Lanka</option>
                            <option data-code="963" value="SY" label="Syria">Syria</option>
                            <option data-code="886" value="TW" label="Taiwan">Taiwan</option>
                            <option data-code="922" value="TJ" label="Tajikistan">Tajikistan</option>
                            <option data-code="66" value="TH" label="Thailand">Thailand</option>
                            <option data-code="" value="TL" label="Timor-Leste">Timor-Leste</option>
                            <option data-code="90" value="TR" label="Turkey">Turkey</option>
                            <option data-code="933" value="™" label="Turkmenistan">Turkmenistan</option>
                            <option data-code="971" value="AE" label="United Arab Emirates">United Arab Emirates</option>
                            <option data-code="988" value="UZ" label="Uzbekistan">Uzbekistan</option>
                            <option data-code="84" value="VN" label="Vietnam">Vietnam</option>
                            <option data-code="967" value="YE" label="Yemen">Yemen</option>
                            </optgroup>
                            <optgroup id="country-optgroup-Europe" label="Europe">
                            <option data-code="355" value="AL" label="Albania">Albania</option>
                            <option data-code="376" value="AD" label="Andorra">Andorra</option>
                            <option data-code="43" value="AT" label="Austria">Austria</option>
                            <option data-code="375" value="BY" label="Belarus">Belarus</option>
                            <option data-code="32" value="BE" label="Belgium">Belgium</option>
                            <option data-code="387" value="BA" label="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option data-code="359" value="BG" label="Bulgaria">Bulgaria</option>
                            <option data-code="385" value="HR" label="Croatia">Croatia</option>
                            <option data-code="357" value="CY" label="Cyprus">Cyprus</option>
                            <option data-code="420" value="CZ" label="Czech Republic">Czech Republic</option>
                            <option data-code="45" value="DK" label="Denmark">Denmark</option>
                            <option data-code="" value="DD" label="East Germany">East Germany</option>
                            <option data-code="372" value="EE" label="Estonia">Estonia</option>
                            <option data-code="298" value="FO" label="Faroe Islands">Faroe Islands</option>
                            <option data-code="358" value="FI" label="Finland">Finland</option>
                            <option data-code="33" value="FR" label="France">France</option>
                            <option data-code="49" value="DE" label="Germany">Germany</option>
                            <option data-code="350" value="GI" label="Gibraltar">Gibraltar</option>
                            <option data-code="30" value="GR" label="Greece">Greece</option>
                            <option data-code="441481" value="GG" label="Guernsey">Guernsey</option>
                            <option data-code="36" value="HU" label="Hungary">Hungary</option>
                            <option data-code="354" value="IS" label="Iceland">Iceland</option>
                            <option data-code="353" value="IE" label="Ireland">Ireland</option>
                            <option data-code="441624" value="IM" label="Isle of Man">Isle of Man</option>
                            <option data-code="39" value="IT" label="Italy">Italy</option>
                            <option data-code="441534" value="JE" label="Jersey">Jersey</option>
                            <option data-code="371" value="LV" label="Latvia">Latvia</option>
                            <option data-code="423" value="LI" label="Liechtenstein">Liechtenstein</option>
                            <option data-code="370" value="LT" label="Lithuania">Lithuania</option>
                            <option data-code="352" value="LU" label="Luxembourg">Luxembourg</option>
                            <option data-code="389" value="MK" label="Macedonia">Macedonia</option>
                            <option data-code="356" value="MT" label="Malta">Malta</option>
                            <option data-code="" value="FX" label="Metropolitan France">Metropolitan France</option>
                            <option data-code="373" value="MD" label="Moldova">Moldova</option>
                            <option data-code="377" value="MC" label="Monaco">Monaco</option>
                            <option data-code="382" value="ME" label="Montenegro">Montenegro</option>
                            <option data-code="31" value="NL" label="Netherlands">Netherlands</option>
                            <option data-code="47" value="NO" label="Norway">Norway</option>
                            <option data-code="48" value="PL" label="Poland">Poland</option>
                            <option data-code="351" value="PT" label="Portugal">Portugal</option>
                            <option data-code="40" value="RO" label="Romania">Romania</option>
                            <option data-code="7" value="RU" label="Russia">Russia</option>
                            <option data-code="" value="SM" label="San Marino">San Marino</option>
                            <option data-code="381" value="RS" label="Serbia">Serbia</option>
                            <option data-code="" value="CS" label="Serbia and Montenegro">Serbia and Montenegro</option>
                            <option data-code="421" value="SK" label="Slovakia">Slovakia</option>
                            <option data-code="386" value="SI" label="Slovenia">Slovenia</option>
                            <option data-code="34" value="ES" label="Spain">Spain</option>
                            <option data-code="47" value="SJ" label="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option data-code="46" value="SE" label="Sweden">Sweden</option>
                            <option data-code="41" value="CH" label="Switzerland">Switzerland</option>
                            <option data-code="380" value="UA" label="Ukraine">Ukraine</option>
                            <option data-code="" value="SU" label="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
                            <option data-code="" value="GB" label="United Kingdom">United Kingdom</option>
                            <option data-code="" value="VA" label="Vatican City">Vatican City</option>
                            <option data-code="" value="AX" label="Åland Islands">Åland Islands</option>
                            </optgroup>
                            <optgroup id="country-optgroup-Oceania" label="Oceania">
                            <option data-code="1648" value="AS" label="American Samoa">American Samoa</option>
                            <option data-code="672" value="AQ" label="Antarctica">Antarctica</option>
                            <option data-code="61" value="AU" label="Australia">Australia</option>
                            <option data-code="" value="BV" label="Bouvet Island">Bouvet Island</option>
                            <option data-code="246" value="IO" label="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option data-code="61" value="CX" label="Christmas Island">Christmas Island</option>
                            <option data-code="61" value="CC" label="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
                            <option data-code="682" value="CK" label="Cook Islands">Cook Islands</option>
                            <option data-code="679" value="FJ" label="Fiji">Fiji</option>
                            <option data-code="689" value="PF" label="French Polynesia">French Polynesia</option>
                            <option data-code="" value="TF" label="French Southern Territories">French Southern Territories</option>
                            <option data-code="1671" value="GU" label="Guam">Guam</option>
                            <option data-code="" value="HM" label="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                            <option data-code="686" value="KI" label="Kiribati">Kiribati</option>
                            <option data-code="692" value="MH" label="Marshall Islands">Marshall Islands</option>
                            <option data-code="691" value="FM" label="Micronesia">Micronesia</option>
                            <option data-code="674" value="NR" label="Nauru">Nauru</option>
                            <option data-code="687" value="NC" label="New Caledonia">New Caledonia</option>
                            <option data-code="64" value="NZ" label="New Zealand">New Zealand</option>
                            <option data-code="683" value="NU" label="Niue">Niue</option>
                            <option data-code="" value="NF" label="Norfolk Island">Norfolk Island</option>
                            <option data-code="1670" value="MP" label="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option data-code="680" value="PW" label="Palau">Palau</option>
                            <option data-code="675" value="PG" label="Papua New Guinea">Papua New Guinea</option>
                            <option data-code="" value="PN" label="Pitcairn Islands">Pitcairn Islands</option>
                            <option data-code="" value="WS" label="Samoa">Samoa</option>
                            <option data-code="677" value="SB" label="Solomon Islands">Solomon Islands</option>
                            <option data-code="" value="GS" label="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                            <option data-code="690" value="TK" label="Tokelau">Tokelau</option>
                            <option data-code="676" value="TO" label="Tonga">Tonga</option>
                            <option data-code="688" value="TV" label="Tuvalu">Tuvalu</option>
                            <option data-code="" value="UM" label="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
                            <option data-code="678" value="VU" label="Vanuatu">Vanuatu</option>
                            <option data-code="681" value="WF" label="Wallis and Futuna">Wallis and Futuna</option>
                            </optgroup>
                            </select>
				
				
					
				<input type="number" name="phone" id="phone" placeholder="Phone"  />
				
					
				
				
				<input type="checkbox" id="brand1" value="">
				<label for="brand1"><span></span>I accept the terms of use</label> 
                
        <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit" >Sign Up</button>
        <div id="clickhere">
             <h4 class="haveAcc" style="color: red"></h4>
            <h4>You already have an account?
               <div><a href="#" id="flipToRecover1" class="flipLink" title="Click Here to signin">Login Here</a></div>
            </h4>
        </div>     

			</form>
			<!-- Sign up Form-->
		</div>

	</div>	
	<!-- //main --> 
	
    
	 
	      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 
    <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/js/register.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/phoneCode.js"></script>


</body>
</html>
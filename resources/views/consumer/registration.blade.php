<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>aBill</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}">
	<link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">

	<link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- vector map CSS -->
	<link href="{{ asset('public/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('public/vendors/bower_components/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="{{ asset('public/dist/css/style.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('public/css/customstyle.css') }}" rel="stylesheet" type="text/css">

	<style>
		/*custom font*/
		@import url(https://fonts.googleapis.com/css?family=Montserrat);
		body {
			background:#ffff;
		}

	</style>
</head>
<body>
<!--Preloader-->
<div class="preloader-it">
	<div class="la-anim-1"></div>
</div>
<!--/Preloader-->

<div class="wrapper box-layout pa-0">
	<header class="sp-header">
		<div class="sp-logo-wrap pull-left">
			<a href="">
				<img class="brand-img" src="{{ asset('public/img/logo.gif') }}" alt="brand"/>
				<span class="brand-text">aBill</span>
			</a>
		</div>
		<div class="form-group mb-0 pull-right">
			<span class="inline-block pr-10">Already have an account?</span>
			<a class="inline-block btn btn-warning btn-rounded btn-outline" href="{{ URL::to('login') }}">Sign In</a>
		</div>
		<div class="clearfix"></div>
	</header>

	<!-- Main Content -->
	<div class="page-wrapper pa-0 ma-0 auth-page">
		<div class="container-fluid">
			<!-- Row -->
			<div class="table-struct full-width full-height">
				<div class="table-cell auth-form-wrap">
					<div class="ml-auto mr-auto no-float">

						<!-- multistep form -->
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="mb-30">
									<h3 class="text-center txt-dark mb-10">Sign up to aBill</h3>
									<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
								</div>
								<div class="form-wrap">
									<form id="msform" action="{{ route('consumerSaveData') }}" method="post" novalidate data-toggle="validator" role="form">
									{{ csrf_field() }}
									<!-- progressbar -->
										<ul id="progressbar">
											<li class="active" id="per">Personal Details</li>
											<li id="acc">Account Information</li>
											<!-- <li id="credit">Credit Details</li> -->
										</ul>
										<!-- fieldsets -->

										<fieldset id="personalinfo">
											<!-- <h2 class="fs-title">Create your account</h2> -->
											<h3 class="fs-subtitle">This is step 1</h3>
											<div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
												<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
													<div class="form-group">
														<label class="control-label ">First Name <font color="red">*</font></label>
														<input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" onkeypress="return isAlpha(event);" value="" required />
														<div class="help-block with-errors"></div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
													<div class="form-group">
														<label class="control-label ">Last Name <font color="red">*</font></label>
														<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" onkeypress="return isAlpha(event);" required />
														<div class="help-block with-errors"></div>
													</div>
												</div>

												<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
													<div class="form-group">
														<label class="control-label ">Email Address <font color="red">*</font></label>
														<input type="email" class="form-control" name="email" id="email" data-pattern="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/" placeholder="Email Address"  required/>
														<div class="help-block with-errors"></div>
													</div>
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
												<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
													<div class="form-group">
														<label class="control-label ">Phone Number <font color="red">*</font></label>
														<input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="Phone Number" onkeypress="return isNumeric(event);" required/>
														<div class="help-block with-errors" ></div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
													<div class="form-group">
														<label class="control-label ">Enter Address1 <font color="red">*</font></label>
														<textarea rows=2 class="form-control" cols=5 id="address1" name="address1" placeholder="Enter Address1" required></textarea>
														<div class="help-block with-errors"></div>
													</div>

												</div>
												<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
													<div class="form-group">
														<label class="control-label ">Enter Address2</label>
														<textarea rows=2 cols=5 id="address2" name="address2" placeholder="Enter Address2"></textarea>
														<div class="help-block with-errors"></div>
													</div>
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
												<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
													<div class="form-group">
														<label class="control-label ">Select Country</label>
														<select name="country" id="country">
															<option value="AF">Afghanistan</option>
															<option value="AL">Albania</option>
															<option value="DZ">Algeria</option>
															<option value="AS">American Samoa</option>
															<option value="AD">Andorra</option>
															<option value="AO">Angola</option>
															<option value="AI">Anguilla</option>
															<option value="AQ">Antarctica</option>
															<option value="AG">Antigua and Barbuda</option>
															<option value="AR">Argentina</option>
															<option value="AM">Armenia</option>
															<option value="AW">Aruba</option>
															<option value="AU">Australia</option>
															<option value="AT">Austria</option>
															<option value="AZ">Azerbaijan</option>
															<option value="BS">Bahamas</option>
															<option value="BH">Bahrain</option>
															<option value="BD">Bangladesh</option>
															<option value="BB">Barbados</option>
															<option value="BY">Belarus</option>
															<option value="BE">Belgium</option>
															<option value="BZ">Belize</option>
															<option value="BJ">Benin</option>
															<option value="BM">Bermuda</option>
															<option value="BT">Bhutan</option>
															<option value="BO">Bolivia</option>
															<option value="BA">Bosnia and Herzegowina</option>
															<option value="BW">Botswana</option>
															<option value="BV">Bouvet Island</option>
															<option value="BR">Brazil</option>
															<option value="IO">British Indian Ocean Territory</option>
															<option value="BN">Brunei Darussalam</option>
															<option value="BG">Bulgaria</option>
															<option value="BF">Burkina Faso</option>
															<option value="BI">Burundi</option>
															<option value="KH">Cambodia</option>
															<option value="CM">Cameroon</option>
															<option value="CA">Canada</option>
															<option value="CV">Cape Verde</option>
															<option value="KY">Cayman Islands</option>
															<option value="CF">Central African Republic</option>
															<option value="TD">Chad</option>
															<option value="CL">Chile</option>
															<option value="CN">China</option>
															<option value="CX">Christmas Island</option>
															<option value="CC">Cocos (Keeling) Islands</option>
															<option value="CO">Colombia</option>
															<option value="KM">Comoros</option>
															<option value="CG">Congo</option>
															<option value="CD">Congo, the Democratic Republic of the</option>
															<option value="CK">Cook Islands</option>
															<option value="CR">Costa Rica</option>
															<option value="CI">Cote d'Ivoire</option>
															<option value="HR">Croatia (Hrvatska)</option>
															<option value="CU">Cuba</option>
															<option value="CY">Cyprus</option>
															<option value="CZ">Czech Republic</option>
															<option value="DK">Denmark</option>
															<option value="DJ">Djibouti</option>
															<option value="DM">Dominica</option>
															<option value="DO">Dominican Republic</option>
															<option value="TP">East Timor</option>
															<option value="EC">Ecuador</option>
															<option value="EG">Egypt</option>
															<option value="SV">El Salvador</option>
															<option value="GQ">Equatorial Guinea</option>
															<option value="ER">Eritrea</option>
															<option value="EE">Estonia</option>
															<option value="ET">Ethiopia</option>
															<option value="FK">Falkland Islands (Malvinas)</option>
															<option value="FO">Faroe Islands</option>
															<option value="FJ">Fiji</option>
															<option value="FI">Finland</option>
															<option value="FR">France</option>
															<option value="FX">France, Metropolitan</option>
															<option value="GF">French Guiana</option>
															<option value="PF">French Polynesia</option>
															<option value="TF">French Southern Territories</option>
															<option value="GA">Gabon</option>
															<option value="GM">Gambia</option>
															<option value="GE">Georgia</option>
															<option value="DE">Germany</option>
															<option value="GH">Ghana</option>
															<option value="GI">Gibraltar</option>
															<option value="GR">Greece</option>
															<option value="GL">Greenland</option>
															<option value="GD">Grenada</option>
															<option value="GP">Guadeloupe</option>
															<option value="GU">Guam</option>
															<option value="GT">Guatemala</option>
															<option value="GN">Guinea</option>
															<option value="GW">Guinea-Bissau</option>
															<option value="GY">Guyana</option>
															<option value="HT">Haiti</option>
															<option value="HM">Heard and Mc Donald Islands</option>
															<option value="VA">Holy See (Vatican City State)</option>
															<option value="HN">Honduras</option>
															<option value="HK">Hong Kong</option>
															<option value="HU">Hungary</option>
															<option value="IS">Iceland</option>
															<option value="IN" selected>India</option>
															<option value="ID">Indonesia</option>
															<option value="IR">Iran (Islamic Republic of)</option>
															<option value="IQ">Iraq</option>
															<option value="IE">Ireland</option>
															<option value="IL">Israel</option>
															<option value="IT">Italy</option>
															<option value="JM">Jamaica</option>
															<option value="JP">Japan</option>
															<option value="JO">Jordan</option>
															<option value="KZ">Kazakhstan</option>
															<option value="KE">Kenya</option>
															<option value="KI">Kiribati</option>
															<option value="KP">Korea, Democratic People's Republic of</option>
															<option value="KR">Korea, Republic of</option>
															<option value="KW">Kuwait</option>
															<option value="KG">Kyrgyzstan</option>
															<option value="LA">Lao People's Democratic Republic</option>
															<option value="LV">Latvia</option>
															<option value="LB">Lebanon</option>
															<option value="LS">Lesotho</option>
															<option value="LR">Liberia</option>
															<option value="LY">Libyan Arab Jamahiriya</option>
															<option value="LI">Liechtenstein</option>
															<option value="LT">Lithuania</option>
															<option value="LU">Luxembourg</option>
															<option value="MO">Macau</option>
															<option value="MK">Macedonia, The Former Yugoslav Republic of</option>
															<option value="MG">Madagascar</option>
															<option value="MW">Malawi</option>
															<option value="MY">Malaysia</option>
															<option value="MV">Maldives</option>
															<option value="ML">Mali</option>
															<option value="MT">Malta</option>
															<option value="MH">Marshall Islands</option>
															<option value="MQ">Martinique</option>
															<option value="MR">Mauritania</option>
															<option value="MU">Mauritius</option>
															<option value="YT">Mayotte</option>
															<option value="MX">Mexico</option>
															<option value="FM">Micronesia, Federated States of</option>
															<option value="MD">Moldova, Republic of</option>
															<option value="MC">Monaco</option>
															<option value="MN">Mongolia</option>
															<option value="MS">Montserrat</option>
															<option value="MA">Morocco</option>
															<option value="MZ">Mozambique</option>
															<option value="MM">Myanmar</option>
															<option value="NA">Namibia</option>
															<option value="NR">Nauru</option>
															<option value="NP">Nepal</option>
															<option value="NL">Netherlands</option>
															<option value="AN">Netherlands Antilles</option>
															<option value="NC">New Caledonia</option>
															<option value="NZ">New Zealand</option>
															<option value="NI">Nicaragua</option>
															<option value="NE">Niger</option>
															<option value="NG">Nigeria</option>
															<option value="NU">Niue</option>
															<option value="NF">Norfolk Island</option>
															<option value="MP">Northern Mariana Islands</option>
															<option value="NO">Norway</option>
															<option value="OM">Oman</option>
															<option value="PK">Pakistan</option>
															<option value="PW">Palau</option>
															<option value="PA">Panama</option>
															<option value="PG">Papua New Guinea</option>
															<option value="PY">Paraguay</option>
															<option value="PE">Peru</option>
															<option value="PH">Philippines</option>
															<option value="PN">Pitcairn</option>
															<option value="PL">Poland</option>
															<option value="PT">Portugal</option>
															<option value="PR">Puerto Rico</option>
															<option value="QA">Qatar</option>
															<option value="RE">Reunion</option>
															<option value="RO">Romania</option>
															<option value="RU">Russian Federation</option>
															<option value="RW">Rwanda</option>
															<option value="KN">Saint Kitts and Nevis</option>
															<option value="LC">Saint LUCIA</option>
															<option value="VC">Saint Vincent and the Grenadines</option>
															<option value="WS">Samoa</option>
															<option value="SM">San Marino</option>
															<option value="ST">Sao Tome and Principe</option>
															<option value="SA">Saudi Arabia</option>
															<option value="SN">Senegal</option>
															<option value="SC">Seychelles</option>
															<option value="SL">Sierra Leone</option>
															<option value="SG">Singapore</option>
															<option value="SK">Slovakia (Slovak Republic)</option>
															<option value="SI">Slovenia</option>
															<option value="SB">Solomon Islands</option>
															<option value="SO">Somalia</option>
															<option value="ZA">South Africa</option>
															<option value="GS">South Georgia and the South Sandwich Islands</option>
															<option value="ES">Spain</option>
															<option value="LK">Sri Lanka</option>
															<option value="SH">St. Helena</option>
															<option value="PM">St. Pierre and Miquelon</option>
															<option value="SD">Sudan</option>
															<option value="SR">Suriname</option>
															<option value="SJ">Svalbard and Jan Mayen Islands</option>
															<option value="SZ">Swaziland</option>
															<option value="SE">Sweden</option>
															<option value="CH">Switzerland</option>
															<option value="SY">Syrian Arab Republic</option>
															<option value="TW">Taiwan, Province of China</option>
															<option value="TJ">Tajikistan</option>
															<option value="TZ">Tanzania, United Republic of</option>
															<option value="TH">Thailand</option>
															<option value="TG">Togo</option>
															<option value="TK">Tokelau</option>
															<option value="TO">Tonga</option>
															<option value="TT">Trinidad and Tobago</option>
															<option value="TN">Tunisia</option>
															<option value="TR">Turkey</option>
															<option value="TM">Turkmenistan</option>
															<option value="TC">Turks and Caicos Islands</option>
															<option value="TV">Tuvalu</option>
															<option value="UG">Uganda</option>
															<option value="UA">Ukraine</option>
															<option value="AE">United Arab Emirates</option>
															<option value="GB">United Kingdom</option>
															<option value="US">United States</option>
															<option value="UM">United States Minor Outlying Islands</option>
															<option value="UY">Uruguay</option>
															<option value="UZ">Uzbekistan</option>
															<option value="VU">Vanuatu</option>
															<option value="VE">Venezuela</option>
															<option value="VN">Viet Nam</option>
															<option value="VG">Virgin Islands (British)</option>
															<option value="VI">Virgin Islands (U.S.)</option>
															<option value="WF">Wallis and Futuna Islands</option>
															<option value="EH">Western Sahara</option>
															<option value="YE">Yemen</option>
															<option value="YU">Yugoslavia</option>
															<option value="ZM">Zambia</option>
															<option value="ZW">Zimbabwe</option>
														</select>
														<div class="help-block with-errors"></div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
													<div class="form-group">
														<label class="control-label ">State <font color="red">*</font></label>
														<input type="text" class="form-control" name="state" id="state" placeholder="State" onkeypress="return isAlpha(event);" required>
														<div class="help-block with-errors" ></div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
													<div class="form-group">
														<label class="control-label ">City <font color="red">*</font></label>
														<input type="text" class="form-control" name="city" id="city" placeholder="City" onkeypress="return isAlpha(event);" required>
														<div class="help-block with-errors"></div>
													</div>
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
												<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
													<div class="form-group">
														<label class="control-label ">Pincode <font color="red">*</font></label>
														<input type="text" class="form-control" name="pincode" onkeypress="return isNumeric(event);" id="pincode" placeholder="Pincode" required />
														<div class="help-block with-errors" ></div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
													<div class="form-group">
														<label class="control-label ">Organization Name</label>
														<input type="text" name="organizationname" id="organizationname"placeholder="Organization Name" onkeypress="return isAlpha(event);"/>
														<div class="help-block with-errors" ></div>
													</div>
												</div>
												<div class="ccol-lg-4 col-md-4 col-sm-12 col-sm-12">
													<div class="form-group">
														<label class="control-label">Select Contact Type</label>
														<select name="contactType" id="contactType">
															<option value="20" selected="selected">Primary</option>
															<option value="40">Secondary</option>
														</select>
													</div>
												</div>
											</div>

											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<input type="button" name="next" class="next action-button" value="Next" id="nextpersonalinfo" />
											</div>
										</fieldset>
										<fieldset id="accountinfo">
											<h3 class="fs-subtitle">This is step 2</h3>
											<div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
												<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
													<div class="form-group">
														<label for="inputEmail" class="control-label ">Login Name <font color="red">*</font></label>
														<input type="text" name="loginname" id="loginname"placeholder="Login Name" data-error="Enter Login Name" required minlength="6" data-minlength-error="Minimum Login name character 6" />
														<div class="help-block with-errors"></div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
													<div class="form-group">
														<label for="inputEmail" class="control-label ">Password <font color="red">*</font></label>
														<input type="password" name="password" id="password"placeholder="Password" data-minlength-error="Minimum Password character 6" data-error="Enter Password" required minlength=6/>
														<div class="help-block with-errors"></div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
													<div class="form-group">
														<label class="control-label ">Verify Password <font color="red">*</font></label>
														<input type="password" class="form-control" data-match="#password" data-match-error="Whoops, password don't match " name="verifypassword" id="verifypassword" placeholder="Verify Password" required/>
														<div class="help-block with-errors"></div>
													</div>
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">



												<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
													<label>Select Payment Type</label>
													<select name="prefered_type" id="prefered_type"><option>Select Payment Type</option><option value="1">Credit Card</option>
														<option value="2">ACH</option><option value="1">Cheque</option></select>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
													<div class="checkbox mt-25">
														<input type="checkbox" name="include_in_noti" id="include_in_noti" checked="">
														<label for="include_in_noti">
															Include in Notifications
														</label>
													</div>

												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<input type="button" name="previous" class="previous action-button" value="Previous" id="prevaccountinfo"/>
												<input type="submit" name="submit" class="action-button" value="Submit" />
											</div>
										</fieldset>
										<!-- 	  <fieldset id="creditinfo">

                                                <h3 class="fs-subtitle">This is step 3</h3>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
                                                        <select name="prefered_type" id="prefered_type"><option>Select Prefered Payment Type</option><option value="1">Credit Card</option>
                                                        <option value="2">ACH</option></select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">

                                                        <select name="balance_type" id="balance_type" ><option value="">Select Balance Type</option>
                                                            <option>None</option><option value="1">None</option>
                                                            <option value="2">Pre-Paid</option>
                                                            <option value="3">Credit Limit</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">

                                                        <select name="invoice_delivery_method" id="invoice_delivery_method"><option value="">Select Invoice Delivery Method </option><option value="1">E-mail</option>
                                                        <option value="2">Paper</option>
                                                        <option value="3">E-mail & Paper</option></select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">

                                                        <input type="text" placeholder="0.00 Credit Limit" name="credit_limit" id="credit_limit">
                                                    </div>
                                                     <div class="col-md-4">

                                                        <input type="text" placeholder="0.00 AutoRecharge Threshold" name="autorecharge_threshold" id="autorecharge_threshold">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">

                                                        <div class="col-md-6">
                                                            <input type="text" placeholder="Due Date" id="due_date" name="due_date">
                                                        </div>
                                                        <div class="col-md-4">
                                                        <select name="dueDateUnitId" id="dueDateUnitId">
                                                            <option value="1">Month</option>
                                                            <option value="2">Week</option>
                                                            <option value="3" selected="selected">Day</option>
                                                            <option value="4">Year</option>
                                                            <option value="5">Second</option>
                                                            <option value="6">Minute</option>
                                                            <option value="7">Hour</option>
                                                            <option value="8">Byte</option>
                                                            <option value="9">MB</option>
                                                            <option value="10">GB</option>
                                                            <option value="11">TB</option>
                                                            <option value="12">Visit</option>
                                                            <option value="13">10Visit</option>
                                                            <option value="14">none</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">

                                                        <input type="text" id="card_name" name="card_name" placeholder="Name on Card">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">

                                                        <input type="text" name="card_number" id="card_number"  placeholder="Card Number">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
                                                        <div class="form-horizontal">
                                                              <div class="control-group form-inline">
                                                                  <div class="controls col-md-4 col-sm-3 col-xs-4">
                                                                <label class="control-label" style="margin-top:2%">Expiry Date </label>
                                                                </div>
                                                                <div class="controls col-md-3 col-sm-3 col-xs-3">
                                                                    <input type="text" id="expiry_month" name="expiry_month" maxlength=2 size=2 placeholder="mm">
                                                                </div>

                                                                <div class="controls col-md-3 col-sm-3 col-xs-3">
                                                                    <input type="text" id="expiry_year" name="expiry_year" maxlength=2 size=2 placeholder="yy">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">

                                                        <input type="text" id="ach_routing" name="ach_routing" placeholder="ABA Routing Number/BIC">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">

                                                        <input type="text"name="bank_name" id="bank_name" placeholder="Bank Name">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">

                                                        <input type="text" placeholder="Bank Account Number" id="account_number" name="account_number">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">

                                                        <input type="text" id="customer_name" name="customer_name" placeholder="Name on Customer Account">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">

                                                        <select name="account_type" id="account_type"><option>Select Account Type</option ><option value="1">Saving</option><option value="2">Checking</option></select>
                                                    </div>

                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
                                                        <label>Document Name</label>
                                                        <input type="text" name="docname_0" id="docname_0" placeholder="Document Name">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
                                                        <label>Document Upload</label>
                                                        <input type="file" id="docupload_0" name="docupload_0">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
                                                        <button class="btn btn-default btn-icon left-icon" style="margin-top:5%;margin-right:50%" onclick="return addnewdoc()"> <i class="fa fa-plus"></i> <span>Add Another Document</span></button>
                                                    </div>

                                                </div>
                                                <div id="adddoc"></div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                  <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
                                                    <label>Notes</label>
                                                    <textarea rows=5 cols=5 name="notes" id="notes"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <input type="button" name="previous" class="previous action-button" id="prevcreditinfo" value="Previous" />
                                                <input type="submit" name="submit" class="action-button" value="Submit" />
                                                </div>
                                            </fieldset> -->

									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- /Row -->
		</div>

	</div>
	<!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="{{ asset('public/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('public/js/jquery-ui.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('public/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>

<script src="{{ asset('public/vendors/bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{ asset('public/dist/js/jquery.slimscroll.js') }}"></script>

<!-- Init JavaScript -->
<script src="{{ asset('public/dist/js/init.js') }}"></script>
</body>
</html>

<script>

    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches
    $("#per").addClass("active");
    var cnt=1;
    function isAlpha(evt)
    {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if(charCode==32)
            return true;
        if (charCode == 8 || charCode == 46 || (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122 || charCode!=32))
            return true;
        if(charCode==32)
            return true;
        return false;
    }
    function isNumeric(evt)
    {

        var charCode = (evt.which) ? evt.which : evt.keyCode
        if(charCode==32)
            return true;
        if (charCode > 31 && (charCode < 45 || charCode > 57))
            return false;

        return true;
    }
    function addnewdoc(){

        html='';
        html+='<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="del_'+cnt+'">';
        html+=' <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">'+
            '<label>Document Name</label>'+
            '<input type="text" name="docname_'+cnt+'" id="docname_'+cnt+'" placeholder="Document Name">'+
            '</div>'+
            '<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">'+
            '<label>Document Upload</label>'+
            '<input type="file" name="docupload_'+cnt+'" id="docupload_'+cnt+'">'+
            '</div><div class="col-lg-4 col-md-4 col-sm-12 col-sm-12"><button class="btn btn-pinterest  btn-icon-anim btn-square" style="margin-top:5%;margin-right:50%" type="button"  onclick="return deldoc('+cnt+')"><i class="fa fa-trash"></i></button></div>';

        html+='</div>';
        $('#adddoc').append(html);
        cnt++;
        return false;

    }
    function deldoc(c){
        $('#del_'+c).remove();
        return false;
    }
    $(".next").click(function(){
        if(animating) return false;
        animating = true;

        // current_fs = $(this).parent();
        // next_fs = $(this).parent().next();
        // alert(next_fs.id);
        if($(this).attr('id')=='nextpersonalinfo'){
            current_fs = $('#personalinfo');
            next_fs = $('#accountinfo');
            $("#acc").addClass("active");
            $("#per").removeClass("active");
            $("#credit").removeClass("active");
        }
        if($(this).attr('id')=='nextaccountinfo'){
            current_fs = $('#accountinfo');
            next_fs = $('#creditinfo');
            $("#acc").removeClass("active");
            $("#per").removeClass("active");
            $("#credit").addClass("active");
        }


        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;

                //2. bring next_fs from the right(50%)
                left = (now * 50)+"%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale('+scale+')',
                    'position': 'absolute'
                });
                next_fs.css({'left': left, 'opacity': opacity});
            },
            duration: 800,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function(){
        if(animating) return false;
        animating = true;

        // current_fs = $(this).parent();
        // alert($(this).attr('id'));
        // previous_fs = $(this).parent().prev();
        if($(this).attr('id')=='prevaccountinfo'){
            current_fs = $('#accountinfo');
            previous_fs=$('#personalinfo');
            $('#personalinfo').show();
            $("#acc").removeClass("active");
            $("#per").addClass("active");
            $("#credit").removeClass("active");
        }
        if($(this).attr('id')=='prevcreditinfo'){
            current_fs = $('#creditinfo');
            previous_fs = $('#accountinfo');
            $('#accountinfo').show();
            $("#acc").addClass("active");
            $("#per").removeClass("active");
            $("#credit").removeClass("active");
        }
        // previous_fs=$('#personalinfo');
        // alert(previous_fs);
        //de-activate current step on progressbar

        //show the previous fieldset
        // previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1-now) * 50)+"%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity =1 - now;
                // current_fs.css({'left': left});
                // previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity,'position': 'absolute'});
                previous_fs.css({
                    'transform': 'scale('+scale+')',
                    'position': 'absolute',
                    'opacity': opacity
                });
                current_fs.css({'left': left});

            },
            duration: 800,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".submit").click(function(){
        $('#msform').submit();
        return true;
    });


</script>


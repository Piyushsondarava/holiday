@extends('front.include.app')
@section('content')


<!-- Main content -->
    <section class="inner-banner">
        <div class="header-bg">
            <!--<div class="container-fluid">-->
            <div class="navv">
                <input type="checkbox" id="nav-check">
                <div class="nav-header">
                    <div class="nav-title">
                        <a href="accomodation.html">logo</a>
                    </div>
                </div>
                <div class="nav-btn">
                    <label for="nav-check">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>
                </div>
                <div class="nav-links">
                    <a href="#" target="_blank"><i class="fa fa-credit-card"></i> Credit Bal. : <span id="spanCredit">EUR 61130.86</span>
                    <a href="profile.html" target="_blank"><i class="fa fa-user - circle"></i> Hi, Sanjay</a>
                    <a href="#" target="_blank"><i class="fa fa-home"></i> Home</a>
                    <!--<a href="#" target="_blank"><i class="fa fa-pie-chart"></i> Admin</a>-->
                    <a href="#" target="_blank"><i class="fa fa-handshake-o"></i> Sales Representative</a>
                    <a href="#" target="_blank">Country</a>
                    <a href="#" target="_blank">Language</a>
                    <a href="#" target="_blank">Currency</a>
                    <a href="#" target="_blank">Login</a>
                </div>
            </div>
        <!--</div>-->
        </div>
    </section>
    <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">-->
    <!--    <a class="navbar-brand" href="#">logo</a>-->
    <!--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
    <!--        <span class="navbar-toggler-icon"></span>-->
    <!--    </button>-->
  
    <!--    <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
    <!--        <ul class="navbar-nav mr-auto">-->
    <!--            <li class="nav-item active">-->
    <!--                <a class="nav-link" href="#"><i class="fa fa-credit-card"></i> Credit Bal. : <span id="spanCredit">EUR 61130.86</span></a>-->
    <!--            </li>-->
    <!--            <li class="nav-item">-->
    <!--                <a class="nav-link" href="#" id="aUserName"><i class="fa fa-user - circle"></i> Hi, Sanjay</a>-->
                    <!--<a class="nav-link" href="#">Link</a>-->
    <!--            </li>-->
    <!--            <li class="nav-item">-->
    <!--                <a class="nav-link" href="Home.aspx"><i class="fa fa-home"></i>&nbsp;Home</a>-->
    <!--            </li>-->
    <!--        </ul>-->
    <!--    </div>-->
    <!--</nav>-->
    
<section class="inner-banner">
    <img src="{{ asset('images/inner-banner.png') }}" title="" alt="" class="img-fluid" />
    <div class="container innerpage-container">
        <div class="row">
   <!--         <div class="inner-topmenu col-lg-12 col-md-12 col-sm-12 text-right">-->
   <!--             <a href="#" class="user-login">-->
   <!--                 <span>-->
   <!--                     <img src="images/user-icon.png" title="" alt="" />-->
   <!--                 </span>Hi John-->
   <!--             </a>-->
			<!--</div>-->
		</div>
	</div>	
</section>
<!-- end of inner-banner -->

<section class="travel-option" style="background:url({{ asset('images/inner-banner.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover; margin-top:-77px;">
	<div class="container">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
        
        <!--boostrap 4-->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
        
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button type="button" id="Hotel" class="btn btn-primary" href="#tab1" data-toggle="tab">
                            <i class="fa fa-building icn"></i>
                            <div class="hidden-xs">Hotel</div>
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" id="Flight" class="btn btn-default" href="#tab2" data-toggle="tab">
                            <i class="fa fa-plane icn"></i>
                            <div class="hidden-xs">Flight</div>
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" id="Activity" class="btn btn-default" href="#tab3" data-toggle="tab">
                            <i class="fa fa-modx icn" aria-hidden="true"></i>
                            <div class="hidden-xs">Activity</div>
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" id="Transfer" class="btn btn-default" href="#tab4" data-toggle="tab">
                            <i class="fa fa-exchange icn" aria-hidden="true"></i>
                            <div class="hidden-xs">Transfer</div>
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" id="Group" class="btn btn-default" href="#tab5" data-toggle="tab">
                            <i class="fa fa-users icn" aria-hidden="true"></i>
                            <div class="hidden-xs">Group Package</div>
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" id="Fit" class="btn btn-default" href="#tab6" data-toggle="tab">
                            <i class="fa fa-archive icn" aria-hidden="true"></i>
                            <div class="hidden-xs">Fit Package</div>
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" id="following" class="btn btn-default" href="#tab7" data-toggle="tab">
                            <i class="fa fa-th icn" aria-hidden="true"></i>
                            <div class="hidden-xs">Build Package</div>
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" id="following" class="btn btn-default" href="#tab8" data-toggle="tab">
                            <i class="fa fa-ticket icn" aria-hidden="true"></i>
                            <div class="hidden-xs">Visa</div>
                        </button>
                    </div>
                </div>
                <div class="well">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1">
				 	        <div class="row">
				 	            <div class="col-12 col-sm-6 col-md-3 col-lg-3">
				 			        <div class="form-box">
				 			    	    <label>Destination</label>
				 			            <input type="text" class="form-control" placeholder="Destination" />
				 				        <div class="input-group-addon">
				 				            <i class="fa fa-location-arrow"></i>
				 				        </div>
				 			        </div>
				 		        </div>
				 		        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
				 			        <div class="form-box">
				 				        <label>Check-In</label>
				 					    <input type="date" class="form-control" placeholder="Check-In" />
				 				        <div class="input-group-addon">
				 				            <i class="fa fa-calendar"></i>
				 				        </div>
				 			        </div>
				 		        </div>
				 		        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
				 			        <div class="form-box">
				 			    	    <label>Check Out</label>
				 			            <input type="date" class="form-control" placeholder="Check-Out" />
				 					    <div class="input-group-addon">
				 					        <i class="fa fa-calendar"></i>
				 					    </div>
				 			        </div>
				 		        </div>
				 		        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
        				 			<div class="form-box">
        				 			    <label>Rooms</label>
        				 				<input type="number" min="0" class="form-control" placeholder="Rooms" />
        				 				<div class="input-group-addon">
        				 				    <i class="fa fa-bed" aria-hidden="true"></i>
        				 				</div>
        				 			</div>
        				 		</div>
        				 		<div class="col-12 col-sm-12 col-md-12 col-lg-12">
        				 		    <div class="form-box">
            				 		    <div id="accordion">
                                            <div class="passenger" id="headingOne">
                                                <label class="form-control" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Number Of Passengers</label>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                                				 		    <div class="form-box">
                                				 		        <label>Adult (12y+)</label>
                                				 				<input type="number" class="form-control" placeholder="Adult" />
                                				 				<div class="input-group-addon">
                            				 					    <!--<i class="fa fa-bed" aria-hidden="true"></i>-->
                            				 					    <i class="fa fa-male" aria-hidden="true"></i>
                            				 					</div>
                                				 			</div>
                                				 		</div>
                                				 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
                                				 		    <div class="form-box">
                                				 			    <label>Child With Bed (2y-12y)</label>
                                				 				<input type="number" class="form-control number" placeholder="Child With Bed" />
                                				 				    <div class="input-group-addon">
                                				 					    <i class="fa fa-bed" aria-hidden="true"></i>
                                				 					    <i class="fa fa-child" aria-hidden="true"></i>
                                				 					</div>
                                				 			</div>
                                				 		</div>
                        				 		        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        				 			        <div class="form-box">
                        				 			            <label>Child without Bed (2y-12y)</label>
                        				 				        <input type="number" class="form-control number" placeholder="Child without Bed" />
                        				 					    <div class="input-group-addon">
                        				 					        <i class="fa fa-bed" aria-hidden="true"></i>
                        				 					        <i class="fa fa-child" aria-hidden="true"></i>
                        				 					    </div>
                        				 			        </div>
                        				 		        </div>
                        				 		        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        				 			        <div class="form-box">
                        				 			            <label>Infants (below 2y)</label>
                        				 				        <input type="number" class="form-control number2" placeholder="Infants" />
                        				 					    <div class="input-group-addon">
                        				 					        <i class="fa fa-bed" aria-hidden="true"></i>
                        				 					        <i class="fa fa-male" aria-hidden="true"></i>
                        				 					        <i class="fa fa-child" aria-hidden="true"></i>
                        				 					    </div>
                        				 			        </div>
                        				 		        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
						 		</div>
                                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
				 			        <div class="form-box select">
				 			            <label>Nights</label>
        				 				<select class="form-control ">
        				 					<option value="Nights">Nights</option>
        				 					<option>1</option>
        				 					<option>2</option>
        				 					<option>3</option>
        				 					<option>4</option>
        				 					<option>5</option>				 					
        				 					<option>6</option>
        				 					<option>7</option>
        				 					<option>8</option>
        				 				</select>
				 			            <div class="input-group-addon">
				 			                <i class="fa fa-moon-o" aria-hidden="true"></i>
				 			            </div>
				 			        </div>
				 		        </div>
				 		        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
				 			        <div class="form-box select">
				 			            <label>Nationality</label>
				 				        <select name="ctl00$ContentPlaceHolder1$ddlAccNationality" id="ContentPlaceHolder1_ddlAccNationality" class="form-control pl30">
                                    		<option value="0">Nationality</option>
                                    		<option value="IN">Indian</option>
                                    		<option value="AF">Afghanistan</option>
                                    		<option value="AX">Aland Islands</option>
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
                                    		<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    		<option value="BA">Bosnia and Herzegovina</option>
                                    		<option value="BW">Botswana</option>
                                    		<option value="BV">Bouvet Island</option>
                                    		<option value="BR">Brazil</option>
                                    		<option value="IO">British Indian Ocean Territory</option>
                                    		<option value="BN">Brunei</option>
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
                                    		<option value="CK">Cook Islands</option>
                                    		<option value="CR">Costa Rica</option>
                                    		<option value="CI">Cote d'ivoire (Ivory Coast)</option>
                                    		<option value="HR">Croatia</option>
                                    		<option value="CU">Cuba</option>
                                    		<option value="CW">Curacao</option>
                                    		<option value="CY">Cyprus</option>
                                    		<option value="CZ">Czech Republic</option>
                                    		<option value="CD">Democratic Republic of the Congo</option>
                                    		<option value="DK">Denmark</option>
                                    		<option value="DJ">Djibouti</option>
                                    		<option value="DM">Dominica</option>
                                    		<option value="DO">Dominican Republic</option>
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
                                    		<option value="GP">Guadaloupe</option>
                                    		<option value="GU">Guam</option>
                                    		<option value="GT">Guatemala</option>
                                    		<option value="GG">Guernsey</option>
                                    		<option value="GN">Guinea</option>
                                    		<option value="GW">Guinea-Bissau</option>
                                    		<option value="GY">Guyana</option>
                                    		<option value="HT">Haiti</option>
                                    		<option value="HM">Heard Island and McDonald Islands</option>
                                    		<option value="HN">Honduras</option>
                                    		<option value="HK">Hong Kong</option>
                                    		<option value="HU">Hungary</option>
                                    		<option value="IS">Iceland</option>
                                    		<option value="ID">Indonesia</option>
                                    		<option value="IR">Iran</option>
                                    		<option value="IQ">Iraq</option>
                                    		<option value="IE">Ireland</option>
                                    		<option value="IM">Isle of Man</option>
                                    		<option value="IL">Israel</option>
                                    		<option value="IT">Italy</option>
                                    		<option value="JM">Jamaica</option>
                                    		<option value="JP">Japan</option>
                                    		<option value="JE">Jersey</option>
                                    		<option value="JO">Jordan</option>
                                    		<option value="KZ">Kazakhstan</option>
                                    		<option value="KE">Kenya</option>
                                    		<option value="KI">Kiribati</option>
                                    		<option value="XK">Kosovo</option>
                                    		<option value="KW">Kuwait</option>
                                    		<option value="KG">Kyrgyzstan</option>
                                    		<option value="LA">Laos</option>
                                    		<option value="LV">Latvia</option>
                                    		<option value="LB">Lebanon</option>
                                    		<option value="LS">Lesotho</option>
                                    		<option value="LR">Liberia</option>
                                    		<option value="LY">Libya</option>
                                    		<option value="LI">Liechtenstein</option>
                                    		<option value="LT">Lithuania</option>
                                    		<option value="LU">Luxembourg</option>
                                    		<option value="MO">Macao</option>
                                    		<option value="MK">Macedonia</option>
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
                                    		<option value="FM">Micronesia</option>
                                    		<option value="MD">Moldova</option>
                                    		<option value="MC">Monaco</option>
                                    		<option value="MN">Mongolia</option>
                                    		<option value="ME">Montenegro</option>
                                    		<option value="MS">Montserrat</option>
                                    		<option value="MA">Morocco</option>
                                    		<option value="MZ">Mozambique</option>
                                    		<option value="MM">Myanmar (Burma)</option>
                                    		<option value="NA">Namibia</option>
                                    		<option value="NR">Nauru</option>
                                    		<option value="NP">Nepal</option>
                                    		<option value="NL">Netherlands</option>
                                    		<option value="NC">New Caledonia</option>
                                    		<option value="NZ">New Zealand</option>
                                    		<option value="NI">Nicaragua</option>
                                    		<option value="NE">Niger</option>
                                    		<option value="NG">Nigeria</option>
                                    		<option value="NU">Niue</option>
                                    		<option value="NF">Norfolk Island</option>
                                    		<option value="KP">North Korea</option>
                                    		<option value="MP">Northern Mariana Islands</option>
                                    		<option value="NO">Norway</option>
                                    		<option value="OM">Oman</option>
                                    		<option value="PK">Pakistan</option>
                                    		<option value="PW">Palau</option>
                                    		<option value="PS">Palestine</option>
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
                                    		<option value="RU">Russia</option>
                                    		<option value="RW">Rwanda</option>
                                    		<option value="BL">Saint Barthelemy</option>
                                    		<option value="SH">Saint Helena</option>
                                    		<option value="KN">Saint Kitts and Nevis</option>
                                    		<option value="LC">Saint Lucia</option>
                                    		<option value="MF">Saint Martin</option>
                                    		<option value="PM">Saint Pierre and Miquelon</option>
                                    		<option value="VC">Saint Vincent and the Grenadines</option>
                                    		<option value="WS">Samoa</option>
                                    		<option value="SM">San Marino</option>
                                    		<option value="ST">Sao Tome and Principe</option>
                                    		<option value="SA">Saudi Arabia</option>
                                    		<option value="SN">Senegal</option>
                                    		<option value="RS">Serbia</option>
                                    		<option value="SC">Seychelles</option>
                                    		<option value="SL">Sierra Leone</option>
                                    		<option value="SG">Singapore</option>
                                    		<option value="SX">Sint Maarten</option>
                                    		<option value="SK">Slovakia</option>
                                    		<option value="SI">Slovenia</option>
                                    		<option value="SB">Solomon Islands</option>
                                    		<option value="SO">Somalia</option>
                                    		<option value="ZA">South Africa</option>
                                    		<option value="GS">South Georgia and the South Sandwich Islands</option>
                                    		<option value="KR">South Korea</option>
                                    		<option value="SS">South Sudan</option>
                                    		<option value="ES">Spain</option>
                                    		<option value="LK">Sri Lanka</option>
                                    		<option value="SD">Sudan</option>
                                    		<option value="SR">Suriname</option>
                                    		<option value="SJ">Svalbard and Jan Mayen</option>
                                    		<option value="SZ">Swaziland</option>
                                    		<option value="SE">Sweden</option>
                                    		<option value="CH">Switzerland</option>
                                    		<option value="SY">Syria</option>
                                    		<option value="TW">Taiwan</option>
                                    		<option value="TJ">Tajikistan</option>
                                    		<option value="TZ">Tanzania</option>
                                    		<option value="TH">Thailand</option>
                                    		<option value="TL">Timor-Leste (East Timor)</option>
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
                                    		<option value="VA">Vatican City</option>
                                    		<option value="VE">Venezuela</option>
                                    		<option value="VN">Vietnam</option>
                                    		<option value="VG">Virgin Islands, British</option>
                                    		<option value="VI">Virgin Islands, US</option>
                                    		<option value="WF">Wallis and Futuna</option>
                                    		<option value="EH">Western Sahara</option>
                                    		<option value="YE">Yemen</option>
                                    		<option value="ZM">Zambia</option>
                                    		<option value="ZW">Zimbabwe</option>
                                    	</select>
		                                <div class="input-group-addon">
		                                    <i class="fa fa-globe"></i>
		                                </div>
				 			        </div>
				 		        </div>
        				 		
        				 		<div class="tab-action col-lg-12 col-md-12 col-sm-12 form-box" style="padding-top: 34px; text-align: center;">
        				 	        <button class="btn" style="color:#fff !important;"><a href="hotel-search.html#">Search Hotels</a></button>
        				        </div>
        				 	</div>
                        </div>
                        <div class="tab-pane fade in" id="tab2">
       	                    <div class="row">
						        <div class="intab-cover col-lg-12">
							        <div class="row">
        								<div class="col-sm-4 col-md-4 col-lg-4">
        						 			<div class="form-box">
        						 				<button onclick="openflight(event, 'oneway')" id="defaultOpen" class="btn form-control intablinks active  text-center">One Way</button>
        						 			</div>
        						 		</div>
        						 		<div class="col-sm-4 col-md-4 col-lg-4">
        						 		    <div class="form-box">
        						 			    <button onclick="openflight(event, 'roundtrip')" class="btn form-control intablinks  text-center">Round Trip</button>
        						 			</div>
        						 		</div>
        						 		<div class="col-sm-4 col-md-4 col-lg-4">
        						 			<div class="form-box">
        						 				<button onclick="openflight(event, 'multicity')" class="btn form-control intablinks  text-center">Multicity</button>
        						 			</div>
        						 		</div>
        						 	</div>	
        				 	    </div>
    				 	        <div id="oneway" class="intabcontent col-lg-12" style="display:block;">
    				 	    	    <div class="row">
    						 		    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
    						 			    <div class="form-box">
    						 			        <label>From</label>
    						 				    <input type="text" class="form-control" placeholder="From" />
    						 				    <div class="input-group-addon">
    						 				        <i class="fa fa-globe" aria-hidden="true"></i>
    						 				    </div>
    						 			    </div>
    						 		    </div>
    						 		    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
    						 			    <div class="form-box">
    						 			        <label>To</label>
    						 				    <input type="text" class="form-control" placeholder="To" />
						 					    <div class="input-group-addon">
						 					        <i class="fa fa-globe" aria-hidden="true"></i>
						 					    </div>
    						 			    </div>
    						 		    </div>
        						 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
        						 			<div class="form-box">
        						 			    <label>Departure Date</label>
        						 			    <input type="date" class="form-control" placeholder="Departure Date" />
        						 			    <div class="input-group-addon">
        						 			        <i class="fa fa-calendar" aria-hidden="true"></i>
        						 			    </div>
        						 			</div>
        						 		</div>
        						 		<!--<div class="col-sm-4 col-md-3 col-lg-3">-->
        						 		<!--	<div class="form-box">-->
        						 		<!--	      <label>Return-Date</label>-->
        						 		<!--		<input type="date" class="form-control" placeholder="Return" />-->
        						 		<!--			<div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div>-->
        						 		<!--	</div>-->
        						 		<!--</div>-->
        						 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
                				 			<div class="form-box">
                				 			      <label for="cars">Choose Travel Class</label>
                                                <select class="form-control" id="cars" name="carlist" form="carform">
                                                  <option value="volvo">Economy/Premium Economy</option>
                                                  <option value="saab">Premium Economy</option>
                                                  <option value="opel">Business</option>
                                                </select>
                				 			</div>
                				 		</div>
                				 		<div class="col-12 col-sm-12 col-md-9 col-lg-9">
                				 		    <div class="form-box">
            				 		            <div id="accordion">
                                                    <div class="passenger" id="heading2">
                                                        <label class="form-control" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">Number Of Passengers</label>
                                                    </div>
                                                    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                				 			        <div class="form-box">
                                				 			            <label>Adult (12y+)</label>
                                				 				        <input type="number" class="form-control" placeholder="Adult" />
                                				 					    <div class="input-group-addon">
                                				 					        <i class="fa fa-male" aria-hidden="true"></i>
                                				 					    </div>
                                				 			        </div>
                                				 		        </div>
                                				 		        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                        				 		    <div class="form-box">
                                        				 			    <label>Children (2y-12y)</label>
                                        				 				<input type="number" class="form-control" placeholder="Children" />
                                    				 				    <div class="input-group-addon">
                                    				 					    <i class="fa fa-child" aria-hidden="true"></i>
                                    				 					</div>
                                        				 			</div>
                                        				 		</div>
                                                                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                        				 			<div class="form-box">
                                        				 			    <label>Infants (below 2y)</label>
                                        				 				<input type="number" class="form-control number" placeholder="Infants" />
                                    				 					<div class="input-group-addon">
                                    				 					    <i class="fa fa-male" aria-hidden="true"></i>
                                                                            <i class="fa fa-child" aria-hidden="true"></i>
                                    				 					</div>
                                        				 			</div>
                                        				 		</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
						 		        </div>
        						 		<!--<div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
        						 		<!--	<div class="form-box">-->
        						 		<!--	    <label>Passengers</label>-->
        						 		<!--		<input type="number" class="form-control" placeholder="Passengers" />-->
        						 		<!--		<div class="input-group-addon">-->
        						 		<!--		    <i class="fa fa-male adult-icon" aria-hidden="true"></i>-->
        						 		<!--		</div>-->
        						 		<!--	</div>-->
        						 		<!--</div>-->
        						 		
                				 		
        						 		<!--<div class="col-lg-3 col-md-3 col-sm-3">-->
        						 		<!--	<div class="form-box select">-->
        						 		<!--	     <label>Night</label>-->
        						 		<!--		<select class="form-control ">-->
        						 		<!--			<option value="Nights">Nights</option>-->
        						 		<!--			<option>1</option>-->
        						 		<!--			<option>2</option>-->
        						 		<!--			<option>3</option>-->
        						 		<!--			<option>4</option>-->
        						 		<!--			<option>5</option>				 					-->
        						 		<!--			<option>6</option>-->
        						 		<!--			<option>7</option>-->
        						 		<!--			<option>8</option>-->
        						 		<!--		</select>-->
        						 		<!--	</div>-->
        						 		<!--</div>-->
                                       	<div class="tab-action col-lg-12 col-md-12 col-sm-12 form-box" style="padding-top: 34px; text-align: center;">
                				 	        <button class="btn" style="color:#fff !important;"><a href="flight-search.html">Search</a></button>
                				        </div>
					                </div> 		
			 	                </div>
			 	                <!-- end of intabcontent -->
                                <div id="roundtrip" class="intabcontent col-lg-12">
			 	                    <div class="row">
            						    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
        						 			<div class="form-box">
        						 			    <label>From</label>
        						 				<input type="text" class="form-control" placeholder="From" />
        						 				<div class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></div>
        						 			</div>
        						 		</div>
        						 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
        						 			<div class="form-box">
        						 			    <label>To</label>
        						 				<input type="text" class="form-control" placeholder="To" />
        						 					<div class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></div>
        						 			</div>
        						 		</div>
        						 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
        						 			<div class="form-box">
        						 			    <label>Departure-Date</label>
        						 			    <input type="date" class="form-control" placeholder="Check-Out" />
        						 			    <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
        						 				<!--<input type="text" class="form-control" placeholder="Departure" />-->
        						 					<!--<div class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>-->
        						 			</div>
        						 		</div>
        						 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
        						 			<div class="form-box">
        						 			      <label>Return-Date</label>
        						 				    <input type="date" class="form-control" placeholder="Return" />
        						 					<div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
        						 			</div>
        						 		</div>
        						 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
        				 			        <div class="form-box">
        				 			            <label for="cars">Choose Travel Class</label>
                                                <select class="form-control" id="cars" name="carlist" form="carform">
                                                    <option value="volvo">Economy/Premium Economy</option>
                                                    <option value="saab">Premium Economy</option>
                                                    <option value="opel">Business</option>
                                                </select>
        				 			        </div>
        				 		        </div>
        						 		
        						 		<div class="col-12 col-sm-12 col-md-9 col-lg-9">
        						 		    <div class="form-box">
            				 		            <div id="accordion">
                                                    <div class="passenger" id="heading3">
                                                        <label class="form-control" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">Number Of Passengers</label>
                                                    </div>
                                                    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                				 			        <div class="form-box">
                                				 			            <label>Adult (12y+)</label>
                                				 				        <input type="number" class="form-control" placeholder="Adult" />
                                				 					    <div class="input-group-addon">
                                				 					        <i class="fa fa-male" aria-hidden="true"></i>
                                				 					    </div>
                                				 			        </div>
                                				 		        </div>
                                				 		        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                        				 		    <div class="form-box">
                                        				 			    <label>Children (2y-12y)</label>
                                        				 				<input type="number" class="form-control" placeholder="Children" />
                                    				 				    <div class="input-group-addon">
                                    				 					    <i class="fa fa-child" aria-hidden="true"></i>
                                    				 					</div>
                                        				 			</div>
                                        				 		</div>
                                                                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                        				 			<div class="form-box">
                                        				 			    <label>Infants (below 2y)</label>
                                        				 				<input type="number" class="form-control number" placeholder="Infants" />
                                    				 					<div class="input-group-addon">
                                    				 					    <i class="fa fa-male" aria-hidden="true"></i>
                                                                            <i class="fa fa-child" aria-hidden="true"></i>
                                    				 					</div>
                                        				 			</div>
                                        				 		</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
						 		        </div>
        						 		
        						 		
                                        <div class="tab-action col-lg-12 col-md-12 col-sm-12 form-box" style="padding-top: 34px; text-align: center;">
			 	                            <button class="btn" style="color:#fff !important;"><a href="flight-round.html">Search</a></button>
			                            </div>
				                    </div>
			 	                    <!-- end of intabcontent -->
			                    </div>
                				 <div id="multicity" class="intabcontent col-lg-12">
            				 		<div class="row">
            				 			<div class="default-feild col-lg-12">
            				 				<div class="row">
            							 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
                						 			<div class="form-box">
                						 			    <label>From</label>
                						 				<input type="text" class="form-control" placeholder="From" />
                						 				<div class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                						 			</div>
                						 		</div>
                						 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
                						 			<div class="form-box">
                						 			    <label>To</label>
                						 				<input type="text" class="form-control" placeholder="To" />
                						 				<div class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                						 			</div>
                						 		</div>
                						 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
                						 			<div class="form-box">
                						 			    <label>Departure-Date</label>
                						 			    <input type="date" class="form-control" placeholder="Check-Out" />
                						 			    <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                						 				<!--<input type="text" class="form-control" placeholder="Departure" />-->
                						 					<!--<div class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>-->
                						 			</div>
                						 		</div>
                						 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
                				 			        <div class="form-box">
                				 			            <label for="cars">Choose Travel Class</label>
                                                        <select class="form-control" id="cars" name="carlist" form="carform">
                                                            <option value="volvo">Economy/Premium Economy</option>
                                                            <option value="saab">Premium Economy</option>
                                                            <option value="opel">Business</option>
                                                        </select>
                				 			        </div>
                				 		        </div>
                				 		        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                				 		            <div class="appeneded">
                                			 		    <div class="addmoredesti col-lg-12" id="addEmail">
                                			 			    <p><span><img src="{{ asset('images/add-icon.png') }}" title="" alt="" /></span>Add More Destination</p>
                                			 		    </div>
                                					    <div id="more-email">
                                					    </div>
                                					    <span id="removeEmail" class="close" href="#"><i class="fa fa-times" aria-hidden="true"></i></span>
                                				    </div>    
                				 		        </div>
                				 		        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                						 		    <div class="form-box">
                    				 		            <div id="accordion">
                                                            <div class="passenger" id="heading4">
                                                                <label class="form-control" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">Number Of Passengers</label>
                                                            </div>
                                                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                        				 			        <div class="form-box">
                                        				 			            <label>Adult (12y+)</label>
                                        				 				        <input type="number" class="form-control" placeholder="Adult" />
                                        				 					    <div class="input-group-addon">
                                        				 					        <i class="fa fa-male" aria-hidden="true"></i>
                                        				 					    </div>
                                        				 			        </div>
                                        				 		        </div>
                                        				 		        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                                				 		    <div class="form-box">
                                                				 			    <label>Children (2y-12y)</label>
                                                				 				<input type="number" class="form-control" placeholder="Children" />
                                            				 				    <div class="input-group-addon">
                                            				 					    <i class="fa fa-child" aria-hidden="true"></i>
                                            				 					</div>
                                                				 			</div>
                                                				 		</div>
                                                                        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                                				 			<div class="form-box">
                                                				 			    <label>Infants (below 2y)</label>
                                                				 				<input type="number" class="form-control number" placeholder="Infants" />
                                            				 					<div class="input-group-addon">
                                            				 					    <i class="fa fa-male" aria-hidden="true"></i>
                                                                                    <i class="fa fa-child" aria-hidden="true"></i>
                                            				 					</div>
                                                				 			</div>
                                                				 		</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
        						 		        </div>
                						 		<!--<div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
                						 		<!--    <div class="form-box">-->
                						 		<!--	    <label>Passengers</label>-->
                						 		<!--		<input type="number" class="form-control" placeholder="Passengers" />-->
                						 		<!--		    <div class="input-group-addon"><i class="fa fa-male adult-icon" aria-hidden="true"></i> </div>-->
                						 		<!--	</div>-->
                						 		<!--</div>-->
                						 		<!--<div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
                				 			 <!--       <div class="form-box">-->
                				 			 <!--           <label>Adult (12y+)</label>-->
                				 				<!--        <input type="number" class="form-control" placeholder="Adult" />-->
                				 				<!--	    <div class="input-group-addon">-->
                				 					        <!--<i class="fa fa-bed" aria-hidden="true"></i>-->
                				 				<!--	        <i class="fa fa-male" aria-hidden="true"></i>-->
                				 				<!--	    </div>-->
                				 			 <!--       </div>-->
                				 		  <!--      </div>-->
                				 		       <!-- <div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
        				 			              <!--  <div class="form-box">-->
        				 			              <!--      <label>Children (2y-12y)</label>-->
        				 				             <!--   <input type="number" class="form-control" placeholder="Children" />-->
                				 					    <!--<div class="input-group-addon">-->
                				 					        <!--<i class="fa fa-bed" aria-hidden="true"></i>-->
                				 					    <!--    <i class="fa fa-child" aria-hidden="true"></i>-->
                				 					    <!--</div>-->
        				 			              <!--  </div>-->
        				 		               <!-- </div>-->
                				 		       <!-- <div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
                				 			      <!--  <div class="form-box">-->
                				 			      <!--      <label>Infants (below 2y)</label>-->
                				 				     <!--   <input type="number" class="form-control number2" placeholder="Infants" />-->
                    				 					<!--<div class="input-group-addon">-->
                    				 					    <!--<i class="fa fa-bed" aria-hidden="true"></i>-->
                              <!--                              <i class="fa fa-male" aria-hidden="true"></i>-->
                              <!--                              <i class="fa fa-child" aria-hidden="true"></i>-->
                    				 					<!--</div>-->
                				 			      <!--  </div>-->
                				 		       <!-- </div>-->
                                            </div>	
                					 	</div>
                					 </div>	
                					
                					<!--<div class="appeneded2">-->
                			 	<!--	    <div class="addmoredesti col-lg-12" id="addEmail2">-->
                			 	<!--		    <p><span><img src="images/add-icon.png" title="" alt="" /></span>Add Another City</p>-->
                			 	<!--	    </div>-->
                					<!--    <div id="more-email2">-->
                					<!--    </div>-->
                					<!--    <span id="removeEmail2" class="close multi" href="#">x</span>-->
                				 <!--   </div>-->
				                    <div class="tab-action col-lg-12 col-md-12 col-sm-12 form-box" style="padding-top: 34px; text-align: center;">
			 	                        <button class="btn" style="color:#fff !important;"><a href="multicity.html">Search</a></button>
			                        </div>
				             <!--       <div class="tab-action col-lg-12 col-md-12 col-sm-12" style="padding:0;">-->
		               <!-- 			    <div class="row">-->
				            	<!-- 		    <div class="tab-action col-lg-12 col-md-12 col-sm-12 form-box" style="padding-top: 34px; text-align: center;">-->
			 	            <!--                    <button class="btn" style="color:#fff !important;">Search</button>-->
			              <!--                  </div>-->
					 			        <!--</div>-->
					 	          <!--  </div>-->
					 	        </div>
			 	                <!-- end of intabcontent -->
			                </div>
                        </div>
                        <div class="tab-pane fade in" id="tab3">
          	                <div class="row">						
				 			 <!--   <div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
						 		<!--    <div class="form-box">-->
						 		<!--	    <label>From</label>-->
						 		<!--		<input type="text" class="form-control" placeholder="From" />-->
						 		<!--		<div class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></div>-->
						 		<!--	</div>-->
						 		<!--</div>-->
						 		<!--<div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
						 		<!--	<div class="form-box">-->
						 		<!--	    <label>To</label>-->
						 		<!--		<input type="text" class="form-control" placeholder="To" />-->
						 		<!--		<div class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></div>-->
						 		<!--	</div>-->
						 		<!--</div>-->
						 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
				 			        <div class="form-box">
				 			    	    <label>Destination</label>
				 			            <input type="text" class="form-control" placeholder="Destination" />
				 				        <div class="input-group-addon">
				 				            <i class="fa fa-location-arrow"></i>
				 				        </div>
				 			        </div>
				 		        </div>
						 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
						 			<div class="form-box">
						 			    <label>Active Date</label>
						 			    <input type="date" class="form-control" placeholder="Active Date" />
						 			    <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
						 				<!--<input type="text" class="form-control" placeholder="Departure" />-->
						 					<!--<div class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>-->
						 			</div>
						 		</div>
					 		<!--<div class="col-lg-3 col-md-3 col-sm-3">-->
						 	<!--	<div class="form-box">-->
						 	<!--	      <label>Pickup Time</label>-->
						 	<!--			<input type="time" class="form-control" placeholder="Pickup Time" />-->
						 	<!--	</div>-->
					 		<!--</div>-->
					 		<div class="col-12 col-sm-12 col-md-6 col-lg-6">
					 		    <div class="form-box">
					 		        <label>Number Of Person</label>
				 		            <div id="accordion">
                                        <div class="passenger" id="heading7">
                                            <label class="form-control" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">Number Of Person</label>
                                        </div>
                                        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    				 			        <div class="form-box">
                    				 			            <label>Adult (12y+)</label>
                    				 				        <input type="number" class="form-control" placeholder="Adult" />
                    				 					    <div class="input-group-addon">
                    				 					        <i class="fa fa-male" aria-hidden="true"></i>
                    				 					    </div>
                    				 			        </div>
                    				 		        </div>
                    				 		        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                            				 		    <div class="form-box">
                            				 			    <label>Children (2y-12y)</label>
                            				 				<input type="number" class="form-control" placeholder="Children" />
                        				 				    <div class="input-group-addon">
                        				 					    <i class="fa fa-child" aria-hidden="true"></i>
                        				 					</div>
                            				 			</div>
                            				 		</div>
                                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                            				 			<div class="form-box">
                            				 			    <label>Infants (below 2y)</label>
                            				 				<input type="number" class="form-control number" placeholder="Infants" />
                        				 					<div class="input-group-addon">
                        				 					    <i class="fa fa-male" aria-hidden="true"></i>
                                                                <i class="fa fa-child" aria-hidden="true"></i>
                        				 					</div>
                            				 			</div>
                            				 		</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
			 		        </div>
					 		<!--<div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
						 	<!--    <div class="form-box">-->
						 	<!--        <label>Person</label>-->
						 	<!--		<input type="number" class="form-control" placeholder="Person" />-->
						 	<!--		<div class="input-group-addon"><i class="fa fa-male adult-icon" aria-hidden="true"></i> </div>-->
						 	<!--	</div>-->
						 	<!--</div>-->
						 	<!--<div class="col-12 col-sm-12 col-md-6 col-lg-6">-->
					 		<!--    <div class="form-box">-->
				 		 <!--           <div id="accordion">-->
        <!--                                <div class="passenger" id="heading5">-->
        <!--                                    <label class="form-control" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">Number Of Passengers</label>-->
        <!--                                </div>-->
        <!--                                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">-->
        <!--                                    <div class="card-body">-->
        <!--                                        <div class="row">-->
        <!--                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">-->
        <!--            				 			        <div class="form-box">-->
        <!--            				 			            <label>Adult (12y+)</label>-->
        <!--            				 				        <input type="number" class="form-control" placeholder="Adult" />-->
        <!--            				 					    <div class="input-group-addon">-->
        <!--            				 					        <i class="fa fa-male" aria-hidden="true"></i>-->
        <!--            				 					    </div>-->
        <!--            				 			        </div>-->
        <!--            				 		        </div>-->
        <!--            				 		        <div class="col-12 col-sm-6 col-md-6 col-lg-6">-->
        <!--                    				 		    <div class="form-box">-->
        <!--                    				 			    <label>Children (2y-12y)</label>-->
        <!--                    				 				<input type="number" class="form-control number" placeholder="Children" />-->
        <!--                				 				    <div class="input-group-addon">-->
        <!--                				 					    <i class="fa fa-child" aria-hidden="true"></i>-->
        <!--                				 					</div>-->
        <!--                    				 			</div>-->
        <!--                    				 		</div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
			 		  <!--      </div>-->
					 		<!--<div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
    				<!-- 			<div class="form-box">-->
    				<!-- 		        <label>Adult (12y+)</label>-->
    				<!-- 				<input type="number" class="form-control" placeholder="Adult" />-->
				 			<!--	    <div class="input-group-addon">-->
				 					    <!--<i class="fa fa-bed" aria-hidden="true"></i>-->
				 			<!--		    <i class="fa fa-male" aria-hidden="true"></i>-->
				 			<!--		</div>-->
    				<!-- 			</div>-->
    				<!-- 		</div>-->
				 		   <!-- <div class="col-12 col-sm-6 col-lg-3">-->
				 			  <!--  <div class="form-box">-->
				 			  <!--      <label>Children (2y-12y)</label>-->
				 				 <!--   <input type="number" class="form-control" placeholder="Children" />-->
				 					<!--<div class="input-group-addon">-->
				 					    <!--<i class="fa fa-bed" aria-hidden="true"></i>-->
				 					<!--    <i class="fa fa-child" aria-hidden="true"></i>-->
				 					<!--</div>-->
				 			  <!--  </div>-->
				 		   <!-- </div>-->
    				 	<!--	<div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
    				 	<!--	    <div class="form-box">-->
    				 	<!--		    <label>Infants (below 2y)</label>-->
    				 	<!--		    <input type="number" class="form-control number" placeholder="Infants" />-->
				 					<!--<div class="input-group-addon">-->
				 					    <!--<i class="fa fa-bed" aria-hidden="true"></i>-->
				 					<!--    <i class="fa fa-male" aria-hidden="true"></i>-->
				 					<!--    <i class="fa fa-child" aria-hidden="true"></i>-->
				 					<!--</div>-->
    				 	<!--		</div>-->
    				 	<!--	</div>-->
				 			
					 		<!--<div class="col-lg-6 col-md-6 col-sm-6">-->
					 		<!--	<div class="form-box select">-->
					 		<!--	     <label>Luggage</label>-->
					 		<!--		<select class="form-control">-->
					 		<!--			<option value="Nights">Luggage</option>-->
					 		<!--			<option>1</option>-->
					 		<!--			<option>2</option>-->
					 		<!--			<option>3</option>-->
					 		<!--			<option>4</option>-->
					 		<!--			<option>5</option>				 					-->
					 		<!--			<option>6</option>-->
					 		<!--			<option>7</option>-->
					 		<!--			<option>8</option>-->
					 		<!--		</select>-->
					 		<!--	</div>-->
					 		<!--</div>-->
					 		<div class="tab-action col-lg-12 col-md-12 col-sm-12 form-box" style="padding-top: 34px; text-align: center;">
				 	            <button class="btn" style="color:#fff !important;"><a href="">Search Activity</a></button>
				            </div>
					 		
          <!--          <div class="col-lg-6 col-md-6 col-sm-6 col-btn" style="padding-top:22px !important">-->
						 			<!--<div class="form-box">-->
						 			<!--	<button class="btn" style="color:#fff !important;    width: 100% !important;">Search</button>-->
						 			<!--	</div>-->
						 			<!--	</div>-->
					 		
		                </div>			 
                        </div>
                        <div class="tab-pane fade in" id="tab4">
                            <div class="row">
                          	    <div class="intab-cover transfer-intab col-lg-12">
        							<div class="row">
        								<div class="col-lg-6 col-md-6 col-sm-6">
        						 			<div class="form-box">
        						 				<button onclick="openflight(event, 'oneway-transfer')" class="btn form-control intablinks active  text-center">One Way</button>
        						 			</div>
        						 		</div>
        						 		<div class="col-lg-6 col-md-6 col-sm-6">
        						 			<div class="form-box">
        						 				<button onclick="openflight(event, 'Vehicle-dis-transfer')" class="btn form-control intablinks  text-center">Vehicle at Disposal</button>
        						 			</div>
        						 		</div>						 		
        						 	</div>	
        				 	    </div>
				 	            <div class="intabcontent" id="oneway-transfer" style="display:block;">    
					                <div class="row">						
                                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
        						 			<div class="form-box">
        						 			    <label>Pickup From ?</label>
        						 				<input type="text" class="form-control" placeholder="Country, City, Region, Area" />
        						 				<div class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></div>
        						 			</div>
        						 		</div>
        						 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
        						 			<div class="form-box">
        						 			    <label>Dropoff To ?</label>
        						 				<input type="text" class="form-control" placeholder="Country, City, Region, Area" />
        						 					<div class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></div>
        						 			</div>
        						 		</div>
        						 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
        						 			<div class="form-box">
        						 			    <label>Pickup Date</label>
        						 			    <input type="date" class="form-control" placeholder="Pickup Date" />
        						 			    <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
        						 		    </div>
        						 		</div>
            					 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
            						 		<div class="form-box">
            						 		    <label>Pickup Time</label>
            						 			<input type="time" class="form-control" placeholder="Pickup Time" />
            						 		</div>
            					 		</div>
					 		            <!--<div class="col-lg-3 col-md-3 col-sm-3">-->
                				<!-- 			<div class="form-box">-->
                				<!-- 		        <label>Adult (12y+)</label>-->
                				<!-- 				<input type="number" class="form-control" placeholder="Adult" />-->
            				 			<!--		<div class="input-group-addon">-->
            				 			<!--		    <i class="fa fa-male" aria-hidden="true"></i>-->
            				 			<!--		</div>-->
                				<!-- 			</div>-->
                				<!-- 		</div>-->

				 		<!--<div class="col-lg-3 col-md-3 col-sm-3">-->
				 		<!--	<div class="form-box">-->
				 		<!--	      <label>Children (2y-12y)</label>-->
				 		<!--		<input type="number" class="form-control" placeholder="Child With Bed" />-->
				 		<!--			<div class="input-group-addon">-->
				 					    <!--<i class="fa fa-bed" aria-hidden="true"></i>-->
				 		<!--			    <i class="fa fa-child" aria-hidden="true"></i>-->
				 		<!--			</div>-->
				 					
				 		<!--	</div>-->
				 		<!--</div>-->
				 		
				 		<!--<div class="col-lg-3 col-md-3 col-sm-3">-->
				 		<!--	<div class="form-box">-->
				 		<!--	  <label>Infants (below 2y)</label>-->
				 		<!--		<input type="number" class="form-control" placeholder="Infants" />-->
				 		<!--			<div class="input-group-addon">-->
				 					    <!--<i class="fa fa-bed" aria-hidden="true"></i>-->
				 		<!--			    <i class="fa fa-male" aria-hidden="true"></i>-->
				 		<!--			    <i class="fa fa-child" aria-hidden="true"></i>-->
				 		<!--			</div>-->
				 					
				 		<!--	</div>-->
				 		<!--</div>-->
				 		<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				 		    <div class="form-box">
			 		            <div id="accordion">
                                    <div class="passenger" id="heading6">
                                        <label class="form-control" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">Number Of Passengers</label>
                                    </div>
                                    <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                				 			        <div class="form-box">
                				 			            <label>Adult (12y+)</label>
                				 				        <input type="number" class="form-control" placeholder="Adult" />
                				 					    <div class="input-group-addon">
                				 					        <i class="fa fa-male" aria-hidden="true"></i>
                				 					    </div>
                				 			        </div>
                				 		        </div>
                				 		        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        				 		    <div class="form-box">
                        				 			    <label>Children (2y-12y)</label>
                        				 				<input type="number" class="form-control" placeholder="Children" />
                    				 				    <div class="input-group-addon">
                    				 					    <i class="fa fa-child" aria-hidden="true"></i>
                    				 					</div>
                        				 			</div>
                        				 		</div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        				 			<div class="form-box">
                        				 			    <label>Infants (below 2y)</label>
                        				 				<input type="number" class="form-control number" placeholder="Infants" />
                    				 					<div class="input-group-addon">
                    				 					    <i class="fa fa-male" aria-hidden="true"></i>
                                                            <i class="fa fa-child" aria-hidden="true"></i>
                    				 					</div>
                        				 			</div>
                        				 		</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
		 		        </div>
				 			<!--<div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
						 	<!--		<div class="form-box">-->
						 	<!--		      <label>Passengers</label>-->
						 	<!--			<input type="number" class="form-control" placeholder="Passengers" />-->
						 				
						 	<!--				<div class="input-group-addon"><i class="fa fa-male adult-icon" aria-hidden="true"></i> </div>-->
						 	<!--		</div>-->
						 	<!--	</div>-->
						 		<!--<div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
    				 <!--			<div class="form-box">-->
    				 <!--		        <label>Adult (12y+)</label>-->
    				 <!--				<input type="number" class="form-control" placeholder="Adult" />-->
				 				<!--    <div class="input-group-addon">-->
				 					    <!--<i class="fa fa-bed" aria-hidden="true"></i>-->
				 				<!--	    <i class="fa fa-male" aria-hidden="true"></i>-->
				 				<!--	</div>-->
    				 <!--			</div>-->
    				 <!--		</div>-->
				 		   <!-- <div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
				 			  <!--  <div class="form-box">-->
				 			  <!--      <label>Children (2y-12y)</label>-->
				 				 <!--   <input type="number" class="form-control" placeholder="Child With Bed" />-->
				 					<!--<div class="input-group-addon">-->
				 					    <!--<i class="fa fa-bed" aria-hidden="true"></i>-->
				 					<!--    <i class="fa fa-child" aria-hidden="true"></i>-->
				 					<!--</div>-->
				 			  <!--  </div>-->
				 		   <!-- </div>-->
    				 	<!--	<div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
    				 	<!--	    <div class="form-box">-->
    				 	<!--		    <label>Infants (below 2y)</label>-->
    				 	<!--		    <input type="number" class="form-control number" placeholder="Infants" />-->
				 					<!--<div class="input-group-addon">-->
				 					    <!--<i class="fa fa-bed" aria-hidden="true"></i>-->
				 					<!--    <i class="fa fa-male" aria-hidden="true"></i>-->
				 					<!--    <i class="fa fa-child" aria-hidden="true"></i>-->
				 					<!--</div>-->
    				 	<!--		</div>-->
    				 	<!--	</div>-->
                        
                        
                        
				 			<!--<div class="col-lg-3 col-md-3 col-sm-3">-->
						 	<!--	<div class="form-box">-->
						 	<!--	    <label>From</label>-->
						 	<!--			<input type="text" class="form-control" placeholder="From" />-->
						 	<!--	</div>-->
					 		<!--</div>-->

					 		<!--<div class="col-lg-3 col-md-3 col-sm-3">-->
					 		<!--	<div class="form-box">-->
					 		<!--	      <label>To</label>-->
					 		<!--		<input type="text" class="form-control" placeholder="To" />-->
					 		<!--	</div>-->
					 		<!--</div>-->

					 		<!--<div class="col-lg-3 col-md-3 col-sm-3">-->
					 		<!--	<div class="form-box">-->
					 		<!--	     <label>Pickup Date</label>-->
					 		<!--		<input type="date" class="form-control" placeholder="Pickup Date" />-->
					 		<!--	</div>-->
					 		<!--</div>-->

					 		<!--<div class="col-lg-3 col-md-3 col-sm-3">-->
						 	<!--	<div class="form-box">-->
						 	<!--	     <label>Pickup Time</label>-->
						 	<!--			<input type="time" class="form-control" placeholder="Pickup Time" />-->
						 	<!--	</div>-->
					 		<!--</div>-->

					 		
					 		<!--<div class="col-lg-3 col-md-3 col-sm-3">-->
					 		<!--	<div class="form-box select">-->
					 		<!--	      <label>Luggage</label>-->
					 		<!--		<select class="form-control">-->
					 		<!--			<option value="Luggage">Luggage</option>-->
					 		<!--			<option>1</option>-->
					 		<!--			<option>2</option>-->
					 		<!--			<option>3</option>-->
					 		<!--			<option>4</option>-->
					 		<!--			<option>5</option>				 					-->
					 		<!--			<option>6</option>-->
					 		<!--			<option>7</option>-->
					 		<!--			<option>8</option>-->
					 		<!--		</select>-->
					 		<!--	</div>-->
					 		<!--</div>-->

					 		<!--<div class="col-lg-3 col-md-3 col-sm-3 col-btn" style="padding-top:22px;">-->
					 		<!--	<div class="form-box">-->
					 		<!--		<button class="btn" style="color:#fff !important">Search</button>-->
						 				
					 		<!--	</div>-->
					 		<!--</div>-->
					 		
					 		<div class="tab-action col-lg-12 col-md-12 col-sm-12 form-box" style="padding-top: 34px; text-align: center;">
				 	        <button class="btn" style="color:#fff !important;"><a href="">Search Transfer</a></button>
				        </div>
					 		
					 		
					 	</div>
					</div> 	

					<div class="intabcontent" id="Vehicle-dis-transfer">
					    <div class="row">
    			 			<div class="col-12 col-sm-6 col-md-3 col-lg-3">
    					 		<div class="form-box">
    					 		    <label>Pickup Country Name</label>
    					 		    <input type="text" class="form-control" placeholder="Pickup Country Name" />
    					 		    <div class="input-group-addon">
        						        <i class="fa fa-globe" aria-hidden="true"></i>
        						    </div>
    					 		</div>
    				 		</div>
    				 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
    				 			<div class="form-box">
    				 			    <label>Pickup City Name</label>
    				 				<input type="text" class="form-control" placeholder="Pickup City Name" />
    				 				<div class="input-group-addon">
    				 				    <i class="fa fa-map-marker" aria-hidden="true"></i>
        						        <!--<i class="fa fa-globe" aria-hidden="true"></i>-->
        						 	</div>
    				 			</div>
    				 		</div>
    				 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
    				 			<div class="form-box">
    				 			      <label>Pickup Date</label>
    				 				<input type="date" class="form-control" placeholder="Pickup Date" />
    				 				<div class="input-group-addon">
    				 				    <i class="fa fa-calendar" aria-hidden="true"></i>
    				 				</div>
    				 			</div>
    				 		</div>
    				 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
    					 		<div class="form-box">
    					 		    <label>Drop at Other Location</label>
    					 		    <input type="checkbox" id="Transfer" name="Transfer" value="check" checked>
    					 			<!--<input type="time" class="form-control" placeholder="Pickup Time" />-->
    					 		</div>
    				 		</div>
    				 		<div class="col-12 col-sm-6 col-md-3 col-lg-3" id="divTransportdropCountryName" style="">
    					 		<div class="form-box">
    					 		    <label>Drop at Country Name</label>
    					 		    <input type="text" class="form-control" placeholder="Pickup Country Name" />
    					 		    <div class="input-group-addon">
        						        <i class="fa fa-globe" aria-hidden="true"></i>
        						    </div>
    					 		</div>
    				 		</div>
    				 		<div class="col-12 col-sm-6 col-md-3 col-lg-3" id="divTransportdropCityName" style="">
    				 			<div class="form-box">
    				 			    <label>Drop at City Name</label>
    				 				<input type="text" class="form-control" placeholder="Pickup City Name" />
    				 				<div class="input-group-addon">
    				 				    <i class="fa fa-map-marker" aria-hidden="true"></i>
        						        <!--<i class="fa fa-globe" aria-hidden="true"></i>-->
        						 	</div>
    				 			</div>
    				 		</div>
    				 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
    				 			<div class="form-box select">
    				 			     <label>No. of Days</label>
    				 				<select class="form-control ">
    				 					<option value="Days">Days</option>
    				 					<option>1</option>
    				 					<option>2</option>
    				 					<option>3</option>
    				 					<option>4</option>
    				 					<option>5</option>				 					
    				 					<option>6</option>
    				 					<option>7</option>
    				 					<option>8</option>
    				 				</select>
    				 				<div class="input-group-addon">
    				 			        <i class="fa fa-moon-o" aria-hidden="true"></i>
    				 			    </div>
    				 			</div>
    				 		</div>
    				 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
					 			<div class="form-box">
					 			    <label>Type of Vehicle</label>
					 				<input type="text" class="form-control" placeholder="Type of Vehicle">
					 				<div class="input-group-addon">
					 			        <i class="fa fa-car" aria-hidden="true"></i>
					 			   </div>
					 			</div>
					 		</div>
					 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
					 			<div class="form-box select">
					 			    <label>No. of Luggage Bags</label>
					 				<select class="form-control">
					 					<option value="Luggage">No. of Luggage Bags</option>
					 					<option>1</option>
					 					<option>2</option>
					 					<option>3</option>
					 					<option>4</option>
					 					<option>5</option>				 					
					 					<option>6</option>
					 					<option>7</option>
					 					<option>8</option>
					 				</select>
					 				<div class="input-group-addon">
				 			            <i class="fa fa-briefcase" aria-hidden="true"></i>
				 			        </div>
					 			</div>
					 		</div>
					 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
					 			<div class="form-box select">
					 			    <label>No. of Hand Bags</label>
					 				<select class="form-control">
					 					<option value="Luggage">No. of Hand Bags</option>
					 					<option>1</option>
					 					<option>2</option>
					 					<option>3</option>
					 					<option>4</option>
					 					<option>5</option>				 					
					 					<option>6</option>
					 					<option>7</option>
					 					<option>8</option>
					 				</select>
					 				<div class="input-group-addon">
				 			            <i class="fa fa-briefcase" aria-hidden="true"></i>
				 			        </div>
					 			</div>
					 		</div>
					 			<div class="col-12 col-sm-12 col-md-6 col-lg-6">
				 		    <div class="form-box">
				 		        <label>Number Of Person</label>
			 		            <div id="accordion">
                                    <div class="passenger" id="heading8">
                                        <label class="form-control" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">Number Of Passengers</label>
                                    </div>
                                    <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                				 			        <div class="form-box">
                				 			            <label>Adult (12y+)</label>
                				 				        <input type="number" class="form-control" placeholder="Adult" />
                				 					    <div class="input-group-addon">
                				 					        <i class="fa fa-male" aria-hidden="true"></i>
                				 					    </div>
                				 			        </div>
                				 		        </div>
                				 		        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        				 		    <div class="form-box">
                        				 			    <label>Children (2y-12y)</label>
                        				 				<input type="number" class="form-control" placeholder="Children" />
                    				 				    <div class="input-group-addon">
                    				 					    <i class="fa fa-child" aria-hidden="true"></i>
                    				 					</div>
                        				 			</div>
                        				 		</div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        				 			<div class="form-box">
                        				 			    <label>Infants (below 2y)</label>
                        				 				<input type="number" class="form-control number" placeholder="Infants" />
                    				 					<div class="input-group-addon">
                    				 					    <i class="fa fa-male" aria-hidden="true"></i>
                                                            <i class="fa fa-child" aria-hidden="true"></i>
                    				 					</div>
                        				 			</div>
                        				 		</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
		 		        </div>
					 		<!--<div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
    				<!-- 			<div class="form-box">-->
    				<!-- 		        <label>Adult (12y+)</label>-->
    				<!-- 				<input type="number" class="form-control" placeholder="Adult">-->
				 			<!--	    <div class="input-group-addon">-->
				 			<!--		    <i class="fa fa-male" aria-hidden="true"></i>-->
				 			<!--		</div>-->
    				<!-- 			</div>-->
    				<!-- 		</div>-->
          <!--                  <div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
				 			  <!--  <div class="form-box">-->
				 			  <!--      <label>Child (3-6 years (15-25kg))</label>-->
				 				 <!--   <input type="number" class="form-control" placeholder="Total Child (3-6 Years)">-->
				 					<!--<div class="input-group-addon">-->
				 					    <!--<i class="fa fa-bed" aria-hidden="true"></i>-->
				 					<!--    <i class="fa fa-child" aria-hidden="true"></i>-->
				 					<!--</div>-->
				 			  <!--  </div>-->
				 		   <!-- </div>-->
					 		<!--<div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
				 			<!--    <div class="form-box">-->
				 			<!--        <label>Child (6-12 years (22-36kg))</label>-->
				 			<!--	    <input type="number" class="form-control" placeholder="Total Child (6-12 Years)">-->
				 			<!--		<div class="input-group-addon">-->
				 			<!--		    <i class="fa fa-child" aria-hidden="true"></i>-->
				 			<!--		</div>-->
				 			<!--    </div>-->
				 		 <!--   </div>-->
				 		   <!-- <div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
    				 	<!--	    <div class="form-box">-->
    				 	<!--		    <label>Infant (0-3 Years)</label>-->
    				 	<!--		    <input type="number" class="form-control number" placeholder="Infants">-->
				 					<!--<div class="input-group-addon">-->
				 					<!--    <i class="fa fa-male" aria-hidden="true"></i>-->
				 					<!--    <i class="fa fa-child" aria-hidden="true"></i>-->
				 					<!--</div>-->
    				 	<!--		</div>-->
    				 	<!--	</div>-->
    				 		
					 		<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-box">
                                    <label>Special Request (If Any)</label>
                                    <textarea rows="2" cols="20" class="form-control" placeholder=""></textarea>
                                </div>
                            </div>
					 		<div class="tab-action col-lg-12 col-md-12 col-sm-12 form-box" style="padding-top: 34px; text-align: center;">
        				 	    <button class="btn" style="color:#fff !important;"><a href="hotel-search.html#">Send Request</a></button>
        				    </div>
					    </div> 
					</div>
        </div>
        </div>
                        <div class="tab-pane fade in" id="tab5">  
                            <div class="groun-sec">
                    	 		<div class="row">
                    	 		    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    	 			    <div class="form-box">
                    	 			        <label>Where are you going?</label>
                    	 				    <input type="text" class="form-control" placeholder="Country, City, Region, Area">
                    	 				    <div class="input-group-addon">
                    	 				        <i class="fa fa-globe" aria-hidden="true"></i>
                    	 				    </div>
                    	 			    </div>
                    	 		    </div>
                    	 		    
                                    <div class="tab-action-more col-12 col-sm-6 col-md-6 col-lg-6 form-box" style="padding-top: 34px; text-align: center;">
                            	        <button class="btn" style="color:#fff !important;"><a href="#">Add More Location</a></button>
                                    </div>
                                    <!--<div class="tab-action-search col-12 col-sm-6 col-md-6 col-lg-3 form-box" style="padding-top: 34px; text-align: center;">-->
                            	       <!-- <button class="btn" style="color:#fff !important;"><a href="#">Search Package</a></button>-->
                                    <!--</div>-->
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <ul class="tagNames">
                                            <li style="padding: 6px;">
                                                <a style="font-size: 14px;">
                                                    <i class="fa fa-times"></i>
                                                </a>&nbsp;paris
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-action col-12 col-sm-12 col-md-12 col-lg-12 form-box" style="padding-top: 34px; text-align: center;">
                            	        <button class="btn" style="color:#fff !important;"><a href="#">Search Package</a></button>
                                    </div>
                                    
                    	 		</div>
                    	    </div>
            	 	
                    
            		<!--<div class="gropu-btn">-->
            		<!--		 		<div class="row">-->
            		<!--		 			<div class="col-lg-6 col-md-6 col-sm-6">-->
            		<!--				 		<div class="form-box">-->
            		<!--				 				<div class="addmore-package">-->
            		<!--			 						<p><span><img src="images/add-icon.png" title="" alt=""></span>Add More Destination</p>-->
            		<!--			 					</div>-->
            		<!--				 		</div>-->
            		<!--			 		</div>-->
            
            		<!--			 		<div class="col-lg-6 col-md-6 col-sm-6">-->
            		<!--				 		<div class="form-box">-->
            		<!--				 			<button class="btn" style="width:100%;"><a href="">Search</a></button>-->
            		<!--				 		</div>-->
            		<!--			 		</div>-->
            
            		<!--		 		</div>-->
            		<!--		 	</div>-->
                        </div>
                        <div class="tab-pane fade in" id="tab6">
                            <div class="groun-sec">
        				 		<div class="row">
        				 		    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    	 			    <div class="form-box">
                    	 			        <label>Where are you going?</label>
                    	 				    <input type="text" class="form-control" placeholder="Country, City, Region, Area">
                    	 				    <div class="input-group-addon">
                    	 				        <i class="fa fa-globe" aria-hidden="true"></i>
                    	 				    </div>
                    	 			    </div>
                    	 		    </div>
        	 		                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
            				 			<div class="form-box">
            				 			      <label>Travel Date</label>
            				 				<input type="date" class="form-control" placeholder="Travel Date" />
            				 				<div class="input-group-addon">
            				 				    <i class="fa fa-calendar" aria-hidden="true"></i>
            				 				</div>
            				 			</div>
            				 		</div>
                                    <div class="tab-action-more col-12 col-sm-6 col-md-3 col-lg-3 form-box" style="padding-top: 34px; text-align: center;">
                            	        <button class="btn" style="color:#fff !important;"><a href="#">Add More Location</a></button>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <ul class="tagNames">
                                            <li style="padding: 6px;">
                                                <a style="font-size: 14px;">
                                                    <i class="fa fa-times"></i>
                                                </a>&nbsp;Paris, France
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-action col-12 col-sm-12 col-md-12 col-lg-12 form-box" style="padding-top: 34px; text-align: center;">
                            	        <button class="btn" style="color:#fff !important;"><a href="#">Search Package</a></button>
                                    </div>
                                    
        				 			<!--<div class="col-lg-4 col-md-4 col-sm-4">-->
        						 	<!--	<div class="form-box">-->
        						 	<!--			<input type="text" class="form-control" placeholder="Destination" />-->
        						 	<!--	</div>-->
        					 		<!--</div>-->
        
        					 		<!--<div class="col-lg-4 col-md-4 col-sm-4">-->
        					 		<!--	<div class="form-box">-->
        					 		<!--		<input type="text" class="form-control" placeholder="Travel Date" />-->
        					 		<!--	</div>-->
        					 		<!--</div>-->
        
        					 		<!--<div class="col-lg-4 col-md-4 col-sm-4">-->
        					 		<!--	<div class="form-box select">-->
        					 		<!--		<select class="form-control">-->
        					 		<!--			<option value="Nights">No. Of Passenger</option>-->
        					 		<!--			<option>1</option>-->
        					 		<!--			<option>2</option>-->
        					 		<!--			<option>3</option>-->
        					 		<!--			<option>4</option>-->
        					 		<!--			<option>5</option>				 					-->
        					 		<!--			<option>6</option>-->
        					 		<!--			<option>7</option>-->
        					 		<!--			<option>8</option>-->
        					 		<!--		</select>-->
        					 		<!--	</div>-->
        					 		<!--</div>-->
        
        					 		<!--<div class="col-lg-4 col-md-4 col-sm-4">-->
        					 		<!--	<div class="form-box">-->
        					 		<!--		<input type="text" class="form-control" placeholder="Adult" />-->
        					 		<!--	</div>-->
        					 		<!--</div>-->
        
        					 		<!--<div class="col-lg-4 col-md-4 col-sm-4">-->
        						 	<!--	<div class="form-box">-->
        						 	<!--			<input type="text" class="form-control" placeholder="Children" />-->
        						 	<!--	</div>-->
        					 		<!--</div>-->
        
        					 		<!--<div class="col-lg-4 col-md-4 col-sm-4">-->
        						 	<!--	<div class="form-box">-->
        						 	<!--			<input type="text" class="form-control" placeholder="Infants" />-->
        						 	<!--	</div>-->
        					 		<!--</div>-->
        
        					 		
        				 		</div>
            				 </div>
                        </div>
                        <div class="tab-pane fade in" id="tab7">
                          	 <div class="row">
                          	     <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                	 			    <div class="form-box">
                	 			        <label>Lead Pax Name</label>
                	 			        <input type="text" class="form-control" placeholder="Lead Pax Name" />
                	 				    <div class="input-group-addon">
                	 				        <i class="fa fa-globe" aria-hidden="true"></i>
                	 				    </div>
                	 			    </div>
                	 		    </div>
                	 		    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                	 			    <div class="form-box">
                	 			        <label>Lead Pax Contact No.</label>
                	 			        <input type="tel" class="form-control" placeholder="Lead Pax Contact No." />
                	 			        <div class="input-group-addon">
                	 				        <i class="fa fa-phone" aria-hidden="true"></i>
                	 				    </div>
                	 			    </div>
                	 		    </div>
                	 		    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                	 			    <div class="form-box">
                	 			        <label>Lead Pax Email Id</label>
                	 			        <input type="email" class="form-control" placeholder="Lead Pax Email Id" />
                	 			        <div class="input-group-addon">
                	 				        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                	 				    </div>
                	 			    </div>
                	 		    </div>
                	 		    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                	 		        <div class="form-box">
                	 		            <label for="vehicle1">Check Services You Want To Include While Building Your Own Package</label>
                	 		        </div>
                	 		        <div class="check-box">
                	 		            <div class="form-box">
                	 			            <input type="checkbox" id="Accommodation" name="Accommodation" value="check">
                	 			            <label>Accommodation</label>
                	 			        </div>
                	 			        <div class="form-box">
                	 			            <input type="checkbox" id="Tour/Attraction" name="Tour/Attraction" value="check">
                	 			            <label>Tour/Attraction</label>
                	 			        </div>
                	 			        <div class="form-box">
                	 			            <input type="checkbox" id="Transfer" name="Transfer" value="check">
                	 			            <label>Transfer</label>
                	 			        </div>
                	 			        <div class="form-box">
                	 			            <input type="checkbox" id="Meal" name="Meal" value="check">
                	 			            <label>Meal</label>
                	 			        </div>
                	 			        <div class="form-box">
                	 			            <input type="checkbox" id="Guide" name="Guide" value="check">
                	 			            <label>Guide</label>
                	 			        </div>
                	 		        </div>
                	 		    </div>
                	 		    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                		 			<div class="form-box">
                		 			      <label>Package Start Date</label>
                		 				<input type="date" class="form-control" placeholder="Package Start Date" />
                		 				<div class="input-group-addon">
                		 				    <i class="fa fa-calendar" aria-hidden="true"></i>
                		 				</div>
                		 			</div>
                		 		</div>
                		 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
            	 			        <div class="form-box select">
            	 			            <label>Nationality</label>
            	 				        <select name="ctl00$ContentPlaceHolder1$ddlAccNationality" id="ContentPlaceHolder1_ddlAccNationality" class="form-control pl30">
                                    		<option value="0">Nationality</option>
                                    		<option value="IN">Indian</option>
                                    		<option value="AF">Afghanistan</option>
                                    		<option value="AX">Aland Islands</option>
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
                                    		<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    		<option value="BA">Bosnia and Herzegovina</option>
                                    		<option value="BW">Botswana</option>
                                    		<option value="BV">Bouvet Island</option>
                                    		<option value="BR">Brazil</option>
                                    		<option value="IO">British Indian Ocean Territory</option>
                                    		<option value="BN">Brunei</option>
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
                                    		<option value="CK">Cook Islands</option>
                                    		<option value="CR">Costa Rica</option>
                                    		<option value="CI">Cote d'ivoire (Ivory Coast)</option>
                                    		<option value="HR">Croatia</option>
                                    		<option value="CU">Cuba</option>
                                    		<option value="CW">Curacao</option>
                                    		<option value="CY">Cyprus</option>
                                    		<option value="CZ">Czech Republic</option>
                                    		<option value="CD">Democratic Republic of the Congo</option>
                                    		<option value="DK">Denmark</option>
                                    		<option value="DJ">Djibouti</option>
                                    		<option value="DM">Dominica</option>
                                    		<option value="DO">Dominican Republic</option>
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
                                    		<option value="GP">Guadaloupe</option>
                                    		<option value="GU">Guam</option>
                                    		<option value="GT">Guatemala</option>
                                    		<option value="GG">Guernsey</option>
                                    		<option value="GN">Guinea</option>
                                    		<option value="GW">Guinea-Bissau</option>
                                    		<option value="GY">Guyana</option>
                                    		<option value="HT">Haiti</option>
                                    		<option value="HM">Heard Island and McDonald Islands</option>
                                    		<option value="HN">Honduras</option>
                                    		<option value="HK">Hong Kong</option>
                                    		<option value="HU">Hungary</option>
                                    		<option value="IS">Iceland</option>
                                    		<option value="ID">Indonesia</option>
                                    		<option value="IR">Iran</option>
                                    		<option value="IQ">Iraq</option>
                                    		<option value="IE">Ireland</option>
                                    		<option value="IM">Isle of Man</option>
                                    		<option value="IL">Israel</option>
                                    		<option value="IT">Italy</option>
                                    		<option value="JM">Jamaica</option>
                                    		<option value="JP">Japan</option>
                                    		<option value="JE">Jersey</option>
                                    		<option value="JO">Jordan</option>
                                    		<option value="KZ">Kazakhstan</option>
                                    		<option value="KE">Kenya</option>
                                    		<option value="KI">Kiribati</option>
                                    		<option value="XK">Kosovo</option>
                                    		<option value="KW">Kuwait</option>
                                    		<option value="KG">Kyrgyzstan</option>
                                    		<option value="LA">Laos</option>
                                    		<option value="LV">Latvia</option>
                                    		<option value="LB">Lebanon</option>
                                    		<option value="LS">Lesotho</option>
                                    		<option value="LR">Liberia</option>
                                    		<option value="LY">Libya</option>
                                    		<option value="LI">Liechtenstein</option>
                                    		<option value="LT">Lithuania</option>
                                    		<option value="LU">Luxembourg</option>
                                    		<option value="MO">Macao</option>
                                    		<option value="MK">Macedonia</option>
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
                                    		<option value="FM">Micronesia</option>
                                    		<option value="MD">Moldova</option>
                                    		<option value="MC">Monaco</option>
                                    		<option value="MN">Mongolia</option>
                                    		<option value="ME">Montenegro</option>
                                    		<option value="MS">Montserrat</option>
                                    		<option value="MA">Morocco</option>
                                    		<option value="MZ">Mozambique</option>
                                    		<option value="MM">Myanmar (Burma)</option>
                                    		<option value="NA">Namibia</option>
                                    		<option value="NR">Nauru</option>
                                    		<option value="NP">Nepal</option>
                                    		<option value="NL">Netherlands</option>
                                    		<option value="NC">New Caledonia</option>
                                    		<option value="NZ">New Zealand</option>
                                    		<option value="NI">Nicaragua</option>
                                    		<option value="NE">Niger</option>
                                    		<option value="NG">Nigeria</option>
                                    		<option value="NU">Niue</option>
                                    		<option value="NF">Norfolk Island</option>
                                    		<option value="KP">North Korea</option>
                                    		<option value="MP">Northern Mariana Islands</option>
                                    		<option value="NO">Norway</option>
                                    		<option value="OM">Oman</option>
                                    		<option value="PK">Pakistan</option>
                                    		<option value="PW">Palau</option>
                                    		<option value="PS">Palestine</option>
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
                                    		<option value="RU">Russia</option>
                                    		<option value="RW">Rwanda</option>
                                    		<option value="BL">Saint Barthelemy</option>
                                    		<option value="SH">Saint Helena</option>
                                    		<option value="KN">Saint Kitts and Nevis</option>
                                    		<option value="LC">Saint Lucia</option>
                                    		<option value="MF">Saint Martin</option>
                                    		<option value="PM">Saint Pierre and Miquelon</option>
                                    		<option value="VC">Saint Vincent and the Grenadines</option>
                                    		<option value="WS">Samoa</option>
                                    		<option value="SM">San Marino</option>
                                    		<option value="ST">Sao Tome and Principe</option>
                                    		<option value="SA">Saudi Arabia</option>
                                    		<option value="SN">Senegal</option>
                                    		<option value="RS">Serbia</option>
                                    		<option value="SC">Seychelles</option>
                                    		<option value="SL">Sierra Leone</option>
                                    		<option value="SG">Singapore</option>
                                    		<option value="SX">Sint Maarten</option>
                                    		<option value="SK">Slovakia</option>
                                    		<option value="SI">Slovenia</option>
                                    		<option value="SB">Solomon Islands</option>
                                    		<option value="SO">Somalia</option>
                                    		<option value="ZA">South Africa</option>
                                    		<option value="GS">South Georgia and the South Sandwich Islands</option>
                                    		<option value="KR">South Korea</option>
                                    		<option value="SS">South Sudan</option>
                                    		<option value="ES">Spain</option>
                                    		<option value="LK">Sri Lanka</option>
                                    		<option value="SD">Sudan</option>
                                    		<option value="SR">Suriname</option>
                                    		<option value="SJ">Svalbard and Jan Mayen</option>
                                    		<option value="SZ">Swaziland</option>
                                    		<option value="SE">Sweden</option>
                                    		<option value="CH">Switzerland</option>
                                    		<option value="SY">Syria</option>
                                    		<option value="TW">Taiwan</option>
                                    		<option value="TJ">Tajikistan</option>
                                    		<option value="TZ">Tanzania</option>
                                    		<option value="TH">Thailand</option>
                                    		<option value="TL">Timor-Leste (East Timor)</option>
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
                                    		<option value="VA">Vatican City</option>
                                    		<option value="VE">Venezuela</option>
                                    		<option value="VN">Vietnam</option>
                                    		<option value="VG">Virgin Islands, British</option>
                                    		<option value="VI">Virgin Islands, US</option>
                                    		<option value="WF">Wallis and Futuna</option>
                                    		<option value="EH">Western Sahara</option>
                                    		<option value="YE">Yemen</option>
                                    		<option value="ZM">Zambia</option>
                                    		<option value="ZW">Zimbabwe</option>
                                    	</select>
                                        <div class="input-group-addon">
                                            <i class="fa fa-globe"></i>
                                        </div>
            	 			        </div>
            	 		        </div>
            	 		        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
            				 		    <div class="form-box">
            				 		        <label>Select Room(s) / Pax(s)</label>
            			 		            <div id="accordion">
                                                <div class="passenger" id="heading9">
                                                    <label class="form-control" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">Infants</label>
                                                </div>
                                                <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            				 			        <div class="form-box">
                            				 			            <label>Adult (s)</label>
                            				 				        <input type="number" class="form-control" placeholder="Adult" />
                            				 					    <div class="input-group-addon">
                            				 					        <i class="fa fa-male" aria-hidden="true"></i>
                            				 					    </div>
                            				 			        </div>
                            				 		        </div>
                            				 		        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    				 		    <div class="form-box">
                                    				 			    <label>Child (ren)</label>
                                    				 				<input type="number" class="form-control" placeholder="Children" />
                                				 				    <div class="input-group-addon">
                                				 					    <i class="fa fa-child" aria-hidden="true"></i>
                                				 					</div>
                                    				 			</div>
                                    				 		</div>
                                          <!--                  <div class="col-12 col-sm-6 col-md-4 col-lg-4">-->
                                    				 	<!--		<div class="form-box">-->
                                    				 	<!--		    <label>Infants (below 2y)</label>-->
                                    				 	<!--			<input type="number" class="form-control number" placeholder="Infants" />-->
                                				 					<!--<div class="input-group-addon">-->
                                				 					<!--    <i class="fa fa-male" aria-hidden="true"></i>-->
                                          <!--                              <i class="fa fa-child" aria-hidden="true"></i>-->
                                				 					<!--</div>-->
                                    				 	<!--		</div>-->
                                    				 	<!--	</div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            		 		        </div>
                	 		    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                	 			    <div class="form-box">
                	 			        <label>Enter Destination </label>
                	 				    <input type="text" class="form-control" placeholder="Country, City, Region, Area">
                	 				    <div class="input-group-addon">
                	 				        <i class="fa fa-globe" aria-hidden="true"></i>
                	 				    </div>
                	 			    </div>
                	 		    </div>
            			 		<div class="col-12 col-sm-6 col-md-3 col-lg-3">
            	 			        <div class="form-box">
            	 				        <label>Check-In</label>
            	 					    <input type="date" class="form-control" placeholder="Check-In" />
            	 				        <div class="input-group-addon">
            	 				            <i class="fa fa-calendar"></i>
            	 				        </div>
            	 			        </div>
            	 		        </div>
            	 		        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
            	 			        <div class="form-box select">
            	 			            <label>Nights</label>
            			 				<select class="form-control ">
            			 					<option value="Nights">Nights</option>
            			 					<option>1</option>
            			 					<option>2</option>
            			 					<option>3</option>
            			 					<option>4</option>
            			 					<option>5</option>				 					
            			 					<option>6</option>
            			 					<option>7</option>
            			 					<option>8</option>
            			 				</select>
            	 			            <div class="input-group-addon">
            	 			                <i class="fa fa-moon-o" aria-hidden="true"></i>
            	 			            </div>
            	 			        </div>
            	 		        </div>
            	 		        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
            	 			        <div class="form-box">
            	 			    	    <label>Check Out</label>
            	 			            <input type="date" class="form-control" placeholder="Check-Out" />
            	 					    <div class="input-group-addon">
            	 					        <i class="fa fa-calendar"></i>
            	 					    </div>
            	 			        </div>
            	 		        </div>
            	 		        
                                
            			 		
            	 		       <!-- <div class="col-12 col-sm-6 col-md-6 col-lg-6">-->
            				 		    <!--<div class="form-box">-->
            				 		    <!--    <label>Select Room(s) / Pax(s)</label>-->
            			 		     <!--       <div id="accordion">-->
                       <!--                         <div class="passenger" id="heading9">-->
                       <!--                             <label class="form-control" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">-->
                                                        <!--<i class="fa fa-bed" aria-hidden="true"></i>-->
            	 					    <!--                <i class="fa fa-male" aria-hidden="true"></i>-->
            	 					    <!--                <i class="fa fa-child" aria-hidden="true"></i>-->
            	 					    <!--                Infants-->
                       <!--                             </label>-->
                       <!--                         </div>-->
                       <!--                         <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">-->
                       <!--                             <div class="card-body">-->
                       <!--                                 <div class="row">-->
                       <!--                                     <div class="col-12 col-sm-6 col-md-6 col-lg-6">-->
                       <!--     				 			        <div class="form-box">-->
                       <!--     				 			            <label>Adult (s)</label>-->
                       <!--     				 				        <input type="number" class="form-control" placeholder="Adult" />-->
                       <!--     				 					    <div class="input-group-addon">-->
                       <!--     				 					        <i class="fa fa-male" aria-hidden="true"></i>-->
                       <!--     				 					    </div>-->
                       <!--     				 			        </div>-->
                       <!--     				 		        </div>-->
                       <!--     				 		        <div class="col-12 col-sm-6 col-md-6 col-lg-6">-->
                       <!--             				 		    <div class="form-box">-->
                       <!--             				 			    <label>Children (ren)</label>-->
                       <!--             				 				<input type="number" class="form-control" placeholder="Children" />-->
                       <!--         				 				    <div class="input-group-addon">-->
                       <!--         				 					    <i class="fa fa-child" aria-hidden="true"></i>-->
                       <!--         				 					</div>-->
                       <!--             				 			</div>-->
                       <!--             				 		</div>-->
                                          <!--                  <div class="col-12 col-sm-6 col-md-4 col-lg-4">-->
                                    				 	<!--		<div class="form-box">-->
                                    				 	<!--		    <label>Infants (below 2y)</label>-->
                                    				 	<!--			<input type="number" class="form-control number2" placeholder="Infants" />-->
                                				 					<!--<div class="input-group-addon">-->
                                				 					<!--    <i class="fa fa-male" aria-hidden="true"></i>-->
                                          <!--                              <i class="fa fa-child" aria-hidden="true"></i>-->
                                				 					<!--</div>-->
                                    				 	<!--		</div>-->
                                    				 	<!--	</div>-->
                       <!--                                 </div>-->
                       <!--                             </div>-->
                       <!--                         </div>-->
                       <!--                     </div>-->
                       <!--                 </div>-->
            		 		      <!--  </div>-->
            	 		        <!--<div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
                        <!--            <div class="dropdown">-->
                        <!--                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example-->
                        <!--                <span class="caret"></span></button>-->
                        <!--                <div class="check-avail-adt-rm-table main dropdown-menu">-->
                        <!--                    <div class="check-avail-adt-rm-list" id="divPackRoom1">-->
                        <!--                        <div class="col-sm-12 adult-child-head" id="divPackRoomNo">Room 1:</div>-->
                        <!--                        <div class="col-sm-5 adult-room-tb plr5 col-xs-6">-->
                        <!--                            <p class="check-avail-label"><strong>Adult(s)</strong></p>-->
                        <!--                            <div class="quantity buttons_added">-->
                        <!--                                <input type="button" value="-" class="minus"><input id="inpPackAccAdult" type="number" step="1" min="1" max="4" name="inpAccAdult" value="2" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" readonly="readonly"><input id="btnAddPackAdult" type="button" value="+" class="plus">-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-sm-5 child-room-tb plr5 col-xs-6">-->
                        <!--                            <p class="check-avail-label"><strong>Child(ren)</strong></p>-->
                        <!--                            <div class="quantity buttons_added">-->
                        <!--                                <input type="button" value="-" class="minus"><input id="inpPackAccChild" type="number" step="1" min="0" max="2" name="inpAccChild" value="0" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" readonly="readonly"><input id="btnAddPackChild" input="" type="button" value="+" class="plus">-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="clearfix"></div>-->
                        <!--                    <div id="Packauto-room-tab"></div>-->
                        <!--                    <div class="clearfix"></div>-->
                                            
                        <!--                    <div class="col-sm-12 addRemove-room-tab" id="divAddPackRoom">-->
                        <!--                        <a href="#" class="Packadd-room-tab">Add another room</a>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
            	 		       <!-- <div class="col-12 col-sm-6 col-md-3 col-lg-3">-->
            	 			      <!--  <div class="form-box">-->
            	 			      <!--      <label>Select Room(s) / Pax(s)</label>-->
            	 				     <!--   <input type="number" class="form-control number2" placeholder="Infants" />-->
            	 					    <!--<div class="input-group-addon">-->
            	 					    <!--    <i class="fa fa-bed" aria-hidden="true"></i>-->
            	 					    <!--    <i class="fa fa-male" aria-hidden="true"></i>-->
            	 					    <!--    <i class="fa fa-child" aria-hidden="true"></i>-->
            	 					    <!--</div>-->
            	 			      <!--  </div>-->
            	 		       <!-- </div>-->
            			 		<div class="tab-action-more col-12 col-sm-6 col-md-3 col-lg-3 form-box" style="padding-top: 34px; text-align: center;">
                        	        <button class="btn" style="color:#fff !important;"><a href="#">Add Destination</a></button>
                                </div>
                                <div class="tab-action col-12 col-sm-12 col-md-12 col-lg-12 form-box" style="padding-top: 34px; text-align: center;">
                        	        <button class="btn" style="color:#fff !important;"><a href="#">BUILD YOUR PACKAGE</a></button>
                                </div>
            				</div>	
                        </div>
                        <div class="tab-pane fade in" id="tab8">
                          	<div class="row">
                                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
				 			        <div class="form-box">
				 			    	    <label>Destination</label>
				 			            <input type="text" class="form-control" placeholder="Destination" />
				 				        <div class="input-group-addon">
				 				            <i class="fa fa-location-arrow"></i>
				 				        </div>
				 			        </div>
				 		        </div>
                	 		    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
						 			<div class="form-box">
						 			    <label>Departure Date</label>
						 			    <input type="date" class="form-control" placeholder="Departure Date" />
						 			    <div class="input-group-addon">
						 			        <i class="fa fa-calendar" aria-hidden="true"></i>
						 			    </div>
						 			</div>
						 		</div>
                	 		    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
        						    <div class="form-box">
        						 	    <label>Return-Date</label>
        						 	    <input type="date" class="form-control" placeholder="Return" />
        						 		<div class="input-group-addon">
        						 		    <i class="fa fa-calendar" aria-hidden="true"></i>
        						 		</div>
        						 	</div>
        						</div>
        						<div class="col-12 col-sm-6 col-md-3 col-lg-3">
				 			        <div class="form-box">
				 			            <label>Passengers</label>
				 				        <input type="number" class="form-control" placeholder="Passengers">
				 					    <div class="input-group-addon">
				 					        <i class="fa fa-male" aria-hidden="true"></i>
				 					    </div>
				 			        </div>
				 		        </div>
            			 		<div class="tab-action col-12 col-sm-12 col-md-12 col-lg-12 form-box" style="padding-top: 34px; text-align: center;">
                        	        <button class="btn" style="color:#fff !important;"><a href="visa.html">Search</a></button>
                                </div>
            				</div>
            				<div class="landingContainer">
            				    <div class="row">
            				        <div class="col-lg-12">
            				            <div class="landingCard appendBottom40 custSay">
            				                <div class="makeFlex column blackText latoBold appendBottom20">
            				                    <h2> What our users have to say</h2>
            				                    <p class="font22 makeFlex latoRegular appendTop5">
            				                        <span class="darkGreyText"></span>
            				                        <span class="makeFlex pushRight">
            				                            <span class="slideArrow pushRight"> &nbsp;</span>
            				                        </span>
            				                    </p>
            				                </div>
            				                <div class="landingCardSlider" data-cy="visaWhatOurCustomersSay">
            				                    <div class="framebox">
  <div class="owl-carousel">
 <a class="item item1" >
  1
 </a>
 <a class="item item2" >2</a>
 <a class="item item3" >3</a>
 <a class="item item4" >4</a>
 <a class="item item5" >5</a>
</div>
</div>
            				                    <div class="slick-slider slick-initialized" dir="ltr">
            				                        <button type="button" data-role="none" class="slick-arrow slick-prev slick-disabled" style="display: block;"> Previous</button>
            				                        <div class="slick-list">
            				                            <div class="slick-track" style="width: 1500px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
            				                                <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 375px;">
            				                                    <div>
            				                                        <div class="slideItem" tabindex="-1" style="width: 100%; display: inline-block;">
            				                                            <div class="itemCard makeFlex column">
            				                                                <p data-cy="visaWOCSCustomerName0" class="appendTop15 font18 latoBold appendBottom5">Preeti Vasudevan</p>
            				                                                <p class="font12 appendBottom30" data-cy="visaWOCSReviewTime0">Reviewed on: 28-11-2019</p>
            				                                                <p class="font20 capText blackText latoBold appendBottom10" data-cy="visaWOCSReviewTitle0">“Visa process made easy”</p>
            				                                                <p data-cy="visaWOCSReviewDescription0" class="font16 lineHeight20 custReviewDesc" style="height: 100px;">I am travelling in a group of 14 who are based out of 4 cities. This service of yours helped tremendously to coordinate with all of them. </p>
            				                                            </div>
            				                                        </div>
            				                                    </div>
            				                                </div>
            				                                <div data-index="1" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 375px;">
            				                                    <div>
            				                                        <div class="slideItem" tabindex="-1" style="width: 100%; display: inline-block;">
            				                                            <div class="itemCard makeFlex column">
            				                                                <p data-cy="visaWOCSCustomerName1" class="appendTop15 font18 latoBold appendBottom5">Lata G</p>
            				                                                <p class="font12 appendBottom30" data-cy="visaWOCSReviewTime1">Reviewed on: 18-11-2019</p>
            				                                                <p class="font20 capText blackText latoBold appendBottom10" data-cy="visaWOCSReviewTitle1">“Awesome and easy Process”</p>
            				                                                <p data-cy="visaWOCSReviewDescription1" class="font16 lineHeight20 custReviewDesc" style="height: 100px;">To be honest, I was a little skeptical to apply for visa but went through with it since I buy all my flights and hotels with MMT. But it was an awesome experience. Very easy and no physical documentation required.</p>
            				                                            </div>
            				                                        </div>
            				                                    </div>
            				                                </div>
            				                                <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 375px;">
            				                                    <div>
            				                                        <div class="slideItem" tabindex="-1" style="width: 100%; display: inline-block;">
            				                                            <div class="itemCard makeFlex column">
            				                                                <p data-cy="visaWOCSCustomerName2" class="appendTop15 font18 latoBold appendBottom5">Yogesh</p>
            				                                                <p class="font12 appendBottom30" data-cy="visaWOCSReviewTime2">Reviewed on: 28-10-2019</p>
            				                                                <p class="font20 capText blackText latoBold appendBottom10" data-cy="visaWOCSReviewTitle2">“Easy Processing”</p>
            				                                                <p data-cy="visaWOCSReviewDescription2" class="font16 lineHeight20 custReviewDesc" style="height: 100px;">I never imagined applying for a visa could be that easy. Its normally such a cubersome process!</p>
            				                                            </div>
            				                                        </div>
            				                                    </div>
            				                                </div>
            				                                <div data-index="3" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 375px;">
            				                                    <div>
            				                                        <div class="slideItem" tabindex="-1" style="width: 100%; display: inline-block;">
            				                                            <div class="itemCard makeFlex column">
            				                                                <p data-cy="visaWOCSCustomerName3" class="appendTop15 font18 latoBold appendBottom5">Sameer Joshi</p>
            				                                                <p class="font12 appendBottom30" data-cy="visaWOCSReviewTime3">Reviewed on: 15-08-2019</p>
            				                                                <p class="font20 capText blackText latoBold appendBottom10" data-cy="visaWOCSReviewTitle3">“Great Experience!”</p>
            				                                                <p data-cy="visaWOCSReviewDescription3" class="font16 lineHeight20 custReviewDesc" style="height: 100px;">It was great experience getting visa with easy steps on MakeMyTrip</p>
            				                                            </div>
            				                                        </div>
            				                                    </div>
            				                                </div>
            				                            </div>
            				                        </div>
            				                        <button type="button" data-role="none" class="slick-arrow slick-next" style="display: block;"> Next</button>
            				                    </div>
            				                </div>
            				            </div>
            				            <div class="crWrapper desktop ">
            				                <a class="crContainer" href="javascript:void(0);">
            				                    <p class="crHeading">WE ARE HERE TO HELP:</p>
            				                    <p class="crText paddingLR20 lineHeight18">Given the COVID-19 outbreak, we urge you to stay tuned to updates by airlines &amp; hoteliers to make informed decisions regarding travel date changes &amp; cancellations.</p>
            				                    <p class="crCTA">SEE HOW<span class="crArrow landingSprite appendLeft5 blueArrowIcon"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></p>
            				                </a>
            				            </div>
            				            <div class="landingCard appendBottom40 travelBlog">
            				                <div class="makeFlex column blackText latoBold appendBottom20">
            				                    <h2>Travel Blog</h2>
            				                    <p class="font22 makeFlex latoRegular appendTop5">
            				                        <span class="makeFlex pushRight">
            				                            <a data-cy="travelBlogViewAll" href="https://www.makemytrip.com/blog/?intid=Blog_HomePage_Tab_Stories" class=" makeFlex hrtlCenter font16 blueText latoBlack appendRight20">VIEW ALL
            				                                <span class="blueArrowIcon landingSprite appendLeft10"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
            				                            </a>
            				                            <span class="slideArrow pushRight" data-cy="travelBlogSA"> </span>
            				                        </span>
            				                    </p>
            				                </div>
            				                <div class="landingCardSlider" data-cy="travelBlog">
            				                    <div class="slick-slider slick-initialized" dir="ltr">
            				                        <button type="button" data-role="none" class="slick-arrow slick-prev slick-disabled" style="display: block;"> Previous</button>
            				                        <div class="slick-list">
            				                            <div class="slick-track" style="width: 1365px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
            				                                <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 273px;">
            				                                    <div>
            				                                        <a data-cy="BlogLink-0" data-cy-url="http://www.makemytrip.com/blog/virtual-world-tour" class="slideItem pointer" tabindex="-1" style="width: 100%; display: inline-block;">
            				                                            <div class="makeFlex itemCard column">
            				                                                <img class="travelBlogImgWrap appendBottom10" src="https://seoimgak.mmtcdn.com/blog/sites/default/files/virtual-tour-hero1.jpg?NWRZPy_k4_kNNza1pT0QF2BrtV2bbcfj" alt="" data-cy="travelBlogImage0">
            				                                                <p class="font16 lineHeight22 blackText paddingLR20 appendBottom10 minHeight45" data-cy="travelBlogTitle0">Tour the World from Your Couch with #ExperienceLive!</p>
            				                                            </div>
            				                                        </a>
            				                                    </div>
            				                                </div>
            				                                <div data-index="1" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 273px;">
            				                                    <div>
            				                                        <a data-cy="BlogLink-1" data-cy-url="http://www.makemytrip.com/blog/makemytrip-charter-flights" class="slideItem pointer" tabindex="-1" style="width: 100%; display: inline-block;">
            				                                            <div class="makeFlex itemCard column">
            				                                                <img class="travelBlogImgWrap appendBottom10" src="https://seoimgak.mmtcdn.com/blog/sites/default/files/hero2_28charter_1.jpg?6Aw5c27vU4CZHFxUGqPGmRfFhJZWkXek" alt="" data-cy="travelBlogImage1">
            				                                                <p class="font16 lineHeight22 blackText paddingLR20 appendBottom10 minHeight45" data-cy="travelBlogTitle1">#FlyLikeAStar with MakeMyTrip’s New Charter Flight Serv...</p>
            				                                            </div>
            				                                        </a>
            				                                    </div>
            				                                </div>
            				                                <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 273px;">
            				                                    <div>
            				                                        <a data-cy="BlogLink-2" data-cy-url="http://www.makemytrip.com/blog/things-to-do-on-business-trips" class="slideItem pointer" tabindex="-1" style="width: 100%; display: inline-block;">
            				                                            <div class="makeFlex itemCard column">
            				                                                <img class="travelBlogImgWrap appendBottom10" src="https://seoimgak.mmtcdn.com/blog/sites/default/files/hero_562.jpg?hncoThn_5OqPcZRrgDR6YqsA9qQTM8TH" alt="" data-cy="travelBlogImage2">
            				                                                <p class="font16 lineHeight22 blackText paddingLR20 appendBottom10 minHeight45" data-cy="travelBlogTitle2">6 Things to Do on a Business Trip!</p>
            				                                            </div>
            				                                        </a>
            				                                    </div>
            				                                </div>
            				                                <div data-index="3" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 273px;">
            				                                    <div>
            				                                        <a data-cy="BlogLink-3" data-cy-url="http://www.makemytrip.com/blog/country-wise-travel-guidelines" class="slideItem pointer" tabindex="-1" style="width: 100%; display: inline-block;">
            				                                            <div class="makeFlex itemCard column">
            				                                                <img class="travelBlogImgWrap appendBottom10" src="https://seoimgak.mmtcdn.com/blog/sites/default/files/book-an-international-flights_0.jpg?ZXnoPWso01qBtd7QnC7zWWUQ6DEulQjg" alt="" data-cy="travelBlogImage3">
            				                                                <p class="font16 lineHeight22 blackText paddingLR20 appendBottom10 minHeight45" data-cy="travelBlogTitle3">Your One-Stop Resource For Country-Wise Travel Guidelin...</p>
            				                                            </div>
            				                                        </a>
            				                                    </div>
            				                                </div>
            				                                <div data-index="4" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 273px;">
            				                                    <div>
            				                                        <a data-cy="BlogLink-4" data-cy-url="http://www.makemytrip.com/blog/makemytrip-covid-insurance" class="slideItem pointer" tabindex="-1" style="width: 100%; display: inline-block;">
            				                                            <div class="makeFlex itemCard column">
            				                                                <img class="travelBlogImgWrap appendBottom10" src="https://seoimgak.mmtcdn.com/blog/sites/default/files/heroq.jpg?RV9Bjige7_b1rqOt.01OrFbUgqTlRwtG" alt="" data-cy="travelBlogImage4">
            				                                                <p class="font16 lineHeight22 blackText paddingLR20 appendBottom10 minHeight45" data-cy="travelBlogTitle4">Protect Yourself with MakeMyTrip’s Special COVID-19  In...</p>
            				                                            </div>
            				                                        </a>
            				                                    </div>
            				                                </div>
            				                            </div>
            				                        </div>
            				                        <button type="button" data-role="none" class="slick-arrow slick-next" style="display: block;"> Next</button>
            				                    </div>
            				                </div>
            				            </div>
            				            <div class="landingCard appendBottom40 recentHolidays">
            				                <div class="makeFlex column blackText latoBold appendBottom10">
            				                    <h2> Our Top Destinations</h2>
            				                    <p class="font22 makeFlex latoRegular appendTop5">
            				                        <span class="darkGreyText">Tourist Visa only</span>
            				                        <span class="makeFlex pushRight">
            				                            <span class="slideArrow pushRight"> &nbsp;</span>
            				                        </span>
            				                    </p>
            				                </div>
            				                <div data-cy="visaDestinations" class="landingCardSlider visaListSlider">
            				                    <div class="slick-slider slick-initialized" dir="ltr">
            				                        <button type="button" data-role="none" class="slick-arrow slick-prev slick-disabled" style="display: block;"> Previous</button>
            				                        <div class="slick-list">
            				                            <div class="slick-track" style="width: 1576px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
            				                                <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 197px;">
            				                                    <div>
            				                                        <div class="makeFlex slideItem column" tabindex="-1" style="width: 100%; display: inline-block;">
            				                                            <div class="itemCard">
            				                                                <img data-cy="visaDestinationsIcon0" src="https://imgak.mmtcdn.com/visa/images/countries/ae/img_uae.png" alt="">
            				                                                <div class="paddingLR10">
            				                                                    <p data-cy="visaDestinationsTitle0" class="font20 latoBold blackText appendBottom10 appendTop10 countryName" style="height: 40px;"> United Arab Emirates</p>
            				                                                    <p class="greyText">Processing Time</p>
            				                                                    <p class="greenText latoBold appendBottom10" data-cy="visaDestinationsTimeStr0"> 5-8 Working Days</p>
            				                                                    <p class="latoBold blackText makeFlex font20" data-cy="visaDestinationsPricePerPax0">5975</p>
            				                                                    <p class="font12">per person</p>
            				                                                </div>
            				                                            </div>
            				                                        </div>
            				                                    </div>
            				                                </div>
            				                                <div data-index="1" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 197px;">
            				                                    <div>
            				                                        <div class="makeFlex slideItem column" tabindex="-1" style="width: 100%; display: inline-block;">
            				                                            <div class="itemCard">
            				                                                <img data-cy="visaDestinationsIcon1" src="https://imgak.mmtcdn.com/visa/images/countries/ae/img_uae.png" alt="">
            				                                                <div class="paddingLR10">
            				                                                    <p data-cy="visaDestinationsTitle1" class="font20 latoBold blackText appendBottom10 appendTop10 countryName" style="height: 40px;"> Dubai</p>
            				                                                    <p class="greyText">Processing Time</p>
            				                                                    <p class="greenText latoBold appendBottom10" data-cy="visaDestinationsTimeStr1"> 5-8 Working Days</p>
            				                                                    <p class="latoBold blackText makeFlex font20" data-cy="visaDestinationsPricePerPax1">5975</p>
            				                                                    <p class="font12">per person</p>
            				                                                </div>
            				                                            </div>
            				                                        </div>
            				                                    </div>
            				                                </div>
            				                                <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 197px;">
            				                                    <div>
            				                                        <div class="makeFlex slideItem column" tabindex="-1" style="width: 100%; display: inline-block;">
            				                                            <div class="itemCard">
            				                                                <img data-cy="visaDestinationsIcon2" src="https://imgak.mmtcdn.com/visa/images/countries/za/img_southafrica.png" alt="">
            				                                                <div class="paddingLR10">
            				                                                    <p data-cy="visaDestinationsTitle2" class="font20 latoBold blackText appendBottom10 appendTop10 countryName" style="height: 40px;"> South Africa</p>
            				                                                    <p class="greyText">Processing Time</p>
            				                                                    <p class="greenText latoBold appendBottom10" data-cy="visaDestinationsTimeStr2"> 10-20 Working Days</p>
            				                                                    <p class="latoBold blackText makeFlex font20" data-cy="visaDestinationsPricePerPax2">3731</p>
            				                                                    <p class="font12">per person</p>
            				                                                </div>
            				                                            </div>
            				                                        </div>
            				                                    </div>
            				                                </div>
            				                                <div data-index="3" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 197px;">
            				                                    <div>
            				                                        <div class="makeFlex slideItem column" tabindex="-1" style="width: 100%; display: inline-block;">
            				                                            <div class="itemCard">
            				                                                <img data-cy="visaDestinationsIcon3" src="https://imgak.mmtcdn.com/visa/images/countries/tr/img_turkey.png" alt="">
            				                                                <div class="paddingLR10">
            				                                                    <p data-cy="visaDestinationsTitle3" class="font20 latoBold blackText appendBottom10 appendTop10 countryName" style="height: 40px;"> Turkey</p>
            				                                                    <p class="greyText">Processing Time</p>
            				                                                    <p class="greenText latoBold appendBottom10" data-cy="visaDestinationsTimeStr3"> 15-20 Working Days</p>
            				                                                    <p class="latoBold blackText makeFlex font20" data-cy="visaDestinationsPricePerPax3">10580</p>
            				                                                    <p class="font12">per person</p>
            				                                                </div>
            				                                            </div>
            				                                        </div>
            				                                    </div>
            				                                </div>
            				                                <div data-index="4" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 197px;">
            				                                    <div>
            				                                        <div class="makeFlex slideItem column" tabindex="-1" style="width: 100%; display: inline-block;">
            				                                            <div class="itemCard">
            				                                                <img data-cy="visaDestinationsIcon4" src="https://imgak.mmtcdn.com/visa/images/countries/th/thailand.png" alt="">
            				                                                <div class="paddingLR10">
            				                                                    <p data-cy="visaDestinationsTitle4" class="font20 latoBold blackText appendBottom10 appendTop10 countryName" style="height: 40px;"> Thailand</p>
            				                                                    <p class="greyText">Processing Time</p>
            				                                                    <p class="greenText latoBold appendBottom10" data-cy="visaDestinationsTimeStr4"> 8-10 Working Days</p>
            				                                                    <p class="latoBold blackText makeFlex font20" data-cy="visaDestinationsPricePerPax4">3931</p>
            				                                                    <p class="font12">per person</p>
            				                                                </div>
            				                                            </div>
            				                                        </div>
            				                                    </div>
            				                                </div>
            				                                <div data-index="5" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 197px;">
            				                                    <div>
            				                                        <div class="makeFlex slideItem column" tabindex="-1" style="width: 100%; display: inline-block;">
            				                                            <div class="itemCard">
            				                                                <img data-cy="visaDestinationsIcon5" src="https://imgak.mmtcdn.com/visa/images/countries/ru/img_russia.png" alt="">
            				                                                <div class="paddingLR10">
            				                                                    <p data-cy="visaDestinationsTitle5" class="font20 latoBold blackText appendBottom10 appendTop10 countryName" style="height: 40px;"> Russia</p>
            				                                                    <p class="greyText">Processing Time</p>
            				                                                    <p class="greenText latoBold appendBottom10" data-cy="visaDestinationsTimeStr5"> 12-15 Working Days</p>
            				                                                    <p class="latoBold blackText makeFlex font20" data-cy="visaDestinationsPricePerPax5">10090</p>
            				                                                    <p class="font12">per person</p>
            				                                                </div>
            				                                            </div>
            				                                        </div>
            				                                    </div>
            				                                </div>
            				                                <div data-index="6" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 197px;">
            				                                    <div>
            				                                        <div class="makeFlex slideItem column" tabindex="-1" style="width: 100%; display: inline-block;">
            				                                            <div class="itemCard">
            				                                                <img data-cy="visaDestinationsIcon6" src="https://imgak.mmtcdn.com/visa/images/countries/lk/img_sri%20lanka.png" alt="">
            				                                                <div class="paddingLR10">
            				                                                    <p data-cy="visaDestinationsTitle6" class="font20 latoBold blackText appendBottom10 appendTop10 countryName" style="height: 40px;"> Sri Lanka</p>
            				                                                    <p class="greyText">Processing Time</p>
            				                                                    <p class="greenText latoBold appendBottom10" data-cy="visaDestinationsTimeStr6"> 3-4 Working Days</p>
            				                                                    <p class="latoBold blackText makeFlex font20" data-cy="visaDestinationsPricePerPax6">1970</p>
            				                                                    <p class="font12">per person</p>
            				                                                </div>
            				                                            </div>
            				                                        </div>
            				                                    </div>
            				                                </div>
            				                                <div data-index="7" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 197px;">
            				                                    <div>
            				                                        <div class="makeFlex slideItem column" tabindex="-1" style="width: 100%; display: inline-block;">
            				                                            <div class="itemCard">
            				                                                <img data-cy="visaDestinationsIcon7" src="https://imgak.mmtcdn.com/visa/images/countries/kh/img_cambodia.png" alt="">
            				                                                <div class="paddingLR10">
            				                                                    <p data-cy="visaDestinationsTitle7" class="font20 latoBold blackText appendBottom10 appendTop10 countryName" style="height: 40px;"> Cambodia</p>
            				                                                    <p class="greyText">Processing Time</p>
            				                                                    <p class="greenText latoBold appendBottom10" data-cy="visaDestinationsTimeStr7"> 3-5 Working Days</p>
            				                                                    <p class="latoBold blackText makeFlex font20" data-cy="visaDestinationsPricePerPax7">2999</p>
            				                                                    <p class="font12">per person</p>
            				                                                </div>
            				                                            </div>
            				                                        </div>
            				                                    </div>
            				                                </div>
            				                            </div>
            				                        </div>
            				                        <button type="button" data-role="none" class="slick-arrow slick-next" style="display: block;"> Next</button>
            				                    </div>
            				                </div>
            				            </div>
            				        </div>
            				    </div>    
            				</div>
            				
                        </div>
                    </div>
                </div>
            </div>
	    </div>   
	</div>
</section>
<!-- end of travel-option -->



<section class="our-product">
	<div class="container">
		<div class="row row-custom">
			<div class="col-lg-12 col-md-12 desti-column section-title">
				<h2>OUR PRODUCTS & SERVICES</h2>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 desti-column">
				<div class="inner-package">
						<img src="{{ asset('images/flight.png') }}" title="" alt="" class="img-fluid">

						<div class="package-details">
							<h2>Flight</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
						<!-- end of package-details -->

						<!--<a href="#" title="" class="viewmore"><i class="fa fa-arrow-right"></i></a>-->
				</div>
			</div>

			<div class="col-lg-6 col-md-12 col-sm-12 desti-column">
				<div class="inner-package">
						<img src="{{ asset('images/transfer.png') }}" title="" alt="" class="img-fluid">

						<div class="package-details">
							<h2>Transfer</h2>
							<p>Choose your origin and destination and in simple steps and you will have your private transfer booked. We constantly review our services to ensure that you enjoy your ride and your vacation starts in the best possible way.</p>
						</div>
						<!-- end of package-details -->

						<!--<a href="#" title="" class="viewmore"><i class="fa fa-arrow-right"></i></a>-->
				</div>
			</div>


			<div class="col-lg-6 col-md-12 col-sm-12 desti-column">
				<div class="inner-package">
						<img src="{{ asset('images/activity.png') }}" title="" alt="" class="img-fluid">

						<div class="package-details">
							<h2>Activity</h2>
							<p>When it comes to choosing a destination for your sightseeing holidays, every individual is bound to face some difficulty. It gets more difficult when you have to choose sightseeing tours while on a trip with your loved one.</p>
						</div>
						<!-- end of package-details -->

						<!--<a href="#" title="" class="viewmore"><i class="fa fa-arrow-right"></i></a>-->
				</div>
			</div>


			<div class="col-lg-6 col-md-12 col-sm-12 desti-column">
				<div class="inner-package">
						<img src="{{ asset('images/gruop-package.png') }}" title="" alt="" class="img-fluid">

						<div class="package-details">
							<h2>Group Package</h2>
							<p>In the 21st century, the phenomenon of change has sped up and the world is turning into a small village. Amidst these changes, a noticeable rise has been seen in the number of people travelling for leisure. Fast connectivity</p>
						</div>
						<!-- end of package-details -->

						<!--<a href="#" title="" class="viewmore"><i class="fa fa-arrow-right"></i></a>-->
				</div>
			</div>

			<div class="col-lg-6 col-md-12 col-sm-12 desti-column">
				<div class="inner-package">
						<img src="{{ asset('images/fit-package.png') }}" title="" alt="" class="img-fluid">

						<div class="package-details">
							<h2>FIT Package</h2>
							<p>We offers you international tailor made holidays and personalized holiday packages with a wide range of sightseeing tours and experiences to suit your individual taste and budget. Which include Romantic Getaways</p>
						</div>
						<!-- end of package-details -->

						<!--<a href="#" title="" class="viewmore"><i class="fa fa-arrow-right"></i></a>-->
				</div>
			</div>


			<div class="col-lg-6 col-md-12 col-sm-12 desti-column">
				<div class="inner-package">
						<img src="{{ asset('images/build-package.png') }}" title="" alt="" class="img-fluid">

						<div class="package-details">
							<h2>Build Package</h2>
							<p>Even after offering so much variety if you still don’t find what you are looking for ,we can create your own magical experience.</p>
						</div>
						<!-- end of package-details -->

						<!--<a href="#" title="" class="viewmore"><i class="fa fa-arrow-right"></i></a>-->
				</div>
			</div>

		</div>
	</div>	
</section>
<!-- end of build-pack-desti -->


<section class="testimonials getstarted-main">
    <div class="container-fluid">
	    <div class="row">
		    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 testimocolumn-cover getstarted">
		        <div class="sliderr">
		            <div id="demo" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="image-text">
		                            <img src="{{ asset('images/testimo-img.png') }}" alt="...">
		                            <div class="caption">
		                                <h2 class="animated bounceInRight" style="animation-delay: 1s">Get Started With City<br/> Tours</h2>
		                                <h5 class="animated bounceInLeft" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
		                            </div>
		                        </div>
                            </div>
                            <div class="carousel-item">
                                <div class="image-text">
		                            <img src="{{ asset('images/testimo-img.png') }}" alt="...">
		                            <div class="caption">
		                                <h2 class="animated bounceInRight" style="animation-delay: 1s">Get Started With City<br/> Tours</h2>
		                                <h5 class="animated bounceInLeft" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
		                            </div>
		                        </div>
                            </div>
                            <div class="carousel-item">
                                <div class="image-text">
		                            <img src="{{ asset('images/testimo-img.png') }}" alt="...">
		                            <div class="caption">
		                                <h2 class="animated bounceInRight" style="animation-delay: 1s">Get Started With City<br/> Tours</h2>
		                                <h5 class="animated bounceInLeft" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
		                            </div>
		                        </div>
                            </div>
                        </div>
                    </div>
			    </div>
		    </div>
	    </div>
	</div>
</section>
<!-- end of testimonials -->



<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-12">
				<div class="col-footer logo-footer">
					<h2>LOGO</h2>
					<p>
						Lorem ipsum dolor sit amet,<br/> consectetur adipiscing elit.<br/> eiusmod tempor incididunt ut<br/> labore et dolore magna aliqua.
					</p>
				</div>
				<!-- end of col-footer -->
			</div>

			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-12">
				<div class="col-footer address">
					<h2>Our Office Locations</h2>					
					<ul>
						<li><a href="#">Location 1</a></li>
						<li><a href="#">Location 2</a></li>
						<li><a href="#">Location 3</a></li>
						<li><a href="#">Location 4</a></li>
					</ul>
				</div>
				<!-- end of col-footer -->
			</div>


			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-12">
				<div class="col-footer usefullink">
					<h2>Useful links</h2>
					<ul>
						<li><a href="#">Link1</a></li>
						<li><a href="#">Link2</a></li>
						<li><a href="#">Link3</a></li>
						<li><a href="#">Link4</a></li>
					</ul>
				</div>
				<!-- end of col-footer -->
			</div>


			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-12">
				<div class="col-footer footer-contact">
					<h2>Contact Info</h2>
					<p><span><img src="{{ asset('images/mail.png') }}" title="" alt="" /></span><a href="mailto:example@yahoo.com">example@yahoo.com</a></p>
					<p><img src="{{ asset('images/phone.png') }}" title="" alt="" /><a href="tel:+0 320 422 4254">+0 320 422 4254</a></p>
					<p><img src="{{ asset('images/map-pin.png') }}" title="" alt="" /><a href="#">Main Str Chicago Ilinois</a></p>

					<div class="social-sec">
						<a href="#"  title=""><img src="{{ asset('images/facebook.png') }}" title="" alt="" /></a>
						<a href="#"  title=""><img src="{{ asset('images/twitter.png') }}" title="" alt="" /></a>
						<a href="#"  title=""><img src="{{ asset('images/google-plus.png') }}" title="" alt="" /></a>
					</div>
					<!-- end of social-sec -->
				</div>
				<!-- end of col-footer -->
			</div>
		</div>
	</div>
	<div class="copyright text-center">
		<p>Copyright 2021 . All Rights Reserved.</p>
	</div>
	<!-- end of copyright -->
</footer>
<!-- /.content -->


@endsection
@section('script')
<script>
    
</script>
@endsection
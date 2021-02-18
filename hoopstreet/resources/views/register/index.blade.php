<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HoopStreet Investment Platform</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<script type="text/javascript" src="register/js/loader.js"></script>
	<link rel="stylesheet" type="text/css" href="register/css/raleway-font.css">
	<link rel="stylesheet" type="text/css" href="register/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="register/css/site-demos.css">


<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- Main Style Css -->
    <link rel="stylesheet" href="register/css/style.css"/>
    <link rel="stylesheet" href="register/css/nav.css"/>

</head>
<body>
	<nav class="navbar navbar-expand-lg sticky-top navbar-dark justify-content-center" style="background: #E38734">
	  <a class="navbar-brand align-center" href="#">Welcome to HoopStreet Investment Portal</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <!-- <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li> -->
	      
	    </ul>
	    
	</nav>

	<div class="page-content" >
		<div class="wizard-v1-content">
			<div class="wizard-form">
		        <div class="form-register" id="form-register"  >
		        	<div id="form-total">
		        		
		        		<!-- SECTION -1 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-number">Step 1</span>
			            	<span class="step-text">Register</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="name">Email *</label>
										<input type="text" placeholder="Email" value="omer@gmail.com" class="form-control" id="email" name="email" required>
									</div>
								</div>
								
								<div class="form-row ">
									<div class="form-holder form-holder-2">
										<label for="password">Password*</label>
										<input type="password" placeholder="Password" class="form-control" id="password" value="hellos" name="password" required >
									</div>
									
								</div>
								
							</div>
			            </section>
			            <!-- section 0 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-money"></i></span>
			            	<span class="step-number">Step 2</span>
			            	<span class="step-text">Investment Range</span>
			            </h2>
			            <section>
			                <div class="inner">
								
								<p>Please Select the amount you want to invest : </p>
								<small>Min Investment : $500</small><br>
								<small>Slide to Select the Amount</small>
							    
								<div class="range-slider">
								  <input id="investment-range" class="range-slider__range" type="range" value="500" min="500" max="50000000" step="50" >
								  <span class="range-slider__value">0</span>
								</div>
								<small>OR</small><br>
								
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="investment-amount">Enter a Custom Amount *</label>
										<input type="number" placeholder="$500" value="500" class="form-control" id="investment" name="investment" required min="500" max="50000000" step="50">
									</div>
								</div>
								<input type="hidden" id="user_email" name="email" value="omer@gmail.com">



								  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
								      <script id="rendered-js" >
								var rangeSlider = function () {
								  var slider = $('.range-slider'),
								  range = $('.range-slider__range'),
								  value = $('.range-slider__value');
								  var customInvestment = $('#investment');

								  slider.each(function () {

								    value.each(function () {
								      var value = $(this).prev().attr('value');
								      $(this).html("$"+value);

								    });

								    range.on('input', function () {
								      $(this).next(value).html("$"+this.value);
								      customInvestment.attr('value', this.value);
								      customInvestment.val(this.value);
								      $(this).attr('value', this.value);
								    });



								  });

								  customInvestment.on('input', function () {
								  	

								    
								      var valu = customInvestment.attr('value');
								      $('.range-slider__value').html("$"+valu);
								      $('.range-slider__range').attr('value', valu);
								      $("input[type=range]").val(valu);
								      console.log(valu);

								    

								    



								  
								  });
								      

								     
								};

								rangeSlider();
								//# sourceURL=custom.js
								    </script>

  

								





							</div>
			            </section>
		        		<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-number">Step 3</span>
			            	<span class="step-text">Account Infomation</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="name">Name *</label>
										<input type="text" placeholder="name" value="Omer" class="form-control" id="name" name="name" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="email">Postal Address*</label>
										<textarea class="form-control" id="address"  name="address" required>hhh</textarea>
										<!-- <input type="email" placeholder="Your Email" class="form-control" id="email" name="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"> -->
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="name">State *</label>
										<input type="number" placeholder="state" class="form-control" id="state" name="state" value="New York" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="name">Phone Number *</label>
										<input type="number" placeholder="phone" class="form-control" id="phone" name="phone" value="0342342424" required>
									</div>
								</div>
								<div class="form-row ">
									<div class="form-holder form-holder-2">
										<label for="password">Password*</label>
										<input type="password" placeholder="Password" class="form-control" id="password" value="hellos" name="password" required >
									</div>
									
								</div>


								<div class="form-row">
									<div class="form-group">

							    		<label for="happy" >Are you an Accredited Investor? </label>
							    		<br>
							    		<div class="">
											  <input class="" type="radio" value="yes" name="accredation" id="accredited1" >
											  YES
											</div>
											<div class="">
											  <input class="" type="radio" value="no" name="accredation" id="accredited2" checked > NO
											  
											</div>
							    		<div >
							    			

							    				<div id="filess">
							    					<br>
							    					<br>
							    				Verify your Income <input class="btn " type="file" name="income" id="income-file" value="Choose Income Statement">
							    				<br>
							    				Verify Net Worth <input type="file" class="btn "  name="income" id="worth-file" value="Choose Financial Statement">
							    				</div>
							    			</div>
							    		
							    	</div>

        
									
								</div>
							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-number">Step 4</span>
			            	<span class="step-text">Payment Infomation</span>
			            </h2>
			            <section>
			            	<nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Pay by Card</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Bank Payment</a>
                     
                    </div>
                  </nav>
			                <div class="inner">
			                	
								
								
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      <div class="form-row">
									
			                	<br>
			                	
								<form action="#" method="POST" id="payment-form">
									<div class="payment-msg"></div>
								<div class="form-row">
									<div class="form-holder ">
										<label for="card-number">Card Number</label>
										<input type="text" name="card-number" class="card-number" id="card-number" placeholder="ex: 489050625008xxxx" data-stripe="number" value="4242424242424242">
									</div>

									
									<div class="form-holder">
										<label for="cvc">CVC</label>
										<input type="text" name="cvc" class="cvc" id="cvc" placeholder="xxx"
										data-stripe="cvc" value="123">
									</div>
								</div>
								<div class="form-row">
									
									<div class="form-holder">
										<label for="month">Expiry Month</label>
										<select name="month" id="month" data-stripe="exp_month" value="12" >
											<option value="" disabled selected>Expiry Month</option>
											<option value="1">January</option>
											<option value="2">February</option>
											<option value="3">March</option>
											<option value="4">April</option>
											<option value="5">May</option>
											<option value="6">June</option>
											<option value="7">July</option>
											<option value="8">August</option>
											<option value="9">September</option>
											<option value="10">October</option>
											<option value="11">November</option>
											<option selected value="12">December</option>
										</select>
									</div>
									<div class="form-holder">
										<label for="year">Expiry Year</label>
										<select name="year" id="year" data-stripe="exp_year" value="2023" >
											<option value="" disabled selected>Expiry Year</option>
											<option value="2021">2021</option>
											<option value="2022">2022</option>
											<option selected value="2023">2023</option>
											<option value="2024">2024</option>
											<option value="2025">2025</option>
											<option value="2026">2026</option>
										</select>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder ">
										<input id="paynow-btn" style="background: #E38734;color: white" class="btn btn-success" type="submit" class="submit" value="Pay Now">
									</div>

									
									<div class="form-holder">
										<img src="register/images/sstr.jpg" class="img-responsive" style="width: 100%; float:right;height: auto; ">
									</div>

									</div>
								</div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <div class="form-row">
									<div class="form-holder ">
										<p>For Bank Payment</p>
										<p>Bank Name : Hello Bank Limited</p>
										<p>Account Title : Hello Bank Limited</p> 
										<p>Account Number : Hello Bank Limited</p> 
									</div>
								</div>
                    </div>
                
                  </div>
                
               
									

								</form>
							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
			            	<span class="step-number">Step 5</span>
			            	<span class="step-text">Agreement</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	
								<div class="form-row ">
									<h3 style="color:#E38734;">INVESTMENT AGREEMENT</h3>
								<p>
									<strong>THIS INVESTMENT INVOLVES A HIGH DEGREE OF RISK.</strong>
									THIS INVESTMENT IS SUITABLE ONLY FOR PERSONS WHO CAN BEAR THE ECONOMIC RISK
									FOR AN INDEFINITE PERIOD OF TIME AND WHO CAN AFFORD TO LOSE THEIR ENTIRE
									INVESTMENT. FURTHERMORE, INVESTORS MUST UNDERSTAND THAT SUCH INVESTMENT IS
									ILLIQUID AND IS EXPECTED TO CONTINUE TO BE ILLIQUID FOR AN INDEFINITE
									PERIOD OF TIME. NO PUBLIC MARKET EXISTS FOR THE SECURITIES, AND NO PUBLIC
									MARKET IS EXPECTED TO DEVELOP FOLLOWING THIS OFFERING.
								</p>
								<p>
									<strong>
										THE SECURITIES OFFERED HEREBY HAVE NOT BEEN REGISTERED UNDER THE
										SECURITIES ACT OF 1933, AS AMENDED (THE “ACT”), OR ANY STATE SECURITIES
										OR BLUE SKY LAWS AND ARE BEING OFFERED AND SOLD IN RELIANCE ON
										EXEMPTIONS FROM THE REGISTRATION REQUIREMENTS OF THE ACT AND STATE
										SECURITIES OR BLUE SKY LAWS.
									</strong>
									ALTHOUGH AN OFFERING STATEMENT HAS BEEN FILED WITH THE SECURITIES AND
									EXCHANGE COMMISSION (THE “SEC”), THAT OFFERING STATEMENT DOES NOT INCLUDE
									THE SAME INFORMATION THAT WOULD BE INCLUDED IN A REGISTRATION STATEMENT
									UNDER THE ACT. THE SECURITIES HAVE NOT BEEN APPROVED OR DISAPPROVED BY THE
									SEC, ANY STATE SECURITIES COMMISSION OR OTHER REGULATORY AUTHORITY, NOR
									HAVE ANY OF THE FOREGOING AUTHORITIES PASSED UPON THE MERITS OF THIS
									OFFERING OR THE ADEQUACY OR ACCURACY OF THE SUBSCRIPTION AGREEMENT OR ANY
									OTHER MATERIALS OR INFORMATION MADE AVAILABLE TO SUBSCRIBER IN CONNECTION
								WITH THIS OFFERING OVER THE WEBSITE (    <a href="http://www.hoopstreet.com/">WWW.HOOPSTREET.COM</a>) MAINTAINED BY
									HOOP STREET, LLC (THE “WEBSITE”) ANY REPRESENTATION TO THE CONTRARY IS
									UNLAWFUL.
								</p>
								<p>
									<strong>
										INVESTORS WHO ARE NOT “ACCREDITED INVESTORS” (AS THAT TERM IS DEFINED
										IN SECTION 501 OF REGULATION D PROMULGATED UNDER THE ACT) ARE SUBJECT
										TO LIMITATIONS ON THE AMOUNT THEY MAY INVEST, AS SET OUT IN SECTION 4.
									</strong>
									THE COMPANY IS RELYING ON THE REPRESENTATIONS AND WARRANTIES SET FORTH BY
									EACH SUBSCRIBER IN THIS SUBSCRIPTION AGREEMENT AND THE OTHER INFORMATION
									PROVIDED BY SUBSCRIBER IN CONNECTION WITH THIS OFFERING TO DETERMINE THE
									APPLICABILITY TO THIS OFFERING OF EXEMPTIONS FROM THE REGISTRATION
									REQUIREMENTS OF THE ACT.
								</p>
								<p>
									<strong>
										THE OFFERING MATERIALS MAY CONTAIN FORWARD-LOOKING STATEMENTS AND
										INFORMATION RELATING TO, AMONG OTHER THINGS, THE COMPANY, ITS BUSINESS
										PLAN AND STRATEGY, AND ITS INDUSTRY.
									</strong>
									THESE FORWARD-LOOKING STATEMENTS ARE BASED ON THE BELIEFS OF, ASSUMPTIONS
									MADE BY, AND INFORMATION CURRENTLY AVAILABLE TO THE COMPANY’S MANAGEMENT.
									WHEN USED IN THE OFFERING MATERIALS, THE WORDS “ESTIMATE,” “PROJECT,”
									“BELIEVE,” “ANTICIPATE,” “INTEND,” “EXPECT”, AND SIMILAR EXPRESSIONS ARE
									INTENDED TO IDENTIFY FORWARD-LOOKING STATEMENTS, WHICH CONSTITUTE
									FORWARD-LOOKING STATEMENTS. THESE STATEMENTS REFLECT MANAGEMENT’S CURRENT
									VIEWS WITH RESPECT TO FUTURE EVENTS AND ARE SUBJECT TO RISKS AND
									UNCERTAINTIES THAT COULD CAUSE THE COMPANY’S ACTUAL RESULTS TO DIFFER
									MATERIALLY FROM THOSE CONTAINED IN THE FORWARD-LOOKING STATEMENTS.
									INVESTORS ARE CAUTIONED NOT TO PLACE UNDUE RELIANCE ON THESE
									FORWARD-LOOKING STATEMENTS, WHICH SPEAK ONLY AS OF THE DATE ON WHICH THEY
									ARE MADE. THE COMPANY DOES NOT UNDERTAKE ANY OBLIGATION TO REVISE OR UPDATE
									THESE FORWARD-LOOKING STATEMENTS TO REFLECT EVENTS OR CIRCUMSTANCES AFTER
									SUCH DATE OR TO REFLECT THE OCCURRENCE OF UNANTICIPATED EVENTS.
								</p>
								<p>
									<strong>
										THE COMPANY MAY NOT BE OFFERING THE SECURITIES IN EVERY STATE.
									</strong>
									THE OFFERING MATERIALS DO NOT CONSTITUTE AN OFFER OR SOLICITATION IN ANY
									STATE OR JURISDICTION IN WHICH THE SECURITIES ARE NOT BEING OFFERED.
								</p>
								<p>
									<strong>
										THE COMPANY RESERVES THE RIGHT IN ITS SOLE DISCRETION AND FOR ANY
										REASON WHATSOEVER TO MODIFY, AMEND AND/OR WITHDRAW ALL OR A PORTION OF
										THE OFFERING AND/OR ACCEPT OR REJECT IN WHOLE OR IN PART ANY
										PROSPECTIVE INVESTMENT IN THE SECURITIES OR TO ALLOT TO ANY PROSPECTIVE
										INVESTOR LESS THAN THE AMOUNT OF SECURITIES SUCH INVESTOR DESIRES TO
										PURCHASE.
									</strong>
									EXCEPT AS OTHERWISE INDICATED, THE OFFERING MATERIALS SPEAK AS OF THEIR
									DATE. NEITHER THE DELIVERY NOR THE PURCHASE OF THE SECURITIES SHALL, UNDER
									ANY CIRCUMSTANCES, CREATE ANY IMPLICATION THAT THERE HAS BEEN NO CHANGE IN
									THE AFFAIRS OF THE COMPANY SINCE THAT DATE.
								</p>
								<p>
									<strong>Hoop Street Center I Corporation</strong>
								</p>
								<br>
								<p>
									20715 S 184th Place,
								</p>
								<br>
								<p>
									Queen Creek,
								</p>
								<p>
									AZ 85142
								</p>
								<p>
									<strong>1. SUBSCRIPTION </strong>
								</p>
								<p>
									<strong></strong>
								</p>
								<p>
									1.1 The undersigned (“Subscriber”) hereby irrevocably subscribes for and
									agrees to purchase Preferred Stock (the “Securities”), of Hoop Street
									Center I Corporation, an Arizona Corporation (the “Company”), and at a
									purchase price of $50 per share (the Per Security Price”), upon the terms
									and conditions set forth herein. The minimum subscription is $50. The
									Preferred Stock being subscribed for under this Subscription Agreement and
									the Common Stock (“Common Stock”) issuable upon conversion of the Preferred
									Stock are also referred to as the “Securities.” The rights and preferences
									of the Preferred Stock are as set forth in Certificate of Incorporation
									included as Exhibit ___ to the Offering Statement of the Company filed with
									the SEC (the “Offering Statement”).
								</p>
								<p>
									1.2 Subscriber understands that the Securities are being offered pursuant
									to an offering circular dated [____________] (the “Offering Circular”)
									filed with the SEC as part of the Offering Statement. By executing this
									Subscription Agreement, Subscriber acknowledges that Subscriber has
									received this Subscription Agreement, copies of the Offering Circular and
									Offering Statement including exhibits thereto and any other information
									required by the Subscriber to make an investment decision.
								</p>
								<p>
									1.3 The Subscriber’s subscription may be accepted or rejected in whole or
									in part, at any time by the Company at its sole discretion. In addition,
									the Company, at its sole discretion, may allocate to Subscriber-only a
									portion of the number of Securities Subscriber has subscribed for. The
									Company will notify Subscriber whether this subscription is accepted
									(whether in whole or in part) or rejected. If Subscriber’s subscription is
									rejected, Subscriber’s payment (or portion thereof if partially rejected)
									will be returned to Subscriber without interest, and all of Subscriber’s
									obligations hereunder shall terminate.
								</p>
								<p>
									1.4 The aggregate number of Securities sold shall not exceed 1,000,000 (the
									“Maximum Offering”). The Company may accept subscriptions until
									[______________], unless otherwise extended by the Company in its sole
									discretion in accordance with applicable SEC regulations for such other
									period required to sell the Maximum Offering (the “Termination Date”).
								</p>
								<p>
									1.5 In the event of rejection of this subscription in its entirety, or in
									the event the sale of the Securities (or any portion thereof) is not
									consummated for any reason, this Subscription Agreement shall have no force
									or effect, except for Section 5 hereof, which shall remain in force and
									effect.
								</p>
								<p>
									1.6 The terms of this Subscription Agreement shall be binding upon
									Subscriber and its transferees, heirs, successors and assigns
									(collectively, “Transferees”); provided that for any such transfer to be
									deemed effective, the Transferee shall have executed and delivered to the
									Company in advance an instrument in a form acceptable to the Company in its
									sole discretion, pursuant to which the proposed Transferee shall be
									acknowledged, agree, and be bound by the representations and warranties of
									Subscriber, terms of this Subscription Agreement.
								</p>
								<p>
									<strong>2. PURCHASE PROCEDURE</strong>
								</p>
								<p>
									<strong></strong>
								</p>
								<p>
									2.1 <u>Payment</u>. The purchase price for the Securities shall be paid
									simultaneously with the execution and delivery to the Company of the
									signature page of this Subscription Agreement. Subscriber shall deliver a
									signed copy of this Subscription Agreement, along with payment for the
									aggregate purchase price of the Securities by check for available funds
									made payable to “Hoop Street Center I Corporation”, by ACH electronic
									transfer, wire transfer to an account designated by the Company, or by
									debit card or credit card and submit a signed copy of this Subscription
									Agreement electronically through (
									<a href="http://www.hoopstreet.com/investnow">
										www.hoopstreet.com/investnow
									</a>
									).
								</p>
								<p>
									<strong>3. REPRESENTATION AND WARRANTIES OF THE COMPANY </strong>
								</p>
								<p>
									<strong></strong>
								</p>
								<p>
									3.1 The Company represents and warrants to Subscriber that the following
									representations and warranties are true and complete in all material
									respects. For purposes of this Agreement, an individual shall be deemed to
									have “knowledge” of a particular fact or other matter if such an individual
									is actually aware of such fact. The Company will be deemed to have
									“knowledge” of a particular fact or other matter if one of the Company’s
									current officers has, or at any time had, actual knowledge of such fact or
									other matter.
								</p>
								<p>
									(a) <u>Organization and Standing</u>. The Company is a corporation duly
									formed, validly existing and in good standing under the laws of the State
									of Arizona. The Company has all requisite power and authority to own and
									operate its properties and assets, to execute and deliver this Subscription
									Agreement, and any other agreements or instruments required hereunder. The
									Company is duly qualified and is authorized to do business and is in good
									standing as a foreign corporation in all jurisdictions in which the nature
									of its activities and of its properties (both owned and leased) makes such
									qualification necessary, except for those jurisdictions in which failure to
									do so would not have a material adverse effect on the Company or its
									business.
								</p>
								<p>
									(b) <u>Issuance of the Securities</u>. The issuance, sale and delivery of
									the Securities in accordance with this Subscription Agreement has been duly
									authorized by all necessary corporate action on the part of the Company.
									The Securities, when so issued, sold and delivered against payment therefor
									in accordance with the provisions of this Subscription Agreement, will be
									duly and validly issued, fully paid and non-assessable. The Company hereby
									agrees that there shall be reserved for issuance and delivery upon
									conversion of the Preferred Stock such number of Common Stock into which
									such Securities shall then be convertible into.
								</p>
								<p>
									(c) <u>Authority for Agreement</u>. The execution and delivery by the
									Company of this Subscription Agreement and the consummation of the
									transactions contemplated hereby (including the issuance, sale and delivery
									of the Securities) are within the Company’s powers and have been duly
									authorized by all necessary corporate action on the part of the Company.
									Upon full execution hereof, this Subscription Agreement shall constitute a
									valid and binding agreement of the Company, enforceable against the Company
									in accordance with its terms, except (i) as limited by applicable
									bankruptcy, insolvency, reorganization, moratorium, and other laws of
									general application affecting enforcement of creditors’ rights generally,
									(ii) as limited by laws relating to the availability of specific
									performance, injunctive relief, or other equitable remedies and (iii) with
									respect to provisions relating to indemnification and contribution, as
									limited by considerations of public policy and by federal or state
									securities laws.
								</p>
								<p>
									(d) <u>No filings</u>. Assuming the accuracy of the Subscriber’s
									representations and warranties set forth in Section 4 hereof, no order,
									license, consent, authorization or approval of, or exemption by, or action
									by or in respect of, or notice to, or filing or registration with, any
									governmental body, agency or official is required by or with respect to the
									Company in connection with the execution, delivery and performance by the
									Company of this Subscription Agreement except (i) for such filings as may
									be required under Regulation A or under any applicable state securities
									laws, (ii) for such other filings and approvals as have been made or
									obtained, or (iii) where the failure to obtain any such order, license,
									consent, authorization, approval or exemption or give any such notice or
									make any filing or registration would not have a material adverse effect on
									the ability of the Company to perform its obligations hereunder.
								</p>
								<p>
									(e) <u>Capitalization</u>. The authorized and outstanding securities of the
									Company immediately prior to the initial investment in the Securities is as
									set forth “Securities Being Offered” in the Offering Circular. Except as
									set forth in the Offering Circular, there are no outstanding options,
									warrants, rights (including conversion or preemptive rights and rights of
									first refusal), or agreements of any kind (oral or written) for the
									purchase or acquisition from the Company of any of its securities.
								</p>
								<p>
									(f) <u>Proceeds</u>. The Company shall use the proceeds from the issuance
									and sale of the Securities as set forth in “Use of Proceeds to issuer” in
									the Offering Circular.
								</p>
								<p>
									(h) <u>Litigation</u>. Except as set forth in the Offering Circular, there
									is no pending action, suit, proceeding, arbitration, mediation, complaint,
									claim, charge or investigation before any court, arbitrator, mediator or
									governmental body, or to the Company’s knowledge, currently threatened in
									writing (a) against the Company or (b) against any consultant, officer,
									manager, director or key employee of the Company arising out of his or her
									consulting, employment or board relationship with the Company or that could
									otherwise materially impact the Company.
								</p>
								<p>
									<strong>4. REPRESENTATION AND WARRANTIES OF SUBSCRIBER<u></u></strong>
								</p>
								<p>
									4.1 By executing this Subscription Agreement, Subscriber (and, if
									Subscriber is purchasing the Securities subscribed for hereby in a
									fiduciary capacity, the person or persons for whom Subscriber is so
									purchasing) represents and warrants, which representations and warranties
									are true and complete in all material respects as of such Subscriber’s
									respective investment date:
								</p>
								<p>
									(a) <u>Requisite Power and Authority</u>. Such Subscriber has all necessary
									power and authority under all applicable provisions of law to execute and
									deliver this Subscription Agreement, the Operating Agreement and other
									agreements required hereunder and to carry out their provisions. All action
									on Subscriber’s part required for the lawful execution and delivery of this
									Subscription Agreement and other agreements required hereunder have been or
									will be effectively taken prior to the Closing Date. Upon their execution
									and delivery, this Subscription Agreement and other agreements required
									hereunder will be valid and binding obligations of Subscriber, enforceable
									in accordance with their terms, except (i) as limited by applicable
									bankruptcy, insolvency, reorganization, moratorium or other laws of general
									application affecting enforcement of creditors’ rights and (ii) as limited
									by general principles of equity that restrict the availability of equitable
									remedies.
								</p>
								<p>
									(b) <u>Investment Representations</u>. Subscriber understands that the
									Securities have not been registered under the Securities Act of 1933, as
									amended (the “Securities Act”). Subscriber also understands that the
									Securities are being offered and sold pursuant to an exemption from
									registration contained in the Securities Act based in part upon
									Subscriber’s representations contained in this Subscription Agreement.
								</p>
								<p>
									(c) <u>Illiquidity and Continued Economic Risk</u>. Subscriber acknowledges
									and agrees that there is no ready public market for the Securities and that
									there is no guarantee that a market for their resale will ever exist.
									Subscriber must bear the economic risk of this investment indefinitely, and
									the Company has no obligation to list the Securities on any market or take
									any steps (including registration under the Securities Act or the
									Securities Exchange Act of 1934, as amended) with respect to facilitating
									trading or resale of the Securities. Subscriber acknowledges that
									Subscriber is able to bear the economic risk of losing Subscriber’s entire
									investment in the Securities. Subscriber also understands that an
									investment in the Company involves significant risks and has taken full
									cognizance of and understands all of the risk factors relating to the
									purchase of Securities.
								</p>
								<p>
									(d) Accredited Investor Status or Investment Limits. Subscriber represents
									that either:
								</p>
								<p>
									(i) Subscriber is an “accredited investor” within the meaning of Rule 501
									of Regulation D under the Securities Act. Subscriber represents and
									warrants that the information set forth on the signature page hereto
									concerning Subscriber is true and correct; or
								</p>
								<p>
									(ii) The purchase price set out in paragraph (b) of the signature page to
									this Subscription Agreement, together with any other amounts previously
									used to purchase Securities in this offering, does not exceed 10% of the
									greater of the Subscriber’s annual income or net worth.
								</p>
								<p>
									Subscriber represents that to the extent it has any questions with respect
									to its status as an accredited investor or the application of the
									investment limits, it has sought professional advice.
								</p>
								<p>
									(e) <u>Shareholder information</u>. Within five days after receipt of a
									request from the Company, the Subscriber hereby agrees to provide such
									information with respect to its status as a shareholder (or potential
									shareholder) and to execute and deliver such documents as may reasonably be
									necessary to comply with any and all laws and regulations to which the
									Company is or may become subject.
									<strong>
										Subscriber further agrees that in the event it transfers any
										Securities, it will require the Transferee of such Securities to agree
										to provide such information to the Company as a condition of such
										transfer.
									</strong>
								</p>
								<p>
									(f) <u>Company Information</u>. Subscriber understands that the Company is
									subject to all the risks that apply to early-stage companies, whether or
									not those risks are explicitly set out in the Offering Circular. Subscriber
									has had such opportunity as it deems necessary (which opportunity may have
									presented through online chat or commentary functions) to discuss the
									Company’s business, management and financial affairs with managers,
									officers and management of the Company. Subscriber has also had the
									opportunity to ask questions of and receive answers from the Company and
									its management regarding the terms and conditions of this investment.
									Subscriber acknowledges that except as set forth herein, no representations
									or warranties have been made to Subscriber, or to Subscriber’s advisors or
									representative, by the Company or others with respect to the business or
									prospects of the Company or its financial condition.
								</p>
								<p>
									(g) <u>Valuation</u>. The Subscriber acknowledges that the price of the
									Securities was set by the Company on the basis of the Company’s internal
									valuation, and no warranties are made as to value. The Subscriber further
									acknowledges that future offerings of Securities may be made at lower
									valuations, with the result that the Subscriber’s investment will bear a
									lower valuation.
								</p>
								<p>
									(h) <u>No Brokerage Fees</u>. There are no claims for brokerage commission,
									finders’ fees or similar compensation in connection with the transactions
									contemplated by this Subscription Agreement or related documents based on
									any arrangement or agreement binding upon Subscriber
								</p>
								<p>
									(j) <u>Foreign Investors</u>. If Subscriber is not a United States person
									(as defined by Section 7701(a)(30) of the Internal Revenue Code of 1986, as
									amended), Subscriber hereby represents that it has satisfied itself as to
									the full observance of the laws of its jurisdiction in connection with an
									invitation to subscribe for the Securities or any use of this Subscription
									Agreement, including (i) the legal requirements within its jurisdiction for
									the purchase of the Securities, (ii) any foreign exchange restrictions
									applicable to such purchase, (iii) any governmental or other consents that
									may need to be obtained, and (iv) the income tax and other tax
									consequences, if any, that may be relevant to the purchase, holding,
									redemption, sale, or transfer of the Securities. Subscriber’s subscription
									and payment for and continued beneficial ownership of the Securities will
									not violate any applicable securities or other laws of the Subscriber’s
									jurisdiction.
								</p>
								<p>
									<strong>5. SURVIVAL OF REPRESENTATIONS AND INDEMNITY</strong>
								</p>
								<p>
									5.1 The representations, warranties and covenants made by the Subscriber
									herein shall survive the Termination Date of this Agreement. The Subscriber
									agrees to indemnify and hold harmless the Company and its respective
									officers, directors and affiliates, and each other person, if any, who
									controls the Company within the meaning of Section 15 of the Securities Act
									against any and all loss, liability, claim, damage and expense whatsoever
									(including, but not limited to, any and all reasonable attorneys’ fees,
									including attorneys’ fees on appeal) and expenses reasonably incurred in
									investigating, preparing or defending against any false representation or
									warranty or breach of failure by the Subscriber to comply with any covenant
									or agreement made by the Subscriber herein or in any other document
									furnished by the Subscriber to any of the foregoing in connection with this
									transaction.
								</p>
								<p>
									<strong>6. GOVERNING LAW; JURISDICTION</strong>
								</p>
								<p>
									6.1 This Subscription Agreement shall be governed and construed in
									accordance with the laws of the State of Arizona.
								</p>
								<p>
									<strong>7. NOTICES</strong>
								</p>
								<p>
									7.1 Notice, requests, demands and other communications relating to this
									Subscription Agreement and the transactions contemplated herein shall be in
									writing and shall be deemed to have been duly given if and when (a)
									delivered personally, on the date of such delivery; or (b) mailed by
									registered or certified mail, postage prepaid, return receipt requested, in
									the third day after the posting thereof; or (c) emailed, telecopied or
									cabled, on the date of such delivery to the address of the respective
									parties as follows:
								</p>
								<p>
									7.2 If to the Company, to:
								</p>
								<p>
									Hoop Street Center I Corporation
								</p>
								<p>
									Attn: Ernest Hemple
								</p>
								<p>
									20715 S 184th Place,
								</p>
								<p>
									Queen Creek, AZ 85142
								</p>
								<p>
									Copy to:
								</p>
								<p>
									Hoop Street Center I Corporation
								</p>
								<p>
									Attn: Michael Olsen
								</p>
								<p>
									20715 S 184th Place,
								</p>
								<p>
									Queen Creek, AZ 85142
								</p>
								<p>
									7.3 If to a Subscriber, to Subscriber’s address shown on the signature page
									hereto or to any such address as may be specified by written notice from
									time to time by the party entitled to receive such notice.
								</p>
								<p>
									<strong>8. JURY TRIAL </strong>
								</p>
								<p>
									<strong></strong>
								</p>
								<p>
									8.1 Each party hereto hereby expressly waives any right to a trial by jury
									in any action or proceeding to enforce or defend any rights under this
									agreement or any other related document to which it is a party, or under
									any amendment, instrument, document or agreement delivered or which may in
									the future be delivered in connection therewith or arising from any
									relationship existing in connection with this agreement or any related
									transaction, and agrees that any such action or proceedings shall be tired
									before a court and not before a jury.
								</p>
								<p>
									<strong>8. MISCELLANEOUS</strong>
								</p>
								<p>
									8.1 All pronouns and any variations thereof shall be deemed to refer to the
									masculine, feminine, neuter, singular or plural, as the identity of the
									person or persons or entity or entities may require.
								</p>
								<p>
									8.2 This Subscription Agreement is not transferable or assignable by
									Subscriber.
								</p>
								<p>
									8.3 The representations, warranties and agreements contained herein shall
									be deemed to be made by and be binding upon Subscriber and its heirs,
									executors, administrators and successors and shall inure to the benefit of
									the Company and its successors and assigns.
								</p>
								<p>
									8.4 None of the provisions of this Subscription Agreement may be waived,
									changed or terminated orally or otherwise, except as specifically set forth
									herein or except by a writing signed by the Company and Subscriber.
								</p>
								<p>
									8.5 In the event any part of this Subscription Agreement is found to be
									void or unenforceable, the remaining provisions are intended to be
									separable and binding with the same effect as if the void or unenforceable
									part were never the subject of Agreement.
								</p>
								<p>
									8.6 The invalidity, illegality or unenforceability of one or more of the
									provisions of this Subscription Agreement in any jurisdiction shall not
									affect the validity, legality or enforceability of the remainder of this
									Subscription Agreement in such jurisdiction or the validity, legality or
									enforceability of this Subscription Agreement, including any such
									provision, in any other jurisdiction, it being intended that all rights and
									obligations of the parties hereunder shall be enforceable to the fullest
									extent permitted by law.
								</p>
								<p>
									8.7 This Subscription Agreement supersedes all prior discussions and
									agreements between the parties with respect to the subject matter hereof
									and contains the sole and entire Agreement between the parties hereto with
									respect to the subject matter hereof.
								</p>
								<p>
									8.8 The terms and provisions of this Subscription Agreement are intended
									solely for the benefit of each party hereto and their respective successors
									and assigns, and it is not the intention of the parties to confer, and no
									provision hereof shall confer, third-party beneficiary rights upon any
									other person.
								</p>
								<p>
									8.9 The headings used in this Subscription Agreement have been inserted for
									convenience of reference only and do not define or limit the provisions
									hereof.
								</p>
								<p>
									8.10 This Subscription Agreement may be executed in any number of
									counterparts, each of which will be deemed an original, but all of which
									together will constitute one and the same instrument.
								</p>
								<p>
									8.11 If any recapitalization or other transaction affecting the stock of
									the Company is effected, then any new, substituted or additional securities
									or other property which is distributed with respect to the Securities shall
									be immediately subject to this Subscription Agreement, to the same extent
									that the Securities, immediately prior thereto, shall have been covered by
									this Subscription Agreement.
								</p>
								<p>
									8.12 No failure or delay by any party in exercising any right, power or
									privilege under this Subscription Agreement shall operate as a waiver
									thereof nor shall any single or partial exercise thereof preclude any other
									or further exercise thereof or the exercise of any other right, power or
									privilege. The rights and remedies herein provided shall be cumulative and
									not exclusive of any rights or remedies provided by law.
								</p>
								<p>
									<strong>9. CERTIFICATION</strong>
								</p>
								<p>
									<strong>
										9.1 THE SUBSCRIBER CERTIFIES THAT HE/SHE HAS READ THIS ENTIRE
										SUBSCRIPTION AGREEMENT AND THAT EVERY STATEMENT MADE BY THE SUBSCRIBER
										HEREIN IS TRUE AND COMPLETE.
									</strong>
								</p>
								<p>
									<strong></strong>
								</p>
								<br clear="all"/>
								<p align="center">
									<strong><u>SUBSCRIBER SIGNATURE</u></strong>
								</p>
								<p>
									The undersigned, desiring to subscribe for the number of Securities of Hoop
									Street Center I Corporation (the “Company) as is set forth below,
									acknowledges that he/she has received and understands the terms and
									conditions of the Subscription Agreement attached hereto and that he/she
									does hereby agree to all the terms and conditions contained therein.
								</p>
								<p>
									<strong>IN WITNESS WHEREOF,</strong>
									the undersigned has hereby executed this Subscription Agreement as of the
									date set forth below.
								</p>
								<table class="table table-bordered" border="1" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td width="265">
												<p>
													Number of Securities
												</p>
											</td>
											<td width="269">
												<p>
													20
												</p>
											</td>
										</tr>
										<tr>
											<td width="265">
												<p>
												20	x $50.00 Per Share
												</p>
												<p>
													Total Amount of Subscription
												</p>
											</td>
											<td width="269">
												<p>
													$1000
												</p>
											</td>
										</tr>
										<tr>
											<td width="265">
												<p>
													Exact name of Subscriber
												</p>
											</td>
											<td width="269">
												<p>
													OMER
												</p>
											</td>
										</tr>
										<tr>
											<td width="265">
												<p>
													Signature of Subscriber
												</p>
											</td>
											<td width="269">
												<p>
													OMER
												</p>
											</td>
										</tr>
										<tr>
											<td width="265">
												<p>
													Date
												</p>
											</td>
											<td width="269">
												<p>
													01/27/2020
												</p>
											</td>
										</tr>
										<tr>
											<td width="265">
												<p>
													Residence or Mailing Address
												</p>
											</td>
											<td width="269">
												<p>
													KPK,Pakistan
												</p>
											</td>
										</tr>
										<tr>
											<td width="265">
												<p>
													Telephone Numbers
												</p>
											</td>
											<td width="269">
												<p>
													Business: 
												</p>
												<p>
													Home: 
												</p>
												<p>
													Mobile: 03359119460
												</p>
											</td>
										</tr>
										<tr>
											<td width="265">
												<p>
													Social Security or Taxpayer
												</p>
											</td>
											<td width="269">
												<p>
												123-245-6789
												</p>
											</td>
										</tr>
										<tr>
											<td width="265">
												<p>
													Payment Method
												</p>
											</td>
											<td width="269">
												<p>
													<input type="checkbox"> ACH
												</p>
												<p>
												<input type="checkbox"> Check
												</p>
												<p>
												<input type="checkbox" checked> Credit Card
												</p>
												<p>
												<input type="checkbox"> Debit Card
												</p>
												<p>
												<input type="checkbox"> Wire Transfer
												</p>
											</td>
										</tr>
									</tbody>
								</table>
	




							<br>
							<div style="margin-top:35px;">
							
							Are you agreed to these terms and conditions?
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
								<label class="form-check-label" for="exampleRadios1">
									YES
								</label>
								</div>
								<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
								<label class="form-check-label" for="exampleRadios2">
									NO
								</label>
								</div>
							</div>

								</div>

							</div>
			            </section>
			           
		        	</div>
		        </div>
		        <!-- form above -->
			</div>
		</div>
	</div>


	<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title w-100">Payment Successful</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Your payment has been made. Check your email for detials.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
			</div>
		</div>
	</div>
</div>    

<link rel="stylesheet" type="text/css" href="register/css/model.css">
	

	
	<script src="register/js/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script src="register/js/jquery.steps.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script type="text/javascript" src="register/js/stripe.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="register/js/main.js"></script>
	<script src="register/js/payment.js"></script>


</body>
</html>
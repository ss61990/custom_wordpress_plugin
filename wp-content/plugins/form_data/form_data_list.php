<?php
if(isset($_POST['submit'])){
    extract($_POST);
	global $wpdb;
	$date= date("Y-m-d");
	$wpdb->insert('wp_form_data', array(
        'fname' => $userfname,
        'mname' => $useremname,
        'lname' => $userelname,
        'address' => $useradd,
        'unit' => $userbusiness,
        'city' => $usercity,
        'state' => $userestate,
        'zip_code' => $userpincode,
        'dob' => $userdob,
        'phone' => $userphone,
        'email' => $useremail,
        'mode' => $property,
        'created_date' => $date,
    ));
    ?>
    <script type="text/javascript">
        window.location = "https://vermmillion.info/custom-wordpress/thank-you/";
        </script>
    <!--"location = 'form_data_record.php'";-->
<?php    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .submit{background: #20ae20;
		padding: 10px;
		border-radius: 10px;
		color: #fff;
	}
	input[type=checkbox], input[type=radio] {
		box-sizing: border-box;
		padding: 0;
		position: absolute;
		right: 40%;
		top: 10%;
	}
	.property {
		border: 1px solid black;
		padding:10px;
	}

  </style>
</head>
<!--<body class="form-img">-->
<body>
<div class="container">
	<div class="reg-form">
        <div class="row">
            <div class="col-md-12 col-sm-6">
                <div id="msg"></div>
                    <form class="contact_form" action="" id="enq_form" autocomplete="off" method="post">
            		<h2>Sign Up for Your Free Trial</h2>    
            		      <div class="row">      
                            <div class="form-group col-md-4 col-sm-12">
                        		  <label for="useremail">First name:<span class="astric">*</span></label>
                        		  <input type="useremail" class="form-control reg-data" id="userfname" placeholder="Your First Name" name="userfname" required>
                    		</div>      
                            <div class="form-group col-md-4 col-sm-12">
                        		  <label for="useremail">Middle name:<span class="astric">*</span></label>
                        		  <input type="useremail" class="form-control reg-data" id="useremname" placeholder="Your Middle Name" name="useremname" >
                    		</div>      
                            <div class="form-group col-md-4 col-sm-12">
                        		  <label for="useremail">Last name:<span class="astric">*</span></label>
                        		  <input type="useremail" class="form-control reg-data" id="userelname" placeholder="Your Last Name" name="userelname" required>
                    		</div>      
                            <div class="form-group col-md-8 col-sm-12">
                        		  <label for="useremail">Street Address:<span class="astric">*</span></label>
                        		  <input type="useremail" class="form-control reg-data" id="useradd" placeholder="Enter Your Address" name="useradd" required>
                    		</div>
                            <div class="form-group col-md-4 col-sm-12">
                        		  <label for="userbusiness">Unit:<span class="astric">*</span></label>
                        		  <input type="text" class="form-control reg-data" id="userbusiness" placeholder="Your Business Name" name="userbusiness" required>
                		    </div>
                            <div class="form-group col-md-4 col-sm-12">
                        		  <label for="username">City:<span class="astric">*</span></label>
                        		  <input type="text" class="form-control reg-data" id="usercity" placeholder="Enter your City" name="usercity" required>
                			</div>      
                            <div class="form-group col-md-4 col-sm-12">
                        		  <label for="useremail">State:<span class="astric">*</span></label>
                        		  <select class="form-control reg-data" id="userestate" name="userestate" required>
                        		        <option value="Alabama">Alabama</option>
                                        <option value="Alaska">Alaska</option>
                                        <option value="Arizona">Arizona</option>
                                        <option value="Arkansas">Arkansas</option>
                                        <option value="California">California</option>
                                        <option value="Colorado">Colorado</option>
                                        <option value="Connecticut">Connecticut</option>
                                        <option value="Delaware">Delaware</option>
                                        <option value="Florida">Florida</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Idaho">Idaho</option>
                                        <option value="Illinois">Illinois</option>
                                        <option value="Indiana">Indiana</option>
                                        <option value="Iowa">Iowa</option>
                                        <option value="Kansas">Kansas</option>
                                        <option value="Kentucky">Kentucky</option>
                                        <option value="Louisiana">Louisiana</option>
                                        <option value="Maine">Maine</option>
                                        <option value="Maryland">Maryland</option>
                                        <option value="Massachusetts">Massachusetts</option>
                                        <option value="Michigan">Michigan</option>
                                        <option value="Minnesota">Minnesota</option>
                                        <option value="Mississippi">Mississippi</option>
                                        <option value="Missouri">Missouri</option>
                                        <option value="Montana">Montana</option>
                                        <option value="Nebraska">Nebraska</option>
                                        <option value="Nevada">Nevada</option>
                                        <option value="New Hampshire">New Hampshire</option>
                                        <option value="New Jersey">New Jersey</option>
                                        <option value="New Mexico">New Mexico</option>
                                        <option value="New York">New York</option>
                                        <option value="North Carolina">North Carolina</option>
                                        <option value="North Dakota">North Dakota</option>
                                        <option value="Ohio">Ohio</option>
                                        <option value="Oklahoma">Oklahoma</option>
                                        <option value="Oregon">Oregon</option>
                                        <option value="Pennsylvania">Pennsylvania</option>
                                        <option value="Rhode Island">Rhode Island</option>
                                        <option value="South Carolina">South Carolina</option>
                                        <option value="South Dakota">South Dakota</option>
                                        <option value="Tennessee">Tennessee</option>
                                        <option value="Texas">Texas</option>
                                        <option value="Utah">Utah</option>
                                        <option value="Vermont">Vermont</option>
                                        <option value="Virginia">Virginia</option>
                                        <option value="Washington">Washington</option>
                                        <option value="West Virginia">West Virginia</option>
                                        <option value="Wisconsin">Wisconsin</option>
                                        <option value="Wyoming">Wyoming</option>
                        		  </select>
                    		</div>      
                            <div class="form-group col-md-4 col-sm-12">
                        		  <label for="useremail">Zip Code:<span class="astric">*</span></label>
                        		  <input type="useremail" class="form-control reg-data" id="userpincode" placeholder="Enter area Pincode" name="userpincode" required>
                    		</div>      
                            <div class="form-group col-md-12 col-sm-12">
                        		  <label for="useremail">D-O-B:<span class="astric">*</span></label>
                        		  <input type="useremail" class="form-control reg-data" id="userdob" placeholder="Enter Your Email" name="userdob" required>
                    		</div>
                            <div class="form-group col-md-6 col-sm-12">
                        		  <label for="userphone">Phone:<span class="astric">*</span></label>
                        		  <input type="text" class="form-control reg-data" id="userphone" placeholder="Enter Your Number" name="userphone" required>
                    		</div>
                            <div class="form-group col-md-6 col-sm-12">
                        		  <label for="usercity">Email ID:<span class="astric">*</span></label>
                        		  <input type="text" class="form-control reg-data" id="useremail" placeholder="Enter Your City" name="useremail" required>
                    		</div>
                            <div class="form-group col-md-4 col-sm-12">
                        		  <label class="property" for="property">House<p style="width:50%">This may be a single family home, townhouse or duplex you own and live in.</p></label>
                        		  <input type="radio" id="property" name="property" value="House">
                    		</div>
                            <div class="form-group col-md-4 col-sm-12">
                        		  <label class="property" for="property">Condo <p style="width:50%">This is likely  a multi-family building or complex in which you own a unit.</p></label>
                        		  <input type="radio" id="property" name="property" value="Condo">
                    		</div>
                            <div class="form-group col-md-4 col-sm-12">
                        		  <label class="property" for="property">HO5<p style="width:50%">This HO5 is a open penis insurance policy for a single family home or duplex.</p></label>
                        		  <input type="radio" id="property" name="property" value="HO5">
                    		</div>
            		      </div>
            		      
                            <div class="form-group">
                    		        <button class="submit submit-btn-request" type="submit" name="submit" data-complete-text="Well done!">Submit</button>   
                            </div>
            	  </form>            
            </div>      
        </div>
	</div> 
</div>

<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>	

</body>
</html>
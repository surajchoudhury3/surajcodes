<?php
/* 	'*******************************************
	'Created By  : Suraj Choudhury
	'Created On  : Mar 2022
	'*******************************************
*/
$message = "";

if($_POST['txhsubmit'] == "T")
{
 	$vName = trim($_POST['name']);
    $encrypted_mypassword=md5($vName);
	$message = $vName."<br><br>".$encrypted_mypassword;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>ArchVille</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<script>
function Form_Validate()
{

	if(document.form.name.value=='')
	{
		window.alert("Please Enter Name");
		document.form.name.focus();
		return false;
	}

	document.form.txhsubmit.value='T';
	document.form.submit();
	return true;
}

</script>

</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <div id="navarea">
    <section id="ContactContent">
      <div>
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="contact_area" style="background-image:url(images/bg.png);background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center bottom;">
            <h1>Password Code</h1>
			
            <div class="contact_bottom">
              <div class="contact_us wow fadeInRightBig"> 
			              
				<form action="index.php" name="form" class="contact_form" method="post">
				
							<input type="hidden" name="txhsubmit" id="txhsubmit">
							
						   	<input class="form-control" type="text" name="name" id="name" placeholder="Password" required="">
							
								
							<button  type="submit" class="button" style="vertical-align:middle" onClick="return Form_Validate();"><span> Encrypt Password</span></button>
						</form>

						
              </div>
			  <h3 style="color:#006AD5;font-family:Arial, Helvetica, sans-serif;"><?php echo $_GET['message']; echo $message;?></h3>
            </div>
          </div>
        </div>
      </div>
    </section>
	
  </div>
</div>
</body>
</html>
<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">



</head>

<body>



<style>
    body {
    background-color: #eeeeee
}

.green {
    color: rgb(15, 207, 143);
    font-weight: 680
}

@media(max-width:567px) {
    .mobile {
        padding-top: 40px
    }
}
  </style>


	
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>Triton</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        
        <ul>
          <li class="active"><a href="./index.html">Home</a></li>
          <li><a href="./about.html">About</a></li>
          <li><a href="./services.html">Services</a></li>
          <li><a href="./pricing.html">Pricing</a></li>
          <li><a href="./contact.html">Contact</a></li>

          <li class="get-started"><a href="./loginReg.html">Login Or Register</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

<!--main start-->
  

  <section>
     <p>&nbsp;</p>
   </section>

<div class="container rounded bg-white">
    <div class="row d-flex justify-content-center pb-5">
        <div class="col-sm-5 col-md-5 ml-1">
            <div class="py-4 d-flex flex-row">
                <h5><span class="fa fa-check-square-o"></span><b>Triton </b> | </h5><span class="pl-2">Pay</span>
            </div>
            
            <form action="./pgRedirect.php" method="post">
            <h4>Investment Type</h4>
            <select class="form-control">
              <option>Venture Capital</option>
              <option>Angel Investment Capital</option>
              <option>Crowd Fund</option>
              <option>Donate</option>
              
            </select>



			<table border="1" style="display: none;">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>

		
            <p>&nbsp;</p>
            <h4>Investment Amount in &#8377;</h4>
            <input class="form-control" type="text" id="" title="TXN_AMOUNT" tabindex="10" name="TXN_AMOUNT"
			placeholder="1000">
			<input style="display: none;" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
            <p>&nbsp;</p>
            <h4>Equity in %</h4>
            <input class="form-control" type="text" name="EQUITY" placeholder="0.1" >
            <div class="d-flex pt-2">
              <p>&nbsp;</p>
            </div>
            <div class="pt-2">             
              <input value="Proceed to Payment" type="submit"	class="btn btn-primary btn-block" onclick="">
                
            </div>
          </form>
        </div>

    </div>
</div>



		





  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Triton Pvt. Ltd.</strong>. All Rights Reserved
          </div>

          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="./index.html" class="scrollto">Home</a>
            <a href="./about.html" class="scrollto">About</a>
            <a href="./policies.html">Privacy Policy</a>
            <a href="./termsOfUse.html">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="format-detection" content="telephone=no"/>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <title>Contact</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Links -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/mailform.css" rel="stylesheet">
  <link href="css/google-map.css" rel="stylesheet">

  <!--JS-->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.2.1.min.js"></script>


  <!--[if lt IE 9]>
  <div style=' clear: both; text-align:center; position: relative;'>
    <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
      <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
           alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
    </a>
  </div>
  <script src="js/html5shiv.js"></script><![endif]-->


  <script src='js/device.min.js'></script>
</head>
<body>
<div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
 <?php include("header.php");?>

  <!--========================================================
                            CONTENT
  =========================================================-->

  <main>

    <section class="well8 well8--mod  bg-lighter">
      <div class="container">
        <h3 class="text-center">Contact Form</h3>

        <form class='mailform' method="post" action="bat/rd-mailform.php">
          <input type="hidden" name="form-type" value="contact"/>
          <fieldset>
            <label data-add-placeholder=""> <input type="text"
                                                   name="name"
                                                   placeholder="Name"
                                                   data-constraints="@LettersOnly @NotEmpty"/> </label>

            <label data-add-placeholder=""> <input type="text"
                                                   name="email"
                                                   placeholder="E-mail"
                                                   data-constraints="@Email @NotEmpty"/> </label>

            <label data-add-placeholder=""> <input type="text"
                                                   name="phone"
                                                   placeholder="Phone"
                                                   data-constraints="@Phone"/> </label>

            <label data-add-placeholder="" class="textarea">
                                                          <textarea name="message" placeholder="Message"
                                                                    data-constraints="@NotEmpty"></textarea> </label>

            <div class="mfControls text-center">
              <button class="btn btn-sm" type="submit">Send Message</button>
              <!--<button class="btn btn-default" type="reset">Reset</button>-->
            </div>
          </fieldset>
        </form>
      </div>
    </section>

    <section class="bg-lighter">
      <div class="container well6 well6--mod  text-center">
        <h3>Contact Info</h3>
      </div>
      <div class="well--skin bg-white">
        <div class="container">
          <div class="row wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-info fa-map-marker ">
                <address><p>Address</p>



                  <p>Au Milan Development Inc,712 Delestre Ave, Coquitlam, BC, Canada.</p></address>
              </div>

            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-info fa-mobile">
                <p>Phones</p>
                <span>
                                <a href="callto:#">604-398-4988</a>
                                
                          
                                </span>
              </div>

            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-info fa-envelope">
                <p>E-mail</p>
                <span><a href="mailto:#">info@aumilan.com</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="map">
      <div id="google-map" class="map_model" data-zoom="11"></div>
      <ul class="map_locations">
        <li data-x="-73.9874068" data-y="40.643180">
          <p> 9870 St Vincent Place, Glasgow, DC 45 Fr 45. <span>800 2345-6789</span></p>
        </li>
      </ul>
    </div>

  </main>

  <!--========================================================
                          FOOTER
=========================================================-->
 <?php include("footer.php");?>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/core.min.js"></script>
<script src="js/tm-scripts.js"></script>
<!-- </script> -->


</body>
</html>
<?php
session_start();

// Establish connection
$link = mysqli_connect("localhost", "root", "", "jobportal");
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

// Sanitize user input to prevent SQL injection
$email = mysqli_real_escape_string($link, $_POST['email']);

// Query to select user by email
$q = "SELECT * FROM employees WHERE ee_email = '$email'";
$res = mysqli_query($link, $q);

if ($res) {
    // Check if a row is returned
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        
        // Check if the password matches
        if ($_POST['password'] == $row['ee_password']) {
            // Successful login
            $_SESSION = array();
            $_SESSION['email'] = $row['ee_email'];
            $_SESSION['eeid'] = $row['ee_id'];
            $_SESSION['category'] = 'jobseeker';
            $_SESSION['status'] = 1;
            $_SESSION['jobseeker'] = 1;
            
            header("location:jobseeker_home.php");
            exit(); // Make sure to exit after redirection
        } else {
            // Incorrect password
            // echo "Wrong Password";
        }
    } else {
        // No such user
        // echo "No Such User";
    }
} else {
    // Error in query execution
    die("Query failed: " . mysqli_error($link));
}

// Close connection
mysqli_close($link);
// If you want to redirect back to the registration page, uncomment the line below
// header("location:jobseeker_registration.html");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Job</title>
<link rel="stylesheet" type="text/css" href="css/stylejobseeker.css" />
<link rel="stylesheet" type="text/css" href="js/style.js" />
  <link rel="stylesheet" type="text/css" href="lib/jquery.ad-gallery.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="lib/jquery.ad-gallery.js"></script>
  <script type="text/javascript">
  $(function() {
    $('img.image1').data('ad-desc', 'Whoa! This description is set through elm.data("ad-desc") instead of using the longdesc attribute.<br>And it contains <strong>H</strong>ow <strong>T</strong>o <strong>M</strong>eet <strong>L</strong>adies... <em>What?</em> That aint what HTML stands for? Man...');
    $('img.image1').data('ad-title', 'Title through $.data');
    $('img.image4').data('ad-desc', 'This image is wider than the wrapper, so it has been scaled down');
    $('img.image5').data('ad-desc', 'This image is higher than the wrapper, so it has been scaled down');
    var galleries = $('.ad-gallery').adGallery();

    
    $('#switch-effect').change(
      function() {
        galleries[0].settings.effect = $(this).val();
        return false;
      }
    );
    $('#toggle-slideshow').click(
      function() {
        galleries[0].slideshow.toggle();
        return false;
      }
    );
    $('#toggle-description').click(
      function() {
        if(!galleries[0].settings.description_wrapper) {
          galleries[0].settings.description_wrapper = $('#descriptions');
        } else {
          galleries[0].settings.description_wrapper = false;
        }
        return false;
      }
    );
  });
  </script>

  <style type="text/css">
  * {
	font-family: Arial, Helvetica, sans-serif;
	color: #333;
	line-height: normal;
  }
 
  h2 {
    margin-top: 1.2em;
    margin-bottom: 0;
    padding: 0;
    border-bottom: 1px dotted #dedede;
  }
  h3 {
    margin-top: 1.2em;
    margin-bottom: 0;
    padding: 0;
  }
  .example {
    border: 1px solid #CCC;
    background: #f2f2f2;
    padding: 10px;
  }
  ul {
    list-style-image:url(list-style.gif);
  }
  pre {
    font-family: "Lucida Console", "Courier New", Verdana;
    border: 1px solid #CCC;
    background: #f2f2f2;
    padding: 10px;
  }
  code {
    font-family: "Lucida Console", "Courier New", Verdana;
    margin: 0;
    padding: 0;
  }

  #gallery {
	background: #fff;
	padding-top: 0px;
	padding-right: 30px;
	padding-bottom: 0px;
	padding-left: 30px;
	width:1000px; margin:0 auto;
	
  }
  #descriptions {
    position: relative;
    height: 50px;
    background: #EEE;
    margin-top: 10px;
    width: 640px;
    padding: 10px;
    overflow: hidden;
  }
    #descriptions .ad-image-description {
      position: absolute;
    }
      #descriptions .ad-image-description .ad-description-title {
        display: block;
      }
  </style>
  
<style>
input[type=text]{ color:#ccc;}
input[type=text]:focus{ color:#71716f;}
  input.focus {
      border: 1px solid #F00;
    }
</style>
</head>

<body>
<div class="home_header_main">
  <div id="home_header">
    <div class="home_logo"><img src="images/jobs_castle_logo.png" width="180" /></div>
    <div class="home_header_right">
      <div class="home_right_topmenubar">
      <?php
	  include ('includes/top.inc.php');
	  ?>

      
      </div>
      <div class="home_menubar">
      <div class="home_socialmedia_icons">
      <ul>
      <li><a href="#"><img src="images/techno.png"  width="23" /></a></li>
            <li><a href="#"><img src="images/twitter.png" width="23" /></a></li>
            <li><a href="#"><img src="images/fb.png" width="23" /></a></li>
      <li><a href="#"><img src="images/in.png" width="23" /></a></li>
      

      
      </ul>
      </div>
      <div class="home_menubar_manu">
       <?php
	 include ('includes/menu.inc.php');
	 ?>
      </div>
      
      
      
      </div>
    </div>
  </div>
</div>
<div class="clear_both">&nbsp;</div>


<div class="login_banner_main">
<div id="login_banner_duplicat">
<div class="login_incorrect">

Username or Password is incorrect
</div>
<div class="login_div">
<style>
input[type=text]{ color:#ccc;}
input[type=text]:focus{ color:#71716f;}
  input.focus {
      border: 1px solid #F00;
    }
</style>

<form name="jobseeker_login" action="process_jobseeker_login.php" method="post" >

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<span style="color:red";>Wrong username or password...! </span>
  <tr>
    <td height="35" class="login_box">Login</td>
  </tr>
  <tr>
    <td height="auto" style="padding-top:25px;">Email</td>
  </tr>
  <tr>
    <td height="auto" style="padding:0px;">
    <input type="text" value="Enter your email id" class="login_select"
     name="email" id="email" 
    onblur="if(value=='') value = 'Enter your email id'" 
    onfocus="if(value=='Enter your email id') value = ''"
 />    </td>
  </tr>
  <tr>
    <td height="auto" style="padding-top:25px;" >Password</td>
  </tr>
  <tr>
    <td height="auto"><input type="password" value="Password"
  class="login_select"
   name="password" id="email"
    onblur="if(value=='') value = 'Password'" 
    onfocus="if(value=='Password') value = ''"/></td>
  </tr>
  <tr>
    <td height="71"    ><input type="submit" value="Login" class="login_submit" /></td>
  </tr>
  <tr>
    <td height="50"><a href="#">Forgot Password</a> / <a href="#">Register Now</a></td>
  </tr>
</table>
</div>
</div>
</div>

<div id="container">
    


    <div id="gallery" class="ad-gallery">
      
      
      <div class="ad-nav">
        <div class="ad-thumbs">
          <ul class="ad-thumb-list">
            <li>
              <a href="#">
                <img src="images/thumbs/t1.png" class="image0">
              </a>
            </li>
           
           
           
           
           
            <li>
              <a href="#" id="t2">
                <img src="images/thumbs/t2.jpeg" title="A title for 2.jpg" alt="This is a nice, and incredibly descriptive, description of the image 2.jpg" class="image6">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="images/thumbs/t3.png" title="A title for 3.jpg" alt="This is a nice, and incredibly descriptive, description of the image 3.jpg" class="image7">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="images/thumbs/t4.png" title="A title for 4.jpg" alt="This is a nice, and incredibly descriptive, description of the image 4.jpg" class="image8">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="images/thumbs/t5.png" title="A title for 5.jpg" alt="This is a nice, and incredibly descriptive, description of the image 5.jpg" class="image9">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="images/thumbs/t6.jpeg" title="A title for 6.jpg" alt="This is a nice, and incredibly descriptive, description of the image 6.jpg" class="image10">
              </a>
            </li>
           <li>
              <a href="#">
                <img src="images/thumbs/t7.jpg" title="A title for 7.jpg" alt="This is a nice, and incredibly descriptive, description of the image 7.jpg" class="image11">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="images/thumbs/t8.png" title="A title for 8.jpg" alt="This is a nice, and incredibly descriptive, description of the image 8.jpg" class="image12">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="images/thumbs/t9.jpg" title="A title for" alt="This is a nice, and incredibly descriptive, description of the image 9.jpg" class="image13">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
</div>


<div class="clear_both">&nbsp;</div>


<div id="home_footer_main">
  <div id="home_footer">
    <div id="home_footer_slice_one"> <a href="#"><img src="images/jobs_castle_logo.png" width="100"  border="none"/></a> </div>
    <div id="home_footer_slice_two"> <span class="home_foote_span">Jkuat Career site Links </span><br />
      <?php
	 include ('includes/footer.inc.php');
	 ?>
    <div id="home_footer_slice_five"> <span class="home_foote_span_second"><i>Call Us Now!!</i></span><br />
      <br />
      <span class="speech_number">0777777777 or 0711111111</span> </div>
  </div>
</div>
</body>
</html>

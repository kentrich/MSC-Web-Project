<?php session_start();

if(isset($_SESSION['employer']))
	{	

DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD','');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'jobportal');

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());  }

 
    $q = "select * from employers where er_id = '".$_SESSION['erid']."'";
	$res = mysqli_query($dbc,$q) or die("wrong query");
	$row = mysqli_fetch_assoc($res);
	
	
	if(!empty($row))
	{
		//if($_POST['password']==$row['er_password'])
		//{
		//	//login
		//	$_SESSION = array();
	    //	$_SESSION['email']=$row['er_companyemail'];
		//	$_SESSION['erid']=$row['er_id'];
		//	$_SESSION['category']='employer';
		//	$_SESSION['status']=1;
		//	$_SESSION['employer']=1;
		//	header("location:employer_home.php");
		//}
		$name="Welcome"." ".$row['er_title']."."." ".$row['er_fname']." ".$row['er_lname'];
	//	echo $name;
		}
	
	}
	else
	{	
	$name="Welcome To Jkuat Career site";
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link rel="icon" href="images/employer.png" type="image/x-icon">
    <link rel="shortcut icon" href="images/employer.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    
    
    
<title>Employer Home</title>
<link rel="stylesheet" type="text/css" href="css/style-employer.css" />


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
  
</head>
<style>
input[type=text]{
	color:#f2eeee;
}
input[type=text]:focus{ color:#fff;}
  input.focus {
      border: 1px solid #F00;
    }
</style>
<style>
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
	padding-top: 0px;
	padding-right: 30px;
	padding-bottom: 0px;
	padding-left: 30px;
	width:425px;
	margin-top: 0;
	margin-right: auto;
	margin-bottom: 0;
	margin-left: auto;
  }
  #descriptions {
    position: relative;
    height: 50px;
    background: #EEE;
    margin-top: 10px;
    width: 470px;
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
  
  
  
  

<body>

<div class="home_header_main">
  <div id="home_header">
    <div class="home_logo"><img src="images/jobs_castle_logo.png" width="180" /></div>
    <div class="home_header_right">
      <div class="home_right_topmenubar">
      <?php
	include ('includes/ee_top.inc.php');
	?>
      
      </div>
      <div class="home_menubar">
      <div class="home_socialmedia_icons">
      <ul>
      
      

      
      </ul>
      </div>
      
      <div class="home_menubar_manu">
      <?php
	include ('includes/index.inc.php');
	?>
      </div>
      
      
      </div>
    </div>
  </div>
</div>
<div id="employee_login_banner_main">
  <div class="employee_login_banner">
<div style="width:300px; height:50px; float:left; margin:180px 0 0 0; color:#b5b2b2; font-family:'Lucida Handwriting'; letter-spacing:1px; font-size:20px;">

<?php
echo $name;
?>


</div>





  <div class="em_banner_right_div">
  <div class="em_ban_right_one">
<a href="employer_clients.php"><img src="images/view-our.png" border="none" onmouseover="this.src='images/view-our-mouse.png'" onmouseout="this.src='images/view-our.png'" /></a>
</div>
<div class="em_ban_right_two">
<a href="jobseeker_login.php"><img src="images/submit-resume.png" style="float:left;" border="none" /></a>
<a href="employer_login.php"><img src="images/submit-job.png" style="float:right;" border="none" /></a>
</div>
</div>

</div>

</div>

<div id="home_navigator"></div>
<div id="home_footer_main">
  <div id="home_footer">
    <div id="home_footer_slice_one"> <a href="#"><img src="images/jobs_castle_logo.png" width="100"  border="none"/></a> </div>
    <div id="home_footer_slice_two"> <span class="home_foote_span">Jkuat Career site Links </span><br />
      <?php
	include ('includes/ee_footer.inc.php');
	?>
    <div id="home_footer_slice_five"> <span class="home_foote_span_second"><i>Call Us Now!!</i></span><br />
      <br />
      <span class="speech_number">0777777777 or 0711111111</span> </div>
  </div>
</div></body>
</html>

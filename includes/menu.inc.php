

<?php 
if((!isset($_SESSION['jobseeker']) ) )
    {  
	echo '
	<ul>
      <li style="color:#5393b5;"><a href="index.php">Home</a></li>
      <li><a href=" jobseeker_home.php">Jobs</a></li>
	  <li><a href="jobseeker_advanced_search.php">Search-Jobs</a></li>
      <li><a href="jobseeker_registration.php"> Register</a></li>
      <li><a href="jobseeker_login.php">Login</a></li>
      <li><a href="contact.php">Contact us</a></li>
	 
      </ul>
	';
	}
?>



<?php
if(isset($_SESSION['jobseeker']))
	{
	echo '
	<!-- Sider Bar Contents Here-->
	<ul>
	<li><a href="jobseeker_home.php">Jobseeker Home</a><span class="menu_span">I</span></li>
    <li><a href="jobseeker_advanced_search.php">Search</a><span class="menu_span">I</span></li>
    <li><a href="jobseeker_home.php">Latest Jobs</a><span class="menu_span">I</span></li>
    <li><a href="jobseeker_profile.php">Update Resume</a><span class="menu_span">I</span></li>
  
	</ul>
	';	
	}
?>



	


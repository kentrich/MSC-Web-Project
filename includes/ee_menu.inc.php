

<?php 
if((!isset($_SESSION['employer'])) )
    {  
	echo '
	<ul>
      <li style="color:#5393b5;"><a href="index.php">Home</a></li>
      <li><a href="employer_packages.php">Packages</a></li>
      <li><a href="employer_clients.php">Clients</a></li>
      
      <li><a href="employer_registration.php">Register</a></li>
      <li><a href="employer_login.php">Employer Login</a></li>
      
      </ul>
	';
	}
?>


<?php 
if(isset($_SESSION['employer']))
	{
	echo '
	<!-- Sider Bar Contents Here-->
	<ul>
      
	   <li><a href="employer_add_job.php">Add New Job</a></li>
	   <li><a href="download_resume.php">Download</a></li>
	  <li><a href="employer_packages.php">Packages</a></li>
      <li><a href="employer_clients.php">Clients</a></li>
      
     
	  
      </ul>
	';	
    }
?>	
	

	


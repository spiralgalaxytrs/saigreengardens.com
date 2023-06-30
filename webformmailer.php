<?php


				$to ="info@saigreengardens.com";
			 
if(isset( $_POST['name']))
  $name = $_POST['name'];

if(isset( $_POST['email']))
  $email = $_POST['email'];

if(isset( $_POST['message']))
  $message = $_POST['message'];

if(isset( $_POST['subject']))
  $subject = $_POST['subject'];

if(isset( $_POST['mobile']))
  $mobile= $_POST['mobile'];



$message ="<table cellspacing=\"0\" width=\"650\" border=1>
				<tr><td  colspan=\"2\">  Hi  Sundar, You have enquiry</td></tr>
				<tr><td  colspan=\"2\">  &nbsp;                      </td></tr>

				<tr><td  width=\"150\">  Name</td><td>".$name."</td></tr>
				<tr><td > E-mail</td>   <td>".$email."</td></tr>	
                                <tr><td>Mobile</td>     <td>".$mobile."</td></tr>   
				<tr><td>Subject</td>    <td>".$subject."</td></tr>  
				<tr><td>Message</td>    <td>".$message."</td></tr> 
				<tr><td  colspan=\"2\">&nbsp;</td></tr> 
				<tr><td  colspan=\"2\">Thanks & Regards,</td></tr>
                                <tr><td  colspan=\"2\">".$name."</td></tr>
				</table>"; 


				$headers = "Content-type: text/html; charset=iso-8859-1" . "\r\n";
				
				$from = $name;
				$headers .= "From: $from";


				mail($to,$subject,$message,$headers);
				
				print "<script>alert('Thank you for your Enquiry. We will get back to you soon.');";
				print "self.location='index.html'";
				print "</script>";
				exit();					

?>
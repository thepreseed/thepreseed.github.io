<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"><html><head><link rel="shortcut icon" href="//ssl.gstatic.com/docs/spreadsheets/forms/favicon_jfk2.png" type="image/x-icon">
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<title>Preseed Web Lab</title>

<link href='bootstrap/css/bootstrap.css' type='text/css' rel='stylesheet'>

 <script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'clean'
 };
 </script>
 
</head>



<body class="ss-base-body" dir="ltr" itemscope itemtype="http://schema.org/CreativeWork/FormObject"><meta itemprop="name" content="Preseed Web Lab">
<div class="row-fluid">
<div class="span2"></div>
<div class="span8" align="center">

<meta itemprop="embedUrl" content="https://docs.google.com/spreadsheet/embeddedform?formkey=dFlvUlZwOWxFVlJ1cjJibjNIOXI2ZVE6MQ">
<meta itemprop="faviconUrl" content="//ssl.gstatic.com/docs/spreadsheets/forms/favicon_jfk2.png">

<div class="ss-form-container">
<div class="ss-form-heading"><h1 class="ss-form-title">Preseed Web Lab</h1>
<p></p>


<hr class="ss-email-break" style="display:none;">
<div class="ss-required-asterisk">* Required</div></div>
<div class="ss-form"><script type="text/javascript">var submitted_yulgpbke=false;function checkRequiredFields_yulgpbke(requiredFields)
{
	var errorMessage='Required field left blank.';
	
	for(var x in requiredFields)
	{
		var fieldNum=requiredFields[x];
		
		if(document.getElementById('entry_'+fieldNum))
		{
			if(!document.getElementById('entry_'+fieldNum).value.length)
			{
				alert(errorMessage);
				
				document.getElementById('entry_'+fieldNum).focus();
				
				return false;
			}
		}
		else if(document.getElementById('group_'+fieldNum+'_1'))
		{
			var counter=1;
			
			var selected=false;
			
			while(document.getElementById('group_'+fieldNum+'_'+counter))
			{
				if(document.getElementById('group_'+fieldNum+'_'+counter).checked)
				{
					selected=true;
				}
				
				counter++;
			}
			
			if(document.getElementById('other_option:'+fieldNum))
			{
				if(document.getElementById('other_option:'+fieldNum).checked)
				{
					selected=true;
					
					if(!document.getElementsByName('entry.'+fieldNum+'.group.other_option_').item(0).value.length)
					{
						alert(errorMessage);
						
						document.getElementsByName('entry.'+fieldNum+'.group.other_option_').item(0).focus();
						
						return false;
					}
				}
			}
			
			if(!selected)
			{
				alert(errorMessage);
				
				document.getElementById('group_'+fieldNum+'_1').focus();
				
				return false;
			}
		}
	}
	
	return true;
}</script><iframe name="hidden_iframe_yulgpbke" id="hidden_iframe_yulgpbke" style="display:none;" onload="if(submitted_yulgpbke){window.location='http://preseed.in/apply/success.html';}"></iframe><form action="https://docs.google.com/spreadsheet/formResponse?formkey=dFlvUlZwOWxFVlJ1cjJibjNIOXI2ZVE6MQ&amp;ifq" method="post" target="hidden_iframe_yulgpbke" onsubmit="if(checkRequiredFields_yulgpbke([0,1])){submitted_yulgpbke=true;}else{return false;}" id="ss-form">


<br>
<div class="errorbox-good">
<div class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_0">Why Us
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_0"></label>
<input type="text" name="entry.0.single" value="" class="ss-q-short" id="entry_0"></div></div></div>
<br> <div class="errorbox-good">
<div class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_1">Portfolio
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_1"></label>
<input type="text" name="entry.1.single" value="" class="ss-q-short" id="entry_1"></div></div></div>
<br> <div class="errorbox-good">
<div class="ss-item  ss-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_5">email
</label>
<label class="ss-q-help" for="entry_5"></label>
<input type="text" name="entry.5.single" value="" class="ss-q-short" id="entry_5"></div></div></div>

   <?php
          require_once('recaptchalib.php');
          $publickey = "6LdFOtsSAAAAAEDfyFrYYh1ga9PiunfRA-ZfwR_Y"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>
        
<br>
<input type="hidden" name="pageNumber" value="0">
<input type="hidden" name="backupCache" value="">



        
<div class="ss-item ss-navigate"><div class="ss-form-entry">
<input type="submit" class="btn btn-success" name="submit" value="Submit"></div></div></form>



        
<script type="text/javascript">
      
      
      
      (function() {
var divs = document.getElementById('ss-form').
getElementsByTagName('div');
var numDivs = divs.length;
for (var j = 0; j < numDivs; j++) {
if (divs[j].className == 'errorbox-bad') {
divs[j].lastChild.firstChild.lastChild.focus();
return;
}
}
for (var i = 0; i < numDivs; i++) {
var div = divs[i];
if (div.className == 'ss-form-entry' &&
div.firstChild &&
div.firstChild.className == 'ss-q-title') {
div.lastChild.focus();
return;
}
}
})();
      </script></div>

</div>

</div>
<div class="span2"></div>
</div>
</body></html>
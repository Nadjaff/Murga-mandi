<?php
  echo 'hi';exit();            
                    
         $mobile=$_POST['mobile'];
           
         $sms=urlencode($_POST['message']); 

   file(("http://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=FgZ6ExuZNk67JDD6OERASA&senderid=TESTIN&channel=2&DCS=0&flashsms=0&number=".$mobile."&text=".$sms."&route=13"));
        


?>

<!--<html>
<body>
<form action="" method="post">
<table>
<tr>
<th>Phone No</th>
<td><input type="text" name="mobile" ></td>
<th>Message</th>
<td><textarea name="message"></textarea></td>
</tr>
<tr>
<input type="submit" name="send" value="Send" >
</tr>
</table>
</form>
</body>
</html>-->
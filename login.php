<?php

include("header.php");

?>

<center>
<p><b>Login</b></p>

<form action="login.php" method="post">
<table border="0" cellpadding="3" cellspacing="0">
<tr><td align="right"><b>Username: </b></td><td align="left"><input type="text" name="username" value=""></td</tr>
<tr><td align="right"><b>Password: </b></td><td align="left"><input type="password" name="password" value=""></td</tr>
<tr><td>&nbsp;</td><td align="center"><input type="submit" value="Login"></td></tr>
</table>
</form>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</center>

<?php
include("footer.php");
exit;
?>
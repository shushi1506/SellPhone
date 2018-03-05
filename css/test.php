<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php $c=$_POST['textfield'];
echo $c; ?>
<form id="form1" name="form1" method="post" action="form1">
  <label for="textfield">s</label>
  <input type="text" name="textfield" id="textfield" required="required" maxlength="50" minlength="6" />
  <input type="submit" name="button" id="button" value="Submit" />
</form>
</body>
</html>
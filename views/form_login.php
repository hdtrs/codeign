<!DOCTYPE html> 
<html>

<head>

<title>Ielogošanās</title>

<style>

body

{

font-family:Calibri;

margin:50px;

}

#form-login{

margin:auto;

width:500px;

padding:10px;

border:1px #ccc solid;

font-size:18px;

font-weight:bold;

color:#FF6600;

}

.inputan

{

padding:3px;

font-family:Calibri;

border:1px solid #ccc;

}

.tombol

{

padding:5px;

background:#FF6600;

color:#FFF;

font-weight:bold;

font-family:Calibri;

font-size:15px;

border:#eee 1px solid;

}

.error

{

color:#FF6600;

font-size:11px;

}

</style>

</head>

<body>

<form action="<?php echo base_url();?>index.php/login/login_form" method="post" name="login">

<div id="form-login">

Esiet sveicināts Ārstu/pacientu sistēmā. Lūdzu ielogojies!

<br><br>

<table border="0" cellpadding="4">

<tr>

<td>Lietotājvārds</td>

<td>:</td>

<td><input type="text" size="40" name="username" value="<?php echo set_value('username');?>" class="inputan"> <?php echo form_error('username');?></td>

</tr>

<tr>

<td>Parole</td>

<td>:</td>

<td><input type="password" size="40" name="password" value="<?php echo set_value('password');?>"> <?php echo form_error('password');?></td>

</tr>

<tr>

<td>Loma</td>

<td>:</td>

<td><select name="level" class="inputan">

<option value="1">Ārsts</option>

<option value="2">Pacients</option>

<option value="3">Admins</option>

</select></td>

</tr>

<tr>

<td>&nbsp;</td>

<td>&nbsp;</td>

<td><input type="submit" name="login" value="Ielogoties"> </td>

</tr>

</table>

</div>

</form>


</body>

</html>

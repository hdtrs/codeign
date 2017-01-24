<!DOCTYPE html>
<html>

<head>

<title>Parvaldiba</title>

<style>

body

{

font-family:Calibri;

}

</style>

</head>

<body>

<?php

if($level == "3")

{

?>

<h2>Sveiki,<?php echo $user->name;?>, Tu esi ielogojies kā Administrators <?php echo anchor('login/logout', 'Izlogoties');
echo "<br>";
echo anchor('home/arsts','Doties uz profilu');
?>
</h2>

<?php

}else

{

?>

<h2>Hi <?php echo $user->name;?>, Welcome to Login you as a Operator <?php echo anchor('login/logout', 'Logout');?></h2>

<?php

}

?></body>

</html>

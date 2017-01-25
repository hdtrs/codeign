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
echo anchor('home/arsts','Pievienot ārstus');
?>
</h2>

<?php

}else

{

?>

<h2>Sveiki, <?php echo $user->name;?>,Tu esi ielogojies kā Ārsts <?php echo anchor('login/logout', 'Izlogoties');?></h2>

<?php

}

?></body>

</html>

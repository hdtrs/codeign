<!DOCTYPE html>
<?php $level= $this->session->userdata('level');
    if ($level ==3)
    { ?>
<html>
<head>
<title>Lietotāja dzēšana</title> 
</head>
<body>
<div>
<div>
<h1>Dzēšana</h1>
<div>
<p>Izvēlieties lietotāju!</p>
<!--====== atrasto lietotaaju saraksts ========-->
<ol>
<?php foreach ($users as $user): ?>
<li><a href="<?php echo base_url() . "Delete/show_user_id/" . $user->id; ?>"><?php echo $user->name;echo " "; echo $user->Uzvards; ?></a>
</li><?php endforeach; ?>
</ol>
</div>
<div>
<!--   Detaļas-->
<?php foreach ($single_user as $user): ?>
<p>Lietotāja detaļas</p>
<?php echo "Vārds: ";echo $user->name;echo " "; ?> 
<?php echo $user->Uzvards; ?> <br>
<?php echo "Amats: " ; echo $user->Amats; ?> <br>
<?php echo "Lietotājvārds: " ;echo $user->username; ?> <br>
<!--   Dzēšana -->
<a href="<?php echo base_url() . "Delete/delete_user_id/" . $user->id; ?>">
<button>Dzēst</button></a>
<?php endforeach; ?>
</div>
</div>
</div>
    <?php echo anchor('home','Argriezties sākuma lapā'); ?>
</body>
</html>

    <?php }else
        echo "TEV NAV TIESĪBAS DZĒST LIETOTĀJUS!";
    ?>

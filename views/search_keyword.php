<?php
$level= $this->session->userdata('level');
    if ($level ==1)
    { ?>
Ievadi Lietotājvārdu, kuru vēlies atrast!

<form action="<?php echo site_url('search/search_keyword');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Meklēt" />
</form>

    <?php } else echo "TEV NAV TIESĪBU MEKLĒT LIETOTĀJUS, KAUT GAN ESI ADMINISTRATORS!<br> SKAN DĪVAINI, BET TĀ TAS IR!"  ?>
<!DOCTYPE HTML>
<?php
$level= $this->session->userdata('level');
    if ($level ==3)
    {
     ?>
            <html>
                <head>
                    <title> Ārsta pievienošana</title>
                </head>


            <?= form_open(base_url()."Pievarsts") ?>
            <table>
                <tr><td>
                        Vārds<td><?= form_input(array ("name"=>"name","value"=>set_value("name")))?>
                        <td><?= form_error("name") ?>
                </tr>

                 <tr><td>
                        Uzvārds<td><?= form_input(array ("name"=>"Uzvards","value"=>set_value("Uzvards")))?>
                        <td><?= form_error("Uzvards") ?>
                </tr>

             <tr><td>
                        Amats<td><?= form_input(array ("name"=>"Amats","value"=>set_value("Amats")))?>
                        <td><?= form_error("Amats") ?>
                </tr>

             <tr><td>
                        Lietotājvārds<td><?= form_input(array ("name"=>"username","value"=>set_value("username")))?>
                        <td><?= form_error("username") ?>
                </tr>

             <tr><td>
                        Parole<td><?= form_password(array ("name"=>"password"))?>
                        <td><?= form_error("password") ?>
                </tr>

                 <tr><td>
                        Paroles Apstiprināšana <td><?= form_password(array ("name"=>"pass_conf"))?>
                        <td><?= form_error("pass_conf") ?>
                </tr>




                    <tr><td>
                            <?=form_submit(array("name"=>"submit","value"=>"Reģistrēt")) ?>
                            <td>    

                </html>

                <?php form_close() ?>

<?php 
    }else{
    echo "PIEVIENOT ĀRSTUS VAR TIKAI ADMINISTRATORS!<br> TEV NAV ŠĀDU TIESĪBU!";    
    }
?>

    
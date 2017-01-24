<!DOCTYPE HTML>
<html>
    <head>
        <title> Ārsta pievienošana</title>
    </head>
    
    
<?= form_open(base_url()."Pievarsts") ?>
<table>
    <tr><td>
            Vārds<td><?= form_input(array ("name"=>"Vards","value"=>set_value("Vards")))?>
            <td><?= form_error("Vards") ?>
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
            Lietotājvārds<td><?= form_input(array ("name"=>"Lietotajvards","value"=>set_value("Lietotajvards")))?>
            <td><?= form_error("Lietotajvards") ?>
    </tr>

 <tr><td>
            Parole<td><?= form_password(array ("name"=>"Parole"))?>
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

<?php foreach($results as $row){ ?>
        <?php echo "Lietotājvārds:  " ;echo $row->username?> <br>
        <?php echo "Vārds:  " ;echo $row->name?> <br>
        <?php echo "Uzvārds:  " ; ;echo $row->Uzvards?><br> 
    <?php echo "Amats:  " ; echo $row->Amats?> <br>
      
    
<?php } ?>

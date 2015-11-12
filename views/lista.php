<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" 
        href="<?php echo base_url(); ?>static/css/teste.css" />
    </head>
    <body>
        <?php 
            foreach($usuarios as $u){
			    echo "<h1>" . $u->nome . "</h1>";
		    }
		    echo $outravar;
        ?>
    </body>
</html>
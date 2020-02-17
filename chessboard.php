<html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
 
    <?php

    echo '<table border="4px"  cellspacing="0px" cellpadding="0px">';

    for($row=0; $row < 8; $row++){
        echo "<tr>";
        for($col=0; $col < 8; $col++){
            if($row % 2 == 0){
                if($col % 2 == 0){
                    echo '<td><img src="images/black.jpg" height="50" width="50">';
                } else {
                   echo '<td><img src="images/white.jpg" height="50" width="50">'; 
                }
            } else {
               if($col % 2 == 0){
                    echo '<td><img src="images/white.jpg" height="50" width="50">';
                } else {
                   echo '<td><img src="images/black.jpg" height="50" width="50">'; 
                } 
            }
        }
        echo "</tr>";
    }
    
    echo "<table>"

    ?>

  </body>
  </html>
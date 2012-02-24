<?php

if (isset($_POST['next']))
{
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=top10.php">';    
    exit; 
} 
else if (isset($_POST['previous'])) {
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=jobslist.php">';    
    exit;
}

?>
<?php

if (isset($_POST['skipstep']))
{
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=top10.php">';    
    exit; 
} 
else if (isset($_POST['previous'])) {
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=signup.php">';    
    exit;
}
else if (isset($_POST['next'])) {
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=criteria.php">';    
    exit;
}
else if (isset($_POST['add'])) {
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=criteria.php">';    
    exit;
}

?>
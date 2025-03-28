<?php
    echo "Hola, git en PHP"
?>

<?php 
$output = shell_exec("git status 2>&1"); 
echo "<pre>$output</pre>"; 
?> 

<?php 
$output = shell_exec("git pull origin main 2>&1"); 
echo "<pre>$output</pre>"; 
?> 
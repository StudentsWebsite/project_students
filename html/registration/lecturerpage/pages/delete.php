<?php

//Define the query
$query5 = "DELETE FROM users WHERE id={$_POST['id']} LIMIT 1";

//sends the query to delete the entry
mysql_query ($query5);

} 
?>
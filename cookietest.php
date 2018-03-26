<?php
/*echo "My Cookie Value = " . $_COOKIE['broadway_cookie'];
die;*/

echo '<pre>';
// prints all the active (not expired) cookies set for the current domain and path
print_r($_COOKIE);
die;

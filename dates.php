<?php
// set default timezone for the date
date_default_timezone_set('Asia/Kathmandu');

// strtotime() function
// converts english textual dates to timestamps
echo date('Y-m-d', strtotime("tomorrow")); // displays the tomorrow's date

// date function's second parameter is timestamp
// default timestamp is current time with time() function
echo date('Y-m-d H:i:s', time());
die;

// time function
// time function returns current timestamp
// timestamp is number of seconds elapsed from 1970-01-01, linux epoch (an special event)
// PHP's date function works upon timestamps
echo time();// returns current time stamps i.e. 1521975179 for 25th March, 2018 16:38
die;

// show dates in different formats
echo date('dS F, Y');
die;

// current date and time
echo date('y-m-d H:i:s D');
die;
// current time

echo date('H:i:s');
die;

// print current date
echo date('d/m/Y');
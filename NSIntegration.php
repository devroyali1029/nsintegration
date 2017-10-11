<?php
	header('Content-Type: text/html');

	$arg_list = func_get_args();
echo "Arg List" . $arg_list;
    for ($i = 0; $i < $numargs; $i++) {
        echo "Argument $i is: " . $arg_list[$i] . "\n";
    }
?>

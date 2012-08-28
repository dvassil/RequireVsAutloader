<?php
$start = microtime();

for ($x = 0; $x < 100000; $x++) {
	require_once 'class1.php';
	require_once 'class2.php';
	require_once 'class3.php';

	$class1 = new Class1();
	$class2 = new Class2();
	$class3 = new Class3();
}

$end = microtime();
?>
<hr/>
Execution Time: <?php echo ($end - $start) ;?> seconds.
<?php
$start = microtime();

spl_autoload_register('autoload');

for ($x = 0; $x < 100000; $x++) {
	$class1 = new Class1();
	$class2 = new Class2();
	$class3 = new Class3();
}

$end = microtime();
?>
<hr/>
Execution Time: <?php echo ($end - $start) ;?> seconds.

<?php	
	/**
	 * Loads a class.
	 * @param string $className The name of the class to load.
	 */
	function autoload($className) {
		require_once strtolower($className) . '.php';
	}
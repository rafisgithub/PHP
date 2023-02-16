<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$task = $_POST['task'];
	if (!empty($task)) {
		$file = fopen('tasks.txt', 'a');
		fwrite($file, $task . PHP_EOL);
		fclose($file);
	}
}

header('Location: index.html');
exit;

?>

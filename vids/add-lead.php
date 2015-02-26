<?PHP
define('STORAGETYPE','db');
if (isset($_POST['email'])) {
	if (STORAGETYPE == 'db') {
		include_once('../php_uploads/connect.php');
		$query = "INSERT into `contact` (`email`,`form_submitted`,`created`) VALUES ('".escape_data($_POST['email'])."','Video Newsletter Subscription', NOW())";
		$result = mysql_query ($query); // Run the query.
	}
	if (STORAGETYPE == 'file') {
		if (file_exists('lead-list.txt')) {
			$filecontents = file_get_contents ('lead-list.txt');
			$filecontents = $filecontents."\n".$_POST['email'];
		} else {
			$filecontents = $_POST['email'];
		}
		$fh = fopen('lead-list.txt', 'w') or die("can't open file");
		
		fwrite($fh, $filecontents);
		fclose($fh);
	}

}
?>
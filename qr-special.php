<?PHP
require_once ('php_uploads/connect.php'); // Connect to the db.
require_once ('control/qr-codes/qr-functions.php'); // Connect to the db.


if (isset($_GET['deal'])) {
	$code = escape_data(NMGdecode(urldecode($_GET['deal'])));
	
	$query = "SELECT * FROM `qr_codes` WHERE `qr_name` = '$code' LIMIT 0,1";
		$result = mysql_query ($query); // Run the query.
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
			if (isitinthere('?', $row['qr_link'])) {
				$url = $row['qr_link'].'&deal='.urlencode('QR - '.$row['qr_name']);
			} else {
				$url = $row['qr_link'].'?deal='.urlencode('QR - '.$row['qr_name']);
			}
			$id = $row['id'];
		}
		$query = "INSERT INTO `qr_codes_tracking` (`id`,`qr_id`,`ip`,`visited`) VALUES (NULL, $id,'".$_SERVER['REMOTE_ADDR']."',NOW())";
		$result = mysql_query ($query); // Run the query.

	
	header("Location: $url");
	exit(); // Quit the script.

} else {
	echo 'Sorry, We were unable to locate the deal you were looking for.';
	exit(); // Quit the script.

}
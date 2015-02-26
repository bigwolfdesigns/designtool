<?PHP
if (isset($_GET['email'])) {
$hostname="localhost";
$username="stdesign_dtools";
$password="pTfKS5nN5AP8";
$dbname="stdesign_dtools";
// connect to the database
$dbh=mysql_connect ($hostname,$username, $password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ("$dbname");
$email = mysql_escape_string($_GET['email']);
$id = mysql_escape_string($_GET['id']);
if ($email != 0) {
$query = "UPDATE `campaign_tracking` SET opened='Yes', opened_date=NOW() WHERE campaign_id=$id AND email_id=$email";
$result = mysql_query ($query); // Run the query.
}
}
header("Content-type: image/gif"); //or jpeg, etc. depending
print file_get_contents("1x1.gif"); //show the gif 
?>
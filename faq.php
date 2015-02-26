<?php
include_once('all_includes.php');
$PAGE_TITLE = "FAQ - Frequently Asked Questions - Design Tool Inc";
include_once($DESIGN_TOOL_root.'/header.php');
extract($_GET);
extract($_POST);
include('php_uploads/process-settings.php');
?>
<h2>Frequently Asked Questions</h2>
<?PHP //echo $searchbox; ?>
<?PHP //echo $body; ?>
<?PHP //echo $searchresults;  ?>
<?PHP //echo $message;   ?>
<?PHP //echo $trouble;  ?>

<?php
//$dbh=mysql_connect ("localhost", "stdesign_dtools", "pTfKS5nN5AP8") or die ('I cannot connect to the database because: ' . mysql_error());
//mysql_select_db ("stdesign_dtools");
/////////////////////////////////
// search previous questions
if($_POST['search'] == "yes"){
	// add to faq stats
	$sresult = @mysql_query("SELECT question, answer, category, link, MATCH(question, answer, category) AGAINST ('".$question."') AS score FROM faq WHERE MATCH(question, answer, category) AGAINST ('".$question."') AND answer != '' ORDER BY score DESC");
	$num	 = mysql_num_rows($sresult);
	$insert	 = mysql_query("INSERT INTO faq_stats (`id`, `question`, `ip`,`results`,`created`) VALUES (NULL,'".$question."','".$ip."','".$num."',NOW())");

	if($insert){
		if(mysql_num_rows($sresult) > 0){
			$body	 = '<h4>We found '.$num.' question(s)</h4>';
			while($srow	 = mysql_fetch_object($sresult)){
				$string = $srow->answer;
				$body .= '<h5><em>'.$srow->question.'</em><br />(relevance: '.number_format($srow->score, 1).')</h5>';
				$body .= '<p>'.nl2br($string).'</p>';
			}
		}else{
			$body = '<p>Sorry, no matches were close enough to your search!</p>';
		}
	}else{
		$body = '<p>Sorry, there was a problem with the database!</p>';
	}

	$body .= '
	<div id="ask-faq">
		<h4>...did we answer your question??</h4>
		<p>If not, please send us a question and receive the answer by email...</p>
		<form action="" method="post">
		<input type="hidden" name="ask" value="yes" />
		<small><em>your email address:</em></small><br />
		<input type="text" name="email" value="" size="40" /><br />
		<small><em>your question:</em></small><br />
		<input type="text" name="question" value="" size="50" /><br />
		<input type="submit" value="Send" />
		</form>
	</div>
	';
	echo $body;
}elseif($_POST['ask'] == "yes"){
	$body = '';

	$eml = escape_data($_POST['email']);

	if(preg_match("/how /i", $question) || preg_match("/where /i", $question) || preg_match("/when /i", $question) || preg_match("/what /i", $question) || preg_match("/why /i", $question) || preg_match("/can /i", $question) || preg_match("/do you /i", $question) || preg_match("/\?/i", $question)){
		// add to faq stats
		$sresult = @mysql_query("SELECT question, answer, category, link, MATCH(question, answer, category) AGAINST ('".$question."') AS score FROM faq WHERE MATCH(question, answer, category) AGAINST ('".$question."') AND answer != '' ORDER BY score DESC");
		$num	 = mysql_num_rows($sresult);
		$insert	 = mysql_query("INSERT INTO faq_stats (`id`, `question`, `ip`,`results`,`submitted`,`created`) VALUES (NULL, '".$question."', '".$ip."', '".$num."', 'Yes', NOW())");
//var_dump($insert);
		if($insert){
			// insert record since it appears to be a FAQ question
			$aresult = mysql_query("INSERT INTO faq (`question`,`email`,`created`) VALUES ('".$question."','".$eml."',NOW())");
			if($aresult){
				$body			 = '<p id="search-faq">Your question has been submitted.  Our staff will answer it, and send you an email as soon as possible.</p>';
				// send email to administrator
				$subject		 = "'FAQ Question Submitted'";
				$emailbody		 = "A new question, \"".$question."\", was posted by a website visitor.  Please go to the Control Panel to manage...\n"."http://www.designtoolinc.com/control/ifaq/faq.php\n";
				include_once('php_uploads/mailer/design_tool_mailer.php');
				$mail			 = new design_tool_mailer();
				$mail->Subject	 = $subject;
				$mail->AltBody	 = $emailbody;
				$mail->MsgHTML($emailbody);
				$mail->SetFrom($from);
				$mail->ClearReplyTos();
				$mail->AddReplyTo($from);
				$mail->AddAddress($to);
				$mail->AddAddress('billy@bigwolfdesigns.com');

				$mailsuccess = $mail->Send();
				if(!$mailsuccess){
					mail($to, $subject, $emailbody, $from);
				}
			}
		}else{
			$body = '<p id="search-faq">Sorry, there was a problem with the database!</p>';
		}
	}else{
		$body = '<p id="search-faq">Sorry, there was an error submitting your question. Please try again.</p>';
	}

	echo $body;
}


/////////////////////////////////
// default display all questions
else{
	$body = '
	<div id="search-faq">
		<form action="" method="post"><small><em>search for question:</em></small><br />
		<input type="hidden" name="search" value="yes" />
		<input type="text" name="question" value="" size="50" /> <input type="submit" value="Go" />
		</form>
	</div>
	';

	$cresult = @mysql_query("SELECT category FROM faq WHERE category != '' GROUP BY category ORDER BY category");
	if($crow	 = mysql_fetch_array($cresult, MYSQL_ASSOC)){
		do{
			$body .='<h4>'.$crow['category'].'</h4>';
			$cat = $crow['category'];

			$qresult = @mysql_query("SELECT * FROM faq WHERE answer != '' AND category = '".$cat."'");
			while($qrow	 = mysql_fetch_array($qresult, MYSQL_ASSOC)){
				$body .='
		<h5><em>'.$qrow['question'].'</em></h5>
		<p>'.nl2br($qrow['answer']).'</p>';
			}
		}while($crow = mysql_fetch_array($cresult, MYSQL_ASSOC));
	}

	$oresult = @mysql_query("SELECT * FROM faq WHERE answer != '' AND category = ''");
	if($orow	 = mysql_fetch_array($oresult, MYSQL_ASSOC)){
		$body .='<h4>Other</h4>';
		do{
			$body .='
		<h5><em>'.$orow['question'].'</em></h5>
		'.nl2br($orow['answer']);
		}while($orow = mysql_fetch_array($oresult, MYSQL_ASSOC));
	}
	$body .= '
	<div id="ask-faq">
		<h4>...did we answer your question??</h4>
		<p>If not, please send us a question and receive the answer by email...</p>
		<form action="" method="post">
		<input type="hidden" name="ask" value="yes" />
		<small><em>your email address:</em></small><br />
		<input type="text" name="email" value="" size="40" /><br />
		<small><em>your question:</em></small><br />
		<input type="text" name="question" value="" size="50" /><br />
		<input type="submit" value="Send" />
		</form>
	</div>
	';
	echo $body;
}
?>


<div class="top"><a href="javascript:scroll(0,0);">Back to Top</a></div>

<?php
include_once("$DESIGN_TOOL_root/footer.php");

<?php
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $login = $_REQUEST['login'];
  $reason = $_REQUEST['reason'];
  $vote1 = $_REQUEST['vote1'];
  $vote2 = $_REQUEST['vote2'];
  $vote3 = $_REQUEST['vote3'];
  
  $MailDest = $email;
  $MailSubject = "Confirm your Eclipse Individual Awards vote";
  
  $MailStr = 
"Thank you for casting these votes for the Eclipse Community Awards, Individuals category.
But you're not done yet!

";
  
  if( $vote1 != "" ) {
    $MailStr .= "  Top Ambassador: $vote1 \n";
  }
  if( $vote2 != "" ) {
    $MailStr .= "  Top Contributor: $vote2 \n";
  }
  if( $vote3 != "" ) {
    $MailStr .= "  Top Committer: $vote3 \n";
  }

  $Query  = "name=" . urlencode($name);
  $Query .= "&email=" . urlencode($email);
  $Query .= "&login=" . urlencode($login);
  $Query .= "&vote1=" . urlencode($vote1);
  $Query .= "&vote2=" . urlencode($vote2);
  $Query .= "&vote3=" . urlencode($vote3);
  $Query .= "&reason=" . urlencode($reason);

  $MailStr .= 
"
We've now recorded your vote but you must confirm your choices by clicking this link:
";
  $MailStr .= "  http://www.eclipse.org/org/foundation/eclipseawards2008voterecorder.php?" . $Query . "\n";
  $MailStr .= "
Thank you for your vote.
";
  
  mail($MailDest, $MailSubject, $MailStr, "From: lynn.gayowski@eclipse.org\n");

  header("Location: http://www.eclipse.org/org/foundation/eclipseawards/thankswait.php");

?>

<?php
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $login = $_REQUEST['login'];
  $reason = $_REQUEST['reason'];
  $vote1 = $_REQUEST['vote1'];
  $vote2 = $_REQUEST['vote2'];
  $vote3 = $_REQUEST['vote3'];
  
  $filename = '/home/data/httpd/writable/community/award-votes-08.txt';
  $time = date("Y-m-d\TH:i:sO");
  $data = "$time	$name	$email	$vote1	$vote2	$vote3	$login	$reason\n";

  $fp = fopen($filename, "a");
  fputs($fp, $data);
  fclose($fp);

  header("Location: http://www.eclipse.org/org/foundation/eclipseawards/thankscomplete.php");
?>


<?php
  session_start();
  ob_start();

  echo "<h1>Members only</h1>";

  // check session variable

  if (isset($_SESSION['valid_user']))
  {
    echo "<p>You are logged in as " . $_SESSION['valid_user'] . "</p>";
    echo "<p>Members only content goes here</p>";
	echo "<a href=\"logout.php\">Logout</a>";
	echo"<p>You will be redirected to homepage in 5 seconds</p>";
      header("Refresh:5; url=index.html");
  }
  else
  {
    echo "<p>You are not logged in.</p>";
    echo "<p>Only logged in members may see this page.</p>";
	echo "<a href=\"login.html\">Login page</a>";
  }  
?>

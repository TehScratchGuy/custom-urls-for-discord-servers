<?php
$url = ($_POST["url"]);
$invite = ($_POST["invite"]);

if (file_exists('c/' . $url)) {
    echo '<p>This custom URL has already been taken. Sorry.</p><p><a href="index.html">Go back</a></p>';
} else {
  mkdir('c/' . $url, 0777, true);
  $directory = 'c/' . $url . '/';
  $myfile = fopen($directory . 'index.php', "w") or die("Unable to open file!");
  $txt = "<?php header( 'Location: http://discord.gg/{$invite}' ) ;";
  fwrite($myfile, $txt);
  fclose($myfile);
  echo '<p>Your custom URL has been created.</p><p>http://127.0.0.1/discord/' . $directory . '</p>';
}


?>

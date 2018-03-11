<p>
Updating website
</p>

<pre>

<?php

// Use in the "Post-Receive URLs" section of your GitHub repo.
//if ( $_POST['payload'] ) {
//}



//$out = shell_exec( 'cd /var/www/mkdocs-src && git reset --hard HEAD && git pull && mkdocs build' );

//echo "<p>OUTPUT:<p>";
//echo "<pre>$out</pre>";

$path = "/var/www/mkdocs-src";

echo "Path:<br>";
echo "$path<br><br>";

echo "Changing to $path<br>";
$success = chdir($path);
echo "$path<br><br>";

echo "Resetting git repo<br>";
$gitresetout = shell_exec("git reset --hard HEAD 2>&1");
echo "$gitresetout<br>";

echo "Pulling git<br>";
$gitpullout = shell_exec("git pull 2>&1");
echo "$gitpullout<br>";

echo "Building Docs<br>";
$buildout = shell_exec("mkdocs build 2>&1");
echo "$buildout<br>";

echo "Done!<br>";
?>

</pre>

Hello

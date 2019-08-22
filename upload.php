<?php
if($_FILE["upload_file"]["error"])
{
	echo "File could not be uploaded";
}
else
{
	move_uploaded_file($_FILE["upload_file"]["fileToUpload"],"Uploads/".$_FILES["upload_file"]["fileToUpload"]);
	header("refresh:2;url=index.html");
}

?>
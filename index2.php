<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js">

</script>

<?php

	//Forma za upload fotografije u folder

	if(isset($_POST["submit"]))
		
	{
		$file = $_FILES["file"];
		
		$fileName = $_FILES["file"]["name"];
		$fileTmpName = $_FILES["file"]["tmp_name"];
		$fileSize = $_FILES["file"]["size"];
		$fileError = $_FILES["file"]["error"];
		$fileType = $_FILES["file"]["type"];
		
		$fileExt = explode(".", $fileName);
		$fileActualExt = strtolower(end($fileExt));
		
		$allowed = array("jpg", "JPG", "jpeg", "png",);
		
		if (in_array($fileActualExt, $allowed))
		{
			if($fileError === 0)
			{
				if($fileSize < 3000000)
				{
					$fileDestination = "uploads/".$fileName;
					move_uploaded_file($_FILES["file"]["tmp_name"], $fileDestination);
					header("Location: upload.php?uploadsuccess");
					
					
					
					
				}else
				{
					echo "Velicina fajla nije dozvoljena!";
				}
			}
			else
			{
				echo "Fajl ovog tipa nije dozvoljen!";
			}
		}else
		{
			echo "Fajl ovog tipa nije dozvoljen!";
		}
		
		
		
	}
		
	$folder = "uploads/";
		
	if(isset($_GET["del"]) and $_GET["del"] == 1 and isset($_GET["name"]))
	{
		unlink($folder.$_GET["name"]);
		header("Location: http://www.photoborko.com/prikaz.php");
	}
	
	if(isset($_GET["rename"]))
		{
			$oldname = str_replace(".jpg", "", $_GET["rename"]);
			echo '<form action="" method="get"><input type="text" value="'.$oldname.'" name="newname">';
			echo '<input type="hidden" value="'.$_GET["rename"].'" name="oldname">';
			echo '<input type="submit" value="Rename" name="submit2"></form>';
		}
		if(isset($_GET["submit2"]))
		{
			rename($folder.$_GET["oldname"],$folder.$_GET["newname"]);
			header("Location: http://www.photoborko.com/prikaz.php");
			
		}

?>






<?php
$target_dir = 'kepek/';
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "Képfájl - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "Nem képformátumú fájl.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "A fájl már létezik.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Túl nagy a fájl.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Csak JPG, JPEG, PNG és GIF fájlok engedélyezettek.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "A fájl nem került feltöltésre.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "A ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " nevű fájl feltöltésre került.";
  } else {
    echo "Hiba lépett fel a fájl feltöltése során.";
  }
}
?>
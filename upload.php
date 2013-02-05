<?php
    require_once ('.things.php');


  $ae = array("txt","csv","htm","html","xml", 
    "css","doc","xls","rtf","ppt","pdf","swf","flv","avi", 
    "wmv","mov","jpg","jpeg","gif","png","zip"); 
  foreach ($_FILES as $file) { 
    if ($file['tmp_name'] > '') { 
      if (!in_array(end(explode(".", 
            strtolower($file['name']))), 
            $ae)) { 
       die($file['name'].' is an invalid file type!<br/>'. 
        '<a href="javascript:history.go(-1);">'. 
        '&lt;&lt Go Back</a>'); 
      } 
		$uploaddir = '/usr1/home/mecheng1/step/public_html/upload/';
		$basen = basename($_FILES['userfile']['name']);
		$uploadfile = $uploaddir . $basen;

		if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
			$m = "File is valid, and was successfully uploaded to
				  <a href=\"$basen\">this location</a>.\n";
		} else {
			$m = "Possible file upload attack!\n";
		}
    } 
}
?>
<div class="contentcentre">
    <h1><strong><em>File upload</em></strong></h1>
    <?php
        if($m) {
            echo($m);
        } else {
    ?>
            <p>This form allows you to upload a file onto our server.</p>
            <form enctype="multipart/form-data" action="" method="POST">
                <!-- MAX_FILE_SIZE must precede the file input field -->
                <input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
                <!-- Name of input element determines name in $_FILES array -->
                Send this file: <input name="userfile" type="file" />
                <input type="submit" value="Send File" />
            </form>
    <?php
        }
    ?>
</div>
<?php
    page_out (array ());
?>
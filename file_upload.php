<?php
// file upload 
$allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

if (isset($_POST['submit'])) {
    // check if thr file was uploaded
    if (!empty($_FILES['upload']['name'])) {
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "upload/${file_name}";

        // getting our file extention
        $file_ext = explode('.' ,$file_name);
        $file_ext = strtolower(end($file_ext));
        //echo $file_ext;


        // validate file type with the extension that is valid.
        if (in_array($file_ext, $allowed_ext)) {
           // validate file size 

           if ($file_size <= 1000000) {
           // 1000000 bytes = 1 megabytes
             move_uploaded_file($file_tmp, $target_dir);

                //Success message
                echo '<p style= "color:green; font-weight: broader;">File Uploaded Successfully!</p>';

           } else{
               echo '<p style="color:red;">File too large, Please try again</p>';
           }  

        } else {
            $message ='<p style="color:red;">Invalid file type </p>';
            //echo $message;

        }

    }else {
        $message ='<p style="color:red;">Please choose a file </p>';
        //echo $message;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php echo $message ?? null;?>
   <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
   <h3>Select an image to upload</h3>
   <input type="file" name="upload" id="upload">
   <input type="submit" value="Submit" name="submit">
   
   
   </form> 
</body>
</html>


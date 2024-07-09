<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    if(isset($_POST["submit"])) {
        // var_dump($_FILES["file"]);
        $errors = [];
        $arr = ["image/gif", "image/jpg", "image/jpeg", "image/png"];
        if($_FILES["file"]["error"] == UPLOAD_ERR_NO_FILE) {
            $errors[] = "Vui lòng chọn file"; 
        }
        if($_FILES["file"]["size"] > 1048576) {
            $errors[] = "File không vượt quá 1Mb"; 
        }
        if(!in_array($_FILES["file"]["type"], $arr)) {
            $errors[] = "Chỉ up file png, jpg, gif"; 
        }
        foreach ($errors as $key => $value) {
            echo $value."<br/>";
        }
        if(empty($errors)) {
            $fn = pathinfo($_FILES["file"]["name"]);
            // var_dump($fn);
            $extension = $fn["extension"];
            move_uploaded_file($_FILES["file"]["tmp_name"], time().".".$extension); // 1720441676.gif
            echo "Thành công";
        }
    }

    // $folder = "uploads/";
    // // if(!is_dir($folder)) {
    // //     mkdir($folder);
    // // }
    // if(is_dir($folder)) {
    //     // rename($folder, "images");
    //     rmdir($folder);
    // }
    
    ?>
    <div class="container mt-5">
        <h2>Upload File Image</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file">Choose file to upload:</label>
                <input type="file" class="form-control-file" id="file" name="file">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
</body>
</html>

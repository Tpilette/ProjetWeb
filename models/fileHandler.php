<?php


class FileHandler{


    // $name is title combined with volume, $image = $_FILES array 
    //["name"],["type"],["tmp_name"],["size"]
    public function addPicture($name,$image){

        $targetDirectory = "image/";
        $targetFile = $targetDirectory.$name.'.jpg';
        $uploadOk=1;
        $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));


        if(file_exists($targetFile)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if($image["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }      

        if($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        }
        else{
            if (move_uploaded_file($image["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "The file ". basename( $image["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    public function deletePicture($name){

        // todo : check file is realy deleted
        $filename = '../image/'.$name.'.jpg';
        unlink($filename);
    }


}
?>
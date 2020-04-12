<?php


class FileHandler{


    public function addPicture($name,$image){

        rename($image,$name);
        move_uploaded_file ( $image , '/image');
    }
}
?>
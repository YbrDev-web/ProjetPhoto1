<?php

require_once 'ProjetPHP/model/photos.php';


class PhotoController {
    private $photoModel;
    
    public function __construct() {
        $this->photoModel = new Photo();
    }

    public function index() {
        $photos = $this->photoModel->getAll();
        echo json_encode($photos);
    }
    
    public function upload() {
        if (isset($_FILES['photo'])) {
            $filename = $_FILES['photo']['name'];
            $filepath = 'uploads/' . $filename;
            move_uploaded_file($_FILES['photo']['tmp_name'], $filepath);
            $this->photoModel->upload($filename, $filepath);
            echo "Photo téléchargée avec succès.";
        }
    }
    
    public function delete() {
        if (isset($_POST['id'])) {
            $this->photoModel->delete($_POST['id']);
            echo "Photo supprimée avec succès.";
        }
    }
}

?>

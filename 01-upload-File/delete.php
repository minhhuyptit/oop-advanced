<?php
    if(isset($_POST['imageSrc'])){
        $imageName = $_POST['imageSrc'];
        @unlink($imageName);
        $imageName = str_replace('125-', '450-', $imageName);
        @unlink($imageName);
        $imageName = str_replace('450-', '', $imageName);
        @unlink($imageName);
    }
?>
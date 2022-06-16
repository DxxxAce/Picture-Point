<?php
if (isset($_POST['submit'])){

    $username = $_POST['username'];

    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];


    //separating the file extension
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    //filtering the allowed file types
    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){ //verific daca nu am erori la upload
            if($fileSize<500000){ //verific daca filesize-ul e sub o anumita marime
                $fileNameNew = uniqid('', true).".".$fileActualExt; //ii rescriu numele astfel incat sa nu isi ia override poze cu acelasi nume
                mkdir('uploads/'.$username); //ii creez pe username un director
                $fileDestination = 'uploads/'.$username.'/'.$fileNameNew; //adaug poza in directoru userului care face upload
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: index.php?uploadsuccess");
            } else{
                echo "The file is too big to be uploaded!";
            }
        } else{
            echo "There has been an error while uploading your file!";
        }
    } else{
        echo "You cannot upload this filetype!";
    }

}
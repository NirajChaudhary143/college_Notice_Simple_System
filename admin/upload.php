<?php
include('includes/connection.php');
if($_POST['submit']){

    $title=$_POST['topic'];
    $file=$_FILES['fileToUpload'];
    // print_r($file);
    $filename= $file['name'];
    $filepath=$file['tmp_name'];
    $fileerror=$file['error'];
    
    if($fileerror == 0){
        $destFile = 'admin/notice/'.$filename;
        // echo $filename;
        move_uploaded_file($filepath,$destFile);
        $inqry = "INSERT INTO exam_notice(Topic,Notice) values('$title','$destFile')";
        $qury=$conn->query($inqry);
        if($qury>0){
            header('location: index.php');
            
        }
    }
    
}

?>
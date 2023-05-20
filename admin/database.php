<?php
session_start();
if(!isset($_SESSION['AdminLoginId'])){
	header("location: login.php");
}
include('includes/header.php');
include('includes/connection.php');
        $sql= "SELECT * FROM exam_notice";
        $result= $conn->query($sql);
?>

<table class="dbtb">
    <thead>
        <tr align="center"style="height:60px;">
            <th style=" border-top-left-radius: 10px; width:200px;">Topic</th>
            <th>Content</th>
            <th style="border-top-right-radius: 10px;">Action</th>
        </tr>
    </thead>
        
    <?php       
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
    ?>
        <tr>        
            <td align="center" style="padding:10px;">
                <?=$row["Topic"];?>
            </td>
            <td align="center" align="justify" style="padding:20px 10px;">
                <img src="<?=$row["Notice"];?>" alt="" width="100" height="100">
            </td>
            <!-- <td align="center" width="230px">
                <a href="update.php?id=<?=$row['id'] ?>">Edit <i class="fa fa-edit"></i></a>
                <a style="background:#a22;" href="delete.php?id=<?=$row['id'] ?>">Delete <i class="fa fa-trash"></i></a>
            </td> -->
        </tr>
   <?php
    }
}
    ?>
</table>
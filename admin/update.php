<?php 
include('includes/header.php');
session_start();
if(!isset($_SESSION['AdminLoginId'])){
	header("location: login.php");
}
include('includes/connection.php');
?>

<style type="text/css">
    textarea::placeholder{
        color:#ccc;
    }
    h1 .btnn{
        float:right;
        padding:6px 20px;
        font-size:1.3rem;
        font-weight: 100;
        height:40px;
        width:85px;
        margin:0;
        background: none;
        border:1px solid #ccc;
        border-radius:5px;
        text-decoration: none;
        color:#ccc;
    }
    h1 .btnn:hover{
        transition: 0.3s;
        background: #222;
        border-color:#eee;
        color:#eee;
    }
</style>
	<div class="AddPost">
        <h1 style="color:#ccc;">Edit Post
            <a href="database.php" class="btnn">Back</a></h1><br>
		<form id="postForm" method="POST">
       <?php
        $id=$_GET['id'];
        $sql=" SELECT * FROM post where id=$id";
        $query= $conn->query($sql);
        $result=$query->fetch_assoc();
        ?>
			<div class="input-post">
				<h2>Title</h2>
				<input type="text" name="PostTitle" value=" <?php
        echo $result["Title"];
        ?>">
			</div>
			<div class="input-post">
				<h2>Content</h2>
				<textarea type="text" name="PostContent" placeholder="<?=$result["Content"];?>"></textarea>
			</div>
			<button class="btn" name="update">Update</button>
		</form>
	<!-- </div> -->
</div>
</body>
</html>
<?php
if(isset($_POST['update'])){
    $title=$_POST['PostTitle'];
    $content=$_POST['PostContent'];

    $update= "UPDATE post SET id=$id, Title='$title', Content='$content' WHERE id=$id";
    $qury=$conn->query($update);
    if($qury){
?>
<script>alert('Update Successful');</script>
<?php
    header("location: database.php");
    }
    else{
        ?>
        <script>alert('Not Updated')</script>
<?php
    }
}

?>


<?php
if(isset($_POST["submit"])){ 
	$var1=rand(1111,9999);
	$var2=rand(1111,9999);
	$var3=$var1.$var2;
	$var3=md5($var3);

	$filen=$_FILES["file"]["name"];
	$dst="productimages/".$var3.$filen;
	$dst_db="productimages/".$var3.$filen;

	move_uploaded_file($_FILES["file"]["tmp_name"],$dst);
	$check=mysqli_query($conn,"insert into bannerupdate(name,images) values('$_POST[name]','$dst_db')");

	
	if($check){
		echo "<script>
		alert('Product succesfully added.Press OK to add another');
		</script>";
	}else{
		echo "<script>
		alert('error uploading data');
		</script>";
	}
}
?>

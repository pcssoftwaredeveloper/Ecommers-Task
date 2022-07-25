<?php 
	$name = $_POST['name'];
	$qty = $_POST['qty'];
	$image = $_POST['image'];
	$desc = $_POST['description'];
	$image = $_POST['image'];

	if($name=''  && $qty='' && $image='' && $desc=''){
		echo json_encode(['error'=>1,'message'=>'Missing required parametrs']); 
	}else{
		$query = "INSERT INTO products ('name,detal,qty,price,image,')values('$name','$desc','$qty','$proce','$image',)";
		echo json_encode(['error'=>'','message'=>$name.''.$qty]);
	}
?>
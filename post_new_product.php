<?php
require 'class_lib.php';
require 'connection.php';

$con = myconnection();
$data = json_decode(file_get_contents('php://input'), true);;
$p_name = $data['p_name'];
$price = $data['price'];
$type = $data['type'];
$description = $data['description'];
$vid = $data['vid'];
$img_path = "";

$sql = "insert into productdetails(p_name,price,type,approved,description,vid,sell_out,image)
                            VALUES ('$p_name','$price','$type','0','$description','$vid','0','$img_path')";
$run = mysqli_query($con, $sql);
//mysqli_query($con,$sql) or die(mysqli_error($con));

if ($run) {
    echo "success";

} else {
    echo "error";
    mysqli_error($con);
}
print_r($data)
?>

<?php
$data = json_decode(file_get_contents('php://input'), true);;
$photo = $data['image'];
$price = $data['Saving'];
//echo "test ".$price;

$name = rand(). ".jpeg";

define('UPLOAD_DIR',  'uploads/');
    $image_parts = explode(";base64,", $photo);
     // $image_type_aux = explode("image/", $image_parts[0]);
	$image_base64 = base64_decode($image_parts[0]);

	$name = rand(). ".jpeg";

if(file_put_contents(UPLOAD_DIR .$name, $image_base64)){
  	echo json_encode(["Message" => $name,
						"Status" => "OK"]);
    
}else{
	echo json_encode(["Message" => "Sorry, Not Successful",
						"Status" => $photo]);	
						
}




?>

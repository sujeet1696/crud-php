<?php

$conn = mysqli_connect('localhost','root',"",'local_db');

extract($_POST);

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['mobile']) )
{
	$query = " INSERT INTO `crudtable`(`firstname`, `lastname`, `email`, `mobile`) VALUES ( '$firstname',  '$lastname', '$email', '$mobile'  ) ";
	mysqli_query($conn,$query);

}
// $query = " INSERT INTO `crudtable`(`firstname`, `lastname`, `email`, `mobile`) VALUES ( 'Sujeet',  'Kumar', 'sujeet.kumar@ksolves.com', '8406079258') ";
// mysqli_query($conn,$query);

?>

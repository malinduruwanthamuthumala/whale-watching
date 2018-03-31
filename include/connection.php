<?php 

//$connect=mysql_connect(dbserver,dbuser,dbpassword,dbname)
$connect=mysqli_connect('localhost','root','','whalewatching');

/*method 1   to check whether the connection successful
if(!$connect){
	echo "database connection failled";
}
*/

//method 2

if(mysqli_connect_errno()){

die ('database connection failled'.mysqli_connect_error());

}
else {
echo "connection successful";
}



 ?>


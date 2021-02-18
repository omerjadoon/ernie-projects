<?php 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//check if its an ajax request, exit if not
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

    //exit script outputting json data
    $output = json_encode(
            array(
                'type' => 'error',
                'text' => 'Request must come from Ajax'
    ));

    die($output);
}



//check $_POST vars are set, exit if any missing
if (!isset($_POST["step"]) ) {
    $output = json_encode(array('type' => 'error', 'text' => 'Input fields are empty!'));
    // $output = json_encode(array('hello' => $_POST["username"]));
    // var_dump($_POST);
    die($output);
}else if($_POST["step"] == "1")
{
	//do something
	//Sanitize input data using PHP filter_var().
		$em = filter_var(trim($_POST["email"]), FILTER_SANITIZE_STRING);
		$pas = filter_var(trim($_POST["email"]), FILTER_SANITIZE_STRING);

		//create a new user
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "lararole";
		

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}

		$pass_hash = password_hash($pas, PASSWORD_DEFAULT);
		$sql = "INSERT INTO Users (email,password)
		VALUES ('".$em."', '".$pass_hash."')";

		if ($conn->query($sql) === TRUE) {
		  echo json_encode("user success");
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

				
			


}else if($_POST["step"] == "2")
{
	//do something
	//Sanitize input data using PHP filter_var().
		$investment = filter_var(trim($_POST["investment"]), FILTER_SANITIZE_STRING);

				print_r($_POST);
			


}
else if($_POST["step"] == "3")
{
	print_r(json_encode($_POST));
	//do something
	//Sanitize input data using PHP filter_var().
		// $name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
		// $address = filter_var(trim($_POST["address"]), FILTER_SANITIZE_STRING);
		// $phone = filter_var(trim($_POST["phone"]), FILTER_SANITIZE_STRING);
		// $password = filter_var(trim($_POST["password"]), FILTER_SANITIZE_STRING);
		// $accredation = filter_var(trim($_POST["accredation"]), FILTER_SANITIZE_STRING);

				
			


}

//Sanitize input data using PHP filter_var().
//$username = filter_var(trim($_POST["username"]), FILTER_SANITIZE_STRING);


//additional php validation
// if (strlen($username) < 4) { // If length is less than 4 it will throw an HTTP error.
//     $output = json_encode(array('type' => 'error', 'text' => 'Name is too short!'));
//     die($output);
// }
// if (!filter_var($useremail, FILTER_VALIDATE_EMAIL)) { //email validation
//     $output = json_encode(array('type' => 'error', 'text' => 'Please enter a valid email!'));
//     die($output);
// }
// if (strlen($message) < 5) { //check emtpy message
//     $output = json_encode(array('type' => 'error', 'text' => 'Too short message!'));
//     die($output);
// }

// $to = "info@wearecoders.net"; //Replace with recipient email address
// //proceed with PHP email.
// $headers = 'From: ' . $useremail . '' . "\r\n" .
//         'Reply-To: ' . $useremail . '' . "\r\n" .
//         'X-Mailer: PHP/' . phpversion();

// $sentMail = @mail($to, $subject, $message . '  -' . $username, $headers);
// //$sentMail = true;
// if (!$sentMail) {
//     $output = json_encode(array('type' => 'error', 'text' => 'Could not send mail! Please contact administrator.'));
//     die($output);
// } else {
//     $output = json_encode(array('type' => 'message', 'text' => 'Hi ' . $username . ' Thank you for your email'));
//     die($output);
// }




}


 ?>
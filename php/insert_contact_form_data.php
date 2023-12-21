<?php 

// insert data into db table

if (isset($_POST["urSubmit"])) {
	
	$eName = $_POST["urName"];
	$eEmail = $_POST["urEmail"];
	$eMess = $_POST["urMess"];

	// insert data's into db table
	// $inrtQry = "INSERT INTO `contact_us`(`uname`, `uemail`, `umessage`) VALUES($eName, $eEmail, $eMess)";

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$inrtQry = $conn->prepare("INSERT INTO `contact_us` (`uname`, `uemail`, `umessage`) VALUES(?, ?, ?)");
	$inrtQry->bind_param("sss", $eName, $eEmail, $eMess);


	// $conn -> query($inrtQry);
	// echo "Data Inserted Successfully";

	if ($inrtQry -> execute()) {
		echo "<div id='popupContainer' class='sendedMessage'>
					<div class='popupBox'>
						<h4 id='popup_mess'>Your message has sended successfully</h4>
						<button id='close_popup' class='closePopup' onclick='closePopup()'>Close</button>
					</div>
			</div>";
	}
	else {
		echo "Something wrong, try later";
	}

	// $inrtQry->close();
	// $conn->close();

}

?>
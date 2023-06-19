<?php
require_once 'connect.php';

$name = $_POST['username'];
$pwd = $_POST['pwd'];
$result_data = array();

$sql = "SELECT * FROM customer WHERE cus_user = '$name' AND cus_pass = '$pwd'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    array_push($result_data, $row);
  }
} else {
  echo "0 results";
}
$status = 'success';
$data = $result_data;
$messsage = 'complete';

$conn->close();
?>
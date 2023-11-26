<?php
// Thực hiện truy vấn INSERT
$sql = "INSERT INTO `data` (`data1`, `data2`) VALUES ('{$data1}', '{$data2}')";
$result = $conn->query($sql);

// Đóng kết nối
$conn->close();

?>
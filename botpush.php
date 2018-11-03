<?php
require_once __DIR__ . '/lineBot.php';
require_once __DIR__ . '/connect.php';
$bot   = new Linebot();
$text  = $bot->getMessageText();

// แบ่งคำด้วยช่องว่า
$textArray = explode(" ", trim($text));

$ans = "";
if (sizeof($textArray) == 1)
{
	// กรณีส่งมาคำเดียว เช่น "A"
	$query = mysqli_query($conn, "select * from incomingreport where Code = '". $textArray[0] . "'");
	if (mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			$ans .= $row["Incoming date"] ." | ". $row["Channel"] . " | " .$row["Quantity"] ." แผ่น". "\n";
		}
	} else {
		$ans = "ขอโทษค่ะ ฉันไม่รู้ว่าคุณหมายความว่าอย่างไร"."\n"."กรุณาพิมพ์ Code"."\n"."หรือ Code Channel ค่ะ";
	}

}
else
{
	// กรณีส่งมาสองคำ เช่น "A export"
	$query = mysqli_query($conn, "select * from incomingreport where Code = '" . $textArray[0] . "' and Channel = '" . $textArray[1] . "'");
	if (mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			$ans .= $row["Incoming date"] . " | " . $row["Quantity"] ." แผ่น". "\n";
		}
	} else {
		$ans = "ขอโทษค่ะ ฉันไม่รู้ว่าคุณหมายความว่าอย่างไร"."\n"."กรุณาพิมพ์ Code หรือ Code Channel ค่ะ" ;
	}
}


$bot->reply($ans);
?>







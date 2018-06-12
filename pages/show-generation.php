<?php
	include('mysql_connect.php');
	
	$i = 0;
	$strOption = NULL;
	$sql = "SELECT * FROM detail_student WHERE GENERATION = '$_GET[pvid]' ORDER BY FIRSTNAME ASC";
    $result = mysqli_query($link, $sql);
    if($_GET['pvid'] == "ไม่มี"){
		$sql = "SELECT * FROM detail_student ORDER BY YEAR DESC";
		$result = mysqli_query($link, $sql);
		while($data = mysqli_fetch_array($result)){
			$i++;
    		$strOption .= "<tr>";
    		$strOption .= "<td align='center'>" . $i . "</td>";
			$strOption .= "<td align='center'>" . $data['YEAR'] . "</td>";
    		$strOption .= "<td>" . $data['FIRSTNAME'] . " " . $data['LASTNAME'] . "</td>";
    		$strOption .= "<td>" . $data['NICKNAME'] . "</td>";
    		$strOption .= "<td align='center'>" . $data['PHONE'] . "</td>";
    		$strOption .= "<td>" . $data['EMAIL'] . "</td>";
    		$strOption .= "<td>" . $data['LINE'] . "</td>";
    		$strOption .= "<td>" . $data['FACEBOOK'] . "</td>";
			$strOption .= "<td align='center'><a href='detail.php?id=" . $data['ID'] . "' target='_blank'>" . "รายละเอียด" . "</a></td>";
    		$strOption .= "<td>" . "<a href='change-oldstudent.php?id=" . $data['ID'] . "'>" . "แก้ไข " . "</a>" . "|" . "<a href='delete.php?id=" . $data['ID'] . "'>" . " ลบ" . "</a></td>";
    		$strOption .= "</tr>";
		}
	} else {
		while($data = mysqli_fetch_array($result)){
			$i++;
    		$strOption .= "<tr>";
    		$strOption .= "<td align='center'>" . $i . "</td>";
			$strOption .= "<td align='center'>" . $data['YEAR'] . "</td>";
    		$strOption .= "<td>" . $data['FIRSTNAME'] . " " . $data['LASTNAME'] . "</td>";
    		$strOption .= "<td>" . $data['NICKNAME'] . "</td>";
    		$strOption .= "<td align='center'>" . $data['PHONE'] . "</td>";
    		$strOption .= "<td>" . $data['EMAIL'] . "</td>";
    		$strOption .= "<td>" . $data['LINE'] . "</td>";
    		$strOption .= "<td>" . $data['FACEBOOK'] . "</td>";
			$strOption .= "<td align='center'><a href='detail.php?id=" . $data['ID'] . "' target='_blank'>" . "รายละเอียด" . "</a></td>";
    		$strOption .= "<td>" . "<a href='change-oldstudent.php?id=" . $data['ID'] . "'>" . "แก้ไข " . "</a>" . "|" . "<a href='delete.php?id=" . $data['ID'] . "'>" . " ลบ" . "</a></td>";
    		$strOption .= "</tr>";
		}
	}
	
	mysqli_close($link);
	
	echo $strOption;
?>
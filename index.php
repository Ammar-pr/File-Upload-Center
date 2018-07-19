<!doctype>
<html>
<head>
</head>
<body>
<?php
echo"f";
require_once "Classes/PHPExcel.php";
		$tmpfname = "Specs TLX 2015+(1).xlsx";
		$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
		$excelObj = $excelReader->load($tmpfname);
		$worksheet = $excelObj->getSheet(0);
		$lastRow = $worksheet->getHighestRow();
		
		echo "<table>";
		for ($row = 1; $row <= $lastRow; $row++) {
			 echo "<tr><td>";
			 echo $worksheet->getCell('B'.$row)->getValue();
			 echo "</td><td>";
			 echo $worksheet->getCell('C'.$row)->getValue();
			 
			 echo "</td><tr>";
			 echo "121";
			 echo $row;
		}
		echo "</table>";	
		
		// this is just for testing
?>

</body>
</html>
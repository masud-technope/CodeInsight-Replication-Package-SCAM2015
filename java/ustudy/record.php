<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Response Submitted</title>
</head>

<body>

<?php 
$filename="recorded.txt";
$current=file_get_contents($filename);
$line=$_POST["tcase"]."\t".$_POST["fileid"]."\ta=".$_POST["accurate"]."\tp=".$_POST["precise"]."\tc=".$_POST["concise"]."\tu=".$_POST["useful"]."\t".date('Y-m-d H:i:s')."\n";
$updated=$current."\n".$line;
file_put_contents($filename,$updated);
echo "<h2>Response submitted successfully for File ID#".$_POST['fileid']."</h2>";
?>
</body>
</html>

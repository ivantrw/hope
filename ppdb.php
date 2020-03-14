<html>
<head>
<title>Rest Web Services</title>
</head>
<body>
<?php
if (isset ($_POST['Nama'])) {
$url = 'https://littlehope007.000webhostapp.com//ppdb1.php';
//$data = "[{\"Nama\":\".$_POST['Nama'].\",\"NISN\":\".$_POST['NISN'].\",\"Nilai_ujian\":\".$_POST['Nilai_ujian'].\"}]";//
$data="{\"Nama\":\"".$_POST['Nama']."\",\"NISN\":\"".$_POST['NISN']."\",\"Nilai_ujian\":\"".$_POST['Nilai_ujian']."\"}";
echo "datanya ".$data;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
echo "response ".$response;
curl_close($ch);
}
?>
<form method="POST" action="ppdb.php">
<table>
<tr>
<td>Nama</td>
<td><input type="text" name="Nama" id="Nama"></td>
</tr>
<tr>
<td>NISN</td>
<td><input type="text" name="NISN" id="NISN"></td>
</tr>
<tr>
<td>Nilai_ujian</td>
<td><input type="text" name="Nilai_ujian" id="Nilai_ujian"></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="Tambah"></td>
<td></td>
</tr>
</table>
</form>
</body>
</html>



<?php
 
$connect=mysqli_connect("localhost", "id12804623_manca", "#Iv4ntrW667","id12804623_manca");
 
$query = "SELECT * from PKL ";
$result = mysqli_query($connect,$query) or die(mysqli_error());
 
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(

    "Nama" => $row["Nama"],
    "NISN" => $row["NISN"], 
    "Nilai_ujian" => $row["Nilai_ujian"]);
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"MENAMPILKAN DATA MAHASISWA\":" . $data . "}";
?>

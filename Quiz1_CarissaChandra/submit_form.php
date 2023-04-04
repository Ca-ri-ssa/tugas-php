<?php

echo $_POST['nama'];
echo $_POST['dob'];
echo $_POST['divisi'];

$pegawai = file("pegawai.txt");
// echo "<ul>";
foreach($pegawai as $key => $value){
    //echo "<li>$value</li>";
    $pegawai = explode(";", $value);
    // var_dump($pegawai); echo "<br>";
    echo "
            <td>$pegawai[0]</td>
            <td>$pegawai[1]</td>
            <td>$pegawai[2]</td>
            <td>$pegawai[3]</td>
        </tr>";
}
echo "</table>";

//menulis data ke file
$data = $_POST['nama'];
$data = $_POST['dob'];
$data = $_POST['divisi'];
file_put_contents("pegawai.txt", $data, FILE_APPEND);

$pegawai = file("pegawai.txt");
foreach($pegawai as $key => $value){
    //echo "<li>$value</li>";
    $pegawai = explode(";", $value);
    // var_dump($pegawai); echo "<br>";
    echo "<tr>
            <td>$pegawai[0]</td>
            <td>$pegawai[1]</td>
            <td>$pegawai[2]</td>
            <td>$pegawai[3]</td>
        </tr>";
}
?>

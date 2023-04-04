<?php

$pegawai = file("pegawai.txt");
// echo "<ul>";
echo "<table border=1>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Posisi</th>
        </tr>";
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
echo "</table>";

//menulis data ke file
$data = "\n3;Herman;20/08/2003;Marketing;";
file_put_contents("pegawai.txt", $data, FILE_APPEND);

$pegawai = file("pegawai.txt");
echo "<table border=1>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Posisi</th>
        </tr>";
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

<?php

$nama = "Budi";

//echo berfungsi sbg print
echo "Hello " . $nama;
echo "<br>";

if($nama=="Carissa"){
    echo "Gender = Wanita";
}
elseif($nama=="Joko"){
    echo "Gender = Pria";
}
else{
    echo "Gender = Ga Jelas";
}

echo "<br>";

$x = 10;

while($x >= 1){
    echo $x;
    echo "<br>";
    $x--;
}
?>
<style>
    .kuning{
        background-color: yellow;
    }
</style>
<table border=1>
    <tr>
        <th>No. </th>
        <th>Data</th>
    </tr>
<?php
for ($i=0; $i < 20; $i++) { 
    # code...
    //echo "<li>$i</li>";
    //echo '<li>' . $i . '</li>';
    $warna = " ";
    if($i % 2 == 0){
        $warna = "kuning";
    }
    echo '<tr class="'. $warna .'"> <td>'. $i . '</td> <td>Data ke ' . $i . '</td> </tr>';
}
?>
</table>
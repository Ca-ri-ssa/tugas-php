<!-- <style>
    .kuning{
        background-color: yellow;
    }
</style>
<table border=1>
    <tr>
        <th>No. </th>
        <th>Faktorial</th>
    </tr>
<?php
# code...
//echo "<li>$i</li>";
//echo '<li>' . $i . '</li>';
$factorial = 1;
for ($n = 1; $n < 20; $n++){
    $factorial *= $n;
    $warna = " ";
    if($n % 2 == 0){
        $warna = "kuning";
    }
    echo '<tr class="'. $warna .'"> <td>'. $n . '</td> <td> ' . $factorial . '</td> </tr>';
}
?>
</table> -->

<?php
    $nama = "<strong>Karen</strong>";
    $judul = "<strong>Tabel Faktorial</strong>";
    echo $nama;
    echo "<br>";
    echo $judul;
    echo "<br>";
?>

<style>
    .merah{
        background-color: #f00;
    }
    .kuning{
        background-color: #fbf6cc;
    }
    .biru{
        background-color: #cce8fb;
    }
    .td{
        width: 100px;
    }
    .center{
        text-align: center;
    }
    table{
        border-style: solid;
        padding: 2px;
        width: 500px;
    }
</style>

<table>
    <tr style = "background-color: #f00; color: white;">
        <th style="padding: 0 10px 0;">Faktorial</th>
        <th>Hasil</th>
    </tr>

    <?php

        echo "<br>";

        for ($i=1; $i < 11; $i++) {

            $warna = "";

            $tengah = "center";

            $y=1;

            if($i % 2 != 0){

                $warna = "kuning";

            }



            else if($i % 2 == 0){

                $warna = "biru";

            }



            for($x=1; $x<=$i; $x++)

            {

                $y=$y*$x;

            }



            echo '<tr class="'.$warna.'">

            <td class="'.$tengah.'"> <strong>'. $i .' </strong></td>

            <td class="'.$warna.' , '.$tengah.'";> <strong>'.$y.'</strong></td>

            </tr>';

        }

    ?>

</table>
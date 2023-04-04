<style>
    .kuning{
        background-color: #fbf6cc;
    }
    .biru{
        background-color: #cce8fb;
    }
    .center{
        text-align: center;
    }
    .faktorial{
        padding: 10px;
    }
    th{
        background-color: #f00;
        color: white;
    }
    table{
        text-align: center;
        border-style: solid;
    }
</style>

<div class="faktorial">
    <h1 style="padding: 0 75px 0;">Tabel Faktorial</h1>
    <table>
        <tr>
            <th style="padding: 0 25px 0;">Faktorial</th>
            <th style="padding: 0 100px 0;">Hasil</th>
        </tr>
    <?php
    $factorial = 1;
    for ($n = 1; $n < 11; $n++){
        $factorial *= $n;
        $warna = " ";
        if($n % 2 == 0){
            $warna = "biru";
        }
        else{
            $warna = "kuning";
        }
        echo '<tr class="'. $warna .'"> <td>'. $n . '</td> <td> ' . $factorial . '</td> </tr>';
    }
    ?>
    </table>
</div>
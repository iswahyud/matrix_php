<?php

//definisi array
$array3kuadran = array(
    array(11, 2, 4),
    array(4, 5, 6),
    array(10, 8, -12)
);

$array5kuadran = array(
    array(11, 2, 4, 6, 8),
    array(4, 5, 6, 1, 9),
    array(10, 8, 1, -2, 5),
    array(6, 3, 1, 7, 12),
    array(11, 5, 0, -8, 4)
);

//fungsi selisih
function cariSelisih(array $array)
{
    $countArray = count($array);
    $diagonal_1 = 0;
    $diagonal_2 = 0;
    $baris = 0;

    for ($i = 0; $i < $countArray; $i++) {
        $diagonal_1 += $array[$baris++][$i];
        $diagonal_2 += $array[$countArray - $baris][$i];
    }
    $result = abs($diagonal_1 - $diagonal_2);
    return $result;
}

//output
$hasil = cariSelisih($array3kuadran);
echo $hasil;

?>
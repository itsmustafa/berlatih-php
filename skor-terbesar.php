<?php
function skor_terbesar($arr){
    $hitung = count($arr);
    $array = [];
    for($i=0; $i<=$hitung-1; $i++){
        if($array[$arr[$i]['kelas']]['nama'] < $arr[$i]['nilai']){
            $array[$arr[$i]['kelas']]['nama'] = $array[$i]['nama'];
            $array[$arr[$i]['kelas']]['kelas'] = $array[$i]['kelas'];
            $array[$arr[$i]['kelas']]['nilai'] = $array[$i]['nilai'];
        }
    }
}

// TEST CASES
$arr = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($array));
/* OUTPUT
Array (
    [Laravel] => Array
        (
            [nama] => Aghnat
            [kelas] => Laravel
            [nilai] => 90
        )
    [React Native] => Array
        (
            [nama] => Regi
            [kelas] => React Native
            [nilai] => 86
        )
    [React JS] => Array
                (
            [nama] => Indra
            [kelas] => React JS
            [nilai] => 85
                )
)
*/
?>
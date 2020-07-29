<?php
function skor_terbesar($arr){
    $output=[];
    $nilai=0;
    $nilai2=0;
    $nilai3=0;
    foreach ($arr as $key => $value) {
      if ($value['nilai']>$nilai && $value['kelas'] == 'Laravel'){
        $nilai=$value['nilai'];
      }elseif ($value['nilai']>$nilai2 && $value['kelas'] == 'React Native'){
        $nilai2=$value['nilai'];
      }elseif ($value['nilai']>$nilai3 && $value['kelas'] == 'React JS'){
        $nilai3=$value['nilai'];
      }else{
        continue;
      }
      $output[$value['kelas']] =
        [
          'nama' => $value['nama'],
          'kelas' => $value['kelas'],
          'nilai' => $value['nilai'],
        ];
    }
    return $output;
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

echo "<pre>";
print_r(skor_terbesar($arr));
echo "</pre>";
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
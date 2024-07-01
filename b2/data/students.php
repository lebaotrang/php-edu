<?php
$students = [
    [
        'ten' => 'Nguyen Van A',
        'dtb' => 8.5
    ],
    [
        'ten' => 'Le Thi B',
        'dtb' => 7.0
    ],
    [
        'ten' => 'Tran Van C',
        'dtb' => 6.5
    ],
    [
        'ten' => 'Pham Thi D',
        'dtb' => 9.0
    ],
    [
        'ten' => 'Hoang Van E',
        'dtb' => 5.5
    ],
    [
        'ten' => 'Vu Thi F',
        'dtb' => 7.8
    ]
];

function xepLoai($dtb) {
    if($dtb>=9) {
        return "Xuat sac";
    } elseif($dtb>=8) {
        return "Giỏi";
    } elseif($dtb>=7) {
        return "Khá";
    } elseif($dtb>=6) {
        return "Trung bình";
    } else {
        return "Yếu";
    }
}

foreach ($students as $key => $student) {
    echo $key+1;
    echo "/ ".$student["ten"];
    $loai = xepLoai($student["dtb"]);
    echo "-".$loai;
    echo "<br/>";
}
?>
<?php
/* BT1
    mã hóa email davidanthony@gmail.com -> dav*******@gmail.com
*/
$email = "johnsmith123@yahoo.com";
$before_email = substr($email, 0, 3);
$code = "*******";
$at_pos = strpos($email, "@");
$end_email = substr($email, $at_pos);
$a = $before_email.$code.$end_email;
// echo $a;





/*  BT2
    mã hóa số đt 0123456789 -> 012****789
*/
function maskPhoneNumber($phoneNumber) {
    // Kiểm tra độ dài của số điện thoại
    if (strlen($phoneNumber) != 10) {
        return "Số điện thoại không hợp lệ";
    }
    // Mã hóa số điện thoại
    $maskedNumber = substr_replace($phoneNumber, '****', 3, 4);
    return $maskedNumber;
}
// Ví dụ sử dụng
$phone = "0123456789";
echo maskPhoneNumber($phone);






/*
    BT3: https://e.vnexpress.net/news/travel/china-finland-enter-finale-of-da-nang-international-firework-festival-4764656.html
    title:      "China Finland enter finale of Da Nang international firework festival" 
    -> slug:    "china-finland-enter-finale-of-da-nang-international-firework-festival" "BĐS Đà Nẵng đón cơ hội từ những chính sách, quy hoạch mới"
*/
$title = "China, Finland enter finale of Da Nang international firework 1st festival";
$str = strtolower($title);
$pattern ="/[^a-z0-9]+/";
$slug = preg_replace($pattern, "-", $str);
// echo $slug;
?>
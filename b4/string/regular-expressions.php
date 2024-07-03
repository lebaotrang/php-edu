<?php
// 1. Kiểm tra địa chỉ email
$email = "example@example.com";
if (preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
    echo "Email hợp lệ";
} else {
    echo "Email không hợp lệ";
}



// 2. Kiểm tra số điện thoại (định dạng 10 chữ số)
$phoneNumber = "0123456789";
if (preg_match("/^\d{10}$/", $phoneNumber)) {
    echo "Số điện thoại hợp lệ";
} else {
    echo "Số điện thoại không hợp lệ";
}


// 3. Kiểm tra URL
$url = "http://www.example.com";
if (preg_match("/\b((https?|ftp):\/\/[-\w+&@#\/%?=~_|!:,.;]*[-\w+&@#\/%=~_|])/i", $url)) {
    echo "URL hợp lệ";
} else {
    echo "URL không hợp lệ";
}


// 4. Kiểm tra mật khẩu (ít nhất 8 ký tự, bao gồm ít nhất một chữ cái và một số)
$password = "Password1";
if (preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", $password)) {
    echo "Mật khẩu hợp lệ";
} else {
    echo "Mật khẩu không hợp lệ";
}



// 5. Kiểm tra tên người dùng (chỉ chứa chữ cái, số, dấu gạch dưới và dài từ 3 đến 16 ký tự)
$username = "user_name123";
if (preg_match("/^[a-zA-Z0-9_]{3,16}$/", $username)) {
    echo "Tên người dùng hợp lệ";
} else {
    echo "Tên người dùng không hợp lệ";
}



//  6. Kiểm tra ngày tháng (định dạng YYYY-MM-DD)
$date = "2023-07-02";
if (preg_match("/^\d{4}-\d{2}-\d{2}$/", $date)) {
    echo "Ngày hợp lệ";
} else {
    echo "Ngày không hợp lệ";
}

?>


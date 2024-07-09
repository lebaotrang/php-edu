<?php
function deleteDirectory($dir) {
    if (!is_dir($dir)) {
        echo "Thư mục không tồn tại.";
        return false;
    }
    // Loại bỏ hai mục đặc biệt . và .. từ danh sách các tệp và thư mục.
    $files = array_diff(scandir($dir), array('.', '..')); // []
    foreach ($files as $file) {
        $filePath = "$dir/$file";
        if (is_dir($filePath)) {
            deleteDirectory($filePath); // sử dụng đệ quy
        } else {
            unlink($filePath);
        }
    }
    return rmdir($dir);
}

// Sử dụng hàm để xóa thư mục
$dirPath = 'images/';
if (deleteDirectory($dirPath)) {
    echo "Thư mục đã được xóa thành công.";
} else {
    echo "Lỗi: Không thể xóa thư mục.";
}

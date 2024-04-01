<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg", "jpeg", "png");

    if (in_array($file_ext, $allowedExtensions) === false) {
        $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, atau PNG";
    }

    $maxFileSize = 10 * 1024 * 1024;
    if ($file_size > $maxFileSize) {
        $errors[] = "Ukuran file tidak boleh lebih dari 2 MB";
    }

    if (empty($errors)) {
        $targetDirectory = "documents/";
        if (!file_exists($targetDirectory)) {
            mkdir($targetDirectory, 0777, true);
        }

        $targetFile = $targetDirectory . $file_name;
        if (move_uploaded_file($file_tmp, $targetFile)) {
            echo "File berhasil diunggah";
        } else {
            echo "Gagal mengunggah file";
        }
    } else {
        echo implode("<br>", $errors);
    }
} else {
    echo "Tidak ada file yang diunggah";
}
?>
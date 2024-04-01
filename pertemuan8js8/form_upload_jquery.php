<!DOCTYPE html>
<html>
<head>
    <title>Unggah File Gambar dengan jQuery</title>
</head>
<body>
    <h2>Unggah Gambar</h2>
    <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file" accept=".jpg, .jpeg, .png"/>
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status"></div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#upload-form").submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "upload_jquery.php",
                type: "post",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    $("#status").html(response);
                },
                error: function(){
                    $('#status').html('Terjadi kesalahan saat mengunggah file');
                }
            });
        });
    });
    </script>
</body>
</html>
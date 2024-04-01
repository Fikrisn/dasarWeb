<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama: </label><br>
        <input type="text" id="nama" name="nama">
        <br>

        <label for="email">Email :</label><br>
        <input type="text" id="email" name="email">
        <br><br>

        <input type="submit" value="Submit">
    </form>
    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault(); // Menghentikan pengiriman formulir secara default

            var nama = $("#nama").val();
            var email = $("#email").val();
            var valid = true;

            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else {
                $("#email-error").text("");
            }

            if (valid) {
                // Mengirim data formulir menggunakan AJAX
                $.ajax({
                    type: "POST",
                    url: "proses_validasi.php",
                    data: $("#myForm").serialize(), // Mengambil data formulir
                    success: function(response) {
                        // Menangani respons dari server
                        alert("Data berhasil dikirim: " + response);
                    },
                    error: function(xhr, status, error) {
                        // Menangani kesalahan jika ada
                        alert("Terjadi kesalahan: " + error);
                    }
                });
            }
        });
    });
</script>


</body>
</html>
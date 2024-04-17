<?php
class database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database  = "prakwebdb";
    public $koneksi;

    public function __construct(){
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->database);

        if($this->koneksi->connect_error){
            die("koneksiection failed: " . $this->koneksi->connect_error);
        }
    }
}
?>
<?php

class DB {
    var $db_host = "localhost";
    var $db_user = "root";
    var $db_pass = "";
    var $db_name = "mvp_tugas"; // <--- Harus sama dengan nama DB yg barusan dibuat
    var $db_link = "";
    var $result = 0;

    function __construct() {
        $this->db_link = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        if (!$this->db_link) {
            die("Gagal Konek Database: " . mysqli_connect_error());
        }
    }

    function execute($query) {
        $this->result = mysqli_query($this->db_link, $query);
        return $this->result;
    }

    function getResult() {
        return $this->result;
    }

    function close() {
        mysqli_close($this->db_link);
    }
}
?>
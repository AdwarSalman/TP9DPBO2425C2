<?php
class Tim {
    var $db = null;

    function __construct($db) {
        $this->db = $db;
    }

    function getTim() {
        $query = "SELECT * FROM tim";
        return $this->db->execute($query);
    }

    function getTimById($id) {
        $query = "SELECT * FROM tim WHERE id=$id";
        return $this->db->execute($query);
    }

    function addTim($data) {
        $nama = $data['nama_tim'];
        $negara = $data['negara'];
        $tahun = $data['tahun_berdiri'];
        
        $query = "INSERT INTO tim (nama_tim, negara, tahun_berdiri) VALUES ('$nama', '$negara', '$tahun')";
        return $this->db->execute($query);
    }

    function updateTim($id, $data) {
        $nama = $data['nama_tim'];
        $negara = $data['negara'];
        $tahun = $data['tahun_berdiri'];

        $query = "UPDATE tim SET nama_tim='$nama', negara='$negara', tahun_berdiri='$tahun' WHERE id=$id";
        return $this->db->execute($query);
    }

    function deleteTim($id) {
        $query = "DELETE FROM tim WHERE id=$id";
        return $this->db->execute($query);
    }

    // --- FUNGSI PENTING YANG TADINYA HILANG ---
    function getResult() {
        return $this->db->getResult();
    }
}
?>
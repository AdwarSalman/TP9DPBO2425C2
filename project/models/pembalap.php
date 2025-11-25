<?php

class Pembalap {
    var $db = null;

    function __construct($db) {
        $this->db = $db;
    }

    function getPembalap() {
        $query = "SELECT * FROM pembalap";
        return $this->db->execute($query);
    }

    function getPembalapById($id) {
        $query = "SELECT * FROM pembalap WHERE id=$id";
        return $this->db->execute($query);
    }

    function addPembalap($data) {
        $nama = $data['nama'];
        $asal = $data['asal'];
        $tim = $data['tim'];
        $query = "INSERT INTO pembalap (nama, asal, tim) VALUES ('$nama', '$asal', '$tim')";
        return $this->db->execute($query);
    }

    function updatePembalap($id, $data) {
        $nama = $data['nama'];
        $asal = $data['asal'];
        $tim = $data['tim'];
        $query = "UPDATE pembalap SET nama='$nama', asal='$asal', tim='$tim' WHERE id=$id";
        return $this->db->execute($query);
    }

    function deletePembalap($id) {
        $query = "DELETE FROM pembalap WHERE id=$id";
        return $this->db->execute($query);
    }
    
    // --- INI FUNGSI YANG TADI HILANG ---
    function getResult() {
        return $this->db->getResult();
    }
}
?>
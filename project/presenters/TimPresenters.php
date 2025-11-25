<?php

include_once("models/Tim.php");

class TimPresenter {
    var $tabel;
    var $data = [];

    function __construct() {
        global $db; // Mengambil koneksi global dari index.php
        $this->tabel = new Tim($db);
    }

    // Logika untuk menampilkan list data
    function processList() {
        $this->tabel->getTim();
        while ($row = $this->tabel->getResult()->fetch_assoc()) {
            $this->data[] = $row;
        }
        // Data ini akan diakses oleh View (tim_list.php)
    }

    // Logika untuk menambah data
    function add($data) {
        return $this->tabel->addTim($data);
    }

    // Logika untuk mengambil 1 data (form edit)
    function getById($id) {
        $this->tabel->getTimById($id);
        return $this->tabel->getResult()->fetch_assoc();
    }

    // Logika update
    function update($id, $data) {
        return $this->tabel->updateTim($id, $data);
    }

    // Logika delete
    function delete($id) {
        return $this->tabel->deleteTim($id);
    }
}
?>
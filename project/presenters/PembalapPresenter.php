<?php

include_once("models/Pembalap.php");

class PembalapPresenter {
    var $tabel;
    var $data = [];

    function __construct() {
        global $db;
        $this->tabel = new Pembalap($db);
    }

    function processList() {
        $this->tabel->getPembalap();
        while ($row = $this->tabel->getResult()->fetch_assoc()) {
            $this->data[] = $row;
        }
    }

    function add($data) {
        return $this->tabel->addPembalap($data);
    }

    function getById($id) {
        $this->tabel->getPembalapById($id);
        return $this->tabel->getResult()->fetch_assoc();
    }

    function update($id, $data) {
        return $this->tabel->updatePembalap($id, $data);
    }

    function delete($id) {
        return $this->tabel->deletePembalap($id);
    }
}
?>
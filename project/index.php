<?php
// FILE UTAMA: ROUTING

include_once("includes/DB.php");
$db = new DB(); // Koneksi Global

// Ambil action dari URL, default kosong (ke list pembalap)
$action = isset($_GET['action']) ? $_GET['action'] : '';

// ==========================================
// ROUTING PEMBALAP (Default)
// ==========================================
if ($action == '' || $action == 'pembalap') {
    include_once("presenters/PembalapPresenter.php");
    $presenter = new PembalapPresenter();
    $presenter->processList();
    $data = $presenter->data;
    include("views/pembalap_list.php");
}

elseif ($action == 'add') {
    // AMBIL DATA TIM DULU BUAT DROPDOWN
    include_once("models/Tim.php");
    $timModel = new Tim($db);
    $timModel->getTim();
    $data_tim = [];
    while ($row = $timModel->getResult()->fetch_assoc()) {
        $data_tim[] = $row;
    }

    $val = null;
    include("views/pembalap_form.php");
}
elseif ($action == 'edit') {
    // AMBIL DATA TIM JUGA DI SINI
    include_once("models/Tim.php");
    $timModel = new Tim($db);
    $timModel->getTim();
    $data_tim = [];
    while ($row = $timModel->getResult()->fetch_assoc()) {
        $data_tim[] = $row;
    }

    include_once("presenters/PembalapPresenter.php");
    $presenter = new PembalapPresenter();
    $val = $presenter->getById($_GET['id']);
    include("views/pembalap_form.php");
}

elseif ($action == 'save') {
    include_once("presenters/PembalapPresenter.php");
    $presenter = new PembalapPresenter();
    if ($_POST['id']) {
        $presenter->update($_POST['id'], $_POST);
    } else {
        $presenter->add($_POST);
    }
    header("Location: index.php"); // Balik ke home
}
elseif ($action == 'delete') {
    include_once("presenters/PembalapPresenter.php");
    $presenter = new PembalapPresenter();
    $presenter->delete($_GET['id']);
    header("Location: index.php");
}

// ==========================================
// ROUTING TIM (Tugas Tambahan)
// ==========================================
elseif ($action == 'tim') {
    include_once("presenters/TimPresenters.php");
    $presenter = new TimPresenter();
    $presenter->processList();
    $data = $presenter->data;
    include("views/tim_lists.php");
}
elseif ($action == 'tim_add') {
    $val = null;
    include("views/tim_form.php");
}
elseif ($action == 'tim_edit') {
    include_once("presenters/TimPresenters.php");
    $presenter = new TimPresenter();
    $val = $presenter->getById($_GET['id']);
    include("views/tim_form.php");
}
elseif ($action == 'tim_save') {
    include_once("presenters/TimPresenters.php");
    $presenter = new TimPresenter();
    if ($_POST['id']) {
        $presenter->update($_POST['id'], $_POST);
    } else {
        $presenter->add($_POST);
    }
    header("Location: index.php?action=tim");
}
elseif ($action == 'tim_delete') {
    include_once("presenters/TimPresenters.php");
    $presenter = new TimPresenter();
    $presenter->delete($_GET['id']);
    header("Location: index.php?action=tim");
}

$db->close();
?>
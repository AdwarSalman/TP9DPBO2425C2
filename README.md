# TP10DPBO2025 - Sistem Manajemen F1 (PHP MVP)
Tugas Praktikum 10 DPBO

Aplikasi ini merupakan implementasi sistem manajemen data Balapan F1 (Pembalap & Tim) berbasis PHP Native yang menggunakan arsitektur **MVP (Model-View-Presenter)**. Fitur utama meliputi **CRUD** (Create, Read, Update, Delete) pada dua tabel yang saling berelasi.

## Janji
Saya [Nama Lengkap Anda] dengan NIM [NIM Anda] mengerjakan Tugas Praktikum 10 dalam mata kuliah Desain Pemrograman Berorientasi Objek. Untuk Keberkahan-Nya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Desain Program

Struktur direktori:

```text
├── index.php               # Entry point utama (Routing)
├── mvp_tugas.sql           # SQL schema database
├── includes/
│   └── DB.php              # Class koneksi database
├── models/
│   ├── Pembalap.php        # Model logika query tabel pembalap
│   └── Tim.php             # Model logika query tabel tim
├── presenters/
│   ├── PembalapPresenter.php # Presenter pembalap
│   └── TimPresenter.php      # Presenter tim
├── templates/
│   └── skin.php            # Header, Navbar & Bootstrap wrapper
└── views/
    ├── pembalap_form.php   # Form tambah/edit pembalap
    ├── pembalap_list.php   # Tabel data pembalap
    ├── tim_form.php        # Form tambah/edit tim
    └── tim_list.php        # Tabel data tim
```

## Arsitektur: MVP (Model - View - Presenter)

- **Model** (`models/`): Mengatur akses data dan logika query ke database (Tabel `pembalap` dan `tim`).
- **View** (`views/`): Menyediakan antarmuka (UI) kepada user untuk menampilkan data dan form input.
- **Presenter** (`presenters/`): Bertindak sebagai jembatan yang menangani permintaan dari View dan mengambil data dari Model.

---

## Fitur

- 🔍 Melihat daftar Pembalap dan Tim
- ➕ Menambahkan Pembalap dan Tim baru
- ✏️ Mengedit data (Update)
- 🗑️ Menghapus data (Delete)
- 🔗 **Relasi Data**: Pilihan Tim pada form Pembalap menggunakan dropdown otomatis dari database.

## Alur Program

- **index.php** menerima request dan menentukan logika berdasarkan parameter `?action=`.
- Jika action kosong, default menampilkan list Pembalap.
- **Presenter** dipanggil sesuai kebutuhan (misal: `PembalapPresenter` atau `TimPresenter`).
- **Presenter** meminta data ke **Model** (`get`, `add`, `update`, `delete`).
- **Model** mengeksekusi query SQL ke database `mvp_tugas`.
- Data dikembalikan ke Presenter, lalu dikirim ke **View** untuk ditampilkan ke pengguna.

## Dokumentasi Program

https://github.com/user-attachments/assets/ffd79599-6816-42f7-ad39-4dd8143efbe9



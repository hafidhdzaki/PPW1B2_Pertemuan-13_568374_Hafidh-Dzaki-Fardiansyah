# 📚 Pemrograman Web — Kumpulan Tugas Pertemuan

Repository ini berisi kumpulan tugas mata kuliah **Pemrograman Web** dari Pertemuan 2 hingga Pertemuan 13, mencakup materi HTML, CSS, JavaScript, PHP, hingga koneksi database MySQL.

---

## 🗂️ Struktur Folder

```
├── Pertemuan 2/     → Dasar HTML (teks, list, paragraf, formatting)
├── Pertemuan 3/     → Semantik HTML, tabel, iframe, gambar, link
├── Pertemuan 4/     → Form HTML, canvas, input, tombol
├── Pertemuan 5/     → CSS dasar (tipografi, indentasi, line-height)
├── Pertemuan 6/     → CSS lanjutan (warna, navigasi, responsive)
├── Pertemuan 7/     → CSS & layout (Flexbox / Bootstrap)
├── Pertemuan 8/     → Dashboard UI & komponen Bootstrap
├── Pertemuan 9/     → Halaman profil dengan aset gambar & CSS terstruktur
├── Pertemuan 10/    → JavaScript dasar & interaksi DOM
├── Pertemuan 11/    → PHP dasar (variabel, fungsi, komentar, profil)
├── Pertemuan 12/    → PHP + MySQL CRUD (tambah, edit, hapus, tampil data)
```

---

## 🛠️ Teknologi yang Digunakan

| Teknologi | Keterangan |
|-----------|------------|
| HTML5 | Struktur halaman web |
| CSS3 | Styling dan layout responsif |
| JavaScript | Interaksi dan manipulasi DOM |
| PHP | Server-side scripting |
| MySQL | Database (via MySQLi) |
| Bootstrap 5 | Framework CSS untuk UI |

---

## 🚀 Cara Menjalankan

### Pertemuan 2–10 (HTML / CSS / JS)
Cukup buka file `.html` langsung di browser — tidak memerlukan server.

### Pertemuan 11 (PHP dasar)
1. Pastikan sudah menginstal **XAMPP**, **Laragon**, atau web server lokal lainnya.
2. Letakkan folder `Pertemuan 11` di dalam direktori `htdocs` (XAMPP) atau `www`.
3. Akses melalui browser: `http://localhost/Pertemuan-11/`

### Pertemuan 12 (PHP + MySQL)
1. Jalankan **Apache** dan **MySQL** dari XAMPP/Laragon.
2. Buka **phpMyAdmin** dan import file `data_mahasiswa.sql`.
3. Sesuaikan konfigurasi koneksi di `config.php` jika diperlukan:
   ```php
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db   = "data_mahasiswa";
   ```
4. Letakkan folder `Pertemuan 12` di `htdocs`, lalu akses `http://localhost/Pertemuan-12/`.

---

## 📋 Ringkasan Materi per Pertemuan

| Pertemuan | Topik Utama |
|-----------|-------------|
| 2 | Dasar HTML: paragraf, teks, list, formatting, preformat |
| 3 | Semantik HTML5, tabel, iframe, gambar, hyperlink |
| 4 | Form: input, checkbox, radio, select, canvas, submit |
| 5 | CSS tipografi: indentasi, letter/word spacing, line-height, white-space |
| 6 | CSS warna, navigasi list, breakpoint responsif |
| 7 | Flexbox / Bootstrap: layout tugas (3 halaman) |
| 8 | Dashboard UI dengan Bootstrap, komponen kartu dan tabel |
| 9 | Halaman profil lengkap dengan struktur aset (css + gambar) |
| 10 | JavaScript: DOM, event, fungsi, manipulasi elemen |
| 11 | PHP: variabel, fungsi, komentar, profil, form sederhana |
| 12 | PHP CRUD: koneksi MySQL, tambah/edit/hapus/tampil data mahasiswa |

---

## 👤 Informasi

- **Mata Kuliah**: Pemrograman Web  
- **Institusi**: Universitas Gadjah Mada  
- **Bahasa**: HTML, CSS, JavaScript, PHP  

# 📚 Timedoor Bookstore Backend Test (Laravel)

Proyek ini adalah hasil pengerjaan ujian **Backend Programming Test** dari PT. Timedoor Indonesia, dengan studi kasus sistem pemeringkatan buku dan popularitas penulis menggunakan Laravel 10 dan PHP 8.1.

---

## 🔧 Spesifikasi Proyek

- **Framework**: Laravel 10.x
- **Bahasa**: PHP 8.1+
- **Database**: MySQL
- **Faker**: Untuk generate data dummy
- **Jumlah Data**:
  - 1.000 Authors
  - 3.000 Categories
  - 100.000 Books
  - 500.000 Ratings

---

## 🚀 Fitur Aplikasi

### 1. 📖 Daftar Buku (Book List)
- Menampilkan 10 buku teratas berdasarkan rata-rata rating
- Filter:
  - Jumlah data per halaman (10 s/d 100)
  - Pencarian berdasarkan judul buku atau nama penulis

### 2. 👑 Top 10 Penulis Terpopuler
- Berdasarkan jumlah vote (jumlah rating > 5)
- Diurutkan dari penulis dengan vote terbanyak

### 3. ✍️ Form Input Rating
- Memilih author lalu memilih buku dari author tersebut
- Memberikan rating dari 1 sampai 10
- Setelah submit, diarahkan ke halaman daftar buku

---

## 📥 Langkah Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/username/timedoor-bookstore.git
cd timedoor-bookstore
```

### 2. Install Dependency
```bash
composer install
```

### 3. Konfigurasi `.env`
Salin file `.env.example` menjadi `.env` dan sesuaikan:
```dotenv
DB_DATABASE=timedoor
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 4. Generate App Key
```bash
php artisan key:generate
```

### 5. Migrasi & Seeder
> **Catatan:** proses ini membutuhkan waktu karena volume data besar.
```bash
php artisan migrate --seed
```

---

## 💻 Menjalankan Aplikasi

```bash
php artisan serve
```

Buka browser ke: [http://localhost:8000](http://localhost:8000)

---

## 🗒️ Catatan Tambahan

- Tidak menggunakan cache (sesuai ketentuan soal)
- Semua data menggunakan Faker (tidak menggunakan dump SQL)
- Layout dibuat sesederhana mungkin tanpa fokus pada desain UI/UX
- Disarankan menggunakan mesin dengan spesifikasi cukup untuk handle seed data besar

---

## 👤 Author

**Muhammad Ichsan**  
Fresh Graduate Informatika  
Email: mhmmd.ichsan321@gmail.com  
GitHub: [https://github.com/MhmmdIchsan](https://github.com/MhmmdIchsan)

---

## ✅ Status Pengerjaan

✅ Struktur database & relasi  
✅ Seeder data besar  
✅ Book list + filter  
✅ Top 10 author by vote > 5  
✅ Form input rating  
✅ Blade view sederhana  
✅ Dokumentasi README

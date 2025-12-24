# PDN ShortCode

**PDN ShortCode** adalah plugin WordPress sederhana yang menyediakan **widget shortcode fleksibel**.  
Plugin ini memudahkan Anda menampilkan shortcode (contoh: Instagram Gallery) langsung dari **Appearance → Widgets** tanpa menulis kode.

Plugin ini dibuat dengan standar WordPress yang aman, ringan, dan menghindari error seperti:
SyntaxError: JSON.parse: unexpected non-whitespace character

---

## ✨ Fitur

- Widget shortcode yang bisa dikonfigurasi dari admin
- Mendukung semua shortcode WordPress
- Default shortcode: [insta-gallery id="0"]
- Aman dari error JSON / REST / AJAX
- Struktur HTML rapi & mudah di-style
- Cocok untuk theme apa pun

---

## 📦 Instalasi

### Cara Manual
1. Download atau clone plugin ini
2. Upload folder ke: wp-content/plugins/pdn-shortcode
3. Masuk ke **Dashboard WordPress**
4. Aktifkan plugin **PDN ShortCode**

---

## ⚙️ Cara Penggunaan

1. Masuk ke: Appearance → Widgets
2. Tambahkan widget **PDN ShortCode**
3. Isi:
- **Judul Widget** (opsional)
- **Shortcode**, contoh:
  ```
  [insta-gallery id="0"]
  ```
4. Simpan widget

Widget akan otomatis menampilkan shortcode di frontend.

---

## 🧩 Contoh Shortcode yang Bisa Digunakan

```text
[insta-gallery id="0"]
[gallery ids="1,2,3"]
[contact-form-7 id="123"]
```
### Struktur HTML Output

Widget menghasilkan struktur HTML seperti berikut:

<div class="pdn-widget section-wrapper scholarship-widget-wrapper">
  <div class="pdn-container mt-container">
    <div class="pdn-title-wrapper section-title-wrapper clearfix">
      <h2 class="widget-title">Judul Widget</h2>
    </div>
    <div class="pdn-content mt-container">
      <!-- Output shortcode -->
    </div>
  </div>
</div>

### Styling (Opsional)
Tambahkan CSS berikut ke theme Anda:
```text
.pdn-widget {
    margin-bottom: 30px;
}

.pdn-title-wrapper {
    margin-bottom: 10px;
}

.pdn-widget-divider {
    margin-top: 30px;
    opacity: 0.2;
}
```

### Keamanan & Stabilitas

Plugin ini:

Tidak menggunakan echo debug
Tidak mengeluarkan output di luar widget
Menggunakan sanitize_text_field, esc_html, dan wp_kses_post
Tidak menutup tag ?> di akhir file
Aman untuk REST API, Gutenberg, dan AJAX

### Persyaratan
WordPress 5.0 atau lebih baru
PHP 7.4 atau lebih baru

### Author
Pudin Saepudin
Website: https://italazhar.com
Instagram : https://instagram.com/pudin.ira

### Lisensi
Plugin ini dirilis di bawah lisensi GPL v2 atau lebih baru.

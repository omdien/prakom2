<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Butir;
use App\Models\Jenjang;
use App\Models\Kategori01;
use App\Models\Kategori02;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //Butir Kegiatan
        //1.
        Butir::create([
            'but_id' => '01A01',
            'kategori02_id' => 1,
            'but_kegiatan' => 'Melakukan Pemenuhan Permintaan dan Layanan Teknologi Informasi',
            'but_slug' => 'melakukan-pemenuhan-permintaan-dan-layanan-teknologi-informasi',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'service,information,technologi',
            'but_desc' => '<p>Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user atau pengguna yang merupakan bagian dari operasi normal institusi. Tujuan dari proses ini adalah memenuhi permintaan pengguna terhadap permintaan peralatan/peranti TI dan atau layanan TI. Pengguna merupakan pegawai, klien, unit organisasi, dan tim TI, yang memanfaatkan layanan TI sebagai pengguna akhir.</p><p>Tahapan kegiatan ini mencakup namun tidak terbatas pada:</p><p>1. menerima permintaan layanan TI;</p><p>2. memvalidasi permintaan layanan TI;</p><p>3. mencatat permintaan layanan TI;</p><p>4. mendefinisi permintaan layanan TI;</p><p>5. mendefinisi kategori permintaan layanan TI;</p><p>6. membuat ringkasan permintaan layanan TI;</p><p>7. membuat deskripsi permintaan layanan TI; dan</p><p>8. menentukan status penanganan permintaan layanan TI.</p>',
            'but_satuan' => 'Laporan pemenuhan permintaan dan layanan TI',
            'but_kredit' => 0.15,
            'but_batasan' => '1 (satu) laporan per bulan',
            'but_fisik' => 'Laporan pemenuhan permintaan dan layanan TI mencakup namun tidak terbatas pada: 1. banyaknya permintaan layanan yang dipenuhi 2. jenis layanan yang diminta dan penjelasan rincinya 3. sarana yang digunakan dan 4. informasi ketersediaan dan cara mendapatkan layanan',
            'jenjang_id' => 2,
            'but_contoh' => 'Andi, A.Md., Pranata Komputer Mahir, telah menyelesaikan beberapa permintaaan layanan TI selama satu tahun (12 bulan) bekerja dan menyusun laporan setiap minggunya yang berisi detail layanan yang sudah ditangani. Maka Andi akan mendapatkan angka kredit sebesar 12 x 0,15 = 1,8'
        ]);

        //2.
        Butir::create([
            'but_id' => '01B01',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan pengumpulan informasi mengenai data instansi',
            'but_slug' => 'Melakukan pengumpulan informasi mengenai data instansi',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'colecting,data,information',
            'but_desc' => 'Melakukan pengumpulan informasi mengenai data instansi adalah melakukan identifikasi dan pendokumentasian informasi yang dihasilkan suatu instansi, maupun kebutuhan data yang diperlukan oleh instansi. Tahapan kegiatan ini mencakup namun tidak terbatas pada: mengumpulkan informasi yang dihasilkan suatu instansi atau mengumpulkan informasi yang dibutuhkan dari instansi terkait. Sumber data bisa merupakan data primer ataupun pengolahan data sekunder',
            'but_satuan' => 'Dokumen informasi data instansi',
            'but_kredit' => 0.55,
            'but_batasan' => '4 (empat) kali per tahun',
            'but_fisik' => 'Dokumen informasi data instansi mengenai rincian data-data yang dihasilkan suatu instansi mencakup namun tidak terbatas pada: 1. jenis data; 2. deskripsi data; 3. unit penghasil data; dan 4. periode pengumpulan data',
            'jenjang_id' => 2,
            'but_contoh' => 'Bagus Ananta, A.Md., seorang Pranata Komputer Mahir, melakukan pengumpulan informasi dari intansi lain terkait kegiatan penyusunan daerah dalam angka. Untuk memenuhi kebutuhan penyusunan Statistik Daerah Dalam Angka tersebut dilakukan kegiatan kunjungan ke beberapa instansi. Dari kegiatan tersebut Bagus Ananta akan mendapatkan angka kredit 1 x 0,550 = 0,550'
        ]);

        //3.
        Butir::create([
            'but_id' => '01B02',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Pengadministrasian Kegiatan Tata Kelola Data',
            'but_slug' => 'melakukan-pengadministrasian-kegiatan-tata-kelola-data',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'processing,data,administration',
            'but_desc' => 'Melakukan pengadministrasian kegiatan tata kelola data adalah memastikan ketersediaan, aksesibilitas, kualitas, konsistensi, auditabilitas, dan keamanan data dalam organisasi sehingga dapat meningkatkan peran data sebagai aset organisasi yang dapat digunakan untuk pengambilan keputusan sesuai dengan tingkat kepatuhan terhadap standar data yang telah ditetapkan dan memiliki kemampuan untuk secara proaktif mengidentifikasi perubahan data dalam institusi dan mengomunikasikan perubahan-perubahan tersebut sesuai peruntukkannya. Tahapan kegiatan ini mencakup namun tidak terbatas pada: membuat dokumentasi atau laporan mengenai informasi pengumpulan, identifikasi atau deskripsi suatu set data, penyimpanan serta besaran set data dan aturan/kebijakan/prosedur penggunaan set data tersebut',
            'but_satuan' => 'Dokumen administrasi kegiatan tata kelola data',
            'but_kredit' => 0.110,
            'but_batasan' => '1 (satu) kali per bulan. Kegiatan ini dapat dilakukan untuk setiap set data yang dihasilkan oleh suatu institusi',
            'but_fisik' => '<p>Dokumen pengadministrasian kegiatan tata kelola data yang mencakup namun tidak terbatas pada:</p><p>1. maksud dan tujuan kegiatan;</p><p>2. waktu pelaksanaan;</p><p>3. deskripsi set data/metadata;</p><p>4. lokasi penyimpanan;</p><p>5. besar set data;</p><p>6. aturan/kebijakan/prosedur penggunaan data tersebut; dan 7. penanggung jawab kegiatan</p>',
            'jenjang_id' => 2,
            'but_contoh' => 'Rudi Cahyadi, A.Md., Seorang Pranata Komputer Mahir melakukan pengadministrasian kegiatan tata kelola data hasil Survei Angkutan Umum, maka Rudi Cahyadi mendapat Angka Kredit sebesar 0,110'
        ]);

        //4.
        Butir::create([
            'but_id' => '01B03',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Pencatatan Permasalahan Pengelolaan Data',
            'but_slug' => 'melakukan-pencatatan-permasalahan-pengelolaan-data',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'problem,data,management',
            'but_desc' => 'Melakukan pencatatan permasalahan pengelolaan data adalah melakukan dokumentasi mengenai permasalahan dalam kegiatan pengelolaan data. Tahapan kegiatan ini mencakup namun tidak terbatas pada: menyusun dokumentasi dan laporan permasalahan yang terdiri dari jenis permasalahan, tanggal dan jangka waktu permasalahan. Permasalahan yang dicatat adalah permasalahan dalam perencanaan, pengumpulan, identifikasi, penyimpanan, dan penggunaan suatu set data.',
            'but_satuan' => 'Catatan permasalahan pengelolaan data',
            'but_kredit' => 0.11,
            'but_batasan' => '1 (satu) kali per bulan. Kegiatan ini dapat dilakukan untuk setiap set data dalam kegiatan pengelolaan data oleh suatu institusi',
            'but_fisik' => 'Dokumen pengadministrasian kegiatan tata kelola data yang mencakup namun tidak terbatas pada: 1. deskripsi set data; 2. waktu terjadi permasalahan; 3. deskripsi permasalahan; dan 4. solusi permasalahan (jika ada)',
            'jenjang_id' => 2,
            'but_contoh' => 'Pada saat pengolahan data Sakernas ditemukan beberapa masalah, ada yang sudah mendapatkan solusi dan ada yang tidak. Mira Lesmana, A.Md., seorang Pranata Komputer Mahir kemudian mencatat permasalahan ini agar menjadi pembelajaran bagi kegiatan pengolahan selanjutnya. Maka Mira Lesmana mendapat Angka Kredit sebesar 0,110'
        ]);

        //5.
        Butir::create([
            'but_id' => '01B04',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Perawatan Arsitektur Teknologi Data',
            'but_slug' => 'melakukan-perawatan-arsitektur-teknologi-data',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'maintenance,architecture,technology,data',
            'but_desc' => 'Melakukan perawatan arsitektur teknologi data adalah melakukan kegiatan pemeliharaan, memonitor berjalannya arsitektur teknologi data yang telah diimplementasikan oleh suatu institusi/organisasi berdasarkan metrik tertentu serta pendokumentasian terhadap arsitektur teknologi saat ini atau saat ada perubahan tertentu. Kegiatan ini bertujuan untuk memastikan operasional arsitektur teknologi data yang telah diimplementasikan tetap berjalan sebagaimana mestinya dan jika ada perubahan maka akan terdokumentasi dengan baik. Arsitektur teknologi data mendefinisikan teknologi data yang dibutuhkan untuk mendukung kebutuhan bisnis. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. mengidentifikasi arsitektur teknologi data yang akan dirawat/ dipelihara; 2. memonitor dan memelihara arsitektur teknologi data yang telah diimplementasikan/sedang berjalan termasuk jika terdapat kerusakan pada item-item teknologi data pada arsitektur tersebut; 3. mengidentifikasi perubahan arsitektur teknologi data; dan 4. mendokumentasikan versioning dan log arsitektur teknologi data yang telah diimplementasikan/sedang berjalan serta perubahan arsitektur teknologi data berdasarkan kesesuaian dengan dokumen kebutuhan data organisasi',
            'but_satuan' => 'Dokumen perawatan arsitektur teknologi data',
            'but_kredit' => 0.055,
            'but_batasan' => 'Jumlah maksimum kegiatan perawatan arsitektur teknologi data dalam satu tahun adalah 12 (dua belas) kali',
            'but_fisik' => 'Laporan perawatan arsitektur teknologi data mencakup namun tidak terbatas pada: 1. Identifikasi sistem/perangkat yang sedang berjalan dan perubahan yang dilakukan, jika ada; dan 2. Monitoring dan pemeliharaan sistem/perangkat yang sedang berjalan',
            'jenjang_id' => 2,
            'but_contoh' => 'Dewi, A.Md, Seorang Pranata Komputer Mahir melakukan monitoring kapasitas storage dan penggunaan memory di datalake melalui ambari (perangkat monitoring lain), dan membuat laporannya. Kemudian, atasannya meminta melakukan penyesuaian terhadap kapasitas server untuk sistem-sistem yang ada. Untuk kegiatan di atas, monitoring dan perawatan server, Dewi mendapatkan angka kredit sebesar 2 x 0,055 = 0,110'
        ]);

        //6.
        Butir::create([
            'but_id' => '01B05',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Perawatan Arsitektur Integrasi Data',
            'but_slug' => 'melakukan-perawatan-arsitektur-integrasi-data',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'maintenance,architecture,data,integrated',
            'but_desc' => 'Melakukan perawatan arsitektur integrasi data adalah melakukan kegiatan pemeliharaan, memonitor berjalannya arsitektur integrasi data yang telah diimplementasikan oleh suatu institusi/organisasi berdasarkan metrik tertentu serta pendokumentasian terhadap arsitektur integrasi saat ini atau saat ada perubahan tertentu. Kegiatan ini bertujuan untuk memastikan operasional arsitektur integrasi data yang telah diimplementasikan tetap berjalan sebagaimana mestinya dan jika ada perubahan maka akan terdokumentasi dengan baik. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. mengidentifikasi arsitektur integrasi data yang akan dirawat/ dipelihara; 2. memonitor dan memelihara arsitektur integrasi data yang telah diimplementasikan/sedang berjalan termasuk jika terdapat kerusakan pada item-item integrasi data pada arsitektur tersebut; 3. mengidentifikasi perubahan arsitektur integrasi data; dan 4. mendokumentasikan versioning dan log arsitektur integrasi data yang telah diimplementasikan/sedang berjalan serta perubahan arsitektur integrasi data berdasarkan kesesuaian dengan dokumen kebutuhan data organisasi',
            'but_satuan' => 'Dokumen perawatan arsitektur integrasi data',
            'but_kredit' => 0.055,
            'but_batasan' => '12 (dua belas) kali per tahun',
            'but_fisik' => 'Laporan perawatan arsitektur integrasi data mencakup namun tidak terbatas pada: 1. Identifikasi arsitektur integrasi data yang sedang berjalan; dan 2. Monitoring dan pemeliharaan arsitektur integrasi data yang sedang berjalan',
            'jenjang_id' => 2,
            'but_contoh' => 'Untuk memantau web services yang mendukung integrasi data, Amanda, A.Md. seorang Pranata Komputer Mahir melakukan monitoring menggunakan aplikasi TIBCO (atau aplikasi monitoring lainnya) dan membuat laporannya. Dalam proses integrasi data, ternyata dibutuhkan tabel baru yang belum mempunyai service untuk mendapatkannya. Amanda kemudian membuatkan service/meng-update dari service yang lama untuk kebutuhan tabel baru ini. Terhadap dua kegiatan di atas, Amanda mendapatkan angka kredit untuk kegiatan monitoring dan pemeliharaan, yaitu sebesar 2 x 0,055=0,110'
        ]);

        //7.
        Butir::create([
            'but_id' => '01B06',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Perawatan Data Model',
            'but_slug' => 'melakukan-perawatan-data-model',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'maintenance,data,model',
            'but_desc' => 'Melakukan perawatan data model adalah kegiatan memantau dan memelihara data model yang telah diimplementasikan oleh suatu institusi/organisasi berdasarkan metrik tertentu. Kegiatan ini bertujuan agar data model yang ada selalu mutakhir sesuai dengan kebutuhan dan proses bisnis terkini. Data Model adalah model yang mengatur elemen-elemen data termasuk standardisasi hubungan antarelemen dan dengan sifat-sifat entitas pada kondisi sebenarnya. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. mengidentifikasi atau menentukan data model yang akan dirawat; 2. mengkaji data model saat ini; 3. memantau dan memelihara data model; dan 4. mendokumentasikan setiap langkah perawatan data model yang dilakukan dan hasilnya',
            'but_satuan' => 'Dokumen perawatan data model',
            'but_kredit' => 0.055,
            'but_batasan' => '1 (satu) kali per bulan untuk setiap jenis perawatan data model. Kegiatan ini dapat dilakukan pada seluruh data model yang ada pada organisasi',
            'but_fisik' => 'Dokumen perawatan data model mencakup namun tidak terbatas pada: 1. Identifikasi data model saat ini; dan 2. Penjelasan perubahan yang dilakukan',
            'jenjang_id' => 2,
            'but_contoh' => 'Dengan adanya jabatan-jabatan fungsional yang baru ditetapkan oleh Kemenpan, maka Ridwan, A.Md. seorang Pranata Komputer Mahir diminta untuk meng-update entitas Jenis Jabatan Fungsional yang ada di sistem kepegawaian. Untuk kegiatan ini, Ridwan mendapatkan angka kredit 0,055'
        ]);

        //8.
        Butir::create([
            'but_id' => '01B07',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Perawatan Kecerdasan Bisnis (Business Intelligence)',
            'but_slug' => 'melakukan-perawatan-kecerdasan-bisnis-business-intelligence',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'maintenance,business,intelligence',
            'but_desc' => 'Melakukan perawatan kecerdasan bisnis (business intelligence) adalah melakukan perawatan dan pemeliharaan terhadap environment, solusi dan/atau teknologi kecerdasan bisnis (business intelligence). Kegiatan perawatan ini bertujuan untuk memastikan operasional kecerdasan bisnis (business intelligence) yang telah diimplementasikan tetap berjalan sebagaimana mestinya tanpa ada permasalahan yang dihadapi oleh user. Jika terdapat aspek yang tidak optimal pada sisi user, maka dapat merusak keseluruhan projek kecerdasan bisnis (business intelligence). Misalnya, jika CEO membuka dashboard dan membutuhkan lebih dari beberapa detik, maka kemungkinan dia akan mengunjungi dashboard itu kembali menjadi lebih kecil. Sehingga, diperlukan strategi perawatan kecerdasan bisnis (business intelligence) tersebut. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. memantau frekuensi dan penggunaan sumber daya (dalam bentuk perangkat keras atau perangkat lunak) berdasarkan suatu metrik. Metrik dapat terdiri dari: a. Metrik penggunaan data warehouse/kecerdasan bisnis (business intelligence), diantaranya jumlah pengguna terdaftar, jumlah pengguna yang terhubung, jumlah pengguna yang terhubung secara bersamaan pada data warehouse/kecerdasan bisnis (business intelligence), dan berapa banyak kueri yang dijalankan (query request) dalam satuan waktu tertentu; b. Metrik performa, yaitu response time dalam menjalankan setiap kueri/mengambil data yang ada pada business intelligence; dan c. Beban penggunaan memori. 2. Melakukan tuning kecerdasan bisnis (business intelligence) untuk optimasi, misalnya mengkonfigurasi threshold penggunaan memori sistem kecerdasan bisnis (business intelligence), melakukan caching data untuk meminimalkan beban penggunaan memori, dan lain-lain. Kegiatan ini tidak mencakup monitoring performa terkait proses Extract, Transform, dan Load (ETL) dan data warehouse, karena diasumsikan ETL dan data warehouse telah selesai diimplementasi',
            'but_satuan' => 'Laporan perawatan kecerdasan bisnis (business intelligence)',
            'but_kredit' => 0.055,
            'but_batasan' => '1 (satu) kali per bulan untuk satu jenis perawatan per sistem kecerdasan bisnis (business intelligence). Kegiatan ini dapat dilakukan pada setiap sistem BI yang ada pada organisasi',
            'but_fisik' => 'Laporan perawatan kecerdasan bisnis (business intelligence) yang mencakup namun tidak terbatas pada: 1. Deskripsi dari sistem kecerdasan bisnis (business intelligence); dan 2. Hasil pemantauan kinerja kecerdasan bisnis (business intelligence)',
            'jenjang_id' => 2,
            'but_contoh' => 'Dini Lestari, A.Md., seorang Pranata Komputer Mahir melakukan konfigurasi memori kecerdasan bisnis (business intelligence) Sensus Penduduk untuk meningkatkan performa, maka Dini Lestari mendapatkan angka kredit 0,055. Selain itu, Dini Lestari juga melakukan caching data untuk kecerdasan bisnis (business intelligence) Sensus Penduduk, maka angka kredit menjadi 0,055. Di tengah periode pekerjaan, ternyata ada update untuk aplikasi BI yang digunakan institusi, dan Dini Lestari diminta untuk melakukannya. Kegiatan ini juga mendapatkan angka kredit 0,055. Sehingga total angka kredit yang didapatkan Dini Lestari yaitu sebesar 3 x 0,055=1,165'
        ]);

        //9.
        Butir::create([
            'but_id' => '01B08',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Perawatan Taksonomi Data di Suatu Instansi',
            'but_slug' => 'melakukan-perawatan-taksonomi-data-di-suatu-instansi',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'taxonomy,data,maintenance',
            'but_desc' => 'Melakukan perawatan taksonomi data adalah melakukan peninjauan terhadap data yang terdapat di organisasi untuk kemudian dikelompokkan berdasarkan taksonomi data yang telah disusun sebelumnya. Taksonomi yang dimaksud adalah struktur topik/kategori yang digunakan untuk pengelolaan konten sehingga konten dapat dengan mudah ditelusuri untuk penambahan, pengaksesan, pengubahan, ataupun penghapusan. Termasuk ke dalam kegiatan ini juga yaitu perawatan ontologi yang berupa representasi dari struktur konsep-konsep beserta hubungannya dalam suatu domain. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. Melakukan identifikasi terhadap data yang ada di organisasi untuk mengetahui apakah terdapat data yang belum dikategorikan atau tidak sesuai pengelompokannya; 2. Mengimplementasikan taksonomi data terhadap data yang belum dikategorikan atau memperbaiki hasil implementasi taksonomi data yang tidak sesuai; dan 3. Menyusun daftar data yang belum dapat dikategorikan ke dalam hierarki taksonomi data yang telah dibuat beserta isunya',
            'but_satuan' => 'Laporan perawatan taksonomi data',
            'but_kredit' => 0.275,
            'but_batasan' => '12 (dua belas) kali per tahun',
            'but_fisik' => 'Laporan mekanisme pemeliharaan taksonomi organisasi, yang mencakup namun tidak terbatas pada: 1. deskripsi dari data yang diidentifikasi hasil implementasi taksonomi datanya; 2. hasil implementasi taksonomi data; dan 3. daftar data yang tidak dapat dikategorikan berdasarkan taksonomi data yang telah dibuat beserta isunya',
            'jenjang_id' => 2,
            'but_contoh' => 'Luhut Sihombing, A.Md., seorang Pranata Komputer Mahir melakukan semua cakupan kegiatan perawatan taksonomi konten-konten halaman situs web di suatu instansi pada awal tahun 2021. Dari pekerjaan tersebut, Luhut Sihombing diberikan Angka Kredit sebesar 0,275'
        ]);

        //10.
        Butir::create([
            'but_id' => '01B09',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Perawatan Arsitektur Data',
            'but_slug' => 'melakukan-perawatan-arsitektur-data',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'architecture,data,maintenance',
            'but_desc' => 'Melakukan perawatan arsitektur data adalah melakukan kegiatan pemeliharaan, memonitor berjalannya arsitektur data yang telah diimplementasikan oleh suatu institusi/organisasi berdasarkan metrik tertentu serta pendokumentasian terhadap arsitektur saat ini atau saat ada perubahan tertentu. Kegiatan ini bertujuan untuk memastikan operasional arsitektur data yang telah diimplementasikan tetap berjalan sebagaimana mestinya dan jika ada perubahan maka akan terdokumentasi dengan baik. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. mengidentifikasi arsitektur data yang akan dirawat/dipelihara; 2. memonitor dan memelihara arsitektur data yang telah diimplementasikan/sedang berjalan; 3. mengidentifikasi perubahan arsitektur data; dan 4. mendokumentasikan versioning dan log arsitektur data yang telah diimplementasikan/sedang berjalan serta perubahan arsitektur data berdasarkan kesesuaian dengan dokumen kebutuhan data organisasi',
            'but_satuan' => 'Laporan perawatan arsitektur data',
            'but_kredit' => 0.275,
            'but_batasan' => '5 (lima) arsitektur data per tahun',
            'but_fisik' => 'Laporan mekanisme pemeliharaan arsitektur data dan metadata yang mencakup namun tidak terbatas pada: 1. identifikasi arsitektur data yang sedang berjalan; 2. monitoring dan pemeliharaan arsitektur data yang sedang berjalan; 3. identifkasi perubahan arsitektur data; dan 4. versioning dan log arsitektur data yang sedang berjalan dan perubahan arsitektur data',
            'jenjang_id' => 2,
            'but_contoh' => 'Dani Permana, A.Md., seorang Pranata Komputer Mahir melakukan perawatan arsitektur data di organisasinya, dengan melakukan pembaharuan dokumentasi berdasarkan perubahan arsitektur data yang sedang berjalan. Dani Permana mendapatkan angka kredit sebesar 0,275'
        ]);

        //11.
        Butir::create([
            'but_id' => '01B10',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Mengembangkan Data Model',
            'but_slug' => 'mengembangkan-data_model',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'develop,data,model',
            'but_desc' => 'Melakukan pengembangan pada data model yang telah dirancang atau diimplementasikan sebelumnya untuk memenuhi kebutuhan dan tujuan bisnis yang baru. Data model menggambarkan relasi (relationships) antar entitas data dan batasan-batasan (constraint) bagaimana data disimpan dan diakses dalam suatu sistem database. Skema data model tersebut dapat dipresentasikan dalam level conceptual, logical, maupun physical. Kegiatan pengembangan meliputi penambahan/pengurangan/ perubahan entitas data, relasi, dan constraints dalam data model. Hal tersebut bertujuan untuk merespon adanya perubahan proses bisnis yang baru, untuk meningkatkan efektivitas, serta untuk mengurangi resiko dan biaya. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. menentukan kebutuhan pengembangan data model; 2. mengidentifikasi atau menentukan data model yang akan dikembangkan; 3. mengkaji data model yang telah diimplementasikan sebelumnya; 4. mengembangkan data model: conceptual, logical, dan physical; dan 5. mendokumentasikan pengembangan data model',
            'but_satuan' => 'Dokumen pengembangan data model',
            'but_kredit' => 0.11,
            'but_batasan' => '12 (dua belas) kali per tahun',
            'but_fisik' => 'Dokumen pengembangan data model yang mencakup namun tidak terbatas pada: 1. data model pada level conceptual, logical, dan physical yang digambarkan dalam entity-relationship model, network model, hierarchical model, star schema, ataupun standar model lain untuk menjelaskan keadaan saat ini; 2. deskripsi setiap object (entitas, atribut, relasi, dan lain-lain) pada data model; dan 3. perubahan yang dibuat',
            'jenjang_id' => 2,
            'but_contoh' => 'Maulidia Hamid, A.Md., seorang Pranata Komputer Mahir diminta untuk menambah atribut baru pada database sistem aplikasi kepegawaian. Untuk kegiatan ini Maulidia Hamid mendapatkan angka kredit 0,110'
        ]);

        //12.
        Butir::create([
            'but_id' => '01B11',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Perancangan Data Model Sederhana',
            'but_slug' => 'melakukan-perancangan-data-model-sederhana',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'planing,data,model',
            'but_desc' => 'Merancang data model yang menggambarkan hubungan antara berbagai jenis informasi yang akan disimpan dalam database. Kegiatan ini meliputi pemodelan data: untuk pengelolaan data sebagai sumber daya, untuk mendukung sistem informasi, serta untuk data warehouse. Rancangan dihasilkan dari proses mendefinisikan dan menganalisis kebutuhan data untuk mendukung alur atau bisnis proses suatu sistem. Data model sederhana minimal memiliki 3 entitas yang dilengkapi relasi dan constraint sesuai dengan hasil analisis. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. mengidentifikasi dan mendefinisikan kebutuhan proses bisnis dan data; 2. merancang conceptual data model berdasarkan kebutuhan data; 3. merancang logical data model; 4. merancang physical data model dengan memperhatikan kebutuhan teknis dan performa; dan 5. mendokumentasikan perancangan data model',
            'but_satuan' => 'Dokumen rancangan data model sederhana',
            'but_kredit' => 0.11,
            'but_batasan' => '12 (dua belas) kali per tahun',
            'but_fisik' => 'Dokumen rancangan data model sederhana mencakup namun tidak terbatas pada: 1. hasil analisis kebutuhan data; 2. data model pada level conceptual, logical, dan physical yang digambarkan dalam entity-relationship model, network model, hierarchical model, star schema, ataupun standar model lain; dan 3. deskripsi setiap object (entitas, atribut, relasi, dan lain-lain) pada data model',
            'jenjang_id' => 3,
            'but_contoh' => 'Ahmad Subagyo, A.Md., seorang Pranata Komputer Penyelia melakukan perancangan data model sederhana pada sistem absensi pegawai yang terdiri dari tabel pegawai, tabel waktu presensi, dan tabel rekap presensi. Untuk kegitan ini Ahmad Subagyo mendapatkan angka kredit 0,110'
        ]);

        //13.
        Butir::create([
            'but_id' => '01B12',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Uji Coba Rancangan Layanan Akses Data',
            'but_slug' => 'melakukan-uji-coba-rancangan-layanan-akses-data',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'testing,design,access,data',
            'but_desc' => 'Uji coba rancangan layanan akses data adalah kegiatan menelaah dan melakukan pengujian terhadap rancangan layanan akses data yang sudah dibuat untuk memastikan input-proses-output yang direncanakan sudah berjalan sesuai dengan yang diharapkan. Layanan akses data terdiri dari akses data secara manual dan elektronik. Layanan akses data secara manual dilakukan melalui SOP yang sudah ditentukan dimana pemohon data akan dibantu oleh operator untuk dapat mengakses data. Layanan akses data secara elektronik dilakukan melalui fasilitas akses data yang terdapat pada sistem/aplikasi. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. Mempelajari spesifikasi layanan akses data; 2. Mempelajari prosedur uji coba, yakni langkah-langkah pengujian rancangan layanan akses data; 3. Melakukan pengujian berdasarkan tahapan yang sudah direncanakan; dan 4. Membuat laporan hasil pengujian',
            'but_satuan' => 'Laporan uji coba rancangan layanan akses data',
            'but_kredit' => 0.11,
            'but_batasan' => '8 (delapan) kali per tahun. Uji coba dilakukan terhadap hasil rancangan yang dikerjakan oleh pihak lain. Uji coba yang dilakukan terhadap rancangan sendiri dianggap sebagai kesatuan kegiatan penyusunan rancangan',
            'but_fisik' => 'Dokumen laporan uji coba yang mencakup namun tidak terbatas pada: 1. deskripsi spesifikasi layanan akses data yang diuji; 2. prosedur uji coba, yakni langkah-langkah pengujian rancangan layanan akses data; 3. pelaksanaan pengujian; berisi waktu uji coba, dokumen/alat bantu/data set yang digunakan untuk melakukan pengujian, kendala yang dihadapi; dan 4. hasil pengujian, menjelaskan hasil ujicoba dan keterangan lain yang diperlukan',
            'jenjang_id' => 2,
            'but_contoh' => 'Shinta Amalia, A.Md., seorang Pranata Komputer Mahir melaksanakan kegiatan uji coba rancangan layanan akses data secara elektronik melalui sistem layanan informasi statistik berdasarkan panduan sistem yang ada dengan menyertakan bukti kegiatan yang lengkap sesuai dengan syarat bukti fisik yang diminta, setiap bukti fisik dapat menjelaskan proses kerja yang jelas dan tuntas. Atas pengajuan tsb, Shinta Amalia mendapatkan nilai sebesar 0,110. Akan tetapi, jika Shinta Amalia melaksanakan kegiatan uji coba dengan bukti yang diusulkan terdiri atas deskripsi kegiatan, waktu pengujian, tahap pengujian, dan catatan hasil uji coba, untuk bukti alat bantu pengujian tidak disertakan. Atas pengajuan tsb Shinta Amalia mendapatkan nilai 4/5 x 0,110 = 0,088'
        ]);

        //14.
        Butir::create([
            'but_id' => '01B13',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Rancangan Visualisasi Informasi Sederhana',
            'but_slug' => 'melakukan-rancangan-visualisasi-informasi-sederhana',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'design,visual,information',
            'but_desc' => 'Dikategorikan dalam visualisasi informasi sederhana yakni apabila inputnya menggunakan dataset sederhana; dan/atau diproses dengan dukungan alat bantu/software dengan tanpa melibatkan bahasa pemrograman; dan/atau output yang dihasilkan berupa visualisasi statis dan dinamis (bukan interaktif). Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. Menyusun strategi penyajian informasi yang tepat agar pesan yang ingin disampaikan mudah dipahami oleh pengguna. 2. Strategi tersebut dituangkan dalam rancangan visualisasi informasi yang terdiri dari: a. Informasi apa yang akan disajikan; b. Tujuan visualisasi informasi; c. Sasaran/target pengguna informasi; d. Sumber data yang menjadi rujukan; e. Teknik visualisasi yang akan digunakan; f. Tools yang digunakan; dan g. Rancangan output yang diharapkan. 3. Mendokumentasikan hasil perancangan visualisasi informasi sederhana',
            'but_satuan' => 'Dokumen rancangan visualisasi informasi sederhana',
            'but_kredit' => 0.22,
            'but_batasan' => '4 (empat) kali per tahun',
            'but_fisik' => 'Dokumen rancangan visualisasi informasi sederhana mencakup namun tidak terbatas pada: 1. deskripsi visualisasi informasi; 2. tujuan visualisasi informasi; 3. sasaran/target pengguna informasi; 4. sumber data yang menjadi rujukan disertai dummy dataset; 5. teknik visualisasi yang akan digunakan; 6. deskripsi alat bantu/software; dan 7. rancangan output',
            'jenjang_id' => 3,
            'but_contoh' => 'Kevin Woworuntu, A.Md., seorang Pranata Komputer Penyelia membuat perancangan visualisasi informasi dalam bentuk desain dashboard monitoring dengan dokumen rancangan yang memenuhi 5 unsur bukti fisik yang diminta, atas dokumen rancangan dimaksud maka Kevin Woworuntu mendapat nilai 0,220. Bobot nilai untuk setiap kriteria penilaian, maksimum 20%. Jika dalam menyusun laporan dianggap tidak lengkap dan/atau isi laporan tidak mampu menjelaskan secara tutas maksud kegiatan, maka untuk setiap persentase bobot penilaian dapat diturunkan sesuai dengan kualitas laporan yang dibuat'
        ]);

        //15.
        Butir::create([
            'but_id' => '01B14',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Uji Coba Rancangan Visualisasi Informasi',
            'but_slug' => 'melakukan-uji-coba-rancangan-visualisasi-informasi',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'testing,design,visual,information',
            'but_desc' => 'Merupakan kegiatan menelaah dan melakukan pengujian terhadap rancangan visualisasi yang sudah dibuat untuk memastikan input-proses-output yang direncanakan sudah berjalan sesuai dengan yang diharapkan. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. Menelaah spesifikasi visualisasi informasi; 2. Menetapkan prosedur uji coba, yakni langkah-langkah pengujian rancangan visualisasi informasi; 3. Melakukan pengujian berdasarkan tahapan yang sudah direncanakan; dan 4. Merumuskan hasil pengujian',
            'but_satuan' => 'Laporan uji coba rancangan visualisasi informasi',
            'but_kredit' => 0.11,
            'but_batasan' => '8 (delapan) kali per tahun. Uji coba dilakukan terhadap hasil rancangan yang dikerjakan oleh pihak lain. Uji coba yang dilakukan terhadap rancangan sendiri dianggap sebagai kesatuan kegiatan penyusunan rancangan',
            'but_fisik' => 'Dokumen laporan uji coba yang mencakup namun tidak terbatas pada: 1. deskripsi spesifikasi visualisasi informasi yang diuji; 2. prosedur uji coba, yakni langkah-langkah pengujian rancangan visualisasi informasi; 3. pelaksanaan pengujian; berisi waktu uji coba, dokumen/alat bantu/data set yang digunakan untuk melakukan pengujian, kendala yang dihadapi; dan 4. hasil pengujian, menjelaskan hasil ujicoba dan keterangan lain yang diperlukan',
            'jenjang_id' => 2,
            'but_contoh' => '<p>Iin Sukaesi, A.Md., seorang Pranata Komputer Mahir melaksanakan kegiatan uji coba visualisasi informasi dengan menyertakan bukti kegiatan yang lengkap sesuai dengan syarat bukti fisik yang diminta, setiap bukti fisik dapat menjelaskan proses kerja yang jelas dan tuntas. Atas pengajuan tsb, Iin Sukaesi mendapatkan nilai sebesar 0,110.</p><p>Namun jika Iin Sukaesi, A.Md. melaksanakan kegiatan uji coba dengan bukti yang diusulkan terdiri atas deskripsi kegiatan, waktu pengujian, tahap pengujian, dan catatan hasil uji coba, untuk bukti alat bantu pengujian tidak disertakan. Atas pengajuan tersebut, pejabat fungsional Pranata Komputer mendapatkan nilai 3/4 x 0,110 = 0,0825.</p>'
        ]);

        //16.
        Butir::create([
            'but_id' => '01B15',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Penyiapan Data Uji Coba Rancangan Database',
            'but_slug' => 'melakukan-penyiapan-data-uji-coba-rancangan-database',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'setup,data,testing,design,database',
            'but_desc' => 'Melakukan penyiapan data uji coba rancangan basis data (database) adalah kegiatan menyiapkan data dummy yang sesuai dengan skema database yang telah dirancang sebelumnya dan merekam/memasukkan data dummy tersebut ke dalam skema basis data (database) terkait yang telah terimplementasikan ke suatu media RDBMS. Kegiatan penyiapan data uji coba rancangan basis data (database) bertujuan untuk melakukan testing rancangan basis data (database) yang telah dirancang berdasarkan skema basis data (database), apakah skema basis data (database) tersebut dengan data dummy yang disiapkan fungsi penyimpanan, pengelolaan dan pemanfaatan dalam kegiatan transaksional atau/dan analisis dapat berjalan sebagaimana mestinya, baik yang menggunakan sistem/aplikasi yang terhubung ke basis data (database) tersebut atau pemanfaatan langsung pada media RDBMS terkait. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. Penyiapan informasi RDBMS yang akan digunakan; 2. Tersedianya skema logic database yang diimplementasikan pada suatu RDBMS terpilih termasuk di dalamnya adanya skema logic E-R, dan contraints antar tabel; 3. Daftar basis data (database)-tabel yang akan diisi data uji cobanya dan yang tidak. Pada tabel yang akan diisi data uji cobanya perlu disertakan daftar kolom mana saja yang akan diisi data dummynya dan mana yang tidak; 4. Pengecekan jumlah data uji coba yang berhasil disimpan ke dalam media RDBMS pada masing-masing tabel yang telah dilist pada poin c di atas dibandingkan terhadap data inputan awal; 5. Daftar fungsi yang akan dites dari hasil penyiapan data uji coba rancangan basis data (database) seperti pengujian penyimpanan, pengujian pengelolaan, dan pengujian dalam kegiatan transaksional atau/dan analisis, baik yang menggunakan sistem/aplikasi yang terhubung atau menggunakan media RDBMS terkait; dan 6. Evaluasi dari penyiapan data uji coba rancangan basis data (database)',
            'but_satuan' => 'Data uji coba rancangan basis data (database)',
            'but_kredit' => 0.055,
            'but_batasan' => '2 (dua) kali per bulan. Batasan minimal pengisian data uji coba rancangan basis data (database) ini adalah terisinya setiap tabel yang terdaftar pada daftar tabel yang akan diisi data dummny sebanyak baris kolom pada dokumen tersebut',
            'but_fisik' => 'Bukti fisik penyiapan data uji coba rancangan basis data (database) mencakup namun tidak terbatas pada: 1. dokumentasi RDBMS yang akan digunakan; 2. dokumen skema logic database yang diimplementasikan pada suatu RDBMS terpilih termasuk di dalamnya adanya skema logic E-R, dan contraints antar tabel; 3. daftar database-tabel-kolom yang akan diisi data uji cobanya dan yang tidak; 4. dokumen perbandingan jumlah data uji coba yang berhasil disimpan ke RDBMS terpilih pada daftar basis data (database)- tabel-kolom poin c di atas dibandingkan terhadap data inputan awal; 5. dokumen daftar fungsi yang telah dites dari hasil penyiapan data uji coba rancangan basis data (database) seperti pengujian penyimpanan, pengujian pengelolaan, dan pengujian dalam kegiatan transaksional atau/dan analisis, baik yang menggunakan sistem/aplikasi yang terhubung atau menggunakan media RDBMS terkait; dan 6. dokumen evaluasi dari penyiapan data uji coba rancangan basis data (database)',
            'jenjang_id' => 2,
            'but_contoh' => 'Bowo Randani, A.Md., seorang Pranata Komputer Mahir melakukan penyiapan data uji coba rancangan basis data (database), maka Pranata Komputer tersebut akan mendapatkan angka kredit sebesar 0,055. Jika Bowo Randani tidak melakukan salah satu dari cakupan kegiatan, maka total angka kredit yang diperoleh adalah 5/6 x 0,055 = 0,044. Namun jika bukti fisik poin 3 dan 4 tidak dilampirkan maka tidak mendapat poin'
        ]);

        //17.
        Butir::create([
            'but_id' => '01B16',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Uji Coba Rancangan Layanan Integrasi Data',
            'but_slug' => 'melakukan-uji-coba-rancangan-layanan-integrasi-data',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'testing,design,service,data,integration',
            'but_desc' => 'Melakukan uji coba rancangan layanan integrasi data adalah suatu rangkaian kegiatan menguji proses integrasi sesuai dokumen rancangan yang didalamnya menguji dari penyiapan data inputan dummy, pelaksanaan integrasi data menggunakan inputan data dummy hingga didapatkan output data yang diharapkan. Kegiatan uji coba rancangan layanan integrasi data bertujuan untuk menjamin berjalannya alur layanan permintaan integrasi data dari inputan data yang ditentukan hingga mendapatkan output-an data yang diharapkan. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. mempelajari skenario integrasi data yang akan diuji coba (apa yang dijadikan input dan apa output yang diharapkan); 2. penyiapan tools yang akan dipergunakan dalam integrasi data; 3. melaksanakan integrasi data sesuai input data, alur yang ditelah dirancang hingga menghasilkan output data; 4. pengecekan output data dengan requirement; 5. pendokumentasian RDBMS atau non-RDBMS yang digunakan; 6. pendokumentasian integrator yang digunakan misal penggunaan ETL Tools atau built-in; dan 7. pengisian metrik pengujian seperti ketersediaan data, volume dan kecepatan data, kompleksitas solusi',
            'but_satuan' => 'Laporan uji coba rancangan layanan integrasi data',
            'but_kredit' => 0.11,
            'but_batasan' => '2 (dua) kali per bulan',
            'but_fisik' => 'Laporan uji coba rancangan layanan integrasi data mencakup namun tidak terbatas pada: 1. dokumen skenario integrasi data yang akan diuji coba; 2. dokumentasi tools yang akan dipergunakan dalam integrasi data; 3. dokumentasi on-process selama proses integrasi data (progess selama integrasi, kendala, dan sebagainya); 4. dokumen assesment output data dengan requirement; 5. dokumentasi RDBMS atau non-RDBMS yang digunakan; 6. dokumentasi integrator yang digunakan misal ETL Tools atau built-in; dan 7. metrik pengujian seperti ketersediaan data, volume dan kecepatan data, kompleksitas solusi ',
            'jenjang_id' => 2,
            'but_contoh' => 'Ravi Ahmad, A.Md., seorang Pranata Komputer Mahir melakukan uji coba rancangan layanan integrasi data secara lengkap dan tuntas, maka yang bersangkutan akan diberikan angka kredit sebesar 0,110, Jika Ravi Ahmad tidak melakukan salah satu dari cakupan kegiatan, maka total angka kredit yang diperoleh adalah 6/7 x 0,110 = 0,09429'
        ]);

        //18.
        Butir::create([
            'but_id' => '01B17',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Uji Coba Prosedur Validasi Kebutuhan Informasi',
            'but_slug' => 'melakukan-Uji-coba-prosedur-validasi-kebutuhan-informasi',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'testing,procedure,validation,need,information',
            'but_desc' => 'Melakukan uji coba prosedur validasi kebutuhan informasi merupakan kegiatan uji coba dan pengecekan terhadap prosedur validasi kebutuhan informasi yang ada pada suatu instansi berdasarkan kriteria tertentu. Kegiatan uji coba prosedur validasi kebutuhan informasi dilakukan mengikuti langkah-langkah pengujian validasi kebutuhan informasi menggunakan kriteria tertentu yang telah disusun pada suatu institusi',
            'but_satuan' => 'Laporan uji coba prosedur validasi kebutuhan informasi',
            'but_kredit' => 0.11,
            'but_batasan' => '12 (dua belas) kali per tahun',
            'but_fisik' => 'Laporan uji coba prosedur validasi kebutuhan informasi yang mencakup namun tidak terbatas pada: 1. tanggal uji coba; 2. obyek uji coba; 3. prosedur pengujian validasi kebutuhan informasi yang digunakan dalam uji coba; 4. hasil uji coba; dan 5. dokumentasi uji coba',
            'jenjang_id' => 2,
            'but_contoh' => 'Rafika A.Md., seorang Pranata Komputer Mahir melakukan uji coba prosedur validasi kebutuhan informasi kepegawaian menggunakan prosedur validasi kebutuhan informasi kepegawaian yang ada pada instansi sebanyak 1 kali, maka angka kredit yang diperoleh Rafika adalah 1 x 0,110 = 0,110'
        ]);

        //19.
        Butir::create([
            'but_id' => '01B18',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Instalasi/Updating DBMS',
            'but_slug' => 'melakukan-instalasi-updating-dbms',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'install,update,database',
            'but_desc' => 'Melakukan instalasi program Database Management System merupakan kegiatan instalasi perangkat lunak DBMS yang bertujuan untuk menunjang kebutuhan institusi. DBMS yang diinstal harus merupakan produk legal. Melakukan updating program Database Management System adalah kegiatan updating perangkat lunak DBMS yang bertujuan untuk menunjang kebutuhan institusi. DBMS yang diinstal harus merupakan produk legal. Tahapan kegiatan ini mencakup namun tidak terbatas pada instalasi perangkat lunak DBMS yang bertujuan untuk menunjang kebutuhan institusi',
            'but_satuan' => 'Laporan hasil instalasi/updating DBMS',
            'but_kredit' => 0.055,
            'but_batasan' => '24 (dua puluh empat) kali per tahun. Batasan kegiatan instalasi/updating program DBMS digunakan untuk menunjang kebutuhan institusi dan merupakan produk legal',
            'but_fisik' => 'Laporan hasil instalasi DBMS yang mencakup namun tidak terbatas pada: 1. jenis sistem komputer; 2. jenis DBMS; 3. tanggal dan lama pelaksanaan; 4. tujuan Instalasi DBMS; dan 5. dokumentasi/screenshot pelaksanaan instalasi. Laporan hasil updating DBMS yang mencakup namun tidak terbatas pada: 1. jenis sistem komputer; 2. jenis DBMS; 3. tanggal dan lama pelaksanaan; 4. tujuan updating DBMS; dan 5. dokumentasi/screenshot pelaksanaan updating',
            'jenjang_id' => 2,
            'but_contoh' => 'Rosalinda, A.Md., seorang Pranata Komputer Mahir melakukan instalasi program Relational Database Management System (RDBMS) PostgreSQL pada physical/virtual server untuk menunjang kegiatan manajemen data kepegawaian pada Sistem Manajemen Kepegawaian, maka Rosalinda mendapat Angka Kredit sebesar 0,055'
        ]);

        //20.
        Butir::create([
            'but_id' => '01B19',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Penggandaan Data',
            'but_slug' => 'melakukan_penggandaan_data',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'copy,data',
            'but_desc' => 'Melakukan penggandaan data merupakan kegiatan duplikasi data agar data dapat digunakan di komputer lain. Tahapan kegiatan ini mencakup namun tidak terbatas pada penggandaan data dari suatu media komputer ke media komputer lain, baik ke jenis media komputer yang sama maupun jenis media komputer yang berbeda, tanpa mengalami perubahan bentuk. Penggandaan data tidak boleh melanggar hak cipta. Kegiatan lain yang setara dengan kategori ini adalah mengunggah (upload), mengunduh (download) dan penginputan ke basis data (database)',
            'but_satuan' => 'Laporan penggandaan data',
            'but_kredit' => 0.001,
            'but_batasan' => '4 (empat) kali per hari. Kegiatan ini dapat dilakukan terhadap setiap kegiatan penggandaan data dengan ukuran data lebih besar dari 50kb',
            'but_fisik' => 'Laporan penggandaan data yang mencakup namun tidak terbatas pada: 1. tanggal penggandaan; 2. nama data yang digandakan; 3. ukuran file yang digandakan; 4. media penyimpanan; 5. hasil penggandaan; dan 6. dokumentasi/screenshot pelaksanaan penggandaan',
            'jenjang_id' => 1,
            'but_contoh' => 'Raihan Firdaus, A.Md., seorang Pranata Komputer Terampil melakukan dokumen SK pegawai ke aplikasi SIMPEG. Di hari yang sama melakukan menggandakan data hasil tata kelola data di media penyimpanan eksternal, maka Raihan Firdaus memperoleh Angka Kredit sebesar 0,001 x 2 = 0,002'
        ]);

        //21.
        Butir::create([
            'but_id' => '01B20',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Pemantauan (Monitoring) Kinerja Database',
            'but_slug' => 'melakukan-pemantauan-monitoring-kinerja-database',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'monitoring,performance,database',
            'but_desc' => 'Melakukan pemantauan (monitoring) kinerja database merupakan kegiatan memantau dan mengawasi kinerja suatu database [mengukur kinerja] suatu basis data (database) secara real time dengan tujuan mengidentifikasi masalah dan faktor-faktor lain yang memiliki kemungkinan akan menyebabkan masalah. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. Identifikasi obyek basis data (database) yang akan dipantau, 2. Mengamati dan memantau kinerja basis data (database), dan 3. Mencatat permasalahan yang terjadi. yang termasuk kinerja basis data (database), diantaranya kapasitas, koneksi [utilisasi CPU dan memori], statistik koneksi, detail dari buffer cache, kinerja query, informasi sumber daya yang dipakai, informasi user dan session, informasi jika terjadi deadlock, serta kesalahan yang terjadi pada sistem maupun user',
            'but_satuan' => 'Laporan hasil pemantauan kinerja basis data (database)',
            'but_kredit' => 0.010,
            'but_batasan' => '1 (satu) kali per minggu',
            'but_fisik' => 'Dokumen melakukan pemantauan (monitoring) kinerja basis data (database) yang mencakup namun tidak terbatas pada : 1. periode pemantauan; 2. nama basis data (database); 3. catatan permasalahan; 4. solusi permasalahan; dan 5. ringkasan hasil pemantauan',
            'jenjang_id' => 2,
            'but_contoh' => 'Afika Daud, A.Md., seorang Pranata Komputer Mahir melakukan pemantauan kinerja basis data (database) aplikasi Performa untuk memastikan aplikasi berjalan lancar, maka Afika Daud mendapatkan angka kredit sebesar 0,010'
        ]);

        //22.
        Butir::create([
            'but_id' => '01B21',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Pengarsipan, Pencarian Kembali (Retrieve), Atau Penghapusan Data (Purge)',
            'but_slug' => 'melakukan-pengarsipan-pencarian-kembali-retrieve-atau-penghapusan-data-purge',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'filing,searching,delete,data',
            'but_desc' => 'Melakukan pengarsipan data merupakan kegiatan menyimpan dan mengelola data menurut sistem pengarsipan tertentu dalam suatu institusi (termasuk di dalamnya adalah kegiatan archieve atau backup). Melakukan pencarian kembali basis data (database) adalah kegiatan pencarian dari arsip (retrieve) ataupun pemulihan data yang rusak karena adanya gangguan dalam sistem (restore) dengan tujuan agar data tersebut dapat berfungsi sebagaimana mestinya. Melakukan penghapusan data (purge) adalah kegiatan pemusnahan atau penghapusan secara permanen terhadap suatu data digital. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. pengarsipan data (archieve data) atau pencadangan data (backup data); 2. pencarian kembali (retrieve) dari archieve data, 3. pemulihan data (restore) menggunakan salah satu versi backup data; 4. penghapusan terhadap set data yang dihasilkan oleh suatu institusi baik disimpan dalam suatu repository data maupun yg disimpan secara terpisah-pisah',
            'but_satuan' => 'Daftar data yang diarsipkan, diambil, atau dihapus',
            'but_kredit' => 0.060,
            'but_batasan' => '1 (satu) kali per minggu',
            'but_fisik' => 'Dokumentasi kegiatan yang mencakup namun tidak terbatas pada: 1. deskripsi data; 2. maksud dan tujuan kegiatan; 3. media penyimpanan; 4. besaran data; 5. waktu pelaksanaan; dan 6. dokumentasi/screenshot pelaksanaan',
            'jenjang_id' => 3,
            'but_contoh' => 'Di akhir bulan, Devi Murni, A.Md., seorang Pranata Komputer Penyelia melakukan pengarsipan email organisasi untuk menjaga kapasitas email agar tetap bisa menerima email. Untuk keperluan pemeriksaan salah satu kegiatan, Pranata Komputer diminta mencari dokumentasi surat menyurat terkait kegiatan tersebut. Sehingga Devi Murni harus melakukan retrieve terhadap archieve email di tahun kegiatan berlangsung. Dari kegiatan tersebut Devi Murni akan mendapatkan angka kredit 2 x 0,060 = 0,120 untuk rangkaian kegiatan ini'
        ]);

        //23.
        Butir::create([
            'but_id' => '01B22',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Implementasi Teknologi Data',
            'but_slug' => 'melakukan-implementasi-teknologi-data',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'implementation,data,technology',
            'but_desc' => 'Melakukan implementasi teknologi data merupakan kegiatan pengimplementasian sistem back end dan proses yang mendukung penyimpanan, perpindahan, dan pengaksesan data untuk menunjang pengelolaan data sesuai dengan rancangan arsitektur teknologi data. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. konfigurasi infrastruktur (hardware, software, network); 2. testing untuk memastikan fitur atau fungsi yang dibutuhkan berjalan dengan baik; 3. implementasi logic atau rule yang berkaitan dengan proses penyimpanan, pemindahan, transformasi data; dan 4. mengatur hak akses dari pengguna teknologi data',
            'but_satuan' => 'Dokumen implementasi teknologi data',
            'but_kredit' => 0.011,
            'but_batasan' => '12 (dua belas) kali per tahun',
            'but_fisik' => 'Dokumen implementasi teknologi data yang mencakup namun tidak terbatas pada: 1. hasil dan dokumentasi konfigurasi infrastruktur; 2. hasil pengujian fitur yang dibutuhkan pada teknologi data; 3. hasil dan dokumentasi implementasi logic atau rule yang berkaitan dengan proses penyimpanan, pemindahan, dan transformasi data; dan 4. hasil pengaturan hak akses dari pengguna teknologi data',
            'jenjang_id' => 2,
            'but_contoh' => 'Farrel Aditra, A.Md., seorang Pranata Komputer Mahir melakukan implementasi teknologi data terhadap sistem monitoring yang ada di organisasi, maka Farrel Aditra mendapat angka kredit sebesar 0,110. Jika Farrel Aditra tidak melakukan salah satu dari cakupan kegiatan implementasi teknologi data maka total angka kredit yang diperoleh adalah 3/4 x 0,110 =0,0825'
        ]);

        //24.
        Butir::create([
            'but_id' => '01B23',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Memberikan Support Pemecahan Masalah Teknologi Data',
            'but_slug' => 'memberikan-support-pemecahan-masalah-teknologi-data',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'support,problem,solving,data,technology',
            'but_desc' => 'Memberikan support pemecahan masalah teknologi data merupakan kegiatan yang berkaitan dukungan teknis dan operasional terhadap pemecahan masalah penggunaan teknologi data sesuai dengan kebutuhan organisasi dalam pengelolaan data. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. melaksanakan tindakan preventive untuk mengantisipasi hal-hal yang tidak terduga dan dapat berdampak pada sistem dan pengguna data (seperti, backup dan recovery baik data maupun konfigurasi lainnya); 2. mengelola physical storage environment, 3. mengelola kinerja teknologi data (seperti, memastikan ketersediaan space, optimisasi query, dan hal lainnya yang memungkinkan teknologi data dapat memberikan hasil yang optimal dan efisien); 4. memberikan hak akses teknologi data berdasarkan permintaan akses teknologi data yang telah disetujui; dan 5. troubleshooting jika terdapat gangguan selama penggunaan teknologi data',
            'but_satuan' => 'Laporan pemecahan masalah teknologi data',
            'but_kredit' => 0.0275,
            'but_batasan' => '1 (satu) kali per bulan',
            'but_fisik' => 'Laporan pemecahan masalah teknologi data yang mencakup namun tidak terbatas pada: 1. hasil dan dokumentasi tindakan preventive yang dilakukan; atau 2. hasil monitoring physical storage environment; atau 3. hasil dan dokumentasi pengelolaan kinerja teknologi data; atau 4. dokumentasi pemenuhan permintaan hak akses; atau 5. dokumentasi troubleshooting terhadap gangguan penggunaan teknologi data',
            'jenjang_id' => 2,
            'but_contoh' => 'Iman Santoso, A.Md., seorang Pranata Komputer Mahir melakukan support pemecahan masalah teknologi data dalam bentuk implementasi tindakan preventif, maka Iman Santoso mendapat angka kredit sebesar 0,028. Jika Iman Santoso juga melakukan troubleshooting maka Iman Santoso juga akan mendapatkan angka kredit 0,028. Sehingga total angka kredit yang diperoleh adalah 2 x 0,028 =0,056'
        ]);

        //25.
        Butir::create([
            'but_id' => '01B24',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Implementasi Data Warehouse',
            'but_slug' => 'melakukan-implementasi-data-warehouse',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'implementation,data,werehouse',
            'but_desc' => 'Melakukan implementasi data warehouse adalah implementasi pembentukan skema warehouse ke suatu RDBMS hingga didapatkannya skema warehouse yang di dalamnya berupa datamart/data cube berdasarkan rancangan skema warehouse dan mekanisme pembentukan warehouse, data inputan yang telah disiapkan. Kegiatan melakukan implementasi data warehouse bertujuan untuk menerapkan racangan warehouse yang sudah dibuat ke dalam suatu media DBMS termasuk memasukkan data yang dibutuhkan hingga terbentuk datamart yang didalamnya terdapat sejumlah tabel dimension dan tabel fact. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. mempelajari rancangan skema data warehouse; 2. implementasi rancangan skema data warehouse ke suatu RDBMS terpilih; 3. proses ETL data inputan hingga data ter-ingest ke dalam skema data warehouse yang telah terimplementasi; dan 4. pengecekan hasil ETL dan evaluasi hasil impelementasi data warehouse secara keseluruhan',
            'but_satuan' => 'Laporan implementasi data warehouse',
            'but_kredit' => 0.076,
            'but_batasan' => '0',
            'but_fisik' => 'Laporan implementasi data warehouse mencakup namun tidak terbatas pada: 1. dokumentasi hasil implementasi skema data warehouse ke RDBMS terpilih; 2. dokumentasi proses ETL data inputan hingga data ter-ingest ke dalam skema data warehouse yang telah terimplementasi; dan 3. dokumen pengecekan hasil ETL dan evaluasi hasil impelementasi data warehouse',
            'jenjang_id' => 3,
            'but_contoh' => 'Ahmad Sobari, A.Md., seorang Pranata Komputer Penyelia melakukan implementasi data warehouse akan secara lengkap dan tuntas sehingga diberikan angka kredit sebesar 0,760, Jika Ahmad Sobari tidak melakukan salah satu dari cakupan kegiatan, maka total angka kredit yang diperoleh adalah 5/6 x 0,760 = 0,633'
        ]);

        //26.
        Butir::create([
            'but_id' => '01B25',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Pemantauan (Monitoring) Autentifikasi Atau Perilaku Akses Pengguna',
            'but_slug' => 'melakukan-pemantauan-mMonitoring-autentifikasi-atau-perilaku-akses-pengguna',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'monitoring,authentication,user,access',
            'but_desc' => 'Autentifikasi atau perilaku akses pengguna adalah mekanisme pemberian hak akses terhadap suatu sistem kepada pengguna tertentu. Mekanisme ini diterapkan dalam pengaturan hak akses database ataupun hak akses terhadap suatu aplikasi/sistem informasi. Kegiatan pemantauan (monitoring) autentifikasi atau perilaku akses pengguna adalah melakukan pemantauan (monitoring) rekaman (log) akses pengguna terhadap basis data yang bisa berupa keseluruhan basis data (database), tabel atau set data tertentu. Selain itu, kegiatan ini juga mengidentifikasi jika ditemukan pelanggaran hak akses terhadap basis data, baik secara konfigurasi maupun algoritma aplikasi/sistem informasi. Tujuan kegiatan ini adalah memastikan pengguna yang mengakses suatu sistem dapat melakukan operasi sesuai dengan batas yang ditentukan. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. mengidentifikasi hak akses pengguna terhadap basis data (database); 2. mengidentifikasi rekaman (log) akses user terhadap suatu basis data (database); 3. melakukan uji keabsahan pengguna terhadap data set tertentu; dan 4. mendokumentasikan berupa log akses basis data atau log pengguna jika berupa sistem informasi. Untuk log sistem informasi menyesuaikan dengan arsitektur sistem yang dibuat.',
            'but_satuan' => 'Laporan hasil pemantauan autentifikasi atau perilaku akses pengguna',
            'but_kredit' => 0.1275,
            'but_batasan' => '1 (satu) kali per bulan',
            'but_fisik' => 'Laporan hasil pemantauan autentifikasi atau perilaku akses pengguna ini mencakup namun tidak terbatas pada: 1. hasil identifikasi hak akses pengguna terhadap basis data (database); 2. hasil rekaman (log) akses user terhadap suatu basis data; 3. hasil uji keabsahan pengguna terhadap data set tertentu; dan 4. log akses basis data atau log pengguna jika berupa sistem informasi',
            'jenjang_id' => 2,
            'but_contoh' => 'Sutisna, A.Md., seorang Pranata Komputer Mahir melakukan uji coba terhadap sistem berbasis web yang telah berjalan. Dia melihat akses IP terhadap server melalui cpanel, dan membuat laporan daftar IP yang dicurigai ilegal. Jika dia menyusun laporan akses server tersebut, maka Sutisna mendapatkan angka kredit 0,128'
        ]);

        //27.
        Butir::create([
            'but_id' => '01B26',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Registrasi Permasalahan Kualitas Data',
            'but_slug' => 'melakukan-registrasi-permasalahan-kualitas-data',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'registration,problem,data,quality',
            'but_desc' => 'Melakukan registrasi permasalahan kualitas data adalah kegiatan yang mendaftarkan, mencatat, logging, atau mendokumentasikan setiap permasalahan kualitas data, baik yang di-trigger oleh keluhan user dan/atau yang diidentifikasi oleh Pranata Komputer terkait. Masalah kualitas data biasanya muncul ketika end-user tidak dapat mengakses sumber data atau menyajikan data secara tidak biasa. Contoh permasalahan yang terjadi: Terdapat nilai dari suatu field yang missing. Istilah kualitas data mengacu pada karakteristik/dimensi yang terkait dengan data berkualitas tinggi dan proses yang digunakan untuk mengukur atau meningkatkan kualitas data. Data dikatakan berkualitas tinggi jika memenuhi harapan, tujuan, dan kebutuhan data konsumen. Tahapan kegiatan ini mencakup namun tidak terbatas pada mengidentifikasi dan mencatat permasalahan kualitas data berdasarkan laporan dari user dan/atau yang diidentifikasi oleh Pranata Komputer. Pencatatan permasalahan dapat berupa nama user yang melaporkan serta bagian/departemen asalnya (jika permasalahan berasal dari pelaporan user), sumber data yang bermasalah, dan deskripsi permasalahan',
            'but_satuan' => 'Dokumen hasil registrasi permasalahan kualitas data',
            'but_kredit' => 0.225,
            'but_batasan' => '1 (satu) kali per bulan untuk setiap sumber data',
            'but_fisik' => 'Dokumentasi hasil registrasi permasalahan kualitas data yang mencakup namun tidak terbatas pada: 1. deskripsi terkait sumber data; 2. nama dan satuan kerja user pengguna data, serta keluhannya (jika permasalahan kualitas di-trigger oleh user); 3. tahapan identifikasi permasalahan kualitas data; dan 4. ringkasan daftar permasalahan kualitas data yang terjadi/ditemukan',
            'jenjang_id' => 2,
            'but_contoh' => 'Suwardono, A.Md., seorang Pranata Komputer Mahir melakukan profiling data Sensus Penduduk 2020 untuk mendapatkan permasalahan kualitas data yang terjadi, maka Suwardono mendapatkan angka kredit sebesar 0,225. Jika Suwardono juga mendapat keluhan dari pengguna data bahwa terdapat data yang duplikasi, sehingga Suwardono perlu mengidentifikasi detail permasalahan data yang terjadi dan menemukan kumpulan data yang duplikasi tersebut. Sehingga dari kegiatan-kegiatan tersebut Suwardono mendapatkan angka kedit sebesar 2 x 0,225 = 0,450'
        ]);

        //28.
        Butir::create([
            'but_id' => '01B27',
            'kategori02_id' => 2,
            'but_kegiatan' => 'Melakukan Pemantauan (Monitoring) Implementasi Prosedur Pengelolaan Kualitas Data',
            'but_slug' => 'melakukan-pemantauan-monitoring-implementasi-prosedur-pengelolaan-kualitas-data',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'monitoring,implementation,procedure,management,data,quality',
            'but_desc' => 'Melakukan pemantauan implementasi prosedur pengelolaan kualitas data adalah proses menganalisa rangkaian kegiatan pengelolaan data dari mekanisme input hingga menjadi sebuah data yang siap diolah atau didiseminasikan lebih lanjut. Rangkaian kegiatan pengelolaan data dapat berupa standar pengelolaan data), validasi isian data dan proses memastikan kelengkapan data baik secara individu maupun batch. Tujuan kegiatan ini adalah memastikan setiap proses pengelolaannya sudah melewati standar yang telah diterapkan sehingga menghasilkan data yang berkualitas. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. mengidentifikasi implementasi prosedur pengelolaan kualitas data yang akan dipantau; 2. mengidentifikasi standar pengelolaan kualitas data yang akan digunakan; 3. melakukan pemantauan proses pengelolaan data sudah sesuai dengan prosedur yang ditetapkan seperti urutan melakukan input data; 4. melakukan pemantauan terhadap kelengkapan data (keterisian dan kelengkapan) sehingga menghasilkan data yang berkualitas dan terpercaya; 5. melakukan pemantauan terhadap validasi set data yang telah dimasukkan sehingga memenuhi standar yang diharapkan; dan 6. mendokumentasikan hasil kegiatan pemantauan (monitoring) implementasi prosedur pengelolaan kualitas data',
            'but_satuan' => 'Laporan hasil pemantauan implementasi prosedur pengelolaan kualitas data',
            'but_kredit' => 0.225,
            'but_batasan' => '1 (satu) kali per bulan',
            'but_fisik' => 'Laporan hasil pemantauan implementasi prosedur pengelolaan kualitas data ini mencakup namun tidak terbatas pada: 1. hasil identifikasi implementasi prosedur pengelolaan kualitas data yang akan dipantau; 2. standar pengelolaan kualitas data yang akan digunakan; 3. hasil pemantauan proses pengelolaan data sudah sesuai dengan prosedur yang ditetapkan seperti urutan melakukan input data; 4. hasil pemantauan kelengkapan data (keterisian dan kelengkapan) sehingga menghasilkan data yang berkualitas dan terpercaya; 5. hasil pemantauan validasi terhadap data set yang telah dimasukkan sehingga memenuhi standar yang diharapkan; dan 6. dokumentasi kegiatan pemantauan',
            'jenjang_id' => 2,
            'but_contoh' => 'Renata Halim, A.Md., seorang Pranata Komputer Mahir menjadi supervisor data entri suatu survei di instansi kabupaten yang bertugas untuk memantau implementasi prosedur pengelolaan kualitas data entri. Renata Halim memantau proses data entrinya dan memastikan bahwa rangkaian kegiatan data entrinya sesuai dengan prosedur yang telah ditetapkan. Selanjutnya, Renata Halim memerika kelengkapan dan validasi hasil entri tersebut. Jika seluruh rangkaian kegiatan tersebut dilakukan dan didokumentasikan, maka Renata Halim mendapatkan angka kredit sebesar 0,225'
        ]);

        //29.
        Butir::create([
            'but_id' => '01C01',
            'kategori02_id' => 3,
            'but_kegiatan' => 'Melakukan Pengumpulan Informasi Dasar untuk Kebutuhan Audit TI',
            'but_slug' => 'melakukan-pengumpulan-informasi-dasar-untuk-kebutuhan-audit-ti',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'collection,base,information,audit,technology',
            'but_desc' => 'Melakukan pengumpulan informasi dasar untuk kebutuhan audit TI adalah melakukan pengumpulan, pemeliharaan dan verifikasi kelengkapan informasi dasar dari area dan obyek TI yang diaudit. Informasi dasar mencakup informasi yang melekat pada area dan obyek TI yang diaudit, misalnya informasi tentang kontrol apa saja yang sudah ada di instansi, seberapa efektif implementasi kontrol tersebut, dan sebagainya. Informasi dasar terdapat pada seluruh rangkaian proses audit dari awal perencanaan hingga akhir penyusunan laporan audit. Pengumpulan informasi dilakukan secara sistematis berdasarkan konteks dan cakupan audit dengan menggunakan metode atau pendekatan yang sesuai, serta memperhatikan referensi waktu audit. Beberapa cara untuk mendapatkan informasi diantaranya melalui ekstraksi dari dokumen, wawancara dengan auditee, pengujian kontrol, melakukan observasi dan assessment mandiri, serta pendekatan lain yang sesuai dengan kebutuhan audit. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. identifikasi area dan obyek TI yang akan diaudit; dan 2. pengumpulan informasi dasar untuk kebutuhan audit TI. Cakupan area TI meliputi namun tidak terbatas pada: keamanan informasi, manajemen layanan, manajemen konfigurasi, operasional sistem. Sedangkan cakupan obyek TI meliputi namun tidak terbatas pada: perangkat keras, piranti lunak, sarana komunikasi, serta fasilitas apapun yang dapat digunakan untuk menginput, menyimpan, mengirimkan, memproses, dan menghasilkan data dalam berbagai bentuk',
            'but_satuan' => 'Dokumen informasi dasar audit TI',
            'but_kredit' => 0.38,
            'but_batasan' => 'Kegiatan ini dapat dilakukan untuk setiap area TI yang dilakukan audit. Jumlah maksimum kegiatan yang dapat dinilai adalah 2 (dua) kali per tahun',
            'but_fisik' => 'Dokumentasi informasi dasar audit TI yang memuat namun tidak terbatas pada: 1. area dan obyek TI yang akan diaudit; 2. waktu pengumpulan informasi dasar; 3. daftar informasi yang dikumpulkan untuk tiap-tiap obyek audit; dan 4. metode pengumpulan dari setiap butir informasi dasar',
            'jenjang_id' => 2,
            'but_contoh' => '<p>Nia Paramita, A.Md., seorang Pranata Komputer Mahir melakukan pengumpulan informasi untuk audit TI terhadap area keamanan informasi yang terdiri dari 3 obyek keamanan informasi, yaitu keamanan informasi pada aplikasi kepegawaian, keamanan informasi aplikasi keuangan, dan keamanan informasi aplikasi perencanaan dengan lengkap, maka angka kredit yang diperoleh adalah 1 x 0,380 = 0,380.</p><p>Satuan kegiatan ini adalah keamanan informasi yang merupakan 1 area TI. Angka kredit tersebut diperoleh jika Pranata Komputer menyerahkan bukti fisik yang lengkap. Namun, jika Pranata Komputer tersebut tidak menyertakan bukti fisik metode pengumpulan informasi, maka angka kredit yang diperoleh adalah 3/4 x 0,380 = 0,285.</p>'
        ]);

        //30.
        Butir::create([
            'but_id' => '01C02',
            'kategori02_id' => 3,
            'but_kegiatan' => 'Melakukan Pengumpulan Dokumen untuk Kebutuhan Audit TI',
            'but_slug' => 'melakukan-pengumpulan-dokumen-untuk-kebutuhan-audit-ti',
            'but_excerpt' => 'Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user',
            'but_key' => 'collecting,document,audit,information,technology',
            'but_desc' => 'Melakukan pengumpulan dokumen untuk kebutuhan audit TI adalah melakukan pengumpulan, pemeliharaan dan verifikasi kelengkapan dokumen dari area dan obyek TI yang diaudit. Pengumpulan dokumen dilakukan secara sistematis berdasarkan konteks dan cakupan audit dengan menggunakan metode atau pendekatan yang sesuai, serta memperhatikan referensi waktu audit. Dokumen untuk kebutuhan audit TI dapat berupa hardcopy maupun softcopy yang diperoleh dari auditee atau stakeholder terkait. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. identifikasi area dan obyek TI yang akan diaudit; 2. identifikasi dokumen-dokumen yang dibutuhkan untuk audit TI; dan 3. pengumpulan dokumen-dokumen untuk kebutuhan audit TI. Dokumen yang dikumpulkan dapat berupa hardcopy maupun softcopy yang berkaitan dengan area dan obyek TI yang diaudit. Misalnya dokumentasi pembangunan sistem, dokumentasi bugs aplikasi, dokumentasi rancangan arsitektur, dan sebagainya. Cakupan area TI meliputi namun tidak terbatas pada: keamanan informasi, manajemen layanan, manajemen konfigurasi, operasional sistem. Sedangkan cakupan obyek TI: perangkat keras, piranti lunak, sarana komunikasi, serta fasilitas apapun yang dapat digunakan untuk menginput, menyimpan, mengirimkan, memproses, dan menghasilkan data dalam berbagai bentuk',
            'but_satuan' => 'Dokumen untuk kebutuhan audit TI',
            'but_kredit' => 0.73,
            'but_batasan' => 'Jumlah maksimum kegiatan yang dapat dinilai adalah 2 (dua) kali per tahun. Nilai angka kredit maksimal akan diberikan jika minimal ada 3 obyek yang dicakup dalam 1 area TI. Jika hanya ada 1 obyek, maka akan diberikan nilai angka kredit sepertiganya',
            'but_fisik' => 'Dokumen untuk kebutuhan audit TI yang dikumpulkan memuat namun tidak terbatas pada: 1. area dan obyek TI yang akan diaudit; 2. waktu pengumpulan dokumen; 3. daftar informasi yang dikumpulkan untuk tiap-tiap obyek audit 4. metode pengumpulan dokumen; dan 5. dokumentasi area dan obyek TI yang diaudit',
            'jenjang_id' => 3,
            'but_contoh' => '<p>Dewa Mahendra, A.Md., seorang Pranata Komputer Penyelia melakukan pengumpulan dokumen untuk kebutuhan audit TI terhadap area keamanan informasi pada perangkat lunak (aplikasi) yang terdiri dari 3 obyek dokumentasi, yaitu dokumentasi pembangunan aplikasi, dokumentasi bugs aplikasi, dokumentasi rancangan arsitektur aplikasi, maka angka kredit yang diperoleh Dewa Mahendra adalah 1 x 0,730 = 0,730.</p><p>Satuan kegiatan ini adalah keamanan informasi yang merupakan 1 area TI. Angka kredit tersebut diperoleh jika Pranata Komputer menyerahkan bukti fisik yang lengkap. Namun, jika Pranata Komputer tersebut tidak menyertakan bukti fisik metode pengumpulan informasi, maka angka kredit yang diperoleh adalah 4/5 x 0,730 = 0,584</p>'
        ]);

        

        //Jenjang
        Jenjang::create([
            'jen_id' => 'TE01',
            'jab_id' => 'TE',
            'jen_jenjang' => 'Pranata Komputer Terampil',
            'jen_slug' => 'pranata-komputer-terampil'
        ]);
            
        Jenjang::create([
            'jen_id' => 'TE02',
            'jab_id' => 'TE',
            'jen_jenjang' => 'Pranata Komputer Mahir',
            'jen_slug' => 'pranata-komputer-mahir'
        ]);
            
        Jenjang::create([
            'jen_id' => 'TE03',
            'jab_id' => 'TE',
            'jen_jenjang' => 'Pranata  Komputer Penyelia',
            'jen_slug' => 'pranata-komputer-penyelia'
        ]);
        
        Jenjang::create([
            'jen_id' => 'AH01',
            'jab_id' => 'AH',
            'jen_jenjang' => 'Pranata Komputer Ahli Pertama',
            'jen_slug' => 'pranata-komputer-ahli-pertama'
        ]);
        
        Jenjang::create([
            'jen_id' => 'AH02',
            'jab_id' => 'AH',
            'jen_jenjang' => 'Pranata Komputer Ahli Muda',
            'jen_slug' => 'pranata-komputer-ahli-muda'
        ]);
        
        Jenjang::create([
            'jen_id' => 'AH03',
            'jab_id' => 'AH',
            'jen_jenjang' => 'Pranata  Komputer Ahli Madya',
            'jen_slug' => 'pranata-komputer-ahli-madya'
        ]);
        
        Jenjang::create([
            'jen_id' => 'AH04',
            'jab_id' => 'AH',
            'jen_jenjang' => 'Pranata  Komputer Ahli Utama',
            'jen_slug' => 'pranata-komputer-ahli-utama'
        ]);

        //Kategori 1
        Kategori01::create([
            'kat01_id' => '01',
            'kat01_kategori' => 'Tata Kelola dan Tata Laksana Teknologi Informasi',
            'kat01_slug' => 'tata-kelola-dan-tata-taksana-teknologi-informasi'
        ]);
        
        Kategori01::create([
            'kat01_id' => '02',
            'kat01_kategori' => 'Infrastruktur Teknologi Informasi',
            'kat01_slug' => 'infrastruktur-teknologi-informasi'
        ]);
        
        Kategori01::create([
            'kat01_id' => '03',
            'kat01_kategori' => 'Sistem Informasi dan Multimedia',
            'kat01_slug' => 'sistem-informasi-dan-multimedia'
        ]);
        
        Kategori01::create([
            'kat01_id' => '04',
            'kat01_kategori' => 'Pengembangan Profesi',
            'kat01_slug' => 'pengembangan-profesi'
        ]);
        
        Kategori01::create([
            'kat01_id' => '05',
            'kat01_kategori' => 'Penunjang Kegiatan Teknologi Informasi Berbasis Komputer',
            'kat01_slug' => 'penunjang-kegiatan-teknologi-informasi-berbasis-komputer'
        ]);

        //Kategori 2    
        Kategori02::create([
            'kat02_id' => '01A',
            'kategori01_id' => '01',
            'kat02_kategori' => 'Manajemen Layanan TI',
            'kat02_slug' => 'manajemen-layanan-ti'
        ]);
            
        Kategori02::create([
            'kat02_id' => '01B',
            'kategori01_id' => '01',
            'kat02_kategori' => 'Pengelolaan Data (Data Management)',
            'kat02_slug' => 'pengelolaan-data-manajemen'
        ]);
        
        Kategori02::create([
            'kat02_id' => '01C',
            'kategori01_id' => '01',
            'kat02_kategori' => 'Audit TI',
            'kat02_slug' => 'audit-it'
        ]);
            
        Kategori02::create([
            'kat02_id' => '02A',
            'kategori01_id' => '02',
            'kat02_kategori' => 'Sistem Jaringan Komputer',
            'kat02_slug' => 'sistem-jaringan-komputer'
        ]);
        
        Kategori02::create([
            'kat02_id' => '02B',
            'kategori01_id' => '02',
            'kat02_kategori' => 'Manajemen Infrastruktur TI',
            'kat02_slug' => 'manajemen-infrastruktur-it'
        ]);
            
        Kategori02::create([
            'kat02_id' => '03A',
            'kategori01_id' => '03',
            'kat02_kategori' => 'Sistem Informasi',
            'kat02_slug' => 'sistem-informasi'
        ]);
            
        Kategori02::create([
            'kat02_id' => '03B',
            'kategori01_id' => '03',
            'kat02_kategori' => 'Pengolahan Data',
            'kat02_slug' => 'pengolahan-data'
        ]);
        
        Kategori02::create([
            'kat02_id' => '03C',
            'kategori01_id' => '03',
            'kat02_kategori' => 'Area TI Special/Khusus',
            'kat02_slug' => 'area-ti-special-khusus'
        ]);
            
        Kategori02::create([
            'kat02_id' => '04A',
            'kategori01_id' => '04',
            'kat02_kategori' => 'Perolehan Ijazah/gelar pendidikan formal sesuai dengan bidang tugas Jabatan Fungsional Pranata Komputer',
            'kat02_slug' => 'perolehan-ijazah-gelar-pendidikan-formal-sesuai-dengan-bidang-tugas-jabatan-fungsional-pranata-komputer'
        ]);
            
        Kategori02::create([
            'kat02_id' => '04B',
            'kategori01_id' => '04',
            'kat02_kategori' => 'Pembuatan Karya Tulis/Karya Imiah di Bidang Teknologi Informasi Berbasis Komputer',
            'kat02_slug' => 'pembuatan-karya-tulis-karya-imiah-di-bidang-teknologi-informasi-berbasis-komputer'
        ]);
            
        Kategori02::create([
            'kat02_id' => '04C',
            'kategori01_id' => '04',
            'kat02_kategori' => 'Penerjemahan/Penyaduran Buku dan Bahan bahan Lain di Bidang Teknologi Informasi Berbasis Komputer',
            'kat02_slug' => 'Penerjemahan-penyaduran-buku-dan-bahan-bahan-lain-di-bidang-teknologi-informasi-berbasis-komputer'
        ]);
            
        Kategori02::create([
            'kat02_id' => '04D',
            'kategori01_id' => '04',
            'kat02_kategori' => 'Penyusunan Standar/Pedoman/Petunjuk Pelaksanaan/Petunjuk Teknis di Bidang Teknologi Informasi Berbasis Komputer',
            'kat02_slug' => 'penyusunan-standar/pedoman/petunjuk-pelaksanaan/petunjuk-teknis-di-bidang-teknologi-informasi-berbasis-komputer'
        ]);
            
        Kategori02::create([
            'kat02_id' => '04E',
            'kategori01_id' => '04',
            'kat02_kategori' => 'Pengembangan Kompetensi di Bidang Teknologi Informasi Berbasis Komputer',
            'kat02_slug' => 'pengembangan-kompetensi-di-bidang-teknologi-informasi-berbasis-komputer'
        ]);
            
        Kategori02::create([
            'kat02_id' => '04F',
            'kategori01_id' => '04',
            'kat02_kategori' => 'Kegiatan lain yang mendukung pengembangan profesi yang ditetapkan oleh Instansi Pembina',
            'kat02_slug' => 'kegiatan-lain-yang-mendukung-pengembangan-profesi-yang-ditetapkan-oleh-instansi-pembina'
        ]);
            
        Kategori02::create([
            'kat02_id' => '05A',
            'kategori01_id' => '05',
            'kat02_kategori' => 'Pengajar/Pelatih di bidang teknologi informasi berbasis komputer',
            'kat02_slug' => 'pengajar-pelatih-di-bidang-teknologi-informasi-berbasis-komputer'
        ]);
            
        Kategori02::create([
            'kat02_id' => '05B',
            'kategori01_id' => '05',
            'kat02_kategori' => 'Keanggotaan dalam Tim Penilai /Tim Uji Kompetensi',
            'kat02_slug' => 'keanggotaan-dalam-tim-penilai-tim-uji-kompetensi'
        ]);
            
        Kategori02::create([
            'kat02_id' => '05C',
            'kategori01_id' => '05',
            'kat02_kategori' => 'Perolehan Penghargaan/Tanda Jasa',
            'kat02_slug' => 'perolehan-penghargaan-tanda-jasa'
        ]);
            
        Kategori02::create([
            'kat02_id' => '05D',
            'kategori01_id' => '05',
            'kat02_kategori' => 'Perolehan Gelar Kesarjanaan Lainnya',
            'kat02_slug' => 'perolehan-gelar-kesarjanaan-lainnya'
        ]);
            
        Kategori02::create([
            'kat02_id' => '05E',
            'kategori01_id' => '05',
            'kat02_kategori' => 'Pelaksanaan Tugas Lain yang Mendukung Pelaksanaan Tugas Pranata Komputer',
            'kat02_slug' => 'pelaksanaan-tugas-lainnya-yang-mendukung-pelaksanaan-tugas-pranata-komputer'
        ]);
        
        
    }
}

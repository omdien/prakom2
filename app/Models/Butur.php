<?php

namespace App\Models;

class Butur
{
    private static $butirbutir = [
        [
            "but_kegiatan" => "Melakukan Perawatan Arsitektur Teknologi Data",
            "but_slug" => "melakukan-perawatan-arsitektur-teknologi-data",
            "but_batasan" => "1 (satu) laporan per bulan",
            "but_desc" => "Melakukan perawatan arsitektur teknologi data adalah melakukan kegiatan pemeliharaan, memonitor berjalannya arsitektur teknologi data yang telah diimplementasikan oleh suatu institusi/organisasi berdasarkan metrik tertentu serta pendokumentasian terhadap arsitektur teknologi saat ini atau saat ada perubahan tertentu. Kegiatan ini bertujuan untuk memastikan operasional arsitektur teknologi data yang telah diimplementasikan tetap berjalan sebagaimana mestinya dan jika ada perubahan maka akan terdokumentasi dengan baik. Arsitektur teknologi data mendefinisikan teknologi data yang dibutuhkan untuk mendukung kebutuhan bisnis. Tahapan kegiatan ini mencakup namun tidak terbatas pada: 1. mengidentifikasi arsitektur teknologi data yang akan dirawat/ dipelihara; 2. memonitor dan memelihara arsitektur teknologi data yang telah diimplementasikan/sedang berjalan termasuk jika terdapat kerusakan pada item-item teknologi data pada arsitektur tersebut; 3. mengidentifikasi perubahan arsitektur teknologi data; dan 4. mendokumentasikan versioning dan log arsitektur teknologi data yang telah diimplementasikan/sedang berjalan serta perubahan arsitektur teknologi data berdasarkan kesesuaian dengan dokumen kebutuhan data organisasi"
        ],
        [
            "but_kegiatan" => "Melakukan Pemenuhan Permintaan dan Layanan Teknologi Informasi Editan",
            "but_slug" => "melakukan-pemenuhan-permintaan-dan-layanan-teknologi-informasi",
            "but_batasan" => "4 (empat) kali per bulan",
            "but_desc" => "Pemenuhan Permintaan Layanan Teknologi Informasi (TI) merupakan proses penyelesaian permintaan peralatan teknologi informasi dan atau layanan teknologi informasi dari user atau pengguna yang merupakan bagian dari operasi normal institusi. Tujuan dari proses ini adalah memenuhi permintaan pengguna terhadap permintaan peralatan/peranti TI dan atau layanan TI. Pengguna merupakan pegawai, klien, unit organisasi, dan tim TI, yang memanfaatkan layanan TI sebagai pengguna akhir"
        ]
    ];

    public static function all()
    {
        //return self::$butirbutir;
        return collect(self::$butirbutir);
    }
    
    public static function find($slug)
    {
        $butirs = static::all();
        return $butirs->firstWhere('but_slug',$slug);
    }
    

}

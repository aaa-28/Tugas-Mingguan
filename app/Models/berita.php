<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
        [
            "judul" => "Barcelona Kalah dalam Laga Liga Spanyol",
            "slug" => "barcelona-kalah-liga-spanyol",
            "penulis" => "Rizky Adi",
            "konten" => "Barcelona menelan kekalahan 1-2 dari Real Madrid dalam laga El Clasico terakhir. Kekalahan ini membuat posisi Barcelona di klasemen semakin terancam.",
        ],
        [
            "judul" => "Manchester United Menang Beruntun",
            "slug" => "manchester-united-menang-beruntun",
            "penulis" => "Siti Rahma",
            "konten" => "Manchester United kembali meraih kemenangan 3-1 atas Liverpool di Premier League, memperpanjang tren positif mereka menjadi tiga kemenangan beruntun.",
        ],
        [
            "judul" => "King Manchester United is Back",
            "slug" => "king-manchester-united-is-back",
            "penulis" => "Budi Santoso",
            "konten" => "Manchester United menunjukkan performa luar biasa dengan kemenangan beruntun, membuat penggemar yakin bahwa 'King Manchester United is back' di Premier League musim ini.",
        ],
    ];

    public static function ambildata()
    {
        return self::$data_berita;
    }

    public static function caridata($slug)
    {
        foreach(self::$data_berita as $berita) 
        {
            if($berita["slug"] === $slug)
            {
                return $berita;
            }
        }

        return null; // jika tidak ditemukan
    }
}

<?php

namespace Database\Seeders;

use App\Models\Pesan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $isis = [
            'Selamat ya',
            'Cie udah nikah',
            'Selamat Silva dan suami, semoga Sakinah, Mawaddah, Warohmah, Amin',
            'Nanda satset wash wush bener',
            'Selamat nanda',
            'Semoga sehidup sesurga',
            'Keren, duo bocil udah nikah',
            'Minta doanya semoga aku cepet nyusul',
            'Udah sold out aja nih',
            'WIIIIIIIIII GANYANGKA UDAH NIKAH AJA BESTIEEE, JANGAN LUPA DOAIN TEMENMU INI BIAR CEPET LAKU',
            'Anjay udah nikah aja bre, kirain kemarin bercanda'
        ];

        for($i = 1 ; $i < 97; $i++){
            $pesan = new Pesan();
            $pesan->isi = $isis[rand(0,10)];
            $pesan->undangan_id = $i;
            $pesan->save();
        }
    }
}

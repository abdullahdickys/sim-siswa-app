<?php

use Illuminate\Database\Seeder;
use App\Siswa;

class siswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 6; $i++) {
        	Siswa::create([
        		'nama_depan' => str_random(10),
        		'nama_belakang' => str_random(10),
        		'jenis_kelamin' => str_random(10),
        		'agama' => str_random(6),
        		'alamat' => str_random(25)
        	]);
    	}
    }
}

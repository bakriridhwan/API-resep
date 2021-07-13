<?php

use Illuminate\Database\Seeder;
use App\Resep;

class ResepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Resep::create([
            "judul" => "Rendang",
            "imageUrl" => "https://www.masakan-rumahan.com/wp-content/uploads/2020/05/Rendang-Daging-Dapur-Siena-2.jpg",
            "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
            "bahan" => "daging",
            "langkah" => "ada daging"
        ]);

        Resep::create([
            "judul" => "Ikan Bakar",
            "imageUrl" => "https://asset.kompas.com/crops/J0ARoySS4ZFviSelgHTMsxHPNv0=/0x0:1000x667/750x500/data/photo/2020/12/17/5fdb3cd0c1525.jpg",
            "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
            "bahan" => "<li>Ikan</li><li>ikan2</li><li>Ikan3</li><li>Ikan4</li>",
            "langkah" => "ada ikan"
        ]);
    }
}

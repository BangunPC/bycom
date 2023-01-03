<?php

namespace Database\Seeders;

use App\Models\InternalStorage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InternalStorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            
            [
                "name" => "Transcend MTS830 512GB M.2 SATA III",
                "price" => 683000,
                "url" => "https://tokopedia.link/2UUalAovfwb",
                "image" => "Transcend MTS830 512GB M.2 SATA III.jpg",
                "capacity" => "512GB",
                "type" => "SSD M.2 Sata III"
            ],

            [
                "name" => "Samsung SSD 980 M.2 PCIe Gen3 x4 500GB MZ-V8V500BW",
                "price" => 841000,
                "url" => "https://tokopedia.link/vnT9icavfwb",
                "image" => "Samsung SSD 980 M.2 PCIe Gen3 x4 500GB MZ-V8V500BW.png",
                "capacity" => "500GB",
                "type" => "SSD NVME"
            ],

            [
                "name" => "SSD ADATA SU800 1TB SATA III",
                "price" => 2105000,
                "url" => "https://tokopedia.link/oXQD2MCvfwb",
                "image" => "SSD ADATA SU800 1TB SATA III.jpg",
                "capacity" => "1TB",
                "type" => "SSD SATA III"
            ],

            [
                "name" => "Toshiba 2TB SATA3 256MB 7200RPM - P300 Series",
                "price" => 801000,
                "url" => "https://tokopedia.link/x53R21Kvfwb",
                "image" => "Toshiba 2TB SATA3 256MB 7200RPM - P300 Series.png",
                "capacity" => "2TB",
                "type" => "HDD 7200RPM"
            ],

            [
                "name" => "WDC Purple Surveillance 2TB - WD22PURZ",
                "price" => 897000,
                "url" => "https://tokopedia.link/WyrwxaOvfwb",
                "image" => "WDC Purple Surveillance 2TB - WD22PURZ.jpg",
                "capacity" => "2TB",
                "type" => "HDD 5400RPM"
            ],

            [
                "name" => "Seagate 1TB SATA3",
                "price" => 641000,
                "url" => "https://tokopedia.link/PYqOXxE5hwb",
                "image" => "Seagate 1TB SATA3.jpg",
                "capacity" => "1TB",
                "type" => "HDD 7200RPM"
            ],

            [
                "name" => "Kingston SSD NV2 250GB",
                "price" => 423000,
                "url" => "https://tokopedia.link/0KveeMd6hwb",
                "image" => "Kingston SSD NV2 250GB.jpg",
                "capacity" => "250GB",
                "type" => "SSD NVME PCIe Gen 4.0"
            ],

            [
                "name" => "Crucial P3 Plus SSD 500GB",
                "price" => 765000,
                "url" => "https://tokopedia.link/HmRX8l56hwb",
                "image" => "Crucial P3 Plus SSD 500GB.png",
                "capacity" => "500GB",
                "type" => "SSD NVME PCIe Gen 4.0"
            ],

            [
                "name" => "Team T-Force Vulcan Z SSD 240GB SATA3",
                "price" => 326000,
                "url" => "https://tokopedia.link/EuMWLwbiiwb",
                "image" => "Team T-Force Vulcan Z SSD 240GB SATA3.jpg",
                "capacity" => "240gb",
                "type" => "SSD SATA III"
            ],

            [
                "name" => "V-GeN Rescue SSD 960GB SATA3",
                "price" => 793000,
                "url" => "https://tokopedia.link/aR6CDmqiiwb",
                "image" => "V-GeN Rescue SSD 960GB SATA3.jpg",
                "capacity" => "960GB",
                "type" => "SSD SATA III"
            ]
        ];
        InternalStorage::insert($data);
    }
}

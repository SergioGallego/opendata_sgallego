<?php

namespace Database\Seeders;

use App\Models\Font;
use Illuminate\Database\Seeder;

class FontSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $table = 'fonts';
    $file = public_path("/seeders/$table".".csv");

    function import_CSV($filename, $delimiter = ','){
        if(!file_exists($filename) || !is_readable($filename))
          return false;
        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false){
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false){
              if(!$header)
                $header = $row;
              else
                $data[] = array_combine($header, $row);
              }
              fclose($handle);
            }
        return $data;
    }

    $records = import_CSV($file);

    foreach ($records as $key => $record) {
        Font::create([
          'NOM' => $record['NOM'],
          'ADREÇA' => $record['ADREÇA'],
          'X_ETRS89' => $record['X_ETRS89'],
          'Y_ETRS89' => $record['Y_ETRS89'],
          'LATITUD' => $record['LATITUD'],
          'LONGITUD' => $record['LONGITUD'],
        ]);
      }
    }

    
}


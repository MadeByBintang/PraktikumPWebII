<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
  public function getBiodata()
  {
    return [
      'nama' => 'Adrian Bintang Saputera',
      'nim' => '2310817110006',
      'asal_prodi' => 'Teknologi Infomasi',
      'hobi' => 'Main Game',
      'skill' => 'PHP, HTML, CSS, Android, Kotlin',
      'gambar' => 'default.jpg'
    ];
  }
}

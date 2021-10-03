<?php

class Siswa_model
{
  private $swa = [
    [
      "nama" => "Raja Mahendra",
      "nis" => "28011",
      "email" => "maderaja@gmail",
      "jurusan" => "Teknik Informatika"
    ],
    [
      "nama" => "Jamal Biadab",
      "nis" => "28012",
      "email" => "jamal@gmail",
      "jurusan" => "Teknik Industri"
    ],
    [
      "nama" => "Yanto Dajjal",
      "nis" => "28013",
      "email" => "dajjal@gmail",
      "jurusan" => "Teknik Pertanian"
    ]
  ];


  public function getAllSiswa()
  {
    return $this->swa;
  }
}

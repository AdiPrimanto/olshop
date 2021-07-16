<?php

class User_Model {
    private $mhs = [
        [
            "nama" => "Caca Merica",
            "ipk" => "3.10",
            "nim" => "187289",
            "jurusan" => "MI",
        ],
        [
            "nama" => "Sasa Sambal sasa",
            "ipk" => "3.55",
            "nim" => "435346456",
            "jurusan" => "MI",
        ],
        [
            "nama" => "Naruto",
            "ipk" => "3.10",
            "nim" => "187289",
            "jurusan" => "MI",
        ],
        [
            "nama" => "Aldebaran Nahrowi",
            "ipk" => "3.98",
            "nim" => "232435454",
            "jurusan" => "MI",
        ],
    ];

    public function getUser() {
        return $this->mhs;
    }
}
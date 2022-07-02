<?php

abstract class Wisudawan
{

    protected $nama, $nim, $jurusan, $ipk, $gelar;

    public function __construct($nama = 'nama', $nim = 'nim', $jurusan = 'jurusan', $ipk = 0, $gelar = 'gelar')
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->ipk = $ipk;
        $this->gelar = $gelar;
    }

    abstract public function infoWisudawan();
}

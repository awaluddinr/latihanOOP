<?php


class Pujian extends Wisudawan implements WisudawanInt
{
    public $pujian;

    public function __construct($nama = 'nama', $nim = 'nim', $jurusan = 'jurusan', $ipk = 0, $gelar = 'gelar', $pujian)
    {
        parent::__construct($nama, $nim, $jurusan, $ipk, $gelar);

        $this->pujian = $pujian;
    }

    public function infoWisudawan()
    {
        $str = "{$this->nama} - {$this->nim} - {$this->jurusan} - {$this->ipk} - {$this->gelar}";

        return $str;
    }

    public function dataWisudawan()
    {
        $wis = "{$this->infoWisudawan()} - {$this->pujian}";

        return $wis;
    }
}

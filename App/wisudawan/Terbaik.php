<?php



class Terbaik extends Wisudawan implements WisudawanInt
{

    public $cumlaude;

    public function __construct($nama = 'nama', $nim = 'nim', $jurusan = 'jurusan', $ipk = 0, $gelar = 'gelar', $cumlaude)
    {
        parent::__construct($nama, $nim, $jurusan, $ipk, $gelar);

        $this->cumlaude = $cumlaude;
    }

    public function infoWisudawan()
    {
        $str = "{$this->nama} - {$this->nim} - {$this->jurusan} - {$this->ipk} - {$this->gelar}";

        return $str;
    }

    public function dataWisudawan()
    {
        $wis = "{$this->infoWisudawan()} - {$this->cumlaude}";

        return $wis;
    }
}

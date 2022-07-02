<?php

require_once 'Wisudawan.php';
require_once 'WisudawanInt.php';

class DaftarWisudawan
{
    public $wisudawan = [];

    public function tambahWisudawan($wisudawan)
    {
        $this->wisudawan[] = $wisudawan;
    }

    public function cetak()
    {
        $str = "Daftar Wisudawan :  <br>";

        foreach ($this->wisudawan as $alumni) {
            $str .= $alumni->dataWisudawan() . "<br>";
        }

        return $str;
    }
}

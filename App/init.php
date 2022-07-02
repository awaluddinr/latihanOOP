<?php

// require_once 'wisudawan/WisudawanInt.php';
// require_once 'wisudawan/Wisudawan.php';
// require_once 'wisudawan/Terbaik.php';
// require_once 'wisudawan/DaftarWisudawan.php';
// require_once 'wisudawan/Pujian.php';


spl_autoload_register(function ($class) {
    require_once __DIR__ . '/wisudawan/' . $class . '.php';
});

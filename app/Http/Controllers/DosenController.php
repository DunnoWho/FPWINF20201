<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{

    public function list()
    {
        return view("dosen.list", array("dosen" => $this->getDosen()));
    }

    private function getDosen()
    {
        return json_decode("[{\"kode\":\"D001\",\"nama\":\"Viola Matskevich\",\"rating\":3.8,\"mahasiswa\":2860,\"sks\":51,\"propic\":\"https://picsum.photos/id/1104/300/300\"},{\"kode\":\"D002\",\"nama\":\"Tamera Northen\",\"rating\":4.7,\"mahasiswa\":926,\"sks\":121,\"propic\":\"https://picsum.photos/id/1545/300/300\"},{\"kode\":\"D003\",\"nama\":\"Shelby Ryan\",\"rating\":9.2,\"mahasiswa\":105,\"sks\":144,\"propic\":\"https://picsum.photos/id/1530/300/300\"},{\"kode\":\"D004\",\"nama\":\"Chrisse Strahan\",\"rating\":4.5,\"mahasiswa\":7639,\"sks\":90,\"propic\":\"https://picsum.photos/id/1079/300/300\"},{\"kode\":\"D005\",\"nama\":\"Otto Lambal\",\"rating\":7.1,\"mahasiswa\":944,\"sks\":100,\"propic\":\"https://picsum.photos/id/1198/300/300\"},{\"kode\":\"D006\",\"nama\":\"Sandi Eller\",\"rating\":1.1,\"mahasiswa\":1812,\"sks\":92,\"propic\":\"https://picsum.photos/id/1721/300/300\"},{\"kode\":\"D007\",\"nama\":\"Enrichetta Zuker\",\"rating\":3.3,\"mahasiswa\":9352,\"sks\":30,\"propic\":\"https://picsum.photos/id/1917/300/300\"},{\"kode\":\"D008\",\"nama\":\"Xaviera Shawdforth\",\"rating\":3.3,\"mahasiswa\":6161,\"sks\":98,\"propic\":\"https://picsum.photos/id/1345/300/300\"},{\"kode\":\"D009\",\"nama\":\"Allyn Kingswell\",\"rating\":4.6,\"mahasiswa\":9898,\"sks\":109,\"propic\":\"https://picsum.photos/id/1222/300/300\"},{\"kode\":\"D010\",\"nama\":\"Deerdre Parker\",\"rating\":2.0,\"mahasiswa\":1898,\"sks\":25,\"propic\":\"https://picsum.photos/id/1893/300/300\"}]", true);
    }
}

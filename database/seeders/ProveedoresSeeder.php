<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\proveedor;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proveedores = [
            ["ci"=>17179002,"nombre_proveedor"=>"Courtenay","apePaterno"=>"Seymer","apeMaterno"=>"Gaukroger","genero"=>"F","nombre_empresa"=>"Vimbo","direccion_empresa"=>"Bellgrove","telefono"=>63386247],
            ["ci"=>19023882,"nombre_proveedor"=>"Vinnie","apePaterno"=>"Ortzen","apeMaterno"=>"McVrone","genero"=>"M","nombre_empresa"=>"Blogtags","direccion_empresa"=>"Hazelcrest","telefono"=>62612306],
            ["ci"=>13808396,"nombre_proveedor"=>"Tad","apePaterno"=>"Saldler","apeMaterno"=>"Lennox","genero"=>"M","nombre_empresa"=>"Topiczoom","direccion_empresa"=>"Moulton","telefono"=>69170277],
            ["ci"=>11931314,"nombre_proveedor"=>"Olwen","apePaterno"=>"Campelli","apeMaterno"=>"Eldin","genero"=>"F","nombre_empresa"=>"Yabox","direccion_empresa"=>"Derek","telefono"=>60398305],
            ["ci"=>10307613,"nombre_proveedor"=>"Carrol","apePaterno"=>"Humfrey","apeMaterno"=>"Yitzhok","genero"=>"M","nombre_empresa"=>"Twitterwire","direccion_empresa"=>"Dayton","telefono"=>67859913],
            ["ci"=>14681364,"nombre_proveedor"=>"Shea","apePaterno"=>"Baker","apeMaterno"=>"Galsworthy","genero"=>"M","nombre_empresa"=>"Eire","direccion_empresa"=>"Grim","telefono"=>60230213],
            ["ci"=>17298448,"nombre_proveedor"=>"Herve","apePaterno"=>"Meekin","apeMaterno"=>"Sandlin","genero"=>"M","nombre_empresa"=>"Skynoodle","direccion_empresa"=>"Ramsey","telefono"=>63874948],
            ["ci"=>18616651,"nombre_proveedor"=>"Sile","apePaterno"=>"Astles","apeMaterno"=>"Allett","genero"=>"F","nombre_empresa"=>"Mybuzz","direccion_empresa"=>"Tennyson","telefono"=>65344297],
            ["ci"=>17747996,"nombre_proveedor"=>"Katie","apePaterno"=>"Lorrimer","apeMaterno"=>"Kingswood","genero"=>"F","nombre_empresa"=>"Fadeo","direccion_empresa"=>"Jenifer","telefono"=>66502716],
            ["ci"=>19701740,"nombre_proveedor"=>"Crista","apePaterno"=>"Claypole","apeMaterno"=>"Sach","genero"=>"F","nombre_empresa"=>"Dabshots","direccion_empresa"=>"Prairieview","telefono"=>65791312],
            ["ci"=>16154813,"nombre_proveedor"=>"Marietta","apePaterno"=>"Paternoster","apeMaterno"=>"Gammon","genero"=>"M","nombre_empresa"=>"Quatz","direccion_empresa"=>"Eastwood","telefono"=>67693592],
            ["ci"=>19855889,"nombre_proveedor"=>"Francisco","apePaterno"=>"Cannaway","apeMaterno"=>"Paddock","genero"=>"M","nombre_empresa"=>"Shuffletag","direccion_empresa"=>"Gerald","telefono"=>67813197],
            ["ci"=>16829071,"nombre_proveedor"=>"Gregorius","apePaterno"=>"Kibbee","apeMaterno"=>"Pauley","genero"=>"M","nombre_empresa"=>"Pixoboo","direccion_empresa"=>"Doe Crossing","telefono"=>62496686],
            ["ci"=>16029863,"nombre_proveedor"=>"Gerladina","apePaterno"=>"Hindrich","apeMaterno"=>"Satterfitt","genero"=>"F","nombre_empresa"=>"Devify","direccion_empresa"=>"Stoughton","telefono"=>69901847],
            ["ci"=>12799670,"nombre_proveedor"=>"Lief","apePaterno"=>"Claybourn","apeMaterno"=>"Macallam","genero"=>"M","nombre_empresa"=>"Innotype","direccion_empresa"=>"Waxwing","telefono"=>61513807],
            ["ci"=>12030679,"nombre_proveedor"=>"Ina","apePaterno"=>"Faivre","apeMaterno"=>"Lawler","genero"=>"F","nombre_empresa"=>"Fiveclub","direccion_empresa"=>"Muir","telefono"=>60509719],
            ["ci"=>11300225,"nombre_proveedor"=>"Horton","apePaterno"=>"Ambrogetti","apeMaterno"=>"Greer","genero"=>"M","nombre_empresa"=>"Fliptune","direccion_empresa"=>"Butterfield","telefono"=>66421126],
            ["ci"=>12010272,"nombre_proveedor"=>"Alexandra","apePaterno"=>"Dovydenas","apeMaterno"=>"Ogilvy","genero"=>"F","nombre_empresa"=>"Gevee","direccion_empresa"=>"Ryan","telefono"=>66018721],
            ["ci"=>13927439,"nombre_proveedor"=>"Aldis","apePaterno"=>"Heggman","apeMaterno"=>"Gerling","genero"=>"M","nombre_empresa"=>"Ntag","direccion_empresa"=>"Meadow Vale","telefono"=>64018723],
            ["ci"=>10856904,"nombre_proveedor"=>"Goraud","apePaterno"=>"Wildblood","apeMaterno"=>"Goulding","genero"=>"M","nombre_empresa"=>"Twiyo","direccion_empresa"=>"Lindbergh","telefono"=>6924350]
        ];
        foreach ($proveedores as $key => $proveedor) {
            proveedor::create($proveedor);
        }
    }
}

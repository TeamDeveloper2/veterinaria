<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name'=>'Tamiko','apePaterno'=>'Cardinale','apeMaterno'=>'Woodroofe','fechNacimiento'=>'2001-03-27','Genero'=>'Female','Nacionalidad'=>'Sapu Padidu','email'=>'twoodroofe0@wikia.com','type'=>2,'password'=> bcrypt('7442064')],
            ['name'=>'Glenna','apePaterno'=>'Georges','apeMaterno'=>'Heikkinen','fechNacimiento'=>'2007-08-01','Genero'=>'Female','Nacionalidad'=>'Tāngāil','email'=>'gheikkinen1@comsenz.com','type'=>2,'password'=> bcrypt('19034003')],
            ['name'=>'Benn','apePaterno'=>'Wretham','apeMaterno'=>'Conman','fechNacimiento'=>'2007-08-28','Genero'=>'Male','Nacionalidad'=>'Atyrau','email'=>'bconman2@dailymotion.com','type'=>2,'password'=> bcrypt('55936116')],
            ['name'=>'Papagena','apePaterno'=>'Stirrip','apeMaterno'=>'Flanigan','fechNacimiento'=>'2005-12-16','Genero'=>'Female','Nacionalidad'=>'San Marcos','email'=>'pflanigan3@hibu.com','type'=>2,'password'=> bcrypt('81341396')],
            ['name'=>'Petey','apePaterno'=>'Woollends','apeMaterno'=>'Gorham','fechNacimiento'=>'2010-06-29','Genero'=>'Male','Nacionalidad'=>'Saint Paul','email'=>'pgorham4@mapy.cz','type'=>1,'password'=> bcrypt('68481672')],
            ['name'=>'Layney','apePaterno'=>'Ugoletti','apeMaterno'=>'Licciardo','fechNacimiento'=>'2003-12-11','Genero'=>'Female','Nacionalidad'=>'Lingyuan','email'=>'llicciardo5@networksolutions.com','type'=>1,'password'=> bcrypt('73127778')],
            ['name'=>'Aryn','apePaterno'=>'McKevin','apeMaterno'=>'Dunbleton','fechNacimiento'=>'2010-02-25','Genero'=>'Female','Nacionalidad'=>'Ngluweng Dua','email'=>'adunbleton6@pcworld.com','type'=>2,'password'=> bcrypt('76553553')],
            ['name'=>'Ulberto','apePaterno'=>'Cheetam','apeMaterno'=>'Althrope','fechNacimiento'=>'1998-10-31','Genero'=>'Male','Nacionalidad'=>'Gharavutí','email'=>'ualthrope7@jigsy.com','type'=>2,'password'=> bcrypt('96434917')],
            ['name'=>'Enoch','apePaterno'=>'Meffan','apeMaterno'=>'McCaughren','fechNacimiento'=>'2008-11-20','Genero'=>'Male','Nacionalidad'=>'Loureiro','email'=>'emccaughren8@engadget.com','type'=>1,'password'=> bcrypt('73226823')],
            ['name'=>'Allen','apePaterno'=>'Ollivier','apeMaterno'=>'Lodwig','fechNacimiento'=>'2005-06-09','Genero'=>'Male','Nacionalidad'=>'Strazna','email'=>'alodwig9@jiathis.com','type'=>1,'password'=> bcrypt('93713440')],
            ['name'=>'Katine','apePaterno'=>'Copsey','apeMaterno'=>'Dumingos','fechNacimiento'=>'2005-02-28','Genero'=>'Female','Nacionalidad'=>'Bejsce','email'=>'kdumingosa@cam.ac.uk','type'=>1,'password'=> bcrypt('66020386')],
            ['name'=>'Elena','apePaterno'=>'Grishkov','apeMaterno'=>'Whittier','fechNacimiento'=>'2009-01-28','Genero'=>'Female','Nacionalidad'=>'Dao','email'=>'ewhittierb@trellian.com','type'=>2,'password'=> bcrypt('46091384')],
            ['name'=>'Birch','apePaterno'=>'Lilloe','apeMaterno'=>'Hollier','fechNacimiento'=>'2008-09-11','Genero'=>'Male','Nacionalidad'=>'Houyu','email'=>'bhollierc@nyu.edu','type'=>2,'password'=> bcrypt('81930377')],
            ['name'=>'Aeriel','apePaterno'=>'Lilian','apeMaterno'=>'Brosch','fechNacimiento'=>'2008-10-02','Genero'=>'Female','Nacionalidad'=>'Yousheng','email'=>'abroschd@feedburner.com','type'=>2,'password'=> bcrypt('97057222')],
            ['name'=>'Marti','apePaterno'=>'Drei','apeMaterno'=>'Mahaddy','fechNacimiento'=>'2002-08-16','Genero'=>'Female','Nacionalidad'=>'Cungkal','email'=>'mmahaddye@tamu.edu','type'=>1,'password'=> bcrypt('t6114714')],
            ['name'=>'Alexi','apePaterno'=>'Lebbon','apeMaterno'=>'Owbrick','fechNacimiento'=>'1998-12-12','Genero'=>'Female','Nacionalidad'=>'Jiangqiao','email'=>'aowbrickf@shop-pro.jp','type'=>1,'password'=> bcrypt('57601773')],
            ['name'=>'Mariquilla','apePaterno'=>'Fritchly','apeMaterno'=>'Morsey','fechNacimiento'=>'2003-07-22','Genero'=>'Female','Nacionalidad'=>'Wonokerto','email'=>'mmorseyg@xinhuanet.com','type'=>2,'password'=> bcrypt('27088160')],
            ['name'=>'Nicola','apePaterno'=>'Bau','apeMaterno'=>'Parham','fechNacimiento'=>'2009-02-19','Genero'=>'Female','Nacionalidad'=>'Chenggan','email'=>'nparhamh@google.es','type'=>1,'password'=> bcrypt('20656347')],
            ['name'=>'Ray','apePaterno'=>'Gillman','apeMaterno'=>'De Beauchamp','fechNacimiento'=>'2008-07-01','Genero'=>'Female','Nacionalidad'=>'Sandnes','email'=>'rdebeauchampi@yellowpages.com','type'=>2,'password'=> bcrypt('56219132')],
            ['name'=>'Moria','apePaterno'=>'Kinch','apeMaterno'=>'Jinda','fechNacimiento'=>'2006-04-17','Genero'=>'Female','Nacionalidad'=>'Nama','email'=>'mjindaj@hud.gov','type'=>1,'password'=> bcrypt('21967841')],
            ['name'=>'Hally','apePaterno'=>'Decaze','apeMaterno'=>'Goscomb','fechNacimiento'=>'2001-07-15','Genero'=>'Female','Nacionalidad'=>'Siaya','email'=>'hgoscombk@oracle.com','type'=>2,'password'=> bcrypt('94867785')],
            ['name'=>'Gerrard','apePaterno'=>'Rees','apeMaterno'=>'Sweeting','fechNacimiento'=>'2010-07-22','Genero'=>'Male','Nacionalidad'=>'Tiandu','email'=>'gsweetingl@state.tx.us','type'=>2,'password'=> bcrypt('83494818')],
            ['name'=>'Bobbi','apePaterno'=>'Waldrum','apeMaterno'=>'Duckerin','fechNacimiento'=>'2005-07-22','Genero'=>'Female','Nacionalidad'=>'Palmas','email'=>'bduckerinm@latimes.com','type'=>1,'password'=> bcrypt('54635497')],
            ['name'=>'Cathe','apePaterno'=>'Stuckey','apeMaterno'=>'Sapson','fechNacimiento'=>'2000-04-08','Genero'=>'Female','Nacionalidad'=>'Santa Rita','email'=>'csapsonn@webmd.com','type'=>2,'password'=> bcrypt('36351443')],
            ['name'=>'Tammara','apePaterno'=>'Beyn','apeMaterno'=>'Grishin','fechNacimiento'=>'2001-10-10','Genero'=>'Female','Nacionalidad'=>'Thị Trấn Pác Miầu','email'=>'tgrishino@indiatimes.com','type'=>1,'password'=> bcrypt('99213678')],
            ['name'=>'Melessa','apePaterno'=>'Kigelman','apeMaterno'=>'Warrender','fechNacimiento'=>'2005-01-18','Genero'=>'Female','Nacionalidad'=>'Krajan Dermawuharjo','email'=>'mwarrenderp@who.int','type'=>2,'password'=> bcrypt('88177025')],
            ['name'=>'Gardner','apePaterno'=>'Houchin','apeMaterno'=>'Yeend','fechNacimiento'=>'2001-05-16','Genero'=>'Male','Nacionalidad'=>'Odrinhas','email'=>'gyeendq@simplemachines.org','type'=>1,'password'=> bcrypt('45538192')],
            ['name'=>'Alaric','apePaterno'=>'Ilymanov','apeMaterno'=>'Seston','fechNacimiento'=>'2010-05-29','Genero'=>'Male','Nacionalidad'=>'Hodošan','email'=>'asestonr@squidoo.com','type'=>1,'password'=> bcrypt('52944301')],
            ['name'=>'Rosabelle','apePaterno'=>'Kingsbury','apeMaterno'=>'Maciocia','fechNacimiento'=>'2001-05-20','Genero'=>'Female','Nacionalidad'=>'Las Lomas','email'=>'rmaciocias@google.ru','type'=>2,'password'=> bcrypt('40655718')],
            ['name'=>'Juanita','apePaterno'=>'Mullins','apeMaterno'=>'Le Count','fechNacimiento'=>'2005-09-20','Genero'=>'Female','Nacionalidad'=>'Guankou','email'=>'jlecountt@stumbleupon.com','type'=>1,'password'=> bcrypt('49872865')],
            ['name'=>'Katharine','apePaterno'=>'Daniel','apeMaterno'=>'Povey','fechNacimiento'=>'1998-10-30','Genero'=>'Female','Nacionalidad'=>'Vista Hermosa','email'=>'kpoveyu@sogou.com','type'=>1,'password'=> bcrypt('56541509')],
            ['name'=>'Donnamarie','apePaterno'=>'Michieli','apeMaterno'=>'Fox','fechNacimiento'=>'2009-08-20','Genero'=>'Female','Nacionalidad'=>'Châlons-en-Champagne','email'=>'dfoxv@economist.com','type'=>1,'password'=> bcrypt('73971020')],
            ['name'=>'Eldridge','apePaterno'=>'Storie','apeMaterno'=>'Jones','fechNacimiento'=>'2005-02-03','Genero'=>'Male','Nacionalidad'=>'Hushan','email'=>'ejonesw@va.gov','type'=>2,'password'=> bcrypt('92181184')],
            ['name'=>'Forest','apePaterno'=>'Stuchbery','apeMaterno'=>'Dahler','fechNacimiento'=>'2007-11-09','Genero'=>'Male','Nacionalidad'=>'Biharamulo','email'=>'fdahlerx@nps.gov','type'=>1,'password'=> bcrypt('38591552')],
            ['name'=>'Hedwig','apePaterno'=>'Laflin','apeMaterno'=>'Doolan','fechNacimiento'=>'2005-07-07','Genero'=>'Female','Nacionalidad'=>'Tegalwero','email'=>'hdoolany@facebook.com','type'=>1,'password'=> bcrypt('70170030')],
            ['name'=>'Rikki','apePaterno'=>'McKeran','apeMaterno'=>'Garrique','fechNacimiento'=>'2003-06-12','Genero'=>'Male','Nacionalidad'=>'Atambua','email'=>'rgarriquez@uol.com.br','type'=>2,'password'=> bcrypt('21009986')],
            ['name'=>'Eada','apePaterno'=>'Hardaway','apeMaterno'=>'Daens','fechNacimiento'=>'2001-04-04','Genero'=>'Female','Nacionalidad'=>'Szczerbice','email'=>'edaens10@google.cn','type'=>2,'password'=> bcrypt('18458502')],
            ['name'=>'Terence','apePaterno'=>'Trowle','apeMaterno'=>'Cowp','fechNacimiento'=>'2006-02-24','Genero'=>'Male','Nacionalidad'=>'Gongchang','email'=>'tcowp11@weather.com','type'=>1,'password'=> bcrypt('63955476')],
            ['name'=>'Dominga','apePaterno'=>'Brauns','apeMaterno'=>'Simonitto','fechNacimiento'=>'1998-10-22','Genero'=>'Female','Nacionalidad'=>'Kakanj','email'=>'dsimonitto12@wufoo.com','type'=>1,'password'=> bcrypt('44562167')],
            ['name'=>'Forester','apePaterno'=>'Plumtree','apeMaterno'=>'Roads','fechNacimiento'=>'2004-07-08','Genero'=>'Male','Nacionalidad'=>'Batiano','email'=>'froads13@i2i.jp','type'=>1,'password'=> bcrypt('1316760')],
            ['name'=>'Erroll','apePaterno'=>'Mushrow','apeMaterno'=>'Anger','fechNacimiento'=>'2005-10-10','Genero'=>'Male','Nacionalidad'=>'Podgornoye','email'=>'eanger14@adobe.com','type'=>1,'password'=> bcrypt('1978238')],
            ['name'=>'Jack','apePaterno'=>'Sarten','apeMaterno'=>'Lambertazzi','fechNacimiento'=>'2010-06-22','Genero'=>'Male','Nacionalidad'=>'Outlook','email'=>'jlambertazzi15@aol.com','type'=>1,'password'=> bcrypt('50385710')],
            ['name'=>'Maddi','apePaterno'=>'Chellenham','apeMaterno'=>'Chazerand','fechNacimiento'=>'2008-12-04','Genero'=>'Female','Nacionalidad'=>'Nong Don','email'=>'mchazerand16@mlb.com','type'=>1,'password'=> bcrypt('76086522')],
            ['name'=>'Sandy','apePaterno'=>'Albutt','apeMaterno'=>'Di Bernardo','fechNacimiento'=>'2009-04-28','Genero'=>'Female','Nacionalidad'=>'Oslo','email'=>'sdibernardo17@blogspot.com','type'=>2,'password'=> bcrypt('71827754')],
            ['name'=>'Cesaro','apePaterno'=>'Shingles','apeMaterno'=>'Beasant','fechNacimiento'=>'1999-03-20','Genero'=>'Male','Nacionalidad'=>'Kuala Terengganu','email'=>'cbeasant18@youku.com','type'=>1,'password'=> bcrypt('67251187')],
            ['name'=>'Ganny','apePaterno'=>'Domerque','apeMaterno'=>'Tiebe','fechNacimiento'=>'2004-06-22','Genero'=>'Male','Nacionalidad'=>'Aku','email'=>'gtiebe19@ox.ac.uk','type'=>2,'password'=> bcrypt('25318750')],
            ['name'=>'Peadar','apePaterno'=>'Alldred','apeMaterno'=>'Clowton','fechNacimiento'=>'2004-12-17','Genero'=>'Male','Nacionalidad'=>'Qiaogu','email'=>'pclowton1a@mozilla.com','type'=>1,'password'=> bcrypt('24257906')],
            ['name'=>'Frank','apePaterno'=>'Minchinton','apeMaterno'=>'Drewes','fechNacimiento'=>'2002-02-28','Genero'=>'Female','Nacionalidad'=>'Wilwerwiltz','email'=>'fdrewes1b@samsung.com','type'=>2,'password'=> bcrypt('96842232')],
            ['name'=>'Garrard','apePaterno'=>'Siss','apeMaterno'=>'Egdal','fechNacimiento'=>'2005-03-22','Genero'=>'Male','Nacionalidad'=>'Dongbian','email'=>'gegdal1c@hatena.ne.jp','type'=>1,'password'=> bcrypt('94480961')],
            ['name'=>'Brnaba','apePaterno'=>'Kemwal','apeMaterno'=>'Hum','fechNacimiento'=>'1999-07-30','Genero'=>'Male','Nacionalidad'=>'Osieczany','email'=>'bhum1d@sun.com','type'=>1,'password'=> bcrypt('9223470')]
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\csc;

class CscSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cscs = [
            ['csc_codmascota'=>21,'precio'=> 150.0, 'globulosBlancos'=>33.01,'globulosRojos'=>41.24,'hemoglobina'=>43.67,'plaquetas'=>80.12,'fecha'=>'2022-10-04'],
            ['csc_codmascota'=>23,'precio'=> 150.0, 'globulosBlancos'=>44.94,'globulosRojos'=>76.46,'hemoglobina'=>54.4,'plaquetas'=>81.6,'fecha'=>'2021-12-08'],
            ['csc_codmascota'=>17,'precio'=> 150.0, 'globulosBlancos'=>95.82,'globulosRojos'=>54.98,'hemoglobina'=>28.02,'plaquetas'=>8.98,'fecha'=>'2021-02-11'],
            ['csc_codmascota'=>17,'precio'=> 150.0, 'globulosBlancos'=>51.8,'globulosRojos'=>33.79,'hemoglobina'=>95.21,'plaquetas'=>75.52,'fecha'=>'2022-02-27'],
            ['csc_codmascota'=>20,'precio'=> 150.0, 'globulosBlancos'=>26.99,'globulosRojos'=>21.9,'hemoglobina'=>73.44,'plaquetas'=>24.48,'fecha'=>'2022-06-03'],
            ['csc_codmascota'=>12,'precio'=> 150.0, 'globulosBlancos'=>80.48,'globulosRojos'=>22.05,'hemoglobina'=>73.92,'plaquetas'=>2.1,'fecha'=>'2021-12-20'],
            ['csc_codmascota'=>9,'precio'=> 150.0, 'globulosBlancos'=>88.63,'globulosRojos'=>9.96,'hemoglobina'=>35.94,'plaquetas'=>37.88,'fecha'=>'2021-06-24'],
            ['csc_codmascota'=>3,'precio'=> 150.0, 'globulosBlancos'=>97.15,'globulosRojos'=>71.32,'hemoglobina'=>48.84,'plaquetas'=>37.61,'fecha'=>'2021-02-28'],
            ['csc_codmascota'=>20,'precio'=> 150.0, 'globulosBlancos'=>90.0,'globulosRojos'=>50.3,'hemoglobina'=>92.76,'plaquetas'=>52.78,'fecha'=>'2022-04-20'],
            ['csc_codmascota'=>13,'precio'=> 150.0, 'globulosBlancos'=>95.37,'globulosRojos'=>28.24,'hemoglobina'=>27.61,'plaquetas'=>79.77,'fecha'=>'2021-04-30'],
            ['csc_codmascota'=>13,'precio'=> 150.0, 'globulosBlancos'=>29.86,'globulosRojos'=>70.54,'hemoglobina'=>56.79,'plaquetas'=>23.49,'fecha'=>'2022-02-03'],
            ['csc_codmascota'=>23,'precio'=> 150.0, 'globulosBlancos'=>49.57,'globulosRojos'=>96.87,'hemoglobina'=>69.17,'plaquetas'=>75.04,'fecha'=>'2022-07-12'],
            ['csc_codmascota'=>3,'precio'=> 150.0, 'globulosBlancos'=>79.14,'globulosRojos'=>32.75,'hemoglobina'=>74.38,'plaquetas'=>75.51,'fecha'=>'2021-12-11'],
            ['csc_codmascota'=>15,'precio'=> 150.0, 'globulosBlancos'=>30.19,'globulosRojos'=>57.9,'hemoglobina'=>81.39,'plaquetas'=>2.08,'fecha'=>'2021-04-08'],
            ['csc_codmascota'=>7,'precio'=> 150.0, 'globulosBlancos'=>53.75,'globulosRojos'=>65.98,'hemoglobina'=>97.64,'plaquetas'=>14.61,'fecha'=>'2022-10-03'],
            ['csc_codmascota'=>6,'precio'=> 150.0, 'globulosBlancos'=>62.11,'globulosRojos'=>46.42,'hemoglobina'=>62.85,'plaquetas'=>41.02,'fecha'=>'2021-05-07'],
            ['csc_codmascota'=>1,'precio'=> 150.0, 'globulosBlancos'=>91.21,'globulosRojos'=>9.52,'hemoglobina'=>25.65,'plaquetas'=>87.82,'fecha'=>'2022-01-28'],
            ['csc_codmascota'=>15,'precio'=> 150.0, 'globulosBlancos'=>64.71,'globulosRojos'=>1.29,'hemoglobina'=>52.71,'plaquetas'=>31.45,'fecha'=>'2021-04-13'],
            ['csc_codmascota'=>15,'precio'=> 150.0, 'globulosBlancos'=>62.36,'globulosRojos'=>40.63,'hemoglobina'=>4.67,'plaquetas'=>89.55,'fecha'=>'2021-04-20'],
            ['csc_codmascota'=>2,'precio'=> 150.0, 'globulosBlancos'=>39.53,'globulosRojos'=>51.79,'hemoglobina'=>28.62,'plaquetas'=>10.13,'fecha'=>'2021-11-28'],
            ['csc_codmascota'=>19,'precio'=> 150.0, 'globulosBlancos'=>33.95,'globulosRojos'=>9.71,'hemoglobina'=>66.56,'plaquetas'=>30.69,'fecha'=>'2022-09-28'],
            ['csc_codmascota'=>12,'precio'=> 150.0, 'globulosBlancos'=>70.19,'globulosRojos'=>74.44,'hemoglobina'=>14.87,'plaquetas'=>32.16,'fecha'=>'2021-02-02'],
            ['csc_codmascota'=>12,'precio'=> 150.0, 'globulosBlancos'=>76.76,'globulosRojos'=>30.86,'hemoglobina'=>7.99,'plaquetas'=>79.75,'fecha'=>'2021-07-23'],
            ['csc_codmascota'=>6,'precio'=> 150.0, 'globulosBlancos'=>6.12,'globulosRojos'=>57.51,'hemoglobina'=>88.86,'plaquetas'=>94.69,'fecha'=>'2021-10-07'],
            ['csc_codmascota'=>1,'precio'=> 150.0, 'globulosBlancos'=>10.94,'globulosRojos'=>48.47,'hemoglobina'=>82.9,'plaquetas'=>23.36,'fecha'=>'2021-02-28'],
            ['csc_codmascota'=>17,'precio'=> 150.0, 'globulosBlancos'=>29.81,'globulosRojos'=>40.65,'hemoglobina'=>35.69,'plaquetas'=>34.72,'fecha'=>'2021-07-31'],
            ['csc_codmascota'=>10,'precio'=> 150.0, 'globulosBlancos'=>4.15,'globulosRojos'=>1.48,'hemoglobina'=>61.84,'plaquetas'=>95.48,'fecha'=>'2022-08-03'],
            ['csc_codmascota'=>14,'precio'=> 150.0, 'globulosBlancos'=>51.38,'globulosRojos'=>73.24,'hemoglobina'=>41.14,'plaquetas'=>25.96,'fecha'=>'2021-03-13'],
            ['csc_codmascota'=>9,'precio'=> 150.0, 'globulosBlancos'=>49.66,'globulosRojos'=>3.04,'hemoglobina'=>15.48,'plaquetas'=>39.3,'fecha'=>'2021-09-22'],
            ['csc_codmascota'=>5,'precio'=> 150.0, 'globulosBlancos'=>96.95,'globulosRojos'=>30.9,'hemoglobina'=>65.85,'plaquetas'=>25.8,'fecha'=>'2022-03-22'],
            ['csc_codmascota'=>11,'precio'=> 150.0, 'globulosBlancos'=>35.46,'globulosRojos'=>39.44,'hemoglobina'=>34.49,'plaquetas'=>14.84,'fecha'=>'2021-10-03'],
            ['csc_codmascota'=>18,'precio'=> 150.0, 'globulosBlancos'=>1.84,'globulosRojos'=>33.78,'hemoglobina'=>11.28,'plaquetas'=>87.4,'fecha'=>'2021-04-30'],
            ['csc_codmascota'=>13,'precio'=> 150.0, 'globulosBlancos'=>10.54,'globulosRojos'=>47.9,'hemoglobina'=>77.6,'plaquetas'=>71.02,'fecha'=>'2022-09-02'],
            ['csc_codmascota'=>22,'precio'=> 150.0, 'globulosBlancos'=>67.27,'globulosRojos'=>93.47,'hemoglobina'=>39.97,'plaquetas'=>27.73,'fecha'=>'2022-01-28'],
            ['csc_codmascota'=>14,'precio'=> 150.0, 'globulosBlancos'=>38.55,'globulosRojos'=>77.01,'hemoglobina'=>40.31,'plaquetas'=>55.67,'fecha'=>'2022-08-18'],
            ['csc_codmascota'=>6,'precio'=> 150.0, 'globulosBlancos'=>52.04,'globulosRojos'=>92.68,'hemoglobina'=>44.03,'plaquetas'=>75.14,'fecha'=>'2021-08-27'],
            ['csc_codmascota'=>14,'precio'=> 150.0, 'globulosBlancos'=>9.38,'globulosRojos'=>56.29,'hemoglobina'=>34.65,'plaquetas'=>1.8,'fecha'=>'2021-09-13'],
            ['csc_codmascota'=>8,'precio'=> 150.0, 'globulosBlancos'=>16.11,'globulosRojos'=>79.07,'hemoglobina'=>20.35,'plaquetas'=>59.33,'fecha'=>'2022-04-05'],
            ['csc_codmascota'=>16,'precio'=> 150.0, 'globulosBlancos'=>15.42,'globulosRojos'=>10.9,'hemoglobina'=>41.37,'plaquetas'=>35.33,'fecha'=>'2022-04-20'],
            ['csc_codmascota'=>20,'precio'=> 150.0, 'globulosBlancos'=>65.46,'globulosRojos'=>99.53,'hemoglobina'=>89.8,'plaquetas'=>63.21,'fecha'=>'2021-03-15'],
            ['csc_codmascota'=>22,'precio'=> 150.0, 'globulosBlancos'=>61.09,'globulosRojos'=>2.35,'hemoglobina'=>42.02,'plaquetas'=>88.82,'fecha'=>'2022-02-26'],
            ['csc_codmascota'=>4,'precio'=> 150.0, 'globulosBlancos'=>19.18,'globulosRojos'=>98.92,'hemoglobina'=>75.77,'plaquetas'=>17.6,'fecha'=>'2021-05-29'],
            ['csc_codmascota'=>4,'precio'=> 150.0, 'globulosBlancos'=>4.3,'globulosRojos'=>85.18,'hemoglobina'=>85.17,'plaquetas'=>97.87,'fecha'=>'2021-08-09'],
            ['csc_codmascota'=>1,'precio'=> 150.0, 'globulosBlancos'=>13.7,'globulosRojos'=>76.3,'hemoglobina'=>15.79,'plaquetas'=>34.36,'fecha'=>'2021-06-19'],
            ['csc_codmascota'=>5,'precio'=> 150.0, 'globulosBlancos'=>60.89,'globulosRojos'=>22.44,'hemoglobina'=>15.24,'plaquetas'=>27.65,'fecha'=>'2021-08-19'],
            ['csc_codmascota'=>7,'precio'=> 150.0, 'globulosBlancos'=>52.4,'globulosRojos'=>51.75,'hemoglobina'=>92.58,'plaquetas'=>41.43,'fecha'=>'2021-05-14'],
            ['csc_codmascota'=>16,'precio'=> 150.0, 'globulosBlancos'=>86.98,'globulosRojos'=>84.34,'hemoglobina'=>58.81,'plaquetas'=>83.34,'fecha'=>'2021-01-24'],
            ['csc_codmascota'=>16,'precio'=> 150.0, 'globulosBlancos'=>28.69,'globulosRojos'=>33.65,'hemoglobina'=>11.87,'plaquetas'=>98.34,'fecha'=>'2021-01-15'],
            ['csc_codmascota'=>18,'precio'=> 150.0, 'globulosBlancos'=>75.07,'globulosRojos'=>92.64,'hemoglobina'=>61.16,'plaquetas'=>20.93,'fecha'=>'2021-04-04'],
            ['csc_codmascota'=>10,'precio'=> 150.0, 'globulosBlancos'=>59.12,'globulosRojos'=>28.78,'hemoglobina'=>78.39,'plaquetas'=>13.27,'fecha'=>'2021-12-30']
        ];

        foreach ($cscs as $key => $csc) {
            csc::create($csc);
        }
    }
}

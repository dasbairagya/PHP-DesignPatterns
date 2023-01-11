<?php 
// if (php_sapi_name() != 'cli') {
//     die('Please run the project via command-line only.');
// }
require_once __DIR__ . '/vendor/autoload.php';

use App\DesignPatterns\Structural\DIP\Processor;
use App\DesignPatterns\Structural\DIP\CsvFileWriter;
use App\DesignPatterns\Structural\DIP\XmlFileWriter;

use App\DesignPatterns\Structural\Adaptor\NewCsvFileWriter;
use App\DesignPatterns\Structural\Adaptor\NewFileWriterAdaptor;

use App\DesignPatterns\Creational\Factory\PlanFactory;

$data = [1,2,3,4,5];

/************-Implementation of Dependency Inversible Principle***********/
echo "<u>Implementation of Dependency Inversible Principle </u><br>";
$fileWriter = new CsvFileWriter;
$fileWriter = new XmlFileWriter;

$processor = new Processor($fileWriter);
$processor->process($data);


/*********Implementation of Adaptor design pattern to compatible with the two diffrent interfaces********/
echo "<u>Implementation of Adaptor design pattern to compatible with the two diffrent interfaces </u><br>";
$newCsvFileWriter = new NewCsvFileWriter;
$fileWriter = new NewFileWriterAdaptor($newCsvFileWriter);

$processor = new Processor($fileWriter);
$processor->process($data);

/*********Implementation of Factory design pattern to create the object as needed********/
echo "<u>Implementation of Factory design pattern to create the object as needed </u><br>";
$plans = ['free', 'pro'];
$plan = $plans[1];

$planFactory = new PlanFactory;
$plan = $planFactory->createPlan($plan);

dd($plan);

?>
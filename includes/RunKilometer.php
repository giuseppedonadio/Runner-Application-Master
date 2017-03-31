<?php
/**
  * @package Runner Application
  * @author Giuseppe Donadio <giuseppedonadio@gmail.com>
  * @version 0.1 2017/02/11
  * @link http://www.giuseppedonadio.com/
  * @license http://www.apache.org/licenses/LICENSE-2.0
  * @todo none
*/

class RunKilometer
{

  public $runConvert = "";
  public $d = "";



  function __construct($runKilometer,$d)
  {
    $this->runKilometer = $runKilometer;
    $this->d = $d;
  }
}


  foreach ($runs as $run) {

    $d = $run->day;

    $runKilometer = number_format((float)($run->length  * 1.609344), 2, '.', '');

    $runKilometers[] = new RunKilometer($runKilometer,$d);
  }

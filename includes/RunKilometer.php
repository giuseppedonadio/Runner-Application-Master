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
  public $rSk = "";
  public $d = "";
  public $unitKm = "";
  public $unitRunKm = "";
  public $lengthKm = "";
  public $kmMinPace = "";
  public $kmSecPace = "";



  function __construct($rSk,$d,$unitKm,$unitRunKm,$lengthKm,$kmMinPace,$kmSecPace)
  {
    $this->rSk = $rSk;
    $this->d = $d;
    $this->unitKm = $unitKm;
    $this->unitRunKm = $unitRunKm;
    $this->lengthKm = $lengthKm;
    $this->kmMinPace = $kmMinPace;
    $this->kmSecPace = $kmSecPace;
  }
}


  foreach ($runs as $run) {

    $rSk = number_format((float)($run->run  * 1.609344), 2, '.', '');
    $d = $run->day;


    $paceHour = $run->hours * 60;
    $paceMinutes = $run->minutes;
    $paceSeconds = $run->seconds/60;

    $totalMinutes = $paceHour + $paceMinutes + $paceSeconds;

    if($rSk>0){
      $pace = $totalMinutes/$rSk;
    }else{
      $pace = 0;
    }

    $minutesKm = floor($pace);
    $remainingMinutes = $pace - $minutesKm;
    $secondsKm = $remainingMinutes * 60;

    $secondsKmFormatted = number_format((float)$secondsKm, 0, '.', '');


    $kmMinPace = sprintf("%02d", $minutesKm);
    $kmSecPace = sprintf("%02d", $secondsKmFormatted);

    if ($rSk >= 1) {
      $unitKm = "km";
      $unitRunKm = "km";
    }else{
      $rSk = "Rest";
      $unitKm = "";
      $unitRunKm = "";
    }
    $lengthKm = number_format((float)($run->length  * 1.609344), 2, '.', '');

    $runKilometers[] = new RunKilometer($rSk,$d,$unitKm,$unitRunKm,$lengthKm,$kmMinPace,$kmSecPace);
  }

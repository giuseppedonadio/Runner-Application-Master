<?php
/**
  * @package Runner Application
  * @author Giuseppe Donadio <giuseppedonadio@gmail.com>
  * @version 0.1 2017/02/11
  * @link http://www.giuseppedonadio.com/
  * @license http://www.apache.org/licenses/LICENSE-2.0
  * @todo none
*/

/**
 *
 */
class RunMile
{
  public $rSm = "";
  public $dayMile = "";
  public $unitMile = "";
  public $unitRunMile = "";
  public $lengthMile = "";
  public $mileMinPace = "";
  public $mileSecPace = "";

  function __construct($rSm,$dayMile,$lengthMile,$unitMile,$unitRunMile,$mileMinPace,$mileSecPace)
  {
    $this->rSm = $rSm;
    $this->dayMile = $dayMile;
    $this->lengthMile = $lengthMile;
    $this->unitMile = $unitMile;
    $this->unitRunMile = $unitRunMile;
    $this->mileMinPace = $mileMinPace;
    $this->mileSecPace = $mileSecPace;

  }
}

foreach ($runs as $run) {
  $rSm = $run->run;
  $dayMile = $run->day;
  $lm = $run->length;
  $unitMile = $run->unit;
  $unitRunMile = $run->unit;

  $paceHour = $run->hours * 60;
  $paceMinutes = $run->minutes;
  $paceSeconds = $run->seconds/60;
  $len = $run->length;

  $totalMinutes = $paceHour + $paceMinutes + $paceSeconds;

  if($len>0){
    $pace = $totalMinutes/$len;
  }else{
    $pace = 0;
  }
  
  $minutesMile = floor($pace);
  $remainingMinutes = $pace - $minutesMile;
  $secondsMile = $remainingMinutes * 60;

  $secondsMileFormatted = number_format((float)$secondsMile, 0, '.', '');

  $mileSecPace = sprintf("%02d", $secondsMileFormatted);
  $mileMinPace = sprintf("%02d", $minutesMile);


  if ($lm == 0) {
    $lengthMile = "";
    $unitMile = "";
  }else{
    $lengthMile = $lm;
    $rSm = "";
    $unitRunMile = "";
  }

  $runMiles[] = new RunMile($rSm,$dayMile,$lengthMile,$unitMile,$unitRunMile,$mileMinPace,$mileSecPace);

}

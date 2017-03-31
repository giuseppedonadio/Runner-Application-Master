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
class TotalKilometer
{
  public $totalKilometer = 0;

  function __construct($totalKilometer)
  {
    $this->totalKilometer = $totalKilometer;
  }
}

foreach ($totalMiles as $totalMile) {
  $totalKilometer = number_format((float)($totalMile->totalMile * 1.609344), 2, '.', '');;
}

$totalKilometers[] = new TotalKilometer($totalKilometer);

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
class TotalMile
{
  public $totalMile = 0;

  function __construct($totalMile)
  {
    $this->totalMile = $totalMile;
  }
}

$totalMile = 0;
foreach ($runs as $run) {
  $totalMile += $run->length;
}

$totalMiles[] = new TotalMile($totalMile);

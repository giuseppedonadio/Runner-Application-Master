<?php
/**
  * @package Runner Application
  * @author Giuseppe Donadio <giuseppedonadio@gmail.com>
  * @version 0.1 2017/02/11
  * @link http://www.giuseppedonadio.com/
  * @license http://www.apache.org/licenses/LICENSE-2.0
  * @todo none
*/

class AllRun
{
  public $allRun = "";

  function __construct($allRun)
  {
    $this->allRun = $allRun;
  }
}

if(isset($_POST['convert']))
{
    if(isset($_POST['MtoK']) && $_POST['MtoK']=="yes")
    {
      foreach ($runKilometers as $runKilometer) {
        if ($runKilometer->lengthKm > 0) {
          $allRun = '
                <div class="box" style="background-color:#f2f2f2;opacity: 0.8;color:#1a242f;font-weight:bolder;">
                  <div class="date">' . $runKilometer->d . '</div>
                  <div style="clear:both"></div>
                  <div class="run">' . $runKilometer->lengthKm . ' ' . $runKilometer->unitKm . '</div>
                  <div style="clear:both"></div>
                  <div class="pace">' . $runKilometer->kmMinPace . ':' . $runKilometer->kmSecPace . ' Min/Km</div>
                </div>';
          $allRuns[] = new AllRun($allRun);
        } else {
          $allRun = '
                <div class="box">
                  <div class="date">' . $runKilometer->d . '</div>
                  <div style="clear:both"></div>
                  <div class="run">' . $runKilometer->rSk . ' ' . $runKilometer->unitRunKm . '</div>
                </div>';
          $allRuns[] = new AllRun($allRun);
        }

      }

  }else{

    foreach ($runMiles as $runMile) {

      if ($runMile->lengthMile > 0) {
        $allRun = '
              <div class="box" style="background-color:#f2f2f2;opacity: 0.8;color:#1a242f;font-weight:bolder;">
                  <div class="date">' . $runMile->dayMile . '</div>
                  <div style="clear:both"></div>
                  <div class="run">' . $runMile->lengthMile . ' ' . $runMile->unitMile . '</div>
                  <div style="clear:both"></div>
                  <div class="pace">' . $runMile->mileMinPace . ':' . $runMile->mileSecPace . ' Min/Mile</div>
              </div>';

      $allRuns[] = new AllRun($allRun);

      } else {
        $allRun = '
              <div class="box">
                  <div class="date">' . $runMile->dayMile . '</div>
                  <div style="clear:both"></div>
                  <div class="run">' . $runMile->rSm . ' ' . $runMile->unitRunMile . '</div>
              </div>';

      $allRuns[] = new AllRun($allRun);

      }

    }


  }

}else{

    foreach ($runMiles as $runMile) {

      if ($runMile->lengthMile > 0) {
        $allRun = '
              <div class="box" style="background-color:#f2f2f2;opacity: 0.8;color:#1a242f;font-weight:bolder;">
                  <div class="date">' . $runMile->dayMile . '</div>
                  <div style="clear:both"></div>
                  <div class="run">' . $runMile->lengthMile . ' ' . $runMile->unitMile . '</div>
                  <div style="clear:both"></div>
                  <div class="pace">' . $runMile->mileMinPace . ':' . $runMile->mileSecPace . ' Min/Mile</div>
              </div>';

      $allRuns[] = new AllRun($allRun);
      } else {
        $allRun = '
              <div class="box">
                  <div class="date">' . $runMile->dayMile . '</div>
                  <div style="clear:both"></div>
                  <div class="run">' . $runMile->rSm . ' ' . $runMile->unitRunMile . '</div>
              </div>';

      $allRuns[] = new AllRun($allRun);

      }

    }

}

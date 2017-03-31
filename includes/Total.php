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
class Total
{
  public $total = 0;

  function __construct($total)
  {
    $this->total = $total;
  }
}

if(isset($_POST['convert']))
{
    if(isset($_POST['MtoK']) && $_POST['MtoK']=="yes")
    {
          foreach ($totalKilometers as $totalKilometer) {

                $total = '
                            <h4>Total ran: ' . $totalKilometer->totalKilometer . ' Km</h4>
                            <form action="' . THIS_PAGE . '" method="post">
                						<p><input type="radio" name="MtoK" value="no"/> Miles
                							 <input type="radio" name="MtoK" value="yes" checked /> Kilometer</p>
                							 <input type="submit" name="convert" value="Convert"  style="margin-bottom: 20px;" class="btn btn-primary"/>
                						</form>';
          }

    }else{
          foreach ($totalMiles as $totalMile) {
                $total = '
                            <h4>Total ran: ' . $totalMile->totalMile . ' Miles</h4>
                            <form action="' . THIS_PAGE . '" method="post">
                            <p><input type="radio" name="MtoK" value="no" checked /> Miles
                               <input type="radio" name="MtoK" value="yes"/> Kilometer</p>
                               <input type="submit" name="convert" value="Convert"  style="margin-bottom: 20px;" class="btn btn-primary"/>
                            </form>';
          }


    }
}else{
    foreach ($totalMiles as $totalMile) {
          $total = '
                      <h4>Total ran: ' . $totalMile->totalMile . ' Miles</h4>
                      <form action="' . THIS_PAGE . '" method="post">
              				<p><input type="radio" name="MtoK" value="no" checked /> Miles
              					 <input type="radio" name="MtoK" value="yes"/> Kilometer</p>
              					 <input type="submit" name="convert" value="Convert"  style="margin-bottom: 20px;" class="btn btn-primary"/>
              				</form>';
    }
}


$totals[] = new Total($total);

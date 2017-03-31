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
class Run
{
  public $run = "";
  public $day = "";
  public $unit = "";
  public $length = "";
  public $hours = "";
  public $minutes = "";
  public $seconds = "";

  function __construct($run,$day,$length,$unit,$hours,$minutes,$seconds)
  {
    $this->run = $run;
    $this->day = $day;
    $this->length = $length;
    $this->unit = $unit;
    $this->hours = $hours;
    $this->minutes = $minutes;
    $this->seconds = $seconds;
  }

}

# SQL statement
$sql = "select * from Runner_Activities";
# connection comes first in mysqli (improved) function
$result = mysqli_query(IDB::conn(),$sql) or die(trigger_error(mysqli_error(IDB::conn()), E_USER_ERROR));
if(mysqli_num_rows($result) > 0)
{#records exist - process
  while($row = mysqli_fetch_assoc($result))
	{# process each row
    $RunScheduled = dbOut($row['RunScheduled']);
    $Day = dbOut($row['Day']);
    $Length = dbOut($row['Lenght']);
    $Unit = dbOut($row['Unit']);
    $Hours = dbOut($row['Hours']);
    $Minutes = dbOut($row['Minutes']);
    $Seconds = dbOut($row['Seconds']);
    $runs[]=new Run($RunScheduled,$Day,$Length,$Unit,$Hours,$Minutes,$Seconds);
  }
}
@mysqli_free_result($result);

<?php

require_once 'proc_dbConnect.php';
$event_id = $_REQUEST['eventid'];
$sql='select * from scoreboard where eventid='.$event_id;
$smt = $conn->prepare($sql);
$smt->execute();
if ($smt->rowCount()==0)
{
    echo "no data found;";
}
else
{
echo "<br/>";
echo "<table class = 'table table-striped table-bordered table-condensed table-hover'>";
echo "<TR>";
echo  "<TD>Team</TD><TD>Round 1</TD><TD>Round 2</TD><TD>Round 3</TD><TD>Round 4</TD><TD>Round 5</TD>
      <TD>Round 6</TD><TD>Round 7</TD><TD>Round 8</TD><TD>Round 9</TD><TD>Round 10</TD><TD>Total</TD>";
while ($row=$smt->fetch(PDO::FETCH_ASSOC)){
    echo "<TR>";
    echo "<TD>",$row['Team_Name'],"</TD>","<TD>",$row['Round_1'],"</TD><TD>",$row['Round_2'],"</TD><TD>",$row['Round_3'],
    "</TD><TD>",$row['Round_4'],"</TD><TD>",$row['Round_5'],"</TD><TD>",$row['Round_6'],"</TD><TD>",$row['Round_7'],
    "</TD><TD>",$row['Round_8'],"</TD><TD>",$row['Round_9'],"</TD><TD>",$row['Round_10'],"</TD><TD>",$row['Total_Score'],"</TD>";
}
echo "</table>";


}
?>
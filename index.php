<?php

include 'db.php';
$query = mysqli_query($db, 'SELECT * FROM contact');
?>
<table>
<?php 
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
<tr>
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['email']; ?></td>
  <td><?php echo $row['message']; ?></td>

<?php
    $session_time = $row['created_date'];
    $time_difference = time() - $session_time ;
    $seconds = $time_difference ;

    $minutes = round($time_difference / 60 );

    $hours = round($time_difference / 3600 );
    $days = round($time_difference / 86400 );
    $weeks = round($time_difference / 604800 );
    $months = round($time_difference / 2419200 );
    $years = round($time_difference / 29030400 );

    // Seconds
    if($seconds <= 60)
    {
    echo "<td> $seconds seconds ago</td>";
    }
    //Minutes
    else if($minutes <= 60)
    {

      if($minutes==1)
      {
        echo "<td>one minute ago</td>";
      }
      else
      {
        echo "<td>$minutes minutes ago</td>";
      }

    }

    //Hours
    else if($hours <= 24)
    {

       if($hours==1)
      {
       echo "<td>one hour ago</td>";
      }
      else
      {
       echo "<td>$hours hours ago</td>";
      }

    }

    //Days
    else if($days <= 7)
    {

      if($days==1)
      {
       echo "<td>one day ago</td>";
      }
      else
      {
       echo "<td>$days days ago</td>";
       }

    }

    //Weeks
    else if($weeks <= 4)
    {

       if($weeks==1)
      {
       echo "<td>one week ago</td>";
       }
      else
      {
       echo "<td>$weeks weeks ago</td>";
      }

    }

    //Months
    else if($months <= 12)
    {

       if($months==1)
      {
       echo "<td>one month ago</td>";
       }
      else
      {
       echo "<td>$months months ago</td>";
       }

    }
    //Years
    else
    {

       if($years == 1)
       {
        echo "<td>one year ago</td>";
       }
       else
      {
        echo "<td>$years years ago</td>";
       }

}
  echo "</tr>";
}// end of while

?>

</table>
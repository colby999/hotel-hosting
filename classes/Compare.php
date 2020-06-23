<?php

class Compare{

    public $fname, $lname, $email, $indate, $outdate, $hotel1, $hotel2, $cost1, $cost2;
    
    function __construct($n0, $n1, $n2, $n3, $n4, $n5, $n6){
        $_SESSION['fname'] = $this->fname = $n0;
        $_SESSION['lname'] = $this->lname = $n1;
        $_SESSION['email'] = $this->email = $n2;
        $_SESSION['indate'] = $this->indate = $n3;
        $_SESSION['outdate'] = $this->outdate = $n4;
        $_SESSION['hotel1'] = $this->hotel1 = $n5;
        $_SESSION['hotel2'] = $this->hotel2 = $n6;
    }

    //Number of booked days//
    function daysBooked($param1, $param2){
        $param1 = $this->indate;
        $param2 = $this->outdate;
        
        $date1 = new DateTime($this->indate);
        $date2 = new DateTime($this->outdate);

        $interval = $date1->diff($date2);

        $this->daysBooked = $interval->format('%R%a');

    }

    function displayInfo(){
        echo "<br> First Name : " . $this->fname . "<br>" .
        "Surname : " . $this->lname . "<br>" . 
        "Start Date : " . $this->indate . "<br>" . 
        "End Date : " . $this->outdate . "<br>" .
        "You are booking for " . $this->daysBooked . " Days<br>" .    
        "Hotel Name One : " . $this->hotel1 . "<br>" .
        "Hotel Name Two : " . $this->hotel2 . "<br>" .    
        "Select your Hotel : <br>
        <form role=\"form\" action=";
        echo htmlspecialchars($_SERVER['PHP_SELF']);  
        echo " method=\"post\">
        <input type=\"radio\" name=\"selectHotel\" value=\"".$this->hotel1."\">".$this->hotel1."<br>"."
        <input type=\"radio\" name=\"selectHotel\" value=\"".$this->hotel2."\">".$this->hotel2."<br>";
    }

    function compareHotels($param3, $param4){
        echo "
<table>
  <tr>
    <th>Features</th>
    <th>Hotel 1 : ". $param3->name."</th>
    <th>Hotel 2: ". $param4->name."</th>
  </tr>
  <tr>
    <td>Pool</td>
    <td>"; 
    echo ($param3->pool) ? "Yes" : "No"; 
    echo    "</td>
    <td>"; 
    echo ($param4->pool) ? "Yes" : "No";
    echo "</tr>
  <tr>
    <td>Bar</td>
    <td>";
    echo ($param3->bar) ? "Yes" : "No";
    echo "</td>
    <td>";
    echo ($param4->bar) ? "Yes" : "No";  
    echo "</td>
  </tr>
  <tr>
    <td>Restaurant</td>
    <td>";
    echo ($param3->restaurant) ? "Yes" : "No";
    echo "</td>
    <td>";
    echo ($param4->restaurant) ? "Yes" : "No";
    echo  "</td>
  </tr>
  <tr>
    <td>Spa</td>
    <td>";
    echo ($param3->spa) ? "Yes" : "No";    
    echo "</td>
    <td>";
    echo ($param4->spa) ? "Yes" : "No";
    echo "</td>
  </tr>
</table>";
    }

    function bookButton(){
        echo "<form class='form-inline' role='form' action=" .  htmlspecialchars($_SERVER["PHP_SELF"]).  
         " method='post'>
         <button type=\"submit\" value=\"book\">Book</button>
         </form><br><br>";
    }

    
}


?>


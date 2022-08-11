
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: rgb(199, 196, 196);
        }
        .h1{
            font-size: 29px;
        }
        .p1{
            font-size: 23px;
        }
        #l{
            transform: translate(-12vw,5vh);
            font-size: 23px;
            display: inline-flex;
          }
    
        #r{
            transform: translate(32vw,5vh);
            font-size: 23px;
            display: inline-flex;

        }
        #bl{
            transform: translate(-31.5vw,13vh);
            font-size: 23px;
            display: inline-flex;
          }
    
        #br{
            transform: translate(9.6vw,13vh);
font-size: 23px;
display: inline-flex;

        }
        .table {
            transform: translate(17.9vw,11vh);
            display: inline-flex;
            font-size: 34px;
          }
    </style>
</head>
<body>
    <div class="heading">
       <center>  <h1 class="h1">M.M. INSTITUTE OF ENGINEERING AND TECHNOLOGY</h1>							
           <h1 class="h1"> MAHARISHI MARKANDESHWAR (DEEMED TO BE UNIVERSITY)MULLANA-AMBALA</h1>						
            <h1 class="h1">(Accredited by NAAC with Grade ‘A++’)							
            </h1>
            <p class="p1">Analysis of Student Feedback on Teacher's performace for session 2021-22(EvenSemester)</p>

            <p id="l">Class: BTECH</p>
            <p id="r">Semester 4 <sup>th</sup> &nbsp; A</p>
            <?php
include("connection.php");
$query = "SELECT * FROM `feedback`.`response`;";
$data = $con->query($query);
$totalrows= mysqli_num_rows($data);

        echo "<strong><p id='bl'>Total Form Filled:$totalrows</p></strong>";
        $maxmarks = $totalrows*60;
        echo "<strong><p id='br'>Highest Marks:$maxmarks</p></strong>";
           
?>

    </div>

    <?php 

error_reporting(0);
$query = "SELECT * FROM `feedback`.`response`;";
$data = $con->query($query);
$totalrows= mysqli_num_rows($data);
$maxmarks = $totalrows*60;
    
    include("connection.php");
     $query1 = "SELECT SUM(`Rajneesh`) `Rajneesh` FROM `feedback`.`response`;";
     $query2 = "SELECT SUM(`Rohit`) `Rohit` FROM `feedback`.`response`;";
     $query3 = "SELECT SUM(`Rajeev`) `Rajeev` FROM `feedback`.`response`;";
     $query4 = "SELECT SUM(`Poonam`) `Poonam` FROM `feedback`.`response`;";
     $query5 = "SELECT SUM(`Sonali`) `Sonali` FROM `feedback`.`response`;";
     $query6 = "SELECT SUM(`Dileep`) `Dileep` FROM `feedback`.`response`;";
    


     

     $data1= $con->query($query1);
     $data2= $con->query($query2);
     $data3= $con->query($query3);
     $data4= $con->query($query4);
     $data5= $con->query($query5);
     $data6= $con->query($query6);
     



     $total1=mysqli_fetch_assoc($data1);
     $total2=mysqli_fetch_assoc($data2);
     $total3=mysqli_fetch_assoc($data3);
     $total4=mysqli_fetch_assoc($data4);
     $total5=mysqli_fetch_assoc($data5);
     $total6=mysqli_fetch_assoc($data6);
     

 $per1 = ($total1['Rajneesh']/$maxmarks)*100;
 $per2 = ($total2['Rohit']/$maxmarks)*100;
 $per3 = ($total3['Rajeev']/$maxmarks)*100;
 $per4 = ($total4['Poonam']/$maxmarks)*100;
 $per5 = ($total5['Sonali']/$maxmarks)*100;
 $per6 = ($total6['Dileep']/$maxmarks)*100;
 



    echo ("

    <div class='table'>
        <table border='1px'>
<tr>
                <th>S. No</th>
                <th>Faculty Name</th>
                <th>Designation</th>
                <th>Total</th>
                <th>Percentage</th>
</tr>

<tr>
    <td>1</td>
    <td>Dr.Rajneesh Gujral</td>
    <td>Assistant Proffesor</td>
    <td>".$total1['Rajneesh']."</td>
    <td>".round($per1,2)."%</td>
</tr>
<tr>
    <td>2</td>
    <td>Dr.Rohit Vaid </td>
    <td>Assistant Proffesor</td>
    <td>".$total2['Rohit']."</td>
    <td>".round($per2,2)."%</td>
</tr><tr>
    <td>3</td>
    <td>Dr.Rajeev Gupta </td>
    <td>Assistant Proffesor</td>
    <td>".$total3['Rajeev']."</td>
    <td>".round($per3,2)."%</td>
</tr>
<tr>
    <td>4</td>
    <td>Mrs.Poonam Gupta</td>
    <td>Assistant Proffesor</td>
    <td>".$total4['Poonam']."</td>
    <td>".round($per4,2)."%</td>
</tr><tr>
    <td>5</td>
    <td>Dr.Sonali Goyal</td>
    <td>Assistant Proffesor</td>
    <td>".$total5['Sonali']."</td>
    <td>".round($per5,2)."%</td>
</tr>

<tr>
    <td>6</td>
    <td>Mr.Dileep Kumar Tiwari</td>
    <td>Assistant Proffesor</td>
    <td>".$total6['Dileep']."</td>
    <td>".round($per6,2)."%</td>
</tr>


            
        </table>");
        ?>
        
    </div>
   
</body>
</html>


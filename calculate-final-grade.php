<html>
<body style="background-color: darkblue;">
    <center>
    <h1 style="color: white; font-size: 80px; ">Kuros Final Grade Calculator<h1>
    <div style="background-color: red; width: 600px; height: 600px; border-radius: 25px;">
        <center>
        <div style="margin-top: 140px; ">
            <center>
            <form action="calculate-final-grade.php" method="get">
            <input type="text" name="target_grade" placeholder="Target Grade" style="width: 450px; height: 80px; font-size: 40px; border-radius: 25px; margin-top: 80px;"> 
            <input type="text" name="current_grade" placeholder="Current Grade" style="width: 450px; height: 80px; font-size: 40px; border-radius: 25px; margin-top: 30px;"> 
            <input type="text" name="final_weight" placeholder="Final Weight" style="width: 450px; height: 80px; font-size: 40px; border-radius: 25px; margin-top: 30px;"> 
            <input type="submit" value="Find Final Grade Needed" style="width: 260px; height: 30px; font-size: 20px; border-radius: 25px; margin-top: 30px;"> 
            </form>
            </center>
        </div>
        </center>
    </div>
    </center>
</body>
</html>
<?php
$target = $_GET["target_grade"];
$current = $_GET["current_grade"];
$final = $_GET["final_weight"];
# fomula == Final exam grade = (Target Grade - Current Grade x (100% - Weight of Final(%))) / Weight of Final(%)
$tc = $target - $current;
$pw = 100 - $final;
$tcpw = $tc * $pw;
$tcpww = $tcpw / $final;
$final_grade_needed = $tcpww;
echo "<h1 style='color: blue; font-size: 45px; margin-left: 680px; margin-top: -120px; font-family: monospace;'> Final Grade Needed: " . $final_grade_needed . "</h1>";
?>
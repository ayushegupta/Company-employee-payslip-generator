<html>
<body background="bg.png" >
<center>
<h1> Payroll Slip</h1>
<?php
$sal=$_POST["txtsal"];
$hra=0.1*$sal;
$da=0.12*$sal;
$pf=0.15*$sal;
$gross=$sal+$hra+$da;
$net=$gross-$pf;
echo "<br><br><b>Employee Code:</b> $_POST[txtcode]";
echo "<br><br><b>Employee Name:</b> $_POST[txtname]";
echo "<br><br><b>Employee Basic Salary:</b> $_POST[txtsal]";
echo "<br><br><b>HRA:</b> $hra";
echo "<br><br><b>DA:</b> $da";
echo "<br><br><b>PF:</b> $pf";
echo "<br><br><b>Gross Salary:</b> $gross";
echo "<br><br><b>NET Salary:</b>$net";
?>
</center>
</body>
</html>
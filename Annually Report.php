<?php
	require 'connection.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="CSS/AnnuallyReport.css" type="text/css" rel="stylesheet"/>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<title>Annual Report</title>
</head>

<body>
<div></div>
<?php
	$message='';
	if(isset($_POST['generate'])){
		$year=$_POST['YearGetter'];
		$generate=$_POST['generate'];
		echo $year;
		}	
	?>
<div id="Headline1" align="center">
  <h1>Annual Report</h1>
  <h1>Secretary Office Bemmulla</h1>
</div>

<div id="Getter">
  <p>Type Year </p>
  <form method="post" id="datagetter">
  		<input name="YearGetter" type="number" id="YearGetter" value=""> <br/>
  		<button name="generate"  value="1">Generate</button>
  </form>
</div>

<?php if (($generate=='1') && (is_numeric($year))) { ?>
<form method="post" id="content">
    <table id="Table" align="center" width="805" height="169" border="1">
          <caption>
          <div align="center">Annually Payment Report </div>
          </caption>
          <tr>  <th>Status</th>
                <th width="415"><div align="center">Description</div></th>
                <th width="194"><div align="center">Amount</div></th>
          </tr>
          <tr>  <td width="174" align="center">Assesment Tax Income</td>
                <td height="25"><form><input name="IncomeDescription1" type="text" id="IncomeDescription1"></form></td>
                <td width="194" align="right"><form><input name="IncomeAmount1" type="text" id="IncomeAmount1"></form></td>
          </tr>
          <tr>  <td width="174" align="center">Shop Rental Income</td>
                <td width="415" height="25"><form><input name="IncomeDescription2" type="text" id="IncomeDescription2"></form></td>
                <td width="194" align="right"><form><input name="IncomeAmount2" type="text" id="IncomeAmount2"></form></td>
          </tr>
          <tr>  <td width="174" align="center">Expenditure</td>
                <td width="415" height="50"><form><input name="Description2" type="text" id="Description2"></form></td>
                <td width="194" align="right"><form><input name="Amount2" type="text" id="Amount2" /></form></td>
          </tr>  
      </table>
        <br/>
    
    <table id="FinalDetails">
        <tr>	<td id="Data">Balance in previous month   :</td>
                <td> <form><input type="text" name="Balance" placeholder="#amount"></form></td>
        </tr>
        <tr>	<td id="Data">Total Income Amount  :</td>
                <td> <form><input type="text" name="search1" placeholder="#amount"></form></td>
        </tr>
        <tr>   	<td id="Data">Total Expenditure Amount :</td>
                <td><form><input type="text" name="search2" placeholder="#amount"></form></td>
        </tr>
        <tr>	<td id="Data">Balance :</td>
                <td><form><input type="text" name="search3" placeholder="#amount"></form></td>
        </tr>
    </table>
    
    <div id="detail">
       <button type="button" onclick="window.print()">Done</button></form>
    </div>
</form>
<?php } ?>
<body>
</body>
</html>

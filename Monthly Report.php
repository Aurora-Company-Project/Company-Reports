<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="CSS/MonthlyReport.css" type="text/css" rel="stylesheet" />
<link href="Monthly Report Main.css" type="text/php" rel="stylesheet" />

<title>Monthly Report</title>
</head>
<body>
<div></div> 

<div id="Headline1" align="center">
  <h1>Monthly Report</h1>
  <h1>Secretary Office Bemmulla</h1>
</div> 

<form action="" method="post">
    	Selected Month :
        <?php
			if (isset($_POST['generate'])){	
				$generate = $_POST['generate'];
				echo $generate;
			}
		?>
</form>

    <table id="Table2" align="center" width="805" height="169" border="1">
          <caption>
                <div align="center">Monthly Payment Report </div>
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
                <td width="194" align="right"><form><input name="Amount2" type="text" id="Amount2"></form></td>
          </tr>  
    </table>
     
    <table id="FinalDetails">
        <tr>	<td id="Data">Balance in previous month   :</td>
                <td> <form><input type="text" name="Balance" placeholder="#amount"></form></td>
        </tr>
        <tr>	<td id="Data">Total Income Amount  :</td>
                <td> <form><input type="text" name="search1" placeholder="#amount"></form></td>
        </tr>
        <tr> 	<td id="Data">Total Expenditure Amount :</td>
                <td><form><input type="text" name="search2" placeholder="#amount"></form></td>
        </tr>
        <tr>	<td id="Data">Balance :</td>
                <td><form><input type="text" name="search3" placeholder="#amount"></form></td>
        </tr>
    </table>
    <div id="detail" ><button type="button">Done</button></div> 
</body>

</html>


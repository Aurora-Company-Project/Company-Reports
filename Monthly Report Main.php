<?php 
	if(isset($_POST['generate'])){
		include 'connection.php';
		$month=$_POST['month'];
		$generate=$_POST['generate'];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="CSS/Layout.css" rel="stylesheet" type="text/css" />
<link href="CSS/Menu.css" rel="stylesheet" type="text/css" />
<link href="CSS/MonthlyReport.css" type="text/css" rel="stylesheet" />

<title>Home</title>
</head>
<body>
<div id="Holder">
<div id="Header"> </div>
<div id="NavBar"> 
	<nav>
		<ul>
			<li> <a href="AccountOfficer.php"> Home </a></li>
			<li class="DropDwnElmnt"> <a href="#"> Tax Payments </a> 
            	<div class="DropDwnCntnt">
                <ul class="DrpLst">
            		<li> <a href="#"> Assesment Tax </a> </li>
                	<li> <a href="#"> Shop Tax </a> </li>
                </ul>
                </div>
            </li>
			<li class="DropDwnElmnt"> <a href="#"> Reports </a>  
            <div class="DropDwnCntnt">
            <ul class="DrpLst">
            	<li> <a href="#"> Annual Report </a> </li>
                <li> <a href="#"> Monthly Report </a> </li>
                <li> <a href="#"> Tax Payer Report </a> </li>
            	<li> <a href="#"> Custom Report </a> </li>
            </ul>
            </div> 
            </li>
            <li class="DropDwnElmnt"> <a href="#"> View Policies </a> </li>
            <div class="DropDwnCntnt">
            <ul class="DrpLst">
            	<li> <a href="#"> Assesment Tax Policies </a> </li>
                <li> <a href="#"> Shop Rental Policies </a> </li>
            </ul>
            </div>
            <li> <a href="#"> Account Settings </a> </li>
		</ul>
	</nav>
</div>
<div id="Content"> 
<div id="Headline1" align="center">
  <h1>Monthly Report</h1>
  <h1>Secretary Office Bemmulla</h1>
</div>

<form action="" method="post">
    	Select Month :
        <select name="month">
             <option value="None">None</option>
             <option value="January">January</option>
             <option value="February">February</option>
             <option value="March">March</option>
             <option value="April">April</option>
             <option value="May">May</option>
             <option value="June">June</option>
             <option value="July">July</option>
             <option value="August">August</option>
             <option value="September">September</option>
             <option value="October">October</option>
             <option value="November">November</option>
             <option value="December">December</option>
         </select>
         <button name="generate" type="submit" value="1"> Generate </button>
</form>

<?php if ((isset($_POST['generate'])) && ($month!='None')) { ?>
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
    <div id="hyperlink" ><a href="Monthly Report.php" target="_blank" onclick="window.open('Monthly Report.php').print() " type="button">Print Report</a></div>
<?php } ?>

<div id="Message">
</div>
<div id="Detail">
<h2></h2>
</div>
</div>
<div id="footer"></div>
</div>
</body>
</html>
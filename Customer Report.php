<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="CSS/CustomerReport.css" type="text/css" rel="stylesheet" />
<title>Customer Report</title>
</head>
<body>
<div></div>

<div id="Headline1" align="center">
  <h1>Customer Report</h1>
  <h1>Secretary Office Bemmulla</h1>
</div>

<div id="Search">
    <form>
  		Customer : <input type="text" name="search" placeholder="Search..">
	</form>
</div>

<div align="center" id="Table2">
    <table width="805" border="1">
      <caption>
      <div align="center">Custom Payment Report </div>
      </caption>
      <tr><th>No.</th>
        <th width="523"><div align="center">Description</div></th>
        <th width="195"><div align="center">Amount</div></th>
      </tr>
      <tr>  <td width="65"><form ><input type="text" name="Number"></form></td>
       	<td width="523" height="100"><form id="Description"><input size="100" type="text" name="Description">
       	</form></td>
        	<td width="195"><form id="Amount"><input type="text" name="Amount"></form></td>
      </tr>
  </table>
    <br/>
  </div>
<div id="Detail">
<table id="FinalDetails">
  	<tr><td>Payed Amount  :</td><td> <form><input type="text" name="search1" placeholder="#amount"></form></td></tr>
     <tr><td>Balance Amount :</td>
     <td><form>
         <input type="text" name="search2" placeholder="#amount"></form></td></tr>
     <tr><td>Extra payment Amount :</td>
     <td><form>
          <input type="text" name="search3" placeholder="#amount">
	</form></td></tr>
 </table>
<button>Done</button>
</div>
</body>
</html>
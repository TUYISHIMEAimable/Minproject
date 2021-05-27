<html>
<head>
	<style>
	table{
		border-collapse: collapse;
		width:900px;
		height:60px;
        background: rgb(55, 88, 55);
		}
		th,td{
			border:0px yellowgreen;
				padding: 5px;

		}
		a{text-decoration:none;
		}
	</style>
</head>
<body>
    
<table bgcolor="yellow" border="1" align = "center"  >
		<tr style = "background-color: #36922C ">
			<td colspan = "5" >
					<form method = "POST" Action = "save_candid.php">
					<fieldset>

					<legend> <font color="black" size="50%" aligne ="center">Passanger Information Form </font></legend>
               			<table bgcolor="blue" border="1" align = "center" >
                           <tr>
 <th rowspan="12"><h3><font color="yellow">AGENCE CAR TIME</font></th>
 </tr>

                           
					<tr><th>Firstname </th><td> <input type = "text" name = "FirstName" size = "30" placeholder = "Fistname Here" required></td></tr>
<tr><th>Lastname      </th><td> <input type = "text" name = "LastName" size = "30" placeholder = "Lastname Here" required></td></tr>
					<tr><th>Gender        </th><td> <input type = "radio" name = "Gender" Value = "Female" > Female
					 <input type = "radio" name = "Gender" value  = "Male" required>Male</td></tr>
					<tr><th>Date of Birth </th><td> <input type = "date" name = "DateOfBirth" size = "30" required></td></tr>
					<tr><th>Phone Number  </th><td> <input type = "text" name = "PhoneNumber" size = "30" placeholder = "Phone Number Here" required></td></tr>
					<tr><th>Email </th><td> <input type = "text" name = "Email" size = "30" placeholder = "Email" required></td></tr>
					<tr><th>Location from: </th><td> <input type = "text" name = "Email" size = "30" placeholder = "where you com ?" required></td></tr>
					<tr><th>Location to: </th><td> <input type = "text" name = "Email" size = "30" placeholder = "where you go?" required></td></tr>
					<tr><th>National ID </th><td> <input type = "text" name = "n_id" size = "30" placeholder = "National ID Here" required></td></tr>
					
					
<tr><th> Select Agance </th>

					<td>
  <select >
  <option >----------</option>
  <option value="Differnt">DIFFERENT</option>
  <option value="stella">STELL</option>
  <option value="select">SELECT</option>
  <option value="Fidelity">FIDELTY</option>
  <option value="kigali cotch">KIGALI COTCH</option>
   <option value="Virunga " >VIRUNGA</option>
  </select>
</td>
	<tr> <th> <input type = "submit" value = "Register"></th><td><input type = "reset" value = "Clear"></td></tr>
	

					</table></fieldset></table>
                  
					</form>

</center>
</body>
</html>

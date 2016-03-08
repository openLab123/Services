<!--- This Html Code Loads User Interface for SERVICE LINKING PAGE on a Browser -->
<!DOCTYPE html>
<html>
<head> <header> SERVICE LINKING </header>
	<title>Service Linking</title>
<!--- The Below <link> tags Loads CSS Styles from the .CSS Files -->
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="Tables.css">
	<link rel="stylesheet" type="text/css" href="menumap.css">

<!--- The Below <Script> tags Loads JAVA SCRIPT Code from the below specified File Tags -->
	<script type="text/javascript"src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
	<script type="text/javascript" src = "servicelinkingScriptCode.js"></script>

</head>
<body>.
	<table id = "lists_table"; align="left">
		<tr>
			<td>
				<p>  
				 	Parent Service Selection  
				</p>
			</td>
			<td>
				<p>
					Child Service Selection
				</p>
			</td>
		</tr>
		<tr>
			<td style="text-align:center">
				<div id="List_Display"> </div>
				<select size="7" id = "List_of_Services1" > </select></td>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<td style="text-align:center">
				<select size="7" id = "List_of_Services2"> </select>
			  
				
			</td>
		</tr>
		<tr>
			<td style="text-align:center">
				<button id = "Link_Button" value = "Link"> &#10004; LINK </button>
			</td>
			<td style="text-align:center">
				<button id = "Remove_Link_Button" value = "Remove_Link"> &#10007; REMOVE LINK </button>
			</td>
		</tr>
	</table>

	<table id="notes_table"> 
			<tr> 
				<td style="text-align:left">
					<li align = "center"> TO LINK SERVICES </li><br>
					<li> Please select Parent Service from 1st List-Box </li><br>
					<li> Please select Child Service from 2nd List-Box  and click Link Button</li><br>
					<li align = "center"> TO BREAK LINKS OF SERVICES </li><br>
					<li> Please select Service from 2nd List-Box and click Remove Link button </li>
				</td>
			</tr>
			<tr><tr> <td style="text-align:center"> <div id = "sub_table_display"> </div></td></tr>
	</table>
	<table id="lists_table"> 
		<tr> 
			<td style="text-align:left">
		 		<p> Services Linked Prior </p> 
				<div id="Linked_Services_Display" class="nowrap"> <?php include('serviceslinktableonloadservices.php');?> </div>
			</td>
		</tr>

	</table>
	<br><br><br></table>
</body>
</html>

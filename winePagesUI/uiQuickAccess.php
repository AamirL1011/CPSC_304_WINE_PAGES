<!DOCTYPE html>
<html>
<head>
	<title>The Wine Pages</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="winePagesUI.css">
	<link rel="icon" type="image/ico" href="logo.png" />
</head>
<body>
	<div class="header">
	<p><span>Wine / Pages <span>| Admin Page</span><span><img src="logo.png"></p>
    </div>
  <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <form class="searchbox" id="searchbox" action="searchbox_results.php" method="post">
  	<input name="search_keyword" type="text" placeholder="Browse inventory...">
  	<button type="submit"><i class="fa fa-search"></i></button>
  </form>
  <a href="uiRegistration.php">Manage Users</a>
  <a href="uiFavourite.php">Manage Favorites</a>
  <a href="uiInventory.php">Inventory Stats</a>
   <a href="uiQuickAccess.php">Quick Access Panel</a>
</div>

<h2 class="FormTitle">Quick Access Panel</h2>	
    <h3>Find all customers that have browsed all wines:</h3>
    <div>
	     <form class="Search3" id="Registration" action="division_query.php">
		         <button>Perform Division Query</button>
	      </form>
    </div>
	<div>
	<form class="Search2" id="AlternateSearch" action="selection_query.php" method="post">
        <h4>Selection Query for the Wine Table:</h4>
		<div>
			<label for="FieldOne">Select a Field to Display:</label>
			<select name="FieldOne" required>
				<option value="" disabled selected>Disp. Attr</option>
				<option value="WineID">WineID</option>
				<option value="WineryID">WineryID</option>
				<option value="WineName">WineName</option>
				<option value="WineYear">WineYear</option>
				<option value="WineCost">WineCost</option>
				<option value="WineABV">WineABV</option>
			</select>
		</div>
		<div>
			<label for="FieldTwo">Select a Comparison Field:</label>
			<select name="FieldTwo" required>
				<option value="" disabled selected>Comp. Attr</option>
				<option value="WineID">WineID</option>
				<option value="WineryID">WineryID</option>
				<option value="WineYear">WineYear</option>
				<option value="WineCost">WineCost</option>
				<option value="WineABV">WineABV</option>
			</select>
		</div>
		<div>
			<label for="Operator">Where the Comparison Field is:</label>
			<select name="Operator" required>
				<option value="" disabled selected>Operator</option>
				<option value="<"><</option>
				<option value=">">></option>
				<option value=">=">>=</option>
				<option value="<="><=</option>
				<option value="=">=</option>
				<option value="<>">!=</option>
			</select>
		</div>
		<div>
		<label for="Value">Than/To the Following Value:</label>
		<input type="text" name="Value" size="30" required>
		</div>
		<button>Search</button>
	</form>
	</div>
<div>
<form class="Search2" id="AlternateSearch" action="projection_query.php" method="post">
        <h4>Projection Query:</h4>
		<div>
			<label for="Table">Select a Table to Query:</label>
			<select name="Table" required>
				<option value="" disabled selected>Table</option>
				<option value="customer">customer</option>
				<option value="favorite">favorite</option>
				<option value="grape">grape</option>
				<option value="quality">quality</option>
				<option value="storage">storage</option>
				<option value="wine">wine</option>
				<option value="winery">winery</option>
				<option value="winery_branch">winery_branch</option>
				<option value="winery_rep">winery_rep</option>
				<option value="wine_made_from">wine_made_from</option>
				<option value="wine_stored_at">wine_stored_at</option>
			</select>
		</div>
		<div>
		<label for="Field">Enter the name of a Field to Project:</label>
		<input type="text" name="Field" size="30" required>
		</div>
		<button>Search</button>
	</form>
	<form class="Search2" action="join_query.php" method="post">
        <h4>Join Query (on Grape and Quality tables)</h4>
        <div>
            <label for="FieldOne">Select a Field from the Quality table:</label>
            <select name="FieldOne" required>
                <option value="" disabled selected>Disp. Attr</option>
                <option value="QualityID">QualityID</option>
                <option value="QualityName">QualityName</option>
                <option value="QualityAroma">QualityAroma</option>
                <option value="QualityColor">QualityColor</option>
                <option value="QualityFlavour">QualityFlavour</option>
            </select>
        </div>
        <div>
            <label for="FieldTwo">Select a Field from the Grape table:</label>
            <select name="FieldTwo" required>
                <option value="" disabled selected>Disp. Attr</option>
                <option value="GrapeID">GrapeID</option>
                <option value="GrapeName">GrapeName</option>
                <option value="GrapeSize">GrapeSize</option>
                <option value="GrapeColor">GrapeColor</option>
            </select>
        </div>
        <div>
            <label for="Operator">Where the Comparison Field is:</label>
            <select name="Operator" required>
                <option value="" disabled selected>Operator</option>
                <option value="<"><</option>
                <option value=">">></option>
                <option value=">=">>=</option>
                <option value="<="><=</option>
                <option value="=">=</option>
                <option value="<>">!=</option>
            </select>
        </div>
        <button>Search</button>
    </form>

</div>
</body>
</html>

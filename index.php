
<html>
  <head>
    <script src="js/app.js"></script>
    <title>XML Configurator</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body>
      <div class="header">
        <p>Enter details below</p>
      </div>
    <div id="platform">
    <h3>Select phone model :-</h3>
    <select id="selectModel" class="button" placeholder="Select Model" align="right">
    <option value="7911.cnf.xml">7911 Model</option>
    <option value="7942.cnf.xml">7942 Model</option>
    <option value="7945.cnf.xml">7945 Model</option>
    <option value="7962.cnf.xml">7962 Model</option>
    <option value="7965.cnf.xml">7965 Model</option>
    <option value="6921.cnf.xml">6291 Model</option>
    </select>
    </div>
    <br><br>
    <input type="text" class="button" id="macID" name="macID" placeholder="Mac Address, Example:- 001D70FB1A2D" onblur="ifMacExists()">
    <br><br>
    <input type="text" class="button" id="name" name="name" placeholder="Name, Example:- Arthur Allen">
		<br><br>
		<input type="text" class="button" id="phone" name="phone" placeholder="Phone extension, Example :- 728">
		<br><br>
		<input type="password" class="button" id="password" name="password" placeholder="Password">
		<br><br>
		<br><br>
        <input type="submit" class="button" id="submit" onclick="submitPhone();" value="Create Extension!">
<br>
<div id="log"></div>
<footer>
<h3>© IP Technics LLC</h3>
</footer>
  </body>
</html>

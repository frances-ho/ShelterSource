

 <html xmlns = "https://www.w3.org/1999/xhtml">
 <head>
 <tite> Form Process Manager </title>
 </head>
  <body>
    <h1> PHP CONNECT TO MYSQL </h1>
    <?php
      $db = mysqli_connect('localhost', 'root', 'root', 'mydb');
      or die("Error connecting");

  //  $query = mysqli_query($con, "SELECT id, name, location FROM location");
 $er = mysql_select_db("location");
 if (!$er)
  exit("Error - could not select location database");

//Get form data values
$county = $_POST["county"];
$veteran = $_POST["veteran"];
$disability = $_POST["dis"];
$shelter = $_POST["shelter"];

$shelter_html = htmlspecialchars($shelter);
if(!$result){
  print "error - the query could not be executed";
  $error = mysql_error();

  print "<p>", $error . "<p>";
  exit;
}
$query = "SELECT * from location";
$result = mysql_query($query);
echo $result
//





    ?>

  </body>
  </html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iron Gym | Welcome!</title>

<style type="text/css">
  #tabelclienti{
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    width:70%;
  }
  #tabelclienti td, #tabelclienti th{
    border: 1px solid black;
    padding:8px;
  }
  #tabelclienti tr:nth child(even){background-color: lightgrey;}

  #tabelclienti th{
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: lightgrey;
    color:black;
  }
</style>

  <link rel="stylesheet" href="./css/style2.css">
  </head>

  <body>
  <header>
  		<div class="container">
  			<div id="brand">
  			 <a href="home.html"><img src="./img/logo4.png" style="width: 200px; height: 50px;"></a>
  		</div>

<nav>
      <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="about.html">About us</a></li>
        <li><a href="galeriefoto.html">Gallery</a></li>
        <li><a href="abonamente.html">Membership</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li class="actual"><a href="clients.php">Clients</a></li>
        </ul>
</nav>
  </div>
</header>

<div class="container">
<h2>Registered clients</h2>
<table id="tabelclienti">
  <tr>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Mail</th>
    <th>Subiect</th>
    <th>Mesaj</th>
  </tr>

<?php
$servername = 'localhost';
$username ='root';
$password ='1234';
$dbname='clientdb';

$con =new mysqli($servername, $username,$password, $dbname);

if($con->connect_error){
  die ("Connection failed".$con->connect_error);
}

$query= mysqli_query($con, " select * from clients");
  while ($row= mysqli_fetch_array($query)) {
  echo "<tr>";
  echo "<td>".$row["nume"]."</td>";
  echo "<td>".$row["prenume"]."</td>";
  echo "<td>".$row["mail"]."</td>";
  echo "<td>".$row["subiect"]."</td>";
  echo "<td>".$row["mesaj"]."</td>";
echo "</tr>";
}
mysqli_close($con);
?>

</table>
</div>


<footer>
      <p>Iron Gym, Copyright &copy; 2018</p>
</footer>

</body>
</html>
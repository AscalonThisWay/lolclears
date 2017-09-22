<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Some Page Title</title>
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/hexagons.css" type="text/css"  media="screen" />
  <link rel="stylesheet" href="css/search.css" type="text/css"  media="screen" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans|Baumans' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
  <script src="js/vendor/modernizr.min.js"></script>
  <script src="js/vendor/respond.min.js"></script>

  <!-- include extern jQuery file but fall back to local file if extern one fails to load !-->
  <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
  <script type="text/javascript">
    window.jQuery || document.write('<script type="text/javascript" src="js\/vendor\/1.7.2.jquery.min.js"><\/script>')
  </script>

  <script src="js/vendor/prefixfree.min.js"></script>
  <script src="js/vendor/jquery.slides.min.js"></script>
  <script src="js/script.js"></script>
</head>

<body>
  <header>
    <div class="toggleMobile">
      <span class="menu1"></span>
      <span class="menu2"></span>
      <span class="menu3"></span>
    </div>
    <div id="mobileMenu">
      <ul>
        <li><a href="javascript:void(0)">Home</a></li>
        <li><a href="javascript:void(0)">Porfolio</a></li>
        <li><a href="javascript:void(0)">About</a></li>
      </ul>
    </div>
    <h1>LoLClears.com</h1>
    <p>Jungle paths</p>

    <nav>
      <h2 class="hidden">Our navigation</h2>
      <ul>
        <li><a href="javascript:void(0)">Home</a></li>
        <li><a href="javascript:void(0)">Porfolio</a></li>
        <li><a href="javascript:void(0)">About</a></li>
        <li><a href="javascript:void(0)">Contact</a></li>
      </ul>
    </nav>
  </header>
  <section id="spacer">
    <p>Champions</p>
    <div class="search">
      <form action="#">
        <input type="text" id="search" onkeyup="filterChamps()" placeholder="Enter a name..." />
        <ul class="results" >
  			 <li><a href="index.php">Search Result #1<br /><span>Description...</span></a></li>
  			 <li><a href="index.php">Search Result #2<br /><span>Description...</span></a></li>
  	 		 <li><a href="index.php">Search Result #3<br /><span>Description...</span></a></li>
         <li><a href="index.php">Search Result #4</a></li>
		    </ul>
        <!--<input type="submit" name="start_search" class="button" value="Search" />-->
      </form>
    </div>
  </section>
<!--
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lolclears";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM champions ORDER BY name";
$result = $conn->query($sql);
$myArray = array();

while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
}
$conn->close();
?>
<script type="text/javascript">
    var arr;
    arr = <?php echo json_encode($myArray,TRUE); ?>;

	  var section = document.createElement("section")
    section.id = "boxcontent";
    document.body.appendChild(section);

    var ul = document.createElement("ul");
    //ul.className = "rig columns-6";
	  ul.id= "hexGrid";
    section.appendChild(ul);

    for (var i = 0; i < arr.length; i++) {
      var li = document.createElement("li");
      li.className = "hex";
      var div = document.createElement("div");
      div.className = "hexIn";
      var a = document.createElement("a");
      a.href = 'http://www.google.com/search?q=number+' + i;
	    a.id = arr[i].name;
      a.className = "hexLink";
      var img = document.createElement("img");
      img.src = 'http://ddragon.leagueoflegends.com/cdn/6.24.1/img/champion/'+arr[i].name+'.png';
      var h1 = document.createElement("h1");
      h1.innerHTML = arr[i].name;

      a.appendChild(img);
      a.appendChild(h1);
      div.appendChild(a);
      li.appendChild(div);
      ul.appendChild(li);
      section.appendChild(ul);

    }
</script>
<script>
function filterChamps() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('search');
    filter = input.value.toUpperCase();
    ul = document.getElementById("hexGrid");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
		if (a.id.toUpperCase().startsWith(filter)) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>-->
</body>

</html>

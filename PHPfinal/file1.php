
<head>
    <title>South Jersey Coffee </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="file1style.css" />
    
<script src= "JavaS.js"> </script>
</head>


    <header>
        <h1>South Jersey Coffee <br> </h1>
        </header>
        <h2> Hours: Monday - Friday 9am to 5pm. Saturday/Sunday 11am to 3pm.
</h2>

        <p id="demo"></p>

<button type="button" onclick="myFunction()">Daily Deal Click Here :)</button> 

<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>
  <body>
    <main>
        <nav>
            <ul style="list-style: none;">
                <li><a href="file1.php">Home</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="fileMenu.html">Menu</a></li>
                <li><a href="ContactList.html">Contact</a></li>
            </ul>
        </nav>
        <article>
            <h2>"Better than Starbucks"</h2>
            <p>
                <img src="coffee.jpg" title="Coffee" /> 
                <img src="coffee2.jpg" title="Coffee" />
            </p>
            <p>
                Rated best Coffee in the Tri-State area!
            </p>
            <p>
                Our diverse menu fits any coffee drinkers needs!
            </p>
        </article>
    </main>
    <footer>
        Copyright 2020 ©
    </footer>

</body>

</html>
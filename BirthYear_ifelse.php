<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Chinese Zodiac</title>
    <link rel="stylesheet" type="text/css" href="layout.css" media="all">
</head>

<body>

<h1>Chinese Zodiac: Whats Your Sign?</h1>

<?php

function displayForm($BirthYear) {
       
            ?>            
            <form name="BirthYear" action="http://localhost/03PHP/Zodiac/index.php?page=home_page&section=zodiac" method="POST">
                <label for="BirthYear">Your Birth Year:</label><br />
                <input type="text" name="BirthYear" value="<?php echo $BirthYear; ?>"><br />
                <input type="reset" value="Reset" />&nbsp;
                <input type="submit" name="Submit" value="See Your Sign!" />
            </form>
            <?php

}

function displayCount($BirthYear) {

    if(file_exists("Statistics/$BirthYear.txt")) {

        $File = fopen("Statistics/$BirthYear.txt", "r+");
        $Hits = intval(file_get_contents("Statistics/$BirthYear.txt"));
        file_put_contents("Statistics/$BirthYear.txt", ++$Hits);
        fclose($File);
    }
    else {
        file_put_contents("Statistics/$BirthYear.txt", "1");
        $Hits = 1;
    }
    return($Hits);
}

$DisplayForm = TRUE;
$ErrorCount = 0;
$BirthYear = "";
    
    
if (isset($_POST['BirthYear'])) {
    $BirthYear = $_POST['BirthYear'];

    if ($ErrorCount==0) {
        $DisplayForm = FALSE;
    }
    else {
        echo "<p>You need enter a valid year.</p>";
        $DisplayForm = TRUE;
    }
}
if ($DisplayForm == TRUE) {

    if ($ErrorCount > 0)
        echo "<p></p>\n";
        displayForm($BirthYear);
}

else {
    
    $Sign = "";

    $Rat = array(1924, 1936, 1948, 1960, 1972, 1984, 1996, 2008, 2020, 2032);
    $Ox = array(1925, 1937, 1949, 1961, 1973, 1985, 1997, 2009, 2021, 2033);
    $Tiger = array(1926, 1938, 1950, 1962, 1974, 1986, 1998, 2010, 2022, 2034);
    $Rabbit = array(1927, 1939, 1951, 1963, 1975, 1987, 1999, 2011, 2023, 2035);
    $Dragon = array(1928, 1940, 1952, 1964, 1976, 1988, 2000, 2012, 2024, 2036);
    $Snake = array(1929, 1941, 1953, 1965, 1977, 1989, 2001, 2013, 2025, 2037);
    $Horse = array(1930, 1942, 1954, 1966, 1978, 1990, 2002, 2014, 2026, 2038);
    $Sheep = array(1931, 1943, 1955, 1967, 1979, 1991, 2003, 2015, 2027, 2039);
    $Monkey = array(1932, 1944, 1956, 1968, 1980, 1992, 2004, 2016, 2028, 2040);
    $Rooster = array(1933, 1945, 1957, 1969, 1981, 1993, 2005, 2017, 2029, 2041);
    $Dog = array(1934, 1946, 1958, 1970, 1982, 1994, 2006, 2018, 2030, 2042);
    $Pig = array(1935, 1947, 1959, 1971, 1983, 1995, 2007, 2019, 2031, 2043);
    

    if (in_array($BirthYear, $Rat)) {
        $Sign = 'Rat';
        echo "<img src='images/rat.jpg'>";
    }
    elseif (in_array($BirthYear, $Ox)) {
        $Sign = 'Ox';
        echo "<img src='images/ox.jpg'>";
    }
    elseif (in_array($BirthYear, $Tiger)) {
        $Sign = 'Tiger';
        echo "<img src='images/tiger.jpg'>";
    }
    elseif (in_array($BirthYear, $Rabbit)) {
        $Sign = 'Rabbit';
        echo "<img src='images/rabbit.jpg'>";
    }
    elseif (in_array($BirthYear, $Dragon)) {
        $Sign = 'Dragon';
        echo "<img src='images/dragon.jpg'>";
    }
    elseif (in_array($BirthYear, $Snake)) {
        $Sign = 'Snake';
        echo "<img src='images/snake.jpg'>";
    }
    elseif (in_array($BirthYear, $Horse)) {
        $Sign = 'Horse';
        echo "<img src='images/horse.jpg'>";
    }
    elseif (in_array($BirthYear, $Sheep)) {
        $Sign = 'Sheep';
        echo "<img src='images/sheep.jpg'>";
    }
    elseif (in_array($BirthYear, $Monkey)) {
        $Sign = 'Monkey';
        echo "<img src='images/monkey.jpg'>";
    }
    elseif (in_array($BirthYear, $Rooster)) {
        $Sign = 'Rooster';
        echo "<img src='images/rooster.jpg'>";
    }
    elseif (in_array($BirthYear, $Dog)) {
        $Sign = 'Dog';
        echo "<img src='images/dog.jpg'>";
    }
    elseif (in_array($BirthYear, $Pig)) {
        $Sign = 'Pig';
        echo "<img src='images/pig.jpg'>";
    }

    $Hits = displayCount($BirthYear);
    echo "<p>Thank you!</p>\n";
    echo "<p>The year you entered was $BirthYear.<br /> You were born under the sign of the " . $Sign . "!</p>\n";
    echo "<p>You are visitor " . $Hits . " to enter " . $BirthYear . ".</p>";
    echo "<p><a href=\"http://localhost/03PHP/Zodiac/index.php?page=home_page&section=zodiac\" style=\"color:black;\" >Try again?</a></p>\n";
}
        



?>

</body>
</html>

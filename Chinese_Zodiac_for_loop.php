<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>

<?php 

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


echo "<table id='Years'><tbody><tr>";

for($Header = 0; $Header <= 11; ++$Header) {
    $Header = array("Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Sheep", "Monkey", "Rooster", "Dog", "Pig");

    foreach($Header as $Sign) {
        echo "<th>" . $Sign . "</th>";        
    }
    echo "</tr><tr>";

    foreach ($Header as $Sign) {
        echo "<td><img src='images/$Sign.jpg' alt='$Sign'></td>";
    }
    echo "</tr>";

    for($i = 0; $i <= 9; ++$i) {
        echo "<tr><td>" . $Rat[$i] . "</td><td>" . $Ox[$i] . "</td><td>". $Tiger[$i] . "</td><td>" . $Rabbit[$i] . "</td><td>" .
                      $Dragon[$i] . "</td><td>" . $Snake[$i] . "</td><td>" . $Horse[$i] . "</td><td>" . $Sheep[$i] . "</td><td>" . 
                      $Monkey[$i] . "</td><td>" . $Rooster[$i] . "</td><td>" . $Dog[$i] . "</td><td>" . $Pig[$i] . "</td></tr>";
    }
}

echo "</tbody></table>";

?>

</body>
</html>
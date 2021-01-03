<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>

<section id="textNav"> 
    
<?php


include('inc_home_links_bar.php');

if (isset($_GET['section'])) {
    switch ($_GET['section']) {
        case 'zodiac':
            include('Includes/inc_chinese_zodiac.php');
            break;
        case 'php': //a value of php means to display the default page.
        default:
            include('Includes/inc_php_info.php');
            break;
    }
}
else
    include('Includes/inc_php_info.php');

?>

</section>

</body>
</html>
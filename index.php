<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Chinese Zodiac</title>
    <link rel="stylesheet" type="text/css" href="layout.css" media="all">
</head>
<body>

    <!-- Header -->

    <header>
        <?php include("includes/inc_header.php"); ?>
    </header>

    <!-- Button Nav -->

    <nav id="buttonNav">
        <?php include("includes/inc_button_nav.php"); ?>
    </nav>
    
    <!-- Text Nav -->

    <nav id="textNav">
        <!-- <?php include("includes/inc_text_links.php"); ?> -->
    </nav>   

    <!-- Dynamic Content -->
    <section id="dyncon">
        <?php 
        if (isset($_GET['page'])) {
            switch ($_GET['page']) {
                case 'Includes/inc_site_layout.php': 
                    include('Includes/inc_site_layout.php');
                    break;
                case 'Includes/inc_control_structures.php': 
                    include('Includes/inc_control_structures.php');
                    break;
                case 'Includes/inc_string_functions.php': 
                    include('Includes/inc_string_functions.php');
                    break;
                case 'Includes/inc_web_forms.php': 
                    include('Includes/inc_web_forms.php');
                    break;
                case 'Includes/inc_midterm_assessment.php': 
                    include('Includes/inc_midterm_assessment.php');
                    break;
                case 'Includes/inc_state_information.php': 
                    include('Includes/inc_state_information.php');
                    break;
                case 'Includes/inc_user_templates.php': 
                    include('Includes/inc_user_templates.php');
                    break;
                case 'Includes/inc_final_project.php': 
                    include('Includes/inc_final_project.php');
                    break;
                case 'home_page': 
                default:
                    include('includes/inc_home.php');
                    break;
            }
        } 
        else include('Includes/inc_home.php');

        ?>
    </section>

    <!-- Footer -->

    <footer>
        <?php include("includes/inc_footer.php"); ?>
    </footer>

</body>
</html>
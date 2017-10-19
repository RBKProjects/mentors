<?php include 'include/functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RBK | Mentor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="_css/styles.css">
    <link rel="shortcut icon" href="http://rbk.org/wp-content/uploads/2016/03/fav.png" />
</head>

<body>

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
               <div class="navbar-header">
                    <a href="http://rbk.org" class="navbar-brand">
                        <img class="img-responsive logo_header" src="_images/rbk_logo.png" alt="RBK logo"></a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mydropdown">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                    <div class="collapse navbar-collapse" id="mydropdown">
                    <ul class="nav navbar-nav">
                        <li class="text-center"><a href="http://rbk.org/#Program">The Program</a></li>
                        <li class="text-center"><a href="http://rbk.org/#Curriculum">Curriculum</a></li>
                        <li class="text-center"><a href="http://rbk.org/#Volunteers">Volunteers</a></li>
                        <li class="text-center"><a href="http://rbk.org/#Partners">Partners</a></li>
                        <li class="text-center"><a href="http://rbk.org/#hireGrads">Hire Our Grads</a></li>
                        <li class="text-center"><a href="http://rbk.org/alumni-outcomes/">Alumni Outcomes</a></li>
                        <li class="text-center"><a href="http://rbk.org/faqs/">FAQs</a></li>
                    </ul>
                    <button class="btn btn-sample navbar-btn navbar-right" onclick="window.open('http://rbkadmissions.herokuapp.com/#/','_self','resizable=yes')">Apply</button>
               </div>
           </div>
        </nav>


    <div class="container" style="padding-top:70px;">

    </div>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title text-center" style=" paddin-bottom:10px">RBK Mentor Registration</h1>
            </div>

<?php
    $first_name = $_GET['firstName'];
    $last_name = $_GET['lastName'];
    $email = $_GET['email'];
    $skype = $_GET['skype'];
    $title = $_GET['title'];
    $company = $_GET['company'];
    $location = $_GET['location'];
    $many_years = $_GET['manyYears'];
    $interested = $_GET['interested'];
    $tech_non_tech = $_GET['techNonTech'];

    // connect to server & DB
    // connectDatabase();
    $conn = mysqli_connect(SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    // Check connection
    if (mysqli_connect_error()) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // support Arabic
    mysqli_set_charset($conn,"utf8");

    // create the sql
    $sql = "INSERT INTO tbl_mentors".
            "(first_name, last_name, email, skype, title, location, company, many_years, interested, tech_non_tech)".
            " VALUES ('"
            .$first_name."', '"
            .$last_name."','"
            .$email."','"
            .$skype."','"
            .$title."','"
            .$location."','"
            .$company."','"
            .$many_years."',"
            .$interested.",'"
            .$tech_non_tech."')";
            //echo "SQL IS: " . $sql;

    // insert record
    // insert(sql);
    if (mysqli_query($conn, $sql)) {
        //$last_id = mysqli_insert_id($conn);
        ?>

        <div class="alert alert-success text-center">
            <strong>Thank you!</strong> Your application has been sent successfully! We will contact your soon.
        </div>
            <p class="text-center" style="margin-top:-5px;"><a href="http://rbk.org">Click Here</a> to go back to the website.</p>
        <?php
    } else {
        ?>
        <div class="alert alert-danger">
            <strong>Sorry!</strong> Something went wrong! Try Again!!.
            <p>

                <?php
                    echo "ERROR: ". mysqli_error($conn);
                ?>
            </p>
        </div>
        <?php
        //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // close connection
    //closeConnection();
?>
</div>
</div>
<div class="contianer-fluid footer navbar-fixed-bottom">
    <p class="text-center">RBK 2016 © All Rights Reserved</p>
</div>



<!-- Libraries-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
    <script>
    function checkWidth(init) {
        if ($(window).width() < 768) {
            $('button').addClass('btn-block');
        } else {
            if (!init)
                $('input').removeClass('form-control');
        }
    }

    $(document).ready(function() {
        checkWidth(true);
        $(window).resize(function() {
            checkWidth(false);
        });
    });
    </script>
</body>

</html>

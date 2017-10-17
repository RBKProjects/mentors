<?php include 'include/functions.php'; ?>
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
            "VALUES ('"
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
            echo "SQL IS: " . $sql; 
            
    // insert record
    // insert(sql);
    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // close connection
    //closeConnection();
?>
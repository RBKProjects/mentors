
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
</head>

<body>

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
               <div class="navbar-header">
                    <a href="http://rbk.org" class="navbar-brand">LOGO</a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mydropdown">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                    <div class="collapse navbar-collapse" id="mydropdown">
                    <ul class="nav navbar-nav">
                        <li><a href="#">The Program</a></li>
                        <li><a href="#">Curriculum</a></li>
                        <li><a href="#">Volunteers</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Hire Our Grads</a></li>
                        <li><a href="#">Alumni Outcomes</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                    <button class="btn btn-primary navbar-btn navbar-right">Apply</button>

               </div>
           </div>
        </nav>


    <div class="container" style="padding-top:60px;">
        <h1>RBK Mentor Registration</h1>
    </div>
    <div class="container">
        <form class="form-horizontal" method="GET" action="send.php">
            <div class="form-group">
                <label for="firstName" class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="lastName" class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="skype" class="col-sm-2 control-label">Skype ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="skype" name="skype" placeholder="Skype ID">
                </div>
            </div>
            <div class="form-group">
                <label for="location" class="col-sm-2 control-label">Location (Country)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="location" name="location" placeholder="Location" required>
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Title/Profession</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title/Profession" required>
                </div>
            </div>
            <div class="form-group">
                <label for="company" class="col-sm-2 control-label">Institution / Organization / Company</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="company" name="company" placeholder="Company" required>
                </div>
            </div>
            <div class="form-group">
                <label for="company" class="col-sm-2 control-label">How many years of experience you have?</label>
                <div class="radio">
                    <label>
                        <input type="radio" id="zeroTwo" name="manyYears" value="0-2"> 0 - 2 years</label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" id="twoFive" name="manyYears" value="2-5"> 2 - 5 years
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" id="moreFive" name="manyYears" value="5+"> 5+ years
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="company" class="col-sm-2 control-label">Interested in mentoring more than one student?</label>
                <div class="radio">
                    <label>
                        <input type="radio" id="yes" name="interested" value="true"> Yes</label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" id="no" name="interested" value="false"> No
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="company" class="col-sm-2 control-label">Your interests (Technical and Non-Technical) </label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="techNonTech" rows="3"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <div class="contianer-fluid footer">
        <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                RBK 2016 © All Rights Reserved
            </div>
        </div>
        </div>
    </div>



    <!-- Libraries-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>

</html>

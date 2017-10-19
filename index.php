
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
                        <li class="text-center"><a href="http://rbk.org/alumni-outcomes/">Alumni Outcomes</a></li>
                        <li class="text-center"><a href="http://rbk.org/faqs/">FAQs</a></li>
                    </ul>
                    <button id="applyButton" class="btn btn-sample navbar-btn navbar-right" onclick="window.open('http://rbkadmissions.herokuapp.com/#/','_self','resizable=yes')">Apply</button>
               </div>
           </div>
        </nav>


    <div class="container" style="padding-top:70px;">

    </div>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title text-center" style=" paddin-bottom:10px">RBK Mentor Registration Form</h1>
            </div>
            <div class="container" style="padding-right:20px; padding-top:20px">
                <p class="lead">
                    We are seeking <strong>technical and non-technical mentors</strong>, both remote and non-remote, to coach and support students. We look for mentors who are enthusiastic, positive and open.
                </p>
                <p class="lead" style="margin-right:10px;">
                    Commitment: One hour per week to mentor one student via Skype/Google Hangouts or at RBK campus if you prefer. You and your mentee will coordinate suitable times to talk. RBK promotes <strong>English</strong> as the main communication language between mentors and mentees but feel free to speak Arabic, Chinese, Klingon, ...
                </p>
                <span class="fieldRequired"> * Required</span>
            </div>
            <form class="form-horizontal" method="GET" action="send.php" style="padding: 20px;">
                <div class="form-group">
                    <label for="firstName" class="col-sm-2 control-label">First Name<span class="fieldRequired"> *</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-2 control-label">Last Name<span class="fieldRequired"> *</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email<span class="fieldRequired"> *</span></label>
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
                    <label for="location" class="col-sm-2 control-label">Location (Country)<span class="fieldRequired"> *</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="location" name="location" placeholder="Location" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Title/Profession <span class="fieldRequired"> *</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title/Profession" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="company" class="col-sm-2 control-label">Institution / Company<span class="fieldRequired"> *</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="company" name="company" placeholder="Institution / Organization / Company" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">How many years of experience you have?<span class="fieldRequired"> *</span></label>
                    <div style=margin-left:15px;>
                        <div class="radio">
                            <label>
                                <input type="radio" id="zeroTwo" name="manyYears" value="0-2" required>
                                0 - 2 years
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" id="twoFive" name="manyYears" value="2-5" required>
                                2 - 5 years
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" id="moreFive" name="manyYears" value="5+" required>
                                5+ years
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Interested in mentoring more than one student?<span class="fieldRequired"> *</span></label>
                        <label class="radio-inline">
                            <input type="radio" id="yes" name="interested" value="true" required>
                            Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="no" name="interested" value="false" required>
                            No
                        </label>
                </div>
                <div class="form-group">
                    <label for="company" class="col-sm-2 control-label">Your interests (Technical and Non-Technical)<span class="fieldRequired"> *</span> </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="techNonTech" rows="3" required></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                            <button id="submitButton" type="submit" class="btn btn-sample">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="contianer-fluid footer">
        <p class="text-center">RBK 2016 © All Rights Reserved</p>
    </div>



    <!-- Libraries-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

    <script>
        function checkWidth(init) {
            if ($(window).width() < 768) {
                $('#submitButton').addClass('btn-block');
                $('#applyButton').removeClass('navbar-right');
                $('#applyButton').addClass('btn-block');
            } else {
                if (!init)
                    $('#submitButton').removeClass('form-control');
                    $('#applyButton').addClass('navbar-right');
                    $('#applyButton').removeClass('btn-block');
                    $('#submitButton').removeClass('btn-block');

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

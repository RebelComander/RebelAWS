<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
        .SocialMediaImage 
        {
            display: block;
            height: auto;
            width:30px;
            height:30px;
        }

        .ProfileImage
        {
            display: block;
            height: auto;
            width:200px;
            height:200px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        .SocialMediaImage:hover
        {
            opacity: 1;
            background-color: #008CBA;
        }

        ul
        { 
            list-style-type: none;
            padding:0;
            margin:5;
        }

        .SocialMediaLi
        {
            float: left;
            padding-right: 10px;
        }

        .ProfileInfo
        {
            display: inline;
        }

        .title-info
        {
            font-size: 13px;
            color: grey;
        }

        .UniStudies
        {
            font-size: 13px;
            color: grey;
            text-align: center;

        }

        .UniStudiesText
        {
            font-size: 13px;
            color: black;
            text-align: center;
        }

        .info
        {
            font-size: 13px;
        }

        .ProfileText
        {
            font-size: 15px;
            padding: 0;
        }

        .InterestText
        {
            font-size: 15px;
            padding: 0;
            color: white;
        }

        .InterestDescription
        {
            font-size: 15px;
            padding: 0;
        }

        h1
        {
            font-weight: bold;
        }

        h2
        {
            font-size: 20px;
            color: grey;
        }

        h3
        {
            font-weight: bold;
            color: #008CBA;
            text-align: center;
        }

        h4
        {
            font-weight: bold;
            color: #008CBA;
        }

        .CVLink
        {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
            text-align:center;
            font-size: 12px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
        }

        .CVLink:hover 
        {
            color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.50);
        }

        .DownloadImage
        {
            text-align:center;
            display: block;
            height: auto;
            width:100%;
            height:100%;
        }

        .EducationImage
        {
            text-align:center;
            display: block;
            height: auto;
            width:15px;
            height:15px;
            float: left;
        }

        .InterestImage
        {
            text-align:center;
            display: block;
            height: auto;
            width:45px;
            height:45px;
            margin-left: auto;
            margin-right: auto;
        }

        .ProfileName
        {
            color: #008CBA;
        }

        .CheckboxImage
        {
            float: left;
            display: block;
            height: auto;
            width:15px;
            height:15px;
        }

        .ContactImage
        {
            width:70px;
            height:70px;
            padding: 15px
        }

        .ContactInfoCenter
        {
            padding-left: 40px;
            padding-top: 20px;
        }

        .progress
        {
            background-color: #aaa;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .skill
        {
            padding-bottom: 10px;
        }

        .name-circle
        {
            padding-bottom: 10px;
            text-align: center;
        }

        .ContactInfo
        {
            font-size: 15px;
            color: black;
            float: left;
            display: block;
        }

        .jumbotron
        {
            justify-content:center;

        }

        .InterestSize
        {
            border-radius:0rem
        }

        @media only screen and (max-width: 550px) {
            .InterestSize
            {
                border-radius:1rem;
            }
        }

        .EducationSize
        {
            border-radius:0rem;
        }

        @media only screen and (max-width: 760px) {
            .EducationSize
            {
                border-radius:1rem;
            }
        }

        .SkillSize
        {
            border-radius:0rem;
        }

        @media only screen and (max-width: 760px) {
            .SkillSize
            {
                border-radius:1rem;
            }
        }

        input[type=text], select 
        {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=email], select 
        {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] 
        {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover 
        {
            background-color: #45a049;
        }

        textarea[id=messageID] 
        {
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            resize: none;
        }

    </style>
    <title>RH CV/Resume</title>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>

    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <img src="Images/TestImage.jpg" class="ProfileImage">
                    <br>
                    <a href="#" class="CVLink">
                        <img src="Images/DownloadLogo.png" class="DownloadImage"> 
                    </a>
                    <br>
                    Example Text
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h1>
                        <span>
                            Hi I'm 
                        </span>
                        <span class="ProfileName">
                            Robert Hatfield
                        </span>
                    </h1>
                    <h2>Example Job Title Text</h2>

                    <p class="ProfileText">
                        Example Text Example Text Example Text Example Text Example Text Example Text Example Text Example Text Example Text Example Text Example Text Example Text Example Text Example Text Example Text Example Text
                    </p>

                    <table>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <ul class="ProfileInfo">
                                    <li>
                                        <span class="title-info">
                                            Age:
                                        </span>
                                        <span class="info"> 
                                            23
                                        </span>
                                    </li>
                                    <li>
                                    <span class="title-info">
                                        Address: 
                                    </span>
                                    <span class="info">
                                        Example Address
                                    </span>
                                </li>
                                <li>
                                    <span class="title-info">
                                        Email: 
                                    </span>
                                    <span class="info">
                                        Example@email.com
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <ul  class="ProfileInfo">
                                <li>
                                    <span class="title-info">
                                        Phone: 
                                    </span>
                                    <span class="info">
                                        0412345678
                                    </span>
                                </li>
                                <li>
                                    <span class="title-info">
                                        website: 
                                    </span>
                                    <span class="info">
                                        www.rebelcomander.com
                                    </span>
                                </li>
                                <li>
                                    <span class="title-info">
                                        Nationality: 
                                    </span>
                                    <span class="info">
                                        Australian
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <br>
                        <br>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <ul>
                            <li class="SocialMediaLi">
                                <img src="Images/FacebookLogo.png" class="SocialMediaImage">
                            </li>
                            <li class="SocialMediaLi">
                                <img src="Images/InstaLogo.png" class="SocialMediaImage">
                            </li>
                            <li class="SocialMediaLi">
                                <img src="Images/TwitterLogo.png" class="SocialMediaImage">
                            </li>
                            <li class="SocialMediaLi">
                                <img src="Images/LinkedInLogo.png" class="SocialMediaImage">
                            </li>
                        </ul>
                    </div>
                </table>
                </div>

                
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>
                <span class="ProfileSkills">
                    Skills
                </span>
            </h3>
        </div>
        <div class="row">
            <div class="jumbotron text-center col-lg-5 col-md-5 col-sm-12 col-xs-12 SkillSize">
                <div class="title-skills">
                    <h4>
                        Professional skills
                    </h4>
                </div>
                <div class="skill">
                    <div class="title-progress">
                        <span class="skill-name">
                            HTML & CSS
                        </span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress1" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            90%
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <div class="title-progress">
                        <span class="skill-name">
                            WordPress
                        </span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                            75%
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <div class="title-progress">
                        <span class="skill-name">
                            JavaScript
                        </span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress1" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                            85%
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <div class="title-progress">
                        <span class="skill-name">
                            Laravel
                        </span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress1" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                            70%
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <div class="title-progress">
                        <span class="skill-name">
                            Photoshop
                        </span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress1" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                            65%
                        </div>
                    </div>
                </div>
            </div>
            <div class="jumbotron text-center col-lg-7 col-md-7 col-sm-12 col-xs-12 SkillSize">
                <div class="title-skills">
                    <h4>
                        Additional Skills
                    </h4>
                </div>
                <div class="circle-progress">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="circle">
                                <div class="chart" data-percent="90">
                                    <canvas id=canvas height="220" width="220" style="height: 110px; width: 110px;">
                                    </canvas>
                                </div>
                                <div class="name-circle">
                                    <span>
                                        English
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="circle">
                                <div class="chart" data-percent="90">
                                    <canvas id=canvas2 height="220" width="220" style="height: 110px; width: 110px;">
                                    </canvas>
                                </div>
                                <div class="name-circle">
                                    <span>
                                        Creativity
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="circle">
                                <div class="chart" data-percent="90">
                                    <canvas id=canvas3 height="220" width="220" style="height: 110px; width: 110px;">
                                    </canvas>
                                </div>
                                <div class="name-circle">
                                    <span>
                                        Teamwork
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="other-skills">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="other">
                                <div class="skill">
                                    <img src="Images/Checkbox.png" class="CheckboxImage">
                                        <span>
                                            Photography
                                        </span>
                                </div>
                                <div class="skill">
                                    <img src="Images/Checkbox.png" class="CheckboxImage">
                                        <span>
                                            Mobile App Design
                                        </span>
                                </div>
                                <div class="skill">
                                    <img src="Images/Checkbox.png" class="CheckboxImage">
                                        <span>
                                            Logo Design
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="other">
                                <div class="skill">
                                    <img src="Images/Checkbox.png" class="CheckboxImage">
                                        <span>
                                            3D Animation
                                        </span>
                                </div>
                                <div class="skill">
                                    <img src="Images/Checkbox.png" class="CheckboxImage">
                                        <span>
                                            Audio Video Editing
                                        </span>
                                </div>
                                <div class="skill">
                                    <img src="Images/Checkbox.png" class="CheckboxImage">
                                        <span>
                                            UX and UI Design
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>
                <span class="ProfileEducation">
                    Education
                </span>
            </h3>
        </div>
        <div class="row">
            <div class="jumbotron text-center col-lg-6 col-md-6 col-sm-12 col-xs-12 EducationSize">
                <h4>
                    2014 - 2018
                </h4>
                <img src="Images/DegTypeLogo.png" class="EducationImage">
                <div class="UniStudies">
                    Bachelor of Information and Communication Technology
                </div>

                <img src="Images/InstLogo.png" class="EducationImage">
                <div class="UniStudies">
                    Western Sydney University
                </div>
                <div class="UniStudiesText">
                    I am currently completing this degree.
                </div>

            </div>
            <div class="jumbotron text-center col-lg-6 col-md-6 col-sm-12 col-xs-12 EducationSize">
                <h4>
                    2013
                </h4>

                <img src="Images/DegTypeLogo.png" class="EducationImage">
                <div class="UniStudies">
                    HSC
                </div>

                <img src="Images/InstLogo.png" class="EducationImage">
                <div class="UniStudies">
                    Sutherland Shire Christian School
                </div>
                <div class="UniStudiesText">
                    I graduated from this high school successfully completing my HSC.
                </div>
                
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>
                <span class="ProfileEducation">
                    Interests
                </span>
            </h3>
            <p class="InterestDescription">
                Example Text Example Text Example Text Example Text Example Text Example Text Example Text Example Text Example Text Example Text Example Text Example Text Example Text Example Text Example Text Example Text
            </p>
        </div>
        <div class="row">
            <div class="jumbotron text-center col-lg-3 col-md-3 col-sm-6 col-xs-12 InterestSize" style="background-color: #0387CC!important;">
                <img src="Images/Travel.png" class="InterestImage">
                <span class="InterestText">
                    Travel
                </span>
            </div>
            <div class="jumbotron text-center col-lg-3 col-md-3 col-sm-6 col-xs-12 InterestSize" style="background-color: #0387CC!important;">
                <img src="Images/Music.png" class="InterestImage">
                <span class="InterestText">
                    Music
                </span>
            </div>
            <div class="jumbotron text-center col-lg-3 col-md-3 col-sm-6 col-xs-12 InterestSize" style="background-color: #0387CC!important;">
                <img src="Images/Gaming.png" class="InterestImage">
                <span class="InterestText">
                    Gaming
                </span>
            </div>
            <div class="jumbotron text-center col-lg-3 col-md-3 col-sm-6 col-xs-12 InterestSize" style="background-color: #0387CC!important;">
                <img src="Images/Movies.png" class="InterestImage">
                <span class="InterestText">
                    Movies
                </span>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>
                <span class="ProfileEducation">
                    Contact Us
                </span>
            </h3>
        </div>
        <div class="row">
            <div class="jumbotron text-center col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color: white!important;">
                <h4>
                    <span class="ProfileEducation">
                            Input Details
                    </span>
                </h4>
                <?php
                // Checks if form has been submitted
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    function post_captcha($user_response) {
                        $fields_string = '';
                        $fields = array(
                            'secret' => '6LdznngUAAAAALfdSuT6tmzJqOgYXf0irdgrVVWH',
                            'response' => $user_response
                        );
                        foreach($fields as $key=>$value)
                        $fields_string .= $key . '=' . $value . '&';
                        $fields_string = rtrim($fields_string, '&');

                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
                        curl_setopt($ch, CURLOPT_POST, count($fields));
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

                        $result = curl_exec($ch);
                        curl_close($ch);

                        return json_decode($result, true);
                    }

                    // Call the function post_captcha
                    $res = post_captcha($_POST['g-recaptcha-response']);

                    if (!$res['success']) {
                        // What happens when the CAPTCHA wasn't checked
                        echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
                    } else {
                        // If CAPTCHA is successfully completed...

                        // Paste mail function or whatever else you want to happen here!
                        echo '<br><p>CAPTCHA was completed successfully!</p><br>';
                    }
                } else { ?>

                <form id="contactForm" action="/contact" method="post" onsubmit="return false;">
                    @csrf
                    <input type="text" id="nameID" name="name" placeholder="Name" required>
                    <br>
                    <input type="email" id="emailID" name="email" placeholder="Email" required>
                    <br>
                    <textarea id="messageID" name="message" placeholder="Message" required></textarea>
                    <div class="g-recaptcha" data-sitekey="6LdznngUAAAAACUeDHYV1XDUkGOeHtYALQBFmSAC"></div>
                    <br>
                    <input id="btnSubmit" type="submit" value="Submit" required>
                </form>
                <?php } ?>
            </div>
            <div class="jumbotron text-center col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color: white!important;">
                <h4>
                    <span class="ProfileEducation">
                        Keep in touch
                    </span>
                </h4>
                <div class="ContactInfoCenter">
                <span class="text-center ContactInfo">
                    <img src="Images/Address.png" class="ContactImage">
                    Example Address
                </span>
                <span class="text-center ContactInfo">
                    <img src="Images/Email.png" class="ContactImage">
                    Example@email.com
                </span>
                <span class="text-center ContactInfo">
                    <img src="Images/MobileNumber.png" class="ContactImage">
                    0412345678
                </span>  
                <span class="text-center ContactInfo">
                    <img src="Images/Website.png" class="ContactImage">
                    www.rebelcomander.com
                </span>
            </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script id="CircleChartJS">
        window.onload = function()
        {
            var c = document.getElementById("canvas");
            var W = c.width;
            var H = c.height;
            var color = "lightblue";

            var ctx = c.getContext("2d");
            ctx.beginPath();
            ctx.strokeStyle = "#222";
            ctx.lineWidth = 30;
            ctx.arc(W/2, H/2, 80, 0, Math.PI*2, false);
            ctx.stroke();

            var radians = 324 * Math.PI / 180;
            ctx.beginPath();
            ctx.strokeStyle = color;
            ctx.lineWidth = 30;
            ctx.arc(W/2, H/2, 80, 0 - 90*Math.PI/180, radians - 90*Math.PI/180, false);
            ctx.stroke();

            ctx.fillStyle = "grey";
            ctx.font = "50px arial";
            text = "90%";
            text_width = ctx.measureText(text).width;
            ctx.fillText(text, W/2 - text_width/2, H/2 + 15);

            var c = document.getElementById("canvas2");
            var W = c.width;
            var H = c.height;
            var color = "lightblue";

            var ctx = c.getContext("2d");
            ctx.beginPath();
            ctx.strokeStyle = "#222";
            ctx.lineWidth = 30;
            ctx.arc(W/2, H/2, 80, 0, Math.PI*2, false);
            ctx.stroke();

            var radians = 288 * Math.PI / 180;
            ctx.beginPath();
            ctx.strokeStyle = color;
            ctx.lineWidth = 30;
            ctx.arc(W/2, H/2, 80, 0 - 90*Math.PI/180, radians - 90*Math.PI/180, false);
            ctx.stroke();

            ctx.fillStyle = "grey";
            ctx.font = "50px arial";
            text = "80%";
            text_width = ctx.measureText(text).width;
            ctx.fillText(text, W/2 - text_width/2, H/2 + 15);


            var c = document.getElementById("canvas3");
            var W = c.width;
            var H = c.height;
            var color = "lightblue";

            var ctx = c.getContext("2d");
            ctx.beginPath();
            ctx.strokeStyle = "#222";
            ctx.lineWidth = 30;
            ctx.arc(W/2, H/2, 80, 0, Math.PI*2, false);
            ctx.stroke();

            var radians = 234 * Math.PI / 180;
            ctx.beginPath();
            ctx.strokeStyle = color;
            ctx.lineWidth = 30;
            ctx.arc(W/2, H/2, 80, 0 - 90*Math.PI/180, radians - 90*Math.PI/180, false);
            ctx.stroke();

            ctx.fillStyle = "grey";
            ctx.font = "50px arial";
            text = "65%";
            text_width = ctx.measureText(text).width;
            ctx.fillText(text, W/2 - text_width/2, H/2 + 15);
        }
        </script>

    <script type="text/javascript">
        $(function(){
            $('#btnSubmit').click(function(){
                $.ajax({
                    'url' : '/contact',
                    'method' : 'post',
                    'dataType' : 'json',
                    'data' : $('#contactForm').serialize(),
                }).done(function(){
                    alert("done");
                });
            });
        });



    </script>

  </body>
</html>
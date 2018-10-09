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

        .info
        {
            font-size: 13px;
        }

        .ProfileText
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

    </style>
    <title>RH CV/Resume</title>
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
            <div class="jumbotron text-center col-lg-5 col-md-5 col-sm-12 col-xs-12">
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
            <div class="jumbotron text-center col-lg-7 col-md-7 col-sm-12 col-xs-12">
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
            <div class="jumbotron text-center col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <h4>
                    2014 - 2018
                </h4>
                <div class="UniStudies">
                    
                </div>

            </div>
            <div class="jumbotron text-center col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <h4>
                    2013
                </h4>
                
            </div>
            <div class="jumbotron text-center col-lg-4 col-md-4 col-sm-12 col-xs-12">
                
            </div>
            <div class="jumbotron text-center col-lg-4 col-md-4 col-sm-12 col-xs-12">

            </div>
            <div class="jumbotron text-center col-lg-4 col-md-4 col-sm-12 col-xs-12">
                
            </div>
            <div class="jumbotron text-center col-lg-4 col-md-4 col-sm-12 col-xs-12">
                
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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

  </body>
</html>
<?php
/**
* Created by PhpStorm.
* User: Dominik Nagy
* Date: 13-Jan-18
* Time: 22:18
*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="vendor/twbs/bootstrap/dist/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="vendor/twbs/bootstrap/dist/css/cover.css" rel="stylesheet">

    <!-- Main stylesheet -->
    <link href="_assets/css/main.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">
<!--            <h3 class="masthead" id="time"></h3>-->
            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">focus-mate</h3>

                    <nav>
                        <ul class="nav masthead-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="inner cover">
                <h1 class="cover-heading">Get your brain focusing mate.</h1>

                <audio id="myAudio">
                    <source src="_assets/audio/SampleAudio.mp3" type="audio/mp3">
                    Your browser does not support the audio element.
                </audio><br />

                <button onclick="playAudio()" class="btn btn-success" id="playPause"> PLAY </button> <br><br>
                <input type="range" onchange="setVolume()" id='volume1' min=0 max=1      step=0.01 value='0.339'>

            </div>

            <div class="media">
                <div class="media-left media-middle">
                    <a href="#">
                        <img class="media-object" src="_assets/img/coffee.png" alt="..." width="64" height="64" onclick="playAudio()">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading pull-left">Middle aligned media</h4>
                    ...
                </div>
            </div>
            <script>
                var x = document.getElementById("myAudio");
                var isPlaying = false;
                var date = new Date();

                console.log(date);
                function playAudio() {
                    if(isPlaying === false) {
                        x.play();
                        isPlaying = true;
                        document.getElementById("playPause").innerHTML = "PAUSE";
                    }

                    else {
                        x.pause();
                        isPlaying = false;
                        document.getElementById("playPause").innerHTML = "PLAY";
                    }
                }

                function setVolume() {
                    var mediaClip = document.getElementById("myAudio");
                    document.getElementById("myAudio").value = mediaClip;
                    mediaClip.volume = document.getElementById("volume1").value;

                }

                document.getElementById("date").innerHTML = date.now();

            </script>

<!--            <script>-->
<!--                (function () {-->
<!--                    function checkTime(i) {-->
<!--                        return (i < 10) ? "0" + i : i;-->
<!--                    }-->
<!---->
<!--                    function startTime() {-->
<!--                        var today = new Date(),-->
<!--                            h = checkTime(today.getHours()),-->
<!--                            m = checkTime(today.getMinutes()),-->
<!--                            s = checkTime(today.getSeconds());-->
<!--                        document.getElementById('time').innerHTML = h + ":" + m + ":" + s;-->
<!--                        t = setTimeout(function () {-->
<!--                            startTime()-->
<!--                        }, 500);-->
<!--                    }-->
<!--                    startTime();-->
<!--                })();-->
<!--            </script>-->

            <div class="mastfoot">
                <div class="inner">
                    <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="vendor/components/jquery/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="vendor/components/jquery/jquery.min.js"><\/script>')</script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="vendor/twbs/bootstrap/dist/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

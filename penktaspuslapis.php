<?php include "header.php" ?>
<nav class="teal lighten-4">
    <div class="container nav-wrapper">
        <div class="col s12 ">
            <div class="w3-animate-left">
                <a href="index.php" class="breadcrumb black-text">Index</a>
                <a href="papildomas1.php" class="breadcrumb black-text">More 1</a>
            </div>

        </div>
    </div>
</nav>

<div id="quizheader">
<h1  id="quizheadertext" class="center-align w3-animate-bottom"> <b>VCS QUIZ</b> </h1>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<br><br><br><br><br><br>
<div class="container">

    <div class="center">
        <a href="#!" id="startquiz" class="btn blue-grey waves-effect waves-teal scale-transition">Start Quiz</a>
    </div>
    <a href="#!" id="question1" class="btn green lighten-2 waves-effect waves-lime accent-2 scale-transition scale-out">Question 1</a>
    <div class="card green lighten-5 scale-transition scale-out" id="cardas1">
        <div class="card-content">
            <ul>
                <li>
                    <form id="q1" action="#">
                        What is a <b>div</b>?

                        <p>

                            <label>

                                <input name="yourchoice" type="radio" class="radio1" />

                                <span>HTML divider</span>

                            </label>

                        </p>

                        <p>

                            <label>

                                <input name="yourchoice" type="radio" class="radio1" />

                                <span>Stack memory usage number</span>

                            </label>

                        </p>

                        <p>

                            <label>

                                <input name="yourchoice" type="radio" class="radio1" />

                                <span>vid Backwards</span>

                            </label>

                        </p>

                    </form>
                </li>
            </ul>
        </div>
    </div>
    <a href="#!" id="question2" class="btn waves-effect waves-teal scale-transition scale-out">Question 2</a>
    <div class="card cyan lighten-4 scale-transition scale-out" id="cardas2">
        <div class="card-content">
            <ul>
                <li>
                    <form id="q2" action="#">
                        What is the name of <b>Alice</b> ? <br><br>
                        <p>

                            <label>

                                <input name="yourchoice" type="radio" class="radio2" />

                                <span>Jennie</span>

                            </label>

                        </p>

                        <p>

                            <label>

                                <input name="yourchoice" type="radio" class="radio2" />

                                <span>Vanessa</span>

                            </label>

                        </p>

                        <p>

                            <label>

                                <input name="yourchoice" type="radio" class="radio2" />

                                <span>Alice</span>

                            </label>

                        </p>

                    </form>
                </li>
            </ul>
        </div>
    </div>
    <a href="#!" id="question3" class="btn orange lighten-2 waves-effect waves-orange scale-transition scale-out">Question 3</a>
    <div class="card orange lighten-4 scale-transition scale-out" id="cardas3">
        <div class="card-content">
            <ul>
                <li>
                    <form id="q3" action="#">
                        What is <b>life</b> ? <br><br>
                        <p>

                            <label>

                                <input name="yourchoice" type="radio" class="radio3" />

                                <span>Life is life</span>

                            </label>

                        </p>

                        <p>

                            <label>

                                <input name="yourchoice" type="radio" class="radio3" />

                                <span>String a = "life";</span>

                            </label>

                        </p>

                        <p>

                            <label>

                                <input name="yourchoice" type="radio" class="radio3" />

                                <span>life in <b>Bold</b> text</span>

                            </label>

                        </p>

                    </form>
                </li>
            </ul>
        </div>
    </div>
    <a href="#!" id="question4" class="btn deep-orange lighten-2 waves-effect waves-deep-orange lighten-2 scale-transition scale-out">Question 4</a>
    <div class="card deep-orange lighten-4 scale-transition scale-out" id="cardas4">
        <div class="card-content">
            <ul>
                <li>
                    <form id="q4" action="#">
                        What's your <b>favourite</b> ? <br><br>

                        <p>

                            <label>

                                <input name="yourchoice" type="radio" class="radio4" />

                                <span>Dog</span>

                            </label>

                        </p>

                        <p>

                            <label>

                                <input name="yourchoice" type="radio" class="radio4" />

                                <span>Ice Cream</span>

                            </label>

                        </p>

                        <p>

                            <label>

                                <input name="yourchoice" type="radio" class="radio4">

                                <span>Football</span>

                            </label>

                        </p>

                    </form>
                </li>
            </ul>
        </div>
    </div>
    <a href="#!" id="question5" class="btn red darken-4 waves-effect waves-red scale-transition scale-out">Final Question</a>
    <div class="card red scale-transition scale-out" id="cardas5">
        <div class="card-content">
            <ul>
                <li>
                    <form id="q5" action="#">
                        <b>Yes</b> ? <br><br>

                        <p>

                            <label>

                                <input name="yourchoice" type="radio" class="radio5" />

                                <span>Yes</span>

                            </label>

                        </p>

                        <p>

                            <label>

                                <input name="yourchoice" type="radio" class="radio5" />

                                <span>No</span>

                            </label>

                        </p>

                        <p>

                            <label>

                                <input name="yourchoice" type="radio" class="radio5" />

                                <span>I Don't know</span>

                            </label>

                        </p>

                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="card purple lighten-5 scale-transition scale-out" id="cardas6">
        <div class="card-content">
            <p class="center">
                You did it! <br>
                Here's your Prize! <br>
                <i class="large material-icons" id="star-icon">star</i> <br>
            </p>
            <div class="center">
        <a href="http://localhost/projektas2/penktaspuslapis.php" id="tryagain" class="btn yellow waves-effect waves-yellow scale-transition scale-out">Try again ?</a>
    </div>
        </div>
    </div>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $('#question1').click(function() {
            $('#question1').addClass('scale-out');
            $('#cardas1').removeClass('scale-out').addClass('scale-in');
        })
    </script>
    <script>
        $('.radio1').click(function() {
            $('#question2').addClass('scale-out');
            $('#cardas2').removeClass('scale-out').addClass('scale-in');
            $('#question2').removeClass('scale-out').addClass('scale-in');
        })
    </script>
    <script>
        $('.radio2').click(function() {
            $('#question3').addClass('scale-out');
            $('#cardas3').removeClass('scale-out').addClass('scale-in');
            $('#question3').removeClass('scale-out').addClass('scale-in');
        })
    </script>
    <script>
        $('.radio3').click(function() {
            $('#question4').addClass('scale-out');
            $('#cardas4').removeClass('scale-out').addClass('scale-in');
            $('#question4').removeClass('scale-out').addClass('scale-in');
        })
    </script>
    <script>
        $('.radio4').click(function() {
            $('#question5').addClass('scale-out');
            $('#cardas5').removeClass('scale-out').addClass('scale-in');
            $('#question5').removeClass('scale-out').addClass('scale-in');
        })
    </script>
    <script>
        $('.radio5').click(function() {
            $('#cardas6').removeClass('scale-out').addClass('scale-in');
            $('#tryagain').removeClass('scale-out').addClass('scale-in');
        })
    </script>
    <script>
        $('#startquiz').click(function() {
            $('#startquiz').addClass('scale-out');
            $('#question1').removeClass('scale-out').addClass('scale-in');
        })
    </script>

</div>


<?php include "footer.php" ?>
<?php include "header.php" ?>

<nav class="teal lighten-4">
    <div class="container nav-wrapper">
        <div class="col s12 ">
            <div class="w3-animate-left">
                <a href="index.php" class="breadcrumb black-text">Index</a>
                <a href="papildomas1.php" class="breadcrumb black-text">More 2</a>
            </div>

        </div>
    </div>
</nav>


<div id="quizheader">
    <div class="row center-aligned">
        <h1 id="vcsquiz" class="w3-animate-bottom"><b>VCS QUIZ</b></h1>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<div id="tarpastarpas" class="center">
    <a href="#!" id="startquiz" class="w3-animate-left btn waves-effect waves-teal scale-transition">Start Quiz</a>
</div>

<div id="klausimynofonas">
    <div class="container">


        <a href="#!" id="question1" class="btn waves-effect waves-teal scale-transition scale-out">Question 1</a>
        <div class="card cyan lighten-4 scale-transition scale-out" id="cardas1">
            <div class="card-content">
                <ul>
                    <li>
                        <form id="q1" action="#">
                            What is a <b>div</b>?

                            <p>

                                <label>

                                    <input name="yourchoice" type="radio" />

                                    <span>HTML divider</span>

                                </label>

                            </p>

                            <p>

                                <label>

                                    <input name="yourchoice" type="radio" />

                                    <span>Stack memory usage number</span>

                                </label>

                            </p>

                            <p>

                                <label>

                                    <input name="yourchoice" type="radio" />

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

                                    <input name="yourchoice" type="radio" />

                                    <span>Jennie</span>

                                </label>

                            </p>

                            <p>

                                <label>

                                    <input name="yourchoice" type="radio" />

                                    <span>Vanessa</span>

                                </label>

                            </p>

                            <p>

                                <label>

                                    <input name="yourchoice" type="radio" />

                                    <span>Alice</span>

                                </label>

                            </p>

                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <a href="#!" id="question3" class="btn waves-effect waves-teal scale-transition scale-out">Question 3</a>
        <div class="card cyan lighten-4 scale-transition scale-out" id="cardas3">
            <div class="card-content">
                <ul>
                    <li>
                        <form id="q3" action="#">
                            What is <b>life</b> ? <br><br>
                            <p>

                                <label>

                                    <input name="yourchoice" type="radio" />

                                    <span>Life is life</span>

                                </label>

                            </p>

                            <p>

                                <label>

                                    <input name="yourchoice" type="radio" />

                                    <span>String a = "life";</span>

                                </label>

                            </p>

                            <p>

                                <label>

                                    <input name="yourchoice" type="radio" />

                                    <span>life in <b>Bold</b> text</span>

                                </label>

                            </p>

                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <a href="#!" id="question4" class="btn waves-effect waves-teal scale-transition scale-out">Question 4</a>
        <div class="card cyan lighten-4 scale-transition scale-out" id="cardas4">
            <div class="card-content">
                <ul>
                    <li>
                        <form id="q4" action="#">
                            What's your <b>favourite</b> ? <br><br>

                            <p>

                                <label>

                                    <input name="yourchoice" type="radio" />

                                    <span>Dog</span>

                                </label>

                            </p>

                            <p>

                                <label>

                                    <input name="yourchoice" type="radio" />

                                    <span>Ice Cream</span>

                                </label>

                            </p>

                            <p>

                                <label>

                                    <input name="yourchoice" type="radio" />

                                    <span>Football</span>

                                </label>

                            </p>

                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <a href="#!" id="question5" class="btn waves-effect waves-teal scale-transition scale-out">Question 5</a>
        <div class="card cyan lighten-4 scale-transition scale-out" id="cardas5">
            <div class="card-content">
                <ul>
                    <li>
                        <form id="q5" action="#">
                            <b>Yes</b> ? <br><br>

                            <p>

                                <label>

                                    <input name="yourchoice" type="radio" />

                                    <span>Yes</span>

                                </label>

                            </p>

                            <p>

                                <label>

                                    <input name="yourchoice" type="radio" />

                                    <span>No</span>

                                </label>

                            </p>

                            <p>

                                <label>

                                    <input name="yourchoice" type="radio" />

                                    <span>I Don't know</span>

                                </label>

                            </p>

                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script>
            $('#question1').click(function() {
                $('#question1').addClass('scale-out');
                $('#cardas1').removeClass('scale-out').addClass('scale-in');
                $('#question2').removeClass('scale-out').addClass('scale-in');
            })
        </script>
        <script>
            $('#question2').click(function() {
                $('#question2').addClass('scale-out');
                $('#cardas2').removeClass('scale-out').addClass('scale-in');
                $('#question3').removeClass('scale-out').addClass('scale-in');
            })
        </script>
        <script>
            $('#question3').click(function() {
                $('#question3').addClass('scale-out');
                $('#cardas3').removeClass('scale-out').addClass('scale-in');
                $('#question4').removeClass('scale-out').addClass('scale-in');
            })
        </script>
        <script>
            $('#question4').click(function() {
                $('#question4').addClass('scale-out');
                $('#cardas4').removeClass('scale-out').addClass('scale-in');
                $('#question5').removeClass('scale-out').addClass('scale-in');
            })
        </script>
        <script>
            $('#question5').click(function() {
                $('#question5').addClass('scale-out');
                $('#cardas5').removeClass('scale-out').addClass('scale-in');
            })
        </script>
        <script>
            $('#startquiz').click(function() {
                $('#startquiz').addClass('scale-out');
                $('#question1').removeClass('scale-out').addClass('scale-in');
            })
        </script>

    </div>
</div>



<?php include "footer.php" ?>
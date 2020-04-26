<?php include "header.php" ?>


<h1 class="ml3 center">VCS Quiz</h1>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <br><br><br><br><br><br>
<div class="container">
    
    <div class="center">
    <a href="#!" id="startquiz" class="btn waves-effect waves-teal scale-transition">Start Quiz</a>
    </div>
    <a href="#!" id="question1" class="btn waves-effect waves-teal scale-transition scale-out">Question 1</a>
    <div class="card cyan lighten-4 scale-transition scale-out" id="cardas1">
        <div class="card-content">
            <ul>
                <li>
                    <form id="q1" action="#">

                        <p>
                            this is a question <br><br>
                            <label>

                                <input name="yourchoice" type="radio" checked />

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

                                <span>I Don't Know</span>

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

                        <p>

                            <label>

                                <input name="yourchoice" type="radio" checked />

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

                                <span>I Don't Know</span>

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

                        <p>

                            <label>

                                <input name="yourchoice" type="radio" checked />

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

                                <span>I Don't Know</span>

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

                        <p>

                            <label>

                                <input name="yourchoice" type="radio" checked />

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

                                <span>I Don't Know</span>

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

                        <p>

                            <label>

                                <input name="yourchoice" type="radio" checked />

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

                                <span>I Don't Know</span>

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


<?php include "footer.php" ?>
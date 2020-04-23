<?php include "header.php" ?>
<link rel="stylesheet" href="styles/style.css">

<nav class="teal lighten-4">
  <div class="nav-wrapper">
    <div class="col s12 ">
      <a href="index.php" class="breadcrumb black-text">Index</a>
      <a href="visosnaujienos.php" class="breadcrumb black-text">News</a>
      <a href="aboutus.php" class="breadcrumb black-text">About us</a>
    </div>
  </div>
</nav>

<!-- About us puslapio tabai -->

<h1>About us</h1>

<ul class="tabs">
    <li class="tab col s3"><a class="active" href="#about_tab_1">Vision</a></li>
    <li class="tab col s3"><a href="#about_tab_2">Career</a></li>
    <li class="tab col s3"><a href="#about_tab_3">Contacts</a></li>
</ul>
<div id="about_tab_1" class="col s12">
    <div class="container">
        <div class="card">
            <div class="card-content">
                <h4>Our vision:</h4>
                <br><br>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea doloremque ducimus nemo enim quam veniam, quaerat, quod eveniet fugiat ullam explicabo ipsum. Ullam ab asperiores voluptatem voluptates ut sunt nobis?</p>
                <br><br>
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">play_circle_outline</i>Video presentation</div>

                        <div class="collapsible-body"><span>
                                <div class="video-container">
                                    <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </span></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="about_tab_2" class="col s12">
    <div class="container">
        <div class="card">
            <div class="card-content">
                <h4>Career</h4>
                <br><br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora sit deleniti deserunt eius assumenda consequuntur suscipit, iure dolores voluptatibus necessitatibus autem sint sequi eum asperiores? Eum ut odit voluptate id?</p>
                <br><br>
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">account_box</i>Sign Up</div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="about_tab_3" class="col s12">
    <div class="container">
        <div class="card">
            <div class="card-content">
                <h3>Contacts</h3>
                <br><br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio aperiam molestiae culpa a numquam iusto, mollitia ducimus voluptatem recusandae odio, in ut atque. Quisquam minima, alias sapiente consectetur error saepe!</p>
                <br><br>
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">location_on</i>Location</div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php" ?>
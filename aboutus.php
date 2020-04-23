<?php include "header.php" ?>


<nav class="teal lighten-4">
    <div class="container nav-wrapper">
        <div class="col s12 ">
            <a href="index.php" class="breadcrumb black-text">Index</a>
            <a href="aboutus.php" class="breadcrumb black-text">About us</a>
        </div>
</nav>

<!-- About us puslapio tabai -->

<div id="aboutusheader">
    <h1 id="aboutush1">About us</h1>
</div>
<div class="container">
    <div id="aboutustabsai">
        <ul class="tabs amber lighten-4">
            <li class="tab col s3"><a class="active" href="#about_tab_1">Vision</a></li>
            <li class="tab col s3"><a href="#about_tab_2">Career</a></li>
            <li class="tab col s3"><a href="#about_tab_3">Contacts</a></li>
        </ul>
    </div>
</div>

<div id="about_tab_1" class="col s12 light-blue lighten-5">
    <div class="container">
        <div class="card teal lighten-4">
            <div class="card-content">
                <h4 class="center"> <i class="material-icons">airplanemode_active</i> Our vision:</h4>
                <br><br>
                <p class="center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea doloremque ducimus nemo enim quam veniam, quaerat, quod eveniet fugiat ullam explicabo ipsum. Ullam ab asperiores voluptatem voluptates ut sunt nobis?</p>
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
<div id="about_tab_2" class="col s12 light-blue lighten-5">
    <div class="container">
        <div class="card cyan lighten-4">
            <div class="card-content">
                <h4 class="center"> <i class="material-icons">device_hub</i> Career</h4>
                <br><br>
                <p class="center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora sit deleniti deserunt eius assumenda consequuntur suscipit, iure dolores voluptatibus necessitatibus autem sint sequi eum asperiores? Eum ut odit voluptate id?</p>
                <br><br>
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">account_box</i>Sign Up</div>
                        <div class="collapsible-body"><span>
                                <form action="">
                                    <div class="row">
                                        <form class="col s12">
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input id="icon_prefix" type="text" class="validate">
                                                    <label for="icon_prefix">First Name</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <input id="last_name" type="text" class="validate">
                                                    <label for="last_name">Last Name</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">email</i>
                                                    <input id="icon_prefix" type="email" class="validate">
                                                    <label for="icon_prefix">E-mail</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">home</i>
                                                    <input id="icon_prefix" type="text" class="validate">
                                                    <label for="icon_prefix">Address</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <i class="material-icons prefix">location_city</i>
                                                    <input id="icon_prefix" type="text" class="validate">
                                                    <label for="icon_prefix">City</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <input id="country" type="text" class="validate">
                                                    <label for="country">Country</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <i class="material-icons prefix">phone</i>
                                                    <input id="icon_prefix" type="tel" class="validate">
                                                    <label for="icon_prefix">Phone</label>
                                                </div>
                                                <div class="col s6" id="about_us_button">
                                                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                                        <i class="material-icons right">send</i>
                                                    </button>
                                                </div>
                                        </form>
                            </span></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="about_tab_3" class="col s12 light-blue lighten-5">
    <div class="container">
        <div class="card lime lighten-4">
            <div class="card-content">
                <h3 class="center"> <i class="material-icons">contacts</i> Contacts</h3>
                <br><br>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio aperiam molestiae culpa a numquam iusto, mollitia ducimus voluptatem recusandae odio, in ut atque. Quisquam minima, alias sapiente consectetur error saepe!</p>
                <br><br>
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">location_on</i>Location</div>
                        <div class="collapsible-body"><iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4609.448661428507!2d25.26933366230114!3d54.71447301333776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd914dfbecfddb%3A0x1245503b558d793c!2sOzas!5e0!3m2!1sen!2slt!4v1587658067950!5m2!1sen!2slt" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php" ?>
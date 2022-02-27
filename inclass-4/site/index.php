
<?php  
    //require session start function
    require_once "includes/session_include.php";
    //Adding Page title to be stored in the $_SESSION variable
    $_SESSION["page_title"]="Home Page";
    $_SESSION["current_page"]="home";

    //including header
    include "includes/header.php";
 ?>

<div class="white-text-container background-image-container" style="background-image: url('./assets/images/img-home.jpg')">
    <div class="opacity"></div>
    <div class="container">
        <div class="row">
           
            <div class="col-md-6">
                <h1>Posuere lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum dolor sit
                    amet consectetur adipiscing elit. </p>
                 <a href="./about.html" title="" class="btn btn-lg btn-primary">About Us</a>
            </div>

        </div>
    </div>
</div>

<div class="section-container border-section-container">
    <div class="container">
            <div class="row">
                <div class="col-md-12 section-container-spacer">
                    <div class="text-center">
                        <h2>Vivamus laoreet</h2>
                        <p> Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing.<br> Porta non
                            pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="fa-container">
                        <i class="fa fa-comment-o fa-3x" aria-hidden="true"></i>
                    </div>
                    <div class="text-center">
                        <h3>Consectetur</h3>
                    </div>
                    <div>
                        <p>Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Porta
                            non pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. Iaculis urna id volutpat lacus.
                            Turpis egestas pretium aenean pharetra magna ac.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fa-container">
                        <i class="fa fa-heart-o fa-3x" aria-hidden="true"></i>
                    </div>
                    <div class="text-center">
                        <h3>Malesuada</h3>
                    </div>
                    <div>
                        <p>Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Porta
                            non pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. Iaculis urna id volutpat lacus.
                            Turpis egestas pretium aenean pharetra magna ac.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fa-container">
                        <i class="fa fa-bell-o fa-3x" aria-hidden="true"></i>
                    </div>
                    <div class="text-center">
                        <h3>Phasellus</h3>
                    </div>
                    <div>
                        <p>Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Porta
                            non pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. Iaculis urna id volutpat lacus.
                            Turpis egestas pretium aenean pharetra magna ac. 
                        </p>
                    </div>
                </div>

            </div>
    </div>
</div>

<div class="section-container background-color-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <h2>Vivamus laoreet</h2>
                    <p> Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Porta non
                        pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. Iaculis urna id volutpat lacus. Turpis
                        egestas pretium aenean pharetra magna ac. Id cursus metus aliquam eleifend mi. </p>
                </div>
            </div>
        </div>
     </div>
 </div>

<?php  
    //including footer
    include "includes/footer.php";
 ?>
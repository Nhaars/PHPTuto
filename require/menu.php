<link rel="stylesheet" href="css/app.css">
<div class="multilevel-offcanvas off-canvas position-right" id="offCanvasRight" data-off-canvas>




  <ul class="vertical menu" data-accordion-menu>
    <li><a href="#">PHP</a>
      <ul class="menu vertical nested">
        <li><a href="contacte.php">Contact</a></li>
        <li><a href="calendrier.php">Calendrier</a></li>
        <li><a href="bacasable.php">Bac à sable</a></li>

       </ul>
    </li>



  <ul class="menu simple social-links">
    <li><a href="https://www.facebook.com/Maxistemic" target="_blank">Facebook<i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
    <li><a href="#" target="_blank">Twitter<i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
    <li><a href="#" target="_blank">Google+<i class="fa fa-github-square" aria-hidden="true"></i></a></li>
    <li><a href="#" target="_blank">Pinterest<i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
    <li><a href="http://127.0.0.1/PHPTuto/backoffice" target="_blank">Administration<i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
  </ul>
</div>



<div class="off-canvas-content" data-off-canvas-content>
  <div class="nav-bar">
      <div class="nav-bar-left">

        <h3><small><a href="http://127.0.0.1/PHPTuto/">//TUTOProject!</a></small></h3>
      </div>

  <div class="large-2 columns">

      <button class="button" type="button" data-toggle="example-dropdown">Se connecter</button>
      <div class="dropdown-pane" id="example-dropdown" data-dropdown data-auto-focus="true">
        Entrez vos logins
        <form>
          <div class="row">
            <div class="medium-6 columns">
              <label>Pseudo
                <input type="text" placeholder="Kirk, James T.">
              </label>
            </div>
            <div class="medium-6 columns">
              <label>Mot de passe
                <input type="password" placeholder="Captain">
              </label>
            </div>
          </div>
        </form>
      </div>



      <button class="button" type="button" ><a href="http://127.0.0.1/PHPTuto/">S'enregistrer</a></button>





</div>


      <div class="nav-bar-right">

        <ul class="menu">

          <li>
          <li>
            <button class="offcanvas-trigger" type="button" data-open="offCanvasRight">
              <span class="offcanvas-trigger-text hide-for-small-only">Menu</span>
              <div class="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </div>
            </button>
          </li>
        </ul>
    </div>
  </div>

 </div>

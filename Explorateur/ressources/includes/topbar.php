<nav class="navbar navbar-expand-xl navbar-dark bg-dark navBarElements z-index navBarFixed" aria-label="Seventh navbar example" id="simpleNav">
  <div class="container">
    <a class="navbar-brand logo" href="../home/index.php"><img src="/ressources/images/VirgoFlatWhite.png" alt="Virgo" width="150" style="margin-top: 10px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleXxl" aria-controls="navbarsExampleXxl" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleXxl">
      <ul class="navbar-nav me-auto mb-2 mb-xl-0">
        <li class="nav-item dropdown">
          <a class="nav-link textWhiteColor navBarElementsChanges" href="#" id="dropdownXxl" data-bs-toggle="dropdown" aria-expanded="true">Profile</a>
          <ul class="dropdown-menu dropDownOptions" aria-labelledby="dropdownXxl">
            <li><a class="dropdown-item dropDownOptionsMenu navBarElementsChanges" href="#">Options</a></li>
            <li><a class="dropdown-item dropDownOptionsMenu navBarElementsChanges" href="#">Déconnexion</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link Nav-Btn-Hover textWhiteColor navBarElementsChanges" href="#">Classement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link Nav-Btn-Hover textWhiteColor navBarElementsChanges" href="#">Parrainage</a>
        </li>
        <?php if ($_SESSION["admin"] == true) { ?>
          <li class="nav-item">
            <a class="nav-link Nav-Btn-Hover textWhiteColor navBarElementsChanges" href="#">Webpanel</a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>

<button onclick="topFunction()" id="myBtn" title="Go top" class="topBtn"><i class="fas fa-arrow-up"></i></button>

<script src="../includes/navhide.js"></script>
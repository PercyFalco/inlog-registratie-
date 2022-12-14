<?php
$active = isset($_GET["content"]) ? $_GET["content"] : ""; ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./index.php?content=home">Vegetable Juice</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <?php if (isset($_SESSION["id"])) {
        switch ($_SESSION["userrole"]) {
            case "admin":
                echo '<li class="nav-item ';
                echo in_array($active, ["r-home", ""]) ? "active" : "";
                echo '">
                  <a class="nav-link" href="./index.php?content=r-home";>Home <span class="sr-only"></span></a>
                </li>';
                break;
            case "root":
                echo '<li class="nav-item ';
                echo in_array($active, ["a-home", ""]) ? "active" : "";
                echo '">
          <a class="nav-link" href="./index.php?content=a-home";>Home <span class="sr-only"></span></a>
        </li>';
                break;
            case "customer":
                echo '<li class="nav-item ';
                echo in_array($active, ["c-customerpage", ""]) ? "active" : "";
                echo '">
          <a class="nav-link" href="./index.php?content=c-customerpage";>Home <span class="sr-only"></span></a>
        </li>';
                break;
            case "moderator":
                echo '<li class="nav-item ';
                echo in_array($active, ["m-home", ""]) ? "active" : "";
                echo '">
          <a class="nav-link" href="./index.php?content=m-home";>Home <span class="sr-only"></span></a>
        </li>';
                break;
            default:
                echo '<li class="nav-item ';
                echo in_array($active, ["home", ""]) ? "active" : "";
                echo '">
          <a class="nav-link" href="./index.php?content=home";>Home <span class="sr-only"></span></a>
        </li>';
                break;
        }
    } else {
        echo '<li class="nav-item ';
        echo in_array($active, ["home", ""]) ? "active" : "";
        echo '">
      <a class="nav-link" href="./index.php?content=home";>Home <span class="sr-only"></span></a>
    </li>';
    } ?>
      <li class="nav-item  <?php echo $active == "juices" ? "active" : ""; ?>">
        <a class="nav-link" href="./index.php?content=juices">Juices</a>
      </li>
      <li class="nav-item  <?php echo $active == "smoothies"
          ? "active"
          : ""; ?>">
        <a class="nav-link" href="./index.php?content=smoothies">Smoothies</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" <?php echo in_array($active, [
            "sleep",
            "nutrition",
            "exercise",
        ])
            ? "active"
            : ""; ?> href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Health education
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item <?php echo $active == "sleep"
              ? "active"
              : ""; ?> " href="./index.php?content=sleep">users</a>
          <a class="dropdown-item <?php echo $active == "nutrition"
              ? "active"
              : ""; ?> "  href="./index.php?content=nutrition">nutrition</a>
          <a class="dropdown-item <?php echo $active == "exercise"
              ? "active"
              : ""; ?> " href="./index.php?content=exercise">exercise</a>
        </ul>
        </li>
        <div>
      <ul class="navbar-nav ml-auto">
      <?php if (isset($_SESSION["id"])) {
          switch ($_SESSION["userrole"]) {
              case "admin":
                  echo '<li class="nav-item dropdown"><a class="nav-link dropdown-toggle  ';
                  echo in_array($active, ["a-users", "a-reset_password"])
                      ? "active"
                      : "";
                  echo '" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        admin workbench
                      </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item ';
                  echo $active == "a-users" ? "active" : "";
                  echo '" href="./index.php?content=a-users">users</a>
                      <a class="dropdown-item ';
                  echo $active == "a-reset_password" ? "active" : "";
                  echo '"  href="./index.php?content=a-reset_password">reset password</a>
                    </div>
                  </li>';
                  break;
              case "root":
                  echo '<li class="nav-item ';
                  echo $active == "rootpage" ? "active" : "";
                  echo '">
                    <a class="nav-link" href="./index.php?content=r-rootpage">rootpage</a>
                  </li>';
                  break;
              case "moderator":
                  echo '<li class="nav-item ';
                  echo $active == "moderatorpage" ? "active" : "";
                  echo '">
                    <a class="nav-link" href="./index.php?content=m-moderatorpage">moderatorpage</a>
                  </li>';
                  break;
              case "customer":
                  echo '<li class="nav-item ';
                  echo $active == "c-customerpage" ? "active" : "";
                  echo '">
                    <a class="nav-link" href="./index.php?content=c-customerpage">customerpage</a>
                  </li>';

                  break;
              default:
                  break;
          }
          echo '<li class="nav-item ';
          echo $active == "logout" ? "active" : "";
          echo '">
              <a class="nav-link" href="./index.php?content=logout">Uitloggen</a>
              </li>';
      } else {
          echo '<li class="nav-item ';
          echo $active == "register" ? "active" : "";
          echo '">
              <a class="nav-link" href="./index.php?content=register">Register</a>
              </li>
              <li class="nav-item ';
          echo $active == "login" ? "active" : "";
          echo '">
              <a class="nav-link" href="./index.php?content=login">Inloggen</a>
              </li>';
      } ?>
    </ul>
  </div>
</nav>


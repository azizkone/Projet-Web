<?php
/**
 * Permet de lancer tout le temps une instance
 *initialiser l'objet
 */
class Session
{

  public function __construct()
  {
    session_start();
  }
  public function setFlash($MessageSucess)
  {
    $_SESSION['flash']=$MessageSucess;
  }
  public function flash()
  {
  if (isset($_SESSION['flash'])) {
  ?>
  <div id="alert" class="alert alert-success">
    <a href="../index.php"class="close">x
    </a>
  <?php echo $_SESSION['flash']; ?>
  </div>
  <script src="js\jquery.js"></script>
  <script type="text/javascript" src="js/notification.js"></script>
  <?php
    unset($_SESSION['flash']);
  }
  }
}

 ?>

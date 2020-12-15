<div class="dropdown">
  <button type="button" class="btn dropdown-toggle btnEntrar" data-toggle="dropdown">
    <b>&#128104; <?php echo $_SESSION["nome"];?></b>
  </button>
  <div class="dropdown-menu dropdown-menu-right">
    <a href="exame.php" class="dropdown-item">Exames</a>
    <a href="materia.php" class="dropdown-item">Temas da Matemática</a>
    
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Estatísticas do Perfil</a>
    <a class="dropdown-item" href="logout.php">Logout</a>
  </div>
</div>


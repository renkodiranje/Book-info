<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Search Book</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php
        $links = ["forum"];
        ?>
        <?php for($i=0; $i < count($links); $i++):?>
        <li class="nav-item">
          <a class="nav-link" aria-current="page"
           href="<?php if($links[$i] == "forum")
           {
            echo "forum.php";
            }
            ?>">
            
            <?php echo $links[$i]?>
          </a>
        </li>
       <?php endfor; ?>
      </ul>
    </div>
  </div>
</nav>
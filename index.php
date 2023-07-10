<?php require 'db.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">bookstore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php
        $links = ["Home", "forum", "contact"];
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
<div class="container-fluid">
    <div class="row">
        <div class="col-8 offset-2">
            <h3 class="display-4">Search Book</h3>
            <form action="bookinfo.php" method="get">
                <div class="input-group">
                    <input type="text" name="search" placeholder="<?php
                     if(isset($_GET['error'])){echo "No mache found";}
                     else{echo "serach";} ?>" class="form-control">
                    <div class="input-group-append">
                        <button type="submit" name="subbtn" class="btn btn-info" >Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="coll-8">
            <div class="row">
              <?php foreach($db as $book): ?>
                <div class="col-3">
                  <a href="bookInfo.php?id=<?php echo $book['id']; ?>" class="text-decoration-none">
                    <div class="card text-center mt-4">
                      <div class="card-header"><?php echo $book['name']; ?></div>
                      <div class="card-body"><?php echo $book['author']; ?></div>
                      <div class="card-footer">
                        <button class="btn btn-<?php if($book['native']){
                          echo 'success';} else{echo 'primary';}?> btn-sm"><?php if($book['native']){
                          echo 'domaci';} else{echo 'strani';}?></button>
                      </div>
                    </div>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
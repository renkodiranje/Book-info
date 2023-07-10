<?php
require 'db.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $books = array_filter($db,function($el)
    {
        global $id;
        return $el['id'] == $id;
    });
}elseif($_GET['search']){
$search = $_GET['search'];
$books = array_filter($db,function($el)
{
    global $search;
    return $el['name'] == $search || $el['author'] == $search;
});
if(count($books)==0) {
    header("location:index.php?error=1");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Booksearch</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <ul class="navbar-nav">
        <?php
        $links = ["Home", "about", "contact"];
        ?>
        <?php for($i=0; $i < count($links); $i++):?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><?php echo $links[$i]?></a>
        </li>
       <?php endfor; ?>
      </ul>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron text-center bg-secondary-subtle m-4 p-5 text-uppercase">
    <h2>
        <?php foreach($books as $book):?>
        <span><?php echo $book['name']?></span>
        <?php endforeach; ?>
    </h2>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <?php foreach($books as $book):?>
                    <div class="col-6 border border-light border-4 p-4">
                        <h3 class="display-4">
                            <?php echo $book['author']?>
                        </h3>
                        <p class="mt-4 p-4 bg-info-subtle border border-light border-1">
                            <?php echo $book['about']?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
</div>
</body>
</html>
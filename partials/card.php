<?php if($title=="Search"):?>
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
<?php else:?>
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
<?php endif ?>
<?php if($title=="Search"):?>
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
    <?php else:?>

    <?php endif ?>    
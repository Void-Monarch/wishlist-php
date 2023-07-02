<section class="tile tile-2" id=all-here>

        <div class="section-cata-div">
                <h2 class="section-all-shows">
                    <?php if(isset($_REQUEST['search'])){ echo "Filter ('$search')"; }else{ echo "All Shows"; } ?>
                </h2>
        </div>
    
    <div class="row">
        <?php include "../php/tile.php"; ?>
    </div>

</section>


<?php include '../php/popup_admin.php'; ?>
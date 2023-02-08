<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">
        <?php if ($liste==null) {?>
            
        <?php }else{ ?>
        <?php for ($l=0; $l < count($liste); $l++) { ?>

            <div class="single-products-catagory clearfix">
                <a href="<?php echo site_url("Objet/detailsHistorique");?>/<?php echo $liste[$l]['idObjet']; ?>">
                    <img src="<?php echo img_loader($liste[$l]['couverture']); ?>" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p><?php echo $liste[$l]['prix']; ?> Ar</p>
                        <h4><?php echo $liste[$l]['titre']; ?></h4>
                    </div>
                </a>
            </div>

        <?php }} ?>

    </div>
</div>

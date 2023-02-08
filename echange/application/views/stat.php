
        <div class=" mt-4">
    <h1 style="padding-bottom: 10px;">Statistiques</h1>
    
</div>

<div class="row">
        <div class="col-xl-3 col-lg-3">

            <div class="card shadow mb-4">
                <div class="card-header py-3 text-center">
 
                    <h6 class="m-0 font-weight-bold">Nombre d'utilisateur</h6>
                    
                </div>
                <div class="card-body text-center">
                <?php for ($l=0; $l < count($somUser); $l++) { ?>
                    <?php if ($somUser==null || $somUser==0) {?>
                        <p class="head">0</p><p>Utilisateur</p>
                    <?php }else{?>
                        <p class="head"><?php echo $somUser[$l]['user']; ?></p><p>Utilisateurs</p>
                    <?php }} ?>
                                                        
                </div>
            </div>

        </div>

        <div class="col-xl-3 col-lg-3">

            <div class="card shadow mb-4">
                <div class="card-header py-3 text-center">
 
                    <h6 class="m-0 font-weight-bold">Nombre d'échanges</h6>
                    
                </div>
                <div class="card-body text-center">
                
                    <?php for ($l=0; $l < count($somEchange); $l++) { ?>
                    <?php if ($somEchange==null || $somEchange==0) {?>
                        <p class="head">0</p><p>Echange</p>
                    <?php }else{?>
                        <p class="head"><?php echo $somEchange[$l]['nbr']; ?></p><p>Echanges</p>
                    <?php }} ?>
               
                   
                                    
                </div>
            </div>

        </div>
 </div>
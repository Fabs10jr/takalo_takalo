<div class="single-product-area  clearfix" style="margin-top: 50px;">
            <div class="container-fluid">
                

                <div class="cart-title">
                    <h3 style="padding-bottom: 10px;">Liste de mes demandes</h3>
                </div>

            <table class="table">
            <thead class="thead-light">
                <tr>
                
                    <th>Titre</th>
                    <th>Proprietaire</th>
                    <th>Couverture</th>
                    <th>Catégorie</th>
                    <th>Prix</th>
                    <th>Date</th>
                               
                </tr>
            </thead>
                               
            <tbody>
                <?php for ($i=0; $i < count($liste); $i++) { ?>    
                <tr>
                                  
                <td><?php echo $liste[$i]['titre']; ?></td>
                <td><?php echo $liste[$i]['login']; ?></td>
                <td><img src="<?php echo img_loader($liste[$i]['couverture']);?>" style="width: 150px; height: 100px;"></td>
                <td><?php echo $liste[$i]['categorie']; ?></td>
                <td><?php echo $liste[$i]['prix']; ?> Ar</td>
                <td><?php echo $liste[$i]['datyDemande']; ?></td>
                
                </tr>
                <?php } ?>
                                   
                                    
            </tbody>
        </table>

            </div>
        </div>
    </div>




        



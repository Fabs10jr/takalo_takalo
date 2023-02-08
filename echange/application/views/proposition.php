<div class="single-product-area  clearfix">
            <div class="container-fluid">
                

                <div class="cart-title">
                    <h3 style="padding-bottom: 10px;">Liste des propositions</h3>
                </div>

            <table class="table">
            <thead class="thead-light">
                <tr>
                
                    <th>Titre</th>
                    <th>Demandeur</th>
                    <th>Couverture</th>
                    <th>Catégorie</th>
                    <th>Prix</th>
                    <th>Date</th>
                    <th>Actions</th>               
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
                <td style="width: 250px;">
                    <a href="<?php echo site_url("Proposition/validerEchange");?>/<?php echo $liste[$i]['idEchange']; ?>/<?php echo $liste[$i]['demandeur']; ?>/<?php echo $liste[$i]['objet1']; ?>/<?php echo $liste[$i]['proprietaire']; ?>/<?php echo $liste[$i]['objet2']; ?>"><button class="btn btn-warning"><i class="fa fa-check"></i> Accepter</button></a>
                    <a href="<?php echo site_url("Proposition/refuserEchange");?>/<?php echo $liste[$i]['idEchange']; ?>"><button class="btn btn-danger"><i class="fa fa-edit"></i> Refuser</button></a>
                </td>
                </tr>
                <?php } ?>
                                   
                                    
            </tbody>
        </table>

            </div>
        </div>
    </div>




        



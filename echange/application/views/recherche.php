<div class="single-product-area  clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h3 style="padding-bottom: 10px;">Ajout objet</h3>
                            </div>

                            <form enctype="multipart/form-data" action="<?php echo site_url("Objet/rechercher")?>" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6 ">
                                        <input type="text" class="form-control" placeholder="Titre de l'objet" required name="titre">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="w-100" name="catego" required>
                                           
                                        <?php for ($i=0; $i < count($categorie); $i++) { ?>    
                                            <option value="<?php echo $categorie[$i]['idCategorie'];?>"><?php echo $categorie[$i]['categorie'];?></option>
                                        <?php }?>
                                        </select>
                                    </div>
                                   
                                     
                                </div>
                                
                                
                                
                                <div class="row">
                                   
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" class="btn btn-warning col-md-12 mb-3">Valider</button>
                                    </div>
                                     
                                </div>
                            </form>

            
                        </div>


                    </div>
                    
                </div>

                <div class="cart-title">
                    <h3 style="padding-bottom: 10px;">Résultats recherche:</h3>
                </div>

            <table class="table">
            <thead class="thead-light">
                <tr>
                
                    <th>Titre</th>
                    <th>Photo de couverture</th>
                    <th>Description</th>
                    <th>Catégorie</th>
                    <th>Prix</th>
                                 
                </tr>
            </thead>
                               
            <tbody>
                <?php for ($i=0; $i < count($liste); $i++) { ?>    
                <tr>
                                  
                <td><?php echo $liste[$i]['titre']; ?></td>
                <td><img src="<?php echo img_loader($liste[$i]['couverture']);?>" style="width: 150px; height: 100px;"></td>                   
                <td><?php echo $liste[$i]['description']; ?></td>
                <td><?php echo $liste[$i]['categorie']; ?></td>
                <td><?php echo $liste[$i]['prix']; ?> Ar</td>
                
                </tr>
                <?php } ?>
                                   
                                    
            </tbody>
        </table>

            </div>
        </div>
    </div>




        



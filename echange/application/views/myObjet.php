<div class="single-product-area  clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h3 style="padding-bottom: 10px;">Ajout objet</h3>
                            </div>

                            <form enctype="multipart/form-data" action="<?php echo site_url("Objet/insertObjet")?>" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6 ">
                                        <input type="text" class="form-control" placeholder="Titre de l'objet" required name="titre">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input class="form-control focus:border-purple-400 focus:shadow-outline-purple" type="file" id="formFile" name="choosefile" size='100'>
                                    </div>
                                   
                                     
                                </div>
                                
                                
                                <div class="row">
                                    
                                    <div class="col-md-12 mb-3">
                                        <textarea name="descri" class="form-control w-100" id="comment" cols="30" rows="10" placeholder="Description de l'objet" style="height: 100px;"></textarea>
                                    </div>
                                   
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <select class="w-100" name="catego" required>
                                            <option selected>Choisir catégorie</option>
                                        <?php for ($i=0; $i < count($categorie); $i++) { ?>    
                                            <option value="<?php echo $categorie[$i]['idCategorie'];?>"><?php echo $categorie[$i]['categorie'];?></option>
                                        <?php }?>
                                        </select>
                                    </div>
                                   <div class="form-group col-md-6">
                                        <input type="number" class="form-control" placeholder="Prix de l'objet" required name="prix" min="1" >
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
                    <h3 style="padding-bottom: 10px;">Liste de mes objets</h3>
                </div>

            <table class="table">
            <thead class="thead-light">
                <tr>
                
                    <th>Titre</th>
                    <th>Photo de couverture</th>
                    <th>Description</th>
                    <th>Catégorie</th>
                    <th>Prix</th>
                    <th>Actions</th>               
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
                <td><a href="<?php echo site_url("Objet/pageModifierObjet");?>/<?php echo $liste[$i]['idObjet']; ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i> Modifier</button></a></td>
                </tr>
                <?php } ?>
                                   
                                    
            </tbody>
        </table>

            </div>
        </div>
    </div>




        



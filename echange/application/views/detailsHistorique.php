<div class="single-product-area section-padding-100 clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="single_product_thumb">
                    <div id="product_details_slider" class="carousel slide" > <!-- data-ride="carousel" -->
                        
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="gallery_img">
                                    <img src="<?php echo img_loader($liste[0]['couverture']); ?>" alt="First slide" style="width: 600px; height: 400px;">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="gallery_img" href="img/product-img/pro-big-2.jpg">
                                    <img class="d-block w-100" src="img/product-img/pro-big-2.jpg" alt="Second slide">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="gallery_img" href="img/product-img/pro-big-3.jpg">
                                    <img class="d-block w-100" src="img/product-img/pro-big-3.jpg" alt="Third slide">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="gallery_img" href="img/product-img/pro-big-4.jpg">
                                    <img class="d-block w-100" src="img/product-img/pro-big-4.jpg" alt="Fourth slide">
                                </a>
                            </div>
                        </div>
                       
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-5">
                <div class="single_product_desc">
                    <!-- Product Meta Data -->
                    <div class="product-meta-data">
                        <div class="line"></div>
                        <p class="product-price"><?php echo $liste[0]['prix']; ?> Ar</p>
                        <a href="product-details.html">
                            <h6><?php echo $liste[0]['titre']; ?></h6>
                        </a>
                        
                        
                    </div>

                    <div class="short_overview my-5">
                        <p><?php echo $liste[0]['description']; ?></p>
                    </div>


                    

                   <!-- <a href="<?php echo site_url("Proposition/echanger"); ?>/<?php echo $liste[0]['idObjet']; ?>/<?php echo $liste[0]['idUtilisateur']; ?>"><button class="btn amado-btn">Demande d'échange</button></a> -->
                   

                </div>
            </div>

            <div class="product-meta-data" style="margin-top: -150px;">
                <h4><u>Historique des échanges:</u></h4>
                <table class="table">
            <thead class="thead-light">
                <tr>
                
                    <th>Titre</th>
                    <th>Couverture</th>
                    <th>Proprietaire</th>
                    <th>Demandeur</th>
                    <th>Date d'échange</th>             
                </tr>
            </thead>
                               
            <tbody>
                <?php for ($i=0; $i < count($historique); $i++) { ?>    
                <tr>
                                  
                <td><?php echo $historique[$i]['titre']; ?></td>
                <td><img src="<?php echo img_loader($historique[$i]['couverture']);?>" style="width: 150px; height: 100px;"></td>
                <td><?php echo $historique[$i]['prop']; ?></td>
                <td><?php echo $historique[$i]['dmd']; ?></td>
                <td><?php echo $historique[$i]['datyEchange']; ?></td>
                
                </tr>
                <?php } ?>
                                   
                                    
            </tbody>
        </table>
            </div>
    </div>
</div>
</div>

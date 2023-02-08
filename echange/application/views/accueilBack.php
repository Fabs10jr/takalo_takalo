<div class="text-center mt-4">
	<h1 class="h2">Insertion Catégorie</h1>
	
</div>



<div class="card">
	<div class="card-body">
		<div class="m-sm-4">
			

			<form id="request" class="main_form" method="post" action="<?php echo site_url("Categorie/insertCategorie")?>">								
       
      <div class="mb-3">
	  <label class="form-label">Catégorie</label>
					<input class="form-control form-control-lg" type="text" name="catego" placeholder="Catégorie" />
       </div>
				
				<div class="text-center mt-3">
					<button type="submit" class="btn btn-lg btn-primary">Valider</button>
					
				</div>
			</form>
		</div>
	</div>
</div>

<table class="table">
    <thead class="thead-light">
        <tr>
        
            <th>Id</th>
            <th>Categorie</th>
            <th>Action</th>
               
        </tr>
    </thead>
                       
    <tbody>
        <?php for ($i=0; $i < count($liste); $i++) { ?>    
        <tr>
                          
        <td><?php echo $liste[$i]['idCategorie']; ?></td>
        <td>
        	<form method="post" action="<?php echo site_url("Categorie/updateCategorie")?>">
        		<input type="hidden" name="id" value="<?php echo $liste[$i]['idCategorie']; ?>">
        		<input type="text" name="catego" value="<?php echo $liste[$i]['categorie']; ?>">
        	
        </td>
        
        <td><button type="submit" class="btn btn-warning"><i class="fa fa-edit"></i> Modifier</button></td>
        </form>
        </tr>
        <?php } ?>
                           
                            
    </tbody>
</table>

					
						

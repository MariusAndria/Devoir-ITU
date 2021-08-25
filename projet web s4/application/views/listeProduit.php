
<div class="row">

      <div class="col-lg-3"></div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row">

          <div class="col-md-12">
            <h3>Choisir produit pour acheter</h3>
            <form method="post" action="<?php echo site_url();?>/EntrerAchat/achatProduit">
             <p> <select name="produit">
                    <?php for ($i=0; $i < count($listeProduit) ; $i++) { ?>
                     <option value="<?php echo $listeProduit[$i]['idProduit']; ?>"><?php echo $listeProduit[$i]['nomProduit']; ?></option>                
                    <?php } ?>
                  </select></p>
                <p><input type="number" name="quantite"></p>
                <p><input type="submit" class="btn" value="Valider"></p> 
            </form>
    
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

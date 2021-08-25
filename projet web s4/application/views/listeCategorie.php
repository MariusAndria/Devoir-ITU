<div class="row">

      <div class="col-lg-3"></div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row">

          <div class="col-md-12">
            <h3>Choisir categorie</h3>
            <form method="post" action="<?php echo site_url();?>/ListeProduit/getListeProduit">
              <p><select name="categorieChoisi">
              <?php for ($i=0; $i < count($listeCategorie) ; $i++) { ?>
                     <option value="<?php echo $listeCategorie[$i]['idCategorie']; ?>"><?php echo $listeCategorie[$i]['nomCategorie']; ?></option>                
                    <?php } ?>
              </select></p>
              <p><input type="submit" class="btn" value="Valider"></p> 
            </form>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

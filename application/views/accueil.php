<div class="row">

      <div class="col-lg-3"></div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row">

          <div class="col-md-12">
            <h3>Choisir caisse</h3>
            <form method="post" action="ListeCategorie/getListeCategorie">
              <p><select name="caisse">
              <?php for ($i=0; $i < count($listeCaisse) ; $i++) { ?>
                     <option value="<?php echo $listeCaisse[$i]['idCaisse']; ?>"><?php echo $listeCaisse[$i]['nomCaisse']; ?></option>                
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

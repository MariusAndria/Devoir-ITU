
          <div class="col-md-12">

            <form method="post" action="Valider_Commande">
              <p> <select name="produit">
                    <?php for ($i=0; $i < count($liste_produit) ; $i++) { ?>
                     <option value="<?php echo $liste_produit[$i]['idProduit']; ?>"><?php echo $liste_produit[$i]['nomProduit']; ?></option>                
                    <?php } ?>
                  </select></p>
                <p><input type="number" name="quantite"></p>
                <p><input type="submit" class="btn" value="Valider"></p> 
            </form>
          </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <table class="table">
                          <thead>
                              <tr>
                                  <th><span class="nobr">Produit</span></th>
                                  <th><span class="nobr">Prix Unitaire</span></th>
                                  <th><span class="nobr"> Quantité</span></th>
                                  <th><span class="nobr">Montant</span></th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php for ($i=0; $i < count($liste_achat); $i++) {  ?>
                                <tr>
                                    <td><?php echo $liste_achat[$i]['nomProduit']; ?> </td>
                                    <td><?php echo $liste_achat[$i]['prixUnitaire']; ?> </td>
                                    <td><?php echo $liste_achat[$i]['quantite']; ?> </td>
                                    <td><?php echo $liste_achat[$i]['montant']; ?> </td>
                                </tr>
                              <?php } ?>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total : </td>
                              </tr>
                          </tbody>
                  </table>
            </table>
          </div>
        </div>
      
<div class="m-auto w80 my-4">
      <h1 class="titre text-light">SAISIE CIVILITE</h1>
      <form action="civilite&action=save" method='post' enctype="multipart/form-data">

            <div class="mb-3 my-2 hidden">
                  <div>
                        <label for="id" class="lab30 form-label">ID</label>
                        <input class="form-control w20" type="text" id='id' name="id" value="<?=$id?>" <?=$disabled?>>
                  </div>
            </div>
            <div class="my-2 mb-3 col">
                  <div>
                        <label for="libelle" class="lab30 obligatoire form-label">Libellé</label>
                        <input class="form-control w20" type="text" id='libelle' name="libelle" value="<?=$libelle?>" <?=$disabled?>>
                  </div class='col'>
            </div>

            <div class="div-btn">
                  <a href="civilite" class="btn btn-md btn-success">Retour à la liste</a>
                  <input type="reset" class="btn btn-md btn-danger" value="Annuler" <?=$disabled?>>
                  <input type="submit" class="btn btn-md btn-primary" value="Valider" <?=$disabled?>>
            </div>
      </form>
</div>
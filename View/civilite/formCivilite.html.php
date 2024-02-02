<div class="container-fluid">
      <div class="mx-auto d-block w-50">
            <h1 class="titre text-dark text-center my-4">SAISIE CIVILITE</h1>
            
            <form action="civilite&action=save" method='post' enctype="multipart/form-data">

                  <div class="hidden">
                        <div>
                              <label for="id" class="lab30 form-label">ID</label>
                              <input class="form-control w20" type="text" id='id' name="id" value="<?= $id ?>" <?= $disabled ?>>
                        </div>
                  </div>
                  <div class="col-auto">
                        <div class="col">
                              <label for="libelle" class="lab30 obligatoire form-label">Libellé</label>
                              <input class="form-control w20" type="text" id='libelle' name="libelle" value="<?= $libelle ?>" <?= $disabled ?>>
                        </div>
                  </div>

                  <div class="text-center my-5 d-flex justify-content-evenly">
                        <a href="civilite" class="btn btn-md btn-success">Retour</a>
                        <input type="reset" class="btn btn-md btn-danger" value="Annuler" <?= $disabled ?>>
                        <input type="submit" class="btn btn-md btn-primary" value="Valider" <?= $disabled ?>>
                  </div>
            </form>
      </div>
</div>
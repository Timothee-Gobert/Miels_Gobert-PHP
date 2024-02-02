<div class="container-fluid">
      <div class="mx-auto d-block w-50">
            <h1 class="titre text-dark text-center my-4">SAISIE ARTICLE</h1>

            <form class="row" action="article&action=save" method='post' enctype="multipart/form-data">

                  <div class="hidden">
                        <div>
                              <label for="id" class="lab30 form-label">ID</label>
                              <input class="form-control w20" type="text" id='id' name="id" value="<?=$id?>">
                        </div>
                  </div>

                  <div class="col-auto">
                        <div>
                              <label for="referenceArticle" class="lab30 obligatoire form-label">Reference</label>
                        </div class='col'>
                        <div>
                              <input required placeholder="aca" class="form-control w20" type="text" id='referenceArticle'
                                    name="referenceArticle" value="<?=$referenceArticle?>" <?=$disabled?>>
                        </div>
                  </div>

                  <div class="col-auto">
                        <div>
                              <label for="typeArticle" class="lab30 obligatoire form-label">Type</label>
                        </div>
                        <div>
                              <input required placeholder="miel" class="form-control w70" type="text" id='typeArticle' name="typeArticle"
                                    value="<?=$typeArticle?>" <?=$disabled?>>
                        </div>
                  </div>

                  <div class="col-auto">
                        <div>
                              <label for="preposition" class="lab30 obligatoire form-label">Préposition</label>
                        </div>
                        <div>
                              <input required placeholder="d'" class="form-control w70" type="text" id='preposition' name="preposition"
                                    value="<?=$preposition?>" <?=$disabled?>>
                        </div>
                  </div>

                  <div class="col-auto">
                        <div>
                              <label for="designation" class="lab30 obligatoire form-label">Désignation</label>
                        </div>
                        <div>
                              <input required placeholder="acacia" class="form-control w70" type="text" id='designation' name="designation"
                                    value="<?=$designation?>" <?=$disabled?>>
                        </div>
                  </div>

                  <div class="text-center my-5 d-flex justify-content-evenly">
                        <a href="article" class="btn btn-md btn-success">Retour à la liste</a>
                        <input type="reset" class="btn btn-md btn-danger" value="Annuler" <?=$disabled?>>
                        <input type="submit" class="btn btn-md btn-primary" value="Valider" <?=$disabled?>>
                  </div>
            </form>
      </div>
</div>
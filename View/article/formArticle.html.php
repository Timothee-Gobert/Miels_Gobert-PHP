<div class="m-auto w80 my-4">
      <h1 class="titre text-light">SAISIE ARTICLE</h1>
      <form action="article&action=save" method='post' enctype="multipart/form-data">

            <div class="mb-3 my-2 hidden">
                  <div class=" hidden">
                        <label for="id" class="lab30 form-label">ID</label>
                        <input class="form-control w20" type="text" id='id' name="id" value="<?=$id?>">
                  </div>
            </div>

            <div class="my-2 mb-3 col">
                  <div>
                        <label for="referenceArticle" class="lab30 obligatoire form-label">Reference</label>
                  </div class='col'>
                  <div>
                        <input required class="form-control w20" type="text" id='referenceArticle' name="referenceArticle"
                              value="<?=$referenceArticle?>" <?=$disabled?>>
                  </div>
            </div>

            <div class="my-2 mb-3 col">
                  <div>
                        <label for="typeArticle" class="lab30">Type</label>
                  </div>
                  <div>
                        <input class="form-control w70" type="text" id='typeArticle' name="typeArticle" value="<?=$typeArticle?>"
                              <?=$disabled?>>
                  </div>
            </div>

            <div class="my-2 mb-3 col">
                  <div>
                        <label for="preposition" class="lab30">Préposition</label>
                  </div>
                  <div>
                        <input class="form-control w70" type="text" id='preposition' name="preposition" value="<?=$preposition?>"
                              <?=$disabled?>>
                  </div>
            </div>

            <div class="my-2 mb-3 col">
                  <div>
                        <label for="designation" class="lab30">Désignation</label>
                  </div>
                  <div>
                        <input class="form-control w70" type="text" id='designation' name="designation" value="<?=$designation?>"
                              <?=$disabled?>>
                  </div>
            </div>

            <div class="div-btn">
                  <a href="article" class="btn btn-md btn-success">Retour à la liste</a>
                  <input type="reset" class="btn btn-md btn-danger" value="Annuler" <?=$disabled?>>
                  <input type="submit" class="btn btn-md btn-primary" value="Valider" <?=$disabled?>>
            </div>
      </form>
</div>
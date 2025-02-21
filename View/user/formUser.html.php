<div class="container-fluid">
      <div class="mx-auto d-block w-80">
            <h1 class="titre text-dark text-center my-4">SAISIE USER</h1>
            <form class="row" action="user&action=save" method='post' enctype="multipart/form-data">

                  <div class="hidden">
                        <div>
                              <label for="id">ID</label>
                              <input type="text" id='id' name="id" value="<?=$id?>">
                        </div>
                  </div>

                  <div class="my-2 mb-3 col-3">
                        <div>
                              <label for="username" class="lab30 obligatoire form-label">Username</label>
                        </div class='col'>
                        <div>
                              <input required class="form-control w20" type="text" id='username' name="username"
                                    value="<?=$username?>" <?=$disabled?>>
                        </div>
                  </div>

                  <div class="my-2 mb-3 col-3">
                        <div>
                              <label for="libelle" class="lab30 obligatoire form-label">Libellé</label>
                        </div class='col'>
                        <div>
                              <select class="form-select" aria-label="select civ" option=1 <?=$disabled?>>
                                    <option selected>Choisisez votre civilité</option>
                                    <option value="1">M</option>
                                    <option value="2">MM</option>
                                    <option value="3">Alien</option>
                                    <option value="4">Renard</option>
                                    <option value="5">Non genré(e)</option>
                                    <option value="6">Abeille ouvrière non contente</option>
                              </select>
                        </div>
                  </div>

                  <div class="my-2 mb-3 col-3">
                        <div>
                              <label for="nom" class="lab30 obligatoire form-label">Nom</label>
                        </div>
                        <div>
                              <input class="form-control w70" type="text" id='nom' name="nom" value="<?=$nom?>"
                                    <?=$disabled?>>
                        </div>
                  </div>

                  <div class="my-2 mb-3 col-3">
                        <div>
                              <label for="prenom" class="lab30 obligatoire form-label">Prenom</label>
                        </div>
                        <div>
                              <input class="form-control w70" type="text" id='prenom' name="prenom" value="<?=$prenom?>"
                                    <?=$disabled?>>
                        </div>
                  </div>

                  <div class="my-2 mb-3 col-12">
                        <div>
                              <label for="adresse" class="lab30 obligatoire form-label">Adresse</label>
                        </div>
                        <div>
                              <input class="form-control w70" type="text" id='adresse' name="adresse"
                                    value="<?=$adresse?>" <?=$disabled?>>
                        </div>
                  </div>

                  <div class="my-2 mb-3 col">
                        <div>
                              <label for="ville" class="lab30 obligatoire form-label">Ville</label>
                        </div>
                        <div>
                              <input class="form-control w70" type="text" id='ville' name="ville" value="<?=$ville?>"
                                    <?=$disabled?>>
                        </div>
                  </div>

                  <div class="my-2 mb-3 col">
                        <div>
                              <label for="codepostal" class="lab30 obligatoire form-label">Code Postal</label>
                        </div>
                        <div>
                              <input class="form-control w70" type="number" id='codepostal' name="codepostal"
                                    value="<?=$codePostal?>" <?=$disabled?>>
                        </div>
                  </div>

                  <div class="my-2 mb-3 col-12">
                        <div>
                              <label for="email" class="lab30 obligatoire form-label">E-mail</label>
                        </div>
                        <div>
                              <input class="form-control w70" type="email" id='email' name="email" value="<?=$email?>"
                                    <?=$disabled?>>
                        </div>
                  </div>

                  <div class="my-2 mb-3 col">
                        <div>
                              <label for="telephone" class="lab30 obligatoire form-label">Telephone</label>
                        </div>
                        <div>
                              <input class="form-control w70" type="tel" id='telephone' name="telephone"
                                    value="<?=$telephone?>" <?=$disabled?>>
                        </div>
                  </div>

                  <div class="my-2">
                        <label for="password" class="lab30 obligatoire form-label">Password</label>
                        <input required class="form-control w70" type="password" id='password' name="password"
                              value="<?=$password?>" <?=$disabled?>>
                  </div>

                  <div class="text-center my-5 d-flex justify-content-evenly">
                        <a href="user" class="btn btn-md btn-success">Retour</a>
                        <input type="reset" class="btn btn-md btn-danger" value="Annuler" <?=$disabled?>>
                        <input type="submit" class="btn btn-md btn-primary" value="Valider" <?=$disabled?>>
                  </div>
            </form>
      </div>
</div>
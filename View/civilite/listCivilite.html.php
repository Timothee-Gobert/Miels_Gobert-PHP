<div class="container-fluid">
      <div class="mx-auto d-block w-50">
            <h1 class="titre text-dark text-center my-4">LISTE DES CIVILITES</h1>
            <div class="text-center my-5 d-flex justify-content-evenly">
                  <a href="javascript:creerCivilite()" class="btn btn-md btn-outline-success"><i
                              class="fa fa-solid fa-plus"></i>Nouvelle
                        civilite</a>
                  <a href="javascript:afficherCivilite()" class="btn btn-md btn-outline-primary"><i
                              class="fa fa-solid fa-eye"></i>Afficher</a>
                  <a href="javascript:modifierCivilite()" class="btn btn-md btn-outline-warning"><i
                              class="fa fa-solid fa-pen"></i>Modifier</a>
                  <a href="javascript:supprimerCivilite()" class="btn btn-md btn-outline-danger"><i
                              class="fa fa-solid fa-trash"></i>Supprimer</a>
            </div>
            <table class="table table-striped">
                  <thead id="thead_civilite">
                        <tr>
                              <th class="text-center">Choix</th>
                              <th class="text-center">Id</th>
                              <th class="text-center">libelle</th>
                        </tr>
                  </thead>
                  <tbody id="tbody_civilite">
                        <?php foreach($lignes as $ligne): ?>
                        <tr>
                              <td class="text-center"> <input type="checkbox" name="civilite" id="<?=$ligne['id']?>"
                                          value="<?=$ligne['id']?>" onclick="onlyOne(this)"></td>
                              <td class="text-center"><?=$ligne['id']?></td>
                              <td class="text-center"><?=$ligne['libelle']?></td>
                        </tr>
                        <?php endforeach;?>
                  </tbody>
                  <tfoot id="tfoot_civilite">
                        <tr>
                        <th colspan="3" class="text-center">Nombre articles : <?=$nbre?></th>
                              <th colspan="3" class="text-center"><a href="javascript:afficherDescCivilite()" class="btn btn-md btn-outline-dark"><i
                              class=""></i>Description de civilite</a></th>
                        </tr>
                  </tfoot>
            </table>
      </div>
</div>

<script>

function afficherDescCivilite() {
      document.location.href = "civilite&action=DescCivilite";
}


function creerCivilite() {
      document.location.href = "civilite&action=insert";
}

function afficherCivilite() {
      let id = getIdChecked('civilite');
      if (id == 0) {
            alert("selectionnez bien une ligne");
      } else {
            document.location.href = "civilite&action=show&id=" + id;
      }
}

function supprimerCivilite() {
      let id = getIdChecked('civilite');
      if (id == 0) {
            alert("selectionnez bien une ligne");
      } else {
            const response = confirm("Voulez vous vraiment supprimer ce civilite ?");
            if (response) {
                  document.location.href = "civilite&action=delete&id=" + id;
            }
      }
}

function modifierCivilite() {
      let id = getIdChecked('civilite');
      if (id == 0) {
            alert("selectionnez bien une ligne");
      } else {
            document.location.href = "Civilite&action=update&id=" + id;
      }
}

function chercher() {
      document.location.href = "civilite&action=search&mot=" + mot.value;
}

function touche(event) {
      if (event.keyCode == 13) {
            chercher();
      }
}

function chercher() {
      document.location.href = "civilite&action=search&mot=" + mot.value;
}

function touche(event) {
      if (event.keyCode == 13) {
            chercher();
      }
}

function supprimer(id) {
      const response = confirm("Voulez-vous bien supprimer ce civilite?");
      if (response) {
            document.location.href = "civilite&action=delete&id=" + id;
      }
}
</script>
<div class="container-fluid">
      <div class="mx-auto d-block w-50">
            <h1 class="titre text-dark text-center my-4">LISTE DES USERS</h1>
            <div class="text-center my-5 d-flex justify-content-evenly">
                  <a href="javascript:creerUser()" class="btn btn-md btn-outline-success"><i
                              class="fa fa-solid fa-plus"></i>Nouveau
                        user</a>
                  <a href="javascript:afficherUser()" class="btn btn-md btn-outline-primary"><i
                              class="fa fa-solid fa-eye"></i>Afficher</a>
                  <a href="javascript:modifierUser()" class="btn btn-md btn-outline-warning"><i
                              class="fa fa-solid fa-pen"></i>Modifier</a>
                  <a href="javascript:supprimerUser()" class="btn btn-md btn-outline-danger"><i
                              class="fa fa-solid fa-trash"></i>Supprimer</a>
                  <a href="javascript:window.print()" class="btn btn-md btn-outline-dark"><i
                              class="fa fa-print"></i>Imprimer</a>
            </div>
            <table class="table table-striped">
                  <thead id="thead_user">
                        <tr>
                              <th class="text-center">Choix</th>
                              <th class="text-center">Username</th>
                              <th class="text-center">Nom</th>
                              <th class="text-center">Prénom</th>
                              <th class="text-center">Ville</th>
                              <th class="text-center">Telephone</th>
                        </tr>
                  </thead>
                  <tbody id="tbody_user">
                        <?php foreach($lignes as $ligne): ?>
                        <tr>
                              <td class="text-center"> <input type="checkbox" name="user" id="<?=$ligne['id']?>"
                                          value="<?=$ligne['id']?>" onclick="onlyOne(this)"></td>
                              <td class="text-center"><?=$ligne['username']?></td>
                              <td class="text-center"><?=$ligne['nom']?></td>
                              <td class="text-center"><?=$ligne['prenom']?></td>
                              <td class="text-center"><?=$ligne['ville']?></td>
                              <td class="text-center"><?=$ligne['telephone']?></td>
                        </tr>
                        <?php endforeach;?>
                  </tbody>
                  <tfoot id="tfoot_user">
                        <tr class="bg_green">
                              <th colspan="6" class="text-center">Nombre users : <?=$nbre?></th>
                        </tr>
                  </tfoot>
            </table>
      </div>
</div>

<script>
function creerUser() {
      document.location.href = "user&action=insert";
}

function afficherUser() {
      let id = getIdChecked('user');
      if (id == 0) {
            alert("selectionnez bien une ligne");
      } else {
            document.location.href = "user&action=show&id=" + id;
      }
}

function modifierUser() {
      let id = getIdChecked('user');
      if (id == 0) {
            alert("selectionnez bien une ligne");
      } else {
            document.location.href = "User&action=update&id=" + id;
      }
}

function supprimerUser() {
      let id = getIdChecked('user');
      if (id == 0) {
            alert("selectionnez bien une ligne");
      } else {
            const response = confirm("Voulez vous vraiment supprimer ce user ?");
            if (response) {
                  document.location.href = "user&action=delete&id=" + id;
            }
      }
}

function chercher() {
      document.location.href = "user&action=search&mot=" + mot.value;
}

function touche(event) {
      if (event.keyCode == 13) {
            chercher();
      }
}
</script>
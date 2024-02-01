<div class="m-auto w80">
      <h1 class="titre text-light">LISTE DES USERS</h1>
      <div class="div-btn my-2">
            <a href="javascript:creerUser()" class="btn btn-md btn-primary"><i class="fa fa-solid fa-plus"></i>Nouveau
                  user</a>
            <a href="javascript:afficherUser()" class="btn btn-md btn-primary"><i
                        class="fa fa-solid fa-eye"></i>Afficher</a>
            <a href="javascript:modifierUser()" class="btn btn-md btn-primary"><i
                        class="fa fa-solid fa-pen"></i>Modifier</a>
            <a href="javascript:supprimerUser()" class="btn btn-md btn-primary"><i
                        class="fa fa-solid fa-trash"></i>Supprimer</a>
            <a href="javascript:window.print()" class="btn btn-md btn-primary"><i class="fa fa-print"></i>Imprimer</a>
      </div>
      <table class="w100 table-responsive">
            <thead id="thead_user">
                  <tr class="bg_green">
                        <td class="w5 center">Choix</td>
                        <td class="w15 center">Username</td>
                        <td class="w20 center">Nom</td>
                        <td class="w20 center">Prénom</td>
                        <td class="w20 center">Ville</td>
                        <td class="w20 center">Telephone</td>
                  </tr>
            </thead>
            <tbody id="tbody_user">
                  <?php foreach($lignes as $ligne): ?>
                  <tr>
                        <td class="center"> <input type="checkbox" name="user" id="<?=$ligne['id']?>"
                                    value="<?=$ligne['id']?>" onclick="onlyOne(this)"></td>
                        <td><?=$ligne['username']?></td>
                        <td><?=$ligne['nom']?></td>
                        <td><?=$ligne['prenom']?></td>
                        <td><?=$ligne['ville']?></td>
                        <td><?=$ligne['telephone']?></td>
                  </tr>
                  <?php endforeach;?>
            </tbody>
            <tfoot id="tfoot_user">
                  <tr class="bg_green">
                        <th colspan="5" class="text-center">Nombre users : <?=$nbre?></th>
                  </tr>
            </tfoot>
      </table>
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

function modifierUser() {
      let id = getIdChecked('user');
      if (id == 0) {
            alert("selectionnez bien une ligne");
      } else {
            document.location.href = "User&action=update&id=" + id;
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

function chercher() {
      document.location.href = "user&action=search&mot=" + mot.value;
}

function touche(event) {
      if (event.keyCode == 13) {
            chercher();
      }
}

function supprimer(id) {
      const response = confirm("Voulez-vous bien supprimer ce user?");
      if (response) {
            document.location.href = "user&action=delete&id=" + id;
      }
}
</script>
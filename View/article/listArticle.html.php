<div class="container-fluid">
      <div class="mx-auto d-block w-50">
            <h1 class="titre text-dark text-center my-4">LISTE DES ARTICLES</h1>
            <div class="text-center my-5 d-flex justify-content-evenly">
                  <a href="javascript:creerArticle()" class="btn btn-md btn-outline-success"><i
                              class="fa fa-solid fa-plus"></i>Nouveau
                        article</a>
                  <a href="javascript:afficherArticle()" class="btn btn-md btn-outline-primary"><i
                              class="fa fa-solid fa-eye"></i>Afficher</a>
                  <a href="javascript:modifierArticle()" class="btn btn-md btn-outline-warning"><i
                              class="fa fa-solid fa-pen"></i>Modifier</a>
                  <a href="javascript:supprimerArticle()" class="btn btn-md btn-outline-danger"><i
                              class="fa fa-solid fa-trash"></i>Supprimer</a>
                  <a href="javascript:window.print()" class="btn btn-md btn-outline-dark"><i
                              class="fa fa-print"></i>Imprimer</a>
            </div>
            <table class="table table-striped">
                  <thead id="thead_article">
                        <tr>
                              <th class="text-center">Choix</th>
                              <th class="text-center">Id</th>
                              <th class="text-center">Reference</th>
                              <th class="text-center">Type</th>
                              <th class="text-center">Préposition</th>
                              <th class="text-center">Désignation</th>
                        </tr>
                  </thead>
                  <tbody id="tbody_article">
                        <?php foreach($lignes as $ligne): ?>
                        <tr>
                              <td class="text-center"> <input type="checkbox" name="article" id="<?=$ligne['id']?>"
                                          value="<?=$ligne['id']?>" onclick="onlyOne(this)"></td>
                              <td class="text-center"><?=$ligne['id']?></td>
                              <td class="text-center"><?=$ligne['referenceArticle']?></td>
                              <td class="text-center"><?=$ligne['typeArticle']?></td>
                              <td class="text-center"><?=$ligne['preposition']?></td>
                              <td class="text-center"><?=$ligne['designation']?></td>
                        </tr>
                        <?php endforeach;?>
                  </tbody>
                  <tfoot id="tfoot_article">
                        <tr>
                              <th colspan="6" class="text-center">Nombre articles : <?=$nbre?></th>
                        </tr>
                  </tfoot>
            </table>
      </div>
</div>

<script>
function creerArticle() {
      document.location.href = "article&action=insert";
}

function afficherArticle() {
      let id = getIdChecked('article');
      if (id == 0) {
            alert("selectionnez une ligne");
      } else {
            document.location.href = "article&action=show&id=" + id;
      }
}

function supprimerArticle() {
      let id = getIdChecked('article');
      if (id == 0) {
            alert("selectionnez une ligne");
      } else {
            const response = confirm("Voulez vous vraiment supprimer ce article ?");
            if (response) {
                  document.location.href = "article&action=delete&id=" + id;
            }
      }
}

function modifierArticle() {
      let id = getIdChecked('article');
      if (id == 0) {
            alert("selectionnez une ligne");
      } else {
            document.location.href = "Article&action=update&id=" + id;
      }
}

function chercher() {
      document.location.href = "article&action=search&mot=" + mot.value;
}

function touche(event) {
      if (event.keyCode == 13) {
            chercher();
      }
}

function chercher() {
      document.location.href = "article&action=search&mot=" + mot.value;
}

function touche(event) {
      if (event.keyCode == 13) {
            chercher();
      }
}

function supprimer(id) {
      const response = confirm("Voulez-vous supprimer cet article?");
      if (response) {
            document.location.href = "article&action=delete&id=" + id;
      }
}
</script>
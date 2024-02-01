<div class="m-auto w80">
      <h1 class="titre text-light">LISTE DES ARTICLES</h1>
      <div class="div-btn my-2">
            <a href="javascript:creerArticle()" class="btn btn-md btn-primary"><i class="fa fa-solid fa-plus"></i>Nouveau
                  article</a>
            <a href="javascript:afficherArticle()" class="btn btn-md btn-primary"><i
                        class="fa fa-solid fa-eye"></i>Afficher</a>
            <a href="javascript:modifierArticle()" class="btn btn-md btn-primary"><i
                        class="fa fa-solid fa-pen"></i>Modifier</a>
            <a href="javascript:supprimerArticle()" class="btn btn-md btn-primary"><i
                        class="fa fa-solid fa-trash"></i>Supprimer</a>
            <a href="javascript:window.print()" class="btn btn-md btn-primary"><i class="fa fa-print"></i>Imprimer</a>
      </div>
      <table class="w100 table-responsive">
            <thead id="thead_article">
                  <tr class="bg_green">
                        <td class="20 center">Choix</td>
                        <td class="w20 center">Reference</td>
                        <td class="w20 center">Type</td>
                        <td class="w20 center">Préposition</td>
                        <td class="w20 center">Désignation</td>
                  </tr>
            </thead>
            <tbody id="tbody_article">
                  <?php foreach($lignes as $ligne): ?>
                  <tr>
                        <td class="center"> <input type="checkbox" name="article" id="<?=$ligne['id']?>"
                                    value="<?=$ligne['id']?>" onclick="onlyOne(this)"></td>
                        <td><?=$ligne['id']?></td>
                        <td><?=$ligne['referenceArticle']?></td>
                        <td><?=$ligne['typeArticle']?></td>
                        <td><?=$ligne['preposition']?></td>
                        <td><?=$ligne['designation']?></td>
                  </tr>
                  <?php endforeach;?>
            </tbody>
            <tfoot id="tfoot_article">
                  <tr class="bg_green">
                        <th colspan="5" class="text-center">Nombre articles : <?=$nbre?></th>
                  </tr>
            </tfoot>
      </table>
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
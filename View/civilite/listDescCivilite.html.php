<div class="container-fluid">
      <div class="mx-auto d-block w-50">
            <h1 class="titre text-dark text-center my-4">DESC CIVILITES</h1>
            <div class="text-center my-5 d-flex justify-content-evenly">
                  <a href="javascript:window.print()" class="btn btn-md btn-outline-dark"><i
                              class="fa fa-print"></i>Imprimer</a>
            </div>
            <table class="table table-striped">
                  <thead id="thead_civilite">
                        <tr>
                              <th class="text-center">Field</th>
                              <th class="text-center">Type</th>
                              <th class="text-center">Null</th>
                              <th class="text-center">Key</th>
                              <th class="text-center">Default</th>
                              <th class="text-center">Extra</th>
                        </tr>
                  </thead>
                  <tbody id="tbody_civilite">
                        <?php foreach($lignes as $ligne): ?>
                        <tr>
                              <td class="text-center"><?=$ligne['Field']?></td>
                              <td class="text-center"><?=$ligne['Type']?></td>
                              <td class="text-center"><?=$ligne['Null']?></td>
                              <td class="text-center"><?=$ligne['Key']?></td>
                              <td class="text-center"><?=$ligne['Default']?></td>
                              <td class="text-center"><?=$ligne['Extra']?></td>
                        </tr>
                        <?php endforeach;?>
                  </tbody>
            </table>
            <div class="text-center my-5 d-flex justify-content-evenly">
                        <a href="civilite" class="btn btn-md btn-success">Retour à la liste</a>
            </div>
      </div>
</div>
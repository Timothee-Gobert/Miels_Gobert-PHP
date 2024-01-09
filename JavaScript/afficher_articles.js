function afficher_un_article(article) {
    const tuile_article = document.createElement("div");
    if (article.quantite > 0) {
        tuile_article.setAttribute("class", "article");
    } else {
        tuile_article.setAttribute("class", "article vide");
    }
    //PARTIE GAUCHE PHOTO

    const partie_photo = document.createElement("div");
    partie_photo.setAttribute("class", "box_photo");
    const lien = document.createElement("a");
    lien.setAttribute("href", "miel_acacia_250.html");
    const photo = document.createElement("img");
    photo.appendChild(document.createElement("img"));
    photo.setAttribute("class", "photo_miel");
    photo.setAttribute("src", "../img/produits/" + article.type + (article.poids ? article.poids : "") + ".jpg");
    photo.setAttribute("alt", "Pot de miel d'acacia en 250 g");

    lien.appendChild(photo);
    partie_photo.appendChild(lien);



    //PARTIE DROITE TEXTE
    //TITRE
    const partie_texte = document.createElement("div");
    partie_texte.setAttribute("class", "texte_article");

    const titre_article = document.createElement("a");
    titre_article.setAttribute("class", "titre_article");
    titre_article.setAttribute("href", "miel_acacia_250.html");
    const texte_titre = document.createElement("h3");
    texte_titre.textContent = article.nom + (article.poids ? (" - " + article.poids + "g") : "");

    titre_article.appendChild(texte_titre);

    //PRIX
    const prix = document.createElement("p");
    prix.setAttribute("class", "prix");
    const prix_unite = document.createElement("span");
    prix_unite.setAttribute("class", "bigger");
    prix_unite.textContent = article.prix + ",";
    const prix_decimale = document.createElement("sup");
    prix_decimale.textContent = "00";
    const symbole = document.createElement("span");
    symbole.setAttribute("class", "bigger");
    symbole.textContent = "€";
    const taxe = document.createElement("span");
    taxe.textContent = "T.T.C.";

    prix.appendChild(prix_unite);
    prix.appendChild(prix_decimale);
    prix.appendChild(symbole);
    prix.appendChild(taxe);

    //AJOUT
    const ajout_panier = document.createElement("div");
    ajout_panier.setAttribute("class", "ajout_panier");
    const input_ajout = document.createElement("input");
    input_ajout.setAttribute("class", "choix_valeur");
    input_ajout.setAttribute("type", "number");
    const bouton_ajout = document.createElement("button");
    bouton_ajout.setAttribute("class", "bouton_ajout");
    bouton_ajout.textContent = "Ajouter au panier";

    ajout_panier.appendChild(input_ajout);
    ajout_panier.appendChild(bouton_ajout);

    partie_texte.appendChild(titre_article);
    partie_texte.appendChild(prix);
    partie_texte.appendChild(ajout_panier);


    //ON AJOUTE LES DEUX PARTIES A L ARTICLE
    tuile_article.appendChild(partie_photo);
    tuile_article.appendChild(partie_texte);

    //ON AJOUTE L ARTICLE A LA PAGE
    const index = (article.quantite > 0) ? 0 : 1;
    const conteneur_articles = document.getElementsByClassName("conteneur")[index];
    conteneur_articles.appendChild(tuile_article);
}
async function afficher_articles() {

    const stock = await fetch('../stock.json') //await : attend d'avoir fini pour continuer
        .then(response => {
            return response.json();
        })
    // Asynchrone + await pour eviter le .then : qui est necessaire car il sagit d'une promise !!se documenter!!
    // .then(data => {
    //     const stock = data ;
    // })

    stock.articles.forEach((article) => {
        afficher_un_article(article);
    })


}
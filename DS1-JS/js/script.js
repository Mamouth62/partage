document.addEventListener("DOMContentLoaded", () => {
    const like = document.getElementById("like");
    const dislike = document.getElementById("dislike");
    const nblike = document.getElementById("nblike");
    const nbdislike = document.getElementById("nbdislike");
    like.addEventListener("click", likeClick, false);
    dislike.addEventListener("click", dislikeClick, false);

    function likeClick() {
        const nblike = document.getElementById("nblike");
        const like = document.getElementById("like");
        gestionClick("bleu", nblike, like, "rouge", "dislike", "nbdislike");

    }

    function gestionClick(couleur, nb, pouce, couleurOp, pouceOp, nbOp) {
        let valeur = parseInt(nb.textContent);

        if (pouce.classList.contains(couleur)) {
            valeur++;
            pouce.classList.remove(couleur);
            pouce.classList.add(couleur + "Plein");
        } else {
            valeur--;
            pouce.classList.remove(couleur + "Plein");
            pouce.classList.add(couleur);
        }
        nb.textContent = valeur;
        console.log(pouceOp);
        if (document.getElementById(pouceOp).classList.contains(couleurOp + "Plein")) {
            document.getElementById(pouceOp).classList.remove(couleurOp + "Plein");
            document.getElementById(pouceOp).classList.add(couleurOp);
            let valeur2 = document.getElementById(nbOp).textContent;
            valeur2 = parseInt(valeur2) - 1;
            document.getElementById(nbOp).textContent = valeur2;
        }
    }

    function dislikeClick() {
        const nbdislike = document.getElementById("nbdislike");
        const dislike = document.getElementById("dislike");
        gestionClick("rouge", nbdislike, dislike, "bleu", "like", "nblike");
    }
})
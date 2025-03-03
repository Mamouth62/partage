export class Like {

    constructor(id) {
        console.log("constructeur de like");
        this.id = id;
        this.div = document.querySelector(`#${id}`);
        this.div.classList.add('jaime');
        console.log(this.div);
        /**
         * pouce vers le haut
         */
        this.spanLike = document.createElement('span');
        this.spanLike.textContent = "thumb_up";
        this.spanLike.dataset.etat= 'false';

        this.spanLike.classList.add('material-symbols-outlined', 'cursor', 'bleu');
        this.spanLike.addEventListener('click', () => {
            let valeur = parseInt(this.spanNbLike.textContent);
            if (this.spanLike.dataset.etat === 'false'){
                valeur++;
                this.spanLike.dataset.etat = 'true';
            } else {
                valeur--;
                this.spanLike.dataset.etat = 'false';
            }

            this.spanNbLike.textContent = valeur;
        })
        this.div.appendChild(this.spanLike);
        /**
         * nombre de pouce vers le haut
         */
        this.spanNbLike = document.createElement('span');
        this.spanNbLike.textContent = "5";
        this.spanNbLike.classList.add("bleu");
        this.div.appendChild(this.spanNbLike);
        /**
        * pouce vers le bas
        */
        
        this.spanDislike = document.createElement('span');
        this.spanDislike.textContent = "thumb_down";
        this.spanDislike.dataset.etat === 'false';

        this.spanDislike.classList.add('material-symbols-outlined', 'cursor', 'rouge');
        this.spanDislike.addEventListener('click' , () => {
            let valeur = parseInt(this.spanNbDislike.textContent);
            if (this.spanDislike.dataset.etat === 'false'){
                valeur--;
                this.spanDislike.dataset.etat = 'true';
                if (this.spanLike.dataset.etat == 'true'){
                    
                }
            } else {
                valeur++;
                this.spanDislike.dataset.etat = 'false';
            }
            this.spanNbDislike.textContent = valeur;
        })
        this.div.appendChild(this.spanDislike);
        
        
        /**
        * nombre pouce vers le bas
        */
        this.spanNbDislike = document.createElement('span');
        this.spanNbDislike.textContent = "2";
        this.spanNbDislike.classList.add("rouge");
        this.div.appendChild(this.spanNbDislike);

        
    }

}
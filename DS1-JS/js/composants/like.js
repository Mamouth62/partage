export class Like{

    constructor(id){
        console.log("constructeur de like");
        this.id= id;
        this.div = document.querySelector(`#${id}`);
        this.div.classList.add("j'aime");
        console.log(this.div);

        let span = document.createElement('span');
        span.textContent= "thumb_up";
        this.div.appendChild(span);
        span.classList.add('material-symbol-outlined', 'cursor', 'bleu')
      
        span = document.createElement('span');
        this.div.appendChild(span);
        span.textContent="5";
        span.classList.add("bleu");

        span = document.createElement('span');
        span.textContent="thumb_down";
        this.div.appendChild(span);
        span.classList.add('material-symbol-outlined', 'cursor', 'rouge')

        span = document.createElement('span');
        this.div.appendChild(span);
        span.textContent="2";
        span.classList.add("rouge");

    }
}
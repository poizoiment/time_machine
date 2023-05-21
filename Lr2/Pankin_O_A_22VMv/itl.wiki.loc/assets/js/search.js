window.onload =() =>{
    let input = document.querySelector('#input')
    input.oninput = function (){
        let value = this.value.trim();
        let list = document.querySelectorAll('.content ul li');

        value ?
            list.forEach(elem =>{
                if(elem.innerText.search(value) ==-1){
                    elem.classList.add('hide')
                } else{
                    elem.classList.remove('hide')
                }
            })
         :
            list.forEach(elem =>{
                elem.classList.remove('hide');
            });
    }; 

};
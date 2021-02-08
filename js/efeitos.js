class interacoes {
    constructor(){
        this.begin()
    }

    begin(){

        let box = document.querySelectorAll('.caixa')
        let img = document.querySelectorAll('.img')
         let frase = document.querySelectorAll('.hP')
        let h2p = document.querySelectorAll('.h2p')
        // let t = document.querySelector('.times')
        

            box.forEach(e=>{

                this.adiciona(e,'off')
                

                window.addEventListener('scroll',()=>{

                    if(e.getBoundingClientRect().top < window.innerHeight -100){

                        this.remove(e,'off')
                        this.adiciona(e,'on')
                    }
                })
            })

            img.forEach(el=>{

                this.adiciona(el,'off1')
                

                window.addEventListener('scroll',()=>{

                    if(el.getBoundingClientRect().top < window.innerHeight -100){

                        this.remove(el,'off1')
                        this.adiciona(el,'on1')

                    }
                })
            })

            frase.forEach(e=>{

                this.adiciona(e,'off3')
                

                window.addEventListener('scroll',()=>{

                    if(e.getBoundingClientRect().top < window.innerHeight -100){

                        this.remove(e,'off3')
                        this.adiciona(e,'on3')
                    }
                })
            })

            h2p.forEach(e=>{

                this.adiciona(e,'off4')
                

                window.addEventListener('scroll',()=>{

                    if(e.getBoundingClientRect().top < window.innerHeight -90){

                        this.remove(e,'off4')
                        this.adiciona(e,'on4')
                    }
                })
            })
}

// funções para adicionar e remover os efeitos, valor recebe o elemento e valor2 recebe o efeito
                remove(valor,valor2){
                    valor.classList.remove(valor2)
                }
                adiciona(valor,valor2){
                    valor.classList.add(valor2)
                }
}

window.interation = new interacoes



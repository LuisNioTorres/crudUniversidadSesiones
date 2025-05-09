class Navbar {
    static toggleNavbar (boton,navegation) {
        boton.addEventListener('click',()=>{
            navegation.classList.toggle('open')
        })
    }

    static removerActiveAllOptions (lista) {
        lista.forEach((item)=>item.classList.remove('active'));
    }

    static addActiveOption (option) {
        option.classList.add('active');
    }

    static toggleOptionsInList (lista) {
        lista.forEach((option)=>{
            option.addEventListener('click',()=>{
                this.removerActiveAllOptions(lista);
                this.addActiveOption(option);
            })
        })
    }
}

export default Navbar;
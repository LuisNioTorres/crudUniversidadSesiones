import Navbar from './navbar.js'

const navegation = document.querySelector('.navegation')
const boton_menu = document.querySelector('.navegation__boton-menu')
const div_chiste = document.querySelector('.chiste');
const lista = document.querySelectorAll('.opcion')

async function cargarChiste() {
    try{
        const response = await fetch('https://official-joke-api.appspot.com/jokes/random');
        const chiste = await response.json();

        const setup = document.createElement('h3');
        setup.innerHTML = `${chiste.setup}`;
        div_chiste.appendChild(setup);
        const punchline = document.createElement('h3');
        punchline.innerHTML = `${chiste.punchline}`;
        div_chiste.appendChild(punchline);
        
    }catch(error){
        console.log("ERROR AL CARGAR EL CHISTE",error)
    }
}

function clickEnlace () {
    console.log("HOLA")
}

Navbar.toggleNavbar(boton_menu,navegation);
Navbar.toggleOptionsInList(lista);
cargarChiste();









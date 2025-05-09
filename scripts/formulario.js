//Validacion del Formulario de Login
const inputs = document.querySelectorAll('.input');
const boton_enviar = document.querySelector('.boton-enviar');
const formulario = document.querySelector('.formulario');

const arreglo = {
    usario : true,
    contraseña : true
}


const validaciones = {
    usuario : /^[a-zA-Z0-9]{4,16}$/,                    // Usuario: letras y números, 4 a 16 caracteres
    contraseña : /^[a-zA-Z0-9]/  // Contraseña: mínimo 6 caracteres, al menos una letra y un número
};
  
class Formulario {
    static validarTecla () {
        inputs.forEach((input)=>{
                input.addEventListener('keyup',()=>{
                    this.validarInput(input,input.value,input.name);
                })
            })
    }

    static validarInput (input,value,expresion) {
        if(!(validaciones[expresion].test(value))){
            input.classList.add('active');
        } else {
            input.classList.remove('active');
        }
    }

    static envioFormulario () {
        formulario.addEventListener('submit',(e)=>{
            if(arreglo.contraseña == true && arreglo.usario == true){

            }else{
                e.preventDefault();
            }
        })
    }
}


Formulario.validarTecla();
Formulario.envioFormulario();
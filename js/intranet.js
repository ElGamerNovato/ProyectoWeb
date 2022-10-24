let usuarios=["cristopher"]
let contraseñas=["1234"]
function verificarUsuario(usuario, contraseña){
    const ubicacionUsuario=usuarios.indexOf(usuario)
    if(ubicacionUsuario!=-1){
        if(contraseñas[ubicacionUsuario]==contraseña){
            usuarioCorrecto();
        }
        else{
            contraseñaIncorrecta();
        }
    }else{
        usuarioIncorrecto();
    }
}
function usuarioCorrecto(){
    console.log("Ingreso correcto");
    alert("¡Usuario correcto!")
}
function usuarioIncorrecto(){
    console.log("Usuario incorrecto");
    const usuario=document.getElementById("nombre")
    usuario.classList.add("animate__wobble")
    alert("Usuario incorrecto")
}
function contraseñaIncorrecta(){
    console.log("Contraseña incorrecta");
    const contraseña=document.getElementById("contraseña")
    contraseña.classList.add("animate__wobble")
    alert("Contraseña incorrecta")
}
function recibirLogin(){
    evento.preventDefault();
    const nombre=document.getElementById("nombre");
    const contra=document.getElementById("contraseña");
    console.log(nombre)
    console.log(contra)
}
const iniciarSesion=document.getElementById("iniciar");
iniciarSesion.addEventListener('click', function(evento){
    evento.preventDefault();
    const nombre=document.getElementById("nombre");
    const contra=document.getElementById("contraseña");
    if(nombre.classList.contains("animate__wobble")){
        nombre.classList.remove("animate__wobble")
    }
    if(contra.classList.contains("animate__wobble")){
        contra.classList.remove("animate__wobble")
    }
    verificarUsuario(nombre.value, contra.value)
});



const registrarse=document.getElementById("registro")
registro.addEventListener('click', function(evento){
    evento.preventDefault();
    const nombre=document.getElementById("nombreRegistro")
    const contraseña=document.getElementById("contraRegistro")
    registrar(nombre.value, contraseña.value)
})

function registrar(usuario, contraseña){
    usuarios.push(usuario)
    contraseñas.push(contraseña)
    alert("Usuario registrado")
    console.log(usuarios)
    console.log(contraseñas)
}
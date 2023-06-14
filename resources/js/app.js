//Configuracion de Dropzone
import Dropzone from "dropzone";
Dropzone.autoDiscover=false ;
const dropzone=new Dropzone("#dropzone",{
    dictDefaultMessage: "Sube aqui tu imagen",
    acceptedFiles:".png,.jpg,.jpeg,.gif",
    addRemoceLinks:true,
    dictRemoveFile: "Borrar archivos",
    maxFiles:1,
    uploadMultiples:false,
})
//Eventos de Dropzone
//1. Envio correcto de la imagen
/*dropzone.on('sending',function(file,xhr,formdata){
    console.log(file);
});*/

//1.Envio correcto de la imagen
dropzone.on('success',function(file,response){
    console.log(response);
});

//2. Evento de envio con error
dropzone.on('error',function(file,message){
    console.log(message);
});

//3.
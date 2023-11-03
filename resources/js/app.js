// If you are using JavaScript/ECMAScript modules:
import Dropzone from "dropzone";

// If you are using an older version than Dropzone 6.0.0,
// then you need to disabled the autoDiscover behaviour here:
Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Sube aquí tu Imagen',
    acceptedFiles: '.png, .jpg, .jpeg, .gif',
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar Archivo',
    maxFiles: 1,
    uploadMultiple: false,
})

dropzone.on('sending', function(file, xhr, formData){
    console.log(file);
})
dropzone.on('suscces', function(file, response){
    console.log(response);
})
dropzone.on('error', function(file, mensaje){
    console.log(mensaje);
})
dropzone.on('removedfile', function(){
    console.log('Archivo eliminado');
})

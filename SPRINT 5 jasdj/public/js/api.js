//VALIDACIONES

var formulario = document.querySelector('.access-form-registro');
var campoNombreUsuario = document.querySelector('input[name=name]');
var campoEmail = document.querySelector('input[name=email]');
var campoNombre = document.querySelector('input[name=nombre]');
var campoApellido = document.querySelector('input[name=apellido]');
var campoFechaNac = document.querySelector('input[name=fecha_nac]');
var campoPassword = document.querySelector('input[name=password]');
var campoCp = document.querySelector('input[name=cp]');

campoNombreUsuario.onblur = function (){
    if (this.value.trim == ''){
        document.getElementById("name").style.boxShadow = "red";
        alert ('Debe ingresar un nombre de usuario');
    } else if (this.value.length < 5) {
        alert ('El nombre de usuario debe tener mas de 5 letras');
    }
};
var regexMail = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

campoEmail.onblur = function (){
    if (this.value.trim == ''){
        alert ('Debe ingresar un E-mail');
    } else if (!regexMail.test(this.value)) {
        alert ('Ingrese un E-mail valido');
    }
};


var regexCp =/^\d+$/;
campoCp.onblur = function (){
   if (this.value.length != 4){
    alert ('El codigo postal debe tener 4 numeros');
   } else if (!regexCp.test(this.value)){
        alert ('Ingrese un codigo postal valido');
}
};


//API PROVINCIA-MUNICIPIO

var campoProvincia = document.querySelector('select[name=provincia]');
var campoLocalidad = document.querySelector('select[name=localidad]');

fetch('https://apis.datos.gob.ar/georef/api/provincias')
	.then(function(response){
		return response.json();
	}).then(function(provincias){
		console.log(provincias);
        for (provincia of provincias.provincias){
            var option = document.createElement('option');
            var optionText = document.createTextNode(provincia.nombre);
            option.append(optionText);
            campoProvincia.append(option);
        }
    });

fetch('http://apis.datos.gob.ar/georef/api/municipios?max=5000')
    .then(function(response){
        return response.json();
    });

	
 
 
 
 
 
    // .catch(function (error){
    //     console.log(error);
    // });
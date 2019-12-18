//VALIDACIONES

var formulario = document.querySelector('.access-form-registro');
var campoNombreUsuario = document.querySelector('input[name=name]');
var campoEmail = document.querySelector('input[name=email]');
var campoNombre = document.querySelector('input[name=nombre]');
var campoApellido = document.querySelector('input[name=apellido]');
var campoPassword = document.querySelector('input[name=password]');
var campoCp = document.querySelector('input[name=cp]');


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
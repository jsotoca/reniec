$("#formulario").submit(function(e){
    e.preventDefault();
    const dato = {dni: document.getElementById('dni').value};
    $.post(
        'consulta_reniec.php',
        dato,
        function(respuesta){
           console.log(respuesta); 
        }
    );
});
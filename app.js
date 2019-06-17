$("#formulario").submit(function(e){
    e.preventDefault();
    const dato = {dni: document.getElementById('dni').value};
    $.post(
        'consulta_reniec.php',
        dato,
        function(respuesta){
            var output = JSON.parse(respuesta);
            document.getElementById('cui').value = output.cui;
            document.getElementById('apellido_paterno').value = output.apellido_paterno;
            document.getElementById('apellido_materno').value = output.apellido_materno;
            document.getElementById('nombres').value = output.nombres;
        }
    );
});
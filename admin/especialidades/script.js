
listarEspecialidades();
function listarEspecialidades(busqueda) {
    fetch("listar.php", {
        method: "POST",
        body: busqueda
    }).then(response => response.text()).then(response => {
        resultado.innerHTML = response;
    })
}
registrar.addEventListener("click", () => {
    fetch("registrar.php", {
        method: "POST",
        body: new FormData(frm)
    }).then(response => response.text()).then(response => {
        if (response == "ok ") {

            Swal.fire({
                icon: 'success',
                title: 'Registrado',
                showConfirmButton: false,
                timer: 1500
            })
            frm.reset();
            listarEspecialidades();
        } else {
            debugger
            Swal.fire({
                icon: 'success',
                title: 'Modificado',
                showConfirmButton: false,
                timer: 1500
            })
            registrar.value = "Registrar";
            idp.value = "";
            listarEspecialidades();
            frm.reset();
        }
    })
});


function eliminar(id) {
    Swal.fire({
        title: 'Eliminar especialidad?',
        text: "Confime si desea eliminar el registro de la especialidad!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch("eliminar.php", {
                method: "POST",
                body: id
            }).then(response => response.text()).then(response => {
                //console.log(response);
                if (response = "ok") {
                    console.log(response);
                    document.getElementById('frm').reset();
                    listarEspecialidades();
                    Swal.fire({
                        icon: 'success',
                        title: 'Especialidad borrada',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }

            })

        }
    })  

}



function editar(id) {
    fetch("editar.php", {
        method: "POST",
        body: id
    }).then(response => response.json()).then(response => {
        ide.value = response.id;
        codigo.value = response.codEspecialidad;
        nombre.value = response.nomEspecialidad;
        registrar.value = "Actualizar"
    })
}
buscar.addEventListener("keyup", () => {
    const valor = buscar.value;
    if (valor == "") {
        listarEspecialidades();
    } else {
        listarEspecialidades(valor);
    }
});

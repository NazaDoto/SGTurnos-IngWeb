
listarProductos();
function listarProductos(busqueda) {
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
            listarProductos();
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
            listarProductos();
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
                    listarProductos();
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
        idp.value = response.id;
        codigo.value = response.cod;
        nombre.value = response.nombre;

        registrar.value = "Actualizar"
    })
}
buscar.addEventListener("keyup", () => {
    const valor = buscar.value;
    if (valor == "") {
        listarProductos();
    } else {
        listarProductos(valor);
    }
});

document.addEventListener("DOMContentLoaded", () => {
    console.log("Sistema de control de préstamos activo");

    const enlacesEliminar = document.querySelectorAll(".eliminar");

    enlacesEliminar.forEach(enlace => {
        enlace.addEventListener("click", (e) => {
            if (!confirm("¿Seguro que desea eliminar este registro?")) {
                e.preventDefault();
            }
        });
    });
});

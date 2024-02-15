Swal.fire({
    title: "deseas hacer cambios?",
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: "comfirmar",
    denyButtonText: `abortar la edicion`
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      Swal.fire("Saved!", "", "success");
    } else if (result.isDenied) {
      Swal.fire("No se realizo ningun cambio", "", "info");
    }
  });
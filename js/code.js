const fechaNacimientoInput = document.getElementById('fecha_nacimiento');

fechaNacimientoInput.addEventListener('change', function() {
    const fechaNacimiento = new Date(fechaNacimientoInput.value);
    const fechaActual = new Date();
    if (fechaNacimiento.getMonth() === fechaActual.getMonth() && fechaNacimiento.getDate() === fechaActual.getDate()) {
        alert('¡Feliz cumpleaños! 🎉');
    }
});
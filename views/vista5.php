<h1>Ingreso de Datos Personales</h1>
    <form>
        <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" required>
        <br>
        <label for="nombres" class="form-label">Nombres</label>
        <input type="text" minlength="3" class="form-control" required>
        <br>
        <label for="apellidos" class="form-label">Apellidos</label>
        <input type="text" minlength="3" class="form-control" required>
        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
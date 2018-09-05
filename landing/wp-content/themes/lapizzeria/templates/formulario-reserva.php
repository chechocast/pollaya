<h2>Realiza una reservación</h2>
<form class="reserva" method="post">
  <div class="campo">
    <input type="text" name="nombre" placeholder="Nombre" required>
  </div>
  <div class="campo">
    <input type="datetime-local" name="fecha" placeholder="Fecha" required>
  </div>
  <div class="campo">
    <input type="email" name="correo" placeholder="Correo" required>
  </div>
  <div class="campo">
    <input type="tel" name="celular" placeholder="celular" required>
  </div>
  <div class="campo">
    <textarea name="mensaje" placeholder="Mensaje" required></textarea>
  </div>
  <input type="submit" name="enviar">
  <input type="hidden" name="oculto" value="1">
</form>

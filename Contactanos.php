<?php
   include "Cabezera.html";
?>
    <!--Contactanos-->
    <section class="formulario">
      <form  action="https://formsubmit.co/9879456afaea8c37173559457b57b751" method="POST" class="row g-3">
        <div class="col-md-6">
          <label for="inputnumero" class="form-label">Telefono</label>
          <input type="text" class="form-control" id="inputnumero" name="Telefono">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Nombres y Apellidos</label>
          <input type="text" class="form-control" id="inputPassword4" name="Nombres">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Lugar</label>
          <input type="text" class="form-control" id="inputAddress" name="Lugar" placeholder="Direccion">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Diversos Postres:</label>
          <select id="inputState" class="form-select" name="Postre">
            <option selected>Budin</option>
            <option>Torta Helada</option>
            <option>Torta de Chocolate</option>
            <option>Alfajores</option>
            <option>Pie de Limón</option>
            <option>Gelatina</option>
            <option>Gelatina con Flan</option>
            <option>Torta de Tres Leches</option>
            <option>Pionono</option>
  
            
          </select>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              VICSTI
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Enviar Pedido</button>
        </div>
      </form>
    </section>
<?php
   include "footer.html"; 
?>
   
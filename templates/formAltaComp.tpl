<div style="margin-top:50px;" class="panel panel-default col-md-7 col-md-offset-2">
  <h3>Alta de Competencia</h3>
    <form class="formComp" method="post" href="index.php?action=agregar_competencia">
          <select class="form-control" name="cdodisciplina">
            {foreach from=$disciplinas item=d}
            <option value="{$d['cdodisciplina']}">{$d['nombre']}</option>
            {/foreach}
          </select>
          <br>
            <input class="form-control" type="text"  placeholder="Nombre de Competencia">
          <br>
            <label>Fecha</label>
            <input class="form-control" type="date" name="fecha" >
          <br>
            <input class="form-control" type="text" placeholder="Lugar">
          <br>
            <input class="form-control" type="text" placeholder="Localidad">
          <br>
            <input class="form-control" type="text" placeholder="Organizador">
          <br>
              <input id="individual" type="checkbox" name="individual">Individual
          <br>
          <br>
            <label>Fecha Limite</label>
            <input class="form-control" type="date" name="fechaLimite" >
          <br>
            <input class="form-control" type="number" placeholder="Cantidad de Jueces">
          <br>
            <input id="tv" type="checkbox" name="tv">Cobertura TV
          <br>
          <br>
            <input class="form-control" type="text" placeholder="Mapa">
          <br>
            <input class="form-control" type="text" placeholder="Web">
          <br>
          <br>
            <button type="submit" name="button">Crear</button>
          <br>
    </form>
</div>

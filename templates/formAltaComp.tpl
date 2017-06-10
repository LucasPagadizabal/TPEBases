<div class="panel panel-default col-md-7 col-md-offset-2 titulo-form" >
    <h3>Alta Competencia</h3>
</div>
<div class="panel panel-default col-md-7 col-md-offset-2 panel-form">
    <form class="formComp" method="post" href="index.php?action=agregar_competencia">
          <select class="form-control" name="cdodisciplina">
            {foreach from=$disciplinas item=d}
            <option value="{$d['cdodisciplina']}">{$d['nombre']}</option>
            {/foreach}
          </select>
          <br>
            <input class="form-control" type="text" name="nombrecomp" placeholder="Nombre de Competencia">
          <br>
            <label>Fecha</label>
            <input class="form-control" type="date" name="fecha" >
          <br>
            <input class="form-control" type="text" name="lugar" placeholder="Lugar">
          <br>
            <input class="form-control" type="text" name="localidad" placeholder="Localidad">
          <br>
            <input class="form-control" type="text" name="organizador" placeholder="Organizador">
          <br>
              <input id="individual" type="checkbox" name="individual">Individual
          <br>
          <br>
            <label>Fecha Limite</label>
            <input class="form-control" type="date" name="fechaLimite" >
          <br>
            <input class="form-control" type="number" name="cantjueces" placeholder="Cantidad de Jueces">
          <br>
            <input id="tv" type="checkbox" name="tv">Cobertura TV
          <br>
          <br>
            <input class="form-control" type="text" name="mapa" placeholder="Mapa">
          <br>
            <input class="form-control" type="text" name="web" placeholder="Web">
          <br>
          <br>
            <button class="form-control btn-submit" type="submit" name="button">Crear</button>
          <br>
    </form>
</div>

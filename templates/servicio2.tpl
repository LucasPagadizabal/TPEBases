<div class="reporte rep-1">
  <div class="panel panel-default col-md-8 col-md-offset-2 titulo-serv" >
      <h3>Equipos  Historico</h3>
  </div>
  <form class="formSelComp col-md-4 col-md-offset-4" method="post" href="index.php?action=filtrar_competencia">
    <div class="form-group">
        <label class="control-label">Deportista</label>
        <select class="form-control col-md-2 idDeportistaSel" name="iddeportista" nroSer="2" id="idDeportistaSel">
          {foreach from=$deportistas item=d}
          <option value="{$d['tipodoc']};{$d['nrodoc']}">{$d['nombre']}-{$d['nrodoc']}</option>
          {/foreach}
        </select>
        <!--<button type="submit" name="button">Seleccionar</button>-->
      </div>
  </form>
  <div  id="servicio2lista" >
  <!--{include file="servicio1lista.tpl"}-->
</div>
</div>

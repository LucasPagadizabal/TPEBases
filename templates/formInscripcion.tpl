<div class="reporte rep-1">
  <div class="panel panel-default col-md-8 col-md-offset-2 titulo-form" >
      <h3>Inscripcion Deportista a Competencia</h3>
  </div>
<div  class="panel panel-default col-md-7 col-md-offset-2 panel-form" >
  <form class="formInscripcion" method="post" href="index.php?action=inscribir_deportista">
    <div class="form-group">
      <label class="control-label">Deportista</label>
      <select class="form-control col-md-2 deportistaSel" name="doc_deportista" >
        {foreach from=$deportistas item=d}
        <option value="{$d['tipodoc']};{$d['nrodoc']}">{$d['nombre']}</option>
        {/foreach}
      </select>
        <br>
        <div> <label class="control-label">Competencia</label>
        <select class="form-control col-md-2 idCompetenciaSel" name="idcompetencia" >
          {foreach from=$competencias item=c}
          <option value="{$c['idcompetencia']}">{$c['nombre']}</option>
          {/foreach}
        </select>
        </div>
        <br>
          <button class="form-control btn-submit" type="submit" name="button">Inscribir</button>
        <br>
        <!--<button type="submit" name="button">Seleccionar</button>-->
      </div>

  </form>
</div>
  <div  class="resultado" >
  <!--{include file="servicio1lista.tpl"}-->
</div>
</div>

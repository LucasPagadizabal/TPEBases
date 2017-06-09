<div class="reporte rep-1">
  <div class="panel panel-default col-md-8 col-md-offset-2 titulo-form" >
      <h3>Inscripcion Deportista a Competencia</h3>
  </div>
  <form class="formInscripcion col-md-6 col-md-offset-3" method="post" href="index.php?action=inscribir_deportista">
    <div class="form-group">
      <label class="control-label">Deportista</label>
      <select class="form-control col-md-2 deportistaSel" name="doc_deportista" >
        {foreach from=$deportistas item=d}
        <option value="{$d['tipodoc']};{$d['nrodoc']}">{$d['nombre']}</option>
        {/foreach}
      </select>
        <br>
        <label class="control-label">Competencia</label>
        <select class="form-control col-md-2 idCompetenciaSel" name="idcompetencia" >
          {foreach from=$competencias item=c}
          <option value="{$c['idcompetencia']}">{$c['nombre']}</option>
          {/foreach}
        </select>
        <br>
        <div class="">
          <button class="form-control btn-submit" type="submit" name="button">Inscribir</button>
        </div>
        <!--<button type="submit" name="button">Seleccionar</button>-->
      </div>

  </form>
  <div  id="resultadoinscripcion" >
  <!--{include file="servicio1lista.tpl"}-->
</div>
</div>

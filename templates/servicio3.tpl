<div class="reporte rep-1">
  <div class="panel panel-default col-md-8 col-md-offset-2 titulo-serv" >
      <h3>Clasificacion Competencia</h3>
  </div>
  <form class="formSelComp col-md-4 col-md-offset-4" method="post" href="index.php?action=filtrar_competencia">
    <div class="form-group">
        <label class="control-label">Competencia</label>
        <select class="form-control col-md-2 idCompetenciaSel" name="idcompetencia" nroSer="3" id="idCompetenciaSel">
          {foreach from=$competencias item=c}
          <option value="{$c['idcompetencia']}">{$c['nombre']}</option>
          {/foreach}
        </select>
        <!--<button type="submit" name="button">Seleccionar</button>-->
      </div>
  </form>
  <div  id="servicio3lista" >

</div>
</div>

<div class="reporte rep-1">
  <div class="panel panel-default col-md-8 col-md-offset-2 titulo-serv" >
      <h3>Deportistas por Competencia</h3>
  </div>

  <div  class="panel panel-default col-md-8 col-md-offset-2 panel-serv" >
    <ul>
      {foreach from=$deportistas key=index item=deportista}
      <li>
        <p>Nombre: {$deportista['nombre']}</p>
        <p>Categoria: {$deportista['nombre_categoria']}</p>
        <p>Algo mas: {$deportista['descripcion']}</p>
      </li>
      {/foreach}
    </ul>
</div>
</div>

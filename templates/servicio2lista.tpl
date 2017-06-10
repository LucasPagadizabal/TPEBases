<div class="panel panel-default col-md-8 col-md-offset-2 panel-serv">
<ul>
  {foreach from=$equipos key=index item=equipo}
  <li>
    <p>id: {$equipo['id']}  Nombre: {$equipo['nombre']}</p>
  </li>
  {/foreach}

</ul>
</div>

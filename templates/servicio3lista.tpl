<div class="panel panel-default col-md-8 col-md-offset-2 panel-serv">
<ul>
  {foreach from=$clasificaciones key=index item=clasificacion}
  <li>
  <!--  <p>Nombre: {$clasificacion['nombreper']}</p>
    <p>Apellido: {$clasificacion['apellido']}</p>
    <p>Tipo Documento: {$clasificacion['tipodoc']}</p>
    <p>Numero Documento: {$clasificacion['nrodoc']}</p>-->
    <p>id clasificacion: {$clasificacion['id']}</p>
    <p>nombre competencia: {$clasificacion['nombre']}</p>
    <p>puesto general: {$clasificacion['puesto_general']}</p>
    <p>puntos general: {$clasificacion['puntos_general']}</p>
    <p>puesto categoria: {$clasificacion['puesto_categoria']}</p>
    <p>puntos categoria: {$clasificacion['puntos_categoria']}</p>
  </li>
  {/foreach}

</ul>
</div>

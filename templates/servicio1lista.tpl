<div class="panel panel-default col-md-8 col-md-offset-2 panel-serv">
<ul>
  {foreach from=$deportistas key=index item=deportista}
  <li>
    <p>Nombre: {$deportista['nombreper']}</p>
    <p>Apellido: {$deportista['apellido']}</p>
    <p>Tipo Documento: {$deportista['tipodoc']}</p>
    <p>Numero Documento: {$deportista['nrodoc']}</p>
    <p>Fecha de nacimiento: {$deportista['fechanacimiento']}</p>
    <p>Direccion: {$deportista['direccion']}</p>
    <p>Localidad: {$deportista['nombrelocalidad']}</p>
    <p>Celular: {$deportista['celular']}</p>
    <p>Sexo: {$deportista['sexo']}</p>
    <p>Mail: {$deportista['mail']}</p>
    <p>Tipo: {$deportista['tipo']}</p>
    <p>id competencia: {$deportista['idcompetencia']}</p>
    <p>nombre competencia: {$deportista['nombre']}</p>
  </li>
  {/foreach}

</ul>
</div>

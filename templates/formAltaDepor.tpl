<div class="panel panel-default col-md-7 col-md-offset-2 titulo-form" >
    <h3>Alta Deportista</h3>
</div>
<div  class="panel panel-default col-md-7 col-md-offset-2 panel-form" >
    <form class="formDeportista" method="post" href="index.php?action=agregar_deportista">

      <select class="form-control" name="doc_deportista">
        {foreach from=$personas item=p}
        <option value="{$p['nrodoc']};{$p['tipodoc']}">Dni : {$p['nrodoc']} , Tipo Doc: {$p['tipodoc']}</option>
        {/foreach}
      </select>
      <br>
          <input id="federado" type="checkbox" name="federado">Federado
      <br>
      <br>
          <label>Ultima Federacion</label>
          <input class="form-control" type="date" name="fecha" >
        <br>
          <input class="form-control" type="text" name="nroLicencia" placeholder="Numero Licencia">
        <br>
        <select class="form-control" name="categoria">
          {foreach from=$categorias item=c}
          <option value="{$c['cdocategoria']};{$c['cdodisciplina']}">Categoria: {$c['cdocategoria']}, Disciplina : {$c['cdodisciplina']}</option>

          {/foreach}
        </select>
        <br>
        <input id="addFederaciones" type="checkbox" >
        <br>
        <div> <label>Agregar a Federacion?</label>
              <select  id="federaciones" class="form-control" name="cdoFederacion" disabled="true">
                {foreach from=$federaciones item=f}
                <option value="{$f['cdofederacion']};{$f['disciplina']}">Codigo Federacion: {$f['cdofederacion']}, Codigo Disciplina: {$f['cdodisciplina']}</option>
                {/foreach}
              </select>
        </div>
        <br>
          <button class="form-control btn-submit" type="submit" name="button">Submit</button>
        <br>
    </form>
</div>

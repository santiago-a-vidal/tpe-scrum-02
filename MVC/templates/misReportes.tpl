{include file="header.tpl"}

<div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h3>PENDIENTES</h3>
      </div>
      <table class="table">
        <thead>
          <tr class="centrarfila warning">
            <th scope="col">Numero de reporte</th>
            <th scope="col">Descripcion</th>
          </tr>
        </thead>
        <tbody id="tablaTour">

            {foreach from=$reportes item=reporte}
            <tr class="centrarfila">
             <td>{$reporte['id_reporte']}</td><td>{$reporte['descripcion']}</td>
            </tr>
            {/foreach}


        </tbody>
      </table>
        </div>
    </div>
</div>

{include file="footer.tpl"}
{include file="header.tpl" }
{include file="navAdmin.tpl"}
  <div class="container-fluid">
      <div id="map" class="mx-auto" style="width: 1120px; height: 580px; background: grey" />
  </div>

  <div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
      </div>
<table class="table">
        <thead>
          <tr class="centrarfila warning">
            <th scope="col">Id Reporte</th>
            <th scope="col">Latitud</th>
            <th scope="col">Longitd</th>
            <th scope="col">Descripcion</th>
			<th scope="col">Realizar</th>
          </tr>
        </thead>
	<tbody id="tablaTour">
{foreach from=$reportes item=reporte}
        <tr class="centrarfila">
			<td class="id_reporte">{$reporte['id_reporte']}</td>
            <td class="latitud">{$reporte['latitud']}</td>
			<td class="longitud">{$reporte['longitud']}</td>
            <td hidden="hidden" class="foto">{$reporte['foto']}</td>
			<td class="descripcion">{$reporte['descripcion']}</td>
			<td>
        <form action="borrarreporte" method="post">
          <input hidden="hidden" value="{$reporte['id_reporte']}" name="id_reporte">
          <button type="submit" class="btn btn-success"><img class="tick" src="images/tick.ico"></button>
        </form>
      </td>
        </tr>
{/foreach}
	</tbody>
    </table>
  {include file="footer.tpl"}

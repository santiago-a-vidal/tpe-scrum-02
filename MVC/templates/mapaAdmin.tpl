{include file="header.tpl" }
{include file="nav.tpl"}
    <table hidden="hidden">
{foreach from=$reportes item=reporte}
        <tr>
            <td class="latitud">{$reporte['latitud']}</td><td class="longitud">{$reporte['longitud']}</td>
            <td class="foto">{$reporte['foto']}</td><td class="descripcion">{$reporte['descripcion']}</td>
        </tr>
{/foreach}
    </table>
  <div class="container-fluid">
      <div id="map" class="mx-auto" style="width: 1120px; height: 580px; background: grey" />
  </div>
  {include file="footer.tpl"}

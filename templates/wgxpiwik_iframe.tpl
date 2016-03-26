<{include file='db:wgxpiwik_header.tpl'}>

<{if count($sites_list) > 0}>
<table class="table table-<{$table_type}>">
    <thead>
        <tr class="center">
            <th><{$smarty.const._MA_WGXPIWIK_TITLE}>  -  <{$smarty.const._MA_WGXPIWIK_DESC}></th>
        </tr>
    </thead>
    <tbody>
        <tr class="center">
            <td class="">
                <iframe class="wgxpiwik-iframe" src="<{$iframe_src}>"></iframe>
            </td>
        </tr>
    </tbody>
    <tfoot>
    </tfoot>
</table>
<{/if}>

<{include file='db:wgxpiwik_footer.tpl'}>

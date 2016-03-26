<!-- Header -->
<{include file='db:wgxpiwik_admin_header.tpl'}>

<table class="table table-bordered">
    <tr class="head">
        <th class="center" colspan="2"><{$smarty.const._AM_WGXPIWIK_PIWIK_INSTALL_CHECK}></th>
    </tr>
    <tr class="even">
        <td class="left"><{$wgxpiwik_path_result_desc}></td>
        <td class="center"><img src="../assets/icons/32/<{$wgxpiwik_path_result_img}>" alt="check_result_img" title="check_result_img" /></td>
    </tr>
<{if $wgxpiwik_path_exist == 1}>
    <tr class="odd">
        <td class="left"><{$smarty.const._AM_WGXPIWIK_PIWIK_INSTALL_OK_DESC}></td>
        <td class="center"><a href="<{$wgxpiwik_url}>/piwik/index.php" title="<{$smarty.const._AM_WGXPIWIK_PIWIK_INSTALL}>" target="_blank" class="btn-wgxpiwik" ><{$smarty.const._AM_WGXPIWIK_PIWIK_INSTALL}></a></td>
    </tr>
<{else}>
    <tr class="odd">
        <td class="left"><{$smarty.const._AM_WGXPIWIK_PIWIK_INSTALL_NOTOK_DESC}></td>
        <td class="center"></td>
    </tr>
<{/if}>
</table>
<!-- Footer -->
<{include file='db:wgxpiwik_admin_footer.tpl'}>
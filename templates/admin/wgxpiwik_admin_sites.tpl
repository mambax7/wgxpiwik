<!-- Header -->
<{include file='db:wgxpiwik_admin_header.tpl'}>
<{if $sites_list}>
	<table class="table table-bordered  table-striped">
        <thead>
            <tr class="head">
                <th class="center"><{$smarty.const._AM_WGXPIWIK_SITE_IDSITE}></th>
                <th class="center"><{$smarty.const._AM_WGXPIWIK_SITE_NAME}></th>
            </tr>
        </thead>
        <{if $sites_count}>
        <tbody>
            <{foreach item=sites from=$sites_list}>
                <{foreach item=site from=$sites}>
                <tr class="<{cycle values='odd, even'}>">
                    <td class="center"><{$site.idsite}></td>
                    <td class="center"><{$site.name}></td>
                </tr>
                <{/foreach}>
            <{/foreach}>
            <tr class="odd">
                <td class="center" colspan="3">
                    <a href="<{$wgxpiwik_url}>/piwik/index.php" title="<{$smarty.const._AM_WGXPIWIK_PIWIK_GOTO}>" target="_blank" class="btn-wgxpiwik" ><{$smarty.const._AM_WGXPIWIK_PIWIK_GOTO}></a>
                </td>
            </tr>
        </tbody>
        <{/if}>
    </table>
<{/if}>
<{if $error}>
	<div class="errorMsg"><strong><{$error}></strong></div>
<{/if}>
<br />
<!-- Footer -->
<{include file='db:wgxpiwik_admin_footer.tpl'}>
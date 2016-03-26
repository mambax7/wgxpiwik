<!-- Header -->
<{include file='db:wgxpiwik_admin_header.tpl'}>
<{if $users_list}>
	<table class="table table-bordered  table-striped">
        <thead>
            <tr class="head">
                <th class="center"><{$smarty.const._AM_WGXPIWIK_USER_ALIAS}></th>
                <th class="center"><{$smarty.const._AM_WGXPIWIK_USER_TOKENAUTH}></th>
                <th class="center"><{$smarty.const._AM_WGXPIWIK_USER_SUPERACCESS}></th>
            </tr>
        </thead>
        <{if $users_count}>
            <tbody>
                <{foreach item=users from=$users_list}>
                    <{foreach item=user from=$users}>
                    <tr class="<{cycle values='odd, even'}>">
                        <td class="center"><{$user.alias}></td>
                        <td class="center"><{$user.token_auth}></td>
                        <td class="center"><{$user.superuser_access}></td>
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
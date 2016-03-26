<!-- Header -->
<{include file='db:wgxpiwik_admin_header.tpl'}>

<{if $perms_list}>
	<table class="table table-bordered  table-striped">
        <thead>
            <tr class="head">
                <th class="center"><{$smarty.const._AM_WGXPIWIK_PERM_ID}></th>
                <th class="center"><{$smarty.const._AM_WGXPIWIK_PERM_GROUPID}></th>
                <th class="center"><{$smarty.const._AM_WGXPIWIK_PERM_PIWIK_LOGIN}></th>
                <th class="center"><{$smarty.const._AM_WGXPIWIK_PERM_WEIGHT}></th>
                <th class="center width5"><{$smarty.const._AM_WGXPIWIK_FORM_ACTION}></th>
            </tr>
        </thead>
        <{if $perms_count}>
        <tbody>
            <{foreach item=perm from=$perms_list}>
                <tr class="<{cycle values='odd, even'}>"><td class="center"><{$perm.id}></td>
                    <td class="center"><{$perm.group_name}></td>
                    <td class="center"><{$perm.piwik_userid}></td>
                    <td class="center"><{$perm.weight}></td>
                    <td class="center  width5">
                    <a href="perms.php?op=edit&amp;perm_id=<{$perm.id}>" title="<{$smarty.const._EDIT}>"><img src="<{xoModuleIcons16 edit.png}>" alt="perms" /></a>
                    </td>
                </tr>
            <{/foreach}>
        </tbody>
        <{/if}>
    </table>
    <div class="clear">&nbsp;</div>
    <{if $pagenav}>
        <div class="xo-pagenav floatright"><{$pagenav}></div><div class="clear spacer"></div>
    <{/if}>
<{/if}>
<{if $form}>
	<{$form}>
<{/if}>
<{if $error}>
	<div class="errorMsg"><strong><{$error}></strong></div>
<{/if}>
<br />
<!-- Footer -->
<{include file='db:wgxpiwik_admin_footer.tpl'}>
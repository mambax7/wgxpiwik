<!-- Header -->
<{include file='db:wgxpiwik_admin_header.tpl'}>

<table class="table table-bordered table-striped">
    <thead>
        <tr class="head">
            <th class="center" colspan="3"><{$smarty.const._AM_WGXPIWIK_PIWIK_INSTALLATION}></th>
        </tr>
    </thead>
    <tbody>
        <tr class="even">
            <td class="left"><{$smarty.const._AM_WGXPIWIK_PIWIK_VERSION}></td>
            <td class="left"><{$wgxpiwik_version}></td>
            <td class="center" colspan="3">
                <a href="<{$wgxpiwik_url}>/piwik/index.php" title="<{$smarty.const._AM_WGXPIWIK_PIWIK_GOTO}>" target="_blank" class="btn-wgxpiwik" ><{$smarty.const._AM_WGXPIWIK_PIWIK_GOTO}></a>
            </td>
        </tr>
    </tbody>
</table>
<br />

<table class="table table-bordered table-striped">
    <thead>
        <tr class="head">
            <th class="center" colspan="3"><{$smarty.const._AM_WGXPIWIK_PIWIK_CONFIG}></th>
        </tr>
    </thead>
    <tbody>
        <tr class="even">
            <td class="left"><{$smarty.const._AM_WGXPIWIK_PIWIK_CONFIG_FILE}></td>
            <td class="left"><{$wgxpiwik_config_file}></td>
            <td class="center">
                <img src="../assets/icons/16/ok.png" alt="check_config_img" title="check_config_img" />
            </td>
        </tr>
        <tr class="even">
            <td class="left"><{$smarty.const._AM_WGXPIWIK_PIWIK_CONFIG_DB}></td>
            <td class="left"><{$wgxpiwik_config_db}></td>
            <td class="center">
                <img src="../assets/icons/16/<{$wgxpiwik_config_db_img}>" alt="check_result_img" title="check_result_img" />
            </td>
        </tr>
        <tr class="even">
            <td class="left"><{$smarty.const._AM_WGXPIWIK_PIWIK_CONFIG_DBHOST}></td>
            <td class="left"><{$wgxpiwik_config_dbhost}></td>
            <td class="center">
                <img src="../assets/icons/16/<{$wgxpiwik_config_dbhost_img}>" alt="check_result_img" title="check_result_img" />
            </td>
        </tr>
        <tr class="even">
            <td class="left"><{$smarty.const._AM_WGXPIWIK_PIWIK_CONFIG_DBUSER}></td>
            <td class="left"><{$wgxpiwik_config_dbuser}></td>
            <td class="center">
                <img src="../assets/icons/16/<{$wgxpiwik_config_dbuser_img}>" alt="check_result_img" title="check_result_img" />
            </td>
        </tr>
        <tr class="even">
            <td class="left"><{$smarty.const._AM_WGXPIWIK_PIWIK_CONFIG_DBPREFIX}></td>
            <td class="left"><{$wgxpiwik_config_dbprefix}></td>
            <td class="center">
                <img src="../assets/icons/16/<{$wgxpiwik_config_dbprefix_img}>" alt="check_result_img" title="check_result_img" />
            </td>
        </tr>
    </tbody>
</table>
<br />

<table class="table table-bordered table-striped">
    <thead>
        <tr class="head">
            <th class="center" colspan="3"><{$smarty.const._AM_WGXPIWIK_BLOCK_SETTINGS}></th>
        </tr>
    </thead>
    <tbody>
        <tr class="even">
            <td class="left"><{$smarty.const._AM_WGXPIWIK_BLOCK_SETTINGS_ACTIVATED}></td>
            <td class="left">
                <img src="../assets/icons/<{$wgxpiwik_block_visible_img}>" alt="wgxpiwik_block_visible_img" title="wgxpiwik_block_visible_img" />
            </td>
            <td class="center" rowspan="3">
                <a href="<{$wgxpiwik_blocksetdefault_url}>" title="<{$smarty.const._AM_WGXPIWIK_BLOCKSETDEFAULT_GOTO}>" target="_self" class="btn-wgxpiwik" ><{$smarty.const._AM_WGXPIWIK_BLOCKSETDEFAULT_GOTO}></a><br/><br/>
                <a href="<{$wgxpiwik_blockset_url}>" title="<{$smarty.const._AM_WGXPIWIK_BLOCKSET_GOTO}>" target="_self" class="btn-wgxpiwik" ><{$smarty.const._AM_WGXPIWIK_BLOCKSET_GOTO}></a>
            </td>
        </tr>
        <tr class="even">
            <td class="left"><{$smarty.const._AM_WGXPIWIK_BLOCK_SETTINGS_HIDE}></td>
            <td class="left">
                <img src="../assets/icons/<{$wgxpiwik_block_title_img}>" alt="wgxpiwik_block_title_img" title="wgxpiwik_block_title_img" />
            </td>
        </tr>
        <tr class="even">
            <td class="left"><{$smarty.const._AM_WGXPIWIK_BLOCK_SETTINGS_ALLSITES}></td>
            <td class="left">
                <img src="../assets/icons/<{$wgxpiwik_block_allsites_img}>" alt="wgxpiwik_block_allsites_img" title="wgxpiwik_block_allsites_img" />
            </td>
        </tr>
    </tbody>
</table>
<br />

<table class="table table-bordered table-striped">
    <thead>
        <tr class="head">
            <th class="center" colspan="3"><{$smarty.const._AM_WGXPIWIK_MODULE_SETTINGS}></th>
        </tr>
    </thead>
    <tbody>
        <tr class="even">
            <td class="left"><{$smarty.const._AM_WGXPIWIK_PIWIK_TRACKERTYPE}></td>
            <td class="left"><{$wgxpiwik_tracker_type}></td>
            <td class="center" rowspan="3">
                <a href="<{$wgxpiwik_modset_url}>" title="<{$smarty.const._AM_WGXPIWIK_MODSET_GOTO}>" target="_self" class="btn-wgxpiwik" ><{$smarty.const._AM_WGXPIWIK_MODSET_GOTO}></a>
            </td>
        </tr>
        <tr class="even">
            <td class="left"><{$smarty.const._AM_WGXPIWIK_PIWIK_PERIOD}></td>
            <td class="left"><{$wgxpiwik_period}></td>
        </tr>
        <tr class="even">
            <td class="left"><{$smarty.const._AM_WGXPIWIK_PIWIK_DATE}></td>
            <td class="left"><{$wgxpiwik_date}></td>
        </tr>
    </tbody>
</table>

<!-- Footer -->
<{include file='db:wgxpiwik_admin_footer.tpl'}>
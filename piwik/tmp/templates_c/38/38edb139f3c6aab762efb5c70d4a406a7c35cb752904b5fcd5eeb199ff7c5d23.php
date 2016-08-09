<?php

/* @UsersManager/index.twig */
class __TwigTemplate_ac122a54414ec8dcae26ef5a7bade3b50a690293e21e0eea174e9e29a7e9d2b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@UsersManager/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'websiteAccessTable' => array($this, 'block_websiteAccessTable'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        ob_start();
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ManageAccess")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<h2 piwik-enriched-headline
    help-url=\"http://piwik.org/docs/manage-users/\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
<div id=\"sites\" class=\"usersManager\">
    <section class=\"sites_selector_container\">
        <p>";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_MainDescription")), "html", null, true);
        echo "</p>

        ";
        // line 13
        ob_start();
        // line 14
        echo "            <strong>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ApplyToAllWebsites")), "html", null, true);
        echo "</strong>
        ";
        $context["applyAllSitesText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "
        <div piwik-siteselector
             show-selected-site=\"true\"
             only-sites-with-admin-access=\"true\"
             class=\"sites_autocomplete\"
             siteid=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["idSiteSelected"]) ? $context["idSiteSelected"] : $this->getContext($context, "idSiteSelected")), "html", null, true);
        echo "\"
             sitename=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["defaultReportSiteName"]) ? $context["defaultReportSiteName"] : $this->getContext($context, "defaultReportSiteName")), "html", null, true);
        echo "\"
             all-sites-text=\"";
        // line 23
        echo (isset($context["applyAllSitesText"]) ? $context["applyAllSitesText"] : $this->getContext($context, "applyAllSitesText"));
        echo "\"
             all-sites-location=\"top\"
             id=\"usersManagerSiteSelect\"
             switch-site-on-select=\"false\"></div>
    </section>
</div>

";
        // line 30
        $this->displayBlock('websiteAccessTable', $context, $blocks);
        // line 242
        echo "
";
    }

    // line 30
    public function block_websiteAccessTable($context, array $blocks = array())
    {
        // line 31
        echo "
";
        // line 32
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@UsersManager/index.twig", 32);
        // line 33
        echo $context["ajax"]->geterrorDiv();
        echo "
";
        // line 34
        echo $context["ajax"]->getloadingDiv();
        echo "

<div class=\"entityContainer\" style=\"width:600px;margin-top:16px;\">
    ";
        // line 37
        if ((isset($context["anonymousHasViewAccess"]) ? $context["anonymousHasViewAccess"] : $this->getContext($context, "anonymousHasViewAccess"))) {
            // line 38
            echo "        <br/>
        <div class=\"alert alert-warning\">
            ";
            // line 40
            echo twig_escape_filter($this->env, twig_join_filter(array(0 => call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_AnonymousUserHasViewAccess", "'anonymous'", "'view'")), 1 => call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_AnonymousUserHasViewAccess2"))), " "), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 43
        echo "    <table class=\"entityTable dataTable\" id=\"access\" style=\"display:inline-table;width:550px;\">
        <thead>
        <tr>
            <th class='first'>";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_User")), "html", null, true);
        echo "</th>
            <th>";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
        echo "</th>
            <th>";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivNone")), "html", null, true);
        echo "</th>
            <th>";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivView")), "html", null, true);
        echo "</th>
            <th>";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivAdmin")), "html", null, true);
        echo "</th>
        </tr>
        </thead>

        <tbody>
        ";
        // line 55
        $context["accesValid"] = ('' === $tmp = "<img src='plugins/UsersManager/images/ok.png' class='accessGranted' />") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 56
        echo "        ";
        $context["accesInvalid"] = ('' === $tmp = "<img src='plugins/UsersManager/images/no-access.png' class='updateAccess' />") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 57
        echo "        ";
        ob_start();
        echo "<span title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ExceptionSuperUserAccess")), "html", null, true);
        echo "\">N/A</span>";
        $context["superUserAccess"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 58
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usersAccessByWebsite"]) ? $context["usersAccessByWebsite"] : $this->getContext($context, "usersAccessByWebsite")));
        foreach ($context['_seq'] as $context["login"] => $context["access"]) {
            // line 59
            echo "            ";
            if (((isset($context["userIsSuperUser"]) ? $context["userIsSuperUser"] : $this->getContext($context, "userIsSuperUser")) || ((isset($context["hasOnlyAdminAccess"]) ? $context["hasOnlyAdminAccess"] : $this->getContext($context, "hasOnlyAdminAccess")) && (($context["access"] != "noaccess") || ((isset($context["idSiteSelected"]) ? $context["idSiteSelected"] : $this->getContext($context, "idSiteSelected")) == "all"))))) {
                // line 60
                echo "            <tr>
                <td id='login'>";
                // line 61
                echo twig_escape_filter($this->env, $context["login"], "html", null, true);
                echo "</td>
                <td>";
                // line 62
                echo $this->getAttribute((isset($context["usersAliasByLogin"]) ? $context["usersAliasByLogin"] : $this->getContext($context, "usersAliasByLogin")), $context["login"], array(), "array");
                echo "</td>
                <td id='noaccess'>
                    ";
                // line 64
                if (twig_in_filter($context["login"], (isset($context["superUserLogins"]) ? $context["superUserLogins"] : $this->getContext($context, "superUserLogins")))) {
                    // line 65
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["superUserAccess"]) ? $context["superUserAccess"] : $this->getContext($context, "superUserAccess")), "html", null, true);
                    echo "
                    ";
                } elseif (((                // line 66
$context["access"] == "noaccess") && ((isset($context["idSiteSelected"]) ? $context["idSiteSelected"] : $this->getContext($context, "idSiteSelected")) != "all"))) {
                    // line 67
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["accesValid"]) ? $context["accesValid"] : $this->getContext($context, "accesValid")), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 69
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["accesInvalid"]) ? $context["accesInvalid"] : $this->getContext($context, "accesInvalid")), "html", null, true);
                    echo "
                    ";
                }
                // line 70
                echo "&nbsp;</td>
                <td id='view'>
                    ";
                // line 72
                if (twig_in_filter($context["login"], (isset($context["superUserLogins"]) ? $context["superUserLogins"] : $this->getContext($context, "superUserLogins")))) {
                    // line 73
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["superUserAccess"]) ? $context["superUserAccess"] : $this->getContext($context, "superUserAccess")), "html", null, true);
                    echo "
                    ";
                } elseif (((                // line 74
$context["access"] == "view") && ((isset($context["idSiteSelected"]) ? $context["idSiteSelected"] : $this->getContext($context, "idSiteSelected")) != "all"))) {
                    // line 75
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["accesValid"]) ? $context["accesValid"] : $this->getContext($context, "accesValid")), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 77
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["accesInvalid"]) ? $context["accesInvalid"] : $this->getContext($context, "accesInvalid")), "html", null, true);
                    echo "
                    ";
                }
                // line 78
                echo "&nbsp;</td>
                <td id='admin'>
                    ";
                // line 80
                if (twig_in_filter($context["login"], (isset($context["superUserLogins"]) ? $context["superUserLogins"] : $this->getContext($context, "superUserLogins")))) {
                    // line 81
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["superUserAccess"]) ? $context["superUserAccess"] : $this->getContext($context, "superUserAccess")), "html", null, true);
                    echo "
                    ";
                } elseif ((                // line 82
$context["login"] == "anonymous")) {
                    // line 83
                    echo "                        N/A
                    ";
                } else {
                    // line 85
                    echo "                        ";
                    if ((($context["access"] == "admin") && ((isset($context["idSiteSelected"]) ? $context["idSiteSelected"] : $this->getContext($context, "idSiteSelected")) != "all"))) {
                        echo twig_escape_filter($this->env, (isset($context["accesValid"]) ? $context["accesValid"] : $this->getContext($context, "accesValid")), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, (isset($context["accesInvalid"]) ? $context["accesInvalid"] : $this->getContext($context, "accesInvalid")), "html", null, true);
                    }
                    echo "&nbsp;
                    ";
                }
                // line 87
                echo "                </td>
            </tr>
            ";
            }
            // line 90
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['login'], $context['access'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "        </tbody>
    </table>
    <div id=\"accessUpdated\" style=\"vertical-align:top;\"></div>
</div>

";
        // line 96
        if ((isset($context["hasOnlyAdminAccess"]) ? $context["hasOnlyAdminAccess"] : $this->getContext($context, "hasOnlyAdminAccess"))) {
            // line 97
            echo "    <p>
        <button id=\"showGiveViewAccessForm\" class=\"add-user btn btn-lg btn-flat\">
            <span class=\"icon-add\"></span>
            ";
            // line 100
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_GiveViewAccessTitle", (("\"" . (isset($context["defaultReportSiteName"]) ? $context["defaultReportSiteName"] : $this->getContext($context, "defaultReportSiteName"))) . "\"")));
            echo "
        </button>
    </p>
    <form id=\"giveViewAccessForm\">
        <div class=\"form-group\">
            <input type=\"text\" name=\"user_invite\"
                   id=\"user_invite\"
                   placeholder=\"";
            // line 107
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_EnterUsernameOrEmail")), "html_attr");
            echo "\"
                   title=\"";
            // line 108
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_GiveViewAccessInstructions", (("'" . (isset($context["defaultReportSiteName"]) ? $context["defaultReportSiteName"] : $this->getContext($context, "defaultReportSiteName"))) . "'"))), "html_attr");
            echo "\">
        </div>

         <input class=\"btn\" type=\"button\" id=\"giveUserAccessToViewReports\" value=\"";
            // line 111
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_GiveViewAccess")), "html_attr");
            echo "\">
    </form>
    ";
            // line 113
            echo $context["ajax"]->geterrorDiv("ajaxErrorGiveViewAccess");
            echo "
    ";
            // line 114
            echo $context["ajax"]->getloadingDiv("ajaxLoadingGiveViewAccess");
            echo "
";
        }
        // line 116
        echo "
<div class=\"ui-confirm\" id=\"confirm\">
    <h2>";
        // line 118
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ChangeAllConfirm", "<span id='login'></span>"));
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
</div>

";
        // line 123
        if ((isset($context["userIsSuperUser"]) ? $context["userIsSuperUser"] : $this->getContext($context, "userIsSuperUser"))) {
            // line 124
            echo "    <div class=\"ui-confirm\" id=\"confirmUserRemove\">
        <h2></h2>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 126
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
            // line 127
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>
    </div>
    <div class=\"ui-confirm\" id=\"confirmPasswordChange\">
        <h2>";
            // line 130
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ChangePasswordConfirm")), "html", null, true);
            echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 131
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
            // line 132
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>
    </div>
    <br/>
    <h2>";
            // line 135
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_UsersManagement")), "html", null, true);
            echo "</h2>
    <p>";
            // line 136
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_UsersManagementMainDescription")), "html", null, true);
            echo "
        ";
            // line 137
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ThereAreCurrentlyNRegisteredUsers", (("<b>" . (isset($context["usersCount"]) ? $context["usersCount"] : $this->getContext($context, "usersCount"))) . "</b>")));
            echo "</p>
    ";
            // line 138
            $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@UsersManager/index.twig", 138);
            // line 139
            echo "    ";
            echo $context["ajax"]->geterrorDiv("ajaxErrorUsersManagement");
            echo "
    ";
            // line 140
            echo $context["ajax"]->getloadingDiv("ajaxLoadingUsersManagement");
            echo "
    <div class=\"user entityContainer\" style=\"margin-bottom:50px;\">
        <table class=\"entityTable dataTable\" id=\"users\">
            <thead>
            <tr>
                <th>";
            // line 145
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Username")), "html", null, true);
            echo "</th>
                <th>";
            // line 146
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Password")), "html", null, true);
            echo "</th>
                <th>";
            // line 147
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Email")), "html", null, true);
            echo "</th>
                <th>";
            // line 148
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
            echo "</th>
                <th>token_auth</th>
                ";
            // line 150
            if ((array_key_exists("showLastSeen", $context) && (isset($context["showLastSeen"]) ? $context["showLastSeen"] : $this->getContext($context, "showLastSeen")))) {
                // line 151
                echo "                <th>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_LastSeen")), "html", null, true);
                echo "</th>
                ";
            }
            // line 153
            echo "                <th>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit")), "html", null, true);
            echo "</th>
                <th>";
            // line 154
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
            echo "</th>
            </tr>
            </thead>

            <tbody>
            ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["i"] => $context["user"]) {
                // line 160
                echo "                ";
                if (($this->getAttribute($context["user"], "login", array()) != "anonymous")) {
                    // line 161
                    echo "                    <tr class=\"editable\" id=\"row";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">
                        <td id=\"userLogin\" class=\"editable\">";
                    // line 162
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "login", array()), "html", null, true);
                    echo "</td>
                        <td id=\"password\" class=\"editable\">-</td>
                        <td id=\"email\" class=\"editable\">";
                    // line 164
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                    echo "</td>
                        <td id=\"alias\" class=\"editable\">";
                    // line 165
                    echo $this->getAttribute($context["user"], "alias", array());
                    echo "</td>
                        <td id=\"token_auth\" class=\"token_auth\" data-token=\"";
                    // line 166
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "token_auth", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["user"], "token_auth", array()), 0, 8), "html", null, true);
                    echo "…</td>
                        ";
                    // line 167
                    if ($this->getAttribute($context["user"], "last_seen", array(), "any", true, true)) {
                        // line 168
                        echo "                        <td id=\"last_seen\">";
                        if (twig_test_empty($this->getAttribute($context["user"], "last_seen", array()))) {
                            echo "-";
                        } else {
                            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_TimeAgo", $this->getAttribute($context["user"], "last_seen", array())));
                        }
                        echo "</td>
                        ";
                    }
                    // line 170
                    echo "                        <td class=\"text-center\">
                            <button class=\"edituser btn btn-flat\" id=\"row";
                    // line 171
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit")), "html", null, true);
                    echo "\">
                                <span class=\"icon-edit\"></span>
                            </button>
                        </td>
                        <td class=\"text-center\">
                            <button class=\"deleteuser btn btn-flat\" id=\"row";
                    // line 176
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
                    echo "\">
                                <span class=\"icon-delete\"></span>
                            </button>
                        </td>
                    </tr>
                ";
                }
                // line 182
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "            </tbody>
        </table>
        <p>
            <button class=\"add-user btn btn-lg btn-flat\">
                <span class=\"icon-add\"></span>
                ";
            // line 188
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_AddUser")), "html", null, true);
            echo "
            </button>
        </p>
    </div>

    <h2 id=\"super_user_access\">";
            // line 193
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_SuperUserAccessManagement")), "html", null, true);
            echo "</h2>
    <p>";
            // line 194
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_SuperUserAccessManagementMainDescription")), "html", null, true);
            echo " <br/>
    ";
            // line 195
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_SuperUserAccessManagementGrantMore")), "html", null, true);
            echo "</p>

    ";
            // line 197
            echo $context["ajax"]->geterrorDiv("ajaxErrorSuperUsersManagement");
            echo "
    ";
            // line 198
            echo $context["ajax"]->getloadingDiv("ajaxLoadingSuperUsersManagement");
            echo "

    <table class=\"entityTable dataTable\" id=\"superUserAccess\" style=\"display:inline-table;width:400px;\">
        <thead>
        <tr>
            <th class='first'>";
            // line 203
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_User")), "html", null, true);
            echo "</th>
            <th>";
            // line 204
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
            echo "</th>
            <th>";
            // line 205
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_SuperUser")), "html", null, true);
            echo "</th>
        </tr>
        </thead>

        <tbody>
        ";
            // line 210
            if ((twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))) > 1)) {
                // line 211
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["usersAliasByLogin"]) ? $context["usersAliasByLogin"] : $this->getContext($context, "usersAliasByLogin")));
                foreach ($context['_seq'] as $context["login"] => $context["alias"]) {
                    if (($context["login"] != "anonymous")) {
                        // line 212
                        echo "                <tr>
                    <td id='login'>";
                        // line 213
                        echo twig_escape_filter($this->env, $context["login"], "html", null, true);
                        echo "</td>
                    <td>";
                        // line 214
                        echo $context["alias"];
                        echo "</td>
                    <td id='superuser' data-login=\"";
                        // line 215
                        echo twig_escape_filter($this->env, $context["login"], "html_attr");
                        echo "\">
                        <img src='plugins/UsersManager/images/ok.png' class='accessGranted' data-hasaccess=\"1\" ";
                        // line 216
                        if ( !twig_in_filter($context["login"], (isset($context["superUserLogins"]) ? $context["superUserLogins"] : $this->getContext($context, "superUserLogins")))) {
                            echo "style=\"display:none\"";
                        }
                        echo " />
                        <img src='plugins/UsersManager/images/no-access.png' class='updateAccess' data-hasaccess=\"0\" ";
                        // line 217
                        if (twig_in_filter($context["login"], (isset($context["superUserLogins"]) ? $context["superUserLogins"] : $this->getContext($context, "superUserLogins")))) {
                            echo "style=\"display:none\"";
                        }
                        echo " />
                        &nbsp;
                    </td>
                </tr>
            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['login'], $context['alias'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 222
                echo "        ";
            } else {
                // line 223
                echo "            <tr>
                <td colspan=\"3\">
                    ";
                // line 225
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_NoUsersExist")), "html", null, true);
                echo "
                </td>
            </tr>
        ";
            }
            // line 229
            echo "        </tbody>
    </table>

    <div id=\"superUserAccessUpdated\" style=\"vertical-align:top;\"></div>

    <div class=\"ui-confirm\" id=\"superUserAccessConfirm\">
        <h2> </h2>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 236
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
            // line 237
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>
    </div>

";
        }
    }

    public function getTemplateName()
    {
        return "@UsersManager/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  627 => 237,  623 => 236,  614 => 229,  607 => 225,  603 => 223,  600 => 222,  586 => 217,  580 => 216,  576 => 215,  572 => 214,  568 => 213,  565 => 212,  559 => 211,  557 => 210,  549 => 205,  545 => 204,  541 => 203,  533 => 198,  529 => 197,  524 => 195,  520 => 194,  516 => 193,  508 => 188,  501 => 183,  495 => 182,  484 => 176,  474 => 171,  471 => 170,  461 => 168,  459 => 167,  453 => 166,  449 => 165,  445 => 164,  440 => 162,  435 => 161,  432 => 160,  428 => 159,  420 => 154,  415 => 153,  409 => 151,  407 => 150,  402 => 148,  398 => 147,  394 => 146,  390 => 145,  382 => 140,  377 => 139,  375 => 138,  371 => 137,  367 => 136,  363 => 135,  357 => 132,  353 => 131,  349 => 130,  343 => 127,  339 => 126,  335 => 124,  333 => 123,  327 => 120,  323 => 119,  319 => 118,  315 => 116,  310 => 114,  306 => 113,  301 => 111,  295 => 108,  291 => 107,  281 => 100,  276 => 97,  274 => 96,  267 => 91,  261 => 90,  256 => 87,  246 => 85,  242 => 83,  240 => 82,  235 => 81,  233 => 80,  229 => 78,  223 => 77,  217 => 75,  215 => 74,  210 => 73,  208 => 72,  204 => 70,  198 => 69,  192 => 67,  190 => 66,  185 => 65,  183 => 64,  178 => 62,  174 => 61,  171 => 60,  168 => 59,  163 => 58,  156 => 57,  153 => 56,  151 => 55,  143 => 50,  139 => 49,  135 => 48,  131 => 47,  127 => 46,  122 => 43,  116 => 40,  112 => 38,  110 => 37,  104 => 34,  100 => 33,  98 => 32,  95 => 31,  92 => 30,  87 => 242,  85 => 30,  75 => 23,  71 => 22,  67 => 21,  60 => 16,  54 => 14,  52 => 13,  47 => 11,  41 => 8,  37 => 6,  34 => 5,  30 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'admin.twig' %}*/
/* */
/* {% set title %}{{ 'UsersManager_ManageAccess'|translate }}{% endset %}*/
/* */
/* {% block content %}*/
/* */
/* <h2 piwik-enriched-headline*/
/*     help-url="http://piwik.org/docs/manage-users/">{{ title }}</h2>*/
/* <div id="sites" class="usersManager">*/
/*     <section class="sites_selector_container">*/
/*         <p>{{ 'UsersManager_MainDescription'|translate }}</p>*/
/* */
/*         {% set applyAllSitesText %}*/
/*             <strong>{{ 'UsersManager_ApplyToAllWebsites'|translate }}</strong>*/
/*         {% endset %}*/
/* */
/*         <div piwik-siteselector*/
/*              show-selected-site="true"*/
/*              only-sites-with-admin-access="true"*/
/*              class="sites_autocomplete"*/
/*              siteid="{{ idSiteSelected }}"*/
/*              sitename="{{ defaultReportSiteName }}"*/
/*              all-sites-text="{{ applyAllSitesText|raw }}"*/
/*              all-sites-location="top"*/
/*              id="usersManagerSiteSelect"*/
/*              switch-site-on-select="false"></div>*/
/*     </section>*/
/* </div>*/
/* */
/* {% block websiteAccessTable %}*/
/* */
/* {% import 'ajaxMacros.twig' as ajax %}*/
/* {{ ajax.errorDiv }}*/
/* {{ ajax.loadingDiv }}*/
/* */
/* <div class="entityContainer" style="width:600px;margin-top:16px;">*/
/*     {% if anonymousHasViewAccess %}*/
/*         <br/>*/
/*         <div class="alert alert-warning">*/
/*             {{ ['UsersManager_AnonymousUserHasViewAccess'|translate("'anonymous'","'view'"), 'UsersManager_AnonymousUserHasViewAccess2'|translate]|join(' ') }}*/
/*         </div>*/
/*     {% endif %}*/
/*     <table class="entityTable dataTable" id="access" style="display:inline-table;width:550px;">*/
/*         <thead>*/
/*         <tr>*/
/*             <th class='first'>{{ 'UsersManager_User'|translate }}</th>*/
/*             <th>{{ 'UsersManager_Alias'|translate }}</th>*/
/*             <th>{{ 'UsersManager_PrivNone'|translate }}</th>*/
/*             <th>{{ 'UsersManager_PrivView'|translate }}</th>*/
/*             <th>{{ 'UsersManager_PrivAdmin'|translate }}</th>*/
/*         </tr>*/
/*         </thead>*/
/* */
/*         <tbody>*/
/*         {% set accesValid %}<img src='plugins/UsersManager/images/ok.png' class='accessGranted' />{% endset %}*/
/*         {% set accesInvalid %}<img src='plugins/UsersManager/images/no-access.png' class='updateAccess' />{% endset %}*/
/*         {% set superUserAccess %}<span title="{{ 'UsersManager_ExceptionSuperUserAccess'|translate }}">N/A</span>{% endset %}*/
/*         {% for login,access in usersAccessByWebsite %}*/
/*             {% if userIsSuperUser or (hasOnlyAdminAccess and (access!='noaccess' or idSiteSelected == 'all'))  %}*/
/*             <tr>*/
/*                 <td id='login'>{{ login }}</td>*/
/*                 <td>{{ usersAliasByLogin[login]|raw }}</td>*/
/*                 <td id='noaccess'>*/
/*                     {% if login in superUserLogins %}*/
/*                         {{ superUserAccess }}*/
/*                     {% elseif access=='noaccess' and idSiteSelected != 'all' %}*/
/*                         {{ accesValid }}*/
/*                     {% else %}*/
/*                         {{ accesInvalid }}*/
/*                     {% endif %}&nbsp;</td>*/
/*                 <td id='view'>*/
/*                     {% if login in superUserLogins %}*/
/*                         {{ superUserAccess }}*/
/*                     {% elseif access == 'view' and idSiteSelected != 'all' %}*/
/*                         {{ accesValid }}*/
/*                     {% else %}*/
/*                         {{ accesInvalid }}*/
/*                     {% endif %}&nbsp;</td>*/
/*                 <td id='admin'>*/
/*                     {% if login in superUserLogins %}*/
/*                         {{ superUserAccess }}*/
/*                     {% elseif login == 'anonymous' %}*/
/*                         N/A*/
/*                     {% else %}*/
/*                         {% if access == 'admin' and idSiteSelected != 'all' %}{{ accesValid }}{% else %}{{ accesInvalid }}{% endif %}&nbsp;*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     <div id="accessUpdated" style="vertical-align:top;"></div>*/
/* </div>*/
/* */
/* {% if hasOnlyAdminAccess %}*/
/*     <p>*/
/*         <button id="showGiveViewAccessForm" class="add-user btn btn-lg btn-flat">*/
/*             <span class="icon-add"></span>*/
/*             {{ 'UsersManager_GiveViewAccessTitle'|translate('"' ~ defaultReportSiteName ~ '"')|raw }}*/
/*         </button>*/
/*     </p>*/
/*     <form id="giveViewAccessForm">*/
/*         <div class="form-group">*/
/*             <input type="text" name="user_invite"*/
/*                    id="user_invite"*/
/*                    placeholder="{{ 'UsersManager_EnterUsernameOrEmail'|translate|e('html_attr') }}"*/
/*                    title="{{ 'UsersManager_GiveViewAccessInstructions'|translate("'" ~ defaultReportSiteName ~ "'")|e('html_attr') }}">*/
/*         </div>*/
/* */
/*          <input class="btn" type="button" id="giveUserAccessToViewReports" value="{{ 'UsersManager_GiveViewAccess'|translate|e('html_attr') }}">*/
/*     </form>*/
/*     {{ ajax.errorDiv('ajaxErrorGiveViewAccess') }}*/
/*     {{ ajax.loadingDiv('ajaxLoadingGiveViewAccess') }}*/
/* {% endif %}*/
/* */
/* <div class="ui-confirm" id="confirm">*/
/*     <h2>{{ 'UsersManager_ChangeAllConfirm'|translate("<span id='login'></span>")|raw }}</h2>*/
/*     <input role="yes" type="button" value="{{ 'General_Yes'|translate }}"/>*/
/*     <input role="no" type="button" value="{{ 'General_No'|translate }}"/>*/
/* </div>*/
/* */
/* {% if userIsSuperUser %}*/
/*     <div class="ui-confirm" id="confirmUserRemove">*/
/*         <h2></h2>*/
/*         <input role="yes" type="button" value="{{ 'General_Yes'|translate }}"/>*/
/*         <input role="no" type="button" value="{{ 'General_No'|translate }}"/>*/
/*     </div>*/
/*     <div class="ui-confirm" id="confirmPasswordChange">*/
/*         <h2>{{ 'UsersManager_ChangePasswordConfirm'|translate }}</h2>*/
/*         <input role="yes" type="button" value="{{ 'General_Yes'|translate }}"/>*/
/*         <input role="no" type="button" value="{{ 'General_No'|translate }}"/>*/
/*     </div>*/
/*     <br/>*/
/*     <h2>{{ 'UsersManager_UsersManagement'|translate }}</h2>*/
/*     <p>{{ 'UsersManager_UsersManagementMainDescription'|translate }}*/
/*         {{ 'UsersManager_ThereAreCurrentlyNRegisteredUsers'|translate("<b>"~usersCount~"</b>")|raw }}</p>*/
/*     {% import 'ajaxMacros.twig' as ajax %}*/
/*     {{ ajax.errorDiv('ajaxErrorUsersManagement') }}*/
/*     {{ ajax.loadingDiv('ajaxLoadingUsersManagement') }}*/
/*     <div class="user entityContainer" style="margin-bottom:50px;">*/
/*         <table class="entityTable dataTable" id="users">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>{{ 'General_Username'|translate }}</th>*/
/*                 <th>{{ 'General_Password'|translate }}</th>*/
/*                 <th>{{ 'UsersManager_Email'|translate }}</th>*/
/*                 <th>{{ 'UsersManager_Alias'|translate }}</th>*/
/*                 <th>token_auth</th>*/
/*                 {% if showLastSeen is defined and showLastSeen %}*/
/*                 <th>{{ 'UsersManager_LastSeen'|translate }}</th>*/
/*                 {% endif %}*/
/*                 <th>{{ 'General_Edit'|translate }}</th>*/
/*                 <th>{{ 'General_Delete'|translate }}</th>*/
/*             </tr>*/
/*             </thead>*/
/* */
/*             <tbody>*/
/*             {% for i,user in users %}*/
/*                 {% if user.login != 'anonymous' %}*/
/*                     <tr class="editable" id="row{{ i }}">*/
/*                         <td id="userLogin" class="editable">{{ user.login }}</td>*/
/*                         <td id="password" class="editable">-</td>*/
/*                         <td id="email" class="editable">{{ user.email }}</td>*/
/*                         <td id="alias" class="editable">{{ user.alias|raw }}</td>*/
/*                         <td id="token_auth" class="token_auth" data-token="{{ user.token_auth }}">{{ user.token_auth|slice(0, 8) }}…</td>*/
/*                         {% if user.last_seen is defined %}*/
/*                         <td id="last_seen">{% if user.last_seen is empty %}-{% else %}{{ 'General_TimeAgo'|translate(user.last_seen)|raw }}{% endif %}</td>*/
/*                         {% endif %}*/
/*                         <td class="text-center">*/
/*                             <button class="edituser btn btn-flat" id="row{{ i }}" title="{{ 'General_Edit'|translate }}">*/
/*                                 <span class="icon-edit"></span>*/
/*                             </button>*/
/*                         </td>*/
/*                         <td class="text-center">*/
/*                             <button class="deleteuser btn btn-flat" id="row{{ i }}" title="{{ 'General_Delete'|translate }}">*/
/*                                 <span class="icon-delete"></span>*/
/*                             </button>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*         <p>*/
/*             <button class="add-user btn btn-lg btn-flat">*/
/*                 <span class="icon-add"></span>*/
/*                 {{ 'UsersManager_AddUser'|translate }}*/
/*             </button>*/
/*         </p>*/
/*     </div>*/
/* */
/*     <h2 id="super_user_access">{{ 'UsersManager_SuperUserAccessManagement'|translate }}</h2>*/
/*     <p>{{ 'UsersManager_SuperUserAccessManagementMainDescription'|translate }} <br/>*/
/*     {{ 'UsersManager_SuperUserAccessManagementGrantMore'|translate }}</p>*/
/* */
/*     {{ ajax.errorDiv('ajaxErrorSuperUsersManagement') }}*/
/*     {{ ajax.loadingDiv('ajaxLoadingSuperUsersManagement') }}*/
/* */
/*     <table class="entityTable dataTable" id="superUserAccess" style="display:inline-table;width:400px;">*/
/*         <thead>*/
/*         <tr>*/
/*             <th class='first'>{{ 'UsersManager_User'|translate }}</th>*/
/*             <th>{{ 'UsersManager_Alias'|translate }}</th>*/
/*             <th>{{ 'Installation_SuperUser'|translate }}</th>*/
/*         </tr>*/
/*         </thead>*/
/* */
/*         <tbody>*/
/*         {% if users|length > 1 %}*/
/*             {% for login,alias in usersAliasByLogin if login != 'anonymous' %}*/
/*                 <tr>*/
/*                     <td id='login'>{{ login }}</td>*/
/*                     <td>{{ alias|raw }}</td>*/
/*                     <td id='superuser' data-login="{{ login|e('html_attr') }}">*/
/*                         <img src='plugins/UsersManager/images/ok.png' class='accessGranted' data-hasaccess="1" {% if not (login in superUserLogins) %}style="display:none"{% endif %} />*/
/*                         <img src='plugins/UsersManager/images/no-access.png' class='updateAccess' data-hasaccess="0" {% if login in superUserLogins %}style="display:none"{% endif %} />*/
/*                         &nbsp;*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         {% else %}*/
/*             <tr>*/
/*                 <td colspan="3">*/
/*                     {{ 'UsersManager_NoUsersExist'|translate }}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endif %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <div id="superUserAccessUpdated" style="vertical-align:top;"></div>*/
/* */
/*     <div class="ui-confirm" id="superUserAccessConfirm">*/
/*         <h2> </h2>*/
/*         <input role="yes" type="button" value="{{ 'General_Yes'|translate }}"/>*/
/*         <input role="no" type="button" value="{{ 'General_No'|translate }}"/>*/
/*     </div>*/
/* */
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% endblock %}*/
/* */

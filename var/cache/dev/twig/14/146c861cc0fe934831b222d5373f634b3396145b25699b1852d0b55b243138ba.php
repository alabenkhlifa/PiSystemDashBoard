<?php

/* @User/Default/layout.html.twig */
class __TwigTemplate_d87df315357eda0b836d2181205d05930013868cd39a785bf4f6c8ffcfe750de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" >
<head>
    <meta charset=\"utf-8\" />

    <title>Edirassa | ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"Edirassa\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">


    <!--begin::Web font -->
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"), "html", null, true);
        echo "\"></script>
    <script>
        WebFont.load({
            google: {\"families\":[\"Poppins:300,400,500,600,700\",\"Roboto:300,400,500,600,700\"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/base/vendors.bundle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/demo/default/base/style.bundle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!--end::Base Styles -->

    <link rel=\"shortcut icon\" href=\"../../../../../web/assets/demo/default/media/img/logo/favicon.ico\" />
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-37564768-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<!-- end::Head -->


<!-- end::Body -->
<body  class=\"m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default\"  >



<!-- begin:: Page -->
<div class=\"m-grid m-grid--hor m-grid--root m-page\">


    <!-- BEGIN: Header -->
    <header id=\"m_header\" class=\"m-grid__item    m-header \"  m-minimize-offset=\"200\" m-minimize-mobile-offset=\"200\" >
        <div class=\"m-container m-container--fluid m-container--full-height\">
            <div class=\"m-stack m-stack--ver m-stack--desktop\">
                <!-- BEGIN: Brand -->
                <div class=\"m-stack__item m-brand  m-brand--skin-dark \">
                    <div class=\"m-stack m-stack--ver m-stack--general\">
                        <div class=\"m-stack__item m-stack__item--middle m-brand__logo\">
                            <a href=\"index9bfb.html?page=index&amp;demo=default\" class=\"m-brand__logo-wrapper\">
                                <img alt=\"\" src=\"assets/demo/default/media/img/logo/logo_default_dark.png\"/>
                            </a>
                        </div>
                        <div class=\"m-stack__item m-stack__item--middle m-brand__tools\">

                            <!-- BEGIN: Left Aside Minimize Toggle -->
                            <a href=\"javascript:;\" id=\"m_aside_left_minimize_toggle\" class=\"m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block
\t\t\t\t\t \">
                                <span></span>
                            </a>
                            <!-- END -->

                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href=\"javascript:;\" id=\"m_aside_left_offcanvas_toggle\" class=\"m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block\">
                                <span></span>
                            </a>
                            <!-- END -->



                            <!-- BEGIN: Responsive Header Menu Toggler -->
                            <a id=\"m_aside_header_menu_mobile_toggle\" href=\"javascript:;\" class=\"m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block\">
                                <span></span>
                            </a>
                            <!-- END -->


                            <!-- BEGIN: Topbar Toggler -->
                            <a id=\"m_aside_header_topbar_mobile_toggle\" href=\"javascript:;\" class=\"m-brand__icon m--visible-tablet-and-mobile-inline-block\">
                                <i class=\"flaticon-more\"></i>
                            </a>
                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>
                <!-- END: Brand -->
                <div class=\"m-stack__item m-stack__item--fluid m-header-head\" id=\"m_header_nav\">
                    <!-- BEGIN: Horizontal Menu -->
                    <button class=\"m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark \" id=\"m_aside_header_menu_mobile_close_btn\"><i class=\"la la-close\"></i></button>
                    <!-- END: Horizontal Menu -->\t\t\t\t\t\t\t\t<!-- BEGIN: Topbar -->
                    <div id=\"m_header_topbar\" class=\"m-topbar  m-stack m-stack--ver m-stack--general\">


                        <div class=\"m-stack__item m-topbar__nav-wrapper\">
                            <ul class=\"m-topbar__nav m-nav m-nav--inline\">
                                <li class=\"
\tm-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light\tm-list-search m-list-search--skin-light\"
                                    m-dropdown-toggle=\"click\" id=\"m_quicksearch\" m-quicksearch-mode=\"dropdown\" m-dropdown-persistent=\"1\">

                                    <a href=\"#\" class=\"m-nav__link m-dropdown__toggle\">
                                        <span class=\"m-nav__link-icon\"><i class=\"flaticon-search-1\"></i></span>
                                    </a>
                                    <div class=\"m-dropdown__wrapper\">
                                        <span class=\"m-dropdown__arrow m-dropdown__arrow--center\"></span>
                                        <div class=\"m-dropdown__inner \">
                                            <div class=\"m-dropdown__header\">
                                                <form  class=\"m-list-search__form\">
                                                    <div class=\"m-list-search__form-wrapper\">
\t\t\t\t\t\t<span class=\"m-list-search__form-input-wrapper\">
\t\t\t\t\t\t\t<input id=\"m_quicksearch_input\" autocomplete=\"off\" type=\"text\" name=\"q\" class=\"m-list-search__form-input\" value=\"\" placeholder=\"Search...\">
\t\t\t\t\t\t</span>
                                                        <span class=\"m-list-search__form-icon-close\" id=\"m_quicksearch_close\">
\t\t\t\t\t\t\t<i class=\"la la-remove\"></i>
\t\t\t\t\t\t</span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class=\"m-dropdown__body\">
                                                <div class=\"m-dropdown__scrollable m-scrollable\" data-scrollable=\"true\" data-max-height=\"300\" data-mobile-max-height=\"200\">
                                                    <div class=\"m-dropdown__content\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center \tm-dropdown--mobile-full-width\" m-dropdown-toggle=\"click\" m-dropdown-persistent=\"1\">
                                    <a href=\"#\" class=\"m-nav__link m-dropdown__toggle\" id=\"m_topbar_notification_icon\">
                                        <span class=\"m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger\"></span>
                                        <span class=\"m-nav__link-icon\"><i class=\"flaticon-music-2\"></i></span>
                                    </a>
                                    <div class=\"m-dropdown__wrapper\">
                                        <span class=\"m-dropdown__arrow m-dropdown__arrow--center\"></span>
                                        <div class=\"m-dropdown__inner\">
                                            <div class=\"m-dropdown__header m--align-center\" style=\"background: url(assets/app/media/img/misc/notification_bg.jpg); background-size: cover;\">
                                                <span class=\"m-dropdown__header-title\">9 New</span>
                                                <span class=\"m-dropdown__header-subtitle\">User Notifications</span>
                                            </div>
                                            <div class=\"m-dropdown__body\">
                                                <div class=\"m-dropdown__content\">
                                                    <ul class=\"nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand\" role=\"tablist\">
                                                        <li class=\"nav-item m-tabs__item\">
                                                            <a class=\"nav-link m-tabs__link active\" data-toggle=\"tab\" href=\"#topbar_notifications_notifications\" role=\"tab\">
                                                                Alerts
                                                            </a>
                                                        </li>
                                                        <li class=\"nav-item m-tabs__item\">
                                                            <a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#topbar_notifications_events\" role=\"tab\">Events</a>
                                                        </li>
                                                        <li class=\"nav-item m-tabs__item\">
                                                            <a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#topbar_notifications_logs\" role=\"tab\">Logs</a>
                                                        </li>
                                                    </ul>
                                                    <div class=\"tab-content\">
                                                        <div class=\"tab-pane active\" id=\"topbar_notifications_notifications\" role=\"tabpanel\">
                                                            <div class=\"m-scrollable\" data-scrollable=\"true\" data-max-height=\"250\" data-mobile-max-height=\"200\">
                                                                <div class=\"m-list-timeline m-list-timeline--skin-light\">
                                                                    <div class=\"m-list-timeline__items\">
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge -m-list-timeline__badge--state-success\"></span>
                                                                            <span class=\"m-list-timeline__text\">12 new users registered</span>
                                                                            <span class=\"m-list-timeline__time\">Just now</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge\"></span>
                                                                            <span class=\"m-list-timeline__text\">System shutdown <span class=\"m-badge m-badge--success m-badge--wide\">pending</span></span>
                                                                            <span class=\"m-list-timeline__time\">14 mins</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge\"></span>
                                                                            <span class=\"m-list-timeline__text\">New invoice received</span>
                                                                            <span class=\"m-list-timeline__time\">20 mins</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge\"></span>
                                                                            <span class=\"m-list-timeline__text\">DB overloaded 80% <span class=\"m-badge m-badge--info m-badge--wide\">settled</span></span>
                                                                            <span class=\"m-list-timeline__time\">1 hr</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge\"></span>
                                                                            <span class=\"m-list-timeline__text\">System error - <a href=\"#\" class=\"m-link\">Check</a></span>
                                                                            <span class=\"m-list-timeline__time\">2 hrs</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item m-list-timeline__item--read\">
                                                                            <span class=\"m-list-timeline__badge\"></span>
                                                                            <span href=\"#\" class=\"m-list-timeline__text\">New order received <span class=\"m-badge m-badge--danger m-badge--wide\">urgent</span></span>
                                                                            <span class=\"m-list-timeline__time\">7 hrs</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item m-list-timeline__item--read\">
                                                                            <span class=\"m-list-timeline__badge\"></span>
                                                                            <span class=\"m-list-timeline__text\">Production server down</span>
                                                                            <span class=\"m-list-timeline__time\">3 hrs</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge\"></span>
                                                                            <span class=\"m-list-timeline__text\">Production server up</span>
                                                                            <span class=\"m-list-timeline__time\">5 hrs</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"tab-pane\" id=\"topbar_notifications_events\" role=\"tabpanel\">
                                                            <div class=\"m-scrollable\" data-scrollable=\"true\" data-max-height=\"250\" data-mobile-max-height=\"200\">
                                                                <div class=\"m-list-timeline m-list-timeline--skin-light\">
                                                                    <div class=\"m-list-timeline__items\">
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge m-list-timeline__badge--state1-success\"></span>
                                                                            <a href=\"#\" class=\"m-list-timeline__text\">New order received</a>
                                                                            <span class=\"m-list-timeline__time\">Just now</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge m-list-timeline__badge--state1-danger\"></span>
                                                                            <a href=\"#\" class=\"m-list-timeline__text\">New invoice received</a>
                                                                            <span class=\"m-list-timeline__time\">20 mins</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge m-list-timeline__badge--state1-success\"></span>
                                                                            <a href=\"#\" class=\"m-list-timeline__text\">Production server up</a>
                                                                            <span class=\"m-list-timeline__time\">5 hrs</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge m-list-timeline__badge--state1-info\"></span>
                                                                            <a href=\"#\" class=\"m-list-timeline__text\">New order received</a>
                                                                            <span class=\"m-list-timeline__time\">7 hrs</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge m-list-timeline__badge--state1-info\"></span>
                                                                            <a href=\"#\" class=\"m-list-timeline__text\">System shutdown</a>
                                                                            <span class=\"m-list-timeline__time\">11 mins</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge m-list-timeline__badge--state1-info\"></span>
                                                                            <a href=\"#\" class=\"m-list-timeline__text\">Production server down</a>
                                                                            <span class=\"m-list-timeline__time\">3 hrs</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"tab-pane\" id=\"topbar_notifications_logs\" role=\"tabpanel\">
                                                            <div class=\"m-stack m-stack--ver m-stack--general\" style=\"min-height: 180px;\">
                                                                <div class=\"m-stack__item m-stack__item--center m-stack__item--middle\">
                                                                    <span class=\"\">All caught up!<br>No new logs.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light\"  m-dropdown-toggle=\"click\">
                                    <a href=\"#\" class=\"m-nav__link m-dropdown__toggle\">
                                        <span class=\"m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide\"></span>
                                        <span class=\"m-nav__link-icon\"><i class=\"flaticon-share\"></i></span>
                                    </a>
                                    <div class=\"m-dropdown__wrapper\">
                                        <span class=\"m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust\"></span>
                                        <div class=\"m-dropdown__inner\">
                                            <div class=\"m-dropdown__header m--align-center\" style=\"background: url(assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;\">
                                                <span class=\"m-dropdown__header-title\">Quick Actions</span>
                                                <span class=\"m-dropdown__header-subtitle\">Shortcuts</span>
                                            </div>
                                            <div class=\"m-dropdown__body m-dropdown__body--paddingless\">
                                                <div class=\"m-dropdown__content\">
                                                    <div class=\"data\" data=\"false.html\" data-max-height=\"380\" data-mobile-max-height=\"200\">
                                                        <div class=\"m-nav-grid m-nav-grid--skin-light\">
                                                            <div class=\"m-nav-grid__row\">
                                                                <a href=\"#\" class=\"m-nav-grid__item\">
                                                                    <i class=\"m-nav-grid__icon flaticon-file\"></i>
                                                                    <span class=\"m-nav-grid__text\">Generate Report</span>
                                                                </a>
                                                                <a href=\"#\" class=\"m-nav-grid__item\">
                                                                    <i class=\"m-nav-grid__icon flaticon-time\"></i>
                                                                    <span class=\"m-nav-grid__text\">Add New Event</span>
                                                                </a>
                                                            </div>
                                                            <div class=\"m-nav-grid__row\">
                                                                <a href=\"#\" class=\"m-nav-grid__item\">
                                                                    <i class=\"m-nav-grid__icon flaticon-folder\"></i>
                                                                    <span class=\"m-nav-grid__text\">Create New Task</span>
                                                                </a>
                                                                <a href=\"#\" class=\"m-nav-grid__item\">
                                                                    <i class=\"m-nav-grid__icon flaticon-clipboard\"></i>
                                                                    <span class=\"m-nav-grid__text\">Completed Tasks</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light\" m-dropdown-toggle=\"click\">
                                    <a href=\"#\" class=\"m-nav__link m-dropdown__toggle\">
\t<span class=\"m-topbar__userpic\">
\t<img src=\"assets/app/media/img/users/user4.jpg\" class=\"m--img-rounded m--marginless m--img-centered\" alt=\"\"/>
\t</span>
                                        <span class=\"m-topbar__username m--hide\">Nick</span>
                                    </a>
                                    <div class=\"m-dropdown__wrapper\">
                                        <span class=\"m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust\"></span>
                                        <div class=\"m-dropdown__inner\">
                                            <div class=\"m-dropdown__header m--align-center\" style=\"background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;\">
                                                <div class=\"m-card-user m-card-user--skin-dark\">
                                                    <div class=\"m-card-user__pic\">
                                                        <img src=\"assets/app/media/img/users/user4.jpg\" class=\"m--img-rounded m--marginless\" alt=\"\"/>
                                                    </div>
                                                    <div class=\"m-card-user__details\">
                                                        <span class=\"m-card-user__name m--font-weight-500\">Mark Andre</span>
                                                        <a href=\"#\" class=\"m-card-user__email m--font-weight-300 m-link\">mark.andre@gmail.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"m-dropdown__body\">
                                                <div class=\"m-dropdown__content\">
                                                    <ul class=\"m-nav m-nav--skin-light\">
                                                        <li class=\"m-nav__section m--hide\">
                                                            <span class=\"m-nav__section-text\">Section</span>
                                                        </li>
                                                        <li class=\"m-nav__item\">
                                                            <a href=\"indexa80c.html?page=header/profile&amp;demo=default\" class=\"m-nav__link\">
                                                                <i class=\"m-nav__link-icon flaticon-profile-1\"></i>
                                                                <span class=\"m-nav__link-title\">
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-wrap\">
\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text\">My Profile</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-badge\"><span class=\"m-badge m-badge--success\">2</span></span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"m-nav__item\">
                                                            <a href=\"indexa80c.html?page=header/profile&amp;demo=default\" class=\"m-nav__link\">
                                                                <i class=\"m-nav__link-icon flaticon-share\"></i>
                                                                <span class=\"m-nav__link-text\">Activity</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"m-nav__item\">
                                                            <a href=\"indexa80c.html?page=header/profile&amp;demo=default\" class=\"m-nav__link\">
                                                                <i class=\"m-nav__link-icon flaticon-chat-1\"></i>
                                                                <span class=\"m-nav__link-text\">Messages</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"m-nav__separator m-nav__separator--fit\">
                                                        </li>
                                                        <li class=\"m-nav__item\">
                                                            <a href=\"indexa80c.html?page=header/profile&amp;demo=default\" class=\"m-nav__link\">
                                                                <i class=\"m-nav__link-icon flaticon-info\"></i>
                                                                <span class=\"m-nav__link-text\">FAQ</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"m-nav__item\">
                                                            <a href=\"indexa80c.html?page=header/profile&amp;demo=default\" class=\"m-nav__link\">
                                                                <i class=\"m-nav__link-icon flaticon-lifebuoy\"></i>
                                                                <span class=\"m-nav__link-text\">Support</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"m-nav__separator m-nav__separator--fit\">
                                                        </li>
                                                        <li class=\"m-nav__item\">
                                                            <a href=\"indexb101.html?page=snippets/pages/user/login-1&amp;demo=default\" class=\"btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder\">Logout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li id=\"m_quick_sidebar_toggle\" class=\"m-nav__item\">
                                    <a href=\"#\" class=\"m-nav__link m-dropdown__toggle\">
                                        <span class=\"m-nav__link-icon\"><i class=\"flaticon-grid-menu\"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: Topbar -->\t\t\t</div>
            </div>
        </div>
    </header>
    <!-- END: Header -->
    <!-- begin::Body -->
    <div class=\"m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body\">

        <!-- BEGIN: Left Aside -->
        <button class=\"m-aside-left-close  m-aside-left-close--skin-dark \" id=\"m_aside_left_close_btn\"><i class=\"la la-close\"></i></button>

        <div id=\"m_aside_left\" class=\"m-grid__item\tm-aside-left  m-aside-left--skin-dark \">
            <!-- BEGIN: Aside Menu -->
            <div
                    id=\"m_ver_menu\"
                    class=\"m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark \"
                    m-menu-vertical=\"1\"
                    m-menu-scrollable=\"0\" m-menu-dropdown-timeout=\"500\"
            >
                <ul class=\"m-menu__nav  m-menu__nav--dropdown-submenu-arrow \">
                    <li class=\"m-menu__item  m-menu__item--active\" aria-haspopup=\"true\" ><a  href=\"";
        // line 411
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edirassa_dashboard");
        echo "\" class=\"m-menu__link \"><i class=\"m-menu__link-icon flaticon-line-graph\"></i><span class=\"m-menu__link-title\">  <span class=\"m-menu__link-wrap\">      <span class=\"m-menu__link-text\">Dashboard</span></span></span></a></li>
                    <li class=\"m-menu__section\">
                        <h4 class=\"m-menu__section-text\">Tools</h4>
                        <i class=\"m-menu__section-icon flaticon-more-v3\"></i>
                    </li>
                    <li class=\"m-menu__item\" aria-haspopup=\"true\" >
                        <a href=\"";
        // line 417
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edirassa_remotecontrol");
        echo "\" class=\"m-menu__link\">
                            <i class=\"m-menu__link-icon flaticon-computer\"></i>
                            <span class=\"m-menu__link-text\">Remote Control</span>
                        </a>
                    </li>

                    <li class=\"m-menu__item\" aria-haspopup=\"true\" >
                        <a href=\"";
        // line 424
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edirassa_ftp");
        echo "\" class=\"m-menu__link\" target=\"_blank\">
                            <i class=\"m-menu__link-icon flaticon-download\"></i>
                            <span class=\"m-menu__link-text\">FTP</span>
                        </a>
                    </li>

                    <li class=\"m-menu__section\">
                        <h4 class=\"m-menu__section-text\">Apps</h4>
                        <i class=\"m-menu__section-icon flaticon-more-v3\"></i>
                    </li>
                    <li class=\"m-menu__item \" aria-haspopup=\"true\" >
                        <a  href=\"";
        // line 435
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edirassa_mail");
        echo "\" class=\"m-menu__link \">
                            <i class=\"m-menu__link-icon flaticon-multimedia-3\"></i><span class=\"m-menu__link-text\">Mail</span>
                        </a>
                    </li><li class=\"m-menu__section\">
                        <h4 class=\"m-menu__section-text\">Snippets</h4>
                        <i class=\"m-menu__section-icon flaticon-more-v3\"></i>
                    </li><li class=\"m-menu__item  m-menu__item--submenu\" aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\"><a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\"><i class=\"m-menu__link-icon flaticon-interface-9\"></i><span class=\"m-menu__link-text\">Pricing Tables</span><i class=\"m-menu__ver-arrow la la-angle-right\"></i></a><div class=\"m-menu__submenu \"><span class=\"m-menu__arrow\"></span><ul class=\"m-menu__subnav\"><li class=\"m-menu__item  m-menu__item--parent\" aria-haspopup=\"true\" ><span class=\"m-menu__link\"><span class=\"m-menu__link-text\">Pricing Tables</span></span></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a  href=\"indexc13e.html?page=snippets/general/pricing-tables/pricing-table-1&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Pricing Tables v1</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a  href=\"indexc559.html?page=snippets/general/pricing-tables/pricing-table-2&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Pricing Tables v2</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a  href=\"index58f3.html?page=snippets/general/pricing-tables/pricing-table-3&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Pricing Tables v3</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a  href=\"indexb425.html?page=snippets/general/pricing-tables/pricing-table-4&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Pricing Tables v4</span></a></li></ul></div></li><li class=\"m-menu__item  m-menu__item--submenu\" aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\"><a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\"><i class=\"m-menu__link-icon flaticon-piggy-bank\"></i><span class=\"m-menu__link-text\">Invoices</span><i class=\"m-menu__ver-arrow la la-angle-right\"></i></a><div class=\"m-menu__submenu \"><span class=\"m-menu__arrow\"></span><ul class=\"m-menu__subnav\"><li class=\"m-menu__item  m-menu__item--parent\" aria-haspopup=\"true\" ><span class=\"m-menu__link\"><span class=\"m-menu__link-text\">Invoices</span></span></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a  href=\"indexb44a.html?page=snippets/invoices/invoice-1&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Invoice v1</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a  href=\"index9535.html?page=snippets/invoices/invoice-2&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Invoice v2</span></a></li></ul></div></li><li class=\"m-menu__item  m-menu__item--submenu\" aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\"><a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\"><i class=\"m-menu__link-icon flaticon-exclamation\"></i><span class=\"m-menu__link-text\">FAQS</span><i class=\"m-menu__ver-arrow la la-angle-right\"></i></a><div class=\"m-menu__submenu \"><span class=\"m-menu__arrow\"></span><ul class=\"m-menu__subnav\"><li class=\"m-menu__item  m-menu__item--parent\" aria-haspopup=\"true\" ><span class=\"m-menu__link\"><span class=\"m-menu__link-text\">FAQS</span></span></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a  href=\"indexf37a.html?page=snippets/faq/faq-1&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">FAQ v1</span></a></li></ul></div></li><li class=\"m-menu__item  m-menu__item--submenu\" aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\"><a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\"><i class=\"m-menu__link-icon flaticon-suitcase\"></i><span class=\"m-menu__link-text\">Custom Pages</span><i class=\"m-menu__ver-arrow la la-angle-right\"></i></a><div class=\"m-menu__submenu \"><span class=\"m-menu__arrow\"></span><ul class=\"m-menu__subnav\"><li class=\"m-menu__item  m-menu__item--parent\" aria-haspopup=\"true\" ><span class=\"m-menu__link\"><span class=\"m-menu__link-text\">Custom Pages</span></span></li><li class=\"m-menu__item  m-menu__item--submenu\" aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\"><a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">User Pages</span><i class=\"m-menu__ver-arrow la la-angle-right\"></i></a><div class=\"m-menu__submenu \"><span class=\"m-menu__arrow\"></span><ul class=\"m-menu__subnav\"><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"indexb101.html?page=snippets/pages/user/login-1&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Login - 1</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"index9f82.html?page=snippets/pages/user/login-2&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Login - 2</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"indexdc3f.html?page=snippets/pages/user/login-3&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Login - 3</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"index88c1.html?page=snippets/pages/user/login-4&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Login - 4</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"index19fc.html?page=snippets/pages/user/login-5&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Login - 5</span></a></li></ul></div></li><li class=\"m-menu__item  m-menu__item--submenu\" aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\"><a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Error Pages</span><i class=\"m-menu__ver-arrow la la-angle-right\"></i></a><div class=\"m-menu__submenu \"><span class=\"m-menu__arrow\"></span><ul class=\"m-menu__subnav\"><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"indexeae8.html?page=snippets/pages/errors/error-1&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Error 1</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"index6346.html?page=snippets/pages/errors/error-2&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Error 2</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"index4fef.html?page=snippets/pages/errors/error-3&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Error 3</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"indexd268.html?page=snippets/pages/errors/error-4&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Error 4</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"index710c.html?page=snippets/pages/errors/error-5&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Error 5</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"index3860.html?page=snippets/pages/errors/error-6&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Error 6</span></a></li></ul></div></li></ul></div></li>\t\t</ul>
            </div>
            <!-- END: Aside Menu -->
        </div>
        <!-- END: Left Aside -->
        <div class=\"m-grid__item m-grid__item--fluid m-wrapper\">
            <!-- begin:: Body -->
            ";
        // line 448
        $this->displayBlock('body', $context, $blocks);
        // line 450
        echo "        </div>


    </div>
    <!-- end:: Body -->


    <!-- begin::Footer -->
    <footer class=\"m-grid__item\t\tm-footer \">
        <div class=\"m-container m-container--fluid m-container--full-height m-page__container\">
            <div class=\"m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop\">
                <div class=\"m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last\">
\t\t\t\t<span class=\"m-footer__copyright\">
\t\t\t\t\t2017 &copy; Metronic theme by <a href=\"https://keenthemes.com/\" class=\"m-link\">Keenthemes</a>
\t\t\t\t</span>
                </div>
                <div class=\"m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first\">
                    <ul class=\"m-footer__nav m-nav m-nav--inline m--pull-right\">
                        <li class=\"m-nav__item\">
                            <a href=\"#\" class=\"m-nav__link\">
                                <span class=\"m-nav__link-text\">About</span>
                            </a>
                        </li>
                        <li class=\"m-nav__item\">
                            <a href=\"#\"  class=\"m-nav__link\">
                                <span class=\"m-nav__link-text\">Privacy</span>
                            </a>
                        </li>
                        <li class=\"m-nav__item\">
                            <a href=\"#\" class=\"m-nav__link\">
                                <span class=\"m-nav__link-text\">T&C</span>
                            </a>
                        </li>
                        <li class=\"m-nav__item\">
                            <a href=\"#\" class=\"m-nav__link\">
                                <span class=\"m-nav__link-text\">Purchase</span>
                            </a>
                        </li>
                        <li class=\"m-nav__item m-nav__item\">
                            <a href=\"#\" class=\"m-nav__link\" data-toggle=\"m-tooltip\" title=\"Support Center\" data-placement=\"left\">
                                <i class=\"m-nav__link-icon flaticon-info m--icon-font-size-lg3\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end::Footer -->


</div>
<!-- end:: Page -->

<!-- begin::Quick Sidebar -->
<div id=\"m_quick_sidebar\" class=\"m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light\">
    <div class=\"m-quick-sidebar__content m--hide\">
        <span id=\"m_quick_sidebar_close\" class=\"m-quick-sidebar__close\"><i class=\"la la-close\"></i></span>
        <ul id=\"m_quick_sidebar_tabs\" class=\"nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand\" role=\"tablist\">
            <li class=\"nav-item m-tabs__item\">
                <a class=\"nav-link m-tabs__link active\" data-toggle=\"tab\" href=\"#m_quick_sidebar_tabs_messenger\" role=\"tab\">Messages</a>
            </li>
            <li class=\"nav-item m-tabs__item\">
                <a class=\"nav-link m-tabs__link\" \t\tdata-toggle=\"tab\" href=\"#m_quick_sidebar_tabs_settings\" role=\"tab\">Settings</a>
            </li>
            <li class=\"nav-item m-tabs__item\">
                <a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#m_quick_sidebar_tabs_logs\" role=\"tab\">Logs</a>
            </li>
        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane active m-scrollable\" id=\"m_quick_sidebar_tabs_messenger\" role=\"tabpanel\">
                <div class=\"m-messenger m-messenger--message-arrow m-messenger--skin-light\">
                    <div class=\"m-messenger__messages\">
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--in\">
                                <div class=\"m-messenger__message-pic\">
                                    <img src=\"assets/app/media/img/users/user3.jpg\" alt=\"\"/>
                                </div>
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-username\">
                                            Megan wrote
                                        </div>
                                        <div class=\"m-messenger__message-text\">
                                            Hi Bob. What time will be the meeting ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--out\">
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-text\">
                                            Hi Megan. It's at 2.30PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--in\">
                                <div class=\"m-messenger__message-pic\">
                                    <img src=\"assets/app/media/img/users/user3.jpg\" alt=\"\"/>
                                </div>
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-username\">
                                            Megan wrote
                                        </div>
                                        <div class=\"m-messenger__message-text\">
                                            Will the development team be joining ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--out\">
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-text\">
                                            Yes sure. I invited them as well
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-messenger__datetime\">2:30PM</div>
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--in\">
                                <div class=\"m-messenger__message-pic\">
                                    <img src=\"assets/app/media/img/users/user3.jpg\"  alt=\"\"/>
                                </div>
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-username\">
                                            Megan wrote
                                        </div>
                                        <div class=\"m-messenger__message-text\">
                                            Noted. For the Coca-Cola Mobile App project as well ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--out\">
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-text\">
                                            Yes, sure.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--out\">
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-text\">
                                            Please also prepare the quotation for the Loop CRM project as well.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-messenger__datetime\">3:15PM</div>
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--in\">
                                <div class=\"m-messenger__message-no-pic m--bg-fill-danger\">
                                    <span>M</span>
                                </div>
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-username\">
                                            Megan wrote
                                        </div>
                                        <div class=\"m-messenger__message-text\">
                                            Noted. I will prepare it.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--out\">
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-text\">
                                            Thanks Megan. I will see you later.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--in\">
                                <div class=\"m-messenger__message-pic\">
                                    <img src=\"assets/app/media/img/users/user3.jpg\"  alt=\"\"/>
                                </div>
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-username\">
                                            Megan wrote
                                        </div>
                                        <div class=\"m-messenger__message-text\">
                                            Sure. See you in the meeting soon.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"m-messenger__seperator\"></div>

                    <div class=\"m-messenger__form\">
                        <div class=\"m-messenger__form-controls\">
                            <input type=\"text\" name=\"\" placeholder=\"Type here...\" class=\"m-messenger__form-input\">
                        </div>
                        <div class=\"m-messenger__form-tools\">
                            <a href=\"#\" class=\"m-messenger__form-attachment\">
                                <i class=\"la la-paperclip\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"tab-pane  m-scrollable\" id=\"m_quick_sidebar_tabs_settings\" role=\"tabpanel\">
                <div class=\"m-list-settings\">
                    <div class=\"m-list-settings__group\">
                        <div class=\"m-list-settings__heading\">General Settings</div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">Email Notifications</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">Site Tracking</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">SMS Alerts</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">Backup Storage</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">Audit Logs</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                    </div>
                    <div class=\"m-list-settings__group\">
                        <div class=\"m-list-settings__heading\">System Settings</div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">System Logs</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">Error Reporting</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">Applications Logs</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">Backup Servers</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">Audit Logs</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"tab-pane  m-scrollable\" id=\"m_quick_sidebar_tabs_logs\" role=\"tabpanel\">
                <div class=\"m-list-timeline\">
                    <div class=\"m-list-timeline__group\">
                        <div class=\"m-list-timeline__heading\">
                            System Logs
                        </div>
                        <div class=\"m-list-timeline__items\">
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">12 new users registered <span class=\"m-badge m-badge--warning m-badge--wide\">important</span></a>
                                <span class=\"m-list-timeline__time\">Just now</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">System shutdown</a>
                                <span class=\"m-list-timeline__time\">11 mins</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-danger\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">New invoice received</a>
                                <span class=\"m-list-timeline__time\">20 mins</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-warning\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">Database overloaded 89% <span class=\"m-badge m-badge--success m-badge--wide\">resolved</span></a>
                                <span class=\"m-list-timeline__time\">1 hr</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">System error</a>
                                <span class=\"m-list-timeline__time\">2 hrs</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">Production server down <span class=\"m-badge m-badge--danger m-badge--wide\">pending</span></a>
                                <span class=\"m-list-timeline__time\">3 hrs</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">Production server up</a>
                                <span class=\"m-list-timeline__time\">5 hrs</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"m-list-timeline__group\">
                        <div class=\"m-list-timeline__heading\">
                            Applications Logs
                        </div>
                        <div class=\"m-list-timeline__items\">
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">New order received <span class=\"m-badge m-badge--info m-badge--wide\">urgent</span></a>
                                <span class=\"m-list-timeline__time\">7 hrs</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">12 new users registered</a>
                                <span class=\"m-list-timeline__time\">Just now</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">System shutdown</a>
                                <span class=\"m-list-timeline__time\">11 mins</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-danger\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">New invoices received</a>
                                <span class=\"m-list-timeline__time\">20 mins</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-warning\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">Database overloaded 89%</a>
                                <span class=\"m-list-timeline__time\">1 hr</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">System error <span class=\"m-badge m-badge--info m-badge--wide\">pending</span></a>
                                <span class=\"m-list-timeline__time\">2 hrs</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">Production server down</a>
                                <span class=\"m-list-timeline__time\">3 hrs</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"m-list-timeline__group\">
                        <div class=\"m-list-timeline__heading\">
                            Server Logs
                        </div>
                        <div class=\"m-list-timeline__items\">
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">Production server up</a>
                                <span class=\"m-list-timeline__time\">5 hrs</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">New order received</a>
                                <span class=\"m-list-timeline__time\">7 hrs</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">12 new users registered</a>
                                <span class=\"m-list-timeline__time\">Just now</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">System shutdown</a>
                                <span class=\"m-list-timeline__time\">11 mins</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-danger\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">New invoice received</a>
                                <span class=\"m-list-timeline__time\">20 mins</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-warning\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">Database overloaded 89%</a>
                                <span class=\"m-list-timeline__time\">1 hr</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">System error</a>
                                <span class=\"m-list-timeline__time\">2 hrs</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">Production server down</a>
                                <span class=\"m-list-timeline__time\">3 hrs</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">Production server up</a>
                                <span class=\"m-list-timeline__time\">5 hrs</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">New order received</a>
                                <span class=\"m-list-timeline__time\">1117 hrs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end::Quick Sidebar -->
<!-- begin::Scroll Top -->
<div id=\"m_scroll_top\" class=\"m-scroll-top\">
    <i class=\"la la-arrow-up\"></i>
</div>
<!-- end::Scroll Top -->\t\t    <!-- begin::Quick Nav -->
<ul class=\"m-nav-sticky\" style=\"margin-top: 30px;\">
    <li class=\"m-nav-sticky__item\" data-toggle=\"m-tooltip\" title=\"Layout Builder\" data-placement=\"left\">
        <a href=\"index2b54.html?page=builder&amp;demo=default\"><i class=\"la la-cog\"></i></a>
    </li>
    <!--
\t<li class=\"m-nav-sticky__item\" data-toggle=\"m-tooltip\" title=\"Showcase\" data-placement=\"left\">
\t\t<a href=\"\"><i class=\"la la-eye\"></i></a>
\t</li>
\t<li class=\"m-nav-sticky__item\" data-toggle=\"m-tooltip\" title=\"Pre-sale Chat\" data-placement=\"left\">
\t\t<a href=\"\" ><i class=\"la la-comments-o\"></i></a>
\t</li>
\t-->
    <li class=\"m-nav-sticky__item\" data-toggle=\"m-tooltip\" title=\"Purchase\" data-placement=\"left\">
        <a href=\"https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes\" target=\"_blank\"><i class=\"la la-cart-arrow-down\"></i></a>
    </li>
    <li class=\"m-nav-sticky__item\" data-toggle=\"m-tooltip\" title=\"Documentation\" data-placement=\"left\">
        <a href=\"https://keenthemes.com/metronic/documentation.html\" target=\"_blank\"><i class=\"la la-code-fork\"></i></a>
    </li>
    <li class=\"m-nav-sticky__item\" data-toggle=\"m-tooltip\" title=\"Support\" data-placement=\"left\">
        <a href=\"https://keenthemes.com/forums/forum/support/metronic5/\" target=\"_blank\"><i class=\"la la-life-ring\"></i></a>
    </li>
</ul>
<!-- begin::Quick Nav -->
<!--begin::Base Scripts -->
<script src=\"";
        // line 991
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/base/vendors.bundle.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 992
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/demo/default/base/scripts.bundle.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!--end::Base Scripts -->
<!--begin::Page Snippets -->
<script src=\"";
        // line 995
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/app/js/dashboard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!--end::Page Snippets -->
";
        // line 997
        $this->displayBlock('scripts', $context, $blocks);
        // line 999
        echo "</body>
<!-- end::Body -->

<!-- Mirrored from keenthemes.com/metronic/preview/?page=index&demo=default by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Apr 2018 12:11:18 GMT -->
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 448
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 449
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 997
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1096 => 997,  1089 => 449,  1083 => 448,  1071 => 6,  1060 => 999,  1058 => 997,  1053 => 995,  1047 => 992,  1043 => 991,  500 => 450,  498 => 448,  482 => 435,  468 => 424,  458 => 417,  449 => 411,  60 => 25,  56 => 24,  43 => 14,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\" >
<head>
    <meta charset=\"utf-8\" />

    <title>Edirassa | {% block title %}Dashboard {% endblock title %}</title>
    <meta name=\"description\" content=\"Edirassa\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">


    <!--begin::Web font -->
    <script src=\"{{ asset('assets/ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js') }}\"></script>
    <script>
        WebFont.load({
            google: {\"families\":[\"Poppins:300,400,500,600,700\",\"Roboto:300,400,500,600,700\"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <link href=\"{{ asset('assets/vendors/base/vendors.bundle.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/demo/default/base/style.bundle.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!--end::Base Styles -->

    <link rel=\"shortcut icon\" href=\"../../../../../web/assets/demo/default/media/img/logo/favicon.ico\" />
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-37564768-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<!-- end::Head -->


<!-- end::Body -->
<body  class=\"m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default\"  >



<!-- begin:: Page -->
<div class=\"m-grid m-grid--hor m-grid--root m-page\">


    <!-- BEGIN: Header -->
    <header id=\"m_header\" class=\"m-grid__item    m-header \"  m-minimize-offset=\"200\" m-minimize-mobile-offset=\"200\" >
        <div class=\"m-container m-container--fluid m-container--full-height\">
            <div class=\"m-stack m-stack--ver m-stack--desktop\">
                <!-- BEGIN: Brand -->
                <div class=\"m-stack__item m-brand  m-brand--skin-dark \">
                    <div class=\"m-stack m-stack--ver m-stack--general\">
                        <div class=\"m-stack__item m-stack__item--middle m-brand__logo\">
                            <a href=\"index9bfb.html?page=index&amp;demo=default\" class=\"m-brand__logo-wrapper\">
                                <img alt=\"\" src=\"assets/demo/default/media/img/logo/logo_default_dark.png\"/>
                            </a>
                        </div>
                        <div class=\"m-stack__item m-stack__item--middle m-brand__tools\">

                            <!-- BEGIN: Left Aside Minimize Toggle -->
                            <a href=\"javascript:;\" id=\"m_aside_left_minimize_toggle\" class=\"m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block
\t\t\t\t\t \">
                                <span></span>
                            </a>
                            <!-- END -->

                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href=\"javascript:;\" id=\"m_aside_left_offcanvas_toggle\" class=\"m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block\">
                                <span></span>
                            </a>
                            <!-- END -->



                            <!-- BEGIN: Responsive Header Menu Toggler -->
                            <a id=\"m_aside_header_menu_mobile_toggle\" href=\"javascript:;\" class=\"m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block\">
                                <span></span>
                            </a>
                            <!-- END -->


                            <!-- BEGIN: Topbar Toggler -->
                            <a id=\"m_aside_header_topbar_mobile_toggle\" href=\"javascript:;\" class=\"m-brand__icon m--visible-tablet-and-mobile-inline-block\">
                                <i class=\"flaticon-more\"></i>
                            </a>
                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>
                <!-- END: Brand -->
                <div class=\"m-stack__item m-stack__item--fluid m-header-head\" id=\"m_header_nav\">
                    <!-- BEGIN: Horizontal Menu -->
                    <button class=\"m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark \" id=\"m_aside_header_menu_mobile_close_btn\"><i class=\"la la-close\"></i></button>
                    <!-- END: Horizontal Menu -->\t\t\t\t\t\t\t\t<!-- BEGIN: Topbar -->
                    <div id=\"m_header_topbar\" class=\"m-topbar  m-stack m-stack--ver m-stack--general\">


                        <div class=\"m-stack__item m-topbar__nav-wrapper\">
                            <ul class=\"m-topbar__nav m-nav m-nav--inline\">
                                <li class=\"
\tm-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light\tm-list-search m-list-search--skin-light\"
                                    m-dropdown-toggle=\"click\" id=\"m_quicksearch\" m-quicksearch-mode=\"dropdown\" m-dropdown-persistent=\"1\">

                                    <a href=\"#\" class=\"m-nav__link m-dropdown__toggle\">
                                        <span class=\"m-nav__link-icon\"><i class=\"flaticon-search-1\"></i></span>
                                    </a>
                                    <div class=\"m-dropdown__wrapper\">
                                        <span class=\"m-dropdown__arrow m-dropdown__arrow--center\"></span>
                                        <div class=\"m-dropdown__inner \">
                                            <div class=\"m-dropdown__header\">
                                                <form  class=\"m-list-search__form\">
                                                    <div class=\"m-list-search__form-wrapper\">
\t\t\t\t\t\t<span class=\"m-list-search__form-input-wrapper\">
\t\t\t\t\t\t\t<input id=\"m_quicksearch_input\" autocomplete=\"off\" type=\"text\" name=\"q\" class=\"m-list-search__form-input\" value=\"\" placeholder=\"Search...\">
\t\t\t\t\t\t</span>
                                                        <span class=\"m-list-search__form-icon-close\" id=\"m_quicksearch_close\">
\t\t\t\t\t\t\t<i class=\"la la-remove\"></i>
\t\t\t\t\t\t</span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class=\"m-dropdown__body\">
                                                <div class=\"m-dropdown__scrollable m-scrollable\" data-scrollable=\"true\" data-max-height=\"300\" data-mobile-max-height=\"200\">
                                                    <div class=\"m-dropdown__content\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center \tm-dropdown--mobile-full-width\" m-dropdown-toggle=\"click\" m-dropdown-persistent=\"1\">
                                    <a href=\"#\" class=\"m-nav__link m-dropdown__toggle\" id=\"m_topbar_notification_icon\">
                                        <span class=\"m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger\"></span>
                                        <span class=\"m-nav__link-icon\"><i class=\"flaticon-music-2\"></i></span>
                                    </a>
                                    <div class=\"m-dropdown__wrapper\">
                                        <span class=\"m-dropdown__arrow m-dropdown__arrow--center\"></span>
                                        <div class=\"m-dropdown__inner\">
                                            <div class=\"m-dropdown__header m--align-center\" style=\"background: url(assets/app/media/img/misc/notification_bg.jpg); background-size: cover;\">
                                                <span class=\"m-dropdown__header-title\">9 New</span>
                                                <span class=\"m-dropdown__header-subtitle\">User Notifications</span>
                                            </div>
                                            <div class=\"m-dropdown__body\">
                                                <div class=\"m-dropdown__content\">
                                                    <ul class=\"nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand\" role=\"tablist\">
                                                        <li class=\"nav-item m-tabs__item\">
                                                            <a class=\"nav-link m-tabs__link active\" data-toggle=\"tab\" href=\"#topbar_notifications_notifications\" role=\"tab\">
                                                                Alerts
                                                            </a>
                                                        </li>
                                                        <li class=\"nav-item m-tabs__item\">
                                                            <a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#topbar_notifications_events\" role=\"tab\">Events</a>
                                                        </li>
                                                        <li class=\"nav-item m-tabs__item\">
                                                            <a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#topbar_notifications_logs\" role=\"tab\">Logs</a>
                                                        </li>
                                                    </ul>
                                                    <div class=\"tab-content\">
                                                        <div class=\"tab-pane active\" id=\"topbar_notifications_notifications\" role=\"tabpanel\">
                                                            <div class=\"m-scrollable\" data-scrollable=\"true\" data-max-height=\"250\" data-mobile-max-height=\"200\">
                                                                <div class=\"m-list-timeline m-list-timeline--skin-light\">
                                                                    <div class=\"m-list-timeline__items\">
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge -m-list-timeline__badge--state-success\"></span>
                                                                            <span class=\"m-list-timeline__text\">12 new users registered</span>
                                                                            <span class=\"m-list-timeline__time\">Just now</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge\"></span>
                                                                            <span class=\"m-list-timeline__text\">System shutdown <span class=\"m-badge m-badge--success m-badge--wide\">pending</span></span>
                                                                            <span class=\"m-list-timeline__time\">14 mins</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge\"></span>
                                                                            <span class=\"m-list-timeline__text\">New invoice received</span>
                                                                            <span class=\"m-list-timeline__time\">20 mins</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge\"></span>
                                                                            <span class=\"m-list-timeline__text\">DB overloaded 80% <span class=\"m-badge m-badge--info m-badge--wide\">settled</span></span>
                                                                            <span class=\"m-list-timeline__time\">1 hr</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge\"></span>
                                                                            <span class=\"m-list-timeline__text\">System error - <a href=\"#\" class=\"m-link\">Check</a></span>
                                                                            <span class=\"m-list-timeline__time\">2 hrs</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item m-list-timeline__item--read\">
                                                                            <span class=\"m-list-timeline__badge\"></span>
                                                                            <span href=\"#\" class=\"m-list-timeline__text\">New order received <span class=\"m-badge m-badge--danger m-badge--wide\">urgent</span></span>
                                                                            <span class=\"m-list-timeline__time\">7 hrs</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item m-list-timeline__item--read\">
                                                                            <span class=\"m-list-timeline__badge\"></span>
                                                                            <span class=\"m-list-timeline__text\">Production server down</span>
                                                                            <span class=\"m-list-timeline__time\">3 hrs</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge\"></span>
                                                                            <span class=\"m-list-timeline__text\">Production server up</span>
                                                                            <span class=\"m-list-timeline__time\">5 hrs</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"tab-pane\" id=\"topbar_notifications_events\" role=\"tabpanel\">
                                                            <div class=\"m-scrollable\" data-scrollable=\"true\" data-max-height=\"250\" data-mobile-max-height=\"200\">
                                                                <div class=\"m-list-timeline m-list-timeline--skin-light\">
                                                                    <div class=\"m-list-timeline__items\">
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge m-list-timeline__badge--state1-success\"></span>
                                                                            <a href=\"#\" class=\"m-list-timeline__text\">New order received</a>
                                                                            <span class=\"m-list-timeline__time\">Just now</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge m-list-timeline__badge--state1-danger\"></span>
                                                                            <a href=\"#\" class=\"m-list-timeline__text\">New invoice received</a>
                                                                            <span class=\"m-list-timeline__time\">20 mins</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge m-list-timeline__badge--state1-success\"></span>
                                                                            <a href=\"#\" class=\"m-list-timeline__text\">Production server up</a>
                                                                            <span class=\"m-list-timeline__time\">5 hrs</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge m-list-timeline__badge--state1-info\"></span>
                                                                            <a href=\"#\" class=\"m-list-timeline__text\">New order received</a>
                                                                            <span class=\"m-list-timeline__time\">7 hrs</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge m-list-timeline__badge--state1-info\"></span>
                                                                            <a href=\"#\" class=\"m-list-timeline__text\">System shutdown</a>
                                                                            <span class=\"m-list-timeline__time\">11 mins</span>
                                                                        </div>
                                                                        <div class=\"m-list-timeline__item\">
                                                                            <span class=\"m-list-timeline__badge m-list-timeline__badge--state1-info\"></span>
                                                                            <a href=\"#\" class=\"m-list-timeline__text\">Production server down</a>
                                                                            <span class=\"m-list-timeline__time\">3 hrs</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"tab-pane\" id=\"topbar_notifications_logs\" role=\"tabpanel\">
                                                            <div class=\"m-stack m-stack--ver m-stack--general\" style=\"min-height: 180px;\">
                                                                <div class=\"m-stack__item m-stack__item--center m-stack__item--middle\">
                                                                    <span class=\"\">All caught up!<br>No new logs.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light\"  m-dropdown-toggle=\"click\">
                                    <a href=\"#\" class=\"m-nav__link m-dropdown__toggle\">
                                        <span class=\"m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide\"></span>
                                        <span class=\"m-nav__link-icon\"><i class=\"flaticon-share\"></i></span>
                                    </a>
                                    <div class=\"m-dropdown__wrapper\">
                                        <span class=\"m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust\"></span>
                                        <div class=\"m-dropdown__inner\">
                                            <div class=\"m-dropdown__header m--align-center\" style=\"background: url(assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;\">
                                                <span class=\"m-dropdown__header-title\">Quick Actions</span>
                                                <span class=\"m-dropdown__header-subtitle\">Shortcuts</span>
                                            </div>
                                            <div class=\"m-dropdown__body m-dropdown__body--paddingless\">
                                                <div class=\"m-dropdown__content\">
                                                    <div class=\"data\" data=\"false.html\" data-max-height=\"380\" data-mobile-max-height=\"200\">
                                                        <div class=\"m-nav-grid m-nav-grid--skin-light\">
                                                            <div class=\"m-nav-grid__row\">
                                                                <a href=\"#\" class=\"m-nav-grid__item\">
                                                                    <i class=\"m-nav-grid__icon flaticon-file\"></i>
                                                                    <span class=\"m-nav-grid__text\">Generate Report</span>
                                                                </a>
                                                                <a href=\"#\" class=\"m-nav-grid__item\">
                                                                    <i class=\"m-nav-grid__icon flaticon-time\"></i>
                                                                    <span class=\"m-nav-grid__text\">Add New Event</span>
                                                                </a>
                                                            </div>
                                                            <div class=\"m-nav-grid__row\">
                                                                <a href=\"#\" class=\"m-nav-grid__item\">
                                                                    <i class=\"m-nav-grid__icon flaticon-folder\"></i>
                                                                    <span class=\"m-nav-grid__text\">Create New Task</span>
                                                                </a>
                                                                <a href=\"#\" class=\"m-nav-grid__item\">
                                                                    <i class=\"m-nav-grid__icon flaticon-clipboard\"></i>
                                                                    <span class=\"m-nav-grid__text\">Completed Tasks</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light\" m-dropdown-toggle=\"click\">
                                    <a href=\"#\" class=\"m-nav__link m-dropdown__toggle\">
\t<span class=\"m-topbar__userpic\">
\t<img src=\"assets/app/media/img/users/user4.jpg\" class=\"m--img-rounded m--marginless m--img-centered\" alt=\"\"/>
\t</span>
                                        <span class=\"m-topbar__username m--hide\">Nick</span>
                                    </a>
                                    <div class=\"m-dropdown__wrapper\">
                                        <span class=\"m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust\"></span>
                                        <div class=\"m-dropdown__inner\">
                                            <div class=\"m-dropdown__header m--align-center\" style=\"background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;\">
                                                <div class=\"m-card-user m-card-user--skin-dark\">
                                                    <div class=\"m-card-user__pic\">
                                                        <img src=\"assets/app/media/img/users/user4.jpg\" class=\"m--img-rounded m--marginless\" alt=\"\"/>
                                                    </div>
                                                    <div class=\"m-card-user__details\">
                                                        <span class=\"m-card-user__name m--font-weight-500\">Mark Andre</span>
                                                        <a href=\"#\" class=\"m-card-user__email m--font-weight-300 m-link\">mark.andre@gmail.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"m-dropdown__body\">
                                                <div class=\"m-dropdown__content\">
                                                    <ul class=\"m-nav m-nav--skin-light\">
                                                        <li class=\"m-nav__section m--hide\">
                                                            <span class=\"m-nav__section-text\">Section</span>
                                                        </li>
                                                        <li class=\"m-nav__item\">
                                                            <a href=\"indexa80c.html?page=header/profile&amp;demo=default\" class=\"m-nav__link\">
                                                                <i class=\"m-nav__link-icon flaticon-profile-1\"></i>
                                                                <span class=\"m-nav__link-title\">
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-wrap\">
\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text\">My Profile</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-badge\"><span class=\"m-badge m-badge--success\">2</span></span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"m-nav__item\">
                                                            <a href=\"indexa80c.html?page=header/profile&amp;demo=default\" class=\"m-nav__link\">
                                                                <i class=\"m-nav__link-icon flaticon-share\"></i>
                                                                <span class=\"m-nav__link-text\">Activity</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"m-nav__item\">
                                                            <a href=\"indexa80c.html?page=header/profile&amp;demo=default\" class=\"m-nav__link\">
                                                                <i class=\"m-nav__link-icon flaticon-chat-1\"></i>
                                                                <span class=\"m-nav__link-text\">Messages</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"m-nav__separator m-nav__separator--fit\">
                                                        </li>
                                                        <li class=\"m-nav__item\">
                                                            <a href=\"indexa80c.html?page=header/profile&amp;demo=default\" class=\"m-nav__link\">
                                                                <i class=\"m-nav__link-icon flaticon-info\"></i>
                                                                <span class=\"m-nav__link-text\">FAQ</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"m-nav__item\">
                                                            <a href=\"indexa80c.html?page=header/profile&amp;demo=default\" class=\"m-nav__link\">
                                                                <i class=\"m-nav__link-icon flaticon-lifebuoy\"></i>
                                                                <span class=\"m-nav__link-text\">Support</span>
                                                            </a>
                                                        </li>
                                                        <li class=\"m-nav__separator m-nav__separator--fit\">
                                                        </li>
                                                        <li class=\"m-nav__item\">
                                                            <a href=\"indexb101.html?page=snippets/pages/user/login-1&amp;demo=default\" class=\"btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder\">Logout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li id=\"m_quick_sidebar_toggle\" class=\"m-nav__item\">
                                    <a href=\"#\" class=\"m-nav__link m-dropdown__toggle\">
                                        <span class=\"m-nav__link-icon\"><i class=\"flaticon-grid-menu\"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: Topbar -->\t\t\t</div>
            </div>
        </div>
    </header>
    <!-- END: Header -->
    <!-- begin::Body -->
    <div class=\"m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body\">

        <!-- BEGIN: Left Aside -->
        <button class=\"m-aside-left-close  m-aside-left-close--skin-dark \" id=\"m_aside_left_close_btn\"><i class=\"la la-close\"></i></button>

        <div id=\"m_aside_left\" class=\"m-grid__item\tm-aside-left  m-aside-left--skin-dark \">
            <!-- BEGIN: Aside Menu -->
            <div
                    id=\"m_ver_menu\"
                    class=\"m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark \"
                    m-menu-vertical=\"1\"
                    m-menu-scrollable=\"0\" m-menu-dropdown-timeout=\"500\"
            >
                <ul class=\"m-menu__nav  m-menu__nav--dropdown-submenu-arrow \">
                    <li class=\"m-menu__item  m-menu__item--active\" aria-haspopup=\"true\" ><a  href=\"{{ path('edirassa_dashboard') }}\" class=\"m-menu__link \"><i class=\"m-menu__link-icon flaticon-line-graph\"></i><span class=\"m-menu__link-title\">  <span class=\"m-menu__link-wrap\">      <span class=\"m-menu__link-text\">Dashboard</span></span></span></a></li>
                    <li class=\"m-menu__section\">
                        <h4 class=\"m-menu__section-text\">Tools</h4>
                        <i class=\"m-menu__section-icon flaticon-more-v3\"></i>
                    </li>
                    <li class=\"m-menu__item\" aria-haspopup=\"true\" >
                        <a href=\"{{ path('edirassa_remotecontrol') }}\" class=\"m-menu__link\">
                            <i class=\"m-menu__link-icon flaticon-computer\"></i>
                            <span class=\"m-menu__link-text\">Remote Control</span>
                        </a>
                    </li>

                    <li class=\"m-menu__item\" aria-haspopup=\"true\" >
                        <a href=\"{{ path('edirassa_ftp') }}\" class=\"m-menu__link\" target=\"_blank\">
                            <i class=\"m-menu__link-icon flaticon-download\"></i>
                            <span class=\"m-menu__link-text\">FTP</span>
                        </a>
                    </li>

                    <li class=\"m-menu__section\">
                        <h4 class=\"m-menu__section-text\">Apps</h4>
                        <i class=\"m-menu__section-icon flaticon-more-v3\"></i>
                    </li>
                    <li class=\"m-menu__item \" aria-haspopup=\"true\" >
                        <a  href=\"{{ path('edirassa_mail') }}\" class=\"m-menu__link \">
                            <i class=\"m-menu__link-icon flaticon-multimedia-3\"></i><span class=\"m-menu__link-text\">Mail</span>
                        </a>
                    </li><li class=\"m-menu__section\">
                        <h4 class=\"m-menu__section-text\">Snippets</h4>
                        <i class=\"m-menu__section-icon flaticon-more-v3\"></i>
                    </li><li class=\"m-menu__item  m-menu__item--submenu\" aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\"><a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\"><i class=\"m-menu__link-icon flaticon-interface-9\"></i><span class=\"m-menu__link-text\">Pricing Tables</span><i class=\"m-menu__ver-arrow la la-angle-right\"></i></a><div class=\"m-menu__submenu \"><span class=\"m-menu__arrow\"></span><ul class=\"m-menu__subnav\"><li class=\"m-menu__item  m-menu__item--parent\" aria-haspopup=\"true\" ><span class=\"m-menu__link\"><span class=\"m-menu__link-text\">Pricing Tables</span></span></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a  href=\"indexc13e.html?page=snippets/general/pricing-tables/pricing-table-1&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Pricing Tables v1</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a  href=\"indexc559.html?page=snippets/general/pricing-tables/pricing-table-2&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Pricing Tables v2</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a  href=\"index58f3.html?page=snippets/general/pricing-tables/pricing-table-3&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Pricing Tables v3</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a  href=\"indexb425.html?page=snippets/general/pricing-tables/pricing-table-4&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Pricing Tables v4</span></a></li></ul></div></li><li class=\"m-menu__item  m-menu__item--submenu\" aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\"><a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\"><i class=\"m-menu__link-icon flaticon-piggy-bank\"></i><span class=\"m-menu__link-text\">Invoices</span><i class=\"m-menu__ver-arrow la la-angle-right\"></i></a><div class=\"m-menu__submenu \"><span class=\"m-menu__arrow\"></span><ul class=\"m-menu__subnav\"><li class=\"m-menu__item  m-menu__item--parent\" aria-haspopup=\"true\" ><span class=\"m-menu__link\"><span class=\"m-menu__link-text\">Invoices</span></span></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a  href=\"indexb44a.html?page=snippets/invoices/invoice-1&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Invoice v1</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a  href=\"index9535.html?page=snippets/invoices/invoice-2&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Invoice v2</span></a></li></ul></div></li><li class=\"m-menu__item  m-menu__item--submenu\" aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\"><a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\"><i class=\"m-menu__link-icon flaticon-exclamation\"></i><span class=\"m-menu__link-text\">FAQS</span><i class=\"m-menu__ver-arrow la la-angle-right\"></i></a><div class=\"m-menu__submenu \"><span class=\"m-menu__arrow\"></span><ul class=\"m-menu__subnav\"><li class=\"m-menu__item  m-menu__item--parent\" aria-haspopup=\"true\" ><span class=\"m-menu__link\"><span class=\"m-menu__link-text\">FAQS</span></span></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a  href=\"indexf37a.html?page=snippets/faq/faq-1&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">FAQ v1</span></a></li></ul></div></li><li class=\"m-menu__item  m-menu__item--submenu\" aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\"><a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\"><i class=\"m-menu__link-icon flaticon-suitcase\"></i><span class=\"m-menu__link-text\">Custom Pages</span><i class=\"m-menu__ver-arrow la la-angle-right\"></i></a><div class=\"m-menu__submenu \"><span class=\"m-menu__arrow\"></span><ul class=\"m-menu__subnav\"><li class=\"m-menu__item  m-menu__item--parent\" aria-haspopup=\"true\" ><span class=\"m-menu__link\"><span class=\"m-menu__link-text\">Custom Pages</span></span></li><li class=\"m-menu__item  m-menu__item--submenu\" aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\"><a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">User Pages</span><i class=\"m-menu__ver-arrow la la-angle-right\"></i></a><div class=\"m-menu__submenu \"><span class=\"m-menu__arrow\"></span><ul class=\"m-menu__subnav\"><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"indexb101.html?page=snippets/pages/user/login-1&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Login - 1</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"index9f82.html?page=snippets/pages/user/login-2&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Login - 2</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"indexdc3f.html?page=snippets/pages/user/login-3&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Login - 3</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"index88c1.html?page=snippets/pages/user/login-4&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Login - 4</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"index19fc.html?page=snippets/pages/user/login-5&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Login - 5</span></a></li></ul></div></li><li class=\"m-menu__item  m-menu__item--submenu\" aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\"><a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Error Pages</span><i class=\"m-menu__ver-arrow la la-angle-right\"></i></a><div class=\"m-menu__submenu \"><span class=\"m-menu__arrow\"></span><ul class=\"m-menu__subnav\"><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"indexeae8.html?page=snippets/pages/errors/error-1&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Error 1</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"index6346.html?page=snippets/pages/errors/error-2&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Error 2</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"index4fef.html?page=snippets/pages/errors/error-3&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Error 3</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"indexd268.html?page=snippets/pages/errors/error-4&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Error 4</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"index710c.html?page=snippets/pages/errors/error-5&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Error 5</span></a></li><li class=\"m-menu__item \" aria-haspopup=\"true\" ><a target=\"_blank\" href=\"index3860.html?page=snippets/pages/errors/error-6&amp;demo=default\" class=\"m-menu__link \"><i class=\"m-menu__link-bullet m-menu__link-bullet--dot\"><span></span></i><span class=\"m-menu__link-text\">Error 6</span></a></li></ul></div></li></ul></div></li>\t\t</ul>
            </div>
            <!-- END: Aside Menu -->
        </div>
        <!-- END: Left Aside -->
        <div class=\"m-grid__item m-grid__item--fluid m-wrapper\">
            <!-- begin:: Body -->
            {% block body %}
            {% endblock body %}
        </div>


    </div>
    <!-- end:: Body -->


    <!-- begin::Footer -->
    <footer class=\"m-grid__item\t\tm-footer \">
        <div class=\"m-container m-container--fluid m-container--full-height m-page__container\">
            <div class=\"m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop\">
                <div class=\"m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last\">
\t\t\t\t<span class=\"m-footer__copyright\">
\t\t\t\t\t2017 &copy; Metronic theme by <a href=\"https://keenthemes.com/\" class=\"m-link\">Keenthemes</a>
\t\t\t\t</span>
                </div>
                <div class=\"m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first\">
                    <ul class=\"m-footer__nav m-nav m-nav--inline m--pull-right\">
                        <li class=\"m-nav__item\">
                            <a href=\"#\" class=\"m-nav__link\">
                                <span class=\"m-nav__link-text\">About</span>
                            </a>
                        </li>
                        <li class=\"m-nav__item\">
                            <a href=\"#\"  class=\"m-nav__link\">
                                <span class=\"m-nav__link-text\">Privacy</span>
                            </a>
                        </li>
                        <li class=\"m-nav__item\">
                            <a href=\"#\" class=\"m-nav__link\">
                                <span class=\"m-nav__link-text\">T&C</span>
                            </a>
                        </li>
                        <li class=\"m-nav__item\">
                            <a href=\"#\" class=\"m-nav__link\">
                                <span class=\"m-nav__link-text\">Purchase</span>
                            </a>
                        </li>
                        <li class=\"m-nav__item m-nav__item\">
                            <a href=\"#\" class=\"m-nav__link\" data-toggle=\"m-tooltip\" title=\"Support Center\" data-placement=\"left\">
                                <i class=\"m-nav__link-icon flaticon-info m--icon-font-size-lg3\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end::Footer -->


</div>
<!-- end:: Page -->

<!-- begin::Quick Sidebar -->
<div id=\"m_quick_sidebar\" class=\"m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light\">
    <div class=\"m-quick-sidebar__content m--hide\">
        <span id=\"m_quick_sidebar_close\" class=\"m-quick-sidebar__close\"><i class=\"la la-close\"></i></span>
        <ul id=\"m_quick_sidebar_tabs\" class=\"nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand\" role=\"tablist\">
            <li class=\"nav-item m-tabs__item\">
                <a class=\"nav-link m-tabs__link active\" data-toggle=\"tab\" href=\"#m_quick_sidebar_tabs_messenger\" role=\"tab\">Messages</a>
            </li>
            <li class=\"nav-item m-tabs__item\">
                <a class=\"nav-link m-tabs__link\" \t\tdata-toggle=\"tab\" href=\"#m_quick_sidebar_tabs_settings\" role=\"tab\">Settings</a>
            </li>
            <li class=\"nav-item m-tabs__item\">
                <a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#m_quick_sidebar_tabs_logs\" role=\"tab\">Logs</a>
            </li>
        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane active m-scrollable\" id=\"m_quick_sidebar_tabs_messenger\" role=\"tabpanel\">
                <div class=\"m-messenger m-messenger--message-arrow m-messenger--skin-light\">
                    <div class=\"m-messenger__messages\">
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--in\">
                                <div class=\"m-messenger__message-pic\">
                                    <img src=\"assets/app/media/img/users/user3.jpg\" alt=\"\"/>
                                </div>
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-username\">
                                            Megan wrote
                                        </div>
                                        <div class=\"m-messenger__message-text\">
                                            Hi Bob. What time will be the meeting ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--out\">
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-text\">
                                            Hi Megan. It's at 2.30PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--in\">
                                <div class=\"m-messenger__message-pic\">
                                    <img src=\"assets/app/media/img/users/user3.jpg\" alt=\"\"/>
                                </div>
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-username\">
                                            Megan wrote
                                        </div>
                                        <div class=\"m-messenger__message-text\">
                                            Will the development team be joining ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--out\">
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-text\">
                                            Yes sure. I invited them as well
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-messenger__datetime\">2:30PM</div>
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--in\">
                                <div class=\"m-messenger__message-pic\">
                                    <img src=\"assets/app/media/img/users/user3.jpg\"  alt=\"\"/>
                                </div>
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-username\">
                                            Megan wrote
                                        </div>
                                        <div class=\"m-messenger__message-text\">
                                            Noted. For the Coca-Cola Mobile App project as well ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--out\">
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-text\">
                                            Yes, sure.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--out\">
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-text\">
                                            Please also prepare the quotation for the Loop CRM project as well.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-messenger__datetime\">3:15PM</div>
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--in\">
                                <div class=\"m-messenger__message-no-pic m--bg-fill-danger\">
                                    <span>M</span>
                                </div>
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-username\">
                                            Megan wrote
                                        </div>
                                        <div class=\"m-messenger__message-text\">
                                            Noted. I will prepare it.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--out\">
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-text\">
                                            Thanks Megan. I will see you later.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"m-messenger__wrapper\">
                            <div class=\"m-messenger__message m-messenger__message--in\">
                                <div class=\"m-messenger__message-pic\">
                                    <img src=\"assets/app/media/img/users/user3.jpg\"  alt=\"\"/>
                                </div>
                                <div class=\"m-messenger__message-body\">
                                    <div class=\"m-messenger__message-arrow\"></div>
                                    <div class=\"m-messenger__message-content\">
                                        <div class=\"m-messenger__message-username\">
                                            Megan wrote
                                        </div>
                                        <div class=\"m-messenger__message-text\">
                                            Sure. See you in the meeting soon.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"m-messenger__seperator\"></div>

                    <div class=\"m-messenger__form\">
                        <div class=\"m-messenger__form-controls\">
                            <input type=\"text\" name=\"\" placeholder=\"Type here...\" class=\"m-messenger__form-input\">
                        </div>
                        <div class=\"m-messenger__form-tools\">
                            <a href=\"#\" class=\"m-messenger__form-attachment\">
                                <i class=\"la la-paperclip\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"tab-pane  m-scrollable\" id=\"m_quick_sidebar_tabs_settings\" role=\"tabpanel\">
                <div class=\"m-list-settings\">
                    <div class=\"m-list-settings__group\">
                        <div class=\"m-list-settings__heading\">General Settings</div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">Email Notifications</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">Site Tracking</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">SMS Alerts</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">Backup Storage</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">Audit Logs</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                    </div>
                    <div class=\"m-list-settings__group\">
                        <div class=\"m-list-settings__heading\">System Settings</div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">System Logs</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">Error Reporting</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">Applications Logs</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">Backup Servers</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                        <div class=\"m-list-settings__item\">
                            <span class=\"m-list-settings__item-label\">Audit Logs</span>
                            <span class=\"m-list-settings__item-control\">
\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"tab-pane  m-scrollable\" id=\"m_quick_sidebar_tabs_logs\" role=\"tabpanel\">
                <div class=\"m-list-timeline\">
                    <div class=\"m-list-timeline__group\">
                        <div class=\"m-list-timeline__heading\">
                            System Logs
                        </div>
                        <div class=\"m-list-timeline__items\">
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">12 new users registered <span class=\"m-badge m-badge--warning m-badge--wide\">important</span></a>
                                <span class=\"m-list-timeline__time\">Just now</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">System shutdown</a>
                                <span class=\"m-list-timeline__time\">11 mins</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-danger\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">New invoice received</a>
                                <span class=\"m-list-timeline__time\">20 mins</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-warning\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">Database overloaded 89% <span class=\"m-badge m-badge--success m-badge--wide\">resolved</span></a>
                                <span class=\"m-list-timeline__time\">1 hr</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">System error</a>
                                <span class=\"m-list-timeline__time\">2 hrs</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">Production server down <span class=\"m-badge m-badge--danger m-badge--wide\">pending</span></a>
                                <span class=\"m-list-timeline__time\">3 hrs</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">Production server up</a>
                                <span class=\"m-list-timeline__time\">5 hrs</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"m-list-timeline__group\">
                        <div class=\"m-list-timeline__heading\">
                            Applications Logs
                        </div>
                        <div class=\"m-list-timeline__items\">
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">New order received <span class=\"m-badge m-badge--info m-badge--wide\">urgent</span></a>
                                <span class=\"m-list-timeline__time\">7 hrs</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">12 new users registered</a>
                                <span class=\"m-list-timeline__time\">Just now</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">System shutdown</a>
                                <span class=\"m-list-timeline__time\">11 mins</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-danger\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">New invoices received</a>
                                <span class=\"m-list-timeline__time\">20 mins</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-warning\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">Database overloaded 89%</a>
                                <span class=\"m-list-timeline__time\">1 hr</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">System error <span class=\"m-badge m-badge--info m-badge--wide\">pending</span></a>
                                <span class=\"m-list-timeline__time\">2 hrs</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">Production server down</a>
                                <span class=\"m-list-timeline__time\">3 hrs</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"m-list-timeline__group\">
                        <div class=\"m-list-timeline__heading\">
                            Server Logs
                        </div>
                        <div class=\"m-list-timeline__items\">
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">Production server up</a>
                                <span class=\"m-list-timeline__time\">5 hrs</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">New order received</a>
                                <span class=\"m-list-timeline__time\">7 hrs</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">12 new users registered</a>
                                <span class=\"m-list-timeline__time\">Just now</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">System shutdown</a>
                                <span class=\"m-list-timeline__time\">11 mins</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-danger\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">New invoice received</a>
                                <span class=\"m-list-timeline__time\">20 mins</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-warning\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">Database overloaded 89%</a>
                                <span class=\"m-list-timeline__time\">1 hr</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">System error</a>
                                <span class=\"m-list-timeline__time\">2 hrs</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">Production server down</a>
                                <span class=\"m-list-timeline__time\">3 hrs</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">Production server up</a>
                                <span class=\"m-list-timeline__time\">5 hrs</span>
                            </div>
                            <div class=\"m-list-timeline__item\">
                                <span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>
                                <a href=\"#\" class=\"m-list-timeline__text\">New order received</a>
                                <span class=\"m-list-timeline__time\">1117 hrs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end::Quick Sidebar -->
<!-- begin::Scroll Top -->
<div id=\"m_scroll_top\" class=\"m-scroll-top\">
    <i class=\"la la-arrow-up\"></i>
</div>
<!-- end::Scroll Top -->\t\t    <!-- begin::Quick Nav -->
<ul class=\"m-nav-sticky\" style=\"margin-top: 30px;\">
    <li class=\"m-nav-sticky__item\" data-toggle=\"m-tooltip\" title=\"Layout Builder\" data-placement=\"left\">
        <a href=\"index2b54.html?page=builder&amp;demo=default\"><i class=\"la la-cog\"></i></a>
    </li>
    <!--
\t<li class=\"m-nav-sticky__item\" data-toggle=\"m-tooltip\" title=\"Showcase\" data-placement=\"left\">
\t\t<a href=\"\"><i class=\"la la-eye\"></i></a>
\t</li>
\t<li class=\"m-nav-sticky__item\" data-toggle=\"m-tooltip\" title=\"Pre-sale Chat\" data-placement=\"left\">
\t\t<a href=\"\" ><i class=\"la la-comments-o\"></i></a>
\t</li>
\t-->
    <li class=\"m-nav-sticky__item\" data-toggle=\"m-tooltip\" title=\"Purchase\" data-placement=\"left\">
        <a href=\"https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes\" target=\"_blank\"><i class=\"la la-cart-arrow-down\"></i></a>
    </li>
    <li class=\"m-nav-sticky__item\" data-toggle=\"m-tooltip\" title=\"Documentation\" data-placement=\"left\">
        <a href=\"https://keenthemes.com/metronic/documentation.html\" target=\"_blank\"><i class=\"la la-code-fork\"></i></a>
    </li>
    <li class=\"m-nav-sticky__item\" data-toggle=\"m-tooltip\" title=\"Support\" data-placement=\"left\">
        <a href=\"https://keenthemes.com/forums/forum/support/metronic5/\" target=\"_blank\"><i class=\"la la-life-ring\"></i></a>
    </li>
</ul>
<!-- begin::Quick Nav -->
<!--begin::Base Scripts -->
<script src=\"{{ asset('assets/vendors/base/vendors.bundle.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/demo/default/base/scripts.bundle.js') }}\" type=\"text/javascript\"></script>
<!--end::Base Scripts -->
<!--begin::Page Snippets -->
<script src=\"{{ asset('assets/app/js/dashboard.js') }}\" type=\"text/javascript\"></script>
<!--end::Page Snippets -->
{% block scripts %}
{% endblock scripts %}
</body>
<!-- end::Body -->

<!-- Mirrored from keenthemes.com/metronic/preview/?page=index&demo=default by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Apr 2018 12:11:18 GMT -->
</html>", "@User/Default/layout.html.twig", "C:\\wamp64\\www\\edirassa\\src\\UserBundle\\Resources\\views\\Default\\layout.html.twig");
    }
}

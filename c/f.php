<?php
require dirname(__FILE__) . "/../admin/conf.php";
function name()
{
    global $blog;
    return $blog['name'];
}
function intro()
{
    global $blog;
    return $blog['intro'];
}
function frontnum()
{
    global $blog;
    return $blog['frontposts'];
}
function avatar()
{
    global $blog;
    return $blog['avatar'];
}
function host()
{
    global $blog;
    return $blog['host'];
}
function keyword()
{
    global $blog;
    return $blog['keyword'];
}
function descript()
{
    global $blog;
    return $blog['descript'];
}
function ctime()
{
    global $blog;
    return $blog['cachetime'];
}
function background_admin()
{
    global $blog;
    return $blog['background_admin'];
}
function background()
{
    global $blog;
    return $blog['background'];
}
function footer_color()
{
    global $blog;
    return $blog['footer_color'];
}
function admin_color()
{
    global $blog;
    if ($blog['adminUI_color']=='blue'){
        return '#2196F3';
    }else if ($blog['adminUI_color']=='red'){
        return '#F44336';
    }else if ($blog['adminUI_color']=='orange'){
        return '#FF9800';
    }else if ($blog['adminUI_color']=='yellow'){
        return '#FFEB3B';
    }else if ($blog['adminUI_color']=='green'){
        return '#4CAF50';
    }else if ($blog['adminUI_color']=='cyan'){
        return '#00BCD4';
    }else if ($blog['adminUI_color']=='purple'){
        return '#673AB7';
    }else if ($blog['adminUI_color']=='pink'){
        return '#E91E63';
    }else if ($blog['adminUI_color']=='teal'){
        return '#009688';
    }else{
        return '#2196F3';
    };
}
function drawer_enabled()
{
    global $blog;
    if ($blog['drawer_enabled']=='true'){
        return 'unset;';
    } else {
        return 'none;';
    };
}
function drawer_position()
{
    global $blog;
    if ($blog['drawer_enabled']=='true'){
        if ($blog['drawer_position']=='right'){
            return 'mdui-drawer mdui-drawer-right mdui-color-white ';
        } else if ($blog['drawer_position']=='left'){
            return 'mdui-drawer mdui-color-white ';
        } else {
            return 'mdui-drawer mdui-color-white ';
        };
    } else {
        return 'mdui-color-white ';
    };
}
function drawer_position_body()
{
    global $blog;
    if ($blog['drawer_enabled']=='true'){
        if ($blog['drawer_position']=='right'){
            if ($blog['drawer_show']=='open'){
                return 'mdui-container mdui-drawer-body-right';
            }
            return 'mdui-container';
        } else if ($blog['drawer_position']=='left'){
            if ($blog['drawer_show']=='open'){
                return 'mdui-container mdui-drawer-body-left';
            } else {
                return 'mdui-container';
            };
        } else {
            return 'mdui-container';
        };
    } else {
        return 'mdui-container';
    };
}
function drawer_showing()
{
    global $blog;
    if ($blog['drawer_enabled']=='true'){
        if ($blog['drawer_show']=='open'){
            return 'mdui-shadow-2';
        } else if ($blog['drawer_show']=='close'){
            return 'mdui-shadow-2 mdui-drawer-close';
        } else {
            return 'mdui-shadow-2';
        };
    } else {
        return 'mdui-shadow-2';
    };
}
function drawer_title()
{
    global $blog;
    return $blog['drawer_title'];
}
function drawer_target()
{
    global $blog;
    if ($blog['drawer_enabled']=='true'){
        return '#menu';
    } else {
        return 'null';
    };
}
function changed()
{
    /*有编辑，变更时间戳*/
    file_put_contents(dirname(__FILE__) . "/../log/change.log", time());
}
function getchangetime()
{
    $p = file_get_contents(dirname(__FILE__) . "/../log/change.log");
    if (!empty($p)) {
        return intval($p);
    } else {
        return 'nolog';
    }
}
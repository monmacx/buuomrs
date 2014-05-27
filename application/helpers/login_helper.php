<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function loggedin() {
    $ci=& get_instance();
    
    return $ci->session->userdata('useraccount') == TRUE;
}
function is_settings() {
    $ci=& get_instance();
    
    return $ci->session->userdata('settings') == TRUE;
}
function getout_settings()
{
    return base_url()."index.php/settings/logout";
}
function logouturl()
{
    return base_url()."index.php/users/logout";
}
function chpwdurl()
{
    return base_url()."index.php/users/changepasspage";
}
function userid()
{
    $ci=& get_instance();
    if ($ci->session->userdata('userid') == TRUE) 
      return $ci->session->userdata('userid');
    return "-1";
}

function is_student()
{
    $ci=& get_instance();
    if ($ci->session->userdata('usertype') == 'student')
      return TRUE;
    return FALSE;
}
function useraccount()
{
    $ci=& get_instance();
    if ($ci->session->userdata('useraccount') == TRUE)
      return $ci->session->userdata('useraccount');
    return "arr";
}
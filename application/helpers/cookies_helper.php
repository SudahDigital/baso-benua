<?php 
function get_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
function get_agent()
{
    $CI =& get_instance();    
    $CI->load->library('user_agent');
    if ($CI->agent->is_browser())
    {
            $agent = $CI->agent->browser().' '.$CI->agent->version();
    }
    elseif ($CI->agent->is_robot())
    {
            $agent = $CI->agent->robot();
    }
    elseif ($CI->agent->is_mobile())
    {
            $agent = $CI->agent->mobile();
    }
    else
    {
            $agent = 'Unidentified User Agent';
    }
    return $agent;
}
function add_cookies()
{
    $ip = get_ip();
    $agent = get_agent();
    
    $ip_name = str_replace(':', '',$ip);
    $ip_name = str_replace('.', '',$ip_name);
    $ip_name = str_replace(',', '',$ip_name);
    $ip_name = str_replace(' ', '',$ip_name);
    $ip_name = str_replace('=', '',$ip_name);
    $ip_name = str_replace(';', '',$ip_name);
    $agent_name = str_replace('.', '', $agent);
    $agent_name = str_replace(' ', '', $agent_name);
    $cookie_name = $ip_name.$agent_name;
    // echo $ip;die;
    $cookie_value = $ip.'_'.$agent;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}
function get_cookies()
{
    $ip = get_ip();
    $agent = get_agent();
    
    $ip_name = str_replace(':', '',$ip);
    $ip_name = str_replace('.', '',$ip_name);
    $ip_name = str_replace(',', '',$ip_name);
    $ip_name = str_replace(' ', '',$ip_name);
    $ip_name = str_replace('=', '',$ip_name);
    $ip_name = str_replace(';', '',$ip_name);
    $agent_name = str_replace('.', '', $agent);
    $agent_name = str_replace(' ', '', $agent_name);
    $cookie_name = $ip_name.$agent_name;

    return @$_COOKIE[$cookie_name];
}
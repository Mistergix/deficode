<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function css_url($nom)
{
    return base_url("assets/css/$nom.css");
}

function img_url($nom)
{
    return base_url("assets/img/$nom");
}

function js_url($nom)
{
    return base_url("assets/js/$nom.js");
}

function seance_url($id)
{
    return site_url("seances/list/$id");
}
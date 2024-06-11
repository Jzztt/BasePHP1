<?php
$action =  isset($_GET['act']) ? $_GET['act'] : 'index';

switch ($action) {
    case 'index':
        break;
    case 'form_create':
        break;
    case 'create':
        break;
    case 'delete':
        break;
    case 'form_update':
        break;
    case 'update':
        break;
    default:
        echo "case not match";
}
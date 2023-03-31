<?php

function check_session()
{
    return session()->has('usuario');
}

//============================================================================
function users_permited($roles)
{
    if (!check_session()) {
        return false;
    }
    return in_array(session()->usuario['role'], $roles);
}

//============================================================================
function user_autorized($permissao)
{
    //devolve verdadeiro se o usuário tiver permissão para a funcionalidade
    if (!check_session()) {
        return false;
    }

    //com a versão 8 do PHP
    //return str_contains(session()->usuario['permissoes'], $permissao);

    //versão anterior a PHP 8
    $permissoes = explode(',', session()->usuario['permissoes']);
    return in_array($permissao, $permissoes);
}

//============================================================================
function printData($data, $terminado = true)
{
    echo '<pre>';
    if (is_object($data) || is_array($data)) {
        print_r($data);
    } else {
        echo $data;
    }

    if ($terminado) {
        die(PHP_EOL . 'Terminado');
    }
}

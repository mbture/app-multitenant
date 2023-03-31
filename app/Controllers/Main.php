<?php

namespace App\Controllers;

use App\Models\Cliente;
use App\Models\Produto;

class Main extends BaseController
{
    public function index()
    {
        if (!check_session()) {
            return redirect()->to('login');
        }

        return view('home');
    }

    //============================================================================
    public function senha($senha)
    {
        echo password_hash($senha, PASSWORD_DEFAULT);
    }

    //============================================================================
    public function login()
    {
        //verificamos se o usuário está logado
        if (check_session()) {
            return redirect()->to('/', 301);
        }

        return view('login_form');
    }

    //============================================================================
    public function login_submit()
    {

        $usuario = $this->request->getPost('usuario');
        $senha = $this->request->getPost('senha');

        $modelo = new Cliente();
        $usuario = $modelo->where('usuario', $usuario)->first();

        if (empty($usuario)) {
            echo 'Login inválido';
            return;
        }

        //verificar senha
        if (!password_verify($senha, $usuario->senha)) {
            echo 'Login inválido';
            return;
        }

        //criamos a sessão
        session()->set(
            'usuario',
            [
                'id_clliente'   => $usuario->id_cliente,
                'nome'          => $usuario->nome_cliente,
                'usuario'       => $usuario->usuario,
                'role'          => $usuario->role,
                'permissoes'    => $usuario->permissoes,
                'bd_empresa'    => $usuario->bd_empresa
            ]
        );

        return redirect()->to('/');
    }

    //============================================================================
    public function logout()
    {
        session()->remove('usuario');
        return redirect()->to('/');
    }

    //============================================================================
    public function consultar()
    {
        //verifica se tem sessão iniciaca
        if (!check_session()) {
            return redirect()->to('/', 301);
        }

        if (!user_autorized('001')) {
            return redirect()->to('/', 301);
        }

        $produtos = new Produto();
        $data['produtos'] = $produtos->findAll();

        return view('consultar', $data);
    }

    //============================================================================
    public function adicionar_editar()
    {
        if (!user_autorized('002')) {
            return redirect()->to('/', 301);
        }

        echo 'Adicionar';
    }

    //============================================================================
    public function administracao()
    {
        if (!user_autorized('003')) {
            return redirect()->to('/', 301);
        }

        echo 'Administracao';
    }
}

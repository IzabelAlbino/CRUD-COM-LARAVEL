<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\CadastroDeClientes;

class CrudController extends Controller
{
    private $rule = [
        "nome" => ["required", "string"],
        "endereco" => ["required", "string"],
        "bairro" => ["required", "string"],
        "municipio" => ["required", "string"],
        "estado" => ["required", "string"],
        "cep" => ["required", "string"],
        "telefone" => ["required", "string"],
    ];

    public function index()
    {
        $listaDeClientes = CadastroDeClientes::all();

        return view("welcome", ["listaDeClientes" => $listaDeClientes]);
    }

    public function create()
    {
        return view("create");
    }

    public function cadastro(Request $request)
    {
        $v = Validator::make($request->all(), $this->rule);

        if ($v->fails())
        {
            return view("create", ["error" => $v->errors()]);
        }

        $data = request(array_keys($this->rule));

        CadastroDeClientes::create($data);

        return redirect("/");
    }

    public function excluir($id)
    {
        $client = CadastroDeClientes::where("id", $id)->first();

        if (is_object($client))
        {
            $client->delete();
        }

        return redirect("/");
    }

    public function atualizar($id)
    {
        $client = CadastroDeClientes::where("id", $id)->first();

        if (is_object($client))
        {
            return view("atualizar", ["client" => $client]);
        }

        return redirect("/");
    }

    public function substituir(Request $request, $id)
    {
        $client = CadastroDeClientes::where("id", $id)->first();

        if (is_object($client))
        {
            $v = Validator::make($request->all(), $this->rule);

            if ($v->fails())
            {
                return view("atualizar", [
                    "client" => $client,
                    "error"  => $v->errors()
                ]);
            }

            $data = request(array_keys($this->rule));

            $client->update($data);
        }

        return redirect("/");
    }
}


<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Auth\AuthController;
use App\Models\usuario;
use App\Models\user;
use App\Models\cliente;
use App\Models\proposta;
use Illuminate\Support\Facades\Hash;
use App\Exports\PropostasExport;
use Maatwebsite\Excel\Facades\Excel;


class SiteController extends Controller
{
    //
    private $cliente;
    private $proposta;
    private $usero;
    private $formuser;
    

public function __construct(usuario $usuario, cliente $cliente, proposta $proposta, user $usero)
{
    $this->cliente = $cliente;
    $this->proposta = $proposta;
    $this->user = $usero;
}
public function index(Request $check){
    if(auth()->user())
    return view ('site.home');
    else
    return view ('site.index');
}

public function inicial(){
    return view('site.home');
}

    public function cadastro_clientes(){
        return view('site.cadastro_clientes');
    }
    public function cadastro_propostas(){
        $clientesdb = $this->cliente->all();
        return view('site.cadastro_propostas', compact('clientesdb'));        
    }
    public function cadastro_usuarios(){
        return view('site.cadastro_usuarios');
    }

    public function deslogar(){
    return view('site.deslogar');
    }

    //Funções que realizam inserção no banco de dados

    public function importar_usuario(Request $request_usuario){
        //array para puxar informações >>e criptografar senha<<
        $formuser = array(
            [
            'name' => $request_usuario->get('name'),
            'email' => $request_usuario->get('email'),
            'password' => Hash::make($request_usuario->get('password')),
            'created_at' => $request_usuario->get('created_at'),
            'updated_at' => $request_usuario->get('updated_at'),
        ]);
        //inserir todas informações do formulário na tabela "usuarios".
        $inserir = $this->user->insert($formuser);
        if ($inserir)
        return redirect()->route('site.listar_usuarios');
        else
        return redirect()->route('site.cadastro_usuarios');
    }

    public function importar_clientes(Request $request_cliente){
        $formcliente = $request_cliente->except('_token');
        //inserir todas informações do formulário na tabela "clientes".
        $inserir_cliente = $this->cliente->insert($formcliente);

        if ($inserir_cliente)
        return redirect()->route('site.listar_clientes');
        else
        return "Ocorreu um erro, tente novamente.";
    }

    public function importar_propostas(Request $request_propostas){
        $formupload = $request_propostas->except('_token', 'arquivo');
        //realizar verificação se o arquivo é válido (não está corrompido, etc)
        if($request_propostas->file('arquivo')->isValid())
        //retirando extensao do nome original do arquivo
        $retiraextensao = pathinfo($request_propostas->file('arquivo')->getClientOriginalName(),PATHINFO_FILENAME);
        //concatenando nome do arquivo, inserindo data (dia, mês e ano) + hora (hora, minuto, segundo) para se tornar um arquivo único e não sobrescrever.
        $nomearquivo = $retiraextensao . "_" . date('dmY H_m_s') . "." . $request_propostas->file('arquivo')->extension();
        //inserindo arquivo na pasta storage/app/propostas com o nome do arquivo já concatenado
        $request_propostas->file('arquivo')->storeAs('propostas', $nomearquivo);
        //inserir todas informações do formulário juntamente com o nome do arquivo na tabela "propostas".
        $inserir_proposta = $this->proposta->insert($formupload);

        if ($inserir_proposta)
        return redirect()->route('site.listar_propostas');
        else
        return "Ocorreu um erro, tente novamente.";
        
    }
    
//funções para listar dados já inseridos na base
    
    public function listar_usuarios(user $listausuario)
    {
        $listausuarios = $listausuario->all();
        return view('site.listar_usuarios', compact ('listausuarios'));
    }

    public function listar_clientes(cliente $listacliente)
    {
        $listaclientes = $listacliente->all();
        return view('site.listar_clientes', compact('listaclientes'));
    }

    public function listar_propostas(proposta $listpropostas, Request $id){
        $listapropostas = $listpropostas->all();
        return view('site.listar_propostas', compact('listapropostas'));
        
    }

    public function localizarproposta(Request $busca)
    {
        $resultadobusca = $this->proposta->localizarproposta($busca->filtro);
        return view('site.listar_propostas', [
            'listapropostas' => $resultadobusca,
        ]);
    }
//direcionar pagina de edicao de proposta pelo id
    public function editproposta($id)
    {
        if(!$propo = proposta::where('id', $id)->first())
        return redirect()->back();
        else
        return view('site.editar_propostas', [
            'propo' => $propo
        ]);
    }
    public function updateproposta(Request $atualizar, $id)
    {
        if(!$propo = proposta::where('id', $id)->first())
        return redirect()->back();
        $propo->update($atualizar->all());
        return redirect()->route('site.listar_propostas');
    }
//exportar propostas para excel
    public function export() 
    {
        return Excel::download(new PropostasExport, 'users.xlsx');
    
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Associado;

class AssociadoController extends Controller
{

	// Lista todos os associados cadastrados
    public function index(){

        $registros = Associado::all();

        // caminho do arquivo la no frontend
    	return view('admin.associados.index', compact('registros'));
    }

    public function adicionar(){
    	return view('admin.associados.adicionar');
    }

    public function teste(){
        return view('admin.associados.teste');
    }


    public function salvar(Request $req){
        $dados = $req->all();

        Associado::create($dados);

        return redirect()->route('admin.associados');
    }

    public function editar($id)
    {
      $registro = Associado::find($id);
      return view('admin.associados.editar',compact('registro'));
    }
    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      // if(isset($dados['publicado'])){
      //   $dados['publicado'] = 'sim';
      // }else{
      //   $dados['publicado'] = 'nao';
      // }

      // if($req->hasFile('imagem')){
      //   $imagem = $req->file('imagem');
      //   $num = rand(1111,9999);
      //   $dir = "img/cursos/";
      //   $ex = $imagem->guessClientExtension();
      //   $nomeImagem = "imagem_".$num.".".$ex;
      //   $imagem->move($dir,$nomeImagem);
      //   $dados['imagem'] = $dir."/".$nomeImagem;
      // }

      Associado::find($id)->update($dados);

      return redirect()->route('admin.associados');

    }
}

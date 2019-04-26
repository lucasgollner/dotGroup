<?php

namespace App\Http\Controllers;

use App\Tarefa;
use Illuminate\Http\Request;
use Validator;

class TarefaController extends Controller
{
    
    public function index()
    {
        //
        $tarefas = Tarefa::All();

        return response()->json(["status"=>"sucesso","msg"=>$tarefas],200);
    }

    public function list()
    {
        ////
        $tarefas = Tarefa::All();

        return view('tarefas')->with(['tarefas' => $tarefas]);
    }

    public function store(Request $request)
    {
        //
        $input = $request->all();
        $validator = Validator::make($input, [
            'tarefas_titulo' => 'required',
            'tarefas_texto' => 'required',
            'tarefas_usuario' => 'required'
        ]);
        if($validator->fails()){
            return response()->json(["status"=>"erro","msg"=>$validator->errors()], 400);       
        }
        $tarefa = Tarefa::create($input);
        return response()->json(["status"=>"sucesso","msg"=>"Tarefa criada!","id"=>$tarefa->id],200);
    }

    public function update(Request $request, $id)
    {
        //
        $input = $request->all();
        $tarefa = Tarefa::find($id);
        if($tarefa){
            $tarefa->fill($input);
            $tarefa->save();
            return response()->json(["status"=>"sucesso","msg"=>"Tarefa atualizada!"],200);
        }else{
            return response()->json(["status"=>"erro","msg"=>"Tarefa não encontrada!"],404);
        }
    }

    public function destroy($id)
    {
        //
        $tarefa = Tarefa::find($id);
        if($tarefa){
            $tarefa->delete();
            return response()->json(["status"=>"sucesso","msg"=>"Tarefa DELETADA!","id"=>$id],202);
        }else{
            return response()->json(["status"=>"erro","msg"=>"Tarefa não encontrada!"],404);
        }
    }
}

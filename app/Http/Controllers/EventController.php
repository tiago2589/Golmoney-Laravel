<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; /* AULA 13 */

class EventController extends Controller
{
    public function index() {
        $events = Event::all();
    
        return view('welcome', ['events' => $events]);
    }

    /* Aqui chama o formulario da pagina CREATE AULA15*/
    public function create (){
        return view('events.create');
    }

    /* Aqui cria uma função STORE AULA 15*/
    public function store(Request $request){ /*Aqui trás todos os dados do formulário! */

        $event = new Event; /* Instancia um novo Evento */

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        //Image Upload - VERIFICAÇÃO:
        //Se request tem o arquivo image e essa imagem é valida... então.. AULA17
        if($request->hasfile('image') && $request->file('image')->isValid()){
            
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }

        $event->save();

        /* Retorna o usuario para a pagina inicial */
        return redirect('/')->with('msg', 'Evento criado com sucesso!'); 
                                    /*Método with para enviar mensagem a VIEW AULA 16 flash menseger*/
                                    //redirect with = redirecionar com... no caso com a mensagem.
    }

    /* Aula18 - função para mostrar os dados dos eventos.. */
    public function show($id){
        $event = Event::findOrFail($id);//methodo para verificar se existe uma ID e mostrar, se nao tiver ele retorna um erro
                                        //find or fail = encontre ou falhewith
        //quando clicar no botao participar vai entrar na rota, entra na action e devolve as informações do evento para o visitante.
        return view('events.show', ['event' => $event]);

    }
}

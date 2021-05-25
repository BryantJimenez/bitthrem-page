<?php

namespace App\Http\Controllers;

use App\Category;
use App\Question;
use App\Http\Requests\QuestionStoreRequest;
use App\Http\Requests\QuestionUpdateRequest;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $questions=Question::with(['category'])->orderBy('id', 'DESC')->get();
        return view('admin.questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories=Category::where([['state', '1'], ['type','1']])->orderBy('name', 'ASC')->get();
        return view('admin.questions.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionStoreRequest $request) {
        $category=Category::where('slug', request('category_id'))->firstOrFail();
        $data=array('question' => request('question'), 'answer' => request('answer'), 'category_id' => $category->id);
        $question=Question::create($data);

        if ($question) {
            return redirect()->route('preguntas.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'La pregunta ha sido registrada exitosamente.']);
        } else {
            return redirect()->route('preguntas.create')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.'])->withInputs();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question) {
        $categories=Category::where([['state', '1'], ['type','1']])->orderBy('name', 'ASC')->get();
        return view('admin.questions.edit', compact("categories", "question"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionUpdateRequest $request, Question $question) {
        $category=Category::where('slug', request('category_id'))->firstOrFail();
        $data=array('question' => request('question'), 'answer' => request('answer'), 'category_id' => $category->id);
        $question->fill($data)->save();

        if ($question) {
            return redirect()->route('preguntas.edit', ['question' => $question->slug])->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La pregunta ha sido editada exitosamente.']);
        } else {
            return redirect()->route('preguntas.edit', ['question' => $question->slug])->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question) {
        $question->delete();
        if ($question) {
            return redirect()->route('preguntas.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Eliminación exitosa', 'msg' => 'La pregunta ha sido eliminada exitosamente.']);
        } else {
            return redirect()->route('preguntas.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Eliminación fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function deactivate(Request $request, Question $question) {
        $question->fill(['state' => "0"])->save();
        if ($question) {
            return redirect()->route('preguntas.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La pregunta ha sido desactivada exitosamente.']);
        } else {
            return redirect()->route('preguntas.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function activate(Request $request, Question $question) {
        $question->fill(['state' => "1"])->save();
        if ($question) {
            return redirect()->route('preguntas.index')->with(['alert' => 'sweet', 'type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La pregunta ha sido activada exitosamente.']);
        } else {
            return redirect()->route('preguntas.index')->with(['alert' => 'lobibox', 'type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }
}

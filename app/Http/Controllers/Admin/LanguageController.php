<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Vocabulary;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = Language::paginate();
        return view('admin.language.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.language.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $language = Language::create($request->all());
        return redirect()->route('admin.language.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $language = Language::find($id);
        $patterns = null;
        $vocabularies = null;
        $previous = array_merge(session('known', []), session('unknown', []));
        if (request()->type == 'pattern') {
            $patterns = $language->Patterns()->paginate();
        } else {
            $vocabularies = $language->Vocabularies()->paginate();
        }
        $total = $language->Vocabularies()->count();
        $count = count($previous);
        $levels = Vocabulary::groupBy('level')->select('level')->pluck('level');
        $types = Vocabulary::groupBy('type')->select('type')->pluck('type');
        $allowesdisplay = ["list"=>"","card"=>"-card"];
        $display = $allowesdisplay[request('display', 'list')]??"";
        $vocabulary = $language->Vocabularies()
        ->whereNotIn('id', $previous)
        ->inRandomOrder()->first();
        return view('admin.language.show', compact(
            'language', 'vocabularies', 'patterns', 
            'levels', 'types', 'display', 'vocabulary',
            'total',
            'count'
        ));
    }

    public function process($language, $vocabulary){
        $currenttype = request('known', '0')?'known':'unknown';
        $process = session($currenttype);
        $process[] = $vocabulary;
        session()->put($currenttype, $process);
        return redirect()->route('admin.language.show',[
            'language' => $language,
            'display' => request('display', ''),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vocabulary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VocabularyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vocabularies = Vocabulary::paginate();
        return view('admin.vocabulary', compact('vocabularies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $levels = Vocabulary::groupBy('level')->select('level')->pluck('level');
        $types = Vocabulary::groupBy('type')->select('type')->pluck('type');
        return view('admin.vocabulary.add', compact('levels', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vocabulary = Vocabulary::create(
            $request->all()
        );
        if($request->refer == 'back'){
            return back();
        }
        if($request->refer == 'language'){
            return redirect()->route('admin.language.show', $vocabulary->language);
        }
        return redirect()->route('admin.vocabulary.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

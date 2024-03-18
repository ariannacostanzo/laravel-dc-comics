<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{
    protected $validation_parameters = [
            'title' => 'required|string',
            'description' => 'required|string',
            'thumb' => 'required|string',
            'price' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string',
    ];

    protected $validation_messages = [
        //required
        'title.required' => 'Please insert a title',
        'description.required' => 'Please insert a description',
        'thumb.required' => 'Please insert a thumb',
        'price.required' => 'Please insert a price',
        'series.required' => 'Please insert a series',
        'sale_date.required' => 'Please insert a sale date',
        'type.required' => 'Please insert a type',
        'artists.required' => 'Please insert at least one artist',
        'writers.required' => 'Please insert at least one writer',
        //date
        'sale_date.date' => 'Wrong date format',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create', ['comic' => new Comic]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate($this->validation_parameters, $this->validation_messages);
        //prendo tutti i dati che mi sono arrivati dal form
        $data = $request->all();

        //istanzio un nuovo array associativo comic
        $comic = new Comic();

        //lo riempio con i data
        $comic->fill($data);

        //lo salvo nel database
        $comic->save();

        //redirect sulla pagina show del nuovo comic creato
        return to_route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //validazione
        $request->validate($this->validation_parameters, $this->validation_messages);

        //prendo i dati che mi sono arrivati
        $data = $request->all();
        // $comic->fill($data);
        // $comic->save();
        //fill e save in un comando
        $comic->update($data);

        //redirect su show
        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('message', "$comic->title successfully deleted!");
    }
}

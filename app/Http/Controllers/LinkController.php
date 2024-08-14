<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    protected $prefix = 'http://localhost/'; // Prefixo fixo

    public function generate()
    {
        return view('site.generate');
    }

    public function showForm()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'short_name' => 'required|string|max:255',
            'url' => 'required|url',
        ]);

        // Adiciona a URL encurtada
        $validated['short_url'] = $this->prefix . $validated['short_name']; // URL encurtada

        // Recupera links da sessão e adiciona o novo link
        $links = session()->get('links', []);
        $links[] = $validated;
        session()->put('links', $links);

        return redirect()->route('list');
    }

    public function list()
    {
        $links = session()->get('links', []);
        return view('site.list', ['links' => $links]);
    }

    public function remove(Request $request)
    {
        $urlToRemove = $request->input('url');
        $links = session()->get('links', []);

        // Filtra o array para remover o link com a URL real fornecida
        $links = array_filter($links, function ($link) use ($urlToRemove) {
            return $link['url'] !== $urlToRemove;
        });

        // Atualiza a sessão com os links restantes
        session()->put('links', $links);

        return redirect()->route('list');
    }
}
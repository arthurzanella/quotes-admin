<?php

namespace App\Http\Controllers\Admin;

use App\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class QuotesController extends Controller
{

    public function index()
    {
        $quotes = Quote::paginate(20);
        return view('admin.quotes.index', compact('quotes'));
    }


    public function create()
    {
        return view('admin.quotes.create');
    }


    public function store(Request $request)
    {
        $validate = $request->validate([
            'quote' => 'required|max:255',
            'author' => 'max:255',
        ]);
        $store = new Quote;
        $store->user_id = Auth::id();
        $store->quote = $request->quote;
        $store->author = $request->author;
        $store->save();
        return redirect()->route('admin.quotes.index')->with('status', 'success-added');

    }


    public function show($id)
    {
        //return view('admin.quotes.show', ['quote' => Quote::findOrFail($id)]);
    }


    public function edit($id)
    {
        $data = Quote::find($id);
        if ($data['user_id'] != Auth::id()) {
            return redirect()->route('admin.quotes.index')->with(['warning' => 'Você não pode editar a quote de outro usuário!']);
        }
        return view('admin.quotes.edit', ['quote' => $data]);
    }


    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'quote' => 'required|max:255',
            'author' => 'max:255',
        ]);
        $update = Quote::find($id);
        if ($update['user_id'] != Auth::id()) {
            return redirect()->route('admin.quotes.index')->with(['warning' => 'Você não pode atualizar a quote de outro usuário!']);
        }
        $update->quote = $request->quote;
        $update->author = $request->author;
        $update->save();
        return redirect()->route('admin.quotes.edit', ['id' => $update->id])->with('status', 'success-updated');
    }


    public function destroy(Quote $quote)
    {
        $destroy = Quote::findOrFail($quote->id);
        if ($destroy['user_id'] != Auth::id()) {
            return redirect()->route('admin.quotes.index')->with(['warning' => 'Você não pode excluir a quote de outro usuário!']);
        }
        $destroy->delete();
        return redirect()->route('admin.quotes.index')->with('status', 'success-deleted');
    }
}

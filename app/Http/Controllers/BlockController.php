<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Block;
use App\User;
use Freshbitsweb\Laratables\Laratables;


class BlockController extends Controller
{
    public function index()
    {
        return view('blocks.index');
    }

    public function getListDataTables()
    {
        return Laratables::recordsOf(Block::class);
    }

    public function create()
    {
        $users = User::getList();
        return view('blocks.create', ['users' => $users]);
    }

   public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required|max:100',
            'reason' => 'required|max:255',
            'temporal' => 'required|max:100',
            'user_id' => 'required|numeric',
        ]);
        $block = Block::create($validatedData);
        flashy()->success(__('messages.create_success'));

        return redirect('/blocks');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $users = User::getList();
        $block = Block::findOrFail($id);
        return view('blocks.edit', ['block' => $block, 'users' => $users]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'category' => 'required|max:100',
            'reason' => 'required|max:255',
            'temporal' => 'required|max:100',
            'user_id' => 'required|numeric',
        ]);

        Block::whereId($id)->update($validatedData);
        flashy()->success(__('messages.update_success'));

        return redirect('/blocks');
    }

    public function destroy($id)
    {
        $block = Block::findOrFail($id);
        $block->delete();
        flashy()->success(__('messages.delete_success'));

        return redirect('/blocks');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listItem;

class TodoListController extends Controller
{
    public function index()
    {
        return view('welcome', ['listItems' => listItem::all()]);
    }
    public function saveItem(Request $request)
    {
        $ListItemModel = new listItem;

        $ListItemModel->name = $request->listItem;
        $ListItemModel->is_complete = false;
        $ListItemModel->save();

        return redirect('/');
    }

    public function complete($id)
    {
        // Find the item by its ID
        $item = ListItem::findOrFail($id);
        $item->is_complete = true;
        // Delete the item
        $item->save();
        return redirect('/');
    }

    public function delItem($id)
    {
        $item = ListItem::findOrFail($id);

        $item->delete();
        return redirect('/');
    }
}

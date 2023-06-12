<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{

    function addItem(Request $req)
    {
        $item = new item();
      //  $itme->sNo = null;
        $item->item = $req->item;
        $item->save();
        return redirect('/');
    }

    public function showItem()
    {
        $items = item::all();
        return view('index', ['items' => $items]);
    }

    function deleteItem($sNo)
    {
        $item = item::find($sNo);
        $item->delete();
        return redirect('/');

    }

    function editItem($sNo)
    {
        $item = item::find($sNo);
        return view('edit',['item' => $item]);
    }

    function updateItem(Request $req)
    {
        $item = item::find($sNo);
        $item->item = $req->item;
        @item->save();
        return redirect('/');

    }
        
    //     function updateItem(Request $request, $sNo)
    // {
    //     $item = item::find($sNo);
    //     $item->item = $request->item;
    //     $item->save();
    //     return redirect('/');
    // }



}

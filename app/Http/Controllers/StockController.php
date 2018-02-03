<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$stocks = Stock::all();
        $stocks = Stock::orderBy('book_id', 'DESC')->paginate(5);
        return view('home', compact('stocks' ,$stocks));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('stockPages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $stock= new Stock;
        $stock->admin_id=$user->id;
        $stock->book_name=$request->b_name;
        $stock->author_name=$request->a_name;
        $stock->no_of_pieces=$request->pieceNo;
        $stock->edition=$request->edition;
        $stock->pub_name=$request->p_name;
        $stock->pub_year=$request->p_year;

        $cat_array=implode(", ", $request->catagory);
        $stock->catagory=$cat_array;
        $stock->save();

        return redirect('/home')->with('success', 'Boot has successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock $stock
     * @return \Illuminate\Http\Response
     */
    public function edit($stock)
    {
        $findStock=Stock::find($stock);
//     $catExplode=explode(", ",$findStock->catagory) ;
//    return view('stockPages.edit')->with('stock', $findStock)->with('catExplode',$catExplode);
        return view('stockPages.edit')->with('stock', $findStock);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        $user = Auth::user();
        $stock->admin_id=$user->id;
        $stock->book_name=$request->b_name;
        $stock->author_name=$request->a_name;
        $stock->no_of_pieces=$request->pieceNo;
        $stock->edition=$request->edition;
        $stock->pub_name=$request->p_name;
        $stock->pub_year=$request->p_year;

        $cat_array=implode(", ", $request->catagory);
        $stock->catagory=$cat_array;
        $stock->save();

        return redirect('/home')->with('success', 'Boot has successfully Updated');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy($stock)
    {
        $findStock = Stock::find($stock);
        $findStock->delete();
        return redirect('/home')->with('success', 'Book has successfully Removed');
    }

}

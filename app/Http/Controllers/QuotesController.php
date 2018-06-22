<?php

namespace App\Http\Controllers;

use App\Quotation;
use App\Sender;
use Illuminate\Http\Request;

use App\Http\Requests;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('admin.quotation.index');
// this is right       $sender = Sender::with('quotations')->get();
        $quote = Quotation::all();
        $sender = Sender::with('quotation')->findMany(['1']);


//        return $sender->quotations;
//        $sender->each(function($senders) // foreach($posts as $post) { }
//        {
//            echo $senders;
//           echo $senders->quotations;
//        });
//        foreach($sender->quotations as $quote){
//            echo $quote->commodity;
//        }

//       return $quote->commodity;

        return view('admin.quotation.index', compact( 'quote','sender'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

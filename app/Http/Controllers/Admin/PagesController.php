<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkWithPage;

class PagesController extends Controller
{
    public function __construct(){
      $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->isAdminOrEditor())
          $pages = Page::defaultOrder()->paginate(5);
        else
          $pages =Auth::user()->pages()->defaultOrder()->paginate(5);

        return view('admin.pages.index', ['pages'=>$pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create', [
          'modal'=>new Page(),
          'orderPages' => Page::defaultOrder()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkWithPage $request)
    {
        Auth::user()->pages()->save(new Page($request->only(['title','uri','content'])));

        $this->updatePageOrder($page,$request);

        return redirect()->route('pages.index')->with('status', 'The page has been created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        if(Auth::user()->cant('update',$page))
          return redirect()->route('pages.index');

        return view('admin.pages.edit', [
          'modal'=>$page,
          'orderPages' => Page::defaultOrder()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(WorkWithPage $request, Page $page)
    {
      if(Auth::user()->cant('update',$page))
        return redirect()->route('pages.index')->with('status', 'You cant edit this page');


        if($response = $this->updatePageOrder($page,$request)){
          return $response;
        }

        $page->fill($request->only(['title','uri','content']))->save();
        return redirect()->route('pages.index')->with('status', 'The page has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
      if(Auth::user()->cant('delete',$page))
        return redirect()->route('pages.index');
    }

    protected function updatePageOrder(Page $page, Request $request){
      if($request->has('order', 'orderPage')){
        if($page->id==$request->orderPage){
          return redirect()->rout('pages.edit', ['page'=>$page->id])->
            withInput()->withErrors(['error'=>'cannot order page']);
        }
        return $page->updateOrder($request->order, $request->orderPage);
      }
    }
}

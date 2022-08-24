<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Cv;
use Auth;
use App\Http\Requests\CvRequest;


class CvController extends Controller
{

	//middelware auth

	public function __construct(){
		$this->middleware('auth');
	}
    //Les Methodes de base

    //index method
    public function index(){
    	/*$cv = Cv::where('user_id' , Auth::user()->id)->get();*/
        if(Auth::user()->is_admin){
            $cv = Cv::all();
        }else{
        $cv = Auth::user()->cvs;
        }
    	return view ('cv.index' , ['cvs' => $cv]);

    }

    public function show(CvRequest $request,$id){
        $cvs = Cv::find($id);
        return view('cv.show' , ['cvs' => $cvs]);

    }
    //index method
    public function create(){
    	return view ('cv.create');
    }
    //index method
    public function store(CvRequest $request){

    	$newcv = new Cv();
    	$newcv->title=$request->input('title');
    	$newcv->presentation=$request->input('presentation');
        $newcv->user_id = Auth::user()->id;
       
        if($request->hasFile('photo')){
            $newcv->photo = $request->photo->store('image');
        }

    	$newcv->save();
    	session()->flash('save','CV SAVED SUCCESSFULLY');
    	return redirect('cvs');
    	
    }
     public function edit($id){

    		$mycv = Cv::find($id);

            $this->authorize('update', $mycv);

    	return view ('cv.edit' , ['cv' => $mycv]);
    	
    }

    
    //sending new data to update and older row over there (Updating Data)
    public function update(CvRequest $request, $id){
    	$cv = Cv::find($id);
    		$cv -> title = $request->input('title');
    		$cv -> presentation = $request->input('presentation');

          /*if($request->hasFile('photo')){
            $cv->photo = $request->photo->store('image');
          }*/

            if($request->hasFile('photo')){
            $cv->photo = $request->photo->store('image');
        }

       

              

        $cv->save();
        session()->flash('update','CV UPDATED SUCCESSFULLY');
        return redirect('cvs');
    		
    	
    }
    //Deleting Data (active / inactive)
    public function destroy(Request $request,$id){
		$cv = Cv::find($id);
         $this->authorize('delete', $cv);
		$cv -> delete();
		session()->flash('delete','CV DELETED SUCCESSFULLY');
		return redirect('cvs');  
	 	
    }
}

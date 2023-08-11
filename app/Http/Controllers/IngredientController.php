<?php

namespace App\Http\Controllers;
/**
 * :: Ingredient Controller ::
 * To manage games.
 *
 **/
use Intervention\Image\ImageManagerStatic as Image;
use Auth;
use Files;
use Illuminate\Support\Facades\Storage;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends  Controller{
 
    public function  index() {
        return view('admin.ingredient.index');
    }
  
    public function create() {
        return view('admin.ingredient.create');
    }



    public function store(Request $request) {
        
        $inputs = $request->all();
       // dd($request);
        try {
            $validator = (new Ingredient)->validate($inputs);
            if( $validator->fails() ) {
                return back()->withErrors($validator)->withInput();
            }

            if(isset($inputs['image']) or !empty($inputs['image']))  {
                $image_name = rand(100000, 999999);
                $fileName = '';
                if($file = $request->hasFile('image')) {
                    $file = $request->file('image');
                    $img_name = $file->getClientOriginalName();
                    $image_resize = Image::make($file->getRealPath()); 
                    $image_resize->resize(250, 348);
                    $fileName = $image_name.$img_name;
                    $image_resize->save(public_path('/uploads/category_images/' .$fileName));                      
                }
                $fname ='/uploads/category_images/';
                $image = $fname.$fileName;
            }
            else{
                $image = null;
            }

            unset($inputs['image']);
            $inputs['image'] = $image;

            (new Ingredient)->store($inputs);
           
            return redirect()->route('ingredients.index')
                ->with('success', lang('messages.created', lang('Ingredients')));
        } catch (\Exception $exception) {
            return redirect()->route('ingredients.create')
                ->withInput()
                ->with('error', lang('messages.server_error').$exception->getMessage());
        }
    }

  
    public function update(Request $request, $id = null) {

        $result = (new Ingredient)->find($id);
        if (!$result) {
            abort(401);
        }

        $inputs = $request->all();
        try {

            if(isset($inputs['image']) or !empty($inputs['image'])) {
                $image_name = rand(100000, 999999);
                $fileName = '';
                if($file = $request->hasFile('image')) {
                    $file = $request->file('image') ;
                    $img_name = $file->getClientOriginalName();
                    $image_resize = Image::make($file->getRealPath()); 
                    $image_resize->resize(250, 348);
                    $fileName = $image_name.$img_name;
                    $image_resize->save(public_path('/uploads/category_images/' .$fileName));
                }
                $fname ='/uploads/category_images/';
                $image = $fname.$fileName;

            }  else{
                $image = $result->image;
            }

            unset($inputs['image']);
            $inputs['image'] = $image;   

            (new Ingredient)->store($inputs, $id);
           
            return redirect()->route('ingredients.index')
                ->with('success', lang('messages.updated', lang('Ingredients')));
        } catch (\Exception $exception) {
            return redirect()->route('ingredients.edit', [$id])
                ->withInput()
                ->with('error', lang('messages.server_error'));
        }
    }

  
    public function edit($id = null) {
        $result = (new Ingredient)->find($id);
        if (!$result) {
            abort(401);
        }

        return view('admin.ingredient.create', compact('result'));
    }


    public function Paginate(Request $request, $pageNumber = null) {

        if (!\Request::isMethod('post') && !\Request::ajax()) { //
            return lang('messages.server_error');
        }

        $inputs = $request->all();
        $page = 1;
        if (isset($inputs['page']) && (int)$inputs['page'] > 0) {
            $page = $inputs['page'];
        }

        $perPage = 20;
        if (isset($inputs['perpage']) && (int)$inputs['perpage'] > 0) {
            $perPage = $inputs['perpage'];
        }

        $start = ($page - 1) * $perPage;
        if (isset($inputs['form-search']) && $inputs['form-search'] != '') {
            $inputs = array_filter($inputs);
            unset($inputs['_token']);

            $data = (new Ingredient)->getProduct($inputs, $start, $perPage);
            $totalGameMaster = (new Ingredient)->totalProduct($inputs);
            $total = $totalGameMaster->total;
        } else {

            $data = (new Ingredient)->getProduct($inputs, $start, $perPage);
            $totalGameMaster = (new Ingredient)->totalProduct();
            $total = $totalGameMaster->total;
        }

        return view('admin.ingredient.load_data', compact('inputs', 'data', 'total', 'page', 'perPage'));
    }

 
    public function Toggle($id = null) {
        if (!\Request::isMethod('post') && !\Request::ajax()) {
            return lang('messages.server_error');
        }

        try {
            $game = Ingredient::find($id);
        } catch (\Exception $exception) {
            return lang('messages.invalid_id', string_manip(lang('Ingredient')));
        }

        $game->update(['status' => !$game->status]);
        $response = ['status' => 1, 'data' => (int)$game->status . '.gif'];
        // return json response
        return json_encode($response);
    }

  
    public function Action(Request $request) {
        $inputs = $request->all();
        if (!isset($inputs['tick']) || count($inputs['tick']) < 1) {
            return redirect()->route('ingredients.index')
                ->with('error', lang('messages.atleast_one', string_manip(lang('Ingredient'))));
        }

        $ids = '';
        foreach ($inputs['tick'] as $key => $value) {
            $ids .= $value . ',';
        }

        $ids = rtrim($ids, ',');
        $status = 0;
        if (isset($inputs['active'])) {
            $status = 1;
        }

        Ingredient::whereRaw('id IN (' . $ids . ')')->update(['status' => $status]);
        return redirect()->route('ingredients.index')
            ->with('success', lang('messages.updated', lang('game_master.game')));
    }


    public function drop($id) {
        
        if (!\Request::ajax()) {
            return lang('messages.server_error');
        }

        $result = (new Ingredient)->find($id);
        if (!$result) {
            abort(401);
        }

        try {

            $result = (new Ingredient)->find($id);
            (new Ingredient)->tempDelete($id);
            $response = ['status' => 1, 'message' => lang('messages.deleted', lang('category.category'))];

            return json_encode($response);

        } catch (Exception $exception) {
            $response = ['status' => 0, 'message' => lang('messages.server_error')];
        }        
        
    }

    

}

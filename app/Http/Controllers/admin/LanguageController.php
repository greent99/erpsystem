<?php

namespace App\Http\Controllers\admin;

use App\Model\admin\Language;
use App\Model\admin\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;

class LanguageController extends Controller
{
    public function Index(Request $request)
    {
        if(checkRight($request,Auth::user()))
        {
            $data =Language::getLanguageFull('10');
            return view('admin/pages/languages/index',['data'=>$data]);
        }
    }
    public function getAdd(Request $request)
    {
        if(checkRight($request,Auth::user())) {
            return view('admin/pages/languages/add');
        }
    }
    public function postAdd(Request $request)
    {
        if(checkRight($request,Auth::user()) || Auth::user()->root==Setting::getValueUrl('root')->value){
            $validator = $this->validator($request->all());
            if(!$validator->fails())
            {
                $filename = changeTitle($request->name);
                $language = new Language();
                $language->name = $request->name;
                $language->url = $request->url;
                $language->icon = $request->icon;
                $language->sort = $request->sort;
                if ($request->hasFile('image'))
                {
                    $path =
                    $check = upload_image(Setting::getValueUrl('pathlanguage')->value, $request->file('image'), $filename);
                    if ($check == false)
                    {
                        return view('admin.pages.languages.add',['data'=>$validator->getdata(),'message'=>Lang::get('en.er_notupload').' '.Lang::get('en.pt_image'),'status'=>false]);
                    }
                    $language->image = $check;
                }
                if($language->save())
                {
                    return redirect(route('add_language'));
                }
            }

            return view('admin.pages.languages.add',['data'=>$validator->getdata()])->with('error',$validator->getMessageBag());
        }
    }

    public function getUpdate(Request $request)
    {
        if(checkRight($request,Auth::user()) || Auth::user()->root==Setting::getValueUrl('root')->value)
        {
            $id = $request->id;
            $language = Language::find($id);
            return view('admin/pages/languages/update', ['data' => $language]);
        }
    }

    public function postUpdate(Request $request)
    {
        if(checkRight($request,Auth::user()) || Auth::user()->root==Setting::getValueUrl('root')->value)
        {
            $validator = $this->validator($request->all());
            if(!$validator->fails())
            {
                $filename = changeTitle($request->name);
                $language = new Language();
                $language->name = $request->name;
                $language->url = $request->url;
                $language->icon = $request->icon;
                $language->sort = $request->sort;
                if ($request->hasFile('image'))
                {
                    $check = upload_image(Setting::getValueUrl('pathlanguage')->value, $request->file('image'), $filename);
                    if ($check == false)
                    {
                        return view('admin.pages.languages.add',['data'=>$validator->getdata(),'message'=>Lang::get('en.er_notupload').' '.Lang::get('en.pt_image'),'status'=>false]);
                    }
                    $language->image = $check;
                }
                $checkUpdate = DB::table('language')
                    ->where('id',$request->id)
                    ->update(['name'=>$language->name,'icon'=>$language->icon,'url'=>$language->url
                    ,'sort'=>$language->sort,'image'=>$language->image]);

                if($checkUpdate)
                {
                    return redirect(route('language'));
                }
            }
            return view('admin.pages.languages.add',['data'=>$validator->getdata()])->with('error',$validator->getMessageBag());
        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data,
            [
                'name'=>'required|min:3|max:100',
                'url'=>'required|max:50',
            ],
            [
                'name.required'=>Lang::get('en.pt_name').' '.Lang::get('en.er_required'),
                'name.min'=>Lang::get('en.pt_name').' '.Lang::get('en.er_min').' 3 '.Lang::get('en.pt_character'),
                'name.max'=>Lang::get('en.pt_name').' '.Lang::get('en.er_max').' 100 '.Lang::get('en.pt_character'),
                'url.required'=>Lang::get('en.pt_url').' '.Lang::get('en.er_required'),
                'url.max'=>Lang::get('en.pt_url').' '.Lang::get('en.er_max').' 50 '.Lang::get('en.pt_character'),
            ]);
    }


}

<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Area;
use App\Http\Requests\RequestArea;
use Illuminate\Support\Str;

class AdminAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $areas= Area::all();
        return view('admin::area.index',compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::area.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(RequestArea $requestArea)
    {
        $this->insertOrUpdate($requestArea);
        return redirect()->back()->with('success','Thêm mới thành công');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $area = Area::find($id);
        return view('admin::area.update',compact('area'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(RequestArea $requestArea,$id)
    {
        $this->insertOrUpdate($requestArea,$id);
        return redirect()->back()->with('success','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function insertOrUpdate($requestArea,$id='')
    {
            $area= new Area();
            if($id) $area= Area::find($id);
            $area->area_name = $requestArea->name;
            $area->area_slug = Str::slug($requestArea->name);

            if($requestArea->hasFile('avatar'))
            {
                $file = upload_image('avatar','area');
                if(isset($file['name']))
                {
                    $area->area_avatar = $file['name'];
                }
            }
            $area->save();
    }
    public function action($action,$id)
    {
        if($action)
        {
            $area = Area::find($id);
            switch ($action)
            {
                case 'delete':
                    $area->delete();
                    $messages = 'Xoá thành công';
                    break;
                case 'home':
                    $area->area_home = $area->area_home == 1 ? 0 : 1;
                    $messages = 'Cập nhật thành công';
                    $area->save();
                    break;
            }
        }
        return redirect()->back()->with('success',$messages);
    }
}

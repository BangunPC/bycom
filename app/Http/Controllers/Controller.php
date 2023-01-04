<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function getPcComponentDataTable(Model $pcComponentModel, $pcComponentView)
    {
        $data = $pcComponentModel->select('id','image','name','price','url')->get();

        // Change to rupiah format
        foreach ($data as $datum) {
            $datum['price'] = 'Rp ' . number_format($datum['price'], 0, ',', '.');
        }

        return DataTables::of($data)
        ->addColumn('url', function($data) {
            return view('admin.pc-components._link')->with('linkUrl', $data->url);
        })
        ->addColumn('action', function($data) use($pcComponentView) {
            return view('admin.pc-components.'.$pcComponentView.'._aksi')->with('data', $data);
        })
        ->addColumn('image', function($data) use($pcComponentView) {
            return view('admin.pc-components.'.$pcComponentView.'._gambar')->with('imgName', $data->image);
        })
        ->make(true);
    }
}

<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $portfolios = Portfolio::all();
        return view('vendor.backpack.base.portfolio.portfolio', ['portfolios' => $portfolios]);
    }

    public function store(Request $request)
    {
        $portfolio = new Portfolio();
        $portfolio->title = $request->title;
      //  $portfolio->image = $request->image;
        $portfolio->client = $request->client;
        $portfolio->description = $request->description;
        $portfolio->technology = $request->technology;
        $portfolio->released = $request->released;

        if($request->hasFile('image')){
            $dir = 'uploads/';
            $extension = strtolower($request->file('image')->getClientOriginalExtension());
            $filename = str_random() . '.' . $extension;
            $request->file('image')->move($dir, $filename);
            $portfolio->image = $filename;
        }

        $portfolio->save();
        return redirect('/admin/portfolio');
    }

    public function create(Request $request)
    {
        $portfolios = Portfolio::all();
        if($request->isMethod('get')){
            return view('vendor.backpack.base.portfolio.create');
        }
        return '';
    }

    public function delete($id)
    {
        Portfolio::destroy($id);
        return redirect('/admin/portfolio');
    }

    public function update(Request $request, $id)
    {
        dd('update');
        return;
        if ($request->isMethod('get'))
            return view('imageCrud.form', ['image' => Portfolio::find($id)]);
        else {
            $rules = [
                'description' => 'required',
            ];
            $this->validate($request, $rules);
            $image = Portfolio::find($id);
            if ($request->hasFile('image')) {
                $dir = 'uploads/';
                if ($image->image != '' && File::exists($dir . $image->image))
                    File::delete($dir . $image->image);
                $extension = strtolower($request->file('image')->getClientOriginalExtension());
                $fileName = str_random() . '.' . $extension;
                $request->file('image')->move($dir, $fileName);
                $image->image = $fileName;
            } elseif ($request->remove == 1 && File::exists('uploads/' . $image->image)) {
                File::delete('uploads/' . $image->post_image);
                $image->image = null;
            }
            $image->description = $request->description;
            $image->save();
            return redirect('/laravel-crud-image-gallery');
        }
    }
}

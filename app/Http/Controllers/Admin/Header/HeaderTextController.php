<?php

namespace App\Http\Controllers\Admin\Header;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Contracts\ImageProcessor;
use App\Models\Header;
use Http\Client\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderTextController extends Controller
{
    public function index() {

        $items = Header::all();

        $arr = [];

        foreach ($items as $item) {

            $arr[$item->type] = $item->value;
        }

        return view('admin.header.index', compact('arr'));
    }

    public function update(Request $request, ImageProcessor $imageProcessor) {

        if ($request->place) {

            Header::updateOrCreate(
                ['type' => 'place'],
                ['value' => $request->input('place')]
            );
        }

        if ($request->email) {

            Header::updateOrCreate(
                ['type' => 'email'],
                ['value' => $request->input('email')]
            );
        }

        if ($request->email) {

            Header::updateOrCreate(
                ['type' => 'phone'],
                ['value' => $request->input('phone')]
            );
        }

        if ($request->email) {

            Header::updateOrCreate(
                ['type' => 'logo-text'],
                ['value' => $request->input('logo-text')]
            );
        }

        if ($request->logo) {

            $current_logo = Header::where('type', 'logo')->first();

            if($request->hasFile('logo')) {

                if ($current_logo != null && file_exists($current_logo->value)) {
                    unlink(public_path($current_logo->value));
                }

                $path = $imageProcessor::compressAndSave($request, 'logo', 'storage/uploads/');

                Header::updateOrCreate(
                    ['type' => 'logo'],
                    ['value' => $path]
                );
            }

        }

        if ($request->width) {

            Header::updateOrCreate(
                ['type' => 'width'],
                ['value' => $request->input('width')]
            );
        }

        if ($request->height) {

            Header::updateOrCreate(
                ['type' => 'height'],
                ['value' => $request->input('height')]
            );
        }

        return redirect('/admin/header/text');
    }
}

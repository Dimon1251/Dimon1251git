<?php

namespace App\Http\Controllers;

use App\Models\ContactMod;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('home');
    }

    public function create() {
        return view('create');
    }

    public function about() {
        return view('about');
    }

    public function deleteMessage($id)
    {
        ContactMod::find($id)->delete();
        return redirect()->route('review');


    }

    public function review() {
        $reviews = new ContactMod();
     return view('review',['review' => $reviews->all()]);
    //    return view('review');
    }

    public function review_check(Request $request) {
        $valid = $request->validate([
            'nickname' => 'required|min:4|max:100',
            'real_name' => 'required|min:4|max:100',
            'origin_description' => 'required|min:4|max:500',
            'superpowers' => 'required|min:4|max:100',
            'catch_phrase' => 'required|min:4|max:500'
        ]);

        $review = new ContactMod();
        $review->nickname = $request->input('nickname');
        $review->real_name = $request->input('real_name');
        $review->origin_description = $request->input('origin_description');
        $review->superpowers = $request->input('superpowers');
        $review->catch_phrase = $request->input('catch_phrase');

        $review->save();

        return redirect()->route('review');

    }


    public function showOneMessage($id){
        $contact = new ContactMod();
        return view('one-message', ['data' => $contact->find($id)]);
    }

    public function updateMessage($id){
        $contact = new ContactMod();
        return view('update-message', ['data' => $contact->find($id)]);
    }

public function updateMessageSubmit($id, Request $request) {
    $valid = $request->validate([
        'nickname' => 'required|min:4|max:100',
        'real_name' => 'required|min:4|max:100',
        'origin_description' => 'required|min:4|max:100',
        'superpowers' => 'required|min:4|max:100',
        'catch_phrase' => 'required|min:4|max:100',
    ]);

    $review = ContactMod::find($id);
    $review->nickname = $request->input('nickname');
    $review->real_name = $request->input('real_name');
    $review->origin_description = $request->input('origin_description');
    $review->superpowers = $request->input('superpowers');
    $review->catch_phrase = $request->input('catch_phrase');

    $review->save();

    return redirect()->route('review');
    }


    public function store(Request $request)
{
    // Validate the inputs

    // ensure the request has a file before we attempt anything else.
if ($request->hasFile('file')) {

$request->validate([
'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
]);

    // Save the file locally in the storage/public/ folder under a new folder named /product
$request->file->store('product', 'public');

    // Store the record, using the new file hashname which will be it's new filename identity.
$product = new ContactMod([
    "nickname" => $request->get('nickname'),
    "real_name" => $request->get('real_name'),
    "origin_description" => $request->get('origin_description'),
    "superpowers" => $request->get('superpowers'),
    "catch_phrase" => $request->get('catch_phrase'),

"file_path" => $request->file->hashName()
]);
$product->save(); // Finally, save the record.
}

    return redirect()->route('review');

}



}

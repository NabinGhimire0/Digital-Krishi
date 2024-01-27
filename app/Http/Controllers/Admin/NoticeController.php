<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // fetch those notice where auth id is equal to user id
        $notice = Notice::where('user_id',auth()->user()->id)->get();
        return view('admin.pages.notice.index',compact('notice'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);

        $notice = new Notice();
        $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->user_id = auth()->user()->id;
        $notice->status = $request->status ? 1 : 0;
        $notice->save();
        return redirect('admin/notice')->with('status', 'Notice created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $notice = Notice::find($id);
        return view('admin.pages.notice.edit',compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $notice = Notice::find($id);
        $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->user_id = auth()->user()->id;
        $notice->status = $request->status ? 1 : 0;
        $notice->save();
        return redirect('/admin/notice')->with('status', 'Notice updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notice = Notice::find($id);
        $notice->delete();
        return redirect('/admin/notice')->with('status', 'Notice deleted successfully.');
    }
}

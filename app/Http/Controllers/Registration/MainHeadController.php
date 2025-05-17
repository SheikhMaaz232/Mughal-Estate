<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;

use App\Http\Requests\MainHeadRequest;
use App\Services\MainHeadService;
use Illuminate\Http\Request;

class MainHeadController extends Controller
{
    protected $mainHeadService;

    public function __construct(MainHeadService $mainHeadService)
    {
        $this->mainHeadService = $mainHeadService;
    }

    public function index()
    {
        $mainHeads = $this->mainHeadService->getAll();
        return view('main_heads.index', compact('mainHeads'));
    }

    public function create()
    {
        return view('main_heads.create');
    }

    public function store(MainHeadRequest $request)
    {
        // $request->validate(['name_urdu' => 'required|string|max:255']);
        $this->mainHeadService->create($request->only('name_english','name_urdu'));
        return redirect()->route('main-heads.index')->with('success', 'Created successfully');
    }

    public function edit($id)
    {
        $mainHead = $this->mainHeadService->getById($id);
        return view('main_heads.edit', compact('mainHead'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $this->mainHeadService->update($id, $request->only('name'));
        return redirect()->route('main-heads.index')->with('success', 'Updated successfully');
    }

    public function destroy($id)
    {
        $this->mainHeadService->delete($id);
        return redirect()->route('main-heads.index')->with('success', 'Deleted successfully');
    }
}

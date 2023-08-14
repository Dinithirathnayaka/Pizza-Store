<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rider;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class RiderController extends Controller
{


    public function index()
{
    $riders = Rider::paginate(5);
    return view('admin.riders.index', compact('riders'));
}

public function create()
{
    return view('admin.riders.create');
}

public function store(Request $request)
{
    try{
        $validatedData = $request->validate([
            'emp_id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:255',
            'imgurl' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        if ($request->hasFile('imgurl')) {
            $image = $request->file('imgurl');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('rider_images', $imagename);
            $validatedData['imgurl'] = $imagename;
        }

        Rider::create($validatedData);
        return redirect()->route('admin.riders')->with('success', 'Rider created successfully.');
    } catch (ValidationException $e) {
        return redirect()->back()->withErrors($e->errors())->withInput();
    } catch (\Throwable $th) {
        return redirect()->back()->withErrors(['error' => 'An error occurred while processing your request.'])->withInput();
    }

}

public function show(Rider $rider)
{
    return view('riders.show', compact('rider'));
}

public function edit(Rider $rider)
{
    return view('admin.riders.edit', compact('rider'));
}

public function update(Request $request, $id)
{
     try {
        $rider = Rider::findOrFail($id);

        $validatedData = $request->validate([
            'emp_id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:255',
            'imgurl' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('imgurl')) {
            $image = $request->file('imgurl');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('rider_images', $imagename);
            $validatedData['imgurl'] = $imagename;
        }

        $rider->update($validatedData);
        return redirect()->route('admin.riders')->with('success', 'Rider updated successfully.');
    } catch (ValidationException $e) {
        return redirect()->back()->withErrors($e->errors())->withInput();
    } catch (\Throwable $th) {
        return redirect()->back()->withErrors(['error' => 'An error occurred while processing your request.'])->withInput();
    }
}

public function destroy(Rider $rider)
{
    $rider->delete();
    return redirect()->route('riders.index')->with('success', 'Rider deleted successfully.');
}





}

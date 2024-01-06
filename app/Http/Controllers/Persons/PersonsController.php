<?php

namespace App\Http\Controllers\Persons;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persons;

class PersonsController extends Controller
{
    public function listView()
    {
        return view('admin.persons.personsList');
    }
    public function PersonData()
    {
        $persons = Persons::all();
        return $persons;
    }

    public function addPersonView()
    {
        return view('admin.persons.addPerson');
    }

    public function view($id)
    {
        $person = Persons::find($id);
        if ($person) {
            return response()->json($person, 200);
        } else {
            return response()->json(['message' => 'Company not found'], 404);
        }
        // return view('admin.persons.viewPerson', compact('person'));
    }

    public function viewEdit(Persons $person)
    {
        return view('admin.persons.editPerson', compact('person'));
    }

    public function registerPerson(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'email' => 'required|email|unique:persons,email',
            'phone' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'education_level' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'file' => 'required|string',
        ]);

        $person = new Persons();
        $person->first_name = $request->input('first_name');
        $person->last_name = $request->input('last_name');
        $person->gender = $request->input('gender');
        $person->email = $request->input('email');
        $person->phone = $request->input('phone');
        $person->country = $request->input('country');
        $person->region = $request->input('region');
        $person->date_of_birth = $request->input('date_of_birth');
        $person->education_level = $request->input('education_level');
        $person->role = $request->input('role');
        $fileData = $request->input('file');
        $fileName = time();
        $person->file = $fileName;

        $pdfFilePath = storage_path('app/' . $fileName . '.pdf');
        file_put_contents($pdfFilePath, base64_decode($fileData));

        if ($person->save()) {
            return response()->json(['message' => 'Person Added Successfully']);
        } else {
            return response()->json(['message' => 'Failed to add person']);
        }

    }
    public function getPDF($filename)
    {
        $path = storage_path('app/' . $filename . '.pdf'); // Adjust the path to match your storage structure
        if (file_exists($path)) {
            return response()->download($path, $filename . '.pdf', [], 'inline');
        } else {
            return response("File not found.", 404);
        }
    }

    public function editPerson(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'email' => 'required|email|unique:persons,email',
            'phone' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'education_level' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'file' => 'required|string',
        ]);
        $person = Persons::find($id);

        $person->first_name = $request->input('first_name');
        $person->last_name = $request->input('last_name');
        $person->gender = $request->input('gender');
        $person->email = $request->input('email');
        $person->phone = $request->input('phone');
        $person->country = $request->input('country');
        $person->region = $request->input('region');
        $person->date_of_birth = $request->input('date_of_birth');
        $person->education_level = $request->input('education_level');
        $person->role = $request->input('role');
        $fileData = $request->input('file');
        $fileName = time();
        $person->file = $fileName;

        $pdfFilePath = storage_path('app/' . $fileName . '.pdf');
        file_put_contents($pdfFilePath, base64_decode($fileData));

        if ($person->save()) {
            return response()->json(['message' => 'Person updated successfully']);
        } else {
            return response()->json(['message' => 'Failed to Person update']);
        }
    }

    public function deletePerson($id)
    {
        $person = Persons::find($id);
        $pdfFilePath = storage_path('app/' . $person->file . '.pdf');
        if (file_exists($pdfFilePath)) {
            unlink($pdfFilePath);
        }  
        $person->delete();
        return response()->json(['message' => 'Person deleted successfully']);
    }
}
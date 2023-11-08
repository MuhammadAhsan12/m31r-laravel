<?php

namespace App\Http\Controllers\Persons;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persons;

class PersonsController extends Controller
{
    public function listView()
    {
        $persons = Persons::all();
        return view('admin.persons.personsList')->with('personData', $persons);
    }

    public function addPersonView()
    {
        return view('admin.persons.addPerson');
    }

    public function view(Persons $person)
    {
        return view('admin.persons.viewPerson', compact('person'));
    }

    public function viewEdit(Persons $person)
    {
        return view('admin.persons.editPerson', compact('person'));
    }

    public function registerPerson(Request $request)
    {
        $personData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'gender' => 'required|in:male,female,other',
            'email' => 'required|email|unique:persons',
            'phone' => 'nullable|string',
            'country' => 'nullable|string',
            'region' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'education_level' => 'nullable|string',
            'role' => 'nullable|in:Project Manager,Expert,Qualitative Interviewer,Enumerator',
        ]);

        Persons::create($personData);

        return response()->json(['message' => 'Person added successfully']);
    }

    public function editPerson(Request $request, Persons $person)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'gender' => 'required|in:male,female,other',
            'email' => 'required|email|unique:persons,email,' . $person->id,
            'phone' => 'nullable|string',
            'country' => 'nullable|string',
            'region' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'education_level' => 'nullable|string',
            'role' => 'nullable|in:Project Manager,Expert,Qualitative Interviewer,Enumerator',
        ]);

        $person->update($validatedData);

        return response()->json(['message' => 'Person updated successfully', 'person' => $person]);
    }

    public function deletePerson(Persons $person)
    {
        $person->delete();
        return response()->json(['message' => 'Person deleted successfully']);
    }
}


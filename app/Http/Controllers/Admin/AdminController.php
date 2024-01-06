<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\Persons;
use App\Models\Companies;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view()
    {
        $userCount = User::count();
        $personCount = Persons::count();
        $companyCount = Companies::count();

        // Calculate the current month and previous month
        $currentMonth = Carbon::now()->month;
        $previousMonth = Carbon::now()->subMonth()->month;

        // Count of persons created in the current month
        $personsCurrentMonth = Persons::whereMonth('created_at', $currentMonth)->count();

        // Count of persons created in the previous month
        $personsPreviousMonth = Persons::whereMonth('created_at', $previousMonth)->count();

        // Count of companies created in the current month
        $companiesCurrentMonth = Companies::whereMonth('created_at', $currentMonth)->count();

        // Count of companies created in the previous month
        $companiesPreviousMonth = Companies::whereMonth('created_at', $previousMonth)->count();

        // Calculate the percentage change for persons
        $personsPercentageChange = 0;
        if ($personsPreviousMonth > 0) {
            $personsPercentageChange = (($personsCurrentMonth - $personsPreviousMonth) / $personsPreviousMonth) * 100;
            // Ensure the percentage is under 100
            // $personsPercentageChange = min($personsPercentageChange, 100);
        }

        // Calculate the percentage change for companies
        $companiesPercentageChange = 0;
        if ($companiesPreviousMonth > 0) {
            $companiesPercentageChange = (($companiesCurrentMonth - $companiesPreviousMonth) / $companiesPreviousMonth) * 100;
            // Ensure the percentage is under 100
            // $companiesPercentageChange = min($companiesPercentageChange, 100);
        }

        // Determine the arrow direction and text color for persons
        $personsArrowClass = $personsPercentageChange >= 0 ? 'mdi mdi-arrow-up' : 'mdi mdi-arrow-down';
        $personsTextClass = $personsPercentageChange >= 0 ? 'text-success' : 'text-danger';

        // Determine the arrow direction and text color for companies
        $companiesArrowClass = $companiesPercentageChange >= 0 ? 'mdi mdi-arrow-up' : 'mdi mdi-arrow-down';
        $companiesTextClass = $companiesPercentageChange >= 0 ? 'text-success' : 'text-danger';

        return view(
            'admin.index',
            compact(
                'userCount',
                'personCount',
                'companyCount',
                'personsCurrentMonth',
                'companiesCurrentMonth',
                'personsPercentageChange',
                'companiesPercentageChange',
                'personsArrowClass',
                'companiesArrowClass',
                'personsTextClass',
                'companiesTextClass'
            )
        );
    }
}

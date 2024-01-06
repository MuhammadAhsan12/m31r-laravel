@extends('admin.master')

@section('pagecontent')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card bg-white">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h4 class="mt-1 mb-1">Hi, {{ Auth::user()->name }} Welcomeback!</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @if (auth()->user()->role === 'admin')
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card border-0 border-radius-2 bg-success">
                        <div class="card-body">
                            <div
                                class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded-inverse-success icon-rounded-lg">
                                    <i class="mdi mdi-account menu-icon"></i>
                                </div>
                                <div class="text-white">
                                    <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Total User</p>
                                    <div
                                        class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1">{{ $userCount }}</h3>
                                        <small class="mb-0">This year</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="{{ auth()->user()->role === 'admin' ? 'col-md-4' : 'col-md-6' }} grid-margin stretch-card">
                <div class="card border-0 border-radius-2 bg-info">
                    <div class="card-body">
                        <div
                            class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                            <div class="icon-rounded-inverse-info icon-rounded-lg">
                                <i class="mdi mdi-basket"></i>
                            </div>
                            <div class="text-white">
                                <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Total Companies
                                </p>
                                <div
                                    class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                    <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1">{{ $companyCount }}</h3>
                                    <small class="mb-0">This year</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="{{ auth()->user()->role === 'admin' ? 'col-md-4' : 'col-md-6' }} grid-margin stretch-card">
                <div class="card border-0 border-radius-2 bg-warning">
                    <div class="card-body">
                        <div
                            class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                            <div class="icon-rounded-inverse-warning icon-rounded-lg">
                                <i class="mdi mdi-emoticon menu-icon"></i>
                            </div>
                            <div class="text-white">
                                <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Total Person</p>
                                <div
                                    class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                    <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1">{{ $personCount }}</h3>
                                    <small class="mb-0">This year</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 grid-margin">
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">Persons</p>
                                <div class="d-flex flex-wrap align-items-baseline">
                                    <h2 class="mr-3">{{ $personsCurrentMonth }}</h2>
                                    <i class="{{ $personsArrowClass }} mr-1 {{ $personsTextClass }}"></i>
                                    <span>
                                        <p class="mb-0 {{ $personsTextClass }} font-weight-medium">{{ number_format($personsPercentageChange, 2) }}%</p>
                                    </span>
                                </div>
                                <p class="mb-0 text-muted">Total persons created this month</p>
                            </div>
                            <canvas id="users-chart"></canvas>
                        </div>
                    </div>
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">Companies</p>
                                <div class="d-flex flex-wrap align-items-baseline">
                                    <h2 class="mr-3">{{ $companiesCurrentMonth }}</h2>
                                    <i class="{{ $companiesArrowClass }} mr-1 {{ $companiesTextClass }}"></i>
                                    <span>
                                        <p class="mb-0 {{ $companiesTextClass }} font-weight-medium">{{ number_format($companiesPercentageChange, 2) }}%</p>
                                    </span>
                                </div>
                                <p class="mb-0 text-muted">Total companies created this month</p>
                            </div>
                            <canvas id="projects-chart"></canvas>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">Users</p>
                                <p class="text-muted mb-2">Watching ice melt. This is fun. Only you could make those words
                                    cute.</p>
                                <div class="row mt-4">
                                    <div class="col-md-6 stretch-card">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-6">
                                                <div id="offlineProgress"></div>
                                            </div>
                                            <div class="col-6 pl-0">
                                                <p class="mb-0">Offline</p>
                                                <h2>45,324</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 stretch-card mt-4 mt-md-0">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-6">
                                                <div id="onlineProgress"></div>
                                            </div>
                                            <div class="col-6 pl-0">
                                                <p class="mb-0">Online</p>
                                                <h2>12,236</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@stop

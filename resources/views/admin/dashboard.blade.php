<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3">
                    <div class="card-body">
                        <h6>Profile</h6>
                        <!-- User Image -->
                        <img src="{{ asset('storage/'.Auth::user()->image) }}"
                            class="img-fluid rounded-circle mb-3" alt="User Image" width="50px" height="50px">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <strong>User Name:</strong> {{ Auth::user()->name }}
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Role:</strong> {{ Auth::user()->role }}
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Phone:</strong> {{ Auth::user()->phone }}
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Address:</strong>{{ Auth::user()->province->name }},{{ Auth::user()->city->name }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

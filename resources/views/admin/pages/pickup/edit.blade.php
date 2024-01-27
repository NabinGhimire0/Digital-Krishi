<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ 'Pickup Request' }}
        </h2>
    </x-slot>
    <div class="container mt-5">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif
        <form action="/pickup/{{ $pickup->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <strong>Farmer:</strong>
                                    {{ $pickup->user->name }}
                                </div>
                                <div class="col-md-6 mb-2">
                                    <strong>{{ $pickup->acceptedBy->name }} Contact:</strong>
                                    {{ $pickup->farmer_contact }}
                                    <input type="hidden" name="farmer_contact" value="{{ $pickup->farmer_contact }}" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <strong>Farmer Address:</strong>
                                    {{ $pickup->user->city->name }},{{ $pickup->user->province->name }}
                                </div>
                                <div class="col-md-6 mb-2">
                                    <strong>product:</strong> {{ $pickup->product->name }}
                                    <input type="hidden" name="product_id" value="{{ $pickup->product_id }}"
                                        id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <strong>Quantity:</strong> {{ $pickup->quantity }}
                                    <input type="hidden" name="quantity" value="{{ $pickup->quantity }}"
                                        id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <strong>Price:</strong>{{ $pickup->price }}
                                    <input type="hidden" name="price" value="{{ $pickup->price }}" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <strong>Pickup Address: </strong>{{ $pickup->pickup_address }}
                                    <input type="hidden" name="pickup_address" value="{{ $pickup->pickup_address }}"
                                        id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <strong>Pickup Date:</strong>{{ $pickup->pickup_date }} </strong>
                                    <input type="date" name="pickup_date" value="{{ $pickup->pickup_date }}" id="">
                                    <input type="hidden" name="accepted_by" value="{{ Auth::user()->id }}" id="">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>

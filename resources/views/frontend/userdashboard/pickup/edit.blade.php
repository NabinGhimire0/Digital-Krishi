<x-farmer-dashboard>
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

                                @if ($pickup->accepted_by)
                                    <div class="col-md-6 mb-2">
                                        <strong>Accepted By:</strong>
                                        {{ $pickup->acceptedBy->name }}
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <strong>{{ $pickup->acceptedBy->name }} Contact:</strong>
                                        {{ $pickup->acceptedBy->phone }}
                                    </div>
                                @else
                                    pending
                                @endif
                                <div class="col-md-6 mb-2">
                                    <strong>product:</strong> {{ $pickup->product->name }}
                                    <input type="hidden" name="product_id" value="{{ $pickup->product_id }}"
                                        id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <strong>Pickup Date:</strong>{{ $pickup->pickup_date }}
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
                                    <strong>Your Contact:</strong>{{ $pickup->farmer_contact }}
                                    <input type="hidden" name="farmer_contact" value="{{ $pickup->farmer_contact }}"
                                        id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <strong>Your Address: </strong>{{ $pickup->pickup_address }}
                                    <input type="hidden" name="pickup_address" value="{{ $pickup->pickup_address }}"
                                        id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="">Status:</label>
                                    <select name="status" id="">
                                        <option value="">Status</option>
                                        <option value="0" {{ $pickup->status == 0 ? 'selected' : '' }}>Pending
                                        </option>
                                        <option value="1" {{ $pickup->status == 1 ? 'selected' : '' }}>Completed
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="">Payment:</label>
                                    <select name="is_paid" id="">
                                        <option value="" selected disabled>Payment</option>
                                        <option value="0" {{ $pickup->is_paid == 0 ? 'selected' : '' }}>Not
                                            Received
                                        </option>
                                        <option value="1" {{ $pickup->is_paid == 1 ? 'selected' : '' }}>Received
                                        </option>
                                    </select>
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
</x-farmer-dashboard>

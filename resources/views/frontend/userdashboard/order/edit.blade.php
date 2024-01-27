<x-farmer-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ 'Farmer Dashboard' }}
        </h2>
    </x-slot>
    <div class="container mt-5">
        <form action="/orders/{{ $order->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h4>Orders</h4>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <strong>Tracking Number:</strong> {{ $order->tracking_number }}
                                </div>
                                <div class="col-md-6 mb-2">
                                    <strong>product:</strong> {{ $order->product->name }}
                                </div>
                                <div class="col-md-12 mb-2">
                                    <strong>Farmer:</strong>{{ $order->user->name }}
                                </div>
                                <div class="col-md-6 mb-2">
                                    <strong>Buyer:</strong> {{ $order->user->name }}
                                </div>
                                <div class="col-md-6 mb-2">
                                    <strong>Quantity:</strong> {{ $order->quantity }}
                                </div>
                                <div class="col-md-12 mb-2">
                                    <strong>Price:</strong>{{ $order->price }}
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="">Status:</label>
                                    <select name="status" id="">
                                        <option value="">Status</option>
                                        <option value="0" {{ $order->status == 0 ? 'selected' : '' }}>Pending
                                        </option>
                                        <option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Delevered
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="">Payment:</label>
                                    <select name="is_paid" id="">
                                        <option value="" selected disabled>Status</option>
                                        <option value="0" {{ $order->is_paid == 0 ? 'selected' : '' }}>Not
                                            Received
                                        </option>
                                        <option value="1" {{ $order->is_paid == 1 ? 'selected' : '' }}>Received
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
    @if (session('status'))
        @section('scripts')
            <script>
                $(function() {
                    var Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    });

                    Toast.fire({
                        icon: 'success',
                        title: '{{ session('status') }}'
                    });
                });
            </script>
        @endsection
    @endif
</x-farmer-dashboard>

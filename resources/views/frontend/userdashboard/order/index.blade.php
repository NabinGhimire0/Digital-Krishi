<x-farmer-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 class="card-title">Orders</h3>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Tracking Number</th>
                                        <th>Product</th>
                                        <th>Farmer</th>
                                        <th>Buyer</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Order Date</th>
                                        <th>payment status</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($order))
                                        @foreach ($order as $order)
                                            <tr>
                                                <th>{{ $order->tracking_number }}</th>
                                                <td>{{ $order->product->name }}</td>
                                                <td>{{ $order->user->name }}</td>
                                                <td>{{ $order->user->name }}</td>
                                                <td>{{ $order->quantity }}</td>
                                                <td>{{ $order->price }}</td>
                                                <td>{{ $order->created_at }}</td>
                                                <td>{{ $order->is_paid == 1 ? 'Paid' : 'Unpaid' }}</td>
                                                <td>{{ $order->status == 1 ? 'Shipped' : 'Pending' }}</td>

                                                <td>
                                                    <a class="btn btn-block btn-primary"
                                                        href="{{ 'orders/' . $order->id . '/edit' }}">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Tracking Number</th>
                                        <th>Product</th>
                                        <th>Farmer</th>
                                        <th>Buyer</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Order Date</th>
                                        <th>payment status</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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

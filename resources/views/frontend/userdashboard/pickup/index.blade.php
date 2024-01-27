<x-farmer-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ 'Pickup Request' }}
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
                                    <h3 class="card-title">My Pickup</h3>
                                </div>
                                <div class="col-md-2">
                                    <a class="btn btn-block btn-primary" href="/pickup/create">Add</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>price</th>
                                        <th>quantity</th>
                                        <th>Accepted status</th>
                                        <th>payment</th>
                                        <th>pickup</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($pickup))
                                        @foreach ($pickup as $pickup)
                                            <tr>
                                                <td>{{ $pickup->product->name }}</td>
                                                <td>{{ $pickup->price }}</td>
                                                <td>{{ $pickup->quantity }}</td>
                                                <td>
                                                    @if ($pickup->pick_date)
                                                        {{ $pickup->pick_date }}
                                                    @else
                                                        <span class="badge badge-warning">Pending</span>
                                                    @endif
                                                </td>
                                                <td>{{ $pickup->is_paid == 1 ? 'Paid' : 'Unpaid' }}</td>
                                                <td>{{ $pickup->pickup == 1 ? 'completed' : 'done' }}</td>
                                                <td>
                                                    <a class="btn btn-block btn-primary"
                                                        href="{{ 'pickup/' . $pickup->id . '/edit' }}">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Product</th>
                                        <th>price</th>
                                        <th>quantity</th>
                                        <th>Status</th>
                                        <th>payment</th>
                                        <th>pickup</th>
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

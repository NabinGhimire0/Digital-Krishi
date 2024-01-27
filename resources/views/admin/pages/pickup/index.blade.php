<x-app-layout>
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
                                            @if (Auth::user()->province_id == $pickup->user->province_id)
                                                <tr>
                                                    <td>{{ $pickup->product->name }}</td>
                                                    <td>{{ $pickup->price }}</td>
                                                    <td>{{ $pickup->quantity }}</td>
                                                    <td>
                                                        @if ($pickup->pickup_date)
                                                            {{ $pickup->pickup_date }}
                                                        @else
                                                            <span class="badge badge-warning">Pending</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $pickup->is_paid == 1 ? 'Paid' : 'Unpaid' }}</td>
                                                    <td>{{ $pickup->pickup == 1 ? 'completed' : 'done' }}</td>
                                                    <td>
                                                        <a class="btn btn-block btn-primary"
                                                            href="{{ '/admin/pickup/' . $pickup->id . '/edit' }}">Edit</a>
                                                    </td>
                                                </tr>
                                            @endif
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
</x-app-layout>

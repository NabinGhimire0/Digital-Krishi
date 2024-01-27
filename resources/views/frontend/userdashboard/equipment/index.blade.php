<x-farmer-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ 'My Products' }}
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
                                    <h3 class="card-title">My Equipment</h3>
                                </div>
                                <div class="col-md-2">
                                    <a class="btn btn-block btn-primary" href="/equipment/create">Add</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Rate</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($equipment))
                                        @foreach ($equipment as $equipment)
                                            <tr>
                                                <td>{{ $equipment->name }}</td>
                                                <td><img src="{{ asset('storage/' . $equipment->image) }}"
                                                        alt="" style="width: 80px; height: 80px"></td>
                                                <td>{{ $equipment->price }}</td>
                                                <td>
                                                    <a class="btn btn-block btn-primary"
                                                        href="{{ 'equipment/' . $equipment->id . '/edit' }}">Edit</a>
                                                    {{-- <form action="{{ '/equipment/' . $equipment->id }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-block btn-danger">Delete</button>
                                                    </form> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>price</th>
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
    @section('scripts')
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
    @endsection
</x-farmer-dashboard>

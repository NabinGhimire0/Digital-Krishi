<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crop disease') }}
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
                                    <h3 class="card-title">Diseases</h3>
                                </div>
                                <div class="col-md-2">
                                    <a class="btn btn-block btn-primary" href="/admin/disease/create">Add</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($disease))
                                        @foreach ($disease as $disease)
                                            <tr>
                                                <td>{{ $disease->name }}</td>
                                                <td><img src="{{ asset('storage/' . $disease->images) }}" alt="" style="width: 80px; height: 80px"></td>
                                                <td>
                                                    <a class="btn btn-block btn-primary"
                                                        href="{{ '/admin/disease/' . $disease->id . '/edit' }}">Edit</a>
                                                    <form action="{{ '/admin/disease/' . $disease->id }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-block btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>image</th>
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
</x-app-layout>

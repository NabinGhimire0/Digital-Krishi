<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Seeds') }}
        </h2>
    </x-slot>
    <!-- Main content -->
    <section class="content">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 class="card-title">Provinces</h3>
                                </div>
                                <div class="col-md-2">
                                    <a class="btn btn-block btn-primary" href="/admin/seeds/create">Add</a>
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
                                        <th>climate</th>
                                        <th>price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($seed))
                                        @foreach ($seed as $seed)
                                            <tr>
                                                <td>{{ $seed->name }}</td>
                                                <td><img src="{{ asset('storage/' . $seed->image) }}" alt=""
                                                        style="width: 80px; height: 80px"></td>
                                                <td>{{ $seed->climate }}</td>
                                                <td>{{ $seed->price }}</td>
                                                <td>
                                                    <a class="btn btn-block btn-primary"
                                                        href="{{ '/admin/seeds/' . $seed->id . '/edit' }}">Edit</a>
                                                    <form action="{{ '/admin/seeds/' . $seed->id }}" method="post">
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
                                        <th>Image</th>
                                        <th>climate</th>
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
</x-app-layout>

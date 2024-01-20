<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('City') }}
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
                                    <h3 class="card-title">Users</h3>
                                </div>
                                <div class="col-md-2">
                                    <a class="btn btn-block btn-primary" href="/admin/agroexpert/create">Add</a>
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
                                        <th>phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($agroexpert))
                                        @foreach ($agroexpert as $agroexpert)
                                            <tr>
                                                <td>{{ $agroexpert->name }}</td>
                                                <td><img src="{{ asset('storage/' . $agroexpert->image) }}"
                                                        width="100px" height="100px"></td>
                                                <td>{{ $agroexpert->contact }}</td>
                                                <td>
                                                    <a class="btn btn-block btn-primary"
                                                        href="{{ '/admin/agroexpert/' . $agroexpert->id . '/edit' }}">Edit</a>
                                                    <form action="{{ '/admin/agroexpert/' . $agroexpert->id }}" method="post">
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
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>phone</th>
                                        <th>Action</th>
                                    </tr>
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

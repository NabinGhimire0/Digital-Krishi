<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('city/edit') }}
        </h2>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 class="card-title">Edit</h3>
                                </div>
                                <div class="col-md-2">
                                    <a class="btn btn-block btn-primary" href="/admin/city">Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/admin/city/{{ $city->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Province</label>
                                    <select class="form-control select2" name="province_id" style="width: 100%;">
                                        <option selected="selected">Select Province</option>
                                        @foreach ($province as $province)
                                            <option value="{{ $province->id }}" {{ $city->province_id == $province->id ? 'selected' : '' }}>{{ $province->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Province Name:</label>
                                    <input type="text" class="form-control" name="name" {{ old('name') }}
                                        value="{{ $city->name }}" id="name" placeholder="Enter Province Name">
                                    <x-input-error :messages="$errors->get('name')" />
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('disease/Edit') }}
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
                                    <a class="btn btn-block btn-primary" href="/admin/disease">Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/admin/disease/{{ $disease->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Name:</label>
                                    <input type="text" class="form-control" name="name" value="{{ $disease->name }}" {{ old('name') }}
                                        id="name" placeholder="Enter Name">
                                    <x-input-error :messages="$errors->get('name')" />
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name">Image:</label>
                                            <input type="file" class="form-control" name="images" {{ old('images') }}
                                                id="images">
                                            <x-input-error :messages="$errors->get('images')" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('storage/'.$disease->images) }}" alt="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Symptoms:</label>
                                    <textarea name="symptoms" id="symptoms" class="form-control" cols="30" rows="10">{{ $disease->symptoms }}</textarea>
                                    <x-input-error :messages="$errors->get('symptoms')" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Solution:</label>
                                <textarea id="summernote" name="solution" id="solution" class="form-control" cols="30" rows="10">{!! $disease->solution !!}</textarea>
                                <x-input-error :messages="$errors->get('solution')" />
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

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Agroexpert/create') }}
        </h2>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            @endif
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 class="card-title">Create</h3>
                                </div>
                                <div class="col-md-2">
                                    <a class="btn btn-block btn-primary" href="/admin/agroexpert">Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/admin/agroexpert" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name" {{ old('name') }}
                                        id="name" placeholder="Enter Name">
                                    <x-input-error :messages="$errors->get('name')" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Email:</label>
                                    <input type="email" class="form-control" name="email" {{ old('email') }}
                                        id="email" placeholder="Enter Email">
                                    <x-input-error :messages="$errors->get('email')" />
                                </div>
                                <div class="form-group">
                                    <label for="">Description:</label>
                                    <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                                    <x-input-error :messages="$errors->get('description')" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Phone:</label>
                                    <input type="number" class="form-control" name="contact" {{ old('contact') }}
                                        id="contact" placeholder="Enter Phone number">
                                    <x-input-error :messages="$errors->get('contact')" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Image:</label>
                                    <input type="file" class="form-control" name="image" {{ old('image') }}
                                        id="image">
                                    <x-input-error :messages="$errors->get('image')" />
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="status" class="form-check-input" id="status">
                                    <label class="form-check-label" for="status">Status</label>
                                    <x-input-error :messages="$errors->get('status')" />
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

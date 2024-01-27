<x-farmer-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit') }}
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
                                    <h3 class="card-title">Edit</h3>
                                </div>
                                <div class="col-md-2">
                                    <a class="btn btn-block btn-primary" href="/equipment">Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/equipment/{{ $equipment->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Name:</label>
                                            <input type="text" class="form-control" value="{{ $equipment->name }}" name="name"
                                                {{ old('name') }} id="name" placeholder="Enter Price">
                                            <x-input-error :messages="$errors->get('name')" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Price:</label>
                                            <input type="number" class="form-control" value="{{ $equipment->price }}" name="price"
                                                {{ old('price') }} id="price" placeholder="Enter Price">
                                            <x-input-error :messages="$errors->get('price')" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Image:</label>
                                            <input type="file" class="form-control" name="image"
                                                {{ old('image') }} id="image">
                                            <x-input-error :messages="$errors->get('image')" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="{{ asset('storage/' . $equipment->image) }}" alt="" height="120px" width="120px">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Description:</label>
                                    <textarea name="description" id="description" class="form-control" cols="30" rows="6">{{ $equipment->description }}</textarea>
                                    <x-input-error :messages="$errors->get('description')" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Contact:</label>
                                    <input type="text" class="form-control" value="{{ $equipment->contact }}" name="contact" {{ old('contact') }}
                                        id="contact" placeholder="your contact">
                                    <x-input-error :messages="$errors->get('contact')" />
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Upload</button>
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
</x-farmer-dashboard>

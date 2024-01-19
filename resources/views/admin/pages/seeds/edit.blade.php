<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('seeds/edit') }}
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
                                    <a class="btn btn-block btn-primary" href="/seeds">Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/seeds/{{ $seed->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name" value="{{ $seed->name }}" {{ old('name') }}
                                        id="name" placeholder="Enter Name">
                                    <x-input-error :messages="$errors->get('name')" />
                                </div>
                                <div class="form-group">
                                    <label for="">Description:</label>
                                    <textarea name="shortdesc" id="shortdesc" class="form-control" cols="30" rows="10">{{ $seed->shortdesc }}</textarea>
                                    <x-input-error :messages="$errors->get('shortdesc')" />
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name">Image:</label>
                                            <input type="file" class="form-control" name="image" {{ old('image') }}
                                                id="image">
                                            <x-input-error :messages="$errors->get('image')" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('storage/'.$seed->image) }}" alt="" style="width: 80px; height: 80px">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Climate:</label>
                                            <input type="text" class="form-control" name="climate"
                                                {{ old('climate') }} id="climate" value="{{ $seed->climate }}" placeholder="Enter climate">
                                            <x-input-error :messages="$errors->get('climate')" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Altitude:</label>
                                            <input type="text" class="form-control" name="altitude"
                                                {{ old('altitude') }} id="altitude" value="{{ $seed->altitude }}" placeholder="Enter altitude">
                                            <x-input-error :messages="$errors->get('altitude')" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Market Price:</label>
                                            <input type="text" class="form-control" name="market_price"
                                                {{ old('market_price') }} id="market_price" value="{{ $seed->market_price }}" placeholder="Enter price">
                                            <x-input-error :messages="$errors->get('market_price')" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Description:</label>
                                    <textarea name="description" id="description" class="form-control" cols="30" rows="10">{!! $seed->description !!}</textarea>
                                    <x-input-error :messages="$errors->get('description')" />
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

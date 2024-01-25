<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add to Marketplace') }}
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
                                    <a class="btn btn-block btn-primary" href="/admin/subadmin">Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/admin/marketplace" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Product</label>
                                    <select class="form-control select2" name="product_id" style="width: 100%;">
                                        <option selected="selected">Select Product</option>
                                        @foreach ($product as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Price:</label>
                                            <input type="number" class="form-control" name="price"
                                                {{ old('price') }} id="price" placeholder="Enter Price">
                                            <x-input-error :messages="$errors->get('price')" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="name">Quantity:</label>
                                            <input type="number" class="form-control" name="quantity"
                                                {{ old('quantity') }} id="quantity" placeholder="Enter Quantity">
                                            <x-input-error :messages="$errors->get('quantity')" />
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
                                </div>
                                <div class="form-group">
                                    <label for="">Short Description:</label>
                                    <textarea name="short_description" id="short_description" class="form-control" cols="30" rows="4"></textarea>
                                    <x-input-error :messages="$errors->get('short_description')" />
                                </div>
                                <div class="form-group">
                                    <label for="">Description:</label>
                                    <textarea id="summernote" name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                                    <x-input-error :messages="$errors->get('description')" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Contact:</label>
                                    <input type="text" class="form-control" name="contact" {{ old('contact') }}
                                        id="contact" placeholder="your contact">
                                    <x-input-error :messages="$errors->get('contact')" />
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="status" class="form-check-input" id="status">
                                    <label class="form-check-label" for="status">Status</label>
                                    <x-input-error :messages="$errors->get('status')" />
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add to Marketplace</button>
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

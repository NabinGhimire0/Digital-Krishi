<x-farmer-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Pickup Request') }}
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
                                    <a class="btn btn-block btn-primary" href="/pickup">Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/pickup" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Product</label>
                                    <select class="form-control select2" name="product_id" style="width: 100%;">
                                        <option selected="selected">Select Product</option>
                                        @foreach ($products as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }} (Market
                                                Price:{{ $item->market_price }})</option>
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
                                </div>
                                <div class="form-group">
                                    <label for="name">Contact:</label>
                                    <input type="number" class="form-control" name="farmer_contact"
                                        {{ old('farmer_contact') }} id="farmer_contact"
                                        placeholder="your farmer_contact">
                                    <x-input-error :messages="$errors->get('farmer_contact')" />
                                </div>
                                <div class="form-group">
                                    <label for="name">PickUp Address:</label>
                                    <input type="text" class="form-control" name="pickup_address"
                                        {{ old('pickup_address') }} id="pickup_address"
                                        placeholder="your pickup_address">
                                    <x-input-error :messages="$errors->get('pickup_address')" />
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
</x-farmer-dashboard>

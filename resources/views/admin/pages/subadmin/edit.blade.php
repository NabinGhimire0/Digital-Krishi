<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('subadmin/edit') }}
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
                                    <a class="btn btn-block btn-primary" href="/admin/subadmin">Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/admin/subadmin/{{ $subadmin->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ $subadmin->name }}" {{ old('name') }} id="name"
                                        placeholder="Enter Name">
                                    <x-input-error :messages="$errors->get('name')" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Email:</label>
                                    <input type="email" class="form-control" value="{{ $subadmin->email }}"
                                        name="email" {{ old('email') }} id="email" placeholder="Enter Email">
                                    <x-input-error :messages="$errors->get('email')" />
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Province</label>
                                            <select class="form-control select2" name="province_id"
                                                style="width: 100%;">
                                                <option selected="selected">Select Province</option>
                                                @foreach ($province as $province)
                                                    <option value="{{ $province->id }}"
                                                        {{ $subadmin->province_id == $province->id ? 'selected' : '' }}>
                                                        {{ $province->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <select class="form-control select2" name="city_id" style="width: 100%;">
                                                <option selected="selected">Select City</option>
                                                @foreach ($city as $city)
                                                    <option value="{{ $city->id }}"
                                                        {{ $subadmin->city_id == $city->id ? 'selected' : '' }}>
                                                        {{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Address:</label>
                                    <input type="text" class="form-control" name="address"
                                        value="{{ $subadmin->address }}" {{ old('address') }} id="address"
                                        placeholder="Enter Address">
                                    <x-input-error :messages="$errors->get('address')" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Phone:</label>
                                    <input type="number" class="form-control" name="phone"
                                        value="{{ $subadmin->phone }}" {{ old('phone') }} id="phone"
                                        placeholder="Enter Phone number">
                                    <x-input-error :messages="$errors->get('phone')" />
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name">Image:</label>
                                            <input type="file" class="form-control" name="image"
                                                {{ old('image') }} id="image">
                                            <x-input-error :messages="$errors->get('image')" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('storage/' . $subadmin->image) }}" alt=""
                                            style="width: 80px;height:80px;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Crop Area <span>applied only for farmer</span></label>
                                            <input type="text" class="form-control" name="crop_area"
                                                {{ old('crop_area') }} id="crop_area" {{ $subadmin->crop_area }}
                                                placeholder="Enter Crop Area">
                                            <x-input-error :messages="$errors->get('crop_area')" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control select2" name="role" style="width: 100%;">
                                                <option selected="selected">Select Role</option>
                                                <option value="farmer"
                                                    {{ $subadmin->role == 'farmer' ? 'selected' : '' }}>
                                                    Farmer</option>
                                                <option value="admin"
                                                    {{ $subadmin->role == 'admin' ? 'selected' : '' }}>
                                                    Admin</option>
                                                <option value="subadmin"
                                                    {{ $subadmin->role == 'subadmin' ? 'selected' : '' }}>Sub Admin
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="status" class="form-check-input" id="status">
                                    <label class="form-check-label" for="status"
                                        {{ $subadmin->status ? 'checked' : '' }}>Status</label>
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

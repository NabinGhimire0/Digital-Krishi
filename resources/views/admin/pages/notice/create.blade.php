<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('notice/create') }}
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
                                    <h3 class="card-title">Create</h3>
                                </div>
                                <div class="col-md-2">
                                    <a class="btn btn-block btn-primary" href="/admin/city">Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/admin/notice" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Title:</label>
                                    <input type="text" class="form-control" name="title" {{ old('title') }}
                                        id="title" placeholder="Enter Province Name">
                                    <x-input-error :messages="$errors->get('title')" />
                                </div>
                                <div class="form-group">
                                    <label for="">Description:</label>
                                    <textarea id="summernote" name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                                    <x-input-error :messages="$errors->get('description')" />
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

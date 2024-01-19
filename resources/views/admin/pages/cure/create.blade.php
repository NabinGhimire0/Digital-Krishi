<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cure/create') }}
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
                                    <a class="btn btn-block btn-primary" href="/cure">Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/cure" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Disease</label>
                                    <select class="form-control select2" name="disease_id" style="width: 100%;">
                                        <option selected="selected">Select Disease</option>
                                        @foreach ($disease as $disease)
                                            <option value="{{ $disease->id }}">{{ $disease->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Medicine</label>
                                    <input type="text" class="form-control" name="medicine" {{ old('medicine') }}
                                        id="medicine" placeholder="Enter Medicine">
                                    <x-input-error :messages="$errors->get('medicine')" />
                                </div>
                                <div class="form-group">
                                    <label for="">procedure:</label>
                                    <textarea name="procedure" id="procedure" class="form-control" cols="30" rows="10"></textarea>
                                    <x-input-error :messages="$errors->get('procedure')" />
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

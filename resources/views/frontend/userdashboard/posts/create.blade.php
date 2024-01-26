<x-farmer-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('post/create') }}
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
                                    <a class="btn btn-block btn-primary" href="/dashboard">Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/posts" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" {{ old('title') }}
                                        id="title" placeholder="Express your thought here..">
                                    <x-input-error :messages="$errors->get('title')" />
                                </div>
                                <div class="form-group">
                                    <label for="">upload video or photo</label>
                                    <input type="file" class="form-control" name="media[]" id="media"
                                        id="media" accept="image/*,video/*" onchange="displaySelectedImages()"
                                        multiple>
                                    <x-input-error :messages="$errors->get('media')" />
                                </div>
                                <div class="row" id="imageRow">
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
    @section('scripts')
        <script>
            function displaySelectedImages() {
                const input = document.getElementById('media');
                const imageRow = document.getElementById('imageRow');

                // Clear previous images
                imageRow.innerHTML = '';

                // Make sure files are selected
                if (input.files && input.files.length > 0) {
                    for (let i = 0; i < input.files.length; i++) {
                        const reader = new FileReader();
                        const img = document.createElement('img');
                        const colDiv = document.createElement('div');

                        // Bootstrap class for column
                        colDiv.className = 'col-md-2';

                        reader.onload = function(e) {
                            // Set the source of the image element to the selected image
                            img.src = e.target.result;
                        };

                        // Read the selected file as a data URL
                        reader.readAsDataURL(input.files[i]);

                        // Set image properties (you can customize this based on your needs)
                        img.alt = "Selected Image";
                        img.style.maxHeight = '120px';
                        img.style.maxWidth = '100%';

                        // Append the image to the column div
                        colDiv.appendChild(img);

                        // Append the column div to the row
                        imageRow.appendChild(colDiv);
                    }
                }
            }
        </script>
    @endsection

</x-farmer-dashboard>

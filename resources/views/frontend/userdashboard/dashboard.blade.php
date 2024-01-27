<x-farmer-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ 'Dashboard' }}
        </h2>
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3">
                    <div class="card-body">
                        <h6>Profile</h6>
                        <!-- User Image -->
                        <img src="{{ asset('assets/images/user-profile-circle-solid.1024x1024.png') }}"
                            class="img-fluid rounded-circle mb-3" alt="User Image" width="50px" height="50px">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <strong>User Name:</strong> {{ Auth::user()->name }}
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Phone:</strong> {{ Auth::user()->phone }}
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Address:</strong>{{ Auth::user()->province->name }},{{ Auth::user()->city->name }}
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($post as $item)
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->user->name }}</h5>
                            <p class="card-text">{{ $item->title }}</p>

                            <!-- Image Section -->
                            @php
                                $contentArray = json_decode($item->content, true);
                            @endphp
                            @if ($contentArray)
                                <div class="row">
                                    @foreach ($contentArray as $content)
                                        @if ($content['type'] === 'image')
                                            <div class="col-6">
                                                <img src="{{ asset('storage/' . $content['path']) }}" class="img-fluid"
                                                    alt="Image" height="400" width="400">
                                            </div>
                                        @else
                                            <video width="100%" controls>
                                                <source src="{{ asset('storage/' . $content['path']) }}"
                                                    type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                            <!-- Edit and Delete Buttons -->
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-md-1">
                                        <button type="button"
                                            onclick="location.href='/posts/{{ $item->id }}/edit'"
                                            class="btn btn-secondary mr-2">Edit</button>
                                    </div>
                                    <div class="col-md-2 align-baseline">
                                        <form action="/posts/{{ $item->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <p class="card-text"><small class="text-muted">1 day ago</small></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
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

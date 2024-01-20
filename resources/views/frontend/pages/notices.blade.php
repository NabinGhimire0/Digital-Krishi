<x-guest-layout>
    <div style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')

    </div>

    <div class="wrapper">
        <div style="text-align: center;margin-block-start: 2rem">
            <h1>Notice</h1>
        </div>
        <div class="notices" style="margin-block: 2rem">
            <table>
                <thead>
                    <tr>
                        <th class="w-10-6">
                            <p class="font-semibold">Notice Name</p>
                        </th>

                        <th>
                            <p class="font-semibold">Description</p>
                        </th>
                        <th>
                            <p class="font-semibold">Action</p>
                        </th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($notices as $notice)

                    <tr>

                        <td>{{$notice->title}}</td>

                        <td>{{$notice->description}}</td>
                        <td>
                            <a href="notice/{{$notice->id}}">
                                <button>view  </button>
                            </a>

                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
           

          
        </div>
    </div>
    

</x-guest-layout>


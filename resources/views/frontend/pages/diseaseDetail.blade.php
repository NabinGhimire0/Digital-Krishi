<x-guest-layout>
    <div
        style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')

    </div>

    <div class="wrapper">
        <div style="text-align: center;margin-block-start: 2rem">
            <h1>{{ $diseases->name }}</h1>
        </div>
        <div class="notices" style="margin-block: 2rem;">
            <table>
                <thead>
                    <tr style="color:black">
                        <th class="w-10-6">
                            <p class="font-semibold">Symptoms</p>
                        </th>

                        <th>
                            <p class="font-semibold">Solutions</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 25%">
                            {!! $diseases->symptoms !!}
                        </td>

                        <td>
                            <h2>Medicine: {{ $cure->medicine }}</h2>
                            <div>
                                {!! $cure->procedure !!}
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</x-guest-layout>

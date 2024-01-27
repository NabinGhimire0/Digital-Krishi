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
            <h1>Notice</h1>
        </div>
        <div class="notices" style="margin-block: 2rem;">
            <table>
                <thead>
                    <tr style="color:black">
                        <th class="w-10-6">
                            <p class="font-semibold">{{ GoogleTranslate::trans('Notices',\App::getLocale()) }}</p>
                        </th>
                        <th class="w-10-6">
                            <p class="font-semibold">{{ GoogleTranslate::trans('Published',\App::getLocale()) }}</p>
                        </th>
                        <th>
                            <p class="font-semibold">{{ GoogleTranslate::trans('Action',\App::getLocale()) }}</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notices as $notice)
                        <tr>
                            <td>{{ GoogleTranslate::trans($notice->title,\App::getLocale()) }}</td>
                            <td>{{ GoogleTranslate::trans($notice->created_at->diffForHumans(),\App::getLocale()) }}</td>
                            <td>
                                <a href="notice/{{ $notice->id }}">
                                    <button>{{ GoogleTranslate::trans('View',\App::getLocale()) }}</button>
                                </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</x-guest-layout>

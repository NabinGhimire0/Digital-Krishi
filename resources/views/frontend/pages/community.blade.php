<x-guest-layout>
    <div
        style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')

    </div>
    <div>
        <div class="community wrapper">
            @foreach ($posts as $post)
                <div class="left">
                    <div class="img-profile">
                        <img src="{{ asset('assets/images/user-profile-circle-solid.1024x1024.png') }}" width="50px"
                            height="50px" alt="">
                        <table cellpading="0" border="0">
                            <tr>
                                <td style="font-weight: 700;font-size:20px">
                                    <p>{{ GoogleTranslate::trans($post->user->name,\App::getLocale()) }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-weight: 600;font-size:15px">{{ GoogleTranslate::trans('Posted:',\App::getLocale()) }}{{ GoogleTranslate::trans($post->created_at->diffForHumans(),\App::getLocale()) }}</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="details">
                        {{ GoogleTranslate::trans($post->title,\App::getLocale()) }}
                    </div>

                    {{-- image and comment --}}
                    <div class="post_image">
                        <div class="post_left">
                            @php
                                $contentArray = json_decode($post->content, true);
                            @endphp
                            @foreach ($contentArray as $item)
                                @if ($item['type'] === 'image')
                                    <img src="{{ asset('storage/' . $item['path']) }}" style="width: 100%"
                                        alt="Image">
                                @else
                                    <video width="100%" controls>
                                        <source src="{{ asset('storage/' . $item['path']) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @endif
                            @endforeach
                            <div>
                                <i class='bx bxs-heart heart' data-index="1"></i> <span>60</span>
                            </div>
                        </div>

                        <div class="community__right">
                            <p>{{ GoogleTranslate::trans('Comment',\App::getLocale()) }}</p>
                            <div class="comment">
                                <form id="commentForm" method="POST" style ="display: grid">
                                    @csrf
                                    <input type="text" id="commentInput" name="comment" style="height: 10vh"><br><br>
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <div class="comment__buttons"
                                        style="display: flex; place-content: end; margin-block:0.5rem">
                                        <button id="uploadButton">Upload</button>
                                        <br><br>
                                    </div>
                                </form>
                                <div class="scroll" style="">
                                    @php
                                        // get all comments where post_id = $post->id
                                        $comments = DB::table('comments')
                                            ->join('users', 'comments.user_id', '=', 'users.id')
                                            ->select('comments.*', 'users.name')
                                            ->where('post_id', $post->id)
                                            ->get();
                                    @endphp
                                    @foreach ($comments as $item)
                                        <div class="all_commentss">
                                            <img src="{{ asset('assets/images/user-profile-circle-solid.1024x1024.png') }}"
                                                height="50px" width="50px" alt="">
                                            <div>
                                                <table cellpading="0" border="0">
                                                    <tr>
                                                        <td style="font-weight: 700;font-size:20px">
                                                            <p>{{ GoogleTranslate::trans($item->name,\App::getLocale()) }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p style="font-weight: 600;font-size:15px">{{ GoogleTranslate::trans('Posted:',\App::getLocale()) }}
                                                                {{ GoogleTranslate::trans($item->created_at->diffForHumans(),\App::getLocale()) }}</p>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <div>
                                                    <span>
                                                        {{ GoogleTranslate::trans($item->comment,\App::getLocale()) }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @section('scripts')
            <script>
                $(document).ready(function() {
                    $('#uploadButton').click(function(e) {
                        e.preventDefault();

                        var comment = $('#commentInput').val();
                        var postId = $('input[name="post_id"]').val();

                        $.ajax({
                            url: '/comment',
                            type: 'POST',
                            data: {
                                '_token': $('input[name=_token]').val(),
                                'comment': comment,
                                'post_id': postId
                            },
                            success: function(data) {
                                // Load and replace only the comment section
                                // window.location.reload();
                            },
                            error: function(data) {
                                // Handle errors, e.g., show an error message
                                console.log('Error uploading comment');
                            }
                        });
                    });
                });
            </script>
        @endsection
</x-guest-layout>

<x-guest-layout>
    <div
        style="background: rgba(106,169,108);
  box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
  backdrop-filter: blur( 0px );
  -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')

    </div>

    <main style="">
        <div class="post-card">
            <div class="post-content">
                <div class="post-header">
                    <div class="post-author">
                        <img src="{{ asset('assets/images/Banner.png') }}" alt="">
                        <div class="author">
                          <p><span>Author</span><br>posted: 2h ago</p>
                        </div>
                    </div>
                    <div class="post-title">
                        <p>this is post title</p>
                    </div>
                </div>
                <div class="post-body">
                  <img src="{{ asset('assets/images/Banner.png') }}" alt="">
                </div>
                <div class="post-footer">
                    <p>this is post footer</p>
                </div>
            </div>
            <div class="post-comment">
                <p>this is post comment</p>
            </div>
        </div>
    </main>

</x-guest-layout>

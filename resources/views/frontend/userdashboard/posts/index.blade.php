<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Post</title>
    <style>
        /* Your existing styles... */

        .post-media {
            display: flex;
            flex-wrap: wrap;
            overflow: hidden;
        }

        .post-media-item {
            position: relative;
            width: 48%;
            /* Adjust as needed */
            margin: 1%;
            display: flex;
            /* Initially hide media items */
        }

        .post-media-item img,
        .post-media-item video {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .expand-button {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="post-container">
        @foreach ($posts as $post)
            <div class="post">
                <p>{{ $post->title }}</p>
                <!-- Display media items for each post -->
                @php
                    $contentArray = json_decode($post->content, true);
                @endphp
                <div class="post-media">
                    @foreach ($contentArray as $media)
                        <div class="post-media-item">
                            @if ($media['type'] === 'image')
                                <img src="{{ asset('storage/'.$media['path']) }}" alt="Image">
                            @elseif($media['type'] === 'video')
                                <video width="100%" controls>
                                    <source src="{{ asset('storage/'.$media['path']) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

        <!-- Display a button to expand on click if there are more than 4 media items -->
        @if (count($posts) > 4)
            <div class="post-media-item expand-button" onclick="expandMedia()">+{{ count($posts) - 4 }} more</div>
        @endif
    </div>

    <script>
        function expandMedia() {
            // Show the remaining media items
            var mediaItems = document.querySelectorAll('.post-media-item');
            for (var i = 4; i < mediaItems.length; i++) {
                mediaItems[i].style.display = 'block';
            }

            // Hide the expand button
            var expandButton = document.querySelector('.expand-button');
            if (expandButton) {
                expandButton.style.display = 'none';
            }
        }
    </script>

</body>

</html>

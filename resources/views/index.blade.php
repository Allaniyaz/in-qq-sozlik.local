<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <title>Dictionary App in JavaScript | CodingNepal</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN Link for Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

    <div class="wrapper active">
        <form method="POST" action="{{ route('dictionary.search') }}">
        @csrf
        @method('POST')
            <header>English Dictionary</header>
            <div class="search">
                <input type="text" id="word" name="word" placeholder="Search a word" required="" spellcheck="false">
                <i class="fas fa-search"></i>
                <span class="material-icons">close</span>
            </div>
            {{-- <input type="submit" class="material-icons" value="search"> --}}
            <p class="info-text" style="color: rgb(0, 0, 0);">Searching the meaning of <span>"apple"</span></p>
            @if (isset($data))
            <ul>
                {{-- <li class="word">
                <div class="details">
                    <p>apple</p>
                    <span>noun  //ˈæp.əl//</span>
                </div>
                <i class="fas fa-volume-up"></i>
                </li> --}}
                <div class="content">
                <li class="example">
                    <div class="details">
                    <p>{{ $data->word }}</p>
                    <br>
                    <span>
                        {!! $data->definition !!}
                    </span>
                    </div>
                </li>
                {{-- <li class="synonyms">
                    <div class="details" style="display: none;">
                    <p>Synonyms</p>
                    <div class="list"></div>
                    </div>
                </li> --}}
                </div>
            </ul>
            @endif
        </form>
    </div>
    <script>
        document.querySelector('.material-icons').addEventListener('click', function() {
            word = document.querySelector('#word');
            word.value = '';
        });
    </script>
</body>
</html>

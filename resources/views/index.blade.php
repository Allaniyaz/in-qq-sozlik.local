<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        />
        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
            rel="stylesheet"
        />
        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
        <title>Dictionary</title>
    </head>
    <body>

        <div class="container">
            <div class="search-box">
                <form method="POST" action="{{ route('dictionary.search') }}">
                @csrf
                @method('POST')
                    <input type="text" name="word" placeholder="Type the word here.." id="inp-word">
                    <button id="search-btn">Search</button>
                </form>
            </div>
            <div class="result" id="result">
            @if (isset($data))
                {!! $data->definition !!}
                {{-- <div class="result" id="result">
                    <div class="word">
                        <h3>mother</h3>
                    </div>
                    <div class="details">
                        <p>noun</p>
                        <p>/undefined/</p>
                    </div>
                    <p class="word-meaning">
                    A (human) female who has given birth to a baby
                    </p>
                    <p class="word-example">
                        He had something of his mother in him.
                    </p>
                </div> --}}
            @endif
            </div>
        </div>

    </body>
</html>

<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html dir="ltr" lang="en"><head>
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
      <header>English Dictionary</header>
      <div class="search">
        <input type="text" placeholder="Search a word" required="" spellcheck="false">
        <i class="fas fa-search"></i>
        <span class="material-icons">close</span>
      </div>
      <p class="info-text" style="color: rgb(0, 0, 0);">Searching the meaning of <span>"apple"</span></p>
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
              <p>Example</p>
              <span>Orin

                Ha’r turli jerlerde, ha’mme jerde, qa’legen jerde, kez kelgen jerde. Не was nowhere about. Ol hesh jerde joq edi. (ko’riniw). Don’t leave papers lying about. Qag’azlardi kez kelgen jerge taslap ketpe. There is a good deal of influenza about at present.Ha’zir ha’mme jerde gripp penen keselengenler ko’p. There is a rumour about. Мыш-мыш жүрипти.
                Jaqin atirapta, jaqin jerde, qasinda; Several boys were standing about. Jaqin atirapta birneshe mektep oqiwshilari turg’an edi.

                2. Ha’reket

                Shegaralang’an orindag’i tu’rli jo’nelislerde (xanada,qalada,mamlekette h.t.b)arqag’a ha’m alding’a; feyil prefiksleri menen da beriledi;  to stroll about – sayir qiliw; They moved the furniture about. Olar jihazdi qozg’adi. The children were rushing about in the garden. Balalar baq atirapinda  juwiristi.
                Qarsi jo’nelisle qarama-qarsi; aylanip; After swimming a mile he turned about and swam back to the shore. Bir shaqirimnan son’ ol qirg’aq ta’repke qary burildi.
                Jaqinliq, derlik; Не is about as tall as I am. Onin’ boyi derlik menin’ menen ten’.
                Qandayda bir is ha’reketti juwmaqlaw (to infinitiv penen keledi); Не was about to reply but thought better of it.Ol juwap bermekshi edi, biraq pikirinnen qaytti.
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

    </div>

    <script src="script.js"></script>



</body>
</html>

<nav class="navbar navbar-expand-sm navbar-dark mt-3 mb-3" style="background-color:#7f7fff">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a href="#" class="navbar-brand"><img src="images/magidev_logo.png" width="210" height="70" alt=""></a>
    <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">

            @php
            // 現在のページを設定
            $nowPage = isset($nowPage)? $nowPage : 'NONE';
            @endphp

            {{-- 選択したページのボタンをアクティブ状態にする。 --}}
            @if (strcasecmp($nowPage, 'HOME') == 0)
            <li class="nav-item active"><a class="nav-link" href="#">ホーム</a></li>
            @else
            <li class="nav-item"><a class="nav-link" href="#">ホーム</a></li>
            @endif

            @if (strcasecmp($nowPage, 'PHILOSOPHY') == 0)
            <li class="nav-item active"><a class="nav-link" href="#">代表理念</a></li>
            @else
            <li class="nav-item"><a class="nav-link" href="#">代表理念</a></li>
            @endif

            @if ($nowPage == 'Business')
            <li class="nav-item active"><a class="nav-link" href="#">事業内容</a></li>
            @else
            <li class="nav-item"><a class="nav-link" href="#">事業内容</a></li>
            @endif

            @if ($nowPage == 'Access')
            <li class="nav-item active"><a class="nav-link" href="#">アクセス</a></li>
            @else
            <li class="nav-item"><a class="nav-link" href="#">アクセス</a></li>
            @endif
        </ul>

    </div>
</nav>

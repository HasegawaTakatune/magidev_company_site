<nav class="navbar navbar-expand-sm navbar-dark mt-3 mb-3" style="background-color:#7f7fff">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a href="#" class="navbar-brand"><img src="images/magidev_logo.png" width="210" height="70" alt=""></a>
    <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">

            @php
                $selected = isset($selected)? $selected : 'NONE';
            @endphp

            @if (strcasecmp($selected, 'HOME') == 0)
            <li class="nav-item active"><a class="nav-link" href="#">ホーム</a></li>
            @else
            <li class="nav-item"><a class="nav-link" href="#">ホーム</a></li>
            @endif

            @if (strcasecmp($selected, 'PHILOSOPHY') == 0)
            <li class="nav-item active"><a class="nav-link" href="#">代表理念</a></li>
            @else
            <li class="nav-item"><a class="nav-link" href="#">代表理念</a></li>
            @endif

            @if ($selected == 'Business')
            <li class="nav-item active"><a class="nav-link" href="#">事業内容</a></li>
            @else
            <li class="nav-item"><a class="nav-link" href="#">事業内容</a></li>
            @endif

            @if ($selected == 'Access')
            <li class="nav-item active"><a class="nav-link" href="#">アクセス</a></li>
            @else
            <li class="nav-item"><a class="nav-link" href="#">アクセス</a></li>
            @endif
        </ul>

    </div>
</nav>

<header>
    <div class="container">

        <nav>

            <?php
            $navbarArray = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
            ?>

            <ul class="d-flex justify-content-between align-items-center">

                <li>
                    <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
                </li>

                @foreach ($navbarArray as $link)
                    <li>
                        <a href=" # ">
                            {{ $link }}
                        </a>
                    </li>
                @endforeach

                <li>
                    <input class="my_searchbar rounded-3" type="text" placeholder="Search">
                </li>

            </ul>
        </nav>
    </div>
</header>

<header>
    
    <section class="main_box">
        <div class="container_logo_list">
            <!-- logo -->
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" srcset="">
            <!-- logo -->
            <!-- navbar -->
            <div class="container_list">
                <nav>
                    <ul class="list-unstyled d-flex justify-content-center gap-4">
                        @foreach ($toLinks as $link)
                        <li><strong><a href="#">{{ $link }}</a></strong></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <!-- navbar -->
            
        </div>
    </section>

    <!-- background-img -->

    <div class="background"></div>
    
    <!-- background-img -->

</header>


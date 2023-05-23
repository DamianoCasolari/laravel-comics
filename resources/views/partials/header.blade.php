<header>
    <div class="container_header container-lg d-flex justify-content-between align-items-center py-4 px-3">
        <div class="img_container logoDc">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo-dc">
        </div>

        <nav>

            <div class="nav_option fw-bold d-flex">
                @foreach (config('navbar') as $value)
                    <div class=" mx-3">
                        <a href="{{ $value }}"> {{ strtoupper($value) }}</a>
                    </div>
                @endforeach



            </div>
        </nav>
    </div>

</header>
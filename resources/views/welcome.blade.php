{{-- @extends('layouts.app')
@section('content')
@endsection --}}

<x-app-layout>
    <style>
        .bg-light-20 {
            background-color: rgba(255, 255, 255, 0.20);
        }

        .carousel-caption {
            top: 25px;
            bottom: auto;
            transform: translateY(0);
        }

        .carousel-indicators {
            top: 10px;
            bottom: auto;
            transform: translateY(0);
        }

        .post-carousel {
            max-width: 100%;
            /* Ensure image doesn't exceed its original size */
            height: auto;
            /* Maintain aspect ratio */
            display: block;
            /* Ensure image behaves as a block element */
            margin: 0 auto;
            /* Center the image horizontally */
        }

        @media screen and (min-width: 960px) {
            .post-carousel {
                width: 40%;
                /* Set image width to 40% when screen width is more than 540px */
            }
        }
    </style>

    <div>
        <row>
            <div class="container-md">
                <row>
                    <div class="d-flex justify-content-center align-items-center">
                        <h3 style="color: rgba(86, 86, 86, 0.638);text-align: center;">
                            {{ __('Welcome to the delicious world of posts') }}
                        </h3>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <h4 style="color: rgba(86, 86, 86, 0.895);text-align: center;">
                            <div>
                                {{ __('Top posts') }}
                            </div>
                        </h4>
                    </div>
                </row>
            </div>

            <div class="container-fluid d-flex justify-content-center align-items-center post-carousel">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        @foreach ($posts as $index => $post)
                            <button type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide-to="{{ $index }}" class="active" aria-current="true"
                                aria-label="Slide {{ $index }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        {{-- {{dd($post)}} --}}

                        @foreach ($posts as $index => $post)
                            <div class="carousel-item{{ $index == 0 ? ' active' : '' }}">
                                <img src="{{ asset('storage/' . $post->image?->path) }}" class="d-block w-100"
                                    alt="...">
                                <div class="carousel-caption d-none d-md-block bg-light-20">
                                    <h5>{{ $post->title }}</h5>
                                    <p>{{ $post->description }}</p>
                                </div>
                            </div>
                        @endforeach



                        {{-- <div class="carousel-item active">
                            <img src="{{ asset('images/seafood_chorizo_paella-1024x819.jpg') }}" class="d-block w-100"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block bg-light-20">
                                <h5>Spicy Seafood & Chorizo Paella</h5>
                                <p>Rice, Pasta & Noodle Seafood</p>
                            </div>
                        </div> --}}

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </row>

    </div>
</x-app-layout>
















{{-- <body>
    <div>
        <header>

            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <main class="mt-6">

        </main>

        <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        </footer>
    </div>
</body>

</html> --}}

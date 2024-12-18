@extends('layouts.app')
@section('content')
    <nav class="nav-container">
        <section class="nav_item nav_item--left">
            <div class="logo">B.Book</div>
            <ul class="nav_list">
                <li class="nav_list-item">
                    <a href="{{ route('books.index') }}" class="link link--state-active">Home</a>
                <li class="nav_list-item">
                    <a href="{{ route('books.index') }}" class="link">About</a>
                <li class="nav_list-item">
                    <a href="{{ route('books.index') }}" class="link">Books</a>
                <li class="nav_list-item">
                    <a href="{{ route('books.index') }}" class="link">Books</a>
                <li class="nav_list-item">
                    <a href="{{ route('books.index') }}" class="link">Books</a>
            </ul>
        </section>
        <section class="nav_item nav_item--right">
            <div class="input-container">
                <i class="material-icons search-icon">search</i>
                <input type="text" class="nav_item-search_input" placeholder="search book..." />
            </div>
            <button class="button-ghost">
                <i class="material-icons">shopping_cart</i>
            </button>
            <h1>|</h1>
            <div class="text-bold">
                <button class="button-ghost">
                    Sign In
                </button>
            </div>
        </section>
    </nav>
    <main>
        <article class="hero">
            <section class="hero_content">
                <h1 class="hero_content--title">Find Your</h1>
                <h1 class="hero_content--title">Next Book</h1>
                <p class="hero_content--paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, quisquam
                    beatae
                    corrupti placeat iusto odit rerum soluta autem voluptatem adipisci fugiat tenetur id eos nihil, amet
                    sapiente eaque fugit reiciendis.</p>
                <button class="button button-primary">Explore Now</button>
            </section>
            <section class="hero_content">
                <div class="book_container">
                    <div class="book_single_container">
                        <div class="">
                            <img src="{{ asset('images/cover1.jpg') }}" alt="book" class="hero_content--image"
                                sizes="20" />
                        </div>
                        <div class="book_single_container-description">
                            <h1>Bicara itu ada seninya</h1>
                            <p>Oh Su Hyang</p>
                        </div>
                    </div>
                    <div class="book_single_container">
                        <div class="book_single_container-description">
                            <h1>You Do You</h1>
                            <p>Fellexandro Ruby</p>
                        </div>
                        <div class="">
                            <img src="{{ asset('images/cover2.jpg') }}" alt="book" class="hero_content--image"
                                sizes="20" />
                        </div>

                    </div>
                    <div class="book_single_container">
                        <div class="">
                            <img src="{{ asset('images/cover3.jpg') }}" alt="book" class="hero_content--image"
                                sizes="20" />
                        </div>
                        <div class="book_single_container-description">
                            <h1>Calling a Crime</h1>
                            <p>Damian Roberto</p>
                        </div>
                    </div>
                </div>
            </section>
        </article>

        <article class="bestseller">
            <header>
                <h1>Bestsellers</h1>
                <a><strong> See all </strong></a>
            </header>
            <article class="book_card_container">
                @foreach ($popularBooks as $popularBook)
                    <section class="book_card">
                        <div class="book_card-container_image">
                            <img src="{{ $popularBook['img_url'] }}" />
                        </div>
                        <div class="book_card-description">
                            <h1>{{ $popularBook->title }}</h1>
                            <p>${{ $popularBook->price }}</p>
                            {{-- <p>Price</p> --}}
                        </div>
                        <h2 class="book_card-author">by: {{ $popularBook->author }}</h2>
                        <div class="book_card-rating">
                            @for ($i = 1; $i < $popularBook['reviews_avg_rating']; $i++)
                                <i class="material-icons book_card-rating--checked">star</i>
                            @endfor
                            @for ($i = 1; $i <= ceil(5 - $popularBook['reviews_avg_rating']); $i++)
                                <i class="material-icons">star</i>
                            @endfor

                        </div>
                    </section>
                @endforeach

                {{-- <section class="book_card">
                    <div class="book_card-container_image">
                        <img src="{{ asset('images/cover2.jpg') }}" />
                    </div>
                    <div class="book_card-description">
                        <h1>The confusion of a large galaxy temo</h1>
                        <p>Price</p>
                    </div>
                    <h2 class="book_card-author">by: Penulis</h2>
                    <div class="book_card-rating">
                        <i class="material-icons book_card-rating--checked">star</i>
                        <i class="material-icons book_card-rating--checked">star</i>
                        <i class="material-icons book_card-rating--checked">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                </section>
                <section class="book_card">
                    <div class="book_card-container_image">
                        <img src="{{ asset('images/cover1.jpg') }}" />
                    </div>
                    <div class="book_card-description">
                        <h1>The confusion of a large galaxy temo</h1>
                        <p>Price</p>
                    </div>
                    <h2 class="book_card-author">by: Penulis</h2>
                    <div class="book_card-rating">
                        <i class="material-icons book_card-rating--checked">star</i>
                        <i class="material-icons book_card-rating--checked">star</i>
                        <i class="material-icons book_card-rating--checked">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                </section>
                <section class="book_card">
                    <div class="book_card-container_image">
                        <img src="{{ asset('images/cover3.jpg') }}" />
                    </div>
                    <div class="book_card-description">
                        <h1>The confusion of a large galaxy temo</h1>
                        <p>Price</p>
                    </div>
                    <h2 class="book_card-author">by: Penulis</h2>
                    <div class="book_card-rating">
                        <i class="material-icons book_card-rating--checked">star</i>
                        <i class="material-icons book_card-rating--checked">star</i>
                        <i class="material-icons book_card-rating--checked">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>
                </section> --}}
            </article>

            <article class="bg">
                <img src="{{ asset('images/bg3.png') }}" />
                <section class="content_section">
                    <h1 class="content_section-title">Online Book Fairs 2024</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus distinctio natus ullam odio iste
                        autem, eum illum, earum iusto hic ducimus iure doloribus eveniet incidunt nesciunt ipsum a unde
                        quos.</p>
                    <button class="button button-tertiary">Create Account</button>
                </section>
            </article>

            <article class="offer">
                <h1>Offers</h1>
                <article class="offer-book_container_list">
                    <section class="offer-book_container_item">
                        <section class="offer_book_container">
                            <img src="{{ asset('images/cover1.jpg') }}" alt="">
                            <img src="{{ asset('images/cover2.jpg') }}" alt="">
                            <img src="{{ asset('images/cover3.jpg') }}" alt="">
                            <img src="{{ asset('images/cover1.jpg') }}" alt="">
                        </section>
                        <div class="offer-book_container_item-title">
                            <h1>this month's discount - 50%</h1>
                        </div>
                    </section>
                    <section class="offer-book_container_item">
                        <section class="offer_book_container">
                            <img src="{{ asset('images/cover3.jpg') }}" alt="">
                            <img src="{{ asset('images/cover2.jpg') }}" alt="">
                            <img src="{{ asset('images/cover1.jpg') }}" alt="">
                            <img src="{{ asset('images/cover3.jpg') }}" alt="">
                        </section>
                        <div class="offer-book_container_item-title">
                            <h1>this month's discount - 30%</h1>
                        </div>
                    </section>
                    <section class="offer-book_container_item">
                        <section class="offer_book_container">
                            <img src="{{ asset('images/cover2.jpg') }}" alt="">
                            <img src="{{ asset('images/cover3.jpg') }}" alt="">
                            <img src="{{ asset('images/cover2.jpg') }}" alt="">
                            <img src="{{ asset('images/cover1.jpg') }}" alt="">
                        </section>
                        <div class="offer-book_container_item-title">
                            <h1>this month's discount - 20%</h1>
                        </div>
                    </section>


                </article>
            </article>
        </article>

        <article class="top__selling">
            <header>
            </header>
            <section class="carousel">
                <div class="carousel__list">
                    <div class="carousel__item">
                        <img src="{{ asset('images/book-bg-1.jpg') }}" />
                        <div class="carousel__content">
                            <div class="carousel__content-author">J.K. ROWLING</div>
                            <div class="carousel__content-title">Harry Potter</div>
                            <div class="carousel__content-topic">Magis</div>
                            <div class="carousel__content-description">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                Eum ab temporibus
                                deleniti tempora, sed incidunt illo ratione praesentium aliquid! Nam corporis accusantium
                                excepturi. Ducimus laboriosam voluptatum illum, hic sed sequi.</div>
                        </div>
                    </div>
                    <div class="carousel__item">
                        <img src="{{ asset('images/book-bg-2.jpg') }}" />
                        <div class="carousel__content">
                            <div class="carousel__content-author">J.K. ROWLING2</div>
                            <div class="carousel__content-title">Harry Potter</div>
                            <div class="carousel__content-topic">Magis</div>
                            <div class="carousel__content-description">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                Eum ab temporibus
                                deleniti tempora, sed incidunt illo ratione praesentium aliquid! Nam corporis accusantium
                                excepturi. Ducimus laboriosam voluptatum illum, hic sed sequi.</div>
                        </div>
                    </div>
                    <div class="carousel__item">
                        <img src="{{ asset('images/book-bg-3.jpg') }}" />
                        <div class="carousel__content">
                            <div class="carousel__content-author">J.K. ROWLING</div>
                            <div class="carousel__content-title">Harry Potter</div>
                            <div class="carousel__content-topic">Magis</div>
                            <div class="carousel__content-description">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                Eum ab temporibus
                                deleniti tempora, sed incidunt illo ratione praesentium aliquid! Nam corporis accusantium
                                excepturi. Ducimus laboriosam voluptatum illum, hic sed sequi.</div>
                        </div>
                    </div>
                    <div class="carousel__item">
                        <img src="{{ asset('images/book-bg-4.jpg') }}" />
                        <div class="carousel__content">
                            <div class="carousel__content-author">J.K. ROWLING</div>
                            <div class="carousel__content-title">Harry Potter</div>
                            <div class="carousel__content-topic">Magis</div>
                            <div class="carousel__content-description">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                Eum ab temporibus
                                deleniti tempora, sed incidunt illo ratione praesentium aliquid! Nam corporis accusantium
                                excepturi. Ducimus laboriosam voluptatum illum, hic sed sequi.</div>
                        </div>
                    </div>
                </div>

                <div class="thumbnail">
                    <div class="thumbnail__item">
                        <img src="{{ asset('images/book-bg-2.jpg') }}" />
                        <div class="thumbnail__content">
                            <div class="thumbnail__content-title">Harry Potter</div>
                            <div class="thumbnail__content-description">Description</div>
                        </div>
                    </div>
                    <div class="thumbnail__item">
                        <img src="{{ asset('images/book-bg-3.jpg') }}" />
                        <div class="thumbnail__content">
                            <div class="thumbnail__content-title">Harry Potter</div>
                            <div class="thumbnail__content-description">Description</div>
                        </div>
                    </div>
                    <div class="thumbnail__item">
                        <img src="{{ asset('images/book-bg-4.jpg') }}" />
                        <div class="thumbnail__content">
                            <div class="thumbnail__content-title">Harry Potter</div>
                            <div class="thumbnail__content-description">Description</div>
                        </div>
                    </div>
                    <div class="thumbnail__item">
                        <img src="{{ asset('images/book-bg-1.jpg') }}" />
                        <div class="thumbnail__content">
                            <div class="thumbnail__content-title">Harry Potter</div>
                            <div class="thumbnail__content-description">Description</div>
                        </div>
                    </div>
                </div>

                <div class="arrow">
                    <div class="arrow__left">
                        <i class="material-icons">arrow_back_ios</i>
                    </div>
                    <div class="arrow__right">
                        <i class="material-icons">arrow_forward_ios</i>
                    </div>
                </div>
            </section>
        </article>

        <article class="author">
            <header>
                <h1>Get To Know</h1>
                <a href="#">See all</a>
            </header>
            <section class="author__list">
                <section class="author__item">
                    <div class="author__item-card--primary">
                        <div class="name">
                            <h1>Name: </h1>
                            <h2>Frederick W. Taylor</h2>
                        </div>
                        <div class="about">
                            <h1>About author: </h1>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem rem iste inventore
                            </p>
                        </div>
                    </div>
                    <img src="{{ asset('images/profile1.jpg') }}" />
                    <div class="author__item-card--primary">
                        <div class="name">
                            <h1>Name: </h1>
                            <h2>Frederick W. Taylor</h2>
                        </div>
                        <div class="about">
                            <h1>About author: </h1>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem rem iste inventore
                            </p>
                        </div>
                    </div>
                </section>
            </section>

            <section class="best_author-nav">
                <div class="best_author-nav--active"></div>
                <div class=""></div>
                <div class=""></div>
            </section>
        </article>
    </main>

    {{-- <footer>footer</footer> --}}
@endsection

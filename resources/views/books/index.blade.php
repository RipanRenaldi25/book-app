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
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" class="nav_item-search_input" placeholder="search book..." />
            </div>
            <button class="button-ghost">
                <i class="fa-solid fa-cart-shopping"></i>
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
                <section class="book_card">
                    <div class="book_card-container_image">image</div>
                    <div class="book_card-description">
                        <h1>Title</h1>
                        <p>Price</p>
                    </div>
                    <h2>by: Penulis</h2>
                    <div class="book_card-rating">Rating</div>
                </section>
                <section class="book_card">
                    <div class="book_card-container_image">image</div>
                    <div class="book_card-description">
                        <h1>Title</h1>
                        <p>Price</p>
                    </div>
                    <h2>by: Penulis</h2>
                    <div class="book_card-rating">Rating</div>
                </section>
                <section class="book_card">
                    <div class="book_card-container_image">image</div>
                    <div class="book_card-description">
                        <h1>Title</h1>
                        <p>Price</p>
                    </div>
                    <h2>by: Penulis</h2>
                    <div class="book_card-rating">Rating</div>
                </section>
            </article>
        </article>
    </main>
@endsection

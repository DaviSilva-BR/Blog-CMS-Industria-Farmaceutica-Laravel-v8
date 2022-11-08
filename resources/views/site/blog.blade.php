@extends('site.inc.app')

@section('content')



<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Blog</h2>
              <p>Confira os nossos artigos para tornar a sua saúde cada vez melhor.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 posts-list">

            @foreach ($posts as $post)

            <div class="col-xl-4 col-md-6">
              <article>
                <a href="blog/{{ $post->slug }}">
                  <div class="post-img">
                    <img src="../storage/images/{{ $post->image_path }}" alt="" class="img-fluid">
                  </div>

                  <p class="post-category">{{ $post->title }}</p>

                  <h2 class="title">
                    <a href="blog-details.html">{{ mb_strimwidth($post->description, 0, 70, "...") }}</a>
                  </h2>

                  <div class="d-flex align-items-center">
                    <div class="post-meta">
                      <p class="post-author"></p>
                      <p class="post-date">
                        <time datetime="2022-01-01">{{ date('jS M Y', strtotime($post->updated_at))}}</time>
                      </p>
                    </div>
                  </div>
                </a>
              </article>
            </div><!-- End post list item -->
          @endforeach

        </div><!-- End blog posts list -->

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->s

@endsection

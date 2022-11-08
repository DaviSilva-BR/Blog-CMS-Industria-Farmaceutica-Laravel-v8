@extends('site.inc.app')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Saúde como <span>Prioridade</span></h2>
          <p>Inaugurada em 1987 a  se tornou uma referencia em farmácia de manipulação em São Paulo, trabalhando sempre com as melhores matérias primas importadas e nacionais do mercado</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Saiba mais</a>
            <a href="https://www.youtube.com/watch?v=C1dA7bc_88s&ab_channel=TelessaudeSC" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{ asset('assets/img/family.png') }}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Certificação ISO 9001 </a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-emoji-smile"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Qualidade do Início ao Fim</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-microsoft-teams"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Equipe Especializada
              </a></h4>
            </div>
          </div>
          <!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Sobre</h2>
          <p>Nossa primeira loja foi inaugurada em 1987, graças ao comprometimento com a qualidade dos medicamentos e ao atendimento dispensado aos clientes, surgiu a necessidade de ampliação de nossas atividades, a Impact inaugurou assim sucessivamente as outras unidades, com laboratórios planejados de acordo com as normas de boas práticas para a produção de fórmulas magistrais com eficácia, segurança e qualidade. Durante essa trajetória a Impact aprimorou seus processos, desenvolveu novos serviços e consolidou-se como uma das mais qualificadas farmácias de manipulação da grande São Paulo e capital.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>SINÔNIMO DE QUALIDADE</h3>
            <img src="{{ asset('assets/img/farmacia-clinica-como-difere-no-geral.jpg') }}" class="img-fluid rounded-4 mb-4" alt="">
            <p>Seguindo essa tendência a Impact conta com modernos laboratórios e uma equipe profissional altamente especializada para a manipulação de fórmulas em conformidade com os mais elevados padrões de controle de qualidade, com rapidez e precisão. Atualmente a Impact conta com as unidades da Lapa e Osasco, além de uma Central de orçamentos para atendimento de clientes de todas as regiões</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Sempre em busca da excelência na qualidade, inovação tecnológica e matérias primas diferenciadas a Impact concilia prescrição médica com veículos de última geração resultando na combinação perfeita entre ação farmacológica do princípio ativo e a resposta terapêutica especifica para cada paciente. Nosso departamento de pesquisa e desenvolvimento conta profissionais altamente qualificados em constante atualização. Laboratórios e equipamentos de última geração permitem a manipulação de bases cosméticas sofisticadas e formulações de sensorial diferenciado, além de formas farmacêuticas diversificadas para atender as necessidades dos nossos clientes .

Nesse contexto a Impact exerce um papel fundamental para colocar à disposição produtos personalizados, de acordo com as necessidades individuais, tudo isso com qualidade e segurança..
Visando o aprimoramento dos processos e a garantia da qualidade de seus produtos e serviços, a Impact conquistou a certificação ISO-9001 “International Organization for Standardization”,que estabelece padrões internacionais de trabalho reconhecidos mundialmente para a implantação do sistema da qualidade. Essa conquista representa o empenho da Impact em demonstrar seriedade e comprometimento com seus clientes.
              </p>
              <div class="position-relative mt-4">
                <img src="{{ asset('assets/img/atendente-de-farmacia-cpt.jpg') }}" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=C1dA7bc_88s&ab_channel=TelessaudeSC" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Serviços</h2>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <h3>Medicamentos manipulado</h3>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <h3>Preparações farmacêuticas</h3>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <h3>Eficácia terapêutica</h3>
            </div>
          </div><!-- End Service Item -->
        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Avaliações</h2>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Rogério Albuquerque</h3>
                      <h4>Dentista</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Excelente!! recomendo para todos os meus clientes.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Alessandra Oliveira</h3>
                      <h4>Ortopedia</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Não conheço outra industria que tenha um nível de excelêcia tão alto quanto a Impacto
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Cassia Mendes</h3>
                      <h4>Terapeuta</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Confio de olhos fechados!!<br> Só compro com a Impacto.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->



    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Perguntas Frequentes</h3>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Posso comprar sem receita?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Sim, alguns medicamentos não possuem a necessidade de comprovação médica para consumo.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Entregam em minha residência?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Temos lojas espalhadas por todo o Brasil e garantimos a entrega no prazo!
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Os produtos são feitos no Padrão ISO 9001?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Sim, todos os produtos possuem máxima qualidade e um nível extremo de verificação em cada etapa,
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Qual o horário de funcionamento?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Consulte a loja mais próxima a sua rediência ou entre em contato conosco.
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Blog</h2>
          <p>Confira os nossos últimos artigos</p>
        </div>

        <div class="row gy-4">

          @foreach ($posts as $post)

            <div class="col-xl-4 col-md-6">
              <article>
                <a href="blog/{{ $post->slug }}">
                  <div class="post-img">
                    <img src="storage/images/{{ $post->image_path }}" alt="" class="img-fluid">
                  </div>

                  <p class="post-category">{{ $post->title }}</p>

                  <h2 class="title">
                    <a>{{ mb_strimwidth($post->description, 0, 70, "...") }}</a>
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


        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contato</h2>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Localização:</h4>
                  <p>Rua oliveira, bairro Gelus, nº 1558 - SP Brasil</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>contato@impact.net</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Telefone:</h4>
                  <p>+55 (11) 95577-2300</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Funcionamento</h4>
                  <p>Segunda á Domingo: 08:00 - 22:00</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Digite o seu nome:" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Digite o seu e-mail" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Digite o assunto:" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Digite a mensagem:" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection
@extends('layout')
@section('title', 'Консультации Laravel')
@section('description', 'Каждое изменение должно приносить результат. Консультации помогут вам определить, как это достичь.')

@section('content')
    <x-header image="/img/bird.svg">
        <x-slot name="sup">
            Ребята мирового класса
        </x-slot>

        <x-slot name="title">
            Консультанты для вашего проекта
        </x-slot>

        <x-slot name="description">
            Каждое изменение должно приносить результат. Консультации помогут вам определить, как это достичь.
        </x-slot>


        <x-slot:actions>
            <a href="{{ route('docs') }}" class="btn btn-primary btn-lg px-4">Справлюсь сам</a>

            <a href="#"
               class="d-none d-md-inline-flex link-body-emphasis text-decoration-none icon-link icon-link-hover">
               Хорошие практики <x-icon path="i.arrow-right" class="bi" />
            </a>
        </x-slot>

        {{--
        <x-slot name="actions">
            <div class="row w-100 pt-4 border-top  text-balance">
                <div class="col-sm mb-3 mb-lg-0">
                    <h2 class="h1 mb-0 ls-xs">45</h2>
                    <p class="mb-0">Доказанной ценности</p>
                </div>
                <div class="col-lg-5 col-sm mb-3 mb-lg-0">
                    <h2 class="h1 mb-0 ls-xs">10,500+</h2>
                    <p class="mb-0">Доказанной ценности</p>
                </div>
                <div class="col-sm mb-3 mb-lg-0">
                    <h2 class="h1 mb-0 ls-xs">12+</h2>
                    <p class="mb-0">Доказанной ценности</p>
                </div>
            </div>
        </x-slot>
        --}}
    </x-header>



{{--
    <x-container>
        <div class="bg-body-tertiary rounded overflow-hidden p-4 p-xxl-5 position-relative">

            <img src="/img/ui/klubok.svg" class="d-none d-xxl-block position-absolute bottom-0 start-0 m-4 pe-none">

            <div class="container mt-xl-5">
                <div class="row mb-5">
                    <div class="col-xl-10 offset-xl-1 col-md-12">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3 col-md-12">
                                <div class="text-lg-center mb-5">
                                    <small
                                        class="text-uppercase ls-md fw-semibold text-body-tertiary">Зачем?</small>
                                    <h2 class="mt-3">
                                        Мы знаем потребности вашего бизнеса
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="mb-5 mb-lg-0 text-center text-lg-start px-md-5">
                            <h2 class="mb-3 text-balance">Потребности вашего бизнеса</h2>
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed eros mi.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div
                                    class="mb-lg-8 mb-5 text-center text-lg-start px-3 px-lg-0">
                                    <div class="mb-3">
                                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                            <svg class="bi" width="1em" height="1em">
                                                <use xlink:href="#speedometer"></use>
                                            </svg>
                                        </div>
                                    </div>

                                    <h3 class="h4">Сосредоточьтесь на важном</h3>
                                    <p class="mb-0 pe-lg-4">
                                        Каждое изменение должно приносить результат.
                                        Консультации помогут вам определить, как это достичь.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div
                                    class="mb-lg-8 mb-5 text-center text-lg-start px-3 px-lg-0">
                                    <div class="mb-3">
                                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                            <svg class="bi" width="1em" height="1em">
                                                <use xlink:href="#speedometer"></use>
                                            </svg>
                                        </div>
                                    </div>

                                    <h3 class="h4 text-balance">Больше выгоды от использования Laravel</h3>
                                    <p class="mb-0">
                                        Отдавайте часть ответственности за код сообществу открытого исходного кода, так вы сможете достигать больших результатов с меньшим объемом работы.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div
                                    class="mb-lg-8 mb-5 text-center text-lg-start px-3 px-lg-0">
                                    <div class="mb-3">
                                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                            <svg class="bi" width="1em" height="1em">
                                                <use xlink:href="#speedometer"></use>
                                            </svg>
                                        </div>
                                    </div>

                                    <h3 class="h4 text-balance">Свежий взгляд</h3>
                                    <p class="mb-0 pe-lg-4">Чем больше вы погружаетесь в код, тем сложнее заметить проблемы. Взгляд со стороны может принести новые идеи и перспективы, которые изменят вашу игру.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div
                                    class="mb-lg-8 mb-5 text-center text-lg-start px-3 px-lg-0">
                                    <div class="mb-3">
                                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                            <svg class="bi" width="1em" height="1em">
                                                <use xlink:href="#speedometer"></use>
                                            </svg>
                                        </div>
                                    </div>

                                    <h3 class="h4 text-balance">Lorem ipsum dolor sit amet</h3>
                                    <p class="mb-0 pe-lg-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed eros mi. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col d-flex flex-column gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#collection"></use>
                        </svg>
                    </div>
                    <h4 class="fw-semibold mb-0 text-body-emphasis text-balance my-3">Сосредоточьтесь на важном</h4>
                    <p class="text-body-secondary">
                        Каждое изменение должно приносить результат.
                        Консультации помогут вам определить, как это достичь.
                    </p>
                </div>

                <div class="col d-flex flex-column gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#gear-fill"></use>
                        </svg>
                    </div>
                    <h4 class="fw-semibold mb-0 text-body-emphasis text-balance my-3">Больше выгоды от использования Laravel</h4>
                    <p class="text-body-secondary">
                        Отдавайте часть ответственности за код сообществу открытого исходного кода, так вы сможете
                        достигать больших результатов с меньшим объемом работы.
                    </p>
                </div>

                <div class="col d-flex flex-column gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#speedometer"></use>
                        </svg>
                    </div>
                    <h4 class="fw-semibold mb-0 text-body-emphasis text-balance my-3">Свежий взгляд</h4>
                    <p class="text-body-secondary">
                        Чем больше вы погружаетесь в код, тем сложнее заметить проблемы. Взгляд со стороны может принести новые идеи и перспективы, которые изменят вашу игру.
                    </p>
                </div>
            </div>

        </div>
    </x-container>
    --}}

    <x-container>

        {{--
        <div class="row g-4 g-md-5 justify-content-center align-items-end mb-5">
            <div class="col-lg-8 me-auto">
                <span class="text-primary mb-3 d-block text-uppercase fw-semibold ls-xl">Чего вы можете ожидать от консультанта Laravel</span>
                <h2 class="display-5 fw-semibold mb-0">Чего вы можете ожидать от консультанта Laravel</h2>
            </div>
        </div>
--}}

        {{--
  <div class="row g-0 row-cols-md-2 mb-5 text-balance">
      <div class="col">
          <div class="p-4 p-xl-5 bg-body-secondary rounded-3 position-relative mb-4 h-100 overflow-hidden">
              <div class="p-5 bg-primary bg-opacity-50 rounded-circle position-absolute top-0 start-0" style="    width: 10rem;
height: 10rem;
left: -2rem !important;
top: -2rem !important;">
                  <div class="d-none d-sm-flex">
                      <x-icon path="i.code" class="img-fluid d-block mx-auto" width="4rem"
                              height="4rem"/>
                  </div>
              </div>


              <div class="col-md-7 mx-auto">
                  <div class="d-flex flex-column g-4 g-md-5">
                      <div class="d-flex mb-4 align-items-center gap-5">
                          <h3 class="display-6 fw-semibold mb-0 text-balance">Застряли на проблеме?</h3>
                      </div>
                      <p>
                          Специалисты предлагают свежий взгляд, который поможет вам разобраться.
                      </p>
                  </div>
              </div>
          </div>
      </div>
      <div class="col">
          <div class="p-4 p-xl-5 bg-body-secondary rounded-3 position-relative mb-4 h-100">
              <div class="d-flex flex-column g-4 g-md-5">
                  <div class="d-flex mb-4 align-items-center gap-5">
                      <h3 class="display-6 fw-semibold mb-0 text-balance">Погружение в код</h3>
                      <div class="d-none d-sm-flex">
                          <x-icon path="i.code" class="img-fluid d-block mx-auto text-primary" width="4rem"
                                  height="4rem"/>
                      </div>
                  </div>
                  <p class="col-md-10">
                      Давайте вместе рассмотрим ваш код, чтобы убедиться, что он максимально хорош.
                  </p>
              </div>
          </div>
      </div>
      <div class="col">
          <div class="p-4 p-xl-5 bg-body-secondary rounded-3 position-relative mb-4 h-100">

              <div class="d-flex flex-column g-4 g-md-5">

                  <div class="d-flex mb-4 align-items-center gap-5">
                      <h3 class="display-6 fw-semibold mb-0 text-balance">Разбор архитектуры</h3>
                      <div class="d-none d-sm-flex">
                          <x-icon path="i.ui" class="img-fluid d-block mx-auto text-primary" width="4rem"
                                  height="4rem"/>
                      </div>
                  </div>
                  <p class="col-md-10">
                      Мы обсудим, как правильно структурировать ваше приложение для достижения успеха.
                  </p>
              </div>
          </div>
      </div>
      <div class="col">
          <div class="p-4 p-xl-5 bg-body-secondary rounded-3 position-relative mb-4 h-100">
              <div class="d-flex flex-column g-4 g-md-5">

                  <div class="d-flex mb-4 align-items-center gap-5">
                      <h3 class="display-6 fw-semibold mb-0 text-balance">Лучшие практики</h3>
                      <div class="d-none d-sm-flex">
                          <x-icon path="i.utilities" class="img-fluid d-block mx-auto text-primary" width="4rem"
                                  height="4rem"/>
                      </div>
                  </div>
                  <p class="col-md-10">
                      Мы поговорим о новейших передовых практиках, которые помогут вашему проекту не сбиться с пути.
                  </p>
              </div>
          </div>
      </div>
  </div>
  --}}
        <div class="row g-4 row-cols-md-2 mb-5 text-balance">
            <div class="col">
                <div class="p-4 p-xl-5 bg-body-secondary rounded-3 position-relative mb-4 h-100">
                    <div class="d-flex flex-column g-4 g-md-5">
                        <div class="d-flex mb-4 align-items-center gap-5">
                            <h3 class="display-6 fw-semibold mb-0 text-balance">Застряли на проблеме?</h3>
                            <div class="d-none d-sm-flex">
                                <x-icon path="i.code" class="img-fluid d-block mx-auto text-primary" width="4rem"
                                        height="4rem"/>
                            </div>
                        </div>
                        <p class="col-md-10">
                            Специалисты предлагают свежий взгляд, который поможет вам разобраться.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="p-4 p-xl-5 bg-body-secondary rounded-3 position-relative mb-4 h-100">
                    <div class="d-flex flex-column g-4 g-md-5">
                        <div class="d-flex mb-4 align-items-center gap-5">
                            <h3 class="display-6 fw-semibold mb-0 text-balance">Погружение в код</h3>
                            <div class="d-none d-sm-flex">
                                <x-icon path="i.code" class="img-fluid d-block mx-auto text-primary" width="4rem"
                                        height="4rem"/>
                            </div>
                        </div>
                        <p class="col-md-10">
                            Давайте вместе рассмотрим ваш код, чтобы убедиться, что он максимально хорош.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="p-4 p-xl-5 bg-body-secondary rounded-3 position-relative mb-4 h-100">

                    <div class="d-flex flex-column g-4 g-md-5">

                        <div class="d-flex mb-4 align-items-center gap-5">
                            <h3 class="display-6 fw-semibold mb-0 text-balance">Разбор архитектуры</h3>
                            <div class="d-none d-sm-flex">
                                <x-icon path="i.ui" class="img-fluid d-block mx-auto text-primary" width="4rem"
                                        height="4rem"/>
                            </div>
                        </div>
                        <p class="col-md-10">
                            Мы обсудим, как правильно структурировать ваше приложение для достижения успеха.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="p-4 p-xl-5 bg-body-secondary rounded-3 position-relative mb-4 h-100">
                    <div class="d-flex flex-column g-4 g-md-5">

                        <div class="d-flex mb-4 align-items-center gap-5">
                            <h3 class="display-6 fw-semibold mb-0 text-balance">Лучшие практики</h3>
                            <div class="d-none d-sm-flex">
                                <x-icon path="i.utilities" class="img-fluid d-block mx-auto text-primary" width="4rem"
                                        height="4rem"/>
                            </div>
                        </div>
                        <p class="col-md-10">
                            Мы поговорим о новейших передовых практиках, которые помогут вашему проекту не сбиться с пути.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        {{--
            <div class="row g-4 row-cols-md-2 row-cols-xxl-3">
                <div class="col">
                    <div class="h-100 d-flex flex-md-row flex-column px-4 py-3 py-xl-5 bg-body-secondary rounded position-relative align-items-md-center align-items-xxl-baseline">
                        <div>
                            <p class="fs-4">Застряли на ошибке?</p>

                            <p class="text-body-secondary mb-0">Специалисты предлагают свежий взгляд, который поможет вам разобраться.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 d-flex flex-md-row flex-column px-4 py-3 py-xl-5 bg-body-secondary rounded position-relative align-items-md-center align-items-xxl-baseline">
                        <div>
                            <p class="fs-4">Обзор вашего кода</p>

                            <p class="text-body-secondary mb-0">Давайте вместе рассмотрим ваш код, чтобы убедиться, что он максимально хорош.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 d-flex flex-md-row flex-column px-4 py-3 py-xl-5 bg-body-secondary rounded position-relative align-items-md-center align-items-xxl-baseline">
                        <div>
                            <p class="fs-4">Разбор архитектуры</p>

                            <p class="text-body-secondary mb-0">Мы обсудим, как правильно структурировать ваше приложение для достижения успеха.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 d-flex flex-md-row flex-column px-4 py-3 py-xl-5 bg-body-secondary rounded position-relative align-items-md-center align-items-xxl-baseline">
                        <div>
                            <p class="fs-4">Оптимизация кода</p>

                            <p class="text-body-secondary mb-0">Я покажу вам, как заставить ваш код работать быстрее и плавнее.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 d-flex flex-md-row flex-column px-4 py-3 py-xl-5 bg-body-secondary rounded position-relative align-items-md-center align-items-xxl-baseline">
                        <div>
                            <p class="fs-4">Рекомендации по инструментам и пакетам</p>

                            <p class="text-body-secondary mb-0">Я могу порекомендовать инструменты и пакеты для более быстрого достижения ваших целей.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 d-flex flex-md-row flex-column px-4 py-3 py-xl-5 bg-body-secondary rounded position-relative align-items-md-center align-items-xxl-baseline">
                        <div>
                            <p class="fs-4">Обсуждение лучших практик</p>

                            <p class="text-body-secondary mb-0">Мы поговорим о новейших передовых практиках, которые помогут вашему проекту не сбиться с пути.</p>
                        </div>
                    </div>
                </div>

                {{--
                <div class="col">
                    <div class="h-100 d-flex flex-md-row flex-column px-4 py-3 py-xl-5 bg-body-secondary rounded position-relative align-items-md-center">
                        <div class="vr bg-primary position-absolute start-0 opacity-100" style="top: 1.5em; bottom: 1.5em;"></div>
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <p class="fs-4 mb-0">Веб приложение</p>
                            </div>

                            <img src="/img/ui/api.svg" class="img-fluid d-block mx-auto">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 d-flex flex-md-row flex-column px-4 py-3 py-xl-5 bg-body-secondary rounded position-relative align-items-md-center">
                        <div class="vr bg-primary position-absolute start-0 opacity-100" style="top: 1.5em; bottom: 1.5em;"></div>
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <p class="fs-4 mb-0">Веб приложение</p>
                            </div>
                            <img src="/img/ui/console.svg" class="img-fluid d-block mx-auto">
                        </div>
                    </div>
                </div>

            </div>
        --}}
    </x-container>


    <x-container>
        <section class="p-4 p-xl-5 bg-body-secondary rounded position-relative">
            <figure class="position-absolute top-0 start-0 translate-middle z-n1 ms-4">
                <x-icon path="l.cube" width="46" height="53" fill="none"/>
            </figure>

                <div class="row">
                    <div class="col-lg-11 mx-auto col-md-12">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-6 col-12 order-2">
                                <div class="me-xl-7">
                                    <div class="mb-4">
                                        <span class="text-primary mb-3 d-block text-uppercase fw-semibold ls-xl">Мы знаем</span>
                                        <p class="display-6 fw-bold text-balance">Потребности и способы решения</p>

                                    </div>
                                    <div class="mb-5">
                                        <ul>
                                            <li class="mb-3">
                                                Чем больше вы погружаетесь в код, тем сложнее заметить проблемы. Взгляд со
                                                стороны может принести новые идеи и перспективы, которые изменят вашу игру.
                                            </li>
                                            <li class="mb-3">
                                                Отдавайте часть ответственности за код сообществу открытого исходного кода,
                                                так вы сможете достигать больших результатов с меньшим объемом работы.
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="row align-items-center company-usage">
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <img src="./img/sponsors/am.svg"
                                                 alt="logo" class="img-fluid" />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <img src="/img/sponsors/soidet.svg"
                                                 alt="logo" class="img-fluid" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-12 order-lg-2">
                                <div class="bg-body-tertiary p-4 p-xxl-5 shadow-sm rounded">
                                        <form class="row needs-validation g-3"
                                              method="post"
                                              action="{{ route('consultant.store') }}">
                                            <div class="col-12">
                                                <label for="name" class="form-label">
                                                    Как вас зовут?
                                                </label>
                                                <input type="text"
                                                       placeholder="По имени всегда приятно"
                                                       class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                       name="name"
                                                       id="name"
                                                       required />
                                                <x-error field="name" class="invalid-feedback my-3"/>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="contact"
                                                       class="form-label">
                                                    Как связаться?
                                                </label>
                                                <input type="text"
                                                       placeholder="Телеграм или email для связи"
                                                       class="form-control {{ $errors->has('contact') ? 'is-invalid' : '' }}"
                                                       name="contact"
                                                       id="contact"
                                                       required />
                                                <x-error field="contact" class="invalid-feedback my-3"/>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="message"
                                                       class="form-label">Тема</label>
                                                <textarea class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}"
                                                          id="message"
                                                          name="message"
                                                          minlength="10"
                                                          placeholder="Расскажите какую проблему вы хотели бы решить, так мы сможем подобрать лучшего специалиста."
                                                          rows="8" required></textarea>
                                                <x-error field="message" class="invalid-feedback my-3"/>
                                            </div>
                                            <div class="d-grid">
                                                <button class="btn btn-primary"
                                                        type="submit">Получить консультацию</button>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </x-container>

     {{--
    <x-container>
        <div class="row g-4 g-md-5 justify-content-center align-items-end mb-5">
            <div class="col-lg-8 me-auto">
                <span class="text-primary mb-3 d-block text-uppercase fw-semibold ls-xl">Вам могут понравиться</span>
                <h2 class="display-5 fw-semibold mb-0">Чего вы можете ожидать от консультанта Laravel</h2>
            </div>
        </div>



        <div class="col-xl-8 col-md-12 mx-auto hotwire-frame">
            @foreach(range(0, 3) as $key)
                <div class="row g-0 rounded bg-body-tertiary mb-5">
                        <div class="col-lg-5 order-lg-first">
                            <x-hero image="/img/community/chernayev.jpeg" text="от 4000 ₽" class="rounded-start"/>
                        </div>
                        <div class="col-lg-7">
                            <div class="p-4 p-xl-5">
                                <h5><strong>Александр Черняев</strong></h5>
                                <p class="opacity-50 small">
                                    Vivamus sit amet eros facilisis, suscipit libero eget, elementum diam. Praesent quam.
                                </p>

                                <p>Могу помочь: </p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>

        <div class="row g-4 g-md-5 row-cols-3 row-cols-lg-2 justify-content-center">
            @foreach(range(0, 3) as $key)
                <div class="col">
                    <div class="row g-0 rounded bg-body-tertiary mb-5">
                        <div class="col-lg-5 order-lg-first">
                            <x-hero image="/img/community/chernayev.jpeg" text="от 4000 ₽" class="rounded-start"/>
                        </div>
                        <div class="col-lg-7">
                            <div class="p-4 p-xl-5">
                                <h5><strong>Александр Черняев</strong></h5>
                                <p class="opacity-50 small">
                                    Vivamus sit amet eros facilisis, suscipit libero eget, elementum diam. Praesent quam.
                                </p>

                                <p>Могу помочь: </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </x-container>


    <x-container>
        <div class="col-12">
            <div class="row g-4 g-md-5 row-cols-3 row-cols-lg-2 justify-content-center">

                @foreach(range(0, 3) as $key)
                    <div class="col">
                        <div class="d-flex gap-5 text-balance bg-body-secondary rounded p-4 p-xl-5 position-relative">
                            <div class="col">
                                <div class="position-relative">
                                    <img alt="image" class="img-fluid rounded-circle mb-3" src="/img/community/chernayev.jpeg">
                                    <span class="badge bg-primary position-absolute top-0 start-0 translate-middle mt-2 ms-3" title="Достижения на сайте">от 4000 ₽</span>
                                </div>


                            </div>
                            <div class="col-8">
                                <h5 class="mt-2"><strong>Александр Черняев</strong></h5>
                                <p class="opacity-50 small">
                                    Vivamus sit amet eros facilisis, suscipit libero eget, elementum diam. Praesent quam.
                                </p>



                                <x-icon path="i.star-fill" class="me-2 text-warning"/>

                                <p class="small opacity-50">
                                    <mark class="rounded-1">от 4000 ₽</mark>
                                </p>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </x-container>



    <x-call-to-action link="{{ route('jobs') }}" text="  Посмотреть открытые позиции">
        <x-slot name="sup">
            Построй свою карьеру
        </x-slot>
        <x-slot:title>Стань одним из профессионалов</x-slot>

        <x-slot:description>
            Найти работу в хорошей кампаниии работать удаленно из любого места?
        </x-slot>
    </x-call-to-action>
    --}}
@endsection
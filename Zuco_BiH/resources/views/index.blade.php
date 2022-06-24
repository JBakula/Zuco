<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />

    <link rel="shortcut icon" type="image/png" href="images/favico.png" />

    <title>Zućo BiH</title>
    <link rel="stylesheet" href="sass/style.css" />
  </head>
  <body>
    <!-- heading -->
    <header class="header">
      <div class="container">
        <div class="header__logo-box">
          <img class="header__logo" src="images/favico.png" alt="Logo" />
        </div>
        <div class="header__text-box text-center">
          <h1 class="heading-primary">
            <span class="heading-primary--top mb-3">Žućo</span>
            <span class="heading-primary--bottom">čuvajmo naš grad</span>
          </h1>
          <div class="row g-1">
            @foreach ($tip_prijave as $item)
              <div class="col-md my-4">
                <a href="{{route('createProblem',$item->id)}}" class="btn btn--white btn--animated">{{$item->report_type_name}}</a>
              </div>
            @endforeach 
          </div>
        </div>
      </div>
    </header>

    <!-- Pohvale -->
    <section class="section-features">
      <div class="container">
        <div class="text-center mb-4">
          <h2 class="heading-secondary">Pohvale</h2>
        </div>
        <div class="row">
          <div class="col-md m-3">
            <div class="feature-box">
              <img
                class="feature-box__img mb-4"
                src="images/cleann1.avif"
                alt=""
              />
              <h3 class="heading-tertiary u-margin-bottom-small">
                Čist okoliš
              </h3>
              <p class="feature-box__text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. V
                dolore consequuntur corrupti ipsum aspernatur nulla beatae.
              </p>
            </div>
          </div>

          <div class="col-md m-3">
            <div class="feature-box">
              <img
                class="feature-box__img mb-4"
                src="images/cleann1.avif"
                alt=""
              />
              <h3 class="heading-tertiary u-margin-bottom-small">
                Explore the nature
              </h3>
              <p class="feature-box__text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. V
                dolore consequuntur corrupti ipsum aspernatur nulla beatae.
              </p>
            </div>
          </div>

          <div class="col-md m-3">
            <div class="feature-box">
              <img
                class="feature-box__img mb-4"
                src="images/cleann1.avif"
                alt=""
              />
              <h3 class="heading-tertiary u-margin-bottom-small">
                Explore the nature
              </h3>
              <p class="feature-box__text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. V
                dolore consequuntur corrupti ipsum aspernatur nulla beatae.
              </p>
            </div>
          </div>

          <div class="col-md m-3">
            <div class="feature-box">
              <img
                class="feature-box__img mb-4"
                src="images/cleann1.avif"
                alt=""
              />
              <h3 class="heading-tertiary u-margin-bottom-small">
                Explore the nature
              </h3>
              <p class="feature-box__text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. V
                dolore consequuntur corrupti ipsum aspernatur nulla beatae.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Problemi -->
    <section class="section-not-features">
      <div class="container">
        <div class="text-center mb-4">
          <h2 class="heading-secondary text-white mb-3">Problemi</h2>
        </div>
        <div class="row">
          <div class="col-md m-3">
            <div class="feature-box">
              <img
                class="feature-box__img mb-4"
                src="images/cleann1.avif"
                alt=""
              />
              <h3 class="heading-tertiary u-margin-bottom-small">
                Explore the nature
              </h3>
              <ul class="my-3 list-group list-group-flush">
                <li class="list-group-item bg-transparent my-1">
                  Lorem, ipsum dolor.
                </li>
                <li class="list-group-item bg-transparent my-1">
                  Lorem, ipsum dolor.
                </li>
                <li class="list-group-item bg-transparent my-1">
                  Lorem, ipsum dolor.
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md m-3">
            <div class="feature-box">
              <img
                class="feature-box__img mb-4"
                src="images/cleann1.avif"
                alt=""
              />
              <h3 class="heading-tertiary u-margin-bottom-small">
                Explore the nature
              </h3>
              <ul class="my-3 list-group list-group-flush">
                <li class="list-group-item bg-transparent my-1">
                  Lorem, ipsum dolor.
                </li>
                <li class="list-group-item bg-transparent my-1">
                  Lorem, ipsum dolor.
                </li>
                <li class="list-group-item bg-transparent my-1">
                  Lorem, ipsum dolor.
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md m-3">
            <div class="feature-box">
              <img
                class="feature-box__img mb-4"
                src="images/cleann1.avif"
                alt=""
              />
              <h3 class="heading-tertiary u-margin-bottom-small">
                Explore the nature
              </h3>
              <ul class="my-3 list-group list-group-flush">
                <li class="list-group-item bg-transparent my-1">
                  Lorem, ipsum dolor.
                </li>
                <li class="list-group-item bg-transparent my-1">
                  Lorem, ipsum dolor.
                </li>
                <li class="list-group-item bg-transparent my-1">
                  Lorem, ipsum dolor.
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md m-3">
            <div class="feature-box">
              <img
                class="feature-box__img mb-4"
                src="images/cleann1.avif"
                alt=""
              />
              <h3 class="heading-tertiary u-margin-bottom-small">
                Explore the nature
              </h3>
              <ul class="my-3 list-group list-group-flush">
                <li class="list-group-item bg-transparent my-1">
                  Lorem, ipsum dolor.
                </li>
                <li class="list-group-item bg-transparent my-1">
                  Lorem, ipsum dolor.
                </li>
                <li class="list-group-item bg-transparent my-1">
                  Lorem, ipsum dolor.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark h1" id="my-footer">
      <div class="container">
        <div class="row">
          <div class="col-md my-4">
            <p class="mt-3">Copyright &copy; 2022 Hackathon</p>
            <span class="admin">
              <a href="{{route('login')}}">Admin</a>
            </span>
          </div>
      </div>
    </footer>

    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
  </body>
</html>

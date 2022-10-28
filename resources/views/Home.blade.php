@extends('padrao')
@section('content')

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{'/img/fotoPele.jpg'}}" class="card-img-top" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{'/img/FotoNeymar.png'}}" class="card-img-top" alt="...">
    </div>

    <div class="carousel-item">
      <img src="{{'/img/ronaldinhobrasil.jpg'}}" class="card-img-top" alt="...">
    </div>
    
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 





<!-- Inner -->
<div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <img
                src="{{'/img/1958.jpeg'}}"
                class="card-img-top1"
                alt="Waterfall"
              />
              <div class="card-body">
                <h5 class="card-title">COPA DE 1958</h5>
                <p class="card-text">
                A edição de 1958 da Copa do Mundo FIFA marcou a sexta participação da Seleção Brasileira de Futebol nessa competição. Era o único país a participar de todas as edições do torneio da FIFA, fato que persiste até hoje. O Brasil chegava pela segunda vez em uma final e enfrentaria a anfitriã, Suécia. A seleção brasileira obteria seu primeiro título mundial.
                </p>
                <a href="" class="btn btn-primary">Veja Mais</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="{{'/img/1962.jpg'}}"
                class="card-img-top1"
                alt="Sunset Over the Sea"
              />
              <div class="card-body">
                <h5 class="card-title">Copa de 1962</h5>
                <p class="card-text">
                A edição de 1962 da Copa do Mundo marcou a sétima participação da Seleção Brasileira de Futebol nessa competição. Era o único país a participar de todas as edições do torneio da FIFA, fato que persistirá pelo menos a edição realizada no Catar em 2022. Foi a primeira em que o Brasil defendia o título de campeão, após a conquista do Mundial da Suécia, em 1958.
                </p>
                <a href="listarCarros" class="btn btn-primary">Veja Mais</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="{{'/img/1970.jpg'}}"
                class="card-img-top1"
                alt="Sunset over the Sea"
              />
              <div class="card-body">
                <h5 class="card-title">Copa de 1970</h5>
                <p class="card-text">
                A Seleção Brasileira participou pela nona vez da Copa do Mundo. A então bicampeã mundial se classificara em primeiro lugar em seu grupo nas eliminatórias para a Copa do Mundo. Estava grupo 3, onde enfrentou a Inglaterra,a Romênia e a Tchecoslováquia, classificando-se em primeiro lugar. Nas quartas-de-final,  venceu o Peru.
                </p>
                <a href="" class="btn btn-primary">Veja Mais </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp"
                class="card-img-top"
                alt="Fissure in Sandstone"
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk
                  of the card's content.
                </p>
                <a href="listarCarros" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/185.webp"
                class="card-img-top"
                alt="Storm Clouds"
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk
                  of the card's content.
                </p>
                <a href="listarCarros" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/186.webp"
                class="card-img-top"
                alt="Hot Air Balloons"
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk
                  of the card's content.
                </p>
                <a href="listarCarros" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/187.webp"
                class="card-img-top"
                alt="Peaks Against the Starry Sky"
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk
                  of the card's content.
                </p>
                <a href="listarCarros" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/188.webp"
                class="card-img-top"
                alt="Bridge Over Water"
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk
                  of the card's content.
                </p>
                <a href="listarCarros" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/189.webp"
                class="card-img-top"
                alt="Purbeck Heritage Coast"
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk
                  of the card's content.
                </p>
                <a href="listarCarros" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Inner -->





  <!-- Inner -->
<div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <img
                src="{{'/img/1994.jpg'}}"
                class="card-img-top1"
                alt="Waterfall"
              />
              <div class="card-body">
                <h5 class="card-title">COPA DE 1994</h5>
                <p class="card-text">
                A Edição de 1994 da Copa do Mundo marcou a décima quinta participação do Brasil nessa competição. Era o único país a participar de todas as edições do torneio da FIFA, fato que persiste até a última edição da Copa com o Brasil garantido, de 2022. O Brasil se sagrou campeão da Copa do Mundo.
                </p>
                <a href="" class="btn btn-primary">Veja Mais</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="{{'/img/2002.jpg'}}"
                class="card-img-top1"
                alt="Sunset Over the Sea"
              />
              <div class="card-body">
                <h5 class="card-title">Copa de 2002</h5>
                <p class="card-text">
                A edição de 2002 da Copa do Mundo marcou a décima sétima participação da Seleção Brasileira de Futebol na competição.O país manteve a situação de único país a participar de todas as edições do torneio da FIFA e conquistou o quinto título do torneio ao vencer a Alemanha na final por 2-0, em Yokohama.
                </p>
                <a href="listarCarros" class="btn btn-primary">Veja Mais</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="{{'/img/2022.jpg'}}"
                class="card-img-top1"
                alt="Sunset over the Sea"
              />
              <div class="card-body">
                <h5 class="card-title">Expectativas para 2022</h5>
                <p class="card-text">
                Há quem diga que o Brasil é o país do futebol e que somos uma nação festeira. Então, com isso em mente, podemos concluir que há motivos suficientes para comemorar muito com a chegada da Copa do Mundo masculina, que começa em novembro de 2022 no Qatar, e a seleção vem forte para a competição
                </p>
                <a href="" class="btn btn-primary">Veja Mais </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp"
                class="card-img-top"
                alt="Fissure in Sandstone"
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk
                  of the card's content.
                </p>
                <a href="listarCarros" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/185.webp"
                class="card-img-top"
                alt="Storm Clouds"
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk
                  of the card's content.
                </p>
                <a href="listarCarros" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/186.webp"
                class="card-img-top"
                alt="Hot Air Balloons"
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk
                  of the card's content.
                </p>
                <a href="listarCarros" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/187.webp"
                class="card-img-top"
                alt="Peaks Against the Starry Sky"
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk
                  of the card's content.
                </p>
                <a href="listarCarros" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/188.webp"
                class="card-img-top"
                alt="Bridge Over Water"
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk
                  of the card's content.
                </p>
                <a href="listarCarros" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
            <div class="card">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/189.webp"
                class="card-img-top"
                alt="Purbeck Heritage Coast"
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk
                  of the card's content.
                </p>
                <a href="listarCarros" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Inner -->

  

  


@endsection
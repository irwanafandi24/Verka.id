@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class=" header">
        <div class="">
          <div class="text-center">
            <h2>Photographer for Graduation Ceremony on 24 August 2019</h2>
          </div>
        </div>
      </div>

      @foreach ($list_fotografer as $fotografer)
      <div class="card fotografer">
        <div class="card-body">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <div class="text-center">
                <div class="d-block w-100">
                  <img class="rounded-circle mx-auto d-block" src="../img/fotografer/fotografer{{$fotografer->id}}/0.jpg" alt="First slide">
                </div>
                <div class="profile">
                  <h3>{{$fotografer->nama}}</h3>
                </div>
                <div class="slot">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        @if ($fotografer->slot1 == 0)
                        <div class="card">
                          <div class="card-body">
                            <div class="box">
                              <p>Sesi 1</p>
                              <p>06:00 - 11:00</p>
                            </div>
                            <div class="open">open</div>
                          </div>
                        </div>
                        @else
                        <div class="card">
                          <div class="card-body">
                            <div class="box">
                              <p>Sesi 1</p>
                              <p>06:00 - 11:00</p>
                            </div>
                            <div class="booked">booked</div>
                          </div>
                        </div>
                        @endif
                      </div>
                      <div class="col-md-6">
                        @if ($fotografer->slot2 == 0)
                        <div class="card">
                          <div class="card-body">
                            <div class="box">
                              <p>Sesi 2</p>
                              <p>12:30 - 16:00</p>
                            </div>
                            <div class="open">open</div>
                          </div>
                        </div>
                        @else
                        <div class="card">
                          <div class="card-body">
                            <div class="box">
                              <p>Sesi 2</p>
                              <p>12:30 - 16:00</p>
                            </div>
                            <div class="booked">booked</div>
                          </div>
                        </div>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                <div class="order">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Order
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-8 col-sm-12 foto">
              <!-- <div class="col-md-12"> -->
              <!--Carousel Wrapper-->
              <div id="carousel-thumb{{$fotografer->id}}" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <div class="d-block w-100">
                      <img class="rounded mx-auto d-block" src="../img/fotografer/fotografer{{$fotografer->id}}/1.jpg" alt="First slide">
                    </div>
                  </div>
                  @for ($idx = 2; $idx <= $fotografer->foto; $idx++)
                  <div class="carousel-item">
                    <div class="d-block w-100">
                      <img class="rounded mx-auto d-block" src="../img/fotografer/fotografer{{$fotografer->id}}/{{$idx}}.jpg" alt="First slide">
                    </div>
                  </div>
                  @endfor
                </div>
                <!--/.Slides-->

                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-thumb{{$fotografer->id}}" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb{{$fotografer->id}}" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
              </div>
              <!--/.Carousel Wrapper-->
              <!-- </div> -->

              <!-- <div class="col-md-12">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-thumb" data-slide-to="0" class="active">
                    <img src="../img/fotografer/fotografer{{$fotografer->id}}/1.jpg" height="30">
                  </li>
                  @for ($idx = 2; $idx <= $fotografer->foto; $idx++)
                  <li data-target="#carousel-thumb" data-slide-to="1">
                    <img src="../img/fotografer/fotografer{{$fotografer->id}}/{{$idx}}.jpg" height="30">
                  </li>
                  @endfor
                </ol>
              </div> -->

            </div>
          </div>
        </div>
      </div>

      @endforeach
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Photographer Order</h5></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>To order our Photographer please contact our Official Account at</h6>
        <br>
        <h5>Line      : @714akmhv</h5>
        <h5>Instagram : @verkaindonesia</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection

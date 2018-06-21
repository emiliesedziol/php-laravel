@extends('layouts/main')

@section('title')
  results Design Storm
@endsection

@section('content')
    <div id="site-section">
      <h1>{{ $projectId }}</h1>
      <div class="container">
        <div id="results">
          <div>
            <div class="search-container">
              <form action="/results" method="POST">
                  {{ csrf_field() }}
                <input class="search" type="text" value="{{ $keyword }}" placeholder="Search", name="search">
            </form>
            </div>
            <div class="boxes">
              <div class="row">

                @if(count($filteredData) >= 1)
                  @foreach ($filteredData as $insperation)
                    <div class="col-md-3">
                      <div class="box">
                      <!--  <div style="position: relative; background: url('{{ $insperation->covers->original }}') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px;">
    a string original is above , when a number it has to be in {''} as below-->
                          <div style="position: relative; background: url('{{ $insperation->covers->original }}') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px;">

                          @php
                            $encodedUrl = urlencode($insperation->covers->original);
                          @endphp
                            <a href="/projects/insperation/{{$insperation->id}}/add/{{ $projectId }}?image_url={{ $encodedUrl }}">
                            <div class="add-btn @if(in_array($insperation->id, $imageInfoArray))
                              active
                              @endif">
                              <i class="fa fa-check" aria-hidden="true">
                              </i>
                            </div>
                          </a>

                        </div>
                        <h4>{{ $insperation->name }}</h4>
                      </div>
                    </div>
                  @endforeach
                @else
                  <h1> Nothing was found </h1>
                @endif

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@extends('layouts.default')

@section('content')

<div class="row">
  <div class="col-md-4">
    
  </div>
  <div class="col-md-4">
    <div class="row">
      <div class="col-sm-12 col-md-12">
          <div class="thumbnail">
            <div class="caption">
              <p class='text-center'>{{ HTML::image('img/png/glyphicons-239-pin.png', 'alt-text',array('class'=>'img-rounded')) }}</p>

              <div class="row">
                <div class="col-sm-6">
                  {{ HTML::image('img/'.$cpn->path, 'alt-text',array('class'=>'img-rounded')) }}
                </div>
                <div class="col-sm-6">
                  <h3 class="">{{ $cpn->title }}</h3>
                  <p class="">Price: {{ round($cpn->price,2) }}€</p>
                  <p class="">Description: {{ $cpn->description }}</p>
                  <p class="">Quanity: {{ $cpn->availability }}</p>
                </div>
              </div>  
            </div>
          </div>

      </div>
    </div>
  
  </div>
  <div class="col-md-4">
    
  </div>

</div>

@stop
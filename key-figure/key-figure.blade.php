{{--
  Title: Chiffre clé
  Description: Chiffre clé
  Category: template-blocks
  Icon: editor-textcolor
  Post-Type: page service
  Keywords: chiffre clé key figure
--}}

@php
  $data = Block::keyFigure($block['data']);
@endphp

<section class="b-key-figure u-margin @if($data['reverse']){{ 'b-key-figure--reverse' }}@endif">
  <div class="container-fluid">
    <div class="row align-items-center @if($data['reverse']){{ 'flex-md-row-reverse justify-content-md-end' }}@endif">
      <div class="offset-md-2 @if($data['reverse']){{ 'offset-md-9 offset-lg-4 offset-xl-5' }}@endif col-md-15 col-lg-9 p-0 p-md-1">
        <div class="b-key-figure__wrapper">
          <div class="b-key-figure__image">
            <div class="b-key-figure__image-prlx">
              @include('elements/image', ['data' => $data['image']])
            </div>
            <div class="b-key-figure__number b-key-figure__number-in" data-animate="splitCharsReveal" data-animate-delay="0.5">{{ $data['number'] }}</div>
          </div>
          <div class="b-key-figure__number b-key-figure__number-out" data-animate="splitCharsReveal" data-animate-delay="0.5">{{ $data['number'] }}</div>
        </div>
      </div>
      <div class="offset-2 @if(!$data['reverse']){{ 'offset-lg-4 offset-xl-5' }}@else{{ 'offset-md-9 offset-lg-2' }}@endif col-22 col-md-22 col-lg-9 col-xl-8">
        <div class="b-key-figure__content">
          @include('components/classic-content', ['data' => $data['classic-content']])
        </div>
      </div>
    </div>
  </div>
</section>

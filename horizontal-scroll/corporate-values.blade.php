{{--
  Title: Valeurs entreprise
  Description: Un titre des cards avec icone contenu et bouton
  Category: template-blocks
  Icon: image-flip-horizontal
  Post-Type: page
  Keywords: card icon content title
--}}

@php
  $data = Block::corporateValues($block['data']);
@endphp

<section class="b-corporate-values horizontal-scroll" data-offset="100%, 100%">
  <div class="horizontal-scroll__wrapper">
    <div class="container-fluid u-h100">
      <div class="row align-items-center u-h100">
        <div class="col-md-24 offset-md-1 col-lg-22 offset-lg-2 col-xl-9">
          <div class="b-corporate-values__title">
            @include('elements/title', ['data' => $data['titles'], 'color' => $data['titles']['color']])
          </div>
        </div>
        <div class="offset-lg-2 offset-xl-1 col-xl-14">
          <div class="b-corporate-values__cards u-nsb">
            @foreach ($data['cards'] as $card)
            @include('components/card', [
              'data' => $card,
              'horizontalScroll' => TRUE
              ])
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

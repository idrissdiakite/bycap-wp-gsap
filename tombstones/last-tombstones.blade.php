{{--
  Title: Dernières transactions
  Description: 4 dernières transactions
  Category: template-blocks
  Icon: screenoptions
  Post-Type: page
  Keywords: tombstone
--}}

@php
  $data = Block::lastTombstones($block['data']);
@endphp

<section class="b-last-tombstones tombstone">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-24 offset-md-1 col-lg-22 offset-lg-2 col-xl-11">
        <div class="b-last-tombstones__title">
          @include('components/classic-content', ['data' => $data['classic-content']])
        </div>
      </div>
    </div>
    <div class="b-last-tombstones__list">
      <div class="row archive__cards">
        @for ($i = 0; $i < 4; $i++)
          @if (isset($data['tombstones'][$i]))
            <div class="col-md-12 @if($i % 2 === 0){{ 'offset-md-1' }}@endif col-xl-6 @if($i % 4 === 0){{ 'offset-xl-1' }}@else{{ 'offset-xl-0' }}@endif mt-5">
              <div class="archive__card h-100">
                  @include('components/cards/card-tombstone', [
                  'id' => $data['tombstones'][$i]->ID,
                  ])
              </div>
            </div>
          @endif
        @endfor
      </div>
    </div>
  </div>
</section>

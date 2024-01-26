@php
  $data = Component::cardTombstone($id);
@endphp

<div class="c-card-tombstone front">
  <div class="c-card-tombstone--top">
    <p class="c-card-tombstone__sector">{{ $data['card']['sector'] }}</p>
  </div>
  <div class="c-card-tombstone--center">
    @if(isset($data['card']['logo1']))
      <div class="c-card-tombstone--center-logo">
        @include('elements/image', ['data' => $data['card']['logo1']])
      </div>
    @endif
    @if(isset($data['card']['text1']))
      <div class="c-card-tombstone--center-text">
        <p>{{ $data['card']['text1'] }}</p>
      </div>
    @endif
    @if(isset($data['card']['logo2']))
      <div class="c-card-tombstone--center-logo">
        @include('elements/image', ['data' => $data['card']['logo2']])
      </div>
    @endif
    @if(isset($data['card']['text2']))
      <div class="c-card-tombstone--center-text">
        <p>{{ $data['card']['text2'] }}</p>
      </div>
    @endif
    @if(isset($data['card']['logo3']))
      <div class="c-card-tombstone--center-logo">
        @include('elements/image', ['data' => $data['card']['logo3']])
      </div>
    @endif
  </div>
  <div class="c-card-tombstone--bottom">
    @if($data['single']['category'])
    <p>{{ $data['single']['category']}}</p>
    @endif
  </div>
</div>
<div class="c-card-tombstone back">
  <div class="c-card-tombstone--center">
    <div class="c-card-tombstone--center-description">
      {{ $data['card']['description'] }}
    </div>
    @if ($data['card']['show_link'])
    <div class="c-card-tombstone--center-link">
      <div class="button">
        <div class="button-text__wrapper">
          <div class="button-text">
            <a href="{{ get_the_permalink($id) }}">En savoir plus</a>
          </div>
        </div>
      </div>
    </div>
    @endif
  </div>
</div>

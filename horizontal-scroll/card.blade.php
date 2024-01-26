@if(isset($horizontalScroll))
<div class="c-card-w @if($loop->last) {{ 'horizontal-scroll__last' }}@endif">
  <div class="c-card @if($loop->last) data-horizontal-offset @endif">
    <div class="c-card__icon">@include('elements/image', ['data' => Element::image($card['icon'], '30px')])</div>
    <div class="c-card__title">{{ $card['title'] }}</div>
    <div class="c-card__content">{!! wpautop($card['content']) !!}</div>
    <div class="c-card__pattern pattern {{ $card['orientation'] }}">
      @include('elements/image', ['data' => Element::image($card['pattern'], '100%')])
    </div>
  </div>
</div>
@else
<div class="c-card">
  <div class="c-card__icon">@include('elements/image', ['data' => Element::image($data['icon'], '30px')])</div>
  <div class="c-card__title">{{ $data['title'] }}</div>
  <div class="c-card__content">{!! wpautop($data['content']) !!}</div>
  <div class="c-card__button">
    <a href="{{ $data['button']['url'] }}" @if(isset($data['target'])) target="_blank" rel="noopener" @endif>&nbsp; {{ $data['button']['title']}} &nbsp;</a>
  </div>
  @if(isset($data['pattern']))
  <div class="c-card__pattern pattern {{ $data['orientation'] }}">
    @include('elements/image', ['data' => Element::image($data['pattern'], '100%')])
  </div>
  @endif
</div>
@endif

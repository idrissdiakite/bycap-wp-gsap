<div class="c-member @if(isset($slider)) {{ 'slider'}}@endif ">
  <div class="c-member__image">
    @include('elements/image', ['data' => $data['image']])
  </div>
  <div class="c-member__content">
    <div class="c-member__content--name">{{ $data['name'] }}</div>
    <div class="c-member__content--position">{{ $data['position'] }}</div>
  </div>
  @if(isset($slider))
  <div class="c-member__btn">
    <span>+</span>
  </div>
  @endif
</div>
</div>

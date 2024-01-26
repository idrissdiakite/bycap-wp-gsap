<div class="s-team" onwheel="event.stopPropagation()">
  <div class="s-team-container">
    <div class="s-team-cross"><span>X</span></div>
    @if(count($data['members']) > 1)
    <div class="s-team-arrows">
      <div class="pagers pagers--left">{!! display_svg('arrow-left') !!}</div>
      <div class="pagers pagers--right">{!! display_svg('arrow-right') !!}</div>
    </div>
    @endif
    <div class="s-team-images">
      @foreach ($data['members'] as $member)
        <div class="s-team-image">
          @if($member['image'])
            @include('elements/image', ['data' => $member['image']])
          @else
            <div class="image"></div>
          @endif
        </div>
      @endforeach
    </div>
    <div class="s-team-wrapper">
      <div class="s-team-container-content">
      @foreach ($data['members'] as $member)
        <div class="s-team-content">
          <p class="s-team-name">{{ $member['name'] }}</p>
          <p class="s-team-position">{{ $member['position'] }}</p>
          <div class="s-team-cursus">
            <p class="title">Parcours</p>
            {!! wpautop($member['cursus']) !!}
          </div>
          <div class="s-team-quote">
            <span>
              {!! display_svg('quote') !!}
            </span>
            {!! wpautop($member['quote']) !!}</div>
        </div>
      @endforeach
    </div>
    </div>
  </div>
</div>

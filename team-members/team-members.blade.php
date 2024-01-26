{{--
  Title: Equipe
  Description: Un titre des images avec nom et poste
  Category: template-blocks
  Icon: calendar-alt
  Post-Type: page
  Keywords: card team image
--}}

@php
  $data = Block::teamMembers($block['data']);
@endphp

@include('components/slider-team', ['data' => $data])
<section class="b-team-members" id="equipe">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-24 offset-md-1 col-lg-22 offset-lg-2 col-xl-11">
        <div class="b-confidence__title">
          @include('components/classic-content', ['data' => $data['classic-content']])
        </div>
      </div>
    </div>
    <div class="row">
      @foreach ($data['members'] as $member)
        <div class="col-md-12 col-lg-8 col-xl-6 offset-lg-0 @if($loop->index % 2 === 0) {{ 'offset-md-1' }} @endif @if($loop->index % 3 === 0) {{ 'offset-lg-1' }} @endif @if($loop->index % 4 === 0) {{ 'offset-xl-1' }} @else {{ 'offset-xl-0'}} @endif">
          @include('components/member', [
          'data' => $member,
          'slider' => TRUE
          ])
      @endforeach
    </div>
  </div>
</section>




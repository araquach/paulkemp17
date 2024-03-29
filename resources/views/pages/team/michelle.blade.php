@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Michelle is a highly skilled Senior Stylist with loads of experience. She is rapidly becoming a very highly sought after stylist in the salon. 
	She especially loves soft, natural styles and men\'s indie/mod cutting.',
	'keywords' => 'Michelle Railton, Shell Railton, Paul Kemp Hairdressing stylists, hairdressers, PK',
	'ogtitle' => 'Michelle Railton',
	'ogdescription' => 'Michelle is a highly skilled Senior Stylist with loads of experience. She is rapidly becoming a very highly sought after stylist in the salon. 
	She especially loves soft, natural styles and men\'s indie/mod cutting.',
	'ogimage' => url('/') . '/images/staff/michelle_og.jpg',
	'title' => 'Paul Kemp Hairdressing - Michelle'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<section id="team_ind">
<div id="team_michelle" class="team_pic"></div>

	<section id="team_ind_copy">
	<h2>Michelle Railton</h2>
	<p>Michelle is a highly skilled Senior Stylist with loads of experience. She is rapidly becoming a very highly sought after stylist in the salon. </p>
	<p>She especially loves soft, natural styles and men's indie/mod cutting.</p> 
	<p class="team_ind_price">Average Cut &amp; Colour price with Michelle : &pound;114*</p>
	
	<div id="feedback_feed_ind">
  	<ul>
  	@foreach($feedbacks as $feed)
  	    <li>&quot;{{ $feed->feedback->extra_edit }}&quot;<br><span class="client">{{ $feed->first_name }} {{ $feed->last_name }} - hair by {{ $feed->stylist }} </span></li>
  	@endforeach
  	</ul>
	</div> <!--#feedback_feed-->
	
	<a href="{{ URL::to('team') }}#shell">Click here to see the full team &gt;</a>
	
	<div id="fb-like">
		<div class="fb-like" data-href="http://www.paulkemphairdressing.com/michelle" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
	</div>
	
	</section> <!--team_ind_copy-->


<section id="teambottom">
    <p>*average prices for half-head foils or equivalent plus a Cut Dry and Style - before any discounts</p>
</section>
</section> <!--team_ind-->

@stop
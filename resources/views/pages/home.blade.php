@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'title' => 'Paul Kemp Hairdressing - Home - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed.js') }}"></script>

<section id="home">
    
<div class="proportional aspect1">
		<div id="home_image"></div>
</div>

<div id="feedback_feed">
  	<ul>
  	@foreach($feedbacks as $feed)
  	    <li>&quot;{{ $feed->extra_edit }}&quot;<br><span class="client">{{ $feed->client->first_name }} {{ $feed->client->last_name }} - hair by {{ $feed->client->stylist }} </span></li>
  	@endforeach
  	</ul>
</div> <!--#feedback_feed-->
    
<section id="homecopy">
    <h2>A New Standard of Hairdressing</h2>
    <p>Paul Kemp Hairdressing is located right in the heart of Warrington town centre. Sister salon to the award winning <em><a href="http://www.jakatasalon.co.uk/" target="_blank">Jakata</a></em>, the stunning salon opened in June 2011 with the aim to offer an ultra relaxing atmosphere, first class customer service, alongside the highest level of hairdressing expertise.</p>
    <p>The talented hairdressing team are all trained to the highest level in cutting, colouring and styling hair, with specialists in technical colour, hair straightening, wedding hair and hair extensions. The team has a wealth of experience in all aspects of hairdressing so you can just sit back, relax and enjoy the experience.</p>
    <p><em>The salon has built up a strong reputation for creating stunning, fashionable looks tailored to suit you, and your lifestyle, so if you're looking for a new <strong class="paraend">hairdressers in Warrington</strong> then look no further!</em></p>
</section>

<a href="{{ URL::to('offers') }}">	
<aside id="news1">
<h3 class="newsheader">New Year Offers</h3>
<p class="newspara">Check out these special offers for new clients</p>
<p class="newscenter"><strong>Find out more here &gt;</strong></p>
</aside>
</a>

<a href="{{ URL::to('kebelo') }}">
<aside id="news2">
<h3 class="newsheader">Introducing <br>Kebelo</h3>
<p class="newspara">Smoother, shinier, more manageable hair can be yours</p>
<p class="newscenter"><strong>Find out more here &gt;</strong></p>
</aside>
</a>

<a href="{{ URL::to('news') }}#FibrePlex">
<aside id="news3">
<h3 class="newsheader">FibrePlex<br>Is Here</h3>
<p class="newspara">Lighten, lift, colour without compromise</p>
<p class="newscenter"><strong>Find out more here &gt;</strong></p>
</aside>
</a>

<a href="{{ URL::to('recruitment') }}">
<aside id="news4">
<h3 class="newsheader">Great career opportunities</h3>
<p class="newspara">Looking to join the PK team? Apply to be a stylist or apprentice here</p>
<p class="newscenter"><strong>Find out more here &gt;</strong></p>
</aside>
</a>

</section> <!--#home-->

@stop
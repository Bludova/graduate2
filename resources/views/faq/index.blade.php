@extends('faq.include.header')
@section('content')

	<div>
		<ul class="cd-faq-group">
			<li class="cd-faq-title"><h2><a href="faq/ask_question">Задать вопрос</a></h2></li>
			<li class="cd-faq-title"><h2><a href="authorization">Ответить на вопрос</a></h2></li>
		</ul>


	</div>

<section class="cd-faq">
    <ul class="cd-faq-categories">
        @foreach($themes as $theme)
          <li><a href="#{{  $theme->category }}">{{ $theme->category }}</a></li>
        @endforeach
    </ul>

    <div class="cd-faq-items">
@foreach($categories as $category)
<ul id="{{ $category->categorie }}" class="cd-faq-group">
<li class="cd-faq-title"><h2>{{ $category->category }}</h2></li>

    @foreach($question as $questions)
@if(  $category->id === $questions->category_id )

<li>

<a class="cd-faq-trigger" href="#0">{{  $questions->question }}</a>
<div class="cd-faq-content">


 @foreach($answers as $answer)
 @if(  $questions->id === $answer->question_id )
 <p>{{  $answer->answer }}</p>
 @endif
 @endforeach
</li>

@endif
@endforeach
</ul>
@endforeach

    </div>
    <a href="#0" class="cd-close-panel">Close</a>
</section>


<script src="{{ asset('faq_style/js/jquery-2.1.1.js') }}"></script>
<script src="{{ asset('faq_style/js/jquery.mobile.custom.min.js') }}"></script>
<script src="{{ asset('faq_style/js/main.js') }}"></script> <!-- Resource jQuery -->
</body>
</html>
@endsection

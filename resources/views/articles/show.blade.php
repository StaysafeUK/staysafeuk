@extends('layout')

@section ('content')
<div id="header-wrapper">

</div>
    <div id="wrapper">
	    <div id="page" class="container">
		    <div id="content">
		    	<div class="title">

				    <h2> {{ $article->title }}</h2>
				    <span class="byline">{{ $article->excerpt }} </span> </div>
			    <p><img src="/images/banner.jpg" alt="" class="image image-full" /></p>
                </div>

                {{!! $article->body !!}}

                <p style="margin-top: 1em">
                 {{--   @foreach ($article->tags as $tag) --}}
                  {{--      <a href="/articles?tag={{ $tag->name}}">{{ $tag->name }}</a> --}}
                 {{--   @endforeach --}}
                </p>

	        </div>

	    </div>
    </div>

    <div id="copyright" class="container">
	    <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
    </div>
</div>
@endsection

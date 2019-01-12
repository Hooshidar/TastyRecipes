@extends('layout.main')

@section('content')
    <script type="text/javascript">
        var recipeId = '{{ $recipes->id }}';
        var csrf_field = '{{ csrf_field() }}';
        var logged_in = '{{ Auth::check() }}';
        @if (Auth::check()) 
            var user_name = '{{ Auth::user()->name }}';
        @endif
    </script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="maincontent">
            <article class="topcontentRecipes">
                <header>
                    <h2><a href="#" title="first post">Ingredients</a></h2>
                </header>
                    <p>
                        {{ $recipes->ingrediens }}
                    </p>
            </article>
     
            <article class="nextcontentRecipes">
                <header>
                    <h2><a href="#" title="second post">Step by step</a></h2>
                </header>
                    <p>
                        {{ $recipes->steps }}
                    </p>
            </article>
         
            <article class="thirdcontentRecipes">
                <header>             
                    <h2><a href="#" title="third post">User comments:</a></h2>

                    @if(Auth::check())
                        <div class="comment-create">
                            <form method="post">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <textarea name="comment" class="form-control" placeholder="Write comment..." rows="3" id="textArea"></textarea>
                                </div>
                                
                                <button type="submit" class="button">Comment</button>
                            </form>
                        </div>
                    @endif

                     <div class="showComments"></div>

                     <script src="{{ URL::asset('js/insertComment.js') }}"></script>
                     <script src="{{ URL::asset('js/getRecipeComments.js') }}"></script>
                     <script src="{{ URL::asset('js/storeComment.js') }}"></script>
                     <script src="{{ URL::asset('js/destroyComment.js') }}"></script>
                </header>
            </article>
     </div>
@endsection
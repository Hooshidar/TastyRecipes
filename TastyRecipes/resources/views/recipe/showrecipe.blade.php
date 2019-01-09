@extends('layout.main')

@section('content')
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

                    @if(auth()->check())
                        <form method="POST" action="/recipe/{{ $recipes->id }}">

                            @csrf

                            <div>
                                <textarea type="Text" name="comment" placeholder="Write comment" required></textarea>
                            </div>


                            <div>
                                <button type="submit">Comment</button>
                            </div>
                        </form>
                    @endif


                        @foreach($comments as $comment)
                            @if($comment->cid == $recipes->id)
                                <div class="commentBox">
                                <p>
                                    {{ $comment->username }}
                                    <br>
                                    {{ $comment->text }}
                                    <br>
                                    {{ $comment->created_at }}
                                </p>
                            @if(auth()->check())
                            @if($comment->username == auth()->user()->name)
                                <form class="delete-form" method="POST" action="/recipe/{{ $recipes->id }}/{{ $comment->id }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" name="commentDelete">Delete</button>
                                </form>
                            @endif
                            @endif
                            
                                </div>
                            @endif
                        @endforeach

                </header>
            </article>
     </div>
@endsection
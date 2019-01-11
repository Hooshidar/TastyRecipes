@extends('layout.main')

@section('content')
    
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

                    @if(auth()->check())
                            <input type="hidden" name="recipeId" id="recipeId" value="{{ $recipes->id }}">

                            <div>
                                <textarea type="Text" name="comment" placeholder="Write comment" id="text" required></textarea>
                            </div>

                            <div>
                                <button type="submit" id="insertComment">Comment</button>
                            </div>
                    @endif

                        <ul id="showComments">
                            

                        </ul>
                        @foreach($comments as $comment)
                        <input type="hidden" name="recipeId" id="commentId" value="{{ $comment->id }}">
                            @if($comment->cid == $recipes->id)
                                <div class="commentBox">

                                <!-- <p>
                                    {{ $comment->username }}
                                    <br>
                                    {{ $comment->text }}
                                    <br>
                                    {{ $comment->created_at }}
                                </p> -->
                            @if(auth()->check())
                            @if($comment->username == auth()->user()->name)
                                    <button type="submit" id="deleteComment">Delete</button>
                            @endif
                            @endif
                            
                                </div>
                            @endif
                        @endforeach

                    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
                            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                            crossorigin="anonymous">
                    </script>
                    <script type="text/javascript">
                        jQuery(document).ready(function(){
                            jQuery('#insertComment').click(function(e){
                                e.preventDefault();

                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });
                                jQuery.ajax({
                                    url: "{{ url('storeComment') }}",
                                    method: 'post',
                                    data: {
                                        text: jQuery('#text').val(),
                                        id: jQuery('#recipeId').val()
                                    },
                                    success: function(result){
                                        jQuery('.alert').show();
                                        jQuery('.alert').html(result.success);
                                    }
                                });
                            });

                            jQuery('#deleteComment').click(function(e){
                                e.preventDefault();

                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });
                                jQuery.ajax({
                                    url: "{{ url('deleteComment') }}",
                                    method: 'post',
                                    data: {
                                        id: jQuery('#commentId').val()
                                    },
                                    success: function(result){
                                        console.log(result);
                                    }
                                });
                            });

                            jQuery(function(){

                                var $showComments = $('#showComments')

                                jQuery.ajax({
                                    type: 'get',
                                    url: "{{ url('showComment') }}",
                                    success: function(showComments){
                                        jQuery.each(showComments, function(i, showComment){
                                            $showComments.append('<li>comments</li>');
                                        });
                                    }
                                });
                            });
                        });
                    </script>
                </header>
            </article>
     </div>
@endsection
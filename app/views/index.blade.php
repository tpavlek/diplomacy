@extends('layout')
@section('content')    
<div class="pure-g-r">
      <div class="pure-u-1-8"></div>
      <div class="pure-u-3-4">
        <br />
        <div class="purem-info">
          Diplomacy is a game of intrigue, strategy, tactics and hating that motherfucking cocksucker who broke alliance when you needed him most. 
        </div>
        <br />
        <a id="current"></a>
		@if(count($updates)) 
        <div class="current-status">
		  <img src="{{ $updates[0]->img_url }}" />
          <br />
		  <div class="updates">
          @foreach ($updates as $update)
            <div class="purem-info summary" data-img_url="{{ $update->img_url }}">
              <div class="pure-g-r">
                <div class="pure-u-7-8">
                	{{ $update->summary }}
				</div>
                <div class="pure-u-1-8">
                  <div class="date">
                  	{{ strstr($update->created_at, " ", TRUE) }}
				  </div>
                </div>
              </div>
              <div class="extend">
                <p>
					{{ $update->full }}
				</p>
              </div>
            </div>
			@endforeach
          </div> 
      	</div>
	  <div class="pure-u-1-8">
      </div>
    </div>
  </div>
@endif
    <hr />

    <a id="submit"></a>
    <h3>Order Submission Instructions</h3>

    <div class="pure-g">
      <div class="pure-u-1-2">
         <p>
         Send your orders with fulltext country names, but you can abbreviate commands if you like. For example: 
         </p>
          <div class="purem-expl purem-info">
            A Ber-Fr <br />
            F Ger-Rus <br />
          </div>
          <p>
          is not acceptable. Instead use:</p>
          <div class="purem-expl purem-info">
            A Berlin to France<br/>
            F Germany-Russia<br />
          </div>
          <p><em>Remember:</em> If you don't submit valid orders, or don't submit anything else, your armies will just
          sit there fap-fap-fapping away. And then they'd quite literally be caught with their pants down when Hitler comes
          a-knockin'.
          </p>
      </div>
      <div class="pure-u-1-2 center">
        <div class="jesus">
          <img src="img/jesus.jpg" />
        </div>
        <blockquote>"Give unto me thine orders"</blockquote>
      </div>
    </div>
    <hr />
	<script>
      $('.summary').click(function(evt) {
	  	if (!$(this).children('.extend').is(':visible')) {
	  		$('.current-status img').attr('src', $(this).data('img_url'));
        }
		$(this).children('.extend').slideToggle('fast');
      });
    </script>

@stop

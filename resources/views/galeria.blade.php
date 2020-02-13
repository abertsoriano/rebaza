@extends('layout.master')

@section('title', '- Galería')

@section('content')
<section class="news-event-teaser">
	<div class="container" style="margin-bottom: 25px">
		<div class="grid portfolio" data-gutter="5" data-columns="3">
			@foreach($galleries as $i => $gallery)
				<?php $data = json_decode($gallery->data);?>
				<div class="grid-item {{ $gallery->size_type }}">
					<a href="{{ asset('images/gallery/' . $gallery->image) }}"
					   data-rel="lightcase:gallery:slideshow"
					   title="{{ $gallery->name }}"
					   data-lc-caption="{{ $data[0] }}<br>{{ $data[1] }}<br>{{ $data[2] }}">
						<div class="img" data-background="{{ asset('images/gallery/' . $gallery->image) }}"></div>
						<div class="hover">
							<div class="centered">
								<h5>{{ $gallery->name }}</h5>
							</div>
						</div>
					</a>
				</div>
			@endforeach
		</div>
	</div>
</section>
@endsection

@section('js_extend')
	<script src="{{ asset('js/isotope.min.js') }}"></script>
	<script src="{{ asset('js/lightcase.min.js') }}"></script>
	<script src="{{ asset('js/jquery.events.touch.min.js') }}"></script>

	<script>
		$('[data-background]').each(function(){
			var bg = $(this).attr('data-background');
			if( bg.match('^rgb') || bg.match('^#') ){
				$(this).css('background-color', bg);
			}else{
				$(this).css('background-image', 'url('+bg+')');
			}
		});

		$('.grid').each(function(){
			var $grid = $(this),
				$item = $grid.children('.grid-item'),
				$itemWide = $grid.children('.grid-item.wide'),
				$itemTall = $grid.children('.grid-item.tall'),
				$cols = $grid.data('columns'),
				$cols = $cols != undefined ? $cols : 3,
				$gutter = $grid.data('gutter'),
				$gutter = $gutter != undefined ? $gutter / 2 : 0;

			// spaces between items
			$grid.wrap("<div class='grid-wrapper' />");
			$grid.css({
				'margin-left': -$gutter+'px',
				'margin-right': -$gutter+'px',
				'margin-top': -$gutter+'px',
				'margin-bottom': -$gutter+'px'
			});
			$item.wrapInner("<div class='grid-item-inner' />");
			$grid.find('.grid-item-inner').css({
				'position': 'absolute',
				'top': $gutter,
				'bottom': $gutter,
				'left': $gutter,
				'right': $gutter,
			});

			function itemSizes(){
				$item.width( $grid.width() / $cols );
				$item.height( $item.width() * 4/5 );
				$itemTall.height( $item.width() * 8/5 );
				$itemWide.width( $grid.width() / $cols * 2);
			}
			itemSizes();

			$grid.isotope({
				itemSelector: '.grid-item',
				masonry: { columnWidth: $grid.width() / $cols }
			});

			// Update Grid On Resize
			$(window).resize(function(){
				itemSizes();
				$grid.isotope({
					masonry: { columnWidth: $grid.width() / $cols }
				})
			}).resize();

		});

		// Lightbox
		$('[data-rel^=lightcase]').lightcase({
			showSequenceInfo: false,
			maxWidth: 1920,
			maxHeight: 1280,
			shrinkFactor: 1,
			swipe: true
		});
	</script>
@endsection
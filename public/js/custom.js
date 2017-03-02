$(function() {

    "use strict";

    // Nombre de la carpeta donde esta alojada la web (Solo pruebas)
    // si se coloca en la misma public_html deberia ir vacio ''
    var ALT_PATH = '/rebaza';


	// REMOVE # FROM URL
	$( 'a[href="#"]' ).click( function(e) {
		e.preventDefault();
	});

	// Tool Tip
	$('[data-toggle="tooltip"]').tooltip();

	// Special Offers Carousel
	var $carouselEspecial = $("#columna_premios");
	if ($carouselEspecial.length) {
		$carouselEspecial.owlCarousel({
			navigation : false,
			autoPlay: 3000, //Set AutoPlay to 3 seconds
			slideSpeed: 300,
			paginationSpeed : 400,
			singleItem : true,
			stopOnHover : false,
		});
	}


	// Special Offers Carousel
	var $carouselEspecial = $("#columna_quota");
	if ($carouselEspecial.length) {
		$carouselEspecial.owlCarousel({
			navigation : false,
			autoPlay: 12000, //Set AutoPlay to 3 seconds
			slideSpeed: 300,
			paginationSpeed : 400,
			singleItem : true,
			stopOnHover : false,
		});
	}

	//MAGNIFIC POPUP
	var $galleryGrid = $(".gallery-grid");
	if ($galleryGrid.length) {
		$galleryGrid.magnificPopup({
			delegate: 'a.zoom',
			type: 'image',
			gallery: {
				enabled: true
			}
		});
	}

	// Date Picker
	var $datepicker = $(".datepickerInput");
	if ($datepicker.length) {
		$datepicker.datepicker({
			format: "dd/mm/yyyy"
		});
	}

	// Tabs Google Map Init
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		initialize();
	});

	// GOOGLE MAP
	var $google = $(".contact-page-map");
	if ($google.length) {
		$google.height(440);
		function initialize($) {
			var mapOptions = {
				zoom: 8,
				center: new google.maps.LatLng(17.421306, 78.457553),
				disableDefaultUI: true
			};
			var map = new google.maps.Map(document.querySelector('.map, .contact-page-map'), mapOptions);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	}

	var $slickGallery = $('div.slick-gallery');
	if ($slickGallery.length) {
		var legend = [
			{
				title: 'S/T',
				artist: 'Jorge Cabieses',
				type: 'Digital/Acrilico/Serigrafía',
				measure: '140 x 150 cm'
			},
			{
				title: 'Diálogo del sol y la boa (1999)',
				artist: 'Armando Williams',
				type: 'Díptico – Óleo sobre tela',
				measure: '136 x 136 cm'
			},
			{
				title: 'N-N',
				artist: '',
				type: '',
				measure: ''
			},
			{
				title: 'S/T (2000)',
				artist: 'Toto Fernández Ampuero',
				type: 'Óleo',
				measure: '28 x 28 cm'
			},
			{
				title: 'S/T (2006)',
				artist: 'Maricel Delgado',
				type: 'Fotografía sobre soporte baritado',
				measure: '70 x 100 cm'
			},
			{
				title: 'Estación (2005) (en la visión de Petro-Perú)',
				artist: 'Alberto Borea',
				type: 'Mixta sobre tela',
				measure: '122 x 185 cm'
			},
			{
				title: 'N-N',
				artist: '',
				type: '',
				measure: ''
			},
			{
				title: 'N-N',
				artist: '',
				type: '',
				measure: ''
			},
			{
				title: 'Oriente y Occidente (2005)',
				artist: 'Jorge Cabieses',
				type: 'Mixta sobre tela',
				measure: '150 x 170 cm'
			},
			{
				title: 'City scene from the roof top with Wall Street Journal (2001)',
				artist: 'L.A. Willette',
				type: 'Acrílico y Collage sobre',
				measure: '72 x 130 cm'
			},
			{
				title: 'S/T',
				artist: 'Patricia Villanueva',
				type: 'Tríptico – Óleo sobre tela',
				measure: '90 x 180 cm'
			},
			{
				title: 'S/T',
				artist: 'Maciel Delgado',
				type: 'Fotografía',
				measure: ''
			},
		];

		$slickGallery.slick({
			infinite: true,
			slidesToShow: 7,
			slidesToScroll: 1,
			focusOnSelect: true,
			centerMode: true,
			responsive: [{
				breakpoint: 992,
				settings: {
					slidesToShow: 5
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1
				}
			}]
		});
		$slickGallery.on('afterChange', function(e, v) {
			var position = v.getCurrent();
			var $image = $(v.$slides.get(position)).children();
			var src = location.origin + ALT_PATH + '/images/gallery/' + $image.prop('src').split('/').pop();
			var $bgImage = $('img.bg-gallery');
			var $modalImage = $('img.modal-img-gallery');

			$bgImage.prop('src', src);
			$modalImage.prop('src', src);
			setLegend(position);
		});

		function setLegend(position) {
			var data = legend[position];

			$('#title').text(data.title);
			$('#artist').text(data.artist);
			$('#type').text(data.type);
			$('#measure').text(data.measure);
		}
		setLegend(0);
	}

	$('div.overlay-gallery').css('height', ($(document).outerHeight(true) - 155) + 'px');

	$('section.search-area').slick({
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		dots: false,
		autoplay: true,
		arrows: false
	});
});
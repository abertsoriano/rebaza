<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rebaza Admin</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<style>
		.list-articles > .row + .row {
			margin-top: 15px;
			border-top: 1px solid #ccc;
			padding-top: 15px;
		}
		.content-items li {
			padding: 5px 0;
		}
		.content-items li+li {
			border-top: 1px solid #d7d7d7;
		}
		.list-test_es > li, .list-test_en >li {
			display: block;
			margin-bottom: 20px;
			overflow: hidden;
		}
		.list-actions-buttons {
			display: inline-block;
		}
		.image-content {
			height: 300px;
			background-repeat: no-repeat;
			background-position: 50% 50%;
			background-size: cover;
		}
		.padded {
			padding-top: 15px;
			padding-bottom: 15px;
		}
		.list-quotes .row+.row {
			border-top: 1px solid #d2d2d2;
		}
		blockquote small {
			display: inline-block;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/" target="_blank">Rebaza Web</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('quoteIndex') }}">Testimonios</a></li>
					<li><a href="{{ route('articles') }}">Articulos</a></li>
					<li><a href="{{ route('lawyers', 1) }}">Abogados</a></li>
					<li><a href="{{ route('pageIndex', 'estudio') }}">Estudio</a></li>
					<li><a href="{{ route('pageIndex', 'areas') }}">Areas</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('login') }}">Login</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ route('logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/tinymce.min.js') }}"></script>
	<script type="text/javascript">
	    tinymce.DOM.addClass(tinymce.DOM.select('table'), 'table table-bordered');
	    tinymce.init({
			selector: '.paq_descripcion, .txt-lawyers',
	        height: 350,
			plugins: 'preview table lists textcolor code link',
	        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | forecolor link | preview code',
	        content_css: '/css/tinymce-custom.css',
	        init_instance_callback: function (editor) {
	            editor.on('BeforeSetContent', function (e) {
	                if (e.content.match('table')) {
	                    e.content = '<div class="table-responsive"><table class="mce-item-table table table-bordered">' + $(e.content).html() + '</table></table>';
					} else {
	                    e.content = e.content + '';
					}
	            });
	        }
		});
	    $('div.container').on('click', '.confirm-delete', function (e) {
			if (!confirm('Seguro de eliminar esto?')) {
                e.preventDefault();
			}
        });

	    $('#lawyer-type').on('change', function (e) {
			var value = $(e.currentTarget).val();
            location.assign(location.href.substr(0, location.href.length - 1) + value);
        });
	</script>
	@yield('lawyers_js')
</body>
</html>

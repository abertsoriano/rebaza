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
			selector: '.paq_descripcion',
	        height: 400,
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
	    $('div.list-articles').on('click', '.btn-danger', function (e) {
			if (!confirm('Seguro de eliminar esta noticia')) {
                e.preventDefault();
			}
        })
	</script>
</body>
</html>

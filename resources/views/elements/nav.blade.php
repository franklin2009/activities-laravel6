<!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ Url('/') }}">Laravel 6+</a>
          </div>
		  
		  
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{ Url('/') }}">Home</a></li>
              <li><a href="{{ Url('about') }}">About</a></li>
              <li><a href="{{ Url('activities') }}">Actividades</a></li>
			        <li><a href="{{ Url('employees') }}">Empleados</a></li>
            </ul>
          </div>

        </div>
      </nav>
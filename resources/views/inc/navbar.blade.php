<nav class="navbar navbar-expand-md navbar-dark  bg-dark" mt-3>
    <a class="navbar-brand"><span uk-icon="icon: check"></span>Todo List</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" 
    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto"></ul>
        <li class="{{Request::is('/') ? 'active' : ''}}">
          <a  href="/"><span uk-icon="icon:home"> <span class="sr-only"></span></a>
        </li>
        <li class="{{Request::is('todo/create') ? 'active' : ''}}" >
          <a  href="todo/create"><span uk-icon="icon: plus"></span></a>
        </li>
      </ul>
    </div>
  </nav>
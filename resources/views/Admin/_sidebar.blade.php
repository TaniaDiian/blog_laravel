<ul class="sidebar-menu">

    <li class="header">Меню</li>

    <li class="treeview">
        <a href="/admin">
            <i class="fa fa-dashboard"></i>
            <span>Адмін-панель</span>
        </a>
    </li>

    <li>
        <a href="{{route('posts.index')}}">
            <i class="fa fa-sticky-note-o"></i>
            <span>Пости</span>
        </a>
    </li>

    <li>
        <a href="{{route('categories.index')}}">
            <i class="fa fa-list-ul"></i>
            <span>Категорії</span>
        </a>
    </li>

    <li>
        <a href="{{route('tags.index')}}">
            <i class="fa fa-tags"></i>
            <span>Теги</span>
        </a>
    </li>

    <li>
        <a href="/admin/comments">
            <i class="fa fa-commenting"></i>
            <span>Коментарі</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">
                  {{$newCommentsCount}}
              </small>
            </span>
        </a>
    </li>

    <li>
        <a href="{{route('users.index')}}">
            <i class="fa fa-users"></i>
            <span>Користувачі</span>
        </a>
    </li>

    <li>
        <a href="{{route('subscribers.index')}}">
            <i class="fa fa-user-plus"></i>
            <span>Підписники</span>
        </a>
    </li>

</ul>
@if ($item['submenu'] == [])
              <li>
                <a class="nav-link scrollto" href="{{url($item['MENU_NOMBRE'])}}">{{$item['MENU_NOMBRE']}}</a>
              <li>
            @else
              <li class="dropdown"><a href="#"><span>{{$item['MENU_NOMBRE']}}</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  @foreach ($item['submenu'] as $submenu)
                      @if ($submenu['submenu'] == [])
                          <li><a href="{{ url('menu', ['ID_MENU' => $submenu['ID_MENU'], 'descripcion' =>$submenu['MENU_DESCRIPCION']]) }}"> {{ $submenu['MENU_NOMBRE']}}</a></li>
                      @else
                          @include('components.menuItem', ['item' => $submenu])
                      @endif
                  @endforeach
             
                </ul>
              </li>
            @endif
          
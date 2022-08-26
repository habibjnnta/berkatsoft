@extends('layouts')
@section('title', 'Halaman Awal')
@section('content')

<div class="container text-center">
  <div class="row">
    @foreach($all as $row)
    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="https://image.tmdb.org/t/p/original/{{ $row['poster_path'] }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $row['title'] }}</h5>
            </div>
        </div>
        <!-- <img src="https://image.tmdb.org/t/p/original/{{ $row['poster_path'] }}"> -->
        <!-- <h5 class="text-center">{{ $row['title'] }}</h5> -->
    </div>
    @endforeach
    <div class="col-12">&nbsp;</div>
    <div class="col-12 d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                @if($datas['page'] > 1)
                <li class="page-item">
                    <a class="page-link" href="{{ url('kategori/'.$datas['url'].'/'.$datas['first']) }}" aria-label="Previous">
                        First
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="{{ url('kategori/'.$datas['url'].'/'.($datas['page']-1)) }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                @endif
                @if($datas['limit'] == $datas['last'])
                    @for($i = $datas['page']; $i <= $datas['limit']; $i++)
                        @if($i <= $datas['last'])
                        <li class="page-item"><a class="page-link @php echo ($datas['page'] == $i)? 'active' : ''; @endphp" href="{{ url('kategori/'.$datas['url'].'/'.$i) }}">{{ $i }}</a></li>
                        @endif
                    @endfor
                @elseif($datas['limit'] > $datas['last'])
                    @for($i = $datas['page']; $i <= $datas['last']; $i++)
                        @if($i <= $datas['last'])
                        <li class="page-item"><a class="page-link @php echo ($datas['page'] == $i)? 'active' : ''; @endphp" href="{{ url('kategori/'.$datas['url'].'/'.$i) }}">{{ $i }}</a></li>
                        @endif
                    @endfor 
                @else 
                    @for($i = $datas['page']; $i <= $datas['limit']; $i++)
                        @if($i <= $datas['last'])
                        <li class="page-item"><a class="page-link @php echo ($datas['page'] == $i)? 'active' : ''; @endphp" href="{{ url('kategori/'.$datas['url'].'/'.$i) }}">{{ $i }}</a></li>
                        @endif
                    @endfor
                @endif
                @if($datas['limit'] < $datas['last'])
                    @if($datas['page'] <= $datas['last'])
                    <li class="page-item">
                        <a class="page-link" href="{{ url('kategori/'.$datas['url'].'/'.($datas['page']+1)) }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="{{ url('kategori/'.$datas['url'].'/'.$datas['last']) }}" aria-label="Previous">
                            Last
                        </a>
                    </li>
                    @endif
                @endif
            </ul>
        </nav>
    </div>
  </div>
</div>

   

@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">

          <!-- 新規投稿ボタンここから -->
          <div class="shadow p-3 mb-5 bg-white rounded">
           <a href="{{ route('memory.create') }}" class="post_brm">新規投稿</a>
          </div>
          <!-- 新規投稿ボタンここまで -->

          <!-- カードここから -->
          @foreach($memories as $memory)
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">
                【確認日時】<br>
                {{ $memories->date }}<br>
                【確認ポイント】<br>
                {{ $memories->point }}
              </h5>
              <p class="card-text">
                波のサイズ：{{ $size }}<br>
                面の状況:{{ $w_condition }}<br>
                波数:{{ $number }}<br>
                波の状態:{{ $state }}<br>
                風向き:{{ $direction }}<br>
                人数:{{ $people }}<br>
              </p>
              <a href="#" class="btn btn-primary">編集</a>
              <a href="#" class="btn btn-primary">削除</a>
            </div>
          </div>
          @endforeach
          <!-- カードここまで -->            

          
        </div>
    </div>
</div>
@endsection

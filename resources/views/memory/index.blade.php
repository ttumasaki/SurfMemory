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
          @if(!empty($memories))
            @foreach($memories as $memory)
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">
                  【確認日時】<br>
                  {{ $memory->date }}<br>
                  【確認ポイント】<br>
                  {{ $memory->point }}
                </h5>
                <p class="card-text">
                  波のサイズ：{{ $size }}<br>
                  面の状況:{{ $w_condition }}<br>
                  波数:{{ $number }}<br>
                  波の状態:{{ $state }}<br>
                  風向き:{{ $direction }}<br>
                  人数:{{ $people }}<br>
                </p>
                <form method="GET" action="{{route('memory.edit',[ 'id' => $memories->id ])}}">
                  @csrf
                  <input class="btn btn-primary" type="submit" value="編集する">
                </form>
                <form method="POST" action="{{route('memory.destroy',[ 'id' => $memories->id ])}}" id="delete_{{ $memories->id }}">
                  @csrf
                  <a href="#" class="btn btn-danger" data-id="{{ $memories->id }}" onclick="deletePost(this);">削除する</a>
                </form>
              </div>
            </div>
            @endforeach
          @else
            投稿がありません
          @endif
          <!-- カードここまで -->            

          
        </div>
    </div>
</div>

<!-- 削除ボタンを押した際に確認メッセージが出る様に設定 -->
<script>
function deletePost(e){
    'use strict';
    if(confirm('本当に削除していいですか？')){
        document.getElementById('delete_'+ e.dataset.id).submit();
    }
}
</script>

@endsection

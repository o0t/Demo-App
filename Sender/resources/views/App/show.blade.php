@extends('layouts.app')
@section('title', __('Sender messages'))
@push('css')

@endpush

@section('content')

        <h4 class="text-center">{{__('These are the last 6 Sender Messages')}}
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
          </svg>
        </h4>
        <br><br><br>
        <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach ($SenderMessage as $senders)
                    <div class="card border-dark mb-3 me-4 ms-2" style="max-width: 18rem;">
                        <div class="card-header bg-transparent border-dark">
                            {{$senders->user->name}}
                            <small class="text-muted">#{{ $senders->type}}</small>
                        </div>
                            <div class="card-body">
                                <h5 class="card-title"> {{ $senders->title}}</h5>
                                <p class="card-text"> {{ $senders->sender_message}}</p>
                            </div>
                        <div class="card-footer bg-transparent border-dark text-muted">{{$senders->created_at}}</div>
                    </div>
                @endforeach
        </div>
@endsection

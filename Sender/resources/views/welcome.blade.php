@extends('layouts.app')
@section('title', __('welcome'))

@push('css')

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

@endpush

@section('content')

        {{-- content --}}
        <div class="container px-4">
            <div class="row gx-5">
              <div class="col">
               <div class="p-3 border bg-light"> {{ __('send Message ') }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-dots-fill" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                </div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">{{ __('Share with your friends ') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-heart-fill" viewBox="0 0 16 16">
                        <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2ZM8 3.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                        </svg>
                </div>
              </div>
            </div>
          </div>
          <br><br>

            {{-- Hash --}}

            <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a style="color: black" class="nav-link" aria-current="page" href={{route('sender.index')}}>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                      </svg>
                  </a>
                </li>
                <li class="nav-item">
                  <a style="color: black" class="nav-link" href={{ route('new')}}>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-text-fill" viewBox="0 0 16 16">
                            <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
                        </svg>
                  </a>
                </li>
                <li class="nav-item">
                  <a style="color: black" class="nav-link" href="#" tabindex="-1" aria-disabled="true">#</a>
                </li>
            </ul>

            {{-- Hash / End --}}


          <br><br><br><br>
          <div class="d-flex position-relative">
            <img src="https://www.travis-ci.com/wp-content/uploads/2021/12/tci-tool-img.png" width="180" class="flex-shrink-0 me-3" alt="...">
            <div>
              <h5 class="mt-0"> {{ __('Live the experience now ... !')}}</h5>
              <p> {{ __('Do you want to create your own article and your friends can share it')}}</p>
              <a href="{{ route('sender.index') }}" class="stretched-link"> {{ __('Try it now .. ')}}</a>
            </div>
          </div>
        {{-- content / end --}}


@endsection

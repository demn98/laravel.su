@extends('layout')

@section('content')
    <div class="container my-5">
        <div class="col-xl-8 col-md-12 mx-auto">
            <div class="bg-body-tertiary rounded overflow-hidden mb-4">
                <!-- Cover image -->
                <div class="rounded-top"
                    style="height:200px;background-image:url(https://images.unsplash.com/photo-1698434156086-918aa526b531?auto=format&fit=crop&q=80&w=2340&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D); background-position: center; background-size: cover; background-repeat: no-repeat;">
                </div>
                <!-- Card body START -->
                <div class="px-5">
                    <div class="d-sm-flex align-items-start text-center text-sm-start">
                        <div>
                            <!-- Avatar -->
                            <div class="avatar avatar-xxl mt-n5 mb-3 mx-auto">
                                <img class="avatar-img rounded-circle border border-tertiary-subtle border-3"
                                    src="{{ $user->avatar }}" alt="">
                            </div>
                        </div>
                        <div class="ms-sm-4 mt-sm-3">

                            <h1 class="mb-0 h5">
                                {{ $user->name }}
                                <x-icon path="bs.patch-check-fill" class="text-primary" />
                            </h1>
                            <small class="opacity-75">На проекте с 23 мая 2022</small>
                        </div>


                        <div class="d-flex flex-column my-3  ms-sm-auto">


                            @if ($user->id === Auth::user()?->id)
                                <div class="d-flex mb-3 align-items-start">
                                    <x-logout class="btn btn-link" formId="sign-out" title="Выйти">
                                        <x-icon path="bs.door-closed"/>
                                    </x-logout>

                                    <div class="d-inline-flex flex-column">
                                        <a href="{{route('my.edit')}}" class="btn btn-danger mb-3">
                                            <x-icon path="bs.pencil-fill" class="pe-1"/>
                                            Редактировать
                                        </a>
                                        <a href="{{ route('post.edit') }}" class="btn btn-secondary d-inline-flex align-items-center">
                                            <x-icon path="bs.plus" class="pe-1"/>
                                            Создать запись
                                        </a>
                                    </div>

                                </div>


                            @else
                                <a href="https://github.com/{{$user->nickname}}" class="d-block">
                                    <x-icon path="bs.github" width="2em" height="2em"/>
                                </a>
                            @endif
                        </div>
                    </div>

                    <div class="">
                        {!!  \Illuminate\Support\Str::of($user->about)->markdown() !!}
                    </div>

                </div>
            </div>

        </div>

        <div class="col-xl-8 col-md-12 mx-auto mt-5 mb-3">
            <div class="bg-body-tertiary  overflow-hidden px-5 py-3">
                <div class="nav nav-underline">
                    <li class="nav-item me-2">
                        <a class="nav-link {{ active('profile') }}"
                           data-turbo-frame="navigation"
                           href="{{ route('profile',$user) }}"

                        >Статьи</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link {{ active('profile.comments') }}"
                           data-turbo-frame="navigation"
                           href="{{route('profile.comments',$user)}}"

                        >Комментариии</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link {{ active('profile.awards') }}"
                           href="{{route('profile.awards',$user)}}"
                        >Награды</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link {{ active('profile.events') }}"
                           href="{{route('profile.events',$user)}}"
                        >События</a>
                    </li>
                </div>
            </div>
        </div>

        <div>
            @yield('tab')
        </div>



    </div>

@endsection
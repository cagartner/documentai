@extends('layouts.app')

@section('content')
    <section class="hero is-light">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-centered">
                    Criar Novo Usuário
                </h1>
            </div>
        </div>
    </section>

    <div class="columns is-marginless is-centered">
        <div class="column is-8">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Register</p>
                </header>

                <div class="card-content">
                    <form class="register-form" method="POST" action="{{ route('register') }}">

                        {{ csrf_field() }}

                        <div class="field">
                            <label class="label">Nome</label>

                            <p class="control">
                                <input class="input" id="name" type="name" name="name" value="{{ old('name') }}"
                                       required autofocus>
                            </p>

                            @if ($errors->has('name'))
                                <p class="help is-danger">
                                    {{ $errors->first('name') }}
                                </p>
                            @endif
                        </div>

                        <div class="field">
                            <label class="label">E-mail Address</label>

                            <p class="control">
                                <input class="input" id="email" type="email" name="email"
                                       value="{{ old('email') }}" required autofocus>
                            </p>

                            @if ($errors->has('email'))
                                <p class="help is-danger">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif
                        </div>

                        <div class="field">
                            <label class="label">Password</label>

                            <p class="control">
                                <input class="input" id="password" type="password" name="password" required>
                            </p>

                            @if ($errors->has('password'))
                                <p class="help is-danger">
                                    {{ $errors->first('password') }}
                                </p>
                            @endif
                        </div>

                        <div class="field is-6">
                            <label class="label">Confirm Password</label>

                            <p class="control">
                                <input class="input" id="password-confirm" type="password"
                                       name="password_confirmation" required>
                            </p>

                        </div>

                        <div class="field columns">

                            <div class="field column">
                                <label for="role" class="label">User role</label>

                                <div class="control">
                                    <p class="select">
                                        <select id="role" name="role" required>
                                            @foreach($roles as $id => $role)
                                                <option value="{{ $id }}">{{ $role }}</option>
                                            @endforeach
                                        </select>
                                    </p>
                                </div>

                                {!! $errors->first('role', '<p class="help is-danger">:message</p>') !!}
                            </div>

                            <div class="column">
                                <label for="role" class="label">Projeto</label>

                                <div class="control">
                                    <p class="select">
                                        <select id="role" name="project">
                                            @if(count($projects))
                                                @foreach($projects as $id => $project)
                                                    <option value="{{ $id }}">{{ $project }}</option>
                                                @endforeach
                                            @endif
                                            <option value="">Nenhum</option>
                                        </select>
                                    </p>
                                </div>

                                {!! $errors->first('project', '<p class="help is-danger">:message</p>') !!}
                            </div>

                        </div>

                        <div class="field">
                            <div class="control">
                                <button type="submit" class="button is-primary">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <section class="hero is-light">
        <div class="hero-body">
            <div class="container">

                <div class="columns">
                    <h1 class="title column is-10 is-gapless">
                        {{ $project->name }}
                    </h1>

                    <div class="column is-2">
                        <a href="{{ route('content.new', ['project' => $project]) }}"
                           class="button is-outlined is-rounded">
                            Cadastrar Conteúdo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Full width column -->
    <div class="section">
        <div class=" bg-grey h-12 w-1/4 p-3">

        </div>
        <div class=" bg-blue h-12 w-3/4 p-3">

        </div>
    </div>
@endsection
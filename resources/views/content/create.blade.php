@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="hero-body">
            <div class="container is-fluid">
                <input class="input is-large"
                       type="text" placeholder="Título bacana" aria-label="Título bacana">
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container is-fluid">
            <medium-editor
                    text='Escreva um conteúdo legal aqui...'
                    :options='options'
                    v-on:edit='processEditOperation'
                    custom-tag='div' class="p-6">
            </medium-editor>
        </div>
    </section>
@endsection
@extends('layouts.main_layout')
@section('content')

<div class="container text-center">
    @foreach ($pessoas_linguas as $pessoa => $linguas)

    <x-card-pessoa :$pessoa :$linguas/>

    @endforeach
</div>

<div class="row">
    <h4 class="text-white texto-info">Como funciona um Slot?</h4>
    <x-other-card>
        <h1 class="text-white">Este é o slot</h1>
    </x-other-card>
</div>

<div class="text-white">
    <x-multi-slot>
        <x-slot:title>Este é o titulo</x-slot>
        <x-slot:content>Este é o conteudo
            <hr class="border-white border-top opacity-100">
        </x-slot>
            <x-slot:footer>Este é o rodape
                <ul><br>
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                </ul>
            </x-slot>
    </x-multi-slot>
</div>

<div class="text-white">
    <h4>Componente Anonimo</h4>
</div>

<x-alert-card>Mensagem 1</x-alert-card>
<x-alert-card>Mensagem 2</x-alert-card>
<x-alert-card>Mensagem 3</x-alert-card>

@endsection
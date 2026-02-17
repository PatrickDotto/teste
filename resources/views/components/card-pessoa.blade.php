<div class="bg-secondary card p-3 my-3">
    <h3 class="{{ $colorName() ? 'text-info' : '' }}">{{ $pessoa }}</h3>
    <hr>
    <p class="text-dark">Línguas que domina:</p>
   <ul class="text-start">
    @foreach($linguas as $lingua)
        <li class="text-dark">{{ $lingua }}</li>
    @endforeach
</div>
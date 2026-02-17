@foreach ($groupedFooters as $columnTitle => $footerItems)
    <h3>{{ $columnTitle }}</h3> 
    
    @foreach ($footerItems as $footer)
        <div>
            {{ $footer->key }}
            {{ $footer->value }}
        <a href="{{ route('footer.edit', [$footer]) }}">edit</a>
        <a href="{{ route('footer.delete', [$footer]) }}">delete</a>
        </div>
    @endforeach
    <br><br>
@endforeach
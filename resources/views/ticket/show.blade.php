<div style="text-align: left">
    <ul>
        @foreach($card as $item => $value)
            <li>{{$item . ':' . $value}}</li>
        @endforeach
    </ul>
</div>
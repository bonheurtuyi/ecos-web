@foreach($categories as $category)
    <li><a href="{{ route('achievements', $category->slug) }}">{{ $category->name }}</a></li>
@endforeach

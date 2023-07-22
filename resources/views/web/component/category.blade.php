<section class="section suggest-part">
    <div class="container">
        <ul class="suggest-slider slider-arrow">
            @foreach ($category_lists as $cat)
            <li><a class="suggest-card" href="{{ asset('assets/web') }}/shop-4column.html">
                    @if($cat->photo)
                    <img src=" {{ asset('') }}{{$cat->photo}}" alt="{{$cat->photo}}">
                    @else
                    <img src="https://via.placeholder.com/600x370" alt="#">
                    @endif
                    <h5>{{$cat->title}}<span>{{$cat->products->count()}} items</span></h5>
                </a></li>
            @endforeach


        </ul>
    </div>
</section>
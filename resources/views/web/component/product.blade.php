<div class="product-card">
    <div class="product-media">
        <div class="product-label">
            @if($product->stock<=0) <label class="label-text new">Sale</label>
                @elseif($product->condition=='new')
                <label class="label-text new">new</label>
                @elseif($product->condition=='hot')
                <label class="label-text sale">Hot</label>
                @else
                <label class="label-text sale">{{$product->discount}}% Off</label>
                @endif
        </div>
        <button class="product-wish wish"><i class="fas fa-heart"></i></button>

        <a class="product-image" @php $photo=explode(',',$product->photo);
            // dd($photo);
            @endphp
            href="#"><img src=" {{ asset('') }}{{$photo[0]}}" alt="product"></a>

        <div class="product-widget">
            {{-- <a title="Product Compare" href="compare.html" class="fas fa-random"></a>

            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play vbox-item"
              data-autoplay="true" data-vbtype="video"></a> --}}

            <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
              data-bs-target="#product-view"></a>

        </div>


    </div>
    <div class="product-content">
        {{-- <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i
              class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a
              href="{{ asset('assets/web') }}/product-video.html">(3)</a>
    </div> --}}
    <h6 class="product-name"><a href="{{ asset('assets/web') }}/product-video.html">{{$product->title}}</a>
    </h6>

    <h6 class="product-price">
        @php
        $after_discount=($product->price-($product->price*$product->discount)/100);
        @endphp
        <del>${{number_format($product->price,2)}}</del><span>${{number_format($after_discount,2)}}<small>/piece</small></span>
    </h6>
    {{--
        <div class="product-price">
            @php
            $after_discount=($product->price-($product->price*$product->discount)/100);
            @endphp
            <span>${{number_format($after_discount,2)}}</span>
    <del style="padding-left:4%;">${{number_format($product->price,2)}}</del>
</div> --}}
<button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
<div class="product-action"><button class="action-minus" title="Quantity Minus"><i
          class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text"
      name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
</div>
</div>
</div>



{{-- @foreach($product_lists as $key=>$product)
<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$product->cat_id}}">
<div class="single-product">
    <div class="product-img">
        <a href="{{route('product-detail',$product->slug)}}">
            @php
            $photo=explode(',',$product->photo);
            // dd($photo);
            @endphp
            <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
            <img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
            @if($product->stock<=0) <span class="out-of-stock">Sale out</span>
                @elseif($product->condition=='new')
                <span class="new">New</span @elseif($product->condition=='hot')
                <span class="hot">Hot</span>
                @else
                <span class="price-dec">{{$product->discount}}% Off</span>
                @endif


        </a>
        <div class="button-head">
            <div class="product-action">
                <a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" href="#"><i
                      class=" ti-eye"></i><span>Quick Shop</span></a>
                <a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}"><i
                      class=" ti-heart "></i><span>Add to Wishlist</span></a>
            </div>
            <div class="product-action-2">
                <a title="Add to cart" href="{{route('add-to-cart',$product->slug)}}">Add to
                    cart</a>
            </div>
        </div>
    </div>
    <div class="product-content">
        <h3><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a>
        </h3>
        <div class="product-price">
            @php
            $after_discount=($product->price-($product->price*$product->discount)/100);
            @endphp
            <span>${{number_format($after_discount,2)}}</span>
            <del style="padding-left:4%;">${{number_format($product->price,2)}}</del>
        </div>
    </div>
</div>
</div>
@endforeach --}}
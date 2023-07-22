<section class="section recent-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>recently sold items</h2>
                </div>
            </div>
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
            @if($product_lists)
            @foreach($product_lists as $key=>$product)

            <div class="col">
                @include('web.component.product')
            </div>


            @endforeach

            <!--/ End Single Tab -->
            @endif










        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="section-btn-25"><a href="{{ asset('assets/web') }}/shop-4column.html"
                      class="btn btn-outline"><i class="fas fa-eye"></i><span>show more</span></a></div>
            </div>
        </div>
    </div>
</section>

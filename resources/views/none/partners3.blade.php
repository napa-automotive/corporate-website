<section id="our-partners" class="padding">
    <div class="container">
        <div class="row">
            <h2 class="d-none">Partners Carousel</h2>
            <div class="col-md-12 col-sm-12">
                <div id="partners-slider" class="owl-carousel">
                    @foreach ($partners as $partner)
                        <div class="item">
                            <div class="logo-item"> <img alt="" src="{{ $partner->image }}"></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
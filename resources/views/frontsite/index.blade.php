@extends('frontsite.components.layout')

@section('title', 'HOME || LARA ONLINE SHOP')

@section('sidebar')
    @includeIf('frontsite.components.partials.top-navigation')
@endsection

@section('content')
    <!-- =================== SECTION – HERO WITH INFO BOXES ===================== -->
    @includeIf('frontsite.components.partials.slider-hero')
    <!-- ============= SECTION – HERO WITH INFO BOXES : END ============= -->

    <!-- ================== SCROLL TABS ======================= -->
    @includeIf('frontsite.components.partials.new-products')
    <!-- ==================== SCROLL TABS : END ======================= -->

    <!-- ===================== WIDE PRODUCTS BANNER TOP ======================= -->
    @includeIf('frontsite.components.partials.top-product-banner')
    <!-- =============== WIDE PRODUCTS BANNER TOP : END ================= -->

    <!-- ==================== FEATURED PRODUCTS ================== -->
    @includeIf('frontsite.components.partials.featured-products')
    <!-- ==================== FEATURED PRODUCTS : END ====================== -->

    <!-- ===================== WIDE PRODUCTS BANNER BOTTOM ==================== -->
    @includeIf('frontsite.components.partials.bottom-product-banner')
    <!-- ============= WIDE PRODUCTS  BANNER BOTTOM : END ================== -->

    <!-- =================== BEST SELLER ======================= -->

    <!-- ====================== BEST SELLER : END ====================== -->

    <!-- ==================== BLOG SLIDER ==================== -->

    <!-- ==================== BLOG SLIDER : END ======================= -->

    <!-- ================== FEATURED PRODUCTS ===================== -->
    @includeIf('frontsite.components.partials.new-arrivals')
    <!-- ==================== FEATURED PRODUCTS : END ===================== -->
@endsection

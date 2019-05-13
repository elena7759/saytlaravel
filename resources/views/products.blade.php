@extends('layouts.base')
@section('scripts')
    @parent
    <script src="{{asset('js/modal.js')}}"></script>
    @endsection
@section('styles')
    @parent
    <link href="{{asset('css/modal.css')}}" rel="stylesheet"/>
    @endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Галерея</div>

                    <div class="card-body">
                        <div class="container">
                                @foreach($products as $one)
                                    <div class="column dt-sc-one-fourth">
                                        <div>
                                            <a href="#" class="clickme" data-id="{{$one->id}}">
                                            @if($one->picture)
                                                <img src="{{asset('uploads/s_'.$one->picture)}}"/>
                                            @else
                                                <img src="{{asset('uploads/no_photo.png')}}"/>
                                            @endif
                                            </a>
                                        </div>
                                        <div><a href="{{asset('product/'.$one->id)}}">{{$one->name}}</a></div>
                                        <div>{{$one->price}}</div>
                                        <div>{{$one->status}}</div>

                                    </div>
                                @endforeach
                        </div>
                        <p align="center">{!!$products->links()!!}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
	
				<div class="container">
               
                <!-- **primary - Starts** --> 
				<section id="primary" class="content-full-width">
                  
                    <ul class="products">
                    
                        <li>
                            <!-- **product-wrapper - Starts** -->   
                            <div class="product-wrapper product-four-column">
                                <!-- **product-container - Starts** -->   
                                <div class="product-container">
                                    <a href="shop-detail.html"><div class="product-thumb"> <img src="http://www.placehold.it/1200x1400&text=Product" alt="image"/> </div> </a>
                                    <!-- **product-title - Starts** -->
                                    <div class="product-title"> 
                                        <a href="shop-cart.html"> <span class="fa fa-shopping-cart"></span> Add to Cart </a>
                                        <a href="#"> <span class="fa fa-unlink"></span> Options </a>
                                    </div> <!-- **product-title - Ends** -->
                                </div> <!-- **product-container - Ends** --> 
                                <!-- **product-details - Starts** --> 
                                <div class="product-details"> 
                                    <h5> <a href="shop-detail.html"> {!!$products->links()!!} </a> </h5>
                                    <span class="amount"> $20.00 </span> 
                                </div> <!-- **product-details - Ends** --> 
                            </div> <!-- **product-wrapper - Ends** -->  
                        </li>
                    
                        <li>
                            <!-- **product-wrapper - Starts** -->   
                            <div class="product-wrapper product-four-column">
                                <!-- **product-container - Starts** -->   
                                <div class="product-container">
                                    <a href="shop-detail.html"><div class="product-thumb"> <img src="http://www.placehold.it/1200x1400&text=Product" alt="image"/> </div> </a>
                                    <!-- **product-title - Starts** -->
                                    <div class="product-title"> 
                                        <a href="shop-cart.html"> <span class="fa fa-shopping-cart"></span> Add to Cart </a>
                                        <a href="#"> <span class="fa fa-unlink"></span> Options </a>
                                    </div> <!-- **product-title - Ends** -->
                                </div> <!-- **product-container - Ends** --> 
                                <!-- **product-details - Starts** --> 
                                <div class="product-details"> 
                                    <h5> <a href="shop-detail.html"> Ellents Style Grade </a> </h5>
                                    <span class="amount"> $20.00 </span> 
                                </div> <!-- **product-details - Ends** --> 
                            </div> <!-- **product-wrapper - Ends** --> 
                        </li>
                    
                        <li>
                            <!-- **product-wrapper - Starts** -->   
                            <div class="product-wrapper product-four-column">
                                <!-- **product-container - Starts** -->   
                                <div class="product-container">
                                    <a href="shop-detail.html"><div class="product-thumb"> <img src="http://www.placehold.it/1200x1400&text=Product" alt="image"/> </div> </a>
                                    <!-- **product-title - Starts** -->
                                    <div class="product-title"> 
                                        <a href="shop-cart.html"> <span class="fa fa-shopping-cart"></span> Add to Cart </a>
                                        <a href="#"> <span class="fa fa-unlink"></span> Options </a>
                                    </div> <!-- **product-title - Ends** -->
                                </div> <!-- **product-container - Ends** --> 
                                <!-- **product-details - Starts** --> 
                                <div class="product-details"> 
                                    <h5> <a href="shop-detail.html"> Ellents Style Grade </a> </h5>
                                    <span class="amount"> $20.00 </span> 
                                </div> <!-- **product-details - Ends** --> 
                            </div> <!-- **product-wrapper - Ends** -->  
                        </li>
                    
                        <li class="last">
                            <!-- **product-wrapper - Starts** -->   
                            <div class="product-wrapper product-four-column">
                                <!-- **product-container - Starts** -->   
                                <div class="product-container">
                                    <a href="shop-detail.html"><div class="product-thumb"> <img src="http://www.placehold.it/1200x1400&text=Product" alt="image"/> </div> </a>
                                    <!-- **product-title - Starts** -->
                                    <div class="product-title"> 
                                        <a href="shop-cart.html"> <span class="fa fa-shopping-cart"></span> Add to Cart </a>
                                        <a href="#"> <span class="fa fa-unlink"></span> Options </a>
                                    </div> <!-- **product-title - Ends** -->
                                </div> <!-- **product-container - Ends** --> 
                                <!-- **product-details - Starts** --> 
                                <div class="product-details"> 
                                    <h5> <a href="shop-detail.html"> Ellents Style Grade </a> </h5>
                                    <span class="amount"> $20.00 </span> 
                                </div> <!-- **product-details - Ends** --> 
                            </div> <!-- **product-wrapper - Ends** -->  
                        </li>
                    
                      
                 
                       
                    
                    </ul> <!-- **product - Ends** -->
                    <!-- **pagination - Starts** -->  
                    <div class="pagination">
                    	<div class="prev-post"> <a href="#"> <span class="fa fa-caret-left"></span> PREV </a> </div>
                        <ul>
                        	<li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                        <div class="next-post"> <a href="#">NEXT  <span class="fa fa-caret-right"></span> </a> </div>
                    </div> <!-- **pagination - Ends** -->
               		<div class="dt-sc-margin45"></div>
                </section> <!-- **primary - Ends** --> 
                
            </div> <!-- **container - Ends** --> 
@endsection

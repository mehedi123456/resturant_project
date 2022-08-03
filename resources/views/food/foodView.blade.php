<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-sm-1">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="row">
         <div class="col-sm-8" >
            
                

            @foreach ($lists as $list)
            <form action="{{ route('order',$list->id) }}" method="POST" >
                @csrf      

                <div class="item" >
                    <div style="background-image:url('/foodimage/{{ $list->image }}');" class='card' >
                        <div >{{ $list->id }}</div>
                        <div class="price"><h6>{{ $list->price }}</h6></div>
                        <div class='info'>
                           <h1 class='title'>{{ $list->title }}</h1>
                           <p class='description'>{{ $list->description }}</p>
                           <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                           </div>
                        </div>
                    </div>
                    <div class="row">
                        <a  href="{{ url('/order') }}/{{ $list->id }}" class="btn btn-primary" >Order Food</a> 
                    </div>         
                </div>
            </form>  
            @endforeach
            
                
            </div>
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->

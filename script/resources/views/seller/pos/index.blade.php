@extends('layouts.app')

@section('head')
@include('layouts.partials.headersection',['title'=>trans('Pos')])
@endsection

@if(Request::is('seller/pos*'))
    <link rel="stylesheet" href="{{ asset('assets/pos/pos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/pos/vendors.css') }}">
    <style>
        .main-content{
            padding-top:-5px;}
    </style>
@endif

@section('content')
    <section class="gry-bg py-4 profile">
        <div class="container-fluid">
            <form class="" action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="CFrN62suxwnOuvOf7dubxhhSWPReZqV9Ik3dEhsC">            <div class="row gutters-10">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-header d-block">
                                <div class="form-group">
                                    <input class="form-control form-control-sm" type="text" name="keyword" placeholder="Search by Product Name/Barcode" onkeyup="filterProducts()">
                                </div>
                                <div class="row gutters-5">
                                    <div class="col-md-6">
                                        <div class="dropdown bootstrap-select form-control form-control-sm aiz-"><select name="poscategory" class="form-control form-control-sm aiz-selectpicker" data-live-search="true" onchange="filterProducts()" tabindex="-98">
                                                <option value="">All Categories</option>
                                                <option value="category-1">Women Clothing &amp; Fashion</option>
                                                <option value="category-2">Men Clothing &amp; Fashion</option>
                                                <option value="category-3">Computer &amp; Accessories</option>
                                                <option value="category-4">Automobile &amp; Motorcycle</option>
                                                <option value="category-5">Kids &amp; toy</option>
                                                <option value="category-6">Sports &amp; outdoor</option>
                                                <option value="category-7">Jewelry &amp; Watches</option>
                                                <option value="category-8">Cellphones &amp; Tabs</option>
                                                <option value="category-9">Beauty, Health &amp; Hair</option>
                                                <option value="category-10">Home Improvement &amp; Tools</option>
                                                <option value="category-11">Home decoration &amp; Appliance</option>
                                                <option value="category-12">Toy</option>
                                                <option value="category-13">Hot Categories</option>
                                                <option value="category-14">Wedding &amp; events</option>
                                                <option value="category-15">Bottom</option>
                                                <option value="category-16">Tops &amp; sets</option>
                                                <option value="category-17">Accessories</option>
                                                <option value="category-18">Hot Categories</option>
                                                <option value="category-19">Outwear &amp; jackets</option>
                                                <option value="category-20">Bottom</option>
                                                <option value="category-21">Underwear &amp; Loungewear Accessories</option>
                                                <option value="category-22">Accessories</option>
                                                <option value="category-23">Laptop &amp; Accessories</option>
                                                <option value="category-24">Gaming pc</option>
                                                <option value="category-25">Official Equipment</option>
                                                <option value="category-26">Components &amp; Peripherals</option>
                                                <option value="category-27">Racing car</option>
                                                <option value="category-28">Four Seater sedan</option>
                                                <option value="category-29">SUV</option>
                                                <option value="category-30">Motor bike</option>
                                                <option value="category-31">Baby Clothing</option>
                                                <option value="category-32">Boys Clothing</option>
                                                <option value="category-33">Girls Clothing</option>
                                                <option value="category-34">Shoes &amp; Bag</option>
                                                <option value="category-35">Baby &amp; Mother</option>
                                                <option value="category-36">Swimming</option>
                                                <option value="category-37">Cycling</option>
                                                <option value="category-38">Sneakers</option>
                                                <option value="category-39">Fishing</option>
                                                <option value="category-40">Wedding &amp; Engagement</option>
                                                <option value="category-41">Menâ€™s watch</option>
                                                <option value="category-42">Women watch</option>
                                                <option value="category-43">Fashion Jewelry</option>
                                                <option value="category-44">Mobile Phones</option>
                                                <option value="category-45">Mobile Phone Parts</option>
                                                <option value="category-46">Mobile Phone Accessories</option>
                                                <option value="category-47">Tablets &amp; accessories</option>
                                                <option value="category-48">Makeup</option>
                                                <option value="category-49">Skin Care</option>
                                                <option value="category-50">Nail Art &amp; Tools</option>
                                                <option value="category-51">Indoor Lighting</option>
                                                <option value="category-52">Outdoor Lighting</option>
                                                <option value="category-53">LED Lighting</option>
                                                <option value="category-54">Home Decor</option>
                                                <option value="category-55">Home Textile</option>
                                                <option value="category-56">Furniture</option>
                                                <option value="category-57">Baby Toy</option>
                                                <option value="category-59">Party Dress</option>
                                                <option value="category-60">Beauty &amp; Health</option>
                                                <option value="category-61">Women shoe</option>
                                                <option value="category-62">Sleeping Dress</option>
                                                <option value="category-63">Casual Dress</option>
                                                <option value="category-64">Wedding Dresses</option>
                                                <option value="category-65">Evening Dresses</option>
                                                <option value="category-66">Prom Dresses</option>
                                                <option value="category-67">Bridesmaid Dresses</option>
                                                <option value="category-68">Skirts</option>
                                                <option value="category-69">Leggings</option>
                                                <option value="category-70">Jeans</option>
                                                <option value="category-71">Pant &amp; caprices</option>
                                                <option value="category-72">Shorts</option>
                                                <option value="category-73">Tank tops</option>
                                                <option value="category-74">Suit &amp; sets</option>
                                                <option value="category-75">Eyewear &amp; accessories</option>
                                                <option value="category-76">Hats &amp; Caps</option>
                                                <option value="category-77">Gloves</option>
                                                <option value="category-78">Hoodies &amp; Sweatshirts</option>
                                                <option value="category-79">Jackets</option>
                                                <option value="category-80">T-shirts</option>
                                                <option value="category-81">Shirts</option>
                                                <option value="category-82">Socks</option>
                                                <option value="category-83">Genuine Leather</option>
                                                <option value="category-84">Suit &amp; Blazer</option>
                                                <option value="category-85">Wool &amp; Blends</option>
                                                <option value="category-86">Formal Pants</option>
                                                <option value="category-87">Casual pants</option>
                                                <option value="category-88">Cargo pants</option>
                                                <option value="category-89">Jeans</option>
                                                <option value="category-90">Shorts</option>
                                                <option value="category-91">Boxers</option>
                                                <option value="category-92">Men sleep &amp; lounge</option>
                                                <option value="category-93">Watch</option>
                                                <option value="category-94">Wallet</option>
                                                <option value="category-95">Belt</option>
                                                <option value="category-96">Hats &amp; Cap</option>
                                                <option value="category-97">Notebook</option>
                                                <option value="category-98">Netbook</option>
                                                <option value="category-99">Laptop Battery</option>
                                                <option value="category-100">Laptop Motherboard</option>
                                                <option value="category-101">Laptop Ram</option>
                                                <option value="category-102">Laptop bag</option>
                                                <option value="category-103">Gaming casing</option>
                                                <option value="category-104">Brand PC</option>
                                                <option value="category-105">Gaming Motherboard</option>
                                                <option value="category-106">GPU</option>
                                                <option value="category-107">Gaming cooling system</option>
                                                <option value="category-108">Gaming mouse</option>
                                                <option value="category-109">Gaming keyboard</option>
                                                <option value="category-110">Inkjet printer</option>
                                                <option value="category-111">Laser printer</option>
                                                <option value="category-112">3D printer</option>
                                                <option value="category-113">Scanners</option>
                                                <option value="category-114">Photocopy machine</option>
                                                <option value="category-115">Processor</option>
                                                <option value="category-116">Motherboard</option>
                                                <option value="category-117">RAM</option>
                                                <option value="category-118">Graphics card</option>
                                                <option value="category-119">Cooling fan</option>
                                                <option value="category-120">Desktop casing</option>
                                                <option value="category-121">Formula Racing</option>
                                                <option value="category-122">Sports car racing</option>
                                                <option value="category-123">Stock car racing</option>
                                                <option value="category-124">Drag racing</option>
                                                <option value="category-125">Rallying</option>
                                                <option value="category-126">Luxury car</option>
                                                <option value="category-127">Taxi</option>
                                                <option value="category-128">Hybrid car</option>
                                                <option value="category-129">Gasoline car</option>
                                                <option value="category-130">Luxury SUV</option>
                                                <option value="category-131">Off-road SUV</option>
                                                <option value="category-132">Midsize SUV</option>
                                                <option value="category-133">Mini SUV</option>
                                                <option value="category-134">Racing Bike</option>
                                                <option value="category-135">Adventure Touring Bikes</option>
                                                <option value="category-136">Choppers, Cruisers</option>
                                                <option value="category-137">Cruisers</option>
                                                <option value="category-138">Power Cruisers</option>
                                                <option value="category-139">Motocross Bikes</option>
                                                <option value="category-140">Baby Dresses</option>
                                                <option value="category-141">Baby rompers</option>
                                                <option value="category-142">Baby pants</option>
                                                <option value="category-143">Baby outwear</option>
                                                <option value="category-144">Clothing sets</option>
                                                <option value="category-145">T-shirts</option>
                                                <option value="category-146">Hoodies</option>
                                                <option value="category-147">Jeans</option>
                                                <option value="category-148">Dresses</option>
                                                <option value="category-149">Clothing set</option>
                                                <option value="category-150">Tops</option>
                                                <option value="category-151">Sleeping wear</option>
                                                <option value="category-152">Babyâ™s first walker</option>
                                                <option value="category-153">Babyâ€™s Shoe</option>
                                                <option value="category-154">Girlâ€s Shoe</option>
                                                <option value="category-155">School bag</option>
                                                <option value="category-156">Babyâ€™s wallet</option>
                                                <option value="category-157">Nappy Changing</option>
                                                <option value="category-158">Baby Care</option>
                                                <option value="category-159">Backpacks &amp; Carriers</option>
                                                <option value="category-160">Maternity</option>
                                                <option value="category-161">Bikini set</option>
                                                <option value="category-162">One piece suits</option>
                                                <option value="category-163">Two piece suits</option>
                                                <option value="category-164">Menâ€™s swimwear</option>
                                                <option value="category-165">Childrenâ€™s swimwear</option>
                                                <option value="category-166">Bicycles</option>
                                                <option value="category-167">Bicycle Frames</option>
                                                <option value="category-168">Bicycle Lights</option>
                                                <option value="category-169">Bicycle Helmets</option>
                                                <option value="category-170">Cycling Jerseys</option>
                                                <option value="category-171">Cycling Eye wear</option>
                                                <option value="category-172">Running Shoes</option>
                                                <option value="category-173">Hiking Shoes</option>
                                                <option value="category-174">Soccer Shoes</option>
                                                <option value="category-175">Basketball Shoes</option>
                                                <option value="category-176">Fishing Reels</option>
                                                <option value="category-177">Fishing Lures</option>
                                                <option value="category-178">Fishing Lines</option>
                                                <option value="category-179">Fishing Rods</option>
                                                <option value="category-180">Bridal Jewelry Sets</option>
                                                <option value="category-181">Engagement Rings</option>
                                                <option value="category-182">Wedding Hair Jewelry</option>
                                                <option value="category-183">Smart watch</option>
                                                <option value="category-184">Mechanical watch</option>
                                                <option value="category-185">Digital watch</option>
                                                <option value="category-186">Sports watch</option>
                                                <option value="category-187">Sports Watches</option>
                                                <option value="category-188">Women's Bracelet Watches</option>
                                                <option value="category-189">Dress Watches</option>
                                                <option value="category-190">Necklaces &amp; Pendants</option>
                                                <option value="category-191">Hot Rings</option>
                                                <option value="category-192">Trendy Earrings</option>
                                                <option value="category-193">Bracelets &amp; Bangles</option>
                                                <option value="category-194">Basic phone</option>
                                                <option value="category-195">Android phone</option>
                                                <option value="category-196">iOS phone</option>
                                                <option value="category-197">Windows Phone</option>
                                                <option value="category-198">Mobile Phone LCDs</option>
                                                <option value="category-199">Mobile Phone Batteries</option>
                                                <option value="category-200">Mobile Phone Touch, SIM Card &amp; Tools</option>
                                                <option value="category-201">SIM Card &amp; Tools</option>
                                                <option value="category-202">Power Bank</option>
                                                <option value="category-203">Screen Protectors</option>
                                                <option value="category-204">Mobile Phone Cables</option>
                                                <option value="category-205">Holders &amp; Stands</option>
                                                <option value="category-206">iOS Tablet</option>
                                                <option value="category-207">Android Tablet</option>
                                                <option value="category-208">Tablet accessories</option>
                                                <option value="category-209">Eyes</option>
                                                <option value="category-210">Lips</option>
                                                <option value="category-211">Face</option>
                                                <option value="category-212">Makeup Tools</option>
                                                <option value="category-213">Face</option>
                                                <option value="category-214">Eyes</option>
                                                <option value="category-215">Body</option>
                                                <option value="category-216">Skin Care Tools</option>
                                                <option value="category-217">Nail Gel</option>
                                                <option value="category-218">Nail Drill</option>
                                                <option value="category-219">Nail Dryer</option>
                                                <option value="category-220">Nail Glitter</option>
                                                <option value="category-221">Ceiling Lights</option>
                                                <option value="category-222">Wall Lamps</option>
                                                <option value="category-223">Night Lights</option>
                                                <option value="category-224">Flashlights &amp; Torches</option>
                                                <option value="category-225">Solar Lamps</option>
                                                <option value="category-226">Underwater Lights</option>
                                                <option value="category-227">LED Strips</option>
                                                <option value="category-228">LED Downlights</option>
                                                <option value="category-229">LED Panel Lights</option>
                                                <option value="category-230">LED Spotlights</option>
                                                <option value="category-231">LED Bar Lights</option>
                                                <option value="category-232">Painting &amp; Calligraphy</option>
                                                <option value="category-233">Wall Stickers</option>
                                                <option value="category-234">Wall Clock</option>
                                                <option value="category-235">Cushions</option>
                                                <option value="category-236">Bedding Set</option>
                                                <option value="category-237">Beach Towels</option>
                                                <option value="category-238">Home Furniture</option>
                                                <option value="category-239">Office Furniture</option>
                                                <option value="category-240">Outdoor Furniture</option>
                                                <option value="category-241">Top Furniture Stores</option>
                                                <option value="category-242">Spekar</option>
                                                <option value="category-243">Software</option>
                                                <option value="category-244">Women Watch</option>
                                                <option value="category-245">Women Dress</option>
                                                <option value="category-246">Baby Dress</option>
                                                <option value="category-247">Men Formal Dress</option>
                                                <option value="category-248">Doll</option>
                                                <option value="category-249">Tools</option>
                                                <option value="category-250">TV $ Soundbox</option>
                                            </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="All Categories"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">All Categories</div></div> </div></button><div class="dropdown-menu " style="max-height: 243px; overflow: hidden;"><div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-1" aria-autocomplete="list" aria-activedescendant="bs-select-1-0"></div><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1" style="max-height: 175px; overflow-y: auto;"><ul class="dropdown-menu inner show" role="presentation" style="margin-top: 0px; margin-bottom: 0px;"><li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-1-0" tabindex="0" aria-setsize="250" aria-posinset="1" aria-selected="true"><span class="text">All Categories</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-1" tabindex="0"><span class="text">Women Clothing &amp; Fashion</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-2" tabindex="0"><span class="text">Men Clothing &amp; Fashion</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-3" tabindex="0"><span class="text">Computer &amp; Accessories</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-4" tabindex="0"><span class="text">Automobile &amp; Motorcycle</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-5" tabindex="0"><span class="text">Kids &amp; toy</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-6" tabindex="0"><span class="text">Sports &amp; outdoor</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-7" tabindex="0"><span class="text">Jewelry &amp; Watches</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-8" tabindex="0"><span class="text">Cellphones &amp; Tabs</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-9" tabindex="0"><span class="text">Beauty, Health &amp; Hair</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-10" tabindex="0"><span class="text">Home Improvement &amp; Tools</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-11" tabindex="0"><span class="text">Home decoration &amp; Appliance</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-12" tabindex="0"><span class="text">Toy</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-13" tabindex="0"><span class="text">Hot Categories</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-14" tabindex="0"><span class="text">Wedding &amp; events</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-15" tabindex="0"><span class="text">Bottom</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-16" tabindex="0"><span class="text">Tops &amp; sets</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-17" tabindex="0"><span class="text">Accessories</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-18" tabindex="0"><span class="text">Hot Categories</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-19" tabindex="0"><span class="text">Outwear &amp; jackets</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-20" tabindex="0"><span class="text">Bottom</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-21" tabindex="0"><span class="text">Underwear &amp; Loungewear Accessories</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-22" tabindex="0"><span class="text">Accessories</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-23" tabindex="0"><span class="text">Laptop &amp; Accessories</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-24" tabindex="0"><span class="text">Gaming pc</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-25" tabindex="0"><span class="text">Official Equipment</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-26" tabindex="0"><span class="text">Components &amp; Peripherals</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-27" tabindex="0"><span class="text">Racing car</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-28" tabindex="0"><span class="text">Four Seater sedan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-29" tabindex="0"><span class="text">SUV</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-30" tabindex="0"><span class="text">Motor bike</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-31" tabindex="0"><span class="text">Baby Clothing</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-32" tabindex="0"><span class="text">Boys Clothing</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-33" tabindex="0"><span class="text">Girls Clothing</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-34" tabindex="0"><span class="text">Shoes &amp; Bag</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-35" tabindex="0"><span class="text">Baby &amp; Mother</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-36" tabindex="0"><span class="text">Swimming</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-37" tabindex="0"><span class="text">Cycling</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-38" tabindex="0"><span class="text">Sneakers</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-39" tabindex="0"><span class="text">Fishing</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-40" tabindex="0"><span class="text">Wedding &amp; Engagement</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-41" tabindex="0"><span class="text">Menâ€™s watch</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-42" tabindex="0"><span class="text">Women watch</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-43" tabindex="0"><span class="text">Fashion Jewelry</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-44" tabindex="0"><span class="text">Mobile Phones</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-45" tabindex="0"><span class="text">Mobile Phone Parts</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-46" tabindex="0"><span class="text">Mobile Phone Accessories</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-47" tabindex="0"><span class="text">Tablets &amp; accessories</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-48" tabindex="0"><span class="text">Makeup</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-49" tabindex="0"><span class="text">Skin Care</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-50" tabindex="0"><span class="text">Nail Art &amp; Tools</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-51" tabindex="0"><span class="text">Indoor Lighting</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-52" tabindex="0"><span class="text">Outdoor Lighting</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-53" tabindex="0"><span class="text">LED Lighting</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-54" tabindex="0"><span class="text">Home Decor</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-55" tabindex="0"><span class="text">Home Textile</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-56" tabindex="0"><span class="text">Furniture</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-57" tabindex="0"><span class="text">Baby Toy</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-58" tabindex="0"><span class="text">Party Dress</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-59" tabindex="0"><span class="text">Beauty &amp; Health</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-60" tabindex="0"><span class="text">Women shoe</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-61" tabindex="0"><span class="text">Sleeping Dress</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-62" tabindex="0"><span class="text">Casual Dress</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-63" tabindex="0"><span class="text">Wedding Dresses</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-64" tabindex="0"><span class="text">Evening Dresses</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-65" tabindex="0"><span class="text">Prom Dresses</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-66" tabindex="0"><span class="text">Bridesmaid Dresses</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-67" tabindex="0"><span class="text">Skirts</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-68" tabindex="0"><span class="text">Leggings</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-69" tabindex="0"><span class="text">Jeans</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-70" tabindex="0"><span class="text">Pant &amp; caprices</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-71" tabindex="0"><span class="text">Shorts</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-72" tabindex="0"><span class="text">Tank tops</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-73" tabindex="0"><span class="text">Suit &amp; sets</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-74" tabindex="0"><span class="text">Eyewear &amp; accessories</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-75" tabindex="0"><span class="text">Hats &amp; Caps</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-76" tabindex="0"><span class="text">Gloves</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-77" tabindex="0"><span class="text">Hoodies &amp; Sweatshirts</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-78" tabindex="0"><span class="text">Jackets</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-79" tabindex="0"><span class="text">T-shirts</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-80" tabindex="0"><span class="text">Shirts</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-81" tabindex="0"><span class="text">Socks</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-82" tabindex="0"><span class="text">Genuine Leather</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-83" tabindex="0"><span class="text">Suit &amp; Blazer</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-84" tabindex="0"><span class="text">Wool &amp; Blends</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-85" tabindex="0"><span class="text">Formal Pants</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-86" tabindex="0"><span class="text">Casual pants</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-87" tabindex="0"><span class="text">Cargo pants</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-88" tabindex="0"><span class="text">Jeans</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-89" tabindex="0"><span class="text">Shorts</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-90" tabindex="0"><span class="text">Boxers</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-91" tabindex="0"><span class="text">Men sleep &amp; lounge</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-92" tabindex="0"><span class="text">Watch</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-93" tabindex="0"><span class="text">Wallet</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-94" tabindex="0"><span class="text">Belt</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-95" tabindex="0"><span class="text">Hats &amp; Cap</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-96" tabindex="0"><span class="text">Notebook</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-97" tabindex="0"><span class="text">Netbook</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-98" tabindex="0"><span class="text">Laptop Battery</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-99" tabindex="0"><span class="text">Laptop Motherboard</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-100" tabindex="0"><span class="text">Laptop Ram</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-101" tabindex="0"><span class="text">Laptop bag</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-102" tabindex="0"><span class="text">Gaming casing</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-103" tabindex="0"><span class="text">Brand PC</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-104" tabindex="0"><span class="text">Gaming Motherboard</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-105" tabindex="0"><span class="text">GPU</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-106" tabindex="0"><span class="text">Gaming cooling system</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-107" tabindex="0"><span class="text">Gaming mouse</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-108" tabindex="0"><span class="text">Gaming keyboard</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-109" tabindex="0"><span class="text">Inkjet printer</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-110" tabindex="0"><span class="text">Laser printer</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-111" tabindex="0"><span class="text">3D printer</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-112" tabindex="0"><span class="text">Scanners</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-113" tabindex="0"><span class="text">Photocopy machine</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-114" tabindex="0"><span class="text">Processor</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-115" tabindex="0"><span class="text">Motherboard</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-116" tabindex="0"><span class="text">RAM</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-117" tabindex="0"><span class="text">Graphics card</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-118" tabindex="0"><span class="text">Cooling fan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-119" tabindex="0"><span class="text">Desktop casing</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-120" tabindex="0"><span class="text">Formula Racing</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-121" tabindex="0"><span class="text">Sports car racing</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-122" tabindex="0"><span class="text">Stock car racing</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-123" tabindex="0"><span class="text">Drag racing</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-124" tabindex="0"><span class="text">Rallying</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-125" tabindex="0"><span class="text">Luxury car</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-126" tabindex="0"><span class="text">Taxi</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-127" tabindex="0"><span class="text">Hybrid car</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-128" tabindex="0"><span class="text">Gasoline car</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-129" tabindex="0"><span class="text">Luxury SUV</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-130" tabindex="0"><span class="text">Off-road SUV</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-131" tabindex="0"><span class="text">Midsize SUV</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-132" tabindex="0"><span class="text">Mini SUV</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-133" tabindex="0"><span class="text">Racing Bike</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-134" tabindex="0"><span class="text">Adventure Touring Bikes</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-135" tabindex="0"><span class="text">Choppers, Cruisers</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-136" tabindex="0"><span class="text">Cruisers</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-137" tabindex="0"><span class="text">Power Cruisers</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-138" tabindex="0"><span class="text">Motocross Bikes</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-139" tabindex="0"><span class="text">Baby Dresses</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-140" tabindex="0"><span class="text">Baby rompers</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-141" tabindex="0"><span class="text">Baby pants</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-142" tabindex="0"><span class="text">Baby outwear</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-143" tabindex="0"><span class="text">Clothing sets</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-144" tabindex="0"><span class="text">T-shirts</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-145" tabindex="0"><span class="text">Hoodies</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-146" tabindex="0"><span class="text">Jeans</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-147" tabindex="0"><span class="text">Dresses</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-148" tabindex="0"><span class="text">Clothing set</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-149" tabindex="0"><span class="text">Tops</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-150" tabindex="0"><span class="text">Sleeping wear</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-151" tabindex="0"><span class="text">Babyâ™s first walker</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-152" tabindex="0"><span class="text">Babyâ€™s Shoe</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-153" tabindex="0"><span class="text">Girlâ€s Shoe</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-154" tabindex="0"><span class="text">School bag</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-155" tabindex="0"><span class="text">Babyâ€™s wallet</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-156" tabindex="0"><span class="text">Nappy Changing</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-157" tabindex="0"><span class="text">Baby Care</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-158" tabindex="0"><span class="text">Backpacks &amp; Carriers</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-159" tabindex="0"><span class="text">Maternity</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-160" tabindex="0"><span class="text">Bikini set</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-161" tabindex="0"><span class="text">One piece suits</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-162" tabindex="0"><span class="text">Two piece suits</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-163" tabindex="0"><span class="text">Menâ€™s swimwear</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-164" tabindex="0"><span class="text">Childrenâ€™s swimwear</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-165" tabindex="0"><span class="text">Bicycles</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-166" tabindex="0"><span class="text">Bicycle Frames</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-167" tabindex="0"><span class="text">Bicycle Lights</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-168" tabindex="0"><span class="text">Bicycle Helmets</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-169" tabindex="0"><span class="text">Cycling Jerseys</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-170" tabindex="0"><span class="text">Cycling Eye wear</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-171" tabindex="0"><span class="text">Running Shoes</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-172" tabindex="0"><span class="text">Hiking Shoes</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-173" tabindex="0"><span class="text">Soccer Shoes</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-174" tabindex="0"><span class="text">Basketball Shoes</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-175" tabindex="0"><span class="text">Fishing Reels</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-176" tabindex="0"><span class="text">Fishing Lures</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-177" tabindex="0"><span class="text">Fishing Lines</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-178" tabindex="0"><span class="text">Fishing Rods</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-179" tabindex="0"><span class="text">Bridal Jewelry Sets</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-180" tabindex="0"><span class="text">Engagement Rings</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-181" tabindex="0"><span class="text">Wedding Hair Jewelry</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-182" tabindex="0"><span class="text">Smart watch</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-183" tabindex="0"><span class="text">Mechanical watch</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-184" tabindex="0"><span class="text">Digital watch</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-185" tabindex="0"><span class="text">Sports watch</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-186" tabindex="0"><span class="text">Sports Watches</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-187" tabindex="0"><span class="text">Women's Bracelet Watches</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-188" tabindex="0"><span class="text">Dress Watches</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-189" tabindex="0"><span class="text">Necklaces &amp; Pendants</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-190" tabindex="0"><span class="text">Hot Rings</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-191" tabindex="0"><span class="text">Trendy Earrings</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-192" tabindex="0"><span class="text">Bracelets &amp; Bangles</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-193" tabindex="0"><span class="text">Basic phone</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-194" tabindex="0"><span class="text">Android phone</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-195" tabindex="0"><span class="text">iOS phone</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-196" tabindex="0"><span class="text">Windows Phone</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-197" tabindex="0"><span class="text">Mobile Phone LCDs</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-198" tabindex="0"><span class="text">Mobile Phone Batteries</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-199" tabindex="0"><span class="text">Mobile Phone Touch, SIM Card &amp; Tools</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-200" tabindex="0"><span class="text">SIM Card &amp; Tools</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-201" tabindex="0"><span class="text">Power Bank</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-202" tabindex="0"><span class="text">Screen Protectors</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-203" tabindex="0"><span class="text">Mobile Phone Cables</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-204" tabindex="0"><span class="text">Holders &amp; Stands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-205" tabindex="0"><span class="text">iOS Tablet</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-206" tabindex="0"><span class="text">Android Tablet</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-207" tabindex="0"><span class="text">Tablet accessories</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-208" tabindex="0"><span class="text">Eyes</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-209" tabindex="0"><span class="text">Lips</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-210" tabindex="0"><span class="text">Face</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-211" tabindex="0"><span class="text">Makeup Tools</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-212" tabindex="0"><span class="text">Face</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-213" tabindex="0"><span class="text">Eyes</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-214" tabindex="0"><span class="text">Body</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-215" tabindex="0"><span class="text">Skin Care Tools</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-216" tabindex="0"><span class="text">Nail Gel</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-217" tabindex="0"><span class="text">Nail Drill</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-218" tabindex="0"><span class="text">Nail Dryer</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-219" tabindex="0"><span class="text">Nail Glitter</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-220" tabindex="0"><span class="text">Ceiling Lights</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-221" tabindex="0"><span class="text">Wall Lamps</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-222" tabindex="0"><span class="text">Night Lights</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-223" tabindex="0"><span class="text">Flashlights &amp; Torches</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-224" tabindex="0"><span class="text">Solar Lamps</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-225" tabindex="0"><span class="text">Underwater Lights</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-226" tabindex="0"><span class="text">LED Strips</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-227" tabindex="0"><span class="text">LED Downlights</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-228" tabindex="0"><span class="text">LED Panel Lights</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-229" tabindex="0"><span class="text">LED Spotlights</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-230" tabindex="0"><span class="text">LED Bar Lights</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-231" tabindex="0"><span class="text">Painting &amp; Calligraphy</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-232" tabindex="0"><span class="text">Wall Stickers</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-233" tabindex="0"><span class="text">Wall Clock</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-234" tabindex="0"><span class="text">Cushions</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-235" tabindex="0"><span class="text">Bedding Set</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-236" tabindex="0"><span class="text">Beach Towels</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-237" tabindex="0"><span class="text">Home Furniture</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-238" tabindex="0"><span class="text">Office Furniture</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-239" tabindex="0"><span class="text">Outdoor Furniture</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-240" tabindex="0"><span class="text">Top Furniture Stores</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-241" tabindex="0"><span class="text">Spekar</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-242" tabindex="0"><span class="text">Software</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-243" tabindex="0"><span class="text">Women Watch</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-244" tabindex="0"><span class="text">Women Dress</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-245" tabindex="0"><span class="text">Baby Dress</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-246" tabindex="0"><span class="text">Men Formal Dress</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-247" tabindex="0"><span class="text">Doll</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-248" tabindex="0"><span class="text">Tools</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-249" tabindex="0"><span class="text">TV $ Soundbox</span></a></li></ul></div></div></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="dropdown bootstrap-select form-control form-control-sm aiz-"><select name="brand" class="form-control form-control-sm aiz-selectpicker" data-live-search="true" onchange="filterProducts()" tabindex="-98">
                                                <option value="">All Brands</option>
                                                <option value="1">Ford</option>
                                                <option value="2">Chevrolet</option>
                                                <option value="3">Audi</option>
                                                <option value="4">Hyundai</option>
                                                <option value="5">Nissan</option>
                                                <option value="6">BMW</option>
                                                <option value="7">Mercedes-Benz</option>
                                                <option value="8">Toyota</option>
                                                <option value="9">Suzuki</option>
                                                <option value="10">Mitsubishi</option>
                                                <option value="11">Honda</option>
                                                <option value="12">Volvo</option>
                                                <option value="13">Yamaha</option>
                                                <option value="14">Brighton</option>
                                                <option value="15">Tanishq</option>
                                                <option value="16">Victoria's Secret</option>
                                                <option value="17">Dior</option>
                                                <option value="18">Bucketfeet</option>
                                                <option value="19">JLO</option>
                                                <option value="20">En'or</option>
                                                <option value="21">Rolex</option>
                                                <option value="22">Polo</option>
                                                <option value="23">Aigner</option>
                                                <option value="24">Omega</option>
                                                <option value="25">Axe</option>
                                                <option value="26">Addidas</option>
                                                <option value="27">Nike</option>
                                                <option value="28">Puma</option>
                                                <option value="29">Reebok</option>
                                                <option value="30">Samsung</option>
                                                <option value="31">Apple</option>
                                                <option value="32">Dell</option>
                                                <option value="33">HP</option>
                                                <option value="34">Acer</option>
                                                <option value="35">Asus</option>
                                                <option value="36">Sony</option>
                                                <option value="37">Lenovo</option>
                                                <option value="38">Corsair</option>
                                                <option value="39">Microsoft</option>
                                                <option value="40">Hitachi</option>
                                                <option value="41">Lakme</option>
                                                <option value="42">Logitech</option>
                                                <option value="43">Calvin Klein</option>
                                                <option value="44">Little live pets</option>
                                                <option value="45">Baby TV</option>
                                                <option value="46">Kickers</option>
                                                <option value="47">lucky Brand</option>
                                                <option value="48">Nihal</option>
                                                <option value="49">ELLE</option>
                                                <option value="50">The Crystal Bride</option>
                                                <option value="51">DG</option>
                                                <option value="52">Hudson</option>
                                                <option value="53">Muratti</option>
                                                <option value="54">Breitling</option>
                                                <option value="55">Burberry</option>
                                                <option value="56">Huwaei</option>
                                                <option value="57">HTC</option>
                                                <option value="58">Nokia</option>
                                                <option value="59">Johnson's baby</option>
                                                <option value="60">Cerelac</option>
                                                <option value="61">Babies Outfits</option>
                                                <option value="62">Pampers</option>
                                                <option value="63">Toys Pino</option>
                                                <option value="64">Belly Baby</option>
                                                <option value="65">Baby Care</option>
                                                <option value="66">Baby &amp; me</option>
                                                <option value="67">Razer</option>
                                                <option value="68">Loreal</option>
                                                <option value="69">Dove</option>
                                                <option value="70">NYX</option>
                                                <option value="71">Guess</option>
                                                <option value="72">Mac</option>
                                                <option value="73">Flormar</option>
                                                <option value="74">Sephora</option>
                                                <option value="75">Urban Decay</option>
                                                <option value="76">Maybeline</option>
                                                <option value="77">Lexington</option>
                                                <option value="78">Jade furniture</option>
                                                <option value="80">Apato</option>
                                                <option value="81">Brooks</option>
                                                <option value="82">Decor</option>
                                                <option value="83">IFD</option>
                                                <option value="84">Interno</option>
                                                <option value="85">Hilsdale</option>
                                                <option value="86">Nicoletti</option>
                                                <option value="87">Rolls royce</option>
                                                <option value="88">Joules</option>
                                                <option value="89">Alosa</option>
                                                <option value="90">Denim</option>
                                                <option value="91">One Plus</option>
                                                <option value="92">Mercedes</option>
                                                <option value="93">BAS Vampire</option>
                                                <option value="94">WOODWORM</option>
                                                <option value="95">Google</option>
                                                <option value="96">Xiaomi</option>
                                                <option value="97">Riyal Enfield</option>
                                                <option value="98">Royal Enfield</option>
                                                <option value="99">Philipps</option>
                                                <option value="100">LOUIS-VUITTON</option>
                                                <option value="101">Canon</option>
                                            </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" title="All Brands"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">All Brands</div></div> </div></button><div class="dropdown-menu " style="max-height: 243px; overflow: hidden;"><div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-2" aria-autocomplete="list" aria-activedescendant="bs-select-2-0"></div><div class="inner show" role="listbox" id="bs-select-2" tabindex="-1" style="max-height: 175px; overflow-y: auto;"><ul class="dropdown-menu inner show" role="presentation" style="margin-top: 0px; margin-bottom: 0px;"><li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-2-0" tabindex="0" aria-setsize="101" aria-posinset="1" aria-selected="true"><span class="text">All Brands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-1" tabindex="0"><span class="text">Ford</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-2" tabindex="0"><span class="text">Chevrolet</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-3" tabindex="0"><span class="text">Audi</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-4" tabindex="0"><span class="text">Hyundai</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-5" tabindex="0"><span class="text">Nissan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-6" tabindex="0"><span class="text">BMW</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-7" tabindex="0"><span class="text">Mercedes-Benz</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-8" tabindex="0"><span class="text">Toyota</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-9" tabindex="0"><span class="text">Suzuki</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-10" tabindex="0"><span class="text">Mitsubishi</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-11" tabindex="0"><span class="text">Honda</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-12" tabindex="0"><span class="text">Volvo</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-13" tabindex="0"><span class="text">Yamaha</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-14" tabindex="0"><span class="text">Brighton</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-15" tabindex="0"><span class="text">Tanishq</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-16" tabindex="0"><span class="text">Victoria's Secret</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-17" tabindex="0"><span class="text">Dior</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-18" tabindex="0"><span class="text">Bucketfeet</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-19" tabindex="0"><span class="text">JLO</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-20" tabindex="0"><span class="text">En'or</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-21" tabindex="0"><span class="text">Rolex</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-22" tabindex="0"><span class="text">Polo</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-23" tabindex="0"><span class="text">Aigner</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-24" tabindex="0"><span class="text">Omega</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-25" tabindex="0"><span class="text">Axe</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-26" tabindex="0"><span class="text">Addidas</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-27" tabindex="0"><span class="text">Nike</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-28" tabindex="0"><span class="text">Puma</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-29" tabindex="0"><span class="text">Reebok</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-30" tabindex="0"><span class="text">Samsung</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-31" tabindex="0"><span class="text">Apple</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-32" tabindex="0"><span class="text">Dell</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-33" tabindex="0"><span class="text">HP</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-34" tabindex="0"><span class="text">Acer</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-35" tabindex="0"><span class="text">Asus</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-36" tabindex="0"><span class="text">Sony</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-37" tabindex="0"><span class="text">Lenovo</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-38" tabindex="0"><span class="text">Corsair</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-39" tabindex="0"><span class="text">Microsoft</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-40" tabindex="0"><span class="text">Hitachi</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-41" tabindex="0"><span class="text">Lakme</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-42" tabindex="0"><span class="text">Logitech</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-43" tabindex="0"><span class="text">Calvin Klein</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-44" tabindex="0"><span class="text">Little live pets</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-45" tabindex="0"><span class="text">Baby TV</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-46" tabindex="0"><span class="text">Kickers</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-47" tabindex="0"><span class="text">lucky Brand</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-48" tabindex="0"><span class="text">Nihal</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-49" tabindex="0"><span class="text">ELLE</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-50" tabindex="0"><span class="text">The Crystal Bride</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-51" tabindex="0"><span class="text">DG</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-52" tabindex="0"><span class="text">Hudson</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-53" tabindex="0"><span class="text">Muratti</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-54" tabindex="0"><span class="text">Breitling</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-55" tabindex="0"><span class="text">Burberry</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-56" tabindex="0"><span class="text">Huwaei</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-57" tabindex="0"><span class="text">HTC</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-58" tabindex="0"><span class="text">Nokia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-59" tabindex="0"><span class="text">Johnson's baby</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-60" tabindex="0"><span class="text">Cerelac</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-61" tabindex="0"><span class="text">Babies Outfits</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-62" tabindex="0"><span class="text">Pampers</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-63" tabindex="0"><span class="text">Toys Pino</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-64" tabindex="0"><span class="text">Belly Baby</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-65" tabindex="0"><span class="text">Baby Care</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-66" tabindex="0"><span class="text">Baby &amp; me</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-67" tabindex="0"><span class="text">Razer</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-68" tabindex="0"><span class="text">Loreal</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-69" tabindex="0"><span class="text">Dove</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-70" tabindex="0"><span class="text">NYX</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-71" tabindex="0"><span class="text">Guess</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-72" tabindex="0"><span class="text">Mac</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-73" tabindex="0"><span class="text">Flormar</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-74" tabindex="0"><span class="text">Sephora</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-75" tabindex="0"><span class="text">Urban Decay</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-76" tabindex="0"><span class="text">Maybeline</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-77" tabindex="0"><span class="text">Lexington</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-78" tabindex="0"><span class="text">Jade furniture</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-79" tabindex="0"><span class="text">Apato</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-80" tabindex="0"><span class="text">Brooks</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-81" tabindex="0"><span class="text">Decor</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-82" tabindex="0"><span class="text">IFD</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-83" tabindex="0"><span class="text">Interno</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-84" tabindex="0"><span class="text">Hilsdale</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-85" tabindex="0"><span class="text">Nicoletti</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-86" tabindex="0"><span class="text">Rolls royce</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-87" tabindex="0"><span class="text">Joules</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-88" tabindex="0"><span class="text">Alosa</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-89" tabindex="0"><span class="text">Denim</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-90" tabindex="0"><span class="text">One Plus</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-91" tabindex="0"><span class="text">Mercedes</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-92" tabindex="0"><span class="text">BAS Vampire</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-93" tabindex="0"><span class="text">WOODWORM</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-94" tabindex="0"><span class="text">Google</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-95" tabindex="0"><span class="text">Xiaomi</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-96" tabindex="0"><span class="text">Riyal Enfield</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-97" tabindex="0"><span class="text">Royal Enfield</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-98" tabindex="0"><span class="text">Philipps</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-99" tabindex="0"><span class="text">LOUIS-VUITTON</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-2-100" tabindex="0"><span class="text">Canon</span></a></li></ul></div></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="aiz-pos-product-list c-scrollbar-light">
                                    <div class="row gutters-5" id="product-list"><div class="col-3"><div class="card bg-light c-pointer mb-2 product-card" data-id="1"><span class="absolute-top-left bg-dark text-white px-1">$120.000</span><img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/LV2eJXL8TgFBvOJkSa4Hyq6R4WxcUsfYZxDMTCn2.jpg" class="card-img-top img-fit h-100px mw-100 mx-auto"><div class="card-body p-2"><div class="text-truncate-2 small">Daily Ritual Women's Jersey Short-Sleeve Boxy Pocket T-Shirt Dress</div></div></div></div><div class="col-3"><div class="card bg-light c-pointer mb-2 product-card" data-id="2"><span class="absolute-top-left bg-dark text-white px-1">$150.000</span><img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/J1k1qLmMRXZhl4KM9avZghk7GUona5dJosTtTW5k.jpg" class="card-img-top img-fit h-100px mw-100 mx-auto"><div class="card-body p-2"><div class="text-truncate-2 small">Calvin Klein Women's Scuba Sleeveless Princess Seamed Sheath Dress</div></div></div></div><div class="col-3"><div class="card bg-light c-pointer mb-2 product-card" data-id="3"><span class="absolute-top-left bg-dark text-white px-1">$90.000</span><img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/sCOuGJ9Gbzx2yupQJma5jZ7xv8ulRLg6uDKIN8nM.jpg" class="card-img-top img-fit h-100px mw-100 mx-auto"><div class="card-body p-2"><div class="text-truncate-2 small">Adiba Women's Regular Fit Joggers</div></div></div></div><div class="col-3"><div class="card bg-light c-pointer mb-2 product-card" data-id="4"><span class="absolute-top-left bg-dark text-white px-1">$100.000</span><img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/4bJDGEhFarQe88k1D7T8ycJKzCZftQ9vKYp01Jcb.jpg" class="card-img-top img-fit h-100px mw-100 mx-auto"><div class="card-body p-2"><div class="text-truncate-2 small">Anne Klein Women's Classic V-Neck Faux Wrap Dress</div></div></div></div><div class="col-3"><div class="card bg-light c-pointer mb-2 product-card" data-id="5"><span class="absolute-top-left bg-dark text-white px-1">$120.000</span><img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/KTfTUXBtWbtE79tTFPKDyePoRMjmlgADck5MnWHq.jpg" class="card-img-top img-fit h-100px mw-100 mx-auto"><div class="card-body p-2"><div class="text-truncate-2 small">Basil Leaf Off White Chiffon Asymmetrical Hemline Kurti</div></div></div></div><div class="col-3"><div class="card bg-light c-pointer mb-2 product-card" data-id="7"><span class="absolute-top-left bg-dark text-white px-1">$100.000</span><img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/46fF0uzJIs8LSonxrdbV9NaOY2v9qf1EcERglvZm.jpg" class="card-img-top img-fit h-100px mw-100 mx-auto"><div class="card-body p-2"><div class="text-truncate-2 small">PAMABA Toddler Teen Girl Summer Princess Cosplay Dresses Baby Girl Clothes</div></div></div></div><div class="col-3"><div class="card bg-light c-pointer mb-2 product-card" data-id="8"><span class="absolute-top-left bg-dark text-white px-1">$120.000</span><img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/KGOVpvTugKOue0qnCtxUPUSZjCIoDranB1lI6hIS.jpg" class="card-img-top img-fit h-100px mw-100 mx-auto"><div class="card-body p-2"><div class="text-truncate-2 small">FNOCKS Girls Kids Casual WEAR Slim FIT Trendy Stylish Capri Jeans with TOP</div></div></div></div><div class="col-3"><div class="card bg-light c-pointer mb-2 product-card" data-id="9"><span class="absolute-top-left bg-dark text-white px-1">$140.000</span><img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/qdHr9b6l6C6rmtHoqvthJGqMloN5QPtFmzcKsyKB.jpg" class="card-img-top img-fit h-100px mw-100 mx-auto"><div class="card-body p-2"><div class="text-truncate-2 small">Sportoli Maxi Dresses for Women Solid Lightweight Long Racerback Sleeveless W/Pocket</div></div></div></div><div class="col-3"><div class="card bg-light c-pointer mb-2 product-card" data-id="10"><span class="absolute-top-left bg-dark text-white px-1">$1,200.000</span><img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/ct5MTUrbESEaVH71rdkenycBpltX2zwQdoK7b1o9.jpg" class="card-img-top img-fit h-100px mw-100 mx-auto"><div class="card-body p-2"><div class="text-truncate-2 small">Apple - iPhone 12 Pro Max 5G 256GB</div></div></div></div><div class="col-3"><div class="card bg-light c-pointer mb-2 product-card" data-id="11"><span class="absolute-top-left bg-dark text-white px-1">$1,200.000</span><img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/p3gt6nkTAPfDQ4taBaDu2D15xATzTdwIkI38CH9d.jpg" class="card-img-top img-fit h-100px mw-100 mx-auto"><div class="card-body p-2"><div class="text-truncate-2 small">IPhone 11 pro Max 256 GB</div></div></div></div><div class="col-3"><div class="card bg-light c-pointer mb-2 product-card" data-id="12"><span class="absolute-top-left bg-dark text-white px-1">$800.000</span><img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/feJCpeG43kOjPrZTPAosLh1kZAve1bYkT9zpmD6M.jpg" class="card-img-top img-fit h-100px mw-100 mx-auto"><div class="card-body p-2"><div class="text-truncate-2 small">OnePlus 7 (128GB/256GB storage, no card slot)</div></div></div></div><div class="col-3"><div class="card bg-light c-pointer mb-2 product-card" data-id="13"><span class="absolute-top-left bg-dark text-white px-1">$1,100.000</span><img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/nEspYWkuakPjCzYt1oY5QBEHybKhC0PqDHGv3WFy.jpg" class="card-img-top img-fit h-100px mw-100 mx-auto"><div class="card-body p-2"><div class="text-truncate-2 small">OnePlus 7 pro (128GB/256GB storage, no card slot)</div></div></div></div><div class="col-3"><div class="card bg-light c-pointer mb-2 product-card" data-id="14"><span class="absolute-top-left bg-dark text-white px-1">$900.000</span><img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/ugLyhMJFGUdLT40eKJckaa775EsITpS2IRU0ajFD.jpg" class="card-img-top img-fit h-100px mw-100 mx-auto"><div class="card-body p-2"><div class="text-truncate-2 small">OnePlus 8 12GB RAM+256GB Storage</div></div></div></div><div class="col-3"><div class="card bg-light c-pointer mb-2 product-card" data-id="15"><span class="absolute-top-left bg-dark text-white px-1">$1,500.000</span><img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/SQvraqHCYJaiDHLEwa3dkcYPFjff6zVHLm4w2pEQ.jpg" class="card-img-top img-fit h-100px mw-100 mx-auto"><div class="card-body p-2"><div class="text-truncate-2 small">Apple iPad Pro 512GB 11IN MTXU</div></div></div></div><div class="col-3"><div class="card bg-light c-pointer mb-2 product-card" data-id="16"><span class="absolute-top-left bg-dark text-white px-1">$250.000</span><img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/dg5RnBPdWIGA3o3OGCJT3V7onBo5sgTRl3C3HbT6.jpg" class="card-img-top img-fit h-100px mw-100 mx-auto"><div class="card-body p-2"><div class="text-truncate-2 small">Nokia 3310</div></div></div></div><div class="col-3"><div class="card bg-light c-pointer mb-2 product-card" data-id="17"><span class="absolute-top-left bg-dark text-white px-1">$399.000</span><img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/rHmAnLeW13ZISqBHxHNOqBdgC9e5VviSbEKQxlJI.jpg" class="card-img-top img-fit h-100px mw-100 mx-auto"><div class="card-body p-2"><div class="text-truncate-2 small">Apple  AirPods</div></div></div></div></div>
                                    <div id="load-more">
                                        <p class="text-center fs-14 fw-600 p-2 bg-soft-primary c-pointer" onclick="loadMoreProduct()">Load More</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <div class="dropdown bootstrap-select form-control form-control-sm aiz- pos-customer"><select name="user_id" class="form-control form-control-sm aiz-selectpicker pos-customer" data-live-search="true" onchange="getShippingAddress()" tabindex="-98">
                                                <option value="">Walk In Customer</option>
                                                <option value="8" data-contact="customer@example.com">Mr. Customer</option>
                                                <option value="25" data-contact="">Alon Mask</option>
                                            </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-3" aria-haspopup="listbox" aria-expanded="false" title="Walk In Customer"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Walk In Customer</div></div> </div></button><div class="dropdown-menu " style="overflow: hidden;"><div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-3" aria-autocomplete="list" aria-activedescendant="bs-select-3-0"></div><div class="inner show" role="listbox" id="bs-select-3" tabindex="-1" style="overflow-y: auto;"><ul class="dropdown-menu inner show" role="presentation" style="margin-top: 0px; margin-bottom: 0px;"><li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-3-0" tabindex="0" aria-setsize="3" aria-posinset="1" aria-selected="true"><span class="text">Walk In Customer</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-3-1" tabindex="0"><span class="text">Mr. Customer</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-3-2" tabindex="0"><span class="text">Alon Mask</span></a></li></ul></div></div></div>
                                    </div>
                                    <button type="button" class="btn btn-icon btn-soft-dark ml-3" data-target="#new-customer" data-toggle="modal">
                                        <i class="las la-truck"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card mar-btm" id="cart-details">
                            <div class="card-body">
                                <div class="aiz-pos-cart-list c-scrollbar-light">
                                    <table class="table aiz-table mb-0 mar-no footable footable-1 breakpoint-lg" cellspacing="0" width="100%" style="">
                                        <thead>
                                        <tr class="footable-header">





                                            <th width="50%" style="display: table-cell;">Product</th><th width="15%" style="display: table-cell;">QTY</th><th style="display: table-cell;">Price</th><th style="display: table-cell;">Subtotal</th><th class="text-right" style="display: table-cell;">Remove</th></tr>
                                        </thead>
                                        <tbody>
                                        <tr class="footable-empty"><td colspan="5">Nothing Found</td></tr></tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer bord-top"
{{--                                 style="overflow: scroll"--}}
                            >
                                <table class="table mb-0 mar-no" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Sub Total</th>
                                        <th class="text-center">Total Tax</th>
                                        <th class="text-center">Total Shipping</th>
                                        <th class="text-center">Discount</th>
                                        <th class="text-center">TOTAL</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">$0.000</td>
                                        <td class="text-center">$0.000</td>
                                        <td class="text-center">$0.000</td>
                                        <td class="text-center">$0.000</td>
                                        <td class="text-center">$0.000</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="pos-footer mar-btm">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <div class="dropdown mr-3 dropup">
                                        <button class="btn btn-outline-dark btn-styled dropdown-toggle" type="button" data-toggle="dropdown">
                                            Shipping
                                        </button>
                                        <div class="dropdown-menu p-3 dropdown-menu-lg">
                                            <div class="radio radio-inline">
                                                <input type="radio" name="shipping" id="radioExample_2a" value="0" checked="" onchange="setShipping()">
                                                <label for="radioExample_2a">Without Shipping Charge</label>
                                            </div>

                                            <div class="radio radio-inline">
                                                <input type="radio" name="shipping" id="radioExample_2b" value="1" onchange="setShipping()">
                                                <label for="radioExample_2b">With Shipping Charge</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown dropup">
                                        <button class="btn btn-outline-dark btn-styled dropdown-toggle" type="button" data-toggle="dropdown">
                                            Discount
                                        </button>
                                        <div class="dropdown-menu p-3 dropdown-menu-lg">
                                            <div class="input-group">
                                                <input type="number" min="0" placeholder="Amount" name="discount" class="form-control" value="0" required="" onchange="setDiscount()">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Flat</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <button type="button" class="btn btn-primary" data-target="#order-confirm" data-toggle="modal">Pay With Cash</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <div id="order-confirm" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom">
            <div class="modal-content" id="variants">
                <div class="modal-header bord-btm">
                    <h4 class="modal-title h6">Order Confirmation</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure to confirm this order?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-styled btn-base-3" data-dismiss="modal">Close</button>
                    <button type="button" onclick="submitOrder('cash')" class="btn btn-styled btn-base-1 btn-primary">Comfirm Order</button>
                </div>
            </div>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

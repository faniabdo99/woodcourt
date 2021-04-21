@include('layout.header', [
'PageTitle' => 'Expert Hub',
'Description' => 'The Wood Court provides stylish, warm and natural feels all combined together in the perfect design
execution',
'ogType' => 'Website'
])

<body>
    @include('layout.navbar')
    <section class="hero-section" id="about-us-hero-section">
        <div class="dark-overlap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <h1>Expert Hub</h1>
                        <p class="mb-5">How To Take Care Of Your Wood Floors?</p>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="row icons-row d-flex">
                                    <div class="col-sm-5 col-lg-12 d-flex justify-content-center">
                                        <i class="flaticon-education"></i>
                                    </div>
                                    <div class="col-sm-7 col-lg-12  d-flex justify-content-center flex-column align-items-center text-center">
                                        <h4>Tutorials</h4>
                                        <p>Get advanced knowledge on how to take care of your wooden possesions like
                                            floors and kitchens</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="row icons-row d-flex">
                                    <div class="col-sm-5 col-lg-12 d-flex justify-content-center">
                                        <i class="flaticon-faq"></i>
                                    </div>
                                    <div class="col-sm-7 col-lg-12  d-flex justify-content-center flex-column align-items-center text-center">
                                        <h4>Resources</h4>
                                        <p>Stay updated about new wood care techniques and methodologies</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="row icons-row d-flex">
                                    <div class="col-sm-5 col-lg-12 d-flex justify-content-center">
                                        <i class="flaticon-text"></i>
                                    </div>
                                    <div class="col-sm-7 col-lg-12  d-flex justify-content-center flex-column align-items-center text-center">
                                        <h4>FAQs</h4>
                                        <p>Answer most of your questions about wood floors and other items</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 hero-section-content">
                        <div class="social-media-hero">
                            <h3>Contact Us</h3>
                            <p>Find Us On Social Media</p>
                            <ul>
                                <li class="facebook-li"><a href="https://www.facebook.com/thewoodcourt/" target="_blank "><i class="fab fa-facebook"></i> <span>@thewoodcourt</span></a>
                                </li>
                                <li class="instagram-li"><a href="https://www.instagram.com/thewoodcourt/" target="_blank "><i class="fab fa-instagram"></i> <span>@thewoodcourt</span></a>
                                </li>
                                <li class="whatsapp-li"><a href="https://api.whatsapp.com/send?phone=201117571111" target="_blank "><i class="fab fa-whatsapp"></i> <span>0111 757 1111</span></a>
                                </li>
                                <li class="email-li"><a href="mailto:info@thewoodcourt.com" target="_blank "><i class="fas fa-envelope"></i> <span>info@thewoodcourt.com</span></a></li>
                                <li class="youtube-li"><a href="https://www.youtube.com/channel/UCBNdQKYldyJh3Nx5WyV0jtQ" target="_blank "><i class="fab fa-youtube"></i> <span>The Wood Court</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid mt-5 mb-5" id="content-section">
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="products-sidebar mb-5" id="expert-hub-sidebar">
                    <ul class="filter-items nav nav-tabs" id="nav-tab" role="tablist">
                        <li>
                            <a class="nav-item nav-link active main-category-filter" data-toggle="tab" href="#wood-care">Wood Care</a>
                            <ul class="toturials-sublist nav nav-tabs ml-5">
                                <li><a class="nav-item nav-link sub-category-filter active" data-toggle="tab" href="#floor-care">Floor Care</a></li>
                                <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#kitchen-care">Kitchen Care</a></li>
                                <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#outdoor-care">Outdoor Care</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-item nav-link main-category-filter" data-toggle="tab" href="#toturial">Tutorials</a>
                            <ul class="nav nav-tabs ml-5">
                                <li><a class="nav-item active nav-link sub-category-filter" data-toggle="tab" href="#installation-methodology">Installation Methodology</a></li>
                                <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#finishing-techniques">Finishing Techniques</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-item nav-link main-category-filter" data-toggle="tab" href="#resources">Resources</a>
                            <ul class="nav nav-tabs ml-5">
                                <li><a class="nav-item nav-link sub-category-filter active" data-toggle="tab" href="#engineered-floors">Engineered Hardwood Flooring</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-item nav-link main-category-filter" id="FAQs-section" data-toggle="tab" href="#faqs">FAQs</a>
                            <ul class="nav nav-tabs ml-5">
                                <li><a class="nav-item nav-link sub-category-filter active" data-toggle="tab" href="#indoor-faqs">Indoor Flooring FAQs</a></li>
                                <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#kitchens-faqs">Kitchens & Cabinets FAQs</a></li>
                                <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#outdoor-faqs">Outdoor Floors & Pergolas FAQs</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-item nav-link main-category-filter" data-toggle="tab" href="#blogs">Blog</a>
                            {{-- <ul class="nav nav-tabs ml-5">
                                <li><a class="nav-item nav-link sub-category-filter active" data-toggle="tab" href="#latest-trends">Latest Trends In Wood Flooring</a></li>
                                <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#choose-suitable">How To Choose A Suitable HardWood Floor</a></li>
                                <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#teak-maintenance">Teak Deck Maintenance</a></li>
                                <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#hpl-boards">What Is The HPL Boards</a></li>
                            </ul> --}}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="wood-care">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="floor-care">
                                <h2>How To Take Care Of Your Indoor Flooring?</h2>
                                <img class="w-100 h-50 my-3" src="{{url('public/images/wood-care/1.jpg')}}" alt="wood-care">
                                <p>In home and office interior designs, the value of wood cannot be denied its timeless
                                    visual appeal and natural beauty. <br> If you take proper care of wood floorings,
                                    cabinets, installments, and claddings, you can expect them to survive for decades. <br>
                                    Let's take a look at the top ways to take care of your wood floorings and cabinets.
                                </p>
                                <p class="mb-4">Wooden Floors Can Be The Highlight Of Any Home. <br> The Natural Strength And
                                    Beauty Of Wood Has Been Used For Centuries And To This Day, Remains The Material Of
                                    Choice For Flooring. <br> If You’ve Stripped Back An Old Victorian Floor, Had New Solid
                                    Wood Or Engineered Flooring Installed, Or Even Used Reclaimed Boards, Looking After
                                    And Maintaining Them Once They’ve Been Oiled Or Varnished Is Key. <br> It’s A Simple Fact
                                    That Wooden Floor Finishes That Have Been Well Maintained Will Look Better And Last
                                    Much Longer Than Those That Have Not. <br> So, What Is The Best Way To Look After And
                                    Maintain A Wooden Floor? Well, You’ll Be Pleased To Know That It’s Not That
                                    Difficult And Doesn’t Require A Great Deal Of Work. <br> To Help We’ve Produced A Lovely
                                    Guide To Help You Keep Your Wooden Floors Looking Amazing</p>
                                <ul class="ml-0">
                                    <li>Never ever use a wet mop to clean your wood floor either natural wood or hdf
                                        (high-density fiber).</li>
                                    <li>Use a damp mop to remove dust first, to make your floor dust-free.</li>
                                    <li>Use oil-based cleaners, do not use furniture cleaners to clean. Your wood floors
                                        will be slippery.</li>
                                    <li>Do not use alcohol, acids, or chemicals to clean your wood floors, It can damage
                                        your wood flooring.</li>
                                    <li>Always wipe parallel to grains direction, as that will clean the grooves much
                                        better. <br> Use a microfiber towel to clean your wood floors, It will remove stains,
                                        clean your floor & make it shiny.</li>
                                    <li>Remove spills immediately, long exposure to liquids will lead to damage.</li>
                                    <li>Use soft coasters under your furniture to prevent scratches.</li>
                                    <li>Regularly clip your pets’ nails to avoid deep scratches</li>
                                    <li>Don't expose to too much sunlight <br>
                                        A sun-kissed glow looks great for skin, but not on wood floors, inspect your
                                        wood floors once a month, and if there is any discoloration, it's time to apply
                                        a fresh topcoat.
                                    </li>
                                    <li>Don't put any electronics directly on the wood floor, the heat generated from
                                        these devices will affect your floors negatively in the long run.</li>
                                    <li>Don't use multipurpose cleaner <br>
                                        Don't use the same cleaner for natural wood floors & hdf, each type has its
                                        cleaning liquid.
                                    </li>
                                    <li>Ventilate your home, good ventilation will make your wood floors healthy & live
                                        longer.</li>
                                    <li>The best atmosphere conditions to make your wood floors healthy are 30% - 50%
                                        relative humidity & 15- 25 ℃ temperature. Thankfully, these conditions are
                                        comfortable for us too.</li>
                                    <li>Use doormats to protect wood floors from street sand & mud.</li>
                                    <li>Always use felt protector pads on the underside of the legs of tables and
                                        chairs, and never drag heavy objects across your wood floors.</li>
                                    <li>Every few decades, sound and refinish your wood floor. <br> Typically, solid and
                                        engineered wood floors could be sanded and refinished several times up to 10
                                        times according to the wooden top width. <br> Sanding and refinishing are typically
                                        needed every about 7-12 years according to age and care, After this process,
                                        your natural wood floors will return like new with the ability to change their
                                        color & finish.
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="kitchen-care">
                                <h2>How to Take Care of Your Kitchen Counters and Cabinets?</h2>
                                <img class="w-100 h-50 my-3" src="{{url('public/images/wood-care/2.jpg')}}" alt="kitchens">
                                <ul>
                                    <li>Clean all food spills from wood surfaces immediately & thoroughly, most foods
                                        can damage wood finishes eventually.</li>
                                    <li>Prevent spilling of acidic food or juices as much as you can on wood surfaces,
                                        such as orange juice.</li>
                                    <li>Tea, coffee & other many drinks are great but will leave a bad-look stain on
                                        wood surfaces if they’re not cleaned immediately.</li>
                                    <li>When cleaning a wood surface, use a microfiber towel, do not use a dish sponge
                                        or washing as it may damage wood surfaces.</li>
                                    <li>Clean your kitchen cabinets and surface wring clean water & mild soap with a
                                        clean, lint-free rag.</li>
                                    <li>Use water sparingly and a towel to dry any excess, when water sits, it can
                                        penetrate the finish and raise the wood grains leading to a rough uncleanable
                                        surface in future.</li>
                                    <li>Wipe parallel to the wood grains direction, remove dust with the dry micro-fiber
                                        towel, it is your first step to clean your kitchen.</li>
                                    <li>Always use polish cream monthly to shine your kitchen instead of waxing, wax
                                        makes a shiny look but attracts dust.</li>
                                    <li>Be cautious of overuse of surface cleaners & sprays as they may contain silicon,
                                        which will make layers & layers order wood surface & results in a pale look with
                                        time.</li>
                                    <li>When it comes to wooden counter-top, it is very important to use “food grade
                                        mineral oil”.</li>
                                    <li>Use a ventilating fan when cooking, it removes the majority of airborne smoke &
                                        grease which other wishes may be absorbed by wood leading to a bad smell &
                                        yellowish stains.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="outdoor-care">
                                <h2>How to Take Care of Wooden Pergolas & Outdoor Flooring?</h2>
                                <img class="w-100 h-50 my-3" src="{{url('public/images/wood-care/3.jpg')}}" alt="outdoor">
                                <p class="mt-3">Wood is a beautiful option for your garden flooring, under the pergola,
                                    and outdoor area of your restaurant or cafe, also the wooden pergola itself gives
                                    your home privacy & make you have a great time outdoors, the wood grains and variety
                                    of colors when beside the wonderful green color of plants.<br>
                                    Teak wood especially is very durable and has high resistance to outdoor conditions,
                                    (sunlight, heat & rain) even when installed directly as a pool decking, needs low
                                    maintenance, you just need to give it some attention to keep it as beautiful as day
                                    one.</p>
                                <ul>
                                    <li>Pick up large debris like paper and fallen tree leaves at once.</li>
                                    <li>Use a vacuum machine to remove dust from the in-between grooves, it is much
                                        easier than whisking.</li>
                                    <li>Use a mixture of ammonia & warm water with a ratio of 1:4 to help you remove all
                                        the stuck dirt & debris, by wiping the wood with the mixture using a sponge mop.
                                    </li>
                                    <li>Do wipe parallel to the grain</li>
                                    <li>Let your wood either floors or pergola to dry completely, at leave 3-5 hours
                                        temperature +15 ℃</li>
                                    <li>Use a floor cleaner especially made for your hardwood, it will always be on
                                        oil-based cleaner, not water or aqua-based.</li>
                                    <li>Teak wood has a natural oil that keeps mold down, this natural oil also works as
                                        an insect repellent & prevents wood from cracking when exposed to high
                                        temperature.
                                    </li>
                                    <li>When wood is exposed to direct sunlight, this oil gradually by time will
                                        evaporate, leaving a bad look with silver-grey discoloration.
                                        According to your
                                        country's weather, and daily time of direct daily sunlight hours that your wood
                                        is exposed to, you will need to reapply oil to teak wood several times a year
                                        (between 4-8 times). Also, several climatic conditions & high uv index may cause
                                        the teak wood surface to change color silver, then it is also time to reapply
                                        teak oil.</li>
                                    <li>When applying teak oil, follow the wood grains using a clean rag, and rub in
                                        well.
                                    </li>
                                    <li>Do not apply a heavy layer of oil, 70-100 grams is more than enough for each
                                        square meter.</li>
                                    <li>After one hour use a clean new rag to remove excess oil and let it completely
                                        dry before placing your furniture back to avoid spots.</li>
                                    <li>Always remove any spills immediately, to avoid spots. If you have spots, just
                                        apply a small amount of ammonia and it will disappear instantly.</li>
                                    <li>You don't have to use any insect repellant for teak wood, as teak wood grains
                                        are rich with silica, which acts as a natural repellent for insects & bugs.
                                        Also, teak wood grains contain natural rubber oil which is resistant to rotting
                                        when exposed to extreme conditions.</li>
                                    <li>Always wear rubber gloves, eye protection, and a mask while using any chemical
                                        materials.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="toturial">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="installation-methodology">
                                <h2>Installing Methodology</h2>
                                <h3>Installing the wood floors :
                                </h3>
                                <h4>1- Nailed Down Installing Technique
                                </h4>
                                <img class="mb-2 " src="{{url('public')}}/images/articles/7.png" alt="1">
                                <p>The most common & traditional way to install wood floors wood tiles or planks are to
                                    be installed by nailing down on wooden subfloors, the nails are inclined vertical,
                                    paring from the woodside directly fixing it to the subfloors a drum-noise is heard
                                    while walking on due to space under the wood floor. <br> </p>
                                <h4>2- Gluing Down Installing Technique
                                </h4>
                                <img class="mb-2 " src="{{url('public')}}/images/articles/5.png" alt="1">
                                <p>Bonding the wood floors with the subfloors using gluing is a very good and cheap way
                                    to install your wood floors or d3 water base glue using polyurethane (oil-based) d4
                                    glue is the best way to ensure lifelong bond, as the glue can dissipate over time
                                    because at the different expand coefficient between the wood & the
                                    concrete tiles or ceramic tiles, no drum-noise is heard at all. <br> You will get a
                                    lifetime guarantee against debonding when purchasing from The Wood Court.
                                </p>
                                <h4>3- Floating Installation Technique.
                                </h4>
                                <img class="mb-2 " src="{{url('public')}}/images/articles/6.png" alt="1">

                                <p>Installing your floors using this technique makes it very easy to maintain as you can
                                    replace any damaged piece early, the wood floors are floated over the subfloor,
                                    then laminate sheet with 2mm thickness is placed between wood & subfloor to isolate
                                    moisture and decrease sounds when walking on. <br> This technique also makes it very easy
                                    to uninstall your wood floor and use it again in another place, leaving the subfloor
                                    without any damage.</p>
                                <h3>Installation:</h3>
                                <h5>(A) Sub-floors:
                                </h5>
                                <h4>1- Wooden Subfloor:</h4>
                                <img class="mb-2 " src="{{url('public')}}/images/articles/8.png" alt="1">
                                <p>In this type of subfloor, wooden beams made of red pine wood with 5cm square section
                                    or 5cm by 4cm rectangular section are installed with 25 to 35 pieces of concrete to
                                    leave the floor, fixed with metal fixtures and concrete to be bent with the floor. <br>
                                    Than 1.6cm by 10cm section of some wood type are installed with about 2-10 cm spaces
                                    in opposite direction to be a top subfloor laid in which wood floor fixation takes
                                    place. <br>
                                    This is the traditional subflooring used more than 100 years ago, always used up
                                    till now in nail down installation technique.
                                </p>
                                <h4>2- Wood On Tiles Sub Floor:</h4>
                                <img class="mb-2 " src="{{url('public')}}/images/articles/9.png" alt="1">
                                <p>In this type, we use concrete tiles, mosaic tiles, low quality ceramic tiles instead
                                    of wood for the installation process. Tiles are installed regularly and flush on
                                    concrete, are fixed on it. <br> This method also is used for nailed down installation
                                    technique</p>
                                <h4>3- Concrete-based Tiles Subfloor: </h4>
                                <p>Used always for glue down & floating installation technique, mosaic or ceramic tiles
                                    are installed directly using concrete, for leaving the wood floors are glued down
                                    on it floated on it using polythene sheets to prevent humidity, temperature, sound.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="finishing-techniques">
                                <p>When it comes to choosing hardwood floors, & the question is not only solid or
                                    engineered wood flooring but also, site-finish or pre-finished floors? Which one is
                                    better? And why? Well, each type has its benefits</p>
                                <h2>1.Site Finish:</h2>
                                <img class="mb-2 w-50" src="{{url('public')}}/images/articles/finishing/Pict 6.png" alt="1">
                                <p>When you go for the site-finish wood floors, then you are purchasing wood floors
                                    which will be shipped to your home unfinished, to be sanded, possibly stained, and
                                    then sealed and finished with a top protective layer in your home. <br> This process
                                    takes a bit of a long time, produces dust during sanding, and bad smell during coating.
                                    In this type
                                </p>
                                <ul>
                                    <li>You can choose & either water, oil-based polyurethane, or natural oil finish
                                    </li>
                                    <li>Sheen level matte, semi-gloss, high gloss
                                    </li>
                                    <li>
                                        Custom installation patterns, borders, inlays, medallions features</li>
                                    <li>Refinishing is available.</li>
                                    <li>In addition to square edges, or bucked edges</li> <br>
                                    <img class="mb-2 " src="{{url('public')}}/images/articles/finishing/8.1.png" alt="1">
                                    <img class="mb-2 " src="{{url('public')}}/images/articles/finishing/8.2.png" alt="1">
                                </ul>
                                <p>Traditionally, you choose sile-finishing when time isn't critical new construction
                                    and nobody lives in site (to avoid dust) it takes a long time. (4-6) days to send
                                    and clean wood floors, ensure the site is clean, the environment is stable within
                                    site, applying stain and top coating ( about 3-4 ) coats, and wait for each
                                    application to dry <br>
                                    <br>
                                    Remember, no one can go through the site during the whole process, the smell of
                                    finishing is not pleasant at all. <br> <br>
                                    Available finishes with site finishing
                                </p>
                                <ol>
                                    <li> Oil-based Polyurethane:</li>
                                    <p> -Offensive odor <br>
                                        -Not expressive [ moderately expensive ]<br>
                                        -Multiple coats are needed to an active good finish <br>
                                        -Needs 3-5 days to walk on other application
                                    </p>
                                    <li>2- Water-based Polyurethane:</li>
                                    <p>Less odor<br>
                                        Very expensive <br>
                                        Either to repair<br>
                                        Walk on other 24 hours <br>
                                        The finish stays consistent over time<br>
                                        Healthy and environment friendly
                                    </p>
                                </ol>
                                <p>When you get site-finished floors you get seamless too, however, with weather
                                    savings, graying from high temp, humidity, to low & vice versa, this option fade
                                    away, as wood is a living product, it expands and contracts to lead to visible
                                    joints</p>
                                <h2>2.Pre-finished:</h2>
                                <p>In the last 25 years, prefinished floors started to grow, as hardwood floors'
                                    manufacturing become more technical in this case, the floor finishing is part of the
                                    manufacturer's job, & the product shipped to your home finished and ready to be
                                    installed...

                                </p>
                                <ul>
                                    <li>The surface is more durable and anti-scratch due to aluminum oxide and diamond
                                        finish
                                    </li>
                                    <li>Installation is faster & easier dusting. <br> You can walk in and put furniture
                                        immediately.</li>
                                </ul>
                                <h4>Durability :</h4>
                                <p>When the floor manufacturer finished the floor, they use special finished lines,
                                    which create a perfect environment to apply powerful chemical scaler such as
                                    sumerian & tilenum oxides embedded in a uv-cured urethane coat. <br> The perfect result
                                    is harder than anything applied on-site, the finish lasts longer & carries a better
                                    warranty for the homeowner <br>
                                    <b>Easier installation:</b>
                                    Requires no sanding, no staining, no sealing no top coat as all are pre-done in our
                                    factory you just need your floors to be installed then you can walk on immediately! <br>
                                    <b>easier maintenance:</b>
                                    Due to durable finish, you will not need to refinish your floor for a long time,
                                    however, you can easily replace damaged pieces, or refinish with sanding & coating
                                    as if you have installed site finish floors.
                                </p>
                                <h4>Pre-finished floors have beveled edges, not square ones, not like sile-finish which
                                    can have either square edge or beveled ones</h4>
                                <img class="mb-2 " src="{{url('public')}}/images/articles/finishing/8.1.png" alt="1">
                                <img class="mb-2 " src="{{url('public')}}/images/articles/finishing/8.2.png" alt="1">

                                <h4>Uv-curing Finish: </h4>
                                <p>It is the process in which the coat changes from liquid state to solid state under
                                    ultraviolet rays instantly in a sealed<br><br>
                                    <b>Finishing live, no no dust will stick to planks, so it results with smooth
                                        surface unlike site finish which it is very hard to prevent very fine dust from
                                        sticking to floors daring the long curing time and gran environment</b><br><br>
                                    Sub. Floors preparation: <br>
                                    For site- finish, irregularity of subfloor is not a big problem as sending process
                                    is enough to regulate the surface<br><br>
                                    In the care of prefinished floors, you need to ensure a perfectly flat subfloor
                                    scene
                                    <br>
                                    You haven't the option of site-sandy
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="resources">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="engineered-floors">
                                <h2>Engineered Hardwood Flooring</h2>
                                <p>The word (engineered) before hardwoods is to indicate that the floor planks are made
                                    of multilayer <br><br>
                                    <img class="mb-2 w-50 " src="{{url('public')}}/images/blog/suitable-hardwood/11.png" alt="1"> <br>
                                    <b>A. Base Layer</b><br>
                                    <b>B. Top Layer</b><br>
                                    See Fig(1) <br>
                                </p>
                                <ul>
                                    <li><b>(a) the base layer :</b> <br>
                                <img class="mb-2 w-50 " src="{{url('public')}}/images/blog/suitable-hardwood/10.png" alt="1">
                                        <p>The base layer is consisting of about 7-9 layers of plywood each layer is
                                            banked with the previous one make-grained [ the grains each layer is 90°
                                            related to the previous one] see figure (2) this method gives very high
                                            dimensional stability and makes the planks also to be installed over any
                                            loved subfloor.</p>
                                    </li>
                                    <li><b>(b) the top layer</b>
                                        <p>The top layer is the expression wood type, it is bonded to the base layer
                                            under high pressure (about 5 kg/cm) and 70°c temperature, this layer is also
                                            to be stranded coated several times [up to more than 6 times ] according to
                                            its thickener 4,6, or 9 mm.</p>
                                    </li>
                                </ul>
                                <p>Now we can say engineered wood flooring has more dimensional stability than
                                    deformation in share when exposed to high/low temperature or humidity. <br> Be aware of
                                    the (integrated) bottom layer. </p>
                                <h4>Time To Talk About The Finish?</h4>
                                <p>You can ask for a refinished engineered flooring in which coating is manufactured in
                                    the factory, not by the installer on site
                                    <br><br>
                                    This operation is done using very high coating technology [uv] technology, as they
                                    protect are coated with polymers which change from liquid slate to violet rays were
                                    the leaders & make it anti-scratch, more durable, and smoother as the whole
                                    operation is done inside a(uv) coating exposed to there is no dust sticky to the
                                    surface and decrease smoother.
                                    <br><br>
                                    At least (2) sealing rates, and one layer of (anti-scratch) topcoat are applied to
                                    engineered planks, in addition to staining layer (if needed) which is applied on
                                    wood before applying the bottom and top layers, so it is guaranteed that under bad
                                    wage, the color not also to be removed fig.3
                                </p>
                                <h4>Comparison Hardwood Solid & Engineered </h4>
                                <img class="mb-2 w-50 " src="{{url('public')}}/images/categories/wood-flooring/engineered-floors/8.png" alt="1">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Wear layer the layer above the tongue and groove,</td>
                                            <td>4,6,9 as per reavert can be renewed several times ace yo wear layer
                                                thickness</td>
                                            <td>From [6-9] mm upon request can be renewed several times over to wear
                                                layer thickness</td>
                                        </tr>
                                        <tr>
                                            <td>Durability</td>
                                            <td>Excellent</td>
                                            <td>Very good</td>
                                        </tr>
                                        <tr>
                                            <td>Maximum width of plank </td>
                                            <td>Up to (30)cm</td>
                                            <td>Up to (15)cm</td>
                                        </tr>
                                        <tr>
                                            <td>Pre Finish</td>
                                            <td>Present can be installed pre finish width all installation teah</td>
                                            <td>Absent(can't be installed pre finished expect in very rare conditions )
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Installation technique</td>
                                            <td>Floating glue down nailed</td>
                                            <td>Glue down nailed </td>
                                        </tr>
                                        <tr>
                                            <td>Time to install 100 ㎡</td>
                                            <td>8-12 hours only two technical wring hand tools</td>
                                            <td>80-100 hours by means of at least Four tech . <br> wring hand tools & special
                                                machines</td>
                                        </tr>
                                        <tr>
                                            <td>Maintaining </td>
                                            <td>Easy to menta and replace pieces cleaning & Fast</td>
                                            <td>Moderate to hard meanlaining , wring adhesives and chemicals which needs
                                                sile to be empty</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="faqs">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="indoor-faqs">
                                <h2>Frequently Asked Questions For Indoor Flooring</h2>
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-1">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                    What are the benefits of Wood flooring?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse-1" class="collapse " aria-labelledby="heading-FAQ-1" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>They offer an elegant and timeless look that never goes out of style.
                                                    <br>
                                                    They also enable a look of spaciousness and lend a warm and
                                                    authentic feel wherever they’re installed. <br>
                                                    Wood flooring offers a variety of appearances; from grain patterns
                                                    to colors, stains and designs. <br>
                                                    The floors are easy to clean as they do not accumulate a lot of
                                                    dirt, dust, and debris. <br>
                                                    Wood floors have long-term durability and can last for generations.
                                                    <br>
                                                    They are a great long-term investment and can increase the value of
                                                    your property.
                                                    <br>
                                                    Properly installed wood floors increase and improve acoustics in the
                                                    room; suitable for music rooms and concert halls. <br>
                                                    A healthy floor choice for allergy sufferers.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-2">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                                    Are Wood floors good for homes with pets?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse-2" class="collapse " aria-labelledby="heading-FAQ-2" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Wood floors are relatively easy to clean and maintain and can live in
                                                    harmony with pets. <br> However, they are vulnerable to scratches — hence
                                                    choosing a harder species of wood makes it possible to enjoy your
                                                    gorgeous floor without stressing about your pets. <br>
                                                    A rustic or distressed finish is particularly a good option since it
                                                    easily hides signs of everyday wear and tear. <br> Alternatively, you may
                                                    want to select wood flooring with a lighter color and lower gloss
                                                    level to help hide additional marks that may occur. <br>
                                                    Also trimming your pet's nails regularly will help.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-3">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3">
                                                    Can I expect my wood floor to have colour variations?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse-3" class="collapse " aria-labelledby="heading-FAQ-3" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Wood is a natural material, each plank features unique details and
                                                    therefore, you should expect there will be natural color variations.
                                                    <br>
                                                    Most people love these slight variations for added character and
                                                    charm that they offer. <br> The higher grade of wood flooring tends to
                                                    feature a more uniform color and minimal character marks whilst a
                                                    lower grade of flooring contains distinct variations in color.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-44">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4">
                                                    I have engineered wood flooring, can they be refinished?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse-4" class="collapse " aria-labelledby="heading-FAQ-44" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Engineered woods have a variable top layer thickness compared to
                                                    solid wood. <br> Engineered floors can be refinished — and the and
                                                    thickness of the top layer is the major factor contributing to this. <br>
                                                    Here in the wood court, we manufacture a 9mm thick top layer that
                                                    can be sanded and refinished as like as solid wood.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-4">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-5" aria-expanded="true" aria-controls="collapse-5">
                                                    Can wood flooring be installed over ceramic tiles?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-5" class="collapse " aria-labelledby="heading-FAQ-4" data-parent="#accordionExample">
                                                <p>Yes, it’s possible. <br> If you want to install your floor over ceramic
                                                    tiles, a glued-down methodology or floating is the available methods
                                                    choosing the suitable method is depending on the type of wood floors
                                                    you want to install, either engineered wood or solid wood, also
                                                    depends on the finish type, prefinished or site finish, dimension of
                                                    needed blanks may be a factor, you can contact the wood court and
                                                    take professional advice.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-5">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-6" aria-expanded="true" aria-controls="collapse-6">
                                                    Is it safe to use hardwood flooring in a kitchen?
                                                </button>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="collapse-6" class="collapse " aria-labelledby="heading-FAQ-5" data-parent="#accordionExample">
                                            <p>Wood is a natural product, high temperature and moisture level in the
                                                kitchen may cause it to contract and expand. <br> In this case, engineered
                                                wood is your best option to avoid cupping and gapping. <br>
                                                Occasionally a kitchen may experience spills and stains, but if cleaned
                                                up promptly this will have little effect on your hardwood floors. <br> It is
                                                equally important to stick to a maintenance routine and never allow
                                                water to stand upon the surface for any amount of time.</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-6">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-7" aria-expanded="true" aria-controls="collapse-7">
                                                    How do I stop my wood flooring from gapping?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-7" class="collapse " aria-labelledby="heading-FAQ-6" data-parent="#accordionExample">
                                                <p>Gapping is fairly normal during the winter season due to changes in
                                                    humidity of the room which causes wood to dry out and shrink. <br> To
                                                    combat the issue, use a humidifier during the winter months to keep
                                                    your home within the required temperature — as long as the humidity
                                                    level is between 35-50%. <br>
                                                    Depending on your wood selection, certain species tend to contract
                                                    and expand more than others. <br>
                                                    Using an engineered wood floor will reduce the appearance of gapping
                                                    as it is more dimensionally stable than solid wood</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-7">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-8" aria-expanded="true" aria-controls="collapse-8">
                                                    Can I put wood flooring over an existing floor?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-8" class="collapse " aria-labelledby="heading-FAQ-7" data-parent="#accordionExample">
                                                <p>In some instances, wood can be glued down over existing floors such
                                                    as laminate, vinyl, wood floors, and even some types of tile. <br>
                                                    The existing floor has to be relatively smooth, free of major
                                                    imperfections, and fully adhered to the sub-floor.<br>
                                                    The installer must follow the manufacturer's recommendation.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-8">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-9" aria-expanded="true" aria-controls="collapse-9">
                                                    Is a solid wood flooring better than an engineered wood floor?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-9" class="collapse " aria-labelledby="heading-FAQ-8" data-parent="#accordionExample">
                                                <p>No, The thicker and better quality engineered woods will last for
                                                    years and years and can be refinished once or twice.<br>
                                                    Also, the technology and factory-applied, uv-cured urethane finish
                                                    with melamine that is used today by the wood court make a tough &
                                                    durable finish and is available on both engineered and solid wood
                                                    floors.<br>
                                                    Engineered and solid wood floors. <br> Engineered wood floors are also
                                                    much more dimensionally stable than solid hardwood flooring so they
                                                    can be used in many situations where solid wood is not
                                                    recommended.<br>
                                                    <a href="#engineered-floors">Click Here To Learn More About The
                                                        Difference Between Engineered And Solid Wood Floors.</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-9">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-10" aria-expanded="true" aria-controls="collapse-10">
                                                    Can I use a paste wax on my hardwood flooring?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-10" class="collapse " aria-labelledby="heading-FAQ-9" data-parent="#accordionExample">
                                                <p>Today's wood floors do not require a paste wax to the finish and
                                                    paste waxes should not be used. <br> Most hardwood floors today have some
                                                    type of urethane finish and will cloud up and become sticky if a
                                                    paste wax is applied to the finish
                                                </p>
                                                <p>Click here to learn about floor care</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-10">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-11" aria-expanded="true" aria-controls="collapse-11">
                                                    What is the difference between prefinished and unfinished flooring?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-11" class="collapse " aria-labelledby="heading-FAQ-10" data-parent="#accordionExample">
                                                <p>The prefinished hardwood floor is sealed with multiple coats of
                                                    finish at the
                                                    factory.</p>
                                                <p>The finish coats typically contain aluminum oxide, the second hardest
                                                    substance next
                                                    to diamond, to provide a hard-wearing protective finish.</p>
                                                <p>Unfinished flooring must be finished on site after installation takes
                                                    place.
                                                </p>
                                                <p> Aluminum oxide cannot be used in the finish on-site because the
                                                    longer drying
                                                    time
                                                    causing the aluminum oxide particles to sink to the bottom of the
                                                    finish.
                                                </p>
                                                <p>Site-finished floors usually are better at protecting against above
                                                    floor
                                                    moisture.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-11">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-12" aria-expanded="true" aria-controls="collapse-12">
                                                    Can a hardwood floor be floated?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-12" class="collapse " aria-labelledby="heading-FAQ-11" data-parent="#accordionExample">
                                                <p>Engineered hardwood floors can be floated, but not solid hardwood
                                                    floors, due
                                                    to high
                                                    expanding and contracting coefficient of solid wood floors, and bad
                                                    dimensional
                                                    stability</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-12">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-13" aria-expanded="true" aria-controls="collapse-13">
                                                    How does moisture affect my hardwood flooring?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-13" class="collapse " aria-labelledby="heading-FAQ-12" data-parent="#accordionExample">
                                                <p>Moisture can cause many different problems for a hardwood floor, such
                                                    as
                                                    cracking,
                                                    cupping, and crowning</p>
                                                <p>. Over time, excessive moisture will destroy a wood floor, so it is
                                                    suggested
                                                    not to
                                                    use water to clean the hardwood floors and to mop up spills
                                                    immediately.</p>
                                                <p>click here to learn how to take care of your wooden floors</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-13">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-14" aria-expanded="true" aria-controls="collapse-14">
                                                    What are some potential moisture problems I should look out for?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-14" class="collapse " aria-labelledby="heading-FAQ-13" data-parent="#accordionExample">
                                                There is water caught between the wood flooring and the subfloor if
                                                crowing or
                                                cupping
                                                occurs. <br>
                                                Crowning is when the centerboards are higher than the outer boards.
                                                <br>
                                                Cupping is when the outer boards are higher than the centerboards, also
                                                if any
                                                moisture
                                                marks found in any of your walls, sudden black stains on wood floor
                                                surface
                                                started to
                                                appear in some areas, if you saw any of these, its time to call an
                                                expert</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-14">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-15" aria-expanded="true" aria-controls="collapse-15">
                                                    When should hardwood floors be installed?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-15" class="collapse " aria-labelledby="heading-FAQ-14" data-parent="#accordionExample">
                                                <p>well, it depends, if you will install prefinished wood floors, then
                                                    the
                                                    perfect
                                                    time for installing is the high end when every single technician is
                                                    out of
                                                    your
                                                    home
                                                    expect the painter, you may need a painter to fill gaps between the
                                                    skirting and
                                                    the wall (if founded)
                                                    but if you purchased site finish floors, you have to install them a
                                                    bit
                                                    earlier, but
                                                    do not finish immediately after installation, minimum of 7-12 days
                                                    are
                                                    needed
                                                    before site
                                                    finishing
                                                    to let the wood floors react with site conditions, wood moisture
                                                    and
                                                    temperature
                                                    reach an equilibrium state, also in case of glued down installation
                                                    technique,
                                                    it
                                                    needs time to ensure the glue has dried and cured.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-15">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-16" aria-expanded="true" aria-controls="collapse-16">
                                                    What can be used under furniture to prevent it from scratching the
                                                    floor?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-16" class="collapse " aria-labelledby="heading-FAQ-15" data-parent="#accordionExample">
                                                <p>Use plastic, foam, or felt discs under all the furniture legs..</p>
                                                <p>These can be purchased at many retail stores, and are designed not
                                                    only to reduce or prevent scratching but also to reduce or prevent
                                                    movement of the furniture altogether.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-16">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-17" aria-expanded="true" aria-controls="collapse-17">
                                                    When to Choose Laminate Flooring
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-17" class="collapse " aria-labelledby="heading-FAQ-16" data-parent="#accordionExample">
                                                <p>Laminate flooring is an excellent choice when the look and feel of
                                                    real wood are desired, but the cost is a major concern.</p>
                                                <p>Part of the overall cost savings derived from installing laminate is
                                                    in labor.</p>
                                                <p>Almost anyone can install a laminate floor and get professional
                                                    results.</p>
                                                <p>Laminate flooring is an excellent choice for high traffic areas and
                                                    where damage from pets is a concern.</p>
                                                <p>It is also an excellent choice for many commercial applications where
                                                    scratch damage is a major concern.</p>
                                                <p>Versatility is another factor to consider when choosing laminate.</p>
                                                <p>If you aren’t trying to get the look of wood, laminate offers stone,
                                                    metal, and ceramic patterns as well..</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-17">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-18" aria-expanded="true" aria-controls="collapse-18">
                                                    When to Choose Engineered Hardwood Flooring?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-18" class="collapse " aria-labelledby="heading-FAQ-17" data-parent="#accordionExample">
                                                <p>When you need to have real wood, there is no substitute.</p>
                                                <p>Engineered hardwood gives you the beauty of solid wood and the
                                                    stability of
                                                    cross-grained construction</p>
                                                <p> Discerning clients will demand real hardwood when shopping for a new
                                                    home
                                                    and if
                                                    resale value is a concern, hardwood flooring will give you the
                                                    highest
                                                    return on
                                                    investment.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-18">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-19" aria-expanded="true" aria-controls="collapse-19">
                                                    What is teak wood better for than other woods in outdoors?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-19" class="collapse " aria-labelledby="heading-FAQ-18" data-parent="#accordionExample">
                                                <p>While there are many fine, durable, beautiful kinds of wood, none
                                                    hold a candle to teak..</p>
                                                <p>Teak has a very high natural oil content which makes it almost
                                                    decay-resistant, which is something that no other wood can boast.
                                                </p>
                                                <p>Because of the high oil content, teak is essentially waterproof and
                                                    does not crack or warp due to damp climates.</p>
                                                <p>Teak is resistant to termites and other wood pests, which makes it
                                                    ideal for projects that are usually vulnerable to termite
                                                    infestation</p>
                                                <p>Teak also gets to brag that it doesn’t crack or turn colors when
                                                    exposed to metals, which makes it great for building long-lasting
                                                    furniture.</p>
                                                <p>Teak wood has been used to build boat decks — rather, battleships —
                                                    for centuries because of its water resistance and strength.</p>
                                                <p>Today, teak is used anywhere that any other wood is, and is popular
                                                    for creating bath, spa, pergolas, and pool furniture because it
                                                    allows the natural look of wood without the weathered appearance or
                                                    swelling that other woods take on when exposed to humid
                                                    environments. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kitchens-faqs">
                                <h2 class="my-4" id="FAQs-kitchens">Frequently Asked Questions for kitchens</h2>
                                <div class="accordion" id="faq2">
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-19">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-20" aria-expanded="true" aria-controls="collapse-20">
                                                    What are my countertop options?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-20" class="collapse " aria-labelledby="heading-FAQ-19" data-parent="#faq2">
                                                <p>YYou have a lot of different traditional and modern countertop
                                                    options: Granite Marble Quartz Wood/butcher block Stainless steel
                                                    countertops work well in modern spaces, but this doesn’t mean other
                                                    materials won’t look good in contemporary style kitchens!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-20">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-21" aria-expanded="true" aria-controls="collapse-21">
                                                    What is a chef’s kitchen?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-21" class="collapse " aria-labelledby="heading-FAQ-20" data-parent="#faq2">
                                                <p>A chef’s kitchen is designed for those who often prepare large meals
                                                    and need a kitchen design that supports heavy-duty cooking tasks. <br>
                                                    Essentially, a chef’s kitchen should be efficient and storage-savvy
                                                    and have easy-to-clean surfaces.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-21">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-22" aria-expanded="true" aria-controls="collapse-22">
                                                    What is the work triangle and why is it important?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-22" class="collapse " aria-labelledby="heading-FAQ-21" data-parent="#faq2">
                                                <p>The kitchen work triangle refers to the area from the refrigerator to
                                                    the cooking range to the sink—the three points are the three corners
                                                    of the triangle.
                                                </p>
                                                <p> There should be easy movement between the three places—and there
                                                    shouldn’t be too much distance between them. <br> The work triangle
                                                    creates a more efficient workspace.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-22">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-23" aria-expanded="true" aria-controls="collapse-23">
                                                    What is an appliance garage?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-23" class="collapse " aria-labelledby="heading-FAQ-22" data-parent="#faq2">
                                                <p>An appliance garage is a cabinet that is typically installed
                                                    underneath wall
                                                    cabinets
                                                    or tucked in the corner of a cabinet in a space that would otherwise
                                                    be
                                                    unused.</p>
                                                <p>They are used to keep smaller appliances and other items off the
                                                    countertops,
                                                    freeing
                                                    up more workspace.</p>
                                                <p>Appliance garages can have shutter or cabinetry door fronts and the
                                                    doors can
                                                    often
                                                    be rolled up like a real garage door.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-23">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-24" aria-expanded="true" aria-controls="collapse-24">
                                                    What is integrated kitchen design?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-24" class="collapse " aria-labelledby="heading-FAQ-23" data-parent="#faq2">
                                                <p>Integrated kitchen design hides appliances or blends them in
                                                    naturally with
                                                    the rest
                                                    of the room—it creates a clean, uncluttered look and can help
                                                    modernize a
                                                    space</p>
                                                <p>It has become more common in kitchens of all different styles and
                                                    sizes.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-24">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-25" aria-expanded="true" aria-controls="collapse-25">
                                                    What is the best place for a kitchen sink?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-25" class="collapse " aria-labelledby="heading-FAQ-24" data-parent="#faq2">
                                                <p>.The sink should be within easy reach of the refrigerator and
                                                    cooktop/range since you use them often. <br> It should also be near the
                                                    trash.</p>
                                                <p>.Keep in mind that there should be about 50-70 cm of counter space on
                                                    either side.
                                                </p>
                                                <p>.The layout of your kitchen will affect whether it should be placed
                                                    against a wall or on the island</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-25">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-26" aria-expanded="true" aria-controls="collapse-26">
                                                    What is the best kitchen floor material?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-26" class="collapse " aria-labelledby="heading-FAQ-25" data-parent="#faq2">
                                                <p><b>There are several tile materials that work well in kitchens,
                                                        including:</b><br>Stain-resistant porcelain <br>Vinyl
                                                    <br>Granite
                                                    <br>Wood
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-26">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-27" aria-expanded="true" aria-controls="collapse-27">
                                                    What questions should I ask my kitchen designer?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-27" class="collapse " aria-labelledby="heading-FAQ-26" data-parent="#faq2">
                                                <p> <b>When you’re trying to narrow down your choices between a few
                                                        different
                                                        kitchen
                                                        designers, ask each company questions like:</b> <br>
                                                    How long have you been in business?<br>Can you provide references I
                                                    can
                                                    contact?<br>What are past projects you’ve done? Can I see your
                                                    portfolio?
                                                    <br>
                                                    <b> Once you’ve chosen the company, ask questions such as:</b> <br>
                                                    Is an island a good option for my kitchen?<br>If I want to increase
                                                    the
                                                    resale value
                                                    of my home, what should I add to the kitchen? <br> What kind of
                                                    cabinetry
                                                    would work
                                                    best with the style of kitchen I want?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-27">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-28" aria-expanded="true" aria-controls="collapse-28">
                                                    What is a kitchen backsplash?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-28" class="collapse " aria-labelledby="heading-FAQ-27" data-parent="#faq2">
                                                A kitchen backsplash is a pattern of tiles installed on the wall,
                                                usually behind
                                                the
                                                cooking range and/or sink. <br>
                                                A backsplash provides protection from water damage and grease hazards,
                                                but it
                                                can also
                                                act as a great focal point.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-28">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-29" aria-expanded="true" aria-controls="collapse-29">
                                                    What are features I should be considering for my new kitchen design?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-29" class="collapse " aria-labelledby="heading-FAQ-28" data-parent="#faq2">
                                                <p>You can—and should—talk to your kitchen design team, but browsing
                                                    through
                                                    magazines
                                                    to get ideas can be helpful. <br>
                                                    <b>Features you may want to consider for your new kitchen are:</b>
                                                    <br>
                                                    Island <br>Lighting <br>New countertops<br>New cabinets (or
                                                    refacing)<br>Windows<br>Storage space <br>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-29">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-30" aria-expanded="true" aria-controls="collapse-30">
                                                    What are the different kitchen styles?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-30" class="collapse " aria-labelledby="heading-FAQ-29" data-parent="#faq2">
                                                <p>There are plenty of different kitchen styles to choose from. The main
                                                    ones
                                                    are
                                                    modern/contemporary, transitional, and traditional. <br>
                                                    <b>However, there are many variations of these, including:</b> <br>
                                                    Country <br>Rustic <br>Shaker <br>Arts and crafts<br>Tuscan<br>And
                                                    more <br>
                                                    Keep in mind that the wood court can customize your kitchen design
                                                    to fit your tastes. You don’t have to stick with one style.<br>
                                                    However you want your kitchen to look, we can make it happen.
                                                    contact us to learn more about the various kitchen styles in more
                                                    detail.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-30">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-31" aria-expanded="true" aria-controls="collapse-31">
                                                    How long will it take to deliver my kitchen?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-31" class="collapse " aria-labelledby="heading-FAQ-30" data-parent="#faq2">
                                                Depending on how involved the project is, also depends on your kitchen
                                                material,
                                                it
                                                could be four to six weeks in the case of laminate materials <br>
                                                natural wood kitchen may take up to 8 weeks It depends on the specifics.
                                                <br>
                                                You can have a more detailed schedule. <br> After your initial design
                                                consultation,the wood
                                                court team will be able to give you a better estimate.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-31">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-32" aria-expanded="true" aria-controls="collapse-32">
                                                    What is a melamine sheet?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-32" class="collapse " aria-labelledby="heading-FAQ-31" data-parent="#faq2">
                                                <p>Melamine is particleboard laminated with a thermally fused
                                                    paper/resin
                                                    coating to
                                                    provide a durable hard surface.<br> Great for making cabinet
                                                    carcasses
                                                    because it
                                                    wipes clean easily. Use it, as well, for shop fixtures or to make an
                                                    economical
                                                    router-table top.<br> Melamine is resistant to scratches, chemicals
                                                    , and
                                                    staining.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-32">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-33" aria-expanded="true" aria-controls="collapse-33">
                                                    Are melamine cabinets are good quality?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-33" class="collapse " aria-labelledby="heading-FAQ-32" data-parent="#faq2">
                                                <p>Melamine is a popular plastic material used in modern home cabinetry.
                                                    <br> It
                                                    is very
                                                    durable and has a wide variety of hue and pattern possibilities. ...
                                                    <br>
                                                    Engineered
                                                    products using Melamine are less expensive and as reliable as wood.
                                                    <br> HPL
                                                    or TFL
                                                    is Melamine fused with MDF or Particle Board, which are made from
                                                    wood chips.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-33">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-34" aria-expanded="true" aria-controls="collapse-34">
                                                    What wood is cheapest for cabinets?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-34" class="collapse " aria-labelledby="heading-FAQ-33" data-parent="#faq2">
                                                <p>Pine. Pine is another popular wood choice by homeowners who are
                                                    designing
                                                    their
                                                    kitchen cabinets. <br> This wood is very cost-effective and is
                                                    generally the
                                                    least
                                                    expensive of the five most commonly used kinds of wood</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-34">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-35" aria-expanded="true" aria-controls="collapse-35">
                                                    What are cheap kitchen cabinets made of?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-35" class="collapse " aria-labelledby="heading-FAQ-34" data-parent="#faq2">
                                                <p>In most cases, engineered wood products are used instead because
                                                    they're just
                                                    as
                                                    reliable and a lot cheaper. <br> The most widely used kinds of
                                                    cabinet
                                                    boxes are
                                                    constructed from medium-density fiberboard (MDF), plywood,
                                                    particleboard
                                                    with
                                                    melamine</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-35">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-36" aria-expanded="true" aria-controls="collapse-36">
                                                    Are laminate cabinets cheaper than wood?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-36" class="collapse " aria-labelledby="heading-FAQ-35" data-parent="#faq2">
                                                <p>Laminate cabinets are generally significantly less expensive than
                                                    wood
                                                    cabinets,
                                                    making them an attractive option for those looking for a
                                                    contemporary style
                                                    and
                                                    operating on a budget.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-36">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-37" aria-expanded="true" aria-controls="collapse-37">
                                                    Are solid wood cabinets worth the money?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-37" class="collapse " aria-labelledby="heading-FAQ-36" data-parent="#faq2">
                                                <p>Value – furniture made from solid wood tends to have more value than
                                                    those
                                                    made from
                                                    engineered wood, though in some cases MDF furniture can be quite
                                                    pricey.
                                                    <br> For
                                                    homeowners looking to get a better price for their home, adding
                                                    elements of
                                                    solid
                                                    wood can boost up the price tag
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-37">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-38" aria-expanded="true" aria-controls="collapse-38">
                                                    What color cabinets make a kitchen look bigger?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-38" class="collapse " aria-labelledby="heading-FAQ-37" data-parent="#faq2">
                                                <p>White is your best friend in a small kitchen. It reflects light,
                                                    enhancing
                                                    the sense
                                                    of space and making the walls recede. <br> When you include white on
                                                    cabinetry,
                                                    countertops, walls, and the ceiling, you create a seamless space
                                                    without
                                                    edges or
                                                    boundaries</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-38">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-39" aria-expanded="true" aria-controls="collapse-39">
                                                    Are wood cabinets better than laminate?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-39" class="collapse " aria-labelledby="heading-FAQ-38" data-parent="#faq2">
                                                <p>High-pressure laminates are a great choice for kitchen cabinets, but
                                                    can be
                                                    on the
                                                    pricy side. ... <br> Laminate cabinets are easier to clean than
                                                    wood, they
                                                    offer
                                                    more durability over time and tend to conceal fewer scratches than
                                                    solid
                                                    wood
                                                    cabinets and cabinet doors</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-39">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-40" aria-expanded="true" aria-controls="collapse-40">
                                                    what are the deffirent types of laminate you use in the wood court
                                                    for
                                                    kitchens?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-40" class="collapse " aria-labelledby="heading-FAQ-39" data-parent="#faq2">
                                                <p>Anti Fingerprint Laminate. Anti-fingerprint laminates are resistant
                                                    to
                                                    fingerprints,
                                                    dirt, heat and scratches. ... <br> Matte Finish Laminates. mutt plus
                                                    boards
                                                    Gloss
                                                    Finish Laminates.<br> Mirror gloss look like Textured
                                                    Laminate. either wood
                                                    or other
                                                    textures like textile and Marple Fire Retardant Laminates</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="outdoor-faqs">
                                <h2 class="my-4">Frequently Asked Questions For Outdoors</h2>
                                Coming Soon ...
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="blogs">
                        <div class="tab-content">

                             <h2>Check out our latest blog articles</h2>
                            <section class="events-list">
                                @forelse ($AllArticles as $Article)
                                <div class="single-event mb-4">
                                    <div class="content-container">
                                        <h2>{{$Article->title}}</h2>
                                        <span class="metabox d-block mb-3">
                                            <i class="fas fa-calendar"></i> {{$Article->created_at->format('d, M Y')}}
                                        </span>
                                        <p>{{$Article->description}}</p>
                                        <a class="icon-button" href="{{route('blog.single',$Article->slug)}}"><i class="fas fa-plus"></i> View More</a>
                                    </div>
                                </div>
                                @empty
                                <p>There is no articles yet, Stay tuned!</p>
                                @endforelse
                            </section>
                            {{-- <div class="tab-pane fade show active" id="latest-trends">
                                <div class="mb-3">
                                    {{-- <h2 class="mb-3">Latest Trends in Hardwood Flooring </h2> --}}
                                    {{-- <p>
                                        Hardwood Flooring really makes your home very welcoming & beautiful. When
                                        properly
                                        cared for, it will stand for a long time giving you warm & positive feelings.
                                        (For
                                        wood care click here) <br>
                                        It is also considered a long term investment, as hardwood floors add
                                        considerable
                                        resale value to your home. <br>
                                        As classic as wood floors are, they continue to evolve. Nowadays, there are
                                        plenty
                                        of designs that can match your taste; modern, Islamic, contemporary, country,
                                        vintage, even ultra-modern. <br>
                                        Here are some of the latest trends you may like some of them according to your
                                        style
                                        & personality. <br>
                                        Hardwood Flooring isn't always about protection.<br>
                                        Hand-scraped wood floors in the very beginning in the 1800s, Hardwood floors are
                                        getting finished by hand, no machines are used in this process. Crafters were
                                        scraping thin layers of wood at a time, smoothing out the top surface, leaving
                                        the
                                        scraping marks behind, proving to the next generation a piece of wood had been
                                        worked by hand, we all can see hand scrape marks in wood floors surface when we
                                        visit any of the old structures.<br>
                                        Now, however, we have machines and special tools that can sand & polish wood
                                        floors
                                        without leaving any marks, one of the common trends now is marking hardwood
                                        floors
                                        with these marks to look similar to the hand-scraped floors, giving the look and
                                        feel of the historical wood floors. <br>
                                    </p>
                                    <br>
                                    <h3>Distressed Wood floors :</h3>
                                    <img class="mb-2 icon-image-floors"src="/public/images/blog/1.png" alt="">
                                    <p>When you visit any old building like a museum, or an old company or commercial
                                        shop
                                        which was built in the 1900’s
                                        you can see the wood floors distressed & marked by decades of rough use, the
                                        gouges,
                                        nail holes stains, discolouring, and saw marks. <br>
                                        homeowners today are showing their administration for the over when skill rather
                                        than technology was the king.<br>
                                    </p>
                                    <br>
                                    <h3>Wood planks are getting wider</h3>
                                    <img class="mb-3 icon-image-floors" src="/public/images/blog/5.png" alt=""><br>
                                    Remember when you visit grandpa, the wood floors pieces are about 2 to 3 cm width,
                                    and 15-20 cm length, each piece is installed perpendicular to the other giving a
                                    herringbone pattern, later on, the piece gets wider and taller, and the smaller one
                                    becomes an old fashion, the width increased to about 6-8 cm and the length increased
                                    to about 35-40 cm,
                                    Now, one of the latest trends is wide planks or extra wide planks, people prefer to
                                    install planks of width about 12-15 cm and to 20cm and length reaches to 180 cm.
                                    <br>
                                    Also installing mixed-width planks together giving a very nice result in your home.
                                    <br>
                                    </p>
                                    <br>
                                    <h3>Exotic hardwoods</h3>
                                    <img class="mb-2 icon-image-floors" src="/public/images/blog/2.png" alt="">
                                    <p>Exotic hardwoods with unusual patterns are now available. A long time ago, oak
                                        was
                                        the king of wood floors all over the world, now it's time to discover the wealth
                                        that Africa has, mahogany, Iroko, Sapele, teak and many more wonderful types to
                                        discover. <br>
                                        <a href="/expert-hub">Check Expert Hub For More Articles</a>
                                    </p>
                                    <h3>Chevron wood Flooring Pattern.</h3>
                                    <img class="mb-2 icon-image-floors" src="/public/images/blog/3.png" alt="">
                                    <p>Instead of the traditional herringbone pattern, now the chevron pattern is much
                                        more
                                        modern & popular, matching a modern or contemporary taste, you will be satisfied
                                        with this pattern more than a traditional herringbone. <br></p>
                                    <br>
                                    <h3>White, Grey & Greyish Colors.</h3>
                                    <img class="mb-2 icon-image-floors" src="/public/images/blog/4.png" alt="">
                                    <p>The brown tones of wood floors we use where around starts to become an old
                                        fashion,
                                        the white, grey, and greyish colours now are the king, not only for your wood
                                        floors
                                        but also pergolas, kitchens & dressing rooms. <br>
                                        these colours matching modern ultramodern styles much better them brown &
                                        reddish-brown colours <br>
                                        Finally, we can say what is old on hardwood floors is new again. <br>
                                        Which trend do you love the most? <br>
                                        Contact us on our social media channels <br>
                                    </p>

                                        <a href="https://www.facebook.com/thewoodcourt/" target="_blank"> <h4 class="d-inline-block"> <i class="fab fa-facebook"></i></h4></a>
                                        <a href="https://www.instagram.com/thewoodcourt/" target="_blank"> <h4 class="d-inline-block"><i class="fab fa-instagram"></i></h4> </a>
                                        <a href="https://www.youtube.com/channel/UCBNdQKYldyJh3Nx5WyV0jtQ" target="_blank"> <h4 class="d-inline-block"><i class="fab fa-youtube"></i></h4> </a>
                                       <br>
                                    <p> Do you know any other trends? <br>
                                        Help us to cover all the popular trends by emailing us your opinion. <br></p>
                                    <a href="mailto:info@thewoodcourt.com">Send an email to info@thewoodcourt.com</a>
                                    <p>Do you want to see these trends live? <br>
                                        Visit our store or book an appointment to visit our factory. <br></p>
                                    <a href="/about-us" target="_blank"> About us</a>
                                    <h5>Which trend do you love the most ?</h5>
                                    <p>we’d love to know</p>
                                    <h5>Do you know any other trends ?</h5>
                                    <p> ..Help us to cover all popular trends by an email or prem contact us.</p>
                                    <h5>Do you want to see these trends live ?</h5>
                                    <p> ..visit our store or book an appointment to visit our factory.</p>
                                    <hr>
                                </div>
                            </div>


                            <div class="tab-pane fade " id="choose-suitable">
                                <div class="mb-3">
                                    <h2 class="mb-3">Choosing The Right Hardwood Floors For Your Home</h2>
                                    <h3>Do you love the feel of natural wood on floors? <br> If yes, here's how to
                                        choose the right hardwood floor for your home. </h3>
                                    <p>This information comes from working closely with customers in and around Egypt
                                        and the Middle East, Connecticut, and answering their questions about what's
                                        available and what's best for them. Although the choices can get overwhelming,
                                        your first consideration when selecting a new hardwood floor should be the style
                                        and colour which determines how your room will look and how it will make you
                                        feel.</p>
                                    <h4>Here are several points you have to decide for each:</h4>
                                    <h5>The whole design</h5>
                                    <p>What you really need to feel out from your floor, and what the style matching
                                        your home and your personality, there are a wide variety of designs at the wood
                                        court showroom to choose from, however, we can do a special one for you, or
                                        implement your custom design</p>
                                    <h6>Here are examples of some designs you may like: <br>
                                    </h6>
                                    <ul class="owl-carousel owl-theme three-items-carousel list-unstyled">
                                        <li class="item">
                                            <img class=" icon-image-floors" src="/public/images/blog/suitable-hardwood/1.png" alt="">
                                        </li>
                                        <li class="item">
                                            <img class=" icon-image-floors" src="/public/images/blog/suitable-hardwood/2.png" alt="">
                                        </li>
                                        <li class="item">
                                            <img class=" icon-image-floors" src="/public/images/blog/suitable-hardwood/3.png" alt="">
                                        </li>
                                        <li class="item">
                                            <img class=" icon-image-floors" src="/public/images/blog/suitable-hardwood/4.png" alt="">
                                        </li>
                                        <li class="item">
                                            <img class=" icon-image-floors" src="/public/images/blog/suitable-hardwood/5.png" alt="">
                                        </li>
                                        <li class="item">
                                            <img class=" icon-image-floors" src="/public/images/blog/suitable-hardwood/6.png" alt="">
                                        </li>
                                    </ul>
                                    <h5>The wood plank or tile dimension</h5>
                                    <p>Today you have a vast array of choices from traditional 5cm width strips up to 20
                                        cm width plank floors. For years the 5cm width strip has been the popular choice
                                        for builders for new home construction. The reason being it is readily available
                                        and cost-effective <br>
                                        Also, you can choose from 30cm long up to 180 cm planks <br>
                                        You may love the random width, random length or both
                                    </p>
                                    <h4>Wood Hardness</h4>
                                    <p>This shouldn't come as a surprise, but hardwood comes in different levels of
                                        hardness. The hardest woods are <b>Teak, Pecan, Hard Maple </b> and <b>White
                                            Oak.</b> <br>
                                        Hardwoods include <b>White Ash, Beech, Red Oak, Yellow Birch, Green Ash </b> and
                                        <b> Black Walnut, Cherry, Mahogany</b> <br>
                                        The least hardwood or we can call the softwood are different types of
                                        <b>Pine.</b> <br>
                                        Depending on the level of traffic and activity in your home - including kids and
                                        pets - you may be more interested in how hard a floor you select.
                                    </p>
                                    <h4>Two Types Of Wood Floors To Choose From</h4>
                                    <p>Although we're discussing hardwood flooring, thanks to ongoing product
                                        development you'll find that hardwood comes in two categories: solid and
                                        engineered hardwood.
                                        Let's explore.
                                    </p>
                                    <h5>Solid Hardwood</h5>
                                    <img class=" icon-image-floors" src="/public/images/blog/suitable-hardwood/11.png" alt="">
                                    <p>Solid wood flooring is made from one continuous piece of wood and is available in
                                        strips, and planks. <br>
                                        Generally, a solid hardwood floor is 17mm up to 21mm thick plank. However, it
                                        can be manufactured in a variety of widths and thicknesses. <br>
                                        Solid hardwood floors are generally for nail-down installation or glue down,
                                        floating technique is not recommended at all for solid wood flooring. <br>
                                        The benefit of selecting solid hardwood floors is that you can customize them in
                                        terms of wood species, stain colour as well as finishes. From a finish
                                        perspective, you can opt for unfinished or prefinished:
                                    </p>
                                    <ul>
                                        <li>Unfinished flooring offers unlimited colour stain options.</li>
                                        <li>Prefinished wood flooring features a factory applied finish with more
                                            staining colours availability.</li>
                                    </ul>
                                    <p>Because solid wood is sensitive to moisture, you don't want to install it below
                                        ground level or directly over a concrete slab unless you have excellent
                                        isolating materials</p>
                                    <h6> <u> Pre-Finished vs. Site Finished Hardwood: Which is Better?</u> <br>
                                        <u>Solid vs. Engineered Hardwood: Which is Better?</u>
                                    </h6>
                                    <h4>Installation techniques</h4>
                                    <h5>Engineered Hardwood</h5>
                                    <img class=" icon-image-floors" src="/public/images/blog/suitable-hardwood/10.png" alt="">
                                    <p>Engineered wood flooring is made from layers of wood stacked and glued together
                                        under heat and pressure. Usually, there are three to seven layers (plies)
                                        stacked with grains running perpendicular to each other. The top finish layer
                                        can be cut from a variety of domestic or exotic hardwood species and is
                                        generally factory prefinished with polyurethane or an aluminium oxide finish for
                                        hardness. <br>
                                        Engineered floors range from 12mm to 20mm in thickness and from 6cm to 20cm in
                                        width. Installation can be glued, floated, nailed or stapled. <br>
                                        All woods expand and contract with heat and humidity. However, engineered wood
                                        is more dimensionally stable than solid hardwood because the layers keep the
                                        movement in balance. As a result, it is less inclined to swell and shrink and
                                        can be installed in areas where solid wood can't such as over concrete or in
                                        high moisture areas such as kitchens, powder rooms and utility rooms, also it is
                                        the first choice when an underfloor heating system exists.
                                    </p>
                                    <h6>Exotic Hardwood </h6>
                                    <img class=" icon-image-floors" src="/public/images/blog/2.png" alt="">
                                    <p>You may also hear the term 'exotic hardwood' used. This refers to hardwood
                                        species from around the world. Exotic hardwood species come from Australia,
                                        Africa, South American and the Far East. <br>
                                        Exotic hardwoods offer unique wood graining and colour variations. They are
                                        known for their hardness and unique patterns. Most exotic woods are available in
                                        engineered wood construction, although some are available in solid hardwood
                                        planks as well. Sapeli, ebony and Jatoba are examples of exotic hardwood.
                                    </p>
                                    <h4>Wood Stain and Finishing Techniques</h4>
                                    <p>Other factors that affect your hardwood floor look include stains and finishing
                                        techniques such as hand-scraping or brushing that adds a slight texture to the
                                        wood.</p>
                                    <h6>Hand-scraping or brushing </h6>
                                    <img class=" icon-image-floors" src="/public/images/blog/suitable-hardwood/7.png" alt="">
                                    <p>Hardwood that has either hand-scraping or brushing is an excellent choice for
                                        active families with children and pets. These types of floors are usually found
                                        in planks 7cm and wider with the most popular being 11cm to 13cm see the wood
                                        court hand-scrapped collection available in the most popular species such as
                                        oak, teak, maple, walnut, and cherry. <br>
                                        Below you see a hand-scraped or antiqued engineered wood floor by the wood court
                                    </p>
                                    <h6>Wood stains</h6>
                                    <img class=" icon-image-floors" src="/public/images/blog/suitable-hardwood/8.png" alt="">
                                    <p>As for stains, browns and greys have been more popular in recent years,
                                        especially the greys being a favourite in all modern homes we love now in Egypt.
                                        You'll also find dark stains (explore the wood court colour collection)
                                    </p>
                                    <h6>Natural oil vs. polyurethane finish</h6>
                                    <img class=" icon-image-floors" src="/public/images/blog/suitable-hardwood/9.png" alt="">
                                    <p>Many of our customers like European Oak floors which often have a natural oil
                                        finish instead of the traditional polyurethane finish. <br>
                                        While a polyurethane finish simply sits on top of your hardwood floor forming a
                                        film to protect the hardwood, a natural oil finish penetrates the wood and
                                        strengthens the wood fibres while enhancing the look of the floor since there is
                                        no film covering the wood. All wood floors will dent and scratch over time but
                                        with a natural oil finished floor there is no need for the mess and
                                        inconvenience of sanding and finishing as all that is needed is to reapply a new
                                        coat of oil in the affected areas.
                                    </p>
                                    <a href="/expert-hub">Check Expert Hub For More Articles</a>


                                </div>
                            </div>
                            <div class="tab-pane fade " id="teak-maintenance">
                                <h2>Teak Deck Maintenance & The Best Way To Clean Teak</h2>
                                <p>Many people are put off the idea of teak decks by many of the horror stories that
                                    circulate. In reality, there is no reason to be frightened off and if looked after
                                    and cared for correctly they can be cared for with minimal hassle and cost. <br>
                                    Teak decks are one of the solutions for marine and outdoor decking. They also have
                                    practical benefits too.
                                </p>
                                <h6>Such as:-</h6>
                                <ul>
                                    <li>Anti-slip – they are a great safety feature as the teak wood is naturally rough
                                        and therefore is anti-slip under pretty much all weather conditions
                                        <img class=" icon-image-floors" src="/public/images/blog/teak-maintenance/pict18.png" alt="">

                                    </li>
                                    <li>They also provide an excellent insulating effect on either the interior of the
                                        yacht or under your feet when walking outdoors.</li>
                                </ul>
                                <p>Correct teak deck maintenance is an important aspect of any outdoor care program and looked after correctly a teak deck will last for many years.</p>
                                <h5>How to clean teak wood</h5>
                                <img class=" icon-image-floors" src="/public/images/blog/teak-maintenance/1.png" alt="">
                                <p>Teak wood itself is made up of hard, and softwood elements and whilst teak is very resilient. <br> It is very easy to drag out the softwood elements leaving ridges of hardwood. <br>
                                    If cared for correctly a teak deck will wear naturally and should not require overhauling for between 10 – 15 years. After that, it will only need to be sanded to have an extra life (most teak decks could be sanded more than 5 times) <br>
                                    Our advice is to wash it regularly as you would with freshwater fresh using only a soft brush. <br>
                                    Once or twice a year it is recommended you clean teak decking with a special teak deck cleaner. <br>

                                    Follow the manufacturers’ directions and make sure you gently scrub across the direction of the grain. <br>
                                    We recommend using a nanofiber cleaning pad. <br>
                                    It is also worthwhile to inspect all your caulked seams as these can become worn over time – and you don’t want any moisture penetrating between the deck planks, so it is important to fix any worn or damaged caulking.
                                </p>
                                <h5>What NOT to do;</h5>
                                <p>Don’t use high-pressure cleaners, they will blast out the softwood elements of the teak leaving ridges and will force you into prematurely sanding your teak decks. <br>
                                    Don’t use hard brushes or household cleaning detergents as again these can damage the soft surface. <br>
                                    Always make sure that you use proper teak cleaning solutions on your decks, as this will ensure its longevity. <br>
                                    At the end of the day, less is best!
                                </p>
                                <h5>Teak Deck Treatments</h5>
                                <p>It is natural for teak to turn a silvery grey colour and for many, this is the traditional way to leave teak decks. <br> However, some people prefer to keep teak looking like new and freshly sanded colour. <br>
                                    There are several options for teak deck maintenance:- <br>
                                    Traditional Teak Oils:- We don’t like using too much oil on a deck. <br> You have to regularly apply it as it only lasts between 1 and 3 months and if it turns grey you have to reapply <br>
                                    The second option is to apply an outdoor polyurethane coat, it is very easy to use and can be applied with a brush and rags. <br> On freshly cleaned (dry) teak simply apply two coats. <br> Then depending on wear and tear you can expect to apply a further coat every 6 – 8 months but in this case, the deck will be a bit slippery and scratchable
                                </p>
                                <a href="/expert-hub">Check Expert Hub For More Articles</a>
                            </div>

                            <div class="tab-pane fade " id="hpl-boards">
                                <h2>What are High-Pressure Laminates (HPL)</h2>
                                <h3>High-Pressure Laminates (HPL) for Decorative Surfaces</h3>
                                <p>
                                    High-Pressure Laminate or HPL is the direct descendent of the original plastic laminate. It is considered to be one of the most durable decorative surface materials and is available with special performance properties including chemical, fire and wear resistance. Special grades of HPL can be post-formed around curved edges by application of heat and restraint. <br>
                                    HPL is produced by saturating multiple layers of kraft paper with phenolic resin. A layer of printed décor paper is placed on top of the kraft paper before pressing. <br>
                                    The resulting sandwich is fused together under heat and pressure (more than 1,000 PSI). Because phenolic and melamine resins are thermoset plastics <br>
                                    , the curing process transforms the resin into plastic by a cross-linking process that converts the paper sheets into a single, rigid laminated sheet.<br>
                                    Thermosetting creates strong, irreversible bonds that contribute to its durability.<br>
                                    High-pressure laminate is laminated to a composite panel utilizing a variety of adhesives. Particleboard or MDF are the preferred substrates because they provide a stable, durable, consistent and economical foundation. Due to their durability, high-pressure laminates are a common choice for <br>
                                    horizontal surfaces including flooring, countertops and desktops.<br>
                                    High-pressure laminate (HPL) countertops aren't just for kitchens; they can stand up to the rigorous demands of science labs and classrooms.<br>
                                    It also performs well in horizontal and vertical applications for high traffic settings such as hospitality, office furniture, healthcare, retail casework,
                                    commercial interiors and educational facilities.<br>
                                    There are many types or grades of high-pressure laminates (HPL) engineered for specific performance requirements:<br>
                                </p>
                                <h5>
                                    General Purpose</h5>
                                <p> Most widely used HPL and suitable for horizontal and vertical surface applications. Typical thickness range from 0.028” to 0.048” (0.71 to 1.22 mm).</p>
                                <h5>Postforming</h5>
                                <p> Can be formed around curved edges by the application of heat and restraint. Maximum thickness is approximately 0.038” (0.97 mm) and can normally
                                    be formed to radii as small as 3/8” (9.5 mm).</p>
                                <h5>Backer</h5>
                                <p> HPL produced without a decorative face. Available as standard (most common; slightly thinner than decorative HPL) or regrind (reclaimed HPL with
                                    decorative sheet sanded off).</p>
                                <h5>Special Products</h5>
                                <p>
                                    Special purpose high-pressure laminates include cabinet liners, high-wear, fire-rated, electrostatic dissipative and chemical resistant laminates. <br> <br>
                                    In addition to aesthetic attributes, the lamination of particleboard or MDF with HPL can improve the physical performance of the substrate. <br>
                                    For example, a shelf of ¾” industrial (M-2) particleboard that is 24” long will carry 45 lbs per square foot (PSF) of uniform loading with 0.133” deflection. <br>
                                    The same shelf can carry 85 lbs PSF before reaching the same deflection if overlaid with HPL.</p>
                            </div>
                        </div>
                    </div> --}}



                    @include('layout.scripts')
                    <script type="text/javascript">
                        $('.filter-items .main-category-filter').click(function() {
                            //Hide all open uls
                            $('.filter-items .main-category-filter').next('ul').slideUp('fast');
                            //SHow the current selected one
                            $(this).next('ul').slideDown();
                        });
                        $('.sub-category-filter, .filter-items .main-category-filter').click(function(e) {
                            var id = $('#content-section');
                            if (id.length === 0) {
                                return;
                            }
                            e.preventDefault();
                            var pos = (id.offset().top - 100);
                            $('body, html').animate({
                                scrollTop: pos
                            }, 1000);
                        });

                        //Recive Outer Hook and Toggle Tab Using it
                        var getParams = function (url) {
                            var params = {};
                            var parser = document.createElement('a');
                            parser.href = url;
                            var query = parser.search.substring(1);
                            var vars = query.split('&');
                            for (var i = 0; i < vars.length; i++) {
                                var pair = vars[i].split('=');
                                params[pair[0]] = decodeURIComponent(pair[1]);
                            }
                            return params;
                        };
                        var UrlParamaters = getParams(window.location.href);
                        if ('tab' in UrlParamaters){
                            //Show the requested tab and active the link in sidebar
                            //Hide Wood Care
                            $('#wood-care').removeClass('active');
                            //inactive wood care side links
                            $('.main-category-filter').removeClass('active');
                            $('.toturials-sublist').removeClass('toturials-sublist');
                            $('.sub-category-filter').removeClass('active');
                            //Show the requested tab and parent tab
                            $('#'+UrlParamaters.tab).parent().parent().tab('show');
                            $('#'+UrlParamaters.tab).tab('show');
                            //Active the correct side panel links
                            $('.sub-category-filter[href="#'+UrlParamaters.tab+'"]').addClass('active');
                            $('.sub-category-filter[href="#'+UrlParamaters.tab+'"]').parent().parent().parent().find('a.main-category-filter').addClass('active');
                            $('.sub-category-filter[href="#'+UrlParamaters.tab+'"]').parent().parent().addClass('toturials-sublist');
                            //Scroll to content
                            var id = $('#content-section');
                            var pos = (id.offset().top - 200);
                            $('body, html').animate({
                                scrollTop: pos
                            }, 1000);
                        }
            </script>
            @include('layout.footer')
</body>
</html>

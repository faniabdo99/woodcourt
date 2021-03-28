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
                                    <div
                                        class="col-sm-7 col-lg-12  d-flex justify-content-center flex-column align-items-center text-center">
                                        <h4>Tutorials</h4>
                                        <p>Get advanced knowledge on how to take care of your wooden possestions like
                                            floors and kitchens</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="row icons-row d-flex">
                                    <div class="col-sm-5 col-lg-12 d-flex justify-content-center">
                                        <i class="flaticon-faq"></i>
                                    </div>
                                    <div
                                        class="col-sm-7 col-lg-12  d-flex justify-content-center flex-column align-items-center text-center">
                                        <h4>Resources</h4>
                                        <p>Stay up-to-date about new wood care techniques and methedology</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="row icons-row d-flex">
                                    <div class="col-sm-5 col-lg-12 d-flex justify-content-center">
                                        <i class="flaticon-text"></i>
                                    </div>
                                    <div
                                        class="col-sm-7 col-lg-12  d-flex justify-content-center flex-column align-items-center text-center">
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
                                <li class="facebook-li"><a href="https://www.facebook.com/thewoodcourt/"
                                        target="_blank "><i class="fab fa-facebook"></i> <span>@thewoodcourt</span></a>
                                </li>
                                <li class="instagram-li"><a href="https://www.instagram.com/thewoodcourt/"
                                        target="_blank "><i class="fab fa-instagram"></i> <span>@thewoodcourt</span></a>
                                </li>
                                <li class="whatsapp-li"><a href="https://api.whatsapp.com/send?phone=201117571111"
                                        target="_blank "><i class="fab fa-whatsapp"></i> <span>0111 757 1111</span></a>
                                </li>
                                <li class="email-li"><a href="mailto:info@thewoodcourt.com" target="_blank "><i
                                            class="fas fa-envelope"></i> <span>info@thewoodcourt.com</span></a></li>
                                <li class="youtube-li"><a
                                        href="https://www.youtube.com/channel/UCBNdQKYldyJh3Nx5WyV0jtQ"
                                        target="_blank "><i class="fab fa-youtube"></i> <span>The Wood Court</span></a>
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
                            <a class="nav-item nav-link active main-category-filter" data-toggle="tab"
                                href="#wood-care">Wood Care</a>
                            <ul class="toturials-sublist nav nav-tabs ml-5">
                                <li><a class="nav-item nav-link sub-category-filter active" data-toggle="tab"
                                        href="#floor-care">Floor Care</a></li>
                                <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab"
                                        href="#kitchen-care">Kitchen Care</a></li>
                                <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab"
                                        href="#outdoor-care">Outdoor Care</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-item nav-link main-category-filter" data-toggle="tab"
                                href="#toturial">Tutorials</a>
                            <ul class="nav nav-tabs ml-5">
                                <li><a class="nav-item active nav-link sub-category-filter" data-toggle="tab"
                                        href="#installation-methodology">Installation Methodology</a></li>
                                <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab"
                                        href="#finishing-techniques">Finishing Techniques</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-item nav-link main-category-filter" data-toggle="tab"
                                href="#resources">Resources</a>
                            <ul class="nav nav-tabs ml-5">
                                <li><a class="nav-item nav-link sub-category-filter active" data-toggle="tab"
                                        href="#engineered-floors">Engineered Hardwood Flooring</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-item nav-link main-category-filter" id="FAQs-section" data-toggle="tab"
                                href="#faqs">FAQs</a>
                            <ul class="nav nav-tabs ml-5">
                                <li><a class="nav-item nav-link sub-category-filter active" data-toggle="tab"
                                        href="#indoor-faqs">Indoor Flooring FAQs</a></li>
                                <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab"
                                        href="#kitchens-faqs">Kitchens & Cabinets FAQs</a></li>
                                <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab"
                                        href="#outdoor-faqs">Outdoor Floors & Pergolas FAQs</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-item nav-link main-category-filter" data-toggle="tab"
                                href="#articles">Articles</a>
                            <ul class="nav nav-tabs ml-5">
                                <li><a class="nav-item nav-link sub-category-filter active" data-toggle="tab"
                                        href="#blog">Blog</a></li>
                                <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab"
                                        href="#latest-trends">Latest Trends in Hardwood Flooring</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="wood-care">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="floor-care">
                                <h2>How To Take Care Of Your Wood Floors?</h2>
                                <img class="w-100 h-50 my-3"
                                    src="{{url('public/images/categories/wood-flooring/engineered-floors/1.jpg')}}" alt="wood-care">
                                <p>In home and office interior designs, the value of wood cannot be denied its timeless
                                    visual appeal and natural beauty. If you take proper care of wood floorings,
                                    cabinets, installments, and claddings, you can expect them to survive for decades.
                                    Let's take a look at the top ways to take care of your wood floorings and cabinets.
                                </p>
                                <p class="mb-4">Wooden Floors Can Be The Highlight Of Any Home. The Natural Strength And
                                    Beauty Of Wood Has Been Used For Centuries And To This Day, Remains The Material Of
                                    Choice For Flooring.If you’ve stripped back an old Victorian floor, had new solid
                                    wood or engineered flooring installed, or even used reclaimed boards, looking after
                                    and maintaining them once they’ve been oiled or varnished is key. It’s a simple fact
                                    that wooden floor finishes that have been well maintained will look better and last
                                    much longer than those that have not. So, what is the best way to look after and
                                    maintain a wooden floor? Well you’ll be pleased to know that it’s not that difficult
                                    and doesn’t require a great deal of work. To help we’ve produced a lovely guide to
                                    help you keep your wooden floors looking amazing</p>
                                <ul class="ml-0">
                                    <li>Never ever use a wet mop to clean your wood floor either natural wood or HDF (High
                                        density fiber).</li>
                                    <li>Use damp mop to remove dust first , to make your floor dust free.</li>
                                    <li>Use Oil-Based Cleaners, DO NOT use furniture cleaners to clean. Your wood floors
                                        will be slippery.</li>
                                    <li>Do Not use alcohol, acids ,or chemicals to clean your wood floors. It can damage
                                        your wood flooring.</li>
                                    <li>Always wipe parallel to grams direction, as that will clean the grooves
                                        much better. Use a microfiber towel to clean your wood floors. It will remove
                                        stains, clean your floor & make it shiny.</li>
                                    <li>Remove spills immediately, long exposure to liquids will lead to damage.</li>
                                    <li>Use soft coasters under your furniture to prevent scratches.</li>
                                    <li>Regulary clip your pets’ nails to avoid deep scratches</li>
                                    <li>Don't Expose to Too Much Sunlight <br>
                                        A sun-kissed glow looks great for skin, but not on wood floors, inspect your wood
                                        floors once a month, and if there is any discolouration, it's time to apply a fresh
                                        top coat.
                                    </li>
                                    <li>Don't put any electronics directly on the wood floor ,the heat generated from these
                                        devices will affect your floors negatively in the long run.</li>
                                    <li>Don't Use Multipurpose Cleaner <br>
                                        Don't use the same cleaner for natural wood floors & HDF, each type has its cleaning
                                        liquid.
                                    </li>
                                    <li>Ventilate your home, good ventilation will make your wood floors healthy & live
                                        longer.</li>
                                    <li>Best atmosphere conditions to make your wood floors healthy is 30% - 50% relative
                                        humidity & 15- 25 ℃ temperature. Thankfully, these conditions are comfortable for us
                                        too.</li>
                                    <li>Use door mats to protect wood floors from street sand & mud.</li>
                                    <li>Always use felt protector pads on the underside of legs of tables and chairs,
                                        and never drag heavy objects across your wood floors.</li>
                                    <li>Every few decades, sound and refinish your wood floor. Typically, solid and
                                        engineered wood floors could be sanded and refinished several times up to 10
                                        times according to the wooden top width. Sanding and refinishing are typically
                                        needed every about 7-12 years according to age and care. After this process,
                                        your natural wood floors will return like new with the ability to change its
                                        color & finish.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="kitchen-care">
                                <h2>How to Take Care of Your Kitchen Counters and Cabinets?</h2>
                                <img class="w-100 h-50 my-3"
                                    src="{{url('public/images/categories/cabinets/kitchens/1.jpg')}}" alt="kitchens">
                                <ul>
                                    <li>Clean all food spills from wood surfaces immediately & thoroughly, most foods can
                                        damage wood finishes eventually.</li>
                                    <li>Prevent spilling of acidic food or juices as much as you can on wood surfaces, such
                                        as orange juice.</li>
                                    <li>Tea, coffee & other many drinks are great, but will leave a bad-look stain on wood
                                        surfaces if they’re not cleaned immediately.</li>
                                    <li>When cleaning a wood surface, use a microfiber towel, do not use dish sponge or
                                        washing as it may damage wood surfaces.</li>
                                    <li>Clean your kitchen cabinets and surface wring clean water & mild soap with a clean
                                        ,lint-free rag</li>
                                    <li>Use water sparingly and a towel to dry any excess , when water sits , it can
                                        penetrate the finish and raise the wood grains up leading to a rough uncleanable
                                        surface in future</li>
                                    <li>Wipe Parallel to the wood grains direction , remove dust with dry micor-fiber towel
                                        , it is your first step to clean your kitchen</li>
                                    <li>Always use polish cream monthly to shine your kitchen instead of waxing , wax makes
                                        a shiny look but attracts dust.</li>
                                    <li>Be cautious of overuse of surface cleaners & sprays as they may contain silicon,
                                        which will make layers & layers order wood surface & results with a pale look with
                                        time</li>
                                    <li>When it comes to wooden counter-top , it is very important to use a “Food grade
                                        mineral Oil”.</li>
                                    <li>Use a ventilating fan when cooking , it remove the majority of airborne smoke &
                                        grease which other wish may be absorbed by wood leading to bad smell & yellowish
                                        stains</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="outdoor-care">
                                <h2>How to Take Care of Wooden Pergolas & Outdoor Flooring?</h2>
                                <img class="w-100 h-50 my-3"
                                    src="{{url('public/images/categories/outdoor/pergolas/1.jpg')}}" alt="outdoor">
                                <p class="mt-3">Wood is a beautiful option for your garden Flooring, under pergola ,
                                    and outdoor area of your restaurant or cafe , also the wooden pergola itself
                                    gives your home privacy & make you have a great time outdoors, the wood grains
                                    and variety of colors when beside the wonderful green color of plants . <br>
                                    teak wood especially its very durable and has high resistance to outdoor
                                    conditions , (sun light , Heat & rain) even when installed directly as a pool
                                    decking , needs low maintenance , you just need to give it some attention to
                                    keep it as beautiful as day one.</p>
                                <ul>
                                    <li>Pick up large debris like paper and fallen tree leaves at once.</li>
                                    <li>Use a vacuum machine to remove dust from the in between grooves, it is much easier
                                        than whisking.</li>
                                    <li>Use a mixture of ammonia & warm water with ratio 1:4 to help you remove all the
                                        stuck dirt & debris , by wiping the wood with the mixture using a sponge mop.</li>
                                    <li>Do Wipe Parallel to the Grain</li>
                                    <li>let your wood either floors or pergola to dry completely , at leave 3-5 hours
                                        temperature +15 ℃</li>
                                    <li>Use a floor cleaner specially made for your hardwood, It will always be on oil-based
                                        cleaner, not water or aqua-based.</li>
                                    <li>Teak wood has natural oil that keeps mold down, this natural oil also works as an
                                        insect repellent & prevents wood from cracking when exposed to high temperature.
                                    </li>
                                    <li>When wood is exposed to direct sunlight, this oil gradually by time will
                                        evaporate, leaving a bad look with silver-grey discolouration. According to your
                                        country's weather, and daily time of direct daily sunlight hours that your wood
                                        is exposed to, you will need to reapply oil to teak wood several times a year
                                        (between 4-8 times). Also several climatic conditions & high UV index, may cause
                                        the teak wood surface to change color silver, then it is also time to reapply
                                        teak oil.</li>
                                    <li>When applying teak oil, follow the wood grains using a clean rag, and rub in well.
                                    </li>
                                    <li>Do not apply a heavy layer of oil, 70-100 grams is more than enough for each square
                                        meter.</li>
                                    <li>After one hour use a clean new rag to remove excess oil and let it completely dry
                                        before placing your furniture back to avoid spots.</li>
                                    <li>Always remove any spills immediately, to avoid spots. If you have spots, just apply
                                        a small amount of ammonia and it will disappear instantly.</li>
                                    <li>You don't have to use any insect repellant for teak wood, as teak wood grains are
                                        rich with silica , which acts as a natural repellent for insects & bugs. Also,
                                        teak wood grains contain natural rubber oil which is resistant to rotting when
                                        exposed to extreme conditions.</li>
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
                                <h3>Installing the wood floors :</h3>
                                <h4>1- Nailed down installing technique</h4>
                                <p>The most common & traditional way to install wood floors wood tiles or planks are to
                                    be installed by nailing down on wooden subfloors, the nails are inclined vertical,
                                    paring from the woodside directly fixing it to the subfloors a drum-noise is heard
                                    while walking on due to space under the wood floor. <br> </p>
                                <h4>2- Gluing down installing technique</h4>
                                <img class="mb-2 w-50" src="{{url('public')}}/images/articles/5.png" alt="1">
                                <p>Bonding the wood floors with the subfloors using gluing is a very good and cheap way
                                    to install your wood floors or D3 water base glue using Polyurethane (oil-based) D4
                                    glue is the best way to ensure lifelong bond, as the glue can dissipates shear
                                    stream restaurant because at the different expand coefficient between the wood & the
                                    concrete tiles or ceramic tiles,
                                    no drum-noise is heard out all.
                                    you will get a lifetime guarantee against debonding when purchasing from The Wood
                                    Court.
                                </p>
                                <h4>3- Floating installation technique. </h4>
                                <img class="mb-2 w-50" src="{{url('public')}}/images/articles/6.png" alt="1">

                                <p>Installing your floors using this technique make it very easy to maintain as you can
                                    replace any damaged piece early, the wood floors are floated over the subfloor,
                                    royale the LEM sheet with 2mm thickness is placed between wood & subfloor to isolate
                                    moisture and decrease sounds when walking on. this technique also makes it very easy
                                    to uninstall your wood floor and use it again in another place, leaving the subfloor
                                    without any damage. </p>
                                <h3>Installation:</h3>
                                <h5>(A) sub-floors:</h5>
                                <h4>1- Wooden subfloor:</h4>
                                <p>In this type of subfloor, wooden beams made of red pine wood with 5cm square section
                                    or 5cm by 4cm rectangular section are installed with 25 to 35 pieces of concrete to
                                    leave the floor, fixed with metal fixtures and concrete to be bent with the floor.
                                    <br>

                                    Then 1.6cm by 10cm section of some wood type owe installed with about 2-10 cm spaces
                                    in opposite direction to be a top subfloor laid in which wood floor
                                    fixation takes place. <br>

                                    This is the traditional subflooring used more than 100 years ago, always used up
                                    till now in nail down installation technique. <br>
                                </p>


                                <h4>2- Wood on tiles sub Floor:</h4>
                                <p>In this type, we use concrete tiles, mosaic tiles, low quality ceramic tiles instead
                                    of wood for the installation process. Tiles are installed regularly and flush on
                                    concrete, are fixed on it. This method also is used for nailed down installation
                                    technique </p>


                                <h4>3- Concrete-based tiles subfloor: </h4>
                                <p>Used always for glue down & floating installation technique, mosaic or ceramic tiles
                                    are installed directly using concrete, for leaving them wood floors are glued down
                                    on it floated on it using polythene sheets to prevent humidity, temperature, sound.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="finishing-techniques">
                                <p>When it comes to choosing hardwood floors, & the question is not only solid or
                                    engineered wood Flooring, but also , site- Finish or pre finished Flools? . which
                                    one is better? and why ? well, each type has its benefits</p>
                                <h2>1.Site Finish:</h2>
                                <p>When you go for site- Finish wood floors, then you are purchasing wood floors which
                                    will be shipped to your home unfinished , to be Sanded, possibly stained and then
                                    sealed and finished with a top protective layer in your home. This process takes & a
                                    bit a long time, produces dust during sanding , bad smell during coating. in this
                                    type
                                </p>
                                <ul>
                                    <li>you can choose & either water, oil based polyurethane or natural oil finish</li>
                                    <li>sheen level matte, semi gloss, high gloss</li>
                                    <li> Custom installation patterns, borders, inlayes, medallions faturer </li>
                                    <li>Refinishing is available.</li>
                                    <li>In addition to square edges, or bucked edges</li>
                                </ul>
                                <p>Traditionally, you choose sile-finishing when time isn't critical new construction
                                    and
                                    nobody lives in site (to avoid dust) it Takes long time . (4-6) days to send and
                                    clean
                                    wood floors , ensure the site is clean , environment is stable within site ,
                                    applying
                                    stain and top coating ( about 3-4 ) coats , and wait each application to dry <br>
                                    <br>
                                    Remember , no one can go through the site during the whole process , the smell of
                                    finishing is not pleased at all . <br> <br>Available finishes with site finishing
                                </p>
                                <ol>
                                    <li> Oil based polyurethane:</li>
                                    <p> -Offensive odor <br>
                                        -Not expressive [ moderately expensive ] <br>
                                        -Multiple coats are needed to active good finish <br>
                                        -Needs 3-5 days to walk on other application
                                    </p>
                                    <li>2- water based polyurethane:</li>
                                    <p> Less odor <br>
                                        Very expensive <br>
                                        Either to repair<br>
                                        Walk on other 24 hours <br>
                                        Finish stays consistent over time<br>
                                        Healthy and environment friendly
                                    </p>
                                </ol>
                                <p>When you get site-finished floors you get seamless to however , with weather savings,
                                    graying from high temp , humidity, to low & vice versa , this option fade away , as
                                    wood is a living product , it expands and contracts leading to visible joints</p>
                                <h2>2. Pre-Finished:</h2>
                                <p>In the last 25 years, prefinished Floors started to grow, as harduratth Floors
                                    manufacturing become more technical in this Case, the Floor finishing is part of the
                                    manufacturer Job, & the product shipped to your home finished 2 ready to be
                                    installed ..
                                </p>
                                <ul>
                                    <li>surface is more durable and anti-scratch due to aluminium oxide and diamond
                                        finish</li>
                                    <li>installation is faster & easier dusten. You can walk in and put Furniture
                                        immediately.</li>
                                </ul>
                                <h4>Durability :</h4>
                                <p> when the floor manufacturer Finished the floor, it uses special Finished lines,
                                    which create Perfect environment to apply powerful chemical scalier such as
                                    alumerian & tilenum oxides embedded in a uv-cured urethane Coat the perfect the
                                    result is harder than anything applied in site the finish lasts bager & Carries a
                                    better warranty for the homeowner.
                                    <b>easier installation:</b>
                                    Requires no sanding, no slaening , no sealing no top Coat as all are pre-done in our
                                    factory You Just need your Floors to be installed then you can walk on immediately!
                                    <b>easier maintenance:</b>
                                    due to durable Finish, you will not need to refinish your Floor before a long time,
                                    however, you can easily replace damaged pieces, or refinish with sanding & Coating
                                    as if you have installed site finish Floors.
                                </p>
                                <h4>pre-Finished Floors have beveled edges not square ones not like sile-Finish which
                                    can have either square edge or beveled ones</h4>
                                <h2>3. UV-Curing Finish</h2>
                                <p>it is the process in which the coat a changes from liquid state to solid state under
                                    ultraviolet rays instantly in a sealed <br><br>
                                    <b> Finishing Live, no no dust will stick to planks, so it results with smooth
                                        Surface unlike site finish which it is very hard to prevent very fine dust from
                                        sticking to floors daring the long curing time and gran environment</b><br><br>
                                    Sub. Floors preparation: <br>
                                    For site- Finish , irregularity of subfloor is not a big problem as sending process
                                    is
                                    enough to regulate the surface <br><br>
                                    In care of prefinished floors , you need to ensure a perfectly Flat Subfloor scene
                                    <br>
                                    you haven't the option of site-sandy
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="resources">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="engineered-floors">
                                <h2>Engineered Hardwood Flooring</h2>
                                <p>the word (engineered) before hardwoods is to indicate that the floor planks are made
                                    of multilayer <br><br>
                                    <b>A. Base Layer</b><br>
                                    <b>B. Top Layer</b><br>
                                    see Fig(1) <br>
                                </p>
                                <ul>
                                    <li><b>(A) the base layer :</b>
                                        <p>the base layer is consisting of about 7-9 layers of plywood each layer is
                                            banked with the previous one amki-grained [ the grains each layer is 90°
                                            related to the previous on ] see Figure (2) This method gives very high
                                            dimensional stability and makes the planks also to be installed over any
                                            loved subfloor.</p>
                                    </li>
                                    <li><b>(B) the Top Layer</b>
                                        <p>the top layer is the expression wood type , it is bonded to the base layer
                                            under high pressure (about 5 KG/cm) and 70°c temperature , this layer is
                                            also to be standedre coated several times [up to more than 6 times ]
                                            according to its thickener 4 ,6, or 9 mm .</p>
                                    </li>
                                </ul>
                                <p>Now we can say engineered wood flooring has more dimensional stability , then
                                    deformation in share when exposed to high / low temperature or humidity . be aware
                                    of the (antigraned) bottom layer. </p>
                                <h4>Time to talk about finish ?</h4>
                                <p>you can ask for a refinished engineered flooring in which coating are by the
                                    menutaclured in factory not by the installer in site
                                    <br><br>
                                    this operation is done using very high coating technology [uv] technology , as the
                                    protect are coated with polymers which changes from liquid slate to violet rays were
                                    the leaders & make it anti-scratch , more durable , and smoother as whrobe operation
                                    is done inside a(uv) coating live not exposed to there are no dust sticky to the
                                    sarlace and decreame smoother.
                                    <br><br>
                                    at least (2) sealing eates , and one layer of (anti-scratch) top coat are applied to
                                    engineered planks , in addition to staining layer (if needed) which is applied on
                                    wood before applying the bottom and top layers , so it is guaranteed that under bad
                                    wrage , the color not also to be removed Fig.3</p>
                                <h4>Comparison hardwood solid & engineered </h4>
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <td>wear layer the layer above the tongue and groove,</td>
                                            <td>4,6,9 as per reavert can be renewed several times ace yo wear layer
                                                thickness</td>
                                            <td>from [6-9] mm upon request can be renewed several times over to wear
                                                layer thickness</td>
                                        </tr>
                                        <tr>
                                            <td>durability</td>
                                            <td>excellent</td>
                                            <td>very good</td>
                                        </tr>
                                        <tr>
                                            <td>maximum width of plank </td>
                                            <td>up to (30)cm</td>
                                            <td>up to (15)cm</td>
                                        </tr>
                                        <tr>
                                            <td>Pre Finish</td>
                                            <td>Present can be installed pre finish width all installation teah</td>
                                            <td>absent(can't be installed pre finished expect in very rare conditions )
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>installation technique</td>
                                            <td>Floating glue down nailed</td>
                                            <td>glue down nailed </td>
                                        </tr>
                                        <tr>
                                            <td>time to install 100 ㎡</td>
                                            <td>8-12 hours only two technical wring hand tools</td>
                                            <td>80-100 hours by means of at least Four tech . wring hand tools & special
                                                machines</td>
                                        </tr>
                                        <tr>
                                            <td>maintaining </td>
                                            <td>easy to menta and replace pieces cleaning & Fast</td>
                                            <td>moderate to hard meanlaining , wring adhesives and chemicals which needs
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
                                                <button class="btn btn-link " type="button" data-toggle="collapse"
                                                    data-target="#collapse-1" aria-expanded="true"
                                                    aria-controls="collapse-1">
                                                    What are the benefits of Wood flooring?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse-1" class="collapse " aria-labelledby="heading-FAQ-1"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>*They offer an elegant and timeless look that never goes out of
                                                    style. <br>
                                                    *They also enable a look of spaciousness and lend a warm and
                                                    authentic feel
                                                    wherever
                                                    they’re installed. <br>
                                                    *Wood flooring offers a variety of appearances; from grain patterns
                                                    to
                                                    colours,
                                                    stains and designs. <br>
                                                    *The floors are easy to clean as they do not accumulate a lot of
                                                    dirt, dust
                                                    and
                                                    debris. <br>
                                                    *Wood floors have long-term durability and can last for generations.
                                                    <br>
                                                    *They are a great long-term investment and can increase the value of
                                                    your
                                                    property.
                                                    <br>
                                                    *Properly installed wood floors increase and improve acoustics in
                                                    the room;
                                                    suitable
                                                    for music rooms and concert halls. <br>
                                                    *A healthy floor choice for allergy sufferers.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-2">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-2" aria-expanded="true"
                                                    aria-controls="collapse-2">
                                                    Are Wood floors good for homes with pets?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse-2" class="collapse " aria-labelledby="heading-FAQ-2"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>*Wood floors are relatively easy to clean and maintain and can live
                                                    in
                                                    harmony with
                                                    pets. However, they are vulnerable to scratches — hence choosing a
                                                    harder
                                                    species of
                                                    wood makes it possible to enjoy your gorgeous floor without
                                                    stressing about
                                                    your
                                                    pets. <br>
                                                    *A rustic or distressed finish is particularly a good option since
                                                    it easily
                                                    hides
                                                    signs of everyday wear and tear. Alternatively, you may want to
                                                    select wood
                                                    flooring
                                                    with a lighter colour and lower gloss level to help hide additional
                                                    marks
                                                    that may
                                                    occur. <br>
                                                    *also trimming your pets nails regulary will help.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-3">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-3" aria-expanded="true"
                                                    aria-controls="collapse-3">
                                                    Can I expect my wood floor to have colour variations?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse-3" class="collapse " aria-labelledby="heading-FAQ-3"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>*Wood is a natural material, each plank features unique details and
                                                    therefore, you
                                                    should expect there will be natural colour variations. <br>
                                                    * Most people love these slight variations for added character and
                                                    charm
                                                    that they
                                                    offer. The higher grade of wood flooring tends to feature a more
                                                    uniform
                                                    colour and
                                                    minimal character marks whilst a lower grade of flooring contains
                                                    distinct
                                                    variations in colour .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-44">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-4" aria-expanded="true"
                                                    aria-controls="collapse-4">
                                                    I have engineered wood flooring, can they be refinished?
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse-4" class="collapse " aria-labelledby="heading-FAQ-44"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>*Engineered woods have a variable top layer thickness compared to
                                                    solid wood.
                                                    engineered floors can be refinished — and the and thickness of the
                                                    top layer
                                                    is the
                                                    major factor contributing to this. here in the wood court we
                                                    manufacture 9mm
                                                    thick
                                                    top layer which can be sanded and refinished as like as solid wood.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-4">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-5" aria-expanded="true"
                                                    aria-controls="collapse-5">
                                                    Can wood flooring be installed over ceramic tiles?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-5" class="collapse " aria-labelledby="heading-FAQ-4"
                                                data-parent="#accordionExample">
                                                <p>Yes, it’s possible. If you want to install your floor over ceramic
                                                    tiles, a
                                                    glued-down methodology or floating is the available methods choosing
                                                    the
                                                    suitable
                                                    method is depending on the type of wood floors you want to install,
                                                    either
                                                    engineered wood or solid wood, also depends on the finish type,
                                                    prefinished
                                                    or site
                                                    finish, dimension of needed blanks may be a factor, you can contact
                                                    the wood
                                                    court
                                                    and take a profissional advice.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-5">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-6" aria-expanded="true"
                                                    aria-controls="collapse-6">
                                                    Is it safe to use hardwood flooring in a kitchen?
                                                </button>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="collapse-6" class="collapse " aria-labelledby="heading-FAQ-5"
                                            data-parent="#accordionExample">
                                            <p>Wood is a natural product, high temperature and moisture level in the
                                                kitchen
                                                may
                                                cause it to contract and expand. In this case, engineered wood is your
                                                best
                                                option
                                                to avoid cupping and gapping. <br>
                                                Occasionally a kitchen may experience spills and stains, but if cleaned
                                                up
                                                promptly
                                                this will have little effect on your hardwood floors. It is equally
                                                important to
                                                stick to a maintenance routine and never allow water to stand upon the
                                                surface for
                                                any amount of time.</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-6">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-7" aria-expanded="true"
                                                    aria-controls="collapse-7">
                                                    How do I stop my wood flooring from gapping?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-7" class="collapse " aria-labelledby="heading-FAQ-6"
                                                data-parent="#accordionExample">
                                                <p>Gapping is fairly normal during the winter season due to change in
                                                    humidity
                                                    of the
                                                    room which causes wood to dry out and shrink. To combat the issue,
                                                    use a
                                                    humidifier
                                                    during winter months to keep your home within the required
                                                    temperature — as
                                                    long as
                                                    humidity level is in between 35-50%. <br>
                                                    Depending on your wood selection, certain species tend to contract
                                                    and
                                                    expand more
                                                    than others.<br>
                                                    Using an engineered wood floor will reduce the appearance of gapping
                                                    as it
                                                    is more
                                                    dimensionally stable than solid wood</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-7">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-8" aria-expanded="true"
                                                    aria-controls="collapse-8">
                                                    Can I put wood flooring over an existing floor?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-8" class="collapse " aria-labelledby="heading-FAQ-7"
                                                data-parent="#accordionExample">
                                                <p>In some instance, wood can be glued down over existing floors such
                                                    as:
                                                    laminate,
                                                    vinyl, wood floors, and even some types of tile. <br>
                                                    The existing floor has to be relatively smooth, free of major
                                                    imperfections
                                                    and
                                                    fully adhered to the sub-floor. <br>
                                                    It is important that the installer follows the manufacturers
                                                    recommended.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-8">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-9" aria-expanded="true"
                                                    aria-controls="collapse-9">
                                                    Is a solid wood flooring better than an engineered wood floor?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-9" class="collapse " aria-labelledby="heading-FAQ-8"
                                                data-parent="#accordionExample">
                                                <p>No. The thicker and better quality engineered woods will last for
                                                    years and
                                                    years and
                                                    can be refinished once or twice. <br>
                                                    Also, the technology and factory applied, UV-cured urethane finishes
                                                    with
                                                    melamine
                                                    that are used today by the wood court makes a really tough & durable
                                                    finish
                                                    and is
                                                    available on both engineered and solid wood floors. <br>
                                                    engineered and solid wood floors. Engineered wood floors are also
                                                    much more
                                                    dimensionally stable than solid hardwood flooring so they can be
                                                    used in
                                                    many
                                                    situations where solid wood is not recommended. <br>
                                                    click here to learn more about the deffirence between engineered and
                                                    solid
                                                    wood
                                                    floors.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-9">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-10" aria-expanded="true"
                                                    aria-controls="collapse-10">
                                                    Can I use a paste wax on my hardwood flooring?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-10" class="collapse " aria-labelledby="heading-FAQ-9"
                                                data-parent="#accordionExample">
                                                <p>Today's wood floors do not require a paste wax to the finish and
                                                    paste waxes
                                                    should
                                                    not be used. Most hardwood floors today have some type of urethane
                                                    finish
                                                    and will
                                                    cloud up and become sticky if a paste wax is applied to the finish
                                                </p>
                                                <p>click here to learn about floor care</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-10">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-11" aria-expanded="true"
                                                    aria-controls="collapse-11">
                                                    What is the difference between prefinished and unfinished flooring?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-11" class="collapse " aria-labelledby="heading-FAQ-10"
                                                data-parent="#accordionExample">
                                                <p>The prefinished hardwood floor is sealed with multiple coats of
                                                    finish at the
                                                    factory.</p>
                                                <p>The finish coats typically contain aluminum oxide, the second hardest
                                                    substance next
                                                    to diamond, to provide a hard-wearing protective finish.</p>
                                                <p>Unfinished flooring must be finished on site after installation takes
                                                    place.
                                                </p>
                                                <p> Aluminum oxide cannot beused in the finish on site because the
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
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-12" aria-expanded="true"
                                                    aria-controls="collapse-12">
                                                    Can a hardwood floor be floated?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-12" class="collapse " aria-labelledby="heading-FAQ-11"
                                                data-parent="#accordionExample">
                                                <p>Engineered hardwood floors can be floated, but not solid hardwood
                                                    floors, due
                                                    to high
                                                    expanding and contracting coofient of solid wood floors, and bad
                                                    dimensional
                                                    stability</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-12">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-13" aria-expanded="true"
                                                    aria-controls="collapse-13">
                                                    How does moisture affect my hardwood flooring?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-13" class="collapse " aria-labelledby="heading-FAQ-12"
                                                data-parent="#accordionExample">
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
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-14" aria-expanded="true"
                                                    aria-controls="collapse-14">
                                                    What are some potential moisture problems I should look out for?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-14" class="collapse " aria-labelledby="heading-FAQ-13"
                                                data-parent="#accordionExample">
                                                There is water caught between the wood flooring and the subfloor if
                                                crowing or
                                                cupping
                                                occurs. <br>
                                                Crowning is when the center boards are higher than the outer boards.
                                                <br>
                                                Cupping is when the outer boards are higher than the center boards, also
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
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-15" aria-expanded="true"
                                                    aria-controls="collapse-15">
                                                    When should hardwood floors be installed?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-15" class="collapse " aria-labelledby="heading-FAQ-14"
                                                data-parent="#accordionExample">
                                                <p>well, it depends, if you will install a prefinished wood floors, then
                                                    the
                                                    perfect
                                                    time for installing is the high end, when every single technition is
                                                    out of
                                                    your
                                                    home
                                                    expect the painter, you may need a painter to fill gaps between the
                                                    skirtting and
                                                    the wall (if founded)
                                                    but if you purchased site finish floors, you have to install it a
                                                    bit
                                                    earlier, but
                                                    do not finish immediatly after installation, minimum 7-12 days are
                                                    needed
                                                    befor site
                                                    finishing
                                                    to let the wood floors reacts withe site conditions, wood moisture
                                                    and
                                                    temprature
                                                    reach equilibrium state, also in case of glued down installation
                                                    technique,
                                                    it
                                                    needs time to insure the glue has dried and cured.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-15">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-16" aria-expanded="true"
                                                    aria-controls="collapse-16">
                                                    What can be used under furniture to prevent it from scratching the
                                                    floor?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-16" class="collapse " aria-labelledby="heading-FAQ-15"
                                                data-parent="#accordionExample">
                                                <p>Use plastic, foam or felt discs under all the furniture legs.</p>
                                                <p>These can be purchased at many retail stores, and are designed not
                                                    only to
                                                    reduce or
                                                    prevent scratching, but also to reduce or prevent movement of the
                                                    furniture
                                                    all
                                                    together.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-16">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-17" aria-expanded="true"
                                                    aria-controls="collapse-17">
                                                    When to Choose Laminate Flooring
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-17" class="collapse " aria-labelledby="heading-FAQ-16"
                                                data-parent="#accordionExample">
                                                <p>Laminate flooring is an excellent choice when the look and feel of
                                                    real wood is desired, but cost is a major concern. </p>
                                                <p>Part of the overall cost savings derived from installing laminate is
                                                    in
                                                    labor.</p>
                                                <p>Almost anyone can install a laminate floor and get professional
                                                    results.</p>
                                                <p>Laminate flooring is an excellent choice for high traffic areas and
                                                    where
                                                    damage from
                                                    pets is a concern.</p>
                                                <p>It is also an excellent choice for many commercialapplications where
                                                    scratch
                                                    damage
                                                    is a major concern.</p>
                                                <p>Versatility is another factor to consider when choosing laminate.</p>
                                                <p>If you aren’t trying to get the look of wood, laminate offers stone,
                                                    metal
                                                    and
                                                    ceramic patterns as well.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-17">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-18" aria-expanded="true"
                                                    aria-controls="collapse-18">
                                                    When to Choose Engineered Hardwood Flooring?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-18" class="collapse " aria-labelledby="heading-FAQ-17"
                                                data-parent="#accordionExample">
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
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-19" aria-expanded="true"
                                                    aria-controls="collapse-19">
                                                    What is teak wood better for than other woods in outdoors?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-19" class="collapse " aria-labelledby="heading-FAQ-18"
                                                data-parent="#accordionExample">
                                                <p>While there are many fine, durable, beautiful woods, none hold a
                                                    candle to
                                                    teak.</p>
                                                <p>Teak has a very high natural oil content which makes it almost
                                                    decay-resistant, which
                                                    is something that no other wood can boast.</p>
                                                <p>Because of the high oil content, teak is essentially waterproof and
                                                    does not
                                                    crack or
                                                    warp due to damp climates.</p>
                                                <p>Teak is resistant to termites and other wood pests, which makes it
                                                    ideal for
                                                    projects
                                                    that are usually vulnerable to termite infestation</p>
                                                <p>Teak also gets to brag that it doesn’t crack or turn colors when
                                                    exposed to
                                                    metals,
                                                    which makes it great for building long-lasting furniture.</p>
                                                <p>Teak wood has been used to build boat decks — rather, battleships —
                                                    for
                                                    centuries
                                                    because of its water resistance and strength.</p>
                                                <p>Today, teak is used anywhere that any other wood is, and is popular
                                                    for
                                                    creating
                                                    bath, spa, pergolas and pool furniture because it allows the natural
                                                    look of
                                                    wood
                                                    without the weathered appearance or swelling that other woods take
                                                    on when
                                                    exposed
                                                    to humid environments. </p>
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
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-20" aria-expanded="true"
                                                    aria-controls="collapse-20">
                                                    What are my countertop options?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-20" class="collapse " aria-labelledby="heading-FAQ-19"
                                                data-parent="#faq2">
                                                <p>You have a lot of different traditional and modern countertop
                                                    options:
                                                    Granite
                                                    Marble
                                                    Quartz
                                                    Wood/butcher block
                                                    Stainless steel
                                                    stainless steel countertops work well in modern spaces, but this
                                                    doesn’t
                                                    mean other
                                                    materials won’t look good in contemporary style kitchens!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-20">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-21" aria-expanded="true"
                                                    aria-controls="collapse-21">
                                                    What is a chef’s kitchen?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-21" class="collapse " aria-labelledby="heading-FAQ-20"
                                                data-parent="#faq2">
                                                <p>A chef’s kitchen is designed for those who often prepare large meals
                                                    and need
                                                    a
                                                    kitchen design that supports heavy-duty cooking tasks. Essentially,a
                                                    chef’s
                                                    kitchen
                                                    should be efficient and storage-savvy and have easy-to-clean
                                                    surfaces.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-21">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-22" aria-expanded="true"
                                                    aria-controls="collapse-22">
                                                    What is the work triangle and why is it important?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-22" class="collapse " aria-labelledby="heading-FAQ-21"
                                                data-parent="#faq2">
                                                <p>The kitchen work triangle refers to the area from the refrigerator to
                                                    the
                                                    cooking
                                                    range to the sink—the three points are the three corners of the
                                                    triangle.
                                                </p>
                                                <p> There should be easy movement between the three places—and there
                                                    shouldn’t
                                                    be too
                                                    much distance between them. Basically, the work triangle creates a
                                                    more
                                                    efficient
                                                    work space.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-22">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-23" aria-expanded="true"
                                                    aria-controls="collapse-23">
                                                    What is an appliance garage?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-23" class="collapse " aria-labelledby="heading-FAQ-22"
                                                data-parent="#faq2">
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
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-24" aria-expanded="true"
                                                    aria-controls="collapse-24">
                                                    What is integrated kitchen design?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-24" class="collapse " aria-labelledby="heading-FAQ-23"
                                                data-parent="#faq2">
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
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-25" aria-expanded="true"
                                                    aria-controls="collapse-25">
                                                    What is the best place for a kitchen sink?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-25" class="collapse " aria-labelledby="heading-FAQ-24"
                                                data-parent="#faq2">
                                                <p>The sink should be within easy reach of the refrigerator and
                                                    cooktop/range
                                                    since you
                                                    use them often. It should also be near the trash.</p>
                                                <p>. Keep in mind that there should be about 50-70 cm of counter space
                                                    on either
                                                    side.
                                                </p>
                                                <p>. The layout of your kitchen will affect whether it should be placed
                                                    against
                                                    a wall
                                                    or in the island</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-25">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-26" aria-expanded="true"
                                                    aria-controls="collapse-26">
                                                    What is the best kitchen floor material?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-26" class="collapse " aria-labelledby="heading-FAQ-25"
                                                data-parent="#faq2">
                                                <p><b>There are several tile materials that work well in kitchens,
                                                        including:</b><br>Stain-resistant porcelain <br>Vinyl
                                                    <br>granite
                                                    <br>Wood</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-26">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-27" aria-expanded="true"
                                                    aria-controls="collapse-27">
                                                    What questions should I ask my kitchen designer?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-27" class="collapse " aria-labelledby="heading-FAQ-26"
                                                data-parent="#faq2">
                                                <p> <b>When you’re trying to narrow down your choices between a few
                                                        different
                                                        kitchen
                                                        designers, ask each company questions like:</b> <br>
                                                    How long have you been in business?<br>Can you provide references I
                                                    can
                                                    contact?<br>What are past projects you’ve done? Can I see your
                                                    portfolio?
                                                    <br> <br>
                                                    <b> Once you’ve chosen the company, ask questions such as:</b> <br>
                                                    Is an island a good option for my kitchen?<br>If I want to increase
                                                    the
                                                    resale value
                                                    of my home, what should I add to the kitchen? <br> What kind of
                                                    cabinetry
                                                    would work
                                                    best with the style of kitchen I want?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-27">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-28" aria-expanded="true"
                                                    aria-controls="collapse-28">
                                                    What is a kitchen backsplash?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-28" class="collapse " aria-labelledby="heading-FAQ-27"
                                                data-parent="#faq2">
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
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-29" aria-expanded="true"
                                                    aria-controls="collapse-29">
                                                    What are features I should be considering for my new kitchen design?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-29" class="collapse " aria-labelledby="heading-FAQ-28"
                                                data-parent="#faq2">
                                                <p>You can—and should—talk to your kitchen design team, but browsing
                                                    through
                                                    magazines
                                                    to get ideas can be helpful. <br>
                                                    <b>Features you may want to consider for your new kitchen are:</b>
                                                    <br>
                                                    Island <br>Lighting <br>New countertops<br>New cabinets (or
                                                    refacing)<br>Windows<br>Storage space <br></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-29">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-30" aria-expanded="true"
                                                    aria-controls="collapse-30">
                                                    What are the different kitchen styles?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-30" class="collapse " aria-labelledby="heading-FAQ-29"
                                                data-parent="#faq2">
                                                <p>There are plenty of different kitchen styles to choose from. The main
                                                    ones
                                                    are
                                                    modern/contemporary, transitional, and traditional. <br>
                                                    <b>However, there are many variations of these, including:</b> <br>
                                                    Country <br>Rustic <br>Shaker <br>Arts and crafts<br>Tuscan<br>And
                                                    more <br>
                                                    Keep in mind that the wood court can customize your kitchen design
                                                    to fit
                                                    your
                                                    personal tastes. You don’t have to stick with one style. <br>
                                                    However you want your kitchen to look, we can make it happen. cotact
                                                    us to
                                                    learn
                                                    more about the various kitchen styles in more detail.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-30">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-31" aria-expanded="true"
                                                    aria-controls="collapse-31">
                                                    How long will it take to deliver my kitchen?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-31" class="collapse " aria-labelledby="heading-FAQ-30"
                                                data-parent="#faq2">
                                                Depending on how involved the project is, also depends on your kitchen
                                                material,
                                                it
                                                could be four to six weeks in case of laminate materials <br>
                                                natural wood kitchen may take up to 8 weeks It depends on the specifics.
                                                <br>
                                                you can have a more detailed schedule. After your initial design
                                                consultation,the wood
                                                court team will be able to give you a better estimate.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-31">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-32" aria-expanded="true"
                                                    aria-controls="collapse-32">
                                                    What is a melamine sheet?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-32" class="collapse " aria-labelledby="heading-FAQ-31"
                                                data-parent="#faq2">
                                                <p>Melamine is particleboard laminated with a thermally fused
                                                    paper/resin
                                                    coating to
                                                    provide a durable hard surface.<br> Great for making cabinet
                                                    carcases
                                                    because it
                                                    wipes clean easily. Use it, as well, for shop fixtures or to make an
                                                    economical
                                                    router-table top.<br> Melamine is resistant to scratches, chemicals
                                                    and
                                                    staining.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-32">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-33" aria-expanded="true"
                                                    aria-controls="collapse-33">
                                                    Are melamine cabinets are good quality?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-33" class="collapse " aria-labelledby="heading-FAQ-32"
                                                data-parent="#faq2">
                                                <p>Melamine is a popular plastic material used in modern home cabinetry.
                                                    <br> It
                                                    is very
                                                    durable and has a wide variety of hue and pattern possibilities. ...
                                                    <br>
                                                    Engineered
                                                    products using Melamine are less expensive and as reliable as wood.
                                                    <br> HPL
                                                    or TFL
                                                    is Melamine fused with MDF or Particle Board,which are made from
                                                    wood chips.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-33">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-34" aria-expanded="true"
                                                    aria-controls="collapse-34">
                                                    What wood is cheapest for cabinets?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-34" class="collapse " aria-labelledby="heading-FAQ-33"
                                                data-parent="#faq2">
                                                <p>Pine. Pine is another popular wood choice by homeowners who are
                                                    designing
                                                    their
                                                    kitchen cabinets. <br> This wood is very cost effective and is
                                                    generally the
                                                    least
                                                    expensive of the five most commonly used woods</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-34">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-35" aria-expanded="true"
                                                    aria-controls="collapse-35">
                                                    What are cheap kitchen cabinets made of?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-35" class="collapse " aria-labelledby="heading-FAQ-34"
                                                data-parent="#faq2">
                                                <p>In most cases, engineered wood products are used instead because
                                                    they're just
                                                    as
                                                    reliable and a lot cheaper. <br> The most widely used kinds for
                                                    cabinet
                                                    boxes are
                                                    constructed from medium density fiberboard (MDF), plywood,
                                                    particleboard
                                                    with
                                                    melamine</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-35">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-36" aria-expanded="true"
                                                    aria-controls="collapse-36">
                                                    Are laminate cabinets cheaper than wood?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-36" class="collapse " aria-labelledby="heading-FAQ-35"
                                                data-parent="#faq2">
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
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-37" aria-expanded="true"
                                                    aria-controls="collapse-37">
                                                    Are solid wood cabinets worth the money?
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="card-body">
                                            <div id="collapse-37" class="collapse " aria-labelledby="heading-FAQ-36"
                                                data-parent="#faq2">
                                                <p>Value – furniture made from solid wood tends to have more value than
                                                    those
                                                    made from
                                                    engineered wood, though in some cases MDF furniture can be quite
                                                    pricey.
                                                    <br> For
                                                    homeowners looking to get a better price for their home, adding
                                                    elements of
                                                    solid
                                                    wood can boost up the price tag</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-FAQ-37">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-38" aria-expanded="true"
                                                    aria-controls="collapse-38">
                                                    What color cabinets make a kitchen look bigger?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-38" class="collapse " aria-labelledby="heading-FAQ-37"
                                                data-parent="#faq2">
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
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-39" aria-expanded="true"
                                                    aria-controls="collapse-39">
                                                    Are wood cabinets better than laminate?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-39" class="collapse " aria-labelledby="heading-FAQ-38"
                                                data-parent="#faq2">
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
                                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse-40" aria-expanded="true"
                                                    aria-controls="collapse-40">
                                                    what are the deffirent types of laminate you use in the wood court
                                                    for
                                                    kitchens?
                                                </button>
                                            </h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="collapse-40" class="collapse " aria-labelledby="heading-FAQ-39"
                                                data-parent="#faq2">
                                                <p>Anti Fingerprint Laminate.Anti fingerprint laminates are resistant to
                                                    fingerprints,
                                                    dirt, heat and scratches. ... <br> Matte Finish Laminates. mutt plus
                                                    boards
                                                    Gloss
                                                    Finish Laminates.<br> mirror gloss look like Textured
                                                    Laminate.either wood
                                                    or other
                                                    textures like textile and marple Fire Retardant Laminates</p>
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
                    <div class="tab-pane fade" id="articles">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="blog">
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
                                            <a class="icon-button" href="{{route('blog.single',$Article->slug)}}"><i
                                                    class="fas fa-plus"></i> View More</a>
                                        </div>
                                    </div>
                                    @empty
                                    <p>There is no articles yet, Stay tuned!</p>
                                    @endforelse
                                </section>
                            </div>
                            <div class="tab-pane fade" id="latest-trends">
                                <div class="mt-5 mb-3">
                                    <h2 class="mb-3">Latest Trends in Hardwood Flooring </h2>
                                    <p>
                                        Hardwood Flooring really makes your home very welcoming & beautiful. When properly
                                        cared for, it will stand for a long time giving you warm & positive feelings. (For
                                        wood care click here) <br>
                                        It is also considered a long term investment, as hardwood floors add considerable
                                        resale value to your home. <br>
                                        As classic as wood floors are, they continue to evolve. Nowadays, there are plenty
                                        of designs that can match your taste; modern, Islamic, contemporary, country,
                                        vintage, even ultra-modern. <br>
                                        Here are some of the latest trends you may like some of them according to your style
                                        & personality. <br>
                                        Hardwood Flooring isn't always about protection.<br>
                                        Hand-scraped wood floors in the very beginning in the 1800s, Hardwood floors are
                                        getting finished by hand, no machines are used in this process. Crafters were
                                        scraping thin layers of wood at a time, smoothing out the top surface, leaving the
                                        scraping marks behind, proving to the next generation a piece of wood had been
                                        worked by hand, we all can see hand scrape marks in wood floors surface when we
                                        visit any of the old structures.<br>
                                        Now, however, we have machines and special tools that can sand & polish wood floors
                                        without leaving any marks, one of the common trends now is marking hardwood floors
                                        with these marks to look similar to the hand-scraped floors, giving the look and
                                        feel of the historical wood floors. <br>
                                    </p>
                                    <br>
                                    <h3>Distressed Wood floors :</h3>
                                    <img class="mb-2 icon-image-floors"
                                        src="{{url('public')}}/images/expert-hub/articles/1.png" alt="">
                                    <p>When you visit any old building like a museum, or an old company or commercial shop
                                        which was built in the 1900’s
                                        you can see the wood floors distressed & marked by decades of rough use, the gouges,
                                        nail holes stains, discolouring, and saw marks. <br>
                                        homeowners today are showing their administration for the over when skill rather
                                        than technology was the king.<br>
                                    </p>
                                    <br>
                                    <p>Wood planks are getting wider<br>
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
                                    <img class="mb-2 icon-image-floors"
                                        src="{{url('public')}}/images/expert-hub/articles/2.png" alt="">
                                    <h3>Exotic hardwoods</h3>
                                    <p>Exotic hardwoods with unusual patterns are now available. A long time ago, oak was
                                        the king of wood floors all over the world, now it's time to discover the wealth
                                        that Africa has, mahogany, Iroko, Sapele, teak and many more wonderful types to
                                        discover. <br>
                                        <a href="#">Click here to learn more about exotic wood</a></p>
                                    <h3>Chevron wood Flooring Pattern.</h3>
                                    <img class="mb-2 icon-image-floors"
                                        src="{{url('public')}}/images/expert-hub/articles/3.png" alt="">
                                    <p>Instead of the traditional herringbone pattern, now the chevron pattern is much more
                                        modern & popular, matching a modern or contemporary taste, you will be satisfied
                                        with this pattern more than a traditional herringbone. <br></p>
                                    <br>
                                    <h3>White, Grey & Greyish Colors.</h3>
                                    <img class="mb-2 icon-image-floors"
                                        src="{{url('public')}}/images/expert-hub/articles/4.png" alt="">
                                    <p>The brown tones of wood floors we use where around starts to become an old fashion,
                                        the white, grey, and greyish colours now are the king, not only for your wood floors
                                        but also pergolas, kitchens & dressing rooms. <br>
                                        these colours matching modern ultramodern styles much better them brown &
                                        reddish-brown colours <br>
                                        Finally, we can say what is old on hardwood floors is new again. <br>
                                        Which trend do you love the most? <br>
                                        Contact us on our social media channels <br>
                                    </p>
                                    <a href="#">(Social media links)</a> <br>
                                    <p> Do you know any other trends? <br>
                                        Help us to cover all the popular trends by emailing us your opinion. <br></p>
                                    <a href="mailto:info@thewoodcourt.com">(Send an email to info@thewoodcourt.com)</a>
                                    <p>Do you want to see these trends live? <br>
                                        Visit our store or book an appointment to visit our factory. <br></p>
                                    <a href="{{route('about')}}" target="_blank"> About us</a>
                                    <h5>Which trend do you love the most ?</h5>
                                    <p>we’d love to know</p>
                                    <h5>Do you know any other trends ?</h5>
                                    <p> ..Help us to cover all popular trends by an email or prem contact us.</p>
                                    <h5>Do you want to see these trends live ?</h5>
                                    <p> ..visit our store or book an appointment to visit our factory.</p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layout.scripts')
    <script type="text/javascript">
        $('.filter-items .main-category-filter').click(function () {
            //Hide all open uls
            $('.filter-items .main-category-filter').next('ul').slideUp('fast');
            //SHow the current selected one
            $(this).next('ul').slideDown();
        });
        $('.sub-category-filter, .filter-items .main-category-filter').click(function (e) {
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

    </script>

    @include('layout.footer')
</body>

</html>

@include('layout.header', [
'PageTitle' => 'Expert Hub',
'Description' => 'The Wood Court provides stylish, warm and natural feels all combined together in the perfect design
execution',
'ogType' => 'Website'
])

<body>
    @include('layout.navbar')

    <section class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-4 col-12 ">
                <div class="products-sidebar mb-5" id="expert-hub-sidebar">
                    <ul class="filter-items nav nav-tabs" id="nav-tab" role="tablist">
                        <li>
                            <a class="nav-item nav-link active main-category-filter" id="toturials" data-toggle="tab" href="#nav-toturial">Tutorials</a>
                            <ul class="toturials-sublist nav nav-tabs ml-5">
                                <li><a class="nav-item nav-link sub-category-filter active" data-toggle="tab" href="#wood-care">Wood Care</a></li>
                                <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#installation-methodology">Installation Methodology</a></li>
                                <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#finishing-techniques">Finishing Techniques</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-item nav-link main-category-filter" data-toggle="tab" href="#">Resources</a>
                            <ul>
                                <li><a class="nav-item nav-link sub-category-filter" data-toggle="tab" href="#nav-engineered-floors">Engineered Hardwood Flooring</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-item nav-link main-category-filter" id="FAQs-section" data-toggle="tab" href="#FAQs">FAQs</a>
                            <ul>
                                <li class="sub-category-filter "><a href="#FAQs">Indoor Flooring FAQs</a></li>
                                <li class="sub-category-filter"><a href="#FAQs-kitchens">Kitchens & Cabinets FAQs</a></li>
                                <li class="sub-category-filter"><a href="#FAQs-kitchens">Outdoor Floors & Pergolas FAQs</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-item nav-link main-category-filter" data-toggle="tab"
                                href="#nav-articles">Articles</a>
                            <ul>
                                <li class="sub-category-filter"><a href="#teak-maintenance">Teak Wood Maintenance &
                                        Cleaning</a></li>
                                <li class="sub-category-filter"><a href="#choose-suitable">How To Choose a Suitable Wood
                                        Flooring</a></li>
                                <li class="sub-category-filter"><a href="#outdoor-woodcare">Engineered Floors VS Solid
                                        Floors</a> </li>
                                <li class="sub-category-filter"><a href="#hardwood-flooring">What Is The Latest Trends
                                        In Wood Flooring</a></li>
                                <li class="sub-category-filter"><a href="#hpl-board">What Is The HPL Boards , Why Should
                                        I Use Them?</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content" id="nav-tabContent">

                    <div class="tab-pane fade" id="nav-engineered-floors">
                        <div class="row mt-5 mb-3" id="engineered-hardwood">

                        </div>
                    </div>

                    <div class="tab-pane fade  " id="FAQs">
                        <h2>FAQs</h2>


                    </div>
                    <div class="tab-pane fade" id="nav-articles" role="tabpanel" aria-labelledby="nav-articles">
                        <div class="mt-3" id="Articles">
                            <h2>Articles</h2>

                            <div class="row mt-5" id="teak-maintenance">
                                <h3>Teak Deck Maintenance & The Best Way To Clean Teak</h3>
                                <p>Many people are put off the idea of teak decks by many of the horror stories that
                                    circulate.
                                    In reality, there is no reason to be frightened off and if looked after and cared
                                    for
                                    correctly they can be cared for with minimal hassle and cost. <br>Teak decks are one
                                    of the
                                    solutions for marine and outdoor decking. They also have practical benefits too.</p>
                                <h5>Such as:-</h5>
                                <ul>
                                    <li>Anti-slip – they are a great safety feature as the teak wood is naturally rough
                                        and
                                        therefore is anti-slip under pretty much all weather conditions.</li>
                                    <li>They also provide a good insulating effect on either the interior of the yacht
                                        or under
                                        your feet when walking on outdoors</li>
                                    <p>Correct teak deck maintenance is an important aspect of any outdoor care program
                                        and
                                        looked after correctly a teak deck will last for many years.</p>
                                    <h4>How to clean teak wood</h4>
                                    <p>Teak wood itself is made up of hard and softwood elements and whilst teak is very
                                        resilient it is very easy to drag out the softwood elements leaving ridges of
                                        hardwood.
                                        If cared for correctly a teak deck will wear naturally and should not require
                                        overhauling for between 10 – 15 years. After that it will only need to be sanded
                                        to have
                                        an extra life (most teak decks could be sanded more than 5 times) <br>
                                        Our advice is to wash it regularly as you would with fresh water fresh using
                                        only a soft
                                        brush. <br>Once or twice a year it is recommended you clean teak decking with a
                                        special
                                        teak deck cleaner. <br>
                                        Follow the manufacturers’ directions and make sure you gently scrub across the
                                        direction
                                        of the grain. <br>
                                        We recommend using a nano fiber cleaning pad. <br> <br>
                                        It is also worthwhile to inspect all your caulked seams as these can become worn
                                        over
                                        time – and you don’t want any moisture penetrating between the deck planks, so
                                        it is
                                        important to fix any worn or damaged caulking.
                                    </p>
                                    <h5>What NOT to do;</h5>
                                    <p>Don’t use high-pressure cleaners, they will blast out the soft wood elements of
                                        the teak
                                        leaving ridges and will force you into prematurely sanding your teak decks. <br>
                                        Don’t use hard brushes or household cleaning detergents as again these can
                                        damage the
                                        soft surface. <br>
                                        Always make sure that you use proper teak cleaning solutions on your decks, as
                                        this will
                                        ensure its longevity. <br>
                                        At the end of the day less is best !!
                                    </p>
                                    <h5>Teak Deck Treatments</h5>
                                    <p>It is natural for teak to turn a silvery grey colour and for many, this is the
                                        traditional way to leave teak decks. However some people prefer to keep the teak
                                        looking
                                        like new and a freshly sanded colour.
                                    </p>
                                    <h5>There are a number of options for teak deck maintenance:-</h5>
                                    <p>Traditional Teak Oils :- We don’t like using too much oil on a deck. You have to
                                        regularly apply it as it only lasts between 1 and 3 months and if it turns grey
                                        you have
                                        to reapply <br>
                                        Second option is to apply an outdoor polyurethane coat, it is very easy to use
                                        and can
                                        be applied with a brush and rags. On freshly cleaned (dry) teak simply apply two
                                        coats.
                                        Then depending on wear and tear you can expect to apply a further coat every 6 –
                                        8
                                        months but in this case the deck will be a bit slippery and scratchable </p>
                                </ul>
                            </div>
                            <hr>
                            <div class="row mt-5" id="choose-suitable">
                                <h3>Choosing The Right Hardwood Floors For Your Home</h3>
                                <p>Do you love the feel of natural wood on floors? If yes, here's how to choose the
                                    right
                                    hardwood floor for your home. <br>
                                    This information comes from working closely with customers in and around egypt and
                                    the
                                    Middle east, Connecticut, and answering their questions about what's available and
                                    what's
                                    best for them. Although the choices can get overwhelming, your first consideration
                                    when
                                    selecting a new hardwood floor should be the style and color which determines how
                                    your room
                                    will look and how it will make you feel. <br>
                                    Here are several points you have to take a decision for each:
                                </p>
                                <ol>
                                    <li>The whole design</li>
                                    <p>What you really need to feel out from your floor, and what the style matching
                                        your home
                                        and your personality, there are a wide varity of designs at the wood court
                                        showroom to
                                        choose from, however we can do a special one for you, or implement your custom
                                        design
                                        <br> Here are examples for some designs you may like <br>
                                        Classic designs
                                        Modern designs <br>Ultra modern designs <br> Vintage designs <br> Moroccan
                                        designs <br>
                                        Islamic designs <br> (Go to our product page to see more designs and patterns to
                                        choose
                                        from )
                                    </p>
                                    <li>The wood plank or tile dimension</li>
                                    <p>Today you have a vast array of choices from traditional 5cm width strips up to to
                                        20 cm
                                        width plank floors. For years the 5cm width strip has been the popular choice
                                        for
                                        builders for new home construction. Reason being it is readily available and
                                        cost
                                        effective <br> Also you can choose from 30cm long up to 180 cm planks <br> You
                                        may love
                                        the random width, random length or both</p>
                                </ol>
                                <h4>Hardwood Hardness</h4>
                                <p>This shouldn't come as a surprise, but hardwood comes in different levels of
                                    hardness. The
                                    hardest woods are<b>teak. Pecan, Hard Maple and White Oak.</b> <br>
                                    Hard woods include <b> White Ash, Beech, Red Oak, Yellow Birch, Green Ash and Black
                                        Walnut,
                                        Cherry, Mahogany</b> <br>
                                    The least hard wood or we can tell the soft wood are different types of Pine. <br>
                                    Depending on the level of traffic and activity in your home - including kids and
                                    pets - you
                                    may be more interested in how hard a floor you select.
                                </p>
                                <h4>Two Types of WoodFloors to Choose From</h4>
                                <p>Although we're discussing hardwood flooring, thanks to ongoing product development
                                    you'll
                                    find that hardwood comes in two categories: solid and engineered hardwood. <br>
                                    Let's explore.
                                </p>
                                <ol>
                                    <li> Solid Hardwood</li>
                                    <p>Solid wood flooring is made from one continuous piece of wood and is available in
                                        strips,
                                        and planks. <br>
                                        Generally, a solid hardwood floor is 17mm upto 21mm thick plank. However, it can
                                        be
                                        manufactured in a variety of widths and thicknesses. <br>
                                        Solid hardwood floors are generally for nail down installation or glue down,
                                        floating
                                        technique is not recommended at all for solid wood flooring <br>
                                        The benefit of selecting solid hardwood floors is that you can customize it in
                                        terms of
                                        wood species, stain color as well as finishes. From a finish perspective, you
                                        can opt
                                        for unfinished or prefinished: <br>
                                    </p>

                                    <ul>
                                        <li>Unfinished flooring offers unlimited color stain options.</li>
                                        <li>Prefinished wood flooring features a factory applied finish with a more
                                            staining
                                            colors availability.</li>
                                    </ul>
                                    <p>Because solid wood is sensitive to moisture, you don't want to install it below
                                        ground
                                        level or directly over a concrete slab unless you have an excellent isolating
                                        materials
                                    </p>
                                    <a href="#">Pre-Finished vs. Site Finished Hardwood: Which is Better? <br>
                                        Solid vs. Engineered Hardwood: Which is Better?</a>
                                    <li>Engineered Hardwood</li>
                                    <p>Engineered wood flooring is made from layers of wood stacked and glued together
                                        under
                                        heat and pressure. Usually, there are three to seven layers (plies) stacked with
                                        grains
                                        running perpendicular to each other. The top finish layer can be cut from a
                                        variety of
                                        domestic or exotic hardwood species and is generally factory prefinished with a
                                        polyurethane or an aluminum oxide finish for hardness. <br>
                                        Engineered floors range from 12mm to 20mm thickness and from 6cm to 20cm in
                                        width.
                                        Installation can be glued, floated, nailed or stapled. <br>
                                        All woods expand and contract with heat and humidity. However, engineered wood
                                        is more
                                        dimensionally stable than solid hardwood because the layers keep the movement in
                                        balance. As a result, it is less inclined to swell and shrink and can be
                                        installed in
                                        areas where solid wood can't such as over concrete or in high moisture areas
                                        such as
                                        kitchens, powder rooms and utility rooms, also it is the first choice when
                                        underfloor
                                        heating system exist <br>
                                        <li>Exotic Hardwood</li>
                                        <p>You may also hear the term 'exotic hardwood' used. This refers to hardwood
                                            species
                                            from around the world. Exotic hardwood species come from Australia, Africa,
                                            South
                                            American and the Far East. <br>
                                            Exotic hardwoods offer unique wood graining and color variations. They are
                                            known for
                                            their hardness and unique patterns. Most exotic woods are available in
                                            engineered
                                            wood construction, although some are available in solid hardwood planks as
                                            well.
                                            sapelli, ebony and Jatoba are examples of exotic hardwood.
                                        </p>
                                    </p>
                                </ol>
                                <h4>Wood Stain and Finishing Techniques</h4>
                                <p>Other factors that affect your hardwood floor look include stains and finishing
                                    techniques
                                    such as hand-scraping or brushing that adds a slight texture to the wood. <br>
                                    Hand-scraping or brushing <br>
                                    <i>Hand-scraping or brushing</i> <br>
                                    Hardwood that has either the hand-scraping or brushing is an excellent choice for
                                    active
                                    families with children and pets. These types of floors are usually found in planks
                                    7cm and
                                    wider with the most popular being a 11cm to 13cm see the wood court hand-scrapped
                                    collection
                                    available in the most popular species such as oak, teak, maple, walnut, and cherry.
                                    <br>
                                    Below you see a hand-scraped or antiqued engineered wood floor by the wood court
                                    <br>
                                    <i>Wood stains </i>
                                    As for stains, browns and grays have been more popular in recent years, especially
                                    the grays
                                    being a favorite in the all modern homes we love now in egypt. <br>
                                    You'll also find dark stains (explore the wood court color collection) <br>
                                    <i>Natural oil vs. polyurethane finish </i>
                                    Many of our customers like European Oak floors which often have a natural oil finish
                                    instead
                                    of the traditional polyurethane finish. <br>
                                    While a polyurethane finish simply sits on top of your hardwood floor forming a film
                                    to
                                    protect the hardwood, a natural oil finish penetrates the wood and strengthens the
                                    wood
                                    fibers while enhancing the look of the floor since there is no film covering the
                                    wood. All
                                    wood floors will dent and scratch over time but with a natural oil finished floor
                                    there is
                                    no need for the mess and inconvenience of sanding and finishing as all that is
                                    needed is to
                                    reapply a new coat of oil in the affected areas. <br>
                                    <a href="#">(learn more about types of finishes ) </a>
                                </p>
                            </div>
                            <hr>
                            <div class="row mt-5 mb-3" id="hardwood-flooring">

                                <h3 class="mb-3">Latest Trends in Hardwood Flooring</h3>
                                <p>
                                    Hardwood Flooring really makes your home very welcoming & beautiful , when cared For
                                    , it
                                    will stand for long time giving you worm & positive Feelings , (For wood care click
                                    here)
                                    It is also considered as a long term investment , as Hard-wood Floors add
                                    considerable
                                    resale value to your home .<br>
                                    As clamic , as wood floors are , It continue to evolve , nowtime , there are plenty
                                    of
                                    design which can match your taste modern , clamic , contemporary , country , vintage
                                    , even
                                    ultra-modern
                                    Here are some of the latest trends you may like some of them according to your style
                                    &
                                    personality .<br>
                                    Although Fashion and design a rale in the trends , Performance , matters too ,
                                    whatever the
                                    design is , it is made out of natural hardwood which care room there , living &
                                    breathing
                                    entities we are all yamiliar & comfortable with
                                </p>
                                <br>
                                <p>
                                    Hardwood Flooring isn't always about protection .
                                    Hand-scraped wood floors in the very beginning in 1800s , Hard wood floors are get
                                    finished
                                    by hand , no machines are used in this procern crafters were scraping thin layers of
                                    wood
                                    all a piece used of lomter , smoothing out the top surface , leaving the scraping
                                    marks
                                    behind , proving to next generation a piece of wood had been worked by hand , we all
                                    can see
                                    hand scrape marks in wood floors surface when we visit any of the old structures
                                    now , however we have machine and special tools that can sand & polish wood floors
                                    without
                                    leaving any marks , one of the common trends now is menuta cluing hand wood floors
                                    with
                                    these marks to look similar to the hand-scraped floors , giuling the look and feed
                                    of the
                                    historical wood floors
                                </p>
                                <br><br>


                                <h3>Distressed Wood floors :</h3>
                                <p>When you visit any old building like a museur , or an old company or commercial shop
                                    which
                                    was built in the 1900’s you can see the wood floors distressed & marked by decades
                                    of rough
                                    use , the gouges , nail holes stains , discoloring , and saw marks .<br> homeowners
                                    today
                                    are showing their administration for the over when skill rather than technology was
                                    the king
                                    .</p>
                                <br>
                                <p>wood planks are getting wider . <br>
                                    Remember when you visit grandpa , the wood floors pieces are about 2 to 3 cm width ,
                                    and
                                    15-20 cm length , each piece is installed perpendicular to the other giving a
                                    herringbone
                                    pattern , later on , the piece get wider and taller , and the smaller one become an
                                    old
                                    fashion , the width increased to about 6-8 cm and the length increased to about
                                    35-40 cm ,
                                    Now , one of the latest trends is wide planks , or extra wide planks , people
                                    preture to
                                    install planks of width about 12-15 cm and to 20cm and length reaches to 180 cm
                                    .<br> Also
                                    installing mixed width planks together giving a very nice result in your home .</p>
                                <br>
                                <p>Exotic hardwoods with unused patterns , are now available time ago , oak was the king
                                    of wood
                                    floors all over the world , now it's time to discover the wealth that alnice have ,
                                    mahogany
                                    , Iroka , sapeli , tails bete and much more wonderful types to discover .
                                     <a href="#">here to learn more about exotic wood</a>
                                    </p>

                                <h3>Chevron wood Flooring Pattern</h3>
                                <p>instead of the traditional herringbone pattern , now the chevron pattern is much more
                                    modern
                                    & popular , matching a modern or contemporary taste , you will be satisfied with
                                    this
                                    pattern more than a traditional herringbone .
                                    <br> white , grey & greyish colors . <br>
                                    The brown tones of wood floors we use where around starts to become an old fashion ,
                                    the
                                    white , grey , and greig colors now is the king not only your wood floors bat also
                                    pergolas
                                    , kitchens & dressing rooms . <br>
                                    these colors matching a modern ultramodern styles much better them brown & reddish
                                    brown
                                    colors. <br>
                                    Finally , we can say what is old on hardwood floors is new again .
                                </p>
                                <br>
                                <div>
                                    <h5>Which trend do you love the most ?</h5>
                                    <p>we’d love to know</p>
                                    <h5>Do you know any other trends ?</h5>
                                    <p> ..Help us to cover all popular trends by an email or prem contact us.</p>
                                    <h5>Do you want to see these trends live ?</h5>
                                    <p> ..visit our store or book an appointment to visit our factory.</p>
                                </div>
                                <hr>
                            </div>
                            <div class="row mt-5 mb-3" id="hpl-board">
                                <h2 class="mb-3">what is High Pressure Laminates (HPL)<h2>
                                  <h3>High Pressure Laminates (HPL) for Decorative Surfaces</h3>
                                  <p>High Pressure Laminate or HPL, is the direct descendent of the original
                                      plastic laminate. It is considered to be one of the most durable decorative
                                      surface <br>
                                      materials and is available with special performance properties including
                                      chemical, fire and wear resistance. Special grades of HPL can be postformed
                                      around curved edges by application of heat and restraint. <br>
                                      <br>
                                      HPL is produced by saturating multiple layers of kraft paper with phenolic
                                      resin. A layer of printed décor paper is placed on top of the kraft paper
                                      before pressing.<br>
                                      The resulting sandwich is fused together under heat and pressure (more than
                                      1,000 PSI). Because phenolic and melamine resins are thermoset plastics<br>
                                      , the curing process transforms the resin into plastic by a cross linking
                                      process that converts the paper sheets into a single, rigid laminated
                                      sheet.<br>
                                      Thermosetting creates strong, irreversible bonds that contribute to its
                                      durability.
                                      <br>
                                      High pressure laminate is laminated to a composite panel utilizing a variety
                                      of adhesives. Particleboard or MDF are the preferred substrate<br>
                                      because they provide a stable, durable, consistent and economical
                                      foundation. Due to its durability, high pressure laminates are a common
                                      choice for <br>
                                      horizontal surfaces including flooring, countertops and desktops. <br>

                                      High pressure laminate (HPL) countertops aren't just for kitchens; they can
                                      stand up to the rigorous demands of science labs and classrooms.<br>
                                      It also performs well in horizontal and vertical applications for high
                                      traffic settings such as hospitality, office furniture, healthcare, retail
                                      casework,<br>
                                      commercial interiors and educational facilities.<br> <br>
                                      There are many types or grades of high pressure laminates (HPL) engineered
                                      for specific performance requirements: <br> <br>
                                      <b>General Purpose</b> <br>
                                      Most widely used HPL and suitable for horizontal and vertical surface
                                      applications. Typical thickness range from 0.028” to 0.048” (0.71 to 1.22
                                      mm). <br> <br>
                                      <b>Postforming</b> <br>
                                      Can be formed around curved edges by application of heat and restraint.
                                      Maximum thickness is approximately 0.038” (0.97 mm) and can normally <br>
                                      be formed to radii as small as 3/8” (9.5 mm). <br> <br>
                                      <b>Backer</b>
                                      HPL produced without a decorative face. Available as standard (most common;
                                      slightly thinner than decorative HPL) or regrind (reclaimed HPL with <br>
                                      decorative sheet sanded off). <br> <br>
                                      <b>Special Products</b> <br>
                                      Special purpose high pressure laminates include cabinet liners, high-wear,
                                      fire-rated, electrostatic dissipative and chemical resistant laminates. <br>
                                      In addition to aesthetic attributes, the lamination of particleboard or MDF
                                      with HPL can improve the physical performance of the substrate. <br>
                                      For example, a shelf of ¾” industrial (M-2) particleboard that is 24” long
                                      will carry 45 lbs per square foot (psf) of uniform loading with 0.133”
                                      deflection. <br>
                                      The same shelf can carry 85 lbs psf before reaching the same deflection if
                                      overlaid with HPL.
                                  </p>
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
        $('.sub-category-filter a').click(function (e) {
            var id = $(this).attr('href');
            var $id = $(id);
            if ($id.length === 0) {
                return;
            }
            e.preventDefault();
            var pos = ($id.offset().top - 100);
            $('body, html').animate({
                scrollTop: pos
            }, 1500);
        });

    </script>

    @include('layout.footer')
</body>

</html>

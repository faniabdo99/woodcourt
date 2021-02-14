@include('layout.header', [
'PageTitle' => 'Expert Hub',
'Description' => 'The Wood Court provides stylish, warm and natural feels all combined together in the perfect design execution',
'ogType' => 'Website'
])
<body>
    @include('layout.navbar')
    <section class="hero-section" id="about-us-hero-section">
        <div class="dark-overlap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1>Expert Hub</h1>
                        <p class="mb-5">How To Take Care Of Your Wood Floors?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-4 col-12 ">
                <div class="products-sidebar mb-5" id="expert-hub-sidebar">
                    <ul class="filter-items nav nav-tabs" id="nav-tab" role="tablist">
                        <li>
                            <a class="nav-item nav-link main-category-filter active" data-toggle="tab" href="#nav-FAQs" aria-controls="nav-FAQs">FAQs</a>
                            <ul class="faqs-sublist">
                                <li class="sub-category-filter "><a href="#FAQs">FAQs For Indoor Flooring</a></li>
                                <li class="sub-category-filter"><a href="#FAQs-kitchens">FAQs For Kitchens & Cabinets</a></li>
                                <li class="sub-category-filter"><a href="#FAQs-kitchens">FAQs For Outdoor Floors & Pergolas</a> </li>
                            </ul>
                        </li>
                        <li>
                        <a class="nav-item nav-link main-category-filter" data-toggle="tab" href="#nav-woodcare" aria-controls="nav-woodcare">Wood Care</a>
                            <ul>
                                <li class="sub-category-filter"><a href="#indoor-flooring">How to Take Care Of Your Indoor Flooring</a></li>
                                <li class="sub-category-filter"><a href="#woodcare-kitchen">How to Take Care Of Your  Kitchens & Cabinets</a></li>
                                <li class="sub-category-filter"><a href="#outdoor-woodcare">How to Take Care Of Your Outdoor Floors & Pergolas</a> </li>
                            </ul>
                        </li>
                        <li>
                        <a class="nav-item nav-link main-category-filter" data-toggle="tab" href="#nav-engineered-floors" aria-controls="nav-engineered-floors">Engineered HardWood Flooring</a></li>
                        <li>
                        <a class="nav-item nav-link main-category-filter" data-toggle="tab" href="#nav-installation-methodology" aria-controls="nav-installation-methodology">Installation Methodology</a>
                        </li>
                        <li>
                        <a class="nav-item nav-link main-category-filter" data-toggle="tab" href="#nav-finishing-techniques" aria-controls="nav-finishing-techniques">Finishing Techniques</a>
                        </li>
                        <li>
                        <a class="nav-item nav-link main-category-filter" data-toggle="tab" href="#nav-articles" aria-controls="nav-articles">Articles</a>
                            <ul>
                            <li class="sub-category-filter"><a href="#teak-maintenance">Teak Wood Maintenance & Cleaning</a></li>
                            <li class="sub-category-filter"><a href="#choose-suitable">How To Choose a Suitable Wood Flooring</a></li>
                            {{-- <li class="sub-category-filter"><a href="#outdoor-woodcare">Engineered Floors VS Solid Floors</a> </li> --}}
                            <li class="sub-category-filter"><a href="#hardwood-flooring">What Is The Latest Trends In Wood Flooring</a></li>
                            <li class="sub-category-filter"><a href="#hpl-board">What Is The HPL Boards , Why Should I Use Them?</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-8">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-FAQs" role="tabpanel" aria-labelledby="nav-FAQs">

                  <h2>FAQs</h2>

                    <h3>FAQs For Indoor Flooring</h3>
                  <div class="accordion" id="accordionExample">
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-1">
                              <h2 class="mb-0">
                                  <button class="btn btn-link " type="button" data-toggle="collapse"
                                      data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                      What are the benefits of Wood flooring?
                                  </button>
                              </h2>
                          </div>
                          <div id="collapse-1" class="collapse " aria-labelledby="heading-FAQ-1" data-parent="#accordionExample">
                              <div class="card-body">
                                  <p>*They offer an elegant and timeless look that never goes out of style. <br>
                                      *They also enable a look of spaciousness and lend a warm and authentic feel wherever
                                      they’re installed. <br>
                                      *Wood flooring offers a variety of appearances; from grain patterns to colours,
                                      stains and designs. <br>
                                      *The floors are easy to clean as they do not accumulate a lot of dirt, dust and
                                      debris. <br>
                                      *Wood floors have long-term durability and can last for generations. <br>
                                      *They are a great long-term investment and can increase the value of your property.
                                      <br>
                                      *Properly installed wood floors increase and improve acoustics in the room; suitable
                                      for music rooms and concert halls. <br>
                                      *A healthy floor choice for allergy sufferers.</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-2">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                      Are Wood floors good for homes with pets?
                                  </button>
                              </h2>
                          </div>

                          <div id="collapse-2" class="collapse " aria-labelledby="heading-FAQ-2"
                              data-parent="#accordionExample">
                              <div class="card-body">
                                  <p>*Wood floors are relatively easy to clean and maintain and can live in harmony with
                                      pets. However, they are vulnerable to scratches — hence choosing a harder species of
                                      wood makes it possible to enjoy your gorgeous floor without stressing about your
                                      pets. <br>
                                      *A rustic or distressed finish is particularly a good option since it easily hides
                                      signs of everyday wear and tear. Alternatively, you may want to select wood flooring
                                      with a lighter colour and lower gloss level to help hide additional marks that may
                                      occur. <br>
                                      *also trimming your pets nails regulary will help.</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-3">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3">
                                      Can I expect my wood floor to have colour variations?
                                  </button>
                              </h2>
                          </div>

                          <div id="collapse-3" class="collapse " aria-labelledby="heading-FAQ-3"
                              data-parent="#accordionExample">
                              <div class="card-body">
                                  <p>*Wood is a natural material, each plank features unique details and therefore, you
                                      should expect there will be natural colour variations. <br>
                                      * Most people love these slight variations for added character and charm that they
                                      offer. The higher grade of wood flooring tends to feature a more uniform colour and
                                      minimal character marks whilst a lower grade of flooring contains distinct
                                      variations in colour .</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-44">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4">
                                      I have engineered wood flooring, can they be refinished?
                                  </button>
                              </h2>
                          </div>

                          <div id="collapse-4" class="collapse " aria-labelledby="heading-FAQ-44"
                              data-parent="#accordionExample">
                              <div class="card-body">
                                  <p>*Engineered woods have a variable top layer thickness compared to solid wood.
                                      engineered floors can be refinished — and the and thickness of the top layer is the
                                      major factor contributing to this. here in the wood court we manufacture 9mm thick
                                      top layer which can be sanded and refinished as like as solid wood.</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-4">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-5" aria-expanded="true" aria-controls="collapse-5">
                                      Can wood flooring be installed over ceramic tiles?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-5" class="collapse " aria-labelledby="heading-FAQ-4"
                                  data-parent="#accordionExample">
                                  <p>Yes, it’s possible. If you want to install your floor over ceramic tiles, a
                                      glued-down methodology or floating is the available methods choosing the suitable
                                      method is depending on the type of wood floors you want to install, either
                                      engineered wood or solid wood, also depends on the finish type, prefinished or site
                                      finish, dimension of needed blanks may be a factor, you can contact the wood court
                                      and take a profissional advice.</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-5">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-6" aria-expanded="true" aria-controls="collapse-6">
                                      Is it safe to use hardwood flooring in a kitchen?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-6" class="collapse " aria-labelledby="heading-FAQ-5"
                                  data-parent="#accordionExample">
                                  <p>Wood is a natural product, high temperature and moisture level in the kitchen may
                                      cause it to contract and expand. In this case, engineered wood is your best option
                                      to avoid cupping and gapping. <br>
                                      Occasionally a kitchen may experience spills and stains, but if cleaned up promptly
                                      this will have little effect on your hardwood floors. It is equally important to
                                      stick to a maintenance routine and never allow water to stand upon the surface for
                                      any amount of time.</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-6">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-7" aria-expanded="true" aria-controls="collapse-7">
                                      How do I stop my wood flooring from gapping?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-7" class="collapse " aria-labelledby="heading-FAQ-6"
                                  data-parent="#accordionExample">
                                  <p>Gapping is fairly normal during the winter season due to change in humidity of the
                                      room which causes wood to dry out and shrink. To combat the issue, use a humidifier
                                      during winter months to keep your home within the required temperature — as long as
                                      humidity level is in between 35-50%. <br>
                                      Depending on your wood selection, certain species tend to contract and expand more
                                      than others.<br>
                                      Using an engineered wood floor will reduce the appearance of gapping as it is more
                                      dimensionally stable than solid wood</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-7">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-8" aria-expanded="true" aria-controls="collapse-8">
                                      Can I put wood flooring over an existing floor?
                                  </button>
                              </h2>
                          </div>
                          <div class="card-body">
                              <div id="collapse-8" class="collapse " aria-labelledby="heading-FAQ-7"
                                  data-parent="#accordionExample">
                                  <p>In some instance, wood can be glued down over existing floors such as: laminate,
                                      vinyl, wood floors, and even some types of tile. <br>
                                      The existing floor has to be relatively smooth, free of major imperfections and
                                      fully adhered to the sub-floor. <br>
                                      It is important that the installer follows the manufacturers recommended.</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-8">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-9" aria-expanded="true" aria-controls="collapse-9">
                                      Is a solid wood flooring better than an engineered wood floor?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-9" class="collapse " aria-labelledby="heading-FAQ-8"
                                  data-parent="#accordionExample">
                                  <p>No. The thicker and better quality engineered woods will last for years and years and
                                      can be refinished once or twice. <br>
                                      Also, the technology and factory applied, UV-cured urethane finishes with melamine
                                      that are used today by the wood court makes a really tough & durable finish and is
                                      available on both engineered and solid wood floors. <br>
                                      engineered and solid wood floors. Engineered wood floors are also much more
                                      dimensionally stable than solid hardwood flooring so they can be used in many
                                      situations where solid wood is not recommended. <br>
                                      click here to learn more about the deffirence between engineered and solid wood
                                      floors.</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-9">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-10" aria-expanded="true" aria-controls="collapse-10">
                                      Can I use a paste wax on my hardwood flooring?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-10" class="collapse " aria-labelledby="heading-FAQ-9"
                                  data-parent="#accordionExample">
                                  <p>Today's wood floors do not require a paste wax to the finish and paste waxes should
                                      not be used. Most hardwood floors today have some type of urethane finish and will
                                      cloud up and become sticky if a paste wax is applied to the finish</p>
                                  <p>click here to learn about floor care</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-10">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-11" aria-expanded="true" aria-controls="collapse-11">
                                      What is the difference between prefinished and unfinished flooring?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-11" class="collapse " aria-labelledby="heading-FAQ-10"
                                  data-parent="#accordionExample">
                                  <p>The prefinished hardwood floor is sealed with multiple coats of finish at the
                                      factory.</p>
                                  <p>The finish coats typically contain aluminum oxide, the second hardest substance next
                                      to diamond, to provide a hard-wearing protective finish.</p>
                                  <p>Unfinished flooring must be finished on site after installation takes place.</p>
                                  <p> Aluminum oxide cannot beused in the finish on site because the longer drying time
                                      causing the aluminum oxide particles to sink to the bottom of the finish.</p>
                                  <p>Site-finished floors usually are better at protecting against above floor moisture.
                                  </p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-11">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-12" aria-expanded="true" aria-controls="collapse-12">
                                      Can a hardwood floor be floated?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-12" class="collapse " aria-labelledby="heading-FAQ-11"
                                  data-parent="#accordionExample">
                                  <p>Engineered hardwood floors can be floated, but not solid hardwood floors, due to high
                                      expanding and contracting coofient of solid wood floors, and bad dimensional
                                      stability</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-12">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-13" aria-expanded="true" aria-controls="collapse-13">
                                      How does moisture affect my hardwood flooring?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-13" class="collapse " aria-labelledby="heading-FAQ-12"
                                  data-parent="#accordionExample">
                                  <p>Moisture can cause many different problems for a hardwood floor, such as cracking,
                                      cupping, and crowning</p>
                                  <p>. Over time, excessive moisture will destroy a wood floor, so it is suggested not to
                                      use water to clean the hardwood floors and to mop up spills immediately.</p>
                                  <p>click here to learn how to take care of your wooden floors</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-13">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-14" aria-expanded="true" aria-controls="collapse-14">
                                      What are some potential moisture problems I should look out for?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-14" class="collapse " aria-labelledby="heading-FAQ-13"
                                  data-parent="#accordionExample">
                                  There is water caught between the wood flooring and the subfloor if crowing or cupping
                                  occurs. <br>
                                  Crowning is when the center boards are higher than the outer boards. <br>
                                  Cupping is when the outer boards are higher than the center boards, also if any moisture
                                  marks found in any of your walls, sudden black stains on wood floor surface started to
                                  appear in some areas, if you saw any of these, its time to call an expert</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-14">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-15" aria-expanded="true" aria-controls="collapse-15">
                                      When should hardwood floors be installed?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-15" class="collapse " aria-labelledby="heading-FAQ-14"
                                  data-parent="#accordionExample">
                                  <p>well, it depends, if you will install a prefinished wood floors, then the perfect
                                      time for installing is the high end, when every single technition is out of your
                                      home
                                      expect the painter, you may need a painter to fill gaps between the skirtting and
                                      the wall (if founded)
                                      but if you purchased site finish floors, you have to install it a bit earlier, but
                                      do not finish immediatly after installation, minimum 7-12 days are needed befor site
                                      finishing
                                      to let the wood floors reacts withe site conditions, wood moisture and temprature
                                      reach equilibrium state, also in case of glued down installation technique, it
                                      needs time to insure the glue has dried and cured.</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-15">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-16" aria-expanded="true" aria-controls="collapse-16">
                                      What can be used under furniture to prevent it from scratching the floor?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-16" class="collapse " aria-labelledby="heading-FAQ-15"
                                  data-parent="#accordionExample">
                                  <p>Use plastic, foam or felt discs under all the furniture legs.</p>
                                  <p>These can be purchased at many retail stores, and are designed not only to reduce or
                                      prevent scratching, but also to reduce or prevent movement of the furniture all
                                      together.</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-16">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-17" aria-expanded="true" aria-controls="collapse-17">
                                      When to Choose Laminate Flooring
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-17" class="collapse " aria-labelledby="heading-FAQ-16"
                                  data-parent="#accordionExample">
                                  <p>Laminate flooring is an excellent choice when the look and feel of real wood is
                                      desired, but cost is a major concern. </p>
                                  <p>Part of the overall cost savings derived from installing laminate is in labor.</p>
                                  <p>Almost anyone can install a laminate floor and get professional results.</p>
                                  <p>Laminate flooring is an excellent choice for high traffic areas and where damage from
                                      pets is a concern.</p>
                                  <p>It is also an excellent choice for many commercialapplications where scratch damage
                                      is a major concern.</p>
                                  <p>Versatility is another factor to consider when choosing laminate.</p>
                                  <p>If you aren’t trying to get the look of wood, laminate offers stone, metal and
                                      ceramic patterns as well.</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-17">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-18" aria-expanded="true" aria-controls="collapse-18">
                                      When to Choose Engineered Hardwood Flooring?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-18" class="collapse " aria-labelledby="heading-FAQ-17"
                                  data-parent="#accordionExample">
                                  <p>When you need to have real wood, there is no substitute.</p>
                                  <p>Engineered hardwood gives you the beauty of solid wood and the stability of
                                      cross-grained construction</p>
                                  <p> Discerning clients will demand real hardwood when shopping for a new home and if
                                      resale value is a concern, hardwood flooring will give you the highest return on
                                      investment.</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-18">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-19" aria-expanded="true" aria-controls="collapse-19">
                                      What is teak wood better for than other woods in outdoors?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-19" class="collapse " aria-labelledby="heading-FAQ-18"
                                  data-parent="#accordionExample">
                                  <p>While there are many fine, durable, beautiful woods, none hold a candle to teak.</p>
                                  <p>Teak has a very high natural oil content which makes it almost decay-resistant, which
                                      is something that no other wood can boast.</p>
                                  <p>Because of the high oil content, teak is essentially waterproof and does not crack or
                                      warp due to damp climates.</p>
                                  <p>Teak is resistant to termites and other wood pests, which makes it ideal for projects
                                      that are usually vulnerable to termite infestation</p>
                                  <p>Teak also gets to brag that it doesn’t crack or turn colors when exposed to metals,
                                      which makes it great for building long-lasting furniture.</p>
                                  <p>Teak wood has been used to build boat decks — rather, battleships — for centuries
                                      because of its water resistance and strength.</p>
                                  <p>Today, teak is used anywhere that any other wood is, and is popular for creating
                                      bath, spa, pergolas and pool furniture because it allows the natural look of wood
                                      without the weathered appearance or swelling that other woods take on when exposed
                                      to humid environments. </p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <h2 class="my-4" id="FAQs-kitchens">Frequently asked questions for kitchens</h2>


                  <div class="accordion" id="faq2">
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-19">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-20" aria-expanded="true" aria-controls="collapse-20">
                                      What are my countertop options?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-20" class="collapse " aria-labelledby="heading-FAQ-19"
                                  data-parent="#faq2">
                                  <p>You have a lot of different traditional and modern countertop options:
                                      Granite
                                      Marble
                                      Quartz
                                      Wood/butcher block
                                      Stainless steel
                                      stainless steel countertops work well in modern spaces, but this doesn’t mean other
                                      materials won’t look good in contemporary style kitchens!
                                  </p>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-header" id="heading-FAQ-20">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-21" aria-expanded="true" aria-controls="collapse-21">
                                      What is a chef’s kitchen?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-21" class="collapse " aria-labelledby="heading-FAQ-20"
                                  data-parent="#faq2">
                                  <p>A chef’s kitchen is designed for those who often prepare large meals and need a
                                      kitchen design that supports heavy-duty cooking tasks. Essentially,a chef’s kitchen
                                      should be efficient and storage-savvy and have easy-to-clean surfaces.</p>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-header" id="heading-FAQ-21">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-22" aria-expanded="true" aria-controls="collapse-22">
                                      What is the work triangle and why is it important?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-22" class="collapse " aria-labelledby="heading-FAQ-21"
                                  data-parent="#faq2">
                                  <p>The kitchen work triangle refers to the area from the refrigerator to the cooking
                                      range to the sink—the three points are the three corners of the triangle.</p>
                                  <p> There should be easy movement between the three places—and there shouldn’t be too
                                      much distance between them. Basically, the work triangle creates a more efficient
                                      work space.</p>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-header" id="heading-FAQ-22">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-23" aria-expanded="true" aria-controls="collapse-23">
                                      What is an appliance garage?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-23" class="collapse " aria-labelledby="heading-FAQ-22"
                                  data-parent="#faq2">
                                  <p>An appliance garage is a cabinet that is typically installed underneath wall cabinets
                                      or tucked in the corner of a cabinet in a space that would otherwise be unused.</p>
                                  <p>They are used to keep smaller appliances and other items off the countertops, freeing
                                      up more workspace.</p>
                                  <p>Appliance garages can have shutter or cabinetry door fronts and the doors can often
                                      be rolled up like a real garage door.</p>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-header" id="heading-FAQ-23">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-24" aria-expanded="true" aria-controls="collapse-24">
                                      What is integrated kitchen design?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-24" class="collapse " aria-labelledby="heading-FAQ-23"
                                  data-parent="#faq2">
                                  <p>Integrated kitchen design hides appliances or blends them in naturally with the rest
                                      of the room—it creates a clean, uncluttered look and can help modernize a space</p>
                                  <p>It has become more common in kitchens of all different styles and sizes.</p>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-header" id="heading-FAQ-24">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-25" aria-expanded="true" aria-controls="collapse-25">
                                      What is the best place for a kitchen sink?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-25" class="collapse " aria-labelledby="heading-FAQ-24"
                                  data-parent="#faq2">
                                  <p>The sink should be within easy reach of the refrigerator and cooktop/range since you
                                      use them often. It should also be near the trash.</p>
                                  <p>. Keep in mind that there should be about 50-70 cm of counter space on either side.
                                  </p>
                                  <p>. The layout of your kitchen will affect whether it should be placed against a wall
                                      or in the island</p>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-header" id="heading-FAQ-25">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-26" aria-expanded="true" aria-controls="collapse-26">
                                      What is the best kitchen floor material?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-26" class="collapse " aria-labelledby="heading-FAQ-25"
                                  data-parent="#faq2">
                                  <p><b>There are several tile materials that work well in kitchens,
                                          including:</b><br>Stain-resistant porcelain <br>Vinyl <br>granite <br>Wood</p>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-header" id="heading-FAQ-26">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-27" aria-expanded="true" aria-controls="collapse-27">
                                      What questions should I ask my kitchen designer?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-27" class="collapse " aria-labelledby="heading-FAQ-26"
                                  data-parent="#faq2">
                                  <p> <b>When you’re trying to narrow down your choices between a few different kitchen
                                          designers, ask each company questions like:</b> <br>
                                      How long have you been in business?<br>Can you provide references I can
                                      contact?<br>What are past projects you’ve done? Can I see your portfolio? <br> <br>
                                      <b> Once you’ve chosen the company, ask questions such as:</b> <br>
                                      Is an island a good option for my kitchen?<br>If I want to increase the resale value
                                      of my home, what should I add to the kitchen? <br> What kind of cabinetry would work
                                      best with the style of kitchen I want?</p>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-header" id="heading-FAQ-27">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-28" aria-expanded="true" aria-controls="collapse-28">
                                      What is a kitchen backsplash?
                                  </button>
                              </h2>
                          </div>
                          <div class="card-body">
                              <div id="collapse-28" class="collapse " aria-labelledby="heading-FAQ-27"
                                  data-parent="#faq2">
                                  A kitchen backsplash is a pattern of tiles installed on the wall, usually behind the
                                  cooking range and/or sink. <br>
                                  A backsplash provides protection from water damage and grease hazards, but it can also
                                  act as a great focal point.</p>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-header" id="heading-FAQ-28">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-29" aria-expanded="true" aria-controls="collapse-29">
                                      What are features I should be considering for my new kitchen design?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-29" class="collapse " aria-labelledby="heading-FAQ-28"
                                  data-parent="#faq2">
                                  <p>You can—and should—talk to your kitchen design team, but browsing through magazines
                                      to get ideas can be helpful. <br>
                                      <b>Features you may want to consider for your new kitchen are:</b> <br>
                                      Island <br>Lighting <br>New countertops<br>New cabinets (or
                                      refacing)<br>Windows<br>Storage space <br></p>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-header" id="heading-FAQ-29">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-30" aria-expanded="true" aria-controls="collapse-30">
                                      What are the different kitchen styles?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-30" class="collapse " aria-labelledby="heading-FAQ-29"
                                  data-parent="#faq2">
                                  <p>There are plenty of different kitchen styles to choose from. The main ones are
                                      modern/contemporary, transitional, and traditional. <br>
                                      <b>However, there are many variations of these, including:</b> <br>
                                      Country <br>Rustic <br>Shaker <br>Arts and crafts<br>Tuscan<br>And more <br>
                                      Keep in mind that the wood court can customize your kitchen design to fit your
                                      personal tastes. You don’t have to stick with one style. <br>
                                      However you want your kitchen to look, we can make it happen. cotact us to learn
                                      more about the various kitchen styles in more detail.</p>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-header" id="heading-FAQ-30">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-31" aria-expanded="true" aria-controls="collapse-31">
                                      How long will it take to deliver my kitchen?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-31" class="collapse " aria-labelledby="heading-FAQ-30"
                                  data-parent="#faq2">
                                  Depending on how involved the project is, also depends on your kitchen material, it
                                  could be four to six weeks in case of laminate materials <br>
                                  natural wood kitchen may take up to 8 weeks It depends on the specifics. <br>
                                  you can have a more detailed schedule. After your initial design consultation,the wood
                                  court team will be able to give you a better estimate.</p>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-header" id="heading-FAQ-31">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-32" aria-expanded="true" aria-controls="collapse-32">
                                      What is a melamine sheet?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-32" class="collapse " aria-labelledby="heading-FAQ-31"
                                  data-parent="#faq2">
                                  <p>Melamine is particleboard laminated with a thermally fused paper/resin coating to
                                      provide a durable hard surface.<br> Great for making cabinet carcases because it
                                      wipes clean easily. Use it, as well, for shop fixtures or to make an economical
                                      router-table top.<br> Melamine is resistant to scratches, chemicals and staining.
                                  </p>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-header" id="heading-FAQ-32">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-33" aria-expanded="true" aria-controls="collapse-33">
                                      Are melamine cabinets are good quality?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-33" class="collapse " aria-labelledby="heading-FAQ-32"
                                  data-parent="#faq2">
                                  <p>Melamine is a popular plastic material used in modern home cabinetry. <br> It is very
                                      durable and has a wide variety of hue and pattern possibilities. ... <br> Engineered
                                      products using Melamine are less expensive and as reliable as wood. <br> HPL or TFL
                                      is Melamine fused with MDF or Particle Board,which are made from wood chips.</p>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-header" id="heading-FAQ-33">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-34" aria-expanded="true" aria-controls="collapse-34">
                                      What wood is cheapest for cabinets?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-34" class="collapse " aria-labelledby="heading-FAQ-33"
                                  data-parent="#faq2">
                                  <p>Pine. Pine is another popular wood choice by homeowners who are designing their
                                      kitchen cabinets. <br> This wood is very cost effective and is generally the least
                                      expensive of the five most commonly used woods</p>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-header" id="heading-FAQ-34">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-35" aria-expanded="true" aria-controls="collapse-35">
                                      What are cheap kitchen cabinets made of?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-35" class="collapse " aria-labelledby="heading-FAQ-34"
                                  data-parent="#faq2">
                                  <p>In most cases, engineered wood products are used instead because they're just as
                                      reliable and a lot cheaper. <br> The most widely used kinds for cabinet boxes are
                                      constructed from medium density fiberboard (MDF), plywood, particleboard with
                                      melamine</p>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-header" id="heading-FAQ-35">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-36" aria-expanded="true" aria-controls="collapse-36">
                                      Are laminate cabinets cheaper than wood?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-36" class="collapse " aria-labelledby="heading-FAQ-35"
                                  data-parent="#faq2">
                                  <p>Laminate cabinets are generally significantly less expensive than wood cabinets,
                                      making them an attractive option for those looking for a contemporary style and
                                      operating on a budget.</p>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-header" id="heading-FAQ-36">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-37" aria-expanded="true" aria-controls="collapse-37">
                                      Are solid wood cabinets worth the money?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-37" class="collapse " aria-labelledby="heading-FAQ-36"
                                  data-parent="#faq2">
                                  <p>Value – furniture made from solid wood tends to have more value than those made from
                                      engineered wood, though in some cases MDF furniture can be quite pricey. <br> For
                                      homeowners looking to get a better price for their home, adding elements of solid
                                      wood can boost up the price tag</p>
                              </div>
                          </div>
                      </div>

                      <div class="card">
                          <div class="card-header" id="heading-FAQ-37">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-38" aria-expanded="true" aria-controls="collapse-38">
                                      What color cabinets make a kitchen look bigger?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-38" class="collapse " aria-labelledby="heading-FAQ-37"
                                  data-parent="#faq2">
                                  <p>White is your best friend in a small kitchen. It reflects light, enhancing the sense
                                      of space and making the walls recede. <br> When you include white on cabinetry,
                                      countertops, walls, and the ceiling, you create a seamless space without edges or
                                      boundaries</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-38">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-39" aria-expanded="true" aria-controls="collapse-39">
                                      Are wood cabinets better than laminate?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-39" class="collapse " aria-labelledby="heading-FAQ-38"
                                  data-parent="#faq2">
                                  <p>High-pressure laminates are a great choice for kitchen cabinets, but can be on the
                                      pricy side. ... <br> Laminate cabinets are easier to clean than wood, they offer
                                      more durability over time and tend to conceal fewer scratches than solid wood
                                      cabinets and cabinet doors</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="heading-FAQ-39">
                              <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse"
                                      data-target="#collapse-40" aria-expanded="true" aria-controls="collapse-40">
                                      what are the deffirent types of laminate you use in the wood court for kitchens?
                                  </button>
                              </h2>
                          </div>

                          <div class="card-body">
                              <div id="collapse-40" class="collapse " aria-labelledby="heading-FAQ-39"
                                  data-parent="#faq2">
                                  <p>Anti Fingerprint Laminate.Anti fingerprint laminates are resistant to fingerprints,
                                      dirt, heat and scratches. ... <br> Matte Finish Laminates. mutt plus boards Gloss
                                      Finish Laminates.<br> mirror gloss look like Textured Laminate.either wood or other
                                      textures like textile and marple Fire Retardant Laminates</p>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-woodcare" role="tabpanel" aria-labelledby="nav-woodcare">

                  <div class="row mt-5 mb-3" id="wood-care">
                    <h2>Wood Care</h2>
                    <p>In home and office interior designs, the value of wood cannot be denied its timeless visual appeal and natural beauty. If you take proper care of wood floorings, cabinets, installments, and claddings, you can expect them to survive for decades. Let's take a look at the top ways to take care of your wood floorings and cabinets.</p>
                    <div id="indoor-flooring">

                    </div>
                    <h3 class="mb-2">How To Take Care Of Your Indoor Flooring?</h3>
                    <div>
                        <img class="mb-4" src="https://thewoodcourt.com/storage/app/images/events/how-to-take-care-of-your-wood-floors.png" alt="1" width="650" height="550">
                        <p class="mb-4">Wooden Floors Can Be The Highlight Of Any Home. The Natural Strength And Beauty Of Wood Has Been Used For Centuries And To This Day, Remains The Material Of Choice For Flooring.If you’ve stripped back an old Victorian floor, had new solid wood or engineered flooring installed, or even used reclaimed boards, looking after and maintaining them once they’ve been oiled or varnished is key. It’s a simple fact that wooden floor finishes that have been well     maintained will look better and last much longer than those that have not. So, what is the best way to look after and maintain a wooden floor? Well you’ll be pleased to know that it’s not that difficult and doesn’t require a great deal of work. To help we’ve produced a lovely guide to help you keep your wooden floors looking amazing</p>
                        <hr>
                    </div>


                  <div>
                      <h3>Water cleaning</h3>
                      <h4>1. Don't Spill Water to Clean</h4>
                        <img class="mb-3" src="http://thewoodcourt.com/storage/app/public/uploads/ltYOrtTKV30wzAOc30SEEcNOvTRv1KQHY5kbB2Ot.png" alt="1" width="650" height="550">
                        <p class="mb-4">Never ever use a wet mop to clean your wood floor either natural wood or HDF
                            (High density fiber).</p>
                        <br>
                            <h4>2. Use a Damp Mop</h4>
                        <img class="mb-3" src="http://thewoodcourt.com/storage/app/public/uploads/uzYjHMQ5Tt6zyTqJHQqVR9JBzasgGw2eri7PL44n.png" alt="1" width="650" height="550">
                        <p class="mb-4">Use damp mop to remove dust first , to make your floor dust free.</p>
                        <hr> <br>
                        <div>

                            <h3>Additional cleaning</h3>
                            <h4>3. Don't Use Furniture Sprays</h4>
                            <img class="mb-2" src="http://thewoodcourt.com/storage/app/public/uploads/Sj1vFB4I46KpAB5VlX9UEZHYsfp4MfaY0XUjVT1V.png" alt="1" width="650" height="550">
                            <p class="mb-4">Then it is recommended to use oil based cleaners specially made for your
                                wood floors. Once a month</p>
                            <hr><br>
                        </div>

                        <div>
                            <h3>What not to use</h3>
                            <h4>4. Use Oil-Based Cleaners</h4>
                            <img class="mb-2" src="http://thewoodcourt.com/storage/app/public/uploads/xik2fLJjV9m32ipQFLwzvnGN2gd0pKHURPVR55hO.png" alt="1" width="650" height="550">
                            <p class="mb-4">DO NOT use furniture cleaners to clean. Your wood floors will be slippery.
                            </p>
                              <h4>5. Don't Use Chemicals, Acids, or Alcohols</h4>
                            <img class="mb-2" src="http://thewoodcourt.com/storage/app/public/uploads/zQ8AuYXmmmgKTIfm0PatB5JvFigvRXt0rBJV3ifA.png" alt="1" width="650" height="550">
                            <p class="mb-4">Do Not use alcohol, acids ,or chemicals to clean your wood floors. It can
                                damage your wood flooring.</p>
                            <hr><br>
                        </div>


                        <div>
                            <h3>What Prefer to use</h3>
                              <h4>6. Use Microfiber Towel in Direction of the Texture</h4>
                            <img class="mb-2" src="http://thewoodcourt.com/storage/app/public/uploads/2lUhApr6VCLOLaLGB3cFWTjfwnKZT3tjWWbLK6Js.png" alt="1" width="650" height="550">
                            <p class="mb-4">Always wipe parallel to grams direction, as that will clean the grooves much
                                better. Use a microfiber towel to clean your wood floors. It will remove stains, clean
                                your floor & make it shiny.</p>


                                  <h4>7. Remove Spills Immediately</h4>
                            <img class="mb-2" src="http://thewoodcourt.com/storage/app/public/uploads/XISP3gHkBrvIlRTcEIMBqP1dkqN526xOrO7NhiJ9.png" alt="1" width="650" height="550">
                            <p class="mb-4">Remove spills immediately, long exposure to liquids will lead to damage.</p>

                            <h4>8. Don't Forget to Use Coasters </h4>
                            <img class="mb-2" src="http://thewoodcourt.com/storage/app/public/uploads/onw5BJu5gAGuyOpep23IdyyOVhq6MmIN7uSpmPww.png" alt="1" width="650" height="550">
                            <p class="mb-4">Use soft coasters under your furniture to prevent scratches.</p>

                            <h4>9. Keep Your Pets' Nails Trimmed </h4>
                            <img class="mb-2" src="http://thewoodcourt.com/storage/app/public/uploads/vroEA7WRzvrErOlEpIYSXjTEXdpHT3iY74LJcZXN.png" alt="1" width="650" height="550">
                            <p class="mb-4">Regulary clip your pets’ nails to avoid deep scratches.</p>

                            <h4>10. Don't Expose to Too Much Sunlight</h4>
                            <img class="mb-2" src="http://thewoodcourt.com/storage/app/public/uploads/fejAVSLONykgFEG7MdAXeOP0Vv1pdVVYjWkyqKgs.png" alt="1" width="650" height="550">
                            <p>A sun-kissed glow looks great for skin, but not on wood floors, inspect your wood floors once a month, and if there is any discolouration, it's time to apply a fresh top coat.</p>

                            <h4>11. Don't Leave Electronics Powered On</h4>
                            <img class="mb-2" src="http://thewoodcourt.com/storage/app/public/uploads/bpqC8LR9v0fjFkVP7zGwINIYhsCoAfzfbaUK8Bwj.png" alt="1" width="650" height="550">
                            <p>Don't put any electronics directly on the wood floor ,the heat generated from these devices will affect your floors negatively in the long run.</p>

                            <h4>12. Don't Use Multipurpose Cleaner</h4>
                            <img class="mb-2" src="http://thewoodcourt.com/storage/app/public/uploads/AtnAVyfVg1LTVoiQcyjII8G7sLm0I2pC1cx9Bfd2.png" alt="1" width="650" height="550">
                            <p>Don't use the same cleaner for natural wood floors & HDF, each type has its cleaning liquid.</p>

                            <h4>13. Do Ventilate Your Home</h4>
                            <img class="mb-2" src="http://thewoodcourt.com/storage/app/public/uploads/Br5oXoWSbrVSk1zK3IXWg96mZUpLWWYeiJkyvFb6.png" alt="1" width="650" height="550">
                            <p>Ventilate your home, good ventilation will make your wood floors healthy & live longer.</p>

                            <h4>14. Do Keep Your Humidity In-check</h4>
                            <img class="mb-2" src="http://thewoodcourt.com/storage/app/public/uploads/FnoywSowXzTiNnXp40BWtAf0ZemtsU6Cnx4mVgJX.png" alt="1" width="650" height="550">
                            <p>Best atmosphere conditions to make your wood floors healthy is 30% - 50% relative humidity & 15- 25 ℃ temperature. Thankfully, these conditions are comfortable for us too.</p>
                            <ul>
                                <li>Use door mats to protect wood floors from street sand & mud.</li>
                                <li>Always use felt protector pads on the underside of legs of tables and chairs, and
                                    never drag heavy objects across your wood floors.</li>
                                <li>
                                  Every few decades, sound and refinish your wood floor. Typically, solid and
                                  engineered wood floors could be sanded and refinished several times up to 10 times
                                  according to the wooden top width. Sanding and refinishing are typically needed
                                  every about 7-12 years according to age and care. After this process, your natural
                                  wood floors will return like new with the ability to change its color & finish.</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt5" id="woodcare-kitchen">
                        <h5>How to Take Care of Your Kitchen Counters and Cabinets?</h5>
                        <img class="mb-2" src="{{url('public/images/wood-care/kitchens/1.png')}}" alt="1" width="650" height="550">
                        <h5>1. Do Remove Food Spills Immediately</h5>
                        <img class="mb-2" src="{{url('public/images/wood-care/kitchens/2.png')}}" alt="1" width="650" height="550">
                        <p>Clean all food spills from wood surfaces immediately & thoroughly, most foods can damage wood finishes eventually.</p>
                        <h5>2. Do Prevent Spilling Acidic Juices</ph5>
                        <img class="mb-2" src="{{url('public/images/wood-care/kitchens/3.png')}}" alt="1" width="650" height="550">
                            <p>Prevent spilling of acidic food or juices as much as you can on wood surfaces, such as
                                orange juice .</p>
                        <h5>3. Do Use Coasters Under Drinks</h5>
                        <img class="mb-2" src="{{url('public/images/wood-care/kitchens/4.png')}}" alt="1" width="650" height="550">
                            <p>Tea, coffee & other many drinks are great, but will leave a bad-look stain on wood
                                surfaces if they’re not cleaned immediately. </p>
                        <h5>4. Don’t Clean With a Sponge</h5>
                        <img class="mb-2" src="{{url('public/images/wood-care/kitchens/5.png')}}" alt="1" width="650" height="550">
                            <p>When cleaning a wood surface, use a microfiber towel, do not use dish sponge or washing
                                as it may damage wood surfaces. </p>
                            <h5>5. Do Wipe With Water and Soap</h5>
                            <img class="mb-2" src="{{url('public/images/wood-care/kitchens/6.png')}}" alt="1" width="650" height="550">
                            <p>Clean your kitchen cabinets and surface wring clean water & mild soap with a clean ,
                                lint-free rag.</p>
                                <h5>6. Don’t Use Too Much Water</h5>
                                <img class="mb-2" src="{{url('public/images/wood-care/kitchens/7.png')}}" alt="1" width="650" height="550">
                            <p>Use water sparingly and a towel to dry any excess , when water sits , it can penetrate
                                the finish and raise the wood grains up leading to a rough uncleanable surface in future
                                .</p>
                                <h5>7. Do Wipe Parallel to The Grain</h5>
                                <img class="mb-2" src="{{url('public/images/wood-care/kitchens/8.png')}}" alt="1" width="650" height="550">
                            <p>Wipe Parallel to the wood grains direction , remove dust with dry micor-fiber towel , it is
                                your first step to clean your kitchen </p>
                                <h5>8. Don’t Use Wax to Polish</h5>
                                <img class="mb-2" src="{{url('public/images/wood-care/kitchens/9.png')}}" alt="1" width="650" height="550">
                            <p>Always use polish cream monthly to shine your kitchen instead of waxing , wax makes a
                                shiny look but attracts dust.</p>
                                <h5>9. Don’t Overuse Silicon Cleaners</h5>
                                <img class="mb-2" src="{{url('public/images/wood-care/kitchens/10.png')}}" alt="1" width="650" height="550">
                            <p>Be cautious of overuse of surface cleaners & sprays as they may contain silicon, which
                                will make layers & layers order wood surface & results with a pale look with time .</p>
                                <h5>10. Do Use Food-grade Mineral Oil</h5>
                                <img class="mb-2" src="{{url('public/images/wood-care/kitchens/11.png')}}" alt="1" width="650" height="550">
                            <p>When it comes to wooden counter-top , it is very important to use a “Food grade mineral
                                Oil ”.</p>
                                <h5>11. Do Use a Ventilating Fan</h5>
                                <img class="mb-2" src="{{url('public/images/wood-care/kitchens/12.png')}}" alt="1" width="650" height="550">
                            
                            <p>Use a ventilating fan when cooking , it remove the majority of airborne smoke & grease
                                which other wish may be absorbed by wood leading to bad smell & yellowish stains</p>
                        </ul>


                    </div>
                    <hr>
                    <div class="row mt-5" id="outdoor-woodcare">
                        <h3>How to Take Care of wooden pergolas & Outdoor Flooring ?</h3>

                        <p class="mt-3">
                            Wood is a beautiful option for your garden Flooring, under pergola , and outdoor area of
                            your restaurant or cafe , also the wooden pergola itself gives your home privacy & make you
                            have a great time outdoors, the wood grains and variety of colors when beside the wonderful
                            green color of plants . <br> teak wood especially its very durable and has high resistance
                            to outdoor conditions , (sun light , Heat & rain) even when installed directly as a pool
                            decking , needs low maintenance , you just need to give it some attention to keep it as
                            beautiful as day one .
                        </p>
                          <h4>1. Do Sweep Debris Immediately</h4>
                        <img class="mb-2" src="http://thewoodcourt.com/storage/app/public/uploads/ZoYMinuvWQUUD4ZSO0KhjwRnHSKaihAB1i3SVBII.png" alt="1" width="650" height="550">
                        <p>Pick up large debris like paper and fallen tree leaves at once.</p>
                            <h4>2. Do Use a Vacuum Cleaner for Sand</h4>
                         <img class="mb-2" src="{{url('public')}}/images/wood-care/1.png" alt="1" width="650" height="550">
                        <p>Use a vacuum machine to remove dust from the in between grooves, it is much easier than whisking.</p>

                              <h4>3. Do Use Ammonia to Remove Dirt</h4>
                        <img class="mb-2" src="{{url('public')}}/images/wood-care/2.png" alt="1" width="650" height="550">
                        <p>Use a mixture of ammonia & warm water with ratio 1:4 to help you remove all the stuck dirt & debris , by wiping the wood with the mixture using a sponge mop.</p>

                              <h4>4. Do Wipe Parallel to the Grain</h4>
                        <img class="mb-2" src="http://thewoodcourt.com/storage/app/public/uploads                                <img class="mb-2" src="{{url('public/images/wood-care/kitchens/11.png')}}" alt="1" width="650" height="550">
                        grains</p>


                              <h4>5. Do Let Your Wood Dry Completely </h4>
                        <img class="mb-2" src="http://thewoodcourt.com/storage/app/public/uploads/5Q7ak86yCI3nFSB3jheeYxmSQtK3c6zL4zzNcsqa.png" alt="1" width="650" height="550">
                        <p>let your wood either floors or pergola to dry completely , at leave 3-5 hours temperature +15 ℃</p>

                              <h4>6. Do Use Oil-based Cleaners</h4>
                        <img class="mb-2" src="{{url('public')}}/images/wood-care/3.png" alt="1" width="650" height="550">
                        <p>Use a floor cleaner specially made for your hardwood, It will always be on oil-based cleaner, not water or aqua-based.</p>


                        <h3>Oil Cleaning Tips</h3> <br>
                              <h4>1. Do Keep Wood Well-Oiled</h4>
                        <img class="mb-2" src="{{url('public')}}/images/wood-care/4.png" alt="1" width="650" height="550">
                        <p>Teak wood has natural oil that keeps mold down, this natural oil also works as an insect repellent & prevents wood from cracking when exposed to high temperature.</p>

                              <h4>2. Don’t Expose to Too Much Sunlight</h4>
                        <img class="mb-2" src="{{url('public')}}/images/wood-care/5.png" alt="1" width="650" height="550">
                        <p>When wood is exposed to direct sunlight, this oil  gradually by time will evaporate, leaving a bad look with silver-grey discolouration. According to your country's weather, and daily time of direct daily sunlight hours that your wood is exposed to, you will need to reapply oil to teak wood several times a year (between 4-8 times). Also several climatic conditions & high UV index, may cause the teak wood surface to change color silver, then it is also time to reapply teak oil.</p>

                              <h4>3. Do Follow the Grains and Rub Well</h4>
                        <img class="mb-2" src="{{url('public')}}/images/wood-care/6.png" alt="1" width="650" height="550">
                        <p>When applying teak oil, follow the wood grains using a clean rag, and rub in well.</p>

                              <h4>4. Don't Use Too Much Oil</h4>
                        <img class="mb-2" src="{{url('public')}}/images/wood-care/7.png" alt="1" width="650" height="550">
                        <p>Do not apply a heavy layer of oil, 70-100 grams is more than enough for each square meter.</p>


                          <h4>5. Do Wait For Oil to Dry To Avoid Spots</h4>
                        <img class="mb-2" src="{{url('public')}}/images/wood-care/8.png" alt="1" width="650" height="550">
                        <p>After one hour use a clean new rag to remove excess oil and let it completely dry before placing your furniture back to avoid spots.</p>

                          <h3>Bouns Tips</h3>
                            <h4>1. Do Wipe Spills Immediately</h4>
                        <img class="mb-2" src="{{url('public')}}/images/wood-care/9.png" alt="1" width="650" height="550">
                        <p>Always remove any spills immediately, to avoid spots. If you have spots, just apply a small amount of ammonia and it will disappear instantly.</p>

                        <h4>2. Don’t Use Insect Repellants and Anti-rot Agents</h4>
                      <img class="mb-2" src="{{url('public')}}/images/wood-care/10.png" alt="1" width="650" height="550">
                      <p>You don't have to use any insect repellant for teak wood, as teak wood grains are rich with silica , which acts as a natural repellent for insects & bugs. Also, teak wood grains contain natural rubber oil which is resistant to rotting when exposed to extreme conditions.</p>

                      <h4>3. Don't Forget Your Protective Gear</h4>
                      <img class="mb-2" src="http://thewoodcourt.com/storage/app/public/uploads/56SyFhfkqwJQI3NM8WjsFCpQrV4Ovx1DNKcNO8sC.png" alt="1" width="650" height="550">
                      <p>Always wear rubber gloves, eye protection, and a mask while using any chemical materials.</p>





                        <h4>Here are some tips to keep your wood as new</h4>
                        <ul>

                            <li>A mixture of ammonia & warm water with a ratio of 1:4 will help you to remove all the
                                stuck on dirt & debris, by wiping the wood with the mixture using a sponge mop.</li>
                            <li>Teak wood has natural oil that keeps mold down, this natural oil also works as an insect
                                repellent & prevents wood from cracking when exposed to high temperature.</li>
                            <li>When wood is exposed to direct sunlight, this oil gradually by time will evaporate,
                                leaving a bad look with silver-grey discolouration. </li>
                            <li>According to your country's weather, and daily time of direct daily sunlight hours that
                                your wood is exposed to, you will need to reapply oil to teak wood several times a year
                                (between 4-8 times).</li>
                            <li>Always remove any spills immediately, to avoid spots. If you have spots, just apply a
                                small amount of ammonia and it will disappear instantly.</li>
                            <li>You don't have to use any insect repellant for teak wood, as teak wood grains are rich
                                with silica , which acts as a natural repellent for insects & bugs .</li>
                            <li>Also teak wood grains contain natural rubber oil which is resistant to rotting when
                                exposed to extreme conditions.</li>
                            <li>Due to several climatic conditions & high UV index, teak wood surface may change to
                                silver grey color, then it is time to reapply teak oil.</li>
                            <li>Teak wood has natural oil that keeps mold down, this natural oil also works as an insect
                                repellent & prevents wood from cracking when exposed to high temperature.</li>
                            <li>When wood is exposed to direct sunlight, this oil gradually by time will evaporate,
                                leaving a bad look with silver-grey discolouration. </li>
                            <li>According to your country's weather, and daily time of direct daily sunlight hours that
                                your wood is exposed to, you will need to reapply oil to teak wood several times a year
                                (between 4-8 times).</li>
                            <li>When applying teak oil, follow the wood grains using a clean rag, and rub in well.</li>
                            <li>Do not apply a heavy layer of oil, 70-100 grams is more than enough for each square
                                meter.</li>
                            <li>After one hour use a clean new rag to remove excess oil and let it completely dry before
                                placing your furniture back to avoid spots.</li>
                            <li>Always remove any spills immediately, to avoid spots. If you have spots, just apply a
                                small amount of ammonia and it will disappear instantly.</li>
                            <li>You don't have to use any insect repellant for teak wood, as teak wood grains are rich
                                with silica , which acts as a natural repellent for insects & bugs .</li>
                            <li>Also teak wood grains contain natural rubber oil which is resistant to rotting when
                                exposed to extreme conditions.</li>
                            <li>Due to several climatic conditions & high UV index, teak wood surface may change to
                                silver grey color, then it is time to reapply teak oil.</li>
                            <li>Always wear rubber gloves, eye protection, and a mask while using any chemical
                                materials.</li>
                        </ul>
                    </div>
                </div></div>
                <div class="tab-pane fade" id="nav-engineered-floors" role="tabpanel" aria-labelledby="nav-engineered-floors">
                  <div class="row mt-5 mb-3" id="engineered-hardwood">
                    <h2>Engineered Hardwood flooring</h2>
                    <p>the world (engineered) before hardwoods is to indicate that <br> <br>
                        the floor planks are made of multilayer <br> <br>
                        <b>
                            A.base Lawyer <br>
                            B. Top Layer <br>
                            see Fig(1) <br>
                        </b>
                    </p>
                    <ul>
                        <li> <b>(A)the base layer :</b>
                            <p>the base layer is consisting of about 7-9 layers of plywood each layer is banked with
                                the previous one amki-grained [ the grains each layer is 90° related to the previous
                                on ] see Figure (2) This method gives very high dimensional stability and makes the
                                planks also to be installed over any loved subfloor.</p>
                        </li>
                        <li><b>(B) the Top Layer</b>
                            <p>the top layer is the expression wood type , it is bonded to the base layer under high
                                pressure (about 5 KG/cm) and 70°c temperature , this layer is also to be sanded re
                                coated several times [up to more than 6 times ] according to its thickener 4 , 6, or
                                9 mm .</p>
                        </li>
                    </ul>
                    <p>Now we can say engineered wood flooring has more dimensional stability , then deformation in
                        share when exposed to high / low temperature or humidity . be aware of the (antigraned)
                        bottom layer. </p>
                    <h4>Time to talk about finish ?</h4>
                    <p>you can ask for a refinished engineered flooring in which coating are by the menutaclured in
                        factory not by the installer in site <br> <br>
                        this operation is done using very high coating technology [uv] technology , as the protect
                        are coated with polymers which changes from liquid slate to violet rays were the leaders &
                        make it anti-scratch , more durable , and smoother as whrobe operation is done inside a(uv)
                        coating live not exposed to there are no dust sticky to the sarlace and decreame smoother .
                        <br> <br>
                        at least (2) sealing eates , and one layer of (anti-scratch) top coat are applied to
                        engineered planks , in addition to staining layer (if needed) which is applied on wood
                        before applying the bottom and top layers , so it is guaranteed that under bad wrage , the
                        color not also to be removed Fig.3
                    </p>
                    <h4>Comparison hardwood solid & engineered </h4>
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td>wear layer the layer above the tongue and groove,</td>
                                <td>4,6,9 as per reavert can be renewed several times ace yo wear layer thickness
                                </td>
                                <td>from [6-9] mm upon request can be renewed several times over to wear layer
                                    thickness</td>
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
                            <t>
                                <td>Pre Finish</td>
                                <td>Present can be installed pre finish width all installation teah</td>
                                <td>absent(can't be installed pre finished expect in very rare conditions )</td>
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
                <div class="tab-pane fade" id="nav-installation-methodology" role="tabpanel" aria-labelledby="nav-installation-methodology">
                  <div class="row mt-5 " id="installation-methods">
                  <h2>Installing Methodology</h2> 
                    <h3>installing the wood floors</h3>
                    <ol>
                        <li>
                            <h4>Nailed down installing technique.</h4>
                            <p>most common & traditional way to install wood floors wood tiles or planks are to be
                                installed by nailing down on wooden subfloors , the nails are incline vertical ,
                                paring from wood side directly fixing it to the subfloors a dram-noise is heard
                                while walking on due to empty space under floor. </p>
                        </li>
                        <li>
                            <h4>Gluing down installing technique</h4>
                            <p>bonding the wood floors with the subfloors wring quedown tea is a very good and cheap
                                way to install your wood floors or D3 water beas glue wring Polyurethane (ol based)
                                D4 glue is the best way to ensure lifelong band , as the glue can dissipates shear
                                stream restaurant because at the different expand coaticient between the wood & the
                                concrete tiles or ceramic tiles ,no drum-noise is heard out all .you will get
                                lifetime guarantee against debonding from when purchasing from the wood court</p>
                        </li>
                        <li>
                            <h4>Floating installation technique</h4>
                            <p>installing your floors using this technique make it very easy to maintain as you can
                                replace any damaged piece early , the wood floors are flooded over the subfloor ,
                                royale the lem sheet with 2mm thickness is placed between wood & subfloor to isolate
                                moisture and deareane sowels when walking on , this technique also makes it very
                                easy to uninstall your wood floor and use it again in another place , leaving the
                                subfloor without any damage.</p>
                        </li>
                        <hr>
                    </ol>
                    <h3>Installation : </h3>
                    <ol>
                        <h5>(A) sub-floors :</h5>
                        <li>
                            <h4>wooden sub floor</h4>
                            <p>In this type of subfloor , wooden beams made of red pine wood with 5cm square section
                                or 5cm by 4cm rectangular section are installed with 25 to 35 pieces of concrete to
                                leave the floor , fixed with metal fixtures and concrete to be bended with the
                                floor. then 1.6cm by 10cm section of some wood type owe installed with about 2-10 cm
                                spaces in opposite direction to be a top subfloor laid in which wood floor fixation
                                takes place . <br>this is the traditional sub flooring used for more than loo years
                                ago , always used uptill now in nail down installation technique , </p>
                        </li>
                        <li>
                            <h4>wood on tiles sub Floor</h4>
                            <p>in this type , we use concrete tiles , mosaic tiles , low quality ceramic tiles
                                instead of wood for leaving process , tiles are installed regularly and flush on
                                concrete , are fixed on it , this method also is used for nailed down installation
                                technique </p>
                        </li>
                        <li>
                            <h4> Concrete-based tiles subfloor</h4>
                            <p>used always for glue down & floating installation technique , mosaic or ceramic tiles
                                are installed directly using concrete , for leaving them wood floors are glued down
                                on it floated on it using polythene sheets to prevent humidity , temperature , sound
                                .</p>
                        </li>
                        <hr>
                    </ol>
                </div>
                </div>

                <div class="tab-pane fade" id="nav-finishing-techniques" role="tabpanel" aria-labelledby="nav-finishing-techniques">
                    <div class="row mt-5 " id="finishing-techniques">
                        <p>When it comes to choosing hardwood floors, & the question is not  only solid or engineered wood Flooring, but also , site- Finish or pre finished Flools? .
                            which one is better? and why ?
                            well, each type has its benefits 
                            </p>
                            <h3>1.Site Finish:</h3>
                            <p>When you go for site- Finish wood floors, then you are purchasing wood floors which will be shipped to your home unfinished  , to be Sanded, possibly stained and then sealed and finished with a top protective layer in your home.
                                This process takes & a bit a long time, produces dust during sanding  , bad smell during coating. 
                                in this type 
                                </p>
                                <ul>
                                    <li>you can choose & either water, oil based polyurethane or natural oil finish</li>
                                    <li>sheen level matte, semi gloss, high gloss</li>
                                    <li> Custom installation patterns, borders, inlayes, medallions faturer </li>
                                    <li>Refinishing is available.</li>
                                    <li>In addition to square edges, or bucked edges</li>
                                </ul>
                                <p>Traditionally, you choose sile-finishing when time isn't critical new construction and nobody lives in site (to avoid dust) it Takes long time . (4-6) days to send and clean wood floors , ensure the site is clean , environment is stable within site , applying stain and top coating ( about 3-4 ) coats , and wait each application to dry <br> <br>
                                    Remember , no one can go through the site during the whole process , the smell of  finishing is not pleased at all . <br> <br>Available finishes with site finishing 
                                </p>
                                <ol>
                                    <li> Oil based polyurethane:</li>
                                    <p> -Offensive odor <br>
                                        -Not expressive  [ moderately expensive ] <br>
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
                                <p>
                                    When you get site-finished floors you get seamless to however , with weather savings, graying from high temp , humidity, to low & vice versa , this option fade away , as wood is a living product , it expands and contracts leading to visible joints  
                                    </p>
                                    <h2>2. Pre-Finished:</h2>
                                    <p>In the last 25 years, prefinished Floors started to grow, as harduratth Floors manufacturing become more technical in this <br>
                                        Case, the Floor finishing is part of the manufacturer Job,
                                        & the product shipped to your home finished 2 ready to be installed ..
                                        </p>
                                        <ul>
                                            <li>surface is more durable and anti-scratch due to aluminium oxide and diamond finish</li>
                                            <li>installation is faster & easier  dusten. You can walk in and put Furniture immediately.</li>
                                        </ul>
                                        <h4>Durability :</h4>
                                        <p> when the floor manufacturer Finished the floor, it uses special Finished lines, which create <br>
                                            Perfect environment to apply powerful chemical scalier such as alumerian & tilenum oxides embedded in a uv-cured urethane Coat <br>
                                            the perfect <br>
                                            the result is harder than anything applied in site the finish lasts bager &
                                            Carries a better warranty for the homeowner. <br>
                                            easier installation: <br>
                                             Requires no sanding, no slaening , no sealing no top Coat as all are pre-done  in our factory You Just need  your Floors to be installed  then you can walk on immediately! <br>
                                             easier maintenance : <br>
                                            due to durable Finish, you will not need to refinish your Floor before a long time, however, you can easily replace damaged pieces, or refinish with sanding & Coating as if you have installed site finish Floors.
                                            </p>
                                            <h4>pre-Finished Floors have beveled edges not square ones  not like sile-Finish which can have either square edge or beveled ones</h4>
                                            <h3>3.  UV-Curing Finish</h3>
                                            <p>it is the process in which the coat a changes from liquid state to solid state under ultraviolet rays instantly in a sealed <br><br>
                                              <b>  Finishing Live, no no dust will stick to planks, so it results with  smooth Surface unlike site finish which it is very hard to prevent very fine dust from sticking to floors
                                                daring the long curing time and gran environment</b> <br> <br>
                                                
                                                Sub. Floors preparation: <br>
                                                 For site- Finish , irregularity of subfloor is not a big problem as sending process is enough to regulate the surface <br> <br>
                                                In care of prefinished floors , you need to ensure a perfectly Flat Subfloor scene <br>
                                                you haven't the option of site-sandy
                                                </p>



                                
                     
                  </div>
                  </div>


                <div class="tab-pane fade" id="nav-articles" role="tabpanel" aria-labelledby="nav-articles">
                  <div class="mt-3" id="Articles">
                  <h2>Articles</h2>

                  <div class="row mt-5" id="teak-maintenance">
                      <h3>Teak Deck Maintenance & The Best Way To Clean Teak</h3>
                      <p>Many people are put off the idea of teak decks by many of the horror stories that circulate.
                          In reality, there is no reason to be frightened off and if looked after and cared for
                          correctly they can be cared for with minimal hassle and cost. <br>Teak decks are one of the
                          solutions for marine and outdoor decking. They also have practical benefits too.</p>
                      <h5>Such as:-</h5>
                      <ul>
                          <li>Anti-slip – they are a great safety feature as the teak wood is naturally rough and
                              therefore is anti-slip under pretty much all weather conditions.</li>
                          <li>They also provide a good insulating effect on either the interior of the yacht or under
                              your feet when walking on outdoors</li>
                          <p>Correct teak deck maintenance is an important aspect of any outdoor care program and
                              looked after correctly a teak deck will last for many years.</p>
                          <h4>How to clean teak wood</h4>
                          <p>Teak wood itself is made up of hard and softwood elements and whilst teak is very
                              resilient it is very easy to drag out the softwood elements leaving ridges of hardwood.
                              If cared for correctly a teak deck will wear naturally and should not require
                              overhauling for between 10 – 15 years. After that it will only need to be sanded to have
                              an extra life (most teak decks could be sanded more than 5 times) <br>
                              Our advice is to wash it regularly as you would with fresh water fresh using only a soft
                              brush. <br>Once or twice a year it is recommended you clean teak decking with a special
                              teak deck cleaner. <br>
                              Follow the manufacturers’ directions and make sure you gently scrub across the direction
                              of the grain. <br>
                              We recommend using a nano fiber cleaning pad. <br> <br>
                              It is also worthwhile to inspect all your caulked seams as these can become worn over
                              time – and you don’t want any moisture penetrating between the deck planks, so it is
                              important to fix any worn or damaged caulking.
                          </p>
                          <h5>What NOT to do;</h5>
                          <p>Don’t use high-pressure cleaners, they will blast out the soft wood elements of the teak
                              leaving ridges and will force you into prematurely sanding your teak decks. <br>
                              Don’t use hard brushes or household cleaning detergents as again these can damage the
                              soft surface. <br>
                              Always make sure that you use proper teak cleaning solutions on your decks, as this will
                              ensure its longevity. <br>
                              At the end of the day less is best !!
                          </p>
                          <h5>Teak Deck Treatments</h5>
                          <p>It is natural for teak to turn a silvery grey colour and for many, this is the
                              traditional way to leave teak decks. However some people prefer to keep the teak looking
                              like new and a freshly sanded colour.
                          </p>
                          <h5>There are a number of options for teak deck maintenance:-</h5>
                          <p>Traditional Teak Oils :- We don’t like using too much oil on a deck. You have to
                              regularly apply it as it only lasts between 1 and 3 months and if it turns grey you have
                              to reapply <br>
                              Second option is to apply an outdoor polyurethane coat, it is very easy to use and can
                              be applied with a brush and rags. On freshly cleaned (dry) teak simply apply two coats.
                              Then depending on wear and tear you can expect to apply a further coat every 6 – 8
                              months but in this case the deck will be a bit slippery and scratchable </p>
                      </ul>
                  </div>
                  <hr>
                  <div class="row mt-5" id="choose-suitable">
                      <h3>Choosing The Right Hardwood Floors For Your Home</h3>
                      <p>Do you love the feel of natural wood on floors? If yes, here's how to choose the right
                          hardwood floor for your home. <br>
                          This information comes from working closely with customers in and around egypt and the
                          Middle east, Connecticut, and answering their questions about what's available and what's
                          best for them. Although the choices can get overwhelming, your first consideration when
                          selecting a new hardwood floor should be the style and color which determines how your room
                          will look and how it will make you feel. <br>
                          Here are several points you have to take a decision for each:
                      </p>
                      <ol>
                          <li>The whole design</li>
                          <p>What you really need to feel out from your floor, and what the style matching your home
                              and your personality, there are a wide varity of designs at the wood court showroom to
                              choose from, however we can do a special one for you, or implement your custom design
                              <br> Here are examples for some designs you may like <br>
                              Classic designs
                              Modern designs <br>Ultra modern designs <br> Vintage designs <br> Moroccan designs <br>
                              Islamic designs <br> (Go to our product page to see more designs and patterns to choose
                              from )
                          </p>
                          <li>The wood plank or tile dimension</li>
                          <p>Today you have a vast array of choices from traditional 5cm width strips up to to 20 cm
                              width plank floors. For years the 5cm width strip has been the popular choice for
                              builders for new home construction. Reason being it is readily available and cost
                              effective <br> Also you can choose from 30cm long up to 180 cm planks <br> You may love
                              the random width, random length or both</p>
                      </ol>
                      <h4>Hardwood Hardness</h4>
                      <p>This shouldn't come as a surprise, but hardwood comes in different levels of hardness. The
                          hardest woods are<b>teak. Pecan, Hard Maple and White Oak.</b> <br>
                          Hard woods include <b> White Ash, Beech, Red Oak, Yellow Birch, Green Ash and Black Walnut,
                              Cherry, Mahogany</b> <br>
                          The least hard wood or we can tell the soft wood are different types of Pine. <br>
                          Depending on the level of traffic and activity in your home - including kids and pets - you
                          may be more interested in how hard a floor you select.
                      </p>
                      <h4>Two Types of WoodFloors to Choose From</h4>
                      <p>Although we're discussing hardwood flooring, thanks to ongoing product development you'll
                          find that hardwood comes in two categories: solid and engineered hardwood. <br>
                          Let's explore.
                      </p>
                      <ol>
                          <li> Solid Hardwood</li>
                          <p>Solid wood flooring is made from one continuous piece of wood and is available in strips,
                              and planks. <br>
                              Generally, a solid hardwood floor is 17mm upto 21mm thick plank. However, it can be
                              manufactured in a variety of widths and thicknesses. <br>
                              Solid hardwood floors are generally for nail down installation or glue down, floating
                              technique is not recommended at all for solid wood flooring <br>
                              The benefit of selecting solid hardwood floors is that you can customize it in terms of
                              wood species, stain color as well as finishes. From a finish perspective, you can opt
                              for unfinished or prefinished: <br>
                          </p>

                          <ul>
                              <li>Unfinished flooring offers unlimited color stain options.</li>
                              <li>Prefinished wood flooring features a factory applied finish with a more staining
                                  colors availability.</li>
                          </ul>
                          <p>Because solid wood is sensitive to moisture, you don't want to install it below ground
                              level or directly over a concrete slab unless you have an excellent isolating materials
                          </p>
                          <a href="#">Pre-Finished vs. Site Finished Hardwood: Which is Better? <br>
                              Solid vs. Engineered Hardwood: Which is Better?</a>
                          <li>Engineered Hardwood</li>
                          <p>Engineered wood flooring is made from layers of wood stacked and glued together under
                              heat and pressure. Usually, there are three to seven layers (plies) stacked with grains
                              running perpendicular to each other. The top finish layer can be cut from a variety of
                              domestic or exotic hardwood species and is generally factory prefinished with a
                              polyurethane or an aluminum oxide finish for hardness. <br>
                              Engineered floors range from 12mm to 20mm thickness and from 6cm to 20cm in width.
                              Installation can be glued, floated, nailed or stapled. <br>
                              All woods expand and contract with heat and humidity. However, engineered wood is more
                              dimensionally stable than solid hardwood because the layers keep the movement in
                              balance. As a result, it is less inclined to swell and shrink and can be installed in
                              areas where solid wood can't such as over concrete or in high moisture areas such as
                              kitchens, powder rooms and utility rooms, also it is the first choice when underfloor
                              heating system exist <br>
                              <li>Exotic Hardwood</li>
                              <p>You may also hear the term 'exotic hardwood' used. This refers to hardwood species
                                  from around the world. Exotic hardwood species come from Australia, Africa, South
                                  American and the Far East. <br>
                                  Exotic hardwoods offer unique wood graining and color variations. They are known for
                                  their hardness and unique patterns. Most exotic woods are available in engineered
                                  wood construction, although some are available in solid hardwood planks as well.
                                  sapelli, ebony and Jatoba are examples of exotic hardwood.
                              </p>
                          </p>
                      </ol>
                      <h4>Wood Stain and Finishing Techniques</h4>
                      <p>Other factors that affect your hardwood floor look include stains and finishing techniques
                          such as hand-scraping or brushing that adds a slight texture to the wood. <br>
                          Hand-scraping or brushing <br>
                          <i>Hand-scraping or brushing</i> <br>
                          Hardwood that has either the hand-scraping or brushing is an excellent choice for active
                          families with children and pets. These types of floors are usually found in planks 7cm and
                          wider with the most popular being a 11cm to 13cm see the wood court hand-scrapped collection
                          available in the most popular species such as oak, teak, maple, walnut, and cherry. <br>
                          Below you see a hand-scraped or antiqued engineered wood floor by the wood court <br>
                          <i>Wood stains </i>
                          As for stains, browns and grays have been more popular in recent years, especially the grays
                          being a favorite in the all modern homes we love now in egypt. <br>
                          You'll also find dark stains (explore the wood court color collection) <br>
                          <i>Natural oil vs. polyurethane finish </i>
                          Many of our customers like European Oak floors which often have a natural oil finish instead
                          of the traditional polyurethane finish. <br>
                          While a polyurethane finish simply sits on top of your hardwood floor forming a film to
                          protect the hardwood, a natural oil finish penetrates the wood and strengthens the wood
                          fibers while enhancing the look of the floor since there is no film covering the wood. All
                          wood floors will dent and scratch over time but with a natural oil finished floor there is
                          no need for the mess and inconvenience of sanding and finishing as all that is needed is to
                          reapply a new coat of oil in the affected areas. <br>
                          <a href="#">(learn more about types of finishes ) </a>
                      </p>
                  </div>
                  <hr>
                  <div class="row mt-5 mb-3" id="hardwood-flooring">

                      <h3 class="mb-3">Latest Trends in Hardwood Flooring</h3>
                        <p>
                          Hardwood Flooring really makes your home very welcoming & beautiful , when cared For , it
                          will stand for long time giving you worm & positive Feelings , (For wood care click here)
                          It is also considered as a long term investment , as Hard-wood Floors add considerable
                          resale value to your home .<br>
                          As clamic , as wood floors are , It continue to evolve , nowtime , there are plenty of
                          design which can match your taste modern , clamic , contemporary , country , vintage , even
                          ultra-modern
                          Here are some of the latest trends you may like some of them according to your style &
                          personality .<br>
                          Although Fashion and design a rale in the trends , Performance , matters too , whatever the
                          design is , it is made out of natural hardwood which care room there , living & breathing
                          entities we are all yamiliar & comfortable with
                      </p>
                      <br>
                      <p>
                          Hardwood Flooring isn't always about protection .
                          Hand-scraped wood floors in the very beginning in 1800s , Hard wood floors are get finished
                          by hand , no machines are used in this procern crafters were scraping thin layers of wood
                          all a piece used of lomter , smoothing out the top surface , leaving the scraping marks
                          behind , proving to next generation a piece of wood had been worked by hand , we all can see
                          hand scrape marks in wood floors surface when we visit any of the old structures
                          now , however we have machine and special tools that can sand & polish wood floors without
                          leaving any marks , one of the common trends now is menuta cluing hand wood floors with
                          these marks to look similar to the hand-scraped floors , giuling the look and feed of the
                          historical wood floors
                        </p>
                        <br><br>


                        <h3>Distressed Wood floors :</h3>
                        <p>When you visit any old building like a museur , or an old company or commercial shop which
                          was built in the 1900’s you can see the wood floors distressed & marked by decades of rough
                          use , the gouges , nail holes stains , discoloring , and saw marks .<br> homeowners today
                          are showing their administration for the over when skill rather than technology was the king
                          .</p>
                          <br>
                          <p>wood planks are getting wider . <br>
                          Remember when you visit grandpa , the wood floors pieces are about 2 to 3 cm width , and
                          15-20 cm length , each piece is installed perpendicular to the other giving a herringbone
                          pattern , later on , the piece get wider and taller , and the smaller one become an old
                          fashion , the width increased to about 6-8 cm and the length increased to about 35-40 cm ,
                          Now , one of the latest trends is wide planks , or extra wide planks , people preture to
                          install planks of width about 12-15 cm and to 20cm and length reaches to 180 cm .<br> Also
                          installing mixed width planks together giving a very nice result in your home .</p>
                      <br>
                      <p>Exotic hardwoods with unused patterns , are now available time ago , oak was the king of wood
                          floors all over the world , now it's time to discover the wealth that alnice have , mahogany
                          , Iroka , sapeli , tails bete and much more wonderful types to discover . <a href="#">click
                              here to learn more about exotic wood</a> </p>


                      <h3>Chevron wood Flooring Pattern</h3>
                      <p>instead of the traditional herringbone pattern , now the chevron pattern is much more modern
                          & popular , matching a modern or contemporary taste , you will be satisfied with this
                          pattern more than a traditional herringbone .
                          <br> white , grey & greyish colors . <br>
                          The brown tones of wood floors we use where around starts to become an old fashion , the
                          white , grey , and greig colors now is the king not only your wood floors bat also pergolas
                          , kitchens & dressing rooms . <br>
                          these colors matching a modern ultramodern styles much better them brown & reddish brown
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
                        <p>High Pressure Laminate or HPL, is the direct descendent of the original plastic laminate. It is considered to be one of the most durable decorative surface <br>
                            materials and is available with special performance properties including chemical, fire and wear resistance. Special grades of HPL can be postformed around curved edges by application of heat and restraint. <br>
                           <br>
                           HPL is produced by saturating multiple layers of kraft paper with phenolic resin. A layer of printed décor paper is placed on top of the kraft paper before pressing.<br>
                            The resulting sandwich is fused together under heat and pressure (more than 1,000 PSI). Because phenolic and melamine resins are thermoset plastics<br>
                           , the curing process transforms the resin into plastic by a cross linking process that converts the paper sheets into a single, rigid laminated sheet.<br>
                            Thermosetting creates strong, irreversible bonds that contribute to its durability.
                           <br>
                           High pressure laminate is laminated to a composite panel utilizing a variety of adhesives. Particleboard or MDF are the preferred substrate<br>
                            because they provide a stable, durable, consistent and economical foundation. Due to its durability, high pressure laminates are a common choice for <br>
                           horizontal surfaces including flooring, countertops and desktops. <br>
                           
                           High pressure laminate (HPL) countertops aren't just for kitchens; they can stand up to the rigorous demands of science labs and classrooms.<br>
                           It also performs well in horizontal and vertical applications for high traffic settings such as hospitality, office furniture, healthcare, retail casework,<br>
                            commercial interiors and educational facilities.<br> <br>
                            There are many types or grades of high pressure laminates (HPL) engineered for specific performance requirements: <br> <br> 
                            <b>General Purpose</b> <br>
                            Most widely used HPL and suitable for horizontal and vertical surface applications. Typical thickness range from 0.028” to 0.048” (0.71 to 1.22 mm). <br> <br>
                            <b>Postforming</b> <br> 
                            Can be formed around curved edges by application of heat and restraint. Maximum thickness is approximately 0.038” (0.97 mm) and can normally <br>
                            be formed to radii as small as 3/8” (9.5 mm). <br> <br>
                            <b>Backer</b> 
                            HPL produced without a decorative face. Available as standard (most common; slightly thinner than decorative HPL) or regrind (reclaimed HPL with <br>
                            decorative sheet sanded off). <br> <br>
                            <b>Special Products</b> <br>
                            Special purpose high pressure laminates include cabinet liners, high-wear, fire-rated, electrostatic dissipative and chemical resistant laminates. <br>
                            In addition to aesthetic attributes, the lamination of particleboard or MDF with HPL can improve the physical performance of the substrate. <br>
                            For example, a shelf of ¾” industrial (M-2) particleboard that is 24” long will carry 45 lbs per square foot (psf) of uniform loading with 0.133” deflection.  <br>
                            The same shelf can carry 85 lbs psf before reaching the same deflection if overlaid with HPL. 


                            
                           
                           
                           </p>
                  </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    @include('layout.scripts')
    <script type="text/javascript">
        $('.filter-items .main-category-filter').click(function(){
            //Hide all open uls
            $('.filter-items .main-category-filter').next('ul').slideUp('fast');
            //SHow the current selected one
            $(this).next('ul').slideDown();
        });
        $('.sub-category-filter a').click(function(e) {
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

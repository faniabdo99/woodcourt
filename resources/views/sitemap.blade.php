<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  @forelse ($AllEvents as $Event)
    <url>
       <loc>{{route('events.single',$Event->slug)}}</loc>
       <lastmod>{{$Event->updated_at->format('Y-m-d')}}</lastmod>
       <changefreq>monthly</changefreq>
       <priority>1</priority>
    </url>
  @empty

  @endforelse
   <url>
      <loc>https://thewoodcourt.com</loc>
      <lastmod>2021-01-15</lastmod>
      <changefreq>weekly</changefreq>
   </url>
   <url>
      <loc>https://thewoodcourt.com/about-us</loc>
      <lastmod>2021-01-15</lastmod>
      <changefreq>weekly</changefreq>
   </url>
   <url>
      <loc>https://thewoodcourt.com/our-factory</loc>
      <lastmod>2021-01-15</lastmod>
      <changefreq>weekly</changefreq>
   </url>
   <url>
      <loc>https://thewoodcourt.com/contact</loc>
      <lastmod>2021-01-15</lastmod>
      <changefreq>weekly</changefreq>
   </url>
   <url>
      <loc>https://thewoodcourt.com/events</loc>
      <lastmod>2021-01-15</lastmod>
      <changefreq>weekly</changefreq>
   </url>
   <url>
      <loc>https://thewoodcourt.com/products</loc>
      <lastmod>2021-01-15</lastmod>
      <changefreq>weekly</changefreq>
   </url>
   <url>
      <loc>https://thewoodcourt.com/about-us</loc>
      <lastmod>2021-01-15</lastmod>
      <changefreq>weekly</changefreq>
   </url>
</urlset>
